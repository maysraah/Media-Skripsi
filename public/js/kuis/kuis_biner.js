const questions = [
    { question: "Syarat utama agar algoritma pencarian biner dapat digunakan adalah....", options: 
      ["Data harus diacak", 
      "Data harus terurut", 
      "Data harus dalam urutan menurun",
      "Data harus dalam urutan acak tapi dengan elemen unik",
      "Data harus dalam bentuk matriks"] },
      
    { question: "Jika nilai yang dicari lebih kecil dari elemen di tengah pada algoritma pencarian biner, yang harus dilakukan selanjutnya adalah....", options: 
      ["Lanjutkan pencarian ke setengah kiri", 
      "Lanjutkan pencarian ke setengah kanan",
      "Hentikan pencarian",
      "Cari di seluruh daftar",
      "Urutkan ulang datanya"] },
      
      { question: "Keuntungan utama dari pencarian biner dibandingkan pencarian berurutan/linear adalah....", options: 
        ["Tidak memerlukan pengurutan data", 
        "Lebih sederhana dalam implementasi",
        "Dapat diterapkan pada data yang belum diurutkan",
        "Lebih efisien dalam waktu pencarian pada data yang besar",
        "Memeriksa semua elemen data satu per satu"] },

    { question: "Jika pencarian biner tidak menemukan nilai yang dicari, hasil yang biasanya dikembalikan yaitu....", options: 
          ["Indeks nilai terdekat", 
          "Indeks terakhir yang diperiksa", 
          "Indeks -1 atau indikasi bahwa nilai tidak ditemukan",
          "Indeks pertama dalam daftar",
          "Indeks terbesar dalam daftar"] },

{ question: "Prinsip kerja algoritma pencarian biner adalah....", options: 
      ["Rekursi", 
      "Membandingkan setiap elemen satu per satu",
      "Membagi dan menaklukkan (Divide and Conquer)",
      "Iterasi tunggal",
      "Pengurutan"] },

{ question: "Yang dimaksud dengan indeks tengah dalam pencarian biner adalah....", options: 
      ["Elemen pertama dalam daftar", 
      "Elemen terakhir dalam daftar",
      "Elemen terbesar dari semua elemen",
      "Elemen yang lebih kecil dari semua elemen lain",
      "Elemen tengah dari bagian yang tersisa"] },
  
{ question: "Hal yang dapat menggagalkan pencarian biner adalah....", options: 
      ["Daftar tidak terurut", 
      "Daftar memiliki elemen duplikat",
      "Daftar berisi bilangan negatif",
      "Daftar memiliki elemen dengan nilai yang sama",
      "Daftar memiliki lebih dari satu elemen"] },

{ question: "Jika nilai yang dicari lebih besar dari elemen di tengah pada algoritma pencarian biner, yang harus dilakukan selanjutnya adalah....", options: 
      ["Cek bagian kanan dari daftar", 
      "Cek bagian kiri dari daftar",
      "Hentikan pencarian",
      "Mulai pencarian dari awal",
      "Lakukan pencarian berurutan"] },

{ question: "Diberikan daftar terurut berikut:<br>5, 10, 15, 20, 25, 30, 35, 40, 45, 50<br>Menggunakan algoritma pencarian biner, langkah pertama adalah menentukan indeks tengah. Setelah itu, bandingkan nilai tengah dengan nilai target, yaitu <b>20</b>. Nilai tengahnya adalah....", options: 
      ["15", 
      "20",
      "25",
      "30",
      "35"] },

{ question: "Diberikan daftar terurut berikut:<br>10, 20, 30, 40, 50, 60, 70, 80, 90, 100<br>Gunakan algoritma pencarian biner untuk mencari nilai <b>70</b>. Setelah membandingkan nilai tengah pertama dengan target, langkah berikutnya adalah....", options: 
      ["Lanjutkan pencarian ke bagian kiri daftar", 
      "Lanjutkan pencarian ke bagian kanan daftar",
      "Nilai ditemukan di tengah pertama",
      "Urutkan kembali daftar",
      "Hentikan pencarian karena nilai tidak ditemukan"] },
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
  localStorage.setItem("kuis_biner_answers", JSON.stringify(answers));
  localStorage.setItem("kuis_biner_doubts", JSON.stringify(doubts));
  localStorage.setItem("kuis_biner_currentQuestion", currentQuestionIndex);
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
  const savedAnswers = localStorage.getItem("kuis_biner_answers");
  const savedDoubts = localStorage.getItem("kuis_biner_doubts");
  const savedIndex = localStorage.getItem("kuis_biner_currentQuestion");

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

const TOTAL_TIME = 50 * 60; // 50 menit dalam detik
const TIMER_KEY = 'kuis_biner_startTime';
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
const correctAnswers = ["Data harus terurut",
  "Lanjutkan pencarian ke setengah kiri",
  "Lebih efisien dalam waktu pencarian pada data yang besar",
  "Indeks -1 atau indikasi bahwa nilai tidak ditemukan",
  "Membagi dan menaklukkan (Divide and Conquer)",
  "Elemen tengah dari bagian yang tersisa",
  "Daftar tidak terurut",
  "Cek bagian kanan dari daftar",
  "25",
  "Lanjutkan pencarian ke bagian kanan daftar",
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
  const startTime = parseInt(localStorage.getItem('kuis_biner_startTime'));
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
  fetch("/siswa/kuis-biner/submit", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
          nilai: score,
          waktu_pengerjaan: waktuPengerjaanFormatted, 
          jenis_tes: "kuis pencarian biner"
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
      window.location.href = `/siswa/kuis-biner/hasil/${data.nilai_id}`;
  })
  .catch(async error => {
      const errorText = await error.message;
      console.error("Gagal mengirim nilai:", errorText);
      alert("Detail error: " + errorText);
  });

  localStorage.removeItem("kuis_biner_answers");
  localStorage.removeItem("kuis_biner_doubts");
  localStorage.removeItem("kuis_biner_currentQuestion");
  localStorage.removeItem("kuis_biner_startTime");

}

submitBtn.addEventListener('click', submitQuiz);



