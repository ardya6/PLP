<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-satellite"></i> Capaian Pembelajaran 7</div>
  <h1>Teknologi Jaringan Satelit Berbasis IP</h1>
  <p>Memahami cara kerja komunikasi satelit — dari orbit GEO, MEO, LEO, arsitektur VSAT IP, hingga revolusi konstelasi Starlink yang mengubah akses internet global.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-satellite"></i></span> Prinsip Dasar Komunikasi Satelit</h2>
  <p>Satelit berfungsi sebagai <strong>Repeater Raksasa (Transponder)</strong> di angkasa. Stasiun bumi mengirim sinyal ke satelit (<strong>Uplink</strong>), satelit memperkuat dan mengubah frekuensi, lalu memancarkan kembali ke darat (<strong>Downlink</strong>) ke lokasi yang berbeda.</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-route"></i> Cara Kerja VSAT IP: Kantor di Papua Akses Internet</div>
    <pre>Kantor Papua (Remote VSAT):
  1. Komputer kirim request HTTP ke IP Server
  2. Modem Satelit modulasi data → Sinyal IF
  3. BUC naikkan frekuensi → Sinyal Ku-Band 14 GHz
  4. Antena parabola pancarkan ke satelit (UPLINK) ↑
     Jarak: 35.786 km (GEO) → delay ~250ms

Satelit (GEO - Nusantara Satu):
  5. Transponder terima sinyal, perkuat, ubah frekuensi
  6. Pancarkan kembali ke bumi (DOWNLINK) ↓ 12 GHz

Hub Station Jakarta:
  7. LNB terima sinyal downlink
  8. Modem demodulasi → Paket IP normal
  9. Teruskan ke internet melalui Fiber Optik
  10. Response balik via satelit lagi (total RTT: 500-700ms)</pre>
  </div>

  <h3>Perbandingan Orbit GEO vs MEO vs LEO</h3>
  <div class="table-wrapper">
    <table>
      <tr><th>Parameter</th><th>GEO (35.786 km)</th><th>MEO (2.000–20.000 km)</th><th>LEO (300–2.000 km)</th></tr>
      <tr><td><strong>Latensi</strong></td><td>500–700 ms ❌</td><td>70–150 ms ✅</td><td>20–50 ms ✅✅</td></tr>
      <tr><td><strong>Cakupan/satelit</strong></td><td>1/3 permukaan bumi 🌍</td><td>Menengah</td><td>Area kecil — butuh ribuan satelit</td></tr>
      <tr><td><strong>Jumlah Satelit</strong></td><td>3 satelit cukup global</td><td>~30 satelit</td><td>Ribuan (konstelasi)</td></tr>
      <tr><td><strong>Antena Darat</strong></td><td>Fixed/diam (murah)</td><td>Perlu tracking</td><td>Phased Array aktif</td></tr>
      <tr><td><strong>Biaya Satelit</strong></td><td>$100–400 Juta/unit</td><td>$30–100 Juta</td><td>$500 ribu–$5 Juta/unit</td></tr>
      <tr><td><strong>Contoh</strong></td><td>Nusantara Satu, Palapa D</td><td>GPS, O3b</td><td>Starlink, OneWeb</td></tr>
    </table>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-circle-dot"></i></span> Komponen VSAT IP</h2>
  <div class="grid-cards">
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-circle"></i></span><h4>Antena Parabola</h4><p>Reflektor yang memfokuskan sinyal lemah dari 35.000+ km ke satu titik (focal point). Diameter 0.75m–2.4m. Semakin besar = semakin sensitif.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-arrow-up"></i></span><h4>BUC (Block Up Converter)</h4><p>Transmitter outdoor yang menaikkan sinyal IF dari modem (950–1750 MHz) ke frekuensi tinggi Ku-Band (14 GHz) untuk dikirim ke satelit. Kekuatan dalam Watt.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-arrow-down"></i></span><h4>LNB (Low Noise Block)</h4><p>Receiver sensitif di focal point antena. Menangkap sinyal sangat lemah dari satelit (sekitar -130 dBm!) dan menurunkan ke frekuensi IF untuk diteruskan ke modem.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-microchip"></i></span><h4>Modem Satelit (IDU)</h4><p>Mengubah paket IP dari router ke modulasi satelit (DVB-S2X) dan sebaliknya. Mendukung ACM untuk efisiensi maksimal saat cuaca berubah.</p></div>
  </div>

  <h3>Starlink: Revolusi LEO Broadband</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-star"></i> Perbedaan GEO Tradisional vs Starlink LEO</div>
    <pre>GEO Tradisional (Nusantara Satu):           Starlink (LEO Constellation):
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━             ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
• 1 satelit @ 35.786 km                    • 5.000+ satelit @ ~550 km
• Biaya $200 Juta/satelit                  • Biaya ~$1 Juta/satelit
• Antena parabola fixed (murah)            • Phased Array aktif (lacak satelit)
• Latensi 500–700 ms                       • Latensi 20–40 ms ✅
• Kapasitas: ~100 Gbps total               • Kapasitas: Terabit total ✅
• Wilayah Indonesia timur terjangkau       • Seluruh dunia termasuk lautan ✅
• Sudah ada 10+ tahun                      • Beroperasi sejak 2021 di Indonesia</pre>
  </div>

  <div class="highlight-box">
    <strong><i class="fa-solid fa-globe"></i> Dampak Starlink untuk Daerah Terpencil Indonesia</strong>
    <p>Desa di Papua, Maluku, atau Kalimantan terdalam kini bisa mendapat koneksi internet <strong>100–300 Mbps dengan latensi 20–40 ms</strong> hanya dengan memasang terminal Starlink (disebut "Dishy") di atap. Tidak perlu kabel, tidak perlu tower BTS. Terminal otomatis melacak satelit yang melintas menggunakan ribuan antena mikro aktif (Phased Array) tanpa bagian bergerak secara mekanis.</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-satelit">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Teknologi Satelit Berbasis IP</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang orbit satelit, VSAT IP, dan teknologi komunikasi satelit!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="Satelit GEO berada di ketinggian ~35.786 km di atas ekuator dengan periode orbit 24 jam (sama dengan rotasi bumi), sehingga tampak diam di langit dari bumi.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Mengapa satelit GEO (Geostationary) tampak selalu diam di titik yang sama di langit?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="stq1" value="A" id="stq1a"><label for="stq1a">A. Karena bergerak berlawanan arah dengan rotasi bumi</label></div>
      <div class="quiz-option"><input type="radio" name="stq1" value="B" id="stq1b"><label for="stq1b">B. Karena periode orbitnya sama dengan rotasi bumi (24 jam)</label></div>
      <div class="quiz-option"><input type="radio" name="stq1" value="C" id="stq1c"><label for="stq1c">C. Karena terhubung ke bumi dengan kabel</label></div>
      <div class="quiz-option"><input type="radio" name="stq1" value="D" id="stq1d"><label for="stq1d">D. Karena berada di titik gravitasi nol</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="BUC (Block Up Converter) bertugas menaikkan frekuensi sinyal IF dari modem satelit ke frekuensi tinggi (misalnya Ku-Band 14 GHz) untuk dikirimkan ke satelit (Uplink).">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Dalam sistem VSAT, komponen yang bertugas menaikkan sinyal IF ke frekuensi tinggi untuk dikirim ke satelit disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="stq2" value="A" id="stq2a"><label for="stq2a">A. LNB (Low Noise Block)</label></div>
      <div class="quiz-option"><input type="radio" name="stq2" value="B" id="stq2b"><label for="stq2b">B. Modem Satelit (IDU)</label></div>
      <div class="quiz-option"><input type="radio" name="stq2" value="C" id="stq2c"><label for="stq2c">C. BUC (Block Up Converter)</label></div>
      <div class="quiz-option"><input type="radio" name="stq2" value="D" id="stq2d"><label for="stq2d">D. Antena Parabola</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Satelit LEO (Low Earth Orbit) seperti Starlink memiliki latensi rendah (20–50ms) karena berada di orbit rendah (~550 km), berbeda dengan GEO yang latensinya 500–700ms karena jaraknya 35.786 km.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Mengapa Starlink (LEO) memiliki latensi jauh lebih rendah dibanding satelit GEO tradisional?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="stq3" value="A" id="stq3a"><label for="stq3a">A. Starlink menggunakan teknologi enkripsi yang lebih cepat</label></div>
      <div class="quiz-option"><input type="radio" name="stq3" value="B" id="stq3b"><label for="stq3b">B. Satelit LEO berada di orbit yang jauh lebih rendah (~550 km vs 35.786 km)</label></div>
      <div class="quiz-option"><input type="radio" name="stq3" value="C" id="stq3c"><label for="stq3c">C. Starlink menggunakan frekuensi lebih tinggi</label></div>
      <div class="quiz-option"><input type="radio" name="stq3" value="D" id="stq3d"><label for="stq3d">D. Starlink lebih besar dari satelit GEO</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Sinyal yang dikirim dari bumi ke satelit disebut Uplink, sedangkan sinyal yang dipancarkan dari satelit kembali ke bumi disebut Downlink. Frekuensi keduanya dibuat berbeda agar tidak saling mengganggu.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Dalam komunikasi satelit, sinyal yang dikirim dari bumi ke satelit disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="stq4" value="A" id="stq4a"><label for="stq4a">A. Downlink</label></div>
      <div class="quiz-option"><input type="radio" name="stq4" value="B" id="stq4b"><label for="stq4b">B. Sidelink</label></div>
      <div class="quiz-option"><input type="radio" name="stq4" value="C" id="stq4c"><label for="stq4c">C. Crosslink</label></div>
      <div class="quiz-option"><input type="radio" name="stq4" value="D" id="stq4d"><label for="stq4d">D. Uplink</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Satelit GEO hanya membutuhkan 3 satelit untuk mencakup hampir seluruh permukaan bumi (kecuali kutub), karena satu satelit dapat 'melihat' sekitar 1/3 permukaan bumi dari ketinggian 35.786 km.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Berapa satelit GEO yang dibutuhkan untuk mencakup hampir seluruh permukaan bumi?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="stq5" value="A" id="stq5a"><label for="stq5a">A. 1 satelit</label></div>
      <div class="quiz-option"><input type="radio" name="stq5" value="B" id="stq5b"><label for="stq5b">B. 3 satelit</label></div>
      <div class="quiz-option"><input type="radio" name="stq5" value="C" id="stq5c"><label for="stq5c">C. 12 satelit</label></div>
      <div class="quiz-option"><input type="radio" name="stq5" value="D" id="stq5d"><label for="stq5d">D. 5.000 satelit</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-satelit',['B','C','B','D','B']);</script>

<?php include 'footer.php'; ?>
