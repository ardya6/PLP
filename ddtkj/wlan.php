<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-wifi"></i> Capaian Pembelajaran 9</div>
  <h1>Memahami Prinsip Jaringan WLAN</h1>
  <p>Memahami cara kerja Wi-Fi dari mekanisme CSMA/CA, evolusi standar IEEE 802.11, topologi BSS & ESS, keamanan WPA2/WPA3, hingga perencanaan channel jaringan wireless.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-wifi"></i></span> Apa itu WLAN?</h2>
  <p>WLAN (Wireless Local Area Network) atau <strong>Wi-Fi</strong> menggunakan gelombang radio untuk menghantarkan data tanpa kabel. Standar Wi-Fi dikeluarkan oleh <strong>IEEE</strong> dengan nomor seri <strong>802.11</strong>. Wi-Fi menggunakan frekuensi 2.4 GHz, 5 GHz, dan (Wi-Fi 6E keatas) 6 GHz.</p>

  <h3>Medium Udara: Mengapa Wi-Fi Bisa Lambat Saat Ramai?</h3>
  <p>Udara adalah medium <strong>shared (berbagi)</strong> dan <strong>half-duplex</strong>. Satu kanal frekuensi hanya bisa dipakai satu perangkat dalam satu waktu — mirip walkie-talkie. Jika banyak perangkat konek ke satu AP, mereka harus antri bergiliran menggunakan udara.</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-shield-alt"></i> Cara Kerja CSMA/CA (Collision Avoidance)</div>
    <pre>Laptop A ingin kirim data ke AP:

1. [SENSE] Laptop A "mendengarkan" udara:
   "Apakah ada yang sedang mengirim?" → Udara kosong ✅

2. [WAIT] Tunggu DIFS (Distributed IFS = 34μs) + Random Backoff Timer
   (Timer acak untuk hindari 2 laptop mengirim bersamaan)

3. [SEND] Laptop A kirim data ke AP

4. [ACK] AP kirim sinyal ACK:
   "Data dari Laptop A diterima dengan selamat!" ✅

Jika ACK tidak datang (collision terjadi):
   → Laptop A tunggu lebih lama (Exponential Backoff) → coba lagi</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-chart-line"></i></span> Evolusi Standar Wi-Fi</h2>

  <div class="table-wrapper">
    <table>
      <tr><th>Nama</th><th>Standar IEEE</th><th>Tahun</th><th>Frekuensi</th><th>Kecepatan Maks</th><th>Teknologi Utama</th></tr>
      <tr><td>Wi-Fi 4</td><td>802.11n</td><td>2009</td><td>2.4 & 5 GHz</td><td>600 Mbps</td><td><strong>MIMO</strong> — beberapa antena sekaligus meningkatkan throughput</td></tr>
      <tr><td>Wi-Fi 5</td><td>802.11ac</td><td>2014</td><td>5 GHz</td><td>6.9 Gbps</td><td><strong>Beamforming</strong> — sinyal difokuskan ke perangkat spesifik, bukan menyebar ke semua arah</td></tr>
      <tr><td>Wi-Fi 6</td><td>802.11ax</td><td>2019</td><td>2.4 & 5 GHz</td><td>9.6 Gbps</td><td><strong>OFDMA</strong> — 1 transmisi melayani banyak klien sekaligus (solusi "warung kopi ramai")</td></tr>
      <tr><td>Wi-Fi 6E</td><td>802.11ax</td><td>2021</td><td>+ 6 GHz baru</td><td>9.6 Gbps</td><td>Tambahan 1.200 MHz spectrum bersih di 6 GHz — tidak ada interferensi perangkat lama</td></tr>
      <tr><td>Wi-Fi 7</td><td>802.11be</td><td>2024</td><td>2.4, 5, 6 GHz</td><td>46 Gbps</td><td><strong>MLO</strong> (Multi-Link Operation) — konek ke 3 band sekaligus! 4096-QAM, channel 320 MHz</td></tr>
    </table>
  </div>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-graduation-cap"></i> Analogi OFDMA (Wi-Fi 6): Dari Warung ke Supermarket</div>
    <pre>Wi-Fi 4/5 (Satu Kasir):          Wi-Fi 6 OFDMA (Banyak Kasir):
━━━━━━━━━━━━━━━━━━━━━━━          ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
AP melayani 1 device per giliran  AP melayani 8 device SEKALIGUS
Laptop → AP (giliran 1)           Laptop → AP ┐
HP Game → AP (giliran 2)          HP Game → AP ├ Paralel!
Smart TV → AP (giliran 3)         Smart TV → AP┘
IoT Sensor → AP (giliran 4)       IoT Sensor → AP (bandwidth tiny)
...antri terus jika ramai!        Tidak perlu antri!
Latency tinggi saat banyak user   Latency tetap rendah</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-lock"></i></span> Keamanan Wi-Fi & Topologi WLAN</h2>

  <h3>Evolusi Keamanan Wi-Fi</h3>
  <div class="table-wrapper">
    <table>
      <tr><th>Standar</th><th>Enkripsi</th><th>Status</th><th>Catatan</th></tr>
      <tr><td><strong>WEP</strong></td><td>RC4 40-bit</td><td>❌ JANGAN PAKAI</td><td>Bisa di-crack dalam &lt;60 detik dengan tools gratis!</td></tr>
      <tr><td><strong>WPA</strong></td><td>TKIP</td><td>⚠️ Usang</td><td>Masih rentan beberapa serangan</td></tr>
      <tr><td><strong>WPA2-Personal</strong></td><td>AES-CCMP 128-bit</td><td>✅ Masih OK</td><td>Gunakan password kuat (12+ karakter). Rentan dictionary attack jika password lemah.</td></tr>
      <tr><td><strong>WPA2-Enterprise</strong></td><td>AES + 802.1X/RADIUS</td><td>✅✅ Enterprise</td><td>Username/password unik per karyawan. Jika satu bocor, yang lain aman.</td></tr>
      <tr><td><strong>WPA3-Personal</strong></td><td>SAE + AES-256</td><td>🏆 Direkomendasikan</td><td>Tahan brute-force. Forward Secrecy — rekaman lalu tidak bisa didekripsi meski password bocor kemudian.</td></tr>
    </table>
  </div>

  <h3>Topologi WLAN</h3>
  <div class="grid-cards">
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-circle-dot"></i></span><h4>BSS (Basic Service Set)</h4><p>1 Access Point + beberapa klien. BSSID = MAC Address radio AP. SSID = nama Wi-Fi yang terlihat pengguna. Jangkauan 30–50m dalam ruangan.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-expand"></i></span><h4>ESS (Extended Service Set)</h4><p>Banyak AP dengan SSID sama membentuk 1 jaringan besar. Saat jalan di kampus, HP berpindah AP otomatis (Roaming) tanpa putus koneksi dan tanpa ganti nama Wi-Fi.</p></div>
  </div>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-university"></i> Cara Kerja WPA2-Enterprise di Kampus</div>
    <pre>Mahasiswa sambungkan laptop ke Wi-Fi "Kampus-Secure":

1. AP minta Username & Password mahasiswa (bukan password Wi-Fi!)
2. AP teruskan ke RADIUS Server (via protokol EAP/802.1X)
3. RADIUS cek ke Active Directory: "Ada mahasiswa NIM 2024001?"
4. AD konfirmasi: "Ya, aktif semester ini, belum DO" ✅
5. RADIUS generate kunci enkripsi UNIK untuk sesi mahasiswa ini
6. AP dan laptop use kunci unik tersebut untuk enkripsi

Hasil:
• Setiap mahasiswa punya kunci enkripsi berbeda → tidak bisa saling "sadap"
• Jika mahasiswa lulus/DO → hapus dari AD → otomatis tidak bisa konek lagi
• Tidak perlu distribusi password Wi-Fi yang bisa bocor kemana-mana</pre>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-wlan">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Prinsip Jaringan WLAN</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang Wi-Fi, standar IEEE 802.11, keamanan WLAN, dan topologi!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance) adalah mekanisme akses media yang digunakan Wi-Fi untuk mencegah tabrakan data di medium udara yang berbagi.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Metode akses media yang digunakan Wi-Fi untuk mencegah tabrakan data di udara disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="wq1" value="A" id="wq1a"><label for="wq1a">A. CSMA/CD (Collision Detection)</label></div>
      <div class="quiz-option"><input type="radio" name="wq1" value="B" id="wq1b"><label for="wq1b">B. CSMA/CA (Collision Avoidance)</label></div>
      <div class="quiz-option"><input type="radio" name="wq1" value="C" id="wq1c"><label for="wq1c">C. TDMA (Time Division Multiple Access)</label></div>
      <div class="quiz-option"><input type="radio" name="wq1" value="D" id="wq1d"><label for="wq1d">D. OFDMA (Orthogonal Frequency Division)</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Wi-Fi 6 (802.11ax) memperkenalkan OFDMA — teknologi yang memungkinkan satu transmisi melayani banyak klien secara bersamaan, solusi untuk masalah kepadatan pengguna di tempat ramai.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Teknologi Wi-Fi 6 (802.11ax) yang memungkinkan satu Access Point melayani banyak perangkat secara bersamaan (bukan bergantian) disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="wq2" value="A" id="wq2a"><label for="wq2a">A. MIMO</label></div>
      <div class="quiz-option"><input type="radio" name="wq2" value="B" id="wq2b"><label for="wq2b">B. Beamforming</label></div>
      <div class="quiz-option"><input type="radio" name="wq2" value="C" id="wq2c"><label for="wq2c">C. OFDMA</label></div>
      <div class="quiz-option"><input type="radio" name="wq2" value="D" id="wq2d"><label for="wq2d">D. Channel Bonding</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Standar keamanan WEP sudah sangat usang dan bisa di-crack dalam hitungan detik/menit menggunakan tools gratis seperti aircrack-ng. JANGAN gunakan WEP!">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Standar keamanan Wi-Fi mana yang sudah TIDAK AMAN dan dapat di-crack dalam hitungan menit?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="wq3" value="A" id="wq3a"><label for="wq3a">A. WPA3-Personal</label></div>
      <div class="quiz-option"><input type="radio" name="wq3" value="B" id="wq3b"><label for="wq3b">B. WPA2-Enterprise</label></div>
      <div class="quiz-option"><input type="radio" name="wq3" value="C" id="wq3c"><label for="wq3c">C. WEP (Wired Equivalent Privacy)</label></div>
      <div class="quiz-option"><input type="radio" name="wq3" value="D" id="wq3d"><label for="wq3d">D. WPA2-Personal dengan AES</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="ESS (Extended Service Set) terdiri dari beberapa Access Point dengan SSID yang sama, membentuk satu jaringan wireless besar. Saat pengguna berpindah dari satu AP ke AP lain, koneksi tetap terjaga — disebut Roaming.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Di kampus, saat kamu berjalan dari gedung A ke gedung B tanpa putus Wi-Fi dengan nama yang sama — kamu memanfaatkan topologi...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="wq4" value="A" id="wq4a"><label for="wq4a">A. BSS (Basic Service Set)</label></div>
      <div class="quiz-option"><input type="radio" name="wq4" value="B" id="wq4b"><label for="wq4b">B. Ad-Hoc (IBSS)</label></div>
      <div class="quiz-option"><input type="radio" name="wq4" value="C" id="wq4c"><label for="wq4c">C. ESS (Extended Service Set) dengan Roaming</label></div>
      <div class="quiz-option"><input type="radio" name="wq4" value="D" id="wq4d"><label for="wq4d">D. Mesh Network</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Wi-Fi 5 (802.11ac) memperkenalkan Beamforming — teknologi yang memfokuskan sinyal Wi-Fi langsung ke perangkat yang terhubung, bukan menyebar ke segala arah seperti bola lampu biasa.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Teknologi Wi-Fi 5 yang memfokuskan sinyal wireless langsung ke arah perangkat yang terhubung (bukan menyebar ke semua arah) disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="wq5" value="A" id="wq5a"><label for="wq5a">A. MIMO</label></div>
      <div class="quiz-option"><input type="radio" name="wq5" value="B" id="wq5b"><label for="wq5b">B. Beamforming</label></div>
      <div class="quiz-option"><input type="radio" name="wq5" value="C" id="wq5c"><label for="wq5c">C. OFDMA</label></div>
      <div class="quiz-option"><input type="radio" name="wq5" value="D" id="wq5d"><label for="wq5d">D. Channel Bonding</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-wlan',['B','C','C','C','B']);</script>

<?php include 'footer.php'; ?>
