const questions = [
    { question: "Tujuan utama dari algoritma pencarian linear adalah....", options: 
      ["Menyortir data secara efisien", 
      "Menemukan nilai tertentu dalam sebuah kumpulan data", 
      "Menghitung jumlah elemen dalam sebuah daftar",
      "Mengubah urutan elemen dalam daftar",
      "Menghapus elemen yang ditemukan"] },
      
    { question: "Cara kerja algoritma pencarian linear ialah....", options: 
      ["Membandingkan setiap elemen dalam daftar mulai dari yang terakhir", 
      "Membandingkan setiap elemen dalam daftar mulai dari elemen pertama hingga ditemukan nilai yang cocok",
      "Membandingkan elemen tengah daftar terlebih dahulu",
      "Menghitung jumlah elemen sebelum mulai mencari",
      "Mengurutkan daftar terlebih dahulu sebelum mencari"] },
      
      { question: "Algoritma pencarian linear cocok digunakan pada situasi berikut, kecuali....", options: 
        ["Data tidak terurut", 
        "Data terurut",
        "Jumlah elemen kecil",
        "Data sangat besar dan tidak terurut",
        "Data statis dan sudah terurut"] },

    { question: "Seorang siswa ingin mencari angka “27” dalam barisan berikut: <br>[10, 14, 19, 27, 33, 40] <br>Agar proses pencarian linear dapat dilakukan dengan benar, komponen sub-masalah yang perlu dianalisis terlebih dahulu adalah....", options: 
          ["Menghitung nilai tengah dari barisan", 
          "Menentukan apakah barisan sudah terurut", 
          "Menentukan elemen yang dicari dan memulai dari indeks pertama",
          "Membagi data menjadi dua bagian",
          "Menambahkan nilai sentinel ke barisan"] },

{ question: "Pada pencarian linear, yang perlu dilakukan untuk setiap elemen dalam daftar adalah....", options: 
      ["Menyimpan setiap elemen ke dalam memori baru", 
      "Mengganti urutan elemen dalam daftar",
      "Membandingkan elemen dengan elemen berikutnya",
      "Membandingkan elemen dengan nilai yang dicari",
      "Menyortir elemen sebelum pencarian"] },

{ question: "Diberikan barisan angka sebagai berikut: <br>[3, 8, 12, 5, 7, 14, 9]. <br>Carilah angka 7. Banyak perbandingan yang dilakukan untuk menemukan angka tersebut adalah....", options: 
      ["1", 
      "3",
      "5",
      "6",
      "7"] },
  
{ question: "Diberikan barisan angka sebagai berikut: <br>[15, 22, 8, 19, 31, 4]. <br>Apakah angka 22 ditemukan dalam barisan, dan banyak perbandingan yang diperlukan adalah....", options: 
      ["Tidak ditemukan, 6 perbandingan", 
      "Ditemukan, 1 perbandingan",
      "Ditemukan, 2 perbandingan",
      "Tidak ditemukan, 3 perbandingan",
      "Ditemukan, 5 perbandingan"] },

{ question: "Diberikan barisan angka sebagai berikut: <br>[3, 6, 1, 8, 10, 15]. <br>Carilah angka 8 sebagai target pencarian. Setelah berapa perbandingan angka tersebut ditemukan?", options: 
      ["2", 
      "3",
      "4",
      "5",
      "6"] },

{ question: "Diberikan barisan angka sebagai berikut: <br>[13, 29, 47, 55, 63, 78]. <br>Apakah angka 47 ada di dalam barisan? Jika ya, berapa banyak perbandingan yang diperlukan untuk menemukannya?", options: 
      ["Ya, 1 perbandingan", 
      "Ya, 2 perbandingan",
      "Ya, 3 perbandingan",
      "Tidak ditemukan",
      "Ya, 4 perbandingan"] },

{ question: "Diberikan barisan angka sebagai berikut: <br>[4, 9, 16, 25, 36, 49, 64]. <br>Cari angka 49. Banyak perbandingan yang diperlukan adalah....", options: 
      ["4", 
      "5",
      "6",
      "7",
      "3"] },
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
  localStorage.setItem("kuis_linear_answers", JSON.stringify(answers));
  localStorage.setItem("kuis_linear_doubts", JSON.stringify(doubts));
  localStorage.setItem("kuis_linear_currentQuestion", currentQuestionIndex);
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
  const savedAnswers = localStorage.getItem("kuis_linear_answers");
  const savedDoubts = localStorage.getItem("kuis_linear_doubts");
  const savedIndex = localStorage.getItem("kuis_linear_currentQuestion");

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
const TIMER_KEY = 'kuis_linear_startTime';
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
const correctAnswers = ["Menemukan nilai tertentu dalam sebuah kumpulan data",
  "Membandingkan setiap elemen dalam daftar mulai dari elemen pertama hingga ditemukan nilai yang cocok",
  "Data sangat besar dan tidak terurut",
  "Menentukan elemen yang dicari dan memulai dari indeks pertama",
  "Membandingkan elemen dengan nilai yang dicari",
  "5",
  "Ditemukan, 2 perbandingan",
  "4",
  "Ya, 3 perbandingan",
  "6",
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
  const startTime = parseInt(localStorage.getItem('kuis_linear_startTime'));
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
  fetch("/siswa/kuis-linear/submit", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
          nilai: score,
          waktu_pengerjaan: waktuPengerjaanFormatted, 
          jenis_tes: "kuis pencarian linear"
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
      window.location.href = `/siswa/kuis-linear/hasil/${data.nilai_id}`;
  })
  .catch(async error => {
      const errorText = await error.message;
      console.error("Gagal mengirim nilai:", errorText);
      alert("Detail error: " + errorText);
  });

  localStorage.removeItem("kuis_linear_answers");
  localStorage.removeItem("kuis_linear_doubts");
  localStorage.removeItem("kuis_linear_currentQuestion");
  localStorage.removeItem("kuis_linear_startTime");

}

submitBtn.addEventListener('click', submitQuiz);



