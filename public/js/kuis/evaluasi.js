const questions = [
    { question: "Tia ingin mencari buku di perpustakaan yang tidak memiliki katalog digital. Langkah paling logis untuk memecah masalah pencarian ini adalah....", options: 
      ["Menghitung jumlah buku di perpustakaan", 
      "Menentukan lokasi rak, kategori buku, dan mencari satu per satu", 
      "Menghafal semua judul buku yang ada",
      "Menanyakan semua pengunjung tentang lokasi buku",
      "Mengurutkan semua buku sebelum dicari"] },
      
    { question: "Seorang siswa diminta mencari buku berjudul <i>“Kimia Dasar”</i>. Tanpa bantuan katalog, ia harus memecah masalah pencarian tersebut menjadi beberapa bagian. <br>Langkah yang paling tepat mewakili submasalah utama dalam konteks pencarian buku ini adalah....", options: 
      ["Menentukan warna sampul buku dan ukuran rak", 
      "Mencatat nomor halaman dan jumlah bab buku",
      "Menentukan kategori buku, menemukan lokasi rak, dan mengenali judul",
      "Mengingat siapa peminjam sebelumnya",
      "Menyusun ulang semua buku berdasarkan alfabet"] },
      
      { question: "Dalam aplikasi belanja <i>online</i>, pengguna ingin mencari produk <b>“Tas Kulit Wanita Hitam”</b>. Pengembang sistem ingin memecah proses pencarian tersebut agar bisa dirancang lebih efisien.<br>Komponen masalah yang paling relevan untuk dianalisis dan dipecah oleh pengembang adalah....", options: 
        ["Harga barang, waktu buka aplikasi, dan metode pembayaran", 
        "Kategori produk, kata kunci pencarian, dan atribut warna",
        "Nomor urut daftar belanja dan total belanja mingguan",
        "Siapa yang membuat produk dan dari mana asalnya",
        "Cara menyortir berdasarkan popularitas"] },

    { question: "Di perpustakaan, seorang siswa ingin mencari buku <b>“Kimia Dasar”</b> di rak dengan label kode DDC: <b>500–599</b>. Rak sudah disusun berdasarkan urutan angka. Strategi pencarian paling efisien untuk kasus ini adalah....", options: 
          ["Menelusuri dari awal sampai akhir rak satu per satu", 
          "Membagi rak menjadi dua dan memeriksa bagian tengah terlebih dahulu", 
          "Memilih rak secara acak dan membaca setiap judul",
          "Menunggu bantuan pustakawan",
          "Menyaring buku berdasarkan warna dan ketebalan"] },

{ question: "Dalam proses pencarian sebuah data, siswa mengenali bahwa data selalu diawali dengan huruf <b>'K'</b>. Ia memutuskan untuk langsung menuju bagian daftar yang berisi elemen awal <b>'K'</b>. Strategi ini menunjukkan penerapan dari tahap CT....", options: 
      ["Dekomposisi", 
      "Abstraksi",
      "Algoritma",
      "Pengenalan Pola",
      "Rekursif"] },

{ question: "Di perpustakaan sekolah, semua buku sudah disusun berdasarkan kode DDC yang terurut. Seorang siswa ingin mencari buku dengan kode 540 (kimia). <br>Strategi pencarian paling efisien yang seharusnya ia pilih adalah...", options: 
      ["Telusuri semua rak dari awal", 
      "Menanyakan pustakawan lalu membaca semua judul",
      "Gunakan strategi pencarian biner berdasarkan urutan kode",
      "Lihat sampul buku berdasarkan warna",
      "Membaca setiap kode buku secara berurutan tanpa memperhatikan pola urutan"] },
  
{ question: "Dalam menyelesaikan masalah pencarian pada data besar, siswa memecah data berdasarkan kategori terlebih dahulu, kemudian menerapkan algoritma pencarian tertentu sesuai struktur data. Pendekatan ini menunjukkan strategi berpikir yang menggabungkan....", options: 
      ["Visualisasi dan simulasi", 
      "Abstraksi dan Rekursi",
      "Dekomposisi dan Algoritma",
      "<i>Looping</i> dan Pencabangan",
      "<i>Sorting</i> dan <i>Hashing</i>"] },

{ question: "Seorang siswa diminta mencari angka 42 dalam daftar terurut menaik berisi 1000 elemen. Ia menyusun strategi berikut:<ul><li>Langkah 1: Tentukan nilai tengah</li><li>Langkah 2: Bandingkan nilai tengah dengan 42</li><li>Langkah 3: Eliminasi bagian yang tidak mungkin</li><li>Langkah 4: Ulangi proses pada sisa data</li></ul>Strategi tersebut mencerminkan penerapan algoritma....", options: 
      ["Pencarian Linear", 
      "Pencarian Beruntun",
      "Pencarian dengan Sentinel",
      "Pencarian Acak",
      "Pencarian Biner"] },

{ question: "Tujuan utama dari algoritma pencarian adalah....", options: 
      ["Mengurutkan data", 
      "Menemukan elemen tertentu dalam data",
      "Menghitung total elemen dalam dataset",
      "Mengubah struktur data",
      "Menyimpan data dengan lebih efisien"] },

{ question: "Karakteristik utama dari algoritma pencarian linear adalah....", options: 
      ["Mencari dengan membagi data menjadi dua bagian", 
      "Selalu berhasil menemukan data pada percobaan pertama",
      "Memeriksa elemen satu per satu dari awal hingga akhir",
      "Hanya bisa digunakan pada data yang sudah diurutkan",
      "Menggunakan struktur data pohon untuk pencarian"] },

{ question: "Dalam pencarian linear, jika terdapat 100 elemen dan elemen yang dicari ada di posisi ke-100, perbandingan yang dilakukan sebanyak ... kali.", options: 
      ["50", 
      "99",
      "1",
      "100",
      "101"] },

{ question: "Pencarian linear lebih efisien dibandingkan pencarian biner dalam kondisi....", options: 
      ["Pada dataset yang sangat besar", 
      "Jika data sudah diurutkan",
      "Ketika hanya sedikit elemen yang harus dicari",
      "Jika data memiliki struktur yang sangat kompleks",
      "Ketika elemen yang dicari berada di posisi terakhir"] },

{ question: "Yang membuat pencarian linear tetap relevan meskipun ada metode yang lebih cepat seperti pencarian biner adalah....", options: 
      ["Pencarian linear selalu lebih cepat", 
      "Pencarian linear hanya berfungsi pada data yang terurut",
      "Pencarian linear lebih sederhana dan dapat digunakan pada data tidak terurut",
      "Pencarian linear menggunakan lebih banyak memori",
      "Pencarian linear dapat dioptimalkan untuk data besar"] },

{ question: "Syarat utama untuk menggunakan pencarian biner adalah....", options: 
      ["Data harus sudah terurut", 
      "Data harus tidak terurut",
      "Elemen pertama harus lebih besar dari elemen kedua",
      "Data harus disimpan dalam pohon biner",
      "Data harus dalam daftar berukuran genap"] },

{ question: "Pada pencarian biner, jika elemen tengah lebih besar dari elemen yang dicari, yang harus dilakukan adalah....", options: 
      ["Memeriksa bagian kanan daftar", 
      "Menggandakan daftar dan mencari di keduanya",
      "Memeriksa bagian kiri daftar",
      "Menghentikan pencarian",
      "Menukar elemen tengah dengan elemen yang lebih kecil"] },

{ question: "Cara pencarian biner memilih elemen pertama yang diperiksa adalah dengan memilih....", options: 
      ["Elemen pertama dalam daftar", 
      "Elemen di tengah daftar",
      "Elemen terakhir dalam daftar",
      "Elemen terkecil dalam daftar",
      "Elemen acak dalam daftar"] },

{ question: "Pencarian biner lebih cepat dibandingkan pencarian linear pada dataset yang besar karena....", options: 
      ["Pencarian biner hanya membutuhkan satu perbandingan", 
      "Pencarian biner menggunakan lebih sedikit memori",
      "Pencarian biner membagi ruang pencarian secara logaritmik",
      "Pencarian biner tidak memerlukan data terurut",
      "Pencarian biner lebih mudah diimplementasikan"] },

{ question: "Tujuan utama penggunaan sentinel dalam pencarian beruntun adalah....", options: 
      ["Mengurangi kompleksitas waktu", 
      "Meningkatkan akurasi pencarian",
      "Menghindari pengecekan indeks batas",
      "Mempercepat waktu akses memori",
      "Mengurangi jumlah elemen dalam daftar"] },

{ question: "Dalam pencarian beruntun dengan sentinel, di mana elemen sentinel biasanya diletakkan?", options: 
      ["Di posisi pertama daftar", 
      "Di posisi terakhir daftar",
      "Di posisi setelah elemen terakhir",
      "Di posisi tengah daftar",
      "Di posisi acak dalam daftar"] },

{ question: "Nilai yang biasanya digunakan untuk sentinel adalah....", options: 
      ["Nilai terkecil dalam daftar", 
      "Nilai yang sama dengan elemen yang dicari",
      "Nilai terbesar dalam daftar",
      "Nilai random",
      "Null"] }
];

let currentQuestionIndex = 0;
let answers = new Array(questions.length).fill(null);
let doubts = new Array(questions.length).fill(false);

const questionContent = document.getElementById('question-content');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const submitBtn = document.getElementById('submit-btn');
const questionNav = document.getElementById('question-nav');

function renderQuestion(index) {
    const question = questions[index];
    const options = question.options.map((option, i) => `
      <li>
        <input type="radio" id="option${i}" name="options" value="${option}" ${answers[index] === option ? 'checked' : ''} onclick="selectAnswer(${index}, '${option}')" />
        <label for="option${i}">${option}</label>
      </li>
    `).join('');
    
    questionContent.innerHTML = `
      <div class="question-number">Soal ${index + 1}:</div>
      <div class="question">${question.question}</div>
      <ul class="options">${options}</ul>
      <div class="ragu-container">
        <input type="checkbox" id="ragu${index}" ${doubts[index] ? 'checked' : ''} onclick="toggleDoubt(${index})" />
        <label for="ragu${index}" class="ragu-label">Ragu-ragu</label>
      </div>
    `;
    
    updateNavigationButtons();
    renderNavigation();
}

function saveProgress() {
  localStorage.setItem("evaluasi_answers", JSON.stringify(answers));
  localStorage.setItem("evaluasi_doubts", JSON.stringify(doubts));
  localStorage.setItem("evaluasi_currentQuestion", currentQuestionIndex);
}

function selectAnswer(index, value) {
    answers[index] = value; // Simpan jawaban
    saveProgress();
    renderNavigation(); // Perbarui warna nomor soal
    checkCompletion(); // Cek apakah semua soal sudah dijawab
  }  

function toggleDoubt(index) {
    doubts[index] = !doubts[index];
    saveProgress();
    updateNavigation();
}

function updateNavigationButtons() {
    prevBtn.disabled = currentQuestionIndex === 0;
    nextBtn.disabled = currentQuestionIndex === questions.length - 1;
}

function renderNavigation() {
  questionNav.innerHTML = '';
  questions.forEach((_, i) => {
      const btn = document.createElement('button');
      btn.className = `
          ${answers[i] ? 'answered' : ''}
          ${doubts[i] ? 'ragu' : ''}
          ${i === currentQuestionIndex ? 'active' : ''}
      `.trim();
      btn.textContent = i + 1;
      btn.onclick = () => {
          currentQuestionIndex = i;
          renderQuestion(currentQuestionIndex);
      };
      questionNav.appendChild(btn);
  });
}

function checkCompletion() {
    const allAnswered = answers.every(answer => answer !== null); // Cek apakah semua soal sudah dijawab
    submitBtn.style.display = allAnswered ? 'block' : 'none'; // Tampilkan tombol jika semua sudah dijawab
}
  

prevBtn.addEventListener('click', () => {
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        saveProgress();
        renderQuestion(currentQuestionIndex);
    }
});

nextBtn.addEventListener('click', () => {
    if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        saveProgress();
        renderQuestion(currentQuestionIndex);
    }
});

function loadProgress() {
  const savedAnswers = localStorage.getItem("evaluasi_answers");
  const savedDoubts = localStorage.getItem("evaluasi_doubts");
  const savedIndex = localStorage.getItem("evaluasi_currentQuestion");

  if (savedAnswers) {
    answers = JSON.parse(savedAnswers);
  }
  if (savedDoubts) {
    doubts = JSON.parse(savedDoubts);
  }
  if (savedIndex) {
    currentQuestionIndex = parseInt(savedIndex);
  }
}

// Panggil sebelum render pertama kali
loadProgress();

renderQuestion(currentQuestionIndex);
renderNavigation();

const TOTAL_TIME = 60 * 60; // 60 menit dalam detik
const TIMER_KEY = 'evaluasi_startTime';
let timer;
let timerElement = document.querySelector('.timer');

function formatTimerDisplay(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `<h4>Waktu Tersisa: ${minutes}:${secs < 10 ? '0' : ''}${secs}</h4>`;
}

function startTimer() {
    let startTime = localStorage.getItem(TIMER_KEY);

    if (!startTime) {
        // Jika belum ada, simpan waktu mulai sekarang
        startTime = Date.now();
        localStorage.setItem(TIMER_KEY, startTime);
    } else {
        startTime = parseInt(startTime);
    }

    timer = setInterval(() => {
        const now = Date.now();
        const elapsed = Math.floor((now - startTime) / 1000);
        const timeRemaining = TOTAL_TIME - elapsed;

        if (timeRemaining <= 0) {
            clearInterval(timer);
            timerElement.innerHTML = "<h4>Waktu Habis!</h4>";
            submitQuiz(); // Auto-submit
        } else {
            timerElement.innerHTML = formatTimerDisplay(timeRemaining);
        }
    }, 1000);
}


// Mulai timer saat halaman dimuat
startTimer();

//Periksa Jawaban
const correctAnswers = ["Menentukan lokasi rak, kategori buku, dan mencari satu per satu",
  "Menentukan kategori buku, menemukan lokasi rak, dan mengenali judul",
  "Kategori produk, kata kunci pencarian, dan atribut warna",
  "Membagi rak menjadi dua dan memeriksa bagian tengah terlebih dahulu",
  "Pengenalan Pola ",
  "Gunakan strategi pencarian biner berdasarkan urutan kode",
  "Dekomposisi dan Algoritma",
  "Pencarian Biner",
  "Menemukan elemen tertentu dalam data",
  "Memeriksa elemen satu per satu dari awal hingga akhir",
  "100",
  "Ketika hanya sedikit elemen yang harus dicari",
  "Pencarian linear lebih sederhana dan dapat digunakan pada data tidak terurut",
  "Data harus sudah terurut",
  "Memeriksa bagian kiri daftar",
  "Elemen di tengah daftar",
  "Pencarian biner membagi ruang pencarian secara logaritmik",
  "Menghindari pengecekan indeks batas",
  "Di posisi setelah elemen terakhir",
  "Nilai yang sama dengan elemen yang dicari",
];

function submitQuiz() {
  clearInterval(timer); // stop timer

  let score = 0;
  answers.forEach((answer, index) => {
      if (answer === correctAnswers[index]) {
          score += 5;
      }
  });

  // Hitung waktu pengerjaan dalam detik
  const startTime = parseInt(localStorage.getItem('evaluasi_startTime'));
  const now = Date.now();
  let waktuPengerjaanDetik = Math.floor((now - startTime) / 1000);

  // Ubah detik ke format HH:MM:SS
  function formatTime(seconds) {
      const h = String(Math.floor(seconds / 3600)).padStart(2, '0');
      const m = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
      const s = String(seconds % 60).padStart(2, '0');
      return `${h}:${m}:${s}`;
  }

  const waktuPengerjaanFormatted = formatTime(waktuPengerjaanDetik);

  // Kirim data ke server (Laravel)
  fetch("/siswa/evaluasi/submit", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
          nilai: score,
          waktu_pengerjaan: waktuPengerjaanFormatted, 
          jenis_tes: "evaluasi"
      })
  })
  .then(async response => {
      if (!response.ok) {
          const errorText = await response.text();
          throw new Error("Server error: " + errorText);
      }
      return response.json();
  })
  .then(data => {
      window.location.href = `/siswa/evaluasi/hasil/${data.nilai_id}`;
  })
  .catch(async error => {
      const errorText = await error.message;
      console.error("Gagal mengirim nilai:", errorText);
      alert("Detail error: " + errorText);
  });

  localStorage.removeItem("evaluasi_answers");
  localStorage.removeItem("evaluasi_doubts");
  localStorage.removeItem("evaluasi_currentQuestion");
  localStorage.removeItem("evaluasi_startTime");

}

submitBtn.addEventListener('click', submitQuiz);



