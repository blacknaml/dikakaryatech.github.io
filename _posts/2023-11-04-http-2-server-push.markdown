---
layout: post
title: "HTTP/2 dan HTTP/2 Server Push"
author: debi
date: 2023-11-04 13:31:43 +0700
image: /assets/img/utp-cable-engineer.webp
categories: software development
tags: protocol server
related_post: related-posts.html
language: id
locale: id_ID
toc: true
excerpt: "HTTP/2 adalah iterasi utama dari protokol HTTP yang dikembangkan dari [SPDY][spdy], sebuah protokol inisiasi Google. Saat ini, HTTP/2 telah didukung penuh oleh standar web dan kompatibel dengan hampir semua web browser modern seperti Chrome, Firefox, Safari, Opera, dan Edge."
description: "HTTP/2 adalah iterasi utama dari protokol HTTP yang dikembangkan dari [SPDY][spdy], sebuah protokol inisiasi Google. Saat ini, HTTP/2 telah didukung penuh oleh standar web dan kompatibel dengan hampir semua web browser modern seperti Chrome, Firefox, Safari, Opera, dan Edge."
---

### HTTP/2

_HTTP/2_ adalah iterasi utama dari protokol HTTP yang dikembangkan dari [SPDY][spdy], sebuah protokol inisiasi Google. Saat ini, HTTP/2 telah didukung penuh oleh standar web dan kompatibel dengan hampir semua web browser modern seperti Chrome, Firefox, Safari, Opera, dan Edge.

![HTTP/2 Connection](https://dikakaryatech.com/assets/img/http2-connection.png "HTTP/2 Connection")

Kelebihan utama HTTP/2 dibandingkan dengan pendahulunya (HTTP/1.1) terletak pada peningkatan performa dan keamanan. Berikut ini adalah beberapa poin yang menjadi keunggulan dari protokol ini:

- Backward compatible (kompatibel ke belakang) dengan HTTP/1.1
- Kompresi data pada HTTP Headers (menggunakan algoritma HPACK)
- Multiplexing banyak request (dalam satu koneksi TCP)
- HTTP/2 Server Push

### HTTP/2 Server Push

_HTTP/2 Server Push_ adalah salah satu fitur inovatif pada HTTP/2 yang dirancang untuk mempercepat waktu muat halaman (load time) dari sebuah request. Cara kerjanya adalah server mengirimkan resource secara proaktif sebelum browser klien memintanya. Fitur ini sangat ideal digunakan untuk melakukan push pada data aset statis, seperti file CSS, JavaScript, gambar, dan aset web lainnya.

![HTTP/2 Server Push](https://dikakaryatech.com/assets/img/http2-server-push.png "HTTP/2 Server Push")

Lalu, apakah Server Push ini bisa dimanfaatkan untuk mendorong (push) data dinamis seperti JSON, XML, atau sejenisnya? Sebenarnya bisa, tetapi hal ini menyalahi tujuan utama dari pembuatan Server Push itu sendiri dan hasilnya tidak akan optimal.

Hal ini dikarenakan HTTP/2 Server Push tidak murni bersifat bidirectional (dua arah). Data yang di-push oleh server sebenarnya disalurkan ke dalam cache browser, sehingga klien tetap perlu melakukan request (yang kemudian langsung diambil dari cache tersebut) untuk mendapatkan data yang sudah di-push oleh server.

Oleh karena itu, HTTP/2 Server Push bukanlah pengganti dari WebSockets. WebSockets tetap merupakan solusi yang tepat dan digunakan untuk komunikasi bidirectional yang intensif antara server dan klien.

[spdy]: https://tools.ietf.org/html/draft-mbelshe-httpbis-spdy-00

{% if page.related_post %}
{% include {{ page.related_post }} %}
{% endif %}
