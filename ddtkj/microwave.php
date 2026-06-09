<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-satellite-dish"></i> Capaian Pembelajaran 6</div>
  <h1>Prinsip Komunikasi Microwave & MW Link</h1>
  <p>Memahami cara kerja transmisi gelombang mikro Point-to-Point, teknologi MW Link sebagai backhaul jaringan seluler, dan teknik mengatasi tantangan fisika di udara terbuka.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-satellite-dish"></i></span> Apa itu Komunikasi Microwave?</h2>
  <p>Komunikasi microwave menggunakan <strong>gelombang radio frekuensi tinggi (1–100 GHz)</strong> untuk mengirimkan data dalam bentuk sinar lurus <em>Point-to-Point</em> antar dua antena. Ini adalah teknologi utama yang digunakan sebagai <strong>backhaul</strong> — menghubungkan menara BTS ke jaringan inti operator.</p>

  <h3>Syarat Utama: Line-of-Sight (LoS)</h3>
  <p>Gelombang mikro bergerak seperti cahaya — harus ada garis pandang langsung antara dua antena. Penghalang apapun (gedung, bukit, pohon) akan memblokir atau melemahkan sinyal secara signifikan.</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-tower-broadcast"></i> Contoh MW Link: Backhaul BTS ke BSC</div>
    <pre>Konfigurasi Tipikal MW Link di Indonesia:
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Menara BTS Ciawi (ketinggian antena: 40m)
    ↕ MW Link 18 GHz, jarak 8 km, kapasitas 400 Mbps
Gedung BSC Bogor (antena di rooftop lantai 20)
    ↕ Fiber Optik (Ring)
Data Center Jakarta

Parameter Planning:
• Frekuensi    : 18 GHz (Ku-Band)
• Modulasi     : 256-QAM (cuaca bagus) / QPSK (hujan)
• Antena Dish  : Diameter 0.6m (gain ~34 dBi)
• Link Budget  : Sinyal Tx - Redaman Path - Margin Hujan ≥ RSL min</pre>
  </div>

  <h3>Zona Fresnel: Lebih dari Sekedar Garis Lurus</h3>
  <p>Sinyal microwave membutuhkan ruang berbentuk <strong>elipsoid (cerutu 3D)</strong> antara dua antena yang disebut Zona Fresnel. Jika 60% zona ini terhalang benda, interferensi destruktif akan menurunkan kualitas link secara drastis.</p>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-wave-square"></i></span> Spektrum Frekuensi & Modulasi</h2>

  <div class="table-wrapper">
    <table>
      <tr><th>Band</th><th>Frekuensi</th><th>Jangkauan</th><th>Ketahanan Hujan</th><th>Kapasitas</th><th>Penggunaan</th></tr>
      <tr><td><strong>C-Band</strong></td><td>4–8 GHz</td><td>30–50 km</td><td>⭐⭐⭐⭐⭐</td><td>Sedang</td><td>Backbone rural, kepulauan</td></tr>
      <tr><td><strong>Ku-Band</strong></td><td>12–18 GHz</td><td>10–20 km</td><td>⭐⭐⭐</td><td>Tinggi (Gbps)</td><td>Backhaul 4G perkotaan</td></tr>
      <tr><td><strong>Ka-Band</strong></td><td>26–40 GHz</td><td>3–8 km</td><td>⭐⭐</td><td>Sangat Tinggi</td><td>Backhaul 5G urban</td></tr>
      <tr><td><strong>E-Band</strong></td><td>70–80 GHz</td><td>1–3 km</td><td>⭐</td><td>Ultra (10 Gbps+)</td><td>Antar gedung data center</td></tr>
    </table>
  </div>

  <h3>Teknik Modulasi QAM</h3>
  <div class="grid-cards grid-cards-3">
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-signal"></i></span><h4>QPSK (4 simbol)</h4><p>2 bit per simbol. Paling robust — tahan kondisi sinyal buruk. Dipakai saat hujan deras atau link degradasi.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-chart-bar"></i></span><h4>64-QAM / 256-QAM</h4><p>6–8 bit per simbol. Kapasitas lebih tinggi, butuh sinyal lebih bersih. Standar kondisi normal.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-rocket"></i></span><h4>4096-QAM</h4><p>12 bit per simbol. Kondisi sinyal sangat bagus. Kapasitas hingga 10 Gbps+ pada satu link radio!</p></div>
  </div>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-cloud-rain"></i> Cara Kerja ACM (Adaptive Coding & Modulation)</div>
    <pre>Status Cuaca   →  Modulasi     →  Kapasitas Link
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Cerah ☀️      →  4096-QAM    →  10 Gbps  ✅ Optimal
Berawan ⛅     →  1024-QAM    →   5 Gbps  ✅ Bagus  
Gerimis 🌦    →  256-QAM     →   2 Gbps  ⚠️ Menurun
Hujan 🌧      →  64-QAM      → 500 Mbps  ⚠️ Degradasi
Badai ⛈      →  QPSK        → 100 Mbps  🔴 Minimal
                ↑ Radio otomatis menyesuaikan secara real-time!
                Koneksi tidak putus, hanya melambat saat badai.</pre>
  </div>

  <h3>Polarisasi & XPIC: Menggandakan Kapasitas</h3>
  <p>Gelombang radio bisa dipolarisasi secara <strong>Horizontal (H)</strong> atau <strong>Vertikal (V)</strong>. Dengan teknik <strong>XPIC (Cross-Polar Interference Cancellation)</strong>, satu link bisa menggunakan kedua polarisasi sekaligus pada frekuensi yang sama — kapasitas efektif berlipat dua!</p>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-microwave">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Komunikasi Microwave & MW Link</h2>
  <p class="quiz-subtitle">Uji pemahaman tentang prinsip gelombang mikro, frekuensi, modulasi, dan MW Link!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="Komunikasi microwave membutuhkan Line-of-Sight (LoS) — antena pengirim dan penerima harus saling melihat secara langsung tanpa penghalang signifikan di antara keduanya.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Syarat utama agar komunikasi microwave Point-to-Point dapat berfungsi adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="mq1" value="A" id="mq1a"><label for="mq1a">A. Jarak antar antena harus kurang dari 1 km</label></div>
      <div class="quiz-option"><input type="radio" name="mq1" value="B" id="mq1b"><label for="mq1b">B. Harus ada Line-of-Sight (garis pandang langsung) antar antena</label></div>
      <div class="quiz-option"><input type="radio" name="mq1" value="C" id="mq1c"><label for="mq1c">C. Membutuhkan relay setiap 500 meter</label></div>
      <div class="quiz-option"><input type="radio" name="mq1" value="D" id="mq1d"><label for="mq1d">D. Antena harus menghadap ke atas (arah satelit)</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="E-Band (70–80 GHz) memiliki bandwidth yang sangat besar untuk kapasitas ultra-tinggi, tetapi jangkauan sangat terbatas (1–3 km) karena sangat sensitif terhadap redaman hujan.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Band frekuensi microwave mana yang mampu mencapai kapasitas 10 Gbps+ antar gedung data center berdekatan?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="mq2" value="A" id="mq2a"><label for="mq2a">A. C-Band (4–8 GHz)</label></div>
      <div class="quiz-option"><input type="radio" name="mq2" value="B" id="mq2b"><label for="mq2b">B. Ku-Band (12–18 GHz)</label></div>
      <div class="quiz-option"><input type="radio" name="mq2" value="C" id="mq2c"><label for="mq2c">C. E-Band (70–80 GHz)</label></div>
      <div class="quiz-option"><input type="radio" name="mq2" value="D" id="mq2d"><label for="mq2d">D. L-Band (1–2 GHz)</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="ACM (Adaptive Coding & Modulation) secara otomatis menurunkan modulasi (dari 4096-QAM ke QPSK) saat kondisi sinyal memburuk akibat hujan, sehingga koneksi tidak putus meski kapasitas berkurang.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Teknologi yang secara otomatis menurunkan kecepatan modulasi microwave saat hujan deras agar link tidak putus disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="mq3" value="A" id="mq3a"><label for="mq3a">A. MIMO (Multiple Input Multiple Output)</label></div>
      <div class="quiz-option"><input type="radio" name="mq3" value="B" id="mq3b"><label for="mq3b">B. XPIC (Cross-Polar Interference Cancellation)</label></div>
      <div class="quiz-option"><input type="radio" name="mq3" value="C" id="mq3c"><label for="mq3c">C. ACM (Adaptive Coding & Modulation)</label></div>
      <div class="quiz-option"><input type="radio" name="mq3" value="D" id="mq3d"><label for="mq3d">D. OFDMA (Orthogonal Frequency Division Multiple Access)</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="MW Link digunakan sebagai backhaul — menghubungkan menara BTS/eNodeB ke jaringan inti operator (BSC/RNC/Core Network) melalui koneksi nirkabel microwave Point-to-Point.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Dalam infrastruktur telekomunikasi, MW Link (Microwave Link) paling umum digunakan sebagai...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="mq4" value="A" id="mq4a"><label for="mq4a">A. Pengganti Wi-Fi di dalam gedung</label></div>
      <div class="quiz-option"><input type="radio" name="mq4" value="B" id="mq4b"><label for="mq4b">B. Backhaul — menghubungkan menara BTS ke jaringan inti operator</label></div>
      <div class="quiz-option"><input type="radio" name="mq4" value="C" id="mq4c"><label for="mq4c">C. Koneksi antara HP dan menara BTS</label></div>
      <div class="quiz-option"><input type="radio" name="mq4" value="D" id="mq4d"><label for="mq4d">D. Transmisi data antar satelit</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="4096-QAM memodulasikan 12 bit per simbol (2^12 = 4096 kondisi berbeda), sehingga menghasilkan kapasitas yang sangat tinggi — tetapi membutuhkan kondisi sinyal (SNR) yang sangat bersih.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Modulasi 4096-QAM mampu membawa berapa bit per simbol?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="mq5" value="A" id="mq5a"><label for="mq5a">A. 4 bit per simbol</label></div>
      <div class="quiz-option"><input type="radio" name="mq5" value="B" id="mq5b"><label for="mq5b">B. 8 bit per simbol</label></div>
      <div class="quiz-option"><input type="radio" name="mq5" value="C" id="mq5c"><label for="mq5c">C. 10 bit per simbol</label></div>
      <div class="quiz-option"><input type="radio" name="mq5" value="D" id="mq5d"><label for="mq5d">D. 12 bit per simbol</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-microwave',['B','C','C','B','D']);</script>

<?php include 'footer.php'; ?>
