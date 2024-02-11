---
layout: post
language: id
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

|     | Planning | Analysis | Design | Impelementation |
| --- | :---: | :---: |  :---: |  :---: | 
| Effort Distribution| 15% | 20% | 35% | 30%|
| Waktu | 1 bulan | 1.33 bulan | 2.33 bulan | 2 bulan |
| Person | 2 orang | 2.6 = 3 orang | 4.6 = 5 orang | 4 orang |
| Rumus | Waktu dan orang | 0.2 * (Planning/0.15) | 0.35 * (Planning/0.15) | 0.3 * (Planning/0.15) |
| --- | --- | --- |  --- |  --- | 
{: .table .table-bordered }

Selanjutnya kita hitung biaya / cost / budget untuk proyek tersebut: misal kita menggunakan gaji yang sama untuk tim yaitu Rp. 5.000.000 / month / man. Untuk data gaji yang real ada banyak referensi diantaranya PersolKelly, Jobstreet Salary Guide, Indonesia Salary Guide, dan [Pedoman Standar Minimal Inkindo][inkindo]. Maka dari perhitungan tabel di atas akan didapatkan Estimasi Biaya Proyek Software sebesar **Rp. 155 Juta**.

| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 2 | 5.000.000 | 10.000.000 |
| 2 | Analysis | 2 | 3 | 5.000.000 | 30.000.000 |
| 3 | Design | 3 | 5 | 5.000.000 | 75.000.000 |
| 4 | Implementation | 2 | 4 | 5.000.000 | 40.000.000 |
|  | **Grand Total**  | | | | **155.000.000** |
{: .table .table-bordered }

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
untuk menentukan TUFP (*Total Unadjusted Function Points*) dari proyek dengan menggunakan pedoman tabel Complexity di bawah. 

{: .text-center }
![Tabel Complexity](/assets/img/tufp.webp "Tabel Complexity"){: .img-thumbnail }

Dengan menggunakan tabel complexity seperti gambar di atas, maka akan dapat dihitung angka TUFP. Masukan berapa jumlah complexity untuk Low, Medium dan High per-bagian, misal, dalam planning proyek ditemukan ada 6 "Inputs" dengan rincian: 3 kompleksitas Low (hanya entri input text-field), 2 kompleksitas Medium (parsing dari file csv), dan 1 kompleksitas High (scraping data dari website WallMart). Masukan semua angka parameter planning ke tabel Complexity, maka didapatkan angka **TUFP 338**. Selanjut melangkah ke langkah Estimate effort required.

| Description | Total Number | Low | Medium | High | Total |
| :---: | :---: | :---: | :---: | :---: | :---: |
| **Inputs** | 6 | 3 x 3 | 2 x 4  | 1 x 6 | **23** |
| **Outputs** | 19 | 4 x 4 | 10 x 5 | 5 x 7 | **101** |
| **Queries** | 10 | 7 x 3 | 0 x 4 | 3 x 6 | **39** |
| **Files** | 15 | 0 x 7 | 15 x 10 | 0 x 15 | **150** |
| **Program Interfaces (UI)** | 3 | 1 x 5 | 0 x 7 | 2 x 10 | **25** |
| **TUFP** ||||| **338** |
{: .table .table-bordered }

#### Langkah kedua, Estimate effort required, 
untuk menentukan PC (*Processing Complexity*) dari proyek dengan menggunakan pedoman tabel PC di bawah. 

{: .text-center }
![Processing Complexity](/assets/img/processing-complexity.webp "Processing Complexity"){: .img-thumbnail }

Dengan menggunakan tabel PC di atas akan didapatkan angka total PC. Masukan angka sesuai parameternya, contoh, planning proyek ini memiliki tingkat Data Communication yang rumit / tinggi maka masukan angka 3 (rumit), Distributed functions sedang (2), dan Online data entry sedang (2) juga. Angka skala dari 0 (tidak ada) s/d 3 (rumit). Setelah semua parameter dimasukan akan didapatkan total **PC = 7**. Selanjutnya melangkah ke langkah Estimate time required.

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
TAFP = TUFP * APC
```

Misalkan proyek kita termasuk kategori *Simple Systems*, maka kita gunakan APC factor 0.65.

> Processing Complexity (PC) *dari langkah kedua* = **7**, 
> 
> TUFP *dari langkah pertama* = **338**
> 
> APC = 0.65 + (7 / 100) = **0.72**
>
> TAFP = 338 * 0.72 = **243**

Selanjutnya kita menentukan bahasa pemrograman apa yang akan dipakai, misalkan menggunakan PHP dan metrik  LOC/TAFP nya adalah **53.33**. Gambar di bawah berisikan daftar metrik untuk bahasa-bahasa pemrograman lainnya.

{: .text-center }
![Tabel Matrik FP/LOC](/assets/img/Loc-TAFP-2.webp "Tabel Matrik FP/LOC"){: .img-thumbnail }

Selanjutnya kita menghitung LOC (*Lines of Codes*) dengan rumus: 
```
LOC = TAFP * LOC/TAFP
```

Sehingga, 

> LOC/TAFP untuk bahasa pemrograman PHP = **53.33**, dan TAFP = **243**, maka
>
> LOC = 243 * 53.33 = 12959.19 = **12959**


#### Estimasi Effort
untuk menghitung estimasi effort menggunakan rumus:
```
Effort = 1.4 * (LOC/1000)
```

Sehingga,

> Effort = 1.4 * (12959/1000) = **18.1426 Person Months**
>

Dari sini kita sudah mendapatkan estimasi effort sebesar 18.14 person months.

#### Estimasi Waktu
untuk menghitung estimasi waktu menggunakan rumus:
```
Time (months) = 3.0 * Effort^1/3
```

Sehingga,
> Time = 3.0 * 18.1426^1/3 =  **7.15 bulan**
>

Dari sini kita sudah mendapatkan estimasi waktu selama 7.156 bulan.

Selanjutnya kita hitung biaya / cost / budget untuk proyek tersebut: misal kita menggunakan gaji yang sama untuk tim yaitu Rp. 5.000.000 / month / man. Perhitungan estimasi biaya masih menggunakan **Persentase Standar Industri untuk Sistem Aplikasi Umum** yaitu planning 15%, analysis 20%, design 35%, dan implementation 30%. Untuk data gaji yang real ada banyak referensi diantaranya PersolKelly, Jobstreet Salary Guide, Indonesia Salary Guide, dan [Pedoman Standar Minimal Inkindo][inkindo]. Maka dari perhitungan tabel di bawah akan didapatkan Estimasi Biaya Proyek Software sebesar **Rp. 175 Juta**.

| | Fase | Month | Person | Cost | Total |
| --- | --- | :---: |  :---: |  ---: |  ---: | 
| 1 | Planning | 1 | 3 | 5.000.000 | 15.000.000 |
| 2 | Analysis | 1 | 4 | 5.000.000 | 20.000.000 |
| 3 | Design | 3 | 6 | 5.000.000 | 90.000.000 |
| 4 | Implementation | 2 | 5 | 5.000.000 | 50.000.000 |
|  | **Grand Total**  | | | | **175.000.000** |
{: .table .table-bordered }

Dari metode **Function Points** kita mendapatkan estimasi waktu **7.15 bulan**, jumlah orang dalam tim sebanyak **18 orang** dan biaya sebesar **Rp. 175 Juta**.

### Use Case Points UCP
### Scrum Based Methods

{: .text-center }
![Tabel Matrik FP/LOC](/assets/img/Loc-TAFP-1.webp "Tabel Matrik FP/LOC"){: .img-thumbnail }
![Tabel Matrik FP/LOC](/assets/img/Loc-TAFP-2.webp "Tabel Matrik FP/LOC"){: .img-thumbnail }
![Tabel Matrik FP/LOC](/assets/img/Loc-TAFP-3.webp "Tabel Matrik FP/LOC"){: .img-thumbnail }

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}

[inkindo]: https://www.inkindo.org/wp-content/uploads/2022/11/NEW-BILLING-RATE-2023_compressed.pdf
