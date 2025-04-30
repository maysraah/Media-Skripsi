<h3 class="fw-bold text-center" style="color:#011B78">KONSEP PENDEKATAN PEMBELAJARAN <i>COMPUTATIONAL THINKING</i></h3><br>
<p>
    <img style="width: 320px;" src="{{ asset('storage/img/marker4.png') }}">
</p>

<p style="text-indent: 2em;">
    CT memiliki empat fondasi yang menjadi landasan pemecahan persoalan yaitu <b>dekomposisi <i>(decomposition)</i>, pengenalan pola <i>(pattern recognition)</i>, abstraksi <i>(abstraction)</i> dan algoritma <i>(algorithm)</i></b>.
</p>

<h5 style="color:#011B78">(3) Abstraksi</h5>

<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Abstraksi adalah menyederhanakan masalah dengan menghilangkan detail yang tidak relevan dan hanya berfokus pada aspek yang penting. Proses ini menggunakan logika induktif, yaitu menarik kesimpulan umum berdasarkan pengamatan dan pengalaman.
    Karena kesimpulan induktif tidak selalu pasti, tingkat kepastiannya bergantung pada jumlah dan kualitas pengamatan yang dilakukan.
</p>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Bagian utama dari abstraksi adalah menghapus informasi yang tidak penting agar dapat lebih fokus pada aspek yang benar-benar relevan. Hal ini memungkinkan penyederhanaan masalah kompleks dan membantu menyoroti aspek yang paling penting.
</p><br>

<div>
    <img style="width: 170px;" src="{{ asset('storage/img/marker5.png') }}">
</div>
<p class="text-justify"><b>Pilihlah salah satu dari 3 pilihan jawaban pada masing-masing soal yang menurut kamu jawaban paling tepat. Jawablah pertanyaan secara mandiri dan teliti!</b></p>
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <form id="quizForm">
        <div class="mb-4" class="text-justify">
            <ol>
        <!-- Question 1 -->
                <li>Kamu memiliki daftar 100 buku dengan judul yang panjang. Bagaimana kamu bisa menyederhanakan daftar ini agar pencarian lebih cepat?</li>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question1" id="q1a1" value="A">
                    <label class="form-check-label" for="q1a1">Mengelompokkan buku berdasarkan kategori (misalnya, genre).</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question1" id="q1a2" value="B">
                    <label class="form-check-label" for="q1a2">Menggunakan huruf depan dari setiap kata dalam judul.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question1" id="q1a3" value="C">
                    <label class="form-check-label" for="q1a3">Menyimpan daftar dalam urutan acak.</label>
                </div><br>

        <!-- Question 2 -->
                <li>Kamu diminta mencari barang dalam katalog online dengan ribuan produk. Bagaimana kamu bisa menyederhanakan data pencarian?</li>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question2" id="q2a1" value="A">
                    <label class="form-check-label" for="q2a1">Membagi produk berdasarkan kategori besar (seperti elektronik, pakaian, buku, dan lain-lain).</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question2" id="q2a2" value="B">
                    <label class="form-check-label" for="q2a2">Mengabaikan detail yang tidak penting, seperti warna atau ukuran.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question2" id="q2a3" value="C">
                    <label class="form-check-label" for="q2a3">Mengurutkan produk berdasarkan harga atau popularitas.</label>
                </div><br>

        <!-- Question 3 -->
                <li>Kamu diminta menemukan artikel tertentu dalam kumpulan lebih dari 500 artikel jurnal online. Bagaimana cara terbaik untuk menyederhanakan proses pencarian?</li>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question3" id="q3a1" value="A">
                    <label class="form-check-label" for="q3a1">Mengelompokkan artikel berdasarkan bidang studi atau topik yang relevan.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question3" id="q3a2" value="B">
                    <label class="form-check-label" for="q3a2">Mencari artikel berdasarkan penulis atau tanggal publikasi.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question3" id="q3a3" value="C">
                    <label class="form-check-label" for="q3a3">Menelusuri artikel satu per satu tanpa filter atau kategori.</label>
                </div><br>
        
        <!-- Question 4 -->
                <li>Kamu memiliki daftar 200 film di aplikasi streaming, dan kamu perlu mencari film berjudul <i>"Perjalanan di Negeri Ajaib".</i> Bagaimana kamu bisa menyederhanakan pencarian?</li>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question4" id="q4a1" value="A">
                    <label class="form-check-label" for="q4a1">Mengurutkan film berdasarkan tahun rilis.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question4" id="q4a2" value="B">
                    <label class="form-check-label" for="q4a2">Mengelompokkan film berdasarkan genre, seperti Drama, Petualangan, atau Fantasi.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question4" id="q4a3" value="C">
                    <label class="form-check-label" for="q4a3">Mencari di seluruh daftar secara acak hingga menemukan judul yang dicari.</label>
                </div><br>

        <!-- Question 5 -->
                <li>Kamu sedang mencari resep masakan tertentu dalam aplikasi dengan ribuan resep. Bagaimana kamu bisa menyederhanakan pencarian untuk menemukan resep lebih cepat?</li>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question5" id="q5a1" value="A">
                    <label class="form-check-label" for="q5a1">Mencari resep hanya berdasarkan bahan utama yang ada di dapurmu.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question5" id="q5a2" value="B">
                    <label class="form-check-label" for="q5a2">Menelusuri semua resep satu per satu tanpa kategori atau filter.</label>
                </div>
                <div class="form-check" style="gap: 5px;">
                    <input class="form-check-input" type="checkbox" name="question5" id="q5a3" value="C">
                    <label class="form-check-label" for="q5a3">Mengelompokkan resep berdasarkan kategori masakan, seperti Makanan Utama, Makanan Penutup, atau Makanan Pembuka.</label>
                </div><br>
            </ol>
        </div>
        <button type="button" class="btn btn-success" onclick="checkAnswers()">Cek Jawaban</button>
    </form>
</div>

<div id="feedback" style="display: none;">
    <p class="text-justify" style="text-indent: 2em;">
        Melalui kuis ini, siswa memahami bahwa pencarian yang efisien melibatkan penyederhanaan masalah menjadi komponen-komponen yang lebih mudah dikelola.
        Strategi ini memungkinkan pencarian yang lebih cepat, terarah, dan terstruktur, membantu mereka memecahkan masalah lebih efektif di kehidupan sehari-hari.
    </p>

    <p class="text-justify" style="text-indent: 2em;">
        Memahami abstraksi penting karena membantu kita menyederhanakan masalah kompleks menjadi bagian yang lebih sederhana, membuat proses penyelesaian masalah lebih efisien.
        Dalam algoritma pencarian <i>(searching),</i> abstraksi memungkinkan kita mempercepat proses pencarian dengan hanya memfokuskan pada data atau area yang relevan. Ini menjadi dasar bagi siswa untuk memecahkan masalah dalam skala besar di dunia nyata dan dalam konteks pemrograman.
    </p>
</div>

<script src="{{ asset('js/materi/1-4.js') }}"></script>