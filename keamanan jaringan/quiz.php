<?php
session_start();

if (isset($_GET['start'])) {
    $_SESSION['quiz_index'] = 0;
    $_SESSION['score'] = 0;

    unset($_SESSION['selected']);
    unset($_SESSION['show_feedback']);
}

$questions = [
    [
        "question" => "Apa yang dimaksud dengan keamanan siber personal?",
        "options" => [
            "A" => "Cara mempercepat internet",
            "B" => "Upaya melindungi perangkat, akun, dan data pribadi dari ancaman digital",
            "C" => "Cara membuat website",
            "D" => "Teknik mengganti password WiFi"
        ],
        "answer" => "B",
        "explanation" => "Keamanan siber personal adalah upaya melindungi akun, perangkat, dan data pribadi dari berbagai ancaman digital."
    ],

    [
        "question" => "Contoh ancaman siber yang menipu pengguna melalui link palsu adalah...",
        "options" => [
            "A" => "Phishing",
            "B" => "Backup",
            "C" => "Update",
            "D" => "Enkripsi"
        ],
        "answer" => "A",
        "explanation" => "Phishing adalah teknik penipuan yang menggunakan website, email, atau pesan palsu untuk mencuri informasi pribadi."
    ],

    [
        "question" => "Password yang kuat sebaiknya menggunakan...",
        "options" => [
            "A" => "Nama sendiri",
            "B" => "Tanggal lahir",
            "C" => "Kombinasi huruf besar, huruf kecil, angka, dan simbol",
            "D" => "Kata password"
        ],
        "answer" => "C",
        "explanation" => "Password yang kuat lebih sulit ditebak karena menggunakan kombinasi berbagai karakter."
    ],

    [
        "question" => "Fungsi 2FA adalah...",
        "options" => [
            "A" => "Mempercepat laptop",
            "B" => "Menambah lapisan keamanan akun",
            "C" => "Menghapus semua file",
            "D" => "Mengubah tampilan website"
        ],
        "answer" => "B",
        "explanation" => "2FA (Two Factor Authentication) memberikan lapisan keamanan tambahan selain password."
    ],

    [
        "question" => "Apa yang sebaiknya dilakukan saat menerima link mencurigakan?",
        "options" => [
            "A" => "Langsung klik",
            "B" => "Masukkan password",
            "C" => "Sebarkan ke teman",
            "D" => "Periksa terlebih dahulu dan jangan asal klik"
        ],
        "answer" => "D",
        "explanation" => "Selalu periksa alamat website dan sumber pesan sebelum mengklik link yang diterima."
    ]
];

$totalQuestions = count($questions);

if (!isset($_SESSION['quiz_index'])) {
    $_SESSION['quiz_index'] = 0;
    $_SESSION['score'] = 0;
}

$current = $_SESSION['quiz_index'];

if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: quiz.php");
    exit;
}

$showResult = false;
$isCorrect = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $selected = $_POST['answer'] ?? '';

    $correctAnswer = $questions[$current]['answer'];

    if ($selected === $correctAnswer) {
        $_SESSION['score']++;
        $isCorrect = true;
    }

    $_SESSION['selected'] = $selected;
    $_SESSION['show_feedback'] = true;
}

if (isset($_POST['next'])) {

    $_SESSION['quiz_index']++;

    unset($_SESSION['selected']);
    unset($_SESSION['show_feedback']);

    if ($_SESSION['quiz_index'] >= $totalQuestions) {
        header("Location: quiz.php?finish=1");
        exit;
    }

    header("Location: quiz.php");
    exit;
}

$finished = isset($_GET['finish']);

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz Keamanan Siber</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    padding:30px;
    background:
    radial-gradient(circle at top left, rgba(79,124,255,.35), transparent 30rem),
    radial-gradient(circle at bottom right, rgba(125,211,252,.15), transparent 30rem),
    linear-gradient(135deg,#06101f,#08172c,#0d1f3b);
    color:white;
    overflow-x:hidden;
    position:relative;
}

/* Background floating effect */
body::before,
body::after{
    content:'';
    position:fixed;
    border-radius:50%;
    filter:blur(80px);
    z-index:-1;
    animation:float 10s ease-in-out infinite;
}

body::before{
    width:250px;
    height:250px;
    background:rgba(79,124,255,.18);
    top:-50px;
    left:-50px;
}

body::after{
    width:300px;
    height:300px;
    background:rgba(125,211,252,.12);
    bottom:-100px;
    right:-80px;
    animation-delay:5s;
}

@keyframes float{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-25px);
    }
}

.container{
    max-width:950px;
    margin:auto;
}

/* Card Animation */
.card{
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(12px);
    border:1px solid rgba(255,255,255,.15);
    border-radius:30px;
    padding:35px;
    box-shadow:0 20px 60px rgba(0,0,0,.25);

    animation:fadeUp .6s ease;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(25px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

h1{
    font-size:42px;
    margin-bottom:10px;
}

.subtitle{
    color:#cbd5e1;
    margin-bottom:25px;
}

.progress{
    width:100%;
    height:14px;
    background:rgba(255,255,255,.1);
    border-radius:50px;
    overflow:hidden;
    margin-bottom:30px;
}

.progress-bar{
    height:100%;
    background:linear-gradient(90deg,#4f7cff,#7dd3fc);
    border-radius:50px;

    animation:fillBar 1s ease;
}

@keyframes fillBar{
    from{
        width:0 !important;
    }
}

.badge{
    display:inline-block;
    padding:10px 16px;
    border-radius:999px;
    background:rgba(79,124,255,.2);
    margin-bottom:20px;
    font-weight:600;

    animation:pulse 2s infinite;
}

@keyframes pulse{
    0%,100%{
        transform:scale(1);
    }
    50%{
        transform:scale(1.03);
    }
}

.question{
    font-size:28px;
    font-weight:700;
    line-height:1.4;
    margin-bottom:25px;
}

/* OPTION */
.option{
    display:block;
    padding:18px;
    margin-bottom:15px;
    border-radius:18px;
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.1);
    cursor:pointer;

    transition:all .25s ease;
}

.option:hover{
    transform:translateX(8px) scale(1.02);
    background:rgba(79,124,255,.15);
    border-color:rgba(125,211,252,.5);
    box-shadow:0 10px 30px rgba(79,124,255,.2);
}

.option:active{
    transform:scale(.98);
}

.option input{
    margin-right:12px;
    accent-color:#7dd3fc;
}

/* Tombol */
.btn{
    border:none;
    padding:15px 28px;
    border-radius:999px;
    cursor:pointer;
    font-weight:700;
    font-size:16px;

    background:linear-gradient(135deg,#4f7cff,#7dd3fc);
    color:#07101f;

    transition:all .25s ease;
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:
    0 12px 30px rgba(79,124,255,.4);
}

.btn:active{
    transform:scale(.96);
}

/* Feedback */
.result-box{
    margin-top:25px;
    padding:25px;
    border-radius:20px;

    animation:pop .45s ease;
}

@keyframes pop{
    0%{
        opacity:0;
        transform:scale(.9);
    }
    70%{
        transform:scale(1.03);
    }
    100%{
        opacity:1;
        transform:scale(1);
    }
}

.correct{
    background:rgba(0,255,170,.12);
    border:1px solid rgba(0,255,170,.4);
}

.wrong{
    background:rgba(255,70,70,.12);
    border:1px solid rgba(255,70,70,.4);
}

.answer{
    margin-top:15px;
    font-weight:700;
    color:#7dd3fc;
}

.explanation{
    margin-top:15px;
    line-height:1.8;
    color:#dbeafe;
}

.center{
    text-align:center;
}

.score{
    font-size:70px;
    font-weight:900;
    color:#7dd3fc;
    margin:20px 0;

    animation:bounceIn .7s ease;
}

@keyframes bounceIn{
    0%{
        transform:scale(.5);
        opacity:0;
    }
    60%{
        transform:scale(1.1);
    }
    100%{
        transform:scale(1);
        opacity:1;
    }
}

.actions{
    margin-top:25px;
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.link-btn{
    display:inline-block;
    padding:15px 28px;
    border-radius:999px;
    background:rgba(255,255,255,.08);
    border:1px solid rgba(255,255,255,.15);
    text-decoration:none;
    color:white;

    transition:.25s;
}

.link-btn:hover{
    transform:translateY(-3px);
    background:rgba(255,255,255,.15);
    box-shadow:0 10px 25px rgba(0,0,0,.25);
}

@media(max-width:768px){

    body{
        padding:15px;
    }

    .card{
        padding:25px;
    }

    h1{
        font-size:32px;
    }

    .question{
        font-size:22px;
    }

    .score{
        font-size:50px;
    }

}
</style>

</head>
<body>

<div class="container">

<?php if($finished): ?>

<div class="card center">

<h1>🎉 Quiz Selesai</h1>

<p class="subtitle">Hasil akhir quiz keamanan siber</p>

<div class="score">
<?= $_SESSION['score']; ?>/<?= $totalQuestions; ?>
</div>

<h2>
Nilai:
<?= round(($_SESSION['score']/$totalQuestions)*100); ?>
</h2>

<div class="actions" style="justify-content:center;">

<a href="quiz.php?reset=1" class="link-btn">
Ulangi Quiz
</a>

<a href="keamanan.php" class="link-btn">
Kembali ke Materi
</a>

</div>

</div>

<?php else: ?>

<?php
$q = $questions[$current];
$progress = (($current+1)/$totalQuestions)*100;
?>

<div class="card">

<div class="badge">
Soal <?= $current+1 ?> dari <?= $totalQuestions ?>
</div>

<div class="progress">
<div class="progress-bar" style="width:<?= $progress ?>%"></div>
</div>

<div class="question">
<?= $q['question']; ?>
</div>

<?php if(empty($_SESSION['show_feedback'])): ?>

<form method="POST">

<?php foreach($q['options'] as $key=>$option): ?>

<label class="option">
<input type="radio" name="answer" value="<?= $key ?>" required>
<?= $key ?>. <?= $option ?>
</label>

<?php endforeach; ?>

<br>

<button class="btn">
Periksa Jawaban
</button>

</form>

<?php else: ?>

<?php
$selected = $_SESSION['selected'];
$correct = $q['answer'];
$isCorrect = ($selected === $correct);
?>

<div class="result-box <?= $isCorrect ? 'correct' : 'wrong' ?>">

<h2>
<?= $isCorrect ? '✅ Jawaban Benar!' : '❌ Jawaban Salah!' ?>
</h2>

<div class="answer">
Jawaban Benar:
<?= $correct ?>. <?= $q['options'][$correct] ?>
</div>

<div class="explanation">
<strong>Penjelasan:</strong><br>
<?= $q['explanation']; ?>
</div>

</div>

<form method="POST">

<div class="actions">

<button name="next" class="btn">
<?= ($current+1 == $totalQuestions) ? 'Lihat Hasil' : 'Soal Berikutnya →' ?>
</button>

</div>

</form>

<?php endif; ?>

</div>

<?php endif; ?>

</div>

</body>
</html>