<?php
// Hitung path relatif ke root proyek INFORMATIKA
$self_path = str_replace('\\', '/', $_SERVER['PHP_SELF']);
if (preg_match('#/INFORMATIKA/(.*)#i', $self_path, $m)) {
    $depth = substr_count($m[1], '/');
} else {
    $depth = max(0, substr_count(ltrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', $self_path), '/'), '/') - 1);
}
$base = str_repeat('../', $depth);
?>
</main>
<!-- ===== MAIN CONTENT END ===== -->

<!-- ===== FOOTER ===== -->
<footer class="footer" id="tentang">
    <div class="footer-top">
        <div class="footer-container">

            <!-- Brand -->
            <div class="footer-brand">
                <div class="footer-logo">
                    <div class="logo-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-main">Informatika</span>
                        <span class="logo-sub">Learning Platform</span>
                    </div>
                </div>
                <p class="footer-desc">
                    Platform pembelajaran Informatika yang menyenangkan dan interaktif untuk siswa. 
                    Belajar kapan saja, di mana saja!
                </p>
                <div class="footer-social">
                    <a href="#" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Navigasi Materi -->
            <div class="footer-nav">
                <h4 class="footer-title">Materi Pelajaran</h4>
                <ul class="footer-links">
                    <li>
                        <a href="<?= $base ?>materi/literasi-digital.php">
                            <i class="fas fa-search"></i> Literasi Digital & Mesin Pencari
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base ?>materi/perangkat-teknologi.php">
                            <i class="fas fa-desktop"></i> Perangkat Teknologi Digital
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base ?>materi/jaringan-komputer.php">
                            <i class="fas fa-network-wired"></i> Jaringan Komputer & Internet
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Info -->
            <div class="footer-nav">
                <h4 class="footer-title">Informasi</h4>
                <ul class="footer-links">
                    <li><a href="<?= $base ?>index.php"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="<?= $base ?>quiz/latihan-soal.php"><i class="fas fa-brain"></i> Latihan Soal</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Kontak Kami</a></li>
                    <li><a href="#"><i class="fas fa-shield-alt"></i> Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="footer-contact">
                <h4 class="footer-title">Kontak</h4>
                <ul class="footer-links">
                    <li>
                        <i class="fas fa-school"></i>
                        <span>SMP/SMA Informatika</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>informatika@sekolah.sch.id</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Senin – Jumat, 07.00 – 15.00</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <p>&copy; <?= date('Y') ?> <strong>Belajar Informatika</strong>. Dibuat dengan <i class="fas fa-heart" style="color:#f43f5e"></i> untuk pendidikan.</p>
            <p class="footer-credit">Mata Pelajaran Informatika | Kurikulum Merdeka</p>
        </div>
    </div>
</footer>

<!-- ===== BACK TO TOP BUTTON ===== -->
<button class="back-to-top" id="backToTop" title="Kembali ke atas" aria-label="Kembali ke atas">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Main JavaScript -->
<script src="<?= $base ?>assets/js/main.js"></script>
</body>
</html>
