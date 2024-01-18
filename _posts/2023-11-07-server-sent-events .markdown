---
layout: post
title: "Server Sent Events (SSE)"
author: debi
date: 2023-11-07 09:49:39 +0700
image: /assets/img/event-laptop.webp
categories: software development
tags: protocol software-development backend
related_post: related-posts.html
---
*SSE, Server Sent Events* digunakan untuk mengimplementasikan komunikasi real-time, dimana server mengirimkan data ke klien. 
Untuk menerima data dari server ke klien biasanya kami membuat koneksi HTTP. Dalam kasus update berkala, kami dalam beberapa kasus 
sebelumnya menggunakan Polling atau Long Polling melalui HTTP request.

Untuk kasus koneksi yang persisten kita akan menggunakan WebSockets sehingga kita bisa mengirim/menerima data secara terus menerus 
tanpa membuat koneksi baru. Meskipun WebSockets adalah cara terbaik untuk berkomunikasi dengan server ketika kita perlu mengirim dan 
menerima data ke dan dari server. Tetapi dalam banyak kasus, kita perlu menerima data dari server menggunakan koneksi persisten, tetapi 
tidak perlu mengirim data ke server. Seperti, live dashboard, atau live analytics board. Dalam kasus ini, WebSockets menjadi beban 
tambahan yang tidak diperlukan. Untuk mengatasi masalah ini, kita menggunakan cara Server-Sent Events (SSE). Untuk detailnya bisa 
membaca di [Server-sent events][sse]

![SSE Diagram](https://dikakaryatech.com/assets/img/sse-reqeuest-response.webp "SSE Diagram")

### Kelebihan
SSE memiliki beberapa kelebihan berikut:

> - Koneksi persisten, di mana klien terhubung ke server, dan server menjaga koneksi tetap hidup (sampai ada masalah).
> - Menggunakan koneksi HTTP biasa.
> - Koneksi satu arah dari server ke klien. Jadi klien hanya dapat menerima data dari server, dan klien tidak dapat 
mengirim data apa pun setelah koneksi dibuat.
> - Hanya dapat menerima teks UTF-8.
> - Menggunakan sumber daya yang lebih sedikit dibandingkan WebSockets (karena koneksi ke soket TCP/IP tidak diperlukan dalam kasus ini).
> - Sambungan ulang/percobaan ulang otomatis dilakukan dari sisi klien, jika ada masalah di server (seperti restart server).
> - Tersedia di Web Workers.
> - Proses implementasinya yang sangat sederhana.

### Keterbatasan
SSE memiliki beberapa keterbatas berikut:

> - Terbatas dalam menghubungkan dari satu browser dalam satu waktu:
    > - HTTP/1.1: Maksimum 6-8 koneksi sekaligus.
    > - [HTTP/2]({% post_url 2023-11-04-http-2-server-push %}): Maksimum 100 koneksi secara default (dapat diubah dari konfigurasi server). 
> - Hanya dapat mengirim teks UTF-8. Jadi Anda hanya dapat mengirim data teks yang terdiri dari karakter UTF-8, karena content-type nya adalah text/event-stream.
> - Tidak mendukung pengiriman data secara client-to-server. Setelah koneksi dibuat, klien tidak dapat mengirim data setelah itu, menggunakan koneksi yang sama.

### Praktek dengan PHP
### Praktek dengan GoLang

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}

[sse]: https://html.spec.whatwg.org/multipage/server-sent-events.html
