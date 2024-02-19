---
layout: post
language: id
title: "Integrasi Sistem"
author: debi
date: 2023-12-15 15:28:55 +0700
image: /assets/img/handle-puzzle.webp
categories: software development
tags: system-integrator system-architect
related_post: related-posts.html
excerpt: "Integrator sistem adalah merupakan sebuah rangkaian proses menghubungkan beberapa sistem komputerisasi dan software aplikasi, baik secara fungsional dan fisik. Sistem integrasi akan menggabungkan komponen-komponen sub sistem dan menjamin fungsi-fungsi dari sub sistem tersebut sebagai satu kesatuan."
---
Integrasi sistem adalah sebuah rangkaian proses menghubungkan beberapa sistem komputerisasi dan software aplikasi, baik secara fungsional dan fisik. Sistem integrasi akan menggabungkan komponen-komponen sub sistem dan menjamin fungsi-fungsi dari sub sistem tersebut sebagai satu kesatuan. Keuntungan dari integrasi sistem ini adalah membaiknya suatu arus informasi dalam sebuah organisasi. Suatu pelaporan biasanya memang memerlukan waktu, namun demikian akan semakin banyak informasi yang relevan dalam kegiatan manajerial yang dapat diperoleh bila diperlukan.

Keuntungan ini merupakan alasan yang kuat untuk mengutamakan (mengunggulkan) sistem informasi terintegrasi karena tujuan utama dari sistem informasi adalah memberikan informasi yang benar pada saat yang tepat, namun demikian akan semakin banyak informasi yang relevan dalam kegiatan manajerial yang dapat diperoleh bila diperlukan.

### Macam-macam Integrator Sistem
#### 1. Legacy System Integrator
Tujuan integrasi ini adalah untuk menggabungkan aplikasi modern ke dalam sistem lama perusahaan yang sudah ada. Masih banyak perusahaan yang menggunakan perangkat lunak lama untuk menjalankan bisnisnya.

{: .text-center }
![Legacy System Integrator](/assets/img/legacy-system-integrator.webp "Legacy System Integrator"){: .img-thumbnail }

#### 2. Enterprise Application Integrator (EAI)
Tujuan integrasi ini adalah untuk menyatukan berbagai sub-sistem menjadi sebuah lingkungan bisnis. Saat perusahaan sedang berkembang pada umumnya masih menggunakan banyak aplikasi untuk menunjang pekerjaan perusahaan mereka.  EAI bisa membuat semua fungsi sistem ke dalam satu rantai bisnis dan mengotomasikan pertukaran data secara real time diantara aplikasi yang berbeda.

{: .text-center }
![Enterprise Application Integrator](/assets/img/eai.webp "Enterprise Application Integrator"){: .img-thumbnail }

#### 3. B2B Integrator
Tujuan integrasi ini adalah menghubungkan sistem dari dua perusahaan atau lebih. Integrasi ini lebih mengarah kepada kerjasama dan perdagangan yang lebih efisien.

#### 4. Third-party System Integrator
Tujuan integrasi ini adalah untuk memperluas fungsionalitas sistem yang sudah ada di perusahaan. Jenis integrasi ini menjadi pilihan bagi setiap bisnis yang membutuhkan fungsionalitas baru tetapi tidak bisa mengembangkan perangkat lunak khusus.

### Metodologi Integrasi Sistem
Terdapat empat metodologi integrasi yang umum dilakukan di perusahaan, yaitu:

#### Vertical Integration
Integrasi vertikal merupakan metode yang diintegrasikan menurut fungsinya dengan membuat entitas yang fungsional. Metode adalah metode yang paling sederhana karena hanya melibatkan beberapa vendor, mitra, dan developer untuk menjalankan fungsi bisnis. 

{: .text-center }
![Vertical System Integration](/assets/img/vertical-system-integration.webp "Vertical System Integration"){: .img-thumbnail }

#### Horizontal Integration
Integrasi horizontal disebut juga sebagai Enterprise Service Bus (ESB). Metode ini melibatkan pembuatan sub-sistem khusus yang berfungsi untuk menghubungkan dengan sub-sistem lainnya. Integrasi ini harus melibatkan pembuatan aplikasi custom yang memungkinkan membuat koneksi terprogram antara berbagai aplikasi lainnya.

{: .text-center }
![Horizontal System Integration](/assets/img/horizontal-system-integration.webp "Horizontal System Integration"){: .img-thumbnail }

#### Point to Point Integration
Metode ini disebut juga dengan Star Integration atau Spagheti Integration, adalah proses mengintegrasikan sistem dengan cara menghubungkan satu sub-sistem ke semua sub-sub sistem lainnya. Sebuah fungsi bisnis yang diimplementasikan dalam sebuah sub-sistem akan di-broadcast ke semua sub-sub sistem lain yang bergantung pada fungsi bisnis tersebut agar dapat digunakan sebagaimana mestinya.

{: .text-center }
![Point to Point System Integration](/assets/img/point-to-point-system-integration.webp "Point to Point System Integration"){: .img-thumbnail }

#### Hub-and-spoke
Model hub-and-spoke adalah integration architecture yang lebih canggih untuk mengatasi masalah point-to-point dan membantu menghindari star/spaghetti mess. Koneksi antar seluruh subsistem ditangani oleh central hub (message broker), sehingga tidak berkomunikasi satu sama lain secara langsung. Hub berfungsi sebagai message-oriented middleware dengan mesin integrasi terpusat untuk menerjemahkan operasi ke dalam satu canonical language dan mengarahkan pesan ke tujuan yang tepat. Adapter yang menghubungkan hub ke subsistem dikelola secara individual.

{: .text-center }
![Hub-and-Spoke System Integration](/assets/img/spoke-hub-system-integration.webp "Hub-and-Spoke System Integration"){: .img-thumbnail }

#### Common Data Format
Integrasi ini menggunakan shared file dalam pertukaran informasi antar sub-sistem.

{: .text-center }
![Common Data Format System Integration](/assets/img/common-data-system-integration.webp "Common Data Format System Integration"){: .img-thumbnail }