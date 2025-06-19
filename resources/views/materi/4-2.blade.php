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
    <ol type="A">
        <li>Memahami konsep dasar algoritma pencarian biner.</li>
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
    <li>Urutkan data sebelum melakukan pencarian.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-1.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img">
    </li>
    <li>Tentukan batas awal, tengah, dan akhir dari data.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-2.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img"><br>
        <p style="margin-top: 30px; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
            <strong>Catatan:</strong> Jika hasil perhitungan nilai <b>mid</b> berupa angka desimal (misalnya 0,5), bulatkan nilai indeks ke bawah.
        </p>
    </li>
    <li>Bandingkan elemen tengah dengan elemen yang dicari.<br>
        <img src="{{ asset('storage/img/ilustrasi-biner-3.png') }}" alt="Ilustrasi Cara Kerja Algoritma Binary Search" class="responsive-img">
    </li>
    <li>Jika cocok, pencarian selesai.</li>
    <li>Jika elemen yang dicari <b>lebih kecil</b> dari elemen tengah, periksa <b>setengah bagian kiri data.</b></li>
    <li>Jika elemen yang dicari <b>lebih besar</b>, periksa <b>setengah bagian kanan data.</b><br>
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
    <li>Jika elemen berada di bagian awal atau akhir data, pencarian masih efisien karena tidak perlu memeriksa setiap elemen satu per satu.</li>
</ul>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker11.png') }}">
    </div>
    <p class="text-justify">
        Perhatikan barisan angka berikut. Untuk melihat visualisasi cara kerja algoritma pencarian biner, cobalah masukkan angka <b>“17”</b> sebagai target pada kolom masukan.
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
        <div id="narration" class="mt-2" style="font-style: italic; max-height: 150px; overflow-y: auto;"></div>
</div><br>

{{-- Abstraksi --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker13.png') }}">
</div>

<p class="text-justify">Dalam pencarian biner, kita dapat menyederhanakan masalah sebagai berikut:</p>
<ul>
    <li>Bayangkan mencari nama dalam data siswa yang sudah diurutkan secara alfabetis.</li>
    <li>Dengan hanya membandingkan elemen tengah dan mempersempit ruang pencarian, kita tidak perlu mengecek semua elemen satu per satu.</li>
</ul><br>

{{-- Algoritma --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker14.png') }}">
</div>

<p class="text-justify">Berikut adalah langkah-langkah algoritma pencarian biner:</p>
<ol>
    <li>Pastikan data sudah terurut.</li>
    <li>Tentukan indeks awal (low), indeks akhir (high), dan indeks tengah (mid).</li>
    <li>Bandingkan elemen tengah dengan elemen yang dicari.</li>
    <li>Jika cocok, kembalikan indeksnya.</li>
    <li>Jika elemen yang dicari lebih kecil dari elemen tengah, periksa bagian kiri.</li>
    <li>Jika elemen yang dicari lebih besar, periksa bagian kanan.</li>
    <li>Ulangi hingga elemen ditemukan atau indeks awal lebih besar dari indeks akhir.</li>
</ol><br>

{{-- Aktivitas Siswa 2 --}}
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker19.png') }}">
    </div><br>
    
    {{-- Soal 1 --}}
    <div class="soal" id="soal-1">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
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
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>16</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true" data-feedback="Karena 16 berada di tengah-tengah barisan, maka dibutuhkan 1 langkah untuk menemukannya.">1 langkah</button>
          <button class="answer-btn" data-benar="false">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
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
          <div class="kotak">35</div>
          <div class="kotak">40</div>
          <div class="kotak">45</div>
          <div class="kotak">50</div>
          <div class="kotak">55</div>
        </div>
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>15</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">1 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 15 berada di bagian sebelah kiri barisan dan dibutuhkan 2 langkah untuk menemukannya.">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>

    {{-- Soal 3 --}}
    <div class="soal" id="soal-3">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
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
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>12</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 12 berada di bagian sebelah kiri barisan dan dibutuhkan 4 langkah untuk menemukannya.">4 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>      

    {{-- Soal 4 --}}
    <div class="soal" id="soal-4">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
        <div class="grid">
          <div class="kotak">2</div>
          <div class="kotak">4</div>
          <div class="kotak">6</div>
          <div class="kotak">8</div>
          <div class="kotak">10</div>
          <div class="kotak">12</div>
          <div class="kotak">14</div>
        </div>
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>10</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">1 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 10 berada di bagian sebelah kanan barisan dan dibutuhkan 2 langkah untuk menemukannya.">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
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
          <div class="kotak">1</div>
          <div class="kotak">3</div>
          <div class="kotak">5</div>
          <div class="kotak">7</div>
          <div class="kotak">9</div>
          <div class="kotak">11</div>
          <div class="kotak">13</div>
          <div class="kotak">15</div>
        </div>
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>1</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true" data-feedback="Angka 1 berada di bagian sebelah kiri barisan dan dibutuhkan 3 langkah untuk menemukannya.">3 langkah</button>
          <button class="answer-btn" data-benar="false">2 langkah</button>
          <button class="answer-btn" data-benar="false">1 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>
    
    {{-- Soal 6 --}}
    <div class="soal" id="soal-6">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
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
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>800</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="true" data-feedback="Angka 800 berada di bagian sebelah kanan barisan dan dibutuhkan 2 langkah untuk menemukannya.">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
          <button class="answer-btn" data-benar="false">4 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>
    
    {{-- Soal 7 --}}
    <div class="soal" id="soal-7">
        <div class="soal-info" style="margin-bottom: 10px; font-weight: bold;"></div>
        <p>Perhatikan barisan angka berikut ini:</p>
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
        <p>Dari barisan angka di atas, berapa langkah yang dibutuhkan untuk menemukan angka <b>28</b> dengan algoritma pencarian biner?</p>
        <div class="answers">
          <button class="answer-btn" data-benar="false">2 langkah</button>
          <button class="answer-btn" data-benar="false">3 langkah</button>
          <button class="answer-btn" data-benar="true" data-feedback="Angka 28 berada di bagian sebelah kanan barisan dan dibutuhkan 4 langkah untuk menemukannya.">4 langkah</button>
        </div>
        <div class="feedback" style="display: none; margin-top: 15px;"></div>
        <button class="prev-btn" style="margin-top: 10px; display: none;">Soal Sebelumnya</button>
        <button class="next-btn" disabled>Soal Berikutnya</button>
    </div>  
</div>

<script src="{{ asset('js/materi/4-2.js') }}"></script>


