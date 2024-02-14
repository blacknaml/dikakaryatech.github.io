---
layout: post
title: "Teknik Pencarian Teks"
author: debi
date: 2023-11-15 07:23:53 +0700
image: /assets/img/extracting-data.webp
categories: software development
tags: scraping data-minning
related_post: related-posts.html
language: id
---

Beberapa teknik pencarian telah dikembangkan, antara lain pencarian teks penuh, pencarian dengan metadata, dan pencarian dengan jaringan semantik.

Pencarian teks penuh merupakan salah satu metode pencarian dokumen berbasis teks dengan mencocokkan kata kunci pencarian tiap dokumen yang selanjutnya akan ditelusuri ke seluruh isi dokumen pencarian. Cara kerja metode ini adalah dengan mencari dokumen yang mengandung kata kunci yang diberikan oleh pengguna. Hasil dari pencarian kemudian diurutkan sesuai frekuensi kemunculan kata dalam dokumen. Semakin banyak kata kunci ditemukan di dalam dokumen, semakin tinggi peringkat dokumen tersebut, yang berarti semakin tinggi kemungkinan dokumen tersebut merupakan dokumen yang dicari.

Hasil pencarian berupa daftar yang sangat panjang, dimana dokumen pada urutan pertama merupakan dokumen yang memiliki peringkat tertinggi. Pengguna harus membuka satu persatu pada daftar dokumen itu untuk dapat menemukan dokumen yang diinginkannya.

Pencarian teks penuh dianggap sebagai salah satu metode pencarian paling praktis dari segi pengoperasian, karena pengguna cukup memasukan kata kunci, kemudian mesin pencari akan mencocokan kata kunci itu ke seluruh dokumen/data yang tersedia. Sayangnya, metode ini memiliki beberapa kelemahan, diantaranya kelemahan linguistik, yaitu tidak dapat menemukan kata yang bersinonim dan berhomonim.

Pencarian dengan metadata adalah lebih baik daripada pencarian dengan teks penuh. Metadata berarti data dari data, yaitu kumpulan kata yang terorganisasi dengan logika AND dan OR. Setiap dokumen diindeks dan dibuat metadatanya. Kata kunci pencarian akan dicocokkan dengan metadata yang telah terbentuk dengan batasan-batasan tertentu sehingga proses pencarian lebih sederhana. Seperti halnya pencarian teks penuh, pencarian metadata memiliki kelemahan dalam hal pencarian kata yang bersinonim dan berhomonim.

Metode yang ditawarkan untuk mengatasi kelemahan proses pencarian di atas adalah metode pencarian semantik. Ada beberapa model yang digunakan untuk pencarian semantik, antara lain *taksonomi*, *weighted tree similariry*, dan *ontologi*.

Taksonomi lebih tepat digunkan untuk menunjukkan hubungan hierarki suatu obyek yang memiliki induk yang luas. Taksonomi memiliki keterbatasan karena kosakata yang terbatas dan tidak fleksibel. Dengan menggunakan ontologi untuk mengorganisasikan informasi, beberapa kata yang terhubung dapat ditemukan, tanpa menghiraukan susunan hierarkinya. Kekuatan kata yang terbentuk secara ontologi bersifat terbuka dan tidak terbatas. Ketika informasi baru terbentuk, informasi tersebut dapat ditambahkan ke ontologi. Struktur *node label*, *arc labeled*, dan *arc-weighted trees* pada *weighted tree similarity* tidak dapat saling berbagi yang kemudian menyebabkan pemborosan dalam sistem penyimpanan. Kelemahan ini dapat diatasi dengan ontologi yang dapat menggunakan kembali struktur data yang telah diciptakan.

Kedua metode tersebut menimbulkan permasalahn lain. Permasalahan yang timbul dalam metode pencarian teks penuh adalah kelemahan linguistik, dimana pengguna harus memasukkan dengan tepat kata kunci agar artikel yang dimaksud dapat ditemukan. Selanjutnya permasalahn yang ditimbulkan oleh pencarian berdasarkan metadata adalah apabila pengguna ingin mencari artikel berdasar kategori. Karena sifatnya yang terbuka, sebuah artikel dapat digabungkan ke lebih dari satu kategori oleh pengguna. Meski pengguna telah menentukan kategori yang tepat namun bisa jadi artikel tersebut ada pada kategori lain.

Kelemahan lainnya terjadi pada operasi pembangkitan meta tag keyword. Meta tag keyword dibangkitkan berdasarkan sebuha fungsi yang menemukan 10 keyword pertama berdasarkan judul artikel, kategori dan link yang akti maupun rusak. Pertanyaanya, bagaimana bila didalam sebuah artikel terdapat lebih dari 10 kategori dan link ? Dengan cara demikian metadata keyword yang dibangkitkan belum dapat mewakili isi sebuah artikel. Metadata yang belum dapat mewakili isi sebuah artikel membuat relevansi pencarian artikel menjadi rendah. Kelemahan lain dari pencarian dengan metadata adalah kelemahan linguistik sebagaimana pencarian full-text.

Untuk mengatasi permasalahan tersebut dan untuk meningkatkan relevansi pencarian artikel, Rahutomo mengusulkan penyusunan metadata yang lebih lengkap dan operasi pencocokan semantik menggunakan metode *weighted tree similarity*. Dalam hal ini metadata yang dibangun tak hanya mengandung operasi AND dan OR, tetapi lebih lengkap karena mengandung informasi semantik semacam ontologi, kecenderungan dan vektor term artikel. Representasi metadata menggunakan standar metadata *weighted tree*. Tree yang dipergunakan memiliki node berlabel, cabang berlabel serta berbobot. Selanjutnya, *weighted tree* dari metadata yang dimasukkan oleh pengguna akan dicocokkan dengan tree yang terdapat didalam sistem dengan menggunakan *weighted tree similarity*.

Hasil penelitian menunjukkan bahwa pencarian teks penuh memiliki kinerja *recall* tertinggi karena dengan menggunakan filter AND maka seluruh term di dalam artikel dijadikan term indeks. Namun teknik ini memiliki nilai percision yang rendah karena perbandingan kata tidak memperhatikan kemunculan term di dalam artikel. Pencarian metadatad terbaik dengan menggunakan filter logika OR, meskipun nilai precisionnya rendah tidak terlalu jauh berbeda dengan dengan pencarian teks penuh untuk kinerja recall-nya. Sedangkan bentuk weighted tree yang lebih lengkap mewakili content dan context memberikan kinerja pencarian yang lebih baik. (Rahutomo Faisal, "Penerapan Algoritma Wighted Tree Similarity untuk Pencarian Semantik Wikipedia", Master Thesis Jurusan Informatika, Surabaya: 2009)

### Metode Pencarian Berdasarkan Konten
Pencarian berdasarkan konten bisa dibagi menjadi *string matching*, *metadata search*, dan *semantic search*.

#### String Matching
String matching adalah proses pencarian semua kemunculan query yang kemudian disebut *pattern* kedalam string yang lebih panjang (teks).

#### Metadata Search

#### Semantic Search


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}