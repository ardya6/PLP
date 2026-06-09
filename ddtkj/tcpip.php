<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-layer-group"></i> Capaian Pembelajaran 2</div>
  <h1>Mengenali Model TCP/IP dalam Komunikasi Data</h1>
  <p>Memahami arsitektur 4 lapisan TCP/IP yang menjadi fondasi seluruh komunikasi internet — beserta protokol, cara kerja enkapsulasi data, dan contoh nyata di kehidupan sehari-hari.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-layer-group"></i></span> Apa itu Model TCP/IP?</h2>
  <p>TCP/IP (<em>Transmission Control Protocol / Internet Protocol</em>) adalah <strong>standar komunikasi data</strong> yang digunakan oleh seluruh perangkat di internet. Model ini memiliki <strong>4 lapisan (layer)</strong>, masing-masing dengan tugas yang berbeda. Setiap lapisan hanya berkomunikasi dengan lapisan di atas dan di bawahnya — prinsip ini disebut <em>encapsulation</em>.</p>

  <div class="compare-box">
    <div class="compare-item good"><h5><i class="fa-solid fa-check"></i> TCP/IP (4 Layer — Praktis)</h5><ul><li>Dikembangkan dari proyek ARPANET (1970an)</li><li>Dipakai 100% perangkat jaringan modern</li><li>Protokol spesifik sudah terdefinisi (HTTP, FTP, dll)</li></ul></div>
    <div class="compare-item bad"><h5><i class="fa-solid fa-book"></i> OSI Model (7 Layer — Teoritis)</h5><ul><li>Dibuat ISO sebagai referensi akademis</li><li>Hampir tidak ada implementasi murni OSI</li><li>Berguna sebagai bahasa troubleshooting</li></ul></div>
  </div>

  <h3>4 Lapisan TCP/IP beserta Fungsi dan Protokolnya</h3>

  <h4>Application Layer (Lapisan Aplikasi)</h4>
  <p>Tempat di mana aplikasi (browser, email client, FTP) berinteraksi langsung dengan jaringan. Layer ini menyiapkan <em>data payload</em> yang akan dikirimkan.</p>
  <div class="table-wrapper">
    <table>
      <tr><th>Protokol</th><th>Port</th><th>Fungsi</th></tr>
      <tr><td>HTTP / HTTPS</td><td>80 / 443</td><td>Transfer halaman web (HTTPS dienkripsi TLS)</td></tr>
      <tr><td>FTP</td><td>20 / 21</td><td>Transfer file antara klien dan server</td></tr>
      <tr><td>SSH</td><td>22</td><td>Remote terminal terenkripsi, pengganti Telnet</td></tr>
      <tr><td>SMTP / POP3 / IMAP</td><td>25 / 110 / 143</td><td>Kirim dan terima email</td></tr>
      <tr><td>DNS</td><td>53</td><td>Resolusi nama domain ke IP address</td></tr>
      <tr><td>DHCP</td><td>67 / 68</td><td>Distribusi konfigurasi IP otomatis</td></tr>
    </table>
  </div>

  <h4>Transport Layer (Lapisan Transport)</h4>
  <p>Memotong data menjadi <strong>Segment</strong> dan menggunakan <strong>Port Number</strong> untuk membedakan jenis trafik. Ada dua protokol utama:</p>
  <div class="grid-cards">
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-handshake"></i></span>
      <h4>TCP — Reliable</h4>
      <p><strong>Connection-oriented.</strong> Melakukan 3-Way Handshake (SYN→SYN-ACK→ACK) sebelum kirim data. Setiap segment dikonfirmasi (ACK). Jika hilang, dikirim ulang. Cocok untuk: Website, Email, Transfer File.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-bolt"></i></span>
      <h4>UDP — Fast</h4>
      <p><strong>Connectionless.</strong> Kirim data langsung tanpa perlu koneksi dulu. Tidak ada konfirmasi penerimaan. Sangat cepat. Cocok untuk: Game Online, VoIP, DNS Query, Live Streaming.</p>
    </div>
  </div>

  <h4>Internet Layer (Lapisan Internet)</h4>
  <p>Mengemas Segment menjadi <strong>Packet</strong> dengan menambahkan IP Address pengirim (Source) dan tujuan (Destination). Di sini routing terjadi — router memutuskan jalur terbaik untuk setiap packet.</p>
  <ul>
    <li><strong>IP:</strong> Pemberian alamat logis dan forwarding paket</li>
    <li><strong>ICMP:</strong> Pesan kontrol — dipakai oleh perintah <code>ping</code> dan <code>traceroute</code></li>
    <li><strong>ARP:</strong> Mencari MAC Address dari IP tujuan di jaringan lokal</li>
  </ul>

  <h4>Network Access Layer (Lapisan Fisik & Data Link)</h4>
  <p>Mengemas Packet menjadi <strong>Frame</strong> dengan menambahkan MAC Address, lalu mengkonversi ke sinyal fisik (listrik, cahaya, atau gelombang radio).</p>

  <h3>Cara Kerja Enkapsulasi Data (Contoh Nyata)</h3>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-globe"></i> Skenario: Kamu membuka www.google.com</div>
    <pre>1. [Application Layer]
   Browser buat HTTP GET Request: "GET /search?q=hello HTTP/1.1"
   → DATA (Payload)

2. [Transport Layer — TCP]
   Data dipotong menjadi Segment + ditambah header TCP
   Header: Src Port: 52341 | Dst Port: 443 | Seq: 1000 | ACK: 0
   → SEGMENT

3. [Internet Layer — IP]
   Segment dibungkus + ditambah header IP
   Header: Src IP: 192.168.1.5 | Dst IP: 142.250.190.46 | TTL: 64
   → PACKET

4. [Network Access Layer]
   Packet dibungkus + ditambah header Frame (MAC Address)
   Header: Src MAC: AA:BB:CC:DD:EE:FF | Dst MAC: Router MAC
   + FCS (Frame Check Sequence untuk deteksi error)
   → FRAME → dikirim sebagai sinyal listrik/cahaya/radio (BITS)</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-exchange-alt"></i></span> Cara Kerja Komunikasi Data End-to-End</h2>
  <p>Ketika browser di laptop Anda (Klien) meminta halaman web dari server Google, data melewati proses enkapsulasi di pengirim dan dekapsulasi di penerima:</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-arrows-left-right"></i> Alur Lengkap Komunikasi TCP/IP</div>
    <pre>PENGIRIM (Laptop)                           PENERIMA (Server Google)
─────────────────                           ────────────────────────
Application: HTTP Request                   Application: Proses Request
    ↓ Enkapsulasi                               ↑ Dekapsulasi
Transport:   + TCP Header                   Transport:   Rakit ulang Segment
    ↓                                           ↑
Internet:    + IP Header                    Internet:    Baca IP, terima packet
    ↓                                           ↑
Network Access: + Frame/MAC → SINYAL FISIK → Network Access: Terima sinyal, baca Frame</pre>
  </div>
  <div class="highlight-box">
    <strong><i class="fa-solid fa-route"></i> Peran Router dalam Perjalanan Paket</strong>
    <p>Router hanya "membuka" packet hingga Internet Layer (untuk membaca IP tujuan). Router tidak perlu tahu isi data (Application Layer) — ia hanya memutuskan ke mana packet diteruskan berdasarkan Routing Table. Proses "buka tutup" frame setiap kali melewati router disebut <em>hop</em>.</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-tcpip">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Model TCP/IP</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang lapisan TCP/IP, protokol, dan proses enkapsulasi data!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="Model TCP/IP memiliki 4 lapisan: Application, Transport, Internet, dan Network Access. Bukan 7 (itu OSI Model).">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Model TCP/IP terdiri dari berapa lapisan?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="tq1" value="A" id="tq1a"><label for="tq1a">A. 7 lapisan</label></div>
      <div class="quiz-option"><input type="radio" name="tq1" value="B" id="tq1b"><label for="tq1b">B. 4 lapisan</label></div>
      <div class="quiz-option"><input type="radio" name="tq1" value="C" id="tq1c"><label for="tq1c">C. 5 lapisan</label></div>
      <div class="quiz-option"><input type="radio" name="tq1" value="D" id="tq1d"><label for="tq1d">D. 3 lapisan</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Proses enkapsulasi di Transport Layer menghasilkan unit data yang disebut Segment. Data → Segment (Transport) → Packet (Internet) → Frame (Network Access).">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Unit data (PDU) yang dihasilkan oleh Transport Layer disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="tq2" value="A" id="tq2a"><label for="tq2a">A. Packet</label></div>
      <div class="quiz-option"><input type="radio" name="tq2" value="B" id="tq2b"><label for="tq2b">B. Frame</label></div>
      <div class="quiz-option"><input type="radio" name="tq2" value="C" id="tq2c"><label for="tq2c">C. Segment</label></div>
      <div class="quiz-option"><input type="radio" name="tq2" value="D" id="tq2d"><label for="tq2d">D. Datagram</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="UDP cocok untuk aplikasi yang mengutamakan kecepatan daripada keandalan seperti game online, VoIP, dan streaming — dimana paket yang hilang tidak terlalu mengganggu (lebih baik sedikit glitch daripada delay).">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Protokol transport mana yang paling cocok digunakan untuk aplikasi Video Call (VoIP)?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="tq3" value="A" id="tq3a"><label for="tq3a">A. TCP karena lebih reliable</label></div>
      <div class="quiz-option"><input type="radio" name="tq3" value="B" id="tq3b"><label for="tq3b">B. UDP karena lebih cepat dan latensi rendah</label></div>
      <div class="quiz-option"><input type="radio" name="tq3" value="C" id="tq3c"><label for="tq3c">C. FTP karena mendukung audio</label></div>
      <div class="quiz-option"><input type="radio" name="tq3" value="D" id="tq3d"><label for="tq3d">D. HTTP karena standar internet</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="ICMP (Internet Control Message Protocol) adalah protokol di Internet Layer yang digunakan untuk pesan diagnostik dan kontrol, termasuk perintah ping (Echo Request/Reply) dan traceroute.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Protokol apa yang digunakan oleh perintah <code>ping</code> untuk menguji konektivitas jaringan?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="tq4" value="A" id="tq4a"><label for="tq4a">A. TCP</label></div>
      <div class="quiz-option"><input type="radio" name="tq4" value="B" id="tq4b"><label for="tq4b">B. UDP</label></div>
      <div class="quiz-option"><input type="radio" name="tq4" value="C" id="tq4c"><label for="tq4c">C. ICMP</label></div>
      <div class="quiz-option"><input type="radio" name="tq4" value="D" id="tq4d"><label for="tq4d">D. ARP</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="HTTPS menggunakan Port 443, bukan 80. Port 80 digunakan oleh HTTP (tidak terenkripsi). Perbedaan penting karena HTTPS menambahkan enkripsi TLS/SSL di atas HTTP.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Port berapa yang digunakan oleh protokol HTTPS (HTTP Secure)?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="tq5" value="A" id="tq5a"><label for="tq5a">A. Port 80</label></div>
      <div class="quiz-option"><input type="radio" name="tq5" value="B" id="tq5b"><label for="tq5b">B. Port 443</label></div>
      <div class="quiz-option"><input type="radio" name="tq5" value="C" id="tq5c"><label for="tq5c">C. Port 22</label></div>
      <div class="quiz-option"><input type="radio" name="tq5" value="D" id="tq5d"><label for="tq5d">D. Port 8080</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-tcpip',['B','C','B','C','B']);</script>

<?php include 'footer.php'; ?>
