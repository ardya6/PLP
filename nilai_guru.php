<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["role"] !== "guru") {
    header("Location: index.php#login-section");
    exit;
}

$dataFile = "scores.json";

if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}

$scores = json_decode(file_get_contents($dataFile), true);

if (!is_array($scores)) {
    $scores = [];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nilai Murid</title>

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
    max-width: 1100px;
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

.table-box {
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 28px;
    padding: 24px;
    box-shadow: 0 18px 55px rgba(0,0,0,.22);
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 720px;
}

th, td {
    padding: 16px;
    text-align: left;
    border-bottom: 1px solid rgba(255,255,255,.10);
}

th {
    color: #7dd3fc;
    font-size: 14px;
}

td {
    color: #eaf2ff;
}

.nilai {
    font-weight: 900;
    color: #7dffb2;
}

.empty {
    text-align: center;
    color: #a9b8d2;
    padding: 35px;
}

.btn {
    display: inline-block;
    border: none;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 999px;
    background: linear-gradient(135deg, #4f7cff, #7dd3fc);
    color: #06101f;
    font-weight: 900;
    margin-top: 22px;
}
</style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <div>
            <h1>Nilai Murid</h1>
            <p>Halaman ini hanya untuk guru.</p>
        </div>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="table-box">
        <?php if (empty($scores)): ?>
            <div class="empty">Belum ada murid yang mengerjakan quiz.</div>
        <?php else: ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Benar</th>
                    <th>Total Soal</th>
                    <th>Nilai</th>
                    <th>Tanggal</th>
                </tr>

                <?php foreach ($scores as $index => $data): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= htmlspecialchars($data["nama"]); ?></td>
                        <td><?= $data["score"]; ?></td>
                        <td><?= $data["total"]; ?></td>
                        <td class="nilai"><?= $data["nilai"]; ?></td>
                        <td><?= $data["tanggal"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>

    <a href="index.php#login-section" class="btn">← Kembali ke Home</a>

</div>

</body>
</html>