// Aktivitas Mengamati Tujuan Pertama
const list = [3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 17, 20];
let currentIndex = 0;
let steps = 0;

function startSearch() {
    const target = parseInt(document.getElementById("target").value);
    if (isNaN(target)) return alert("Masukkan angka yang valid!");

    document.getElementById("search-box").innerText = target;
    document.getElementById("result").innerHTML = "";
    document.getElementById("narration").innerHTML = "";
    currentIndex = 0; 
    steps = 0;

    document.querySelectorAll('.list-item').forEach(item => {
        item.classList.remove('found', 'not-found');
    });

    document.getElementById("search-box").style.transform = `translateX(0px)`;
    searchStep(target);
}

function searchStep(target) {
    if (currentIndex < list.length) {
        steps++;
        const currentElement = document.getElementById(`item${currentIndex}`);
        const searchBox = document.getElementById("search-box");

        const elementRect = currentElement.getBoundingClientRect();
        const listContainerRect = document.getElementById("list-container").getBoundingClientRect();
        const offsetX = elementRect.left - listContainerRect.left;

        searchBox.style.transform = `translateX(${offsetX}px)`;

        // Tambahkan narasi langkah
        const narrationText = `Langkah ${steps}: Memeriksa angka ${list[currentIndex]} di indeks ke-${currentIndex + 1} dan membandingkan dengan angka yang dicari (${target})...`;
        const narrationDiv = document.getElementById("narration");
        narrationDiv.innerHTML += `<div>${narrationText}</div>`;
        narrationDiv.scrollTop = narrationDiv.scrollHeight;

        setTimeout(() => {
            if (list[currentIndex] === target) {
                currentElement.classList.add('found');
                searchBox.style.backgroundColor = 'green';
                document.getElementById("result").innerHTML = `Angka <strong>${target}</strong> ditemukan dalam daftar setelah <span class="text-success">${steps}</span> langkah.<br>Angka <strong>${target}</strong> ditemukan dalam daftar pada indeks ke-<span class="text-success">${currentIndex+1}</span>.<br>
                Berdasarkan tujuan pencariannya, hasil yang ditampilkan hanya akan mengembalikan indeks dari angka <strong>${target}</strong> yang pertama kali ditemukan, walaupun setelahnya masih ada angka <strong>${target}</strong> yang lain.`;
                narrationDiv.innerHTML += `<div>Angka <strong>${target}</strong> cocok dengan elemen di indeks ke-${currentIndex + 1}. Pencarian selesai!</div>`;
            } else {
                currentElement.classList.add('not-found');
                narrationDiv.innerHTML += `<div>Angka ${list[currentIndex]} tidak sama dengan ${target}, lanjut ke elemen berikutnya...</div>`;
                searchBox.style.backgroundColor = 'red';
                currentIndex++;
                setTimeout(() => {
                    searchBox.style.backgroundColor = 'yellow';
                    searchStep(target);
                }, 3000);
            }
        }, 1000);
    } else {
        document.getElementById("result").innerHTML = `Angka <strong>${target}</strong> tidak ditemukan setelah <span class="text-danger">${steps}</span> langkah.`;
    }
}

// Aktivitas Mengamati Tujuan Kedua
const list2 = [3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 17, 20];
let currentIndex2 = 0;
let steps2 = 0;
let foundIndexes = [];
let target2 = null;

function startSearch2() {
    target2 = parseInt(document.getElementById("target2").value);
    if (isNaN(target2)) return alert("Masukkan angka yang valid!");

    document.getElementById("search-box2").innerText = target2;
    document.getElementById("result2").innerHTML = "";
    document.getElementById("narration2").innerHTML = "";
    currentIndex2 = 0;
    steps2 = 0;
    foundIndexes = [];

    document.querySelectorAll('.list-item2').forEach(item => {
        item.classList.remove('found', 'not-found');
    });

    document.getElementById("search-box2").style.transform = `translateX(0px)`;
    searchStep2();
}

function searchStep2() {
    if (currentIndex2 < list2.length) {
        steps2++;
        const currentElement = document.getElementById(`item${currentIndex2}-2`);
        const searchBox = document.getElementById("search-box2");

        const elementRect = currentElement.getBoundingClientRect();
        const listContainerRect = document.getElementById("list-container2").getBoundingClientRect();
        const offsetX = elementRect.left - listContainerRect.left;

        searchBox.style.transform = `translateX(${offsetX}px)`;

        // Tambahkan narasi langkah
        const narrationText = `Langkah ${steps2}: Memeriksa angka ${list2[currentIndex2]} di indeks ke-${currentIndex2 + 1} dan membandingkan dengan angka yang dicari (${target2})...`;
        const narrationDiv = document.getElementById("narration2");
        narrationDiv.innerHTML += `<div>${narrationText}</div>`;
        narrationDiv.scrollTop = narrationDiv.scrollHeight;

        setTimeout(() => {
            if (list2[currentIndex2] === target2) {
                currentElement.classList.add('found');
                foundIndexes.push(currentIndex2);
                narrationDiv.innerHTML += `<div>Angka ${list[currentIndex2]} sama dengan ${target2}</div?`;
                searchBox.style.backgroundColor = 'green';
            } else {
                currentElement.classList.add('not-found');
                narrationDiv.innerHTML += `<div>Angka ${list[currentIndex2]} tidak sama dengan ${target2}, lanjut ke elemen berikutnya...</div>`;
                searchBox.style.backgroundColor = 'red';
            }

            currentIndex2++;

            setTimeout(() => {
                searchBox.style.backgroundColor = 'yellow';
                searchStep2();
            }, 3000);
        }, 1000);
    } else {
        if (foundIndexes.length > 0) {
            document.getElementById("result2").innerHTML =
                `Angka <strong>${target2}</strong> ditemukan sebanyak <strong>${foundIndexes.length}</strong> kali dalam daftar.<br>` +
                `Ditemukan pada indeks ke-<span class="text-success">${foundIndexes.map(i => i + 1).join(', ')}</span>.`;
        } else {
            document.getElementById("result2").innerHTML =
                `Angka <strong>${target2}</strong> tidak ditemukan setelah <span class="text-danger">${steps2}</span> langkah.`;
        }
    }
}

// Aktivitas Siswa 1
const soalList = document.querySelectorAll(".soal");
let currentIndexSoal = 0;

// Sembunyikan semua soal
soalList.forEach((soal) => {
  soal.classList.remove("active");
});

// Tampilkan soal pertama
showSoal(currentIndexSoal);

function showSoal(index) {
  soalList.forEach((soal) => soal.classList.remove("active"));
  soalList[index].classList.add("active");

  const soalContainer = soalList[index];
  const soalId = soalContainer.id;
  const info = soalContainer.querySelector(".soal-info");
  const prevBtn = soalContainer.querySelector(".prev-btn");
  const nextBtn = soalContainer.querySelector(".next-btn");
  const feedback = soalContainer.querySelector(".feedback");
  const answerButtons = soalContainer.querySelectorAll(".answer-btn");

  if (info) {
    info.textContent = `Soal ke-${index + 1} dari ${soalList.length}`;
  }

  if (prevBtn) {
    prevBtn.style.display = index === 0 ? "none" : "inline-block";
  }

  // Ambil jawaban tersimpan dari localStorage
  const savedAnswer = localStorage.getItem(soalId);
  if (savedAnswer) {
    answerButtons.forEach((btn) => {
      if (btn.textContent === savedAnswer) {
        // Highlight jawaban tersimpan
        btn.style.border = "2px solid #011B78";
        btn.style.backgroundColor = "#e0edff";

        const isCorrect = btn.getAttribute("data-benar") === "true";
        feedback.style.display = "block";

        if (isCorrect) {
          const explanation = btn.getAttribute("data-feedback") || "Jawaban kamu benar!";
          feedback.innerHTML = `
            <div style="
              background-color: #d4edda;
              color: #155724;
              border: 1px solid #c3e6cb;
              padding: 10px;
              border-radius: 5px;">
              <strong>Benar!</strong> ${explanation}
            </div>`;
          nextBtn.disabled = false;
          nextBtn.style.display = "inline-block";
        } else {
          feedback.innerHTML = `
            <div style="
              background-color: #f8d7da;
              color: #721c24;
              border: 1px solid #f5c6cb;
              padding: 10px;
              border-radius: 5px;">
              <strong>Salah.</strong> Silakan coba lagi dan perhatikan posisi elemen dalam daftar.
            </div>`;
        }
      }
    });
  }
}

document.querySelectorAll(".answer-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    const soalContainer = btn.closest(".soal");
    const soalId = soalContainer.id;
    const isCorrect = btn.getAttribute("data-benar") === "true";
    const feedback = soalContainer.querySelector(".feedback");
    const lanjutBtn = soalContainer.querySelector(".next-btn");

    // Simpan jawaban ke localStorage
    localStorage.setItem(soalId, btn.textContent);

    // Highlight tombol yang dipilih
    // btn.style.border = "2px solid #011B78";
    // btn.style.backgroundColor = "#e0edff";

    feedback.style.display = "block";
    if (isCorrect) {
      const explanation = btn.getAttribute("data-feedback") || "Jawaban kamu benar!";
      feedback.innerHTML = `
        <div style="
          background-color: #d4edda;
          color: #155724;
          border: 1px solid #c3e6cb;
          padding: 10px;
          border-radius: 5px;">
          <strong>Benar!</strong> ${explanation}
        </div>`;
      lanjutBtn.disabled = false;
      lanjutBtn.style.display = "inline-block";
    } else {
      feedback.innerHTML = `
        <div style="
          background-color: #f8d7da;
          color: #721c24;
          border: 1px solid #f5c6cb;
          padding: 10px;
          border-radius: 5px;">
          <strong>Salah.</strong> Silakan coba lagi dan perhatikan posisi elemen dalam daftar.
        </div>`;
    }
  });
});

document.querySelectorAll(".prev-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    if (currentIndexSoal > 0) {
      currentIndexSoal--;
      showSoal(currentIndexSoal);
      window.scrollTo({
        top: soalList[currentIndexSoal].offsetTop - 20,
        behavior: "smooth"
      });
    }
  });
});

document.querySelectorAll(".next-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    if (currentIndexSoal + 1 < soalList.length) {
      currentIndexSoal++;
      showSoal(currentIndexSoal);
      window.scrollTo({
        top: soalList[currentIndexSoal].offsetTop - 20,
        behavior: "smooth"
      });
    } else {
      Swal.fire({
        title: "Selesai!",
        text: "Kamu sudah menyelesaikan semua soal! Kerja bagus!",
        icon: "success"
      }).then(() => {
        document.getElementById("section-2").style.display = "block";
      });
    }
  });
});

// Cek Jawaban Soal Motif Tikar Purun
function checkAnswers() {
    const indexAnswer = document.getElementById('indexInput').value;
    const stepsAnswer = document.getElementById('stepsInput').value;
    
    let allCorrect = true;

    // Cek jawaban pertama
    if (indexAnswer !== "3") {
        allCorrect = false;
        document.getElementById('indexInput').classList.add('incorrect');
    } else {
        document.getElementById('indexInput').classList.remove('incorrect');
    }

    // Cek jawaban kedua
    if (stepsAnswer !== "3") {
        allCorrect = false;
        document.getElementById('stepsInput').classList.add('incorrect');
    } else {
        document.getElementById('stepsInput').classList.remove('incorrect');
    }

    // Menampilkan SweetAlert sesuai dengan hasil
    if (allCorrect) {
        Swal.fire({
            title: 'Selamat!',
            text: 'Semua jawaban benar! Bagus Sekali!',
            icon: 'success',
            confirmButtonText: 'Ok'
        });
    } else {
        Swal.fire({
            title: 'Ada yang salah!',
            text: 'Periksa kembali jawaban Anda. Ayo semangat!!',
            icon: 'error',
            confirmButtonText: 'Ok'
        });
    }
}