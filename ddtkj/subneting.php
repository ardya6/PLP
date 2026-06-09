<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-diagram-project"></i> Capaian Pembelajaran 10</div>
  <h1>Subnetting, Menerapkan CIDR & VLSM</h1>
  <p>Memahami konsep subnetting, menguasai perhitungan FLSM & VLSM, menerapkan CIDR untuk route summarization — dari teori hingga studi kasus jaringan perusahaan nyata.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-cut"></i></span> Mengapa Subnetting?</h2>
  <p>Subnetting memecah jaringan besar menjadi segmen-segmen lebih kecil dengan manfaat: mengurangi broadcast traffic, meningkatkan keamanan antar departemen, dan mengefisienkan penggunaan IP address.</p>

  <h3>Konsep Dasar: Meminjam Bit dari Host</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-calculator"></i> Cara Kerja Subnetting: Pinjam Bit</div>
    <pre>Jaringan Awal: 192.168.1.0/24
Binary: 11000000.10101000.00000001.00000000
        ┣━━━━━━━━━ 24 bit Network ━━━━━━━━┫┣━━ 8 bit Host ━━┫

Pinjam 2 bit → /26:
        ┣━━━━━━━━━━━━━━━━━━━ 26 bit Network ━━━━━━━━━━━━━━━━━┫┣━ 6 bit ━┫
Hasil: 4 subnet, masing-masing 62 host usable

Rumus:
• Jumlah Subnet    = 2^s  (s = bit yang dipinjam)
• Host per Subnet  = 2^h - 2  (h = bit host tersisa, -2 untuk Network & Broadcast)</pre>
  </div>

  <h3>Magic Number: Cara Cepat Hitung Subnet</h3>
  <p><strong>Magic Number</strong> = 256 − nilai oktet terakhir subnet mask. Kelipatan angka ini adalah Network Address tiap subnet.</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-magic"></i> Contoh Magic Number /26 (Subnet Mask 255.255.255.192)</div>
    <pre>Magic Number = 256 - 192 = 64

Kelipatan 64: 0, 64, 128, 192
Maka Network Address subnet-subnetnya:
• Subnet 1: 192.168.1.0   (Host: .1 – .62,   Broadcast: .63)
• Subnet 2: 192.168.1.64  (Host: .65 – .126, Broadcast: .127)
• Subnet 3: 192.168.1.128 (Host: .129 – .190, Broadcast: .191)
• Subnet 4: 192.168.1.192 (Host: .193 – .254, Broadcast: .255)</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-compress-alt"></i></span> Menerapkan CIDR (Route Summarization)</h2>
  <p>CIDR menghilangkan kekakuan kelas A/B/C. Fungsi utamanya: <strong>meringkas banyak rute menjadi satu entri</strong> di tabel routing — mengurangi beban router internet yang memiliki 900.000+ prefix!</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-compress"></i> Contoh Route Summarization / Supernetting</div>
    <pre>4 jaringan yang ingin diringkas:
  10.1.0.0/24   = 00001010.00000001.00000000.00000000
  10.1.1.0/24   = 00001010.00000001.00000001.00000000
  10.1.2.0/24   = 00001010.00000001.00000010.00000000
  10.1.3.0/24   = 00001010.00000001.00000011.00000000
                   ─────────────────────────────────────
                   Bit identik dari kiri: 22 bit pertama sama!
                   
Summary Route:  10.1.0.0/22
(mencakup 10.1.0.0 s/d 10.1.3.255 — 4 subnet sekaligus dalam 1 entri routing!)

KEUNTUNGAN: 4 baris tabel routing → 1 baris! Router lebih ringan.</pre>
  </div>

  <h3>Aturan Summarization</h3>
  <ul>
    <li>Blok IP harus <strong>berurutan</strong> dan berjumlah <strong>pangkat 2</strong> (2, 4, 8, 16...)</li>
    <li>Tulis semua Network Address dalam biner — hitung bit identik dari kiri</li>
    <li>Jumlah bit identik = prefix summary baru</li>
    <li>Perhatikan "wild IP" yang mungkin ikut tercakup tapi tidak dimiliki</li>
  </ul>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-diagram-project"></i></span> Menerapkan VLSM: Studi Kasus Perusahaan</h2>
  <p>VLSM (Variable Length Subnet Mask) memecah jaringan dengan <strong>ukuran yang berbeda-beda sesuai kebutuhan nyata</strong>. Aturan wajib: <strong>kerjakan selalu dari kebutuhan TERBESAR ke TERKECIL!</strong></p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-building"></i> Soal VLSM: PT. Maju Bersama</div>
    <pre>Jaringan: 172.16.0.0/24
Kebutuhan:
  Dept. Produksi  : 100 host
  Dept. Pemasaran :  50 host  
  Dept. HRD       :  25 host
  Dept. Keuangan  :  10 host
  Link Router A↔B :   2 host

Langkah Pengerjaan (Terbesar → Terkecil):

━━━ LANGKAH 1: Produksi (100 host) ━━━
2^7 = 128 ≥ 102 (100+NA+BC) → Prefix /25, Block = 128
Alokasi: 172.16.0.0 – 172.16.0.127 (Subnet Mask: /25)
Host range: 172.16.0.1 – 172.16.0.126 | Broadcast: 172.16.0.127

━━━ LANGKAH 2: Pemasaran (50 host) ━━━
2^6 = 64 ≥ 52 → Prefix /26, Block = 64
Alokasi: 172.16.0.128 – 172.16.0.191
Host range: 172.16.0.129 – 172.16.0.190 | Broadcast: 172.16.0.191

━━━ LANGKAH 3: HRD (25 host) ━━━
2^5 = 32 ≥ 27 → Prefix /27, Block = 32
Alokasi: 172.16.0.192 – 172.16.0.223
Host range: 172.16.0.193 – 172.16.0.222 | Broadcast: 172.16.0.223

━━━ LANGKAH 4: Keuangan (10 host) ━━━
2^4 = 16 ≥ 12 → Prefix /28, Block = 16
Alokasi: 172.16.0.224 – 172.16.0.239
Host range: 172.16.0.225 – 172.16.0.238 | Broadcast: 172.16.0.239

━━━ LANGKAH 5: Link Router A↔B (2 host) ━━━
2^2 = 4 → 4-2 = 2 host tepat! → Prefix /30, Block = 4
Alokasi: 172.16.0.240 – 172.16.0.243
Router A: 172.16.0.241 | Router B: 172.16.0.242 | BC: 172.16.0.243

SISA IP: 172.16.0.244 – 172.16.0.255 (12 IP cadangan masa depan)</pre>
  </div>

  <div class="table-wrapper">
    <table>
      <tr><th>Subnet</th><th>Prefix</th><th>Host Butuh</th><th>Host Tersedia</th><th>IP Terbuang</th></tr>
      <tr><td>Produksi</td><td>/25</td><td>100</td><td>126</td><td>26</td></tr>
      <tr><td>Pemasaran</td><td>/26</td><td>50</td><td>62</td><td>12</td></tr>
      <tr><td>HRD</td><td>/27</td><td>25</td><td>30</td><td>5</td></tr>
      <tr><td>Keuangan</td><td>/28</td><td>10</td><td>14</td><td>4</td></tr>
      <tr><td>Router Link</td><td>/30</td><td>2</td><td>2</td><td>0</td></tr>
      <tr><td><strong>Total Terbuang</strong></td><td>–</td><td>–</td><td>–</td><td><strong>47 IP saja!</strong></td></tr>
    </table>
  </div>

  <div class="tip-box">
    <strong><i class="fa-solid fa-star"></i> VLSM vs FLSM: Perbandingan Efisiensi</strong>
    <p>Jika menggunakan FLSM /26 (semua sama besar): Total IP terbuang = 170+ IP. Dengan VLSM: hanya 47 IP terbuang + 12 IP cadangan. VLSM menghemat 130+ alamat IP — sangat krusial saat IP sudah langka!</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-subnet">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Subnetting, CIDR & VLSM</h2>
  <p class="quiz-subtitle">Uji kemampuan perhitungan subnetting, CIDR, dan VLSM kamu!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/6</span></div>

  <div class="quiz-question" data-explain="Subnet mask /26 = 255.255.255.192. Magic Number = 256-192 = 64. Setiap subnet berisi 64 IP (termasuk NA dan BC), jadi host usable = 64-2 = 62.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Jaringan 192.168.5.0/26 memiliki berapa host yang dapat digunakan (usable host)?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq1" value="A" id="snq1a"><label for="snq1a">A. 64 host</label></div>
      <div class="quiz-option"><input type="radio" name="snq1" value="B" id="snq1b"><label for="snq1b">B. 30 host</label></div>
      <div class="quiz-option"><input type="radio" name="snq1" value="C" id="snq1c"><label for="snq1c">C. 62 host</label></div>
      <div class="quiz-option"><input type="radio" name="snq1" value="D" id="snq1d"><label for="snq1d">D. 126 host</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Broadcast address adalah alamat terakhir dalam subnet. Untuk 192.168.1.0/26, block = 64. Subnet: .0 s/d .63. Broadcast = .63. Host range: .1 s/d .62.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Apa Broadcast Address dari jaringan 192.168.1.0/26?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq2" value="A" id="snq2a"><label for="snq2a">A. 192.168.1.255</label></div>
      <div class="quiz-option"><input type="radio" name="snq2" value="B" id="snq2b"><label for="snq2b">B. 192.168.1.127</label></div>
      <div class="quiz-option"><input type="radio" name="snq2" value="C" id="snq2c"><label for="snq2c">C. 192.168.1.63</label></div>
      <div class="quiz-option"><input type="radio" name="snq2" value="D" id="snq2d"><label for="snq2d">D. 192.168.1.64</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Anda butuh 30 host. Rumus: 2^h - 2 ≥ 30. 2^5 = 32, 32-2 = 30 ✓. Bit host = 5, maka prefix = 32-5 = /27. Subnet mask: 255.255.255.224.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Sebuah departemen membutuhkan tepat 30 host. Prefix subnet minimum yang mencukupi adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq3" value="A" id="snq3a"><label for="snq3a">A. /24</label></div>
      <div class="quiz-option"><input type="radio" name="snq3" value="B" id="snq3b"><label for="snq3b">B. /25</label></div>
      <div class="quiz-option"><input type="radio" name="snq3" value="C" id="snq3c"><label for="snq3c">C. /27</label></div>
      <div class="quiz-option"><input type="radio" name="snq3" value="D" id="snq3d"><label for="snq3d">D. /28</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="/30 menghasilkan 2^2 = 4 IP total, dikurangi 2 (NA + BC) = 2 host usable. Ini adalah prefix paling efisien untuk point-to-point link antar router yang hanya butuh 2 IP.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Prefix /30 biasanya digunakan untuk koneksi apa dan mengapa?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq4" value="A" id="snq4a"><label for="snq4a">A. Departemen besar karena bisa menampung 30 host</label></div>
      <div class="quiz-option"><input type="radio" name="snq4" value="B" id="snq4b"><label for="snq4b">B. Link Point-to-Point antar router karena hanya butuh 2 host usable</label></div>
      <div class="quiz-option"><input type="radio" name="snq4" value="C" id="snq4c"><label for="snq4c">C. Koneksi server karena IP-nya stabil</label></div>
      <div class="quiz-option"><input type="radio" name="snq4" value="D" id="snq4d"><label for="snq4d">D. Jaringan DMZ karena aman</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="VLSM harus dikerjakan dari kebutuhan host TERBESAR ke TERKECIL. Ini memastikan subnet besar mendapat alamat awal (blok besar) dan tidak ada fragmentasi ruang IP.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Dalam pengerjaan VLSM, urutan pengalokasian yang benar adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq5" value="A" id="snq5a"><label for="snq5a">A. Dari kebutuhan terkecil ke terbesar</label></div>
      <div class="quiz-option"><input type="radio" name="snq5" value="B" id="snq5b"><label for="snq5b">B. Dari kebutuhan terbesar ke terkecil</label></div>
      <div class="quiz-option"><input type="radio" name="snq5" value="C" id="snq5c"><label for="snq5c">C. Urutan tidak berpengaruh</label></div>
      <div class="quiz-option"><input type="radio" name="snq5" value="D" id="snq5d"><label for="snq5d">D. Dari subnet mask terkecil</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="4 blok /24 berurutan (10.1.0.0, 10.1.1.0, 10.1.2.0, 10.1.3.0) dapat diringkas menjadi 10.1.0.0/22. Prefix /22 mencakup 10.1.0.0 s/d 10.1.3.255 (1024 IP = 4 × 256).">
    <div class="quiz-q-num">Soal 6</div>
    <div class="quiz-q-text">Route summarization dari empat jaringan: 10.1.0.0/24, 10.1.1.0/24, 10.1.2.0/24, 10.1.3.0/24 menghasilkan summary route...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="snq6" value="A" id="snq6a"><label for="snq6a">A. 10.1.0.0/23</label></div>
      <div class="quiz-option"><input type="radio" name="snq6" value="B" id="snq6b"><label for="snq6b">B. 10.1.0.0/22</label></div>
      <div class="quiz-option"><input type="radio" name="snq6" value="C" id="snq6c"><label for="snq6c">C. 10.1.0.0/21</label></div>
      <div class="quiz-option"><input type="radio" name="snq6" value="D" id="snq6d"><label for="snq6d">D. 10.0.0.0/24</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-subnet',['C','C','C','B','B','B']);</script>

<?php include 'footer.php'; ?>
