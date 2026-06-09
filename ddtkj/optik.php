<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-wave-square"></i> Capaian Pembelajaran 8</div>
  <h1>Mengenal Media Transmisi Optik</h1>
  <p>Memahami prinsip fisika di balik kabel fiber optik — Total Internal Reflection, perbedaan SMF vs MMF, teknologi DWDM, GPON, serta cara kerja transmisi cahaya berkecepatan tinggi.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-wave-square"></i></span> Apa itu Fiber Optik?</h2>
  <p>Fiber optik mengirimkan data dalam bentuk <strong>pulsa cahaya (foton)</strong> melalui inti kaca silika super murni. Berbeda dengan kabel tembaga yang menggunakan sinyal listrik, cahaya tidak terpengaruh interferensi elektromagnetik dan bisa merambat sangat jauh dengan kecepatan tinggi.</p>

  <div class="grid-cards grid-cards-3">
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-bolt"></i></span><h4>Kecepatan Cahaya</h4><p>Data bergerak ~200.000 km/detik di dalam fiber (2/3 kecepatan cahaya di vakum). Jauh lebih cepat dari sinyal listrik di tembaga.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-shield"></i></span><h4>Imun Interferensi EM</h4><p>Tidak terpengaruh gangguan dari motor listrik, pemancar BTS, atau sambaran petir. Bisa dipasang di sebelah mesin industri.</p></div>
    <div class="info-card"><span class="card-icon"><i class="fa-solid fa-infinity"></i></span><h4>Bandwidth Masif</h4><p>Satu serat optik bisa membawa ratusan terabit data menggunakan teknologi DWDM (ribuan "warna" cahaya sekaligus).</p></div>
  </div>

  <h3>Prinsip Fisika: Total Internal Reflection (TIR)</h3>
  <p>Cahaya merambat di dalam fiber karena prinsip <strong>Pemantulan Internal Total</strong>. Kabel fiber terdiri dari dua lapisan: <strong>Core</strong> (indeks refraksi tinggi) dan <strong>Cladding</strong> (indeks refraksi lebih rendah).</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-lightbulb"></i> Cara Kerja Total Internal Reflection</div>
    <pre>       ╔═══════════════════════════════════════╗ ← Cladding (n₂ rendah)
       ║  Core (n₁ tinggi)                      ║
       ║  ●══════╗  ╔════╗  ╔════╗  ╔════════► ║
       ║  Laser  ╚══╝    ╚══╝    ╚══╝  Penerima ║
       ║  (Sumber)  pantul    pantul  (Detector) ║
       ╚═══════════════════════════════════════╝ ← Cladding

Syarat TIR: Sudut datang > Critical Angle (θc = arcsin(n₂/n₁))
Jika syarat terpenuhi: 100% cahaya dipantulkan kembali ke core
                        → tidak ada energi yang bocor keluar!</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-code-fork"></i></span> Jenis Fiber Optik: SMF vs MMF</h2>
  <div class="compare-box">
    <div class="compare-item good">
      <h5><i class="fa-solid fa-arrow-right"></i> Single-Mode Fiber (SMF)</h5>
      <ul>
        <li>Core sangat sempit: <strong>8–10 mikrometer</strong></li>
        <li>Sumber cahaya: <strong>Laser semikonduktor</strong></li>
        <li>Hanya 1 mode perambatan (lurus sempurna)</li>
        <li>Jangkauan: <strong>40–100+ km</strong> tanpa repeater</li>
        <li>Kapasitas: <strong>100 Gbps–Terabit/detik</strong></li>
        <li>Warna selongsong: Kuning 🟡</li>
        <li>Penggunaan: Kabel laut, Backbone ISP, MAN</li>
      </ul>
    </div>
    <div class="compare-item bad">
      <h5><i class="fa-solid fa-arrows-alt"></i> Multi-Mode Fiber (MMF)</h5>
      <ul>
        <li>Core lebih lebar: <strong>50–62.5 mikrometer</strong></li>
        <li>Sumber cahaya: <strong>LED atau VCSEL</strong></li>
        <li>Banyak mode (zig-zag) → modal dispersion</li>
        <li>Jangkauan: <strong>maksimal 2 km</strong></li>
        <li>Kapasitas: 10–100 Gbps (jarak pendek)</li>
        <li>Warna: Oranye 🟠 (OM2), Aqua 🩵 (OM3/OM4)</li>
        <li>Penggunaan: Data center, kampus, LAN gedung</li>
      </ul>
    </div>
  </div>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-plug"></i> Contoh Penggunaan di Dunia Nyata</div>
    <pre>Infrastruktur Internet Indonesia (Palapa Ring):
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Jakarta ←──[SMF OS2, 1.000 km]──→ Surabaya    (Antar kota, ISP backbone)
Surabaya ←─[SMF OS2, 500 km]───→ Makassar     (Kabel laut antar pulau)
Makassar ←─[SMF OS2, 800 km]───→ Manado       (Palapa Ring Timur)

Data Center Jakarta (intra-DC):
Rack Server A ←─[MMF OM4, 150m]─→ Core Switch  (Antar server, 100 Gbps)
Core Switch ←──[MMF OM4, 300m]──→ Distribution  (Dalam gedung DC)</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-rainbow"></i></span> Teknologi Multiplexing: DWDM & GPON</h2>

  <h3>DWDM: Menggabungkan Banyak "Warna" dalam Satu Serat</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-rainbow"></i> Cara Kerja DWDM (Dense Wavelength Division Multiplexing)</div>
    <pre>Sebelum DWDM: 1 serat = 1 koneksi = 100 Gbps

Dengan DWDM:
Laser Merah   (λ=1530nm) ─── 100 Gbps (Jakarta↔Surabaya) ╗
Laser Kuning  (λ=1531nm) ─── 100 Gbps (Surabaya↔Makassar) ╠═► 1 Serat
Laser Hijau   (λ=1532nm) ─── 100 Gbps (CDN Traffic)        ╣   Optik
...80 "warna" berbeda...                                     ╣   = 8 Tbps!
Laser Biru    (λ=1610nm) ─── 100 Gbps (Backup Link)        ╝

MUX → [1 Serat Optik] → DEMUX → pisah kembali per warna
Tidak ada interferensi antar warna! Setiap λ adalah "jalur" terpisah.</pre>
  </div>

  <h3>GPON: Fiber to the Home (FTTH)</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-home"></i> Cara Kerja GPON (IndiHome/MyRepublic)</div>
    <pre>ISP Jakarta ──[1 serat SMF]──► Optical Splitter (di pinggir jalan)
                                    │
                    ┌───────────────┼───────────────┐
                    │               │               │  ...32 cabang
                    ▼               ▼               ▼
              Rumah No.1      Rumah No.2      Rumah No.32
              ONT/Modem       ONT/Modem       ONT/Modem
              Downlink: 2.5Gbps dibagi 32 pelanggan
              Uplink: 1.25Gbps dibagi 32 pelanggan
              
Optical Splitter = PASIF (tidak butuh listrik!) → biaya operasional murah</pre>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-optik">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Media Transmisi Optik</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang fiber optik, prinsip fisika, dan teknologi transmisi optik!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="Fiber optik mengirimkan data dalam bentuk pulsa cahaya (foton), bukan sinyal listrik seperti kabel tembaga. Inilah yang membuatnya lebih cepat dan imun terhadap interferensi elektromagnetik.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Fiber optik mengirimkan data dalam bentuk...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="oq1" value="A" id="oq1a"><label for="oq1a">A. Sinyal listrik tegangan tinggi</label></div>
      <div class="quiz-option"><input type="radio" name="oq1" value="B" id="oq1b"><label for="oq1b">B. Pulsa cahaya (foton)</label></div>
      <div class="quiz-option"><input type="radio" name="oq1" value="C" id="oq1c"><label for="oq1c">C. Gelombang radio inframerah</label></div>
      <div class="quiz-option"><input type="radio" name="oq1" value="D" id="oq1d"><label for="oq1d">D. Sinyal ultrasonik</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Prinsip yang memungkinkan cahaya merambat di dalam fiber optik adalah Total Internal Reflection (Pemantulan Internal Total) — cahaya memantul bolak-balik di dalam core tanpa bocor keluar ke cladding.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Prinsip fisika yang memungkinkan cahaya merambat di dalam kabel fiber optik tanpa bocor keluar disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="oq2" value="A" id="oq2a"><label for="oq2a">A. Efek Doppler</label></div>
      <div class="quiz-option"><input type="radio" name="oq2" value="B" id="oq2b"><label for="oq2b">B. Total Internal Reflection (Pemantulan Internal Total)</label></div>
      <div class="quiz-option"><input type="radio" name="oq2" value="C" id="oq2c"><label for="oq2c">C. Difraksi Gelombang</label></div>
      <div class="quiz-option"><input type="radio" name="oq2" value="D" id="oq2d"><label for="oq2d">D. Pembiasan Fresnel</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Single-Mode Fiber (SMF) memiliki core hanya 8–10 mikrometer dengan sumber laser, memungkinkan jangkauan 40–100+ km. Digunakan untuk backbone internet dan kabel laut antar pulau.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Jenis fiber optik yang cocok digunakan untuk koneksi backbone ISP antar kota dengan jarak ratusan kilometer adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="oq3" value="A" id="oq3a"><label for="oq3a">A. Multi-Mode Fiber (MMF) OM4</label></div>
      <div class="quiz-option"><input type="radio" name="oq3" value="B" id="oq3b"><label for="oq3b">B. Multi-Mode Fiber (MMF) OM2</label></div>
      <div class="quiz-option"><input type="radio" name="oq3" value="C" id="oq3c"><label for="oq3c">C. Single-Mode Fiber (SMF) OS2</label></div>
      <div class="quiz-option"><input type="radio" name="oq3" value="D" id="oq3d"><label for="oq3d">D. Kabel Coaxial RG6</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="GPON (Gigabit Passive Optical Network) adalah teknologi FTTH yang menggunakan Optical Splitter pasif (tidak butuh listrik) untuk membagi satu serat dari ISP menjadi hingga 128 cabang ke pelanggan.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Teknologi fiber optik yang digunakan untuk layanan IndiHome (Fiber to the Home) di Indonesia adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="oq4" value="A" id="oq4a"><label for="oq4a">A. DWDM (Dense WDM)</label></div>
      <div class="quiz-option"><input type="radio" name="oq4" value="B" id="oq4b"><label for="oq4b">B. GPON (Gigabit Passive Optical Network)</label></div>
      <div class="quiz-option"><input type="radio" name="oq4" value="C" id="oq4c"><label for="oq4c">C. SONET/SDH</label></div>
      <div class="quiz-option"><input type="radio" name="oq4" value="D" id="oq4d"><label for="oq4d">D. Ethernet over Fiber</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="DWDM (Dense Wavelength Division Multiplexing) menggabungkan puluhan hingga 160+ panjang gelombang laser berbeda dalam satu serat optik, masing-masing membawa data 100 Gbps, sehingga total kapasitas satu serat bisa mencapai puluhan Terabit per detik.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Teknologi yang memungkinkan satu serat optik membawa 160 saluran data berbeda secara bersamaan menggunakan "warna" cahaya yang berbeda disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="oq5" value="A" id="oq5a"><label for="oq5a">A. GPON</label></div>
      <div class="quiz-option"><input type="radio" name="oq5" value="B" id="oq5b"><label for="oq5b">B. EDFA (Erbium-Doped Fiber Amplifier)</label></div>
      <div class="quiz-option"><input type="radio" name="oq5" value="C" id="oq5c"><label for="oq5c">C. DWDM (Dense Wavelength Division Multiplexing)</label></div>
      <div class="quiz-option"><input type="radio" name="oq5" value="D" id="oq5d"><label for="oq5d">D. MIMO</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-optik',['B','B','C','B','C']);</script>

<?php include 'footer.php'; ?>
