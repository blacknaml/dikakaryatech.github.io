---
layout: post
title: "Daftar LLM Open Source"
author: debi
date: 2024-08-19 13:33:33 +0700
image: /assets/img/llm-robots.webp
categories: software development
tags: machine-learning ai deep-learning nlp gen-ai
related_post: related-posts.html
language: id
toc: true
excerpt: "Model open-source mengubah lanskap LLM yang menjanjikan keamanan yang lebih baik, efisiensi biaya, dan penyesuaian untuk penerapan AI. Meskipun ChatGPT memiliki lebih dari 180 juta pengguna, solusi on-premises telah menguasai lebih dari separuh pasar LLM, dengan proyeksi yang mengindikasikan pertumbuhan yang berkelanjutan di tahun-tahun mendatang."
---

Model open-source mengubah lanskap LLM yang menjanjikan keamanan yang lebih baik, efisiensi biaya, dan penyesuaian untuk penerapan AI. Meskipun ChatGPT memiliki lebih dari 180 juta pengguna, solusi on-premises telah menguasai lebih dari separuh pasar LLM, dengan proyeksi yang mengindikasikan pertumbuhan yang berkelanjutan di tahun-tahun mendatang. Trennya jelas: sejak awal tahun 2023, rilis model open-source baru telah meningkat hampir dua kali lipat dibandingkan dengan model closed-source.

{: .text-center }
{% figure caption:"Rilis LLM berdasarkan tahun: blue = pre-trained models, orange = instruction-tuned. Setengah bagian atas menunjukkan open-source model, setengah bagian bawah berisi closed-source model. Sumber: https://arxiv.org/abs/2307.06435" %}
![Rilis LLM berdasarkan tahun: blue = pre-trained models, orange = instruction-tuned. Setengah bagian atas menunjukkan open-source model, setengah bagian bawah berisi closed-source model. Sumber: https://arxiv.org/abs/2307.06435](/assets/img/LLM-trends.webp "Rilis LLM berdasarkan tahun: blue = pre-trained models, orange = instruction-tuned. Setengah bagian atas menunjukkan open-source model, setengah bagian bawah berisi closed-source model. Sumber: https://arxiv.org/abs/2307.06435"){: .img-thumbnail }
{% endfigure %}

Kali ini kita akan menyelami dunia LLM open-source dan :
* mendiskusikan alasan di balik lonjakan penerapan LLM open-source;
* mengenali tantangan dan potensi kerugian;
* meninjau 11 LLM open-source terbaik yang ada di pasaran;
* menunjukkan kepada Anda cara mengakses open-source model AI yang kuat ini dengan mudah;

**Baca terus untuk mengetahuinya!**

### Apakah ada LLM open-source?

Untuk artikel ini, kami telah memilih 11 open-source model LLM yang populer, dengan fokus pada model yang digunakan secara luas dan tersedia di Ollama.

Ulasan kami mencakup berbagai model “dasar” yang sudah terlatih dan varian yang sudah disetel dengan baik. Model-model ini tersedia dalam berbagai ukuran, dan Anda bisa menggunakannya secara langsung atau memilih versi yang sudah disetel dengan baik dari pengembang asli atau sumber pihak ketiga.

> Meskipun pre-trained model memberikan fondasi yang kuat, namun versi instruction-tuned biasanya diperlukan untuk aplikasi yang praktis dan khusus untuk tugas tertentu. Banyak vendor menawarkan pre-fine-tuned model, tetapi pengguna dapat membuat dataset mereka sendiri untuk menyempurnakan lebih lanjut untuk kasus penggunaan yang lebih khusus.

Berikut adalah tabel LLM open-source dari kami:

<div class="table-responsive" markdown="1">
| Model | Developer | Parameter | Context | Implementasi |
| --- | :---: | :---: |  :---: |  :---: | 
| [Llama3](#llama3) | Meta | 1B, 3B, 8B, 70B, 405B | 8k, 128k | GeneralGeneral text generation, Multilingual tasks, Code generation, Long-form content, Fine-tuning untuk domain spesifik |
| [Mistral](#mistral) | Mistral AI | 3B-124B | 32k-128k | High-complexity tasks, Multilingual processing, Code generation, Image understanding, Edge computing, On-device AI, Efficient large-scale processing |
| [Falcon 3](#falcon3) | TII | 1B, 3B, 7B, 10B | 8k-32k | General text generation, Code generation, Mathematical tasks, Scientific knowledge, Multilingual applications, Fine-tuning untuk domain spesifik |
| [Gemma 2](#gemma2) | Google | 2B, 9B, 27B | 8k | General text generation, Question answering, Summarization, Code generation, Fine-tuning untuk domain spesifik |
| [Phi-3.x/4](#phi3-4) | Microsoft | 3.8B (mini) 7B (small) 14B (medium) 42B (MoE) | 4k, 8k, 128k, 16k (Phi-4) | General text generation, Multi-lingual tasks, Code understanding, Math reasoning, Image understanding (vision model), On-device inference |
| [Command R](#commandr) | Cohere | 7B, 35B, 104B | 128k | Conversational AI, RAG, Tool use, Multilingual tasks, Long-form content generation |
| [StableLM2](#stablelm) | Stability AI | 1.6B, 3B, 12B | Up to 16k | Multilingual text generation, Code generation and understanding, Fine-tuning for specific tasks, Research and commercial applications |
| [StarCoder2](#starcoder) | BigCode | 3B, 7B, 15B | 16k | Code completion, Multi-language programming, Code understanding, Fine-tuning for specific tasks |
| [Yi](#yi) | 01.Ai | 6B, 9B, 34B | 4k, 8k, 200k | Bilingual text generation, Code understanding and generation, Math and reasoning tasks, Fine-tuning untuk domain spesifik |
| [Qwen2.5](#qwen2) | Alibaba | 0.5B to 72B | 128k | General text generation, Multilingual tasks, Code generation, Mathematical reasoning, Structured data processing |
| [DeepSeek-V2.x/V3](#deepseek2-3) | DeepSeek AI | 16B, 236B, 671B for V3 (2.4B-37B activated) | 32k-128k | General text generation, Multilingual tasks, Code generation, Fine-tuning, Advanced reasoning (V3) |
| --- | --- | --- |  --- |  --- | 
{: .table .table-bordered }
</div>

Untuk daftar LLM lebih lengkap yang tersedia di luar artikel ini, Anda dapat melihat repositori [Awesome-LLM GitHub](https://github.com/Hannibal046/Awesome-LLM), yang menyediakan katalog ekstensif model bahasa dan sumber daya terkait.

### Apa kelebihan dan kekurangan LLM open-source?

Berikut beberapa kelebihan LLM open-source:
* Kepemilikan penuh memastikan kontrol penuh atas model, data training, dan aplikasi.
* Akurasi fine-tuning dengan menyesuaikan parameter model dan didukung oleh kontribusi komunitas.
* Model-model bisa berumur panjang karena dihosting sendiri.
* Fleksibilitas dalam memilih kombinasi perangkat lunak dan perangkat keras memungkinkan alokasi sumber daya optimal berdasarkan kebutuhan yang spesifik.
* Kontribusi komunitas memungkinkan optimalisasi model melalui teknik-teknik seperti kuantisasi dan pemangkasan, serta pengembangan strategi penyebaran yang efisien dan alat pendukung.

Terlepas dari kelebihannya, LLM open-source memiliki beberapa kelemahan potensial:
* Kualitas mungkin tidak dapat menyamai solusi yang ditawarkan oleh perusahaan besar karena sumber daya yang terbatas.
* Kerentanan terhadap serangan menjadi perhatian, karena pelaku kejahatan berpotensi memanipulasi data input dan mengganggu perilaku model dalam lingkungan open-source.
* Persyaratan lisensi sangat bervariasi. Beberapa model menggunakan lisensi permisif (seperti Apache 2.0), yang lain memiliki batasan non-komersial, dan beberapa (seperti Meta Llama 3) menyertakan persyaratan khusus untuk penggunaan komersial.


### Apa saja LLM open-source itu ?

Mari kita bahas satu per satu LLM open-source dan lihat lebih dekat!

#### Llama3 {#llama3}
Paling cocok untuk: aplikasi umum dengan kebutuhan skalabilitas.

[Llama 3](https://ai.meta.com/blog/meta-llama-3/?ref=dikakaryatech.com/blog) adalah generasi terbaru dari model bahasa besar open-source Meta, yang menawarkan kinerja tinggi di berbagai tugas. Model Llama 3.3 70B terbaru menawarkan performa yang sebanding dengan model parameter 405B dengan biaya komputasi yang lebih murah, sehingga menjadi pilihan yang menarik bagi para pengembang dan peneliti.

**Kasus penggunaan Llama 3**
* Pembuatan dan pemahaman teks
* Aplikasi multibahasa dalam berbagai bahasa
* Pembuatan dan pemahaman kode
* Pembuatan dan analisis konten panjang
* Fine-tuning untuk domain atau tugas tertentu
* Interaksi seperti asisten dalam chatbot dan aplikasi AI

#### Mistral {#mistral}
Paling cocok untuk: AI pada perangkat dengan pemanggilan fungsi.

[Mistral AI](https://mistral.ai/technology/?ref=dikakaryatech.com/blog#models), sebuah perusahaan rintisan asal Prancis, dengan cepat menjadi pemain utama dalam bidang LLM open-source. Model Mistral dirancang untuk memenuhi berbagai macam aplikasi, mulai dari perangkat canggih hingga solusi perusahaan berskala besar. Perusahaan ini menawarkan model open-source di bawah lisensi Apache 2.0 dan model komersial dengan lisensi yang dapat dinegosiasikan. Model Ministral terbaru (3B dan 8B) sangat terkenal karena kinerjanya dalam skenario komputasi edge, mengungguli model-model berukuran serupa dari raksasa teknologi.

**Kasus penggunaan Mistral AI**
* Pembuatan dan pemahaman teks
* Penalaran dan pemecahan masalah dengan tingkat kerumitan tinggi
* Pembuatan dan pemahaman kode
* Analisis gambar dan tugas-tugas multimodal
* AI pada perangkat untuk ponsel cerdas dan laptop
* Pemrosesan skala besar yang efisien dengan model MoE

#### Falcon 3 {#falcon3}
Paling cocok untuk: lingkungan dengan sumber daya terbatas.

[Falcon 3](https://falconllm.tii.ae/falcon3/index.html?ref=dikakaryatech.com/blog) adalah iterasi terbaru dari model bahasa besar open-source yang dikembangkan oleh Technology Innovation Institute (TII) di Abu Dhabi. Rangkaian model ini menunjukkan kinerja yang mengesankan untuk LLM kecil sekaligus mendemokratisasi akses ke AI canggih dengan memungkinkan pengoperasian yang efisien pada infrastruktur ringan, termasuk laptop.

**Kasus penggunaan Falcon 3**
* Pembuatan dan pemahaman teks
* Pembuatan dan pemahaman kode
* Tugas matematika dan sains
* Aplikasi multibahasa
* Fine-tuning untuk domain atau tugas tertentu
* Penerapan yang efisien di lingkungan dengan sumber daya terbatas

#### Gemma 2 {#gemma2}
Paling cocok untuk: pengembangan dan penerapan AI yang bertanggung jawab

[Gemma 2](https://ai.google.dev/gemma?ref=dikakaryatech.com/blog) adalah keluarga LLM open-source terbaru dari Google, yang dibangun di atas penelitian dan teknologi yang sama yang digunakan untuk membuat model Gemini. Menawarkan kinerja yang kuat untuk ukurannya, Gemma 2 dirancang dengan fokus pada pengembangan AI yang bertanggung jawab dan penerapan yang efisien.

**Kasus penggunaan Gemma 2**
* Pembuatan dan pemahaman teks
* Menjawab pertanyaan dan perangkuman
* Pembuatan dan pemahaman kode
* Fine-tuning untuk domain atau tugas tertentu
* Penelitian dan pengembangan AI yang bertanggung jawab
* Aplikasi AI pada perangkat (terutama dengan model 2B)

#### Phi 3.x / 4 {#phi3-4}
Paling cocok untuk: solusi AI yang hemat biaya

[Phi-3.x / 4](https://azure.microsoft.com/en-us/products/phi/?ref=dikakaryatech.com/blog) adalah keluarga Small Language Model (SLM) Microsoft yang open-source, yang dirancang untuk menjadi sangat mumpuni dan hemat biaya. Pembaruan Phi-3.5 menghadirkan dukungan multi-bahasa yang disempurnakan, pemahaman gambar multi-bingkai yang lebih baik, dan arsitektur MoE yang baru. Phi-4, model terbaru, menekankan kualitas data daripada ukuran data. Ini dilatih pada data sintetis, konten publik yang disaring, dan sumber daya akademis. Model ini mencapai kinerja yang mengesankan pada berbagai tolok ukur hanya dengan parameter 16B.

**Kasus penggunaan Phi 3.x / 4**
* Pembuatan dan pemahaman teks
* Aplikasi multibahasa dalam berbagai bahasa
* Pembuatan dan pemahaman kode
* Penalaran matematis dan pemecahan masalah
* Aplikasi yang sensitif terhadap latensi
* Solusi AI yang hemat biaya untuk lingkungan dengan sumber daya terbatas

#### Command R {#commandr}
Paling cocok untuk: conversational AI tingkat perusahan dan RAG

[Command R](https://cohere.com/command?ref=dikakaryatech.com/blog) adalah rangkaian LLM andalan Cohere untuk aplikasi tingkat perusahaan dengan fokus pada interaksi percakapan dan tugas-tugas dengan konteks yang panjang. Rangkaian produk ini meliputi Command R, Command R+, dan Command R7B yang ringkas, masing-masing dioptimalkan untuk kasus penggunaan yang berbeda.

**Kasus penggunaan Command R**
* AI percakapan dan chatbot berkinerja tinggi
* Alur kerja RAG yang kompleks untuk pencarian dan sintesis informasi
* Penggunaan alat bantu multi-langkah untuk tugas-tugas dinamis dan reasoning-based
* Aplikasi dan penerjemahan lintas bahasa
* Pembuatan dan pemahaman kode
* Analisis data keuangan dan numerik
* Aplikasi pada perangkat (dengan Command R7B)

#### StableLM {#stablelm}
Paling cocok untuk: pembuatan prototipe dan eksperimen cepat

[StableLM](https://stability.ai/stable-lm?ref=dikakaryatech.com/blog) adalah seri LLM open-source dari Stability AI, yang menawarkan kinerja kompetitif dalam ukuran yang ringkas. Rangkaian produk ini mencakup berbagai ukuran model dan spesialisasi. Model 1.6B, yang dilatih dengan sekitar 2 triliun token, mengungguli banyak model di bawah parameter 2B pada berbagai tolok ukur. Stability AI menyediakan versi dasar dan versi yang disetel dengan instruksi, bersama dengan pos pemeriksaan pra-pelatihan untuk memfasilitasi penyempurnaan lebih lanjut.

**Kasus penggunaan StableLM**
* Pembuatan dan pemahaman teks umum dalam berbagai bahasa
* Pembuatan dan pemahaman kode di berbagai bahasa pemrograman
* Fine-tuning untuk domain atau tugas tertentu
* Aplikasi riset dan komersial

#### Starcoder {#starcoder}
Paling cocok untuk: tugas-tugas terkait kode dan bahasa pemrograman

[StarCoder2](https://github.com/bigcode-project/starcoder2?ref=dikakaryatech.com/blog) adalah generasi berikutnya dari model bahasa open-source yang dilatih secara transparan untuk source code, yang dikembangkan oleh proyek BigCode. Model ini menawarkan kinerja tinggi untuk tugas-tugas terkait kode di berbagai bahasa pemrograman. Model 15B, khususnya, menyamai kinerja model 33B+ yang jauh lebih besar pada banyak evaluasi, sedangkan model 3B menyamai kinerja model StarCoder 15B sebelumnya, yang menunjukkan peningkatan signifikan dalam efisiensi dan kemampuan.

**Kasus penggunaan Starcoder**
* Penyelesaian dan pembuatan kode di berbagai bahasa pemrograman
* Pemahaman dan analisis kode
* Fine-tuning untuk tugas atau bahasa pemrograman tertentu
* Membantu developer dalam berbagai skenario pengkodean
* Penelitian dalam model bahasa kode dan AI untuk pemrograman

#### Yi {#yi}
Paling cocok untuk: aplikasi dwibahasa (Inggris dan Mandarin)

[Yi](https://huggingface.co/01-ai?ref=dikakaryatech.com/blog) adalah seri LLM open-source yang dikembangkan oleh 01.AI, yang menawarkan kinerja yang kuat dalam bahasa Inggris dan Mandarin di berbagai tugas. Seri Yi-1.5, versi upgrade dari model Yi yang asli, memberikan kemampuan yang lebih baik dalam pengkodean, matematika, penalaran, dan mengikuti instruksi.

**Kasus penggunaan Yi**
* Pembuatan dan pemahaman teks dalam dua bahasa
* Pembuatan dan pemahaman kode
* Tugas pemecahan masalah dan penalaran matematika
* Fine-tuning untuk domain atau tugas tertentu
* NLP di lingkungan akademis dan komersial
* Membangun chatbot dan asisten AI

#### Qwen2.5 {#qwen2}
Paling cocok untuk: tugas-tugas multibahasa dan khusus (koding dan matematika)

[Qwen2.5](https://qwenlm.github.io/blog/qwen2.5-coder-family/?ref=dikakaryatech.com/blog) adalah seri terbaru LLM open-source Alibaba dengan berbagai macam ukuran dan varian khusus untuk pengkodean dan matematika. Model-model ini mewakili kemajuan yang signifikan dalam kemampuan multibahasa dan kinerja khusus untuk tugas-tugas tertentu.

**Kasus penggunaan Qwen2.5**
* Pembuatan dan pemahaman teks umum 
* Aplikasi multibahasa di berbagai bahasa
* Pembuatan dan pemahaman kode dengan Qwen2.5-Coder
* Penalaran matematis dan pemecahan masalah dengan Qwen2.5-Math
* Pembuatan dan analisis konten panjang
* Pemrosesan data terstruktur dan pembuatan output JSON
* Pengembangan chatbot dengan kemampuan bermain peran yang lebih baik

#### Deepseek 2.x / 3 {#deepseek2-3}
Paling coock untuk: pemrosesan bahasa berskala besar yang efisien

[DeepSeek](https://www.deepseek.com/?ref=dikakaryatech.com/blog) adalah seri LLM open-source yang kuat yang dikembangkan oleh DeepSeek AI, yang menampilkan arsitektur inovatif untuk kesimpulan yang efisien dan pelatihan yang hemat biaya. Model DeepSeek-V2 dan V2.5 tersedia untuk digunakan dengan Ollama. Sementara DeepSeek-V3 yang baru saja dirilis menawarkan kemampuan yang lebih mengesankan dengan parameter 671B, namun belum tersedia di Ollama pada saat artikel ini ditulis.

**Kasus penggunaan Deepseek 2.x / 3**
* Pembuatan dan pemahaman teks umum 
* Aplikasi dan terjemahan multibahasa
* Pembuatan dan pemahaman kode
* Fine-tuning untuk domain atau tugas tertentu
* Interaksi seperti asisten dalam chatbot dan aplikasi AI
* Pembuatan dan analisis konten panjang


{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}