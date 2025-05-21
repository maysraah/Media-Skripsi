<head>
    <link rel="stylesheet" href="{{ asset('css/materi/4-1.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">
    MEMAHAMI ALGORITMA PENCARIAN DENGAN PENDEKATAN <i>COMPUTATIONAL THINKING</i>
</h3>

<div>
    <img style="width: 400px;" src="{{ asset('storage/img/marker8.png') }}">
</div>

<div style="border: 2px solid #011B78; border-radius: 8px; padding: 20px; margin: 20px auto;">
    <h5 style="color:#011B78">Tujuan Pembelajaran</h5>
    <ol type="A">
        <li>Memahami konsep dasar algoritma pencarian linear.</li>
        <li>Menggunakan pendekatan <i>computational thinking</i> dalam memahami proses pencarian data.</li>
        <li>Mengimplementasikan pencarian linear dalam memecahkan persoalan pencarian.</li>
    </ol>
</div>

<p class="text-justify" style="text-indent: 2em;">
    <b>Pencarian Linear</b> adalah algoritma pencarian yang bekerja dengan memeriksa setiap elemen dalam sekumpulan data atau daftar <b>satu per satu</b> dari awal hingga elemen yang dicari ditemukan.
    Pada setiap pengulangan, data pada indeks ke-i <b>dibandingkan</b> dengan elemen yang dicari. Jika elemen tersebut tidak ditemukan, pencarian akan terus berjalan hingga mencapai akhir daftar.
    Algoritma ini dianggap sebagai salah satu metode pencarian yang paling sederhana.
</p>

{{-- Dekomposisi --}}
<div>
    <img style="width: 180px;" src="{{ asset('storage/img/marker9.png') }}">
</div>

<p>Perhatikan barisan angka berikut.</p>
<div>
    <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-linear-1.png') }}" alt="Ilustrasi Cara Kerja Algoritma Linear Search">
</div>
<p class="text-justify">
    Dengan dekomposisi, kita dapat memecah pencarian linear menjadi langkah-langkah berikut:
</p>

<ol>
    <li>Mulai dari elemen pertama dalam barisan.<br>
        <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-linear-2.png') }}" alt="Ilustrasi Cara Kerja Algoritma Linear Search">
    </li>
    <li>Bandingkan elemen saat ini dengan elemen yang dicari.</li>
    <li>Jika cocok, berhenti dan kembalikan hasilnya.</li>
    <li>Ulangi langkah 2-4 hingga elemen ditemukan atau barisan angka habis diperiksa.<br>
        <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-linear-3.png') }}" alt="Ilustrasi Cara Kerja Algoritma Linear Search"><br><br>
        <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-linear-4.png') }}" alt="Ilustrasi Cara Kerja Algoritma Linear Search"><br><br>
    </li>
</ol>

<p class="text-justify">Dengan demikian, di dapatkan pencarian angka 7 dengan pencarian linear ditemukan pada <b>indeks ke-3</b> dalam barisan.</p><br>

{{-- Pengenalan Pola --}}
<div>
    <img style="width: 200px;" src="{{ asset('storage/img/marker12.png') }}">
</div>

<p class="text-justify">Kita mengenali pola berikut dalam pencarian linear:</p>
<ul>
    <li>Pencarian dilakukan secara berurutan dari awal hingga akhir.</li>
    <li>Jika elemen yang dicari berada di awal daftar/barisan, pencarian lebih cepat.</li>
    <li>Jika elemen yang dicari berada di akhir daftar/barisan atau tidak ada, pencarian akan lebih lama.</li>
    <li>Tidak memerlukan data yang terurut, tetapi lebih lambat dibandingkan pencarian biner pada data terurut.</li>
</ul>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker11.png') }}">
    </div>
    <p class="text-justify">
        Berdasarkan tujuannya, pencarian terbagi menjadi 3 tujuan, yaitu: 
        <ol>
            <li>Pencarian dilakukan <b>hanya untuk mengetahui apakah data tersebut ada dalam sekumpulan data atau tidak</b>.</li>
            <li>Pencarian dilakukan untuk <b>menentukan posisi dari data yang dicari, dan posisi tersebut dibutuhkan untuk keperluan tertentu</b>.</li>
            <li>Pencarian dilakukan untuk <b>mencari suatu data kemudian menampilkan semua posisi dan frekuensi kemunculannnya (jika kemunculan data lebih dari satu kali dalam sekumpulan data)</b>.</li>
        </ol>
    </p>
    <p class="text-justify">
        Berdasarkan uraian diatas, mari kita coba untuk mengamati bagaimana cara kerja algoritma <b>pencarian linear</b> untuk beberapa tujuan pencarian.<br>
    </p>
    <div class="pola-wrapper">
        <p class="text-justify"> 
            Pertama, kita akan melakukan pencarian dengan algoritma pencarian linear <b>hanya untuk mengetahui apakah data tersebut ada dalam sekumpulan data atau tidak</b>. Kemudian, kita akan menunjukkan <b>dimana posisi data</b> tersebut dalam sekumpulan data.<br><br>
            Perhatikan barisan angka berikut. Cobalah masukkan angka <b>“17”</b> sebagai target pada kolom masukan.
        </p><br><br><br>
            <div id="list-container" class="d-flex gap-2" style="position: relative;">
                <div id="search-box" class="search-box">?</div>
                <div class="list-item" id="item0">3</div>
                <div class="list-item" id="item1">5</div>
                <div class="list-item" id="item2">7</div>
                <div class="list-item" id="item3">9</div>
                <div class="list-item" id="item4">11</div>
                <div class="list-item" id="item5">13</div>
                <div class="list-item" id="item6">15</div>
                <div class="list-item" id="item7">17</div>
                <div class="list-item" id="item8">19</div>
                <div class="list-item" id="item9">21</div>
                <div class="list-item" id="item10">17</div>
                <div class="list-item" id="item11">20</div>
            </div>

            <div class="mt-4">
                <input type="number" id="target" class="form-control w-50 d-inline" placeholder="Masukkan angka yang dicari">
                <button class="btn btn-success" onclick="startSearch()">Mulai Pencarian Linear</button>
            </div>

            <div id="result" class="mt-4 fw-bold"></div><br><br>
    </div>

    <div class="pola-wrapper">
        <p class="text-justify"> 
            Kedua, kita akan melakukan pencarian dengan algoritma pencarian linear untuk mencari suatu data kemudian <b>menampilkan semua posisi dan frekuensi kemunculannnya (jika kemunculan data lebih dari satu kali dalam sekumpulan data)</b>.<br><br>
            Perhatikan barisan angka berikut. Cobalah masukkan angka <b>“17”</b> sebagai target pada kolom masukan.
        </p><br><br><br>
            <div id="list-container2" class="d-flex gap-2" style="position: relative;">
                <div id="search-box2" class="search-box">?</div>
                <div class="list-item2" id="item0-2">3</div>
                <div class="list-item2" id="item1-2">5</div>
                <div class="list-item2" id="item2-2">7</div>
                <div class="list-item2" id="item3-2">9</div>
                <div class="list-item2" id="item4-2">11</div>
                <div class="list-item2" id="item5-2">13</div>
                <div class="list-item2" id="item6-2">15</div>
                <div class="list-item2" id="item7-2">17</div>
                <div class="list-item2" id="item8-2">19</div>
                <div class="list-item2" id="item9-2">21</div>
                <div class="list-item2" id="item10-2">17</div>
                <div class="list-item2" id="item11-2">20</div>
            </div>
    
            <div class="mt-4">
                <input type="number" id="target2" class="form-control w-50 d-inline" placeholder="Masukkan angka yang dicari">
                <button class="btn btn-success" onclick="startSearch2()">Mulai Pencarian Linear</button>
            </div>
    
            <div id="result2" class="mt-4 fw-bold"></div>
    </div>
</div>

<p class="text-justify" style="text-indent: 2em;">
    Setelah mencoba simulasi visualisasi di atas, kalian diharapkan mampu memahami bagaimana pencarian linear bekerja.
    Dengan pencarian linear, setiap elemen diperiksa satu per satu hingga elemen yang dicari ditemukan atau seluruh elemen telah diperiksa.
    Tetapi, pencarian linear kurang efisien pada data besar karena memeriksa elemen secara berurutan, sehingga waktu pencarian akan lebih lama.
</p><br>

{{-- Abstraksi --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker13.png') }}">
</div>

<p class="text-justify">Dalam pencarian linear, kita dapat menyederhanakan masalah sebagai berikut:</p>
<ul>
    <li>Bayangkan mencari nama dalam daftar kehadiran guru di sekolah.</li>
    <li>Kita hanya perlu membandingkan nama satu per satu, tanpa perlu mengetahui struktur daftar secara kompleks.</li>
    <li>Dengan pemahaman ini, kita dapat menerapkan konsep yang sama pada daftar lain, seperti angka atau objek visual.</li>   
</ul><br>

{{-- Algoritma --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker14.png') }}">
</div>

<p class="text-justify">Berikut adalah langkah-langkah algoritma pencarian linear:</p>
<ol>
    <li>Ambil sekumpulan data (misalnya daftar nama atau angka).</li>
    <li>Tentukan elemen yang dicari.</li>
    <li>Periksa elemen satu per satu:
        <ul>
            <li>Jika cocok, kembalikan indeksnya.</li>
            <li>Jika tidak, lanjutkan ke elemen berikutnya.</li>
        </ul>
    </li>
    <li>Jika data habis diperiksa tanpa menemukan elemen, beri tahu bahwa elemen tidak ditemukan.</li>
</ol><br>

{{-- Aktivitas Siswa 1 --}}
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker15.png') }}">
    </div><br>

    {{-- Soal 1 --}}
    <div class="soal" id="soal-1">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
        <div class="grid">
            <div class="kotak">13</div>
            <div class="kotak">3</div>
            <div class="kotak">7</div>
            <div class="kotak">9</div>
            <div class="kotak">11</div>
            <div class="kotak">5</div>
            <div class="kotak">8</div>
            <div class="kotak">10</div>
        </div>
        <p>Berapa langkah yang dibutuhkan untuk menemukan angka <b>11</b> dengan algoritma pencarian linear?</p>
        <div class="answers">
            <button class="answer-btn" data-benar="false">3 langkah</button>
            <button class="answer-btn" data-benar="true" data-feedback="Karena 11 berada di posisi ke-5, maka dibutuhkan 5 langkah untuk menemukannya.">5 langkah</button>
            <button class="answer-btn" data-benar="false">7 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>

    {{-- Soal 2 --}}
    <div class="soal" id="soal-2">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">5</div>
          <div class="kotak">10</div>
          <div class="kotak">15</div>
          <div class="kotak">20</div>
          <div class="kotak">25</div>
          <div class="kotak">30</div>
        </div>
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>30</b> dengan algoritma pencarian linear?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">4 langkah</button>
          <button class="answer-btn" data-benar="false">5 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 30 berada di posisi ke-6, jadi pencarian linear membutuhkan 6 langkah untuk menemukannya.">6 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>

    {{-- Soal 3 --}}
    <div class="soal" id="soal-3">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan nilai berikut ini:</p>
        <div class="grid">
          <div class="kotak">70</div>
          <div class="kotak">76</div>
          <div class="kotak">72</div>
          <div class="kotak">85</div>
          <div class="kotak">87</div>
          <div class="kotak">70</div>
          <div class="kotak">72</div>
          <div class="kotak">95</div>
          <div class="kotak">80</div>
          <div class="kotak">72</div>
        </div>
        <p>Dari barisan nilai di atas, berapa langkah yang dibutuhkan untuk menemukan nilai <b>72 yang pertama kali muncul dalam barisan</b> dengan algoritma pencarian linear?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true" data-feedback="Angka 72 yang pertama kali muncul berada di posisi ke-3, jadi pencarian linear membutuhkan 3 langkah untuk menemukannya.">3 langkah</button>
          <button class="answer-btn" data-benar="false">7 langkah</button>
          <button class="answer-btn" data-benar="false">10 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>

    {{-- Soal 4 --}}
    <div class="soal" id="soal-4">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan nilai berikut ini:</p>
        <div class="grid">
          <div class="kotak">70</div>
          <div class="kotak">76</div>
          <div class="kotak">72</div>
          <div class="kotak">85</div>
          <div class="kotak">87</div>
          <div class="kotak">70</div>
          <div class="kotak">72</div>
          <div class="kotak">95</div>
          <div class="kotak">80</div>
          <div class="kotak">72</div>
        </div>
        <p>Dari barisan nilai di atas, tunjukkan di indeks mana saja nilai <b>72</b> ditemukan dalam barisan?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">3, 6, 9</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 72 muncul sebanyak 3 kali dalam barisan dan berada di indeks ke 3, 7 dan 10">3, 7, 10</button>
          <button class="answer-btn" data-benar="false">3, 5, 9</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>

    {{-- Soal 5 --}}
    <div class="soal" id="soal-5">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">5</div>
          <div class="kotak">7</div>
          <div class="kotak">12</div>
          <div class="kotak">19</div>
          <div class="kotak">21</div>
          <div class="kotak">23</div>
        </div>
        <p>Dari barisan angka di atas, apakah angka <b>25</b> ditemukan dalam barisan? Berapa banyak langkah yang dibutuhkan untuk menemukannya dengan algoritma pencarian linear?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">Ditemukan setelah 6 langkah</button>
          <button class="answer-btn" data-benar="false">Ditemukan setelah 7 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 25 tidak ditemukan dalam barisan angka.">Angka tidak ditemukan</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>
</div>

<div style="display: none;" id="section-2">
    <div>
        <img style="width: 80px;" src="{{ asset('storage/img/marker10.png') }}"><br>   
        
        <h3 align="center">Pencarian Linear: Mencari Pola Segitiga</h3>

        <h4>🔺 Apa itu Segitiga?</h4>
        <p class="text-justify">
        Segitiga adalah bangun datar yang memiliki <strong>tiga sisi</strong> dan <strong>tiga sudut</strong>. 
        Bentuknya dapat beragam: sama sisi, sama kaki, atau sembarang. 
        Segitiga merupakan salah satu bentuk dasar dalam geometri dan sering digunakan dalam desain pola karena bentuknya yang stabil dan simetris.
        </p>
        <p class="text-justify">
        Dalam pencarian ini, kita akan mencari gambar yang hanya memiliki pola segitiga — artinya gambar yang menunjukkan bentuk segitiga <strong>tanpa digabungkan dengan bentuk lain</strong>.
        </p>

        <h4>🖼️ Galeri Gambar Pola Geometri:</h4>
        <div class="gallery">
            <div class="image-box checked"><img class="logo-marker" src="{{ asset('storage/img/lingkaran.png') }}" alt="Image 1"></div>
            <div class="image-box checked"><img class="logo-marker" src="{{ asset('storage/img/persegi.png') }}" alt="Image 2"></div>
            <div class="image-box checked"><img class="logo-marker" src="{{ asset('storage/img/segienam.png') }}" alt="Image 3"></div>
            <div class="image-box checked"><img class="logo-marker" src="{{ asset('storage/img/lingkaran-persegi.png') }}" alt="Image 4"></div>
            <div class="image-box found"><img class="logo-marker" src="{{ asset('storage/img/segitiga.png') }}" alt="Image 5"></div>
        </div>

        <h4>🔍 Langkah-langkah Pencarian:</h4>
        <div class="step">✅ Langkah 1: Gambar 1 → Pola: <img class="logo-marker" src="{{ asset('storage/img/lingkaran.png') }}" alt="Image 1"> → ❌ Bukan segitiga</div>
        <div class="step">✅ Langkah 2: Gambar 2 → Pola: <img class="logo-marker" src="{{ asset('storage/img/persegi.png') }}" alt="Image 2"> → ❌ Bukan segitiga</div>
        <div class="step">✅ Langkah 3: Gambar 3 → Pola: <img class="logo-marker" src="{{ asset('storage/img/segienam.png') }}" alt="Image 3"> → ❌ Bukan segitiga</div>
        <div class="step">✅ Langkah 4: Gambar 4 → Pola: <img class="logo-marker" src="{{ asset('storage/img/lingkaran-persegi.png') }}" alt="Image 4"> → ❌ Bukan segitiga</div>
        <div class="step">✅ Langkah 5: Gambar 5 → Pola: <img class="logo-marker" src="{{ asset('storage/img/segitiga.png') }}" alt="Image 5"> → ✅ Ditemukan!</div>

        <h4>📌 Kesimpulan:</h4>
        <ul>
            <li>Pola segitiga murni ditemukan pada gambar ke-5 (indeks ke-5 dalam galeri).</li>
            <li>Pencarian linear memeriksa satu per satu dari awal hingga ketemu.</li>
            <li>Strategi ini cocok untuk data acak atau tidak terurut.</li>
        </ul>
    </div>

    <div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
        <div><img style="width: 170px;" src="{{ asset('storage/img/marker17.png') }}"></div>

        <p class="text-justify">
            Berikut diberikan informasi tentang <b>Tikar Purun</b> sebagai kerajinan khas Kalimantan Selatan.
        </p>
        
        <div style="background-color: #f0f0f5; padding:20px;">
        <h3 align="center">Temukan Motif Salapar Biji Waluh</h3>
        
        <p align="justify" style="text-indent: 2em;"><i>Tikar purun</i> adalah anyaman tradisional yang dibuat dari tanaman purun (sejenis rumput rawa) yang tumbuh subur di daerah rawa Kalimantan Selatan. 
            Tikar ini dikenal karena keindahan motif dan ketahanannya, serta telah menjadi warisan budaya masyarakat Banjar yang kaya akan nilai estetika dan filosofi.</p>
        
        <p align="justify" style="text-indent: 2em;">Para pengrajin biasanya menyusun purun yang telah dikeringkan dan diwarnai, lalu dianyam dengan pola-pola tertentu. 
            Setiap motif tikar purun tidak hanya mencerminkan keahlian teknis pengrajin, tetapi juga mengandung makna budaya yang dalam. 
            Salah satu motif yang terinspirasi dari alam adalah <b>Salapar Biji Waluh</b>, yakni motif yang menggambarkan susunan biji dari buah labu (waluh) yang rapi dan terstruktur.</p>
        
        <p align="justify" style="text-indent: 2em;">Sebelum kamu melakukan pencarian, mari kita kenali terlebih dahulu bentuk dari <b>biji waluh</b> yang menjadi inspirasi motif ini. 
            Biji labu biasanya berbentuk oval memanjang, pipih, dan tersusun secara spiral atau melingkar di dalam daging buahnya.</p>
            <div style="display: flex; justify-content: center; align-items: center;">
                <img style="width: 300px;" src="{{ asset('storage/img/biji-waluh.jpeg') }}" alt="Biji Waluh (Labu)">
            </div>
        <p align="justify" style="text-indent: 2em;">Pola alami dari susunan biji ini menarik perhatian pengrajin untuk mengadopsinya sebagai motif dalam kerajinan tikar purun, menciptakan pola yang terstruktur, simetris, dan indah dipandang.</p>
        
        <p align="center"><b>Berikut motif-motif dari Tikar Purun:</b></p>
        <div class="grid-container">
            <!-- Ganti gambar sesuai nama file motif -->
            <div class="grid-item"><img src="{{ asset('storage/img/pelupuh.jpg') }}" alt="Motif 1"></div>
            {{-- <div class="grid-item"><img src="{{ asset('storage/img/tapak-catur.jpg') }}" alt="Motif 2"></div> --}}
            <div class="grid-item"><img src="{{ asset('storage/img/saluang-mudik.jpg') }}" alt="Motif 3"></div>
            <div class="grid-item"><img src="{{ asset('storage/img/salapar-biji-waluh.jpg') }}" alt="Motif 4"></div>
            <div class="grid-item"><img src="{{ asset('storage/img/polos-merah.jpg') }}" alt="Motif 5"></div>
            <div class="grid-item"><img src="{{ asset('storage/img/ramak-sahang.jpg') }}" alt="Motif 6"></div>
            <div class="grid-item"><img src="{{ asset('storage/img/biji-cengkeh.jpg') }}" alt="Motif 7"></div>
        </div>
        </div><br>
        
        <h6>Instruksi Aktivitas:</h6>
        <ol>
            <li><b>Dekomposisi:</b>
                <ul>
                    <li>Perhatikan kumpulan gambar motif Tikar Purun di atas.</li>
                    <li>Identifikasi motif <b>Salapar Biji Waluh</b> berdasarkan bentuk pola spiral atau susunan biji oval yang khas.</li>
                </ul>
            </li>
            <li><b>Pengenalan Pola:</b>
                <ul>
                    <li>Motif Salapar Biji Waluh memiliki bentuk pola yang menyerupai biji labu: oval dan tersusun.</li>
                </ul>
            </li>
            <li><b>Abstraksi:</b>
                <ul>
                    <li>Fokuskan perhatian pada bentuk dan susunan pola tanpa mempertimbangkan warna atau ukuran gambar.</li>
                </ul>
            </li>
            <li><b>Algoritma:</b>
                <ul>
                    <li>Gunakan <b>algoritma pencarian linear</b> untuk menemukan motif tersebut:
                        <ul>
                            <li>Mulailah dari motif pertama dan periksa satu per satu.</li>
                            <li>Berhenti jika menemukan motif Salapar Biji Waluh.</li>
                            <li>Hitung jumlah langkah yang dibutuhkan untuk menemukannya.</li>
                        </ul>
                    </li>
                    <li>Catat hasil pencarian dalam bentuk berikut:
                        <ul>
                            <li class="question">Motif Salapar Biji Waluh ditemukan pada indeks ke- <input type="number" id="indexInput" placeholder="..." /></li>
                            <li class="question">Dengan pencarian linear, berapa langkah yang harus dilewati untuk menemukan motif Salapar Biji Waluh? <input type="number" id="stepsInput" placeholder="..." /></li>  
                            <button class="btn btn-success" type="button" onclick="checkAnswers()">Cek Jawaban</button> 
                        </ul>
                    </li>
                </ul>
            </li>
        </ol>        
    </div>
</div>

<script src="{{ asset('js/materi/4-1.js') }}"></script>

        
        



