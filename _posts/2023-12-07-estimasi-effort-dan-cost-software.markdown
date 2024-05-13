---
layout: post
language: id
toc: true
title: "Metode Estimasi Biaya dan Effort Perangkat Lunak"
author: debi
date: 2023-12-07 08:37:33 +0700
image: /assets/img/group-people-working-website-template.webp
categories: software development
tags: software-development estimation
related_post: related-posts.html
excerpt: "Pada proyek perangkat lunak, estimasi biaya dan usaha proyek mempunyai kesulitan tersendiri karena karakteristik-karakteristik perangkat lunak yang berbeda dengan proyek fisik. Kesulitan-kesulitan yang sering dihadapi dalam estimasi sangat berkaitan dengan sifat alami perangkat lunak, khususnya kompleksitas dan keabstrakan. Selain itu pengembangan perangkat lunak merupakan kegiatan yang lebih banyak dilakukan secara intensif oleh manusia."
---
Pengukuran memungkinkan kita mendapatkan informasi tentang proses dan proyek dengan suatu mekanisme evaluasi obyektif. Lord Kevin pernah mengatakan,

> "When you can measure what you are speaking about, and express it in numbers, you know something about it, when you cannot express it in numbers, your knowledge is of a meager and unsatisfactory kind; it may be the beginning of knowledge, but you have scarely, in your thoughts advanced to the stage of science."
> 
> "Bila anda dapat mengukur apa yang anda bicarakan dan mengekspresikannya dalam angka-angka, anda akan dapat mengetahui sesuatu tentangnya, tetapi, saat anda tidak dapat melakukan pengukuran, ketika anda tidak dapat mengungkapkannya dalam angka, pengetahuan anda tentang hal tersebut sangatlah kurang dan tidak memuaskan; bisa jadi ini menjadi awal pengetahuan (tentang hal tersebut), tetapi anda hampir tidak mungkin, dalam pikiran anda, melaju ke tahap ilmiah."


Sekalipun sulit, komunitas rekayasa perangkat lunak telah menerapkan kata-kata Lord Kelvin tersebut, dan hal ini sudah cukup banyak menimbulkan kontroversi.

Pengukuran dapat diterapkan pada proses perangkat lunak dengan maksud untuk meperbaiki proses tersebut secara terus-menerus. Pengukuran dapat digunakan dalam pelaksanaan proyek perangkat lunak untuk membantu pelaksanaan estimasi, pengendalian kualitas, penilaian produktivitas, dan pengendalian proyek. 

Pada proyek perangkat lunak, estimasi biaya dan usaha mempunyai kesulitan tersendiri karena karakteristik-karakteristik perangkat lunak yang berbeda dengan proyek fisik. Kesulitan-kesulitan yang sering dihadapi dalam estimasi sangat berkaitan dengan sifat alami perangkat lunak, khususnya kompleksitas dan keabstrakan. Selain itu pengembangan perangkat lunak merupakan kegiatan yang lebih banyak dilakukan secara intensif oleh manusia.

Terdapat banyak metode untuk memperkirakan upaya (*effort*) perangkat lunak diantaranya:
- **COCOMO** (*COnstructive COst MOdel*), 
- **Cycle Distribution** (*Effort Distribution*),
- **FP** (*Function Points*), 
- **UCP** (*Use Case Points*), 
- **Scrum Based Methods**,
- **Machine Learning Based Methods**

Dalam estimasi biaya dan effort perangkat lunak, kami Dika Karya Tech menggunakan **UCP** dalam *Software Effort and Cost Estimation*, maka tidak heran disetiap pengajuan **proposal** dan **KAK (Kerangka Acuan Kerja)** selalu kami lampirkan *Use Case Diagram* dan **BPMN**. Kami mengadopsi Siklus Pengembangan Software (*Software Development Cycles*) **PADI-M** (*Planning Analysis Design Implementation - Maintenance*), dan estimasi biaya dan effort ini masuk di fase *Planning*.

### Cycle Distribution
Metode ini adalah yang paling sederhana yaitu dengan menggunakan jumlah waktu yang dihabiskan dalam tahap perencanaan (*planning*) untuk memprediksi waktu yang dibutuhkan untuk keseluruhan proyek. Idenya adalah bahwa proyek yang sederhana akan memerlukan sedikit perencanaan, dan proyek yang kompleks akan memerlukan lebih banyak perencanaan; jadi menggunakan jumlah waktu yang dihabiskan dalam tahap perencanaan adalah cara yang masuk akal untuk memperkirakan kebutuhan waktu proyek secara keseluruhan.

Dengan pendekatan ini, anda menggunakan waktu (perkiraan) yang dihabiskan dalam fase perencanaan dan menggunakan persentase standar industri untuk menghitung perkiraan untuk fase SDLC lainnya. Persentase standar industri untuk sistem aplikasi bisnis umum adalah:
```
Planning: 15%,
Analysis: 20%,
Design: 35%,
Implementation: 30%.
```

Misalkan suatu proyek memerlukan waktu empat bulan dalam tahap perencanaan, maka sisa proyek kemungkinan besar akan memakan waktu total 22,66 orang-bulan (4/0.15 = 22,66). Persentase standar industri ini kemudian digunakan untuk memperkirakan jumlah waktu dalam setiap fase. Keterbatasan dari pendekatan ini adalah sulitnya mempertimbangkan secara spesifik proyek anda, yang mungkin lebih sederhana atau lebih rumit dibandingkan proyek “umumnya” yang menjadi standar industri tersebut.

Contoh perhitungan, saat fase planning tim membutuhkan waktu 1 bulan dengan 2 orang maka dapat di-estimasi seperti pada tabel di bawah. Estimasi waktu total yang didapat adalah 6,66 bulan dengan 14 orang.

<div class="table-responsive" markdown="1">
|     | Planning | Analysis | Design | Impelementation |
| --- | :---: | :---: |  :---: |  :---: | 
| Effort Distribution| 15% | 20% | 35% | 30%|
| Waktu | 1 bulan | 1.33 bulan | 2.33 bulan | 2 bulan |
| Person | 2 orang | 2.6 = 3 orang | 4.6 = 5 orang | 4 orang |
| Rumus | Waktu dan orang | 0.2 x (Planning/0.15) | 0.35 x (Planning/0.15) | 0.3 x (Planning/0.15) |
| --- | --- | --- |  --- |  --- | 
{: .table .table-bordered }
</div>

Selanjutnya kita hitung biaya / cost / budget untuk proyek tersebut: misal kita menggunakan gaji yang sama untuk tim yaitu Rp. 5.000.000 / month / man. Untuk data gaji yang real ada banyak referensi diantaranya PersolKelly, Jobstreet Salary Guide, Indonesia Salary Guide, dan [Pedoman Standar Minimal Inkindo][inkindo]. Maka dari perhitungan tabel di atas akan didapatkan Estimasi Biaya Proyek Software sebesar **Rp. 155 Juta**.

<div class="table-responsive" markdown="1">
| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 2 | 5.000.000 | 10.000.000 |
| 2 | Analysis | 2 | 3 | 5.000.000 | 30.000.000 |
| 3 | Design | 3 | 5 | 5.000.000 | 75.000.000 |
| 4 | Implementation | 2 | 4 | 5.000.000 | 40.000.000 |
|  | **Grand Total**  | | | | **155.000.000** |
{: .table .table-bordered }
</div>

Dari metode Cycle Distribution kita mendapatkan estimasi waktu 6,66 = **7 bulan**, jumlah orang dalam tim sebanyak **14 orang** dan biaya sebesar **Rp. 155 Juta**.

### Function Point FP
Pendekatan *Function Point* (FP) adalah teknik estimasi yang bisa digunakan untuk memperkirakan ukuran sistem, effort yang diperlukan, dan waktu yang dibutuhkan proyek. FP memerlukan pengetahuan rinci 
tentang sistem yang akan dikembangkan. Ketika pengetahuan ini tersedia, pendekatan FP menghasilkan estimasi proyek yang jauh lebih tepat dibandingkan metode *Cycle Distribution* yang dijelaskan sebelumnya.
Konsep ini dikembangkan oleh Allen Albrecht IBM pada tahun 1979 dan banyak dipakai di perusahaan-perusahaan besar di Amerika, sering kita jumpai mereka mengukur seberapa besar suatu perangkat lunak dengan 
"xxxx FP".

{: .text-center }
![Function Points](/assets/img/function-points.webp "Function Points"){: .img-thumbnail }

Dari gambar di atas ada 3 langkah FP yaitu *Estimate system size*, *Estiimate effort required*, dan *Estimate time required*. 

#### Langkah pertama, Estimate system size, 
untuk menentukan TUFP (*Total Unadjusted Function Points*) dari proyek adalah dengan menggunakan pedoman tabel Complexity di bawah. 

{: .text-center }
![Tabel Complexity](/assets/img/tufp.webp "Tabel Complexity"){: .img-thumbnail }

Dengan menggunakan tabel complexity di atas, bisa dihitung nilai TUFP. Masukkan berapa jumlah complexity untuk Low, Medium dan High per-bagian, misal, dalam planning proyek ditemukan ada 6 "Inputs" dengan rincian: 3 kompleksitas Low (hanya entri input text-field), 2 kompleksitas Medium (parsing dari file csv), dan 1 kompleksitas High (scraping data dari website WallMart). Masukkan semua angka parameter planning ke tabel Complexity, maka didapatkan angka **TUFP 338**. Selanjut melangkah ke langkah Estimate effort required.

<div class="table-responsive" markdown="1">
| Description | Total Number | Low | Medium | High | Total |
| :---: | :---: | :---: | :---: | :---: | :---: |
| **Inputs** | 6 | 3 x 3 | 2 x 4  | 1 x 6 | **23** |
| **Outputs** | 19 | 4 x 4 | 10 x 5 | 5 x 7 | **101** |
| **Queries** | 10 | 7 x 3 | 0 x 4 | 3 x 6 | **39** |
| **Files** | 15 | 0 x 7 | 15 x 10 | 0 x 15 | **150** |
| **Program Interfaces (UI)** | 3 | 1 x 5 | 0 x 7 | 2 x 10 | **25** |
| **TUFP** ||||| **338** |
{: .table .table-bordered }
</div>

#### Langkah kedua, Estimate effort required, 
untuk menentukan PC (*Processing Complexity*) dari proyek dengan menggunakan pedoman tabel PC di bawah. 

{: .text-center }
![Processing Complexity](/assets/img/processing-complexity.webp "Processing Complexity"){: .img-thumbnail }

Dengan menggunakan tabel PC di atas akan didapatkan angka total PC. Masukkan angka sesuai parameternya, contoh, planning proyek ini memiliki tingkat Data Communication yang rumit / tinggi maka masukkan angka 3 (rumit), Distributed functions sedang (2), dan Online data entry sedang (2) juga. Angka skala dari 0 (tidak ada) s/d 3 (rumit). Setelah semua parameter masak maka didapatkan total **PC = 7**. Selanjutnya melangkah ke langkah Estimate time required.

<div class="table-responsive" markdown="1">
| Parameter | Scale |
| :---: | :---: |
| **Data Communications** | **3** |
| Heavy use configuration | 0 |
| Transaction rate | 0 |
| End-user efficiency | 0 |
| Complex processing | 0 |
| Installation ease | 0 |
| Multiple site | 0 |
| Performance | 0 |
| **Distributed functions** | **2** |
| **Online data entry** | **2** |
| Online update | 0 |
| Reusability | 0 |
| Operational ease | 0 |
| Extensibility| 0 |
| **Total Processing Complexity (PC)** | **7** |
{: .table .table-bordered }
</div>

#### Langkah ketiga, Estimate time required, 
untuk menentukan TAFP (*Total Adjusted Function Points*) dari proyek adalah dengan menggunakan rumus TAFP. Sebelum masuk ke TAFP kita harus mengetahui standar dari **APC factor** (Adjusted Project Complexity) yaitu:
```
0.65 untuk Simple Systems
1.0 untuk Normal Systems
1.35 untuk Complex Systems
```
Rumus APC adalah
```
APC = APC factor + (PC / 100)
```
Rumus TAFP adalah
```
TAFP = TUFP x APC
```

Misalkan proyek kita termasuk kategori *Simple Systems*, maka kita gunakan APC factor 0.65.

> Processing Complexity (PC) *dari langkah kedua* = **7**, 
> 
> TUFP *dari langkah pertama* = **338**
> 
> APC = 0.65 + (7 / 100) = **0.72**
>
> TAFP = 338 x 0.72 = **243**

Selanjutnya kita menentukan bahasa pemrograman apa yang akan dipakai, misalkan menggunakan PHP dan metrik  LOC/TAFP nya adalah **53.33**. Gambar di bawah berisikan daftar metrik untuk bahasa-bahasa pemrograman lainnya.

{: .text-center }
![Tabel Matrik FP/LOC](/assets/img/Loc-TAFP-2.webp "Tabel Matrik FP/LOC"){: .img-thumbnail }

Selanjutnya kita menghitung LOC (*Lines of Codes*) dengan rumus: 
```
LOC = TAFP x LOC/TAFP
```

Sehingga, 

> LOC/TAFP untuk bahasa pemrograman PHP = **53.33**, dan TAFP = **243**, maka
>
> LOC = 243 x 53.33 = 12959.19 = **12959**


#### Estimasi Effort
untuk menghitung estimasi effort menggunakan rumus:
```
Effort = 1.4 x (LOC/1000)
```

Sehingga,

> Effort = 1.4 x (12959/1000) = **18.1426 Person Months**
>

Dari sini kita sudah mendapatkan estimasi effort sebesar 18.14 person months.

#### Estimasi Waktu
untuk menghitung estimasi waktu menggunakan rumus:
```
Time (months) = 3.0 x Effort^1/3
```

Sehingga,
> Time = 3.0 x 18.1426^1/3 =  **7.15 bulan**
>

Dari sini kita sudah mendapatkan estimasi waktu selama 7.156 bulan.

Selanjutnya kita hitung biaya / cost / budget untuk proyek tersebut: misal kita menggunakan gaji yang sama untuk tim yaitu Rp. 5.000.000 / month / man. Perhitungan estimasi biaya masih menggunakan **Persentase Standar Industri untuk Sistem Aplikasi Umum** yaitu planning 15%, analysis 20%, design 35%, dan implementation 30%. Untuk data gaji yang real ada banyak referensi diantaranya PersolKelly, Jobstreet Salary Guide, Indonesia Salary Guide, dan [Pedoman Standar Minimal Inkindo][inkindo]. Maka dari perhitungan tabel di bawah akan didapatkan Estimasi Biaya Proyek Software sebesar **Rp. 175 Juta**.

<div class="table-responsive" markdown="1">
| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 3 | 5.000.000 | 15.000.000 |
| 2 | Analysis | 1 | 4 | 5.000.000 | 20.000.000 |
| 3 | Design | 3 | 6 | 5.000.000 | 90.000.000 |
| 4 | Implementation | 2 | 5 | 5.000.000 | 50.000.000 |
|  | **Grand Total**  | | | | **175.000.000** |
{: .table .table-bordered }
</div>

Dari metode **Function Points** kita mendapatkan estimasi waktu **7.15 bulan**, jumlah orang dalam tim sebanyak **18 orang** dan biaya sebesar **Rp. 175 Juta**.

### Use Case Points UCP
*Use case* digunakan secara luas sebagai metode untuk menggambarkan kebutuhan di tingkat pelanggan atau ranah bisnis yang menyiratkan fitur dan fungsi perangkat lunak. Sepertinya masuk akal untuk menggunakan use case sebagai ukuran  normalisasi seperti pada LOC atau FP. Seperti FP, use case didefinisikan pada awal proses perangkat lunak, yang memungkinkan digunakan dalam pembuatan estimasi di fase planning sebelum dimulainya fase analysis, design dan implementation. 

Use case menggambarkan secara tidak langsung fungsi dan fitur yang terlihat oleh pengguna yang merupakan kebutuhan dasar bagi sistem. Use case bersifat independen dari bahasa pemrograman. Selain itu, jumlah use case berbanding lurus dengan ukuran aplikasi di LOC dan banyaknya test case yang harus dirancang untuk melaksanakan pengujian terhadap keseluruhan aplikasi / perangkat lunak.

Para peneliti menyarankan penggunaan UCP (*use case points*) sebagai metode untuk memperkirakan effort / usaha dari suatu proyek. UCP adalah fungsi dari jumlah aktor dan transaksi model-model use case, dan hampir sama dengan FP dalam beberapa hal.

Pada tahun 1993 Gustav Karner dari Objectory AB, yang kemudian diakuisisi oleh Rational Software Corporation, meneliti cara mengestimasi suatu proyek berdasarkan use case. Karyanya merupakan modifikasi dari penelitian Albrecht tentang function point. Hasilnya cukup menjanjikan. Kami menyertakan metode estimasinya di sini untuk anda gunakan sebagai titik awal dalam menentukan jumlah pekerjaan untuk proyek Anda. 

Use case diagram bisa dibuat menggunakan UML tools, ada banyak UML tools baik yang open source dan propeitary, diantaranya Modelio, yEd Graph Editor, MS Visio, dan Sparx EA. Kami Dika Karya Tech menggunakan Sparx EA untuk kebutuhan *System Analysis and Design*, *Software Architecture* dan *Enterprise Architecture*.

{: .text-center }
![Case/Transaction dan Actor](/assets/img/use-case-actor.webp "Case/Transaction dan Actor"){: .img-thumbnail }

Hal yang penting saat membuat use case diagram adalah parameter *Actor Weighting Factor*/*Unadjusted Actor Weighting* (UAW) dan *Transaction-Based Weighting Factor*/*Unadjusted Use Case Weighting*(UUCW), ada 3 nilai yaitu *Easy* (Simple), *Medium* (Average) dan *Difficult* (Complex). Tabel di bawah bisa digunakan untuk referensi menentukan UAW dan UUCW.

**UAW**
<div class="table-responsive" markdown="1">
| Actor Type | Description | Weighting Factor |
| --- | --- | :---: |
| Easy | External System with well-defined API | 1 |
| Medium | External System using a protocol-based interface, e.g, HTTP, TCP/IP, SQL | 2 |
| Difficult | Human | 3 |
{: .table .table-bordered }
</div>
**UUCW**
<div class="table-responsive" markdown="1">
| Actor Type | Description | Weighting Factor |
| --- | --- | :---: |
| Easy | 1-3 transactions | 5 |
| Medium | 4-7 transactions | 10 |
| Difficult | more than 7 transactions | 15 |
{: .table .table-bordered }
</div>

Kita akan menggunakan contoh Use Case Diagram kami untuk Sistem Perpustakaan, gambar UCD ada di bawah:

{: .text-center }
![UCD Sistem Perpustakaan](/assets/img/UCD-Web-Aplikasi-Sistem-Perpustakaan.webp "UCD Sistem Perpustakaan"){: .img-thumbnail }

Selanjutnya menghitung UUCP (*Unadjusted Use Case Points*) dengan rumus:
```
UUCP = UAW + UUCW
```

Untuk memberikan bobot UAW dan UUCW di software EA adalah dengan cara klik Case atau Actor, kemudian lihat pada panel Properties, kemudian klik Project dan pilih Complexity sesuai dengan bobotnya. Ingat untuk bobot bisa melihat di tabel UAW dan tabel UUCW di atas.

{: .text-center }
![Cara memberikan bobot UAW dan UUCW](/assets/img/uaw-uucw.webp "Cara memberikan bobot UAW dan UUCW"){: .img-thumbnail }

Pada contoh UCD Sistem perpustakaan didapatkan nilai UUCP = **94**
<div class="table-responsive" markdown="1">
| Actor/UC |  Weighting Factor |
| --- | :---: |
| Pengguna | 3 |
| Pustakawan | 3 |
| Sistem Open Library | 2 |
| Email Provider | 1 |
| Meminjam Buku | 5 |
| Mengembalikan Buku | 5 |
| Mengelola Data Profile | 5 |
| Mencari Buku | 5 |
| Membooking buku | 5 |
| Memperpanjang masa pinjaman buku | 5 |
| Membayar denda | 10 |
| Memodifikasi data profile | 5 |
| Melist histori pinjaman buku | 10 |
| Menyetujui permintaan perpanjangan buku | 5 |
| Menginput kondisi buku yang dikembalikan | 5 |
| Membuat laporan | 10 |
| Mencetak laporan peminjaman | 5 |
| Mengirim laporan melalui email | 5 |
| **Total** | **94** |
{: .table .table-bordered }
</div>

Selanjutnya menghitung TCF (*Technical Complexity Factors*) dengan rumus:
```
TCF = 0.6 + (0.01 x TFactor)
```

Untuk menghitung TCF dibutuhkan pengali TFactor, TFactor didapatkan dari table Technical Factors for System and Weights di bawah. Dan beri nilai setiap faktor dari 0 hingga 5. Nilai 0 berarti bahwa faktor tersebut tidak relevan untuk proyek ini; 5 berarti itu penting. Sekarang, kalikan peringkat setiap faktor dengan bobotnya berdasarkan tabel. Terakhir, jumlahkan semua angka ini untuk mendapatkan total TFactors.

{: .text-center }
![Table Technical Factors for System and Weights](/assets/img/technical-factors-for-system-and-weights.webp "Table Technical Factors for System and Weights"){: .img-thumbnail }

Hasil Perhitungan total TCFactor:
<div class="table-responsive" markdown="1">
| Factor Numbers | Weight | Ass Value | Total  | Reason |
| :---: | :---: | :---: | ---: | --- |
| T1 | 2 | 0 | 0 | Tidak ada rencana sistem terdistribusi untuk rilis awal. |
| T2 | 1 | 3 | 3 | Kecepatan akan bergantung pada kemampuan operator. |
| T3 | 1 | 5 | 5 | Sangat membutuhkan efisiensi |
| T4 | 1 | 1 | 1 | Pemrosesan mudah |
| T5 | 1 | 0 | 0 | Rilis awal belum ada pertimbangan pengembangan cabang |
| T6 | 0.5 | 0 | 0 | Berbasis web tidak perlu instalasi |
| T7 | 0.5 | 5 | 2.5 | Harus mudah dipakai oleh pengguna awam komputer |
| T8 | 2 | 0 | 0 | Sudah portable | 
| T9 | 1 | 3 | 3 | Harus mudah dilakukan penyesuaian |
| T10 | 1 | 5 | 5 | Karena multiuser, proses harus bisa concurrent |
| T11 | 1 | 5 | 5 | Keamanan adalah utama |
| T12 | 1 | 5 | 5 | Belum ada pertimbangan |
| T13 | 1 | 0 | 0 | Karena mudah seharusnya tanpa training |
| **Total** | | | **29.5** | |
{: .table .table-bordered }
</div>

Selanjutnya menghitung ECF (*Environmental Complexity Factors*) dengan rumus:
```
ECF = 1.4 + (-0.03 x EFactor)
```
Sekarang pertimbangkan tingkat pengalaman orang-orang di proyek tersebut. Ini disebut Environmental Factor (EF). Untuk menghitung EF, lihat Tabel di bawah dan beri peringkat setiap faktor dari 0 sampai 5. Untuk faktor F1 sampai F4, 0 berarti tidak ada pengalaman dalam bidang tersebut, 5 berarti ahli, 3 berarti rata-rata. Untuk F5, 0 berarti tidak ada motivasi untuk proyek tersebut, 5 berarti motivasi tinggi, 3 berarti rata-rata. Untuk F6, 0 berarti persyaratan sangat tidak stabil, 5 berarti persyaratan tidak berubah, 3 berarti rata-rata. Untuk F7, 0 berarti tidak ada staf teknis paruh waktu, 5 berarti semua staf teknis paruh waktu, 3 berarti rata-rata. Untuk F8, 0 berarti bahasa pemrograman mudah digunakan, 5 berarti bahasa pemrograman sangat sulit, 3 berarti rata-rata.

{: .text-center }
![Table Environmental Factors for Team and Weights](/assets/img/environmental-factors-for-team-and-weights.webp "Table Environmental Factors for Team and Weights"){: .img-thumbnail }

Hasil Perhitungan total EFactor:
<div class="table-responsive" markdown="1">
| Factor Numbers | Weight | Ass Value | Total  | Reason |
| :---: | :---: | :---: | ---: | --- |
| F1 | 1.5 | 1 | 1.5 | Sebagaian besar tidak familiar, karena proyek pertama perpustakaan |
| F2 | 0,5 | 1 | 0.5 | Jumlah programmer belum terkondisikan |
| F3 | 1 | 1 | 1 | Jumlah programmer belum terkondisikan |
| F4 | 0.5 | 5 | 2.5 | Kemampuan analis mumpuni |
| F5 | 1 | 5 | 5 | Tim sangat antusias |
| F6 | 2 | 5 | 10 | Kami tidak berekspetasi tentang perubahan |
| F7 | -1 | 0 | 0 | Tidak ada part-timer |
| F8 | -1 | 2 | -2 | Kami melirik PHP | 
| **Total** | | | **18.5** | |
{: .table .table-bordered }
</div>

Selanjutnya menghitung UCP (*Adjusted Use Case Points*) dengan rumus:
```
UCP = UUCP x TCF x ECF
```
Sehingga,

> Telah terhitung untuk UUCP = **94**, TCF = 0.6 + (0.01 x 29.5) = **0.895**, dan ECF = 1.4 + (-0.03 x 18.5) = **0.845**, maka
>
> UCP = 94 x 0.895 x 0.845 = **71.08**


Ada 2 factor PHM (Person Hours Month) yaitu Normal dengan nilai 20 dan High Risk dengan nilai 28. Biasanya akan kami hitung keduanya, dan akan diputuskan apakah proyek tersebut masuk kategori Normal atau High Risk. Nilai PHM ini dipakai untuk mencari nilai Effort in Person Hours (PH) dengan rumus:
```
PH = UCP x PHM
```
Selanjutnya hitung juga Effort in Person Month (PM) dengan rumus:
```
PM = PH / jam_kerja_perhari / jumlah_hari_kerja_perbulan
```
Selanjutnya Estimasi Waktu bisa dihitung dengan rumus:
```
TIME = 3.0 x PM^1/3
```

Jika dalam sehari bekerja 8 jam dan selama 22 hari per bulan (hari Sabtu - Minggu libur), akan didapat nilai PM Normal dan High Risk :

> Telah terhitung UCP = **71.08**, maka
> 
> PHNormal = 71.08 x 20 = **1421.79** PH
>
> PMNormal = 1421.79/8/22 = **8.07** PM
>
> TIMENormal = 3.0 x 8.07^1/3 =  **5.61** bulan
>
> PHHighRisk = 71.08 x 28 = **1990.51** PH
>
> PMHighRisk = 1990.51/8/22 = **11.3** PM
>
> TIMEHighRisk = 3.0 x 11.3^1/3 =  **6.2** bulan

Dari sini kita sudah mendapatkan estimasi waktu normal selama 5.61 bulan atau high risk 6.2 bulan dan jumlah normal orang 8.07 orang atau high risk 11.3 orang. Sebagai perbandingan jika menghitung UCP dengan software EA maka hasilnya tidak jauh berbeda. Gambar di bawah adalah hasil perhitungan normal dan high risk.

Perhitungan normal menggunakan software use case diagram

{: .text-center }
![Perhitungan Normal](/assets/img/ucp-normal.webp "Perhitungan Normal"){: .img-thumbnail }

Perhitungan High risk menggunakan software use case diagram

{: .text-center }
![Perhitungan High risk](/assets/img/ucp-high-risk.webp "Perhitungan High risk"){: .img-thumbnail }

Selanjutnya kita hitung biaya / cost / budget untuk proyek tersebut: misal kita menggunakan gaji yang sama untuk tim yaitu Rp. 5.000.000 / month / man. Perhitungan estimasi biaya masih menggunakan **Persentase Standart Effort Distribution** yaitu planning 15%, analysis 20%, design 35%, dan implementation 30%. Untuk data gaji yang real ada banyak referensi diantaranya PersolKelly, Jobstreet Salary Guide, Indonesia Salary Guide, dan [Pedoman Standar Minimal Inkindo][inkindo]. Maka dari perhitungan tabel di bawah akan didapatkan Estimasi Biaya Proyek Software Normal sebesar **Rp. 75 juta** dan High Risk sebesar **Rp. 90 juta**.

Perhitungan Estimasi Waktu Normal dengan Month 5.61 bulan dan Person 8.07 orang.
<div class="table-responsive" markdown="1">
| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 1 | 5.000.000 | 5.000.000 |
| 2 | Analysis | 1 | 2 | 5.000.000 | 10.000.000 |
| 3 | Design | 2 | 3 | 5.000.000 | 30.000.000 |
| 4 | Implementation | 2 | 3 | 5.000.000 | 30.000.000 |
|  | **Grand Total**  | | | | **75.000.000** |
{: .table .table-bordered }
</div>

Perhitungan Estimasi Waktu High Risk dengan Month 6.2 bulan dan Person 11.03 orang.
<div class="table-responsive" markdown="1">
| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 2 | 5.000.000 | 10.000.000 |
| 2 | Analysis | 1 | 2 | 5.000.000 | 10.000.000 |
| 3 | Design | 2 | 4 | 5.000.000 | 40.000.000 |
| 4 | Implementation | 2 | 3 | 5.000.000 | 30.000.000 |
|  | **Grand Total**  | | | | **90.000.000** |
{: .table .table-bordered }
</div>


### Scrum Based Methods
Ada empat metode yang termasuk kategori Scrum Based Methods:

### Scrum Based Methods Use Case Points (UCP)

Scrum Based Methods Use Case Points (SBUC) merupakan metode estimasi upaya pengembangan perangkat lunak yang didasarkan pada Use Case Points (UCP) dan prinsip-prinsip Scrum. UCP adalah metrik yang digunakan untuk mengukur kompleksitas fungsionalitas perangkat lunak, sedangkan Scrum adalah kerangka kerja pengembangan perangkat lunak yang berfokus pada iterasi dan kolaborasi.

#### Prinsip-prinsip Scrum yang mendasari SBUC

1. **Self-Organizing Teams:** Tim pengembangan bertanggung jawab atas estimasi dan pengelolaan pekerjaan mereka.
2. **Product Backlog:** Backlog produk berisi daftar fitur dan fungsionalitas yang ingin diimplementasikan.
3. **Sprints:** Pekerjaan dibagi menjadi sprint yang singkat, terfokus, dan berdurasi tetap.
4. **Burndown Charts:** Burndown charts digunakan untuk melacak kemajuan sprint.

#### Penerapan SBUC

1. **Identifikasi Use Cases:** Definisikan semua Use Cases yang diperlukan untuk menyelesaikan fungsionalitas yang diinginkan.
2. **Klasifikasi Use Cases:** Klasifikasikan Use Cases berdasarkan kompleksitasnya menjadi Small, Medium, atau Large.
3. **Tentukan UCP:** Tetapkan nilai UCP untuk setiap Use Case berdasarkan klasifikasinya.
4. **Hitung Total UCP:** Hitung total UCP untuk semua Use Cases dalam backlog produk.
5. **Estimasi Velocitas Tim:** Hitung kecepatan tim dalam UCP per sprint berdasarkan sprint sebelumnya.
6. **Estimasi Durasi Sprint:** Bagi total UCP dengan kecepatan tim untuk mendapatkan estimasi durasi sprint yang diperlukan untuk menyelesaikan semua Use Cases.

#### Keuntungan SBUC

* **Mudah dipahami dan digunakan:** SBUC menggunakan konsep yang mudah dipahami dan mudah diterapkan oleh tim pengembangan.
* **Meningkatkan transparansi:** SBUC memungkinkan tim untuk secara transparan mengkomunikasikan estimasi dan kemajuan pekerjaan mereka kepada pemangku kepentingan.
* **Meningkatkan fleksibilitas:** SBUC memungkinkan tim untuk dengan mudah menyesuaikan estimasi mereka berdasarkan perubahan pada backlog produk.
* **Meningkatkan akuntabilitas:** SBUC membantu tim untuk tetap bertanggung jawab atas estimasi dan komitmen mereka.

#### Kekurangan SBUC

* **Subjektif:** Estimasi UCP dapat bervariasi tergantung pada interpretasi tim dan pengalaman mereka.
* **Membutuhkan data historis:** Estimasi kecepatan tim yang akurat memerlukan data dari sprint sebelumnya.
* **Tidak mempertimbangkan faktor non-fungsional:** SBUC tidak mempertimbangkan faktor non-fungsional seperti kinerja, keamanan, dan skalabilitas.


SBUC adalah metode estimasi yang bermanfaat untuk proyek Scrum yang berfokus pada pengembangan fungsionalitas perangkat lunak. Metode ini mudah dipahami, transparan, dan fleksibel, tetapi perlu diingat bahwa estimasi UCP dapat bersifat subjektif dan memerlukan data historis. 

**Catatan:**

* SBUC hanyalah salah satu metode estimasi yang tersedia. Metode lain yang populer termasuk Story Points dan Planning Poker.
* Penting untuk memilih metode estimasi yang sesuai dengan kebutuhan dan konteks proyek Anda.
* Estimasi harus selalu dianggap sebagai perkiraan dan dapat berubah seiring dengan kemajuan proyek.

**Sumber:**

* [https://www.scrum.org/resources/blog/evidence-based-estimation](https://www.scrum.org/resources/blog/evidence-based-estimation)
* [https://en.wikipedia.org/wiki/Use_case_points](https://en.wikipedia.org/wiki/Use_case_points)
* [https://www.atlassian.com/whitepapers/data-center-workflow-and-efficiency/use-cases](https://www.atlassian.com/whitepapers/data-center-workflow-and-efficiency/use-cases)

### Planning Poker (PP)
**Planning Poker**, juga dikenal sebagai **Scrum Poker**, adalah teknik estimasi usaha yang digunakan dalam metodologi Scrum untuk memperkirakan waktu dan upaya yang dibutuhkan untuk menyelesaikan item backlog produk. Teknik ini melibatkan tim pengembang dan pemangku kepentingan lainnya dalam proses estimasi, dan bertujuan untuk mencapai konsensus tentang ukuran relatif dari setiap item.

#### Bagaimana Cara Kerja Planning Poker

1. **Persiapan:** Siapkan kartu Planning Poker dengan nilai-nilai yang mewakili estimasi usaha, seperti 0, 1, 2, 3, 5, 8, 13, 20, 40, dan 100. Nilai-nilai ini mewakili waktu dan upaya yang relatif, bukan waktu absolut.

2. **Penjelasan Item Backlog:** Product Owner menjelaskan item backlog kepada tim, memastikan semua orang memahami apa yang perlu dilakukan.

3. **Estimasi Awal:** Setiap orang dalam tim secara diam-diam memperkirakan usaha yang dibutuhkan untuk menyelesaikan item backlog menggunakan kartu Planning Poker.

4. **Penyingkapan:** Semua orang secara bersamaan mengungkapkan kartu mereka. Jika semua orang memilih kartu dengan nilai yang sama, lanjutkan ke langkah 5. Jika tidak, lanjutkan ke langkah 6.

5. **Diskusi:** Jika semua orang memilih kartu dengan nilai yang sama, diskusikan alasan di balik estimasi tersebut. Pastikan semua orang memahami bagaimana nilai-nilai tersebut diinterpretasikan.

6. **Estimasi Ulang:** Jika estimasi awal tidak sama, setiap orang memiliki kesempatan untuk mempertimbangkan kembali estimasi mereka berdasarkan diskusi. Mereka kemudian memilih kartu baru dan mengungkapkan kartu mereka secara bersamaan. Ulangi langkah 6 dan 7 sampai tercapai konsensus.

7. **Konsensus:** Konsensus tercapai ketika tim merasa nyaman dengan estimasi bersama mereka. Estimasi ini dicatat dan digunakan untuk merencanakan sprint berikutnya.

#### Keuntungan Planning Poker

* **Meningkatkan partisipasi tim:** Planning Poker melibatkan semua orang dalam proses estimasi, mendorong partisipasi dan rasa kepemilikan tim.
* **Meminimalisir bias:** Teknik anonim ini membantu mengurangi bias individu dan mendorong estimasi yang lebih objektif.
* **Memfasilitasi diskusi:** Diskusi yang terjadi selama Planning Poker membantu tim untuk lebih memahami kompleksitas item backlog.
* **Meningkatkan akurasi estimasi:** Estimasi yang dihasilkan melalui Planning Poker umumnya lebih akurat daripada estimasi individu.
* **Menyenangkan dan interaktif:** Planning Poker adalah cara yang menyenangkan dan interaktif untuk memperkirakan usaha, yang dapat meningkatkan motivasi dan engagement tim.

**Planning Poker** adalah alat yang berharga untuk tim Scrum yang ingin meningkatkan akurasi estimasi mereka dan membangun konsensus di sekitar backlog produk. Teknik ini mudah dipelajari dan diterapkan, dan dapat memberikan manfaat yang signifikan bagi tim pengembangan perangkat lunak.

**Catatan:**

* Planning Poker hanyalah salah satu teknik estimasi yang dapat digunakan dalam Scrum. Ada teknik lain yang mungkin lebih cocok untuk tim atau proyek tertentu.
* Penting untuk diingat bahwa estimasi usaha selalu tidak pasti. Planning Poker hanya membantu tim untuk mencapai estimasi yang lebih baik.
* Estimasi yang dihasilkan melalui Planning Poker harus digunakan sebagai panduan, dan mungkin perlu diubah seiring berjalannya proyek.

**Sumber:**
* [https://www.scrum.org/forum/scrum-forum/17348/planning-poker](https://www.scrum.org/forum/scrum-forum/17348/planning-poker)
* [https://marketplace.atlassian.com/apps/1212495/planning-poker](https://marketplace.atlassian.com/apps/1212495/planning-poker)
* [https://appfire.com/resources/blog/planning-poker-vs-relative-methods](https://appfire.com/resources/blog/planning-poker-vs-relative-methods)

### Points Per Story (PPS)
Dalam metodologi Scrum, **Story Points** (poin cerita) merupakan unit pengukuran yang digunakan untuk memperkirakan usaha yang diperlukan untuk menyelesaikan sebuah **user story**. User story adalah deskripsi singkat tentang fungsionalitas atau fitur yang diinginkan oleh pengguna. 

Story Points tidak mewakili waktu atau jam kerja, melainkan kompleksitas dan usaha yang dibutuhkan untuk menyelesaikan user story. Hal ini memungkinkan tim Scrum untuk fokus pada nilai dan prioritas user story, bukan hanya pada perkiraan waktu yang mungkin tidak akurat.

#### Manfaat Menggunakan Story Points

* **Mempermudah Perencanaan Sprint:** Story Points membantu tim Scrum untuk memprioritaskan user story dan merencanakan sprint yang realistis.
* **Meningkatkan Komunikasi:** Story Points memfasilitasi komunikasi yang lebih baik antar anggota tim Scrum, mendorong diskusi dan perdebatan yang sehat tentang usaha yang dibutuhkan untuk menyelesaikan user story.
* **Mempermudah Pengukuran Kemajuan:** Story Points membantu tim Scrum untuk melacak kemajuan sprint dan mengidentifikasi hambatan yang mungkin terjadi.
* **Meningkatkan Fokus pada Nilai:** Story Points mendorong tim Scrum untuk fokus pada nilai dan prioritas user story, bukan hanya pada perkiraan waktu yang mungkin tidak akurat.

#### Bagaimana Menetapkan Story Points

Tidak ada aturan baku untuk menetapkan Story Points. Tim Scrum dapat menggunakan berbagai metode, seperti:

* **Planning Poker:** Setiap anggota tim memperkirakan Story Points menggunakan kartu dengan nilai yang berbeda. Nilai tertinggi dipilih sebagai perkiraan tim.
* **Relative Estimation:** Tim Scrum membandingkan user story dengan user story lain yang telah diselesaikan dan menetapkan Story Points berdasarkan kompleksitas relatif.
* **T-Shirt Sizing:** Tim Scrum menggunakan ukuran kaos (S, M, L, XL, XXL) untuk merepresentasikan kompleksitas Story Points.

**Catatan Penting:**
* Story Points bukanlah angka absolut, melainkan relatif dan dapat berubah seiring dengan pemahaman tim Scrum yang lebih baik terhadap proyek.
* Story Points tidak boleh digunakan untuk menekan tim Scrum untuk menyelesaikan user story lebih cepat dari yang seharusnya.
* Story Points adalah alat yang membantu tim Scrum, bukan pengganti komunikasi dan kolaborasi yang efektif.

Story Points adalah alat yang bermanfaat dalam metodologi Scrum untuk memperkirakan usaha yang diperlukan untuk menyelesaikan user story. Dengan menggunakan Story Points secara efektif, tim Scrum dapat meningkatkan perencanaan sprint, komunikasi, dan fokus pada nilai, ultimately leading to more successful projects.

**Sumber:**

* [https://www.atlassian.com/agile/project-management/estimation](https://www.atlassian.com/agile/project-management/estimation)
* [https://www.scrum.org/resources/blog/myth-9-story-points-are-required-scrum](https://www.scrum.org/resources/blog/myth-9-story-points-are-required-scrum)
* [https://www.wrike.com/blog/introducing-agile-project-management/](https://www.wrike.com/blog/introducing-agile-project-management/)

### Velocity Calculations (VC)
**Velocity** dalam Scrum adalah metrik yang digunakan untuk mengukur **kecepatan tim** dalam menyelesaikan pekerjaan selama sprint. Velocity dihitung dengan menjumlahkan **Story Point** yang diselesaikan dalam sprint yang telah selesai. 

**Story Point** adalah unit estimasi yang digunakan untuk mengukur kompleksitas dan usaha yang diperlukan untuk menyelesaikan sebuah cerita (user story). Story Point tidak sama dengan unit waktu, melainkan refleksi dari kompleksitas dan usaha.

#### Berikut adalah rumus untuk menghitung Velocity

**Velocity = Total Story Point yang diselesaikan / Jumlah Sprint**

**Contoh:**

Misalkan dalam 3 sprint terakhir, tim Anda menyelesaikan 20, 25, dan 30 Story Point. Velocity tim Anda adalah:

**Velocity = (20 + 25 + 30) / 3 = 25 Story Point**

#### Interpretasi Velocity

Velocity dapat digunakan untuk:

* **Memprediksi jumlah Story Point yang dapat diselesaikan tim dalam sprint berikutnya.**
* **Memonitor kemajuan tim terhadap backlog produk.**
* **Menyesuaikan backlog produk berdasarkan Velocity tim.**
* **Membandingkan Velocity tim dengan tim lain.**

**Penting untuk dicatat bahwa Velocity hanyalah sebuah metrik dan tidak boleh menjadi satu-satunya faktor yang digunakan untuk menilai kinerja tim.** 

Faktor lain yang perlu dipertimbangkan termasuk:

* **Kualitas pekerjaan yang diselesaikan.**
* **Tingkat kepuasan pemangku kepentingan.**
* **Motivasi dan moral tim.**

#### Tips untuk meningkatkan Velocity

* **Pastikan tim memiliki pemahaman yang jelas tentang Story Point.**
* **Pisahkan cerita yang kompleks menjadi cerita yang lebih kecil dan lebih mudah dikelola.**
* **Fokus pada penyelesaian cerita one by one.**
* **Gunakan teknik estimasi yang konsisten.**
* **Hindari multitasking.**
* **Lakukan refleksi dan retrospektif secara teratur.**

**Kesimpulan**

Velocity adalah metrik yang berguna untuk mengukur kecepatan tim Scrum dalam menyelesaikan pekerjaan. Velocity dapat digunakan untuk memprediksi kemajuan, menyesuaikan backlog produk, dan membandingkan tim. Namun, Velocity hanyalah sebuah metrik dan tidak boleh menjadi satu-satunya faktor yang digunakan untuk menilai kinerja tim.

**Sumber:**

* [https://www.scrum.org/resources/blog/velocity-revolutionary-way-measure-scrum](https://www.scrum.org/resources/blog/velocity-revolutionary-way-measure-scrum)
* [https://support.atlassian.com/jira-software-cloud/docs/view-and-understand-the-velocity-chart/](https://support.atlassian.com/jira-software-cloud/docs/view-and-understand-the-velocity-chart/)
* [https://deeprojectmanager.com/how-to-calculate-velocity-in-scrum/](https://deeprojectmanager.com/how-to-calculate-velocity-in-scrum/)


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}

[inkindo]: https://www.inkindo.org/wp-content/uploads/2022/11/NEW-BILLING-RATE-2023_compressed.pdf
