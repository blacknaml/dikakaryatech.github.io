---
layout: post
title:  "HTTP Compression"
author: jill
date:   2023-10-21 08:37:47 +0700
image: assets/img/construction-workers-are-installing-steel.webp
categories: software development
tags: protocol server
---
*HTTP Compression* adalah teknik kompresi data pada HTTP response, agar 
ukuran/size output menjadi lebih kecil adan response time lebih cepat.

Pada saat sebuah endpoint diakses, di header request akan ada header *Accept-Encoding* 
yang disisipkan oleh browser secara otomatis.
```
GET /hello HTTP/1.1
Host: localhost:9000
Accept-Encoding: gzip, deflate
```
Jika isinya adalah *gzip* atau *deflate*, berarti browser siap dan support untuk 
menerima response yang di-compress dari back-end. Deflate adalah algoritma kompresi 
untuk data lossless. Gzip adalah salah satu tehnik kompresi data yang menerapkan 
algoritma deflate.

Di sisi back-end sendiri, jika memang output di-compress, maka response header 
*Content-Encoding: gzip* perlu disisipkan.
```
Content-Encoding: gzip
```

Jika disebuah request tidak ada header *Accept-Encoding: gzip*, tetapi response 
back-end tetap di-compress, maka akan muncul error dibrowser *ERR_CONTENT_DECODING_FAILED*.

Untuk informasi CORS silakan membaca di [CORS]({% post_url 2023-10-10-cross-origin-resource-sharing %}) 
dan HTTPS/TLS di [HTTPS/TLS]({% post_url 2023-11-01-https-tls-web-server %}).