<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-tower-cell"></i> Capaian Pembelajaran 5</div>
  <h1>Memahami Arsitektur Jaringan Seluler</h1>
  <p>Dari konsep sel heksagonal, evolusi 1G–5G, hingga komponen internal jaringan 4G LTE yang melayani miliaran pengguna setiap harinya.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-tower-cell"></i></span> Konsep Dasar Jaringan Seluler</h2>
  <p>Jaringan seluler membagi wilayah menjadi area-area kecil berbentuk <strong>heksagonal (sel)</strong>. Setiap sel memiliki BTS (Base Transceiver Station) di pusatnya. Saat Anda bergerak antar sel, koneksi berpindah secara mulus — proses ini disebut <strong>Handover/Handoff</strong>.</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-route"></i> Simulasi Handover: Jakarta → Bandung via Tol</div>
    <pre>Perjalanan Jakarta-Bandung (~150 km):
Sel #1 (Bekasi) → HP konek ke BTS Bekasi (frekuensi 1800MHz)
    ↓ sinyak melemah, sel tetangga makin kuat
Sel #2 (Cikampek) → MME memutuskan Handover ke BTS Cikampek
    ↓ proses <50ms, koneksi tidak putus!
Sel #3 (Purwakarta) → Handover lagi ke BTS Purwakarta
...dst sekitar 20-30 kali handover selama perjalanan</pre>
  </div>

  <h3>Evolusi Generasi: 1G hingga 5G</h3>
  <div class="table-wrapper">
    <table>
      <tr><th>Generasi</th><th>Era & Standar</th><th>Kecepatan</th><th>Inovasi Utama</th></tr>
      <tr><td><strong>1G</strong></td><td>1980an (AMPS)</td><td>2.4 Kbps</td><td>Jaringan seluler pertama. Analog, hanya suara, mudah disadap.</td></tr>
      <tr><td><strong>2G</strong></td><td>1991 (GSM/CDMA)</td><td>64 Kbps</td><td>Digital: SMS, enkripsi panggilan, roaming internasional. Era Nokia!</td></tr>
      <tr><td><strong>3G</strong></td><td>2000an (UMTS)</td><td>2–21 Mbps</td><td>Internet mobile pertama: video call, email di HP, smartphone awal.</td></tr>
      <tr><td><strong>4G LTE</strong></td><td>2010an</td><td>100 Mbps–1 Gbps</td><td>All-IP: VoLTE, YouTube HD, ojek online, TikTok. Dominasi smartphone.</td></tr>
      <tr><td><strong>5G NR</strong></td><td>2020an</td><td>10–20 Gbps</td><td>eMBB (kecepatan), mMTC (IoT masif), URLLC (latensi &lt;1ms).</td></tr>
    </table>
  </div>

  <h3>Arsitektur Jaringan 4G LTE (EPC)</h3>
  <div class="grid-cards">
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-mobile-alt"></i></span><h4>UE (User Equipment)</h4><p>HP, modem LTE. Terdapat UICC/SIM Card yang menyimpan identitas pelanggan (IMSI) dan kunci autentikasi.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-tower-broadcast"></i></span><h4>eNodeB (Menara 4G)</h4><p>BTS versi 4G yang lebih cerdas — bisa koordinasi langsung dengan eNodeB tetangga untuk Handover tanpa lewat server pusat.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-brain"></i></span><h4>MME (Mobility Mgmt Entity)</h4><p>Otak jaringan: melacak lokasi HP, autentikasi SIM, koordinasi handover, manajemen sesi koneksi data.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-database"></i></span><h4>HSS (Home Subscriber Server)</h4><p>Database master semua pelanggan: profil, nomor HP, layanan berlangganan, kunci enkripsi untuk autentikasi.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-road"></i></span><h4>SGW & PGW (Gateway)</h4><p>SGW: routing data saat handover. PGW: pintu ke internet, menyuntikkan IP ke HP pelanggan, mengontrol QoS.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-gavel"></i></span><h4>PCRF (Policy &amp; Charging)</h4><p>Memutuskan kecepatan tiap pelanggan — premium dapat prioritas lebih tinggi, yang habis kuota dithrottle 128 Kbps.</p></div>
  </div>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-mobile-screen"></i> Cara Kerja: HP Baru Menyalakan Data Internet</div>
    <pre>1. HP menyala → Kirim sinyal ke eNodeB terdekat (Attach Request)
2. eNodeB teruskan ke MME
3. MME tanya HSS: "Apakah IMSI ini pelanggan aktif yang sudah bayar?"
4. HSS konfirmasi + kirim kunci enkripsi → Autentikasi berhasil
5. MME perintahkan PGW untuk menyiapkan sesi data (PDN Connection)
6. PGW suntikkan IP Address ke HP: "Ini IP kamu: 10.34.56.78"
7. HP sekarang bisa browsing internet melalui SGW → PGW → Internet</pre>
  </div>

  <div class="highlight-box">
    <strong><i class="fa-solid fa-wifi"></i> 5G Network Slicing: Satu Infrastruktur, Banyak Jaringan Virtual</strong>
    <p>5G memperkenalkan <em>Network Slicing</em> — satu infrastruktur fisik dibagi menjadi beberapa "irisan jaringan virtual" yang terisolasi: Slice 1 untuk ambulans (URLLC latensi &lt;1ms), Slice 2 untuk kamera CCTV IoT (mMTC, daya rendah), Slice 3 untuk konsumen umum (eMBB, kecepatan tinggi). Semua berjalan di hardware yang sama tanpa saling mengganggu!</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-seluler">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Jaringan Seluler</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang arsitektur, generasi, dan komponen jaringan seluler!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="Handover/Handoff adalah proses perpindahan koneksi HP dari satu sel (BTS/eNodeB) ke sel lain secara mulus tanpa putus saat pengguna bergerak.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Proses perpindahan koneksi HP dari satu menara BTS ke menara BTS lain saat pengguna bergerak disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="sq1" value="A" id="sq1a"><label for="sq1a">A. Roaming</label></div>
      <div class="quiz-option"><input type="radio" name="sq1" value="B" id="sq1b"><label for="sq1b">B. Handover (Handoff)</label></div>
      <div class="quiz-option"><input type="radio" name="sq1" value="C" id="sq1c"><label for="sq1c">C. Multiplexing</label></div>
      <div class="quiz-option"><input type="radio" name="sq1" value="D" id="sq1d"><label for="sq1d">D. Switching</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Jaringan 4G LTE adalah jaringan All-IP pertama — panggilan suara pun dikonversi menjadi data IP (VoLTE). Ini memungkinkan kecepatan data yang jauh lebih tinggi dibanding 3G.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Teknologi 4G LTE disebut jaringan "All-IP" karena...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="sq2" value="A" id="sq2a"><label for="sq2a">A. Menggunakan IP address untuk semua perangkat</label></div>
      <div class="quiz-option"><input type="radio" name="sq2" value="B" id="sq2b"><label for="sq2b">B. Panggilan suara dan data semuanya dikirimkan sebagai paket IP</label></div>
      <div class="quiz-option"><input type="radio" name="sq2" value="C" id="sq2c"><label for="sq2c">C. Menggunakan IPv6 secara eksklusif</label></div>
      <div class="quiz-option"><input type="radio" name="sq2" value="D" id="sq2d"><label for="sq2d">D. Tidak memerlukan SIM Card</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="MME (Mobility Management Entity) adalah komponen yang bertugas melacak lokasi HP, menangani autentikasi, dan mengkoordinasikan proses handover dalam jaringan 4G LTE.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Komponen jaringan 4G yang bertugas melacak lokasi HP pelanggan dan menangani autentikasi adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="sq3" value="A" id="sq3a"><label for="sq3a">A. eNodeB</label></div>
      <div class="quiz-option"><input type="radio" name="sq3" value="B" id="sq3b"><label for="sq3b">B. PGW (Packet Data Network Gateway)</label></div>
      <div class="quiz-option"><input type="radio" name="sq3" value="C" id="sq3c"><label for="sq3c">C. MME (Mobility Management Entity)</label></div>
      <div class="quiz-option"><input type="radio" name="sq3" value="D" id="sq3d"><label for="sq3d">D. HSS (Home Subscriber Server)</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Generasi 2G memperkenalkan transmisi digital (menggantikan analog 1G), SMS (Short Message Service), dan enkripsi panggilan — menjadikannya jauh lebih aman dari 1G.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Generasi jaringan seluler mana yang pertama kali memperkenalkan layanan SMS dan sinyal digital?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="sq4" value="A" id="sq4a"><label for="sq4a">A. 1G</label></div>
      <div class="quiz-option"><input type="radio" name="sq4" value="B" id="sq4b"><label for="sq4b">B. 2G (GSM)</label></div>
      <div class="quiz-option"><input type="radio" name="sq4" value="C" id="sq4c"><label for="sq4c">C. 3G</label></div>
      <div class="quiz-option"><input type="radio" name="sq4" value="D" id="sq4d"><label for="sq4d">D. 4G LTE</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="5G URLLC (Ultra-Reliable Low Latency Communications) dirancang untuk latensi di bawah 1 milidetik — essential untuk operasi bedah robot jarak jauh, kendaraan otonom, dan kontrol industri real-time.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Fitur 5G yang memungkinkan operasi bedah jarak jauh via robot dengan latensi di bawah 1 milidetik disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="sq5" value="A" id="sq5a"><label for="sq5a">A. eMBB (Enhanced Mobile Broadband)</label></div>
      <div class="quiz-option"><input type="radio" name="sq5" value="B" id="sq5b"><label for="sq5b">B. mMTC (Massive Machine Type Communications)</label></div>
      <div class="quiz-option"><input type="radio" name="sq5" value="C" id="sq5c"><label for="sq5c">C. URLLC (Ultra-Reliable Low Latency Communications)</label></div>
      <div class="quiz-option"><input type="radio" name="sq5" value="D" id="sq5d"><label for="sq5d">D. Network Slicing</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-seluler',['B','B','C','B','C']);</script>

<?php include 'footer.php'; ?>
