<head>
    <style>
        #quizOptions {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 20px;
        }

        .option-button {
            padding: 10px 20px;
            text-align: left;
            width: max-content;
            max-width: 100%;
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

<p class="text-justify"><strong>Bayangkan:</strong> Kamu sedang berada di <strong>sebuah perpustakaan</strong> seperti pada Gambar 1. Di sana terdapat ratusan hingga ribuan buku yang tertata rapi di rak sesuai kategori tertentu. Buku-buku tersebut tidak disusun secara acak, melainkan berdasarkan <strong>kode klasifikasi DDC (<i>Dewey Decimal Classification</i>)</strong>, sebuah sistem internasional yang memudahkan pencarian buku berdasarkan subjek.</p>
<figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <img style="width: 350px;" src="{{ asset('storage/img/perpustakaan.jpg') }}" alt="Rak Buku di Perpustakaan">
    <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 1 Perpustakaan</i></figcaption>
</figure><br>
<p>Kode DDC pada rak perpustakaan di atas dapat dilihat pada Gambar 2.</p>
<figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <img style="width: 350px;" src="{{ asset('storage/img/kode-warna-buku.jpg') }}" alt="Kode Warna Punggung Buku DDC">
    <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 2 Kode DDC</i></figcaption>
</figure><br>

<p>Lalu, untuk memudahkan pencarian buku, setiap rak pada perpustakaan diberi label penanda yaitu kode DDC yang sudah ditentukan seperti pada Gambar 3.</p>
<figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <img style="width: 350px;" src="{{ asset('storage/img/rak-kode-ddc.jpg') }}" alt="Kode Warna Punggung Buku DDC">
    <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 3 Rak Kode 658-657</i></figcaption>
</figure><br>

<p>Setiap buku memiliki label angka pada punggungnya. Angka ini menunjukkan kategori isi buku tersebut. Misalnya:</p>
<ul>
    <li><strong>000 – 099</strong>: Karya Umum (Hijau) seperti yang terlihat pada Gambar 4.<br><br>
        <figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <img style="width: 350px;" src="{{ asset('storage/img/rak-hijau.jpg') }}" alt="Rak Buku Kode Hijau">
            <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 4 Rak Kode Warna Hijau</i></figcaption>
        </figure>
    </li>
    <li><strong>300 – 399</strong>: Ilmu-Ilmu Sosial : Ekonomi, Politik, Hukum, Pendidikan dan lain-lain (Biru Muda) seperti yang terlihat pada Gambar 5.<br><br>
        <figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <img style="width: 350px;" src="{{ asset('storage/img/rak-biru-muda.jpg') }}" alt="Rak Buku Kode Biru Muda">
            <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 5 Rak Kode Warna Biru Muda</i></figcaption>
        </figure>
    </li>
    <li><strong>500 – 599</strong>: Ilmu Murni : Matematika, Biologi, Kimia, Fisika (Biru Tua) seperti yang terlihat pada Gambar 6.<br><br>
        <figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <img style="width: 350px;" src="{{ asset('storage/img/rak-biru-tua.jpg') }}" alt="Rak Buku Kode Biru Tua">
            <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 6 Rak Kode Warna Biru Tua</i></figcaption>
        </figure>
    </li>
    <li><strong>600 – 699</strong>: Teknologi (Ilmu Terapan) : Kedokteran, Teknik, Bisnis Akuntasi, Manajemen dan lain-lain (Coklat) seperti yang terlihat pada Gambar 7.<br><br>
        <figure style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <img style="width: 350px;" src="{{ asset('storage/img/rak-coklat.jpg') }}" alt="Rak Buku Kode Coklat">
            <figcaption style="color: rgb(116, 115, 121); margin-top: 8px;"><i>Gambar 7 Rak Kode Warna Coklat</i></figcaption>
        </figure>
    </li>
</ul>

<p class="text-justify">Misalnya kamu ditugaskan untuk mencari buku yang berjudul <strong>“Ilmu Alamiah Dasar”</strong> yang termasuk dalam bidang Sains di perpustakaan pada Gambar 1. Berdasarkan sistem DDC, kamu perlu mencari rak dengan kode <strong>500 – 599</strong> yang buku-bukunya bertanda warna <span style="color:rgb(1, 16, 155);"><strong>biru tua</strong></span>.</p>

<p><strong>Apa langkah-langkah yang bisa kamu lakukan?</strong></p>
<ul>
    <li>🔍 Mencari kode <strong>500 – 599</strong> di rak buku.</li>
    <li>📘 Menelusuri buku-buku dalam kategori tersebut hingga menemukan judul “Ilmu Alamiah Dasar”.</li>
    <li>🎯 Menggunakan petunjuk warna (<strong>biru tua</strong>) sebagai bantuan visual mempercepat pencarian.</li>
</ul>

<p class="text-justify">Proses ini mencerminkan bagaimana komputer melakukan <strong>pencarian data</strong> dalam kumpulan informasi yang besar. Oleh karena itu, dalam informatika, konsep ini dikaitkan dengan <strong>algoritma <i>searching</i></strong>, yaitu langkah sistematis untuk menemukan sesuatu dengan efisien.</p>

<div style="margin-top: 30px; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
    <p class="text-justify">💡 Dalam dunia pemrograman, pencarian data bisa menggunakan berbagai pendekatan seperti pencarian linear, pencarian biner, atau pencarian dengan sentinel. Untuk memudahkan proses ini, kamu bisa menerapkan pendekatan <strong><i>Computational Thinking</i> (Berpikir Komputasional)</strong>:</p>
    <ul>
      <li><strong>Dekomposisi:</strong> Memecah proses pencarian menjadi langkah-langkah kecil.</li>
      <li><strong>Pengenalan Pola:</strong> Mengenali warna/kode sebagai indikator kategori.</li>
      <li><strong>Abstraksi:</strong> Mengabaikan rak yang tidak relevan.</li>
      <li><strong>Algoritma:</strong> Menyusun langkah pencarian yang efisien.</li>
    </ul>
</div>
<br>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div class="card-header bg-primary text-white">
        <strong>🔍 Aktivitas Pencarian Buku</strong>
    </div><br>
    <p class="justify">Kamu sedang berada di perpustakaan dan ingin mencari buku berjudul <strong>"Trik & Teknik menggunakan Microsoft Excel"</strong>. 
        Berdasarkan sistem klasifikasi DDC, kamu tahu bahwa buku ini berada di kategori <strong>Karya Umum</strong> dengan kode <strong>000–099</strong> yang ditandai dengan <span class="text-success fw-bold">warna hijau</span>.<br>
        Langkah mana yang paling logis dan efisien untuk kamu lakukan agar menemukan buku tersebut?
    </p>

    <div id="quizOptions">
        <button class="option-button" data-value="A">Cari rak dengan kode 000–099 berlabel hijau, lalu cek buku satu per satu hingga menemukan judul yang dicari</button>
        <button class="option-button" data-value="B">Telusuri semua rak di perpustakaan dari ujung ke ujung sampai menemukan buku Excel</button>
        <button class="option-button" data-value="C">Tanyakan ke teman yang pernah ke perpustakaan apakah tahu letak buku Excel</button>
        <button class="option-button" data-value="D">Ambil beberapa buku secara acak dari rak-rak yang berbeda dan periksa satu per satu</button>
    </div>
</div>

<div id="feedback" style="margin-top: 30px; display: none; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
    <strong>Hubungan dengan algoritma pencarian:</strong>
    <p class="text-justify">Jawabanmu mencerminkan prinsip dari <strong>Pencarian Linear</strong>, yaitu mencari buku dengan memeriksa satu per satu pada rak kode 000-099.</p>
    <p class="text-justify">Sebelum mempelajari algoritma <i>searching</i>, kamu akan dikenalkan terlebih dahulu pada pendekatan <strong><i>Computational Thinking</i></strong>. Pendekatan ini membantu kita berpikir secara sistematis dan menyelesaikan masalah dengan cara yang bisa diproses oleh komputer. Ada empat langkah utama yang akan kita pelajari: <strong>Dekomposisi</strong>, <strong>Pengenalan Pola</strong>, <strong>Abstraksi</strong>, dan <strong>Algoritma</strong>.</p>
    <p class="text-justify">Setelah memahami keempat langkah tersebut, kamu akan lebih siap untuk memahami bagaimana algoritma <strong><i>searching</i></strong> bekerja dalam menemukan informasi di antara sekumpulan data.</p>
    <p class="text-justify">Yuk, kita pelajari lebih dalam tentang <strong>pendekatan <i>Computational Thinking</i> dan algoritma <i>searching</i>!</strong></p>
</div>

<script>
    const correctAnswer = "A";

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
                text: 'Coba pikirkan kembali: langkah paling efisien adalah mencari rak sesuai kode buku.',
                confirmButtonText: 'Coba Lagi'
            });
            }
        });
    });
</script>
