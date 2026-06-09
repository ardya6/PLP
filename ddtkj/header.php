<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dasar-Dasar Teknik Jaringan - Pembelajaran</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
:root {
  --blue: #4f7cff; --blue-light: rgba(96, 140, 255, 0.16); --blue-mid: #7dd3fc;
  --gold: #ffc857; --dark: #07111f; --text: #eaf2ff; --muted: #a9b8d2;
  --bg: #06101f; --card: rgba(255,255,255,0.08); --radius: 24px;
  --glass: rgba(255,255,255,0.08); --line: rgba(148, 191, 255, 0.18);
  --shadow: 0 24px 80px rgba(0,0,0,0.35);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Manrope', sans-serif;
  background: radial-gradient(circle at 18% 10%, rgba(79,124,255,0.25), transparent 32rem),
              radial-gradient(circle at 85% 22%, rgba(125,211,252,0.15), transparent 28rem),
              radial-gradient(circle at 50% 95%, rgba(255,200,87,0.08), transparent 35rem),
              linear-gradient(135deg, #04101f 0%, #08172c 42%, #0b1022 100%);
  color: var(--text); overflow-x: hidden; min-height: 100vh; position: relative;
}
body::before {
  content: ''; position: fixed; inset: 0; z-index: -2;
  background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
  background-size: 56px 56px; mask-image: linear-gradient(to bottom, rgba(0,0,0,0.85), transparent 85%);
  animation: gridMove 20s linear infinite;
}
@keyframes gridMove { 0% { transform: translateY(0); } 100% { transform: translateY(56px); } }

nav.main-nav {
  position: fixed; top: 18px; left: 50%; transform: translateX(-50%); z-index: 100;
  width: min(1200px, calc(100% - 32px)); background: rgba(7, 17, 31, 0.72);
  backdrop-filter: blur(20px) saturate(140%); border: 1px solid rgba(255,255,255,0.12);
  box-shadow: 0 18px 60px rgba(0,0,0,0.28); padding: 0 1.5rem; height: 68px;
  display: flex; align-items: center; justify-content: space-between; border-radius: 999px;
}
.nav-logo {
  font-family: 'Space Grotesk', sans-serif; font-weight: 800; font-size: 1.1rem; color: #ffffff;
  text-decoration: none; padding: .5rem 1.2rem;
  background: linear-gradient(135deg, rgba(79,124,255,.24), rgba(125,211,252,.10));
  border-radius: 999px; border: 1px solid rgba(255,255,255,.10); display: flex; align-items: center; gap: 0.5rem;
}
.nav-links { display: flex; gap: 0.5rem; align-items: center; }
.nav-links a {
  font-size: 0.85rem; font-weight: 700; color: #b8c8e6; text-decoration: none;
  padding: 0.6rem 1.2rem; border-radius: 999px; transition: all 0.25s ease;
}
.nav-links a:hover, .nav-links a.active {
  color: #06101f; background: linear-gradient(135deg, #ffffff, #9edbff);
  box-shadow: 0 10px 28px rgba(125,211,252,.22);
}

.topic-navbar {
  position: sticky; top: 100px; z-index: 90;
  background: rgba(7, 17, 31, 0.85); backdrop-filter: blur(20px);
  border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);
  padding: 1rem 2rem; display: flex; gap: 0.8rem; overflow-x: auto; white-space: nowrap;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  width: min(1200px, calc(100% - 32px));
  margin: 104px auto 0;
  border-radius: 16px;
}
.topic-navbar::-webkit-scrollbar { height: 6px; }
.topic-navbar::-webkit-scrollbar-track { background: transparent; }
.topic-navbar::-webkit-scrollbar-thumb { background: rgba(125,211,252,0.3); border-radius: 4px; }

.topic-nav-link {
  color: var(--muted); text-decoration: none; font-size: 0.9rem; font-weight: 700;
  padding: 0.6rem 1.2rem; border-radius: 999px; background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease;
  display: inline-flex; align-items: center; gap: 0.5rem;
}
.topic-nav-link:hover, .topic-nav-link.active {
  background: linear-gradient(135deg, #4f7cff, #7dd3fc); color: #06101f; border-color: transparent;
  box-shadow: 0 4px 15px rgba(125,211,252,0.3);
}

.container { max-width: 1000px; margin: 0 auto; padding: 40px 2rem 4rem; }

.content-header { margin-bottom: 2rem; text-align: center; }
.content-header h1 {
  font-family: 'Space Grotesk', sans-serif; font-size: clamp(2rem, 4vw, 3.5rem);
  font-weight: 800; line-height: 1.1; margin-bottom: 1rem; color: transparent;
  background: linear-gradient(90deg, #ffffff 0%, #7dd3fc 100%);
  -webkit-background-clip: text; background-clip: text;
}
.content-header p { font-size: 1.1rem; color: var(--muted); line-height: 1.6; }

.module-section {
  background: linear-gradient(145deg, rgba(255,255,255,0.08), rgba(255,255,255,0.03));
  border: 1px solid rgba(255,255,255,0.1); border-radius: 30px; padding: 3.5rem;
  margin-bottom: 2.5rem; box-shadow: 0 20px 60px rgba(0,0,0,0.2); backdrop-filter: blur(10px);
}
.module-section h2 {
  font-family: 'Space Grotesk', sans-serif; font-size: 2.2rem; font-weight: 800; color: #ffffff;
  margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem; line-height: 1.2;
}
.module-section h2::before {
  content: ''; display: block; width: 12px; height: 34px; flex-shrink:0;
  background: linear-gradient(to bottom, #4f7cff, #7dd3fc); border-radius: 4px;
}
.module-section h3 {
  font-family: 'Space Grotesk', sans-serif; font-size: 1.6rem; color: var(--gold);
  margin: 3rem 0 1.2rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.8rem;
}
.module-section h4 {
  font-family: 'Space Grotesk', sans-serif; font-size: 1.25rem; color: #7dd3fc;
  margin: 2rem 0 0.8rem;
}
.module-section p { font-size: 1.05rem; line-height: 1.85; color: #c8d6f0; margin-bottom: 1.5rem; }
.module-section ul, .module-section ol { margin-bottom: 1.5rem; padding-left: 1.8rem; color: #c8d6f0; font-size: 1.05rem; line-height: 1.8; }
.module-section li { margin-bottom: 0.8rem; }

.highlight-box {
  background: rgba(125,211,252,0.05); border-left: 4px solid var(--blue-mid);
  padding: 1.8rem; border-radius: 0 20px 20px 0; margin: 2.5rem 0;
}
.highlight-box strong { color: #ffffff; font-size: 1.15rem; display: block; margin-bottom: 0.5rem; }

.grid-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.8rem; margin: 2.5rem 0; }
.info-card {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
  padding: 1.8rem; border-radius: 20px; transition: all 0.3s ease;
}
.info-card:hover {
  transform: translateY(-5px); background: rgba(255,255,255,0.08); border-color: rgba(125,211,252,0.3);
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}
.info-card i {
  font-size: 2.2rem; margin-bottom: 1.2rem;
  background: -webkit-linear-gradient(#4f7cff, #7dd3fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.info-card h4 { font-size: 1.3rem; color: #fff; margin-bottom: 0.8rem; font-family: 'Space Grotesk', sans-serif; border: none; }
.info-card p { font-size: 0.95rem; line-height: 1.7; margin-bottom: 0; }

table { width: 100%; border-collapse: collapse; margin: 2.5rem 0; background: rgba(255,255,255,0.03); border-radius: 16px; overflow: hidden; }
th, td { padding: 1.2rem 1.5rem; text-align: left; border-bottom: 1px solid rgba(255,255,255,0.08); }
th { background: rgba(255,255,255,0.08); color: #fff; font-family: 'Space Grotesk', sans-serif; font-weight: 700; font-size: 1.1rem; }
td { color: #c8d6f0; line-height: 1.6; }
code { background: rgba(255,255,255,0.1); padding: 0.2rem 0.5rem; border-radius: 6px; font-family: monospace; color: var(--gold); font-size: 0.95em; }

.pagination { display: flex; justify-content: space-between; margin-top: 4rem; gap: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 2rem; }
.btn-nav {
  display: inline-flex; align-items: center; gap: 0.8rem; background: rgba(255,255,255,0.08);
  color: #ffffff; padding: 1rem 1.8rem; border-radius: 16px; text-decoration: none; font-weight: 700;
  border: 1px solid rgba(255,255,255,0.15); transition: all 0.3s ease;
}
.btn-nav:hover {
  background: linear-gradient(135deg, #4f7cff 0%, #7dd3fc 100%); color: #06101f;
  border-color: transparent; transform: translateY(-3px); box-shadow: 0 10px 25px rgba(79,124,255,0.3);
}
.btn-nav.next { margin-left: auto; }

@media (max-width: 768px) {
  .topic-navbar { top: 90px; margin-top: 90px; padding: 1rem; width: 95%; }
  .module-section { padding: 2rem 1.5rem; }
  .pagination { flex-direction: column; }
  .btn-nav.next { margin-left: 0; }
}
</style>
</head>
<body>
<nav class="main-nav">
  <a href="../index.php" class="nav-logo">
    <i class="fa-solid fa-network-wired"></i> DDTKJ
  </a>
  <div class="nav-links">
    <a href="../index.php">Home</a>
    <a href="ddtkj.php" class="active">Materi Belajar</a>
  </div>
</nav>

<div class="topic-navbar">
  <a href="ddtkj.php" class="topic-nav-link <?= $current_file=='ddtkj.php'?'active':'' ?>"><i class="fa-solid fa-house"></i> Pendahuluan</a>
  <a href="ipv4&6.php" class="topic-nav-link <?= $current_file=='ipv4&6.php'?'active':'' ?>"><i class="fa-solid fa-map-location-dot"></i> Pengalamatan IP</a>
  <a href="tcpip.php" class="topic-nav-link <?= $current_file=='tcpip.php'?'active':'' ?>"><i class="fa-solid fa-layer-group"></i> Model TCP/IP</a>
  <a href="dhcp.php" class="topic-nav-link <?= $current_file=='dhcp.php'?'active':'' ?>"><i class="fa-solid fa-server"></i> Layanan Pendukung</a>
  <a href="keamanan.php" class="topic-nav-link <?= $current_file=='keamanan.php'?'active':'' ?>"><i class="fa-solid fa-shield-halved"></i> Keamanan Jaringan</a>
  <a href="seluler.php" class="topic-nav-link <?= $current_file=='seluler.php'?'active':'' ?>"><i class="fa-solid fa-tower-cell"></i> Jaringan Seluler</a>
  <a href="microwave.php" class="topic-nav-link <?= $current_file=='microwave.php'?'active':'' ?>"><i class="fa-solid fa-satellite-dish"></i> Microwave</a>
  <a href="satelitip.php" class="topic-nav-link <?= $current_file=='satelitip.php'?'active':'' ?>"><i class="fa-solid fa-satellite"></i> Satelit IP</a>
  <a href="optik.php" class="topic-nav-link <?= $current_file=='optik.php'?'active':'' ?>"><i class="fa-solid fa-wave-square"></i> Transmisi Optik</a>
  <a href="wlan.php" class="topic-nav-link <?= $current_file=='wlan.php'?'active':'' ?>"><i class="fa-solid fa-wifi"></i> Jaringan WLAN</a>
  <a href="subneting.php" class="topic-nav-link <?= $current_file=='subneting.php'?'active':'' ?>"><i class="fa-solid fa-diagram-project"></i> Subneting & Routing</a>
</div>

<div class="container">
