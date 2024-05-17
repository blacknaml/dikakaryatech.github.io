Text-to-Speech (TTS) adalah teknologi yang mengubah teks menjadi ucapan. Berikut adalah beberapa algoritma dan metode yang digunakan dalam TTS:

1. **Pra-Pemrosesan Teks**: Langkah awal dalam TTS adalah pra-pemrosesan teks. Ini meliputi tokenisasi teks menjadi unit-unit seperti kata-kata atau fonem-fonem, penghilangan tanda baca, dan normalisasi teks untuk memastikan bahwa teks dapat diproses dengan baik oleh sistem TTS.

2. **Pemetaan Teks ke Fonem**: Dalam beberapa sistem TTS, teks diubah menjadi urutan fonem-fonem, yaitu unit-unit suara terkecil dalam bahasa yang diucapkan. Algoritma-algoritma seperti Letter-to-Sound (LTS) dan penggunaan kamus fonetik digunakan untuk melakukan pemetaan ini.

3. **Pengaturan Durasi dan Intonasi**: Setelah teks dipetakan ke dalam urutan fonem-fonem, sistem TTS memperkirakan durasi dan intonasi untuk setiap fonem dan kata. Ini melibatkan penggunaan model-prosodi yang dapat memprediksi ritme, nada, dan durasi dalam ucapan.

4. **Pembangkitan Suara**: Setelah informasi durasi, intonasi, dan fonetik dihitung, suara yang sesuai dihasilkan. Ini dapat dilakukan menggunakan dua pendekatan utama:

    a. **Concatenative Synthesis**: Pendekatan ini melibatkan penggabungan rekaman suara manusia atau unit-unit suara kecil (misalnya, fonem atau subfonem) yang disimpan dalam basis data untuk membentuk ucapan yang diinginkan. Teknik ini menghasilkan suara yang lebih alami tetapi membutuhkan basis data yang besar dan kompleks.
   
    b. **Parametric Synthesis**: Pendekatan ini menggunakan model statistik atau jaringan saraf untuk menghasilkan parameter suara seperti frekuensi, amplitudo, dan durasi. Parameter-parameter ini kemudian digunakan untuk mensintesis suara secara digital. Teknik ini lebih fleksibel dan memungkinkan untuk menghasilkan suara pada waktu nyata tetapi membutuhkan proses pelatihan yang rumit.

5. **Post-Processing**: Hasil suara dari TTS sering kali dikenakan post-processing untuk meningkatkan kualitas dan kesan alami. Ini bisa termasuk penambahan efek suara seperti perubahan pitch atau penyesuaian dinamika, serta penggunaan teknik seperti smooth prosody untuk membuat ucapan terdengar lebih alami.

6. **Evaluasi dan Perbaikan**: Sistem TTS dievaluasi secara teratur untuk memantau kinerja dan mengidentifikasi area di mana perbaikan diperlukan. Evaluasi dapat dilakukan secara subjektif oleh manusia atau menggunakan metrik objektif seperti Mean Opinion Score (MOS).

Algoritma dan metode ini bersama-sama membentuk sistem TTS yang mampu menghasilkan ucapan yang alami dan mudah dimengerti dari teks yang diberikan. Perkembangan dalam teknologi TTS terus berlanjut untuk meningkatkan kualitas suara dan ketersediaan sistem TTS yang lebih canggih.

Ada beberapa algoritma yang digunakan dalam sistem Text-to-Speech (TTS) untuk menghasilkan suara berdasarkan teks input. Berikut adalah beberapa di antaranya:

1. **Concatenative Synthesis**: Algoritma ini menggabungkan unit-unit suara kecil, seperti fonem atau subfonem, yang disimpan dalam basis data suara untuk membentuk ucapan yang diinginkan. Unit-unit suara ini direkam dari suara manusia dan dipilih berdasarkan konteks dan pengucapan yang diinginkan.

2. **Parametric Synthesis**: Algoritma ini menggunakan model statistik atau jaringan saraf untuk menghasilkan parameter suara seperti frekuensi, amplitudo, dan durasi. Parameter-parameter ini kemudian digunakan untuk mensintesis suara secara digital. Pendekatan parametrik ini lebih fleksibel dan memungkinkan untuk menghasilkan suara pada waktu nyata.

3. **Unit Selection Synthesis**: Metode ini mirip dengan Concatenative Synthesis, tetapi menggunakan pendekatan yang lebih canggih untuk memilih unit-unit suara dari basis data. Unit-unit suara dipilih berdasarkan kriteria seperti kelancaran prosodi, kejelasan pengucapan, dan kesesuaian konteks.

4. **Articulatory Synthesis**: Algoritma ini mencoba untuk mensimulasikan gerakan fisik alat bicara manusia, seperti lidah, bibir, dan pita suara, untuk menghasilkan suara. Pendekatan ini didasarkan pada model fisika yang rumit dari produksi suara manusia.

5. **Formant Synthesis**: Pendekatan ini menggunakan filter digital untuk mensintesis suara berdasarkan pembentukan dan modifikasi formant suara manusia. Formant adalah puncak-puncak dalam spektrum suara yang menentukan kualitas vokal.

6. **HMM-Based Synthesis**: Metode ini menggunakan model Markov tersembunyi (Hidden Markov Models/HMMs) untuk memodelkan relasi antara fonem-fonem dalam bahasa dan menghasilkan suara berdasarkan model tersebut.

7. **Neural Network-Based Synthesis**: Pendekatan ini menggunakan jaringan saraf untuk mempelajari hubungan antara teks dan suara. Ini bisa mencakup penggunaan jaringan rekurensi (RNNs), jaringan rekurensi gated (GRUs, LSTMs), atau transformer untuk memodelkan teks menjadi suara.

Setiap algoritma memiliki kelebihan dan kekurangan sendiri, dan pilihan algoritma sering kali bergantung pada kebutuhan aplikasi, kualitas suara yang diinginkan, dan sumber daya komputasi yang tersedia. Beberapa sistem TTS menggunakan kombinasi dari beberapa algoritma untuk mencapai kualitas suara yang optimal.