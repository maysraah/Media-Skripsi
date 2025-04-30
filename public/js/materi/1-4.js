// Script Mari Berlatih
function checkAnswers() {
    // Kunci jawaban
    const correctAnswers = {
        question1: "A",
        question2: "A",
        question3: "A",
        question4: "B",
        question5: "C"
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
        }).then(() => {
            document.getElementById("feedback").style.display = "block";
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Coba lagi!',
            text: 'Beberapa jawaban Anda salah. Periksa kembali yang ditandai.'
        });
    }
}