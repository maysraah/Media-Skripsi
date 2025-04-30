// Aktivitas Mengamati
const list = [3, 6, 7, 22, 32, 33, 53];
let currentIndex = 0;
let steps = 0;

function startSearch() {
    const target = parseInt(document.getElementById("target").value);
    if (isNaN(target)) return alert("Masukkan angka yang valid!");

    const container = document.getElementById("list-container");
    document.getElementById("result").innerHTML = "";
    currentIndex = 0;
    steps = 0;

    // Reset tampilan
    document.querySelectorAll('.list-item').forEach(item => {
        item.classList.remove('found', 'not-found', 'sentinel');
    });

    // Tambahkan sentinel di akhir array
    if (document.getElementById("sentinel-item")) {
        document.getElementById("sentinel-item").remove(); // hapus sentinel lama jika ada
    }

    const sentinelValue = target;
    const sentinelDiv = document.createElement("div");
    sentinelDiv.className = "list-item sentinel";
    sentinelDiv.id = "sentinel-item";
    sentinelDiv.innerText = sentinelValue;
    container.appendChild(sentinelDiv);

    // Tambahkan nilai sentinel ke array
    list.push(sentinelValue);

    const searchBox = document.getElementById("search-box");
    searchBox.innerText = target;
    searchBox.style.transform = `translateX(0px)`;
    searchBox.style.backgroundColor = 'yellow';

    searchStepSentinel(target);
}

function searchStepSentinel(target) {
    if (currentIndex < list.length) {
        steps++;
        const currentElement = currentIndex === list.length - 1 
            ? document.getElementById("sentinel-item") 
            : document.getElementById(`item${currentIndex}`);
        const searchBox = document.getElementById("search-box");

        // Hitung posisi offset
        const elementRect = currentElement.getBoundingClientRect();
        const listContainerRect = document.getElementById("list-container").getBoundingClientRect();
        const offsetX = elementRect.left - listContainerRect.left;
        searchBox.style.transform = `translateX(${offsetX}px)`;

        setTimeout(() => {
            if (list[currentIndex] === target) {
                if (currentIndex === list.length - 1) {
                    // Jika yang ditemukan sentinel -> tidak ditemukan
                    currentElement.classList.add('not-found');
                    searchBox.style.backgroundColor = 'red';
                    document.getElementById("result").innerHTML = `Angka <strong>${target}</strong> <span class="text-danger">tidak ada di dalam daftar angka asli.</span><br>
                    Angka <strong>${target}</strong> ditemukan pada indeks <strong>sentinel</strong> setelah <span class="text-success">${steps}</span> langkah.`;
                } else {
                    currentElement.classList.add('found');
                    searchBox.style.backgroundColor = 'green';
                    document.getElementById("result").innerHTML = `Angka <strong>${target}</strong> ditemukan dalam daftar angka asli setelah <span class="text-success">${steps}</span> langkah.`;
                }

                // Hapus sentinel dari array dan DOM setelah selesai
                list.pop();
                document.getElementById("sentinel-item")?.remove();

            } else {
                currentElement.classList.add('not-found');
                currentIndex++;
                setTimeout(() => {
                    searchBox.style.backgroundColor = 'yellow';
                    searchStepSentinel(target);
                }, 800);
            }
        }, 800);
    }
}

// Cek Jawaban Aktivitas Siswa 3
document.getElementById('cekJawaban').addEventListener('click', function () {
  // Ambil semua input
  const inputs = document.querySelectorAll('.inputJawaban');
  let allCorrect = true;

  inputs.forEach(input => {
      // Ambil jawaban yang benar dari atribut data-jawaban
      const correctAnswer = input.getAttribute('data-jawaban').toLowerCase();
      const userAnswer = input.value.trim().toLowerCase();

      // Cek apakah jawaban benar
      if (userAnswer === correctAnswer) {
          input.classList.remove('salah'); // Hapus tanda merah jika sebelumnya salah
      } else {
          input.classList.add('salah'); // Tambahkan tanda merah jika salah
          allCorrect = false;
      }
  });

  // Tampilkan SweetAlert berdasarkan hasil
  if (allCorrect) {
      Swal.fire({
          icon: 'success',
          title: 'Jawaban Benar!',
          text: 'Semua jawaban Anda sudah benar. Bagus sekali!',
          confirmButtonText: 'Lanjutkan'
      });
  } else {
      Swal.fire({
          icon: 'error',
          title: 'Jawaban Salah!',
          text: 'Periksa kembali jawaban yang berwarna merah.',
          confirmButtonText: 'Coba Lagi'
      });
  }
});
