---
layout: post
title: "Manfaat Konfigurasi di-env var"
author: jill
date: 2023-10-03 03:23:53 +0700
image: /assets/img/system-developers-analyzing-code-1500x800.webp
categories: software development
tags: programming development
related_post: related-posts.html
language: id
locale: id_ID
toc: true
---

_Environment variable_ merupakan variabel yang berada di lapisan _runtime_ sistem operasi.
Karena _env var_ atau _environment variable_ merupakan variabel seperti pada umumnya, maka kita bisa
melakukan operasi seperti mengubah nilainya atau mengamblin nilainya.

Mendefinisikan konfigurasi di env var banyak manfaatnya, diantaranya adalah:

1. Didukung secara _native_ oleh semua sistem operasi.
2. Sudah sangat umum diterapkan dibanyak aplikasi dan platform.
3. _Straightforward_ dan tidak tergantung ke file tertentu.
4. Berbagi konfigurasi dengan aplikasi/servis lain menjadi lebih mudah.
5. Mudah untuk perawatan.

Jadi bisa dikatakan bahwa penulisan konfigurasi di env var merupakan _best practice_ untuk banyak
jenis kasus, terutama pada _microservice_, aplikasi/servis yang terdistribusi, dan aplikasi monolith
yang manajemennya ter-automatisasi.

Memang kalau dari sisi _readability_ tidak sebaik dibandingkan dengan jsom atau yaml.

{% if page.related_post %}
{% include {{ page.related_post }} %}
{% endif %}
