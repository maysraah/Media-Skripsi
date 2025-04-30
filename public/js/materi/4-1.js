// Aktivitas Mengamati Tujuan Pertama
const list = [3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 17, 20];
let currentIndex = 0;
let steps = 0;

function startSearch() {
    const target = parseInt(document.getElementById("target").value);
    if (isNaN(target)) return alert("Masukkan angka yang valid!");

    document.getElementById("search-box").innerText = target;
    document.getElementById("result").innerHTML = "";
    currentIndex = 0; 
    steps = 0;

    document.querySelectorAll('.list-item').forEach(item => {
        item.classList.remove('found', 'not-found');
    });

    document.getElementById("search-box").style.transform = `translateX(0px)`; // Mulai dari elemen pertama
    searchStep(target);
}

function searchStep(target) {
    if (currentIndex < list.length) {
        steps++;
        const currentElement = document.getElementById(`item${currentIndex}`);
        const searchBox = document.getElementById("search-box");

        // Ambil posisi elemen yang dibandingkan
        const elementRect = currentElement.getBoundingClientRect();
        const listContainerRect = document.getElementById("list-container").getBoundingClientRect();

        // Hitung pergeseran berdasarkan posisi relatif dalam container
        const offsetX = elementRect.left - listContainerRect.left;

        // Pindahkan kotak pencarian ke atas elemen yang dibandingkan
        searchBox.style.transform = `translateX(${offsetX}px)`;

        setTimeout(() => {
            if (list[currentIndex] === target) {
                currentElement.classList.add('found');
                searchBox.style.backgroundColor = 'green';
                document.getElementById("result").innerHTML = `Angka <strong>${target}</strong> ditemukan dalam daftar setelah <span class="text-success">${steps}</span> langkah.<br>Angka <strong>${target}</strong> ditemukan dalam daftar pada indeks ke-<span class="text-success">${currentIndex+1}</span>.<br>
                Berdasarkan tujuan pencariannya, hasil yang ditampilkan hanya akan mengembalikan indeks dari angka <strong>${target}</strong> yang pertama kali ditemukan, walaupun setelahnya masih ada angka <strong>${target}</strong> yang lain.`;
            } else {
                currentElement.classList.add('not-found');
                searchBox.style.backgroundColor = 'red';
                currentIndex++;
                setTimeout(() => {
                    searchBox.style.backgroundColor = 'yellow';
                    searchStep(target);
                }, 1000);
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
let target2 = null; // global

function startSearch2() {
    target2 = parseInt(document.getElementById("target2").value); // global
    if (isNaN(target2)) return alert("Masukkan angka yang valid!");

    document.getElementById("search-box2").innerText = target2;
    document.getElementById("result2").innerHTML = "";
    currentIndex2 = 0;
    steps2 = 0;
    foundIndexes = [];

    document.querySelectorAll('.list-item2').forEach(item => {
        item.classList.remove('found', 'not-found');
    });

    document.getElementById("search-box2").style.transform = `translateX(0px)`;
    searchStep2(); // tidak perlu kirim parameter lagi
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

        setTimeout(() => {
            if (list2[currentIndex2] === target2) {  // pakai target2 global
                currentElement.classList.add('found');
                foundIndexes.push(currentIndex2);
                searchBox.style.backgroundColor = 'green';
            } else {
                currentElement.classList.add('not-found');
                searchBox.style.backgroundColor = 'red';
            }

            currentIndex2++;

            setTimeout(() => {
                searchBox.style.backgroundColor = 'yellow';
                searchStep2();
            }, 800);
        }, 800);
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
};

// Aktivitas Siswa 1
const soalList = document.querySelectorAll(".soal");
let currentIndexSoal = 0;

// Sembunyikan semua soal terlebih dahulu
soalList.forEach((soal, index) => {
    soal.classList.remove("active");
  });
  
// Tampilkan soal pertama
soalList[0].classList.add("active");

// Tambahkan event listener pada semua tombol jawaban
document.querySelectorAll(".answer-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      const isCorrect = btn.getAttribute("data-benar") === "true";
  
      if (isCorrect) {
        Swal.fire({
          title: "Benar!",
          text: "Jawaban kamu tepat!",
          icon: "success",
          showConfirmButton: false,
          timer: 1500
        });
  
        // Tampilkan soal berikutnya setelah delay
        setTimeout(() => {
          if (currentIndexSoal + 1 < soalList.length) {
            soalList[currentIndexSoal].classList.remove("active");
            currentIndexSoal++;
            soalList[currentIndexSoal].classList.add("active");
            window.scrollTo({
              top: soalList[currentIndexSoal].offsetTop - 20,
              behavior: "smooth"
            });
          } else {
            Swal.fire({
              title: "Selesai!",
              text: "Kamu sudah menyelesaikan semua soal!",
              icon: "success",
              showConfirmButton: false,
              timer: 2000
            }).then(() => {
                document.getElementById("section-2").style.display = "block";
            });
          }
        }, 1500); // sama dengan timer Swal agar sinkron
      } else {
        Swal.fire({
          title: "Salah!",
          text: "Coba lagi ya!",
          icon: "error",
          confirmButtonText: "Coba Lagi"
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
            text: 'Semua jawaban benar!',
            icon: 'success',
            confirmButtonText: 'Ok'
        });
    } else {
        Swal.fire({
            title: 'Ada yang salah!',
            text: 'Periksa kembali jawaban Anda.',
            icon: 'error',
            confirmButtonText: 'Ok'
        });
    }
}