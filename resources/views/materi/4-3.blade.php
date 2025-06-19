<head>
  <link rel="stylesheet" href="{{ asset('css/materi/4-3.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">
    MEMAHAMI ALGORITMA PENCARIAN DENGAN PENDEKATAN <i>COMPUTATIONAL THINKING</i>
</h3>

<div>
    <img style="width: 380px;" src="{{ asset('storage/img/marker18.png') }}">
</div>

<div style="border: 2px solid #011B78; border-radius: 8px; padding: 20px; margin: 20px auto;">
    <h5 style="color:#011B78">Tujuan Pembelajaran</h5>
    <ol type="A">
        <li>Memahami konsep dasar algoritma pencarian beruntun dengan sentinel.</li>
        <li>Mengimplementasikan pencarian beruntun dengan sentinel dalam memecahkan persoalan pencarian.</li>
    </ol>
</div>

<p class="text-justify" style="text-indent: 2em;">
    <b>Sentinel</b> adalah <b>elemen fiktif</b> yang ditambahkan setelah elemen terakhir dari sebuah array. Jika elemen terakhir daftar adalah L[N], maka sentinel ditempatkan pada elemen L[N + 1].
    Sentinel ini memiliki <b>nilai yang sama</b> dengan data yang dicari. Oleh karena itu, proses pencarian akan selalu berhasil menemukan data yang dicari. Meskipun demikian, perlu dilakukan pengecekan ulang untuk memastikan lokasi di mana data tersebut ditemukan, apakah:
</p>
<p class="text-justify">
    (i)	Di antara elemen-elemen daftar yang sesungguhnya, yaitu dari L[1] hingga L[N], atau<br>
    (ii) Pada elemen fiktif, yaitu L[N + 1], yang berarti X sebenarnya tidak ada dalam daftar L.
</p>

<p class="text-justify" style="text-indent: 2em;">
    Jika X tidak ditemukan, sentinel tersebut secara otomatis sudah ditambahkan. Penting untuk diingat batasan dalam mendefinisikan indeks daftar, karena komputer tidak boleh mengakses elemen daftar dengan indeks yang melebihi rentang yang telah ditentukan.
</p>

{{-- Dekomposisi --}}
<div>
    <img style="width: 180px;" src="{{ asset('storage/img/marker9.png') }}">
</div>
<p class="text-justify">Dekomposisi membantu kita memecah pencarian beruntun dengan sentinel menjadi langkah-langkah berikut:</p>
<ol>
    <li>Tambahkan elemen sentinel ke daftar setelah elemen terakhir.</li>
    <li>Mulai pencarian dari awal daftar hingga menemukan elemen yang dicari.</li>
    <li>Jika elemen ditemukan di dalam daftar asli, kembalikan indeksnya.</li>
    <li>Jika elemen ditemukan pada posisi sentinel, berarti elemen sebenarnya tidak ada dalam daftar asli.</li>
</ol><br>
        
{{-- Pengenalan Pola --}}
<div>
    <img style="width: 200px;" src="{{ asset('storage/img/marker12.png') }}">
</div>
<p class="text-justify">Kita mengenali pola berikut dalam pencarian beruntun dengan sentinel:</p>
<ol>
    <li>Sentinel <b>selalu ditempatkan di akhir daftar</b> untuk memastikan pencarian tidak keluar batas daftar.</li>
    <li>Proses pencarian <b>tidak memerlukan pengecekan batas setiap iterasi,</b> karena sentinel menjamin penghentian pencarian.</li>
    <li>Jika hasil pencarian mengarah ke indeks sentinel, berarti elemen tidak ditemukan di dalam daftar asli.</li>
</ol><br>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker11.png') }}">
    </div>
    <p class="text-justify">
        Perhatikan daftar angka berikut. Untuk melihat visualisasi cara kerja algoritma pencarian beruntun dengan sentinel, cobalah masukkan angka <b>“17”</b> sebagai target pada kolom masukan.
    </p><br><br><br>
        <div id="list-container" class="d-flex gap-2" style="position: relative;">
            <div id="search-box" class="search-box">?</div>
            <div class="list-item" id="item0">3</div>
            <div class="list-item" id="item1">6</div>
            <div class="list-item" id="item2">7</div>
            <div class="list-item" id="item3">22</div>
            <div class="list-item" id="item4">32</div>
            <div class="list-item" id="item5">33</div>
            <div class="list-item" id="item6">53</div>
        </div>

        <div class="mt-4">
            <input type="number" id="target" class="form-control w-50 d-inline" placeholder="Masukkan angka yang dicari">
            <button class="btn btn-success" onclick="startSearch()">Mulai Pencarian</button>
        </div>

        <div id="result" class="mt-4 fw-bold"></div>
        <div id="narration" class="mt-3" style="font-style: italic; max-height: 150px; overflow-y: auto;"></div>
</div>

{{-- Abstraksi --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker13.png') }}">
</div>
<p class="text-justify">Kita dapat menyederhanakan pencarian beruntun dengan sentinel sebagai berikut:</p>
<ul>
    <li>Bayangkan mencari nomor tertentu di dalam daftar angka.</li>
    <li>Dengan menambahkan sentinel, kita tidak perlu memeriksa apakah sudah mencapai akhir daftar setiap saat.</li>
    <li>Hanya perlu satu pemeriksaan tambahan untuk memastikan apakah elemen benar-benar ada atau hanya ditemukan di sentinel.</li>
</ul><br>
        
{{-- Algoritma --}}
<div>
    <img style="width: 130px;" src="{{ asset('storage/img/marker14.png') }}">
</div>
<p class="text-justify">Berikut adalah langkah-langkah algoritma pencarian beruntun dengan sentinel:</p>
<ol>
    <li>Tambahkan elemen yang dicari sebagai sentinel di indeks <b>L[N + 1].</b></li>
    <li>Mulai dari indeks pertama, bandingkan setiap elemen dengan nilai yang dicari.</li>
    <li>Jika ditemukan sebelum mencapai sentinel, berarti elemen ada dalam daftar.</li>
    <li>Jika ditemukan pada indeks sentinel, berarti elemen tidak ada dalam daftar asli.</li>
</ol><br>

{{-- Contoh --}}
<div>
    <img style="width: 80px;" src="{{ asset('storage/img/marker10.png') }}">
</div>
<p>Misalkan kita memiliki daftar angka berikut:</p>
<div>
    <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-sentinel-1.png') }}" alt="Ilustrasi Cara Kerja Algoritma Pencarian Beruntun dengan Sentinel">
</div>
<p>N = 6 (jumlah elemen daftar awal)</p>

<h6>Kasus 1: Elemen X = 22</h6>
<ul>
    <li>Tambahkan <b>22 sebagai sentinel</b> di L[N + 1]<br>
        <div>
            <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-sentinel-2.png') }}" alt="Ilustrasi Cara Kerja Algoritma Pencarian Beruntun dengan Sentinel">
        </div>
    </li>
    <li>Elemen yang diperiksa selama pencarian: <b>3, 6, 7, 22 (Indeks ke-1 sampai Indeks ke-4).</b></li>
    <li><b>Indeks pengembalian: 4</b></li>
    <li>Karena 4 ≠ N + 1, berarti <b>X = 22 ditemukan dalam daftar asli.</b></li>
</ul>

<h6>Kasus 2: Elemen X = 16</h6>
<ul>
    <li>Tambahkan <b>16 sebagai sentinel</b> di L[N + 1]<br>
        <div>
            <img style="width: 350px;" src="{{ asset('storage/img/ilustrasi-sentinel-3.png') }}" alt="Ilustrasi Cara Kerja Algoritma Pencarian Beruntun dengan Sentinel">
        </div>
    </li>
    <li>Elemen yang diperiksa selama pencarian: <b>3, 6, 7, 22, 32, 33, 53, 16 (Indeks ke-1 sampai Indeks ke-7).</b></li>
    <li><b>Indeks pengembalian: 7</b></li>
    <li>Karena 7 = N + 1, berarti <b>X = 16 tidak ada dalam daftar asli.</b></li>
</ul>

{{-- Aktivitas Siswa 4 --}}
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker21.png') }}">
    </div>
    <p class="text-justify">Diberikan daftar skor ujian sebagai berikut:</p>

    <div id="list-container" class="d-flex gap-2">
        <div class="list-item" id="item0">55</div>
        <div class="list-item" id="item1">60</div>
        <div class="list-item" id="item2">72</div>
        <div class="list-item" id="item3">80</div>
        <div class="list-item" id="item4">85</div>
        <div class="list-item" id="item5">90</div>
        <div class="list-item" id="item6">93</div>
    </div>

    <p class="text-justify">Lakukanlah pencarian terhadap skor <b>82</b> pada daftar tersebut dengan menggunakan algoritma pencarian beruntun dengan sentinel.</p>

    <h6>Langkah Penyelesaian dengan <i>Computational Thinking:</i></h6>
    <ol>
        <li><b>Dekomposisi:</b>
            <ul>
                <li>Perhatikan daftar skor ujian.</li>
                <li>Tambahkan <b>elemen sentinel (skor yang dicari)</b> di akhir daftar.
                    <div id="list-container" class="d-flex gap-2">
                        <div class="list-item" id="item0">55</div>
                        <div class="list-item" id="item1">60</div>
                        <div class="list-item" id="item2">72</div>
                        <div class="list-item" id="item3">80</div>
                        <div class="list-item" id="item4">85</div>
                        <div class="list-item" id="item5">90</div>
                        <div class="list-item" id="item6">93</div>
                        <div class="list-item" id="item7"><input type="number" id="sentinel" placeholder="..."></div>
                    </div>
                </li>
            </ul>
        </li>
        <li><b>Pengenalan Pola:</b>
            <ul>
                <li>Identifikasi pola dalam pencarian beruntun dengan sentinel.</li>
                <li>Memahami bahwa pencarian selalu menemukan nilai X, tetapi perlu memverifikasi apakah X benar-benar ada dalam daftar asli.</li>
            </ul>
        </li>
        <li><b>Abstraksi:</b>
            <ul>
                <li>Fokus pada elemen-elemen yang diperiksa dalam proses pencarian.</li>
                <li>Mengabaikan elemen lain yang tidak relevan dalam daftar.</li>
            </ul>
        </li>
        <li><b>Abstraksi:</b>
            <ol>
                <li>Tambahkan sentinel (X) ke akhir daftar.</li>
                <li>Periksa elemen satu per satu dari awal hingga menemukan X.</li>
                <li>Jika indeks tersebut berada di dalam daftar asli, X memang ada dalam daftar. Jika tidak, X tidak ada dalam daftar.</li>
                <li>Catat indeks tempat X ditemukan.</li>
            </ol>
        </li>
    </ol>

    <h6>Berdasarkan informasi di atas, jawablah pertanyaan-pertanyaan berikut!</h6>
    <div id="questions">
        <ol>
            <li>Skor yang dicari (X):
                <input type="number" id="jawaban1" class="inputJawaban" placeholder="..." data-jawaban="82">
            </li>
            <li>Daftar setelah ditambahkan sentinel:
                <div id="list-container-soal" class="d-flex gap-2">
                    <div class="list-item" id="item0"><input type="number" id="jawaban2" class="inputJawaban" placeholder="..." data-jawaban="55"></div>
                    <div class="list-item" id="item1"><input type="number" id="jawaban3" class="inputJawaban" placeholder="..." data-jawaban="60"></div>
                    <div class="list-item" id="item2"><input type="number" id="jawaban4" class="inputJawaban" placeholder="..." data-jawaban="72"></div>
                    <div class="list-item" id="item3"><input type="number" id="jawaban5" class="inputJawaban" placeholder="..." data-jawaban="80"></div>
                    <div class="list-item" id="item4"><input type="number" id="jawaban6" class="inputJawaban" placeholder="..." data-jawaban="85"></div>
                    <div class="list-item" id="item5"><input type="number" id="jawaban7" class="inputJawaban" placeholder="..." data-jawaban="90"></div>
                    <div class="list-item" id="item6"><input type="number" id="jawaban8" class="inputJawaban" placeholder="..." data-jawaban="93"></div>
                    <div class="list-item" id="item7"><input type="number" id="jawaban9" class="inputJawaban" placeholder="..." data-jawaban="82"></div>
                </div>
            </li>
            <li>Elemen yang diperiksa selama pencarian:<br>
                <input type="text" id="jawaban10" class="inputJawaban" placeholder="Contoh: 1,2,3" data-jawaban="55,60,72,80,85,90,93,82">
            </li>
            <li>Indeks tempat X ditemukan:
                <input type="number" id="jawaban11" class="inputJawaban" placeholder="..." data-jawaban="8">
            </li>
            <li>Apakah X ada dalam daftar asli?
                <input type="text" id="jawaban12" class="inputJawaban" placeholder="Contoh: Ya/Tidak" data-jawaban="tidak">
            </li>
        </ol>
    </div>

    <!-- Tombol Cek Jawaban -->
    <button id="cekJawaban" class="btn btn-success">Cek Jawaban</button>
</div>
                                
<script src="{{ asset('js/materi/4-3.js') }}"></script>

