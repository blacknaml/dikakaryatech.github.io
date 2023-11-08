---
layout: post
title: "Manfaat Konfigurasi di-env var"
author: jill
date: 2023-10-03 03:23:53 +0700
image: assets/img/system-developers-analyzing-code-1500x800.webp
categories: software development
tags: programming development
---

*Environment variable* merupakan variabel yang berada di lapisan *runtime* sistem operasi.
Karena *env var* atau *environment variable* merupakan variabel seperti pada umumnya, maka kita bisa 
melakukan operasi seperti mengubah nilainya atau mengamblin nilainya.

Mendefinisikan konfigurasi di env var banyak manfaatnya, diantaranya adalah:
  1. Didukung secara *native* oleh semua sistem operasi.
  2. Sudah sangat umum diterapkan dibanyak aplikasi dan platform.
  3. *Straightforward* dan tidak tergantung ke file tertentu.
  4. Berbagi konfigurasi dengan aplikasi/servis lain menjadi lebih mudah.
  5. Mudah untuk perawatan.

Jadi bisa dikatakan bahwa penulisan konfigurasi di env var merupakan *best practice* untuk banyak 
jenis kasus, terutama pada *microservice*, aplikasi/servis yang terdistribusi, dan aplikasi monolith 
yang manajemennya ter-automatisasi.

Memang kalau dari sisi *readability* tidak sebaik dibandingkan dengan jsom atau yaml.