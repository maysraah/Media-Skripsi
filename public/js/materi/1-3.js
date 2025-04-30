// Cek Jawaban Aktivitas Pola Aritmatika
document.getElementById('cekJawaban').addEventListener('click', function () {
    // Ambil semua input
    const inputs = document.querySelectorAll('.inputJawaban');
    let allCorrect = true;

    inputs.forEach(input => {
        // Ambil jawaban yang benar dari atribut data-jawaban
        const correctAnswer = input.getAttribute('data-jawaban');
        const userAnswer = input.value;

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
        document.getElementById("result").innerHTML = `Dengan melengkapi pola aritmatika diatas, kalian diharapkan dapat mengenali bahwa pola diatas adalah deret terurut dengan jarak yang konsisten, baik terurut dari angka besar ke kecil atau sebaliknya. Selain itu, aktivitas ini juga melatih siswa dalam mengenali pola berkelipatan sehingga dapat memahami pengurutan data.`;
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Jawaban Salah!',
            text: 'Periksa kembali jawaban yang berwarna merah.',
            confirmButtonText: 'Coba Lagi'
        });
    }
});

// Function to check answers for the first form
function checkAnswersForm1() {
const correctAnswers = { question1: 'B', question2: 'A' };
const form = document.getElementById('quizForm1');
const answers = new FormData(form);

let hasError = false;

// Reset background color for all options
form.querySelectorAll('.form-check-input').forEach(input => {
    input.parentElement.style.backgroundColor = '';
});

// Check answers
if (answers.get('question1') !== correctAnswers.question1) {
    const incorrectOption = document.getElementById('q1a' + answers.get('question1'));
    if (incorrectOption) incorrectOption.parentElement.style.backgroundColor = 'red';
    hasError = true;
}

if (answers.get('question2') !== correctAnswers.question2) {
    const incorrectOption = document.getElementById('q2a' + answers.get('question2'));
    if (incorrectOption) incorrectOption.parentElement.style.backgroundColor = 'red';
    hasError = true;
}

if (hasError) {
    Swal.fire({
        icon: 'error',
        title: 'Jawaban Salah',
        text: 'Periksa kembali jawaban Anda.',
    });
} else {
    Swal.fire({
        icon: 'success',
        title: 'Jawaban Benar',
        text: 'Semua jawaban Anda benar!',
    });
}
}

// Function to check answers for the second form
function checkAnswersForm2() {
const correctAnswers = {
    question1: 'A',
    question2: 'A',
    question3: 'B',
};
const form = document.getElementById('quizForm2');
const answers = new FormData(form);

let hasError = false;

// Reset background color for all options
form.querySelectorAll('.form-check-input').forEach(input => {
    input.parentElement.style.backgroundColor = '';
});

// Check answers
if (answers.get('question1') !== correctAnswers.question1) {
    const incorrectOption = document.getElementById('q1a' + answers.get('question1'));
    if (incorrectOption) incorrectOption.parentElement.style.backgroundColor = 'red';
    hasError = true;
}

if (answers.get('question2') !== correctAnswers.question2) {
    const incorrectOption = document.getElementById('q2a' + answers.get('question2'));
    if (incorrectOption) incorrectOption.parentElement.style.backgroundColor = 'red';
    hasError = true;
}

if (answers.get('question3') !== correctAnswers.question3) {
    const incorrectOption = document.getElementById('q3a' + answers.get('question3'));
    if (incorrectOption) incorrectOption.parentElement.style.backgroundColor = 'red';
    hasError = true;
}

if (hasError) {
    Swal.fire({
        icon: 'error',
        title: 'Jawaban Salah',
        text: 'Periksa kembali jawaban Anda.',
    });
} else {
    Swal.fire({
        icon: 'success',
        title: 'Jawaban Benar',
        text: 'Semua jawaban Anda benar!',
    });
}
}