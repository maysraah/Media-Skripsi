// Drag n Drop Dekomposisi (tidak diubah)
const nameItems = document.querySelectorAll('.name-item');
const dropzones = document.querySelectorAll('.dropzone');

nameItems.forEach(item => {
    item.addEventListener('dragstart', dragStart);
    item.addEventListener('dragend', dragEnd);
});

dropzones.forEach(zone => {
    zone.addEventListener('dragover', dragOver);
    zone.addEventListener('dragenter', dragEnter);
    zone.addEventListener('dragleave', dragLeave);
    zone.addEventListener('drop', drop);
});

function dragStart(event) {
    event.dataTransfer.setData('text', event.target.id);
    event.target.style.opacity = "0.5";
}

function dragEnd(event) {
    event.target.style.opacity = "1";
}

function dragOver(event) {
    event.preventDefault();
}

function dragEnter(event) {
    event.preventDefault();
    if (event.currentTarget.classList.contains('dropzone')) {
        event.currentTarget.classList.add('hovered');
    }
}

function dragLeave(event) {
    if (event.currentTarget.classList.contains('dropzone')) {
        event.currentTarget.classList.remove('hovered');
    }
}

function drop(event) {
    event.preventDefault();
    event.currentTarget.classList.remove('hovered');
    const id = event.dataTransfer.getData('text');
    const item = document.getElementById(id);
    if (event.currentTarget.classList.contains('dropzone')) {
        event.currentTarget.appendChild(item);
    }
    saveDragDropState();
}

function saveDragDropState() {
    const state = {};
    document.querySelectorAll('.dropzone').forEach(zone => {
        const items = Array.from(zone.children)
            .filter(child => child.classList.contains('name-item'))
            .map(child => child.id);
        state[zone.id] = items;
    });
    localStorage.setItem("dragDropState", JSON.stringify(state));
}

function loadDragDropState() {
    const saved = localStorage.getItem("dragDropState");
    if (!saved) return;
    const state = JSON.parse(saved);
    Object.keys(state).forEach(zoneId => {
        const zone = document.getElementById(zoneId);
        if (!zone) return;
        state[zoneId].forEach(itemId => {
            const item = document.getElementById(itemId);
            if (item) zone.appendChild(item);
        });
    });
}

function validate() {
    const correctGroups = {
        'group-10-20': ['Bayam - Rp10.000', 'Pepaya - Rp10.000', 'Sukun - Rp10.000', 'Ampalam - Rp15.000', 'Mangga - Rp15.000', 'Kentang - Rp20.000', 'Tomat - Rp20.000'],
        'group-21-30': ['Kelapa - Rp25.000'],
        'group-31-40': ['Cabai - Rp40.000'],
        'group-41': ['Durian - Rp80.000'],
    };

    let isCorrect = true;

    for (const [groupId, expectedItems] of Object.entries(correctGroups)) {
        const zone = document.getElementById(groupId);
        const actualItems = Array.from(zone.children)
            .filter(child => child.classList.contains('name-item'))
            .map(child => child.textContent.trim())
            .sort();
        if (actualItems.length !== expectedItems.length ||
            !expectedItems.sort().every((val, idx) => val === actualItems[idx])) {
            isCorrect = false;
        }
    }

    if (isCorrect) {
        localStorage.setItem("kelompokBenar", "true");
        Swal.fire('Berhasil!', 'Jawaban Anda benar! Bagus sekali!', 'success').then(() => {
            document.getElementById("pengenalan-pola").style.display = "block";
        });
    } else {
        Swal.fire('Coba Lagi!', 'Masih ada kesalahan. Yuk perbaiki!!', 'error');
    }
}

// Saat halaman dimuat
window.addEventListener("DOMContentLoaded", () => {
    loadDragDropState();
    if (localStorage.getItem("kelompokBenar") === "true") {
        document.getElementById("pengenalan-pola").style.display = "block";
    }
});

// Pengenalan Pola
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".item");
    const initialContainer = document.getElementById("produk-list");
    const sortedZone = document.getElementById("sorted-zone");

    items.forEach(item => {
        item.addEventListener("dragstart", e => {
            e.dataTransfer.setData("text", item.dataset.harga);
            e.dataTransfer.setData("id", item.id);
        });
    });

    document.querySelectorAll(".sorting-zone").forEach(zone => {
        zone.addEventListener("dragover", e => e.preventDefault());
        zone.addEventListener("drop", e => {
            e.preventDefault();
            const id = e.dataTransfer.getData("id");
            const draggedItem = document.getElementById(id);
            if (!zone.contains(draggedItem)) {
                if (zone.id === "sorted-zone") {
                    zone.appendChild(draggedItem);
                } else {
                    initialContainer.appendChild(draggedItem);
                }
                saveUserOrder();
            }
        });
    });

    function saveUserOrder() {
        const order = Array.from(sortedZone.querySelectorAll(".item")).map(item => item.id);
        localStorage.setItem("userOrder", JSON.stringify(order));
    }

    function loadUserOrder() {
        const saved = JSON.parse(localStorage.getItem("userOrder"));
        if (!saved) return;
        saved.forEach(id => {
            const item = document.getElementById(id);
            if (item) sortedZone.appendChild(item);
        });

        const userText = Array.from(sortedZone.querySelectorAll(".item")).map(i => i.textContent.trim());
        const correct = ["Bayam - Rp10.000", "Pepaya - Rp10.000", "Sukun - Rp10.000", "Ampalam - Rp15.000", "Mangga - Rp15.000", "Kentang - Rp20.000", "Tomat - Rp20.000"];
        if (JSON.stringify(userText) === JSON.stringify(correct)) {
            document.getElementById("abstraksi").style.display = "block";
            document.getElementById("linear-section").style.display = "block";
        }
    }

    window.checkOrder = function () {
        const correct = ["Bayam - Rp10.000", "Pepaya - Rp10.000", "Sukun - Rp10.000", "Ampalam - Rp15.000", "Mangga - Rp15.000", "Kentang - Rp20.000", "Tomat - Rp20.000"];
        const user = Array.from(sortedZone.querySelectorAll(".item")).map(i => i.textContent.trim());

        if (JSON.stringify(user) === JSON.stringify(correct)) {
            Swal.fire('Kerja Bagus! Urutan sudah benar!', '', 'success').then(() => {
                document.getElementById("abstraksi").style.display = "block";
                document.getElementById("linear-section").style.display = "block";
                saveUserOrder();
            });
        } else {
            Swal.fire('Urutan masih salah.', 'Coba lagi.', 'error');
        }
    }

    loadUserOrder();
});

// Linear Search
const answers = [
    { name: "Bayam", index: "1", step: "1", match: "bukan" },
    { name: "Pepaya", index: "2", step: "2", match: "bukan" },
    { name: "Sukun", index: "3", step: "3", match: "bukan" },
    { name: "Ampalam", index: "4", step: "4", match: "bukan" },
    { name: "Mangga", index: "5", step: "5", match: "cocok" }
];
let currentIndex = 0;

document.getElementById("check-button").addEventListener("click", () => {
    const idx = document.getElementById("index-" + (currentIndex + 1)).value;
    const step = document.getElementById("step-" + (currentIndex + 1)).value;
    const match = document.getElementById("match-" + (currentIndex + 1)).value;

    if (idx === answers[currentIndex].index && step === answers[currentIndex].step && match === answers[currentIndex].match) {
        Swal.fire({
            title: "Benar!",
            icon: "success",
            timer: 1000,
            showConfirmButton: false
        });
        setTimeout(() => {
            currentIndex++;
            if (currentIndex < answers.length) {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${answers[currentIndex].name}</td>
                    <td><input type="number" id="index-${currentIndex + 1}"></td>
                    <td><input type="number" id="step-${currentIndex + 1}"></td>
                    <td>
                        <select id="match-${currentIndex + 1}">
                            <option value="bukan">Bukan</option>
                            <option value="cocok">Cocok</option>
                        </select>
                    </td>`;
                document.getElementById("table-body").appendChild(row);
            }

            if (answers[currentIndex - 1].name === "Mangga") {
                document.getElementById("input-langkah").classList.remove("hidden");
            }
        }, 1000);
    } else {
        Swal.fire("Salah!", "Jawaban kamu salah, coba lagi!", "error");
    }
});

function cekJumlahLangkah() {
    const input = document.getElementById("jumlahLangkah").value;
    if (input == 5) {
        Swal.fire("Selamat!", "Ditemukan dalam " + input + " langkah! Kerja Bagus!!", "success");
        document.getElementById("biner-section").style.display = "block";
    } else {
        Swal.fire("Coba lagi!", "Jumlah langkah belum tepat.", "error");
    }
}

// Binary Search
function cekIndex() {
    const awal = document.getElementById("awal").value;
    const akhir = document.getElementById("akhir").value;

    if (awal === "bayam" && akhir === "tomat") {
        Swal.fire("Benar!", "", "success");
    } else {
        Swal.fire("Salah!", "Jawaban salah, coba lagi!", "error");
    }
}

const answersBiner = [
    { name: "Ampalam", index: "4", step: "1", match: "bukan" },
    { name: "Kentang", index: "6", step: "2", match: "bukan" },
    { name: "Mangga", index: "5", step: "3", match: "cocok" }
];
let currentIndexBiner = 0;

document.getElementById("check-button-biner").addEventListener("click", () => {
    const idx = document.getElementById(`biner-index-${currentIndexBiner + 1}`).value;
    const step = document.getElementById(`biner-step-${currentIndexBiner + 1}`).value;
    const match = document.getElementById(`match-biner-${currentIndexBiner + 1}`).value;

    if (idx === answersBiner[currentIndexBiner].index &&
        step === answersBiner[currentIndexBiner].step &&
        match === answersBiner[currentIndexBiner].match) {

        Swal.fire({
            title: "Benar!",
            icon: "success",
            timer: 1000,
            showConfirmButton: false
        });
        setTimeout(() => {
            currentIndexBiner++;
            if (currentIndexBiner < answersBiner.length) {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${answersBiner[currentIndexBiner].name}</td>
                    <td><input type="number" id="biner-index-${currentIndexBiner + 1}"></td>
                    <td><input type="number" id="biner-step-${currentIndexBiner + 1}"></td>
                    <td>
                        <select id="match-biner-${currentIndexBiner + 1}">
                            <option value="bukan">Bukan</option>
                            <option value="cocok">Cocok</option>
                        </select>
                    </td>`;
                document.getElementById("table-body-biner").appendChild(row);
            }

            if (answersBiner[currentIndexBiner - 1].name === "Mangga") {
                document.getElementById("input-langkah-biner")?.classList.remove("hidden");
            }
        }, 1000);
    } else {
        Swal.fire("Salah!", "Jawaban kamu salah, coba lagi!", "error");
    }
});

function cekJumlahLangkahBiner() {
    const input = document.getElementById("jumlahLangkahBiner").value;
    if (input == 3) {
        Swal.fire("Selamat!", "Ditemukan dalam " + input + " langkah! Kerja Bagus!!", "success");
        document.getElementById("sentinel-section").style.display = "block";
    } else {
        Swal.fire("Coba lagi!", "Jumlah langkah belum tepat.", "error");
    }
}

//Pencarian Sentinel
//Masukkan Sentinel
const kunciJawaban = {
    indeksSentinel: "8",
    elemenSentinel: "Mangga"
  };

  function periksaJawaban() {
    for (let id in kunciJawaban) {
      const input = document.getElementById(id);
      const jawaban = input.value.trim().toLowerCase();
      const kunci = kunciJawaban[id].toLowerCase();

      if (jawaban === kunci) {
        Swal.fire("Benar!", "", "success");
        document.getElementById("sentinel-section-2").style.display = "block";
      } else {
        Swal.fire("Coba lagi!", "Jumlah langkah belum tepat.", "error");
      }
    }
  };

const answersSentinel = [
    { name: "Bayam", index: "1", step: "1", match: "bukan" },
    { name: "Pepaya", index: "2", step: "2", match: "bukan" },
    { name: "Sukun", index: "3", step: "3", match: "bukan" },
    { name: "Ampalam", index: "4", step: "4", match: "bukan" },
    { name: "Mangga", index: "5", step: "5", match: "cocok" }
];
let currentIndexSentinel = 0;

document.getElementById("check-button-sentinel").addEventListener("click", () => {
    const idx = document.getElementById("sentinel-index-" + (currentIndexSentinel + 1)).value;
    const step = document.getElementById("sentinel-step-" + (currentIndexSentinel + 1)).value;
    const match = document.getElementById("sentinel-match-" + (currentIndexSentinel + 1)).value;

    if (
        idx === answersSentinel[currentIndexSentinel].index && 
        step === answersSentinel[currentIndexSentinel].step && 
        match === answersSentinel[currentIndexSentinel].match) {
        Swal.fire({
            title: "Benar!",
            icon: "success",
            timer: 1000,
            showConfirmButton: false
        });
        setTimeout(() => {
            currentIndexSentinel++;
            if (currentIndexSentinel < answersSentinel.length) {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${answersSentinel[currentIndexSentinel].name}</td>
                    <td><input type="number" id="sentinel-index-${currentIndexSentinel + 1}"></td>
                    <td><input type="number" id="sentinel-step-${currentIndexSentinel + 1}"></td>
                    <td>
                        <select id="sentinel-match-${currentIndexSentinel + 1}">
                            <option value="bukan">Bukan</option>
                            <option value="cocok">Cocok</option>
                        </select>
                    </td>`;
                document.getElementById("table-body-sentinel").appendChild(row);
            }

            if (answersSentinel[currentIndexSentinel - 1].name === "Mangga") {
                document.getElementById("input-langkah-sentinel").classList.remove("hidden");
            }
        }, 1000);
    } else {
        Swal.fire("Salah!", "Jawaban kamu salah, coba lagi!", "error");
    }
});

function cekJumlahLangkahSentinel() {
    const input = document.getElementById("jumlahLangkahSentinel").value;
    if (input == 5) {
        Swal.fire("Selamat!", "Ditemukan dalam " + input + " langkah! Kerja Bagus!!", "success");
        document.getElementById("hasil-section").style.display = "block";
    } else {
        Swal.fire("Coba lagi!", "Jumlah langkah belum tepat.", "error");
    }
};

//Periksa Hasil Langkah
const kunciJawabanLangkah = {
    hasilIndex: "5",
    langkahLinear: "5",
    langkahBiner: "3",
    langkahSentinel: "5",
};

  function cekJawabanLangkah() {
    for (let id in kunciJawabanLangkah) {
      const input = document.getElementById(id);
      const jawaban = input.value.trim().toLowerCase();
      const kunci = kunciJawabanLangkah[id].toLowerCase();

      if (jawaban === kunci) {
        Swal.fire("Benar!", "Mangga ditemukan pada indeks ke-5 dan jumlah langkah setiap algoritma tepat! Kerja Bagus!!", "success");
        document.getElementById("quiz-section").style.display = "block";
      } else {
        Swal.fire("Coba lagi yaa!", "Jawaban belum tepat. Ayo Semangat!!", "error");
      }
    }
  };

//Periksa Kuis Akhir Mari Berlatih
function checkAnswersQuiz() {
    // Kunci jawaban
    const correctAnswers = {
        question1: "B",
        question2: "C",
        question3: "C"
    };

    // Ambil semua jawaban siswa
    const userAnswers = {};
    const questions = Object.keys(correctAnswers);

    questions.forEach(question => {
        const selectedOption = document.querySelector(`input[name="${question}"]:checked`);
        userAnswers[question] = selectedOption ? selectedOption.value : null;
    });

    // Periksa jawaban dan tandai yang salah
    let allCorrect = true;
    questions.forEach(question => {
        const questionDiv = document.getElementById(`${question}`);
        const isCorrect = userAnswers[question] === correctAnswers[question];

        // Bersihkan tanda sebelumnya
        const parentDiv = document.querySelector(`[name="${question}"]`).closest(".mb-4");
        parentDiv.classList.remove("border", "border-danger", "p-2", "rounded");

        if (!isCorrect) {
            allCorrect = false;
            // Tambahkan tanda jika jawaban salah
            parentDiv.classList.add("border", "border-danger", "p-2", "rounded");
        }
    });

    // Tampilkan hasil dengan SweetAlert
    if (allCorrect) {
        Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Semua jawaban Anda benar! Bagus sekali!'
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Coba lagi!',
            text: 'Beberapa jawaban Anda salah. Periksa kembali yang ditandai.'
        });
    }
}
