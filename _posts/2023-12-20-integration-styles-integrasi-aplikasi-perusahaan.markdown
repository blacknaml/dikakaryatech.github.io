---
layout: post
language: id
title: "Integration Styles pada Integrasi Aplikasi di Perusahaan"
author: debi
date: 2023-12-20 08:38:35 +0700
image: /assets/img/enterprise-application-integration.webp
categories: software development
tags: software-architect
related_post: related-posts.html
excerpt: "Suatu perusahaan memiliki banyak aplikasi di berbagai departemen, domain bisnis, tim, dan proyek. Dari sisi teknis, aplikasi dibangun secara independen, dengan bahasa dan platform berbeda. Terlebih lagi, aplikasi ini bisa berasal dari waktu pengembangan perangkat lunak yang berbeda."
---
Suatu perusahaan memiliki banyak aplikasi di berbagai departemen, domain bisnis, tim, dan proyek. Dari sisi teknis, aplikasi dibangun secara independen, dengan bahasa dan platform berbeda. Terlebih lagi, aplikasi ini bisa berasal dari waktu pengembangan perangkat lunak yang berbeda.

Dan menariknya aplikasi itu jarang hidup sendiri-sendiri. Apakah aplikasi penjualan harus berinteraksi dengan aplikasi inventaris, aplikasi pengadaan harus terhubung ke situs lelang, atau kalender Smartphone harus melakukan sinkronisasi dengan server kalender perusahaan, tampaknya aplikasi apa pun dapat dibuat lebih baik dengan mengintegrasikannya dengan aplikasi lain.

Integrasi Aplikasi Perusahaan akan menghadapi beberapa tantangan diantaranya:
> *Jaringan komputer tidak dapat diandalkan.* Solusi integrasi harus mengirim/menerima data dari satu komputer ke komputer lain melalui jaringan. 
>
> *Kecepatan jaringan lambat*. 
>
> *Dua aplikasi yang semuanya berbeda*. Solusi integrasi perlu mengirimkan informasi antar sistem yang menggunakan bahasa pemrograman, platform sistem operasi, dan format data yang berbeda. Solusi integrasi harus mampu berinteraksi dengan semua teknologi yang berbeda ini.
>
> *Perubahan yang tidak bisa dihindari*. Aplikasi berubah seiring waktu. Solusi integrasi harus mengimbangi perubahan didalam aplikasi yang telah terhubung. Solusi integrasi dapat dengan mudah terjebak dalam efek perubahan yang sangat besar—jika satu sistem berubah, semua sistem lainnya mungkin akan terpengaruh. Solusi integrasi perlu meminimalkan ketergantungan dari satu sistem ke sistem lainnya dengan menggunakan *loose coupling* antar aplikasi.

Tantangan-tantangan tersebut bisa diatasi oleh para developer dengan empat pendekatan utama, yaitu **File Transfer**, **Shared Database**, **Remote Procedure Invocation**, dan **Messaging**. Meskipun keempat pendekatan tersebut pada dasarnya memecahkan masalah yang sama, masing-masingnya memiliki kelebihan dan kekurangan. Faktanya bahwa aplikasi-aplikasi dalam perusahaan bisa berintegrasi dengan menggunakan beberapa *Integration Style*.

### File Transfer
Suatu perusahaan memiliki banyak aplikasi yang dibangun secara independen, dengan bahasa dan platform berbeda. Dalam dunia yang ideal, kita mungkin membayangkan sebuah organisasi beroperasi dari satu perangkat lunak yang kohesif, yang dirancang sejak awal untuk bekerja dengan cara yang terpadu dan koheren. Tentu saja, operasi terkecil pun tidak akan berhasil seperti itu. Beberapa perangkat lunak menangani berbagai aspek perusahaan. Hal ini disebabkan oleh sejumlah alasan:
> Seseorang di perusahaan membeli paket software yang dikembangkan oleh vendor luar.
>
> Sistem yang berbeda dibangun pada waktu yang berbeda, sehingga menghasilkan pilihan teknologi yang berbeda.
>
> Sistem yang berbeda dibangun oleh tim yang berbeda pengalaman dan preferensinya dalam mengarahkan pada pendekatan berbeda dalam membangun aplikasi.
>
> Mengeluarkan aplikasi baru dan menganggapnya lebih penting daripada mengintegrasikan aplikasi-aplikasi yang ada, terutama ketika integrasi tersebut dinilai tidak menambah nilai apa pun pada aplikasi baru yang sedang dikembangkan.

Menggabungkan aplikasi-aplikasi tersebut memerlukan pemahaman yang menyeluruh tentang cara menghubungkan aplikasi-aplikasi pada tingkat bisnis dan teknis. Ini jauh lebih mudah jika kita meminimalkan apa yang perlu kita ketahui tentang cara kerja setiap aplikasi.

Yang dibutuhkan adalah mekanisme transfer data yang dapat digunakan di berbagai bahasa dan platform namun dasar bagi masing-masing bahasa dan platform. Hal ini memerlukan perangkat keras dan perangkat lunak khusus dalam jumlah minimal, dengan memanfaatkan apa yang sudah tersedia di perusahaan.

File adalah mekanisme penyimpanan universal, dibangun di sistem operasi perusahaan mana pun dan tersedia dalam bahasa perusahaan apa pun. Pendekatan paling sederhana adalah dengan mengintegrasikan aplikasi menggunakan file.

{: .text-center }
![File Transfer Style](/assets/img/file-transfer-style.webp "File Transfer Style"){: .img-thumbnail }

Buatlah setiap aplikasi menghasilkan file yang berisi informasi yang bisa digunakan oleh aplikasi lain. Integrator memiliki tanggung jawab untuk mengubah file ke dalam format yang berbeda. Menghasilkan file secara berkala sesuai dengan kebutuhan bisnisnya.

Keputusan terpenting terkait dengan file adalah format apa yang akan digunakan. Jarang sekali output dari satu aplikasi sama persis dengan yang dibutuhkan oleh aplikasi lain, jadi kita harus melakukan sedikit pemrosesan file selama prosesnya. Ini berarti tidak hanya semua aplikasi yang menggunakan suatu file harus membacanya, tetapi kita juga harus dapat menggunakan alat pemrosesan di dalamnya. Akibatnya, format file standar berkembang seiring waktu. Sistem mainframe biasanya menggunakan data feed berdasarkan format sistem file COBOL. Sistem UNIX menggunakan file berbasis teks. Metode saat ini adalah menggunakan XML dan JSON. 

Masalah lain dengan file adalah kapan harus memproduksi dan menggunakannya. Karena ada sejumlah usaha yang dibutuhkan untuk memproduksi dan memproses file, kita biasanya tidak ingin terlalu sering mengerjakannya. Penjadwalan disaat pengambilan keputusan bisnis dibutuhkan, misalnya, setiap malam, mingguan, triwulanan, dan seterusnya. Aplikasi bekerja ketika file baru tersedia dan memprosesnya pada waktunya.

Keuntungan dari file adalah integrator tidak memerlukan pengetahuan tentang internal aplikasi. Tim aplikasi sendiri biasanya menyediakan file tersebut. Isi dan format file dinegosiasikan dengan integrator. Integrator kemudian menangani transformasi yang diperlukan oleh aplikasi lain, atau mereka menyerahkannya kepada aplikasi yang menggunakan untuk memutuskan bagaimana mereka ingin memanipulasi dan membaca file tersebut. Hasilnya, aplikasi-aplikasi yang berbeda dipisahkan satu sama lain dengan cukup mudah. Setiap aplikasi dapat melakukan perubahan internal secara bebas tanpa mempengaruhi aplikasi lain, dengan syarat tetap menghasilkan data yang sama pada file dengan format yang sama. File-file tersebut secara efektif menjadi antarmuka bagi setiap aplikasi.

Salah satu hal yang membuat *File Transfer* menjadi sederhana adalah tidak diperlukan peralatan tambahan atau *integration packages*, namun ini berarti bahwa para pengembang harus melakukan banyak pekerjaan sendiri. Aplikasi harus menyetujui konvensi kesepakatan penamaan file dan direktori tempat aplikasi tersebut muncul. *File writer* harus menerapkan strategi untuk menjaga nama file tetap unik. Aplikasi harus menyetujui aplikasi mana yang akan menghapus file lama, dan aplikasi dengan tanggung jawab tersebut harus mengetahui kapan file tersebut sudah lama dan tidak diperlukan lagi. Aplikasi perlu menerapkan mekanisme penguncian atau mengikuti konvensi pengaturan waktu untuk memastikan bahwa satu aplikasi tidak mencoba membaca file sementara aplikasi lain masih menulisnya. Jika semua aplikasi tidak memiliki akses ke disk yang sama, maka beberapa aplikasi harus bertanggung jawab untuk mentransfer file dari satu disk ke disk lainnya.

Salah satu masalah yang paling jelas pada File Transfer adalah pembaruan cenderung jarang terjadi, dan akibatnya sistem menjadi tidak sinkron. Sistem CMS (Customer management system) dapat memproses perubahan alamat dan menghasilkan file setiap malam, namun sistem billing dapat mengirimkan tagihan ke alamat lama pada hari yang sama. Terkadang kurangnya sinkronisasi bukanlah masalah besar. Orang sering kali mengharapkan adanya kelambatan tertentu dalam menyampaikan informasi, bahkan dengan komputer. Di lain waktu, akibat dari *stale information* (informasi kadaluwarsa) adalah bencana. Saat memutuskan kapan akan memproduksi file, kita harus mempertimbangkan kebutuhan "kesegaran informasi" aplikasi konsumen.

Faktanya, masalah terbesar dari *staleness* sering kali terjadi pada staf software developer itu sendiri, yang sering kali menangani data yang kurang tepat. Hal ini menimbulkan inkonsistensi yang sulit diselesaikan. Jika pelanggan mengubah alamatnya pada hari yang sama dengan dua sistem berbeda, namun salah satunya membuat kesalahan dan mendapatkan nama jalan yang salah, kita akan memiliki dua alamat berbeda untuk seorang pelanggan. Kita memerlukan cara untuk mengetahui cara mengatasi masalah ini. Semakin lama jangka waktu transfer file, semakin besar kemungkinan masalah ini.

Maka tidak ada alasan mengapa kita tidak bisa menghasilkan file lebih sering. Memang benar, kita bisa menganggap *Messaging* sebagai File Transfer dimana kita menghasilkan file dengan setiap perubahan pada suatu aplikasi. Masalahnya adalah mengelola semua file yang dihasilkan, memastikan bahwa semuanya terbaca dan tidak ada yang hilang. Hal ini melampaui apa yang dapat dilakukan oleh pendekatan berbasis sistem file, terutama karena terdapat biaya sumber daya yang mahal terkait dengan pemrosesan file, yang dapat menjadi penghalang jika kita ingin menghasilkan banyak file dengan cepat. Hasilnya, begitu kita mendapatkan file yang sangat terperinci, akan lebih mudah untuk menganggapnya sebagai *Messaging*.

Untuk membuat data tersedia lebih cepat dan menerapkan serangkaian format data yang disepakati, gunakan *Shared Database*. Untuk mengintegrasikan fungsionalitas aplikasi dan bukan datanya, gunakan *Remote Procedure Invocation*. Untuk memungkinkan pertukaran data dalam jumlah kecil secara sering, mungkin digunakan untuk menjalankan fungsi jarak jauh, gunakan *Messaging*.

### Shared Database
File Transfer Style memungkinkan aplikasi untuk berbagi data, namun *lack timeliness* dan ketepatan waktu integrasi kadangkala sangat penting. Jika perubahan tidak berhasil dengan cepat, kemungkinan besar kita akan membuat kesalahan karena data sudah kadaluwarsa. Pada bisnis modern, setiap orang harus memiliki data terbaru. Hal ini tidak hanya mengurangi kesalahan, tetapi juga meningkatkan kepercayaan masyarakat terhadap data itu sendiri.

Update yang cepat juga memungkinkan inkonsistensi ditangani dengan lebih baik. Semakin sering kita melakukan sinkronisasi, semakin kecil kemungkinan kita mendapatkan ketidak-konsistenan dan semakin sedikit usaha yang harus dilakukan untuk mengatasinya. Namun betapapun cepatnya perubahan, tetap saja ada masalah. Contohnya jika suatu alamat pelanggan diperbarui secara tidak konsisten dan berurutan dengan cepat, bagaimana kita memutuskan alamat mana yang sebenarnya? kita bisa mengambil setiap bagian data dan mengatakan bahwa satu aplikasi adalah sumber utama untuk data tersebut, namun kita harus mengingat aplikasi mana yang menjadi master untuk data yang mana.

File Transfer mungkin tidak menerapkan format data secara memadai. Banyak masalah dalam integrasi berasal dari cara pandang data yang tidak kompatibel. Seringkali hal ini mewakili masalah bisnis yang tidak terlihat dan bisa berdampak besar. Geological database bisa mendefinisikan sumur minyak sebagai satu lubang bor yang mungkin menghasilkan minyak atau tidak. Production database bisa mendefinisikan beberapa lubang yang dicakup oleh satu peralatan. Kasus *semantic dissonance* ini jauh lebih sulit ditangani dibandingkan format data yang tidak konsisten. (Untuk keterangan yang lebih detail mengenai masalah ini, sebaiknya membaca *Data and Reality, William Kent; 1stBooks 2000, ISBN 1585009709*.) Maka yang dibutuhkan adalah penyimpanan data terpusat dan disepakati dan bisa digunakan bersama oleh semua aplikasi sehingga masing-masing aplikasi memiliki akses ke data apa pun yang dibagikan kapan saja saat membutuhkannya.

{: .text-center }
![Shared Database Style](/assets/img/shared-database-style.webp "Shared Database Style"){: .img-thumbnail }

Buatlah setiap aplikasi menyimpan data yang dibutuhkan dalam satu *Shared Database* (Basis Data Bersama), dan tentukan skema basis data untuk menangani semua kebutuhan aplikasi yang berbeda.

Jika sekumpulan aplikasi terintegrasi dan semuanya bergantung pada database yang sama, maka kita bisa yakin bahwa aplikasi tersebut selalu konsisten sepanjang waktu. Jika kita mendapatkan pembaruan simultan pada satu bagian data dari sumber berbeda, maka kita sudah memiliki sistem manajemen transaksi yang menangani hal tersebut dengan baik. Karena waktu updatenya yang sangat singkat, kesalahan apa pun lebih mudah ditemukan dan diperbaiki.

Shared Database menjadi lebih mudah dengan penggunaan basis data relasional berbasis SQL. Hampir semua platform pengembangan aplikasi dapat bekerja dengan SQL. Jadi kita tidak perlu khawatir tentang berbagai format file. Karena hampir semua aplikasi harus menggunakan SQL.

Karena setiap aplikasi menggunakan database yang sama, hal ini akan menghilangkan masalah *semantic dissonance*. Daripada membiarkan masalah ini berlarut-larut hingga sulit diselesaikan dengan transformasi, kita terpaksa menghadapinya dan mengatasinya sebelum perangkat lunak diluncurkan dan kita mengumpulkan sejumlah besar data yang tidak kompatibel.

Salah satu kesulitan terbesar dari Shared Database adalah bagaimana menghasilkan desain yang cocok untuk database bersama. Menghasilkan skema terpadu yang bisa memenuhi kebutuhan beberapa aplikasi adalah pengalaman yang sangat sulit. Selain kesulitan merancang skema, terdapat juga kesulitan politik yang parah yaitu konflik manusia antar departemen seringkali memperburuk masalah ini.

Batasan lain yang lebih sulit dari Shared Database adalah paket eksternal. Sebagian besar software jadi tidak akan bekerja dengan skema selain skemanya sendiri. Meskipun terdapat ruang untuk adaptasi, kemungkinan besar hal tersebut akan jauh lebih terbatas dibandingkan yang diharapkan oleh para integrator. Yang menambah masalah adalah vendor perangkat lunak biasanya berhak mengubah skema pada setiap rilis perangkat lunak baru.

Masalah ini juga meluas ke integrasi setelah development. Bahkan jika kita dapat mengatur semua aplikasi kita, kita masih memiliki masalah integrasi jika terjadi merger perusahaan.

Beberapa aplikasi yang menggunakan Shared Database sering membaca dan memodifikasi data yang sama diwaktu bersamaan, hal ini bisa membuat kinerja database menjadi terhambat (*performance bottleneck*) dan menyebabkan *deadlocks* karena setiap aplikasi mengunci data dari aplikasi lain. Ketika aplikasi didistribusikan di beberapa lokasi, mengakses satu database bersama di jaringan yang luas menyebabkan keterlambatan. Mendistribusikan database yang memungkinkan setiap aplikasi mengakses database melalui koneksi jaringan lokal, namun membingungkan komputer mana yang harus menyimpan data. Basis data terdistribusi dengan *locking conflicts* bisa dengan mudah menjadi *performance nightmare*.

Untuk mengintegrasikan fungsionalitas aplikasi dan bukan datanya, gunakan *Remote Procedure Invocation*. Untuk kemungkinan pertukaran data dalam jumlah kecil secara sering, gunakan *Messaging*.

### Remote Procedure Invocation
File Transfer dan Shared Database memungkinkan aplikasi berbagi data, yang merupakan bagian penting dari integrasi aplikasi, namun berbagi data saja seringkali tidak cukup. Perubahan data sering kali memerlukan action yang harus diambil di berbagai aplikasi. Contohnya, mengubah alamat pelanggan merupakan perubahan sederhana pada data, dan bisa memicu pendaftaran dan proses pajak dengan peraturan yang berbeda. Memiliki satu aplikasi yang menjalankan proses seperti itu secara langsung di aplikasi lain akan mengharuskan aplikasi mengetahui banyak mengenai internal aplikasi lain.

Masalah ini merupakan dilema klasik pada desain aplikasi. Salah satu mekanisme penataan yang paling kuat dalam desain aplikasi adalah encapsulation, dimana modul menyembunyikan datanya melalui antarmuka pemanggilan fungsi. Dengan cara ini, mereka dapat mencegah perubahan data saat melakukan berbagai tindakan yang perlu dilakukan ketika data diubah. Shared Database menyediakan struktur data yang besar dan tidak terenkapsulasi, sehingga lebih sulit untuk melakukan hal ini. Transfer File memungkinkan aplikasi bereaksi terhadap perubahan saat memproses file, namun prosesnya tertunda.

Fakta bahwa Shared Database memiliki data yang tidak dienkapsulasi membuat perawatan integrated application menjadi lebih sulit. Banyak perubahan pada aplikasi apa pun yang bisa memicu perubahan data dalam database, dan perubahan database memiliki *ripple effect* yang besar pada setiap aplikasi. Akibatnya, organisasi yang menggunakan Shared Database seringkali sangat enggan untuk mengubah database, yang berarti bahwa pekerjaan pengembangan aplikasi kurang responsif terhadap perubahan kebutuhan bisnis.

Yang diperlukan adalah mekanisme satu aplikasi memanggil fungsi di aplikasi lain, meneruskan data yang perlu dibagikan, dan memanggil fungsi yang memberi tahu aplikasi penerima cara memproses data.

{: .text-center }
![Remote Procedure Invocation Style](/assets/img/remote-procedure-invocation-style.webp "Remote Procedure Invocation Style"){: .img-thumbnail }

Buatlah setiap aplikasi sebagai objek atau komponen berskala besar dengan data yang dienkapsulasi. Menyediakan antarmuka yang memungkinkan aplikasi lain berinteraksi dengan aplikasi yang sedang berjalan.

*Remote Procedure Invocation* menerapkan prinsip enkapsulasi untuk mengintegrasikan aplikasi. Jika suatu aplikasi membutuhkan informasi yang dimiliki oleh aplikasi lain, maka aplikasi tersebut akan menanyakannya secara langsung. Jika satu aplikasi perlu mengubah data aplikasi lain, aplikasi tersebut melakukannya dengan membuat panggilan ke aplikasi lain. Hal ini memungkinkan setiap aplikasi menjaga integritas data yang dimilikinya. Selain itu, setiap aplikasi dapat mengubah format data internalnya tanpa memengaruhi aplikasi lainnya.

Sejumlah teknologi, seperti CORBA, COM, .NET Remoting, dan GRPC, mengimplementasikan Remote Procedure Invocation (juga disebut sebagai Remote Procedure Call, atau RPC). Pendekatan ini berbeda-beda tergantung pada berapa banyak sistem yang mendukungnya dan kemudahan penggunaannya. Seringkali lingkungan ini menambah kemampuan tambahan, seperti transaksi. Untuk digunakan dimana-mana, favorit saat ini adalah Web Services, menggunakan standar seperti SOAP, XML dan RESTful. Fitur yang sangat berharga dari Web Service adalah bahwa mereka bekerja dengan mudah dengan HTTP, yang mudah untuk melewati firewall.

Fakta bahwa terdapat metode yang membungkus data membuatnya lebih mudah untuk menangani *semantic dissonance*. Aplikasi dapat menyediakan beberapa antarmuka ke data yang sama, memungkinkan beberapa klien melihat satu style dan klien lain melihat style berbeda. Bahkan pembaruan dapat menggunakan banyak antarmuka. Hal ini memberi banyak kemampuan untuk mendukung berbagai sudut pandang dibandingkan dengan pandangan relasional. Namun, sulit bagi integrator untuk menambahkan komponen transformasi, sehingga setiap aplikasi harus menegosiasikan antarmukanya dengan aplikasi lainnya.

Karena software developer terbiasa dengan procedure calls, Remote Procedure Invocation sangat cocok dengan apa yang sudah biasa programmer lakukan. Sebenarnya ini lebih merupakan kerugian dibandingkan keuntungan. Ada perbedaan besar dalam performa dan keandalan antara remote procedure call dan local procedure call. Jika orang tidak memahami hal ini, maka RPC bisa menyebabkan sistem menjadi lambat dan tidak dapat diandalkan.

Meskipun enkapsulasi membantu mengurangi penggabungan aplikasi dengan menghilangkan struktur data bersama yang besar, aplikasi-aplikasi tersebut masih digabungkan secara erat. RPC yang didukung setiap sistem cenderung mengikat sistem yang berbeda menjadi satu kesatuan. Secara khusus, sequencing —melakukan hal-hal tertentu dalam urutan tertentu— bisa mempersulit perubahan sistem secara mandiri. Masalah seperti ini sering muncul karena masalah yang tidak signifikan terjadi pada satu aplikasi saat mengintegrasikan aplikasi. Orang sering kali merancang integrasi seperti mereka merancang satu aplikasi, tanpa menyadari bahwa aturan keterlibatan berubah secara dramatis.

Untuk mengintegrasikan aplikasi dengan cara yang loosely coupled dan asynchronous, gunakan *Messaging* agar memungkinkan pertukaran data dalam jumlah kecil secara sering, yang digunakan untuk menjalankan fungsionalitas jarak jauh.

### Messaging
File Transfer dan Shared Database memungkinkan aplikasi berbagi data, namun tidak bisa berbagi fungsinya. Remote Procedure Invocation memungkinkan aplikasi untuk berbagi fungsionalitas, namun tightly couples. Seringkali tantangan integrasi adalah membuat kolaborasi antar sistem yang terpisah secepat mungkin, tanpa menyatukan sistem (coupling systems) sedemikian hingga sistem tersebut menjadi unreliable dalam hal eksekusi aplikasi atau pengembangan aplikasi.

File Transfer memungkinkan kita memisahkan aplikasi dengan baik namun mengorbankan ketepatan waktu. Sistem tidak bisa mengimbangi satu sama lain. Perilaku kolaboratif terlalu lambat. Shared Database menyimpan data bersama-sama dengan cara yang responsif namun mengorbankan segala sesuatunya ke dalam basis data. Hal ini juga gagal menangani perilaku kolaboratif.

Remote Procedure Invocation sepertinya merupakan pilihan yang menarik. Namun extending model aplikasi tunggal ke integrasi aplikasi akan menghilangkan banyak kelemahan lainnya. Kelemahan-kelemahan ini antara lain masalah-masalah penting dalam distributed development. Meskipun RPC terlihat seperti local calls, perilakunya tidak sama. RPC lebih lambat dan kemungkinan besar gagal. Dengan banyaknya aplikasi yang berkomunikasi dalam satu perusahaan, kita tentu tidak ingin kegagalan satu aplikasi menyebabkan semua aplikasi lainnya terhenti. Selain itu, Anda tidak ingin merancang sistem dengan asumsi bahwa panggilan berlangsung cepat, dan kita tidak ingin setiap aplikasi mengetahui detail tentang aplikasi lain, meskipun itu hanya detail tentang antarmukanya.

Apa yang kita butuhkan sesuatu seperti File Transfer yang mana banyak paket data kecil dapat dihasilkan dengan cepat dan mudah ditransfer, dan aplikasi penerima secara otomatis diberitahu ketika ada paket baru yang tersedia untuk dikonsumsi. Memerlukan retry mechanism untuk memastikan keberhasilan transfer. Detail dari setiap struktur disk atau database untuk menyimpan data perlu disembunyikan dari aplikasi sehingga, tidak seperti Shared Database, skema dan detail penyimpanan dapat dengan mudah diubah untuk mencerminkan perubahan kebutuhan perusahaan. Satu aplikasi harus bisa mengirim paket data ke aplikasi lain untuk menjalankan perilaku di aplikasi lain, seperti Remote Procedure Invocation, namun tidak rentan terhadap kegagalan. Transfer data harus dilakukan secara asynchronous sehingga pengirim tidak perlu menunggu sampai ke penerima, terutama ketika diperlukan percobaan ulang.

{: .text-center }
![Messaging Style](/assets/img/messaging-style.webp "Messaging Style"){: .img-thumbnail }

Gunakan Messaging untuk mentransfer paket data secara sering, cepat, reliabel, dan asinkron, menggunakan format yang bisa disesuaikan.
 
Pesan asinkron pada dasarnya merupakan pragmatic reaction terhadap masalah distributed systems. Mengirim pesan tidak mengharuskan kedua sistem aktif dan siap secara bersamaan. Selain itu, memikirkan komunikasi secara asinkron memaksa developer untuk sadar bahwa bekerja dengan aplikasi jarak jauh lebih lambat, sehingga mendorong desain *high cohesion* (banyak pekerjaan lokal) dan *low adhesion* (pekerjaan selektif dari jarak jauh).

Messaging systems memungkinkan banyak decoupling yang kita dapatkan saat menggunakan File Transfer. Pesan dapat diubah dalam perjalanan tanpa pengirim atau penerima mengetahui tentang transformasi tersebut. Pemisahan ini memungkinkan integrator untuk memilih antara broadcasting pesan ke beberapa penerima, routing pesan ke salah satu dari banyak penerima, atau topologi lainnya. Hal ini memisahkan keputusan integrasi dari pengembangan aplikasi. Karena permasalahan manusia cenderung memisahkan pengembangan aplikasi dari integrasi aplikasi, pendekatan ini sesuai dengan sifat manusia dan bukan bertentangan dengan sifat manusia.

Dengan sering mengirimkan pesan kecil, kita menjadikan aplikasi berkolaborasi secara perilaku dan berbagi data. Jika suatu proses perlu dieksekusi setelah klaim asuransi diterima oleh pelanggan, maka bisa segera mengirimkan pesan ketika ada satu klaim yang masuk. Informasi bisa diminta dan balasan bisa dilakukan dengan cepat. Meskipun kolaborasi tersebut tidak akan secepat RPC, caller tidak perlu berhenti saat pesan sedang diproses dan respons dikembalikan. Dan pengiriman pesan tidak selambat yang dipikirkan oleh banyak orang —banyak solusi pengiriman pesan berasal dari industri jasa keuangan di mana ribuan harga saham atau perdagangan harus melewati sistem pengiriman pesan setiap detiknya.

{% if page.related_post %}
  {% include {{ page.related_post }} %}
{% endif %}