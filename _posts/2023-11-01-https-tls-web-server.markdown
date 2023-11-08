---
layout: post
title:  "HTTPS/TLS Web Server"
author: jill
date:   2023-11-01 11:11:11 +0700
image: assets/img/secure-connection.webp
categories: software development
tags: protocol server
---
### SSL
*SSL, Secure Sockets Layer* adalah standar untuk pengamanan komunikasi melalui internet. 
Data atau informasi yang sedang dikomunikasikan dari sebuah system ke system lain akan 
diproteksi dengan cara mengacak informasi tersebut menggunakan algoritma enkripsi.

### SSL Certificates
*SSL Certificates* adalah sebuah file berisikan informasi mengenai website, yang nantinya 
dibutuhkan untuk enkripsi data. SSL Certificate berisikan **Public Key**. Public key digunakan 
untuk mengenkripsi data yang akan ditransfer.

Certificate ditandatangani secara digital oleh **Certificate Athorities (CA)**. Digital Signature 
atau tanda tanga digital merupakan sebuah kode unik yang dihasilkan dengan teknologi cryptography 
(Public Key Infrastructure).

Certificate Authorities sendiri merupakan entitas atau institusi legal yang mengeluarkan dan memverifikasi 
sertifikat digital.

Ketika seseorang pengguna internet menjelajah, mengakses sebuah website yang menerapkan SSL, 
informasi yang dikirim akan di-enkripsi dengan aman (menggunakan public key) dan hanya bisa 
didekripsi menggunakan **Private Key**.

Private key, atau Secret key, adalah file terpisah yang diperlukan pada proses dekripsi data yang 
dienkripsi menggunakan public key.

Berikut merupakan penjelasn dalam bentuk gambar yang diambil dari [Rapidsslonline][rapidsslonline-com].
![Public Key Cryptography](https://dikakaryatech.com/assets/img/PublicPrivateKeyEncryption.png "Public Key Cryptography")

Kedua file certificate dan file private key harus disimpan dengan sangat aman di server.

### TLS
*TLS, Transport Layer Security* adalah versi yang lebih update dari SSL.

### HTTPS
*HTTPS, Hyper Text Transfer Protocol Secure* adalah ekstensi dari HTTP yang berguna untuk 
pengamanan komunikasi melalui internet. Data atau informasi yang dikomunikasikan di-enkripsi 
menggunakan **TLS**.

[rapidsslonline-com]: https://rapidsslonline.com