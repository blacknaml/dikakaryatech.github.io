---
layout: post
language: id
title: "Use-Case klasik dari Redis Stack"
author: debi
date: 2024-01-03 15:03:03 +0700
image: /assets/img/cookies-on-the-table.webp
categories: software development
tags: redis database 
related_post: related-posts.html
excerpt: "Redis Stack bisa digunakan untuk banyak skenario yang berbeda. Secara tradisional Redis digunakan sebagai in-memory real-time cache (cache real-time dalam memori) dan sebagai penyimpanan sesi (session store), atau sebagai penimpanan leaderboards atau message broker."
---
Redis Stack bisa digunakan untuk banyak skenario yang berbeda. Secara tradisional Redis digunakan sebagai in-memory real-time cache (cache real-time dalam memori) dan sebagai penyimpanan sesi (session store), atau sebagai penimpanan leaderboards atau message broker. Redis Stack diturunkan dari Redis OSS yang sudah lama kita kenal, sehingga bisa menjadi solusi untuk banyak masalah yang muncul. 

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

Protokol HTTP adalah stateless yaitu setiap permintaan bersifat independen dan tidak terkait dengan permintaan lainnya. Server mengabaikan identitas pengguna dan tidak membedakan antara pengunjung baru dan pengunjung lama. Namun bagaimanakah jika kita perlu melacak aktivitas klien di beberapa permintaan? Strategi manajemen sesi digunakan oleh website untuk menyimpan informasi sesi pengguna tertentu dan melacak aktivitas mereka. Mari kita lihat alur interaksi pengguna dengan website melalui web browser:

1. Pengguna menjelajahi website tertentu, dan server menerima permintaan tersebut.
2. Server menghasilkan ID acak (misalnya UUID).
3. ID acak ini dikaitkan dengan data sesi di server.
4. ID acak ini dikirimkan ke klien / web browser dan disimpan dalam cookie.
5. Web browser melampirkan cookie ke setiap permintaan berikutnya.
6. Server mengidentifikasi pengguna lama yang kembali dengan cara dari ID yang disimpan dalam cookie.

### Rate Limiter

### Leaderboards

### Data Deduplication

### Geo-Positioning

### Message Processing and Delivery


{% highlight bash %}

{% endhighlight %}


File adalah mekanisme penyimpanan universal, dibangun di sistem operasi perusahaan mana pun dan tersedia dalam bahasa perusahaan apa pun. Pendekatan paling sederhana adalah dengan mengintegrasikan aplikasi menggunakan file.

{: .text-center }
![File Transfer Style](/assets/img/file-transfer-style.webp "File Transfer Style"){: .img-thumbnail }



{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}