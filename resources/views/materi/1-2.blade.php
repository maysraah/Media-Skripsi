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
    <p class="text-justify">Bayangkan kamu diminta untuk mencari buku berjudul <strong>"Rahasia Sains Alam"</strong> di perpustakaan sekolah yang sangat besar. Ada ratusan hingga ribuan buku di sana. Bagaimana kamu bisa menemukannya dengan cepat dan efisien? Mari kita selesaikan dengan <i>Computational Thinking</i> (CT).</p>

    <!-- Babak 1: Dekomposisi -->
    <div class="card mb-4">
      <div class="card-header bg-primary text-white">Babak 1 – Dekomposisi</div>
      <div class="card-body">
        <p>Kamu diberi tugas untuk mencari sebuah buku berjudul <b>Rahasia Sains Alam</b>. Namun sebelum mencarinya, kamu harus memecah masalah pencarian ini menjadi bagian-bagian kecil terlebih dahulu.</p>
        <p><strong>Instruksi Pengerjaan:</strong> Seret dan kelompokkan komponen-komponen kegiatan berikut ini ke dalam submasalah yang relevan!</p>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="border p-3 bg-white rounded">
                    <h5>🧩 Komponen Aktivitas</h5>
                    <div class="d-flex flex-column gap-2" id="card-container">
                        <!-- Cards akan dimuat lewat JavaScript -->
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="dropzone" data-category="lokasi">
                        <strong>📍 Menentukan Lokasi Awal</strong>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dropzone" data-category="kategori">
                        <strong>📚 Menentukan Kategori Buku</strong>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dropzone" data-category="telusur">
                        <strong>🔍 Menelusuri Buku</strong>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dropzone" data-category="informasi">
                        <strong>📄 Identifikasi Informasi Buku</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button class="btn btn-success" onclick="cekJawaban()">Cek Jawaban</button>
            <button class="btn btn-danger" onclick="resetJawaban()">Reset</button>
        </div>
      </div>
    </div>
</div>
<div id="resultDecomposition" class="text-justify" style="margin-top: 30px; display: none; text-align: left; background: #f4f8ff; padding: 15px; border-left: 5px solid #011B78;">
    <h5>💡 Kesimpulan Aktivitas Dekomposisi</h5>
    <p class="text-justify">Dalam upaya mencari buku berjudul "Rahasia Sains Alam", kita telah memecah proses pencarian menjadi empat submasalah utama:</p>
    <ul>
        <li><b>Menentukan Lokasi Awal</b><br>
            <p class="text-justify">🔍 Langkah awal adalah memahami lingkungan sekitar, seperti melihat denah perpustakaan dan mengidentifikasi pintu masuk terdekat. Hal ini penting untuk memulai pencarian dengan arah yang tepat.</p>
        </li>
        <li><b>Menentukan Kategori Buku</b><br>
            <p class="text-justify">📚 Kita perlu mengetahui jenis buku yang dicari, yaitu buku sains, serta mengelompokkannya ke dalam subjek atau klasifikasi yang relevan, agar pencarian bisa difokuskan pada area rak tertentu.</p>
        </li>
        <li><b>Menelusuri Buku</b><br>
            <p class="text-justify">🧭 Setelah mengetahui kategori, langkah selanjutnya adalah menelusuri rak buku yang sesuai dan menyusuri bagian demi bagian hingga menemukan judul buku yang dituju.</p>
        </li>
        <li><b>Identifikasi Informasi Buku</b><br>
            <p class="text-justify">📖 Ketika buku ditemukan, kita perlu memastikan dengan membaca judul dan identitas buku, seperti nama penulis, agar tidak salah mengambil buku.</p>
        </li>
    </ul>
</div><br>

{{-- Pengenalan Pola --}}
<div id="pengenalan-pola" style="display:none;">
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
              <p class="text-justify">Pada aktivitas ini, bayangkan kamu sedang berada di rak kategori <b>Sains,</b> yang terbagi menjadi beberapa rak berdasarkan huruf depan judul buku.</p>
              <p>Berikut kriteria pemetaan lokasi buku berdasarkan huruf depan judul buku:</p>
              <ul>
                  <li>Jika huruf depan judul buku adalah abjad <strong>A - H</strong> buku berada di <strong>Rak Sains Bagian Kanan</strong></li>
                  <li>Jika huruf depan judul buku adalah abjad <strong>I - P</strong> buku berada di <strong>Rak Sains Bagian Tengah</strong></li>
                  <li>Jika huruf depan judul buku adalah abjad <strong>Q - Z</strong> buku berada di <strong>Rak Sains Bagian Kiri</strong></li>
              </ul>
              <p class="text-justify">Setelah menjelajahi rak bagian Sains, kamu mencatat lokasi beberapa buku berikut:</p>
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                        <th>Judul Buku</th>
                        <th>Huruf Awal</th>
                        <th>Lokasi Rak</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                          <td>Atom dan Energi</td>
                          <td>A</td>
                          <td>Rak Sains Bagian Kanan</td>
                        </tr>
                        <tr>
                          <td>Biologi Itu Seru</td>
                          <td>B</td>
                          <td>Rak Sains Bagian Kanan</td>
                        </tr>
                        <tr>
                          <td>Fisika di Sekitar Kita</td>
                          <td>F</td>
                          <td>Rak Sains Bagian Kanan</td>
                        </tr>
                        <tr>
                          <td>Kimia dalam Kehidupan</td>
                          <td>K</td>
                          <td>Rak Sains Bagian Tengah</td>
                        </tr>
                        <tr>
                          <td>Matematika dan Logika</td>
                          <td>M</td>
                          <td>Rak Sains Bagian Tengah</td>
                        </tr>
                        <tr>
                          <td>Planet dan Tata Surya</td>
                          <td>P</td>
                          <td>Rak Sains Bagian Tengah</td>
                        </tr>
                        <tr>
                          <td>Sistem Tubuh Manusia</td>
                          <td>S</td>
                          <td>Rak Sains Bagian Kiri</td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <p>Perhatikan pola lokasi buku sebelumnya dan prediksi posisi <strong>"Rahasia Sains Alam".</strong></p>
              <p>Pilih jawaban yang paling tepat:</p>
              <select id="patternSelect" class="form-select">
              <option value="">-- Pilih Lokasi --</option>
              <option value="rak bagian kanan">Rak Sains Bagian Kanan</option>
              <option value="rak bagian tengah">Rak Sains Bagian Tengah</option>
              <option value="rak bagian kiri">Rak Sains Bagian Kiri</option>
              </select>
              <button class="btn btn-success mt-2" onclick="checkPattern()">Cek Jawaban</button>
          </div>
      </div>
  </div>
</div>

{{-- Abstraksi --}}
<div id="abstraksi" style="display:none;">
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
                  <p><strong>Instruksi:</strong> Pilih hanya informasi yang relevan untuk mencari buku <strong>“Rahasia Sains Alam”</strong>.</p>
                  <p style="color: red"><b>Catatan: Pilihlah lebih dari satu jawaban!</b></p> 
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="kategori" id="ab1">
                      <label class="form-check-label" for="ab1">Kategori Buku</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="warna" id="ab2">
                      <label class="form-check-label" for="ab2">Warna Sampul</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="kode katalog" id="ab3">
                      <label class="form-check-label" for="ab3">Kode Katalog</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="jumlah halaman" id="ab4">
                      <label class="form-check-label" for="ab4">Jumlah Halaman</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="judul" id="ab5">
                      <label class="form-check-label" for="ab5">Judul Buku</label>
                  </div>
                  <button class="btn btn-success mt-2" onclick="checkAbstraction()">Cek Jawaban</button>
              </div>
      </div>
  </div>
</div>

{{-- Algoritma --}}
<div id="algoritma" style="display:none;">
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
              <p>Setelah menyelesaikan aktivitas di tahap Dekomposisi, Pengenalan Pola, dan Abstraksi, kamu harus menyusun langkah-langkah pencarian secara runtut dan jelas untuk menemukan buku <b>"Rahasia Sains Alam"</b>.</p>
              <p>Susun langkah-langkah mencari buku dengan benar! Tarik setiap baris langkah ke kotak isian langkah yang sudah disediakan.</p>
              <div class="row">
                  <div class="col-md-6">
                      <ul class="list-group mb-2" id="algo-choices">
                          <li class="list-group-item draggable" draggable="true">Temukan bagian <b>Sains</b> di peta perpustakaan</li>
                          <li class="list-group-item draggable" draggable="true">Periksa setiap judul sampai menemukan buku</li>
                          <li class="list-group-item draggable" draggable="true">Cari rak bertanda <b>“SAINS”</b></li>
                          <li class="list-group-item draggable" draggable="true">Telusuri bagian abjad R di rak</li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <p>Susun langkah disini:</p>
                      <div class="dropzone list-group" id="algo-dropzone"></div>
                      <button class="btn btn-danger mt-2" onclick="resetAlgorithm()">Reset</button>
                      <button class="btn btn-success mt-2" onclick="checkAlgorithm()">Cek Jawaban</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script src="{{ asset('js/materi/1-2.js') }}"></script>
