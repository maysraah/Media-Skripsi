<head>
    <style>
        .option-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: 2px solid #007bff;
            border-radius: 8px;
            background-color: white;
            color: #007bff;
            transition: all 0.3s ease;
        }

        .option-button:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<h3 class="fw-bold text-center" style="color:#011B78">PENDAHULUAN</h3>

<p class="text-justify"><strong>Bayangkan:</strong> Kamu sedang berada di <strong>perpustakaan sekolah</strong> seperti pada Gambar 1. Ada ratusan bahkan ribuan buku yang tersusun rapi di rak-rak. Tugasmu hari ini adalah <b>mencari satu buku tertentu berjudul "Algoritma <i>Searching</i>"</b> yang akan kamu gunakan untuk tugas kelompok. Kamu tahu judulnya, tapi tidak tahu pasti di rak mana buku itu berada.</p>
<figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <img style="width: 350px;" src="{{ asset('storage/img/perpustakaan.jpg') }}" alt="Rak Buku di Perpustakaan">
    <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 1 Perpustakaan Sekolah</i></figcaption>
</figure>

<p>Apa yang biasanya kamu lakukan?</p>
<ul>
    <li>📚 Kamu mulai dari rak paling awal dan memeriksa satu per satu judul buku sampai menemukan buku tersebut.</li>
    <li>📚 Kamu menuju rak yang bertanda “Informatika” karena kamu menduga buku itu ada di sana.</li>
    <li>📚 Kamu bertanya kepada petugas perpustakaan agar dibantu menemukan buku tersebut.</li>
    <li>📚 Kamu memperhatikan pola letak buku—misalnya, rak sebelah kanan berisi buku berdasarkan abjad—lalu mencoba menebak letak buku berdasarkan itu.</li>
</ul>

<p class="text-justify">Cara kamu menyusun langkah untuk menyelesaikan masalah pencarian itu menunjukkan bahwa kamu sedang <b>berpikir secara komputasional</b>, seperti cara komputer bekerja saat mencari data.</p>

<div style="margin-top: 30px; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
    {{-- <strong>Hubungan dengan algoritma pencarian:</strong> --}}
    <p class="text-justify">💡 Dalam dunia informatika, proses pencarian seperti ini disebut <b>algoritma <i>searching</i></b>. Agar pencarian lebih cepat dan efisien, kita bisa menggunakan pendekatan <b><i>Computational Thinking</i> (Berpikir Komputasional)</b> yang mencakup:</p>
    <ul>
        <li><b>Dekomposisi: Memecah masalah pencarian menjadi langkah-langkah kecil.</b></li>
        <li><b>Pengenalan Pola: Melihat pola di letak buku atau data.</b></li>
        <li><b>Abstraksi: Mengabaikan detail yang tidak perlu.</b></li>
        <li><b>Algoritma: Menyusun langkah-langkah sistematis.</b></li>
    </ul>
    <p>Pendekatan ini sangat membantu kamu dalam memahami dan merancang solusi pemrograman, khususnya <b>algoritma pencarian</b>.</p>
</div>

<hr>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    {{-- <h3>🎯 Aktivitas Interaktif</h3> --}}
    <img style="width: 170px;" src="{{ asset('storage/img/marker5.png') }}">
    <p align="center">Kamu punya daftar buku di rak perpustakaan: <em>[Biologi, Fisika, Geografi, Kimia, Matematika]</em>.<br>
    Kamu ingin mencari buku <strong>Geografi</strong>. Apa yang paling mungkin kamu lakukan?</p>

    <div id="quizOptions" style="display: flex; flex-direction: column; align-items: center; gap: 12px; margin-top: 20px;">
        <button class="option-button" data-value="A">Mulai mencari dari rak paling bawah</button>
        <button class="option-button" data-value="B">Melihat satu per satu dari awal rak sampai menemukan buku Geografi</button>
        <button class="option-button" data-value="C">Memindahkan semua buku ke lantai lalu mencari yang kamu mau</button>
        <button class="option-button" data-value="D">Menebak letak Geografi dan langsung mengambil buku secara acak</button>
    </div>
</div>

<div id="feedback" style="margin-top: 30px; display: none; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
    <strong>Hubungan dengan algoritma pencarian:</strong>
    <p class="text-justify">Jawabanmu mencerminkan prinsip dari <strong>Pencarian Linear</strong>, yaitu mencari elemen dengan memeriksa satu per satu dari awal sampai ketemu.</p>
    <p class="text-justify">Sebelum mempelajari algoritma <i>searching</i>, kamu akan dikenalkan terlebih dahulu pada pendekatan <strong><i>Computational Thinking</i></strong>. Pendekatan ini membantu kita berpikir secara sistematis dan menyelesaikan masalah dengan cara yang bisa diproses oleh komputer. Ada empat langkah utama yang akan kita pelajari: <strong>Dekomposisi</strong>, <strong>Pengenalan Pola</strong>, <strong>Abstraksi</strong>, dan <strong>Algoritma</strong>.</p>
    <p class="text-justify">Setelah memahami keempat langkah tersebut, kamu akan lebih siap untuk memahami bagaimana algoritma <strong><i>searching</i></strong> bekerja dalam menemukan informasi di antara sekumpulan data.</p>
    <p class="text-justify">Yuk, kita pelajari lebih dalam tentang <strong>pendekatan <i>Computational Thinking</i> dan algoritma <i>searching</i>!</strong></p>
</div>

<script>
    const correctAnswer = "B";

    document.querySelectorAll(".option-button").forEach(button => {
        button.addEventListener("click", () => {
            const selected = button.getAttribute("data-value");
            const feedbackDiv = document.getElementById("feedback");

            if (selected === correctAnswer) {
            Swal.fire({
                icon: 'success',
                title: 'Benar',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                feedbackDiv.style.display = "block";
            });
            } else {
            Swal.fire({
                icon: 'error',
                title: 'Kurang Tepat!',
                text: 'Coba pikirkan kembali: cara paling sederhana adalah melihat dari awal rak.',
                confirmButtonText: 'Coba Lagi'
            });
            }
        });
    });
</script>
