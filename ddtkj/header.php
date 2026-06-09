<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
$topics = [
  'ddtkj.php'     => ['icon'=>'fa-house-chimney',    'label'=>'Pendahuluan', 'color'=>'#8b5cf6'],
  'ipv4&6.php'    => ['icon'=>'fa-map-location-dot', 'label'=>'Pengalamatan IP (IPv4 & IPv6)', 'color'=>'#6366f1'],
  'tcpip.php'     => ['icon'=>'fa-layer-group',      'label'=>'Model TCP/IP', 'color'=>'#a855f7'],
  'dhcp.php'      => ['icon'=>'fa-server',           'label'=>'Layanan Pendukung Jaringan', 'color'=>'#ec4899'],
  'keamanan.php'  => ['icon'=>'fa-shield-halved',    'label'=>'Keamanan Jaringan', 'color'=>'#f43f5e'],
  'seluler.php'   => ['icon'=>'fa-tower-cell',       'label'=>'Arsitektur Jaringan Seluler', 'color'=>'#f97316'],
  'microwave.php' => ['icon'=>'fa-satellite-dish',   'label'=>'Komunikasi Microwave & MW Link', 'color'=>'#eab308'],
  'satelitip.php' => ['icon'=>'fa-satellite',        'label'=>'Teknologi Satelit Berbasis IP', 'color'=>'#22c55e'],
  'optik.php'     => ['icon'=>'fa-wave-square',      'label'=>'Media Transmisi Optik', 'color'=>'#06b6d4'],
  'wlan.php'      => ['icon'=>'fa-wifi',             'label'=>'Prinsip Jaringan WLAN', 'color'=>'#3b82f6'],
  'subneting.php' => ['icon'=>'fa-diagram-project',  'label'=>'Subnetting, CIDR & VLSM', 'color'=>'#2dd4bf'],
];
$current_label = $topics[$current_file]['label'] ?? 'Materi';
$current_color = $topics[$current_file]['color'] ?? '#8b5cf6';
$files_list = array_keys($topics);
$ci = array_search($current_file, $files_list);
$progress_pct = ($ci !== false && count($topics) > 1) ? round(($ci / (count($topics)-1)) * 100) : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DDTKJ — <?= htmlspecialchars($current_label) ?></title>
<meta name="description" content="Modul pembelajaran Dasar-Dasar Teknik Komputer dan Jaringan secara lengkap dan interaktif.">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
/* ═══════════════════════════════════════════════════════
   CUSTOM SCROLLBAR
═══════════════════════════════════════════════════════ */
::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-track { background: #060912; }
::-webkit-scrollbar-thumb { background: linear-gradient(#8b5cf6, #e879f9); border-radius: 99px; }

/* ═══════════════════════════════════════════════════════
   CSS VARIABLES & RESET
═══════════════════════════════════════════════════════ */
:root {
  --v:#8b5cf6; --v2:#7c3aed; --m:#e879f9; --t:#2dd4bf; --pk:#f472b6;
  --amber:#fbbf24; --red:#f87171; --green:#4ade80; --blue:#60a5fa;
  --dark:#060912; --dark2:#0a0f1e; --text:#f0eaff; --muted:#a89bc2;
  --card:rgba(255,255,255,0.045); --line:rgba(139,92,246,0.2); --radius:22px;
  --glow: 0 0 30px rgba(139,92,246,0.3);
  --accent: <?= $current_color ?>;
}
*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
html { scroll-behavior:smooth; }

body {
  font-family:'Inter',sans-serif;
  background: #060912;
  color:var(--text); overflow-x:hidden; min-height:100vh;
  -webkit-font-smoothing: antialiased;
}

/* ═══════════════════════════════════════════════════════
   READING PROGRESS BAR
═══════════════════════════════════════════════════════ */
#reading-progress {
  position:fixed; top:0; left:0; height:3px; z-index:9999;
  background:linear-gradient(90deg,<?= $current_color ?>,#e879f9,#2dd4bf);
  width:0%; transition:width 0.1s linear;
  box-shadow:0 0 10px <?= $current_color ?>88;
}

/* ═══════════════════════════════════════════════════════
   BACKGROUND — PARTICLES + GRID
═══════════════════════════════════════════════════════ */
#particle-canvas {
  position:fixed; inset:0; z-index:-3; pointer-events:none;
}
.bg-gradient {
  position:fixed; inset:0; z-index:-2; pointer-events:none;
  background:
    radial-gradient(ellipse 60% 50% at 15% 10%, rgba(139,92,246,0.25) 0%, transparent 60%),
    radial-gradient(ellipse 50% 40% at 85% 5%, rgba(232,121,249,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 40% 50% at 50% 95%, rgba(45,212,191,0.1) 0%, transparent 50%),
    linear-gradient(160deg, #050811 0%, #0c0919 40%, #070d1c 100%);
}
.bg-grid {
  position:fixed; inset:0; z-index:-1; pointer-events:none; overflow:hidden;
  background-image:
    linear-gradient(rgba(139,92,246,0.035) 1px, transparent 1px),
    linear-gradient(90deg, rgba(139,92,246,0.035) 1px, transparent 1px);
  background-size:70px 70px;
  mask-image:linear-gradient(to bottom, rgba(0,0,0,0.8), transparent 85%);
  animation:gridDrift 25s linear infinite;
}
@keyframes gridDrift { to { transform:translateY(70px); } }

/* ═══════════════════════════════════════════════════════
   NAVBAR
═══════════════════════════════════════════════════════ */
nav.main-nav {
  position:fixed; top:14px; left:50%; transform:translateX(-50%); z-index:200;
  width:min(1200px,calc(100% - 20px));
  background:rgba(6,4,18,0.85);
  backdrop-filter:blur(32px) saturate(180%);
  border:1px solid rgba(139,92,246,0.25);
  box-shadow:0 8px 48px rgba(0,0,0,0.6),
             0 0 0 1px rgba(139,92,246,0.08) inset,
             0 1px 0 rgba(255,255,255,0.05) inset;
  padding:0 1.2rem; height:62px;
  border-radius:999px;
  display:flex; align-items:center; justify-content:space-between;
  transition:all 0.3s ease;
}
nav.main-nav.scrolled {
  background:rgba(4,3,14,0.95);
  box-shadow:0 12px 60px rgba(0,0,0,0.7), 0 0 20px rgba(139,92,246,0.12);
}
.nav-logo {
  font-family:'Space Grotesk',sans-serif; font-weight:800; font-size:0.95rem;
  color:#fff; text-decoration:none; padding:0.42rem 1.15rem; flex-shrink:0;
  background:linear-gradient(135deg,rgba(139,92,246,0.35),rgba(232,121,249,0.18));
  border-radius:999px; border:1px solid rgba(139,92,246,0.3);
  display:flex; align-items:center; gap:0.52rem;
  box-shadow:0 0 20px rgba(139,92,246,0.2);
  transition:all 0.3s ease; position:relative; overflow:hidden;
}
.nav-logo::before {
  content:''; position:absolute; inset:0; border-radius:999px;
  background:linear-gradient(135deg,rgba(139,92,246,0.6),rgba(232,121,249,0.3));
  opacity:0; transition:opacity 0.3s; z-index:0;
}
.nav-logo:hover::before { opacity:1; }
.nav-logo > * { position:relative; z-index:1; }
.nav-logo span {
  background:linear-gradient(90deg,#c4b5fd,#f0abfc);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.nav-logo:hover { transform:scale(1.03); box-shadow:0 0 30px rgba(139,92,246,0.4); }

.nav-links { display:flex; gap:0.25rem; align-items:center; }
.nav-links > a {
  font-size:0.82rem; font-weight:600; color:#a89bc2; text-decoration:none;
  padding:0.45rem 1rem; border-radius:999px; transition:all 0.22s ease;
  display:flex; align-items:center; gap:0.4rem; position:relative;
}
.nav-links > a::after {
  content:''; position:absolute; bottom:6px; left:50%; transform:translateX(-50%);
  width:0; height:2px; border-radius:99px;
  background:linear-gradient(90deg,var(--v),var(--m));
  transition:width 0.25s ease;
}
.nav-links > a:hover { color:#fff; }
.nav-links > a:hover::after { width:60%; }

/* DROPDOWN */
.nav-dropdown { position:relative; }
.dropdown-btn {
  font-size:0.82rem; font-weight:600; color:#a89bc2;
  padding:0.45rem 1.1rem; border-radius:999px; transition:all 0.22s ease;
  display:flex; align-items:center; gap:0.42rem; cursor:pointer;
  border:none; background:none; font-family:inherit;
}
.dropdown-btn.active, .nav-dropdown:hover .dropdown-btn {
  color:#fff;
  background:linear-gradient(135deg,rgba(139,92,246,0.3),rgba(232,121,249,0.15));
}
.dropdown-btn .arrow { transition:transform 0.28s cubic-bezier(.34,1.56,.64,1); font-size:0.7rem; }
.nav-dropdown:hover .arrow { transform:rotate(180deg); }

.dropdown-menu {
  position:absolute; top:calc(100% + 16px); right:0; min-width:305px;
  background:rgba(10,6,28,0.97); border:1px solid rgba(139,92,246,0.28);
  border-radius:22px; padding:0.65rem;
  box-shadow:0 24px 70px rgba(0,0,0,0.7),0 0 0 1px rgba(139,92,246,0.08) inset;
  backdrop-filter:blur(24px);
  opacity:0; visibility:hidden; transform:translateY(-10px) scale(0.96);
  transition:all 0.25s cubic-bezier(.34,1.56,.64,1); transform-origin:top right; z-index:300;
}
.nav-dropdown:hover .dropdown-menu {
  opacity:1; visibility:visible; transform:translateY(0) scale(1);
}
.dropdown-menu a {
  display:flex; align-items:center; gap:0.78rem; padding:0.65rem 1rem;
  border-radius:14px; text-decoration:none; font-size:0.82rem; font-weight:600;
  color:#a89bc2; transition:all 0.2s ease; position:relative; overflow:hidden;
}
.dropdown-menu a::before {
  content:''; position:absolute; inset:0; border-radius:14px;
  background:linear-gradient(135deg,rgba(139,92,246,0.18),rgba(232,121,249,0.08));
  opacity:0; transition:opacity 0.2s;
}
.dropdown-menu a:hover { color:#fff; }
.dropdown-menu a:hover::before { opacity:1; }
.dropdown-menu a:hover i { transform:scale(1.2); }
.dropdown-menu a i { width:18px; text-align:center; font-size:0.88rem; transition:transform 0.2s; position:relative; z-index:1; }
.dropdown-menu a span { position:relative; z-index:1; }
.dropdown-menu a.active { color:#e5d9ff; background:linear-gradient(135deg,rgba(139,92,246,0.22),rgba(232,121,249,0.1)); }
.dropdown-menu a.active i { color:#e879f9; }
.dropdown-divider { height:1px; background:linear-gradient(90deg,transparent,rgba(139,92,246,0.2),transparent); margin:0.4rem 0; }

/* Progress inside dropdown */
.dropdown-progress {
  margin:0.5rem 0.4rem 0;
  padding:0.6rem 0.6rem 0.4rem;
  background:rgba(139,92,246,0.07);
  border:1px solid rgba(139,92,246,0.12);
  border-radius:12px;
}
.dropdown-progress span { font-size:0.72rem; color:#a89bc2; font-weight:600; display:block; margin-bottom:0.4rem; }
.dp-bar { height:4px; background:rgba(255,255,255,0.08); border-radius:99px; overflow:hidden; }
.dp-fill {
  height:100%; border-radius:99px;
  background:linear-gradient(90deg,#8b5cf6,#e879f9,#2dd4bf);
  width:<?= $progress_pct ?>%;
  transition:width 1s ease;
}

/* ═══════════════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════════════ */
.page-body { padding-top:90px; }
.container { max-width:1020px; margin:0 auto; padding:36px 1.5rem 6rem; }

/* ═══════════════════════════════════════════════════════
   CONTENT HEADER — HERO STYLE
═══════════════════════════════════════════════════════ */
.content-header {
  margin-bottom:3rem; text-align:center; position:relative;
  padding:4rem 2rem 3.5rem;
}
.content-header::before {
  content:''; position:absolute; inset:0; border-radius:32px;
  background:radial-gradient(ellipse at 50% 0%, <?= $current_color ?>22 0%, transparent 65%);
  pointer-events:none;
}
.content-header .badge {
  display:inline-flex; align-items:center; gap:0.52rem;
  background:rgba(<?= implode(',', sscanf($current_color,'#%02x%02x%02x')) ?>,0.15);
  border:1px solid rgba(<?= implode(',', sscanf($current_color,'#%02x%02x%02x')) ?>,0.35);
  border-radius:999px; padding:0.4rem 1.3rem;
  font-size:0.78rem; font-weight:700; color:<?= $current_color ?>;
  letter-spacing:0.04em; margin-bottom:1.4rem;
  animation:badgePulse 3s ease-in-out infinite;
}
@keyframes badgePulse {
  0%,100% { box-shadow:0 0 0 0 rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0); }
  50% { box-shadow:0 0 0 6px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0); }
}
.content-header h1 {
  font-family:'Space Grotesk',sans-serif;
  font-size:clamp(1.9rem,4.5vw,3.2rem); font-weight:800; line-height:1.12;
  margin-bottom:1.2rem;
  background:linear-gradient(135deg,#fff 0%,#d8b4fe 40%,#f0abfc 75%,var(--t) 100%);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
  animation:shimmerText 4s ease-in-out infinite;
  background-size:200% 200%;
}
@keyframes shimmerText {
  0%,100% { background-position:0% 50%; }
  50% { background-position:100% 50%; }
}
.content-header p {
  font-size:1.05rem; color:var(--muted); line-height:1.75;
  max-width:680px; margin:0 auto; font-weight:400;
}

/* ═══════════════════════════════════════════════════════
   MODULE SECTIONS — SCROLL ANIMATE
═══════════════════════════════════════════════════════ */
.module-section, .quiz-section {
  opacity:0; transform:translateY(28px);
  transition:opacity 0.65s cubic-bezier(.22,1,.36,1), transform 0.65s cubic-bezier(.22,1,.36,1);
}
.module-section.visible, .quiz-section.visible {
  opacity:1; transform:translateY(0);
}

.module-section {
  background:linear-gradient(145deg,rgba(139,92,246,0.06) 0%,rgba(255,255,255,0.025) 100%);
  border:1px solid rgba(139,92,246,0.16);
  border-radius:28px; padding:2.8rem 3.2rem; margin-bottom:2rem;
  box-shadow:0 20px 60px rgba(0,0,0,0.25),0 1px 0 rgba(255,255,255,0.04) inset;
  backdrop-filter:blur(12px); position:relative; overflow:hidden;
  transition-delay:var(--delay,0s);
}
.module-section::before {
  content:''; position:absolute; top:0; left:0; right:0; height:2px;
  background:linear-gradient(90deg,transparent,<?= $current_color ?>,#e879f9,#2dd4bf,transparent);
  opacity:0.7; border-radius:28px 28px 0 0;
}
.module-section::after {
  content:''; position:absolute; top:-80px; right:-80px;
  width:200px; height:200px; border-radius:50%;
  background:radial-gradient(circle, <?= $current_color ?>18 0%, transparent 70%);
  pointer-events:none;
}
.module-section:hover {
  border-color:rgba(139,92,246,0.28);
  box-shadow:0 24px 70px rgba(0,0,0,0.3), 0 0 40px rgba(139,92,246,0.07);
  transform:translateY(-2px);
  transition:border-color 0.3s, box-shadow 0.3s, transform 0.3s;
}

.module-section h2 {
  font-family:'Space Grotesk',sans-serif; font-size:1.75rem; font-weight:800;
  color:#fff; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.9rem;
  line-height:1.2; position:relative;
}
.module-section h2 .icon-badge {
  display:inline-flex; align-items:center; justify-content:center;
  width:42px; height:42px; border-radius:14px; flex-shrink:0;
  background:linear-gradient(135deg,<?= $current_color ?>,#e879f9);
  font-size:1.05rem; color:#fff;
  box-shadow:0 6px 20px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.4);
  animation:iconFloat 4s ease-in-out infinite;
}
@keyframes iconFloat {
  0%,100% { transform:translateY(0); }
  50% { transform:translateY(-3px); }
}
.module-section h3 {
  font-family:'Space Grotesk',sans-serif; font-size:1.3rem; color:#f0abfc;
  margin:2.5rem 0 0.9rem; padding-bottom:0.65rem;
  border-bottom:1px solid rgba(139,92,246,0.18);
  display:flex; align-items:center; gap:0.6rem;
}
.module-section h3::before {
  content:''; display:inline-block; width:4px; height:20px; flex-shrink:0;
  background:linear-gradient(to bottom, <?= $current_color ?>,#e879f9);
  border-radius:3px;
}
.module-section h4 {
  font-family:'Space Grotesk',sans-serif; font-size:1.05rem; color:#2dd4bf;
  margin:1.8rem 0 0.65rem; font-weight:700;
  display:flex; align-items:center; gap:0.45rem;
}
.module-section h4::before { content:'▸'; color:<?= $current_color ?>; font-size:0.85em; }
.module-section p { font-size:1rem; line-height:1.92; color:#c9bcdf; margin-bottom:1.3rem; }
.module-section ul, .module-section ol { margin-bottom:1.3rem; padding-left:1.7rem; color:#c9bcdf; font-size:0.98rem; line-height:1.85; }
.module-section li { margin-bottom:0.85rem; padding-left:0.2rem; }
.module-section strong { color:#e5d9ff; }
.module-section em { color:#a89bc2; }

/* ═══════════════════════════════════════════════════════
   BOXES
═══════════════════════════════════════════════════════ */
.highlight-box {
  background:linear-gradient(135deg,rgba(139,92,246,0.1),rgba(45,212,191,0.05));
  border-left:4px solid <?= $current_color ?>;
  padding:1.6rem 1.9rem; border-radius:0 18px 18px 0; margin:2rem 0;
  position:relative; overflow:hidden;
  transition:transform 0.3s, box-shadow 0.3s;
}
.highlight-box:hover { transform:translateX(4px); box-shadow:0 8px 30px rgba(139,92,246,0.12); }
.highlight-box strong { color:#e5d9ff; font-size:1.05rem; display:block; margin-bottom:0.55rem; }

.warning-box {
  background:linear-gradient(135deg,rgba(251,191,36,0.09),rgba(248,113,113,0.05));
  border-left:4px solid #fbbf24; padding:1.5rem 1.9rem; border-radius:0 18px 18px 0; margin:1.8rem 0;
  transition:transform 0.3s;
}
.warning-box:hover { transform:translateX(4px); }
.warning-box strong { color:#fde68a; font-size:1.02rem; display:block; margin-bottom:0.5rem; }

.tip-box {
  background:linear-gradient(135deg,rgba(45,212,191,0.09),rgba(99,102,241,0.05));
  border-left:4px solid #2dd4bf; padding:1.5rem 1.9rem; border-radius:0 18px 18px 0; margin:1.8rem 0;
  transition:transform 0.3s;
}
.tip-box:hover { transform:translateX(4px); }
.tip-box strong { color:#99f6e4; font-size:1.02rem; display:block; margin-bottom:0.5rem; }

.example-box {
  background:linear-gradient(135deg,rgba(12,8,32,0.8),rgba(20,10,45,0.6));
  border:1px solid rgba(139,92,246,0.22); padding:1.8rem;
  border-radius:18px; margin:1.8rem 0; position:relative; overflow:hidden;
  transition:border-color 0.3s, box-shadow 0.3s;
}
.example-box:hover { border-color:rgba(139,92,246,0.4); box-shadow:0 8px 30px rgba(139,92,246,0.1); }
.example-box::before {
  content:''; position:absolute; top:0; right:0; width:120px; height:120px;
  background:radial-gradient(circle, rgba(139,92,246,0.1) 0%, transparent 70%);
  pointer-events:none;
}
.example-box .ex-label {
  font-size:0.72rem; font-weight:700; color:<?= $current_color ?>;
  letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.7rem;
  display:flex; align-items:center; gap:0.45rem; font-family:'Space Grotesk',sans-serif;
}
.example-box .ex-label i { font-size:0.82rem; }
.example-box pre {
  background:rgba(0,0,0,0.4); border-radius:12px; padding:1.2rem 1.4rem;
  font-family:'JetBrains Mono','Courier New',monospace; font-size:0.84rem;
  color:#c4b5fd; overflow-x:auto; white-space:pre-wrap; line-height:1.7;
  margin-top:0.7rem; border:1px solid rgba(139,92,246,0.12);
  position:relative;
}
.example-box pre::before {
  content:''; position:absolute; left:0; top:0; bottom:0; width:3px;
  background:linear-gradient(to bottom, <?= $current_color ?>, transparent);
  border-radius:3px 0 0 3px;
}

/* ═══════════════════════════════════════════════════════
   CARDS — 3D TILT
═══════════════════════════════════════════════════════ */
.grid-cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:1.4rem; margin:1.8rem 0; }
.grid-cards-3 { grid-template-columns:repeat(auto-fit,minmax(225px,1fr)); }

.info-card {
  background:linear-gradient(145deg,rgba(139,92,246,0.07),rgba(255,255,255,0.025));
  border:1px solid rgba(139,92,246,0.16); padding:1.7rem; border-radius:20px;
  transition:all 0.3s cubic-bezier(.34,1.56,.64,1);
  position:relative; overflow:hidden; cursor:default;
  transform-style:preserve-3d; will-change:transform;
}
.info-card::before {
  content:''; position:absolute; inset:0; border-radius:20px;
  background:linear-gradient(135deg,rgba(139,92,246,0.12),rgba(232,121,249,0.06));
  opacity:0; transition:opacity 0.3s;
}
.info-card::after {
  content:''; position:absolute; top:0; right:0; width:80px; height:80px;
  border-radius:50%; pointer-events:none;
  background:radial-gradient(circle, <?= $current_color ?>20 0%, transparent 70%);
}
.info-card:hover { transform:translateY(-8px) rotateX(2deg); border-color:rgba(139,92,246,0.35); }
.info-card:hover::before { opacity:1; }
.info-card:hover { box-shadow:0 20px 50px rgba(139,92,246,0.18), 0 0 0 1px rgba(139,92,246,0.2); }
.info-card .card-icon {
  font-size:2rem; margin-bottom:1rem; display:block;
  background:linear-gradient(135deg,<?= $current_color ?>,#e879f9);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
  transition:transform 0.3s cubic-bezier(.34,1.56,.64,1);
}
.info-card:hover .card-icon { transform:scale(1.15) rotateY(15deg); }
.info-card h4 { font-size:1.06rem; color:#e5d9ff; margin-bottom:0.65rem; font-family:'Space Grotesk',sans-serif; font-weight:700; }
.info-card p { font-size:0.9rem; line-height:1.72; margin-bottom:0; color:#a89bc2; }

/* ═══════════════════════════════════════════════════════
   TABLE
═══════════════════════════════════════════════════════ */
.table-wrapper {
  overflow-x:auto; margin:1.8rem 0; border-radius:18px;
  border:1px solid rgba(139,92,246,0.14);
  box-shadow:0 8px 30px rgba(0,0,0,0.2);
}
table { width:100%; border-collapse:collapse; background:rgba(6,4,18,0.4); }
th,td { padding:1rem 1.3rem; text-align:left; border-bottom:1px solid rgba(139,92,246,0.08); }
th {
  background:linear-gradient(135deg,rgba(139,92,246,0.22),rgba(232,121,249,0.1));
  color:#e5d9ff; font-family:'Space Grotesk',sans-serif; font-weight:700;
  font-size:0.88rem; letter-spacing:0.02em; text-transform:uppercase;
}
td { color:#c9bcdf; line-height:1.62; font-size:0.91rem; transition:background 0.2s; }
tr:last-child td { border-bottom:none; }
tr:hover td { background:rgba(139,92,246,0.06); }
tr:nth-child(even) td { background:rgba(255,255,255,0.012); }
tr:nth-child(even):hover td { background:rgba(139,92,246,0.07); }

/* ═══════════════════════════════════════════════════════
   CODE INLINE
═══════════════════════════════════════════════════════ */
code {
  background:rgba(139,92,246,0.15); border:1px solid rgba(139,92,246,0.2);
  padding:0.18rem 0.55rem; border-radius:8px;
  font-family:'JetBrains Mono','Courier New',monospace;
  color:#f0abfc; font-size:0.87em;
  transition:background 0.2s;
}
code:hover { background:rgba(139,92,246,0.25); }

/* ═══════════════════════════════════════════════════════
   STEP LIST
═══════════════════════════════════════════════════════ */
.step-list { list-style:none; padding:0; margin:1.4rem 0; counter-reset:step-counter; }
.step-list li {
  display:flex; gap:1rem; align-items:flex-start; margin-bottom:0.9rem;
  padding:1.15rem 1.5rem;
  background:linear-gradient(135deg,rgba(139,92,246,0.06),rgba(255,255,255,0.02));
  border-radius:16px; border:1px solid rgba(139,92,246,0.1);
  transition:all 0.3s ease; cursor:default;
}
.step-list li:hover {
  background:linear-gradient(135deg,rgba(139,92,246,0.12),rgba(232,121,249,0.05));
  border-color:rgba(139,92,246,0.25); transform:translateX(5px);
}
.step-list li .step-num {
  flex-shrink:0; width:30px; height:30px; border-radius:50%;
  background:linear-gradient(135deg,<?= $current_color ?>,#e879f9);
  display:flex; align-items:center; justify-content:center;
  font-size:0.78rem; font-weight:800; color:#fff;
  box-shadow:0 4px 12px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.4);
  flex-shrink:0;
}
.step-list li .step-content { flex:1; line-height:1.78; color:#c9bcdf; font-size:0.97rem; }
.step-list li .step-content strong { color:#e5d9ff; }

/* ═══════════════════════════════════════════════════════
   COMPARE BOX
═══════════════════════════════════════════════════════ */
.compare-box { display:grid; grid-template-columns:1fr 1fr; gap:1.2rem; margin:1.8rem 0; }
.compare-item {
  background:rgba(255,255,255,0.025); border:1px solid rgba(139,92,246,0.14);
  border-radius:18px; padding:1.5rem; transition:all 0.3s ease;
}
.compare-item:hover { transform:translateY(-4px); box-shadow:0 12px 35px rgba(0,0,0,0.2); }
.compare-item h5 {
  font-family:'Space Grotesk',sans-serif; font-weight:700; margin-bottom:0.8rem;
  font-size:0.95rem; display:flex; align-items:center; gap:0.45rem;
}
.compare-item.good { border-color:rgba(45,212,191,0.2); }
.compare-item.good:hover { border-color:rgba(45,212,191,0.35); box-shadow:0 12px 35px rgba(45,212,191,0.08); }
.compare-item.good h5 { color:#2dd4bf; }
.compare-item.bad { border-color:rgba(244,114,182,0.2); }
.compare-item.bad:hover { border-color:rgba(244,114,182,0.35); box-shadow:0 12px 35px rgba(244,114,182,0.08); }
.compare-item.bad h5 { color:#f472b6; }
.compare-item ul { margin:0; padding-left:1.1rem; color:#c9bcdf; font-size:0.9rem; line-height:1.7; }

/* ═══════════════════════════════════════════════════════
   QUIZ SECTION — PREMIUM
═══════════════════════════════════════════════════════ */
.quiz-section {
  background:linear-gradient(145deg,rgba(99,102,241,0.09),rgba(139,92,246,0.055));
  border:1px solid rgba(139,92,246,0.22); border-radius:28px;
  padding:2.8rem 3.2rem; margin-bottom:2rem;
  position:relative; overflow:hidden;
}
.quiz-section::before {
  content:''; position:absolute; top:0; left:0; right:0; height:2px;
  background:linear-gradient(90deg,#6366f1,#8b5cf6,#e879f9,#fbbf24,#2dd4bf);
}
.quiz-section::after {
  content:'🎯'; position:absolute; top:2rem; right:2.5rem;
  font-size:2.5rem; opacity:0.07; transform:rotate(-10deg);
  pointer-events:none; user-select:none;
}
.quiz-section h2 {
  font-family:'Space Grotesk',sans-serif; font-size:1.6rem; font-weight:800;
  color:#fff; margin-bottom:0.5rem; display:flex; align-items:center; gap:0.8rem;
}
.quiz-section h2 i { animation:bounce 1.5s ease-in-out infinite; }
@keyframes bounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-5px)} }
.quiz-subtitle { color:var(--muted); font-size:0.92rem; margin-bottom:2rem; }

.quiz-score-bar {
  display:flex; align-items:center; justify-content:space-between;
  margin-bottom:2rem; padding:0.9rem 1.4rem;
  background:rgba(0,0,0,0.2); border-radius:16px; border:1px solid rgba(139,92,246,0.14);
}
.quiz-score-bar span { font-size:0.85rem; color:var(--muted); font-weight:600; display:flex; align-items:center; gap:0.4rem; }
.quiz-score-bar .score-val { font-size:1.2rem; font-weight:800; color:#c4b5fd; font-family:'Space Grotesk',sans-serif; }

.quiz-question {
  margin-bottom:1.6rem; padding:1.6rem; background:rgba(0,0,0,0.15);
  border-radius:18px; border:1px solid rgba(139,92,246,0.1);
  transition:all 0.4s ease; position:relative;
}
.quiz-question::before {
  content:''; position:absolute; left:0; top:0; bottom:0; width:3px;
  background:rgba(139,92,246,0.3); border-radius:3px 0 0 3px;
  transition:background 0.4s;
}
.quiz-question.correct::before { background:linear-gradient(to bottom,#4ade80,#22d3ee); }
.quiz-question.wrong::before { background:linear-gradient(to bottom,#f87171,#fb923c); }
.quiz-question.correct { border-color:rgba(74,222,128,0.3); background:rgba(74,222,128,0.04); }
.quiz-question.wrong { border-color:rgba(248,113,113,0.3); background:rgba(248,113,113,0.04); }

.quiz-q-num { font-size:0.72rem; font-weight:800; color:<?= $current_color ?>; text-transform:uppercase; letter-spacing:0.1em; margin-bottom:0.55rem; font-family:'Space Grotesk',sans-serif; }
.quiz-q-text { font-size:1rem; font-weight:600; color:#e5d9ff; margin-bottom:1.1rem; line-height:1.65; }
.quiz-options { display:flex; flex-direction:column; gap:0.52rem; }

.quiz-option {
  display:flex; align-items:center; gap:0.8rem; padding:0.72rem 1.1rem;
  border-radius:12px; background:rgba(255,255,255,0.035);
  border:1px solid rgba(255,255,255,0.07); cursor:pointer;
  transition:all 0.22s cubic-bezier(.34,1.56,.64,1); user-select:none;
}
.quiz-option:hover { background:rgba(139,92,246,0.12); border-color:rgba(139,92,246,0.3); transform:translateX(4px); }
.quiz-option input { accent-color:<?= $current_color ?>; width:16px; height:16px; cursor:pointer; flex-shrink:0; }
.quiz-option label { font-size:0.93rem; color:#c9bcdf; cursor:pointer; line-height:1.5; flex:1; }
.quiz-option.selected { background:rgba(139,92,246,0.14); border-color:rgba(139,92,246,0.38); transform:translateX(4px); }
.quiz-option.selected label { color:#e5d9ff; }
.quiz-option.correct-ans { background:rgba(74,222,128,0.1); border-color:rgba(74,222,128,0.4); }
.quiz-option.correct-ans label { color:#4ade80; font-weight:600; }
.quiz-option.wrong-ans { background:rgba(248,113,113,0.09); border-color:rgba(248,113,113,0.35); }
.quiz-option.wrong-ans label { color:#f87171; }

.quiz-feedback { display:none; margin-top:0.9rem; padding:0.75rem 1.1rem; border-radius:12px; font-size:0.87rem; font-weight:600; line-height:1.55; }
.quiz-feedback.show { display:flex; align-items:flex-start; gap:0.55rem; animation:feedbackIn 0.3s ease; }
@keyframes feedbackIn { from{opacity:0;transform:translateY(-5px)} to{opacity:1;transform:translateY(0)} }
.quiz-feedback.ok { background:rgba(74,222,128,0.1); color:#4ade80; border:1px solid rgba(74,222,128,0.22); }
.quiz-feedback.no { background:rgba(248,113,113,0.09); color:#f87171; border:1px solid rgba(248,113,113,0.22); }

.quiz-actions { display:flex; gap:1rem; margin-top:2rem; flex-wrap:wrap; align-items:center; }
.btn-quiz {
  padding:0.82rem 2.2rem; border-radius:14px; font-weight:700; font-size:0.9rem;
  cursor:pointer; border:none; transition:all 0.28s cubic-bezier(.34,1.56,.64,1);
  font-family:inherit; display:inline-flex; align-items:center; gap:0.55rem;
  position:relative; overflow:hidden;
}
.btn-quiz::before {
  content:''; position:absolute; inset:0; opacity:0;
  background:linear-gradient(135deg,rgba(255,255,255,0.15),transparent);
  transition:opacity 0.25s;
}
.btn-quiz:hover::before { opacity:1; }
.btn-check { background:linear-gradient(135deg,<?= $current_color ?>,#e879f9); color:#fff; box-shadow:0 6px 20px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.35); }
.btn-check:hover { box-shadow:0 12px 30px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.5); transform:translateY(-3px) scale(1.02); }
.btn-check:active { transform:translateY(0) scale(0.98); }
.btn-reset { background:rgba(255,255,255,0.07); color:#c4b5fd; border:1px solid rgba(139,92,246,0.25); }
.btn-reset:hover { background:rgba(139,92,246,0.15); transform:translateY(-2px); }

.quiz-result { display:none; padding:1.4rem 1.8rem; border-radius:18px; margin-top:1.5rem; text-align:center; animation:resultIn 0.4s cubic-bezier(.34,1.56,.64,1); }
@keyframes resultIn { from{opacity:0;transform:scale(0.9)} to{opacity:1;transform:scale(1)} }
.quiz-result.show { display:block; }
.quiz-result h3 { font-family:'Space Grotesk',sans-serif; font-size:1.5rem; margin-bottom:0.5rem; font-weight:800; }
.quiz-result p { font-size:0.95rem; color:var(--muted); }
.quiz-result .result-score { font-size:2.5rem; font-weight:900; font-family:'Space Grotesk',sans-serif; display:block; margin:0.5rem 0; }
.quiz-result.great { background:rgba(74,222,128,0.08); border:1px solid rgba(74,222,128,0.22); }
.quiz-result.great h3,.quiz-result.great .result-score { color:#4ade80; }
.quiz-result.mid { background:rgba(251,191,36,0.08); border:1px solid rgba(251,191,36,0.22); }
.quiz-result.mid h3,.quiz-result.mid .result-score { color:#fbbf24; }
.quiz-result.low { background:rgba(248,113,113,0.08); border:1px solid rgba(248,113,113,0.22); }
.quiz-result.low h3,.quiz-result.low .result-score { color:#f87171; }

/* ═══════════════════════════════════════════════════════
   PAGINATION
═══════════════════════════════════════════════════════ */
.pagination {
  display:flex; justify-content:space-between; margin-top:3.5rem; gap:1rem;
  border-top:1px solid rgba(139,92,246,0.12); padding-top:2.5rem;
}
.btn-nav {
  display:inline-flex; align-items:center; gap:0.75rem;
  background:rgba(139,92,246,0.09); color:#c4b5fd; padding:0.9rem 1.6rem;
  border-radius:16px; text-decoration:none; font-weight:700;
  border:1px solid rgba(139,92,246,0.22); transition:all 0.3s cubic-bezier(.34,1.56,.64,1);
  font-size:0.88rem; position:relative; overflow:hidden;
}
.btn-nav::before {
  content:''; position:absolute; inset:0;
  background:linear-gradient(135deg,<?= $current_color ?>,#e879f9);
  opacity:0; transition:opacity 0.3s; z-index:0;
}
.btn-nav > * { position:relative; z-index:1; }
.btn-nav:hover { color:#fff; border-color:transparent; transform:translateY(-3px); box-shadow:0 10px 30px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.35); }
.btn-nav:hover::before { opacity:1; }
.btn-nav.next { margin-left:auto; }
.btn-nav small { display:block; font-size:0.7rem; font-weight:500; opacity:0.7; }

/* ═══════════════════════════════════════════════════════
   SCROLL TO TOP BUTTON
═══════════════════════════════════════════════════════ */
#scroll-top {
  position:fixed; bottom:2rem; right:2rem; z-index:100;
  width:48px; height:48px; border-radius:50%;
  background:linear-gradient(135deg,<?= $current_color ?>,#e879f9);
  border:none; cursor:pointer; color:#fff; font-size:1.1rem;
  display:flex; align-items:center; justify-content:center;
  box-shadow:0 8px 24px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.4);
  opacity:0; transform:translateY(20px) scale(0.8);
  transition:all 0.4s cubic-bezier(.34,1.56,.64,1);
  pointer-events:none;
}
#scroll-top.visible { opacity:1; transform:translateY(0) scale(1); pointer-events:all; }
#scroll-top:hover { transform:translateY(-4px) scale(1.1); box-shadow:0 14px 34px rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.55); }
#scroll-top::after {
  content:''; position:absolute; inset:-4px; border-radius:50%;
  border:2px solid rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.3);
  animation:ripple 2s ease-in-out infinite;
}
@keyframes ripple { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0;transform:scale(1.5)} }

/* ═══════════════════════════════════════════════════════
   TOPIC PROGRESS BADGE (bottom of page)
═══════════════════════════════════════════════════════ */
.topic-progress-badge {
  display:flex; align-items:center; gap:0.8rem; padding:0.9rem 1.4rem;
  background:rgba(139,92,246,0.07); border:1px solid rgba(139,92,246,0.15);
  border-radius:16px; margin-bottom:1.5rem;
}
.topic-progress-badge .tpb-text { font-size:0.82rem; color:var(--muted); font-weight:600; }
.topic-progress-badge .tpb-bar { flex:1; height:6px; background:rgba(255,255,255,0.07); border-radius:99px; overflow:hidden; }
.topic-progress-badge .tpb-fill { height:100%; background:linear-gradient(90deg,<?= $current_color ?>,#e879f9); border-radius:99px; width:<?= $progress_pct ?>%; transition:width 1.5s ease; }
.topic-progress-badge .tpb-num { font-size:0.82rem; font-weight:800; color:#c4b5fd; font-family:'Space Grotesk',sans-serif; }

/* ═══════════════════════════════════════════════════════
   FLOATING LABEL
═══════════════════════════════════════════════════════ */
.section-label {
  display:inline-flex; align-items:center; gap:0.45rem;
  font-size:0.7rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase;
  color:<?= $current_color ?>; background:rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.12);
  border:1px solid rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>,0.25);
  padding:0.28rem 0.9rem; border-radius:99px; margin-bottom:1rem; font-family:'Space Grotesk',sans-serif;
}

/* ═══════════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════════ */
@media (max-width:860px) {
  .module-section, .quiz-section { padding:1.8rem 1.5rem; }
  nav.main-nav { width:calc(100% - 14px); border-radius:20px; height:auto; padding:0.7rem 1rem; flex-wrap:wrap; gap:0.4rem; top:8px; }
  .page-body { padding-top:80px; }
  .compare-box { grid-template-columns:1fr; }
  .grid-cards { grid-template-columns:1fr; }
  .dropdown-menu { right:-20px; min-width:270px; }
  .content-header { padding:2.5rem 1rem 2rem; }
}
@media (max-width:560px) {
  .pagination { flex-direction:column; }
  .btn-nav.next { margin-left:0; }
  #scroll-top { bottom:1.2rem; right:1.2rem; }
}

/* ═══════════════════════════════════════════════════════
   AURORA BLOBS
═══════════════════════════════════════════════════════ */
.aurora {
  position:fixed; inset:0; z-index:-1; pointer-events:none; overflow:hidden;
}
.aurora-blob {
  position:absolute; border-radius:50%;
  filter: blur(80px);
  animation: auroraMove 20s ease-in-out infinite alternate;
  mix-blend-mode: screen;
  opacity: 0.18;
}
.aurora-blob.a1 {
  width: 700px; height: 500px; top: -15%; left: -10%;
  background: radial-gradient(ellipse, <?= $current_color ?>cc 0%, transparent 70%);
  animation-duration: 22s; animation-delay: 0s;
}
.aurora-blob.a2 {
  width: 600px; height: 600px; top: 10%; right: -15%;
  background: radial-gradient(ellipse, #e879f9cc 0%, transparent 70%);
  animation-duration: 18s; animation-delay: -6s;
  animation-direction: alternate-reverse;
}
.aurora-blob.a3 {
  width: 500px; height: 400px; bottom: 5%; left: 20%;
  background: radial-gradient(ellipse, #2dd4bfaa 0%, transparent 70%);
  animation-duration: 25s; animation-delay: -12s;
}
.aurora-blob.a4 {
  width: 400px; height: 400px; top: 40%; left: 40%;
  background: radial-gradient(ellipse, #a855f799 0%, transparent 70%);
  animation-duration: 30s; animation-delay: -4s;
  animation-direction: alternate-reverse;
}
@keyframes auroraMove {
  0%   { transform: translate(0,    0)    scale(1);   }
  20%  { transform: translate(80px, -60px) scale(1.1); }
  40%  { transform: translate(-40px, 80px) scale(0.95);}
  60%  { transform: translate(100px,40px)  scale(1.05);}
  80%  { transform: translate(-60px,-30px) scale(1.15);}
  100% { transform: translate(20px, 60px)  scale(0.9); }
}

/* ═══════════════════════════════════════════════════════
   MOUSE GLOW FOLLOWER
═══════════════════════════════════════════════════════ */
#mouse-glow {
  position: fixed; top: 0; left: 0; z-index: 0;
  width: 400px; height: 400px;
  border-radius: 50%; pointer-events: none;
  background: radial-gradient(circle,
    rgba(<?= implode(',',sscanf($current_color,'#%02x%02x%02x')) ?>, 0.12) 0%,
    rgba(232,121,249,0.06) 40%,
    transparent 70%
  );
  transition: opacity 0.5s ease;
  will-change: transform;
}
</style>
</head>
<body>
<!-- BACKGROUND LAYERS -->
<canvas id="particle-canvas"></canvas>
<div class="bg-gradient"></div>
<div class="bg-grid"></div>
<!-- AURORA BLOBS -->
<div class="aurora" aria-hidden="true">
  <div class="aurora-blob a1"></div>
  <div class="aurora-blob a2"></div>
  <div class="aurora-blob a3"></div>
  <div class="aurora-blob a4"></div>
</div>
<!-- MOUSE GLOW -->
<div id="mouse-glow" aria-hidden="true"></div>

<!-- READING PROGRESS -->
<div id="reading-progress"></div>

<!-- SCROLL TO TOP -->
<button id="scroll-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Kembali ke atas">
  <i class="fa-solid fa-chevron-up"></i>
</button>

<!-- NAVBAR -->
<nav class="main-nav" id="main-nav">
  <a href="../index.php" class="nav-logo">
    <i class="fa-solid fa-network-wired"></i><span>DDTKJ</span>
  </a>
  <div class="nav-links">
    <a href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
    <div class="nav-dropdown">
      <button class="dropdown-btn <?= ($current_file !== 'index.php') ? 'active' : '' ?>">
        <i class="fa-solid fa-book-open"></i>
        Materi
        <i class="fa-solid fa-chevron-down arrow"></i>
      </button>
      <div class="dropdown-menu">
        <?php
        $num=0;
        foreach($topics as $file=>$info):
          $isActive = $current_file===$file;
          if($num===1) echo '<div class="dropdown-divider"></div>';
          $num++;
        ?>
        <a href="<?= $file ?>" class="<?= $isActive?'active':'' ?>">
          <i class="fa-solid <?= $info['icon'] ?>" style="color:<?= $info['color'] ?>"></i>
          <span><?= $info['label'] ?></span>
        </a>
        <?php endforeach; ?>
        <div class="dropdown-progress">
          <span><i class="fa-solid fa-chart-line"></i> Progress Belajar: <?= $progress_pct ?>%</span>
          <div class="dp-bar"><div class="dp-fill"></div></div>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="page-body">
<div class="container">

<script>
/* ═══════════════════════════════════════════════
   INTERACTIVE BACKGROUND SYSTEM v2
   — Constellation Network Particles
   — Mouse Repulsion / Attraction
   — Click Burst Explosion
   — Mouse Glow Follower
═══════════════════════════════════════════════ */
(function(){
  const canvas = document.getElementById('particle-canvas');
  const ctx    = canvas.getContext('2d');
  const ACCENT = '<?= $current_color ?>';
  const MAGENTA = '#e879f9';
  const TEAL   = '#2dd4bf';

  /* ── Hex → RGBA helper ── */
  function hr(hex,a){ const r=parseInt(hex.slice(1,3),16),g=parseInt(hex.slice(3,5),16),b=parseInt(hex.slice(5,7),16); return`rgba(${r},${g},${b},${a})`; }

  let W, H;
  function resize(){
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize, {passive:true});

  /* ── Mouse state ── */
  const mouse = { x: W/2, y: H/2, active: false };
  window.addEventListener('mousemove', e => {
    mouse.x = e.clientX; mouse.y = e.clientY; mouse.active = true;
  }, {passive:true});
  window.addEventListener('mouseleave', () => { mouse.active = false; });

  /* ── Mouse Glow Follower ── */
  const glow = document.getElementById('mouse-glow');
  let gX = 0, gY = 0, tX = W/2, tY = H/2;
  function updateGlow(){
    tX = mouse.active ? mouse.x : tX;
    tY = mouse.active ? mouse.y : tY;
    gX += (tX - gX) * 0.08;
    gY += (tY - gY) * 0.08;
    glow.style.transform = `translate(${gX - 200}px, ${gY - 200}px)`;
    glow.style.opacity = mouse.active ? '1' : '0.3';
    requestAnimationFrame(updateGlow);
  }
  updateGlow();

  /* ── Particle class ── */
  const COLORS = [ACCENT, MAGENTA, TEAL, '#a855f7'];
  const CONNECT_DIST = 130;
  const MOUSE_REPEL  = 100;
  const NODE_COUNT   = 60;

  class Node {
    constructor(init=false){
      this.init(init);
    }
    init(scatter=false){
      this.x  = Math.random() * W;
      this.y  = scatter ? Math.random() * H : Math.random() * H;
      this.vx = (Math.random() - 0.5) * 0.45;
      this.vy = (Math.random() - 0.5) * 0.45;
      this.baseSize = Math.random() * 2.2 + 0.8;
      this.size = this.baseSize;
      this.color= COLORS[Math.floor(Math.random()*COLORS.length)];
      this.pulse = Math.random() * Math.PI * 2;
      this.isHub = Math.random() < 0.12;  /* 12% chance = hub node (larger) */
      if(this.isHub){ this.baseSize = Math.random()*2+3; this.size=this.baseSize; }
    }
    update(){
      /* Pulse size */
      this.pulse += 0.025;
      this.size = this.baseSize + Math.sin(this.pulse) * (this.isHub ? 1.5 : 0.5);

      /* Mouse repulsion */
      if(mouse.active){
        const dx = this.x - mouse.x, dy = this.y - mouse.y;
        const dist = Math.sqrt(dx*dx + dy*dy);
        if(dist < MOUSE_REPEL){
          const force = (MOUSE_REPEL - dist) / MOUSE_REPEL;
          this.vx += (dx/dist) * force * 1.8;
          this.vy += (dy/dist) * force * 1.8;
        }
      }

      /* Damping */
      this.vx *= 0.98; this.vy *= 0.98;
      /* Max speed */
      const spd = Math.sqrt(this.vx*this.vx+this.vy*this.vy);
      if(spd > 2){ this.vx=(this.vx/spd)*2; this.vy=(this.vy/spd)*2; }

      this.x += this.vx; this.y += this.vy;

      /* Wrap edges */
      if(this.x < -20) this.x = W + 20;
      if(this.x > W+20) this.x = -20;
      if(this.y < -20) this.y = H + 20;
      if(this.y > H+20) this.y = -20;
    }
    draw(){
      ctx.save();
      if(this.isHub){
        /* Hub: glowing ring */
        const grad = ctx.createRadialGradient(this.x,this.y,0,this.x,this.y,this.size*3);
        grad.addColorStop(0, hr(this.color, 0.9));
        grad.addColorStop(0.4, hr(this.color, 0.4));
        grad.addColorStop(1, hr(this.color, 0));
        ctx.fillStyle = grad;
        ctx.beginPath(); ctx.arc(this.x,this.y,this.size*3,0,Math.PI*2); ctx.fill();
        ctx.strokeStyle = hr(this.color, 0.7);
        ctx.lineWidth = 1;
        ctx.beginPath(); ctx.arc(this.x,this.y,this.size,0,Math.PI*2); ctx.stroke();
      } else {
        ctx.fillStyle = hr(this.color, 0.75);
        ctx.shadowColor = this.color;
        ctx.shadowBlur  = 6;
        ctx.beginPath(); ctx.arc(this.x,this.y,this.size,0,Math.PI*2); ctx.fill();
      }
      ctx.restore();
    }
  }

  /* ── Burst Particle (on click) ── */
  class BurstParticle {
    constructor(x,y){
      const angle = Math.random()*Math.PI*2;
      const speed = Math.random()*6+2;
      this.x=x; this.y=y;
      this.vx=Math.cos(angle)*speed; this.vy=Math.sin(angle)*speed;
      this.life=1; this.decay=Math.random()*0.025+0.015;
      this.size=Math.random()*3+1;
      this.color=COLORS[Math.floor(Math.random()*COLORS.length)];
    }
    update(){ this.x+=this.vx; this.y+=this.vy; this.vx*=0.92; this.vy*=0.92; this.life-=this.decay; }
    draw(){
      ctx.save(); ctx.globalAlpha=this.life;
      ctx.fillStyle=this.color; ctx.shadowColor=this.color; ctx.shadowBlur=10;
      ctx.beginPath(); ctx.arc(this.x,this.y,this.size*this.life,0,Math.PI*2); ctx.fill();
      ctx.restore();
    }
    dead(){ return this.life<=0; }
  }

  /* ── Init nodes ── */
  let nodes = Array.from({length: NODE_COUNT}, () => new Node(true));
  let bursts = [];

  /* ── Click burst ── */
  window.addEventListener('click', e => {
    if(e.target.closest('a,button,input,label,select')) return;
    for(let i=0;i<28;i++) bursts.push(new BurstParticle(e.clientX, e.clientY));
  });

  /* ── Draw connection lines ── */
  function drawConnections(){
    for(let i=0;i<nodes.length;i++){
      for(let j=i+1;j<nodes.length;j++){
        const dx=nodes[i].x-nodes[j].x, dy=nodes[i].y-nodes[j].y;
        const dist=Math.sqrt(dx*dx+dy*dy);
        if(dist<CONNECT_DIST){
          const alpha=(1-dist/CONNECT_DIST)*0.28;
          /* Gradient line */
          const grad=ctx.createLinearGradient(nodes[i].x,nodes[i].y,nodes[j].x,nodes[j].y);
          grad.addColorStop(0, hr(nodes[i].color,alpha));
          grad.addColorStop(1, hr(nodes[j].color,alpha));
          ctx.strokeStyle=grad;
          ctx.lineWidth=nodes[i].isHub||nodes[j].isHub ? 1.2 : 0.6;
          ctx.beginPath(); ctx.moveTo(nodes[i].x,nodes[i].y); ctx.lineTo(nodes[j].x,nodes[j].y); ctx.stroke();

          /* Data packet animation: small dot moving along line */
          if((nodes[i].isHub||nodes[j].isHub) && alpha>0.15){
            const t=(Date.now()/1000)%1;
            const px=nodes[i].x+(nodes[j].x-nodes[i].x)*t;
            const py=nodes[i].y+(nodes[j].y-nodes[i].y)*t;
            ctx.save(); ctx.fillStyle=hr(ACCENT,0.8); ctx.shadowColor=ACCENT; ctx.shadowBlur=8;
            ctx.beginPath(); ctx.arc(px,py,1.5,0,Math.PI*2); ctx.fill(); ctx.restore();
          }
        }
      }
    }
  }

  /* ── Draw mouse interaction ring ── */
  function drawMouseRing(){
    if(!mouse.active) return;
    const r=MOUSE_REPEL;
    const grad=ctx.createRadialGradient(mouse.x,mouse.y,0,mouse.x,mouse.y,r);
    grad.addColorStop(0, hr(ACCENT,0.06));
    grad.addColorStop(0.7, hr(ACCENT,0.04));
    grad.addColorStop(1, hr(ACCENT,0));
    ctx.fillStyle=grad; ctx.beginPath(); ctx.arc(mouse.x,mouse.y,r,0,Math.PI*2); ctx.fill();
    /* Dashed ring */
    ctx.save(); ctx.strokeStyle=hr(ACCENT,0.18); ctx.lineWidth=1;
    ctx.setLineDash([4,8]); ctx.lineDashOffset=-Date.now()/80;
    ctx.beginPath(); ctx.arc(mouse.x,mouse.y,r,0,Math.PI*2); ctx.stroke(); ctx.restore();
  }

  /* ── Main render loop ── */
  function animate(){
    ctx.clearRect(0,0,W,H);
    drawMouseRing();
    drawConnections();
    nodes.forEach(n=>{ n.update(); n.draw(); });
    bursts=bursts.filter(b=>!b.dead());
    bursts.forEach(b=>{ b.update(); b.draw(); });
    requestAnimationFrame(animate);
  }
  animate();
})();

/* ═══════ READING PROGRESS ═══════ */
const progressBar=document.getElementById('reading-progress');
window.addEventListener('scroll',()=>{
  const st=window.scrollY, dh=document.documentElement.scrollHeight-window.innerHeight;
  progressBar.style.width=(dh>0?(st/dh*100):0)+'%';
  // Scroll-to-top visibility
  document.getElementById('scroll-top').classList.toggle('visible',st>400);
  // Navbar scroll class
  document.getElementById('main-nav').classList.toggle('scrolled',st>30);
},{ passive:true });

/* ═══════ INTERSECTION OBSERVER — scroll animations ═══════ */
const observer=new IntersectionObserver((entries)=>{
  entries.forEach((e,i)=>{
    if(e.isIntersecting){
      e.target.style.transitionDelay=(e.target.dataset.delay||'0')+'ms';
      e.target.classList.add('visible');
      observer.unobserve(e.target);
    }
  });
},{threshold:0.1,rootMargin:'0px 0px -40px 0px'});

document.addEventListener('DOMContentLoaded',()=>{
  // Observe sections with staggered delay
  document.querySelectorAll('.module-section,.quiz-section').forEach((el,i)=>{
    el.dataset.delay=i*80;
    observer.observe(el);
  });

  // 3D tilt effect on info-cards
  document.querySelectorAll('.info-card').forEach(card=>{
    card.addEventListener('mousemove',e=>{
      const r=card.getBoundingClientRect();
      const x=(e.clientX-r.left)/r.width-0.5;
      const y=(e.clientY-r.top)/r.height-0.5;
      card.style.transform=`translateY(-8px) rotateX(${-y*12}deg) rotateY(${x*12}deg)`;
    });
    card.addEventListener('mouseleave',()=>{
      card.style.transform='';
    });
  });

  // Step list stagger animation
  document.querySelectorAll('.step-list li').forEach((li,i)=>{
    li.style.opacity='0'; li.style.transform='translateX(-20px)';
    li.style.transition=`all 0.5s ease ${i*80}ms`;
    const liObs=new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){ e.target.style.opacity='1'; e.target.style.transform='translateX(0)'; liObs.unobserve(e.target); }
      });
    },{threshold:0.3});
    liObs.observe(li);
  });
});

/* ═══════ QUIZ ENGINE ═══════ */
function initQuiz(id, answers) {
  const container=document.getElementById(id);
  if(!container) return;
  const questions=container.querySelectorAll('.quiz-question');
  const resultEl=container.querySelector('.quiz-result');
  const scoreEl=container.querySelector('.score-val');

  container.querySelector('.btn-check').addEventListener('click',()=>{
    let score=0;
    questions.forEach((q,i)=>{
      const opts=q.querySelectorAll('.quiz-option');
      const fb=q.querySelector('.quiz-feedback');
      let chosen=null;
      opts.forEach(opt=>{ if(opt.querySelector('input').checked) chosen=opt.querySelector('input').value; });
      const correct=answers[i];
      opts.forEach(opt=>{
        const inp=opt.querySelector('input');
        opt.classList.remove('selected','correct-ans','wrong-ans');
        if(inp.value===correct) opt.classList.add('correct-ans');
        else if(inp.checked) opt.classList.add('wrong-ans');
      });
      if(chosen===correct){
        score++; q.classList.add('correct'); q.classList.remove('wrong');
        fb.className='quiz-feedback show ok';
        fb.innerHTML='<i class="fa-solid fa-circle-check"></i><span>'+(q.dataset.explain||'Jawaban benar!')+'</span>';
      } else {
        q.classList.add('wrong'); q.classList.remove('correct');
        fb.className='quiz-feedback show no';
        fb.innerHTML='<i class="fa-solid fa-circle-xmark"></i><span>'+(q.dataset.explain||'Jawaban kurang tepat.')+(chosen?'':' (Belum dijawab)')+'</span>';
      }
    });
    if(scoreEl) scoreEl.textContent=score+'/'+questions.length;
    if(resultEl){
      const pct=(score/questions.length)*100;
      resultEl.classList.add('show');
      resultEl.className='quiz-result show '+(pct>=80?'great':pct>=50?'mid':'low');
      const emoji=pct>=80?'🎉':pct>=50?'👍':'📚';
      const msg=pct>=80?'Luar Biasa!':pct>=50?'Cukup Baik!':'Belajar Lagi ya!';
      resultEl.querySelector('h3').textContent=emoji+' '+msg;
      resultEl.querySelector('.result-score').textContent=score+'/'+questions.length;
      resultEl.querySelector('p').textContent='Kamu menjawab '+score+' dari '+questions.length+' soal benar ('+Math.round(pct)+'%)';
      resultEl.scrollIntoView({behavior:'smooth',block:'nearest'});
    }
  });

  container.querySelector('.btn-reset').addEventListener('click',()=>{
    questions.forEach(q=>{
      q.classList.remove('correct','wrong');
      q.querySelectorAll('.quiz-option').forEach(o=>{ o.classList.remove('selected','correct-ans','wrong-ans'); o.querySelector('input').checked=false; });
      const fb=q.querySelector('.quiz-feedback'); fb.className='quiz-feedback'; fb.innerHTML='';
    });
    if(scoreEl) scoreEl.textContent='0/'+questions.length;
    if(resultEl) resultEl.className='quiz-result';
  });

  questions.forEach(q=>{
    q.querySelectorAll('.quiz-option').forEach(opt=>{
      opt.addEventListener('click',()=>{
        if(q.classList.contains('correct')||q.classList.contains('wrong')) return;
        opt.querySelector('input').checked=true;
        q.querySelectorAll('.quiz-option').forEach(o=>o.classList.remove('selected'));
        opt.classList.add('selected');
      });
    });
  });
}
</script>
