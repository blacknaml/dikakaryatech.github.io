---
layout: post
language: id
title: "Memahami Server-Sent Events (SSE) untuk Komunikasi Real-Time"
author: debi
date: 2023-11-07 09:49:39 +0700
image: /assets/img/event-laptop.webp
categories: software development
tags: protocol software-development backend
related_post: related-posts.html
locale: id_ID
toc: true
excerpt: "Server-Sent Events (SSE) adalah teknologi yang digunakan untuk mengimplementasikan komunikasi real-time di mana server dapat mengirimkan data secara proaktif ke klien. Secara tradisional, klien membuat koneksi HTTP ke server untuk menerima data. Untuk mendapatkan pembaruan (update) secara berkala, kita sering kali menggunakan teknik seperti Polling atau Long Polling melalui HTTP request yang berulang."
description: "Server-Sent Events (SSE) adalah teknologi yang digunakan untuk mengimplementasikan komunikasi real-time di mana server dapat mengirimkan data secara proaktif ke klien. Secara tradisional, klien membuat koneksi HTTP ke server untuk menerima data. Untuk mendapatkan pembaruan (update) secara berkala, kita sering kali menggunakan teknik seperti Polling atau Long Polling melalui HTTP request yang berulang."
---

_Server-Sent Events (SSE)_ adalah teknologi yang digunakan untuk mengimplementasikan komunikasi real-time di mana server dapat mengirimkan data secara proaktif ke klien.

Secara tradisional, klien membuat koneksi HTTP ke server untuk menerima data. Untuk mendapatkan pembaruan (update) secara berkala, kita sering kali menggunakan teknik seperti Polling atau Long Polling melalui HTTP request yang berulang.

Sebagai alternatif untuk koneksi persisten, kita bisa menggunakan WebSockets yang memungkinkan komunikasi dua arah secara terus-menerus tanpa membuat koneksi baru. WebSockets adalah cara terbaik jika aplikasi perlu mengirim dan menerima data secara intensif antara klien dan server. Namun, pada beberapa kasus seperti live dashboard atau live analytics board—kita hanya perlu menerima data dari server. Dalam skenario ini, WebSockets akan menjadi beban tambahan (overhead) yang tidak diperlukan.

Untuk mengatasinya, kita bisa menggunakan Server-Sent Events (SSE). Detail resmi mengenai protokol ini dapat dilihat pada dokumentasi standar [Server-sent events][sse].

![SSE Diagram](https://dikakaryatech.com/assets/img/sse-reqeuest-response.webp "SSE Diagram")

### Kelebihan & Manfaat SSE

Dibandingkan dengan Polling atau WebSockets, SSE menawarkan beberapa manfaat berikut untuk skenario satu arah:

> - Koneksi Persisten Satu Arah: Klien terhubung ke server, dan server menjaga koneksi tetap hidup untuk mengirim data ke klien. Klien tidak dapat mengirim data balasan setelah koneksi dibuat.
> - Efisien & Real-time: Data dikirimkan ke klien secara real-time hanya menggunakan satu koneksi HTTP biasa, sehingga jauh lebih efisien daripada polling.
> - Otomatis Terhubung Kembali (Auto-Reconnect): Klien akan melakukan percobaan ulang/sambungan ulang secara otomatis jika terjadi masalah pada server (misalnya server restart).
> - Ringan Sumber Daya: Menggunakan sumber daya yang lebih sedikit dibandingkan WebSockets karena tidak memerlukan koneksi soket TCP/IP dua arah yang kompleks.
> - Dukungan Lingkungan Web: Tersedia dan dapat digunakan di dalam Web Workers.
> - Skalabilitas: Sangat cocok digunakan untuk aplikasi dengan banyak klien yang hanya perlu memantau data.
> - Implementasi Sederhana: Proses pengembangannya jauh lebih mudah dan sederhana di sisi klien maupun server.

### Keterbatasan SSE

Meskipun ringan dan efisien, SSE memiliki beberapa keterbatasan:

> - Batas Maksimal Koneksi: Jika menggunakan HTTP/1.1, browser membatasi maksimal 6-8 koneksi aktif secara bersamaan per domain. Namun, pada [HTTP/2]({% post_url 2023-11-04-http-2-server-push %}), batas bawaannya mencapai 100 koneksi (dan dapat diubah melalui konfigurasi server).
> - Hanya Mendukung Teks UTF-8: Anda hanya dapat mengirim data teks yang terdiri dari karakter UTF-8 karena tipe kontennya (content-type) adalah text/event-stream.
> - Komunikasi Murni Satu Arah: Tidak mendukung pengiriman data dari klien ke server (client-to-server). Jika klien perlu mengirim data, mereka harus menggunakan HTTP request yang berbeda.

### Contoh Implementasi Source Code SSE dengan PHP

```php
<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

$eventData = [
    'message' => 'Hello from PHP!',
    'time' => time()
];

// Data wajib diawali dengan "data: " dan diakhiri "\n\n"
echo "data: " . json_encode($eventData) . "\n\n";

ob_flush();
flush();

sleep(5); // Simulasi penundaan 5 detik

$eventData = [
    'message' => 'Another message from PHP!',
    'time' => time()
];

echo "data: " . json_encode($eventData) . "\n\n";

ob_flush();
flush();
```

### Contoh Implementasi Source Code SSE dengan Golang

```go
package main

import (
    "encoding/json"
    "fmt"
    "net/http"
    "time"
)

func main() {
    http.HandleFunc("/sse", func(w http.ResponseWriter, r *http.Request) {
        w.Header().Set("Content-Type", "text/event-stream")
        w.Header().Set("Cache-Control", "no-cache")
        w.Header().Set("Connection", "keep-alive")

        flusher, ok := w.(http.Flusher)
        if !ok {
            http.Error(w, "Streaming unsupported!", http.StatusInternalServerError)
            return
        }

        eventData := map[string]interface{}{
            "message": "Hello from Golang!",
            "time":    time.Now().Unix(),
        }

        // Parse ke JSON dan kirim dengan format SSE
        jsonData, _ := json.Marshal(eventData)
        fmt.Fprintf(w, "data: %s\n\n", jsonData)
        flusher.Flush()

        time.Sleep(5 * time.Second) // Simulasi penundaan 5 detik

        eventData = map[string]interface{}{
            "message": "Another message from Golang!",
            "time":    time.Now().Unix(),
        }

        jsonData, _ = json.Marshal(eventData)
        fmt.Fprintf(w, "data: %s\n\n", jsonData)
        flusher.Flush()
    })

    fmt.Println("Starting server on port 8080")
    http.ListenAndServe(":8080", nil)
}
```

**Catatan:**

- Pastikan menggunakan header HTTP yang benar (text/event-stream dan no-cache) saat mengirimkan SSE stream.
- Gunakan format string seperti JSON atau XML untuk mengirimkan event data.
- Jangan lupa untuk melakukan proses flush data ke klien secara berkala agar pesan langsung terkirim.
- Hindari teknik caching atau proxy buffering (misalnya di Nginx) pada endpoint SSE ini, karena akan menghambat aliran stream data real-time ke klien.

[sse]: https://html.spec.whatwg.org/multipage/server-sent-events.html

{% if page.related_post %}
{% include {{ page.related_post }} %}
{% endif %}
