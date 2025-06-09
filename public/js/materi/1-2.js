// DEKOMPOSISI
const correctAnswers = {
  Topik: ["A"],
  DDC: ["B"],
  Lokasi: ["C", "E"],
  Rak: ["D", "F"]
};

const dekomItems = document.querySelectorAll('.drag-dekom');
const dekomZones = document.querySelectorAll('.drop-dekom');

// Drag events Dekomposisi

dekomItems.forEach(item => {
  item.addEventListener('dragstart', e => {
    e.dataTransfer.setData('text/plain', item.dataset.id);
  });
});

dekomZones.forEach(zone => {
  zone.addEventListener('dragover', e => e.preventDefault());
  zone.addEventListener('drop', e => {
    e.preventDefault();
    const id = e.dataTransfer.getData('text/plain');
    const dragged = document.querySelector(`.drag-dekom[data-id="${id}"]`);
    if (dragged) zone.appendChild(dragged);
  });
});

function cekJawaban() {
  let result = [];
  let benarSemua = true;
  dekomZones.forEach(zone => {
    const group = zone.dataset.group;
    const droppedItems = zone.querySelectorAll('.drag-dekom');
    let correct = 0;
    droppedItems.forEach(item => {
      if (correctAnswers[group].includes(item.dataset.id)) correct++;
    });
    const total = correctAnswers[group].length;
    if (correct !== total) benarSemua = false;
    result.push(`${group}: ${correct}/${total} benar.`);
  });
  Swal.fire({
    title: benarSemua ? '✅ Jawaban Benar!' : '⚠️ Coba Lagi!',
    html: result.join('<br>'),
    icon: benarSemua ? 'success' : 'warning'
  });
}

function resetJawaban() {
  const activityList = document.getElementById('activity-list');
  const dekomItems = document.querySelectorAll('#dekomposisi-area .drag-dekom');
  dekomItems.forEach(item => activityList.appendChild(item));
}

function showInfo() {
  alert("📘 Info Kode DDC:\n\n000 – Karya Umum\n100 – Filsafat\n200 – Agama\n300 – Ilmu Sosial\n400 – Bahasa\n500 – Ilmu Pengetahuan Alam\n    510 – Matematika\n    540 – Kimia\n    550 – Ilmu Bumi\n600 – Teknologi\n700 – Seni dan Rekreasi\n800 – Sastra\n900 – Sejarah dan Geografi");
}

// Pengenalan Pola
function checkPattern() {
  const jawaban = document.getElementById("polaJawaban").value;
  if (!jawaban) {
    Swal.fire('Pilih jawaban!', 'Kamu harus memilih salah satu lokasi.', 'warning');
    return;
  }

  if (jawaban === "540") {
    Swal.fire('Benar!', 'Kamu berhasil mengenali polanya! 📚 Buku "Kimia Dasar" berada di Rak 540 Bagian Kiri.', 'success');
    // document.getElementById("abstraksi").style.display = "block";
  } else {
    Swal.fire('Kurang tepat!', 'Coba amati lagi pola dari judul dan lokasi rak.', 'error');
  }
}

// Abstraksi
function checkAbstraction() {
  const benar = ["Kategori", "Kode Katalog", "Judul Buku"];
  const dipilih = [];
  document.querySelectorAll('input[type=checkbox]:checked').forEach(cb => dipilih.push(cb.value));
  const salah = dipilih.filter(d => !benar.includes(d)).length;
  const kurang = benar.filter(d => !dipilih.includes(d)).length;
  if (salah === 0 && kurang === 0) {
    Swal.fire('Tepat!', 'Kamu hanya fokus pada informasi yang relevan untuk mencari buku Kimia Dasar karya Hardjono Sastrohamidjojo!', 'success');
    // document.getElementById("algoritma").style.display = "block";
  } else {
    Swal.fire('Oops!', 'Beberapa informasi tidak perlu kamu pilih. Coba lagi!', 'error');
  }
}

// ALGORITMA
const correctSteps = [
  'Temukan bagian SAINS di peta perpustakaan',
  'Cari rak bertanda "540"',
  'Telusuri judul sampai menemukan buku "Kimia Dasar" karya Hardjono Sastrohamidjojo'
];

function allowDropAlgo(ev) {
  ev.preventDefault();
}

function dragAlgo(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function dropAlgo(ev) {
  ev.preventDefault();
  const data = ev.dataTransfer.getData("text");
  const dragged = document.getElementById(data);
  const dropzone = ev.currentTarget;
  if (dragged && dropzone.classList.contains("drop-algo")) {
    dropzone.appendChild(dragged);
  }
}

function checkAlgorithm() {
  const dropItems = document.querySelectorAll("#algo-dropzone .drag-algo");
  const userSteps = Array.from(dropItems).map(item => item.textContent.trim());
  const isCorrect = JSON.stringify(userSteps) === JSON.stringify(correctSteps);
  Swal.fire({
    icon: isCorrect ? "success" : "error",
    title: isCorrect ? "✅ Urutan Benar!" : "❌ Urutan Salah",
    text: isCorrect ? "Langkah-langkah sudah benar!" : "Coba cek kembali urutan langkahmu ya."
  });
}

function resetAlgorithm() {
  const dropzone = document.getElementById("algo-dropzone");
  const source = document.getElementById("algo-source");
  const draggedItems = dropzone.querySelectorAll(".drag-algo");
  draggedItems.forEach(item => source.appendChild(item));
}