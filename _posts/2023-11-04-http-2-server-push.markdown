---
layout: post
title:  "HTTP/2 dan HTTP/2 Server Push"
author: debi
date: 2023-11-04 13:31:43 +0700
image: assets/img/utp-cable-engineer.jpg
categories: software development
tags: protocol server
---
### HTTP/2
*HTTP/2* adalah versi terbaru protokol HTTP, dikembangkan dari protokol [SPDY][spdy] yang 
diinisiasi oleh Google.

Protokol ini sekarang sudah kompatibel dengan banyak web browser diantaranya: Chrome, Opera, 
Firefox 9, IE 11, Safari, Silk, dan Edge.

![HTTP/2 Connection](https://dikakaryatech.com/assets/img/http2-connection.png "HTTP/2 Connection")

Kelebihan HTTP/2 dibandingkan dengan HTTP 1.1 (protokol yang umum digunakan) sebagian besar 
adalah pada performa dan keamanan. Berikut merupakan beberapa poin yang menjadi kelebihan dari 
protokol baru ini:
- Backward compatible dengan HTTP 1.1
- Kompresi data pada HTTP Headers
- Multiplexing banyak request (dalam satu koneksi TCP)
- HTTP/2 Server Push


### HTTP/2 Server Push
*HTTP/2 Server Push* adalah salah satu fitur pada HTTP/2, yang berguna untuk mempercepat respon dari 
request, yaitu dengan cara data yang akan direspon dikirim terlebih dahulu oleh server. Fitur ini 
cocok digunakan untuk push data aset, seperti css, gambar, js, dan file aset lainnya.

![HTTP/2 Connection](https://dikakaryatech.com/assets/img/http2-server-push.png "HTTP/2 Connection")

Lalu apakah server push ini bisa dimanfaatkan untuk push data JSON, XML, atau sejenisnya ? Sebenarnya 
bisa, hanya saja ini akan menyalahi tujuan dari pembuatan server push sendiri dan hasilnya tidak akan 
optimal, karena sebenarnya server push ini tidak murni bidirectional, masih perlu adanya request ke 
server untuk mendapatkan data yang sudah dipush oleh server itu sendiri. HTTP/2 Server Push bukanlah 
pengganti dari websocket. Websocket digunakan untuk komunikasi bidirectional antara server dan klien.

[spdy]: https://tools.ietf.org/html/draft-mbelshe-httpbis-spdy-00