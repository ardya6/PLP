<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-map-location-dot"></i> Capaian Pembelajaran 1</div>
  <h1>Memahami Pengalamatan IP: IPv4 & IPv6</h1>
  <p>Menguasai konsep IP Address sebagai identitas logis perangkat jaringan — struktur biner, kelas, jenis komunikasi, perbedaan IPv4 dan IPv6, serta cara membacanya.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-map-location-dot"></i></span> Pengalamatan IPv4</h2>
  <p>IP Address adalah <strong>identitas logis</strong> setiap perangkat dalam jaringan. Berbeda dengan MAC Address yang bersifat fisik dan permanen, IP Address bisa berubah dan diatur sesuai kebutuhan.</p>

  <h3>Struktur IPv4</h3>
  <p>IPv4 terdiri dari <strong>32-bit biner</strong>, dibagi menjadi 4 oktet (masing-masing 8-bit), direpresentasikan dalam format <strong>Dotted Decimal Notation</strong>.</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-calculator"></i> Contoh Konversi Biner ke Desimal</div>
    <pre>IP Biner  : 11000000 . 10101000 . 00000001 . 00000001
             ↓           ↓           ↓           ↓
Nilai Bit : 128+64    128+32+8    0+1         0+1
             ↓           ↓           ↓           ↓
IP Desimal:   192    .   168    .    1     .    1

Hasilnya: 192.168.1.1  (Ini alamat umum router di rumah!)</pre>
  </div>

  <h3>Kelas Alamat IPv4</h3>
  <div class="table-wrapper">
    <table>
      <tr><th>Kelas</th><th>Rentang Pertama</th><th>Subnet Mask Default</th><th>Jumlah Host</th><th>Penggunaan</th></tr>
      <tr><td><strong>A</strong></td><td>1–126</td><td>/8 = 255.0.0.0</td><td>~16,7 Juta</td><td>ISP besar, Korporasi multinasional</td></tr>
      <tr><td><strong>B</strong></td><td>128–191</td><td>/16 = 255.255.0.0</td><td>~65.534</td><td>Universitas, Perusahaan menengah besar</td></tr>
      <tr><td><strong>C</strong></td><td>192–223</td><td>/24 = 255.255.255.0</td><td>254</td><td>Kantor kecil, Jaringan rumahan</td></tr>
      <tr><td><strong>D</strong></td><td>224–239</td><td>–</td><td>–</td><td>Multicast (IPTV, Video Conference)</td></tr>
      <tr><td><strong>E</strong></td><td>240–255</td><td>–</td><td>–</td><td>Eksperimental, tidak dipakai publik</td></tr>
    </table>
  </div>

  <h3>IP Publik vs IP Privat</h3>
  <div class="compare-box">
    <div class="compare-item good">
      <h5><i class="fa-solid fa-globe"></i> IP Publik</h5>
      <ul>
        <li>Unik di seluruh dunia</li>
        <li>Dapat diakses dari internet global</li>
        <li>Diberikan oleh ISP (berbayar)</li>
        <li>Contoh: <code>36.82.30.1</code></li>
      </ul>
    </div>
    <div class="compare-item bad">
      <h5><i class="fa-solid fa-house-laptop"></i> IP Privat (RFC 1918)</h5>
      <ul>
        <li>Hanya berlaku di jaringan lokal</li>
        <li>Tidak bisa akses internet langsung (butuh NAT)</li>
        <li>Gratis, bebas dipakai ulang</li>
        <li>Rentang: <code>10.x.x.x</code>, <code>172.16-31.x.x</code>, <code>192.168.x.x</code></li>
      </ul>
    </div>
  </div>

  <h3>Tiga Jenis Komunikasi IP</h3>
  <div class="grid-cards grid-cards-3">
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-arrows-to-dot"></i></span>
      <h4>Unicast (1 ke 1)</h4>
      <p>Paket dikirim dari satu pengirim ke <strong>satu tujuan spesifik</strong>. Paling umum: browsing, email, download file. Efisien karena tidak membebani host lain.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-bullhorn"></i></span>
      <h4>Broadcast (1 ke Semua)</h4>
      <p>Paket dikirim ke <strong>semua host dalam jaringan lokal</strong>. IP tujuan selalu <code>x.x.x.255</code>. Dipakai DHCP Discover dan ARP. Tidak bisa melewati router!</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-users"></i></span>
      <h4>Multicast (1 ke Banyak)</h4>
      <p>Paket dikirim ke <strong>sekelompok host yang mendaftar</strong> ke grup tertentu (kelas D: 224–239.x.x.x). Contoh: IPTV, Zoom Meeting, routing protocol OSPF.</p>
    </div>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-rocket"></i></span> Pengalamatan IPv6</h2>
  <p>IPv4 hanya menyediakan ~4,3 miliar alamat — hampir habis! Era IoT (kulkas, lampu, kamera, sensor semuanya butuh IP) memaksa dunia beralih ke <strong>IPv6 dengan kapasitas 128-bit</strong> yang menyediakan 3,4 × 10³⁸ alamat — nyaris tak terbatas.</p>

  <h3>Cara Membaca dan Menyingkat Alamat IPv6</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-compress"></i> Contoh Penyingkatan IPv6</div>
    <pre>Alamat penuh:   2001:0db8:0000:0000:0000:8a2e:0370:7334

Aturan 1 (hapus nol di depan setiap grup):
                2001:db8:0:0:0:8a2e:370:7334

Aturan 2 (ganti satu blok nol berurutan dengan ::):
                2001:db8::8a2e:370:7334

CATATAN: :: hanya boleh digunakan SEKALI dalam satu alamat!</pre>
  </div>

  <h3>Keunggulan IPv6 dibanding IPv4</h3>
  <div class="table-wrapper">
    <table>
      <tr><th>Fitur</th><th>IPv4</th><th>IPv6</th></tr>
      <tr><td><strong>Panjang Alamat</strong></td><td>32-bit (~4,3 miliar)</td><td>128-bit (~3,4 × 10³⁸)</td></tr>
      <tr><td><strong>Format</strong></td><td>Desimal bertitik: <code>192.168.1.1</code></td><td>Heksadesimal titik dua: <code>2001:db8::1</code></td></tr>
      <tr><td><strong>NAT</strong></td><td>Diperlukan (IP Privat)</td><td>Tidak perlu — setiap device dapat IP Global</td></tr>
      <tr><td><strong>Konfigurasi IP</strong></td><td>Manual atau DHCP</td><td>SLAAC — otomatis tanpa server</td></tr>
      <tr><td><strong>Keamanan</strong></td><td>IPSec opsional</td><td>IPSec terintegrasi (wajib)</td></tr>
      <tr><td><strong>Broadcast</strong></td><td>Ada (membebani jaringan)</td><td>Tidak ada — diganti Multicast & Anycast</td></tr>
      <tr><td><strong>Header</strong></td><td>Kompleks (14 field, variabel)</td><td>Sederhana (8 field tetap) — router lebih cepat</td></tr>
    </table>
  </div>

  <div class="highlight-box">
    <strong><i class="fa-solid fa-info-circle"></i> Teknik Transisi IPv4 ke IPv6</strong>
    <p><strong>Dual-Stack:</strong> Perangkat menjalankan IPv4 dan IPv6 bersamaan (paling umum dipakai ISP saat ini). <strong>Tunneling (6in4):</strong> Paket IPv6 dibungkus dalam paket IPv4 agar bisa melewati jaringan IPv4. <strong>NAT64:</strong> Gateway menerjemahkan paket IPv6 ke IPv4 secara otomatis untuk mengakses server lama yang hanya mendukung IPv4.</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-ip">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Pengalamatan IP</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang IPv4, IPv6, kelas IP, dan jenis komunikasi!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="192.168.x.x adalah rentang IP Private Kelas C (RFC 1918). IP privat digunakan di jaringan lokal dan tidak dapat diakses langsung dari internet tanpa NAT.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">IP Address <code>192.168.10.5</code> termasuk dalam kategori...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="iq1" value="A" id="iq1a"><label for="iq1a">A. IP Publik Kelas B</label></div>
      <div class="quiz-option"><input type="radio" name="iq1" value="B" id="iq1b"><label for="iq1b">B. IP Privat Kelas C</label></div>
      <div class="quiz-option"><input type="radio" name="iq1" value="C" id="iq1c"><label for="iq1c">C. IP Multicast Kelas D</label></div>
      <div class="quiz-option"><input type="radio" name="iq1" value="D" id="iq1d"><label for="iq1d">D. IP Loopback</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Subnet Mask default untuk kelas C adalah /24 atau 255.255.255.0. Kelas A menggunakan /8, Kelas B menggunakan /16.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Berapakah subnet mask default (dalam notasi CIDR) untuk jaringan Kelas C?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="iq2" value="A" id="iq2a"><label for="iq2a">A. /8</label></div>
      <div class="quiz-option"><input type="radio" name="iq2" value="B" id="iq2b"><label for="iq2b">B. /16</label></div>
      <div class="quiz-option"><input type="radio" name="iq2" value="C" id="iq2c"><label for="iq2c">C. /24</label></div>
      <div class="quiz-option"><input type="radio" name="iq2" value="D" id="iq2d"><label for="iq2d">D. /32</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="IPv6 menggunakan 128-bit yang mampu menyediakan sekitar 3,4 × 10³⁸ (340 undesiliun) alamat IP — jauh lebih banyak dari IPv4 yang hanya 4,3 miliar.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">IPv6 menggunakan berapa bit untuk alamat IP?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="iq3" value="A" id="iq3a"><label for="iq3a">A. 32-bit</label></div>
      <div class="quiz-option"><input type="radio" name="iq3" value="B" id="iq3b"><label for="iq3b">B. 64-bit</label></div>
      <div class="quiz-option"><input type="radio" name="iq3" value="C" id="iq3c"><label for="iq3c">C. 128-bit</label></div>
      <div class="quiz-option"><input type="radio" name="iq3" value="D" id="iq3d"><label for="iq3d">D. 256-bit</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="DHCP Discover menggunakan Broadcast karena klien belum memiliki IP dan belum tahu alamat DHCP Server. Broadcast IP 255.255.255.255 akan menjangkau semua perangkat di jaringan lokal.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Ketika klien baru terhubung ke jaringan dan meminta IP ke DHCP Server, jenis komunikasi apa yang digunakan?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="iq4" value="A" id="iq4a"><label for="iq4a">A. Unicast</label></div>
      <div class="quiz-option"><input type="radio" name="iq4" value="B" id="iq4b"><label for="iq4b">B. Multicast</label></div>
      <div class="quiz-option"><input type="radio" name="iq4" value="C" id="iq4c"><label for="iq4c">C. Broadcast</label></div>
      <div class="quiz-option"><input type="radio" name="iq4" value="D" id="iq4d"><label for="iq4d">D. Anycast</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="127.0.0.1 adalah alamat Loopback — selalu menunjuk ke perangkat itu sendiri. Perintah 'ping 127.0.0.1' menguji apakah stack jaringan di komputer lokal berfungsi normal.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Alamat IP <code>127.0.0.1</code> dikenal sebagai alamat...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="iq5" value="A" id="iq5a"><label for="iq5a">A. Gateway default</label></div>
      <div class="quiz-option"><input type="radio" name="iq5" value="B" id="iq5b"><label for="iq5b">B. Broadcast address</label></div>
      <div class="quiz-option"><input type="radio" name="iq5" value="C" id="iq5c"><label for="iq5c">C. Loopback address</label></div>
      <div class="quiz-option"><input type="radio" name="iq5" value="D" id="iq5d"><label for="iq5d">D. APIPA address</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-ip',['B','C','C','C','C']);</script>

<?php include 'footer.php'; ?>
