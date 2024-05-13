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
toc: true
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
String matching adalah proses pencarian semua kemunculan query yang kemudian disebut *pattern* kedalam string yang lebih panjang (teks). String Marching dibagi menjadi dua yaitu *exact matching* dan *heuristic* / *statistical matching*.

##### Exact Matching
Exact matching digunakan untuk menemukan pattern yang berasal dari suatu teks. Contohnya, pencarian kata "pelajar" dalam kalimat "saya seorang pelajar" atau "saya seorang siswa". Sistem akan memberikan hasil bahwa kalimat pertama mengandung kata "pelajar", sedangkan kalimat kedua tidak, meskupan kenyataannya pelajar dan siswa adalah kata yang bersinonim. Algoritma exact matching diklasifikasi menjadi tiga bagian menurut arah pencariannya, yaitu 
- Arah pembacaan dari kiri ke kanan, algoritma yang termasuk kategori ini adalah *Brute Force*, *Morris* dan *Pratt*.
- Arah pembacaan dari kanan ke kiri, algoritma yang termasuk kategori ini adalah *Boyer* dan *Moore*.
- Arah pembacaan yang ditentukan pemrogram, algoritma yang termasuk kategori ini adalah *Colussi* dan *Crochemcore-Perrin*.

##### Heuristic Matching
Heuristic matching adalah teknik yang digunakan untuk menghubungkan dua data terpisah ketika exact matching tidak mampu mengatasi karena ada pembatasan pada data yang tersedia. Heuristic matching dapat dilakukan dengan perhitungan distance antara pattern dengan teks. Contoh heuristic matching berdasarkan distance adalah *string based technique*, *token-based distance*, dan *path-comparisson*. 

#### Metadata Search
Metadata adalah data dari data. Metadata adalah sekumpulan kata yang terstruktut dan teroganisasi dengan logika AND dan OR. Pada metode ini operasi pembandingan kata sedikit dibandingkan pencarian full-text. Tiap-tiap artikel di-indeks dengan dibuat metadatanya. Pencarian dengan metadata adalah tipe pencarian artikel dengan menelusuri metadata suatu dokumen. Pada metode ini operasi pembandingan kata lebih sedikit dibandingkan pencarian teks penuh. Metadata berfungsi sebagai katalog dari sekumpulan dokumen. 

#### Semantic Search
Semantic adalah ilmu tentang makna kata dan kalimat; pengetahuan mengenai seluk beluk dan pergeseran arti kata; bagian struktur bahasa yang berhubungan dengan makna ungkapan atau struktur makna suatu wicara. Semantic network adalah sebuah jaringan yang mewakili hubungan antar konsep. Semantic network biasa digunakan sebagai bentuk representasi pengetahuan. Semantic network berupa grafik berarah atau tidak yang terdiri dari simpul dan garis. Simpul mewakili konsep.

Contoh semantic network adalah WordNet, yakni sebuah baris data leksikal Bahasa Inggris. WordNet mengelompokkan kata ke dalam kumpulan sinonim (synset). Hubungan semantik yang dibentuk dalam WordNet, yaitu meronim, hiponim, hipernim, antonim, dan sinonim.

Pencarian dengan jaringan semantik / semantic network berarti pencarian dokumen berdasarkan kata kunci penelusuran dan makna yang terkait dengan kata kunci tersebut. Pencarian semantik berusaha untuk meningkatkan akurasi pencarian dengan memahami maksud pencari dan makna kontekstual istilah seperti yang ditampilkan dalam data pencarian. Dengan kata lain, semantic search adalah pencarian suatu konten berdasarkan konteks yang tepat. Konten adalah teks tertulis sedangkan konteks adalah kondisi keberadaan teks tersebut. Tujuan semantic search adalah mencari konten yang sesuai dengan konteks yang diinginkan pengguna.

Ada dua jenis semantic search yaitu
- Semantic search dengan hasil berupa navigasi, navigasi ini bisa berupa link.
- Semantic search dengan hasil berupa dokumen secara penuh.

Proses semantic search membutuhkan pemodelan yang dapat digunakan ulang. Bentuk pemodelan yang mendukung antara lain *weighted tree similarity*, *ontologi*, dan *weighted directed acrylic graph*. Sebelum dilakukan pemodelan data harus dilakukan pemrosesan dokumen berupa tokenisasi, *stopword filltration*, dan *stemming*.

### Pengukuran Kemiripan
Beberapa metode-metode yang bisa digunakan untuk mengukur kemiripan dua kata, dua kalimat dan dua dokumen, antara lain.

### Language Based Matching (LBM)
Language Based Matching (LBM), atau Pencocokan Berbasis Bahasa, adalah teknik yang digunakan untuk mengidentifikasi, mengelompokkan, dan menganalisis teks berdasarkan bahasa yang digunakan. Teknik ini memanfaatkan berbagai metode untuk menentukan bahasa teks, seperti:

* **Analisis Statistik:** Teknik ini menganalisis frekuensi kemunculan huruf, bigram, dan trigram untuk mengidentifikasi pola yang khas untuk setiap bahasa.
* **Morfologi:** Teknik ini menganalisis struktur kata, seperti prefiks, sufiks, dan akar kata, untuk mengidentifikasi bahasa teks.
* **Semantik:** Teknik ini menganalisis makna kata dan frasa untuk mengidentifikasi bahasa teks.
* **Syntax:** Teknik ini menganalisis struktur kalimat dan tata bahasa untuk mengidentifikasi bahasa teks.

LBM memiliki berbagai aplikasi, termasuk:

* **Klasifikasi Teks:** LBM digunakan untuk mengklasifikasikan teks ke dalam kategori bahasa tertentu, seperti bahasa Inggris, Prancis, Spanyol, dll.
* **Pencocokan Teks:** LBM digunakan untuk mencocokkan teks dengan dokumen referensi atau database untuk mengidentifikasi kesamaan atau perbedaan bahasa.
* **Terjemahan Mesin:** LBM digunakan untuk mengidentifikasi bahasa sumber teks sebelum menerjemahkannya ke bahasa lain.
* **Penambangan Teks:** LBM digunakan untuk mengekstrak informasi dari teks dalam bahasa tertentu, seperti topik, entitas, dan sentimen.

LBM merupakan alat yang ampuh untuk memproses dan menganalisis teks dalam berbagai bahasa. Dengan mengidentifikasi bahasa teks dengan tepat, LBM dapat membantu meningkatkan akurasi dan efisiensi berbagai aplikasi pengolahan bahasa alami (NLP).

#### Beberapa contoh penerapan LBM

* **Mesin pencari:** LBM digunakan untuk mengidentifikasi bahasa hasil pencarian dan menampilkan hasil yang relevan dengan bahasa pengguna.
* **Perangkat lunak anti-spam:** LBM digunakan untuk mengidentifikasi email spam berdasarkan bahasa yang digunakan.
* **Perangkat lunak chatbots:** LBM digunakan untuk mengidentifikasi bahasa pengguna dan memberikan respons yang sesuai dalam bahasa tersebut.
* **Perangkat lunak koreksi teks:** LBM digunakan untuk mengidentifikasi kesalahan tata bahasa dan ejaan berdasarkan bahasa teks.

Language Based Matching (LBM) adalah teknik yang penting untuk memproses dan menganalisis teks dalam berbagai bahasa. Dengan mengidentifikasi bahasa teks dengan tepat, LBM dapat membantu meningkatkan akurasi dan efisiensi berbagai aplikasi pengolahan bahasa alami.

### Vector Space Matching (SVM)

Pencocokan Ruang Vektor (Vector Space Matching - VSM) adalah teknik yang digunakan untuk mengukur kemiripan antara dua atau lebih dokumen teks. Teknik ini didasarkan pada gagasan bahwa dokumen yang memiliki makna serupa akan direpresentasikan oleh vektor yang dekat dalam ruang vektor.

#### Bagaimana VSM Bekerja

1. **Representasi Dokumen:** Setiap dokumen diubah menjadi vektor numerik, di mana setiap elemen vektor mewakili kemunculan kata tertentu dalam dokumen. 
2. **Perhitungan Kemiripan:** Kemiripan antara dua dokumen diukur dengan menghitung jarak antara vektor mereka. Ada beberapa metode untuk menghitung jarak, seperti cosine similarity dan Euclidean distance.
3. **Interpretasi Hasil:** Semakin kecil jarak antara dua vektor, semakin tinggi kemiripan antara dokumen yang mereka representasikan. 

#### Penerapan VSM

VSM memiliki berbagai aplikasi, termasuk:

* **Pencarian Informasi:** VSM digunakan dalam mesin pencari untuk menemukan dokumen yang relevan dengan kueri pengguna.
* **Klasifikasi Teks:** VSM digunakan untuk mengklasifikasikan dokumen ke dalam kategori tertentu, seperti topik, genre, atau sentimen.
* **Rekomendasi Sistem:** VSM digunakan untuk merekomendasikan item yang serupa dengan item yang disukai pengguna.
* **Analisis Teks:** VSM digunakan untuk menganalisis pola dalam teks, seperti topik yang dominan atau sentimen keseluruhan.

#### Keuntungan VSM

* **Kesederhanaan:** VSM adalah teknik yang relatif sederhana untuk dipahami dan diimplementasikan.
* **Efisiensi:** VSM dapat menghitung kemiripan antara banyak dokumen dengan cepat.
* **Fleksibilitas:** VSM dapat digunakan dengan berbagai jenis teks, seperti artikel berita, postingan media sosial, dan email.

#### Kekurangan VSM

* **Ketergantungan pada Kata:** VSM hanya mempertimbangkan kemunculan kata dan tidak memperhitungkan makna kontekstual.
* **Sensitivitas terhadap Noise:** VSM dapat sensitif terhadap noise dalam data, seperti kata-kata yang tidak relevan atau kesalahan ejaan.
* **Dimensi Tinggi:** Ketika jumlah kata dalam kosakata besar, ruang vektor dapat menjadi sangat besar dan kompleks.

Pencocokan Ruang Vektor adalah teknik yang ampuh untuk mengukur kemiripan antara dokumen teks. Teknik ini memiliki berbagai aplikasi, seperti pencarian informasi, klasifikasi teks, dan sistem rekomendasi. VSM adalah teknik yang sederhana, efisien, dan fleksibel, namun memiliki beberapa keterbatasan seperti ketergantungan pada kata, sensitivitas terhadap noise, dan dimensi tinggi.

**Catatan:**
* VSM adalah salah satu teknik untuk mengukur kemiripan teks. Ada teknik lain yang lebih canggih, seperti Latent Semantic Analysis (LSA) dan Topic Modeling.
* VSM dapat dikombinasikan dengan teknik lain untuk meningkatkan performanya.


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}