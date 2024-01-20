---
layout: post
title: "Proses Pengembangan Perangkat Lunak"
author: jill
image: /assets/img/programmer-professional-illustration.webp
categories: software development
tags: software-engineering development
related_post: related-posts.html
language: id
---

Salah satu perbedaan pendapat tentang proses pengembangan adalah antara waterfall dan iteratif. Kedua istilah tersebut sering disalah
artikan, khususnya karena iteratif sering dipandang lebih modern daripada proses waterfall. Hasilnya adalah banyak proyek yang mengaku
menggunakan iteratif padahal sebenarnya menggunakan waterfall.

**Proses Pengembangan Iteratif dan Waterfall**

Perbedaan yang mendasar diantara keduanya adalah bagaimana anda memecah sebuah proyek menjadi potongan-potongan yang lebih kecil.
Jika anda mempunyai sebuah proyek yang anda rasa akan selesai dalam satu tahun, beberapa orang akan nyaman untuk menyuruh tim pengembang 
pergi selama setahun dan kembali lagi setelah selesai. Dibutuhkan  beberapa laporan supaya mereka dapat memecahkan permasalahan dan mengawasi 
kemajuan.

Gaya waterfall adalah memecah sebuah proyek berdasarkan aktivitas. Untuk membuat perangkat lunak, anda harus melakukan kegiatan tertentu, yaitu
seperti analisi persyaratan, desain, coding dan testing. Jadi, sebuah proyek satu tahun adapat terdiri dari 2 bulan fase analisis, 4 bulan fase 
desain, 3 bulan fase coding dan 3 bulan fase testing.

Gaya iteratif memecah sebuah proyek menjadi serangkaian fungsi. Anda dapat memecah proyek 1 tahun menjadi iterasi-iterasi 3 bulan. Dalam iterasi 
pertama, anda mengambil seperempat bagian persyaratan dan melakukan siklus hidup perangkat lunak lengkap untuk bagian tersebut: analisis, desain, 
coding dan testing. Di akhir iterasi pertama, anda memiliki sebuah sistem  yang melakukan seperempat fungsi yang dibutuhkan. Kemudian anda melakukan 
iterasi kedua yang berakhir pada bulan keenam, anda akan mendapatkan sistem yang mengerjakan setengah fungsi yang diinginkan.

Tentu saja, penjelasan di atas merupakan deskripsi yang disederhanakan, tetapi itu merupakan inti perbedaanya. Dalam prakteknya, tentu saja terdapat 
penyimpangan-penyimpangan dalam proses.

Dalam pengembangan waterfall, biasanya terdapat beberapa bentuk alih fungsi formal antar fase, tetapi kita acapkali dituntut untuk kembali ke fase 
sebelumnya. Selama proses coding, sesuatu mungkin terjadi dan menuntut anda untuk kembali melihat analisis dan desain. Anda tidak bisa berasumsi 
bahwa seluruh desain sudah selesai pada saat coding dimulai. Tidak dapat dielakkan, anda harus kembali melihat ke keputusan analisis dan desain 
dalam fase-fase sebelumnya. Meskipun demikian, aktivitas ini merupakan pengecualian dan harus diminimalkan sebanyak mungkin.

Dalam iterasi, anda biasanya mendapati beberapa bentuk kegiatan eksplorasi sebelum iterasi-iterasi sebenarnya dimulai. Setidaknya, kegiatan ini akan 
memberi gambaran tingkat tinggi tentang persyaratan: setidaknya cukup untuk memecah persyaratan menjadi iterasi-iterasi yang akan mengikuti. Beberapa 
keputusan desain tingkat tinggi bisa saja muncul selama eksplorasi. Di samping itu, meskipun setiap iterasi akan membuat perangkat lunak yang terintegrasi 
dengan produksi, iterasi sering tidak langsung mengena tujuan tersebut dan membutuhkan masa stabilisasi untuk menghilangkan bugs terakhir. Juga, beberapa 
aktivitas, seperti pelatihan untuk pengguna, ditunda sampai selesai.

Anda bisas aja tidak menempatkan sistem pada produksi di akhir setiap iterasi, tetapi sistem tersebut harus mempunyai kualitas produksi. Meskipun demikian, 
acapkali anda dapat menempatkan sistem dalam produksi dalam interval tertentu. Hal ini bagus karena anda mendapatkan nilai dari sistem lebih dini dan anda 
mendapatkan umpan balik yang lebih berkualitas. Dalam situasi ini, anda sering mendapati sebuah proyek dengan rilis yang bermacam-macam dan masing-masing 
dipecah menjadi beberapa iterasi. 

Pengembangan iteratis dikenal dengan berbagai macam nama: *incremental*, *spiral*, *evolutionary*, dan *jacuzzi spring to mind*. Orang-orang membuat perbedaan 
diantara mereka, tetapi pembedaan tersebut tidak disetujui secara luas dan tidak sepenting pembedaan antara dikotomi iteratif dan waterfall.

Anda dapat juga menggunakan pendekatan campuran. McConnel menjelaskan tentang siklus hidup pengiriman bertingkat dimana analisis dan desain dilakukan terlebih 
dahulu dengan cara waterfall, yang kemudian coding dan testing dilakukan dengan iterasi. Contohnya sebuah proyek memiliki 4 bulan masa analisis dan desain kemudian 
disusul oleh 4 iterasi 2 bulanan untuk membangun sistem tersebut.

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}