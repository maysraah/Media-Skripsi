<head>
    <link rel="stylesheet" href="{{ asset('css/materi/1-3.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">KONSEP PENDEKATAN PEMBELAJARAN <i>COMPUTATIONAL THINKING</i></h3><br>
<p>
    <img style="width: 320px;" src="{{ asset('storage/img/marker4.png') }}">
</p>

<p style="text-indent: 2em;">
    CT memiliki empat fondasi yang menjadi landasan pemecahan persoalan yaitu <b>dekomposisi <i>(decomposition)</i>, pengenalan pola <i>(pattern recognition)</i>, abstraksi <i>(abstraction)</i> dan algoritma <i>(algorithm)</i></b>.
</p>

<h5 style="color:#011B78">(2) Pengenalan Pola</h5><br>

<div>
    <img style="width: 170px;" src="{{ asset('storage/img/marker5.png') }}">
    <p class="text-justify"><b>Isilah kolom-kolom kosong di bawah dengan jawaban yang paling tepat. Jawablah pertanyaan berikut secara mandiri dan teliti!</b></p>
</div>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <p>Perhatikan Pola Aritmatika berikut, isilah bagian yang kosong dengan memahami perubahan pola di setiap langkah.</p>

    <div class="question">
        <p>(i) 5, 10, <input type="number" id="jawaban1" class="inputJawaban" placeholder="..." data-jawaban="15"> , 20, <input type="number" id="jawaban2" class="inputJawaban" placeholder="..." data-jawaban="25"> , 30, <input type="number" id="jawaban3" class="inputJawaban" placeholder="..." data-jawaban="35"></p>
    </div>

    <div class="question">
        <p>(ii) 100, <input type="number" id="jawaban4" class="inputJawaban" placeholder="..." data-jawaban="90"> , 80, <input type="number" id="jawaban5" class="inputJawaban" placeholder="..." data-jawaban="70"> , 60, 50, <input type="number" id="jawaban6" class="inputJawaban" placeholder="..." data-jawaban="40"></p>
    </div>

    <div class="question">
        <p>(iii) 3, 6, <input type="number" id="jawaban7" class="inputJawaban" placeholder="..." data-jawaban="9"> , 12, <input type="number" id="jawaban8" class="inputJawaban" placeholder="..." data-jawaban="15"> , 18</p>
    </div>

    <!-- Tombol Cek Jawaban -->
    <button id="cekJawaban" class="btn btn-success">Cek Jawaban</button>

    <p id="result" class="text-justify"></p>
</div>

<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Pengenalan pola adalah pengamatan atau analisis terhadap berbagai kesamaan yang ada di antara persoalan-persoalan. Pengenalan pola dan pencocokan pola merupakan bagian penting dari pemrosesan informasi. Proses ini melibatkan pencarian kesamaan dan perbedaan dalam suatu data serta menghubungkannya dengan pengetahuan yang sudah ada.
    Dengan menggunakan pengetahuan sebelumnya, masalah dapat dikelompokkan ke dalam kategori tertentu. Pola membantu menentukan apakah suatu elemen termasuk dalam kelompok tertentu atau tidak.
</p>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Dalam pemecahan masalah, pencocokan pola sangat berguna karena memungkinkan hasil dari satu masalah diterapkan pada masalah lain yang serupa, sehingga tidak perlu mencari solusi dari awal.
</p>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Pengenalan pola dalam <i>Computational Thinking</i> (CT) dapat diterapkan di berbagai bidang untuk membantu dalam analisis, klasifikasi, dan pemecahan masalah yang lebih efisien.
</p>

<script src="{{ asset('js/materi/1-3.js') }}"></script>