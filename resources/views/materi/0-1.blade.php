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

<p><strong>Bayangkan:</strong> Kamu sedang berada di <strong>perpustakaan sekolah</strong> dan ingin mencari buku favoritmu di antara ratusan buku di rak. Apa yang biasanya kamu lakukan?</p>
<div style="display: flex; justify-content: center; align-items: center;">
    <img class="centered" style="width: 350px;" src="{{ asset('storage/img/perpustakaan.jpg') }}" alt="Rak Buku di Perpustakaan">
</div><br>
<ul>
    <li>📚 Kamu mulai dari rak paling awal dan memeriksa satu per satu sampai menemukan bukunya.</li>
    <li>📚 Kamu langsung menuju bagian rak yang sesuai dengan kategori atau label buku.</li>
    <li>📚 Kamu bertanya kepada petugas perpustakaan untuk membantu mencarikan buku tersebut.</li>
</ul>

<p>Cara-cara tersebut sangat mirip dengan bagaimana komputer melakukan pencarian data di dalam sistem. Dalam dunia pemrograman, proses ini disebut <strong>algoritma searching</strong>. Ada banyak cara untuk mencari data—beberapa langsung tepat sasaran, yang lain harus memeriksa satu per satu. Yuk kita pelajari bersama!</p>

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
    <p>Jawabanmu mencerminkan prinsip dari <strong>Pencarian Linear</strong>, yaitu mencari elemen dengan memeriksa satu per satu dari awal sampai ketemu.</p>
    <p>Yuk, kita pelajari lebih dalam tentang <strong>algoritma <i>searching</i></strong>! Apa saja jenisnya? Mana yang lebih cepat? Dan kapan kita menggunakannya?</p>
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
