<?php
$page_title = "Jaringan Komputer & Internet";
include '../includes/header.php';
?>

<!-- ===== PAGE HERO ===== -->
<section style="background:linear-gradient(135deg,#0c4a6e 0%,#0891b2 45%,#0f172a 100%);padding:3.5rem 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div style="position:absolute;top:-100px;right:-80px;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(6,182,212,0.35),transparent);filter:blur(70px);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-60px;left:5%;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(14,116,144,0.3),transparent);filter:blur(60px);pointer-events:none;"></div>

    <div class="container" style="position:relative;z-index:1;">
        <a href="../index.php" class="btn btn-sm" style="background:rgba(255,255,255,0.15);color:white;border:1px solid rgba(255,255,255,0.25);margin-bottom:1.5rem;display:inline-flex;">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
            <div style="width:72px;height:72px;background:rgba(255,255,255,0.15);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.25);border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:white;flex-shrink:0;">
                <i class="fas fa-network-wired"></i>
            </div>
            <div style="color:white;">
                <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem;">
                    <span style="background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;letter-spacing:0.05em;">MODUL 3</span>
                    <span style="background:rgba(6,182,212,0.25);border:1px solid rgba(6,182,212,0.4);color:#a5f3fc;padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;">📡 Jaringan</span>
                </div>
                <h1 style="font-size:clamp(1.6rem,4vw,2.5rem);font-weight:800;line-height:1.2;letter-spacing:-0.02em;margin-bottom:0.5rem;">Jaringan Komputer <span style="background:linear-gradient(135deg,#67e8f9,#a5f3fc);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">&amp; Internet</span></h1>
                <p style="color:rgba(255,255,255,0.75);font-size:1rem;">Pahami cara komputer saling terhubung, topologi jaringan, perangkat keras, dan cara kerja internet</p>
            </div>
        </div>
        <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-clock"></i> Estimasi: ~40 menit
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
    <div id="readingProgress" style="height:100%;background:linear-gradient(90deg,#0891b2,#06b6d4);width:0%;transition:width 0.1s;"></div>
</div>

<!-- ===== MAIN LAYOUT ===== -->
<div class="j-layout container" style="display:grid;grid-template-columns:260px 1fr;gap:2.5rem;padding-top:2.5rem;padding-bottom:4rem;align-items:start;">

    <!-- ===== SIDEBAR ===== -->
    <aside style="position:sticky;top:90px;">
        <div style="background:var(--card-bg);border:1px solid var(--border-color);border-radius:20px;padding:1.5rem;box-shadow:var(--card-shadow);">
            <h4 style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:1rem;">Daftar Topik</h4>
            <nav>
                <a href="#topik1" class="j-sidebar-link j-active">
                    <span class="j-link-num">01</span>
                    <span>Pengertian Jaringan Komputer</span>
                </a>
                <a href="#topik2" class="j-sidebar-link">
                    <span class="j-link-num">02</span>
                    <span>Jenis-Jenis Jaringan</span>
                </a>
                <a href="#topik3" class="j-sidebar-link">
                    <span class="j-link-num">03</span>
                    <span>Topologi Jaringan</span>
                </a>
                <a href="#topik4" class="j-sidebar-link">
                    <span class="j-link-num">04</span>
                    <span>Perangkat Keras Jaringan</span>
                </a>
                <a href="#topik5" class="j-sidebar-link">
                    <span class="j-link-num">05</span>
                    <span>Protokol &amp; Internet</span>
                </a>
            </nav>
            <div style="margin-top:1.5rem;padding-top:1.5rem;border-top:1px solid var(--border-color);">
                <a href="../index.php#materi" class="btn btn-sm btn-outline" style="width:100%;justify-content:center;">
                    <i class="fas fa-home"></i> Lihat Semua Modul
                </a>
            </div>
        </div>

        <!-- Progress Modul Card -->
        <div style="background:linear-gradient(135deg,#0c4a6e,#0891b2);border-radius:20px;padding:1.5rem;margin-top:1.25rem;color:white;">
            <h4 style="font-size:0.85rem;font-weight:700;margin-bottom:1rem;opacity:0.9;">Progress Modul</h4>
            <div class="j-modul-progress">
                <a href="literasi-digital.php" class="j-mp-item j-done">
                    <div class="j-mp-icon"><i class="fas fa-check"></i></div>
                    <span>Literasi Digital</span>
                </a>
                <a href="perangkat-teknologi.php" class="j-mp-item j-done">
                    <div class="j-mp-icon"><i class="fas fa-check"></i></div>
                    <span>Perangkat Teknologi</span>
                </a>
                <a href="jaringan-komputer.php" class="j-mp-item j-current">
                    <div class="j-mp-icon"><i class="fas fa-circle"></i></div>
                    <span>Jaringan Komputer</span>
                </a>
            </div>
            <div style="margin-top:1rem;background:rgba(255,255,255,0.15);border-radius:999px;height:6px;overflow:hidden;">
                <div style="height:100%;width:100%;background:linear-gradient(90deg,#a5f3fc,#67e8f9);border-radius:999px;"></div>
            </div>
            <p style="font-size:0.75rem;opacity:0.75;margin-top:0.5rem;text-align:center;">3 / 3 Modul Selesai 🎉</p>
        </div>
    </aside>

    <!-- ===== KONTEN MATERI ===== -->
    <main>

        <!-- ============================
             TOPIK 1: Pengertian Jaringan
             ============================ -->
        <article class="j-section fade-in-up" id="topik1">
            <div class="j-topik-header">
                <span class="j-badge" style="background:linear-gradient(135deg,rgba(8,145,178,0.12),rgba(6,182,212,0.08));border:1px solid rgba(8,145,178,0.25);color:#0891b2;">
                    <i class="fas fa-network-wired"></i> Topik 1
                </span>
                <h2 class="j-title">Pengertian Jaringan Komputer</h2>
                <p class="j-intro">Jaringan komputer adalah sekumpulan dua atau lebih perangkat komputasi (komputer, smartphone, printer, dll.) yang saling terhubung satu sama lain menggunakan media transmisi tertentu untuk berbagi data, informasi, dan sumber daya.</p>
            </div>

            <!-- Definisi Card -->
            <div class="j-info-card" style="--jic-color:#0891b2;--jic-bg:linear-gradient(135deg,rgba(8,145,178,0.07),rgba(6,182,212,0.04));">
                <div class="j-ic-icon" style="background:linear-gradient(135deg,#cffafe,#a5f3fc);color:#0e7490;">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div>
                    <h4>Manfaat Utama Jaringan Komputer</h4>
                    <p>Dengan jaringan komputer, pengguna dapat berbagi file &amp; data, berbagi perangkat (printer, scanner), berkomunikasi (email, video call), mengakses internet bersama, dan memusatkan penyimpanan data (server).</p>
                </div>
            </div>

            <!-- Komponen Jaringan -->
            <h3 class="j-sub-heading"><i class="fas fa-puzzle-piece"></i> Komponen Utama Jaringan Komputer</h3>
            <div class="j-komponen-grid">
                <div class="j-komp-card" style="--jk-color:#0891b2;">
                    <div class="j-komp-icon"><i class="fas fa-desktop"></i></div>
                    <h4>Hardware (Perangkat Keras)</h4>
                    <p>Perangkat fisik dalam jaringan: komputer/laptop, router, switch, hub, kabel jaringan, access point, NIC (Network Interface Card).</p>
                </div>
                <div class="j-komp-card" style="--jk-color:#7c3aed;">
                    <div class="j-komp-icon"><i class="fas fa-code"></i></div>
                    <h4>Software (Perangkat Lunak)</h4>
                    <p>Program yang mengelola jaringan: sistem operasi jaringan (NOS), protokol jaringan, aplikasi email, browser, dan tools manajemen jaringan.</p>
                </div>
                <div class="j-komp-card" style="--jk-color:#059669;">
                    <div class="j-komp-icon"><i class="fas fa-project-diagram"></i></div>
                    <h4>Media Transmisi</h4>
                    <p>Media pengiriman data: kabel UTP/STP, kabel serat optik (fiber optic), kabel koaksial, atau nirkabel (Wi-Fi, Bluetooth, gelombang radio).</p>
                </div>
                <div class="j-komp-card" style="--jk-color:#c2410c;">
                    <div class="j-komp-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Protokol Jaringan</h4>
                    <p>Aturan standar komunikasi data antar perangkat: TCP/IP, HTTP/HTTPS, FTP, SMTP, DNS, DHCP, dan berbagai protokol lainnya.</p>
                </div>
            </div>

            <!-- Kabel vs Nirkabel -->
            <h3 class="j-sub-heading"><i class="fas fa-exchange-alt"></i> Jaringan Kabel vs. Nirkabel (Wireless)</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
                <div class="j-compare-card" style="border-color:rgba(8,145,178,0.3);">
                    <div class="j-compare-head" style="background:linear-gradient(135deg,rgba(8,145,178,0.12),rgba(6,182,212,0.06));color:#0891b2;">
                        <i class="fas fa-ethernet"></i> Jaringan Kabel (Wired)
                    </div>
                    <div class="j-compare-body">
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Kecepatan tinggi dan stabil</div>
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Keamanan data lebih terjamin</div>
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Tidak terpengaruh interferensi sinyal</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Mobilitas terbatas oleh kabel</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Instalasi lebih rumit dan mahal</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Rentan rusak jika kabel terputus</div>
                    </div>
                </div>
                <div class="j-compare-card" style="border-color:rgba(124,58,237,0.3);">
                    <div class="j-compare-head" style="background:linear-gradient(135deg,rgba(124,58,237,0.1),rgba(167,139,250,0.06));color:#7c3aed;">
                        <i class="fas fa-wifi"></i> Jaringan Nirkabel (Wireless)
                    </div>
                    <div class="j-compare-body">
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Mobilitas tinggi, bebas kabel</div>
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Mudah dipasang dan dikembangkan</div>
                        <div class="j-comp-item j-pro"><i class="fas fa-plus-circle"></i> Bisa diakses dari banyak titik</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Kecepatan lebih rendah dari kabel</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Rentan terhadap interferensi sinyal</div>
                        <div class="j-comp-item j-con"><i class="fas fa-minus-circle"></i> Keamanan lebih rentan (hacking)</div>
                    </div>
                </div>
            </div>
        </article>

        <!-- ============================
             TOPIK 2: Jenis Jaringan
             ============================ -->
        <article class="j-section fade-in-up" id="topik2">
            <div class="j-topik-header">
                <span class="j-badge" style="background:linear-gradient(135deg,rgba(124,58,237,0.12),rgba(167,139,250,0.08));border:1px solid rgba(124,58,237,0.25);color:#7c3aed;">
                    <i class="fas fa-sitemap"></i> Topik 2
                </span>
                <h2 class="j-title">Jenis-Jenis Jaringan Komputer</h2>
                <p class="j-intro">Jaringan komputer diklasifikasikan berdasarkan jangkauan geografisnya menjadi beberapa jenis. Semakin luas jangkauannya, semakin kompleks infrastruktur yang dibutuhkan.</p>
            </div>

            <!-- LAN MAN WAN Cards -->
            <div class="j-jenis-grid">
                <!-- LAN -->
                <div class="j-jenis-card" style="--jj-color:#2563eb;--jj-grad:linear-gradient(135deg,#2563eb,#3b82f6);">
                    <div class="j-jenis-top">
                        <div class="j-jenis-abbr">LAN</div>
                        <div class="j-jenis-icon"><i class="fas fa-home"></i></div>
                    </div>
                    <h3>Local Area Network</h3>
                    <p class="j-jenis-range"><i class="fas fa-ruler-horizontal"></i> Jangkauan: hingga 1 km</p>
                    <p>Jaringan yang menghubungkan perangkat dalam area terbatas seperti satu gedung, satu sekolah, satu kantor, atau satu rumah.</p>
                    <div class="j-jenis-contoh">
                        <strong>Contoh:</strong>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> Laboratorium komputer sekolah</li>
                            <li><i class="fas fa-angle-right"></i> Jaringan kantor satu lantai</li>
                            <li><i class="fas fa-angle-right"></i> Wi-Fi rumah (Home Network)</li>
                        </ul>
                    </div>
                    <div class="j-jenis-speed"><i class="fas fa-tachometer-alt"></i> Kecepatan: 100 Mbps – 10 Gbps</div>
                </div>

                <!-- MAN -->
                <div class="j-jenis-card" style="--jj-color:#7c3aed;--jj-grad:linear-gradient(135deg,#7c3aed,#a78bfa);">
                    <div class="j-jenis-top">
                        <div class="j-jenis-abbr">MAN</div>
                        <div class="j-jenis-icon"><i class="fas fa-city"></i></div>
                    </div>
                    <h3>Metropolitan Area Network</h3>
                    <p class="j-jenis-range"><i class="fas fa-ruler-horizontal"></i> Jangkauan: 5 – 50 km</p>
                    <p>Jaringan yang mencakup satu kota atau metropolitan, menghubungkan beberapa jaringan LAN dalam satu kota yang sama.</p>
                    <div class="j-jenis-contoh">
                        <strong>Contoh:</strong>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> Jaringan antar kampus kota</li>
                            <li><i class="fas fa-angle-right"></i> Jaringan Pemda satu kota</li>
                            <li><i class="fas fa-angle-right"></i> Jaringan bank antar cabang kota</li>
                        </ul>
                    </div>
                    <div class="j-jenis-speed"><i class="fas fa-tachometer-alt"></i> Kecepatan: 10 Mbps – 1 Gbps</div>
                </div>

                <!-- WAN -->
                <div class="j-jenis-card" style="--jj-color:#0891b2;--jj-grad:linear-gradient(135deg,#0891b2,#06b6d4);">
                    <div class="j-jenis-top">
                        <div class="j-jenis-abbr">WAN</div>
                        <div class="j-jenis-icon"><i class="fas fa-globe"></i></div>
                    </div>
                    <h3>Wide Area Network</h3>
                    <p class="j-jenis-range"><i class="fas fa-ruler-horizontal"></i> Jangkauan: antar kota/negara</p>
                    <p>Jaringan yang mencakup wilayah geografis yang sangat luas, bahkan bisa meliputi seluruh dunia. Internet adalah contoh terbesar WAN.</p>
                    <div class="j-jenis-contoh">
                        <strong>Contoh:</strong>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> Internet (jaringan global)</li>
                            <li><i class="fas fa-angle-right"></i> Jaringan perusahaan multinasional</li>
                            <li><i class="fas fa-angle-right"></i> Jaringan perbankan nasional</li>
                        </ul>
                    </div>
                    <div class="j-jenis-speed"><i class="fas fa-tachometer-alt"></i> Kecepatan: 1 Mbps – 100 Mbps</div>
                </div>
            </div>

            <!-- Jenis tambahan -->
            <h3 class="j-sub-heading"><i class="fas fa-plus-circle"></i> Jenis Jaringan Lainnya</h3>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;">
                <div class="j-mini-card" style="--jm-color:#059669;">
                    <div class="j-mini-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h4>PAN</h4>
                    <p><em>Personal Area Network</em> — Jangkauan sangat pendek (~10 meter). Contoh: Bluetooth, infrared antara HP dan laptop.</p>
                </div>
                <div class="j-mini-card" style="--jm-color:#c2410c;">
                    <div class="j-mini-icon"><i class="fas fa-broadcast-tower"></i></div>
                    <h4>WLAN</h4>
                    <p><em>Wireless LAN</em> — LAN berbasis nirkabel. Contoh: Wi-Fi di sekolah, kafe, dan mall yang menggunakan access point.</p>
                </div>
                <div class="j-mini-card" style="--jm-color:#d97706;">
                    <div class="j-mini-icon"><i class="fas fa-cloud"></i></div>
                    <h4>VPN</h4>
                    <p><em>Virtual Private Network</em> — Jaringan privat melalui internet publik dengan enkripsi. Digunakan untuk keamanan akses jarak jauh.</p>
                </div>
            </div>
        </article>

        <!-- ============================
             TOPIK 3: Topologi Jaringan
             ============================ -->
        <article class="j-section fade-in-up" id="topik3">
            <div class="j-topik-header">
                <span class="j-badge" style="background:linear-gradient(135deg,rgba(5,150,105,0.12),rgba(16,185,129,0.08));border:1px solid rgba(5,150,105,0.25);color:#059669;">
                    <i class="fas fa-project-diagram"></i> Topik 3
                </span>
                <h2 class="j-title">Topologi Jaringan</h2>
                <p class="j-intro">Topologi jaringan adalah tata letak atau pola koneksi fisik maupun logis yang menggambarkan bagaimana perangkat-perangkat dalam jaringan saling terhubung satu sama lain.</p>
            </div>

            <div class="j-topologi-grid">

                <!-- Bus -->
                <div class="j-topo-card">
                    <div class="j-topo-visual">
                        <!-- Bus Diagram SVG -->
                        <svg viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg" class="j-topo-svg">
                            <line x1="20" y1="40" x2="180" y2="40" stroke="#0891b2" stroke-width="3" stroke-linecap="round"/>
                            <line x1="50" y1="40" x2="50" y2="20" stroke="#94a3b8" stroke-width="2"/>
                            <line x1="90" y1="40" x2="90" y2="20" stroke="#94a3b8" stroke-width="2"/>
                            <line x1="130" y1="40" x2="130" y2="20" stroke="#94a3b8" stroke-width="2"/>
                            <line x1="160" y1="40" x2="160" y2="20" stroke="#94a3b8" stroke-width="2"/>
                            <rect x="38" y="10" width="24" height="16" rx="3" fill="#0891b2" opacity="0.9"/>
                            <rect x="78" y="10" width="24" height="16" rx="3" fill="#0891b2" opacity="0.9"/>
                            <rect x="118" y="10" width="24" height="16" rx="3" fill="#0891b2" opacity="0.9"/>
                            <rect x="148" y="10" width="24" height="16" rx="3" fill="#0891b2" opacity="0.9"/>
                            <circle cx="20" cy="40" r="5" fill="#f59e0b"/>
                            <circle cx="180" cy="40" r="5" fill="#f59e0b"/>
                            <text x="100" y="70" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">Topologi Bus</text>
                        </svg>
                    </div>
                    <div class="j-topo-info">
                        <h3><span class="j-topo-badge" style="background:#0891b2;">BUS</span> Topologi Bus</h3>
                        <p>Semua komputer terhubung ke satu kabel utama (backbone). Data dikirim melalui kabel utama dan dapat diterima oleh semua perangkat.</p>
                        <div class="j-topo-pros-cons">
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Instalasi mudah dan murah</div>
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Hemat kabel</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Jika kabel utama rusak, seluruh jaringan mati</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Performa menurun jika terlalu banyak perangkat</div>
                        </div>
                    </div>
                </div>

                <!-- Star -->
                <div class="j-topo-card">
                    <div class="j-topo-visual">
                        <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg" class="j-topo-svg">
                            <!-- Center Hub -->
                            <circle cx="100" cy="50" r="14" fill="#7c3aed" opacity="0.9"/>
                            <text x="100" y="54" text-anchor="middle" fill="white" font-size="8" font-family="sans-serif" font-weight="bold">HUB</text>
                            <!-- Lines to devices -->
                            <line x1="100" y1="36" x2="100" y2="14" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="86" y1="42" x2="45" y2="30" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="86" y1="58" x2="40" y2="72" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="100" y1="64" x2="100" y2="86" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="114" y1="58" x2="160" y2="72" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="114" y1="42" x2="155" y2="30" stroke="#94a3b8" stroke-width="1.5"/>
                            <!-- Devices -->
                            <rect x="88" y="6" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <rect x="24" y="22" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <rect x="20" y="65" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <rect x="88" y="82" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <rect x="152" y="65" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <rect x="148" y="22" width="24" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
                            <text x="100" y="110" text-anchor="middle" fill="#64748b" font-size="0" font-family="sans-serif"></text>
                        </svg>
                    </div>
                    <div class="j-topo-info">
                        <h3><span class="j-topo-badge" style="background:#7c3aed;">STAR</span> Topologi Bintang</h3>
                        <p>Setiap perangkat terhubung langsung ke satu perangkat pusat (hub/switch). Data melewati pusat sebelum ke tujuan. <strong>Paling umum digunakan saat ini.</strong></p>
                        <div class="j-topo-pros-cons">
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Mudah mendeteksi kerusakan</div>
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Penambahan perangkat mudah</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Jika hub/switch rusak, semua terputus</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Butuh lebih banyak kabel</div>
                        </div>
                    </div>
                </div>

                <!-- Ring -->
                <div class="j-topo-card">
                    <div class="j-topo-visual">
                        <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg" class="j-topo-svg">
                            <!-- Ring path -->
                            <circle cx="100" cy="50" r="38" fill="none" stroke="#059669" stroke-width="2" stroke-dasharray="none" opacity="0.5"/>
                            <!-- Devices on ring -->
                            <rect x="88" y="6" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <rect x="148" y="22" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <rect x="152" y="65" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <rect x="88" y="82" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <rect x="24" y="65" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <rect x="24" y="22" width="24" height="14" rx="2" fill="#059669" opacity="0.9"/>
                            <!-- Arrows on ring -->
                            <path d="M100 13 Q138 13 160 29" fill="none" stroke="#059669" stroke-width="1.5" marker-end="url(#arr)"/>
                        </svg>
                    </div>
                    <div class="j-topo-info">
                        <h3><span class="j-topo-badge" style="background:#059669;">RING</span> Topologi Cincin</h3>
                        <p>Setiap perangkat terhubung ke dua perangkat lain membentuk lingkaran (cincin). Data bergerak searah melewati setiap perangkat.</p>
                        <div class="j-topo-pros-cons">
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Tidak terjadi tabrakan data</div>
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Performa konsisten</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Jika satu node rusak, seluruh jaringan terganggu</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Sulit melakukan troubleshooting</div>
                        </div>
                    </div>
                </div>

                <!-- Mesh -->
                <div class="j-topo-card">
                    <div class="j-topo-visual">
                        <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg" class="j-topo-svg">
                            <!-- All connections -->
                            <line x1="40" y1="25" x2="160" y2="25" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="40" y1="25" x2="40" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="40" y1="25" x2="100" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="40" y1="25" x2="160" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="160" y1="25" x2="40" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="160" y1="25" x2="100" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="160" y1="25" x2="160" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="40" y1="75" x2="100" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <line x1="100" y1="75" x2="160" y2="75" stroke="#c2410c" stroke-width="1.2" opacity="0.6"/>
                            <!-- Devices -->
                            <rect x="27" y="15" width="24" height="14" rx="2" fill="#c2410c" opacity="0.9"/>
                            <rect x="147" y="15" width="24" height="14" rx="2" fill="#c2410c" opacity="0.9"/>
                            <rect x="27" y="65" width="24" height="14" rx="2" fill="#c2410c" opacity="0.9"/>
                            <rect x="87" y="65" width="24" height="14" rx="2" fill="#c2410c" opacity="0.9"/>
                            <rect x="147" y="65" width="24" height="14" rx="2" fill="#c2410c" opacity="0.9"/>
                        </svg>
                    </div>
                    <div class="j-topo-info">
                        <h3><span class="j-topo-badge" style="background:#c2410c;">MESH</span> Topologi Mesh (Jala)</h3>
                        <p>Setiap perangkat terhubung ke semua perangkat lainnya secara langsung. Digunakan untuk jaringan yang membutuhkan keandalan sangat tinggi.</p>
                        <div class="j-topo-pros-cons">
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Keandalan sangat tinggi</div>
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Tidak ada single point of failure</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Biaya instalasi sangat mahal</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Konfigurasi sangat kompleks</div>
                        </div>
                    </div>
                </div>

                <!-- Tree -->
                <div class="j-topo-card" style="grid-column: span 2;">
                    <div class="j-topo-visual" style="height:90px;">
                        <svg viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg" class="j-topo-svg" style="height:80px;">
                            <!-- Root -->
                            <rect x="138" y="5" width="24" height="14" rx="2" fill="#d97706" opacity="0.9"/>
                            <!-- Level 2 -->
                            <line x1="150" y1="19" x2="90" y2="35" stroke="#94a3b8" stroke-width="1.5"/>
                            <line x1="150" y1="19" x2="210" y2="35" stroke="#94a3b8" stroke-width="1.5"/>
                            <rect x="78" y="35" width="24" height="14" rx="2" fill="#f59e0b" opacity="0.9"/>
                            <rect x="198" y="35" width="24" height="14" rx="2" fill="#f59e0b" opacity="0.9"/>
                            <!-- Level 3 Left -->
                            <line x1="90" y1="49" x2="50" y2="62" stroke="#94a3b8" stroke-width="1.2"/>
                            <line x1="90" y1="49" x2="120" y2="62" stroke="#94a3b8" stroke-width="1.2"/>
                            <rect x="36" y="62" width="24" height="14" rx="2" fill="#fbbf24" opacity="0.8"/>
                            <rect x="108" y="62" width="24" height="14" rx="2" fill="#fbbf24" opacity="0.8"/>
                            <!-- Level 3 Right -->
                            <line x1="210" y1="49" x2="178" y2="62" stroke="#94a3b8" stroke-width="1.2"/>
                            <line x1="210" y1="49" x2="240" y2="62" stroke="#94a3b8" stroke-width="1.2"/>
                            <rect x="166" y="62" width="24" height="14" rx="2" fill="#fbbf24" opacity="0.8"/>
                            <rect x="228" y="62" width="24" height="14" rx="2" fill="#fbbf24" opacity="0.8"/>
                        </svg>
                    </div>
                    <div class="j-topo-info">
                        <h3><span class="j-topo-badge" style="background:#d97706;">TREE</span> Topologi Pohon (Tree / Hierarchical)</h3>
                        <p>Kombinasi topologi bus dan bintang yang membentuk struktur hierarki seperti pohon. Terdapat node pusat (root) yang terhubung ke node-node cabang. Banyak digunakan di jaringan perusahaan besar dengan struktur departemen berlapis.</p>
                        <div class="j-topo-pros-cons" style="grid-template-columns:repeat(4,1fr);">
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Mudah dikembangkan</div>
                            <div class="j-topo-pro"><i class="fas fa-check"></i> Identifikasi kesalahan mudah</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Jika node pusat rusak, semua cabang terputus</div>
                            <div class="j-topo-con"><i class="fas fa-times"></i> Butuh banyak kabel</div>
                        </div>
                    </div>
                </div>

            </div><!-- end topologi grid -->

            <!-- ===== SIMULATOR: TOPOLOGI JARINGAN ===== -->
            <div class="topology-playground fade-in-up" style="margin-top: 2rem;">
                <h4 style="margin-bottom:0.5rem;color:#0891b2;display:flex;align-items:center;gap:0.5rem;">
                    <i class="fas fa-project-diagram"></i> Simulator Topologi &amp; Ping Interaktif
                </h4>
                <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:1.25rem;">
                    Pilih tipe topologi, klik kabel untuk memutus/menyambungkannya, lalu klik <strong>Ping (Kirim Data)</strong> untuk menguji aliran data!
                </p>

                <!-- Selector Topologi -->
                <div class="excel-btn-group" style="margin-bottom:1.25rem;">
                    <button class="excel-formula-btn active" id="btn-topo-star" onclick="selectTopology('star')" style="border-color:#0891b2;color:#0891b2;">Topologi Star</button>
                    <button class="excel-formula-btn" id="btn-topo-bus" onclick="selectTopology('bus')" style="border-color:#0891b2;color:#0891b2;">Topologi Bus</button>
                    <button class="excel-formula-btn" id="btn-topo-ring" onclick="selectTopology('ring')" style="border-color:#0891b2;color:#0891b2;">Topologi Ring</button>
                </div>

                <!-- Canvas Simulator -->
                <div class="topology-canvas">
                    <svg class="topo-svg">
                        <!-- Links (Lines) -->
                        <line id="link-1" class="topo-line active" x1="50" y1="125" x2="200" y2="125" />
                        <line id="link-2" class="topo-line active" x1="350" y1="125" x2="200" y2="125" />
                        <line id="link-3" class="topo-line active" x1="200" y1="50" x2="200" y2="125" />
                        
                        <!-- Animated Packet Dot -->
                        <circle id="packetDot" class="packet-dot" cx="0" cy="0" />
                    </svg>

                    <!-- Nodes -->
                    <div class="topo-nodes">
                        <div id="node-center" class="topo-node node-central" style="top: 100px; left: 175px;">
                            <i class="fas fa-server"></i>
                            <span class="topo-node-label" id="node-center-label">Switch</span>
                        </div>
                        <div id="node-pc-a" class="topo-node" style="top: 100px; left: 25px;">
                            <i class="fas fa-laptop"></i>
                            <span class="topo-node-label">PC A (Asal)</span>
                        </div>
                        <div id="node-pc-b" class="topo-node" style="top: 100px; left: 325px;">
                            <i class="fas fa-desktop"></i>
                            <span class="topo-node-label">PC B (Tujuan)</span>
                        </div>
                        <div id="node-pc-c" class="topo-node" style="top: 25px; left: 175px;">
                            <i class="fas fa-print"></i>
                            <span class="topo-node-label">Printer C</span>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <div class="topo-controls">
                    <div>
                        <button class="btn btn-primary btn-sm" onclick="sendPing()" id="btnSendPing" style="background:linear-gradient(135deg,#0891b2,#06b6d4);box-shadow:0 4px 15px rgba(8,145,178,0.4);border:none;">
                            <i class="fas fa-paper-plane"></i> Kirim Data (Ping)
                        </button>
                        <button class="btn btn-outline btn-sm" onclick="repairCables()" style="border:1px solid #0891b2;color:#0891b2;background:transparent;">
                            <i class="fas fa-tools"></i> Hubungkan Semua Kabel
                        </button>
                    </div>
                    <div id="pingStatus" class="topo-status-box">Status: Ready</div>
                </div>
            </div>
        </article>

        <!-- ============================
             TOPIK 4: Perangkat Keras Jaringan
             ============================ -->
        <article class="j-section fade-in-up" id="topik4">
            <div class="j-topik-header">
                <span class="j-badge" style="background:linear-gradient(135deg,rgba(194,65,12,0.12),rgba(249,115,22,0.08));border:1px solid rgba(194,65,12,0.25);color:#c2410c;">
                    <i class="fas fa-microchip"></i> Topik 4
                </span>
                <h2 class="j-title">Perangkat Keras Jaringan</h2>
                <p class="j-intro">Perangkat keras jaringan adalah komponen fisik yang digunakan untuk membangun dan mengoperasikan jaringan komputer. Setiap perangkat memiliki fungsi spesifik dalam sistem jaringan.</p>
            </div>

            <div class="j-hardware-list">

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#1e40af,#3b82f6);">
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>Router</h4>
                            <span class="j-hw-badge">Layer 3 — Network</span>
                        </div>
                        <p>Perangkat yang menghubungkan dua atau lebih jaringan berbeda dan mengarahkan (merutekan) paket data antar jaringan menggunakan tabel routing. Router juga membagi IP address via DHCP.</p>
                        <div class="j-hw-contoh">Contoh: TP-Link Archer, Cisco Router, modem router dari ISP</div>
                    </div>
                </div>

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#059669,#10b981);">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>Switch (Manageable &amp; Unmanageable)</h4>
                            <span class="j-hw-badge">Layer 2 — Data Link</span>
                        </div>
                        <p>Perangkat yang menghubungkan banyak perangkat dalam satu jaringan LAN. Switch lebih cerdas dari hub karena mengirim data hanya ke perangkat tujuan berdasarkan MAC Address, bukan ke semua perangkat.</p>
                        <div class="j-hw-contoh">Contoh: D-Link Switch, Cisco Catalyst, TP-Link TL-SG108</div>
                    </div>
                </div>

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#7c3aed,#a78bfa);">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>Access Point (AP)</h4>
                            <span class="j-hw-badge">Layer 2 — Wireless</span>
                        </div>
                        <p>Perangkat yang memungkinkan perangkat nirkabel (laptop, HP) terhubung ke jaringan kabel melalui sinyal Wi-Fi. AP bertindak sebagai jembatan antara jaringan kabel dan perangkat wireless.</p>
                        <div class="j-hw-contoh">Contoh: Ubiquiti UniFi, TP-Link EAP, Cisco Aironet</div>
                    </div>
                </div>

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#c2410c,#f97316);">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>Hub</h4>
                            <span class="j-hw-badge">Layer 1 — Physical</span>
                        </div>
                        <p>Perangkat paling sederhana untuk menghubungkan perangkat dalam jaringan. Hub mengirim data ke semua perangkat yang terhubung (broadcast), tidak cerdas. Sudah banyak digantikan oleh switch.</p>
                        <div class="j-hw-contoh">Contoh: Hub 8-port, Hub 16-port (sudah jarang digunakan)</div>
                    </div>
                </div>

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>NIC (Network Interface Card)</h4>
                            <span class="j-hw-badge">Adapter Jaringan</span>
                        </div>
                        <p>Kartu jaringan yang dipasang di dalam komputer untuk menghubungkannya ke jaringan. Setiap NIC memiliki alamat MAC Address unik yang digunakan sebagai identitas perangkat di jaringan lokal.</p>
                        <div class="j-hw-contoh">Contoh: LAN Card PCI-E, USB WiFi Adapter, kartu LAN onboard</div>
                    </div>
                </div>

                <div class="j-hw-card">
                    <div class="j-hw-icon" style="background:linear-gradient(135deg,#d97706,#fbbf24);">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <div class="j-hw-info">
                        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.35rem;">
                            <h4>Modem</h4>
                            <span class="j-hw-badge">Modulator-Demodulator</span>
                        </div>
                        <p>Perangkat yang mengubah sinyal digital (data komputer) menjadi sinyal analog (untuk kabel telepon/TV) dan sebaliknya. Modem diperlukan untuk koneksi internet dari penyedia layanan (ISP).</p>
                        <div class="j-hw-contoh">Contoh: Modem ADSL, Modem Kabel, Modem 4G/5G</div>
                    </div>
                </div>

            </div>

            <!-- Kabel Jaringan -->
            <h3 class="j-sub-heading"><i class="fas fa-ethernet"></i> Jenis Kabel Jaringan</h3>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;">
                <div class="j-kabel-card" style="--jkb-color:#2563eb;">
                    <div class="j-kabel-icon"><i class="fas fa-long-arrow-alt-right"></i></div>
                    <h4>Kabel UTP</h4>
                    <p><em>Unshielded Twisted Pair</em> — Kabel jaringan paling umum, terdiri dari 4 pasang kawat tembaga berpilin. Standar Cat5e, Cat6, Cat6a. Kecepatan hingga 10 Gbps.</p>
                </div>
                <div class="j-kabel-card" style="--jkb-color:#7c3aed;">
                    <div class="j-kabel-icon"><i class="fas fa-circle-notch"></i></div>
                    <h4>Kabel Koaksial</h4>
                    <p><em>Coaxial Cable</em> — Kabel dengan lapisan pelindung tembaga di sekitar inti. Digunakan untuk jaringan lama (topologi bus) dan koneksi TV kabel. Lebih tebal dari UTP.</p>
                </div>
                <div class="j-kabel-card" style="--jkb-color:#059669;">
                    <div class="j-kabel-icon"><i class="fas fa-bolt"></i></div>
                    <h4>Kabel Fiber Optik</h4>
                    <p><em>Fiber Optic</em> — Menggunakan serat kaca/plastik untuk mengirim data berupa cahaya. Kecepatan sangat tinggi (hingga Tbps), tidak terpengaruh interferensi elektromagnetik. Mahal tapi handal.</p>
                </div>
            </div>
        </article>

        <!-- ============================
             TOPIK 5: Protokol & Internet
             ============================ -->
        <article class="j-section fade-in-up" id="topik5">
            <div class="j-topik-header">
                <span class="j-badge" style="background:linear-gradient(135deg,rgba(37,99,235,0.12),rgba(99,102,241,0.08));border:1px solid rgba(37,99,235,0.25);color:var(--primary-600);">
                    <i class="fas fa-globe"></i> Topik 5
                </span>
                <h2 class="j-title">Protokol Jaringan &amp; Cara Kerja Internet</h2>
                <p class="j-intro">Protokol adalah sekumpulan aturan standar yang mengatur bagaimana data dikirim, diterima, dan diinterpretasikan dalam jaringan komputer. Tanpa protokol, perangkat yang berbeda tidak akan bisa berkomunikasi.</p>
            </div>

            <!-- TCP/IP -->
            <div class="j-info-card" style="--jic-color:#2563eb;--jic-bg:linear-gradient(135deg,rgba(37,99,235,0.07),rgba(99,102,241,0.04));">
                <div class="j-ic-icon" style="background:linear-gradient(135deg,#dbeafe,#c7d2fe);color:#1d4ed8;font-size:1.4rem;">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div>
                    <h4>TCP/IP — Protokol Utama Internet</h4>
                    <p><strong>TCP/IP</strong> (Transmission Control Protocol / Internet Protocol) adalah fondasi dari seluruh komunikasi internet. TCP memastikan data terkirim secara lengkap dan berurutan, sedangkan IP mengurus pengalamatan dan routing data.</p>
                </div>
            </div>

            <!-- Model OSI -->
            <h3 class="j-sub-heading"><i class="fas fa-layer-group"></i> Model OSI — 7 Lapisan Jaringan</h3>
            <p style="color:var(--text-secondary);font-size:0.9rem;line-height:1.7;margin-bottom:1.25rem;">Model OSI (Open Systems Interconnection) adalah kerangka konseptual yang menjelaskan bagaimana data bergerak dari satu aplikasi ke aplikasi lainnya melalui jaringan. Terdiri dari 7 lapisan (layer).</p>
            <div class="j-osi-layers">
                <div class="j-osi-layer" style="--osi-color:#dc2626;--osi-num:7;">
                    <div class="j-osi-num">7</div>
                    <div class="j-osi-name">Application</div>
                    <div class="j-osi-desc">Antarmuka dengan aplikasi pengguna. Protokol: HTTP, HTTPS, FTP, SMTP, DNS</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#d97706;--osi-num:6;">
                    <div class="j-osi-num">6</div>
                    <div class="j-osi-name">Presentation</div>
                    <div class="j-osi-desc">Enkripsi, kompresi, format data. Protokol: SSL/TLS, JPEG, MPEG</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#d97706;--osi-num:5;">
                    <div class="j-osi-num">5</div>
                    <div class="j-osi-name">Session</div>
                    <div class="j-osi-desc">Mengelola sesi komunikasi. Protokol: NetBIOS, RPC, SMB</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#059669;--osi-num:4;">
                    <div class="j-osi-num">4</div>
                    <div class="j-osi-name">Transport</div>
                    <div class="j-osi-desc">Segmentasi data, keandalan transfer. Protokol: TCP, UDP</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#2563eb;--osi-num:3;">
                    <div class="j-osi-num">3</div>
                    <div class="j-osi-name">Network</div>
                    <div class="j-osi-desc">Pengalamatan IP, routing antar jaringan. Protokol: IP, ICMP, OSPF</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#7c3aed;--osi-num:2;">
                    <div class="j-osi-num">2</div>
                    <div class="j-osi-name">Data Link</div>
                    <div class="j-osi-desc">Pengalamatan MAC, deteksi error. Protokol: Ethernet, Wi-Fi (802.11)</div>
                </div>
                <div class="j-osi-layer" style="--osi-color:#0891b2;--osi-num:1;">
                    <div class="j-osi-num">1</div>
                    <div class="j-osi-name">Physical</div>
                    <div class="j-osi-desc">Media fisik transmisi: kabel, sinyal listrik, sinyal cahaya, gelombang radio</div>
                </div>
            </div>

            <!-- Protokol Umum -->
            <h3 class="j-sub-heading"><i class="fas fa-list-alt"></i> Protokol-Protokol Jaringan yang Sering Digunakan</h3>
            <div class="j-protokol-grid">
                <div class="j-proto-card" style="--jp-color:#2563eb;">
                    <div class="j-proto-name">HTTP / HTTPS</div>
                    <div class="j-proto-port">Port 80 / 443</div>
                    <p>HyperText Transfer Protocol — Digunakan browser untuk mengakses halaman web. HTTPS adalah versi aman dengan enkripsi SSL/TLS.</p>
                </div>
                <div class="j-proto-card" style="--jp-color:#059669;">
                    <div class="j-proto-name">FTP</div>
                    <div class="j-proto-port">Port 21</div>
                    <p>File Transfer Protocol — Untuk mengirim dan mengunduh file antara client dan server FTP. Digunakan untuk mengelola file di web hosting.</p>
                </div>
                <div class="j-proto-card" style="--jp-color:#c2410c;">
                    <div class="j-proto-name">SMTP / POP3 / IMAP</div>
                    <div class="j-proto-port">Port 25 / 110 / 143</div>
                    <p>Protokol email: SMTP untuk mengirim email, POP3 untuk mengunduh email, IMAP untuk akses email dari beberapa perangkat sekaligus.</p>
                </div>
                <div class="j-proto-card" style="--jp-color:#7c3aed;">
                    <div class="j-proto-name">DNS</div>
                    <div class="j-proto-port">Port 53</div>
                    <p>Domain Name System — Menerjemahkan nama domain (google.com) menjadi alamat IP (142.250.4.139) agar komputer dapat menemukannya.</p>
                </div>
                <div class="j-proto-card" style="--jp-color:#0891b2;">
                    <div class="j-proto-name">DHCP</div>
                    <div class="j-proto-port">Port 67/68</div>
                    <p>Dynamic Host Configuration Protocol — Memberikan alamat IP secara otomatis kepada perangkat yang terhubung ke jaringan, sehingga tidak perlu konfigurasi manual.</p>
                </div>
                <div class="j-proto-card" style="--jp-color:#d97706;">
                    <div class="j-proto-name">SSH</div>
                    <div class="j-proto-port">Port 22</div>
                    <p>Secure Shell — Protokol untuk mengakses dan mengelola server dari jarak jauh secara aman dengan enkripsi. Pengganti TELNET yang tidak terenkripsi.</p>
                </div>
            </div>

            <!-- IP Address -->
            <h3 class="j-sub-heading"><i class="fas fa-hashtag"></i> IP Address — Alamat Identitas Perangkat</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                <div class="j-ipcard" style="--jipc-color:#2563eb;">
                    <div class="j-ipcard-header">IPv4</div>
                    <div class="j-ip-visual">192.168.<span>1</span>.100</div>
                    <ul class="j-ip-facts">
                        <li><i class="fas fa-info-circle"></i> Format: 4 oktet desimal dipisah titik</li>
                        <li><i class="fas fa-info-circle"></i> Panjang: 32-bit</li>
                        <li><i class="fas fa-info-circle"></i> Total alamat: ±4.3 miliar</li>
                        <li><i class="fas fa-info-circle"></i> Contoh: 192.168.1.1, 10.0.0.1</li>
                    </ul>
                </div>
                <div class="j-ipcard" style="--jipc-color:#7c3aed;">
                    <div class="j-ipcard-header">IPv6</div>
                    <div class="j-ip-visual" style="font-size:0.9rem;">2001:0db8:85a3::8a2e</div>
                    <ul class="j-ip-facts">
                        <li><i class="fas fa-info-circle"></i> Format: 8 kelompok heksadesimal</li>
                        <li><i class="fas fa-info-circle"></i> Panjang: 128-bit</li>
                        <li><i class="fas fa-info-circle"></i> Total alamat: 3.4 × 10³⁸ alamat</li>
                        <li><i class="fas fa-info-circle"></i> Solusi keterbatasan IPv4</li>
                    </ul>
                </div>
            </div>

            <!-- Cara Kerja Internet -->
            <h3 class="j-sub-heading"><i class="fas fa-globe-asia"></i> Bagaimana Internet Bekerja?</h3>
            <div class="j-internet-flow">
                <div class="j-flow-step" style="--jf-color:#2563eb;">
                    <div class="j-flow-icon"><i class="fas fa-keyboard"></i></div>
                    <div class="j-flow-connector"></div>
                    <h4>1. Permintaan Pengguna</h4>
                    <p>Kamu mengetik <em>www.google.com</em> di browser lalu menekan Enter.</p>
                </div>
                <div class="j-flow-step" style="--jf-color:#7c3aed;">
                    <div class="j-flow-icon"><i class="fas fa-search"></i></div>
                    <div class="j-flow-connector"></div>
                    <h4>2. DNS Lookup</h4>
                    <p>Browser menghubungi server DNS untuk menerjemahkan "google.com" menjadi alamat IP server Google.</p>
                </div>
                <div class="j-flow-step" style="--jf-color:#059669;">
                    <div class="j-flow-icon"><i class="fas fa-route"></i></div>
                    <div class="j-flow-connector"></div>
                    <h4>3. Routing Data</h4>
                    <p>Paket data dikirim melalui router ISP, melewati berbagai jaringan dan router hingga sampai ke server Google.</p>
                </div>
                <div class="j-flow-step" style="--jf-color:#c2410c;">
                    <div class="j-flow-icon"><i class="fas fa-server"></i></div>
                    <div class="j-flow-connector"></div>
                    <h4>4. Server Merespons</h4>
                    <p>Server Google menerima permintaan, memproses, dan mengirimkan data halaman web (HTML, CSS, JS) kembali ke komputer kamu.</p>
                </div>
                <div class="j-flow-step" style="--jf-color:#0891b2;">
                    <div class="j-flow-icon"><i class="fas fa-browser"></i></div>
                    <div class="j-flow-connector last"></div>
                    <h4>5. Browser Render</h4>
                    <p>Browser menerima data dan merender (menampilkan) halaman web Google yang sudah jadi di layar kamu.</p>
                </div>
            </div>

            <!-- Rangkuman Final -->
            <div class="j-rangkuman">
                <div class="j-rangkuman-header">
                    <i class="fas fa-clipboard-check"></i> Rangkuman — Modul 3: Jaringan Komputer &amp; Internet
                </div>
                <div class="j-rangkuman-body">
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <strong>Jaringan komputer</strong> adalah sekumpulan perangkat yang saling terhubung untuk berbagi data dan sumber daya.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Jenis jaringan berdasarkan jangkauan:</strong> PAN → LAN → MAN → WAN (Internet).</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Topologi jaringan</strong>: Bus, Star (paling umum), Ring, Mesh, Tree — masing-masing punya kelebihan dan kekurangan.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Perangkat keras utama:</strong> Router (antar jaringan), Switch (dalam jaringan), Access Point (wireless), Modem (koneksi ISP).</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Model OSI</strong> terdiri dari 7 lapisan: Physical, Data Link, Network, Transport, Session, Presentation, Application.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>TCP/IP</strong> adalah protokol utama internet. Protokol lain: HTTP, FTP, DNS, DHCP, SMTP, SSH.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>IPv4</strong> (32-bit, 4 oktet) sedang beralih ke <strong>IPv6</strong> (128-bit) karena keterbatasan alamat IP.</li>
                    </ul>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="j-modul-nav">
                <a href="perangkat-teknologi.php" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Modul 2: Perangkat Teknologi</a>
                <a href="../index.php" class="btn btn-primary" style="background:linear-gradient(135deg,#0891b2,#06b6d4);box-shadow:0 4px 15px rgba(8,145,178,0.4);">
                    <i class="fas fa-home"></i> Kembali ke Beranda
                </a>
            </div>

        </article>

    </main>
</div>

<!-- ===== STYLES ===== -->
<style>
/* Layout */
.j-layout { align-items: start; }

/* Sidebar Links */
.j-sidebar-link {
    display: flex; align-items: center; gap: 0.75rem;
    padding: 0.65rem 0.75rem; border-radius: 10px;
    color: var(--text-secondary); font-size: 0.875rem; font-weight: 500;
    transition: all 0.2s; margin-bottom: 0.25rem; text-decoration: none;
}
.j-sidebar-link:hover, .j-sidebar-link.j-active {
    background: linear-gradient(135deg,rgba(8,145,178,0.1),rgba(6,182,212,0.06));
    color: #0891b2;
}
.j-link-num {
    width: 26px; height: 26px; background: var(--bg-secondary);
    border-radius: 6px; display: flex; align-items: center; justify-content: center;
    font-size: 0.7rem; font-weight: 700; color: var(--text-muted); flex-shrink: 0; transition: all 0.2s;
}
.j-sidebar-link.j-active .j-link-num { background: linear-gradient(135deg,#0891b2,#06b6d4); color: white; }

/* Progress Modul */
.j-modul-progress { display: flex; flex-direction: column; gap: 0.625rem; }
.j-mp-item {
    display: flex; align-items: center; gap: 0.75rem;
    font-size: 0.82rem; color: rgba(255,255,255,0.75); text-decoration: none;
    transition: all 0.2s;
}
.j-mp-item:hover { color: white; }
.j-mp-icon {
    width: 22px; height: 22px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center; font-size: 0.65rem;
    flex-shrink: 0;
}
.j-done .j-mp-icon { background: rgba(34,197,94,0.3); color: #86efac; }
.j-current .j-mp-icon { background: rgba(255,255,255,0.25); color: white; font-size: 0.4rem; }
.j-done span { text-decoration: line-through; opacity: 0.6; }
.j-current span { font-weight: 700; color: white; }

/* Topik Section */
.j-section {
    background: var(--card-bg); border: 1px solid var(--border-color);
    border-radius: 24px; padding: 2.5rem; margin-bottom: 2rem;
    box-shadow: var(--card-shadow);
}
.j-topik-header { margin-bottom: 1.75rem; }
.j-badge {
    display: inline-flex; align-items: center; gap: 0.4rem;
    padding: 0.3rem 0.9rem; border-radius: 999px;
    font-size: 0.75rem; font-weight: 700; letter-spacing: 0.05em; margin-bottom: 0.875rem;
}
.j-title {
    font-size: clamp(1.4rem,3vw,1.9rem); font-weight: 800;
    letter-spacing: -0.02em; margin-bottom: 0.75rem;
}
.j-intro {
    color: var(--text-secondary); font-size: 1rem; line-height: 1.8;
    border-left: 3px solid #0891b2; padding-left: 1rem;
}
.j-sub-heading {
    font-size: 1.1rem; font-weight: 700; margin: 2rem 0 1.25rem;
    display: flex; align-items: center; gap: 0.5rem;
}
.j-sub-heading i { color: #0891b2; }

/* Info Card */
.j-info-card {
    display: flex; gap: 1rem;
    background: var(--jic-bg, linear-gradient(135deg,rgba(8,145,178,0.07),rgba(6,182,212,0.04)));
    border: 1px solid rgba(8,145,178,0.2); border-radius: 16px;
    padding: 1.25rem 1.5rem; margin-bottom: 1.75rem; align-items: flex-start;
}
.j-ic-icon {
    width: 44px; height: 44px; border-radius: 12px;
    display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;
}
.j-info-card h4 { font-size: 1rem; margin-bottom: 0.4rem; }
.j-info-card p { color: var(--text-secondary); font-size: 0.9rem; line-height: 1.7; }

/* Komponen Grid */
.j-komponen-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 1rem; margin-bottom: 1.75rem; }
.j-komp-card {
    padding: 1.25rem; border: 1px solid var(--border-color);
    border-top: 3px solid var(--jk-color, #0891b2);
    border-radius: 14px; background: var(--bg-secondary); transition: all 0.25s;
}
.j-komp-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
.j-komp-icon { font-size: 1.4rem; color: var(--jk-color, #0891b2); margin-bottom: 0.625rem; }
.j-komp-card h4 { font-size: 0.9rem; margin-bottom: 0.4rem; }
.j-komp-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* Compare Cards */
.j-compare-card { border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; }
.j-compare-head {
    padding: 0.75rem 1.25rem; font-weight: 700; font-size: 0.9rem;
    display: flex; align-items: center; gap: 0.5rem; border-bottom: 1px solid var(--border-color);
}
.j-compare-body { padding: 1rem 1.25rem; display: flex; flex-direction: column; gap: 0.5rem; }
.j-comp-item { display: flex; align-items: flex-start; gap: 0.625rem; font-size: 0.85rem; line-height: 1.5; }
.j-comp-item.j-pro { color: #059669; }
.j-comp-item.j-con { color: #dc2626; }
.j-comp-item i { flex-shrink: 0; margin-top: 0.1rem; }

/* Jenis Grid */
.j-jenis-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.25rem; margin-bottom: 1.75rem; }
.j-jenis-card {
    border: 1px solid var(--border-color); border-radius: 20px;
    overflow: hidden; background: var(--card-bg); transition: all 0.25s;
}
.j-jenis-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.1); }
.j-jenis-top {
    background: var(--jj-grad, linear-gradient(135deg,#0891b2,#06b6d4));
    padding: 1.25rem; display: flex; align-items: center; justify-content: space-between;
}
.j-jenis-abbr {
    font-size: 2rem; font-weight: 900; color: white; letter-spacing: -0.02em;
    text-shadow: 0 2px 8px rgba(0,0,0,0.2);
}
.j-jenis-icon { font-size: 1.5rem; color: rgba(255,255,255,0.7); }
.j-jenis-card > h3, .j-jenis-card > p, .j-jenis-card > div { padding: 0 1.25rem; }
.j-jenis-card > h3 { font-size: 0.95rem; padding-top: 1rem; margin-bottom: 0.35rem; }
.j-jenis-range { font-size: 0.8rem; color: var(--jj-color, #0891b2); font-weight: 600; margin-bottom: 0.5rem; }
.j-jenis-card > p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 0.75rem; }
.j-jenis-contoh { padding: 0 1.25rem; margin-bottom: 0.75rem; }
.j-jenis-contoh strong { font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; }
.j-jenis-contoh ul { margin-top: 0.35rem; display: flex; flex-direction: column; gap: 0.25rem; }
.j-jenis-contoh li { font-size: 0.82rem; color: var(--text-secondary); display: flex; align-items: center; gap: 0.4rem; }
.j-jenis-contoh li i { color: var(--jj-color, #0891b2); font-size: 0.7rem; }
.j-jenis-speed {
    padding: 0.625rem 1.25rem; background: var(--bg-secondary); border-top: 1px solid var(--border-color);
    font-size: 0.78rem; color: var(--text-muted); font-weight: 600; display: flex; align-items: center; gap: 0.4rem;
}

/* Mini Cards */
.j-mini-card {
    padding: 1.25rem; border: 1px solid var(--border-color);
    border-radius: 14px; background: var(--bg-secondary); transition: all 0.2s;
}
.j-mini-card:hover { border-color: var(--jm-color); transform: translateY(-2px); }
.j-mini-icon { font-size: 1.5rem; color: var(--jm-color, #0891b2); margin-bottom: 0.625rem; }
.j-mini-card h4 { font-size: 0.95rem; margin-bottom: 0.35rem; }
.j-mini-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* Topologi Grid */
.j-topologi-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 1.25rem; }
.j-topo-card {
    border: 1px solid var(--border-color); border-radius: 18px; overflow: hidden;
    background: var(--card-bg); transition: all 0.25s;
}
.j-topo-card:hover { transform: translateY(-3px); box-shadow: var(--card-shadow-hover); }
.j-topo-visual { background: var(--bg-secondary); padding: 1rem 1.5rem; height: 100px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid var(--border-color); }
.j-topo-svg { width: 100%; height: auto; max-height: 90px; }
.j-topo-info { padding: 1.25rem; }
.j-topo-info h3 { font-size: 0.95rem; margin-bottom: 0.625rem; display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; }
.j-topo-info > p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 0.875rem; }
.j-topo-badge {
    color: white; padding: 0.2rem 0.6rem; border-radius: 6px;
    font-size: 0.72rem; font-weight: 800; letter-spacing: 0.05em;
}
.j-topo-pros-cons { display: grid; grid-template-columns: 1fr 1fr; gap: 0.35rem; }
.j-topo-pro, .j-topo-con {
    display: flex; align-items: flex-start; gap: 0.4rem;
    font-size: 0.78rem; line-height: 1.5;
}
.j-topo-pro { color: #059669; }
.j-topo-con { color: #dc2626; }
.j-topo-pro i, .j-topo-con i { flex-shrink: 0; margin-top: 0.15rem; font-size: 0.7rem; }

/* Hardware List */
.j-hardware-list { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.75rem; }
.j-hw-card {
    display: flex; gap: 1.25rem; align-items: flex-start;
    padding: 1.25rem; border: 1px solid var(--border-color); border-radius: 16px;
    background: var(--bg-secondary); transition: all 0.25s;
}
.j-hw-card:hover { border-color: rgba(8,145,178,0.3); transform: translateX(4px); }
.j-hw-icon {
    width: 52px; height: 52px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 1.3rem; flex-shrink: 0;
}
.j-hw-info h4 { font-size: 1rem; margin-bottom: 0.25rem; }
.j-hw-badge {
    font-size: 0.72rem; background: var(--bg-tertiary); border: 1px solid var(--border-color);
    padding: 0.15rem 0.6rem; border-radius: 999px; color: var(--text-muted); font-weight: 600;
}
.j-hw-info > p { font-size: 0.875rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 0.5rem; }
.j-hw-contoh { font-size: 0.78rem; color: var(--text-muted); font-style: italic; }

/* Kabel Cards */
.j-kabel-card {
    padding: 1.25rem; border: 1px solid var(--border-color); border-radius: 14px;
    background: var(--bg-secondary); border-left: 4px solid var(--jkb-color, #0891b2); transition: all 0.2s;
}
.j-kabel-card:hover { transform: translateY(-2px); }
.j-kabel-icon { font-size: 1.3rem; color: var(--jkb-color, #0891b2); margin-bottom: 0.625rem; }
.j-kabel-card h4 { font-size: 0.9rem; margin-bottom: 0.35rem; }
.j-kabel-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* OSI Layers */
.j-osi-layers { display: flex; flex-direction: column; gap: 0; border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; margin-bottom: 1.75rem; }
.j-osi-layer {
    display: grid; grid-template-columns: 40px 140px 1fr;
    align-items: center; gap: 1rem; padding: 0.75rem 1.25rem;
    border-bottom: 1px solid var(--border-color); transition: all 0.2s;
}
.j-osi-layer:last-child { border-bottom: none; }
.j-osi-layer:hover { background: var(--bg-secondary); }
.j-osi-num {
    width: 36px; height: 36px; background: var(--osi-color, #0891b2);
    color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 0.9rem; flex-shrink: 0;
}
.j-osi-name { font-weight: 700; font-size: 0.9rem; color: var(--osi-color, #0891b2); }
.j-osi-desc { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5; }

/* Protokol Grid */
.j-protokol-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem; margin-bottom: 1.75rem; }
.j-proto-card {
    padding: 1.25rem; border: 1px solid var(--border-color);
    border-top: 4px solid var(--jp-color, #0891b2);
    border-radius: 16px; background: var(--bg-secondary); transition: all 0.25s;
}
.j-proto-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
.j-proto-name { font-size: 1rem; font-weight: 800; color: var(--jp-color, #0891b2); margin-bottom: 0.25rem; }
.j-proto-port {
    display: inline-flex; background: var(--bg-tertiary); border: 1px solid var(--border-color);
    padding: 0.1rem 0.5rem; border-radius: 999px; font-size: 0.72rem;
    color: var(--text-muted); font-weight: 600; margin-bottom: 0.625rem;
}
.j-proto-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* IP Cards */
.j-ipcard {
    border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; transition: all 0.2s;
}
.j-ipcard:hover { transform: translateY(-2px); }
.j-ipcard-header {
    background: var(--jipc-color, #2563eb); color: white;
    padding: 0.625rem 1.25rem; font-weight: 700; font-size: 0.875rem;
}
.j-ip-visual {
    font-family: 'Courier New', monospace; font-size: 1.15rem; font-weight: 700;
    padding: 0.875rem 1.25rem; background: var(--bg-secondary); color: var(--jipc-color, #2563eb);
    border-bottom: 1px solid var(--border-color);
}
.j-ip-visual span { background: rgba(37,99,235,0.1); padding: 0.1rem 0.2rem; border-radius: 4px; }
.j-ip-facts { padding: 0.75rem 1.25rem; display: flex; flex-direction: column; gap: 0.4rem; }
.j-ip-facts li { font-size: 0.82rem; color: var(--text-secondary); display: flex; align-items: center; gap: 0.5rem; }
.j-ip-facts li i { color: var(--jipc-color, #2563eb); flex-shrink: 0; }

/* Internet Flow */
.j-internet-flow { display: grid; grid-template-columns: repeat(5,1fr); gap: 0; margin-bottom: 1.75rem; }
.j-flow-step { position: relative; text-align: center; padding: 0 0.5rem; }
.j-flow-icon {
    width: 56px; height: 56px; border-radius: 50%;
    background: var(--jf-color, #0891b2); color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem; margin: 0 auto 0.625rem;
    box-shadow: 0 6px 20px rgba(8,145,178,0.3);
}
.j-flow-connector {
    position: absolute; top: 28px; right: -20px; width: 40px; height: 2px;
    background: linear-gradient(90deg, var(--jf-color, #0891b2), #94a3b8); z-index: 0;
}
.j-flow-connector.last { display: none; }
.j-flow-step h4 { font-size: 0.82rem; margin-bottom: 0.35rem; }
.j-flow-step p { font-size: 0.75rem; color: var(--text-secondary); line-height: 1.5; }

/* Rangkuman */
.j-rangkuman { border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; margin-bottom: 2rem; }
.j-rangkuman-header {
    background: linear-gradient(135deg,#0c4a6e,#0891b2); color: white;
    padding: 0.875rem 1.5rem; font-weight: 700; font-size: 0.95rem;
    display: flex; align-items: center; gap: 0.5rem;
}
.j-rangkuman-body { padding: 1.25rem 1.5rem; background: var(--bg-secondary); }
.j-rangkuman-body ul { display: flex; flex-direction: column; gap: 0.65rem; }
.j-rangkuman-body li {
    display: flex; align-items: flex-start; gap: 0.75rem;
    font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;
}
.j-rangkuman-body li i { color: #059669; margin-top: 0.2rem; flex-shrink: 0; }

/* Navigasi */
.j-modul-nav { display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap; padding-top: 1.5rem; border-top: 1px solid var(--border-color); }

/* Responsive */
@media (max-width: 1024px) {
    .j-layout { grid-template-columns: 1fr !important; }
    .j-komponen-grid { grid-template-columns: repeat(2,1fr); }
    .j-jenis-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .j-section { padding: 1.5rem; }
    .j-komponen-grid, .j-protokol-grid { grid-template-columns: 1fr; }
    .j-topologi-grid { grid-template-columns: 1fr; }
    .j-internet-flow { grid-template-columns: 1fr; gap: 1rem; }
    .j-flow-connector { display: none; }
    .j-osi-layer { grid-template-columns: 36px 1fr; }
    .j-osi-name { display: none; }
    .j-ip-visual { font-size: 0.9rem; }
}
</style>

<script>
// Reading progress
window.addEventListener('scroll', () => {
    const el = document.documentElement;
    const pct = (el.scrollTop / (el.scrollHeight - el.clientHeight)) * 100;
    const bar = document.getElementById('readingProgress');
    if (bar) bar.style.width = pct + '%';
});

// Intersection observer for sidebar
const sections = document.querySelectorAll('[id^="topik"]');
const sidebarLinks = document.querySelectorAll('.j-sidebar-link');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            sidebarLinks.forEach(l => {
                l.classList.remove('j-active');
                l.querySelector('.j-link-num').style.background = '';
                l.querySelector('.j-link-num').style.color = '';
            });
            const active = document.querySelector(`.j-sidebar-link[href="#${entry.target.id}"]`);
            if (active) {
                active.classList.add('j-active');
            }
        }
    });
}, { threshold: 0.3 });
sections.forEach(s => observer.observe(s));

// ============================================================
// JS FOR NETWORK TOPOLOGY SIMULATOR
// ============================================================
let activeTopology = 'star';
let cableStates = {
    'link-1': true, // PC A to Central
    'link-2': true, // Central to PC B
    'link-3': true  // Central to Printer C
};

function selectTopology(type) {
    activeTopology = type;
    
    // Reset buttons
    document.getElementById('btn-topo-star').classList.remove('active');
    document.getElementById('btn-topo-bus').classList.remove('active');
    document.getElementById('btn-topo-ring').classList.remove('active');
    
    document.getElementById('btn-topo-' + type).classList.add('active');
    
    // Reset states
    repairCables();
    
    // Get Elements
    const l1 = document.getElementById('link-1');
    const l2 = document.getElementById('link-2');
    const l3 = document.getElementById('link-3');
    
    const nodeCenter = document.getElementById('node-center');
    const labelCenter = document.getElementById('node-center-label');
    
    const nodeA = document.getElementById('node-pc-a');
    const nodeB = document.getElementById('node-pc-b');
    const nodeC = document.getElementById('node-pc-c');
    
    if (type === 'star') {
        nodeCenter.style.display = 'flex';
        nodeCenter.style.top = '100px';
        nodeCenter.style.left = '175px';
        labelCenter.textContent = 'Switch';
        
        nodeA.style.top = '100px'; nodeA.style.left = '25px';
        nodeB.style.top = '100px'; nodeB.style.left = '325px';
        nodeC.style.top = '25px';  nodeC.style.left = '175px';
        
        l1.setAttribute('x1', '50');  l1.setAttribute('y1', '125'); l1.setAttribute('x2', '200'); l1.setAttribute('y2', '125');
        l2.setAttribute('x1', '350'); l2.setAttribute('y1', '125'); l2.setAttribute('x2', '200'); l2.setAttribute('y2', '125');
        l3.setAttribute('x1', '200'); l3.setAttribute('y1', '50');  l3.setAttribute('x2', '200'); l3.setAttribute('y2', '125');
        
    } else if (type === 'bus') {
        nodeCenter.style.display = 'none';
        
        nodeA.style.top = '25px';  nodeA.style.left = '25px';
        nodeB.style.top = '25px';  nodeB.style.left = '325px';
        nodeC.style.top = '25px';  nodeC.style.left = '175px';
        
        l1.setAttribute('x1', '50');  l1.setAttribute('y1', '125'); l1.setAttribute('x2', '200'); l1.setAttribute('y2', '125');
        l2.setAttribute('x1', '200'); l2.setAttribute('y1', '125'); l2.setAttribute('x2', '350'); l2.setAttribute('y2', '125');
        l3.setAttribute('x1', '200'); l3.setAttribute('y1', '50');  l3.setAttribute('x2', '200'); l3.setAttribute('y2', '125');
        
    } else if (type === 'ring') {
        nodeCenter.style.display = 'none';
        
        nodeA.style.top = '100px'; nodeA.style.left = '25px';
        nodeB.style.top = '100px'; nodeB.style.left = '325px';
        nodeC.style.top = '25px';  nodeC.style.left = '175px';
        
        l1.setAttribute('x1', '50');  l1.setAttribute('y1', '125'); l1.setAttribute('x2', '200'); l1.setAttribute('y2', '50');
        l2.setAttribute('x1', '200'); l2.setAttribute('y1', '50');  l2.setAttribute('x2', '350'); l2.setAttribute('y2', '125');
        l3.setAttribute('x1', '350'); l3.setAttribute('y1', '125'); l3.setAttribute('x2', '50');  l3.setAttribute('y2', '125');
    }
}

// Click on cable to toggle broken state
document.addEventListener('DOMContentLoaded', () => {
    const lines = ['link-1', 'link-2', 'link-3'];
    lines.forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            el.style.cursor = 'pointer';
            el.addEventListener('click', () => {
                toggleCable(id);
            });
        }
    });
    
    if (document.getElementById('link-1')) {
        selectTopology('star');
    }
});

function toggleCable(id) {
    const el = document.getElementById(id);
    if (!el) return;
    
    cableStates[id] = !cableStates[id];
    if (cableStates[id]) {
        el.classList.remove('broken');
        el.classList.add('active');
    } else {
        el.classList.remove('active');
        el.classList.add('broken');
    }
    
    updatePingStatus('Ready', '');
}

function repairCables() {
    const lines = ['link-1', 'link-2', 'link-3'];
    lines.forEach(id => {
        cableStates[id] = true;
        const el = document.getElementById(id);
        if (el) {
            el.classList.remove('broken');
            el.classList.add('active');
        }
    });
    updatePingStatus('Ready', '');
}

function updatePingStatus(status, type) {
    const box = document.getElementById('pingStatus');
    box.textContent = "Status: " + status;
    box.className = "topo-status-box " + type;
}

function sendPing() {
    const btn = document.getElementById('btnSendPing');
    const dot = document.getElementById('packetDot');
    
    btn.disabled = true;
    updatePingStatus('Mengirim paket...', '');
    
    let path = [];
    let isSuccess = true;
    
    if (activeTopology === 'star') {
        path = [
            {x: 50, y: 125},
            {x: 200, y: 125},
            {x: 350, y: 125}
        ];
        if (!cableStates['link-1']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 125, y: 125}
            ];
        } else if (!cableStates['link-2']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 200, y: 125},
                {x: 275, y: 125}
            ];
        }
    } else if (activeTopology === 'bus') {
        path = [
            {x: 50, y: 125},
            {x: 200, y: 125},
            {x: 350, y: 125}
        ];
        if (!cableStates['link-1']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 125, y: 125}
            ];
        } else if (!cableStates['link-2']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 200, y: 125},
                {x: 275, y: 125}
            ];
        }
    } else if (activeTopology === 'ring') {
        path = [
            {x: 50, y: 125},
            {x: 200, y: 50},
            {x: 350, y: 125}
        ];
        if (!cableStates['link-1']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 125, y: 87}
            ];
        } else if (!cableStates['link-2']) {
            isSuccess = false;
            path = [
                {x: 50, y: 125},
                {x: 200, y: 50},
                {x: 275, y: 87}
            ];
        }
    }
    
    dot.style.display = 'block';
    animateDot(dot, path, 0, () => {
        btn.disabled = false;
        dot.style.display = 'none';
        
        if (isSuccess) {
            updatePingStatus('Reply dari PC B: Bytes=32 Time=1ms TTL=64', 'success');
        } else {
            updatePingStatus('RTO - Kabel Terputus!', 'fail');
        }
    });
}

function animateDot(dot, path, index, callback) {
    if (index >= path.length) {
        callback();
        return;
    }
    
    const pt = path[index];
    dot.setAttribute('cx', pt.x);
    dot.setAttribute('cy', pt.y);
    
    if (index + 1 < path.length) {
        setTimeout(() => {
            animateDot(dot, path, index + 1, callback);
        }, 350);
    } else {
        callback();
    }
}
</script>

<style>
/* Local transition rules for SVG animations */
.packet-dot {
    transition: cx 0.35s linear, cy 0.35s linear;
}
</style>

<?php include '../includes/footer.php'; ?>
