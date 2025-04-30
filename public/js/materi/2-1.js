// Script Mari Berlatih
function checkAnswers() {
    // Kunci jawaban
    const correctAnswers = {
        question1: "B",
        question2: "D",
        question3: "B"
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
            text: 'Semua jawaban Anda benar!'
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Coba lagi!',
            text: 'Beberapa jawaban Anda salah. Periksa kembali yang ditandai.'
        });
    }
}

// Drag n Drop
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
    event.target.style.opacity = "0.5"; // Menghindari elemen hilang sepenuhnya
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
    const draggableElement = document.getElementById(id);

    if (event.currentTarget.classList.contains('dropzone')) {
        event.currentTarget.appendChild(draggableElement);
    }
}

// Validasi Kelompok
function validate() {
    const correctGroups = {
        'group-a-c': ['Adam', 'Budi', 'Clara'],
        'group-d-f': ['Dani', 'Eka', 'Fani'],
        'group-g-i': ['Gilang', 'Hadi', 'Ivan'],
        'group-j-l': ['Joko'],
    };

    let isCorrect = true;

    Object.keys(correctGroups).forEach(groupId => {
        const dropzone = document.getElementById(groupId);
        const childrenNames = Array.from(dropzone.children)
            .filter(child => child.classList.contains('name-item'))
            .map(child => child.textContent.trim());

        if (childrenNames.sort().join(',') !== correctGroups[groupId].sort().join(',')) {
            isCorrect = false;
        }
    });

    if (isCorrect) {
        Swal.fire({
            title: 'Berhasil!',
            text: 'Jawaban Anda benar! Semua nama telah dikelompokkan dengan tepat.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            document.getElementById("feedback").style.display = "block";
        });
    } else {
        Swal.fire({
            title: 'Coba Lagi!',
            text: 'Jawaban Anda masih ada yang salah. Silakan periksa kembali!',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
}