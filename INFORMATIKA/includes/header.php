<?php
// Ambil nama halaman aktif untuk highlight menu
$current_page = basename($_SERVER['PHP_SELF']);

// Hitung base path relatif ke root proyek INFORMATIKA
// Cari posisi folder INFORMATIKA dalam path lalu hitung depth setelahnya
$self_path = str_replace('\\', '/', $_SERVER['PHP_SELF']);
// Temukan posisi setelah /INFORMATIKA/
if (preg_match('#/INFORMATIKA/(.*)#i', $self_path, $m)) {
    $rel = $m[1]; // contoh: "dashboardinfor.php" atau "materi/literasi-digital.php"
    $depth = substr_count($rel, '/'); // 0 untuk root, 1 untuk sub-folder
} else {
    $depth = max(0, substr_count(ltrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', $self_path), '/'), '/') - 1);
}
$base_path = str_repeat('../', $depth);
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Pembelajaran Informatika - Literasi Digital, Perangkat Teknologi, dan Jaringan Komputer">
    <meta name="keywords" content="informatika, literasi digital, ms word, jaringan komputer, pembelajaran">
    <meta name="author" content="Website Informatika">
    <title><?= isset($page_title) ? $page_title . ' | ' : '' ?>Belajar Informatika</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= $base_path ?>assets/css/style.css">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
    <div class="nav-container">

        <!-- Logo -->
        <a href="<?= $base_path ?>index.php" class="nav-logo">
            <div class="logo-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <div class="logo-text">
                <span class="logo-main">Informatika</span>
                <span class="logo-sub">Learning Platform</span>
            </div>
        </a>

        <!-- Menu Desktop -->
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="<?= $base_path ?>index.php"
                   class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?= in_array($current_page, ['literasi-digital.php','perangkat-teknologi.php','jaringan-komputer.php']) ? 'active' : '' ?>">
                    <i class="fas fa-book-open"></i> Materi <i class="fas fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= $base_path ?>materi/literasi-digital.php"
                           class="dropdown-item <?= ($current_page == 'literasi-digital.php') ? 'active' : '' ?>">
                            <i class="fas fa-search"></i>
                            <span>
                                <strong>Literasi Digital</strong>
                                <small>& Mesin Pencari</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base_path ?>materi/perangkat-teknologi.php"
                           class="dropdown-item <?= ($current_page == 'perangkat-teknologi.php') ? 'active' : '' ?>">
                            <i class="fas fa-desktop"></i>
                            <span>
                                <strong>Perangkat Teknologi</strong>
                                <small>MS Word, Excel, PowerPoint</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base_path ?>materi/jaringan-komputer.php"
                           class="dropdown-item <?= ($current_page == 'jaringan-komputer.php') ? 'active' : '' ?>">
                            <i class="fas fa-network-wired"></i>
                            <span>
                                <strong>Jaringan Komputer</strong>
                                <small>& Internet</small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= $base_path ?>quiz/latihan-soal.php"
                   class="nav-link <?= ($current_page == 'latihan-soal.php') ? 'active' : '' ?>">
                    <i class="fas fa-brain"></i> Kuis
                </a>
            </li>
            <li class="nav-item">
                <a href="#tentang" class="nav-link">
                    <i class="fas fa-info-circle"></i> Tentang
                </a>
            </li>
        </ul>

        <!-- Kontrol Kanan -->
        <div class="nav-controls">
            <!-- Dark Mode Toggle -->
            <button class="theme-toggle" id="themeToggle" title="Toggle Dark Mode" aria-label="Toggle dark mode">
                <i class="fas fa-moon" id="themeIcon"></i>
            </button>

            <!-- Hamburger (Mobile) -->
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</nav>

<!-- Spacer untuk navbar fixed -->
<div class="nav-spacer"></div>

<!-- ===== MAIN CONTENT START ===== -->
<main class="main-content">
