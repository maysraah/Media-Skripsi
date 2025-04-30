<head>
    <link rel="stylesheet" href="{{ asset('css/materi/4-2.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">
    MEMAHAMI ALGORITMA PENCARIAN DENGAN PENDEKATAN <i>COMPUTATIONAL THINKING</i>
</h3>

<div>
    <img style="width: 380px;" src="{{ asset('storage/img/marker16.png') }}">
</div>

<div style="border: 2px solid #011B78; border-radius: 8px; padding: 20px; margin: 20px auto;">
    <h5 style="color:#011B78">Tujuan Pembelajaran</h5>
    <ol>
        <li>Memahami konsep dasar algoritma pencarian biner.</li>
        <li>Menggunakan pendekatan <i>computational thinking</i> dalam memahami proses pencarian data.</li>
        <li>Mengimplementasikan pencarian biner dalam memecahkan persoalan pencarian.</li>
    </ol>
</div>

<p class="text-justify" style="text-indent: 2em;">
    <b>Pencarian Biner <i>(Binary Search)</i></b> adalah metode pencarian yang bekerja dengan <b>membagi data menjadi dua bagian,</b> lalu <b>membandingkan</b> data pada salah satu bagian dengan target yang dicari.
    Proses ini memerlukan indeks <b>terkecil</b> dan <b>terbesar</b> untuk dihitung rata-rata, yang kemudian digunakan untuk menentukan bagian mana yang akan diperiksa lebih lanjut.
    Jika nilai yang dicari tidak ada dalam data, maka akan dikembalikan -1 atau indikasi bahwa nilai tidak ditemukan. Metode ini hanya dapat digunakan pada data yang telah <b>diurutkan</b>, dan secara signifikan lebih efisien dibandingkan dengan pencarian linear <i>(linear search).</i>
</p>

<div>
    <img style="width: 180px;" src="{{ asset('storage/img/marker9.png') }}">
</div>

{{-- Dekomposisi --}}
<p class="text-justify" style="text-indent: 2em;">Dekomposisi membantu kita memecah pencarian biner menjadi langkah-langkah berikut:</p>
<ol>
    <li>Urutkan daftar data sebelum melakukan pencarian.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-1.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img">
    </li>
    <li>Tentukan batas awal, tengah, dan akhir dari daftar.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-2.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img"><br>
        <p style="margin-top: 30px; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
            <strong>Catatan:</strong> Jika hasil perhitungan nilai <b>mid</b> berupa angka desimal (misalnya 0,5), bulatkan nilai indeks ke bawah.
        </p>
    </li>
    <li>Bandingkan elemen tengah dengan elemen yang dicari.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-3.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img">
    </li>
    <li>Jika cocok, pencarian selesai.</li>
    <li>Jika elemen yang dicari <b>lebih kecil</b> dari elemen tengah, periksa <b>setengah bagian kiri daftar.</b></li>
    <li>Jika elemen yang dicari <b>lebih besar</b>, periksa <b>setengah bagian kanan daftar.</b><br>
        <img src="{{ asset('storage/img/ilustrasi-biner-4.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img">
    </li>
    <li>Ulangi proses hingga elemen ditemukan atau ruang pencarian habis.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-5.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img"><br>
        <p class="text-justify">
            Berdasarkan rumus diatas, didapatkan nilai <b>m</b> atau <b>mid = 6</b>, yang berarti nilai tengahnya adalah angka yang ada pada <b>indeks ke-6</b> yaitu <b>33</b>. Mari kita periksa lagi apakah angka 33 sama dengan angka yang dicari? Jawabannya adalah tidak.
        </p>
        <p>Lanjutkan pencarian.</p>
        <img src="{{ asset('storage/img/ilustrasi-biner-6.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img"><br>
    </li>
</ol>

<p class="text-justify">
    Pencarian target pada area sebelum <b>m</b> adalah <b>indeks ke-5</b>. Apakah nilai yang ada dalam indeks ke-5 sama dengan angka yang dicari? Jawabannya adalah <b>YA</b>, maka pencarian selesai.
</p><br>

{{-- Pengenalan Pola --}}
<div>
    <img style="width: 200px;" src="{{ asset('storage/img/marker12.png') }}">
</div>

<p class="text-justify">Pola yang bisa dikenali dalam pencarian biner:</p>
<ul>
    <li>Data harus <b>terurut</b> sebelum pencarian dilakukan.</li>
    <li>Setiap iterasi mengurangi ruang pencarian <b>menjadi setengahnya</b>, sehingga lebih cepat dibandingkan pencarian linear.<br>
        <img src="{{ asset('storage/img/rumus-nilai-mid.png') }}" class="responsive-img">
    </li>
    <li>Jika elemen berada di bagian awal atau akhir daftar, pencarian masih efisien karena tidak perlu memeriksa setiap elemen satu per satu.</li>
</ul>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker11.png') }}">
    </div>
    <p class="text-justify">
        Perhatikan daftar angka berikut. Untuk melihat visualisasi cara kerja algoritma pencarian biner, cobalah masukkan angka <b>“17”</b> sebagai target pada kolom masukan.
    </p>
    <div style="position: relative; height: 60px;">
        <div id="search-box" class="search-box">?</div>
    </div>

    <div id="list-container" class="list-container">
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
    </div>
        <div class="mt-4">
            <input type="number" id="target" class="form-control w-50 d-inline" placeholder="Masukkan angka yang dicari">
            <button class="btn btn-success" onclick="startBinarySearch()">Mulai Pencarian Biner</button>
        </div>

        <div id="result" class="mt-4 fw-bold"></div>
</div><br>

{{-- Abstraksi --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker13.png') }}">
</div>

<p class="text-justify">Dalam pencarian biner, kita dapat menyederhanakan masalah sebagai berikut:</p>
<ul>
    <li>Bayangkan mencari nama dalam daftar siswa yang sudah diurutkan secara alfabetis.</li>
    <li>Dengan hanya membandingkan elemen tengah dan mempersempit ruang pencarian, kita tidak perlu mengecek semua elemen satu per satu.</li>
</ul><br>

{{-- Algoritma --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker14.png') }}">
</div>

<p class="text-justify">Berikut adalah langkah-langkah algoritma pencarian biner:</p>
<ol>
    <li>Pastikan daftar sudah terurut.</li>
    <li>Tentukan indeks awal (low), indeks akhir (high), dan indeks tengah (mid).</li>
    <li>Bandingkan elemen tengah dengan elemen yang dicari.</li>
    <li>Jika cocok, kembalikan indeksnya.</li>
    <li>Jika elemen yang dicari lebih kecil dari elemen tengah, periksa bagian kiri.</li>
    <li>Jika elemen yang dicari lebih besar, periksa bagian kanan.</li>
    <li>Ulangi hingga elemen ditemukan atau indeks awal lebih besar dari indeks akhir.</li>
</ol><br>

{{-- Contoh --}}
{{-- <div>
    <img style="width: 80px;" src="{{ asset('storage/img/marker10.png') }}">
</div>

<p><b>Konteks: Pencarian Nama Siswa di Daftar Absen</b></p><br>

<p class="text-justify">
    Bayangkan seorang guru ingin mencari nama siswa <b>"Fajar"</b> dalam daftar absen yang sudah <b>diurutkan secara alfabetis</b> sebagai berikut:
</p>

<div style="display: flex; justify-content: center;">
    <table style="border: 1px solid black">
        <tr>
            <th class="col-small">No</th>
            <th class="col-large">Nama Siswa</th>
        </tr>
        <tr>
            <td class="col-small">1</td>
            <td class="col-large">Ahmad</td>
        </tr>
        <tr>
            <td class="col-small">2</td>
            <td class="col-large">Bella</td>
        </tr>
        <tr>
            <td class="col-small">3</td>
            <td class="col-large">Clara</td>
        </tr>
        <tr>
            <td class="col-small">4</td>
            <td class="col-large">Dani</td>
        </tr>
        <tr>
            <td class="col-small">5</td>
            <td class="col-large">Fajar</td>
        </tr>
        <tr>
            <td class="col-small">6</td>
            <td class="col-large">Rizky</td>
        </tr>
        <tr>
            <td class="col-small">7</td>
            <td class="col-large">Tania</td>
        </tr>
        <tr>
            <td class="col-small">8</td>
            <td class="col-large">Vina</td>
        </tr>
    </table>
</div>

<p class="text-justify">
    Mari terapkan pencarian biner dengan pendekatan <i>Computational Thinking:</i>
</p>

<ol>
    <b><li>Dekomposisi:</b>
        <ul>
            <li>Memastikan daftar terurut.</li>
            <li>Menentukan batas awal dan akhir, serta mencari elemen tengah.<br>
                <p class="text-center">Awal = 1 (Ahmad), Akhir = 8 (Vina).</p>
            </li>
        </ul>
    </li>
    <b><li>Pengenalan Pola:</b>
        <ul>
            <li>Dibandingkan dengan elemen tengah.</li>
            <li>Jika tidak cocok, fokus hanya pada setengah bagian daftar.</li>
        </ul>
    </li>
    <b><li>Abstraksi:</b>
        <ul>
            <li>Mengabaikan informasi lain dan hanya fokus pada proses pencarian berdasarkan pembagian daftar.</li>
        </ul>
    </li>
    <b><li>Algoritma:</b>
        <ul>
            <li>Cari elemen tengah: (1+8)/2 = indeks ke-4 <b>(Dani)</b>.</li>
            <li>Bandingkan dengan <b>"Fajar"</b>: lebih besar, fokus ke kanan.</li>
            <li>Cari elemen tengah dari sisa daftar: indeks ke-6 <b>(Rizky)</b>.</li>
            <li>Bandingkan dengan <b>"Fajar"</b>: lebih kecil, fokus ke kiri.</li>
            <li>Cari elemen tengah: indeks ke-5 <b>(Fajar) → Cocok!</b>
        </ul>
    </li>
</ol>

<p>Hasilnya: <b>"Fajar" ditemukan pada indeks ke-5.</b></p> --}}
   
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker19.png') }}">
    </div>
    
    {{-- Soal 1 --}}
    <div class="soal" id="soal-1">
        <strong>Soal 1:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">2</div>
          <div class="kotak">3</div>
          <div class="kotak">7</div>
          <div class="kotak">9</div>
          <div class="kotak">11</div>
          <div class="kotak">16</div>
          <div class="kotak">22</div>
          <div class="kotak">25</div>
          <div class="kotak">27</div>
          <div class="kotak">34</div>
          <div class="kotak">40</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>16</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true">1</button>
          <button class="answer-btn" data-benar="false">2</button>
          <button class="answer-btn" data-benar="false">3</button>
        </div>
    </div>

    {{-- Soal 2 --}}
    <div class="soal" id="soal-2">
        <strong>Soal 2:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">5</div>
          <div class="kotak">10</div>
          <div class="kotak">15</div>
          <div class="kotak">20</div>
          <div class="kotak">25</div>
          <div class="kotak">30</div>
          <div class="kotak">35</div>
          <div class="kotak">40</div>
          <div class="kotak">45</div>
          <div class="kotak">50</div>
          <div class="kotak">55</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>15</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">1</button>
          <button class="answer-btn" data-benar="true">2</button>
          <button class="answer-btn" data-benar="false">3</button>
        </div>
    </div>

    {{-- Soal 3 --}}
    <div class="soal" id="soal-3">
        <strong>Soal 3:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">3</div>
          <div class="kotak">6</div>
          <div class="kotak">9</div>
          <div class="kotak">12</div>
          <div class="kotak">15</div>
          <div class="kotak">18</div>
          <div class="kotak">21</div>
          <div class="kotak">24</div>
          <div class="kotak">27</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>12</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">2</button>
          <button class="answer-btn" data-benar="false">3</button>
          <button class="answer-btn" data-benar="true">4</button>
        </div>
    </div>      

    {{-- Soal 4 --}}
    <div class="soal" id="soal-4">
        <strong>Soal 4:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">2</div>
          <div class="kotak">4</div>
          <div class="kotak">6</div>
          <div class="kotak">8</div>
          <div class="kotak">10</div>
          <div class="kotak">12</div>
          <div class="kotak">14</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>10</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">1</button>
          <button class="answer-btn" data-benar="true">2</button>
          <button class="answer-btn" data-benar="false">3</button>
        </div>
    </div>
      
    {{-- Soal 5 --}}
    <div class="soal" id="soal-5">
        <strong>Soal 5:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">1</div>
          <div class="kotak">3</div>
          <div class="kotak">5</div>
          <div class="kotak">7</div>
          <div class="kotak">9</div>
          <div class="kotak">11</div>
          <div class="kotak">13</div>
          <div class="kotak">15</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>1</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true">3</button>
          <button class="answer-btn" data-benar="false">2</button>
          <button class="answer-btn" data-benar="false">1</button>
        </div>
    </div>
    
    {{-- Soal 6 --}}
    <div class="soal" id="soal-6">
        <strong>Soal 6:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">100</div>
          <div class="kotak">200</div>
          <div class="kotak">300</div>
          <div class="kotak">400</div>
          <div class="kotak">500</div>
          <div class="kotak">600</div>
          <div class="kotak">700</div>
          <div class="kotak">800</div>
          <div class="kotak">900</div>
          <div class="kotak">1000</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>800</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true">2</button>
          <button class="answer-btn" data-benar="false">3</button>
          <button class="answer-btn" data-benar="false">4</button>
        </div>
    </div>
    
    {{-- Soal 7 --}}
    <div class="soal" id="soal-7">
        <strong>Soal 7:</strong>
        <p>Perhatikan daftar angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">2</div>
          <div class="kotak">4</div>
          <div class="kotak">6</div>
          <div class="kotak">8</div>
          <div class="kotak">10</div>
          <div class="kotak">12</div>
          <div class="kotak">14</div>
          <div class="kotak">16</div>
          <div class="kotak">18</div>
          <div class="kotak">20</div>
          <div class="kotak">22</div>
          <div class="kotak">24</div>
          <div class="kotak">26</div>
          <div class="kotak">28</div>
          <div class="kotak">30</div>
        </div>
        <p>Dari daftar angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>28</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">2</button>
          <button class="answer-btn" data-benar="false">3</button>
          <button class="answer-btn" data-benar="true">4</button>
        </div>
    </div>  
</div>

<script src="{{ asset('js/materi/4-2.js') }}"></script>


