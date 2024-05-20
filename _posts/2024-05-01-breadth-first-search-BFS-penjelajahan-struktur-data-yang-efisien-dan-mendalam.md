---
layout: post
title: "Breadth-First Search (BFS) - Penjelajahan Struktur Data yang Efisien dan Mendalam"
author: debi
date: 2024-05-01 09:39:37 +0700
image: /assets/img/labirin.webp
categories: software development
tags: algorithm bfs
related_post: related-posts.html
language: id
toc: true
excerpt: "Breadth-First Search (BFS), atau Pencarian Melebar Pertama, merupakan algoritma fundamental dalam ilmu komputer untuk menjelajahi struktur data berbasis graf atau pohon secara sistematis. Algoritma ini bekerja dengan cara mengunjungi semua simpul pada level (kedalaman) yang sama terlebih dahulu sebelum berpindah ke level berikutnya, menghasilkan eksplorasi menyeluruh dan terstruktur."
--- 

**Breadth-First Search (BFS)**, atau Pencarian Melebar Pertama, merupakan algoritma fundamental dalam ilmu komputer untuk menjelajahi struktur data berbasis graf atau pohon secara sistematis. Algoritma ini bekerja dengan cara mengunjungi semua simpul pada level (kedalaman) yang sama terlebih dahulu sebelum berpindah ke level berikutnya, menghasilkan eksplorasi menyeluruh dan terstruktur.

### Prinsip Kerja BFS

1. **Inisialisasi:** Algoritma dimulai dengan memilih simpul awal (disebut **root**) dalam struktur data.
2. **Antrian Simpul:** Sebuah struktur antrian ("queue") dibuat untuk menampung simpul-simpul yang akan dikunjungi.
3. **Iterasi Penjelajahan:**

    a. **Ambil Simpul Berikut:** Simpul pertama dikeluarkan dari antrian ("dequeue").

    b. **Tandai Simpul:** Simpul yang diambil ditandai sebagai telah dikunjungi.

    c. **Eksplorasi Tetangga:** Semua simpul yang bertetangga dengan simpul yang diambil dieksplorasi. **Simpul Baru:** Jika simpul tetangga belum dikunjungi, simpul tersebut ditambahkan ke antrian ("enqueue").

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

### Contoh Source Code dalam PHP

Berikut adalah contoh kode PHP untuk Breadth-First Search (BFS):

```php
<?php

class Node {
    public $value;
    public $next;

    function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

class Graph {
    private $head;

    function __construct() {
        $this->head = null;
    }

    function addNode($value) {
        $newNode = new Node($value);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    function printGraph() {
        $currentNode = $this->head;
        while ($currentNode != null) {
            echo $currentNode->value . " -> ";
            $currentNode = $currentNode->next;
        }
        echo "NULL";
    }

    function bfs($startNode) {
        $visited = [];
        $queue = new SplQueue();

        $queue->enqueue($startNode);
        $visited[$startNode->value] = true;

        while (!$queue->isEmpty()) {
            $currentNode = $queue->dequeue();
            echo $currentNode->value . " ";

            $nextNode = $currentNode->next;
            while ($nextNode != null) {
                if (!isset($visited[$nextNode->value])) {
                    $queue->enqueue($nextNode);
                    $visited[$nextNode->value] = true;
                }
                $nextNode = $nextNode->next;
            }
        }
    }
}

// Contoh penggunaan

$graph = new Graph();
$graph->addNode("A");
$graph->addNode("B");
$graph->addNode("C");
$graph->addNode("D");
$graph->addNode("E");
$graph->addNode("F");

$graph->addEdge("A", "B");
$graph->addEdge("A", "C");
$graph->addEdge("B", "D");
$graph->addEdge("B", "E");
$graph->addEdge("C", "F");

echo "Graf: ";
$graph->printGraph();
echo "\n";

echo "BFS dari simpul A: ";
$graph->bfs($graph->head);
echo "\n";
```

#### Penjelasan Kode
* **Kelas Node:** Menyimpan nilai simpul dan referensi ke simpul berikutnya.
* **Kelas Graph:** Mengelola daftar simpul dan menyediakan metode untuk menambahkan simpul, mencetak graf, dan menjalankan BFS.
* **Metode addNode:** Menambahkan simpul baru ke dalam graf.
* **Metode printGraph:** Mencetak nilai simpul dalam graf.
* **Metode bfs:** Melakukan pencarian BFS dari simpul awal yang diberikan.
    * Membuat array `visited` untuk menandai simpul yang telah dikunjungi.
    * Membuat antrian `queue` untuk menyimpan simpul yang akan dikunjungi.
    * Memasukkan simpul awal ke dalam antrian dan menandainya sebagai dikunjungi.
    * Melakukan loop selama antrian tidak kosong:
    * Mengeluarkan simpul terdepan dari antrian dan mencetak nilainya.
    * Memeriksa tetangga simpul yang belum dikunjungi:
    * Memasukkan tetangga yang belum dikunjungi ke dalam antrian dan menandainya sebagai dikunjungi.
* **Contoh Penggunaan:** 
    * Membuat objek graf dan menambahkan simpul A, B, C, D, E, dan F.
    * Menambahkan sisi (hubungan) antara simpul-simpul.
    * Mencetak graf.
    * Melakukan BFS dari simpul A dan mencetak simpul yang dikunjungi.
**Catatan:**
* Kode ini menggunakan struktur data antrian berbasis SplQueue dari PHP.
* Anda dapat memodifikasi kode ini untuk menyesuaikan dengan kebutuhan Anda, seperti menambahkan bobot pada sisi atau menggunakan struktur data yang berbeda.


### Contoh Source Code dalam Golang

Berikut adalah contoh source code untuk Breadth-First Search (BFS) dalam bahasa Golang:

```Go
package main

import (
    "fmt"
)

// Struktur untuk merepresentasikan simpul dalam graf
type Node struct {
    Value int
    Neighbors []*Node
}

// Fungsi untuk melakukan Breadth-First Search
func BFS(graph []*Node, startNode *Node) {
    // Inisialisasi antrian
    queue := []*Node{startNode}

    // Tandai simpul awal sebagai dikunjungi
    visited := make(map[int]bool)
    visited[startNode.Value] = true

    // Iterasi sampai antrian kosong
    for len(queue) > 0 {
        // Ambil simpul terdepan dari antrian
        currentNode := queue[0]
        queue = queue[1:]

        // Cetak nilai simpul
        fmt.Printf("%d ", currentNode.Value)

        // Periksa tetangga simpul
        for _, neighbor := range currentNode.Neighbors {
            // Jika tetangga belum dikunjungi
            if !visited[neighbor.Value] {
                // Tandai tetangga sebagai dikunjungi
                visited[neighbor.Value] = true

                // Tambahkan tetangga ke antrian
                queue = append(queue, neighbor)
            }
        }
    }
}

func main() {
    // Buat graf
    graph := []*Node{
        {
            Value: 0,
            Neighbors: []*Node{
                {Value: 1},
                {Value: 2},
                {Value: 3},
            },
        },
        {
            Value: 1,
            Neighbors: []*Node{
                {Value: 0},
                {Value: 4},
            },
        },
        {
            Value: 2,
            Neighbors: []*Node{
                {Value: 0},
                {Value: 5},
            },
        },
        {
            Value: 3,
            Neighbors: []*Node{
                {Value: 0},
                {Value: 6},
            },
        },
        {
            Value: 4,
            Neighbors: []*Node{
                {Value: 1},
                {Value: 7},
            },
        },
        {
            Value: 5,
            Neighbors: []*Node{
                {Value: 2},
                {Value: 8},
            },
        },
        {
            Value: 6,
            Neighbors: []*Node{
                {Value: 3},
                {Value: 9},
            },
        },
        {
            Value: 7,
            Neighbors: []*Node{
                {Value: 4},
            },
        },
        {
            Value: 8,
            Neighbors: []*Node{
                {Value: 5},
            },
        },
        {
            Value: 9,
            Neighbors: []*Node{
                {Value: 6},
            },
        },
    }

    // Jalankan BFS dari simpul 0
    BFS(graph, graph[0])
}
```

#### Penjelasan Code

* **Struktur `Node`:**
    * `Value`: Digunakan untuk menyimpan nilai simpul.
    * `Neighbors`: Digunakan untuk menyimpan daftar tetangga simpul.
* **Fungsi `BFS`:**
    * Mengambil graf dan simpul awal sebagai parameter.
    * Menginisialisasi antrian dan menandai simpul awal sebagai dikunjungi.
    * Melakukan iterasi sampai antrian kosong.
    * Mengambil simpul terdepan dari antrian, mencetak nilainya, dan menambahkan tetangga yang belum dikunjungi ke antrian.
* **Fungsi `main`:**
    * Membuat graf yang terdiri dari 10 simpul.
    * Menjalankan `BFS` dari simpul 0.

**Cara Menjalankan Code:**

1. Simpan code di file `bfs.go`.
2. Buka terminal dan navigasikan ke direktori di mana file `bfs.go` disimpan.
3. Jalankan perintah `go run bfs.go`.

Code ini akan mencetak urutan kunjungan simpul dalam graf menggunakan BFS, dimulai dari simpul 0. Anda dapat mengubah graf dan simpul awal untuk menguji code pada contoh yang berbeda.

**Catatan:**

* Code ini hanya contoh sederhana dan dapat dimodifikasi untuk kebutuhan yang lebih kompleks.


### Contoh Source Code dalam Python
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

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}