<head>
    <link rel="stylesheet" href="{{ asset('css/materi/1-2.css') }}">

</head>

<h3 class="fw-bold text-center" style="color:#011B78">KONSEP PENDEKATAN PEMBELAJARAN <i>COMPUTATIONAL THINKING</i></h3><br>
<p>
    <img style="width: 320px;" src="{{ asset('storage/img/marker4.png') }}">
</p>

<p style="text-indent: 2em;">
    CT memiliki empat fondasi yang menjadi landasan pemecahan persoalan yaitu <b>dekomposisi <i>(decomposition)</i>, pengenalan pola <i>(pattern recognition)</i>, abstraksi <i>(abstraction)</i> dan algoritma <i>(algorithm)</i></b>.
</p>

{{-- Dekomposisi --}}
<h5 style="color:#011B78">(1) Dekomposisi</h5>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Dekomposisi merupakan proses pemecahan persoalan menjadi beberapa sub-persoalan yang lebih kecil agar menjadi <b>"langkah-langkah yang dapat dikelola".</b> Dekomposisi merupakan bagian penting dari <i>computational thinking</i> karena membantu memahami dan menyelesaikan masalah yang rumit.
</p>
<p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
    Saat menganalisis suatu masalah secara keseluruhan, penting untuk mengetahui bagian-bagian kecil yang dapat dikelola serta bagaimana hubungan antarbagian tersebut dengan keseluruhan masalah.
</p>
<p class="text-justify" style="padding-left: 20px;">
    Untuk dapat lebih memahami bagaimana langkah dekomposisi, kerjakanlah aktivitas berikut!
</p>

<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <h2 class="mb-4 text-center">Aktivitas Interaktif: Pencarian Buku di Perpustakaan</h2>
    <h5>🧠 Deskripsi Umum Kasus:</h5>
    <p class="text-justify">Kamu diminta untuk mencari buku berjudul <strong>"Kimia Dasar" karya Hardjono Sastromidjojo</strong> di perpustakaan yang besar. Bagaimana kamu bisa menemukannya dengan cepat dan efisien? Mari kita selesaikan dengan <i>Computational Thinking</i> (CT).</p>

    <!-- Babak 1: Dekomposisi -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Babak 1 – Dekomposisi</div>
        <div class="card-body">
            <p>Kamu diberi tugas untuk mencari sebuah buku berjudul <b>"Kimia Dasar" karya Hardjono Sastromidjojo</b></p>
            <!-- Tombol Info -->
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalDDC">
            ℹ️ Info Kode DDC
            </button>

            <!-- Modal Bootstrap -->
            <div class="modal fade" id="modalDDC" tabindex="-1" aria-labelledby="modalDDCLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDDCLabel">📘 Info Kode DDC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-start">
                    <ul style="padding-left: 20px;">
                    <li><strong>000</strong> – Karya Umum</li>
                    <li><strong>100</strong> – Filsafat</li>
                    <li><strong>200</strong> – Agama</li>
                    <li><strong>300</strong> – Ilmu Sosial</li>
                    <li><strong>400</strong> – Bahasa</li>
                    <li><strong>500</strong> – Ilmu Pengetahuan Alam
                        <ul>
                        <li><strong>510</strong> – Matematika</li>
                        <li><strong>540</strong> – Kimia</li>
                        <li><strong>550</strong> – Ilmu Bumi</li>
                        </ul>
                    </li>
                    <li><strong>600</strong> – Teknologi</li>
                    <li><strong>700</strong> – Seni dan Rekreasi</li>
                    <li><strong>800</strong> – Sastra</li>
                    <li><strong>900</strong> – Sejarah dan Geografi</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                </div>
            </div>
            </div>

            <p style="color:rgb(102, 101, 101)">*Klik tombol diatas untuk melihat informasi kode DDC</p>
            <p><b>Instruksi Pengerjaan:</b> Seret dan kelompokkan komponen-komponen kegiatan berikut ini ke dalam submasalah yang relevan!</p>
            <div class="row g-4 mt-3">
                <div class="col-md-6">
                    <div class="border p-3 bg-white rounded">
                        <h5>Komponen Aktivitas</h5>
                        <div id="activity-list">
                            <div class="drag-dekom" draggable="true" data-id="A">Menentukan bahwa buku berkaitan dengan topik Kimia</div>
                            <div class="drag-dekom" draggable="true" data-id="B">Menemukan kode DDC untuk Kimia (contoh: 540)</div>
                            <div class="drag-dekom" draggable="true" data-id="C">Mencari rak perpustakaan yang sesuai dengan kode DDC 540</div>
                            <div class="drag-dekom" draggable="true" data-id="D">Menelusuri buku berdasarkan urutan nama pengarang atau judul</div>
                            <div class="drag-dekom" draggable="true" data-id="E">Menggunakan peta perpustakaan untuk mengetahui letak rak 500</div>
                            <div class="drag-dekom" draggable="true" data-id="F">Mengecek nama pengarang pada punggung buku untuk memastikan kecocokan judul</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="dekomposisi-area" class="border p-3 bg-white rounded">
                        <h5>Susun Langkah:</h5>
                        <div class="drop-dekom mb-3 p-2 border" data-group="Topik"><h5>1. Menentukan Topik Buku</h5></div>
                        <div class="drop-dekom mb-3 p-2 border" data-group="DDC"><h5>2. Menentukan Kode Klasifikasi (DDC)</h5></div>
                        <div class="drop-dekom mb-3 p-2 border" data-group="Lokasi"><h5>3. Menentukan Lokasi Rak Buku</h5></div>
                        <div class="drop-dekom mb-3 p-2 border" data-group="Rak"><h5>4. Menelusuri Rak untuk Menemukan Buku</h5></div>
                    </div><br>
                    <button class="btn btn-danger" onclick="resetJawaban()">Reset</button>
                    <button class="btn btn-success" onclick="cekJawaban()">Cek Jawaban</button>
                    {{-- <button class="btn btn-danger" onclick="resetJawaban()">Reset</button> --}}
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- Pengenalan Pola --}}

  <h5 style="color:#011B78">(2) Pengenalan Pola</h5><br>

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

  <p class="text-justify" style="padding-left: 20px;">
      Untuk dapat lebih memahami bagaimana langkah pengenalan pola, kerjakanlah aktivitas berikut!
  </p>

  <div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
      <div class="card mb-4">
          <div class="card-header bg-primary text-white">Babak 2 – Pengenalan Pola</div>
          <div class="card-body">
              <p class="text-justify">Dari aktivitas Dekomposisi sebelumnya, kamu sudah berhasil membagi proses pencarian menjadi langkah-langkah yang lebih mudah dikelola.</p>
              <p class="text-justify">Pada aktivitas ini, amati judul-judul buku di bawah ini, lalu perhatikan huruf awal dan lokasi raknya. Berdasarkan pola tersebut, tentukan lokasi buku <b>"Kimia Dasar" karya Hardjono Sastrohamidjojo!</b></p>
              <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Lokasi Rak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Stereokimia</td><td>Rak 540 Bagian Kiri</td></tr>
                    <tr><td>Ilmu Kealaman Dasar</td><td>Rak 500 Bagian Kanan</td></tr>
                    <tr><td>Zoology</td><td>Rak 590 Bagian Kanan</td></tr>
                    <tr><td>Kimia Dasar</td><td><strong>???</strong></td></tr>
                </tbody>
                </table>
                <label for="polaJawaban" class="form-label">Prediksi Lokasi Rak:</label>
                <select id="polaJawaban" class="form-select mb-3">
                    <option value="">-- Pilih Lokasi --</option>
                    <option value="540">Rak 540 Bagian Kiri</option>
                    <option value="500">Rak 500 Bagian Kanan</option>
                    <option value="590">Rak 590 Bagian Kanan</option>
                </select>
                <button class="btn btn-success mt-2" onclick="checkPattern()">Cek Jawaban</button>
          </div>
      </div>
  </div>

{{-- Abstraksi --}}
  <h5 style="color:#011B78">(3) Abstraksi</h5>

  <p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
      Abstraksi adalah menyederhanakan masalah dengan menghilangkan detail yang tidak relevan dan hanya berfokus pada aspek yang penting. Proses ini menggunakan logika induktif, yaitu menarik kesimpulan umum berdasarkan pengamatan dan pengalaman.
      Karena kesimpulan induktif tidak selalu pasti, tingkat kepastiannya bergantung pada jumlah dan kualitas pengamatan yang dilakukan.
  </p>
  <p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
      Bagian utama dari abstraksi adalah menghapus informasi yang tidak penting agar dapat lebih fokus pada aspek yang benar-benar relevan. Hal ini memungkinkan penyederhanaan masalah kompleks dan membantu menyoroti aspek yang paling penting.
  </p>
  <p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
      Memahami abstraksi penting karena membantu kita menyederhanakan masalah kompleks menjadi bagian yang lebih sederhana, membuat proses penyelesaian masalah lebih efisien.
      Dalam algoritma pencarian <i>(searching),</i> abstraksi memungkinkan kita mempercepat proses pencarian dengan hanya memfokuskan pada data atau area yang relevan. Ini menjadi dasar bagi siswa untuk memecahkan masalah dalam skala besar di dunia nyata dan dalam konteks pemrograman.
  </p>
  <p class="text-justify" style="padding-left: 20px;">
      Untuk dapat lebih memahami bagaimana langkah abstraksi, kerjakanlah aktivitas berikut!
  </p>
  <div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
      <div class="card mb-4">
          <div class="card-header bg-primary text-white">Babak 3 – Abstraksi</div>
              <div class="card-body">
                  <p><strong>Instruksi:</strong> Pilih informasi yang benar-benar dibutuhkan untuk menemukan buku <strong>"Kimia Dasar" karya Hardjono Sastrohamidjojo</strong>.</p>
                  <p style="color: red"><b>Catatan: Pilihlah lebih dari satu informasi!</b></p> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Kategori" id="info1">
                    <label class="form-check-label" for="info1">Kategori Buku</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Warna Sampul" id="info2">
                    <label class="form-check-label" for="info2">Warna Sampul</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Kode Katalog" id="info3">
                    <label class="form-check-label" for="info3">Kode Katalog</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Judul Buku" id="info4">
                    <label class="form-check-label" for="info4">Judul Buku</label>
                  </div>
                  <button class="btn btn-success mt-2" onclick="checkAbstraction()">Cek Jawaban</button>
              </div>
      </div>
  </div>

{{-- Algoritma --}}

  <h5 style="color:#011B78">(4) Algoritma</h5>

  <p class="text-justify" style="text-indent: 2em; padding-left: 20px;">
      Algoritma adalah tahapan menyusun langkah-langkah logis dan berurutan untuk menyelesaikan masalah berdasarkan hasil dekomposisi, pengenalan pola, dan abstraksi sebelumnya. 
      Algoritma harus jelas, efisien, dan dapat diikuti secara sistematis oleh manusia atau komputer untuk memperoleh solusi yang diinginkan.
  </p>

  <p class="text-justify" style="padding-left: 20px;">
      Untuk dapat lebih memahami bagaimana langkah abstraksi, kerjakanlah aktivitas berikut!
  </p>

  <div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
      <div class="card mb-4">
          <div class="card-header bg-primary text-white">Babak 4 – Algoritma</div>
          <div class="card-body">
            <p>Setelah menyelesaikan aktivitas di tahap Dekomposisi, Pengenalan Pola, dan Abstraksi, kamu harus menyusun langkah-langkah pencarian secara runtut dan jelas untuk menemukan buku <b>"Kimia Dasar" karya Hardjono Sastromidjojo</b>.</p>
            <p>Susun langkah berikut untuk menemukan buku:</p>
            <div class="row">
                <div class="col-md-6" id="algo-source">
                    <div id="step1" class="drag-algo" draggable="true" ondragstart="dragAlgo(event)">Telusuri judul sampai menemukan buku "Kimia Dasar" karya Hardjono Sastrohamidjojo</div>
                    <div id="step2" class="drag-algo" draggable="true" ondragstart="dragAlgo(event)">Temukan bagian SAINS di peta perpustakaan</div>
                    <div id="step3" class="drag-algo" draggable="true" ondragstart="dragAlgo(event)">Cari rak bertanda "540"</div>
                </div>
                <div class="col-md-6">
                    <p><b>Instruksi Pengerjaan:</b> Seret dan susun langkah dengan terurut pada kotak isian yang telah disediakan!</p>
                    <div class="drop-algo list-group" id="algo-dropzone" ondrop="dropAlgo(event)" ondragover="allowDropAlgo(event)"></div>
                    <button class="btn btn-danger mt-2" onclick="resetAlgorithm()">Reset</button>
                    <button class="btn btn-success mt-2" onclick="checkAlgorithm()">Cek Jawaban</button>
                </div>
            </div>
        </div>
      </div>
  </div>

<script src="{{ asset('js/materi/1-2.js') }}"></script>
