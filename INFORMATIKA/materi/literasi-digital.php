<?php
$page_title = "Literasi Digital & Mesin Pencari";
include '../includes/header.php';
?>

<!-- ===== PAGE HERO ===== -->
<section class="materi-hero" style="background: var(--gradient-hero); padding: 3.5rem 0; position:relative; overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="container" style="position:relative;z-index:1;">
        <a href="../index.php" class="btn btn-sm" style="background:rgba(255,255,255,0.15);color:white;border:1px solid rgba(255,255,255,0.25);margin-bottom:1.5rem;display:inline-flex;">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
            <div style="width:72px;height:72px;background:rgba(255,255,255,0.15);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.25);border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:white;flex-shrink:0;">
                <i class="fas fa-search"></i>
            </div>
            <div style="color:white;">
                <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem;">
                    <span style="background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;letter-spacing:0.05em;">MODUL 1</span>
                    <span style="background:rgba(34,197,94,0.2);border:1px solid rgba(34,197,94,0.3);color:#86efac;padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;">⬤ Tingkat Dasar</span>
                </div>
                <h1 style="font-size:clamp(1.6rem,4vw,2.5rem);font-weight:800;line-height:1.2;letter-spacing:-0.02em;margin-bottom:0.5rem;">Literasi Digital <span style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">&amp; Mesin Pencari</span></h1>
                <p style="color:rgba(255,255,255,0.75);font-size:1rem;">Pelajari cara bijak menggunakan internet dan mesin pencari secara efektif</p>
            </div>
        </div>
        <!-- Progress Modul -->
        <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-clock"></i> Estimasi: ~30 menit
            </div>
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-list-ul"></i> 4 Sub Topik
            </div>
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-graduation-cap"></i> Informatika Kelas VII–IX
            </div>
        </div>
    </div>
</section>

<!-- ===== READING PROGRESS ===== -->
<div style="position:fixed;top:70px;left:0;right:0;height:3px;background:var(--border-color);z-index:999;">
    <div id="readingProgress" style="height:100%;background:var(--gradient-primary);width:0%;transition:width 0.1s;"></div>
</div>

<!-- ===== MAIN LAYOUT ===== -->
<div class="materi-layout container" style="display:grid;grid-template-columns:260px 1fr;gap:2.5rem;padding-top:2.5rem;padding-bottom:4rem;align-items:start;">

    <!-- ===== SIDEBAR ===== -->
    <aside class="materi-sidebar" id="materiSidebar" style="position:sticky;top:90px;">
        <div style="background:var(--card-bg);border:1px solid var(--border-color);border-radius:20px;padding:1.5rem;box-shadow:var(--card-shadow);">
            <h4 style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:1rem;">Daftar Topik</h4>
            <nav id="topicNav">
                <a href="#topik1" class="sidebar-link active-link" onclick="setActiveLink(this)">
                    <span class="link-num">01</span>
                    <span>Pengertian Literasi Digital</span>
                </a>
                <a href="#topik2" class="sidebar-link" onclick="setActiveLink(this)">
                    <span class="link-num">02</span>
                    <span>Pilar Literasi Digital</span>
                </a>
                <a href="#topik3" class="sidebar-link" onclick="setActiveLink(this)">
                    <span class="link-num">03</span>
                    <span>Mesin Pencari (Search Engine)</span>
                </a>
                <a href="#topik4" class="sidebar-link" onclick="setActiveLink(this)">
                    <span class="link-num">04</span>
                    <span>Tips &amp; Mengenali Hoaks</span>
                </a>
            </nav>
            <div style="margin-top:1.5rem;padding-top:1.5rem;border-top:1px solid var(--border-color);">
                <a href="perangkat-teknologi.php" class="btn btn-sm btn-primary" style="width:100%;justify-content:center;">
                    Modul Berikutnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </aside>

    <!-- ===== KONTEN MATERI ===== -->
    <main class="materi-content">

        <!-- ==============================
             TOPIK 1: Pengertian Literasi Digital
             ============================== -->
        <article class="topik-section fade-in-up" id="topik1">
            <div class="topik-header">
                <span class="topik-badge" style="background:linear-gradient(135deg,rgba(37,99,235,0.1),rgba(124,58,237,0.1));border:1px solid rgba(37,99,235,0.2);color:var(--primary-600);">
                    <i class="fas fa-book-open"></i> Topik 1
                </span>
                <h2 class="topik-title">Pengertian Literasi Digital</h2>
                <p class="topik-intro">Literasi digital adalah kemampuan seseorang untuk menggunakan teknologi informasi dan komunikasi (TIK) secara efektif, aman, kritis, dan bertanggung jawab dalam kehidupan sehari-hari.</p>
            </div>

            <!-- Definisi Card -->
            <div class="info-card gradient-blue">
                <div class="info-card-icon"><i class="fas fa-lightbulb"></i></div>
                <div>
                    <h4>Definisi Resmi</h4>
                    <p>Menurut <strong>UNESCO</strong>, literasi digital adalah kemampuan menggunakan teknologi digital, alat komunikasi, dan/atau jaringan untuk mengakses, mengelola, mengintegrasikan, mengevaluasi, dan menciptakan informasi guna berfungsi dalam masyarakat berbasis pengetahuan.</p>
                </div>
            </div>

            <!-- Mengapa Penting -->
            <h3 class="sub-heading"><i class="fas fa-question-circle"></i> Mengapa Literasi Digital Itu Penting?</h3>
            <div class="grid-2-materi">
                <div class="feature-card">
                    <div class="feature-icon" style="background:linear-gradient(135deg,#eff6ff,#dbeafe);color:#2563eb;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Perlindungan Diri</h4>
                    <p>Melindungi diri dari ancaman siber seperti penipuan online, phishing, dan penyebaran hoaks yang merugikan.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background:linear-gradient(135deg,#faf5ff,#ede9fe);color:#7c3aed;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4>Berpikir Kritis</h4>
                    <p>Mampu memilah dan mengevaluasi informasi yang ditemukan di internet secara cerdas dan objektif.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background:linear-gradient(135deg,#f0fdf4,#dcfce7);color:#059669;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Etika Digital</h4>
                    <p>Berperilaku sopan dan bertanggung jawab di dunia digital, menghargai karya orang lain, dan menjaga privasi.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background:linear-gradient(135deg,#fff7ed,#ffedd5);color:#c2410c;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4>Produktivitas</h4>
                    <p>Memanfaatkan teknologi untuk meningkatkan produktivitas belajar, bekerja, dan berkolaborasi dengan orang lain.</p>
                </div>
            </div>

            <!-- Statistik -->
            <div class="stat-banner">
                <div class="stat-banner-item">
                    <div class="stat-banner-num">212+</div>
                    <div class="stat-banner-label">Juta pengguna internet di Indonesia</div>
                </div>
                <div class="stat-banner-item">
                    <div class="stat-banner-num">77%</div>
                    <div class="stat-banner-label">Penduduk Indonesia aktif di media sosial</div>
                </div>
                <div class="stat-banner-item">
                    <div class="stat-banner-num">8 Jam</div>
                    <div class="stat-banner-label">Rata-rata waktu online per hari</div>
                </div>
            </div>
        </article>

        <!-- ==============================
             TOPIK 2: Pilar Literasi Digital
             ============================== -->
        <article class="topik-section fade-in-up" id="topik2">
            <div class="topik-header">
                <span class="topik-badge" style="background:linear-gradient(135deg,rgba(124,58,237,0.1),rgba(167,139,250,0.1));border:1px solid rgba(124,58,237,0.2);color:#7c3aed;">
                    <i class="fas fa-columns"></i> Topik 2
                </span>
                <h2 class="topik-title">4 Pilar Literasi Digital</h2>
                <p class="topik-intro">Pemerintah Indonesia melalui Kominfo menetapkan 4 pilar utama literasi digital yang wajib dikuasai oleh setiap warga digital Indonesia.</p>
            </div>

            <div class="pilar-grid">
                <div class="pilar-card" style="--pilar-color:#2563eb;--pilar-bg:#eff6ff;">
                    <div class="pilar-num">1</div>
                    <div class="pilar-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Kecakapan Digital</h3>
                    <p><em>(Digital Skills)</em></p>
                    <p>Kemampuan mengoperasikan perangkat dan aplikasi digital untuk menyelesaikan tugas sehari-hari, termasuk memahami cara kerja teknologi.</p>
                    <ul class="pilar-list">
                        <li><i class="fas fa-check"></i> Menggunakan perangkat lunak produktivitas</li>
                        <li><i class="fas fa-check"></i> Memahami keamanan akun digital</li>
                        <li><i class="fas fa-check"></i> Memanfaatkan layanan cloud</li>
                    </ul>
                </div>
                <div class="pilar-card" style="--pilar-color:#7c3aed;--pilar-bg:#faf5ff;">
                    <div class="pilar-num">2</div>
                    <div class="pilar-icon"><i class="fas fa-heart"></i></div>
                    <h3>Budaya Digital</h3>
                    <p><em>(Digital Culture)</em></p>
                    <p>Kemampuan membaca, menguraikan, membiasakan, memeriksa, dan membangun wawasan kebangsaan dalam kehidupan digital.</p>
                    <ul class="pilar-list">
                        <li><i class="fas fa-check"></i> Menghargai nilai-nilai Pancasila di dunia digital</li>
                        <li><i class="fas fa-check"></i> Toleransi dan moderasi beragama online</li>
                        <li><i class="fas fa-check"></i> Menjaga persatuan di media sosial</li>
                    </ul>
                </div>
                <div class="pilar-card" style="--pilar-color:#059669;--pilar-bg:#f0fdf4;">
                    <div class="pilar-num">3</div>
                    <div class="pilar-icon"><i class="fas fa-ethics"></i></div>
                    <h3>Etika Digital</h3>
                    <p><em>(Digital Ethics)</em></p>
                    <p>Kemampuan menyadari, mencontohkan, menyesuaikan diri, merasionalkan, mempertimbangkan, dan mengembangkan tata kelola etika digital.</p>
                    <ul class="pilar-list">
                        <li><i class="fas fa-check"></i> Menghormati privasi orang lain</li>
                        <li><i class="fas fa-check"></i> Tidak menyebarkan konten berbahaya</li>
                        <li><i class="fas fa-check"></i> Menghargai hak cipta digital</li>
                    </ul>
                </div>
                <div class="pilar-card" style="--pilar-color:#c2410c;--pilar-bg:#fff7ed;">
                    <div class="pilar-num">4</div>
                    <div class="pilar-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Keamanan Digital</h3>
                    <p><em>(Digital Safety)</em></p>
                    <p>Kemampuan mengenali, mempolakan, menerapkan, menganalisis, menimbang, dan meningkatkan kesadaran perlindungan data digital.</p>
                    <ul class="pilar-list">
                        <li><i class="fas fa-check"></i> Membuat password yang kuat</li>
                        <li><i class="fas fa-check"></i> Mengenali ancaman phishing</li>
                        <li><i class="fas fa-check"></i> Melindungi data pribadi online</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- ==============================
             TOPIK 3: Mesin Pencari
             ============================== -->
        <article class="topik-section fade-in-up" id="topik3">
            <div class="topik-header">
                <span class="topik-badge" style="background:linear-gradient(135deg,rgba(6,182,212,0.1),rgba(34,211,238,0.1));border:1px solid rgba(6,182,212,0.2);color:#0891b2;">
                    <i class="fas fa-search"></i> Topik 3
                </span>
                <h2 class="topik-title">Mesin Pencari (Search Engine)</h2>
                <p class="topik-intro">Mesin pencari adalah program komputer yang dirancang untuk mencari dan menampilkan hasil berupa halaman web, gambar, video, atau jenis file lainnya berdasarkan kata kunci yang dimasukkan pengguna.</p>
            </div>

            <!-- Cara Kerja -->
            <h3 class="sub-heading"><i class="fas fa-cogs"></i> Cara Kerja Mesin Pencari</h3>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-circle" style="background:linear-gradient(135deg,#2563eb,#7c3aed);">
                        <i class="fas fa-spider"></i>
                    </div>
                    <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
                    <h4>1. Crawling</h4>
                    <p>Bot (spider) menjelajahi dan mengumpulkan informasi dari seluruh halaman web yang ada di internet secara otomatis.</p>
                </div>
                <div class="process-step">
                    <div class="step-circle" style="background:linear-gradient(135deg,#7c3aed,#c026d3);">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
                    <h4>2. Indexing</h4>
                    <p>Data yang dikumpulkan disimpan dan diorganisir dalam database besar yang disebut "indeks" mesin pencari.</p>
                </div>
                <div class="process-step">
                    <div class="step-circle" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">
                        <i class="fas fa-sort-amount-down"></i>
                    </div>
                    <div class="step-arrow"><i class="fas fa-chevron-right"></i></div>
                    <h4>3. Ranking</h4>
                    <p>Algoritma mengurutkan hasil berdasarkan relevansi, otoritas, dan ratusan faktor lainnya untuk menentukan urutan tampilan.</p>
                </div>
                <div class="process-step">
                    <div class="step-circle" style="background:linear-gradient(135deg,#059669,#10b981);">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="step-arrow last"></div>
                    <h4>4. Serving</h4>
                    <p>Hasil yang paling relevan ditampilkan kepada pengguna dalam hitungan milidetik berdasarkan kata kunci pencarian.</p>
                </div>
            </div>

            <!-- Mesin Pencari Populer -->
            <h3 class="sub-heading"><i class="fas fa-globe"></i> Mesin Pencari Populer di Dunia</h3>
            <div class="search-engine-grid">
                <div class="se-card">
                    <div class="se-logo" style="background:#fff;border:2px solid #e2e8f0;">
                        <span style="font-weight:900;font-size:1.4rem;background:linear-gradient(90deg,#4285F4,#EA4335,#FBBC05,#34A853);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">G</span>
                    </div>
                    <h4>Google</h4>
                    <div class="se-bar-wrap">
                        <div class="se-bar" style="--se-pct:92%;--se-color:#4285F4;"></div>
                    </div>
                    <p class="se-pct-label">~92% pangsa pasar</p>
                    <p class="se-desc">Mesin pencari nomor 1 di dunia dengan algoritma AI canggih dan layanan terintegrasi.</p>
                </div>
                <div class="se-card">
                    <div class="se-logo" style="background:#0078D4;color:white;font-weight:900;font-size:1.3rem;">Bing</div>
                    <h4>Microsoft Bing</h4>
                    <div class="se-bar-wrap">
                        <div class="se-bar" style="--se-pct:3%;--se-color:#0078D4;"></div>
                    </div>
                    <p class="se-pct-label">~3% pangsa pasar</p>
                    <p class="se-desc">Mesin pencari Microsoft yang kini dilengkapi dengan AI Copilot untuk pencarian cerdas.</p>
                </div>
                <div class="se-card">
                    <div class="se-logo" style="background:#DE5833;color:white;font-weight:900;font-size:1.2rem;">Y!</div>
                    <h4>Yahoo!</h4>
                    <div class="se-bar-wrap">
                        <div class="se-bar" style="--se-pct:1.5%;--se-color:#DE5833;"></div>
                    </div>
                    <p class="se-pct-label">~1.5% pangsa pasar</p>
                    <p class="se-desc">Salah satu mesin pencari tertua yang juga menyediakan berita, email, dan layanan keuangan.</p>
                </div>
                <div class="se-card">
                    <div class="se-logo" style="background:#DE5428;color:white;font-weight:700;font-size:0.85rem;">DuckDuck<br>Go</div>
                    <h4>DuckDuckGo</h4>
                    <div class="se-bar-wrap">
                        <div class="se-bar" style="--se-pct:0.6%;--se-color:#DE5428;"></div>
                    </div>
                    <p class="se-pct-label">~0.6% pangsa pasar</p>
                    <p class="se-desc">Mesin pencari yang sangat mengutamakan privasi pengguna — tidak melacak aktivitas pencarian.</p>
                </div>
            </div>

            <!-- Tips Pencarian Efektif -->
            <h3 class="sub-heading"><i class="fas fa-magic"></i> Tips Pencarian Efektif di Google</h3>
            <div class="tips-grid">
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-quote-left"></i></div>
                    <div>
                        <h4>"Tanda Kutip"</h4>
                        <p>Gunakan tanda kutip untuk mencari frasa yang tepat. Contoh: <code>"fotosintesis adalah"</code></p>
                    </div>
                </div>
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-minus"></i></div>
                    <div>
                        <h4>Tanda Minus (–)</h4>
                        <p>Kecualikan kata tertentu. Contoh: <code>jaguar -mobil</code> (hanya hasil tentang hewan)</p>
                    </div>
                </div>
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-globe-asia"></i></div>
                    <div>
                        <h4>site:</h4>
                        <p>Cari di situs tertentu saja. Contoh: <code>materi matematika site:kemdikbud.go.id</code></p>
                    </div>
                </div>
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-file-alt"></i></div>
                    <div>
                        <h4>filetype:</h4>
                        <p>Cari tipe file tertentu. Contoh: <code>modul informatika filetype:pdf</code></p>
                    </div>
                </div>
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-tilde" style="font-size:1.2rem;font-weight:900;">~</i></div>
                    <div>
                        <h4>Wildcard (*)</h4>
                        <p>Ganti kata yang tidak diketahui. Contoh: <code>cara * komputer dengan benar</code></p>
                    </div>
                </div>
                <div class="tip-card">
                    <div class="tip-icon"><i class="fas fa-calendar-alt"></i></div>
                    <div>
                        <h4>Filter Waktu</h4>
                        <p>Setelah mencari, klik "Tools" → "Any time" untuk menyaring hasil berdasarkan tanggal.</p>
                    </div>
                </div>
            </div>

            <!-- ===== SIMULATOR: GOOGLE SEARCH OPERATOR ===== -->
            <div class="search-playground fade-in-up" style="margin-top: 2rem;">
                <h4 style="margin-bottom:0.5rem;color:var(--primary-600);display:flex;align-items:center;gap:0.5rem;">
                    <i class="fas fa-search"></i> Simulator Operator Pencarian Google
                </h4>
                <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:1.25rem;">
                    Pilih salah satu operator pencarian khusus di bawah ini, lalu ketik kata kunci untuk melihat bagaimana Google menyaring hasil pencarian secara cerdas!
                </p>
                <div class="search-input-group">
                    <select id="operatorSelect">
                        <option value="none">Tanpa Operator (Pencarian Biasa)</option>
                        <option value="site">site: (Cari di Situs Tertentu)</option>
                        <option value="filetype">filetype: (Cari Format File Khusus)</option>
                        <option value="quotes">" " (Frasa Tepat & Persis)</option>
                        <option value="minus">- (Kecualikan Kata Pengganggu)</option>
                    </select>
                    <input type="text" id="searchKeyword" placeholder="Ketik kata kunci di sini... (contoh: jaringan)" value="jaringan">
                    <button class="btn btn-primary btn-sm" onclick="runSearchSimulator()"><i class="fas fa-search"></i> Cari</button>
                </div>
                <div class="search-results-mock">
                    <div style="font-size:0.75rem;color:var(--text-muted);border-bottom:1px solid var(--border-color);padding-bottom:0.5rem;margin-bottom:0.75rem;">
                        Hasil Pencarian Google untuk: <strong id="simulatedQuery" style="color:var(--primary-600);">jaringan</strong>
                    </div>
                    <div id="searchResultsArea">
                        <!-- JS Rendered -->
                    </div>
                </div>
                <div class="search-explanation" id="searchExplanationArea">
                    <i class="fas fa-info-circle"></i> Pilih operator dan klik tombol <strong>Cari</strong> untuk memulai simulasi.
                </div>
            </div>
        </article>

        <!-- ==============================
             TOPIK 4: Hoaks & Tips Aman
             ============================== -->
        <article class="topik-section fade-in-up" id="topik4">
            <div class="topik-header">
                <span class="topik-badge" style="background:linear-gradient(135deg,rgba(220,38,38,0.1),rgba(239,68,68,0.1));border:1px solid rgba(220,38,38,0.2);color:#dc2626;">
                    <i class="fas fa-exclamation-triangle"></i> Topik 4
                </span>
                <h2 class="topik-title">Mengenali Hoaks &amp; Keamanan Digital</h2>
                <p class="topik-intro">Di era digital, informasi palsu (hoaks) menyebar sangat cepat. Kemampuan membedakan informasi benar dan hoaks adalah keterampilan penting yang harus dimiliki setiap pengguna internet.</p>
            </div>

            <!-- Ciri-ciri Hoaks -->
            <div class="info-card" style="background:linear-gradient(135deg,rgba(220,38,38,0.06),rgba(239,68,68,0.06));border-color:rgba(220,38,38,0.2);">
                <div class="info-card-icon" style="background:linear-gradient(135deg,#fee2e2,#fecaca);color:#dc2626;"><i class="fas fa-ban"></i></div>
                <div>
                    <h4 style="color:#dc2626;">Waspadai Ciri-Ciri Hoaks Ini!</h4>
                    <p>Hoaks biasanya memiliki ciri khas yang bisa dikenali jika kita teliti dan kritis dalam membaca setiap informasi.</p>
                </div>
            </div>

            <div class="hoaks-grid">
                <div class="hoaks-card">
                    <div class="hoaks-num">1</div>
                    <div>
                        <h4><i class="fas fa-exclamation-circle" style="color:#f59e0b;"></i> Judul Sensasional</h4>
                        <p>Menggunakan kata-kata berlebihan dan provokatif seperti "MENGEJUTKAN!", "DARURAT!", "SEGERA SEBARKAN!" untuk memancing emosi pembaca.</p>
                    </div>
                </div>
                <div class="hoaks-card">
                    <div class="hoaks-num">2</div>
                    <div>
                        <h4><i class="fas fa-link" style="color:#3b82f6;"></i> Sumber Tidak Jelas</h4>
                        <p>Tidak menyebutkan sumber yang jelas, menggunakan sumber anonim, atau mengutip dari website yang tidak dikenal dan tidak terpercaya.</p>
                    </div>
                </div>
                <div class="hoaks-card">
                    <div class="hoaks-num">3</div>
                    <div>
                        <h4><i class="fas fa-image" style="color:#8b5cf6;"></i> Foto/Video Menyesatkan</h4>
                        <p>Menggunakan foto atau video yang diambil dari konteks berbeda, diedit, atau dipotong untuk mendukung klaim yang salah.</p>
                    </div>
                </div>
                <div class="hoaks-card">
                    <div class="hoaks-num">4</div>
                    <div>
                        <h4><i class="fas fa-calendar-times" style="color:#059669;"></i> Tanggal Tidak Sesuai</h4>
                        <p>Informasi lama yang disebarkan ulang seolah-olah adalah berita terkini, atau tanggal yang tidak cocok dengan kejadian yang diceritakan.</p>
                    </div>
                </div>
            </div>

            <!-- Langkah Verifikasi -->
            <h3 class="sub-heading"><i class="fas fa-check-double"></i> Cara Memverifikasi Informasi (SIFT Method)</h3>
            <div class="sift-steps">
                <div class="sift-step" style="--sift-color:#2563eb;">
                    <div class="sift-letter">S</div>
                    <div>
                        <h4>Stop (Berhenti)</h4>
                        <p>Berhenti sejenak sebelum membagikan atau bereaksi terhadap informasi. Jangan biarkan emosi mengendalikan tindakan Anda.</p>
                    </div>
                </div>
                <div class="sift-step" style="--sift-color:#7c3aed;">
                    <div class="sift-letter">I</div>
                    <div>
                        <h4>Investigate (Selidiki)</h4>
                        <p>Selidiki sumber informasi tersebut. Apakah sumbernya terpercaya? Apakah memiliki reputasi yang baik?</p>
                    </div>
                </div>
                <div class="sift-step" style="--sift-color:#059669;">
                    <div class="sift-letter">F</div>
                    <div>
                        <h4>Find Better Coverage</h4>
                        <p>Cari informasi yang sama dari sumber lain yang lebih terpercaya. Berita penting biasanya diliput banyak media.</p>
                    </div>
                </div>
                <div class="sift-step" style="--sift-color:#c2410c;">
                    <div class="sift-letter">T</div>
                    <div>
                        <h4>Trace Claims (Telusuri)</h4>
                        <p>Telusuri klaim, kutipan, dan media kembali ke konteks aslinya untuk memverifikasi kebenarannya.</p>
                    </div>
                </div>
            </div>

            <!-- Website Cek Fakta -->
            <div class="info-card" style="background:linear-gradient(135deg,rgba(5,150,105,0.06),rgba(16,185,129,0.06));border-color:rgba(5,150,105,0.2);">
                <div class="info-card-icon" style="background:linear-gradient(135deg,#dcfce7,#bbf7d0);color:#059669;"><i class="fas fa-check-circle"></i></div>
                <div>
                    <h4 style="color:#059669;">Website Cek Fakta Terpercaya di Indonesia</h4>
                    <div style="display:flex;gap:0.75rem;flex-wrap:wrap;margin-top:0.75rem;">
                        <span class="cek-badge">🔍 TurnBackHoax.id</span>
                        <span class="cek-badge">🔍 CekFakta.com</span>
                        <span class="cek-badge">🔍 Kominfo.go.id</span>
                        <span class="cek-badge">🔍 Mafindo.or.id</span>
                        <span class="cek-badge">🔍 Tempo Cek Fakta</span>
                    </div>
                </div>
            </div>

            <!-- ===== SIMULATOR: HOAX SPOTTER GAME ===== -->
            <div class="hoax-game-card fade-in-up" style="margin-top: 2rem;">
                <div class="hoax-game-header">
                    <span style="font-weight:700;color:var(--text-primary);display:flex;align-items:center;gap:0.5rem;"><i class="fas fa-user-shield" style="color:#dc2626;"></i> Game Detektif Hoaks (Hoax Spotter)</span>
                    <span class="hoax-score-bar">Temukan 4 Bukti Hoaks! (<span id="hoaxSpottedCount">0</span>/4)</span>
                </div>
                <div class="hoax-post-body">
                    <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:1.25rem;font-style:italic;">
                        Petunjuk: Postingan di bawah ini mengandung informasi palsu. Bacalah dengan jeli dan klik 4 bagian teks yang mencurigakan (mengindikasikan hoaks) untuk mendeteksinya!
                    </p>
                    
                    <div style="border:1px solid var(--border-color);border-radius:16px;padding:1.25rem;background:var(--bg-secondary);">
                        <div class="hoax-post-author">
                            <div class="hoax-author-avatar"><i class="fas fa-user-secret"></i></div>
                            <div>
                                <div class="hoax-author-name">Kabar_Viral_SMK</div>
                                <div style="font-size:0.72rem;color:var(--text-muted);">Di-posting baru saja • Publik</div>
                            </div>
                        </div>
                        
                        <div class="hoax-post-title" style="margin-bottom:0.75rem;">
                            <span class="hoax-spot" data-id="1" data-desc="1. JUDUL BOMBATIS/SENSASIONAL: Judul menggunakan huruf besar (all-caps), tanda seru berlebih, dan nada kepanikan untuk memancing emosi pembaca tanpa fakta rasional.">!!!AWAS DARURAT!!! INTERNET DI SELURUH INDONESIA AKAN DIMATIKAN TOTAL BESOK PAGI!!! SEBARKAN SEKARANG SEBELUM DIHAPUS!!!</span>
                        </div>
                        
                        <p style="font-size:0.88rem;line-height:1.6;color:var(--text-primary);margin-bottom:0.75rem;">
                            Info resmi valid A1 <span class="hoax-spot" data-id="2" data-desc="2. SUMBER ANONIM / TIDAK JELAS: Frasa 'dari grup sebelah' atau 'dari kerabat dekat' adalah penanda informasi tidak resmi yang tidak memliki kredibilitas ilmiah atau jurnalistik.">didapat langsung dari intelijen grup WA sebelah yang bocor tadi malam.</span> Pemerintah kabarnya sedang melakukan uji coba pemblokiran sistem besar-besaran. 
                        </p>
                        
                        <p style="font-size:0.88rem;line-height:1.6;color:var(--text-primary);margin-bottom:0.75rem;">
                            Agar nomor HP dan internet kalian tidak terblokir permanen, segera daftarkan diri kalian di link darurat kompensasi kuota gratis 100GB ini: 
                            <span class="hoax-spot" data-id="3" data-desc="3. LINK JANGGAL / PHISHING: Alamat link menggunakan domain gratisan dan tidak resmi seperti '.tk'. Situs web pemerintah Indonesia selalu menggunakan domain resmi akhiran '.go.id'. Jangan pernah mengetik password di link seperti ini!">http://pemerintah-kuota-darurat-gratis.tk/login</span>
                        </p>
                        
                        <p style="font-size:0.88rem;line-height:1.6;color:var(--text-primary);font-weight:bold;margin:0;">
                            Penting! <span class="hoax-spot" data-id="4" data-desc="4. ANCAMAN & PAKSAAN VIRAL (FORWARD BAIT): Memaksa menyebarkan informasi dengan ancaman pemblokiran adalah taktik psikologis hoaks agar korbannya menyebarkan pesan sebelum sempat memikirkan kebenarannya.">Bila pesan ini tidak dibagikan ke 10 grup WhatsApp lain dalam waktu 10 menit, HP Anda akan diblokir Kominfo selamanya!</span>
                        </p>
                    </div>
                </div>
                <div class="hoax-feedback-box" id="hoaxFeedbackArea">
                    <h5 style="font-weight:700;margin-bottom:0.4rem;color:#059669;" id="hoaxFeedbackTitle"><i class="fas fa-check-circle"></i> Bukti Terdeteksi</h5>
                    <p style="font-size:0.85rem;color:var(--text-secondary);margin:0;" id="hoaxFeedbackText"></p>
                </div>
                <div style="padding:0 1.5rem 1.5rem;text-align:right;display:none;" id="hoaxResetContainer">
                    <button class="btn btn-outline btn-sm" onclick="resetHoaxGame()"><i class="fas fa-redo"></i> Coba Deteksi Lagi</button>
                </div>
            </div>

            <!-- Rangkuman -->
            <div class="rangkuman-box">
                <div class="rangkuman-header">
                    <i class="fas fa-clipboard-check"></i> Rangkuman Materi
                </div>
                <div class="rangkuman-body">
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <strong>Literasi digital</strong> adalah kemampuan menggunakan teknologi secara efektif, aman, kritis, dan bertanggung jawab.</li>
                        <li><i class="fas fa-check-circle"></i> Ada <strong>4 pilar literasi digital</strong>: Kecakapan, Budaya, Etika, dan Keamanan Digital.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Mesin pencari</strong> bekerja melalui 4 tahap: Crawling → Indexing → Ranking → Serving.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Google</strong> menguasai ~92% pangsa pasar mesin pencari global.</li>
                        <li><i class="fas fa-check-circle"></i> Gunakan <strong>operator pencarian</strong> (kutip, minus, site:, filetype:) untuk hasil lebih akurat.</li>
                        <li><i class="fas fa-check-circle"></i> Verifikasi informasi menggunakan <strong>metode SIFT</strong> sebelum menyebarkannya.</li>
                    </ul>
                </div>
            </div>

            <!-- Navigasi Modul -->
            <div class="modul-nav">
                <a href="../index.php#materi" class="btn btn-outline"><i class="fas fa-home"></i> Kembali ke Modul</a>
                <a href="perangkat-teknologi.php" class="btn btn-primary">Modul 2: Perangkat Teknologi <i class="fas fa-arrow-right"></i></a>
            </div>

        </article>

    </main>
</div>

<!-- ===== STYLES ===== -->
<style>
/* Sidebar Links */
.sidebar-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.65rem 0.75rem;
    border-radius: 10px;
    color: var(--text-secondary);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s ease;
    margin-bottom: 0.25rem;
    text-decoration: none;
}
.sidebar-link:hover, .sidebar-link.active-link {
    background: linear-gradient(135deg, rgba(37,99,235,0.1), rgba(124,58,237,0.08));
    color: var(--primary-600);
}
.link-num {
    width: 26px;
    height: 26px;
    background: var(--bg-secondary);
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.7rem;
    font-weight: 700;
    color: var(--text-muted);
    flex-shrink: 0;
    transition: all 0.2s;
}
.sidebar-link.active-link .link-num {
    background: var(--gradient-primary);
    color: white;
}

/* Topik Section */
.topik-section {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 24px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: var(--card-shadow);
}
.topik-header { margin-bottom: 1.75rem; }
.topik-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.3rem 0.9rem;
    border-radius: 999px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    margin-bottom: 0.875rem;
}
.topik-title {
    font-size: clamp(1.4rem, 3vw, 1.9rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 0.75rem;
    color: var(--text-primary);
}
.topik-intro {
    color: var(--text-secondary);
    font-size: 1rem;
    line-height: 1.8;
    border-left: 3px solid var(--primary-400);
    padding-left: 1rem;
}

/* Sub Heading */
.sub-heading {
    font-size: 1.15rem;
    font-weight: 700;
    margin: 2rem 0 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-primary);
}
.sub-heading i { color: var(--primary-500); }

/* Info Card */
.info-card {
    display: flex;
    gap: 1rem;
    background: linear-gradient(135deg, rgba(37,99,235,0.06), rgba(124,58,237,0.06));
    border: 1px solid rgba(37,99,235,0.15);
    border-radius: 16px;
    padding: 1.25rem 1.5rem;
    margin-bottom: 1.75rem;
    align-items: flex-start;
}
.info-card-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, #dbeafe, #ede9fe);
    color: var(--primary-600);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}
.info-card h4 { font-size: 1rem; margin-bottom: 0.4rem; }
.info-card p { color: var(--text-secondary); font-size: 0.9rem; line-height: 1.7; }

/* Feature Cards */
.grid-2-materi {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 1.75rem;
}
.feature-card {
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 1.25rem;
    background: var(--bg-secondary);
    transition: all 0.25s;
}
.feature-card:hover { transform: translateY(-2px); box-shadow: var(--card-shadow-hover); }
.feature-icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    margin-bottom: 0.875rem;
}
.feature-card h4 { font-size: 0.95rem; margin-bottom: 0.4rem; }
.feature-card p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; }

/* Stat Banner */
.stat-banner {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    background: var(--gradient-primary);
    border-radius: 16px;
    padding: 1.5rem 2rem;
}
.stat-banner-item { text-align: center; color: white; }
.stat-banner-num { font-size: 1.75rem; font-weight: 800; letter-spacing: -0.02em; }
.stat-banner-label { font-size: 0.78rem; color: rgba(255,255,255,0.75); margin-top: 0.25rem; }

/* Pilar Grid */
.pilar-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
}
.pilar-card {
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 1.5rem;
    background: var(--pilar-bg, var(--bg-secondary));
    border-left: 4px solid var(--pilar-color, var(--primary-500));
    transition: all 0.25s;
}
[data-theme="dark"] .pilar-card:nth-child(1) {
    --pilar-color: #60a5fa !important;
    background: rgba(96, 165, 250, 0.08) !important;
    border-color: rgba(96, 165, 250, 0.25) !important;
}
[data-theme="dark"] .pilar-card:nth-child(2) {
    --pilar-color: #a78bfa !important;
    background: rgba(167, 139, 250, 0.08) !important;
    border-color: rgba(167, 139, 250, 0.25) !important;
}
[data-theme="dark"] .pilar-card:nth-child(3) {
    --pilar-color: #34d399 !important;
    background: rgba(52, 211, 153, 0.08) !important;
    border-color: rgba(52, 211, 153, 0.25) !important;
}
[data-theme="dark"] .pilar-card:nth-child(4) {
    --pilar-color: #fb923c !important;
    background: rgba(251, 146, 60, 0.08) !important;
    border-color: rgba(251, 146, 60, 0.25) !important;
}
.pilar-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
.pilar-num {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--pilar-color, var(--primary-500));
    opacity: 0.15;
    line-height: 1;
    margin-bottom: -0.5rem;
}
.pilar-icon {
    font-size: 1.5rem;
    color: var(--pilar-color, var(--primary-500));
    margin-bottom: 0.75rem;
}
.pilar-card h3 { font-size: 1rem; margin-bottom: 0.2rem; }
.pilar-card p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 0.75rem; }
.pilar-list { display: flex; flex-direction: column; gap: 0.35rem; }
.pilar-list li { display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.82rem; color: var(--text-secondary); }
.pilar-list li i { color: var(--pilar-color, var(--primary-500)); margin-top: 0.15rem; flex-shrink: 0; }

/* Process Steps */
.process-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
    position: relative;
}
.process-step {
    text-align: center;
    position: relative;
}
.step-circle {
    width: 60px; height: 60px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: white;
    font-size: 1.3rem;
    margin: 0 auto 0.875rem;
    box-shadow: 0 6px 20px rgba(37,99,235,0.3);
}
.step-arrow {
    position: absolute;
    top: 30px;
    right: -16px;
    color: var(--text-muted);
    font-size: 0.85rem;
    z-index: 1;
}
.step-arrow.last { display: none; }
.process-step h4 { font-size: 0.9rem; margin-bottom: 0.4rem; }
.process-step p { font-size: 0.8rem; color: var(--text-secondary); line-height: 1.6; }

/* Search Engine Grid */
.search-engine-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
}
.se-card {
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 1.25rem;
    background: var(--bg-secondary);
    text-align: center;
    transition: all 0.25s;
}
.se-card:hover { transform: translateY(-3px); box-shadow: var(--card-shadow-hover); }
.se-logo {
    width: 56px; height: 56px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 0.75rem;
    font-size: 1rem;
    line-height: 1.2;
    text-align: center;
}
.se-card h4 { font-size: 0.9rem; margin-bottom: 0.5rem; }
.se-bar-wrap { height: 6px; background: var(--border-color); border-radius: 999px; overflow: hidden; margin-bottom: 0.35rem; }
.se-bar {
    height: 100%;
    width: var(--se-pct, 0%);
    background: var(--se-color, var(--primary-500));
    border-radius: 999px;
    animation: growBar 1.5s ease both;
}
@keyframes growBar { from { width: 0%; } }
.se-pct-label { font-size: 0.75rem; font-weight: 700; color: var(--text-muted); margin-bottom: 0.5rem; }
.se-desc { font-size: 0.78rem; color: var(--text-secondary); line-height: 1.5; }

/* Tips Grid */
.tips-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
}
.tip-card {
    display: flex;
    gap: 0.875rem;
    align-items: flex-start;
    padding: 1rem 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: 14px;
    background: var(--bg-secondary);
    transition: all 0.2s;
}
.tip-card:hover { border-color: var(--primary-300); background: var(--primary-50); }
[data-theme="dark"] .tip-card:hover { background: rgba(37,99,235,0.08); border-color: rgba(37,99,235,0.3); }
.tip-icon {
    width: 36px; height: 36px;
    background: var(--gradient-primary);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 0.9rem;
    flex-shrink: 0;
}
.tip-card h4 { font-size: 0.9rem; font-weight: 700; margin-bottom: 0.3rem; }
.tip-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5; }
.tip-card code { background: var(--bg-tertiary); border: 1px solid var(--border-color); padding: 0.1rem 0.4rem; border-radius: 4px; font-size: 0.8rem; color: var(--primary-600); }

/* Hoaks Grid */
.hoaks-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
}
.hoaks-card {
    display: flex;
    gap: 1rem;
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: 14px;
    background: var(--bg-secondary);
    align-items: flex-start;
}
.hoaks-num {
    width: 32px; height: 32px;
    background: linear-gradient(135deg, #fca5a5, #f87171);
    color: white;
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 0.9rem;
    flex-shrink: 0;
}
.hoaks-card h4 { font-size: 0.9rem; font-weight: 700; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.4rem; }
.hoaks-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* SIFT Steps */
.sift-steps { display: flex; flex-direction: column; gap: 0.875rem; margin-bottom: 1.75rem; }
.sift-step {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem 1.25rem;
    border: 1px solid var(--border-color);
    border-left: 4px solid var(--sift-color, var(--primary-500));
    border-radius: 12px;
    background: var(--bg-secondary);
}
.sift-letter {
    width: 40px; height: 40px;
    background: var(--sift-color, var(--primary-500));
    color: white;
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-weight: 900; font-size: 1.2rem;
    flex-shrink: 0;
}
.sift-step h4 { font-size: 0.95rem; margin-bottom: 0.3rem; }
.sift-step p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; }

/* Cek Badge */
.cek-badge {
    display: inline-flex;
    background: rgba(5,150,105,0.1);
    border: 1px solid rgba(5,150,105,0.2);
    color: #059669;
    padding: 0.3rem 0.75rem;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Rangkuman */
.rangkuman-box {
    border: 1px solid var(--border-color);
    border-radius: 16px;
    overflow: hidden;
    margin: 2rem 0;
}
.rangkuman-header {
    background: var(--gradient-primary);
    color: white;
    padding: 0.875rem 1.5rem;
    font-weight: 700;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.rangkuman-body { padding: 1.25rem 1.5rem; background: var(--bg-secondary); }
.rangkuman-body ul { display: flex; flex-direction: column; gap: 0.65rem; }
.rangkuman-body li {
    display: flex; align-items: flex-start; gap: 0.75rem;
    font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;
}
.rangkuman-body li i { color: #059669; margin-top: 0.2rem; flex-shrink: 0; }

/* Navigasi Modul */
.modul-nav {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
    padding-top: 1.5rem;
    border-top: 1px solid var(--border-color);
}

/* Responsive */
@media (max-width: 1024px) {
    .materi-layout { grid-template-columns: 1fr !important; }
    .materi-sidebar { position: static !important; }
    #topicNav { display: flex; flex-wrap: wrap; gap: 0.5rem; }
    .sidebar-link { margin-bottom: 0; }
}
@media (max-width: 768px) {
    .topik-section { padding: 1.5rem; }
    .grid-2-materi, .pilar-grid, .hoaks-grid, .tips-grid { grid-template-columns: 1fr; }
    .process-steps, .search-engine-grid { grid-template-columns: repeat(2, 1fr); }
    .stat-banner { grid-template-columns: 1fr; gap: 0.75rem; }
    .step-arrow { display: none; }
}
</style>

<script>
// Sidebar active link
function setActiveLink(el) {
    document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active-link'));
    el.classList.add('active-link');
}

// Reading progress
window.addEventListener('scroll', () => {
    const el = document.documentElement;
    const pct = (el.scrollTop / (el.scrollHeight - el.clientHeight)) * 100;
    const bar = document.getElementById('readingProgress');
    if (bar) bar.style.width = pct + '%';
});

// Intersection observer for active sidebar
const sections = document.querySelectorAll('[id^="topik"]');
const sidebarLinks = document.querySelectorAll('.sidebar-link');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            sidebarLinks.forEach(l => l.classList.remove('active-link'));
            const active = document.querySelector(`.sidebar-link[href="#${entry.target.id}"]`);
            if (active) {
                active.classList.add('active-link');
                active.querySelector('.link-num').style.background = 'var(--gradient-primary)';
                active.querySelector('.link-num').style.color = 'white';
            }
        }
    });
}, { threshold: 0.3 });
sections.forEach(s => observer.observe(s));

// ============================================================
// JS FOR LITERASI DIGITAL SIMULATORS
// ============================================================

// 1. Search Engine Simulator
function runSearchSimulator() {
    const operator = document.getElementById('operatorSelect').value;
    const keyword = document.getElementById('searchKeyword').value.trim();
    const queryEl = document.getElementById('simulatedQuery');
    const resultsArea = document.getElementById('searchResultsArea');
    const explanationArea = document.getElementById('searchExplanationArea');
    
    if (!keyword) {
        alert('Ketikkan kata kunci terlebih dahulu!');
        return;
    }
    
    let queryText = "";
    let explanation = "";
    let resultsHTML = "";
    
    if (operator === 'none') {
        queryText = keyword;
        explanation = `<strong>Pencarian Biasa:</strong> Menampilkan hasil umum yang mengandung kata "${keyword}". Google akan mencari halaman mana saja yang relevan secara umum.`;
        resultsHTML = `
            <div class="search-result-item">
                <div class="search-result-url">https://id.wikipedia.org > wiki > ${keyword}</div>
                <div class="search-result-title">${keyword.charAt(0).toUpperCase() + keyword.slice(1)} - Wikipedia bahasa Indonesia</div>
                <div class="search-result-snippet">Temukan informasi mendalam tentang ${keyword}, sejarahnya, perkembangannya, dan penerapannya di dunia modern...</div>
            </div>
            <div class="search-result-item">
                <div class="search-result-url">https://www.kompas.com > edukasi</div>
                <div class="search-result-title">Mengenal ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} untuk Pemula</div>
                <div class="search-result-snippet">Artikel ini merangkum definisi ${keyword}, kegunaan praktis, dan mengapa ini penting dipelajari sejak sekolah...</div>
            </div>
        `;
    } else if (operator === 'site') {
        queryText = `${keyword} site:kemdikbud.go.id`;
        explanation = `<strong>Operator site:</strong> Google HANYA memunculkan halaman web yang berasal dari domain <code>kemdikbud.go.id</code> (Kementerian Pendidikan). Operator ini berguna untuk mencari sumber resmi pemerintah/organisasi tertentu.`;
        resultsHTML = `
            <div class="search-result-item">
                <div class="search-result-url">https://buku.kemdikbud.go.id > katalog > ${keyword}</div>
                <div class="search-result-title">Buku Pelajaran ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} Resmi Kemdikbud</div>
                <div class="search-result-snippet">Unduh buku paket resmi ${keyword} untuk tingkat SMP, SMA, dan SMK sesuai Kurikulum Merdeka. Buku ini diterbitkan oleh Kemdikbudristek...</div>
            </div>
            <div class="search-result-item">
                <div class="search-result-url">https://pusdatin.kemdikbud.go.id > artikel</div>
                <div class="search-result-title">Pemanfaatan Media Pembelajaran ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} di Sekolah</div>
                <div class="search-result-snippet">Pusdatin mengulas pentingnya integrasi materi ${keyword} dalam meningkatkan keterampilan digital siswa SMK Indonesia...</div>
            </div>
        `;
    } else if (operator === 'filetype') {
        queryText = `${keyword} filetype:pdf`;
        explanation = `<strong>Operator filetype:</strong> Google menyaring hasil pencarian dan HANYA menampilkan dokumen dalam format <strong>PDF</strong>. Sangat berguna saat mencari e-book, jurnal, modul, atau dokumen resmi siap download.`;
        resultsHTML = `
            <div class="search-result-item">
                <div class="search-result-url">[PDF] https://guru.kemdikbud.go.id > modul > ${keyword}.pdf</div>
                <div class="search-result-title">Modul Ajar Pelajaran ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} SMK - PDF</div>
                <div class="search-result-snippet">File PDF lengkap berisi materi teori, lembar kerja siswa (LKS), dan petunjuk praktikum ${keyword} kelas X SMK jurusan teknologi informasi...</div>
            </div>
            <div class="search-result-item">
                <div class="search-result-url">[PDF] https://direktoratsmk.kemdikbud.go.id > kurikulum_${keyword}.pdf</div>
                <div class="search-result-title">Panduan Kompetensi Dasar Keahlian ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} - PDF</div>
                <div class="search-result-snippet">Silabus dan standar industri kompetensi ${keyword} untuk program studi teknik komputer jaringan di sekolah menengah kejuruan...</div>
            </div>
        `;
    } else if (operator === 'quotes') {
        queryText = `"${keyword}"`;
        explanation = `<strong>Operator Tanda Kutip (" "):</strong> Google mencari hasil yang mengandung kata "${keyword}" secara PERSIS berurutan, tidak boleh dipisah atau diacak. Sangat cocok untuk mencari judul lagu, kutipan tokoh, atau kesalahan error kode program yang spesifik.`;
        resultsHTML = `
            <div class="search-result-item">
                <div class="search-result-url">https://pembelajaran.id > istilah</div>
                <div class="search-result-title">Memahami Istilah "${keyword}" Secara Akurat</div>
                <div class="search-result-snippet">Situs ini membahas secara mendetail apa makna kalimat "${keyword}" dalam konteks pengajaran informatika di Indonesia...</div>
            </div>
        `;
    } else if (operator === 'minus') {
        queryText = `${keyword} -game`;
        explanation = `<strong>Operator Minus (-):</strong> Google akan mencari materi "${keyword}" tetapi mengecualikan (membuang) semua hasil pencarian yang mengandung kata "game". Sangat berguna untuk menghilangkan hasil yang mengganggu (misal: mencari buah apel, ketik <code>apel -malang</code> agar tidak menampilkan kota Malang).`;
        resultsHTML = `
            <div class="search-result-item">
                <div class="search-result-url">https://jurnalkomputer.org > sains</div>
                <div class="search-result-title">Perkembangan Teori ${keyword.charAt(0).toUpperCase() + keyword.slice(1)} Modern</div>
                <div class="search-result-snippet">Artikel sains murni mengenai implikasi ${keyword} dalam sistem kecerdasan buatan, jaringan saraf tiruan, dan robotika industri (bebas konten game)...</div>
            </div>
        `;
    }
    
    queryEl.textContent = queryText;
    resultsArea.innerHTML = resultsHTML;
    explanationArea.innerHTML = `<i class="fas fa-lightbulb" style="color:#059669; margin-right:0.5rem;"></i>` + explanation;
}

// Run initial search
document.addEventListener('DOMContentLoaded', () => {
    runSearchSimulator();
    initHoaxGame();
});

// 2. Hoax Spotter Game
let spottedHoaxes = new Set();
function initHoaxGame() {
    const spots = document.querySelectorAll('.hoax-spot');
    const feedbackBox = document.getElementById('hoaxFeedbackArea');
    const feedbackTitle = document.getElementById('hoaxFeedbackTitle');
    const feedbackText = document.getElementById('hoaxFeedbackText');
    const countEl = document.getElementById('hoaxSpottedCount');
    const resetCont = document.getElementById('hoaxResetContainer');
    
    spots.forEach(spot => {
        spot.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const desc = this.getAttribute('data-desc');
            
            this.classList.add('spotted');
            spottedHoaxes.add(id);
            
            countEl.textContent = spottedHoaxes.size;
            
            feedbackBox.style.display = 'block';
            feedbackTitle.innerHTML = `<i class="fas fa-check-circle" style="color:#059669; margin-right:0.5rem;"></i> Bukti ${id} Ditemukan!`;
            feedbackText.textContent = desc;
            
            if (spottedHoaxes.size === 4) {
                feedbackTitle.innerHTML = `🎉 Selamat! Kamu Detektif Hoaks Sejati!`;
                feedbackText.innerHTML = `Kamu berhasil mendeteksi semua 4 tanda bahaya hoaks di postingan ini! Ingat, selalu kritis dan gunakan metode <strong>SIFT</strong> saat membaca info di internet.`;
                feedbackBox.style.background = 'rgba(5,150,105,0.08)';
                feedbackBox.style.borderColor = 'rgba(5,150,105,0.25)';
                feedbackBox.style.color = '#059669';
                resetCont.style.display = 'block';
            }
        });
    });
}

function resetHoaxGame() {
    spottedHoaxes.clear();
    document.getElementById('hoaxSpottedCount').textContent = 0;
    document.querySelectorAll('.hoax-spot').forEach(spot => {
        spot.classList.remove('spotted');
    });
    const feedbackBox = document.getElementById('hoaxFeedbackArea');
    feedbackBox.style.display = 'none';
    feedbackBox.style.background = 'var(--bg-secondary)';
    feedbackBox.style.borderColor = 'var(--border-color)';
    feedbackBox.style.color = 'var(--text-secondary)';
    document.getElementById('hoaxResetContainer').style.display = 'none';
}
</script>

<?php include '../includes/footer.php'; ?>
