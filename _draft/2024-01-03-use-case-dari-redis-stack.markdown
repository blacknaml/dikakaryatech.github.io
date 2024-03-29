---
layout: post
language: id
toc: true
title: "Use-Case klasik dari Redis Stack"
author: debi
date: 2024-01-03 15:03:03 +0700
image: /assets/img/cookies-on-the-table.webp
categories: software development
tags: redis database 
related_post: related-posts.html
excerpt: "Redis Stack bisa digunakan untuk banyak skenario yang berbeda. Secara tradisional Redis digunakan sebagai in-memory real-time cache (cache real-time dalam memori) dan sebagai penyimpanan session (session store), atau sebagai penimpanan leaderboards atau message broker."
---
Redis Stack bisa digunakan untuk banyak skenario yang berbeda. Secara tradisional Redis digunakan sebagai in-memory real-time cache (cache real-time dalam memori) dan sebagai penyimpanan session (session store), atau sebagai penimpanan leaderboards atau message broker. Redis Stack diturunkan dari Redis OSS yang sudah lama kita kenal, sehingga bisa menjadi solusi untuk banyak masalah yang muncul. 

Redis Stack sering dianggap sebagai pisau Swiss Army dalam memecahkan berbagai masalah. Beberapa penggunaan klasik dari Redis yang membuatnya populer, antara lain:

> **Caching**
>
> **Session store**
> 
> **Rate limiter**
>
> **Leaderboards**
>
> **Data deduplication**
> 
> **Geo-positioning**
>
> **Message processing and delivery**
>

**Let’s go through each of these in turn.**

### Caching

Kecepatan dan fleksibilitas adalah salah satu fitur yang menjadikan Redis menjadi cache paling populer di dunia. Sebagai data store in-memory, dengan fitur tambahan seperti data persistence, high availability, dan skalabilitas, Redis bisa bertahan dari kegagalan masif, failover replika, dan bisa menggunakan cluster. Redis juga mudah di-setup dan di-maintain, serta mandiri: apa yang kita butuhkan untuk layer caching sudah lengkap dalam satu paket.

Data dapat di-cache menggunakan struktur data yang berbeda, dan masing-masing dengan trade-off yang berbeda. Contoh menyimpan data cache dalam string:

{% highlight bash %}
127.0.0.1:6379> GET "wp:posts:3288"
"O:8:\"stdClass\":23:{s:2:\"ID\";s:4:\"3288\";s:11:\"post_author\";s:1:\"2\";s:9:\"post_date\";s:19:\"2016-03-29 22:15:41\";s:13:\"post_date_gmt\";s:19:\"2016-03-29 21:15:41\";s:12:\"post_content\";s:6519:\"La f\xc3\xadsica cu\xc3\xa1ntica indica que\xc2\xa0la realidad es un conjunto de posibilidades potencialmente infinitas. Con los \xc3\xbaltimos desconcertantes descubrimientos, nos damos cuenta siempre..."
{% endhighlight %}

Pada contoh di atas, satu artikel di blog WordPress di-cache menggunakan struktur data string, dan ini akan mempercepat pengambilan konten postingan daripada mengaksesnya dari database relasional MySQL yang digunakan WordPress. Data cache dibaca dari memori dan kemudian dideserialisasi, setelah itu dapat dikembalikan ke web browser dan dirender ke dalam halaman web.

Alternatif lain adalah menyimpan data dalam cache dengan struktur data Hash. Dengan informasi yang disusun dalam format dictionary, yang berguna jika kita hanya ingin mengambil metadata postingan, misalnya, ketika kita ingin menyajikan daftar artikel untuk dipilih, tanpa effort tambahan yang disebabkan oleh pengambilan dan pemindahan seluruh post/artikel, sehingga menghemat waktu dan bandwidth:

{% highlight bash %}
127.0.0.1:6379> HMGET "wp:posts:3288" post_status post_modified post_date_gmt ID
1) "publish"
2) "2016-03-29 22:15:41"
3) "2016-03-29 21:15:41"
4) "3288"
{% endhighlight %}

Redis cocok untuk berbagai strategi caching (cache-aside, write-behind, write-through, dan read-replica) dan fleksibel dalam hal *typical requirements* yang harus dipenuhi oleh cache, seperti kebijakan kadaluarsa fleksibel (TTL) dan eviction. (LRU atau LFU), time-to-live yang dapat dikonfigurasi dan persistensi, high availability (ketersediaan tinggi), dan skalabilitas yang telah disebutkan.


### Session Store

Protokol HTTP adalah stateless yaitu setiap permintaan bersifat independen dan tidak terkait dengan permintaan lainnya. Server mengabaikan identitas pengguna dan tidak membedakan antara pengunjung baru dan pengunjung lama. Namun bagaimanakah jika kita perlu melacak aktivitas klien di beberapa permintaan? Strategi manajemen session digunakan oleh website untuk menyimpan informasi session pengguna tertentu dan melacak aktivitas mereka. Mari kita lihat alur interaksi pengguna dengan website melalui web browser:

1. Pengguna menjelajahi website tertentu, dan server menerima permintaan tersebut.
2. Server menghasilkan ID acak (misalnya UUID).
3. ID acak ini dikaitkan dengan data session di server.
4. ID acak ini dikirimkan ke klien / web browser dan disimpan dalam cookie.
5. Web browser melampirkan cookie ke setiap permintaan berikutnya.
6. Server mengidentifikasi pengguna lama yang kembali dengan cara dari ID yang disimpan dalam cookie.

Server, dengan mengelola data session yang terkait dengan pengguna, bisa mengambil preferensi pengguna, seperti item yang ditambahkan ke keranjang belanja (terlepas dari apakah pengguna telah mengautentikasi ke website). Informasi session disimpan dalam memori di server aplikasi:

{: .text-center }
{% figure caption:"Application servers sebagai session managers" %}
![Application servers sebagai session managers](/assets/img/session-manager.webp "Application servers sebagai session managers"){: .img-thumbnail }
{% endfigure %}

Cara ini disederhanakan dan berhasil sehingga kita akan mulai menambahkan persyaratan pada servis kita. Menjamin pengalaman pengguna sebaik mungkin, yang merupakan persyaratan umum, menjadi tantangan dalam lalu lintas yang tinggi. Mendistribusikan beban ke beberapa server aplikasi membantu kita mengelola peningkatan beban kerja:

{: .text-center }
{% figure caption:"Load balancer di dalam arsitektur client/server" %}
![Load balancer di dalam arsitektur client/server](/assets/img/without-stickiness.webp "Load balancer di dalam arsitektur client/server"){: .img-thumbnail }
{% endfigure %}

Scalling server aplikasi sangatlah mudah: klien diarahkan oleh load balancer ke server aplikasi yang berbeda dan layanan men-scale beban kerja dengan mengandalkan beberapa mesin yang menerima dan memproses sebagian request pengguna. Namun, pendekatan ini mempunyai kelemahan: data session disimpan secara lokal ke server aplikasi, dan permintaan berikutnya dari pengguna akan dilayani oleh server aplikasi yang berbeda dan akan membuat session baru. Salah satu solusi untuk masalah ini adalah dengan menggunakan sticky session: load balancer mengeluarkan cookie atau melacak informasi seperti alamat IP dan merutekan permintaan ke server tempat session pertama kali dibuat:

{: .text-center }
{% figure caption:"Load balancer dengan sticky session" %}
![Load balancer dengan sticky session](/assets/img/with-stickiness.webp "Load balancer dengan sticky session"){: .img-thumbnail }
{% endfigure %}

Sticky session menyelesaikan masalah dalam mengidentifikasi pengguna yang kembali ke multiple server aplikasi, namun masih ada poin yang perlu ditangani. Bagaimana jika pemilik layanan ingin mengumpulkan informasi tentang session aktif? Dan bagaimana cara mengatasi gangguan layanan yang dapat menyebabkan hilangnya data session? Server aplikasi tidak dikhususkan untuk menyimpan data dan tidak memiliki antarmuka yang sesuai untuk menyajikan informasi session ke layanan lain untuk pengumpulan data dan analisis offline. Manajemen session perlu mengatasi tantangan berikut:

- Aplikasi, server aplikasi, atau load balancer mungkin tidak tersedia, sehingga menyebabkan hilangnya informasi session.
- Mungkin juga ada persyaratan untuk memusatkan data session agar tersedia untuk layanan lain.
- Kontainer khusus session menghasilkan informasi session lokal yang tidak dibagikan ke seluruh server aplikasi berbeda dalam skenario load balancer.

Tantangan-tantangan diatas bisa diatasi dengan Redis Stack sebagai penyimpanan session yang terpusat, terukur, dan memiliki ketersediaan tinggi. Penyimpanan session harus cepat dan memerlukan solusi in-memory. Penulisan juga harus cepat karena session harus sering diperbarui, setidaknya untuk memperpanjang waktu aktif saat pengguna aktif di website:

{: .text-center }
{% figure caption:"Redis Stack sebagai distributed session store" %}
![Redis Stack sebagai distributed session store](/assets/img/distributed-session-store.webp "Redis Stack sebagai distributed session store"){: .img-thumbnail }
{% endfigure %}

Beberapa framework bisa mengelola Redis sebagai penyimpanan session. Beberapa di antaranya:

- Spring dengan modul Spring Session Data Redis
- Express dengan connect-redis npm package
- Flask menggunakan Flask-Session extension

Memiliki penyimpanan session terpusat dengan kemampuan pencarian, query, dan agregasi memungkinkan banyak kasus penggunaan baru. Data yang relevan dapat diambil dari session terbuka (seperti jumlah pengguna yang akan membeli produk tertentu, total harga barang di keranjang belanja terbuka, dan banyak lagi).

### Rate Limiter

Redis memiliki beberapa pilihan untuk memodelkan penghitung menggunakan struktur data inti. Semuanya bisa dihitung – kunjungan ke suatu website, jumlah otentikasi harian atau bulanan, transaksi per hari dan pengguna, jumlah klik pada halaman web, dan sebagainya. Redis adalah solusi yang fleksibel dan efisien ketika digunakan untuk menerapkan penghitung, dan khususnya kebijakan rate limiter, yang menggunakan penghitung secara tersembunyi. Mekanisme rate-limiter melindungi dari lonjakan lalu lintas dalam jangka waktu tertentu, upaya untuk memecahkan password, atau serangan DDoS (distributed denial-of-service). Mekanisme rate-limiter biasanya diterapkan sebelum permintaan diproses oleh server aplikasi dan diterapkan pada lapisan load balancer atau gateway, namun mekanisme tersebut juga dapat diterapkan secara spesifik per layanan, di belakang gateway. Rate-limiter yang diterapkan secara eksternal berguna ketika kita menginginkan kebijakan rate-limiter terdistribusi di beberapa node, seperti dalam kasus ketika gateway API disebarkan sebagai klaster multi-node:

{: .text-center }
{% figure caption:"Redis Stack sebagai rate-limiter" %}
![Redis Stack sebagai rate-limiter](/assets/img/redis-rate-limiter.webp "Redis Stack sebagai rate-limiter"){: .img-thumbnail }
{% endfigure %}

Kita dapat membuat penghitung Redis key untuk setiap menit per pengguna. Setiap kali permintaan masuk, kita akan memperbarui penghitung yang sesuai untuk pengguna yang ditentukan (atau untuk jumlah keseluruhan permintaan), berdasarkan menit saat ini. Untuk memastikan kita bahwa kita tidak  memenuhi seluruh database dengan sampah, kita akan menghentikan masa berlaku key tersebut setelah 1 menit.

Nama key bisa berupa kombinasi identitas pengguna dan menit waktu saat ini. Identitas pengguna dapat dinyatakan sebagai pengidentifikasi sesi, atau sebagai pengidentifikasi API-KEY. Jadi, jika kami memutuskan untuk tetap mengontrol permintaan pengidentifikasi API-KEY yang ditentukan, kami akan memberi nama kunci tersebut {API-KEY}:{MINUTE}. Karena kita selalu kehabisan masa berlaku kuncinya, kita hanya perlu mencatat menitnya; ketika jam bergulir dari 59 ke 00, kita dapat yakin bahwa pembatas lain untuk 59 tidak ada (itu akan berakhir 58 menit sebelumnya).



### Leaderboards

### Data Deduplication

### Geo-Positioning

### Message Processing and Delivery


{% highlight bash %}

{% endhighlight %}


File adalah mekanisme penyimpanan universal, dibangun di sistem operasi perusahaan mana pun dan tersedia dalam bahasa perusahaan apa pun. Pendekatan paling sederhana adalah dengan mengintegrasikan aplikasi menggunakan file.

{: .text-center }
{% figure caption:"Application servers sebagai session managers" %}
![Application servers sebagai session managers](/assets/img/session-manager.webp "Application servers sebagai session managers"){: .img-thumbnail }
{% endfigure %}


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}