---
layout: default # Sesuaikan dengan nama layout single portfolio di theme Anda
title: "Studi Kasus: Otomatisasi Analisis Dokumen Sewa dengan AI (NLP) - Tenancy Project"
meta_description: "Bagaimana Dika Karya Tech mengembangkan Tenancy Project menggunakan Kecerdasan Buatan (NLP) untuk menganalisis dan mengekstrak data dari ribuan dokumen sewa secara otomatis."
permalink: /portofolio/tenancy-project-nlp.html
thumbnail: /assets/images/portfolio/tenancy-project-showcase.webp
client: "Staple Media"
category: "Web Aplikasi Custom & AI"
tech_stack:
  ["Python", "Natural Language Processing (NLP)", "React", "Cloud Architecture"]
year: "2025" # Sesuaikan dengan tahun pengerjaan
---

## Executive Summary

Dalam industri properti dan manajemen _real estate_, meninjau dan mengekstrak data klausa penting dari ribuan halaman kontrak sewa (Tenancy Agreement) adalah proses manual yang melelahkan, rentan terhadap _human error_, dan sangat mahal.

Untuk mengatasi inefisiensi ini, **Staple Media** bermitra dengan Dika Karya Tech untuk merancang dan membangun **Tenancy Project**: sebuah aplikasi web _custom_ yang ditenagai oleh Kecerdasan Buatan (_Artificial Intelligence_). Sistem ini menggunakan teknologi _Natural Language Processing_ (NLP) untuk secara cerdas "membaca", menganalisis, dan mengekstrak poin-poin data kritis dari dokumen legal secara instan.

---

## ⚠️ Tantangan: Beban Audit Dokumen Legal yang Masif

Manajemen properti komersial berhadapan dengan volume dokumen kontrak yang luar biasa besar setiap bulannya. Tim legal dan administrasi sering kali terjebak dalam masalah berikut:

1. **Inefisiensi Ekstraksi Manual:** Staf harus membaca puluhan halaman per kontrak hanya untuk menemukan 5-10 variabel kunci (seperti tanggal jatuh tempo, denda keterlambatan, atau klausa perpanjangan).
2. **Standardisasi yang Buruk:** Setiap kontrak sewa ditulis dengan gaya bahasa legal yang berbeda-beda, membuat pembuatan _template_ ekstraksi data biasa (berbasis _RegEx_ atau _scripting_ kaku) menjadi tidak efektif.
3. **Risiko Kepatuhan (Compliance):** Satu klausul penalti yang terlewat dari bacaan manual dapat mengakibatkan kerugian finansial yang signifikan bagi perusahaan pengelola.

---

## 💡 Solusi: Arsitektur NLP & Ekstraksi Data Cerdas

Dika Karya Tech merancang arsitektur sistem berbasis _cloud_ yang menggabungkan antarmuka pengguna web yang intuitif dengan mesin AI yang kuat di _backend_.

Pendekatan rekayasa sistem yang kami lakukan meliputi:

- **Implementasi Model NLP Kustom:** Mengembangkan dan melatih model _Natural Language Processing_ yang dirancang khusus untuk mengenali konteks, semantik, dan entitas spesifik (Named Entity Recognition/NER) dalam jargon hukum properti.
- **Pipeline Pemrosesan Dokumen Tahan Banting:** Membangun _workflow_ otomasi di mana dokumen yang diunggah (PDF/Word) langsung dibersihkan (OCR jika perlu) lalu diumpankan ke model AI untuk dianalisis dalam hitungan detik.
- **Dashboard Verifikasi Terpusat:** AI tidak dibiarkan bekerja sendiri. Kami membangun _dashboard_ UI interaktif yang menyajikan hasil ekstraksi AI (Highlight Data) secara bersisian dengan dokumen asli. Ini memungkinkan staf untuk melakukan tinjauan cepat (Human-in-the-Loop) dengan satu klik persetujuan.
- **Integrasi Data yang Mulus:** Data yang telah diekstrak dan diverifikasi secara otomatis disinkronkan dan diekspor ke database inti perusahaan atau format terstruktur (Excel/JSON) untuk analisis lebih lanjut.

---

## 📈 Dampak & Hasil Implementasi (The Impact)

Implementasi "Tenancy Project" mengubah paradigma operasional pengauditan kontrak dari berhari-hari menjadi hitungan menit:

- **Kecepatan Analisis Eksponensial:** Waktu peninjauan untuk satu dokumen kontrak turun drastis; mesin NLP mengekstrak data 50x lebih cepat daripada staf manusia terbaik.
- **Pengurangan Beban Operasional:** Menghilangkan kebutuhan untuk menyewa tenaga administrasi tambahan (data entry) di musim sibuk, sehingga perusahaan dapat merelokasi staf ke tugas-tugas yang lebih strategis.
- **Akurasi Data Hukum yang Superior:** Model NLP yang dilatih secara konsisten mengurangi tingkat kesalahan manusia (_human error_) dalam pencatatan tanggal kritis dan nominal finansial.

> _"Keberhasilan Tenancy Project membuktikan bahwa AI bukan hanya teori di atas kertas. Dengan arsitektur sistem yang tepat, NLP dapat diintegrasikan menjadi solusi operasional (production-ready) yang secara nyata menyelamatkan ribuan jam kerja perusahaan Anda."_ — **Tim Inovasi Dika Karya Tech**

---

<div class="alert alert-info text-center mt-5" style="padding: 30px; border-radius: 8px; background-color: #f8fcfd; border: 1px solid #d1ecf1;">
  <h3 style="color: #0c5460; font-size: 22px; font-weight: 600; margin-top:0;">Apakah Proses Bisnis Anda Terhambat oleh Tumpukan Data Manual?</h3>
  <p style="color: #4a4a4a; font-size: 16px; margin-bottom: 20px;">Tingkatkan efisiensi perusahaan Anda ke level berikutnya. Mari diskusikan bagaimana implementasi AI (NLP) dan Otomasi Sistem kustom dapat memecahkan masalah operasional Anda.</p>
  <a href="https://api.whatsapp.com/send?phone=6282143186197&text=Halo%20Tim%20Dika%20Karya%20Tech.%20Saya%20telah%20membaca%20studi%20kasus%20Tenancy%20Project%20(AI/NLP).%20Bisakah%20kita%20menjadwalkan%20diskusi%20mengenai%20potensi%20implementasi%20Kecerdasan%20Buatan%20atau%20Otomasi%20untuk%20sistem%20perusahaan%20saya?" 
     target="_blank" 
     class="btn btn-theme effect border btn-md" 
     style="background-color: #21c87a; color: #ffffff; border-radius: 30px; padding: 12px 30px; font-weight: 600; text-transform: uppercase; white-space: nowrap; border: none; display: inline-block;">
     <i class="fab fa-whatsapp" style="margin-right: 8px; font-size:16px;"></i> Konsultasi Solusi AI Sekarang
  </a>
</div>
