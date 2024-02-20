---
layout: post
language: id
title: "Operations Teams"
author: jill
date: 2023-12-08 09:20:53 +0700
image: /assets/img/the-office-building.webp
related_post: related-posts.html
categories: software development
tags: ops server
---
*Operations Team* / Tim Ops sangat penting untuk menjaga sistem perangkat lunak berjalan dengan lancar. Meskipun beberapa aspek operasi dapat dan harus diotomatisasi, manusialah yang harus mengatur otomatisasi tersebut terlebih dahulu dan memastikannya berfungsi dengan benar. Telah disarankan bahwa, 

> Good operations can often work around the limitations of bad (or incomplete) software, but good software cannot run reliably with bad operations.
> 
> Pengoperasian yang benar sering kali dapat mengatasi keterbatasan perangkat lunak yang buruk (atau tidak lengkap), namun perangkat lunak yang bagus tidak dapat berjalan dengan andal dengan pengoperasian yang buruk.


Operations team yang baik biasanya bertanggung jawab untuk hal-hal berikut:
- Memantau kesehatan sistem dan memulihkan layanan dengan cepat jika kondisinya buruk
- Melacak penyebab masalah, seperti kegagalan sistem atau penurunan kinerja
- Selalu memperbarui perangkat lunak dan platform, termasuk patch keamanan
- Mengawasi bagaimana sistem yang berbeda mempengaruhi satu sama lain, sehingga perubahan bermasalah bisa dihindari sebelum menyebabkan kerusakan
- Mengantisipasi masalah di masa depan dan menyelesaikannya sebelum terjadi (misalnya, perencanaan kapasitas)
- Menetapkan praktik dan tools yang bagus untuk deployment, configuration management, dan lain-lain
- Melakukan tugas pemeliharaan yang kompleks, seperti memindahkan aplikasi dari satu platform ke platform lainnya
- Menjaga keamanan sistem saat dilakukan perubahan konfigurasi
- Mendefinisikan proses-proses yang membuat operasi bisa diprediksi dan membantu menjaga kestabilan production environment
- Melakukan transfer pengetahuan tentang sistem, bahkan ketika individu tim datang dan pergi

Pengoperasian yang bagus membuat tugas-tugas rutin menjadi lebih mudah, memungkinkan operations team fokus pada aktivitas yang bernilai tinggi. Maka perangkat lunak sistem-data harus bisa melakukan hal-hal yang mempermudah tugas rutin mereka, diantaranya: 
- Memberikan visibilitas terhadap *runtime behavior* dan sistem internal, dengan monitoring yang bagus
- Memberikan support untuk otomatisasi dan integrasi dengan alat yang standart
- Menghindari ketergantungan pada masing-masing server/mesin (memungkinkan server/mesin dihentikan untuk pemeliharaan sementara sistem secara keseluruhan terus berjalan tanpa gangguan)
- Menyediakan dokumentasi yang bagus dan *operational model* yang mudah dipahami
- Memberikan perilaku default yang baik, namun juga memberikan kebebasan kepada administrator untuk mengganti default bila diperlukan
- Mampu memulikan diri-sendiri (*Self-Healing System*), namun juga memberi kontrol manual kepada administrator atas status sistem bila diperlukan
- Bisa menunjukkan perilaku yang dapat diprediksi, sehingga meminimalkan kejutan

Sumber bacaan lebih lanjut [On Designing and Deploying Internet-Scale Services][hamilton]{:target="_blank"}.

[hamilton]: https://www.usenix.org/legacy/events/lisa07/tech/full_papers/hamilton/hamilton.pdf
 
{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}