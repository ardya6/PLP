<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-shield-halved"></i> Capaian Pembelajaran 4</div>
  <h1>Keamanan Jaringan di Era Digital</h1>
  <p>Menerapkan prinsip keamanan berlapis, membangun kesadaran personal security, praktik cyberhygiene, dan mengenali ancaman siber termasuk link phishing.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-shield-halved"></i></span> Menerapkan Prinsip Keamanan Jaringan</h2>
  <p>Keamanan jaringan bertujuan melindungi seluruh infrastruktur digital dari akses tidak sah, kerusakan, atau gangguan. Tiga pilar utama disebut <strong>CIA Triad</strong>:</p>
  <div class="grid-cards grid-cards-3">
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-lock"></i></span>
      <h4>Confidentiality (Kerahasiaan)</h4>
      <p>Data hanya dapat diakses oleh pihak berwenang. Dijaga dengan <strong>enkripsi AES-256, TLS/SSL, MFA</strong> (Multi-Factor Authentication).</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-fingerprint"></i></span>
      <h4>Integrity (Integritas)</h4>
      <p>Data yang diterima identik dengan yang dikirim — tidak dimanipulasi. Dijaga dengan <strong>hashing SHA-256, digital signature, HMAC</strong>.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-circle-check"></i></span>
      <h4>Availability (Ketersediaan)</h4>
      <p>Sistem harus selalu dapat diakses oleh pengguna sah. Dijaga dengan <strong>backup, load balancing, redundansi ISP, WAF anti-DDoS</strong>.</p>
    </div>
  </div>

  <h3>Defence in Depth: Pertahanan Berlapis</h3>
  <p>Tidak ada satu pun sistem keamanan yang 100% aman. Strategi <em>Defence in Depth</em> memastikan jika satu lapisan jebol, lapisan berikutnya masih berdiri:</p>
  <ul class="step-list">
    <li><div class="step-num">1</div><div class="step-content"><strong>Physical Layer:</strong> Kunci server room, CCTV, access card, pengunci kabel (Kensington Lock). Data yang dicuri secara fisik tidak memerlukan hacking!</div></li>
    <li><div class="step-num">2</div><div class="step-content"><strong>Network Perimeter:</strong> Firewall, IPS, DMZ (Demilitarized Zone) untuk server publik. Memblokir koneksi tidak sah sebelum masuk jaringan.</div></li>
    <li><div class="step-num">3</div><div class="step-content"><strong>Endpoint Protection:</strong> Antivirus, EDR (Endpoint Detection &amp; Response), patch management. Melindungi tiap perangkat yang terhubung.</div></li>
    <li><div class="step-num">4</div><div class="step-content"><strong>Application Layer:</strong> WAF (Web Application Firewall), validasi input, enkripsi data aplikasi. Mencegah SQL Injection, XSS, CSRF.</div></li>
    <li><div class="step-num">5</div><div class="step-content"><strong>Data Layer:</strong> Enkripsi database, DLP (Data Loss Prevention), backup 3-2-1. Melindungi data bahkan jika layer atas sudah jebol.</div></li>
    <li><div class="step-num">6</div><div class="step-content"><strong>Human Layer:</strong> Pelatihan keamanan, kebijakan password, simulasi phishing. Manusia sering menjadi titik lemah terbesar!</div></li>
  </ul>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-laptop-code"></i> Contoh Implementasi Nyata</div>
    <p style="color:#c9bcdf;margin-top:0.5rem;">Perusahaan XYZ menerapkan Defence in Depth: Akses kantor dengan kartu (Fisik) → Firewall Palo Alto NGFW (Network) → CrowdStrike pada setiap laptop (Endpoint) → WAF CloudFlare di website (Application) → Database dienkripsi AES-256 + backup harian ke cloud (Data) → Pelatihan anti-phishing bulanan (Human). Ketika seorang karyawan klik link phishing, email gateway memblokir lampiran berbahaya. Ketika lewat, EDR mendeteksi perilaku malware dan mengisolasi PC tersebut sebelum menyebar ke jaringan.</p>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-user-shield"></i></span> Kesadaran Keamanan & Personal Security</h2>

  <h3>Pentingnya Keamanan Data di Era Digital</h3>
  <p>Di era digital, data pribadi Anda memiliki nilai ekonomi tinggi. Data seperti NIK, nomor rekening, kata sandi, nomor HP, dan riwayat transaksi dapat dijual di <em>dark web</em> seharga $1–$20 per orang. Kebocoran data skala besar (seperti 279 juta data BPJS Kesehatan 2021) dapat berdampak pada penipuan keuangan, pemalsuan identitas, hingga ancaman fisik.</p>

  <div class="grid-cards">
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-key"></i></span>
      <h4>Password yang Kuat</h4>
      <p>Minimum 12 karakter, kombinasi huruf besar/kecil, angka, dan simbol. Gunakan <strong>password manager</strong> (Bitwarden, 1Password) agar tidak mengulang password yang sama di banyak layanan.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-mobile-screen"></i></span>
      <h4>Multi-Factor Authentication (MFA)</h4>
      <p>Selain password, tambahkan lapisan kedua: kode OTP dari aplikasi authenticator (Google Authenticator, Authy), biometrik, atau hardware key (YubiKey). Bahkan jika password bocor, akun tetap aman.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-eye-slash"></i></span>
      <h4>Privasi Digital</h4>
      <p>Minimalisir data yang dibagikan online. Periksa izin aplikasi di HP secara berkala. Matikan location tracking jika tidak diperlukan. Gunakan email alias untuk pendaftaran akun tidak penting.</p>
    </div>
  </div>

  <h3>Praktik Cyberhygiene Sehari-Hari</h3>
  <p><strong>Cyberhygiene</strong> adalah kebiasaan digital yang harus dijaga rutin, seperti menyikat gigi — dilakukan teratur agar terhindar dari infeksi siber:</p>

  <div class="table-wrapper">
    <table>
      <tr><th>Praktik</th><th>Frekuensi</th><th>Mengapa Penting</th></tr>
      <tr><td><strong>Update OS & Aplikasi</strong></td><td>Segera saat tersedia</td><td>Patch menutup celah keamanan (vulnerability) yang dieksploitasi hacker</td></tr>
      <tr><td><strong>Backup Data (3-2-1)</strong></td><td>Otomatis harian</td><td>3 salinan, 2 media berbeda, 1 di lokasi terpisah. Satu-satunya perlindungan dari ransomware</td></tr>
      <tr><td><strong>Scan Antivirus</strong></td><td>Mingguan / real-time</td><td>Mendeteksi malware yang lolos dari filter email atau download tidak sengaja</td></tr>
      <tr><td><strong>Cek Aktivitas Login</strong></td><td>Bulanan</td><td>Deteksi dini akun yang diakses dari lokasi/perangkat asing</td></tr>
      <tr><td><strong>Review Izin Aplikasi</strong></td><td>Bulanan</td><td>Aplikasi usang dengan izin berlebihan bisa menjadi pintu backdoor</td></tr>
      <tr><td><strong>Ganti Password Sensitif</strong></td><td>6 bulan sekali</td><td>Mengurangi dampak jika ada kebocoran data yang belum diketahui</td></tr>
      <tr><td><strong>Cek Have I Been Pwned</strong></td><td>Bulanan</td><td>Situs haveibeenpwned.com memberitahu jika email Anda ada di database kebocoran</td></tr>
    </table>
  </div>

  <h3>Mengenali Ciri-Ciri Link Phishing</h3>
  <p>Phishing adalah salah satu serangan siber paling umum — mengelabui korban untuk mengklik tautan berbahaya atau memasukkan data sensitif di halaman palsu. Kenali tanda-tandanya:</p>

  <div class="warning-box">
    <strong><i class="fa-solid fa-triangle-exclamation"></i> 8 Ciri-Ciri Link & Email Phishing</strong>
  </div>

  <ul>
    <li><strong>Domain mencurigakan / typosquatting:</strong> <code>paypai.com</code> (huruf I bukan l), <code>g00gle.com</code>, <code>bankbca-secure.com</code> — bukan domain resmi. Selalu periksa ejaan domain secara seksama!</li>
    <li><strong>Subdomain yang menyesatkan:</strong> <code>bca.com.phishing-site.ru</code> — domain asli adalah <code>phishing-site.ru</code>, bukan <code>bca.com</code>. Selalu baca dari kanan (TLD → Domain → Subdomain).</li>
    <li><strong>HTTP bukan HTTPS:</strong> Website bank/e-commerce sah selalu menggunakan HTTPS (gembok hijau). Jika HTTP tanpa gembok, jangan masukkan data apapun.</li>
    <li><strong>URL dipersingkat (bit.ly, tinyurl):</strong> URL shortener menyembunyikan tujuan aslinya. Gunakan <em>URL expander</em> seperti checkshorturl.com sebelum mengklik.</li>
    <li><strong>Pengirim email tidak cocok:</strong> Tampilan nama "Bank BRI" tapi alamat email <code>noreply@banking-alert.xyz</code>. Klik "Reply" dan perhatikan alamat tujuan sebenarnya.</li>
    <li><strong>Urgensi berlebihan:</strong> "AKUN ANDA AKAN DIBLOKIR DALAM 24 JAM!" — taktik menciptakan kepanikan agar korban bertindak tanpa berpikir.</li>
    <li><strong>Permintaan data sensitif lewat link:</strong> Bank resmi TIDAK PERNAH meminta password, PIN, OTP, atau nomor kartu kredit via email/SMS/WhatsApp.</li>
    <li><strong>Lampiran file mencurigakan:</strong> File <code>.exe</code>, <code>.bat</code>, <code>.js</code>, <code>.docm</code> (macro-enabled Word) dari pengirim tidak dikenal — jangan dibuka!</li>
  </ul>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-search"></i> Cara Memverifikasi Link Sebelum Klik</div>
    <pre>1. Hover mouse di atas link → lihat URL asli di status bar browser (pojok kiri bawah)
2. Salin link → tempel di URL expander atau VirusTotal.com untuk scan
3. Ketik sendiri URL resmi di browser (jangan klik link dari email)
4. Gunakan ekstensi browser seperti "uBlock Origin" atau "PhishTank" 
   untuk memblokir situs phishing secara otomatis
5. Cek umur domain di whois.domaintools.com — domain baru (< 1 bulan) 
   yang mengklaim sebagai bank adalah tanda merah besar!</pre>
  </div>

  <div class="highlight-box">
    <strong><i class="fa-solid fa-brain"></i> Zero Trust dalam Kehidupan Digital Pribadi</strong>
    <p>Terapkan prinsip "<em>Never Trust, Always Verify</em>" dalam kehidupan sehari-hari: Selalu verifikasi identitas pengirim sebelum bertindak. Jika menerima pesan mencurigakan dari "teman" yang minta transfer uang — telepon langsung untuk konfirmasi. Akun yang terkompromis sering dipakai untuk menipu daftar kontaknya.</p>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-keamanan">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Keamanan Jaringan</h2>
  <p class="quiz-subtitle">Uji pemahaman kamu tentang keamanan jaringan, cyberhygiene, dan phishing. Pilih jawaban yang paling tepat!</p>
  <div class="quiz-score-bar">
    <span><i class="fa-solid fa-star"></i> Skor Kamu</span>
    <span class="score-val">0/5</span>
  </div>

  <div class="quiz-question"
    data-explain="CIA Triad terdiri dari Confidentiality (kerahasiaan), Integrity (integritas), dan Availability (ketersediaan). Non-repudiation adalah prinsip tambahan.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Manakah yang BUKAN merupakan bagian dari CIA Triad dalam keamanan informasi?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="q1" value="A" id="q1a"><label for="q1a">A. Confidentiality</label></div>
      <div class="quiz-option"><input type="radio" name="q1" value="B" id="q1b"><label for="q1b">B. Integrity</label></div>
      <div class="quiz-option"><input type="radio" name="q1" value="C" id="q1c"><label for="q1c">C. Non-Repudiation</label></div>
      <div class="quiz-option"><input type="radio" name="q1" value="D" id="q1d"><label for="q1d">D. Availability</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question"
    data-explain="'paypai.com' adalah contoh typosquatting — menggunakan huruf 'i' yang mirip huruf 'l' untuk mengelabui korban. Ini adalah ciri khas phishing.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Kamu menerima email dari "PayPal" dengan link ke <code>http://paypai.com/login</code>. Apa yang paling mengkhawatirkan dari link tersebut?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="q2" value="A" id="q2a"><label for="q2a">A. Menggunakan HTTP bukan HTTPS</label></div>
      <div class="quiz-option"><input type="radio" name="q2" value="B" id="q2b"><label for="q2b">B. Domain "paypai.com" (huruf i, bukan l) adalah typosquatting</label></div>
      <div class="quiz-option"><input type="radio" name="q2" value="C" id="q2c"><label for="q2c">C. Mengandung kata "login"</label></div>
      <div class="quiz-option"><input type="radio" name="q2" value="D" id="q2d"><label for="q2d">D. Tidak ada yang mencurigakan</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question"
    data-explain="Aturan backup 3-2-1: 3 salinan data, disimpan di 2 media berbeda, 1 diantaranya di lokasi terpisah/offsite (cloud atau fisik berbeda lokasi). Ini adalah satu-satunya perlindungan andal terhadap ransomware.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Aturan backup "3-2-1" berarti...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="q3" value="A" id="q3a"><label for="q3a">A. 3 kali backup per hari, 2 cloud provider, 1 USB drive</label></div>
      <div class="quiz-option"><input type="radio" name="q3" value="B" id="q3b"><label for="q3b">B. 3 salinan data, 2 media berbeda, 1 di lokasi terpisah</label></div>
      <div class="quiz-option"><input type="radio" name="q3" value="C" id="q3c"><label for="q3c">C. 3 password berbeda, 2 email, 1 MFA</label></div>
      <div class="quiz-option"><input type="radio" name="q3" value="D" id="q3d"><label for="q3d">D. 3 antivirus, 2 firewall, 1 VPN</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question"
    data-explain="Multi-Factor Authentication (MFA) menambahkan lapisan keamanan kedua. Meski password bocor, penyerang tidak bisa masuk tanpa faktor kedua (OTP, biometrik, atau hardware key).">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Mengapa MFA (Multi-Factor Authentication) sangat direkomendasikan meskipun sudah punya password kuat?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="q4" value="A" id="q4a"><label for="q4a">A. Karena password kuat tidak berlaku di MFA</label></div>
      <div class="quiz-option"><input type="radio" name="q4" value="B" id="q4b"><label for="q4b">B. Agar login lebih cepat</label></div>
      <div class="quiz-option"><input type="radio" name="q4" value="C" id="q4c"><label for="q4c">C. Jika password bocor, akun tetap aman karena butuh faktor verifikasi kedua</label></div>
      <div class="quiz-option"><input type="radio" name="q4" value="D" id="q4d"><label for="q4d">D. MFA menggantikan kebutuhan password</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question"
    data-explain="Bank resmi, e-commerce, atau institusi keuangan TIDAK PERNAH meminta password, PIN, atau OTP melalui email, SMS, atau WhatsApp. Jika ada permintaan demikian, itu pasti penipuan.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Kamu menerima SMS dari nomor tidak dikenal mengatasnamakan bank, meminta kamu mengirimkan kode OTP yang baru saja masuk ke HP. Apa yang harus dilakukan?</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="q5" value="A" id="q5a"><label for="q5a">A. Kirim OTP tersebut karena bank pasti membutuhkannya</label></div>
      <div class="quiz-option"><input type="radio" name="q5" value="B" id="q5b"><label for="q5b">B. Tolak dan jangan kirimkan — bank tidak pernah meminta OTP dari nasabah</label></div>
      <div class="quiz-option"><input type="radio" name="q5" value="C" id="q5c"><label for="q5c">C. Tanya nama pengirim dulu, baru kirim OTP</label></div>
      <div class="quiz-option"><input type="radio" name="q5" value="D" id="q5d"><label for="q5d">D. Kirim setengah kode OTP saja untuk keamanan</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-keamanan',['C','B','B','C','B']);</script>

<?php include 'footer.php'; ?>
