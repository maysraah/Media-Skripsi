const questions = [
    { question: "Diberikan sebuah daftar awal dengan 5 elemen dan sebuah elemen sentinel. Jika elemen yang dicari ditemukan pada elemen sentinel, yang terjadi adalah....", options: 
      ["Elemen ditemukan sebelum sentinel", 
      "Elemen tidak ditemukan di dalam daftar awal", 
      "Elemen ditemukan pada indeks terakhir",
      "Elemen selalu ditemukan di dalam daftar",
      "Elemen ditemukan pada indeks di luar daftar"] },
      
    { question: "Langkah pertama dalam algoritma pencarian beruntun dengan sentinel adalah....", options: 
      ["Menambahkan elemen sentinel ke dalam daftar", 
      "Mengurutkan daftar sebelum pencarian",
      "Memulai pencarian dari indeks tengah",
      "Menghapus elemen yang tidak relevan dari daftar",
      "Memeriksa apakah daftar terisi penuh"] },
      
      { question: "Sentinel dapat membantu mengurangi jumlah perbandingan dalam pencarian beruntun dengan....", options: 
        ["Memeriksa elemen pertama dan terakhir secara bersamaan", 
        "Menambahkan elemen fiktif yang setara dengan elemen yang dicari",
        "Mengurangi elemen yang perlu diperiksa",
        "Menghentikan pencarian lebih awal jika elemen ditemukan",
        "Menggandakan daftar yang akan dicari"] },

    { question: "Dalam implementasi pencarian linear pada sistem sederhana, algoritma pencarian dengan sentinel dipilih karena....", options: 
          ["Dapat digunakan hanya pada data yang telah diurutkan", 
          "Tidak membutuhkan batasan array yang jelas", 
          "Mencegah keluar dari batas indeks dengan menambahkan target sebagai elemen ekstra",
          "Menghindari kebutuhan untuk membaca seluruh data",
          "Mengurutkan data sebelum mencari"] },

{ question: "Hal yang perlu diperhatikan saat menentukan posisi sentinel dalam pencarian beruntun adalah....", options: 
      ["Sentinel harus berada di posisi pertama", 
      "Sentinel ditempatkan di elemen tengah daftar",
      "Sentinel ditempatkan tepat setelah elemen terakhir",
      "Sentinel tidak boleh berada di dalam daftar",
      "Sentinel ditempatkan sebelum elemen pertama"] },

{ question: "Jika pencarian beruntun dengan sentinel dilakukan pada daftar kosong, yang akan terjadi ialah....", options: 
      ["Pencarian akan menghasilkan kesalahan memori", 
      "Pencarian akan selalu mengembalikan indeks 0",
      "Pencarian akan berhenti setelah menambahkan sentinel",
      "Pencarian tidak akan berjalan karena tidak ada elemen",
      "Pencarian tetap berjalan dengan hasil elemen sentinel"] },
  
{ question: "Jika elemen yang dicari muncul beberapa kali dalam daftar, bagaimana pencarian beruntun dengan sentinel menangani situasi ini?", options: 
      ["Mengembalikan indeks pertama elemen yang ditemukan", 
      "Menghentikan pencarian setelah menemukan satu elemen",
      "Mengembalikan semua indeks di mana elemen muncul",
      "Mengabaikan semua elemen setelah sentinel",
      "Menghitung berapa kali elemen ditemukan"] },

{ question: "Jika sebuah daftar memiliki 10 elemen dan nilai sentinel ditempatkan pada indeks ke-11, jumlah maksimum perbandingan yang akan dilakukan pencarian beruntun dengan sentinel adalah....", options: 
      ["5", 
      "10",
      "11",
      "9",
      "12"] },

{ question: "Jika diminta untuk mendesain ulang pencarian beruntun dengan sentinel agar lebih efisien dalam menangani data yang sering berubah, yang perlu dilakukan adalah....", options: 
      ["Menghapus sentinel dan menggunakan pencarian biner", 
      "Mengimplementasikan pencarian beruntun pada daftar terurut",
      "Menambahkan sentinel dinamis yang berubah sesuai elemen yang dicari",
      "Menggunakan pencarian beruntun dengan lebih dari satu sentinel",
      "Menggunakan pencarian probabilistik"] },

{ question: "Desain pencarian beruntun dengan sentinel jika data yang dicari sering kali berada di awal daftar ialah dengan....", options: 
      ["Menempatkan sentinel di awal daftar", 
      "Menambah elemen sentinel pada kedua ujung daftar",
      "Menempatkan elemen yang paling sering dicari di awal daftar",
      "Menggunakan sentinel yang berubah tergantung pada elemen yang dicari",
      "Menggunakan pencarian biner setelah sentinel"] },
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
  localStorage.setItem("kuis_sentinel_answers", JSON.stringify(answers));
  localStorage.setItem("kuis_sentinel_doubts", JSON.stringify(doubts));
  localStorage.setItem("kuis_sentinel_currentQuestion", currentQuestionIndex);
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
  const savedAnswers = localStorage.getItem("kuis_sentinel_answers");
  const savedDoubts = localStorage.getItem("kuis_sentinel_doubts");
  const savedIndex = localStorage.getItem("kuis_sentinel_currentQuestion");

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

const TOTAL_TIME = 30 * 60; // 30 menit dalam detik
const TIMER_KEY = 'kuis_sentinel_startTime';
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
const correctAnswers = ["Elemen tidak ditemukan di dalam daftar awal",
  "Menambahkan elemen sentinel ke dalam daftar",
  "Menambahkan elemen fiktif yang setara dengan elemen yang dicari",
  "Mencegah keluar dari batas indeks dengan menambahkan target sebagai elemen ekstra",
  "Sentinel ditempatkan tepat setelah elemen terakhir",
  "Pencarian tidak akan berjalan karena tidak ada elemen",
  "Mengembalikan indeks pertama elemen yang ditemukan",
  "11",
  "Menambahkan sentinel dinamis yang berubah sesuai elemen yang dicari",
  "Menempatkan elemen yang paling sering dicari di awal daftar",
];

function submitQuiz() {
  clearInterval(timer); // stop timer

  let score = 0;
  answers.forEach((answer, index) => {
      if (answer === correctAnswers[index]) {
          score += 10;
      }
  });

  // Hitung waktu pengerjaan dalam detik
  const startTime = parseInt(localStorage.getItem('kuis_sentinel_startTime'));
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
  fetch("/siswa/kuis-sentinel/submit", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
          nilai: score,
          waktu_pengerjaan: waktuPengerjaanFormatted, 
          jenis_tes: "kuis pencarian beruntun dengan sentinel"
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
      window.location.href = `/siswa/kuis-sentinel/hasil/${data.nilai_id}`;
  })
  .catch(async error => {
      const errorText = await error.message;
      console.error("Gagal mengirim nilai:", errorText);
      alert("Detail error: " + errorText);
  });

  localStorage.removeItem("kuis_sentinel_answers");
  localStorage.removeItem("kuis_sentinel_doubts");
  localStorage.removeItem("kuis_sentinel_currentQuestion");
  localStorage.removeItem("kuis_sentinel_startTime");

}

submitBtn.addEventListener('click', submitQuiz);



