// Dekomposisi
const komponenData = [
      { text: 'Melihat denah perpustakaan', id: 'lokasi' },
      { text: 'Mengidentifikasi pintu masuk terdekat', id: 'lokasi' },
      { text: 'Menentukan jenis buku yang dicari', id: 'kategori' },
      { text: 'Mengklasifikasikan buku berdasarkan subjek', id: 'kategori' },
      { text: 'Mencari rak bertanda SAINS', id: 'telusur' },
      { text: 'Menelusuri setiap baris rak', id: 'telusur' },
      { text: 'Mencatat call number buku', id: 'informasi' },
      { text: 'Membaca sinopsis buku', id: 'informasi' },
      { text: 'Memastikan kesesuaian judul buku', id: 'informasi' },
    ];

    let draggedCard = null;

    function renderCards() {
      const container = document.getElementById('card-container');
      container.innerHTML = '';
      komponenData.forEach(({ text, id }) => {
        const card = document.createElement('div');
        card.className = 'card p-2 draggable';
        card.textContent = text;
        card.setAttribute('draggable', true);
        card.dataset.id = id;

        card.addEventListener('dragstart', () => {
          draggedCard = card;
          card.classList.add('dragging');
        });

        card.addEventListener('dragend', () => {
          draggedCard = null;
          card.classList.remove('dragging');
        });

        container.appendChild(card);
      });
    }

    function resetJawaban() {
      document.querySelectorAll('.dropzone').forEach(zone => zone.innerHTML = '<strong>' + zone.querySelector('strong').textContent + '</strong>');
      renderCards();
    }

    function cekJawaban() {
      const kunci = {
        lokasi: ['lokasi', 'lokasi'],
        kategori: ['kategori', 'kategori'],
        telusur: ['telusur', 'telusur'],
        informasi: ['informasi', 'informasi', 'informasi']
      };

      let benar = true;

      for (const [kategori, ids] of Object.entries(kunci)) {
        const zona = document.querySelector(`.dropzone[data-category='${kategori}']`);
        const items = [...zona.querySelectorAll('.card')];
        const itemIDs = items.map(item => item.dataset.id);
        const cek = ids.every((id, index) => itemIDs[index] === id);
        if (!cek || items.length !== ids.length) {
          benar = false;
          break;
        }
      }

      if (benar) {
        Swal.fire({
          icon: 'success',
          title: 'Benar!',
          text: 'Semua komponen sudah ditempatkan dengan tepat.'
        });
        document.getElementById("resultDecomposition").style.display = "block";
        document.getElementById("pengenalan-pola").style.display = "block";
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Beberapa komponen belum pada tempat yang benar.'
        });
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      renderCards();
      document.querySelectorAll('.dropzone, #card-container').forEach(zone => {
        zone.addEventListener('dragover', e => e.preventDefault());
        zone.addEventListener('drop', () => {
          if (draggedCard) zone.appendChild(draggedCard);
        });
      });
    });

// Pengenalan Pola
function checkPattern() {
  const answer = document.getElementById('patternSelect').value;
  if (!answer) {
    Swal.fire('Pilih jawaban!', 'Kamu harus memilih salah satu lokasi.', 'warning');
    return;
  }

  localStorage.setItem('patternAnswer', answer);

  if (answer === "rak bagian kiri") {
    Swal.fire('Benar!', 'Kamu berhasil mengenali polanya! 📚 Buku Rahasia Sains Alam berada di Rak Sains Bagian Kiri', 'success');
    document.getElementById("abstraksi").style.display = "block";
  } else {
    Swal.fire('Kurang tepat!', 'Coba amati lagi pola dari judul dan lokasi rak.', 'error');
  }
}

// Abstraksi
function checkAbstraction() {
  const checks = document.querySelectorAll('#ab1, #ab2, #ab3, #ab4, #ab5');
  const selected = Array.from(checks).filter(c => c.checked).map(c => c.value);

  localStorage.setItem('abstractionAnswer', JSON.stringify(selected));

  const correct = ['kategori', 'kode katalog', 'judul'];
  const isCorrect = selected.length === correct.length && correct.every(item => selected.includes(item));

  if (isCorrect) {
    Swal.fire('Tepat!', 'Kamu hanya fokus pada informasi yang relevan untuk mencari buku Rahasia Sains Alam!', 'success');
    document.getElementById("algoritma").style.display = "block";
  } else {
    Swal.fire('Oops!', 'Beberapa informasi tidak perlu kamu pilih. Coba lagi!', 'error');
  }
}

// Algoritma
const algoCorrect = [
  "Temukan bagian Sains di peta perpustakaan",
  "Cari rak bertanda “SAINS”",
  "Telusuri bagian abjad R di rak",
  "Periksa setiap judul sampai menemukan buku"
];

function enableDragEvents(container) {
  container.querySelectorAll('.draggable').forEach(item => {
    item.addEventListener('dragstart', e => {
      e.dataTransfer.setData('text/plain', e.target.innerText);
    });
  });
}

enableDragEvents(document);

document.getElementById('algo-dropzone').addEventListener('dragover', e => {
  e.preventDefault();
});

document.getElementById('algo-dropzone').addEventListener('drop', e => {
  e.preventDefault();
  const text = e.dataTransfer.getData('text/plain');
  const newItem = document.createElement('li');
  newItem.className = 'list-group-item draggable';
  newItem.innerText = text;
  document.getElementById('algo-dropzone').appendChild(newItem);
  removeAlgoItem(text);
  enableDragEvents(document.getElementById('algo-dropzone'));
  saveAlgoProgress();
});

function removeAlgoItem(text) {
  const items = document.querySelectorAll('#algo-choices .list-group-item');
  items.forEach(item => {
    if (item.innerText === text) item.remove();
  });
}

function checkAlgorithm() {
  const answers = Array.from(document.querySelectorAll('#algo-dropzone .list-group-item'))
    .map(el => el.innerText.trim());

  localStorage.setItem('algorithmAnswer', JSON.stringify(answers));

  const isCorrect = answers.length === algoCorrect.length &&
                    answers.every((val, idx) => val === algoCorrect[idx]);

  if (isCorrect) {
    Swal.fire('Mantap!', 'Algoritmamu tersusun rapi dan efisien untuk mencari buku Rahasia Sains Alam! 🔍📘', 'success');
  } else {
    Swal.fire('Belum tepat!', 'Algoritma kamu perlu ditata ulang.', 'error');
  }
}

function saveAlgoProgress() {
  const answers = Array.from(document.querySelectorAll('#algo-dropzone .list-group-item'))
    .map(el => el.innerText);
  localStorage.setItem('algorithmAnswer', JSON.stringify(answers));
}

function resetAlgorithm() {
  document.getElementById('algo-dropzone').innerHTML = '';
  localStorage.removeItem('algorithmAnswer');

  // Reset ulang pilihan yang bisa di-drag
  const choices = [
    "Temukan bagian Sains di peta perpustakaan",
    "Periksa setiap judul sampai menemukan buku",
    "Cari rak bertanda “SAINS”",
    "Telusuri bagian abjad R di rak"
  ];

  const choiceContainer = document.getElementById('algo-choices');
  choiceContainer.innerHTML = '';
  choices.forEach(text => {
    const li = document.createElement('li');
    li.className = 'list-group-item draggable';
    li.setAttribute('draggable', 'true');
    li.innerText = text;
    choiceContainer.appendChild(li);
  });

  enableDragEvents(choiceContainer);
}