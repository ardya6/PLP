<?php
$page_title = "Perangkat Teknologi Digital";
include '../includes/header.php';
?>

<!-- ===== PAGE HERO ===== -->
<section style="background:linear-gradient(135deg,#3b0764 0%,#6d28d9 45%,#1e1b4b 100%);padding:3.5rem 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <!-- Orbs dekorasi -->
    <div style="position:absolute;top:-80px;right:-80px;width:350px;height:350px;border-radius:50%;background:radial-gradient(circle,rgba(167,139,250,0.3),transparent);filter:blur(60px);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-50px;left:5%;width:250px;height:250px;border-radius:50%;background:radial-gradient(circle,rgba(99,102,241,0.25),transparent);filter:blur(50px);pointer-events:none;"></div>
    <div class="container" style="position:relative;z-index:1;">
        <a href="../index.php" class="btn btn-sm" style="background:rgba(255,255,255,0.15);color:white;border:1px solid rgba(255,255,255,0.25);margin-bottom:1.5rem;display:inline-flex;">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
            <div style="width:72px;height:72px;background:rgba(255,255,255,0.15);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.25);border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:white;flex-shrink:0;">
                <i class="fas fa-desktop"></i>
            </div>
            <div style="color:white;">
                <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem;">
                    <span style="background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;letter-spacing:0.05em;">MODUL 2</span>
                    <span style="background:rgba(251,146,60,0.2);border:1px solid rgba(251,146,60,0.3);color:#fed7aa;padding:0.2rem 0.75rem;border-radius:999px;font-size:0.75rem;font-weight:600;">🔧 Tingkat Praktis</span>
                </div>
                <h1 style="font-size:clamp(1.6rem,4vw,2.5rem);font-weight:800;line-height:1.2;letter-spacing:-0.02em;margin-bottom:0.5rem;">Perangkat <span style="background:linear-gradient(135deg,#c4b5fd,#f0abfc);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Teknologi Digital</span></h1>
                <p style="color:rgba(255,255,255,0.75);font-size:1rem;">Kuasai Microsoft Word, Excel, dan PowerPoint untuk produktivitas maksimal</p>
            </div>
        </div>
        <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-clock"></i> Estimasi: ~45 menit
            </div>
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-list-ul"></i> 3 Aplikasi Utama
            </div>
            <div style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:12px;padding:0.6rem 1.2rem;display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.85);font-size:0.85rem;">
                <i class="fas fa-tools"></i> Praktis &amp; Aplikatif
            </div>
        </div>
    </div>
</section>

<!-- ===== READING PROGRESS ===== -->
<div style="position:fixed;top:70px;left:0;right:0;height:3px;background:var(--border-color);z-index:999;">
    <div id="readingProgress" style="height:100%;background:linear-gradient(90deg,#7c3aed,#c026d3);width:0%;transition:width 0.1s;"></div>
</div>

<!-- ===== TAB NAVIGATION ===== -->
<div style="background:var(--card-bg);border-bottom:1px solid var(--border-color);position:sticky;top:70px;z-index:100;">
    <div class="container">
        <div class="app-tabs" id="appTabs">
            <button class="app-tab active-tab" onclick="switchTab('word', this)" id="tab-word">
                <span class="tab-icon" style="background:#2b7cd3;color:white;"><i class="fas fa-file-word"></i></span>
                <span class="tab-label">Microsoft Word</span>
            </button>
            <button class="app-tab" onclick="switchTab('excel', this)" id="tab-excel">
                <span class="tab-icon" style="background:#217346;color:white;"><i class="fas fa-file-excel"></i></span>
                <span class="tab-label">Microsoft Excel</span>
            </button>
            <button class="app-tab" onclick="switchTab('ppt', this)" id="tab-ppt">
                <span class="tab-icon" style="background:#d24726;color:white;"><i class="fas fa-file-powerpoint"></i></span>
                <span class="tab-label">PowerPoint</span>
            </button>
        </div>
    </div>
</div>

<!-- ===== MAIN LAYOUT ===== -->
<div class="container" style="padding-top:2.5rem;padding-bottom:4rem;">

    <!-- ==============================
         TAB: MICROSOFT WORD
         ============================== -->
    <div class="tab-content" id="content-word">
        
        <!-- Header -->
        <div class="app-header" style="--app-color:#2b7cd3;--app-bg:linear-gradient(135deg,#e8f0fe,#c7d7f4);">
            <div class="app-logo" style="background:#2b7cd3;">
                <i class="fas fa-file-word"></i>
            </div>
            <div>
                <h2 class="app-title">Microsoft Word</h2>
                <p class="app-subtitle">Aplikasi pengolah kata paling populer di dunia, digunakan untuk membuat, mengedit, dan memformat dokumen teks.</p>
            </div>
        </div>

        <!-- Pengenalan -->
        <div class="section-block fade-in-up" id="word-pengenalan">
            <h3 class="block-title"><i class="fas fa-info-circle" style="color:#2b7cd3;"></i> Apa itu Microsoft Word?</h3>
            <div class="two-col">
                <div>
                    <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:1rem;">
                        <strong>Microsoft Word</strong> adalah aplikasi pengolah kata (<em>word processor</em>) yang dikembangkan oleh Microsoft Corporation. Pertama kali dirilis pada tahun 1983, Word kini menjadi standar industri untuk pembuatan dokumen profesional di seluruh dunia.
                    </p>
                    <p style="color:var(--text-secondary);line-height:1.8;">
                        Word digunakan untuk membuat berbagai jenis dokumen seperti surat, laporan, skripsi, brosur, resume/CV, dan masih banyak lagi. Tersedia dalam versi desktop (Windows & Mac) dan versi online (Microsoft 365).
                    </p>
                </div>
                <div class="kegunaan-list">
                    <h4 style="font-size:0.9rem;font-weight:700;margin-bottom:0.75rem;color:var(--text-primary);">Kegunaan Microsoft Word:</h4>
                    <div class="use-item" style="--use-color:#2b7cd3;">
                        <i class="fas fa-file-alt"></i> Membuat surat resmi dan tidak resmi
                    </div>
                    <div class="use-item" style="--use-color:#2b7cd3;">
                        <i class="fas fa-book"></i> Menyusun laporan dan makalah
                    </div>
                    <div class="use-item" style="--use-color:#2b7cd3;">
                        <i class="fas fa-id-card"></i> Membuat CV / Resume
                    </div>
                    <div class="use-item" style="--use-color:#2b7cd3;">
                        <i class="fas fa-print"></i> Membuat brosur dan flyer
                    </div>
                    <div class="use-item" style="--use-color:#2b7cd3;">
                        <i class="fas fa-graduation-cap"></i> Menyusun karya ilmiah
                    </div>
                </div>
            </div>
        </div>

        <!-- Antarmuka Word -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-desktop" style="color:#2b7cd3;"></i> Mengenal Antarmuka Microsoft Word</h3>
            <div class="interface-diagram">
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-th-large"></i></div>
                    <h4>Title Bar</h4>
                    <p>Menampilkan nama file dokumen yang sedang dibuka dan tombol minimize, maximize, close.</p>
                </div>
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-bars"></i></div>
                    <h4>Ribbon</h4>
                    <p>Kumpulan menu dan alat yang diorganisir dalam tab: Home, Insert, Layout, References, Mailings, Review, View.</p>
                </div>
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-ruler-horizontal"></i></div>
                    <h4>Ruler (Penggaris)</h4>
                    <p>Digunakan untuk mengatur margin, indentasi paragraf, dan tab stop dalam dokumen.</p>
                </div>
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-file"></i></div>
                    <h4>Work Area</h4>
                    <p>Area kerja utama tempat mengetik dan mengedit konten dokumen, ditampilkan sebagai kertas putih.</p>
                </div>
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-info"></i></div>
                    <h4>Status Bar</h4>
                    <p>Menampilkan informasi dokumen: jumlah halaman, jumlah kata, bahasa, dan mode tampilan.</p>
                </div>
                <div class="interface-part" style="--part-color:#2b7cd3;">
                    <div class="part-icon"><i class="fas fa-search-plus"></i></div>
                    <h4>Zoom Control</h4>
                    <p>Mengatur perbesaran tampilan dokumen, dari 10% hingga 500% sesuai kebutuhan.</p>
                </div>
            </div>
        </div>

        <!-- Tab Home Word -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-home" style="color:#2b7cd3;"></i> Tab Home — Fungsi Utama</h3>
            <div class="ribbon-groups">
                <div class="ribbon-group" style="--rg-color:#2b7cd3;">
                    <div class="rg-header">Clipboard</div>
                    <div class="rg-items">
                        <div class="rg-item"><kbd>Ctrl+C</kbd> Copy — Menyalin teks/objek terpilih</div>
                        <div class="rg-item"><kbd>Ctrl+X</kbd> Cut — Memotong teks/objek terpilih</div>
                        <div class="rg-item"><kbd>Ctrl+V</kbd> Paste — Menempelkan hasil copy/cut</div>
                        <div class="rg-item"><kbd>Ctrl+Z</kbd> Undo — Membatalkan aksi terakhir</div>
                    </div>
                </div>
                <div class="ribbon-group" style="--rg-color:#2b7cd3;">
                    <div class="rg-header">Font</div>
                    <div class="rg-items">
                        <div class="rg-item"><kbd>Ctrl+B</kbd> <strong>Bold</strong> — Menebalkan teks</div>
                        <div class="rg-item"><kbd>Ctrl+I</kbd> <em>Italic</em> — Memiringkan teks</div>
                        <div class="rg-item"><kbd>Ctrl+U</kbd> <u>Underline</u> — Menggarisbawahi teks</div>
                        <div class="rg-item">Pilih jenis, ukuran, dan warna font</div>
                    </div>
                </div>
                <div class="ribbon-group" style="--rg-color:#2b7cd3;">
                    <div class="rg-header">Paragraph</div>
                    <div class="rg-items">
                        <div class="rg-item">Align Left, Center, Right, Justify</div>
                        <div class="rg-item">Line Spacing — Jarak antar baris</div>
                        <div class="rg-item">Bullet & Numbering list</div>
                        <div class="rg-item">Indentasi paragraf</div>
                    </div>
                </div>
                <div class="ribbon-group" style="--rg-color:#2b7cd3;">
                    <div class="rg-header">Styles</div>
                    <div class="rg-items">
                        <div class="rg-item">Heading 1, 2, 3 — Judul bertingkat</div>
                        <div class="rg-item">Normal — Teks paragraf biasa</div>
                        <div class="rg-item">Title — Judul utama dokumen</div>
                        <div class="rg-item">Subtitle — Sub judul dokumen</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Langkah Membuat Dokumen -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-list-ol" style="color:#2b7cd3;"></i> Langkah Membuat Dokumen Surat Resmi</h3>
            <div class="steps-timeline">
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">1</div>
                    <div class="tl-body">
                        <h4>Buka Microsoft Word</h4>
                        <p>Klik Start → cari "Word" → pilih "Blank Document" untuk memulai dokumen baru, atau tekan <kbd>Ctrl+N</kbd>.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">2</div>
                    <div class="tl-body">
                        <h4>Atur Halaman (Page Setup)</h4>
                        <p>Buka tab <strong>Layout</strong> → Page Setup → atur ukuran kertas (A4), orientasi (Portrait), dan margin (Normal: 2.5 cm semua sisi).</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">3</div>
                    <div class="tl-body">
                        <h4>Pilih Font yang Sesuai</h4>
                        <p>Gunakan font formal seperti <strong>Times New Roman 12pt</strong> atau <strong>Arial 11pt</strong>. Atur melalui tab Home → Font.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">4</div>
                    <div class="tl-body">
                        <h4>Ketik Konten Surat</h4>
                        <p>Mulai mengetik: kop surat, tanggal, nomor surat, perihal, pembuka, isi, penutup, dan tanda tangan. Gunakan Heading Styles untuk judul.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">5</div>
                    <div class="tl-body">
                        <h4>Atur Spasi &amp; Paragraf</h4>
                        <p>Atur line spacing 1.5 atau 2.0 untuk surat resmi. Gunakan Tab Home → Paragraph → Line and Paragraph Spacing.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#2b7cd3;">
                    <div class="tl-num">6</div>
                    <div class="tl-body">
                        <h4>Simpan Dokumen</h4>
                        <p>Tekan <kbd>Ctrl+S</kbd>, pilih lokasi penyimpanan, beri nama file, dan pilih format: <code>.docx</code> (Word) atau <code>.pdf</code> (untuk berbagi).</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shortcut Word -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-keyboard" style="color:#2b7cd3;"></i> Shortcut Keyboard Penting — Microsoft Word</h3>
            <div class="shortcut-grid">
                <div class="shortcut-item"><kbd>Ctrl + N</kbd><span>Dokumen baru</span></div>
                <div class="shortcut-item"><kbd>Ctrl + O</kbd><span>Buka file</span></div>
                <div class="shortcut-item"><kbd>Ctrl + S</kbd><span>Simpan</span></div>
                <div class="shortcut-item"><kbd>Ctrl + P</kbd><span>Cetak dokumen</span></div>
                <div class="shortcut-item"><kbd>Ctrl + A</kbd><span>Pilih semua</span></div>
                <div class="shortcut-item"><kbd>Ctrl + F</kbd><span>Cari teks</span></div>
                <div class="shortcut-item"><kbd>Ctrl + H</kbd><span>Ganti teks</span></div>
                <div class="shortcut-item"><kbd>Ctrl + Z</kbd><span>Undo</span></div>
                <div class="shortcut-item"><kbd>Ctrl + Y</kbd><span>Redo</span></div>
                <div class="shortcut-item"><kbd>Ctrl + B</kbd><span>Bold</span></div>
                <div class="shortcut-item"><kbd>Ctrl + I</kbd><span>Italic</span></div>
                <div class="shortcut-item"><kbd>Ctrl + U</kbd><span>Underline</span></div>
                <div class="shortcut-item"><kbd>Ctrl + E</kbd><span>Tengah (Center)</span></div>
                <div class="shortcut-item"><kbd>Ctrl + J</kbd><span>Rata kanan-kiri</span></div>
                <div class="shortcut-item"><kbd>F7</kbd><span>Cek ejaan</span></div>
                <div class="shortcut-item"><kbd>Ctrl + Enter</kbd><span>Page Break</span></div>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="tab-nav-bottom">
            <a href="literasi-digital.php" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Modul Sebelumnya</a>
            <button onclick="switchTab('excel', document.getElementById('tab-excel'))" class="btn btn-primary" style="background:linear-gradient(135deg,#7c3aed,#a78bfa);">
                Lanjut: Microsoft Excel <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- ==============================
         TAB: MICROSOFT EXCEL
         ============================== -->
    <div class="tab-content hidden" id="content-excel">

        <div class="app-header" style="--app-color:#217346;--app-bg:linear-gradient(135deg,#e6f4ea,#c8e6c9);">
            <div class="app-logo" style="background:#217346;">
                <i class="fas fa-file-excel"></i>
            </div>
            <div>
                <h2 class="app-title">Microsoft Excel</h2>
                <p class="app-subtitle">Aplikasi spreadsheet paling powerful untuk mengolah data, membuat tabel, grafik, dan melakukan perhitungan otomatis dengan rumus.</p>
            </div>
        </div>

        <!-- Pengenalan Excel -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-info-circle" style="color:#217346;"></i> Apa itu Microsoft Excel?</h3>
            <div class="two-col">
                <div>
                    <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:1rem;">
                        <strong>Microsoft Excel</strong> adalah aplikasi <em>spreadsheet</em> yang memungkinkan pengguna mengorganisir, menganalisis, dan menyimpan data dalam format tabel yang terdiri dari baris dan kolom.
                    </p>
                    <p style="color:var(--text-secondary);line-height:1.8;">
                        Excel sangat berguna untuk perhitungan matematika, analisis statistik, pembuatan grafik, manajemen data, dan otomatisasi tugas dengan makro VBA.
                    </p>
                </div>
                <div class="kegunaan-list">
                    <h4 style="font-size:0.9rem;font-weight:700;margin-bottom:0.75rem;">Kegunaan Microsoft Excel:</h4>
                    <div class="use-item" style="--use-color:#217346;">
                        <i class="fas fa-calculator"></i> Menghitung nilai dan statistik siswa
                    </div>
                    <div class="use-item" style="--use-color:#217346;">
                        <i class="fas fa-chart-bar"></i> Membuat grafik dan diagram data
                    </div>
                    <div class="use-item" style="--use-color:#217346;">
                        <i class="fas fa-table"></i> Mengelola database sederhana
                    </div>
                    <div class="use-item" style="--use-color:#217346;">
                        <i class="fas fa-money-bill"></i> Membuat laporan keuangan
                    </div>
                    <div class="use-item" style="--use-color:#217346;">
                        <i class="fas fa-calendar"></i> Membuat jadwal dan planner
                    </div>
                </div>
            </div>
        </div>

        <!-- Komponen Utama Excel -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-th" style="color:#217346;"></i> Komponen Utama Lembar Kerja Excel</h3>
            <div class="excel-components">
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-columns"></i></div>
                    <h4>Kolom (Column)</h4>
                    <p>Deretan sel yang berjalan secara vertikal, diberi label huruf: A, B, C, ... Z, AA, AB, ... XFD (total 16.384 kolom).</p>
                </div>
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-grip-lines"></i></div>
                    <h4>Baris (Row)</h4>
                    <p>Deretan sel yang berjalan secara horizontal, diberi label angka: 1, 2, 3, ... hingga 1.048.576 baris.</p>
                </div>
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-square"></i></div>
                    <h4>Sel (Cell)</h4>
                    <p>Kotak perpotongan antara baris dan kolom. Setiap sel memiliki nama unik, contoh: A1, B5, C10. Sel adalah unit data terkecil.</p>
                </div>
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-border-all"></i></div>
                    <h4>Range</h4>
                    <p>Kumpulan beberapa sel yang dipilih bersama. Contoh: A1:D10 berarti sel dari A1 hingga D10 (4 kolom × 10 baris = 40 sel).</p>
                </div>
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-layer-group"></i></div>
                    <h4>Sheet (Lembar Kerja)</h4>
                    <p>Satu file Excel (Workbook) dapat memiliki banyak lembar kerja (Sheet). Default: Sheet1, Sheet2, Sheet3.</p>
                </div>
                <div class="excel-comp-card" style="--ec-color:#217346;">
                    <div class="ec-icon"><i class="fas fa-equals"></i></div>
                    <h4>Formula Bar</h4>
                    <p>Baris di atas lembar kerja tempat memasukkan dan mengedit rumus. Selalu dimulai dengan tanda sama dengan (=).</p>
                </div>
            </div>
        </div>

        <!-- Rumus-rumus Penting -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-function" style="color:#217346;"></i> Rumus-Rumus Dasar yang Wajib Diketahui</h3>
            
            <div class="formula-category">
                <div class="formula-cat-header" style="background:linear-gradient(135deg,rgba(33,115,70,0.1),rgba(33,115,70,0.05));border-color:rgba(33,115,70,0.2);color:#217346;">
                    <i class="fas fa-plus-circle"></i> Rumus Matematika Dasar
                </div>
                <div class="formula-table">
                    <div class="ft-row ft-head">
                        <div>Rumus</div><div>Fungsi</div><div>Contoh</div><div>Hasil</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=SUM(A1:A10)</code></div>
                        <div>Menjumlahkan semua nilai dalam range</div>
                        <div><code>=SUM(B2:B6)</code></div>
                        <div>Total penjumlahan B2 sampai B6</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=AVERAGE(A1:A10)</code></div>
                        <div>Menghitung rata-rata nilai</div>
                        <div><code>=AVERAGE(C2:C10)</code></div>
                        <div>Rata-rata nilai ujian siswa</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=MAX(A1:A10)</code></div>
                        <div>Mencari nilai terbesar</div>
                        <div><code>=MAX(D2:D30)</code></div>
                        <div>Nilai ujian tertinggi</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=MIN(A1:A10)</code></div>
                        <div>Mencari nilai terkecil</div>
                        <div><code>=MIN(D2:D30)</code></div>
                        <div>Nilai ujian terendah</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=COUNT(A1:A10)</code></div>
                        <div>Menghitung jumlah sel berisi angka</div>
                        <div><code>=COUNT(B2:B50)</code></div>
                        <div>Jumlah data yang ada</div>
                    </div>
                </div>
            </div>

            <div class="formula-category" style="margin-top:1.25rem;">
                <div class="formula-cat-header" style="background:linear-gradient(135deg,rgba(37,99,235,0.1),rgba(37,99,235,0.05));border-color:rgba(37,99,235,0.2);color:#2563eb;">
                    <i class="fas fa-code-branch"></i> Rumus Logika &amp; Teks
                </div>
                <div class="formula-table">
                    <div class="ft-row ft-head">
                        <div>Rumus</div><div>Fungsi</div><div>Contoh</div><div>Hasil</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=IF(kondisi, benar, salah)</code></div>
                        <div>Percabangan logika</div>
                        <div><code>=IF(B2>=75,"Lulus","Tidak")</code></div>
                        <div>Cek kelulusan siswa</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=VLOOKUP(nilai, tabel, kolom)</code></div>
                        <div>Mencari data secara vertikal</div>
                        <div><code>=VLOOKUP(A2, D:F, 2, 0)</code></div>
                        <div>Cari nama berdasarkan NIS</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=CONCATENATE(A1, B1)</code></div>
                        <div>Menggabungkan teks</div>
                        <div><code>=CONCATENATE(A2," ",B2)</code></div>
                        <div>Nama lengkap dari 2 kolom</div>
                    </div>
                    <div class="ft-row">
                        <div><code>=LEN(A1)</code></div>
                        <div>Menghitung jumlah karakter</div>
                        <div><code>=LEN("Hello")</code></div>
                        <div>Menghasilkan: 5</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Membuat Grafik -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-chart-bar" style="color:#217346;"></i> Cara Membuat Grafik di Excel</h3>
            <div class="steps-timeline">
                <div class="timeline-step" style="--tl-color:#217346;">
                    <div class="tl-num">1</div>
                    <div class="tl-body">
                        <h4>Siapkan Data Tabel</h4>
                        <p>Buat tabel data yang rapi dengan header kolom yang jelas. Contoh: Kolom A = Nama Bulan, Kolom B = Nilai Penjualan.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#217346;">
                    <div class="tl-num">2</div>
                    <div class="tl-body">
                        <h4>Seleksi Data</h4>
                        <p>Blok/pilih semua data yang ingin dijadikan grafik, termasuk header (judul kolom).</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#217346;">
                    <div class="tl-num">3</div>
                    <div class="tl-body">
                        <h4>Insert Chart</h4>
                        <p>Klik tab <strong>Insert</strong> → bagian Charts → pilih jenis grafik: Bar, Column, Line, Pie, Area, atau Scatter.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#217346;">
                    <div class="tl-num">4</div>
                    <div class="tl-body">
                        <h4>Kustomisasi Grafik</h4>
                        <p>Klik grafik → gunakan Chart Tools (Design & Format) untuk mengubah warna, judul grafik, label data, dan legenda.</p>
                    </div>
                </div>
            </div>

            <!-- Jenis Grafik -->
            <div class="chart-types">
                <div class="chart-type-card">
                    <div class="chart-icon" style="color:#2563eb;"><i class="fas fa-chart-bar"></i></div>
                    <h4>Bar / Column</h4>
                    <p>Membandingkan data antar kategori</p>
                </div>
                <div class="chart-type-card">
                    <div class="chart-icon" style="color:#7c3aed;"><i class="fas fa-chart-line"></i></div>
                    <h4>Line (Garis)</h4>
                    <p>Menampilkan tren data dari waktu ke waktu</p>
                </div>
                <div class="chart-type-card">
                    <div class="chart-icon" style="color:#dc2626;"><i class="fas fa-chart-pie"></i></div>
                    <h4>Pie (Lingkaran)</h4>
                    <p>Menampilkan proporsi/persentase data</p>
                </div>
                <div class="chart-type-card">
                    <div class="chart-icon" style="color:#059669;"><i class="fas fa-braille"></i></div>
                    <h4>Scatter Plot</h4>
                    <p>Menampilkan hubungan antar dua variabel</p>
                </div>
            </div>
        </div>

        <!-- Shortcut Excel -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-keyboard" style="color:#217346;"></i> Shortcut Keyboard — Microsoft Excel</h3>
            <div class="shortcut-grid">
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + N</kbd><span>Workbook baru</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + S</kbd><span>Simpan file</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + Z</kbd><span>Undo</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + C</kbd><span>Copy sel</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + F</kbd><span>Cari data</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + H</kbd><span>Ganti data</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + Home</kbd><span>Ke sel A1</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + End</kbd><span>Ke data terakhir</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Alt + =</kbd><span>AutoSUM</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>F2</kbd><span>Edit sel aktif</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Delete</kbd><span>Hapus isi sel</span></div>
                <div class="shortcut-item" style="--sk-color:#217346;"><kbd>Ctrl + 1</kbd><span>Format sel</span></div>
            </div>
        </div>

        <!-- ===== SIMULATOR: EXCEL PLAYGROUND ===== -->
        <div class="excel-playground fade-in-up" style="margin-top: 2rem;">
            <h4 style="margin-bottom:0.5rem;color:#217346;display:flex;align-items:center;gap:0.5rem;">
                <i class="fas fa-calculator"></i> Simulator Rumus Excel Interaktif
            </h4>
            <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:1.25rem;">
                Mari coba rumusnya secara langsung! Klik salah satu tombol rumus di bawah ini untuk melihat bagaimana Excel menghitung data nilai siswa di tabel ini secara otomatis.
            </p>
            
            <div class="excel-formula-bar-playground">
                <span class="excel-formula-fx">fx</span>
                <span id="excelFormulaDisplay" style="font-weight: 500;">=AVERAGE(C2:C5)</span>
            </div>

            <div class="excel-table-wrap">
                <table class="excel-table">
                    <thead>
                        <tr>
                            <th class="excel-col-letter"></th>
                            <th class="excel-col-letter">A</th>
                            <th class="excel-col-letter">B</th>
                            <th class="excel-col-letter">C</th>
                            <th class="excel-col-letter">D</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="excel-row-num">1</td>
                              <td style="font-weight:bold;background:var(--bg-tertiary);">Nama Siswa</td>
                              <td style="font-weight:bold;background:var(--bg-tertiary);">Tugas</td>
                              <td style="font-weight:bold;background:var(--bg-tertiary);">Ujian</td>
                              <td style="font-weight:bold;background:var(--bg-tertiary);">Hasil Rumus</td>
                          </tr>
                          <tr>
                              <td class="excel-row-num">2</td>
                              <td>Andi</td>
                              <td id="cell-B2">80</td>
                              <td id="cell-C2">85</td>
                              <td rowspan="4" id="excelResultCell" style="font-weight:bold;font-size:1.1rem;color:#217346;vertical-align:middle;background:rgba(33,115,70,0.02);">81.25</td>
                          </tr>
                          <tr>
                              <td class="excel-row-num">3</td>
                              <td>Budi</td>
                              <td id="cell-B3">75</td>
                              <td id="cell-C3">70</td>
                          </tr>
                          <tr>
                              <td class="excel-row-num">4</td>
                              <td>Citra</td>
                              <td id="cell-B4">90</td>
                              <td id="cell-C4">95</td>
                          </tr>
                          <tr>
                              <td class="excel-row-num">5</td>
                              <td>Dewi</td>
                              <td id="cell-B5">85</td>
                              <td id="cell-C5">80</td>
                          </tr>
                      </tbody>
                  </table>
              </div>

              <div class="excel-btn-group">
                  <button class="excel-formula-btn active" id="btn-fx-avg" onclick="runExcelFormula('AVERAGE')">=AVERAGE(C2:C5) - Rata-rata Ujian</button>
                  <button class="excel-formula-btn" id="btn-fx-sum" onclick="runExcelFormula('SUM')">=SUM(B2:B5) - Total Nilai Tugas</button>
                  <button class="excel-formula-btn" id="btn-fx-max" onclick="runExcelFormula('MAX')">=MAX(C2:C5) - Ujian Tertinggi</button>
                  <button class="excel-formula-btn" id="btn-fx-min" onclick="runExcelFormula('MIN')">=MIN(B2:B5) - Tugas Terendah</button>
                  <button class="excel-formula-btn" id="btn-fx-if" onclick="runExcelFormula('IF')">=IF(AVERAGE(C2:C5)>=75,"Lulus","Remedial")</button>
              </div>

              <div class="excel-explanation-box" id="excelExplanationArea">
                  <i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i>
                  <strong>Rumus AVERAGE (Rata-rata):</strong> Menjumlahkan seluruh nilai ujian siswa di kolom C (85 + 70 + 95 + 80 = 330) lalu membaginya dengan jumlah baris data (4). Hasilnya adalah <strong>81.25</strong>.
              </div>
          </div>

          <div class="tab-nav-bottom">
              <button onclick="switchTab('word', document.getElementById('tab-word'))" class="btn btn-outline">
                  <i class="fas fa-arrow-left"></i> Kembali: Microsoft Word
              </button>
              <button onclick="switchTab('ppt', document.getElementById('tab-ppt'))" class="btn btn-primary" style="background:linear-gradient(135deg,#d24726,#f97316);">
                  Lanjut: PowerPoint <i class="fas fa-arrow-right"></i>
              </button>
          </div>
      </div>

    <!-- ==============================
         TAB: POWERPOINT
         ============================== -->
    <div class="tab-content hidden" id="content-ppt">

        <div class="app-header" style="--app-color:#d24726;--app-bg:linear-gradient(135deg,#fef3ee,#fdddd0);">
            <div class="app-logo" style="background:#d24726;">
                <i class="fas fa-file-powerpoint"></i>
            </div>
            <div>
                <h2 class="app-title">Microsoft PowerPoint</h2>
                <p class="app-subtitle">Aplikasi presentasi terkemuka untuk membuat slideshow visual yang memukau dengan teks, gambar, animasi, dan multimedia.</p>
            </div>
        </div>

        <!-- Pengenalan PPT -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-info-circle" style="color:#d24726;"></i> Apa itu Microsoft PowerPoint?</h3>
            <div class="two-col">
                <div>
                    <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:1rem;">
                        <strong>Microsoft PowerPoint</strong> adalah aplikasi presentasi yang digunakan untuk membuat <em>slideshow</em> yang terdiri dari serangkaian slide berisi teks, gambar, grafik, video, dan animasi.
                    </p>
                    <p style="color:var(--text-secondary);line-height:1.8;">
                        PowerPoint pertama kali dirilis pada 1987 dan kini menjadi standar dunia untuk presentasi bisnis, akademik, dan pendidikan. File disimpan dalam format <code>.pptx</code>.
                    </p>
                </div>
                <div class="kegunaan-list">
                    <h4 style="font-size:0.9rem;font-weight:700;margin-bottom:0.75rem;">Kegunaan PowerPoint:</h4>
                    <div class="use-item" style="--use-color:#d24726;">
                        <i class="fas fa-chalkboard-teacher"></i> Presentasi di kelas / seminar
                    </div>
                    <div class="use-item" style="--use-color:#d24726;">
                        <i class="fas fa-briefcase"></i> Presentasi bisnis &amp; proposal
                    </div>
                    <div class="use-item" style="--use-color:#d24726;">
                        <i class="fas fa-graduation-cap"></i> Sidang skripsi / tugas akhir
                    </div>
                    <div class="use-item" style="--use-color:#d24726;">
                        <i class="fas fa-images"></i> Membuat portofolio visual
                    </div>
                    <div class="use-item" style="--use-color:#d24726;">
                        <i class="fas fa-video"></i> Membuat video pembelajaran
                    </div>
                </div>
            </div>
        </div>

        <!-- Antarmuka PPT -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-th-large" style="color:#d24726;"></i> Mengenal Antarmuka PowerPoint</h3>
            <div class="interface-diagram">
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-bars"></i></div>
                    <h4>Ribbon</h4>
                    <p>Menu utama berisi tab: Home, Insert, Design, Transitions, Animations, Slide Show, Review, View.</p>
                </div>
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-th-list"></i></div>
                    <h4>Slide Panel</h4>
                    <p>Panel kiri menampilkan thumbnail semua slide. Klik slide untuk berpindah, drag untuk mengatur urutan.</p>
                </div>
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-image"></i></div>
                    <h4>Slide Editor</h4>
                    <p>Area utama untuk mengedit slide aktif. Di sini Anda memasukkan teks, gambar, shape, dan elemen lainnya.</p>
                </div>
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-pencil-alt"></i></div>
                    <h4>Notes Panel</h4>
                    <p>Area di bawah slide untuk menambahkan catatan pembicara yang tidak terlihat oleh audiens saat presentasi.</p>
                </div>
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-eye"></i></div>
                    <h4>View Options</h4>
                    <p>Tombol di pojok kanan bawah: Normal, Slide Sorter, Reading View, Slide Show untuk berbagai mode tampilan.</p>
                </div>
                <div class="interface-part" style="--part-color:#d24726;">
                    <div class="part-icon"><i class="fas fa-paint-brush"></i></div>
                    <h4>Design Themes</h4>
                    <p>Tab Design menyediakan berbagai tema visual siap pakai untuk mempercantik tampilan presentasi secara instan.</p>
                </div>
            </div>
        </div>

        <!-- Langkah Membuat Presentasi -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-list-ol" style="color:#d24726;"></i> Langkah Membuat Presentasi yang Menarik</h3>
            <div class="steps-timeline">
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">1</div>
                    <div class="tl-body">
                        <h4>Rencanakan Konten</h4>
                        <p>Tentukan topik, buat kerangka materi (outline), dan putuskan berapa slide yang diperlukan. Prinsip: <strong>1 slide = 1 ide utama</strong>.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">2</div>
                    <div class="tl-body">
                        <h4>Pilih Tema (Design)</h4>
                        <p>Klik tab <strong>Design</strong> → pilih tema yang sesuai dengan topik presentasi. Pastikan warna kontras dan mudah dibaca.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">3</div>
                    <div class="tl-body">
                        <h4>Tambahkan Konten Slide</h4>
                        <p>Klik placeholder teks untuk mengetik. Gunakan <strong>Insert</strong> untuk menambahkan gambar, ikon, SmartArt, tabel, grafik, dan video.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">4</div>
                    <div class="tl-body">
                        <h4>Tambahkan Transisi Slide</h4>
                        <p>Klik tab <strong>Transitions</strong> → pilih efek transisi antar slide (Fade, Push, Wipe, dll). Atur durasi dan apakah otomatis atau klik manual.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">5</div>
                    <div class="tl-body">
                        <h4>Animasikan Elemen</h4>
                        <p>Pilih objek → klik tab <strong>Animations</strong> → pilih animasi (Entrance, Emphasis, Exit). Atur urutan dan waktu muncul.</p>
                    </div>
                </div>
                <div class="timeline-step" style="--tl-color:#d24726;">
                    <div class="tl-num">6</div>
                    <div class="tl-body">
                        <h4>Jalankan Presentasi</h4>
                        <p>Tekan <kbd>F5</kbd> untuk memulai dari awal, atau <kbd>Shift+F5</kbd> dari slide aktif. Tekan <kbd>Esc</kbd> untuk keluar dari mode presentasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips Presentasi Efektif -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-star" style="color:#d24726;"></i> Tips Presentasi yang Efektif &amp; Memukau</h3>
            <div class="tips-ppt-grid">
                <div class="ppt-tip-card" style="--tp-color:#d24726;">
                    <div class="tp-icon"><i class="fas fa-font"></i></div>
                    <h4>Aturan 6×6</h4>
                    <p>Maksimal <strong>6 baris per slide</strong> dan <strong>6 kata per baris</strong>. Jangan jadikan slide seperti buku teks — slide bukan untuk dibaca, tapi untuk mendukung pembicaraan.</p>
                </div>
                <div class="ppt-tip-card" style="--tp-color:#2563eb;">
                    <div class="tp-icon"><i class="fas fa-palette"></i></div>
                    <h4>Konsistensi Warna</h4>
                    <p>Gunakan maksimal <strong>3 warna utama</strong> dalam presentasi. Pilih warna yang kontras antara background dan teks agar mudah dibaca dari jarak jauh.</p>
                </div>
                <div class="ppt-tip-card" style="--tp-color:#059669;">
                    <div class="tp-icon"><i class="fas fa-images"></i></div>
                    <h4>Gunakan Visual</h4>
                    <p>Gambar, ikon, infografis, dan grafik jauh lebih efektif daripada teks panjang. Gunakan foto berkualitas tinggi dan ikon yang konsisten gayanya.</p>
                </div>
                <div class="ppt-tip-card" style="--tp-color:#7c3aed;">
                    <div class="tp-icon"><i class="fas fa-text-height"></i></div>
                    <h4>Ukuran Font</h4>
                    <p>Judul: <strong>min. 36pt</strong>, Isi: <strong>min. 24pt</strong>. Jangan gunakan lebih dari 2 jenis font. Gunakan font yang bersih dan mudah dibaca.</p>
                </div>
                <div class="ppt-tip-card" style="--tp-color:#c2410c;">
                    <div class="tp-icon"><i class="fas fa-film"></i></div>
                    <h4>Animasi Secukupnya</h4>
                    <p>Gunakan animasi yang simpel dan tidak berlebihan. Animasi terlalu banyak bisa mengganggu fokus audiens. Efek Fade dan Appear adalah yang paling profesional.</p>
                </div>
                <div class="ppt-tip-card" style="--tp-color:#0891b2;">
                    <div class="tp-icon"><i class="fas fa-stopwatch"></i></div>
                    <h4>Aturan 10-20-30</h4>
                    <p>Guy Kawasaki: maks. <strong>10 slide</strong>, durasi <strong>20 menit</strong>, font maks. <strong>30pt ke atas</strong>. Presentasi efektif adalah yang singkat dan padat.</p>
                </div>
            </div>
        </div>

        <!-- Shortcut PPT -->
        <div class="section-block fade-in-up">
            <h3 class="block-title"><i class="fas fa-keyboard" style="color:#d24726;"></i> Shortcut Keyboard — PowerPoint</h3>
            <div class="shortcut-grid">
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>F5</kbd><span>Mulai presentasi</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Shift+F5</kbd><span>Dari slide ini</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Esc</kbd><span>Keluar slideshow</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+M</kbd><span>Slide baru</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+D</kbd><span>Duplikasi slide</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+G</kbd><span>Grup objek</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>B</kbd><span>Layar hitam (saat present)</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>W</kbd><span>Layar putih (saat present)</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+A</kbd><span>Pilih semua objek</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Tab</kbd><span>Pindah antar objek</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+Z</kbd><span>Undo</span></div>
                <div class="shortcut-item" style="--sk-color:#d24726;"><kbd>Ctrl+S</kbd><span>Simpan file</span></div>
            </div>
        </div>

        <!-- Rangkuman -->
        <div class="section-block fade-in-up">
            <div class="rangkuman-box">
                <div class="rangkuman-header" style="background:linear-gradient(135deg,#7c3aed,#d24726);">
                    <i class="fas fa-clipboard-check"></i> Rangkuman — Modul 2: Perangkat Teknologi Digital
                </div>
                <div class="rangkuman-body">
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <strong>Microsoft Word</strong> adalah aplikasi pengolah kata untuk membuat dokumen teks profesional seperti surat, laporan, dan makalah.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Ribbon di Word</strong> terdiri dari tab: Home, Insert, Layout, References, Mailings, Review, View.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Microsoft Excel</strong> adalah aplikasi spreadsheet untuk mengolah data, menghitung dengan rumus, dan membuat grafik.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Rumus dasar Excel</strong>: SUM, AVERAGE, MAX, MIN, COUNT, IF, VLOOKUP selalu diawali dengan tanda sama dengan (=).</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Microsoft PowerPoint</strong> adalah aplikasi untuk membuat presentasi visual dengan slide, animasi, dan transisi.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Prinsip presentasi efektif</strong>: Aturan 6×6, konsistensi warna, gunakan visual, dan aturan 10-20-30.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-nav-bottom">
            <button onclick="switchTab('excel', document.getElementById('tab-excel'))" class="btn btn-outline">
                <i class="fas fa-arrow-left"></i> Kembali: Microsoft Excel
            </button>
            <a href="jaringan-komputer.php" class="btn btn-primary" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">
                Modul 3: Jaringan Komputer <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

</div><!-- end container -->

<!-- ===== STYLES ===== -->
<style>
/* App Tabs */
.app-tabs {
    display: flex;
    gap: 0;
    padding: 0;
    overflow-x: auto;
}
.app-tab {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    padding: 1rem 1.5rem;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-secondary);
    background: transparent;
    border: none;
    border-bottom: 3px solid transparent;
    cursor: pointer;
    transition: all 0.2s;
    white-space: nowrap;
    font-family: var(--font-heading);
}
.app-tab:hover { color: var(--text-primary); background: var(--bg-secondary); }
.app-tab.active-tab { color: var(--primary-600); border-bottom-color: var(--primary-600); background: var(--bg-secondary); }
.tab-icon {
    width: 28px; height: 28px;
    border-radius: 6px;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.85rem;
}
.tab-label { font-weight: 600; }
.tab-content { display: block; }
.tab-content.hidden { display: none; }

/* App Header */
.app-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    background: var(--app-bg, var(--bg-secondary));
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: 1.75rem 2rem;
    margin-bottom: 2rem;
}
[data-theme="dark"] #content-word .app-header {
    --app-bg: linear-gradient(135deg, rgba(43, 124, 211, 0.15), rgba(30, 41, 59, 0.75)) !important;
}
[data-theme="dark"] #content-excel .app-header {
    --app-bg: linear-gradient(135deg, rgba(33, 115, 70, 0.15), rgba(30, 41, 59, 0.75)) !important;
}
[data-theme="dark"] #content-ppt .app-header {
    --app-bg: linear-gradient(135deg, rgba(210, 71, 38, 0.15), rgba(30, 41, 59, 0.75)) !important;
}
.app-logo {
    width: 64px; height: 64px;
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 1.8rem;
    flex-shrink: 0;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
}
.app-title { font-size: 1.5rem; font-weight: 800; margin-bottom: 0.25rem; }
.app-subtitle { color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; }

/* Section Block */
.section-block {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    box-shadow: var(--card-shadow);
}
.block-title {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Two Column Layout */
.two-col {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    align-items: start;
}

/* Kegunaan List */
.kegunaan-list { display: flex; flex-direction: column; gap: 0.5rem; }
.use-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.6rem 1rem;
    border-radius: 10px;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s;
}
.use-item:hover { border-color: var(--use-color, var(--primary-500)); background: rgba(37,99,235,0.04); }
.use-item i { color: var(--use-color, var(--primary-500)); width: 18px; text-align: center; }

/* Interface Diagram */
.interface-diagram {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
}
.interface-part {
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    border-top: 3px solid var(--part-color, var(--primary-500));
    border-radius: 14px;
    background: var(--bg-secondary);
    transition: all 0.2s;
}
.interface-part:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.07); }
.part-icon {
    font-size: 1.3rem;
    color: var(--part-color, var(--primary-500));
    margin-bottom: 0.625rem;
}
.interface-part h4 { font-size: 0.9rem; margin-bottom: 0.4rem; }
.interface-part p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* Ribbon Groups */
.ribbon-groups {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
}
.ribbon-group {
    border: 1px solid var(--border-color);
    border-radius: 14px;
    overflow: hidden;
}
.rg-header {
    background: linear-gradient(135deg, var(--rg-color, var(--primary-500)), color-mix(in srgb, var(--rg-color, var(--primary-500)) 70%, #fff));
    color: white;
    padding: 0.6rem 1rem;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.04em;
}
.rg-items { padding: 0.75rem; display: flex; flex-direction: column; gap: 0.4rem; }
.rg-item {
    font-size: 0.8rem;
    color: var(--text-secondary);
    padding: 0.35rem 0.5rem;
    border-radius: 6px;
    background: var(--bg-secondary);
    line-height: 1.4;
}

/* Timeline Steps */
.steps-timeline {
    display: flex;
    flex-direction: column;
    gap: 0;
    position: relative;
}
.steps-timeline::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 20px;
    bottom: 20px;
    width: 2px;
    background: linear-gradient(to bottom, var(--tl-color, var(--primary-500)), transparent);
    opacity: 0.3;
}
.timeline-step {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
    padding: 0.875rem 1rem 0.875rem 0;
    position: relative;
}
.tl-num {
    width: 40px; height: 40px;
    background: var(--tl-color, var(--primary-500));
    color: white;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 0.9rem;
    flex-shrink: 0;
    position: relative;
    z-index: 1;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
.tl-body { padding-top: 0.4rem; }
.tl-body h4 { font-size: 0.95rem; margin-bottom: 0.3rem; }
.tl-body p { font-size: 0.85rem; color: var(--text-secondary); line-height: 1.7; }
.tl-body kbd {
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 4px;
    padding: 0.1rem 0.4rem;
    font-size: 0.78rem;
    font-family: monospace;
    color: var(--text-primary);
}

/* Shortcut Grid */
.shortcut-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.75rem;
}
.shortcut-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.4rem;
    padding: 0.875rem 0.5rem;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    text-align: center;
    transition: all 0.2s;
}
.shortcut-item:hover { border-color: var(--sk-color, var(--primary-500)); transform: translateY(-2px); }
.shortcut-item kbd {
    background: var(--gradient-primary);
    color: white;
    border-radius: 6px;
    padding: 0.3rem 0.6rem;
    font-size: 0.78rem;
    font-family: monospace;
    font-weight: 700;
    border: none;
    white-space: nowrap;
}
.shortcut-item span { font-size: 0.75rem; color: var(--text-secondary); line-height: 1.3; }

/* Excel Components */
.excel-components {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
}
.excel-comp-card {
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: 14px;
    background: var(--bg-secondary);
    transition: all 0.2s;
}
.excel-comp-card:hover { transform: translateY(-2px); border-color: var(--ec-color, var(--primary-500)); }
.ec-icon { font-size: 1.4rem; color: var(--ec-color, var(--primary-500)); margin-bottom: 0.625rem; }
.excel-comp-card h4 { font-size: 0.9rem; margin-bottom: 0.35rem; }
.excel-comp-card p { font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6; }

/* Formula Table */
.formula-category { border: 1px solid var(--border-color); border-radius: 14px; overflow: hidden; }
.formula-cat-header {
    padding: 0.75rem 1.25rem;
    font-size: 0.875rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    border-bottom: 1px solid var(--border-color);
}
.formula-table { display: flex; flex-direction: column; }
.ft-row {
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 1.5fr;
    gap: 0;
    border-bottom: 1px solid var(--border-color);
}
.ft-row:last-child { border-bottom: none; }
.ft-row > div {
    padding: 0.65rem 1rem;
    font-size: 0.82rem;
    color: var(--text-secondary);
    border-right: 1px solid var(--border-color);
    line-height: 1.5;
}
.ft-row > div:last-child { border-right: none; }
.ft-head { background: var(--bg-secondary); }
.ft-head > div { font-weight: 700; color: var(--text-primary); font-size: 0.8rem; }
.ft-row code {
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    padding: 0.15rem 0.4rem;
    border-radius: 4px;
    font-size: 0.75rem;
    color: var(--primary-600);
    font-family: monospace;
}

/* Chart Types */
.chart-types {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-top: 1.5rem;
}
.chart-type-card {
    text-align: center;
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: 14px;
    background: var(--bg-secondary);
    transition: all 0.2s;
}
.chart-type-card:hover { transform: translateY(-3px); box-shadow: var(--card-shadow-hover); }
.chart-icon { font-size: 2rem; margin-bottom: 0.625rem; }
.chart-type-card h4 { font-size: 0.875rem; margin-bottom: 0.3rem; }
.chart-type-card p { font-size: 0.78rem; color: var(--text-secondary); line-height: 1.5; }

/* PPT Tips Grid */
.tips-ppt-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
}
.ppt-tip-card {
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    border-top: 4px solid var(--tp-color, var(--primary-500));
    border-radius: 16px;
    background: var(--bg-secondary);
    transition: all 0.25s;
}
.ppt-tip-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
.tp-icon {
    font-size: 1.5rem;
    color: var(--tp-color, var(--primary-500));
    margin-bottom: 0.75rem;
}
.ppt-tip-card h4 { font-size: 0.95rem; margin-bottom: 0.4rem; }
.ppt-tip-card p { font-size: 0.83rem; color: var(--text-secondary); line-height: 1.65; }

/* Rangkuman */
.rangkuman-box { border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; margin-bottom: 2rem; }
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

/* Tab Nav Bottom */
.tab-nav-bottom {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
    padding-top: 1.5rem;
    border-top: 1px solid var(--border-color);
    margin-top: 1rem;
}

/* Responsive */
@media (max-width: 1024px) {
    .ribbon-groups, .search-engine-grid { grid-template-columns: repeat(2, 1fr); }
    .interface-diagram { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .two-col, .excel-components, .tips-ppt-grid { grid-template-columns: 1fr; }
    .shortcut-grid, .chart-types { grid-template-columns: repeat(2, 1fr); }
    .ribbon-groups { grid-template-columns: 1fr; }
    .interface-diagram { grid-template-columns: 1fr; }
    .ft-row { grid-template-columns: 1fr 1fr; }
    .ft-row > div:nth-child(3), .ft-row > div:nth-child(4) { display: none; }
    .app-tab .tab-label { display: none; }
    .process-steps { grid-template-columns: repeat(2,1fr); }
}
</style>

<script>
// Tab switching
function switchTab(tabId, btn) {
    // Hide all content
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
    // Remove active from all tabs
    document.querySelectorAll('.app-tab').forEach(t => t.classList.remove('active-tab'));
    // Show target
    document.getElementById('content-' + tabId).classList.remove('hidden');
    // Set active tab
    if (btn) btn.classList.add('active-tab');
    // Scroll to top of content
    window.scrollTo({ top: document.querySelector('.app-tabs').offsetTop - 80, behavior: 'smooth' });
}

// Reading progress
window.addEventListener('scroll', () => {
    const el = document.documentElement;
    const pct = (el.scrollTop / (el.scrollHeight - el.clientHeight)) * 100;
    const bar = document.getElementById('readingProgress');
    if (bar) bar.style.width = pct + '%';
});

// Animate SE bars on scroll
const bars = document.querySelectorAll('.se-bar');
const barObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) e.target.style.animationPlayState = 'running';
    });
});
bars.forEach(b => barObserver.observe(b));

// ============================================================
// JS FOR EXCEL FORMULA SIMULATOR
// ============================================================
function runExcelFormula(formulaType) {
    // Reset highlights
    document.querySelectorAll('.excel-table td').forEach(td => {
        td.classList.remove('highlighted-sum', 'highlighted-result');
    });
    
    // Reset button states
    document.querySelectorAll('.excel-formula-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    const displayEl = document.getElementById('excelFormulaDisplay');
    const resultEl = document.getElementById('excelResultCell');
    const explanationEl = document.getElementById('excelExplanationArea');
    
    if (formulaType === 'AVERAGE') {
        document.getElementById('btn-fx-avg').classList.add('active');
        displayEl.textContent = '=AVERAGE(C2:C5)';
        resultEl.textContent = '81.25';
        
        // Highlight range C2:C5 (rows index matching our table)
        for(let i=2; i<=5; i++) {
            document.querySelectorAll('.excel-table tbody tr')[i-1].querySelectorAll('td')[2].classList.add('highlighted-sum');
        }
        resultEl.classList.add('highlighted-result');
        
        explanationEl.innerHTML = `<i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i><strong>Rumus AVERAGE (Rata-rata):</strong> Menjumlahkan seluruh nilai ujian siswa di kolom C (85 + 70 + 95 + 80 = 330) lalu membaginya dengan jumlah baris data (4). Hasilnya adalah <strong>81.25</strong>.`;
    } else if (formulaType === 'SUM') {
        document.getElementById('btn-fx-sum').classList.add('active');
        displayEl.textContent = '=SUM(B2:B5)';
        resultEl.textContent = '330';
        
        // Highlight range B2:B5
        for(let i=2; i<=5; i++) {
            document.querySelectorAll('.excel-table tbody tr')[i-1].querySelectorAll('td')[1].classList.add('highlighted-sum');
        }
        resultEl.classList.add('highlighted-result');
        
        explanationEl.innerHTML = `<i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i><strong>Rumus SUM (Penjumlahan):</strong> Menjumlahkan seluruh nilai tugas di kolom B (80 + 75 + 90 + 85). Total penjumlahan yang didapat adalah <strong>330</strong>.`;
    } else if (formulaType === 'MAX') {
        document.getElementById('btn-fx-max').classList.add('active');
        displayEl.textContent = '=MAX(C2:C5)';
        resultEl.textContent = '95';
        
        // Highlight range C2:C5
        for(let i=2; i<=5; i++) {
            document.querySelectorAll('.excel-table tbody tr')[i-1].querySelectorAll('td')[2].classList.add('highlighted-sum');
        }
        resultEl.classList.add('highlighted-result');
        
        explanationEl.innerHTML = `<i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i><strong>Rumus MAX (Nilai Terbesar):</strong> Mencari nilai angka tertinggi dari rentang sel C2 sampai C5 (85, 70, 95, 80). Angka tertinggi yang ditemukan adalah <strong>95</strong> (Nilai Ujian Citra).`;
    } else if (formulaType === 'MIN') {
        document.getElementById('btn-fx-min').classList.add('active');
        displayEl.textContent = '=MIN(B2:B5)';
        resultEl.textContent = '75';
        
        // Highlight range B2:B5
        for(let i=2; i<=5; i++) {
            document.querySelectorAll('.excel-table tbody tr')[i-1].querySelectorAll('td')[1].classList.add('highlighted-sum');
        }
        resultEl.classList.add('highlighted-result');
        
        explanationEl.innerHTML = `<i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i><strong>Rumus MIN (Nilai Terkecil):</strong> Mencari nilai terendah dari rentang sel B2 sampai B5 (80, 75, 90, 85). Angka terendah yang ditemukan adalah <strong>75</strong> (Nilai Tugas Budi).`;
    } else if (formulaType === 'IF') {
        document.getElementById('btn-fx-if').classList.add('active');
        displayEl.textContent = '=IF(AVERAGE(C2:C5)>=75,"Lulus","Remedial")';
        resultEl.textContent = 'Lulus';
        
        // Highlight range C2:C5
        for(let i=2; i<=5; i++) {
            document.querySelectorAll('.excel-table tbody tr')[i-1].querySelectorAll('td')[2].classList.add('highlighted-sum');
        }
        resultEl.classList.add('highlighted-result');
        
        explanationEl.innerHTML = `<i class="fas fa-lightbulb" style="color:#217346;margin-right:0.5rem;"></i><strong>Rumus IF (Logika Percabangan):</strong> Mengecek kondisi logika. Karena rata-rata ujian (81.25) bernilai lebih besar atau sama dengan 75 (<strong>81.25 >= 75 adalah BENAR</strong>), maka Excel mengeluarkan hasil untuk kondisi benar, yaitu <strong>"Lulus"</strong>.`;
    }
}

// Load initial formula
document.addEventListener('DOMContentLoaded', () => {
    if(document.getElementById('excelFormulaDisplay')) {
        runExcelFormula('AVERAGE');
    }
});
</script>

<?php include '../includes/footer.php'; ?>
