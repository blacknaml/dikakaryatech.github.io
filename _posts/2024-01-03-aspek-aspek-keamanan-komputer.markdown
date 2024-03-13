---
layout: post
title: "Aspek-aspek Keamanan Komputer"
author: adam
date: 2024-01-03 08:33:33 +0700
image: /assets/img/data-breach.webp
categories: software development
tags: server keamanan-data
related_post: related-posts.html
language: id
excerpt: "Inti dari keamanan komputer adalah melindungi komputer dan jaringannya dengan tujuan mengamankan informasi yang berada di dalamnya. Keamanan komputer sendiri meliputi beberapa aspek, yaitu privacy, integrity, authentication, availability, dan confidentiality."
---
Inti dari keamanan komputer adalah melindungi komputer dan jaringannya dengan tujuan mengamankan informasi yang berada di dalamnya. Keamanan komputer sendiri meliputi beberapa aspek, yaitu privacy, integrity, authentication, availability, dan confidentiality.

### Privacy
Privacy adalah segala sesuatu yang bersifat rahasia (*private*). Inti dari privacy adalah pencegahan agara informasi tersebut tidak diakses oleh orang yang tidak berhak. Contoh dari privacy adalah email atau file-file user yang tidak boleh dibaca orang lain meskipun oleh administrator. Pencegahan yang mungkin dilakukan agara privacy tetap terlindungi adalah menggunakan **teknologi enkripsi**, jadi hanya pemilik informasi yang dapat mengetahui informasi yang sesungguhnya.

### Integrity
Penekanan dalam asepek ini adalah bahwa sebuah informasi tidak boleh diubah kecuali oleh pemilik informasi tersebut. Terkadang data yang telah dienkripsi pun tidak terjaga integritasnya karena ada kemungkinan ciphertext dari enkripsi tersebut berubah. Contoh dari penyerangan terhadap integritas adalah ketika sebuah email dikirimkan, ditengah jalan emai tersebut disadap dan diganti isinya sehingga email yang samapi ke tujuan sudah berubah. Virus dan trojan horse juga dapat dimasukan kedalam aspek ini karena sebuah virus atau trojan horse secara diam-diam dapat mengganti informasi atau file. Cara yang digunakan untuk melindungi integritas adalah menggunakan tool untuk melakukan cek terhadap integritas sebuah data, misalnya *md5sum*.

### Authentication
Ketika login pada suatu sistem informasi yang harus dimasukan adalah user dan password. Pada saat itulah autentikasi dilakukan. Jika user dan password sesuai, login akan diterima, jika tidak, login ditolak dan gagal. Jadi, autentikasi dimaksudkan untuk menjaga agar sebuah informasi hanya dapat diakses oleh orang yang benar-benar mempunyai hak untuk mengaksesnya dengan terlebih dahulu membuktikan bahwa dia memang pengakses yang sah. Proses autentikasi biasanya dilakukan dengan bukti-bukti yang menunjukan bahwa dia memang berhak mengakses informasi tersebut, misalnya *password*, *smartcard*, atau hal lain yang unik dan khusus.

### Availability
Availability atau ketersediaan, aspek ini berkaitan dengan bagaimana sebuah data tersedia pada saat diperlukan. Aspeik ini tidak bisa dilepaskan dari masalah keamanan komputer karena ketika sebuah data atau informasi terlalu ketat dalam pengamanannya, akan menyulitkan dalam mengakses data tersebut. Selain itu, akses yang lambat juga menjadi penghambat terpenuhinya aspek availability. Serangan yang sering dilakukan pada aspek ini adalah *denial-of-service* (DOS), yaitu penggagalan service ketika ada permintaan data komputer sehingga tidak bisa melayani. Banyak hal yang dilakukan untuk membuat serangan denial-of-service dan salah satu cara yang sering dilakukan adalah dengan mengirimkan request yang berlebihan sehingga menyebabkan komputer tidak bisa lagi menampung beban tersebut dan akhirnya komputer down.

### Confidentiality
Confidentiality merupakan data yang diberikan ke pihak lain untuk tujuan khusus tetapi tetap dijaga penyebarannya. Sebagai contoh, informasi yang termasuk dalam kategori ini dan dibatai penyebarannya adalah data yang bersifat pribadi, misalnya nama, alamat, agama, no ktp, status perkawinan, dan sebagainya. Masalah dari confidentiality adalah ketika data tersebut diperlukan untuk membuktikan kejahatan seseorang. Apakah pemegang informasi akan memberikan informasi tersebut ke pihak yang memintanya?. Tentu pihak yang memegang informasi tersebut tidak akan begitu saja memberikannya karena mereka biasanya benar-benar melindungi informasi kliennya sehingga untuk memintanya harus mengunakan surat dari penegak hukum.

Memang, segala usaha untuk melindungi komputer, jaringan dan informasinya telah diupayakan, tetapi sampai kapanpun kejahatan di bidang komputer, terutama kejahatan Internet akan terus terjadi dan bahkan meningkat. Beberapa hal yang menjadikan kejahatan komputer terus terjadi dan cenderung meningkat adalah sebagai berikut:

- Meningkatnya pengguna komputer dan internet.
- Banyak software yang pada awalnya digunakan untuk melakukan audit sebuah sistem dengan cara mencari kelemahan dan celah yang mungkin ada disalahgunakan untuk melakukan scanning sistem orang lain.
- Banyak software-software untuk melakukan *probe* dan penyusupan yang tersedia di internet dan bisa di-download secara gratis.
- Meningkatnya kemampuan pengguna komputer dan internet.
- Desentralisasi server sehingga lebih banyak sistem yang harus ditangani, sementara SDM terbatas.
- Kurangnya hukum yang mengatur kejahatan komputer.
- Semakin banyak perusahaan yang menghubungkan jaringan LAN merekaa dengan internet.
- Meningkatnya aplikasi bisnis yang menggunakan internet.
- Banyak software yang mempunyai kelemahan (bugs).

Banyak hal yang dilakukan dalam rangka melakukan serangan terhadap keamanan komputer. Biasanya yang dilakukan dalam penyerangan adalah menentukan target serangan, kemudian dilakukan *scanning* untuk mengetahui informasi pada mesin target. Dengan informasi tersebut, penyerang akan memanfaatkan kelemahan yang ada untuk mendapatkan login. Setelah berhasil login sebagai user biasa, mereka akan berusaha untuk menguasai sistem dengan menjadi root. Untuk lebih memudahkan dalam menentukan kebijakan keamanan komputer, akan lebih baik jika memahami istilah-istilah yang digunakan dalam serangan keamanan komputer. Berikut adalah istilah-istilah yang berhubungan dengan keamanan komputer.

### Social Engineering
*Social Engineering* adalah salah satu cara yang digunakan untuk mendapatkan password atau referensi untuk melakukan brute force agar penyusup bisa masuk ke dalam sebuah sistem. Biasanya, cara ini bisa dilakukan oleh orang dalam karena mereka mencari password dengan mencari informasi mengenai administrator atau user yang akan dimanfaatkan account-nya. Informasi yang dicari seringkali mengenai hal-hal pribadi yang mungkin bisa menjadi referensi untuk menebak password target. Informasi yang dicari misalnya nama pacar, anak, istri, nomor rekening atau tanggal lahir. Untuk mencegah hal tersebut sebaiknya jangan menggunakan password dari kata-kata yang bisa ditebak, nama pacar misalnya. Kalaupun terpaksa menggunakan kata-kata tersebut karena alasan tersendiri, usahakan agar menuliskan kata tersebut menggunakan kombinasi karakter.

### Eksploit
Eksploit berarti pemanfaatan, yaitu memanfaatkan kelemahan sebuah sistem untuk tujuan-tujuan tertentu diluar penggunaan normal. Kelemahan yang dimanfaatkan bisa berasal dari administrasi sistem ataupun program yang digunakan karena kesalahan programmer. Tujuan pertama dari eksploit adalah untuk mendapatkan hak akses yang tak terbatas (memiliki privilege root). Mendapatkan privilege root adalah tujuan utama, karena melalui previlege tersebut semua hal yang berkaitan dengan sistem tersebut dapat dilakukan, termasuk merusak dan menghancurkan sistem tersebut. Secara umum, eksploit dibagi menjadi dua jenis yaitu:
- eksploit lokal (*local exploit*),
- eksploit remote (*remote exploit*).

Jenis eksploit remote adalah eksploit yang dilakukan dari luar sistem karena penyusup tidak mempunyai otorisasi user. Sedangkan eksploit lokal adalah eksploit yang dilakukan jika penyusup terlebih dahulu masuk sebagai user biasa kemudian memanfaatkan program-program yang bisa dijalankan user untuk mendapatkan privilege root. Seringkali, sebelum melakukan eksploit, penyusup menjalankan port scanner untuk mengetahui port mana saja yang bisa dieksploitasi.

### Trapdoor
*Trapdoor* adalah jebakan yang digunakan untuk menjebak administrator agar menjalankan perintah tertentu yang nantinya dengan perintah tersebut penyusup bisa mendapatkan jalan untuk mendapatkan privilege root. Sebagai contoh, seorang user meminta admin untuk menjalankan program yang tidak bisa dijalankan oleh user biasa, dan ketika admin memasukkan password root, password tersebut telah terekam oleh user tersebut karena sebelumnya telah menjalankan program yang mempunyai tampilan mirip dengan tampilan login untuk menyadap password.

### Backdoor
*Backdoor* seringkali digunakan untuk masuk ke dalam sistem tanpa sepengetahuan administrator, namun hal tersebut bisa dilakukan jika penyusup pernah masuk ke dalam sistem tersebut dengan hak akses root. Pemberian backdoor ini dilakukan untuk mempermudah mereka memasuki sistem tersebut jika jalan yang telah dibuat dengan eksploit telah ditutup oleh administrator. Jadi, tujuan dari backdoor bukan untuk mendapatkan previlege root, tetapi untuk mendapatkan kembali previlege root yang pernah diperoleh. Contoh sederhana dari backdoor adalah mengganti user id dengan user id root yaitu 0.

### Trojan Horse
*Trojan Horse* adalah program gelap yang disertakan dalam sebuah program. Dengan metode yang telah ditentukan oleh programmer, program gelap tersebut akan beraksi tnpa diketahui oleh user administrator. Trojan horse ini jarang sekali terdapat pada program yang bersifat open source karena kemungkinana untuk ketahuan sangat besar. Sebaliknya, untuk program-program yang bersifat closed source, trojan horse ini akan sulit terdeteksi dan kalaupun terdeteksi tidak bisa dihapus kecuali menghilangkan program itu sendiri.

### Account/Root Compromise
*Account Compromise* adalah penggunaan account bukan oleh pemiliknya baik account user biasa atau superuser (root). Account compromise biasanya diperoleh melalui cara yang tidak legal dengan melakukan eksploit secara remote. Jika seseorang dapat melakukan account compromise, ia akan berusaha untuk mencari root compromise dengan melakukan eksploit lokal sehingga dapat melakukan kegiatan apa saja pada sistem tersebut.

### Scanning
*Scanning* adalah usaha yang dilakukan untuk mencari informasi tentang sebuah sistem yang akan dijadikan target. Dengan melakukan scan jaringan, seseorang dapat mengetahui kelemahan dari host target dari informasi yang diperolah, misalnya port yang terbuka, servis yang berjalan atau informasi lain yang mungkin diperlukan untuk memasuki sistem tersebut. Banyak tool scanner yang dapat dimanfaatkan untuk melakukan scan jaringan, diantaranya Xscan, Satan, dan Jakal. Salah satu yang sering disertakan dalam distribusi Linux adalah nmap.

### Packet Sniffer
*Packet Sniffer* adalah suatu alat baik software atau hardware yang digunakan untuk melakukan penyadapan terhadap sebuah informasi atau data yang lewat. Bagi administrator, sniffer dapat dimanfaatkan untuk mencari kelemahan sebuah jaringan atau kebocoran informasi tetapi seringkali packet sniffer dimanfaatkan oleh orang yang tidak bertanggung jawab untuk melakukan penyadapan. Sniffer dalam bentuk hardware, rata-rata mempunyai harga yang sangat mahal. Sedangkan dalam bentuk software banyak tersedia di internet. Salah satu sniffer pada Linux adalah tcpdump dan sniffit yang telah include pada paket distribusi RedHat.

### Brute Force
*Brute Force* adalah serangan yang dilakukan dengan mencoba-coba sembarang password dan membandingkan hasilnya dengan hasil enkripsi dari file password sesungguhnya.

### Vulnerability
Vulnerability adalah keadaan yang menyebabkan potensi serangan terhadap sebuah sistem. Ketika sebuah sistem terkena vulnerability, akan mempermudah serangan-serangan selanjutnya.

### Script Kiddies
*Script Kiddies* adalah mereka yang sedang berusaha untuk menjadi *hacker*. Namun, karena biasanya script kiddies masih dalam tahap belajar atau mungkin malas dengan memrogram sendiri, biasanya mereka mencari script-script penjebol password dari internet, kemudian melakukan copy paste dan menjalankannya untuk menyerang mesin orang lain.


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}
