const questions = [
    { question: "Tujuan utama dari algoritma pencarian adalah....", options: 
      ["Mengurutkan data.", 
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
      
      { question: "Algoritma pencarian linear akan berhenti saat....", options: 
        ["Elemen ditemukan atau akhir daftar tercapai", 
        "Seluruh elemen sudah diperiksa, terlepas dari hasil pencarian",
        "Elemen yang dicari tidak ada di awal daftar",
        "Data yang dicari lebih besar dari elemen pertama",
        "Terdapat pengulangan elemen dalam daftar"] },

    { question: "Dalam pencarian linear, jika terdapat 100 elemen dan elemen yang dicari ada di posisi ke-100, berapa kali perbandingan yang dilakukan?", options: 
          ["50", 
          "99", 
          "1",
          "100",
          "101"] },

{ question: "Manakah dari berikut ini yang merupakan kelemahan utama dari algoritma pencarian linear?", options: 
      ["Hanya berfungsi untuk data terurut", 
      "Tidak dapat menemukan elemen yang sama",
      "Lambat untuk dataset yang besar",
      "Memerlukan indeks khusus untuk berfungsi",
      "Tidak dapat digunakan pada daftar"] },

{ question: "Kapan pencarian linear lebih efisien dibandingkan pencarian biner?", options: 
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
      "Data harus dalam array berukuran genap"] },

{ question: "Pada pencarian biner, jika elemen tengah lebih besar dari elemen yang dicari, yang harus dilakukan adalah....", options: 
      ["Memeriksa bagian kanan daftar", 
      "Menggandakan daftar dan mencari di keduanya",
      "Memeriksa bagian kiri daftar",
      "Menghentikan pencarian",
      "Menukar elemen tengah dengan elemen yang lebih kecil"] },

{ question: "Jika elemen yang dicari tidak ada dalam array pada pencarian biner, yang akan terjadi adalah....", options: 
      ["Algoritma akan berhenti setelah membagi daftar sekali", 
      "Algoritma akan terus berjalan hingga akhir daftar",
      "Algoritma akan mengembalikan indeks -1 atau indikasi elemen tidak ditemukan",
      "Algoritma akan mengulang pencarian dari awal",
      "Data akan diurutkan ulang"] },

{ question: "Bagaimana pencarian biner memilih elemen pertama untuk diperiksa?", options: 
      ["Elemen pertama dalam daftar", 
      "Elemen di tengah daftar",
      "Elemen terakhir dalam daftar",
      "Elemen terkecil dalam daftar",
      "Elemen acak dalam daftar"] },

{ question: "Bagaimana cara pencarian biner mengurangi ukuran ruang pencarian setelah setiap perbandingan?", options: 
      ["Dengan menambahkan elemen baru", 
      "Dengan membagi daftar menjadi tiga bagian",
      "Dengan memeriksa hanya setengah daftar yang relevan",
      "Dengan menyimpan semua elemen yang telah diperiksa",
      "Dengan menggunakan hash function"] },

{ question: "Mengapa pencarian biner lebih cepat dibandingkan pencarian linear pada dataset yang besar?", options: 
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

{ question: "Jika kita menggunakan sentinel dalam pencarian, yang perlu dilakukan setelah menemukan sentinel adalah....", options: 
      ["Menghentikan pencarian", 
      "Mencari elemen dalam daftar",
      "Mencatat posisi sentinel",
      "Mengurutkan ulang data",
      "Tidak perlu melakukan apa-apa"] },

{ question: "Nilai yang biasanya digunakan untuk sentinel adalah....", options: 
      ["Nilai terkecil dalam daftar", 
      "Nilai yang sama dengan elemen yang dicari",
      "Nilai terbesar dalam daftar",
      "Nilai random",
      "Null"] },

{ question: "Apa yang terjadi jika elemen yang dicari tidak ada dalam array saat menggunakan sentinel?", options: 
      ["Pencarian akan berlanjut tanpa henti", 
      "Sentinel akan ditemukan di akhir pencarian",
      "Pencarian akan berhenti tanpa hasil",
      "Sentinel akan diganti dengan nilai baru",
      "Algoritma akan mengembalikan nilai acak"] },

{ question: "Kelemahan utama dari metode pencarian beruntun dengan sentinel adalah....", options: 
      ["Memerlukan lebih banyak waktu untuk mencari", 
      "Mengurangi keakuratan pencarian",
      "Memerlukan memori tambahan untuk sentinel",
      "Hanya dapat digunakan untuk data terurut",
      "Tidak dapat digunakan untuk data dengan elemen yang sama"] },

{ question: "Dalam pencarian beruntun dengan sentinel, apa yang bisa dilakukan untuk memastikan bahwa elemen yang ditemukan adalah elemen yang dicari?", options: 
      ["Tidak perlu pengecekan tambahan", 
      "Hanya periksa posisi sentinel",
      "Hapus sentinel dari array setelah pencarian",
      "Bandingkan elemen yang ditemukan dengan nilai yang dicari",
      "Ulangi pencarian dari awal"] }
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
const correctAnswers = ["Menemukan elemen tertentu dalam data",
  "Memeriksa elemen satu per satu dari awal hingga akhir",
  "Elemen ditemukan atau akhir daftar tercapai",
  "100",
  "Lambat untuk dataset yang besar",
  "Ketika hanya sedikit elemen yang harus dicari",
  "Pencarian linear lebih sederhana dan dapat digunakan pada data tidak terurut",
  "Data harus sudah terurut",
  "Memeriksa bagian kiri daftar",
  "Algoritma akan mengembalikan indeks -1 atau indikasi elemen tidak ditemukan",
  "Elemen di tengah daftar",
  "Dengan memeriksa hanya setengah daftar yang relevan",
  "Pencarian biner membagi ruang pencarian secara logaritmik",
  "Menghindari pengecekan indeks batas",
  "Di posisi setelah elemen terakhir",
  "Mencari elemen dalam daftar",
  "Nilai yang sama dengan elemen yang dicari",
  "Sentinel akan ditemukan di akhir pencarian",
  "Memerlukan memori tambahan untuk sentinel",
  "Bandingkan elemen yang ditemukan dengan nilai yang dicari",
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



