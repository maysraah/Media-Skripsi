<head>
    <link rel="stylesheet" href="{{ asset('css/materi/2-1.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">KONSEP PENDEKATAN PEMBELAJARAN <i>COMPUTATIONAL THINKING</i></h3><br>
<p>
    <img style="width: 320px;" src="{{ asset('storage/img/marker4.png') }}">
</p>

<p style="text-indent: 2em;">
    CT memiliki empat fondasi yang menjadi landasan pemecahan persoalan yaitu <b>dekomposisi <i>(decomposition)</i>, pengenalan pola <i>(pattern recognition)</i>, abstraksi <i>(abstraction)</i> dan algoritma <i>(algorithm)</i></b>.
</p>

<h5 style="color:#011B78">(1) Dekomposisi</h5>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Dekomposisi adalah pembagian atau pemecahan persoalan ke dalam beberapa sub-persoalan yang lebih kecil agar menjadi "langkah-langkah yang dapat dikelola". Dekomposisi merupakan bagian penting dari berpikir komputasional karena membantu memahami dan menyelesaikan masalah yang rumit.
</p>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Saat menganalisis suatu masalah secara keseluruhan, penting untuk mengetahui bagian-bagian kecil yang dapat dikelola serta bagaimana hubungan antarbagian tersebut dengan keseluruhan masalah.
</p>
<p class="text-justify" style="padding-left: 20px;">
    Untuk dapat lebih memahami bagaimana langkah dekomposisi, perhatikan contoh berikut.
</p>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <p class="text-justify">
        <b>Diberikan situasi:</b> Kamu diminta mencari sebuah buku tertentu di perpustakaan sekolah yang besar.
    </p>

    <p><b>Langkah Dekomposisi dalam <i>Computational Thinking:</i></b></p>

    <div>
        <ol>
            <li><b>Pecah Masalah Menjadi Bagian Lebih Kecil:</b></li>
            <ul>
                <li class="text-justify">Perpustakaan besar bisa dibagi menjadi beberapa rak berdasarkan kategori buku (misalnya, kategori Fiksi, Sains, Sejarah, dan sebagainya).</li>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="centered" style="width: 350px;" src="{{ asset('storage/img/rak-buku1.png') }}" alt="Rak Buku di Perpustakaan">
                </div>
                <li class="text-justify">Setiap rak kemudian bisa dibagi lagi berdasarkan sub-kategori atau pengurutan abjad.</li>
            </ul>

            <li><b>Identifikasi Bagian yang Relevan:</b></li>
            <ul>
                <li class="text-justify">Siswa harus mengidentifikasi rak mana yang kemungkinan besar memiliki buku yang mereka cari, misalnya rak "Sains" jika mereka mencari buku tentang ilmu alam.</li>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="centered" style="width: 250px;" src="{{ asset('storage/img/rak-buku2.png') }}" alt="Rak Buku di Perpustakaan">
                </div>
            </ul>
        
            <li><b>Langkah Pencarian:</b></li>
            <ul class="text-justify">
                <li>Setelah menemukan rak yang sesuai, siswa bisa memecah tugas pencarian di rak tersebut berdasarkan alfabet atau pengurutan kode katalog.</li>
            </ul>

            <li><b>Implementasi Proses Pencarian <i>(Searching):</i></b></li>
            <ul>
                <li class="text-justify">Siswa bisa menggunakan strategi pencarian sederhana, seperti memeriksa setiap buku secara berurutan (pencarian linear), atau menggunakan cara lebih cepat, seperti mengidentifikasi buku berdasarkan abjad atau nomor panggilan (pencarian biner pada daftar yang sudah terurut).</li>
            </ul>
        </ol>
    </div>
</div>

<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Dengan menggunakan dekomposisi, masalah kompleks dapat dipecah menjadi bagian-bagian yang lebih kecil dan lebih mudah dikelola, sehingga mempermudah pemecahan masalah secara efektif.
</p>    

<script src="{{ asset('js/materi/2-1.js') }}"></script>
