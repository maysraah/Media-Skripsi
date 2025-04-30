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

// Aktivitas Siswa
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