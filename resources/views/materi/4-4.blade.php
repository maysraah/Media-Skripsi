<head>
    <link rel="stylesheet" href="{{ asset('css/materi/4-4.css') }}">
</head>

<h3 class="fw-bold text-center" style="color:#011B78">
    MEMAHAMI ALGORITMA PENCARIAN DENGAN PENDEKATAN <i>COMPUTATIONAL THINKING</i>
</h3>

<div>
    <img style="width: 400px;" src="{{ asset('storage/img/marker20.png') }}">
</div>

<div style="border: 2px solid #011B78; border-radius: 8px; padding: 20px; margin: 20px auto;">
<h5 style="color:#011B78">Tujuan Pembelajaran</h5>
<p class="text-justify">
    Melakukan penerapan langsung dengan media interaktif untuk memperdalam pemahaman algoritma pencarian <i>(searching)</i> dengan pendekatan <i>computational thinking</i>.</i></p>
</div>

{{-- Aktivitas Siswa 5 --}}
<div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
    <div>
        <img style="width: 170px;" src="{{ asset('storage/img/marker22.png') }}">
    </div>
    <p class="text-justify">
        <b>Studi Kasus: Pencarian Data Produk Pasar.</b><br>
        Anda adalah pengelola <i>database digital</i> untuk sebuah pasar. Setiap pedagang memiliki daftar produk yang dijual berikut harga masing-masing. Berikut adalah daftar produk dari salah satu pedagang:
    </p>

    <div style="display: flex; justify-content: center;">
        <table style="border: 1px solid black">
            <tr>
                <th class="col-small">No</th>
                <th class="col-large">Nama Produk</th>
                <th class="col-large">Berat (Kg)</th>
                <th class="col-large">Harga</th>
            </tr>
            <tr>
                <td class="col-small">1</td>
                <td class="col-large">Ampalam</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 15.000</td>
            </tr>
            <tr>
                <td class="col-small">2</td>
                <td class="col-large">Bayam</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 10.000</td>
            </tr>
            <tr>
                <td class="col-small">3</td>
                <td class="col-large">Cabai</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 40.000</td>
            </tr>
            <tr>
                <td class="col-small">4</td>
                <td class="col-large">Durian</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 80.000</td>
            </tr>
            <tr>
                <td class="col-small">5</td>
                <td class="col-large">Kelapa</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 25.000</td>
            </tr>
            <tr>
                <td class="col-small">6</td>
                <td class="col-large">Kentang</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 20.000</td>
            </tr>
            <tr>
                <td class="col-small">7</td>
                <td class="col-large">Mangga</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 15.000</td>
            </tr>
            <tr>
                <td class="col-small">8</td>
                <td class="col-large">Pepaya</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 10.000</td>
            </tr>
            <tr>
                <td class="col-small">9</td>
                <td class="col-large">Sukun</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 10.000</td>
            </tr>
            <tr>
                <td class="col-small">10</td>
                <td class="col-large">Tomat</td>
                <td class="col-large">1</td>
                <td class="col-large">Rp 20.000</td>
            </tr>
        </table>
    </div><br>

    <p class="text-justify">
        Salah satu pelanggan ingin mencari harga untuk produk <b>“Mangga”.</b> Anda diminta menentukan apakah produk tersebut ada dalam daftar, dan jika ada, tunjukkan posisinya dalam daftar.
        Untuk menunjukkan posisi <b>“Mangga”</b> dalam daftar, gunakan pemahaman <b><i>computational thinking</i></b> yang sudah dipelajari sebelumnya untuk menyederhanakan pencarian. Setelah itu, lakukan pencarian dengan 3 algoritma yang sudah dipelajari,
        yaitu <b>Algoritma Pencarian Linear, Pencarian Biner,</b> dan <b>Pencarian Beruntun dengan Sentinel.</b>
    </p>

    <p><b>Langkah Penyelesaian:</b></p>
    {{-- Dekomposisi --}}
    <p class="text-justify">
        <b>(i) Melakukan Dekomposisi pada Daftar Produk</b>
    </p>
    <div style="padding-left: 20px;">
        <p>Memecah masalah menjadi bagian-bagian kecil:</p>
        <ul>
            <li>Input:
                <ul>
                    <li>Diketahui daftar produk beserta harganya /kg.</li>
                    <li>Diketahui produk yang ingin dicari harganya yaitu <b>“Mangga”.</b></li>
                    <li>Membagi daftar produk berdasarkan <b>harga</b> untuk menyingkat pencarian.</li>
                </ul>
            </li>
            <li>Proses:
                <ul>
                    <li>Melakukan pencarian terhadap produk <b>“Mangga”</b> dengan 3 algoritma pencarian yaitu Algoritma Pencarian Linear, Pencarian Biner, dan Pencarian Beruntun dengan Sentinel.</li>
                </ul>
            </li>
            <li>Output:
                <ul>
                    <li>Menemukan harga produk <b>“Mangga”</b> beserta posisinya dalam daftar produk, serta menentukan berapa langkah yang dibutuhkan masing-masing algoritma untuk menemukan produk tersebut.</li>
                </ul>
            </li>
        </ul>                
    </div>

    <p class="text-justify" style="padding-left: 20px;">
        Kelompokkan produk-produk berdasarkan <b>harga,</b> caranya dengan <b>menarik</b> nama produk yang ada pada daftar di sebelah kiri ke masing-masing kelompok harga produk.
    </p>

    <div class="container" align="center">
        <div class="item-list" id="name-list">
            <h5>Daftar Nama Produk</h5>
            <div class="name-item" draggable="true" id="produk1">Ampalam - Rp15.000</div>
            <div class="name-item" draggable="true" id="produk2">Bayam - Rp10.000</div>
            <div class="name-item" draggable="true" id="produk3">Cabai - Rp40.000</div>
            <div class="name-item" draggable="true" id="produk4">Durian - Rp80.000</div>
            <div class="name-item" draggable="true" id="produk5">Kelapa - Rp25.000</div>
            <div class="name-item" draggable="true" id="produk6">Kentang - Rp20.000</div>
            <div class="name-item" draggable="true" id="produk7">Mangga - Rp15.000</div>
            <div class="name-item" draggable="true" id="produk8">Pepaya - Rp10.000</div>
            <div class="name-item" draggable="true" id="produk9">Sukun - Rp10.000</div>
            <div class="name-item" draggable="true" id="produk10">Tomat - Rp20.000</div>
        </div>
    
        <div class="dropzone" id="group-10-20">
            <h5>Kelompok Harga Rp 10.000 - Rp 20.000</h5>
        </div>
        
        <div class="dropzone" id="group-21-30">
            <h5>Kelompok Harga Rp 21.000 - Rp 30.000</h5>
        </div>
        
        <div class="dropzone" id="group-31-40">
            <h5>Kelompok Harga Rp 31.000 - Rp 40.000</h5>
        </div>
        
        <div class="dropzone" id="group-41">
            <h5>Kelompok Harga Lebih Dari Rp 40.000</h5>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="validate()">Cek Jawaban</button>
    <br><br>
    
    {{-- Pengenalan Pola --}}
    <div style="display: none;" id="pengenalan-pola">
        <p class="text-justify">
            <b>(ii) Mengenali Pola pada Daftar Produk</b>
        </p>
        <div style="padding-left: 20px;">
            <p class="text-justify">
                Dalam algoritma pencarian biner, data dapat diproses jika memiliki pola terurut, sedangkan pada algoritma linear dan algoritma pencarian beruntun dengan sentinel dapat menggunakan data yang terurut maupun tidak terurut.
                Agar bisa menggunakan semua algoritma untuk penyelesaian pencarian, mari lakukan aktivitas berikut.
            </p><br>
            <p class="text-justify">
                Setelah produk dikelompokkan berdasarkan harga, <b>urutkan</b> nama produk dalam masing-masing kelompok dengan aturan:
            </p>
            <ul>
                <li><b>Baris paling atas</b> adalah produk dengan harga paling rendah.</li>
                <li><b>Baris selanjutnya</b> adalah produk dengan harga lebih tinggi.</li>
                <li>Jika ada produk dengan harga yang sama, urutkan berdasarkan <b>abjad nama produk</b>. Misalnya, Bayam <b>(B)</b> ditempatkan sebelum Pepaya <b>(P)</b> karena huruf <b>'B' datang lebih dulu dalam abjad.</b></li>
            </ul>
        </div>
        <div class="container-pola">
            <div id="produk-list" class="sorting-zone">
                <div class="item" id="item-1" draggable="true" data-harga="15000">Ampalam - Rp15.000</div>
                <div class="item" id="item-2" draggable="true" data-harga="10000">Bayam - Rp10.000</div>
                <div class="item" id="item-3" draggable="true" data-harga="20000">Kentang - Rp20.000</div>
                <div class="item" id="item-4" draggable="true" data-harga="15000">Mangga - Rp15.000</div>
                <div class="item" id="item-5" draggable="true" data-harga="10000">Pepaya - Rp10.000</div>
                <div class="item" id="item-6" draggable="true" data-harga="10000">Sukun - Rp10.000</div>
                <div class="item" id="item-7" draggable="true" data-harga="20000">Tomat - Rp20.000</div>
            </div>
            <div id="sorted-zone" class="sorting-zone"></div>
        </div>
        <button type="button" class="btn btn-success" onclick="checkOrder()">Cek Urutan</button>
    </div><br>

    {{-- Abstraksi --}}
    <div style="display: none;" id="abstraksi">
        <p class="text-justify">
            <b>(iii) Melakukan Abstraksi pada Daftar Produk</b>
        </p>
        <p class="text-justify" style="padding-left: 20px;">
            Karena Anda akan mencari harga untuk produk <b>“Mangga”</b>, maka selanjutnya Anda bisa fokus pada kelompok harga produk yang memuat <b>“Mangga”</b> dan mengabaikan kelompok harga produk lainnya.
        </p>
        <div style="display: flex; justify-content: center;">
            <table style="border: 1px solid black">
                <tr>
                    <th class="col-small">No</th>
                    <th class="col-large">Nama Produk</th>
                    <th class="col-large">Berat (Kg)</th>
                    <th class="col-large">Harga</th>
                </tr>
                <tr>
                    <td class="col-small">1</td>
                    <td class="col-large">Bayam</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 10.000</td>
                </tr>
                <tr>
                    <td class="col-small">2</td>
                    <td class="col-large">Pepaya</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 10.000</td>
                </tr>
                <tr>
                    <td class="col-small">3</td>
                    <td class="col-large">Sukun</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 10.000</td>
                </tr>
                <tr>
                    <td class="col-small">4</td>
                    <td class="col-large">Ampalam</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 15.000</td>
                </tr>
                <tr>
                    <td class="col-small">5</td>
                    <td class="col-large">Mangga</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 15.000</td>
                </tr>
                <tr>
                    <td class="col-small">6</td>
                    <td class="col-large">Kentang</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 20.000</td>
                </tr>
                <tr>
                    <td class="col-small">7</td>
                    <td class="col-large">Tomat</td>
                    <td class="col-large">1</td>
                    <td class="col-large">Rp 20.000</td>
                </tr>
            </table>
        </div>
    </div><br><br>

    {{-- Algoritma --}}
    <div id="linear-section" style="display: none;">
        <p class="text-justify">
            <b>(iv) Implementasi Algoritma Pencarian</b>
        </p>
        <ul>
            <li>Gunakan 3 algoritma yang sudah dipelajari sebelumnya untuk menemukan produk “Mangga”.</li>
            <li>Catat hasil pencarian dari ketiga algoritma di bagian akhir aktivitas ini.</li>
        </ul>
        <div class="text-justify">
            <ol>
                {{-- Pencarian Linear --}}
                <b><li>Pencarian Linear</li></b>
                <ul>
                    <li>Mulai dari elemen pertama pada daftar <b>(indeks ke-1)</b>, periksa apakah nama produk pada elemen tersebut adalah <b>"Mangga"</b>. Jika elemen <b>bukan “Mangga”</b>, pilih <b>“Bukan”</b>, jika iya, pilih <b>“Cocok”.</b></li>
                    <li>Jika bukan, akan berpindah ke elemen berikutnya.</li>
                    <li>Ulangi proses ini hingga:
                        <ul>
                            <li>Nama produk dicari ditemukan, atau</li>
                            <li>Seluruh daftar telah diperiksa.</li>
                        </ul>
                    </li>          
                </ul>
                <p class="text-justify">
                    Berdasarkan uraian di atas, coba lengkapi bagian yang kosong pada tabel berikut dengan memasukkan langkah ke berapa dari setiap pemeriksaan elemen <b>(jawab dengan memasukkan angka)</b>, kemudian memilih apakah elemen tersebut cocok atau bukan!
                </p>

                <div class="table-responsive" style="display: flex; justify-content: center;">
                    <table class="tabelPeriksa">
                        <thead>
                            <tr>
                                <th>Periksa</th>
                                <th>Indeks ke-</th>
                                <th>Langkah ke-</th>
                                <th>Kecocokan</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <tr>
                                <td>Bayam</td>
                                <td><input type="number" id="index-1"></td>
                                <td><input type="number" id="step-1"></td>
                                <td>
                                    <select id="match-1">
                                        <option value="bukan">Bukan</option>
                                        <option value="cocok">Cocok</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="button-container">
                        <button id="check-button" class="btn btn-success">Cek Jawaban</button>
                    </div>
                    <div id="input-langkah" class="hidden">
                        <label for="jumlahLangkah">Jumlah langkah menemukan "Mangga": </label>
                        <input type="number" id="jumlahLangkah">
                        <button class="btn btn-success" onclick="cekJumlahLangkah()">Cek</button>
                    </div><br><br>
                </div>
                
                <div id="biner-section" style="display: none;">            
                <b>2. Pencarian Biner</b>
                <ul>
                    <li>Tentukan indeks awal dan akhir:
                        <ul>
                            <li>Awal = 1
                                <select id="awal">
                                    <option value="bayam">Bayam</option>
                                    <option value="pepaya">Pepaya</option>
                                    <option value="sukun">Sukun</option>
                                    <option value="ampalam">Ampalam</option>
                                    <option value="mangga">Mangga</option>
                                    <option value="kentang">Kentang</option>
                                    <option value="tomat">Tomat</option>
                                </select> ;

                                Akhir = 7
                                <select id="akhir">
                                    <option value="bayam">Bayam</option>
                                    <option value="pepaya">Pepaya</option>
                                    <option value="sukun">Sukun</option>
                                    <option value="ampalam">Ampalam</option>
                                    <option value="mangga">Mangga</option>
                                    <option value="kentang">Kentang</option>
                                    <option value="tomat">Tomat</option>
                                </select>

                                <button class="btn btn-success" onclick="cekIndex()">Cek</button>
                            </li>
                        </ul>
                    </li><br>

                    <li class="text-justify">Hitung titik tengah daftar:<br>
                        Tengah = (Awal + Akhir) / 2 (jika hasil perhitungan diakhiri 0,5, bulatkan ke bawah).<br>
                        <b>Bandingkan</b> nama produk pada indeks tengah dengan nama produk yang dicari <b>(Mangga).</b><br>
                        <div style="border: 2px solid #011B78; margin: 10px auto; text-align: center; width: 90%; max-width: 500px;">
                            <p><b>Tengah = (1 + 7) / 2 = 4 (Elemen di Indeks 4 adalah Ampalam)</b></p>
                        </div>                        
                    </li>

                    <li>Jika:
                        <ul>
                            <li class="text-justify">Nama produk yang dicari huruf depan namanya <b>lebih kecil</b> dari huruf depan nama di tengah --> Cari di <b>bagian kiri</b> daftar.</li>
                            <li class="text-justify">Nama produk yang dicari huruf depan namanya <b>lebih besar</b> dari huruf depan nama di tengah --> Cari di <b>bagian kanan</b> daftar.</li>
                            <li class="text-justify">Nama produk yang dicari <b>sama dengan</b> nama produk di tengah --> Produk ditemukan.</li>
                        </ul>
                    </li>
                </ul><br>
                <p class="text-justify">
                    Berdasarkan uraian di atas, coba lengkapi bagian yang kosong pada tabel berikut dengan memasukkan langkah ke berapa dari setiap pemeriksaan elemen <b>(jawab dengan memasukkan angka)</b>, kemudian memilih apakah elemen tersebut cocok atau bukan!
                </p>
                
                <div class="table-responsive" style="display: flex; justify-content: center;">
                    <table class="tabelPeriksa">
                        <thead>
                            <tr>
                                <th>Periksa</th>
                                <th>Indeks ke-</th>
                                <th>Langkah ke-</th>
                                <th>Kecocokan</th>
                            </tr>
                        </thead>
                        <tbody id="table-body-biner">
                            <tr>
                                <td>Ampalam</td>
                                <td><input type="number" id="biner-index-1"></td>
                                <td><input type="number" id="biner-step-1"></td>
                                <td>
                                    <select id="match-biner-1">
                                        <option value="bukan">Bukan</option>
                                        <option value="cocok">Cocok</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="button-container">
                        <button id="check-button-biner" class="btn btn-success">Cek Jawaban</button>
                    </div>
                    <div id="input-langkah-biner" class="hidden">
                        <label for="jumlahLangkahBiner">Jumlah langkah menemukan "Mangga": </label>
                        <input type="number" id="jumlahLangkahBiner">
                        <button class="btn btn-success" onclick="cekJumlahLangkahBiner()">Cek</button>
                    </div><br><br>
                </div>

                <div id="sentinel-section" style="display: none;">
                <b>3. Pencarian Beruntun dengan Sentinel</b>
                <ul>
                    <li class="text-justify">Masukkan elemen yang dicari sebagai <b>sentinel</b> pada daftar. Masukkan sentinel di indeks terakhir.<br>
                        <div class="table-responsive" style="display: flex; justify-content: center;">
                            <table>
                                <thead>
                                  <tr>
                                    <th>Indeks ke-</th>
                                    <th>Elemen</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr><td>1</td><td>Bayam</td></tr>
                                  <tr><td>2</td><td>Pepaya</td></tr>
                                  <tr><td>3</td><td>Sukun</td></tr>
                                  <tr><td>4</td><td>Amplang</td></tr>
                                  <tr><td>5</td><td>Mangga</td></tr>
                                  <tr><td>6</td><td>Kentang</td></tr>
                                  <tr><td>7</td><td>Tomat</td></tr>
                                  <tr><td><input type="number" id="indeksSentinel" /></td><td><input type="text" id="elemenSentinel" /></td>
                                </tbody>
                              </table><br>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-success" onclick="periksaJawaban()">Cek Jawaban</button>
                        </div>
                    </li>
                        
                    <div id="sentinel-section-2" style="display: none;">
                            <li class="text-justify">Mulai dari elemen pertama pada daftar <b>(indeks ke-1)</b>, periksa apakah nama produk pada elemen tersebut adalah <b>"Mangga"</b>. Jika elemen <b>bukan</b> “Mangga”, pilih <b>“Bukan”</b>, jika iya, pilih <b>“Cocok”</b>.</li>
                            <li class="text-justify">Jika bukan, akan berpindah ke elemen berikutnya.</li>
                            <li class="text-justify">Ulangi proses ini hingga:
                                <ul>
                                    <li class="text-justify">Nama produk dicari ditemukan, atau</li>
                                    <li class="text-justify">Seluruh daftar telah diperiksa.</li>
                                </ul>
                            </li>

                            <p class="text-justify">
                                Berdasarkan uraian di atas, coba lengkapi bagian yang kosong pada tabel berikut dengan memasukkan langkah ke berapa dari setiap pemeriksaan elemen, kemudian memilih apakah elemen tersebut cocok atau bukan!
                            </p>

                            <div class="table-responsive" style="display: flex; justify-content: center;">
                                <table class="tabelPeriksa">
                                    <thead>
                                        <tr>
                                            <th>Periksa</th>
                                            <th>Indeks ke-</th>
                                            <th>Langkah ke-</th>
                                            <th>Kecocokan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body-sentinel">
                                        <tr>
                                            <td>Bayam</td>
                                            <td><input type="number" id="sentinel-index-1"></td>
                                            <td><input type="number" id="sentinel-step-1"></td>
                                            <td>
                                                <select id="sentinel-match-1">
                                                    <option value="bukan">Bukan</option>
                                                    <option value="cocok">Cocok</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-container">
                                <button id="check-button-sentinel" class="btn btn-success">Cek Jawaban</button>
                            </div>
                            <div id="input-langkah-sentinel" class="hidden">
                                <label for="jumlahLangkahSentinel">Jumlah langkah menemukan "Mangga": </label>
                                <input type="number" id="jumlahLangkahSentinel">
                                <button class="btn btn-success" onclick="cekJumlahLangkahSentinel()">Cek</button>
                            </div><br><br>
                        </div>

                        <div id="hasil-section" style="display: none;">
                            <strong>Hasil Pencarian:</strong>
                            <p>Produk <b>"Mangga"</b> ditemukan pada indeks ke- <input type="number" id="hasilIndex" /> dalam daftar produk yang sudah disederhanakan berdasarkan <b>harga</b>.</p><br>
                            
                            <strong>Tabel Perbandingan Jumlah Langkah</strong>
                            <div class="table-responsive" style="display: flex;">
                                <table>
                                    <thead>
                                      <tr>
                                        <th>Algoritma</th>
                                        <th>Jumlah Langkah</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr><td>Pencarian Linear</td><td><input type="number" id="langkahLinear" /></td></tr>
                                      <tr><td>Pencarian Biner</td><td><input type="number" id="langkahBiner" /></td></tr>
                                      <tr><td>Pencarian Beruntun dengan Sentinel</td><td><input type="number" id="langkahSentinel" /></td></tr>
                                    </tbody>
                                  </table><br>
                            </div><br>
                            <div>
                                <button class="btn btn-success" onclick="cekJawabanLangkah()">Cek Jawaban</button>
                            </div>
                        </div>
                    </div>
                </ul><br>       
            </ol>
    </div>
</div>

<div id="quiz-section" style="display: none;">
    <img style="width: 170px;" src="{{ asset('storage/img/marker5.png') }}">

    <p class="text-justify"><b>Pilihlah salah satu dari 4 pilihan jawaban pada masing-masing soal yang menurut kamu jawaban paling tepat. Jawablah pertanyaan secara mandiri dan teliti!</b></p>
    <div style="border: 2px solid #011B78; padding: 20px; margin: 20px auto;">
        <form id="quizForm">
            <div class="mb-4" class="text-justify">
                <ol>
            <!-- Question 1 -->
                    <li>Dari ketiga algoritma yang digunakan dalam aktivitas ini, algoritma manakah yang membutuhkan data dalam keadaan terurut untuk dapat bekerja dengan benar?</li>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question1" id="q1a1" value="A">
                        <label class="form-check-label" for="q1a1">Pencarian Linear</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question1" id="q1a2" value="B">
                        <label class="form-check-label" for="q1a2">Pencarian Biner</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question1" id="q1a3" value="C">
                        <label class="form-check-label" for="q1a3">Pencarian Beruntun dengan Sentinel</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question1" id="q1a4" value="D">
                        <label class="form-check-label" for="q1a4">Semua algoritma</label>
                    </div><br>

            <!-- Question 2 -->
                    <li>Jika daftar memiliki 10 elemen dan produk yang dicari adalah "Mangga", berapa jumlah langkah maksimal yang diperlukan algoritma pencarian linear untuk menemukan produk tersebut?</li>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question2" id="q2a1" value="A">
                        <label class="form-check-label" for="q2a1">3 langkah</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question2" id="q2a2" value="B">
                        <label class="form-check-label" for="q2a2">6 langkah</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question2" id="q2a3" value="C">
                        <label class="form-check-label" for="q2a3">10 langkah</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question2" id="q2a4" value="D">
                        <label class="form-check-label" for="q2a4">Tidak terbatas</label>
                    </div><br>

            <!-- Question 3 -->
                    <li>Dalam algoritma pencarian beruntun dengan sentinel, apa peran elemen sentinel?</li>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question3" id="q3a1" value="A">
                        <label class="form-check-label" for="q3a1">Mempercepat pencarian dengan langsung mengurutkan data</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question3" id="q3a2" value="B">
                        <label class="form-check-label" for="q3a2">Mengurangi jumlah langkah yang diperlukan dalam proses pencarian</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question3" id="q3a3" value="C">
                        <label class="form-check-label" for="q3a3">Menyediakan penanda untuk menghentikan pencarian di akhir daftar tanpa pengecekan tambahan</label>
                    </div>
                    <div class="form-check" style="gap: 5px;">
                        <input class="form-check-input" type="checkbox" name="question3" id="q3a4" value="D">
                        <label class="form-check-label" for="q3a4">Menggantikan elemen yang tidak ditemukan dengan elemen default</label>
                    </div><br>
                </ol>
            </div>
            <button type="button" class="btn btn-success" onclick="checkAnswersQuiz()">Cek Jawaban</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/materi/4-4.js') }}"></script>