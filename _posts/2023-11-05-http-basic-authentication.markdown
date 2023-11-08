---
layout: post
title: "HTTP Basic Authentication"
author: debi
date: 2023-11-05 14:33:53 +0700
image: assets/img/privacy-security-data-protection.webp
categories: software development
tags: secure rfc
---
*HTTP Basic Auth* adalah salah satu tehnik otentikasi http request. Metode ini membutuhkan informasi 
username dan password untuk disisipkan kedalam header request (dengan format tertentu), jadi cukup 
sederhana, tidak memerlukan cookies atau session. Lebih jelasnya silakan membaca [RFC-7617][rfc7617].

![HTTP Basic Authentication](https://dikakaryatech.com/assets/img/http-auth-sequence-diagram.png "HTTP Basic Authentication")

Informasi username dan password tidak serta merta disisipkan dalam header, informasi tersebut harus 
diencode terlebih dahulu kedalam format yang sudah ditentukan sesuai spesifikasi, sebelum dimasukan 
ke header.

Berikut adalah contoh penulisan basic auth:
```
//Request header
Authorization: Basic c29tZXVzZXJuYW1lOnNvbWVwYXNzd29yZA==
```

Informasi disisipkan kedalam request header dengan key **Authorization**, dan value adalah **Basic** 
spasi hasil enkripsi dari data username dan password. Data username dan password digabungkan dengan 
pemisah tanda titik dua (:), kemudian diencode kedalam format encoding Base 64.

```
// Username password encryption
base64encode("someusername:somepassword")
// Hasilnya adalah c29tZXVzZXJuYW1lOnNvbWVwYXNzd29yZA==
```

[rfc7617]: https://tools.ietf.org/html/rfc7617