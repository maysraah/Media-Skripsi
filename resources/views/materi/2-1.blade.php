<style>
    table, th, tr, td {
        border: 1px solid black;
        padding: 5px;
    };
</style>

<h3 class="fw-bold text-center" style="color:#011B78">CONTOH PENERAPAN PENDEKATAN PEMBELAJARAN <i>COMPUTATIONAL THINKING</i></h3><br>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto; background-color:rgba(238, 237, 237, 0.877)">
    <p class="text-center"><b>Studi Kasus 1: Menghitung Pengeluaran Uang Jajan dalam Seminggu</b></p>
    <p class="text-center">
        Seorang siswa SMA ingin mengelola uang jajannya dengan lebih baik. Ia mendapatkan uang saku Rp20.000 per hari dari orang tuanya. Namun, ia merasa sering kehabisan uang sebelum akhir minggu dan ingin mengetahui bagaimana cara mengatur pengeluarannya dengan lebih efisien.
    </p>
    <p class="text-center">Ia mencatat pengeluarannya selama 7 hari sebagai berikut:</p>
    <div style="display: flex; justify-content: center; align-items: center;">
        <table style="border: 1px solid black">
            <tr>
                <th>Hari</th>
                <th>Pengeluaran (Rp)</th>
            </tr>
            <tr>
                <td>Senin</td>
                <td>18.000</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>22.000</td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>19.500</td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>21.000</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>17.000</td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>25.000</td>
            </tr>
            <tr>
                <td>Minggu</td>
                <td>15.000</td>
            </tr>
        </table>
    </div>

    <div>
        <p class="text-center">Dari data tersebut, siswa ingin mengetahui:</p>
        <p class="text-center">1) Total pengeluaran selama seminggu</p>
        <p class="text-center">2) Apakah uang sakunya cukup?</p>
        <p class="text-center">3) Berapa sisa atau kekurangan uangnya?</p>
    </div>                
</div>

<h6 class="text-center">Penyelesaian dengan <i>Computational Thinking:</i></h6>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
        <h5 style="color: #011B78">1. Dekomposisi</h5>
        <p>Memecah masalah menjadi bagian-bagian kecil:</p>
        <ul>
            <li>Input:
                <ul>
                    <li>Uang saku per hari = Rp20.000</li>
                    <li>Pengeluaran harian selama 7 hari</li>
                </ul>
            </li>
            <li>Proses:
                <ul>
                    <li>Hitung total uang saku dalam seminggu</li>
                    <li>Hitung total pengeluaran</li>
                    <li>Bandingkan uang saku dengan total pengeluaran</li>
                </ul>
            </li>
            <li>Output:
                <ul>
                    <li>Apakah uang saku cukup atau kurang?</li>
                    <li>Berapa sisa atau kekurangan uangnya?</li>
                </ul>
            </li>
        </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
        <h5 style="color: #011B78">2. Pengenalan Pola</h5>
        <ul>
            <li>Setiap hari siswa mendapatkan jumlah uang yang sama (Rp20.000)</li>
            <li>Total uang saku dalam seminggu:<br>
                20.000 x 7 = 140.000</li>
            <li>Total pengeluaran selama seminggu:<br>
                18.000 + 22.000 + 19.500 + 21.000 + 17.000 + 25.000 + 15.000 = 137.500</li>
            <li>Perbandingan:
                <ul>
                    <li>Uang saku = Rp140.000</li>
                    <li>Pengeluaran = Rp137.500</li>
                    <li>Sisa uang = 140.000 - 137.500 = Rp2.500</li>
                </ul>
            </li>
        </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
    <h5 style="color: #011B78">3. Abstraksi</h5>
    <ul>
        <li>Tidak perlu mempertimbangkan detail kecil seperti barang yang dibeli.</li>
        <li>Fokus hanya pada angka uang saku, pengeluaran harian, dan selisihnya.</li>
    </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
    <h5 style="color: #011B78">4. Algoritma</h5>
    <ul>
        <li>Tentukan uang saku per hari dan jumlah hari dalam seminggu.</li>
        <li>Hitung total uang saku dalam seminggu.</li>
        <li>Hitung total pengeluaran selama seminggu dengan menjumlahkan semua pengeluaran harian.</li>
        <li>Bandingkan total uang saku dengan total pengeluaran.</li>
        <li>Jika uang saku lebih besar atau sama dengan pengeluaran, hitung sisa uang. Jika tidak, hitung kekurangannya.</li>
        <li>Cetak hasil.</li>
    </ul>
</div>

<h6>Kesimpulan dan Analisis:</h6>
<ul>
    <li>Siswa masih memiliki sisa uang Rp2.500 dalam seminggu, artinya uang saku cukup.</li>
    <li>Namun, pada hari Sabtu, pengeluaran lebih besar dari uang saku harian (Rp25.000 > Rp20.000).</li>
    <li>Untuk mengelola uang lebih baik, siswa bisa mencoba mengurangi pengeluaran pada hari-hari tertentu agar tetap memiliki tabungan.</li>
</ul><br>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto; background-color:rgba(238, 237, 237, 0.877)">
    <p class="text-center"><b>Studi Kasus 2: Menentukan Jarak yang Ditempuh Mobil</b></p>
    <div style="display: flex; justify-content: center; align-items: center;">
        <img class="centered" style="width: 200px;" src="{{ asset('storage/img/mobil.webp') }}" alt="Rak Buku di Perpustakaan">
    </div><br>
    <p class="text-center">
        Sebuah mobil bergerak dengan kecepatan tetap <b>60 km/jam</b> dari <b>Kota A ke Kota B</b>. Jika jarak antara kedua kota adalah <b>180 km</b>, berapa waktu yang dibutuhkan mobil untuk mencapai <b>Kota B?</b>
    </p>
</div>

<h6 class="text-center">Penyelesaian dengan <i>Computational Thinking:</i></h6>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
        <h5 style="color: #011B78">1. Dekomposisi</h5>
        <ul>
            <li>Menentukan informasi yang diberikan
                <ul>
                    <li>Kecepatan mobil = 60 km/jam</li>
                    <li>Jarak antara Kota A dan Kota B = 180 km</li>
                </ul>
            </li>
            <li>Menentukan hubungan antara waktu, jarak, dan kecepatan menggunakan rumus:<br>
                <p class="text-center"><b>Waktu = Jarak / Kecepatan</b></p>
            </li>
            <li>Menghitung waktu tempuh.</li>
        </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
    <h5 style="color: #011B78">2. Pengenalan Pola</h5>
    <ul>
        <li>Jika kecepatan tetap, maka semakin jauh jarak yang ditempuh, semakin lama waktu yang dibutuhkan.</li>
        <li>Hubungan antara jarak dan waktu berbanding lurus, artinya jika jarak dikalikan 2, maka waktu juga dikalikan 2.</li>
    </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
    <h5 style="color: #011B78">3. Abstraksi</h5>
    <ul>
        <li>Kita abaikan faktor eksternal seperti kondisi jalan, lalu lintas, dan istirahat.</li>
        <li>Fokus hanya pada hubungan matematis antara kecepatan, jarak, dan waktu.</li>
    </ul>
</div>

<div style="border: 2px solid #011B78; border-radius: 30px; padding: 20px; margin: 20px auto;">
    <h5 style="color: #011B78">4. Algoritma</h5>
    <ul>
        <li>Ambil nilai jarak = 180 km.</li>
        <li>Ambil nilai kecepatan = 60 km/jam.</li>
        <li>Hitung waktu dengan rumus:
            <p><b>Waktu = 180 / 60 = 3 jam</b></p>
        </li>
        <li>Tampilkan hasil.</li>
    </ul>
</div>

<h6>Kesimpulan:</h6>
<p>Mobil membutuhkan waktu <b>3 jam</b> untuk sampai di Kota B.</p>
