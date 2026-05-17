---
name: Para Penulis
title: Blog Author of Dika Karya Tech
tagline: Dika Karya Tech adalah perusahaan Pengembang Software Custom di Sidoarjo.
description: Dika Karya Tech menghadirkan layanan Pengembangan Aplikasi Custom, Jasa Konsultan IT, Jasa Integrasi IPPBX, dan Otomasi proses Integrator sistem.
language: id
---

<ul>
  {% for author in site.authors %}
  <li>
    <a href="{{ author.url }}">{{ author.name }}</a>
  </li>
  {% endfor %}
</ul>
