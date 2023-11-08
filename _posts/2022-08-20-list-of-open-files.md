---
layout: post
title: "List of Open Files"
author: jill
image: assets/img/woods-1500x800.webp
categories: linux
tags: script programming
---

<em>lsof</em> adalah perintah untuk mengetahui program/software yang sedang mengakses file tertentu.

Mungkin dari kita pernah mengalami sewaktu me-<em>copy file</em>, menginstalasi software 
atau me-<em>remove</em> software di linux muncul pesan kesalahan bahwa file tertentu 
sedang digunakan oleh program lain, dan proses tersebut tidak dapat dilanjutkan 
lagi. Sebagian dari kita juga sudah mengetahui untuk melihat proses-proses 
yang sedang berjalan di linux bisa menggunakan perintah <strong>top</strong> atau <strong>ps -aux</strong>, 
namun jika perintah-perintah tersebut belum bisa menampilkan program apa saja 
yang sedang mengakses file tertentu, maka kita bisa menggunakan 
perintah-perintah berikut:
<pre>
<code class="language-shell">
lsof path-file
fuser -v path-file
</code>
</pre>

contoh penggunaan:
<pre>
<code class="language-shell">
lsof /var/cache/debconf/config.dat
fuser -v /var/cahce/debconf/config.dat
</code>
</pre>

