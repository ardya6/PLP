<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnTech — Portal Pembelajaran Jaringan & Keamanan Siber</title>
    <meta name="description" content="Portal pembelajaran interaktif untuk Dasar-Dasar Teknik Komputer & Jaringan (DDTKJ) dan Keamanan Siber.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ===== THEME VARIABLES ===== */
        :root {
            /* DARK MODE */
            --bg:          #0b1120;
            --bg-alt:      #0f1a2e;
            --surface:     rgba(255,255,255,0.05);
            --surface-h:   rgba(255,255,255,0.09);
            --border:      rgba(255,255,255,0.10);
            --text-main:   #f0f4ff;
            --text-muted:  #94a3c0;
            --shadow:      rgba(0,0,0,0.4);
            --nav-bg:      rgba(11,17,32,0.80);

            --primary:       #3b82f6;
            --primary-light: #60a5fa;
            --primary-dark:  #2563eb;
            --primary-glow:  rgba(59,130,246,0.40);
            --accent-1:      #38bdf8;
            --accent-2:      #6366f1;
            --grad:          linear-gradient(135deg,#3b82f6,#6366f1);
            --grad-text:     linear-gradient(90deg,#60a5fa,#818cf8);
            --particle-col:  rgba(96,165,250,0.60);
        }

        [data-theme="light"] {
            --bg:          #f0f6ff;
            --bg-alt:      #e6eeff;
            --surface:     rgba(255,255,255,0.85);
            --surface-h:   rgba(255,255,255,1);
            --border:      rgba(59,130,246,0.18);
            --text-main:   #0f1f3d;
            --text-muted:  #4b6080;
            --shadow:      rgba(59,130,246,0.12);
            --nav-bg:      rgba(240,246,255,0.88);

            --primary:       #2563eb;
            --primary-light: #3b82f6;
            --primary-dark:  #1d4ed8;
            --primary-glow:  rgba(37,99,235,0.22);
            --accent-1:      #0ea5e9;
            --accent-2:      #4f46e5;
            --grad:          linear-gradient(135deg,#2563eb,#4f46e5);
            --grad-text:     linear-gradient(90deg,#2563eb,#4f46e5);
            --particle-col:  rgba(37,99,235,0.35);
        }

        /* ===== RESET ===== */
        *,*::before,*::after { margin:0; padding:0; box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        a { text-decoration:none; color:inherit; }

        body {
            font-family:'Outfit',sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            overflow-x: hidden;
            transition: background-color .4s, color .4s;
        }

        ::-webkit-scrollbar { width:7px; }
        ::-webkit-scrollbar-track { background:var(--bg); }
        ::-webkit-scrollbar-thumb { background:var(--primary); border-radius:4px; }

        /* ===== CANVAS BACKGROUND ===== */
        #bg-canvas {
            position:fixed; top:0; left:0;
            width:100vw; height:100vh;
            z-index:0; pointer-events:none;
        }

        /* ===== CURSOR GLOW ===== */
        #cursor-glow {
            position:fixed; pointer-events:none;
            width:500px; height:500px;
            border-radius:50%; z-index:0;
            transform:translate(-50%,-50%);
            background:radial-gradient(circle, var(--primary-glow) 0%, transparent 65%);
            transition: background .4s;
        }

        /* ===== NAVBAR ===== */
        nav {
            position:fixed; top:0; width:100%;
            padding:1rem 5%;
            display:flex; justify-content:space-between; align-items:center;
            background: var(--nav-bg);
            backdrop-filter:blur(14px);
            border-bottom:1px solid var(--border);
            z-index:999;
            transition: background .4s, border-color .4s;
        }

        .logo {
            font-size:1.5rem; font-weight:800;
            display:flex; align-items:center; gap:.6rem;
        }

        .logo-icon {
            width:38px; height:38px; border-radius:10px;
            background:var(--grad);
            display:flex; align-items:center; justify-content:center;
            font-size:1rem; color:#fff;
            box-shadow:0 4px 14px var(--primary-glow);
        }

        .nav-links {
            display:flex; gap:2rem; align-items:center;
        }

        .nav-links a {
            font-weight:600; font-size:.9rem; color:var(--text-muted);
            position:relative; transition:color .25s;
        }

        .nav-links a::after {
            content:''; position:absolute;
            bottom:-4px; left:0; width:0; height:2px;
            background:var(--grad); border-radius:2px;
            transition: width .3s;
        }

        .nav-links a:hover { color:var(--text-main); }
        .nav-links a:hover::after { width:100%; }

        /* Theme toggle */
        .theme-btn {
            width:44px; height:26px;
            background:var(--surface);
            border:1.5px solid var(--border);
            border-radius:13px; position:relative;
            cursor:pointer; transition:background .3s,border-color .3s;
            flex-shrink:0;
        }
        .theme-btn:hover { border-color:var(--primary); }

        .theme-btn .knob {
            position:absolute; top:3px; left:3px;
            width:18px; height:18px;
            border-radius:50%;
            background: var(--grad);
            display:flex; align-items:center; justify-content:center;
            font-size:.6rem; color:#fff;
            transition: left .3s ease, transform .3s;
            box-shadow:0 2px 6px var(--primary-glow);
        }

        [data-theme="light"] .theme-btn .knob {
            left:19px;
        }

        /* ===== SECTIONS ===== */
        .section-wrap {
            position:relative; z-index:1;
            padding: 6rem 5%;
            max-width:1200px; margin:0 auto;
        }

        /* ===== HERO ===== */
        .hero-wrap {
            position:relative; z-index:1;
            min-height:100vh;
            display:flex; flex-direction:column;
            justify-content:center; align-items:center;
            text-align:center;
            padding: 0 5%;
        }

        .hero-badge {
            display:inline-flex; align-items:center; gap:.5rem;
            padding:.45rem 1.1rem;
            border:1.5px solid var(--border);
            border-radius:50px;
            font-size:.8rem; font-weight:700;
            color:var(--primary-light);
            background:var(--surface);
            margin-bottom:2rem;
            backdrop-filter:blur(6px);
            letter-spacing:.05em;
        }

        .hero h1 {
            font-size:clamp(2.8rem,6vw,5rem);
            font-weight:800; line-height:1.1;
            margin-bottom:1.5rem;
            max-width:900px;
        }

        .text-grad {
            background:var(--grad-text);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            display:inline;
        }

        .hero-desc {
            font-size:1.15rem; color:var(--text-muted);
            max-width:620px; line-height:1.8;
            margin-bottom:2.5rem;
        }

        .hero-btns { display:flex; gap:1rem; flex-wrap:wrap; justify-content:center; }

        .btn-primary {
            padding:.9rem 2.2rem; font-size:1rem; font-weight:700;
            color:#fff; border:none; border-radius:14px;
            background:var(--grad); cursor:pointer;
            box-shadow:0 6px 22px var(--primary-glow);
            display:inline-flex; align-items:center; gap:.5rem;
            transition:all .3s;
        }
        .btn-primary:hover {
            transform:translateY(-3px);
            box-shadow:0 10px 30px var(--primary-glow);
        }

        .btn-outline {
            padding:.9rem 2.2rem; font-size:1rem; font-weight:600;
            color:var(--text-main); border:1.5px solid var(--border);
            border-radius:14px; cursor:pointer;
            background:var(--surface);
            display:inline-flex; align-items:center; gap:.5rem;
            transition:all .3s; backdrop-filter:blur(8px);
        }
        .btn-outline:hover {
            transform:translateY(-3px);
            border-color:var(--primary);
            box-shadow:0 6px 20px var(--primary-glow);
        }

        /* Scroll indicator */
        .scroll-hint {
            position:absolute; bottom:2rem; left:50%;
            transform:translateX(-50%);
            display:flex; flex-direction:column; align-items:center; gap:.4rem;
            color:var(--text-muted); font-size:.8rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%,100% { transform:translateX(-50%) translateY(0); }
            50%      { transform:translateX(-50%) translateY(8px); }
        }

        /* ===== SECTION HEADER ===== */
        .sec-title {
            text-align:center; margin-bottom:3.5rem;
        }
        .sec-title h2 {
            font-size:2.3rem; font-weight:800; margin-bottom:.75rem;
        }
        .sec-title p { color:var(--text-muted); font-size:1.05rem; }

        .line-badge {
            display:inline-block;
            width:60px; height:4px;
            border-radius:2px;
            background:var(--grad);
            margin-bottom:1rem;
        }

        /* ===== GLASS CARD ===== */
        .glass-card {
            background:var(--surface);
            border:1px solid var(--border);
            border-radius:20px;
            padding:2.5rem;
            backdrop-filter:blur(12px);
            transition: all .4s cubic-bezier(.165,.84,.44,1);
            box-shadow:0 4px 20px var(--shadow);
        }
        .glass-card:hover {
            transform:translateY(-8px);
            background:var(--surface-h);
            border-color:var(--primary);
            box-shadow:0 14px 40px var(--shadow), 0 0 0 1px var(--primary-glow);
        }

        /* ===== TENTANG SECTION ===== */
        #tentang .about-grid {
            display:grid;
            grid-template-columns:1.2fr 1fr;
            gap:2.5rem;
            align-items:start;
        }

        .about-main h3 {
            font-size:1.6rem; font-weight:700; margin-bottom:1rem;
            color:var(--primary-light);
        }
        .about-main p {
            color:var(--text-muted); line-height:1.85;
            margin-bottom:1rem; font-size:1.05rem;
        }

        .stat-row {
            display:flex; gap:1.5rem; margin-top:1.5rem; flex-wrap:wrap;
        }
        .stat-item {
            flex:1; min-width:110px;
            background:var(--surface);
            border:1px solid var(--border);
            border-radius:14px;
            padding:1.2rem;
            text-align:center;
            transition:all .3s;
        }
        .stat-item:hover { border-color:var(--primary); transform:translateY(-3px); }
        .stat-item .num {
            font-size:2rem; font-weight:800;
            background:var(--grad-text);
            -webkit-background-clip:text; -webkit-text-fill-color:transparent;
        }
        .stat-item span { font-size:.85rem; color:var(--text-muted); display:block; margin-top:.2rem; }

        .feature-list { display:grid; gap:1rem; }
        .feature-item {
            display:flex; align-items:center; gap:1rem;
            padding:1rem 1.2rem;
            background:var(--surface);
            border:1px solid var(--border);
            border-radius:14px;
            transition:all .3s;
        }
        .feature-item:hover { border-color:var(--primary); transform:translateX(4px); }
        .feature-item i { font-size:1.3rem; color:var(--primary); width:24px; text-align:center; }
        .feature-item p { font-size:.95rem; font-weight:500; }

        /* ===== TUJUAN SECTION ===== */
        #tujuan { background:var(--bg-alt); transition:background .4s; position:relative; z-index:1; }
        
        .tujuan-body { padding: 6rem 5%; max-width:1200px; margin:0 auto; }

        .tujuan-grid {
            display:grid;
            grid-template-columns: repeat(3,1fr);
            gap:2rem;
        }

        .tujuan-card {
            background:var(--surface);
            border:1px solid var(--border);
            border-radius:20px;
            padding:2rem;
            backdrop-filter:blur(12px);
            position:relative; overflow:hidden;
            transition:all .4s;
            text-align:center;
        }
        .tujuan-card::before {
            content:''; position:absolute;
            top:0; left:0; width:100%; height:4px;
            background:var(--grad);
            transform:scaleX(0); transform-origin:left;
            transition:transform .4s;
        }
        .tujuan-card:hover::before { transform:scaleX(1); }
        .tujuan-card:hover {
            transform:translateY(-10px);
            border-color:var(--primary);
            box-shadow:0 14px 40px var(--shadow);
        }

        .tujuan-num {
            font-size:3.5rem; font-weight:800; line-height:1;
            background:var(--grad);
            -webkit-background-clip:text; -webkit-text-fill-color:transparent;
            margin-bottom:1rem;
        }
        .tujuan-icon {
            width:56px; height:56px; border-radius:14px;
            background:var(--grad);
            display:flex; align-items:center; justify-content:center;
            font-size:1.5rem; color:#fff;
            margin:0 auto 1.2rem;
            box-shadow:0 6px 18px var(--primary-glow);
        }
        .tujuan-card h4 { font-size:1.15rem; font-weight:700; margin-bottom:.75rem; }
        .tujuan-card p { color:var(--text-muted); font-size:.95rem; line-height:1.75; }

        /* ===== MODUL SECTION ===== */
        .modul-grid {
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(300px,1fr));
            gap:2rem;
        }

        .modul-card {
            position:relative; overflow:hidden;
            display:flex; flex-direction:column;
        }
        .modul-card::after {
            content:''; position:absolute;
            inset:0; border-radius:20px;
            background:var(--grad);
            opacity:0; transition:opacity .4s;
            z-index:0;
        }
        .modul-card:hover::after { opacity:.06; }

        .modul-inner { position:relative; z-index:1; }

        .modul-icon-wrap {
            width:64px; height:64px; border-radius:18px;
            background:var(--grad);
            display:flex; align-items:center; justify-content:center;
            font-size:1.8rem; color:#fff;
            margin-bottom:1.5rem;
            box-shadow:0 8px 24px var(--primary-glow);
            transition:transform .3s;
        }
        .modul-card:hover .modul-icon-wrap { transform:scale(1.1) rotate(5deg); }

        .modul-icon-wrap.teal {
            background:linear-gradient(135deg,#0ea5e9,#14b8a6);
            box-shadow:0 8px 24px rgba(20,184,166,.35);
        }

        .modul-card h3 { font-size:1.4rem; font-weight:700; margin-bottom:.75rem; }
        .modul-card p  { color:var(--text-muted); font-size:.97rem; line-height:1.8; flex-grow:1; margin-bottom:1.8rem; }

        .modul-link {
            display:inline-flex; align-items:center; gap:.5rem;
            font-weight:700; font-size:.95rem;
            color:var(--primary-light);
            transition:gap .3s, color .3s;
        }
        .modul-link:hover { gap:.9rem; color:var(--primary); }

        .modul-tag {
            display:inline-block;
            padding:.25rem .75rem;
            background:rgba(59,130,246,.12);
            color:var(--primary-light);
            border-radius:50px;
            font-size:.75rem; font-weight:700;
            margin-bottom:1rem;
            border:1px solid rgba(59,130,246,.25);
        }
        .modul-tag.teal {
            background:rgba(20,184,166,.12);
            color:#2dd4bf;
            border-color:rgba(20,184,166,.25);
        }
        .modul-tag.violet {
            background:rgba(139,92,246,.12);
            color:#c4b5fd;
            border-color:rgba(139,92,246,.25);
        }

        .modul-icon-wrap.violet {
            background:linear-gradient(135deg,#7c3aed,#a78bfa);
            box-shadow:0 8px 24px rgba(124,58,237,.40);
        }

        /* ===== FOOTER ===== */
        footer {
            position:relative; z-index:1;
            text-align:center;
            padding:3rem 5%;
            border-top:1px solid var(--border);
            color:var(--text-muted);
            font-size:.9rem;
            background:var(--bg-alt);
            transition:background .4s, border-color .4s;
        }
        footer span {
            color:var(--primary-light); font-weight:600;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width:900px) {
            #tentang .about-grid { grid-template-columns:1fr; }
            .tujuan-grid { grid-template-columns:1fr 1fr; }
        }
        @media (max-width:640px) {
            .tujuan-grid { grid-template-columns:1fr; }
            .nav-links { display:none; }
            .hero h1 { font-size:2.4rem; }
        }
    </style>
</head>
<body>

<div id="cursor-glow"></div>
<canvas id="bg-canvas"></canvas>

<!-- NAVBAR -->
<nav>
    <a href="#" class="logo">
        <div class="logo-icon"><i class="fa-solid fa-layer-group"></i></div>
        LearnTech
    </a>
    <div class="nav-links">
        <a href="#tentang">Tentang</a>
        <a href="#tujuan">Tujuan</a>
        <a href="#modul">Modul</a>
    </div>
    <button class="theme-btn" id="themeToggle" aria-label="Toggle tema">
        <div class="knob" id="themeKnob">
            <i class="fa-solid fa-moon" id="themeIcon"></i>
        </div>
    </button>
</nav>

<!-- HERO SECTION -->
<section class="hero-wrap">
    <div class="hero-badge">
        <i class="fa-solid fa-rocket"></i> Platform Belajar Interaktif
    </div>
    <h1>Kuasai <span class="text-grad">Jaringan, Keamanan & Informatika</span></h1>
    <p class="hero-desc">
        Portal pembelajaran modern yang dirancang untuk siswa SMK — pelajari konsep jaringan komputer, keamanan siber, dan informatika dengan cara yang menyenangkan dan mudah dipahami.
    </p>
    <div class="hero-btns">
        <a href="#modul" class="btn-primary">Mulai Belajar <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#tentang" class="btn-outline"><i class="fa-solid fa-circle-info"></i> Pelajari Lebih</a>
    </div>
    <div class="scroll-hint">
        <i class="fa-solid fa-chevron-down"></i>
    </div>
</section>

<!-- TENTANG SECTION -->
<section id="tentang">
    <div class="section-wrap">
        <div class="sec-title">
            <div class="line-badge"></div>
            <h2>Tentang <span class="text-grad">LearnTech</span></h2>
            <p>Kenali lebih jauh platform pembelajaran yang kami bangun untuk Anda.</p>
        </div>
        <div class="about-grid">
            <div class="glass-card about-main">
                <h3><i class="fa-solid fa-circle-nodes" style="margin-right:.5rem"></i>Apa itu LearnTech?</h3>
                <p>
                    LearnTech adalah portal pembelajaran digital yang berfokus pada bidang <strong>Dasar-Dasar Teknik Komputer dan Jaringan (DDTKJ)</strong> serta <strong>Keamanan Siber</strong>.
                </p>
                <p>
                    Dibangun dengan pendekatan visual dan interaktif, kami percaya bahwa setiap siswa berhak mendapatkan pengalaman belajar yang menarik, tidak membosankan, dan dapat diterapkan langsung di dunia nyata.
                </p>
                <div class="stat-row">
                    <div class="stat-item">
                        <div class="num">2</div>
                        <span>Modul Utama</span>
                    </div>
                    <div class="stat-item">
                        <div class="num">10+</div>
                        <span>Sub-Topik</span>
                    </div>
                    <div class="stat-item">
                        <div class="num">100%</div>
                        <span>Gratis</span>
                    </div>
                </div>
            </div>
            <div class="feature-list">
                <div class="glass-card feature-item">
                    <i class="fa-solid fa-palette"></i>
                    <p>Tampilan modern & visual yang memudahkan pemahaman materi</p>
                </div>
                <div class="glass-card feature-item">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <p>Materi komprehensif dari konsep dasar hingga implementasi praktis</p>
                </div>
                <div class="glass-card feature-item">
                    <i class="fa-solid fa-bullseye"></i>
                    <p>Konten yang relevan dengan kurikulum SMK jurusan TJKT</p>
                </div>
                <div class="glass-card feature-item">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <p>Tampilan responsif, dapat diakses dari perangkat apapun</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TUJUAN SECTION -->
<section id="tujuan">
    <div class="tujuan-body">
        <div class="sec-title">
            <div class="line-badge"></div>
            <h2>Tujuan <span class="text-grad">Kami</span></h2>
            <p>Mengapa LearnTech dibuat dan apa yang ingin kami capai.</p>
        </div>
        <div class="tujuan-grid">
            <div class="tujuan-card">
                <div class="tujuan-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <h4>Menyederhanakan Konsep</h4>
                <p>Mengubah teori IT yang kompleks dan teknis menjadi modul belajar yang sederhana, visual, dan mudah dipahami oleh pemula sekalipun.</p>
            </div>
            <div class="tujuan-card">
                <div class="tujuan-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Membangun Kesadaran Siber</h4>
                <p>Meningkatkan literasi dan kesadaran akan keamanan siber agar setiap siswa mampu melindungi data pribadi di era digital yang penuh ancaman.</p>
            </div>
            <div class="tujuan-card">
                <div class="tujuan-icon"><i class="fa-solid fa-laptop-code"></i></div>
                <h4>Meningkatkan Keterampilan</h4>
                <p>Mempersiapkan siswa dengan keterampilan teknis jaringan komputer yang nyata dan aplikatif sesuai kebutuhan industri teknologi saat ini.</p>
            </div>
        </div>
    </div>
</section>

<!-- MODUL SECTION -->
<section id="modul">
    <div class="section-wrap">
        <div class="sec-title">
            <div class="line-badge"></div>
            <h2>Modul <span class="text-grad">Pembelajaran</span></h2>
            <p>Pilih jalur belajar yang sesuai dengan kebutuhanmu hari ini.</p>
        </div>
        <div class="modul-grid">
            <!-- Modul DDTKJ -->
            <div class="glass-card modul-card">
                <div class="modul-inner">
                    <div class="modul-tag">Jaringan Komputer</div>
                    <div class="modul-icon-wrap"><i class="fa-solid fa-network-wired"></i></div>
                    <h3>Dasar Jaringan (DDTKJ)</h3>
                    <p>Pelajari fondasi teknologi jaringan mulai dari subnetting, model TCP/IP, layanan DHCP &amp; DNS, media transmisi, jaringan nirkabel, hingga optik dan satelit.</p>
                    <a href="ddtkj/ddtkj.php" class="modul-link">Buka Modul <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Modul Keamanan -->
            <div class="glass-card modul-card">
                <div class="modul-inner">
                    <div class="modul-tag teal">Keamanan Siber</div>
                    <div class="modul-icon-wrap teal"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>Keamanan Siber Dasar</h3>
                    <p>Pahami prinsip CIA Triad, kenali ancaman siber seperti Phishing dan Malware, serta pelajari kebiasaan digital yang aman melalui praktik cyberhygiene.</p>
                    <a href="keamanan jaringan/keamanan.php" class="modul-link">Buka Modul <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Modul Informatika -->
            <div class="glass-card modul-card">
                <div class="modul-inner">
                    <div class="modul-tag violet">Informatika</div>
                    <div class="modul-icon-wrap violet"><i class="fa-solid fa-microchip"></i></div>
                    <h3>Informatika</h3>
                    <p>Eksplorasi dunia teknologi informasi mulai dari algoritma, logika komputasi, pemrosesan data, sistem komputer, hingga pengenalan pemrograman dasar.</p>
                    <a href="INFORMATIKA/dashboardinfor.php" class="modul-link">Buka Modul <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>&copy; 2026 <span>LearnTech</span>. Dibuat dengan <i class="fa-solid fa-heart" style="color:#f472b6;"></i> untuk Pendidikan Teknologi Indonesia.</p>
</footer>

<script>
/* ============================================================
   THEME TOGGLE
============================================================ */
const html        = document.documentElement;
const themeBtn    = document.getElementById('themeToggle');
const themeIcon   = document.getElementById('themeIcon');

const saved = localStorage.getItem('lt-theme') || 'dark';
setTheme(saved);

themeBtn.addEventListener('click', () => {
    const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    setTheme(next);
    localStorage.setItem('lt-theme', next);
});

function setTheme(t) {
    html.setAttribute('data-theme', t);
    if (t === 'light') {
        themeIcon.className = 'fa-solid fa-sun';
    } else {
        themeIcon.className = 'fa-solid fa-moon';
    }
}

/* ============================================================
   CURSOR GLOW
============================================================ */
const cursorGlow = document.getElementById('cursor-glow');
document.addEventListener('mousemove', e => {
    cursorGlow.style.left = e.clientX + 'px';
    cursorGlow.style.top  = e.clientY + 'px';
});

/* ============================================================
   PARTICLE CANVAS BACKGROUND
============================================================ */
const canvas = document.getElementById('bg-canvas');
const ctx    = canvas.getContext('2d');

let W, H, particles;
const NUM_P = 90;

function resize() {
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
}
resize();
window.addEventListener('resize', () => { resize(); init(); });

let mouse = { x: W / 2, y: H / 2 };
window.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });

class Particle {
    constructor() { this.reset(); }
    reset() {
        this.x  = Math.random() * W;
        this.y  = Math.random() * H;
        this.vx = (Math.random() - .5) * .7;
        this.vy = (Math.random() - .5) * .7;
        this.r  = Math.random() * 2.2 + .8;
        this.alpha = Math.random() * .5 + .3;
    }
    update() {
        this.x += this.vx;
        this.y += this.vy;
        // repel from mouse gently
        const dx = this.x - mouse.x, dy = this.y - mouse.y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < 120) {
            this.x += (dx / dist) * 1.2;
            this.y += (dy / dist) * 1.2;
        }
        if (this.x < 0 || this.x > W) this.vx *= -1;
        if (this.y < 0 || this.y > H) this.vy *= -1;
    }
    draw() {
        const isDark = html.getAttribute('data-theme') !== 'light';
        const col = isDark ? `rgba(96,165,250,${this.alpha})` : `rgba(37,99,235,${this.alpha * .5})`;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fillStyle = col;
        ctx.fill();
    }
}

function init() {
    particles = Array.from({ length: NUM_P }, () => new Particle());
}
init();

function drawLines() {
    const isDark = html.getAttribute('data-theme') !== 'light';
    for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const d  = Math.sqrt(dx * dx + dy * dy);
            if (d < 110) {
                const op = (1 - d / 110) * (isDark ? .25 : .15);
                ctx.beginPath();
                ctx.strokeStyle = isDark
                    ? `rgba(96,165,250,${op})`
                    : `rgba(37,99,235,${op})`;
                ctx.lineWidth = .8;
                ctx.moveTo(particles[i].x, particles[i].y);
                ctx.lineTo(particles[j].x, particles[j].y);
                ctx.stroke();
            }
        }
    }
}

function loop() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => { p.update(); p.draw(); });
    drawLines();
    requestAnimationFrame(loop);
}
loop();

/* ============================================================
   3D TILT ON GLASS CARDS
============================================================ */
document.querySelectorAll('.glass-card').forEach(card => {
    card.addEventListener('mousemove', e => {
        const r  = card.getBoundingClientRect();
        const x  = e.clientX - r.left, y = e.clientY - r.top;
        const rx = ((y - r.height / 2) / r.height) * -10;
        const ry = ((x - r.width  / 2) / r.width ) *  10;
        card.style.transform = `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateY(-8px)`;
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});

/* ============================================================
   SCROLL REVEAL (simple fade-in)
============================================================ */
const revealTargets = document.querySelectorAll('.glass-card, .tujuan-card, .stat-item');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.style.opacity = '1';
            e.target.style.transform = 'translateY(0)';
        }
    });
}, { threshold: .15 });

revealTargets.forEach(el => {
    el.style.opacity    = '0';
    el.style.transform  = 'translateY(30px)';
    el.style.transition = 'opacity .6s ease, transform .6s ease';
    observer.observe(el);
});
</script>
</body>
</html>
