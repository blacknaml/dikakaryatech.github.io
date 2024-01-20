---
layout: post
title: "Cross-Site Request Forgery"
author: jill
date: 2023-10-11 08:37:47 +0700
image: /assets/img/construction-site-1500x1000.webp
categories: software development
tags: protocol server
related_post: related-posts.html
language: id
---

_Cross-Site Request Forgery_ (CSRF) adalah salah satu tehnik hacking yang dilakukan dengan cara
mengeksekusi perintah yang seharusnya tidak diizinkan, tetapi output yang dihasilkan sesuai dengan
yang seharusnya. Contoh serangan jenis ini adalah mencoba untuk login lewat media selain web browser,
seperti menggunakna CURL, menembak langusng endpoint login, dan banyak contoh lainnya.

Ada beberapa cara untuk mencegah serangan ini, salah satunya adalah dengan memanfaatkan token CSRF. Di
setiap halaman yang ada form, token csrf dibuat. Dan pada saat submit form, csrf disisipkan direquest,
kemudian di back-end dilakukan pengecekan apakah csrf yang dikirim valid atau tidak.

Token CSRF sendiri merupakan sebuah random string yang dibuat saat halaman form muncul. Biasanya di setiap
request POST, token tersebut disisipkan sebagai header, form data atau query string.

Lebih detailnya silakan merujuk ke [CSRF docs][crsf-docs]

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}

[crsf-docs]: https://en.wikipedia.org/wiki/Cross-site_request_forgery
