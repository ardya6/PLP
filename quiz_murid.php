<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["role"] !== "murid") {
    header("Location: index.php#login-section");
    exit;
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
        "answer" => "B"
    ],
    [
        "question" => "Contoh ancaman siber yang menipu pengguna melalui link palsu adalah...",
        "options" => [
            "A" => "Phishing",
            "B" => "Backup",
            "C" => "Update",
            "D" => "Enkripsi"
        ],
        "answer" => "A"
    ],
    [
        "question" => "Password yang kuat sebaiknya menggunakan...",
        "options" => [
            "A" => "Nama sendiri",
            "B" => "Tanggal lahir",
            "C" => "Kombinasi huruf besar, huruf kecil, angka, dan simbol",
            "D" => "Kata password"
        ],
        "answer" => "C"
    ],
    [
        "question" => "Fungsi 2FA adalah...",
        "options" => [
            "A" => "Mempercepat laptop",
            "B" => "Menambah lapisan keamanan akun",
            "C" => "Menghapus semua file",
            "D" => "Mengubah tampilan website"
        ],
        "answer" => "B"
    ],
    [
        "question" => "Apa yang sebaiknya dilakukan saat menerima link mencurigakan?",
        "options" => [
            "A" => "Langsung klik",
            "B" => "Masukkan password",
            "C" => "Sebarkan ke teman",
            "D" => "Periksa terlebih dahulu dan jangan asal klik"
        ],
        "answer" => "D"
    ]
];

$submitted = false;
$score = 0;
$total = count($questions);
$nilai = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submitted = true;

    foreach ($questions as $index => $q) {
        $jawabanUser = $_POST["answer_$index"] ?? "";

        if ($jawabanUser === $q["answer"]) {
            $score++;
        }
    }

    $nilai = round(($score / $total) * 100);

    $dataFile = "scores.json";

    if (!file_exists($dataFile)) {
        file_put_contents($dataFile, json_encode([]));
    }

    $scores = json_decode(file_get_contents($dataFile), true);

    if (!is_array($scores)) {
        $scores = [];
    }

    $scores[] = [
        "nama" => $_SESSION["nama"],
        "score" => $score,
        "total" => $total,
        "nilai" => $nilai,
        "tanggal" => date("d-m-Y H:i:s")
    ];

    file_put_contents($dataFile, json_encode($scores, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz Murid</title>

<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
}

body {
    min-height: 100vh;
    background:
        radial-gradient(circle at top left, rgba(79,124,255,.35), transparent 32rem),
        radial-gradient(circle at bottom right, rgba(125,211,252,.18), transparent 30rem),
        linear-gradient(135deg, #04101f, #08172c, #0b1022);
    color: white;
    padding: 40px 20px;
}

.container {
    max-width: 950px;
    margin: auto;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

h1 {
    font-size: 42px;
    margin-bottom: 8px;
    background: linear-gradient(90deg, #ffffff, #7dd3fc, #4f7cff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.top-bar p {
    color: #a9b8d2;
}

.logout {
    color: white;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 999px;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.16);
}

.quiz-card {
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 26px;
    padding: 26px;
    margin-bottom: 22px;
    box-shadow: 0 18px 55px rgba(0,0,0,.22);
}

.question {
    font-size: 20px;
    font-weight: 800;
    margin-bottom: 18px;
}

.option {
    display: block;
    padding: 14px 16px;
    margin-bottom: 12px;
    border-radius: 16px;
    background: rgba(255,255,255,.07);
    border: 1px solid rgba(255,255,255,.12);
    cursor: pointer;
    transition: .25s;
    color: #dbeafe;
}

.option:hover {
    background: rgba(125,211,252,.12);
    border-color: rgba(125,211,252,.42);
    transform: translateX(6px);
}

.option input {
    margin-right: 10px;
}

.btn {
    display: inline-block;
    border: none;
    text-decoration: none;
    padding: 15px 30px;
    border-radius: 999px;
    background: linear-gradient(135deg, #4f7cff, #7dd3fc);
    color: #06101f;
    font-weight: 900;
    cursor: pointer;
    margin: 8px;
}

.result-box {
    text-align: center;
    background: rgba(255,255,255,.09);
    border: 1px solid rgba(125,211,252,.35);
    border-radius: 30px;
    padding: 45px 25px;
    box-shadow: 0 25px 80px rgba(0,0,0,.30);
}

.score {
    font-size: 56px;
    font-weight: 900;
    color: #7dd3fc;
    margin: 16px 0;
}

@media (max-width: 600px) {
    h1 {
        font-size: 32px;
    }

    .quiz-card {
        padding: 20px;
    }
}
</style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <div>
            <h1>Quiz Murid</h1>
            <p>Nama: <strong><?= $_SESSION["nama"]; ?></strong></p>
        </div>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <?php if (!$submitted): ?>

        <form method="POST">
            <?php foreach ($questions as $index => $q): ?>
                <div class="quiz-card">
                    <div class="question">
                        <?= ($index + 1) . ". " . $q["question"]; ?>
                    </div>

                    <?php foreach ($q["options"] as $key => $option): ?>
                        <label class="option">
                            <input type="radio" name="answer_<?= $index; ?>" value="<?= $key; ?>" required>
                            <?= $key . ". " . $option; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

            <button type="submit" class="btn">Kirim Jawaban</button>
            <a href="index.php#login-section" class="btn">Kembali</a>
        </form>

    <?php else: ?>

        <div class="result-box">
            <h2>Hasil Quiz</h2>
            <p>Jawaban benar:</p>
            <div class="score"><?= $score; ?> / <?= $total; ?></div>
            <p>Nilai kamu: <strong><?= $nilai; ?></strong></p>

            <br>
            <a href="quiz_murid.php" class="btn">Ulangi Quiz</a>
            <a href="index.php#login-section" class="btn">Kembali ke Home</a>
        </div>

    <?php endif; ?>

</div>

</body>
</html>