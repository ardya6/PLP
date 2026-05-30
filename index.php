<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = ['home', 'definition', 'importance', 'threats', 'prevention', 'habits', 'conclusion'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Keamanan Siber - Personal Security</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root {
  --blue: #1a3af7;
  --blue-light: #e8ecff;
  --blue-mid: #4f6ef7;
  --gold: #f5a623;
  --dark: #0d1117;
  --text: #1a1a2e;
  --muted: #5a6272;
  --bg: #f7f8ff;
  --card: #ffffff;
  --radius: 16px;
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Plus Jakarta Sans', sans-serif;
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
  min-height: 100vh;
}

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 100;
  background: rgba(247,248,255,0.85);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid rgba(26,58,247,0.08);
  padding: 0 2rem;
  height: 64px;
  display: flex; align-items: center; justify-content: space-between;
}
.nav-logo {
  font-family: 'Syne', sans-serif;
  font-weight: 800; font-size: 1.1rem;
  color: var(--blue);
  text-decoration: none;
  letter-spacing: -0.02em;
}
.nav-links { display: flex; gap: 0.25rem; }
.nav-links a {
  font-size: 0.8rem; font-weight: 500;
  color: var(--muted);
  text-decoration: none;
  padding: 0.4rem 0.75rem;
  border-radius: 8px;
  transition: all 0.2s;
}
.nav-links a:hover, .nav-links a.active {
  color: var(--blue);
  background: var(--blue-light);
}

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
  padding: 80px 2rem 2rem;
}
.hero-bg {
  position: absolute; inset: 0; z-index: 0;
  background:
    radial-gradient(ellipse 60% 50% at 15% 40%, rgba(26,58,247,0.08) 0%, transparent 70%),
    radial-gradient(ellipse 50% 60% at 85% 60%, rgba(245,166,35,0.07) 0%, transparent 70%);
}
.hero-orb {
  position: absolute; border-radius: 50%;
  animation: float 6s ease-in-out infinite;
}
.hero-orb-1 {
  width: 400px; height: 400px;
  background: radial-gradient(circle, rgba(26,58,247,0.12), transparent 70%);
  top: -100px; right: -100px;
  animation-delay: 0s;
}
.hero-orb-2 {
  width: 300px; height: 300px;
  background: radial-gradient(circle, rgba(245,166,35,0.1), transparent 70%);
  bottom: -50px; left: -80px;
  animation-delay: -3s;
}
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
.hero-content {
  position: relative; z-index: 1;
  text-align: center; max-width: 800px;
}
.hero-badge {
  display: inline-flex; align-items: center; gap: 0.5rem;
  background: var(--blue-light);
  color: var(--blue);
  font-size: 0.75rem; font-weight: 600;
  padding: 0.35rem 1rem; border-radius: 999px;
  margin-bottom: 1.5rem;
  border: 1px solid rgba(26,58,247,0.15);
  animation: fadeSlideUp 0.6s ease both;
}
.hero-badge span { width: 6px; height: 6px; border-radius: 50%; background: var(--blue); animation: pulse 2s infinite; }
@keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(1.4)} }
.hero h1 {
  font-family: 'Syne', sans-serif;
  font-size: clamp(3rem, 8vw, 6rem);
  font-weight: 800;
  line-height: 1;
  letter-spacing: -0.04em;
  animation: fadeSlideUp 0.6s 0.1s ease both;
}
.hero h1 .accent { color: var(--blue); position: relative; display: inline-block; }
.hero h1 .accent::after {
  content: '';
  position: absolute; left: 0; bottom: -4px; right: 0; height: 4px;
  background: var(--gold); border-radius: 2px;
}
.hero-sub {
  margin-top: 1.5rem;
  font-size: 1.1rem; color: var(--muted); line-height: 1.7;
  animation: fadeSlideUp 0.6s 0.2s ease both;
}
.hero-cta {
  margin-top: 2.5rem;
  display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;
  animation: fadeSlideUp 0.6s 0.3s ease both;
}
.btn-primary {
  background: var(--blue); color: #fff;
  padding: 0.875rem 2rem; border-radius: 12px;
  font-weight: 600; font-size: 0.95rem;
  text-decoration: none;
  transition: all 0.2s;
  box-shadow: 0 4px 24px rgba(26,58,247,0.3);
}
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 32px rgba(26,58,247,0.4); }
.btn-outline {
  background: transparent; color: var(--blue);
  padding: 0.875rem 2rem; border-radius: 12px;
  font-weight: 600; font-size: 0.95rem;
  text-decoration: none;
  border: 2px solid rgba(26,58,247,0.25);
  transition: all 0.2s;
}
.btn-outline:hover { background: var(--blue-light); border-color: var(--blue); }

/* ── FLOATING ICONS ── */
.hero-icons {
  display: flex; justify-content: center; gap: 1.5rem;
  margin-top: 3rem; flex-wrap: wrap;
  animation: fadeSlideUp 0.6s 0.4s ease both;
}
.hero-icon-card {
  background: var(--card);
  border: 1px solid rgba(26,58,247,0.1);
  border-radius: 16px;
  padding: 1rem 1.5rem;
  display: flex; align-items: center; gap: 0.75rem;
  font-size: 0.85rem; font-weight: 600; color: var(--text);
  box-shadow: 0 2px 16px rgba(0,0,0,0.04);
  transition: transform 0.2s;
}
.hero-icon-card:hover { transform: translateY(-4px); }
.hero-icon-card .icon { font-size: 1.5rem; }

/* ── SECTIONS ── */
section { padding: 5rem 2rem; max-width: 1100px; margin: 0 auto; }
.section-tag {
  display: inline-block;
  background: var(--blue-light); color: var(--blue);
  font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 0.3rem 0.9rem; border-radius: 999px;
  margin-bottom: 1rem;
}
section h2 {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 800; letter-spacing: -0.03em;
  line-height: 1.1;
  margin-bottom: 1.25rem;
}
section h2 .hl { color: var(--blue); }
section .lead {
  font-size: 1.05rem; color: var(--muted);
  line-height: 1.8; max-width: 680px;
}

/* ── CARDS ── */
.card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
.card {
  background: var(--card);
  border: 1px solid rgba(26,58,247,0.08);
  border-radius: 20px;
  padding: 1.75rem;
  transition: all 0.3s;
  position: relative; overflow: hidden;
}
.card::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: var(--blue);
  transform: scaleX(0); transform-origin: left;
  transition: transform 0.3s;
}
.card:hover { transform: translateY(-4px); box-shadow: 0 16px 48px rgba(26,58,247,0.1); border-color: rgba(26,58,247,0.2); }
.card:hover::before { transform: scaleX(1); }
.card-icon {
  width: 52px; height: 52px; border-radius: 14px;
  background: var(--blue-light);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.5rem; margin-bottom: 1.25rem;
}
.card h3 {
  font-family: 'Syne', sans-serif;
  font-size: 1.2rem; font-weight: 700;
  margin-bottom: 0.75rem;
}
.card p { font-size: 0.9rem; color: var(--muted); line-height: 1.7; }

/* ── THREAT CARDS ── */
.threat-card {
  background: var(--card);
  border-radius: 20px;
  border: 1px solid rgba(26,58,247,0.08);
  padding: 2rem;
  display: flex; gap: 1.5rem;
  align-items: flex-start;
  margin-bottom: 1.5rem;
  transition: all 0.3s;
  position: relative; overflow: hidden;
}
.threat-card:hover { transform: translateX(8px); box-shadow: 0 8px 32px rgba(26,58,247,0.1); }
.threat-badge {
  min-width: 64px; height: 64px; border-radius: 16px;
  display: flex; align-items: center; justify-content: center;
  font-size: 2rem;
}
.threat-badge.red { background: #fff0f0; }
.threat-badge.orange { background: #fff5e6; }
.threat-badge.purple { background: #f0eeff; }
.threat-content h3 {
  font-family: 'Syne', sans-serif;
  font-size: 1.3rem; font-weight: 700; margin-bottom: 0.5rem;
}
.threat-content p { font-size: 0.9rem; color: var(--muted); line-height: 1.7; }

/* ── PHISHING CIRI ── */
.phishing-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.phishing-item {
  background: var(--card);
  border: 1px solid rgba(26,58,247,0.08);
  border-radius: 16px;
  padding: 1.5rem;
  display: flex; gap: 1rem; align-items: flex-start;
  transition: all 0.25s;
}
.phishing-item:hover { border-color: var(--blue); transform: translateY(-2px); }
.phishing-num {
  min-width: 36px; height: 36px;
  background: var(--blue); color: #fff;
  border-radius: 10px;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1rem;
}
.phishing-item h4 { font-size: 0.95rem; font-weight: 700; margin-bottom: 0.4rem; }
.phishing-item p { font-size: 0.82rem; color: var(--muted); line-height: 1.6; }

/* ── PREVENTION STEPS ── */
.prevention-list { margin-top: 3rem; }
.prevention-item {
  display: flex; gap: 1.5rem; align-items: flex-start;
  padding: 1.75rem;
  background: var(--card);
  border-radius: 20px;
  border: 1px solid rgba(26,58,247,0.08);
  margin-bottom: 1rem;
  position: relative;
  transition: all 0.3s;
  cursor: default;
}
.prevention-item:hover { box-shadow: 0 8px 32px rgba(26,58,247,0.1); border-color: rgba(26,58,247,0.2); }
.prevention-step {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 2.5rem;
  color: var(--blue-light); min-width: 60px; line-height: 1;
  user-select: none;
}
.prevention-body h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 0.5rem; font-family: 'Syne', sans-serif; }
.prevention-body p { font-size: 0.88rem; color: var(--muted); line-height: 1.7; }

/* ── BAD HABITS ── */
.habits-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2.5rem; }
.habit-card {
  background: var(--card);
  border-radius: 20px;
  padding: 1.75rem;
  border: 1px solid rgba(26,58,247,0.08);
  transition: all 0.3s;
}
.habit-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(26,58,247,0.1); }
.habit-label {
  display: inline-flex; align-items: center; gap: 0.4rem;
  font-size: 0.7rem; font-weight: 700; letter-spacing: 0.06em;
  text-transform: uppercase; padding: 0.3rem 0.75rem; border-radius: 999px;
  margin-bottom: 1rem;
}
.habit-label.bad { background: #fff0f0; color: #c0392b; }
.habit-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 0.75rem; font-family: 'Syne', sans-serif; }
.habit-card ul { list-style: none; }
.habit-card ul li {
  font-size: 0.85rem; color: var(--muted); line-height: 1.6;
  padding: 0.35rem 0; border-bottom: 1px solid rgba(0,0,0,0.04);
  display: flex; gap: 0.5rem; align-items: flex-start;
}
.habit-card ul li::before { content: '→'; color: var(--blue); font-weight: 700; flex-shrink: 0; }

/* ── CONCLUSION ── */
.conclusion-box {
  background: linear-gradient(135deg, var(--blue) 0%, #0f28b0 100%);
  border-radius: 28px;
  padding: 3rem;
  color: white;
  text-align: center;
  position: relative; overflow: hidden;
  margin-top: 3rem;
}
.conclusion-box::before {
  content: '';
  position: absolute; top: -80px; right: -80px;
  width: 280px; height: 280px; border-radius: 50%;
  background: rgba(255,255,255,0.05);
}
.conclusion-box h2 {
  font-family: 'Syne', sans-serif; font-size: 2.5rem;
  font-weight: 800; margin-bottom: 1.25rem; color: white;
}
.conclusion-box p { font-size: 1rem; opacity: 0.85; line-height: 1.8; max-width: 600px; margin: 0 auto; }
.conclusion-tips {
  display: flex; flex-wrap: wrap; gap: 0.75rem;
  justify-content: center; margin-top: 2rem;
}
.conclusion-tip {
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 10px;
  padding: 0.5rem 1rem;
  font-size: 0.82rem; font-weight: 600;
  display: flex; align-items: center; gap: 0.4rem;
}

/* ── DIVIDER ── */
.section-divider {
  border: none; border-top: 1px solid rgba(26,58,247,0.08);
  margin: 0 2rem;
}

/* ── SCROLL ANIMATIONS ── */
.reveal {
  opacity: 0; transform: translateY(30px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}
.reveal.visible { opacity: 1; transform: translateY(0); }

@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(24px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ── FOOTER ── */
footer {
  text-align: center; padding: 2rem;
  font-size: 0.8rem; color: var(--muted);
  border-top: 1px solid rgba(26,58,247,0.08);
  margin-top: 3rem;
}
footer strong { color: var(--blue); }

/* ── PROGRESS BAR ── */
#progress-bar {
  position: fixed; top: 0; left: 0; height: 3px;
  background: var(--blue); z-index: 200;
  width: 0%; transition: width 0.1s;
}

/* ── RESPONSIVE ── */
@media (max-width: 640px) {
  .nav-links { display: none; }
  .threat-card { flex-direction: column; }
  .prevention-item { flex-direction: column; }
  .prevention-step { font-size: 1.5rem; }
}
</style>
</head>
<body>

<div id="progress-bar"></div>

<nav>
  <a class="nav-logo" href="#hero">🛡 Keamanan Siber</a>
  <div class="nav-links">
    <a href="#hero">Home</a>
    <a href="#definition">Definisi</a>
    <a href="#importance">Pentingnya</a>
    <a href="#threats">Ancaman</a>
    <a href="#prevention">Pencegahan</a>
    <a href="#habits">Kebiasaan</a>
    <a href="#conclusion">Kesimpulan</a>
  </div>
</nav>

<!-- ══ HERO ══ -->
<section id="hero" class="hero" style="padding-top:64px; max-width:100%;">
  <div class="hero-bg"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-content">
    <div class="hero-badge"><span></span> Hanover and Tyke · Personal Security</div>
    <h1>Kesadaran<br><span class="accent">Keamanan Siber</span></h1>
    <p class="hero-sub">Lindungi diri, perangkat, akun, dan data pribadi Anda<br>dari ancaman di dunia digital yang terus berkembang.</p>
    <div class="hero-cta">
      <a href="#definition" class="btn-primary">Mulai Belajar →</a>
      <a href="#threats" class="btn-outline">Lihat Ancaman</a>
    </div>
    <div class="hero-icons">
      <div class="hero-icon-card"><span class="icon">🔐</span> Password Kuat</div>
      <div class="hero-icon-card"><span class="icon">🛡️</span> Enkripsi Data</div>
      <div class="hero-icon-card"><span class="icon">🔍</span> Waspadai Phishing</div>
      <div class="hero-icon-card"><span class="icon">📡</span> VPN Aman</div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ DEFINITION ══ -->
<section id="definition">
  <div class="reveal">
    <span class="section-tag">01 — Definisi</span>
    <h2>Apa itu <span class="hl">Keamanan Siber</span><br>Personal?</h2>
    <p class="lead">Keamanan siber personal adalah upaya melindungi diri sendiri, perangkat, akun, dan data pribadi dari ancaman di dunia digital atau internet.</p>
  </div>
  <div class="card-grid reveal">
    <div class="card">
      <div class="card-icon">🖥️</div>
      <h3>Perlindungan Perangkat</h3>
      <p>Menjaga keamanan HP, laptop, dan perangkat digital lainnya dari akses tidak sah dan serangan siber.</p>
    </div>
    <div class="card">
      <div class="card-icon">🔑</div>
      <h3>Keamanan Akun</h3>
      <p>Melindungi akun media sosial, email, dan layanan online menggunakan praktik autentikasi yang aman.</p>
    </div>
    <div class="card">
      <div class="card-icon">🗂️</div>
      <h3>Privasi Data</h3>
      <p>Menjaga informasi pribadi agar tidak jatuh ke tangan yang salah melalui enkripsi dan kontrol akses.</p>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ IMPORTANCE ══ -->
<section id="importance">
  <div class="reveal">
    <span class="section-tag">02 — Pentingnya</span>
    <h2>Mengapa Ini <span class="hl">Sangat Penting</span><br>di Era Digital?</h2>
    <p class="lead">Data pribadi menjadi aset berharga yang rentan terhadap pencurian identitas, kebocoran finansial, dan serangan siber. Tanpa keamanan memadai, risiko kerugian sangat besar.</p>
  </div>
  <div class="card-grid reveal" style="margin-top:2.5rem">
    <div class="card">
      <div class="card-icon">🆔</div>
      <h3>Cegah Pencurian Identitas</h3>
      <p>Data pribadi yang bocor dapat digunakan untuk mengakses akun bank, mengajukan pinjaman, atau melakukan penipuan atas nama Anda.</p>
    </div>
    <div class="card">
      <div class="card-icon">💰</div>
      <h3>Hindari Kerugian Finansial</h3>
      <p>Serangan siber dapat menyebabkan hilangnya akses ke rekening dan aset digital yang bernilai besar.</p>
    </div>
    <div class="card">
      <div class="card-icon">🔒</div>
      <h3>Jaga Privasi Online</h3>
      <p>Praktik enkripsi, firewall, dan kontrol akses dapat mencegah hingga 90% ancaman siber yang umum terjadi.</p>
    </div>
    <div class="card">
      <div class="card-icon">🏢</div>
      <h3>Kepercayaan Digital</h3>
      <p>Keamanan yang baik membangun kepercayaan dalam ekosistem digital, baik untuk individu maupun organisasi.</p>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ THREATS ══ -->
<section id="threats">
  <div class="reveal">
    <span class="section-tag">03 — Ancaman Siber</span>
    <h2>Ancaman yang <span class="hl">Umum Ditemui</span></h2>
    <p class="lead">Kenali jenis-jenis serangan siber yang sering terjadi agar Anda bisa lebih waspada dan terlindungi.</p>
  </div>
  <div style="margin-top:2.5rem" class="reveal">
    <div class="threat-card">
      <div class="threat-badge red">💣</div>
      <div class="threat-content">
        <h3>Ransomware</h3>
        <p>Jenis serangan yang mengunci atau mengenkripsi data pada perangkat korban sehingga tidak dapat diakses, lalu pelaku meminta tebusan agar data dikembalikan. Serangan ini sangat berbahaya karena dapat menyebabkan kehilangan data penting secara permanen.</p>
      </div>
    </div>
    <div class="threat-card">
      <div class="threat-badge orange">🦠</div>
      <div class="threat-content">
        <h3>Malware</h3>
        <p>Perangkat lunak berbahaya yang dirancang untuk merusak, mencuri data, atau mengendalikan perangkat tanpa izin pengguna. Contohnya virus, trojan, dan spyware yang dapat masuk melalui unduhan atau situs berbahaya yang tidak disadari.</p>
      </div>
    </div>
    <div class="threat-card">
      <div class="threat-badge purple">🎣</div>
      <div class="threat-content">
        <h3>Phishing</h3>
        <p>Penipuan online yang bertujuan mencuri informasi pribadi seperti password, PIN, atau nomor rekening dengan menyamar sebagai pihak terpercaya melalui email, pesan, atau situs web palsu yang terlihat resmi.</p>
      </div>
    </div>
  </div>

  <div class="reveal" style="margin-top:3rem">
    <h3 style="font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;margin-bottom:0.5rem;">Ciri-ciri <span style="color:var(--blue)">Link Phishing</span></h3>
    <p style="color:var(--muted);font-size:0.9rem;margin-bottom:0">Kenali tanda-tanda berikut agar tidak menjadi korban:</p>
    <div class="phishing-grid">
      <div class="phishing-item">
        <div class="phishing-num">1</div>
        <div>
          <h4>Mengatasnamakan Institusi Terkenal</h4>
          <p>Berpura-pura sebagai bank, e-commerce, atau perusahaan teknologi dengan subjek mendesak seperti "Akun Anda Diblokir!"</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">2</div>
        <div>
          <h4>URL Tidak Resmi</h4>
          <p>Menggunakan URL mirip tapi berbeda, contoh: bankanda.com dimanipulasi menjadi bank-andaa.com atau bankandda.com.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">3</div>
        <div>
          <h4>Konten Tidak Sesuai</h4>
          <p>Kualitas konten lebih buruk, tata letak tidak rapi, dan isi tulisan terkesan asal dibuat.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">4</div>
        <div>
          <h4>Meminta Data Sensitif</h4>
          <p>Hanya berisi halaman login fiktif yang meminta kredensial akun, password, atau informasi kartu kredit.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">5</div>
        <div>
          <h4>Terdeteksi Tidak Aman</h4>
          <p>Browser menampilkan peringatan "connection is not secure" karena tidak memiliki sertifikat keamanan SSL.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ PREVENTION ══ -->
<section id="prevention">
  <div class="reveal">
    <span class="section-tag">04 — Pencegahan</span>
    <h2>Cara <span class="hl">Melindungi Diri</span><br>dari Ancaman</h2>
    <p class="lead">Terapkan langkah-langkah berikut untuk meningkatkan keamanan digital Anda secara signifikan.</p>
  </div>
  <div class="prevention-list reveal">
    <div class="prevention-item">
      <div class="prevention-step">01</div>
      <div class="prevention-body">
        <h3>Terapkan Cyber Hygiene</h3>
        <p>Serangkaian praktik dan kebiasaan yang dirancang untuk melindungi perangkat dan data dari ancaman dunia maya, seperti mencuci tangan untuk mencegah penyakit. Mencakup penggunaan kata sandi kuat, pembaruan perangkat lunak rutin, dan backup data berkala.</p>
      </div>
    </div>
    <div class="prevention-item">
      <div class="prevention-step">02</div>
      <div class="prevention-body">
        <h3>Buat Password yang Kuat</h3>
        <p>Gunakan minimal 12–16 karakter dengan campuran huruf besar-kecil, angka, dan simbol seperti !@#$. Hindari kata umum, nama, atau tanggal lahir. Buat unik per akun dan gunakan password manager untuk menyimpannya dengan aman.</p>
      </div>
    </div>
    <div class="prevention-item">
      <div class="prevention-step">03</div>
      <div class="prevention-body">
        <h3>Aktifkan Two-Factor Authentication (2FA)</h3>
        <p>Metode keamanan dua langkah yang memastikan hanya pemilik akun yang bisa masuk. Setelah username dan password, diperlukan kode OTP via SMS, aplikasi autentikator, atau verifikasi biometrik (sidik jari/wajah).</p>
      </div>
    </div>
    <div class="prevention-item">
      <div class="prevention-step">04</div>
      <div class="prevention-body">
        <h3>Gunakan VPN untuk Privasi</h3>
        <p>Virtual Private Network (VPN) mengenkripsi koneksi internet Anda sehingga aktivitas online tidak dapat dilacak pihak ketiga. Sangat penting saat menggunakan Wi-Fi publik untuk menyembunyikan IP asli dan mencegah pelacakan.</p>
      </div>
    </div>
    <div class="prevention-item">
      <div class="prevention-step">05</div>
      <div class="prevention-body">
        <h3>Waspada Tautan & Lampiran</h3>
        <p>Selalu periksa alamat pengirim email sebelum membuka pesan. Hindari mengklik tautan atau lampiran dari sumber tidak dikenal. Verifikasi keaslian email yang meminta informasi sensitif melalui saluran komunikasi resmi lainnya.</p>
      </div>
    </div>
    <div class="prevention-item">
      <div class="prevention-step">06</div>
      <div class="prevention-body">
        <h3>Cadangkan Data Secara Berkala</h3>
        <p>Kehilangan data akibat ransomware atau kerusakan perangkat dapat diminimalisir dengan backup rutin ke perangkat eksternal atau layanan cloud storage. Pastikan backup selalu diperbarui secara terjadwal.</p>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ BAD HABITS ══ -->
<section id="habits">
  <div class="reveal">
    <span class="section-tag">05 — Kebiasaan Buruk</span>
    <h2>Hindari <span class="hl">Kebiasaan Buruk</span><br>di Dunia Digital</h2>
    <p class="lead">Beberapa kebiasaan sehari-hari ini terlihat sepele namun bisa membuka celah keamanan yang berbahaya bagi data Anda.</p>
  </div>
  <div class="habits-grid reveal">
    <div class="habit-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Password Sama untuk Banyak Akun</h3>
      <ul>
        <li>Jika satu akun diretas, semua akun lain yang sama ikut terancam</li>
        <li>Peretas dapat dengan mudah masuk ke berbagai layanan sekaligus</li>
        <li>Gunakan password unik dan berbeda untuk setiap akun penting</li>
      </ul>
    </div>
    <div class="habit-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Oversharing Informasi Pribadi</h3>
      <ul>
        <li>Penjahat siber bisa gunakan info pribadi untuk mencuri identitas</li>
        <li>Detail sensitif yang tersebar membuka peluang peretasan lebih besar</li>
        <li>Batasi informasi yang dibagikan di media sosial dan platform publik</li>
      </ul>
    </div>
    <div class="habit-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Mengabaikan Update Keamanan</h3>
      <ul>
        <li>Pembaruan keamanan menambal celah yang bisa dieksploitasi peretas</li>
        <li>Menunda update memberikan waktu bagi penyerang untuk menyerang</li>
        <li>Aktifkan pembaruan otomatis untuk semua perangkat dan aplikasi</li>
      </ul>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ CONCLUSION ══ -->
<section id="conclusion">
  <div class="reveal">
    <span class="section-tag">06 — Kesimpulan</span>
    <h2>Kesimpulan & <span class="hl">Langkah Selanjutnya</span></h2>
  </div>
  <div class="conclusion-box reveal">
    <h2>Mulai Lindungi Diri Anda Hari Ini</h2>
    <p>Keamanan siber bukan hanya tanggung jawab perusahaan — setiap individu perlu mengambil langkah proaktif untuk melindungi data dan privasi digital mereka. Dengan pengetahuan dan kebiasaan yang tepat, risiko serangan siber bisa diminimalisir secara signifikan.</p>
    <div class="conclusion-tips">
      <div class="conclusion-tip">✅ Password unik & kuat</div>
      <div class="conclusion-tip">✅ Aktifkan 2FA</div>
      <div class="conclusion-tip">✅ Gunakan VPN</div>
      <div class="conclusion-tip">✅ Update rutin</div>
      <div class="conclusion-tip">✅ Backup berkala</div>
      <div class="conclusion-tip">✅ Waspada phishing</div>
    </div>
  </div>
</section>

<footer>
  <p>Dibuat oleh <strong>Hanover and Tyke</strong> · Kesadaran Keamanan Siber (Personal Security) · <?php echo date('Y'); ?></p>
</footer>

<script>
// Progress bar
window.addEventListener('scroll', () => {
  const scrollTop = document.documentElement.scrollTop;
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const progress = (scrollTop / scrollHeight) * 100;
  document.getElementById('progress-bar').style.width = progress + '%';
});

// Smooth scroll nav active state
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + entry.target.id) {
          link.classList.add('active');
        }
      });
    }
  });
}, { rootMargin: '-40% 0px -40% 0px' });

sections.forEach(s => observer.observe(s));

// Reveal on scroll
const reveals = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.transitionDelay = (i % 3) * 0.1 + 's';
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

reveals.forEach(el => revealObserver.observe(el));

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(anchor.getAttribute('href'));
    if (target) {
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>
</body>
</html>