---
layout: post
title: "Breadth-First Search (BFS) - Penjelajahan Struktur Data yang Efisien dan Mendalam"
author: debi
date: 2024-04-01 08:33:33 +0700
image: /assets/img/labirin.webp
categories: software development
tags: algorithm bfs
related_post: related-posts.html
language: id
toc: true
excerpt: "Breadth-First Search (BFS), atau Pencarian Melebar Pertama, merupakan algoritma fundamental dalam ilmu komputer untuk menjelajahi struktur data berbasis graf atau pohon secara sistematis. Algoritma ini bekerja dengan cara mengunjungi semua simpul pada level (kedalaman) yang sama terlebih dahulu sebelum berpindah ke level berikutnya, menghasilkan eksplorasi menyeluruh dan terstruktur. BFS merupakan algoritma penjelajahan struktur data yang fundamental dan efisien, menawarkan kesederhanaan, kelengkapan, dan jaminan solusi terpendek. Algoritma ini sangat cocok untuk berbagai aplikasi, seperti pencarian rute, analisis jaringan, dan pengindeksan."
--- 

**Breadth-First Search (BFS)**, atau Pencarian Melebar Pertama, merupakan algoritma fundamental dalam ilmu komputer untuk menjelajahi struktur data berbasis graf atau pohon secara sistematis. Algoritma ini bekerja dengan cara mengunjungi semua simpul pada level (kedalaman) yang sama terlebih dahulu sebelum berpindah ke level berikutnya, menghasilkan eksplorasi menyeluruh dan terstruktur.

### Prinsip Kerja BFS

1. **Inisialisasi:** Algoritma dimulai dengan memilih simpul awal (disebut **root**) dalam struktur data.
2. **Antrian Simpul:** Sebuah struktur antrian ("queue") dibuat untuk menampung simpul-simpul yang akan dikunjungi.
3. **Iterasi Penjelajahan:**
    a. **Ambil Simpul Berikut:** Simpul pertama dikeluarkan dari antrian ("dequeue").
    b. **Tandai Simpul:** Simpul yang diambil ditandai sebagai telah dikunjungi.
    c. **Eksplorasi Tetangga:** Semua simpul yang bertetangga dengan simpul yang diambil dieksplorasi.
        i. **Simpul Baru:** Jika simpul tetangga belum dikunjungi, simpul tersebut ditambahkan ke antrian ("enqueue").
    d. **Ulangi:** Langkah 3a-3c diulangi sampai antrian kosong, menandakan semua simpul yang dapat dijangkau telah dikunjungi.

### Contoh Penerapan BFS

**1. Menemukan Jalan Terpendek dalam Labirin:**

Bayangkan Anda terjebak dalam labirin dan ingin menemukan jalan keluar tercepat. BFS dapat membantu Anda! Algoritma ini akan menjelajahi semua lorong labirin secara sistematis, dimulai dari posisi Anda saat ini. Pertama, semua lorong di level Anda akan dijelajahi, kemudian lorong di level berikutnya, dan seterusnya, hingga Anda menemukan pintu keluar. Keuntungan BFS dalam kasus ini adalah algoritma ini dijamin menemukan jalan terpendek (dalam jumlah langkah) antara Anda dan pintu keluar, asalkan labirin tersebut tidak memiliki lorong buntu atau jebakan.

**2. Menjelajahi Jaringan Sosial:**

Ingin tahu seberapa dekat Anda dengan selebriti favorit di media sosial? BFS dapat membantu! Bayangkan Anda ingin mengetahui berapa banyak "langkah" yang memisahkan Anda dari akun Instagram Elon Musk. Algoritma ini akan mulai dengan menjelajahi akun Anda, kemudian akun pengikut Anda, lalu pengikut pengikut Anda, dan seterusnya, hingga menemukan akun Elon Musk. Jumlah "langkah" yang diperlukan untuk mencapai akun Elon Musk menunjukkan tingkat koneksi Anda dengannya.

**3. Pengindeksan Web:**

Mesin pencari seperti Google menggunakan BFS secara ekstensif untuk menjelajahi internet dan membangun indeks web. Bayangkan Anda mengetikkan kata kunci "sepatu lari" di Google. Algoritma BFS akan mulai dengan halaman web Anda saat ini, kemudian menjelajahi semua tautan di halaman tersebut, lalu tautan di halaman-halaman tersebut, dan seterusnya, hingga menemukan halaman web yang relevan dengan kata kunci "sepatu lari". Hasil pencarian yang Anda lihat di Google adalah kumpulan halaman web yang telah dikunjungi dan diindeks oleh BFS.

### Keunggulan BFS

* **Kesederhanaan:** Algoritma BFS mudah dipahami dan diimplementasikan, menjadikannya pilihan yang tepat untuk pemula dalam pemrograman dan ilmu komputer.
* **Garansi Solusi Terpendek:** Pada graf tak berbobot, BFS dijamin menemukan solusi terpendek (dalam jumlah simpul yang dikunjungi) antara dua simpul yang terhubung. Hal ini sangat berguna dalam aplikasi seperti pencarian rute dan optimasi jaringan.
* **Kelengkapan:** Algoritma ini memastikan semua simpul yang dapat dijangkau dari simpul awal akan ditemukan. Ini penting untuk memastikan bahwa semua informasi yang relevan dalam struktur data telah dieksplorasi.

### Kekurangan BFS

* **Inefisiensi pada Graf Besar:** Untuk graf yang kompleks dengan banyak simpul, BFS dapat menjadi tidak efisien karena menjelajahi banyak simpul yang tidak relevan dengan solusi. Dalam kasus seperti ini, algoritma penjelajahan lain seperti Depth-First Search (DFS) mungkin lebih cocok.
* **Konsumsi Memori:** Algoritma ini membutuhkan ruang memori yang besar untuk menyimpan antrian simpul yang belum dikunjungi, terutama pada struktur data yang luas. Hal ini dapat menjadi pertimbangan dalam implementasi BFS pada perangkat dengan keterbatasan memori.

BFS merupakan algoritma penjelajahan struktur data yang fundamental dan efisien, menawarkan kesederhanaan, kelengkapan, dan jaminan solusi terpendek. Algoritma ini sangat cocok untuk berbagai aplikasi, seperti pencarian rute, analisis jaringan, dan pengindeksan.

### Contoh Source Code
Berikut adalah contoh source code untuk Breadth-First Search (BFS) dalam bahasa Python:

```python
from collections import deque

def bfs(graph, start):
  """
  Melakukan pencarian BFS pada graf.

  Args:
      graph: Dictionary yang merepresentasikan graf. Key adalah simpul, dan value adalah list berisi tetangga dari simpul tersebut.
      start: Simpul awal untuk memulai pencarian.

  Returns:
      visited: List berisi simpul yang telah dikunjungi dalam urutan BFS.
  """
  visited = []
  queue = deque([start])

  while queue:
    # Ambil simpul terdepan dari antrian
    u = queue.popleft()
    visited.append(u)

    # Periksa semua tetangga yang belum dikunjungi
    for v in graph[u]:
      if v not in visited:
        queue.append(v)

  return visited

# Contoh penggunaan
graph = {
  'A': ['B', 'C'],
  'B': ['D', 'E'],
  'C': ['F'],
  'D': [],
  'E': [],
  'F': []
}

start_node = 'A'
visited_nodes = bfs(graph, start_node)

print("Simpul yang dikunjungi (BFS):", visited_nodes)
```

#### Penjelasan Code

1. **Impor library deque:** Digunakan untuk membuat antrian (queue).
2. **Fungsi bfs(graph, start):**
    * Memasukkan simpul awal ke dalam antrian dan list visited.
    * Melakukan iterasi selama antrian tidak kosong:
        * Mengeluarkan simpul terdepan dari antrian dan menambahkannya ke visited.
        * Memeriksa semua tetangga dari simpul tersebut.
        * Jika tetangga belum dikunjungi, tambahkan ke antrian dan visited.
    * Mengembalikan list visited yang berisi simpul-simpul yang telah dikunjungi.
3. **Contoh Penggunaan:**
    * Membuat dictionary untuk merepresentasikan graf.
    * Mendefinisikan simpul awal.
    * Memanggil fungsi bfs untuk melakukan pencarian BFS.
    * Mencetak list visited yang berisi urutan simpul yang dikunjungi.

**Catatan:**
* Code ini menggunakan dictionary untuk representasi graf. Key adalah simpul, dan value adalah list berisi tetangga dari simpul tersebut.
* Anda dapat memodifikasi code ini untuk menggunakan representasi graf yang lain, seperti list of adjacency lists.