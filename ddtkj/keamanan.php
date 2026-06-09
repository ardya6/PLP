<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>4. Menerapkan Prinsip Keamanan Jaringan Berlapis</h2>
      <p>Jaringan komputer yang terhubung ke internet sama halnya dengan rumah yang berada di pinggir jalan raya tanpa pagar; siapa saja bisa mencoba membuka pintunya. Karena itu, arsitektur <em>Defence in Depth</em> (Pertahanan Berlapis) sangat krusial, mulai dari sisi fisik (kabel) hingga sisi pengguna (kebijakan password).</p>

      <h3>Trias CIA: Pilar Utama Keamanan Informasi</h3>
      <p>Seluruh sistem pertahanan siber di dunia ini diciptakan untuk menjaga salah satu atau semua pilar CIA Triad berikut:</p>
      <div class="grid-cards">
        <div class="info-card">
          <h4>C - Confidentiality (Kerahasiaan)</h4>
          <p>Mencegah data disadap atau dibaca oleh pihak yang tidak sah. <br><strong>Metode Penyerangan:</strong> Sniffing, Keylogging, Man-in-the-Middle.<br><strong>Metode Pertahanan:</strong> Enkripsi Data (AES 256-bit), Autentikasi Multifaktor (MFA), Protokol Aman (HTTPS, SSH).</p>
        </div>
        <div class="info-card">
          <h4>I - Integrity (Integritas)</h4>
          <p>Memastikan bahwa data yang dikirim dan data yang diterima adalah identik, tidak diubah sedikipun oleh pihak ketiga. <br><strong>Metode Penyerangan:</strong> Injeksi data, Perubahan File.<br><strong>Metode Pertahanan:</strong> Fungsi Hashing (SHA-256), Checksum, Tanda Tangan Digital (Digital Certificates).</p>
        </div>
        <div class="info-card">
          <h4>A - Availability (Ketersediaan)</h4>
          <p>Sistem dan database harus selalu siap diakses (Uptime 99.9%) oleh pengguna yang sah. <br><strong>Metode Penyerangan:</strong> DDoS (Distributed Denial of Service), Ransomware.<br><strong>Metode Pertahanan:</strong> Server Backup, Clustering, Redundancy Koneksi (ISP ganda), Web Application Firewall (WAF).</p>
        </div>
      </div>

      <h3>Mengenal Bentuk-Bentuk Malware (Perangkat Lunak Berbahaya)</h3>
      <ul>
        <li><strong>Virus:</strong> Membutuhkan tindakan pengguna (misal klik file <code>.exe</code> yang terinfeksi) untuk bisa menyebar ke file lain.</li>
        <li><strong>Worm:</strong> Varian berbahaya yang bisa menggandakan dirinya sendiri menyebar ke seluruh komputer dalam jaringan lokal (LAN) tanpa perlu interaksi pengguna. Memanfaatkan celah port terbuka.</li>
        <li><strong>Trojan:</strong> Menyamar sebagai aplikasi sah (misalnya aplikasi VPN gratis) namun di dalamnya membuka <em>Backdoor</em> bagi peretas untuk mengontrol PC dari jarak jauh.</li>
        <li><strong>Ransomware:</strong> Malware pemeras yang mengenkripsi seluruh file penting di harddisk/server, lalu peretas akan meminta uang tebusan (biasanya dengan Bitcoin) untuk memberikan kunci pelepasnya.</li>
      </ul>

      <h3>Social Engineering (Rekayasa Sosial)</h3>
      <p>Ini adalah peretasan paling berbahaya karena meretas <strong>sisi psikologis manusia</strong>, bukan sistem komputernya. Metode terpopuler adalah <strong>Phishing</strong> (email palsu yang sangat mirip dengan email resmi Bank untuk mencuri password) dan <strong>Spear-phishing</strong> (Targetnya sangat spesifik, misalnya menargetkan staf keuangan perusahaan).</p>

      <div class="highlight-box">
        <strong>Konsep Zero Trust Architecture (ZTA)</strong>
        <p>Model keamanan kuno berasumsi bahwa "Siapapun yang berada di dalam jaringan kantor (LAN) adalah orang aman". Model Zero Trust (Jangan percaya siapa pun) menghancurkan asumsi itu. Dalam ZTA, setiap kali user/karyawan mencoba membuka sebuah file server kantor, dia harus diautentikasi berlapis, perangkatnya dicek apakah bervirus, dan hak aksesnya dibatasi secara ketat, meskipun ia sedang menggunakan komputer dari dalam gedung kantor.</p>
      </div>

      <h3>Evolusi Perangkat Firewall</h3>
      <p>Firewall adalah polisi pintu tol jaringan Anda. Perkembangannya:</p>
      <ol>
        <li><strong>Packet Filtering (Generasi 1):</strong> Hanya melihat Alamat IP dan Port dari amplop data (Misal: IP 1.2.3.4 blokir dari Port 80).</li>
        <li><strong>Stateful Inspection (Generasi 2):</strong> Firewall mengingat state koneksi (Mengingat bahwa "Oh, koneksi masuk ini adalah balasan dari request yang dikirim karyawan kita dari dalam").</li>
        <li><strong>Next-Generation Firewall (NGFW):</strong> Bisa membedah isi amplop data. Mampu membedakan trafik browser biasa dengan trafik <em>Facebook Chat</em>, memiliki antivirus bawaan (Deep Packet Inspection), dan filter sistem intrusi otomatis (IPS).</li>
      </ol>

    </section>

<?php include 'footer.php'; ?>
