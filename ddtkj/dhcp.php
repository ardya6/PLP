<?php include 'header.php'; ?>

<div class="content-header">
  <div class="badge"><i class="fa-solid fa-server"></i> Capaian Pembelajaran 3</div>
  <h1>Layanan Pendukung Jaringan</h1>
  <p>Memahami cara kerja DHCP, DNS, NAT, Proxy, VPN, Gateway, dan Firewall — layanan inti yang membuat jaringan komputer modern dapat beroperasi secara otomatis dan aman.</p>
</div>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-server"></i></span> DHCP — Dynamic Host Configuration Protocol</h2>
  <p>DHCP secara otomatis mendistribusikan konfigurasi jaringan (IP Address, Subnet Mask, Gateway, DNS) ke perangkat klien sehingga administrator tidak perlu mengatur IP satu per satu secara manual.</p>

  <h3>Cara Kerja DHCP: Proses DORA</h3>
  <ul class="step-list">
    <li><div class="step-num">D</div><div class="step-content"><strong>Discover:</strong> Klien broadcast ke seluruh jaringan (<code>255.255.255.255</code>, Port 67): "Ada DHCP Server? Saya butuh IP Address!"</div></li>
    <li><div class="step-num">O</div><div class="step-content"><strong>Offer:</strong> DHCP Server merespons dengan tawaran: IP <code>192.168.1.50</code>, Gateway <code>192.168.1.1</code>, DNS <code>8.8.8.8</code>, Lease 24 jam.</div></li>
    <li><div class="step-num">R</div><div class="step-content"><strong>Request:</strong> Klien broadcast persetujuan: "Saya menerima tawaran dari server dengan MAC AA:BB:CC:DD!"</div></li>
    <li><div class="step-num">A</div><div class="step-content"><strong>Acknowledge:</strong> Server mengunci IP di database, mengirim konfirmasi resmi beserta semua parameter konfigurasi.</div></li>
  </ul>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-terminal"></i> Contoh Konfigurasi DHCP di Router Mikrotik</div>
    <pre>/ip pool add name=pool-lokal ranges=192.168.1.100-192.168.1.200
/ip dhcp-server add name=dhcp1 interface=ether2 address-pool=pool-lokal
/ip dhcp-server network add address=192.168.1.0/24 gateway=192.168.1.1 dns-server=8.8.8.8
# Hasil: Setiap PC yang terhubung di ether2 otomatis mendapat IP
# dari rentang 192.168.1.100 - 192.168.1.200</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-magnifying-glass"></i></span> DNS — Domain Name System</h2>
  <p>DNS menerjemahkan nama domain yang mudah diingat manusia (<code>www.google.com</code>) menjadi IP Address yang dimengerti komputer (<code>142.250.190.46</code>). Tanpa DNS, Anda harus hafal miliaran IP address!</p>

  <h3>Cara Kerja Resolusi DNS (Step-by-Step)</h3>
  <ul class="step-list">
    <li><div class="step-num">1</div><div class="step-content">Browser cek <strong>cache lokal</strong> — apakah pernah membuka situs ini? Jika ada → langsung gunakan IP tersimpan.</div></li>
    <li><div class="step-num">2</div><div class="step-content">Jika tidak ada, query dikirim ke <strong>DNS Resolver ISP/Google</strong> (<code>8.8.8.8</code>). Resolver ini yang bekerja keras.</div></li>
    <li><div class="step-num">3</div><div class="step-content">Resolver tanya <strong>Root DNS Server</strong>: "Siapa yang urus domain <code>.com</code>?" → dapat alamat TLD Server.</div></li>
    <li><div class="step-num">4</div><div class="step-content">Resolver tanya <strong>TLD Server (.com)</strong>: "Siapa yang urus <code>google.com</code>?" → dapat alamat Authoritative Server Google.</div></li>
    <li><div class="step-num">5</div><div class="step-content"><strong>Authoritative Server Google</strong> menjawab: "IP <code>www.google.com</code> = <code>142.250.190.46</code>!" → Resolver simpan ke cache, kirim balik ke browser.</div></li>
  </ul>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-terminal"></i> Contoh: Cek DNS dengan perintah nslookup</div>
    <pre>C:\> nslookup www.google.com
Server:  dns.google (8.8.8.8)
Address: 8.8.8.8

Non-authoritative answer:
Name:    www.google.com
Addresses: 142.250.190.46
           2404:6800:4003:c03::5e   (IPv6)</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-mask"></i></span> NAT, Proxy & VPN</h2>

  <h3>NAT — Network Address Translation</h3>
  <p>NAT memungkinkan banyak perangkat ber-IP Private berbagi satu IP Publik untuk mengakses internet. Router menyimpan tabel pemetaan Port ↔ IP Private untuk mengarahkan paket balasan ke perangkat yang tepat.</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-table"></i> Contoh Tabel NAT (PAT)</div>
    <pre>IP Private + Port    →  IP Publik + Port (NAT)  →  Server Tujuan
192.168.1.2:52001   →  203.10.5.1:60001         →  google.com:443
192.168.1.3:52002   →  203.10.5.1:60002         →  youtube.com:443
192.168.1.4:52003   →  203.10.5.1:60003         →  tokopedia.com:443
↑ Semua berbagi IP Publik 203.10.5.1 yang sama, dibedakan oleh Port Number!</pre>
  </div>

  <h3>Proxy Server</h3>
  <p>Proxy berdiri sebagai perantara antara klien dan internet. Klien tidak langsung mengakses website — semua trafik melewati Proxy lebih dulu.</p>
  <div class="grid-cards">
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-filter"></i></span>
      <h4>Web Filtering</h4>
      <p>Blokir akses ke situs terlarang. Diterapkan di sekolah, kantor, atau warnet untuk mencegah akses konten negatif.</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-bolt"></i></span>
      <h4>Web Caching</h4>
      <p>100 pengguna buka YouTube → Proxy download 1x, bagikan ke semua. Hemat bandwidth internet hingga 60%!</p>
    </div>
    <div class="info-card">
      <span class="card-icon"><i class="fa-solid fa-eye-slash"></i></span>
      <h4>Anonymity</h4>
      <p>Website tujuan hanya melihat IP Proxy, bukan IP asli klien. Berguna untuk privasi atau bypass geo-restriction.</p>
    </div>
  </div>

  <h3>VPN — Virtual Private Network</h3>
  <p>VPN membuat terowongan terenkripsi di atas jaringan publik, sehingga data aman meski melewati internet terbuka.</p>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-route"></i> Cara Kerja VPN Site-to-Site</div>
    <pre>Kantor Surabaya (LAN: 192.168.2.0/24)
        ↓ dienkripsi IPSec Tunnel
    Internet (tidak bisa dibaca siapapun)
        ↓ didekripsi
Kantor Jakarta (LAN: 192.168.1.0/24)

Hasil: PC di Surabaya (192.168.2.5) bisa akses server file
       di Jakarta (192.168.1.100) seolah berada di LAN yang sama!</pre>
  </div>
</section>

<section class="module-section">
  <h2><span class="icon-badge"><i class="fa-solid fa-network-wired"></i></span> Gateway & Firewall</h2>

  <h3>Gateway</h3>
  <p><strong>Default Gateway</strong> adalah router yang menjadi "pintu keluar" jaringan lokal menuju internet. Setiap paket yang tujuannya bukan dalam jaringan lokal akan dikirim ke Gateway untuk diteruskan.</p>

  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-map"></i> Contoh: Alur Paket dari PC ke Internet</div>
    <pre>PC (192.168.1.5) ingin akses google.com (142.250.190.46)
1. PC cek: Apakah 142.250.190.46 dalam jaringan 192.168.1.0/24? → TIDAK
2. PC kirim paket ke Default Gateway: 192.168.1.1 (Router)
3. Router (NAT): ganti source IP → 203.10.5.1 (IP Publik ISP)
4. Router teruskan ke internet → Google server
5. Google balas ke 203.10.5.1 → Router → PC 192.168.1.5</pre>
  </div>

  <h3>Firewall</h3>
  <p>Firewall adalah "polisi" yang memeriksa setiap paket data yang masuk/keluar jaringan berdasarkan aturan (rules) yang telah dikonfigurasi.</p>
  <div class="table-wrapper">
    <table>
      <tr><th>Generasi</th><th>Cara Kerja</th><th>Kemampuan</th></tr>
      <tr><td><strong>Packet Filtering</strong></td><td>Cek header IP/Port saja</td><td>Blokir berdasarkan IP atau Port number</td></tr>
      <tr><td><strong>Stateful Inspection</strong></td><td>Ingat state koneksi aktif</td><td>Bedakan paket balasan sah vs serangan masuk</td></tr>
      <tr><td><strong>NGFW (Next-Gen)</strong></td><td>Deep Packet Inspection</td><td>Bedakan aplikasi, antivirus, IPS, URL filter berbasis reputasi</td></tr>
    </table>
  </div>
  <div class="example-box">
    <div class="ex-label"><i class="fa-solid fa-code"></i> Contoh Aturan Firewall (Cisco ACL)</div>
    <pre>access-list 100 deny   tcp any any eq 23    ! Blokir Telnet (tidak aman)
access-list 100 permit tcp any any eq 22    ! Izinkan SSH (aman, terenkripsi)
access-list 100 permit tcp any any eq 443   ! Izinkan HTTPS
access-list 100 deny   ip  any any          ! Blokir semua selain yang diizinkan</pre>
  </div>
</section>

<!-- ===== QUIZ ===== -->
<section class="quiz-section" id="quiz-dhcp">
  <h2><i class="fa-solid fa-clipboard-question" style="color:#e879f9"></i> Latihan Soal: Layanan Pendukung Jaringan</h2>
  <p class="quiz-subtitle">Uji pemahamanmu tentang DHCP, DNS, NAT, Proxy, VPN, Gateway, dan Firewall!</p>
  <div class="quiz-score-bar"><span><i class="fa-solid fa-star"></i> Skor Kamu</span><span class="score-val">0/5</span></div>

  <div class="quiz-question" data-explain="DORA adalah singkatan dari Discover, Offer, Request, Acknowledge — empat tahap proses DHCP dalam mendistribusikan IP ke klien.">
    <div class="quiz-q-num">Soal 1</div>
    <div class="quiz-q-text">Proses DHCP terdiri dari empat tahap yang disebut DORA. Urutan yang benar adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="dq1" value="A" id="dq1a"><label for="dq1a">A. Discover → Offer → Request → Acknowledge</label></div>
      <div class="quiz-option"><input type="radio" name="dq1" value="B" id="dq1b"><label for="dq1b">B. Discover → Request → Offer → Acknowledge</label></div>
      <div class="quiz-option"><input type="radio" name="dq1" value="C" id="dq1c"><label for="dq1c">C. Offer → Discover → Acknowledge → Request</label></div>
      <div class="quiz-option"><input type="radio" name="dq1" value="D" id="dq1d"><label for="dq1d">D. Request → Offer → Discover → Acknowledge</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="DNS Record tipe A memetakan nama domain ke alamat IPv4. Record AAAA untuk IPv6, CNAME untuk alias, dan MX untuk mail server.">
    <div class="quiz-q-num">Soal 2</div>
    <div class="quiz-q-text">Jenis DNS Record yang memetakan nama domain (seperti google.com) ke alamat IPv4 adalah...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="dq2" value="A" id="dq2a"><label for="dq2a">A. MX Record</label></div>
      <div class="quiz-option"><input type="radio" name="dq2" value="B" id="dq2b"><label for="dq2b">B. CNAME Record</label></div>
      <div class="quiz-option"><input type="radio" name="dq2" value="C" id="dq2c"><label for="dq2c">C. A Record</label></div>
      <div class="quiz-option"><input type="radio" name="dq2" value="D" id="dq2d"><label for="dq2d">D. PTR Record</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="PAT (Port Address Translation) atau NAT Overload memungkinkan banyak perangkat berbagi satu IP Publik dengan membedakan sesi menggunakan Port Number yang berbeda.">
    <div class="quiz-q-num">Soal 3</div>
    <div class="quiz-q-text">Teknik NAT yang memungkinkan puluhan perangkat berbagi SATU IP Publik yang sama dengan membedakan sesi menggunakan port number disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="dq3" value="A" id="dq3a"><label for="dq3a">A. Static NAT</label></div>
      <div class="quiz-option"><input type="radio" name="dq3" value="B" id="dq3b"><label for="dq3b">B. Dynamic NAT</label></div>
      <div class="quiz-option"><input type="radio" name="dq3" value="C" id="dq3c"><label for="dq3c">C. PAT (Port Address Translation)</label></div>
      <div class="quiz-option"><input type="radio" name="dq3" value="D" id="dq3d"><label for="dq3d">D. Reverse NAT</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="Web Caching di Proxy Server menyimpan salinan halaman web populer secara lokal, sehingga ketika banyak pengguna mengakses konten yang sama, bandwidth internet dihemat secara signifikan.">
    <div class="quiz-q-num">Soal 4</div>
    <div class="quiz-q-text">Fitur Proxy Server yang menyimpan konten web populer secara lokal untuk mengurangi penggunaan bandwidth internet disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="dq4" value="A" id="dq4a"><label for="dq4a">A. Web Filtering</label></div>
      <div class="quiz-option"><input type="radio" name="dq4" value="B" id="dq4b"><label for="dq4b">B. Web Caching</label></div>
      <div class="quiz-option"><input type="radio" name="dq4" value="C" id="dq4c"><label for="dq4c">C. Web Tunneling</label></div>
      <div class="quiz-option"><input type="radio" name="dq4" value="D" id="dq4d"><label for="dq4d">D. Web Logging</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-question" data-explain="NGFW (Next-Generation Firewall) melakukan Deep Packet Inspection — mampu membedah isi paket hingga layer aplikasi, mendeteksi virus, dan memfilter berdasarkan nama aplikasi, bukan hanya port number.">
    <div class="quiz-q-num">Soal 5</div>
    <div class="quiz-q-text">Jenis firewall yang mampu membedakan trafik WhatsApp dari trafik web biasa meskipun keduanya menggunakan Port 443 disebut...</div>
    <div class="quiz-options">
      <div class="quiz-option"><input type="radio" name="dq5" value="A" id="dq5a"><label for="dq5a">A. Packet Filtering Firewall</label></div>
      <div class="quiz-option"><input type="radio" name="dq5" value="B" id="dq5b"><label for="dq5b">B. Stateful Inspection Firewall</label></div>
      <div class="quiz-option"><input type="radio" name="dq5" value="C" id="dq5c"><label for="dq5c">C. Next-Generation Firewall (NGFW)</label></div>
      <div class="quiz-option"><input type="radio" name="dq5" value="D" id="dq5d"><label for="dq5d">D. Hardware Firewall</label></div>
    </div>
    <div class="quiz-feedback"></div>
  </div>

  <div class="quiz-actions">
    <button class="btn-quiz btn-check"><i class="fa-solid fa-check"></i> Periksa Jawaban</button>
    <button class="btn-quiz btn-reset"><i class="fa-solid fa-rotate-left"></i> Ulangi</button>
  </div>
  <div class="quiz-result"><h3></h3><p></p></div>
</section>
<script>initQuiz('quiz-dhcp',['A','C','C','B','C']);</script>

<?php include 'footer.php'; ?>
