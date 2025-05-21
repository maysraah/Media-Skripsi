// Aktivitas Mengamati 
let list = [3, 5, 7, 9, 11, 13, 15, 17, 19, 21]; // Pastikan data terurut untuk binary search
let steps = 0;

function startBinarySearch() {
    const target = parseInt(document.getElementById("target").value);
    if (isNaN(target)) return alert("Masukkan angka yang valid!");

    document.getElementById("search-box").innerText = target;
    document.getElementById("result").innerHTML = "";
    
    document.querySelectorAll('.list-item').forEach(item => {
        item.classList.remove('found', 'not-found');
    });

    document.getElementById("search-box").style.transform = `translateX(0px)`;
    
    steps = 0;
    binarySearch(target, 0, list.length - 1); // Perbaikan indeks
}

function binarySearch(target, left, right) {
    if (left > right) {
        document.getElementById("result").innerHTML = 
            `Angka <strong>${target}</strong> tidak ditemukan setelah 
            <span class="text-danger">${steps}</span> langkah.`;
        return;
    }

    steps++;
    let mid = Math.floor((left + right) / 2);
    const currentElement = document.getElementById(`item${mid}`);
    const searchBox = document.getElementById("search-box");

    // Pastikan elemen ditemukan sebelum mengakses propertinya
    if (!currentElement) {
        console.error(`Elemen dengan ID item${mid} tidak ditemukan`);
        return;
    }

    // Ambil posisi elemen tengah relatif terhadap container
    const elementRect = currentElement.getBoundingClientRect();
    const listContainerRect = document.getElementById("list-container").getBoundingClientRect();
    const offsetX = elementRect.left - listContainerRect.left;

    // Geser kotak pencarian ke posisi elemen tengah
    searchBox.style.transform = `translateX(${offsetX}px)`;

    setTimeout(() => {
        if (list[mid] === target) { 
            currentElement.classList.add('found');
            searchBox.style.backgroundColor = 'green';
            document.getElementById("result").innerHTML = 
                `Angka <strong>${target}</strong> ditemukan dalam daftar setelah 
                <span class="text-success">${steps}</span> langkah.<br>Cobalah untuk melakukan pencarian dengan angka lain!`;
        } else {
            currentElement.classList.add('not-found');
            searchBox.style.backgroundColor = 'red';
            setTimeout(() => {
                searchBox.style.backgroundColor = 'yellow';

                if (list[mid] < target) {
                    binarySearch(target, mid + 1, right); // Cari di bagian kanan
                } else {
                    binarySearch(target, left, mid - 1); // Cari di bagian kiri
                }
            }, 1000);
        }
    }, 1000);
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