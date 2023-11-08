---
layout: post
title:  "Cross-Origin Resource Sharing"
author: jill
date:   2023-10-10 14:33:47 +0700
image: assets/img/html-system-websites-concept-1500x1000.webp
categories: software development
tags: protocol server
---
*Cross-Origin Resource Sharing* (CORS) adalah mekanisme untuk memberi tahu web browser, apakah 
sebuah request yang di-dispatch dari aplikasi web domain lain atau origin lain, ke aplikasi web kita 
itu diperbolehkan atau tidak. Jika aplikasi kita tidak mengijinkan maka akan terjadi error, dan request 
pasti dibatalkan oleh browser.

CORS hanya berlaku pada request-request yang dilakukan melalui browser, javascript, dan tujuan 
request-nya berbeda domain/origin. Request jenis ini biasa disebut dengan istilah cross-origin 
HTTP Request. Maka request yang dilakukan melaui CURL atau back-end tidak akan terdampak oleh 
aturan CORS. 

Konfigurasi CORS dilakukan di response header aplikasi web. Penerapannya di semua bahasa pemrograman 
yang web-based adalah sama, yaitu dengan memanipulasi response header-nya. Berikut adalah list header 
yang bisa digunakan untuk konfigurasi CORS:
  - Access-Control-Allow-Origin
  - Access-Control-Allow-Methods
  - Access-Control-Allow-Headers
  - Access-Control-Allow-Credentials
  - Access-Control-Max-Age

Konfigurasi CORS berada di sisi server, di aplikasi web tujuan request. Contohnya, aplikasi kita di lokal 
dan akan mengambil data dari google.com, maka konfigurasi CORS berada di google.com; Jika terjadi error 
CORS maka tidak ada lagi yang bisa dilakukan, karena CORS aplikasi tujuan dikontrol oleh orang-orang yang 
berada di google.com.
