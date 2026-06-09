<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>3. Eksplorasi Layanan Pendukung Jaringan Utama</h2>
      <p>Jaringan komputer yang masif sangat bergantung pada serangkaian layanan atau _services_ (Server) otomatis. Layanan-layanan ini membuat jaringan dapat dikonfigurasi dengan mudah, efisien, aman, dan dapat digunakan oleh pengguna awam tanpa perlu menghafal angka-angka.</p>

      <h3>1. Dynamic Host Configuration Protocol (DHCP)</h3>
      <p>Mengatur IP untuk 10 komputer masih bisa dilakukan manual (Static IP). Namun, bagaimana mengatur IP untuk 10.000 mahasiswa di kampus? DHCP hadir sebagai solusi otomasi distribusi konfigurasi IP Address, Subnet Mask, Default Gateway, dan DNS Server kepada perangkat klien (_lease_ / pinjaman berbatas waktu).</p>
      
      <h4>Proses D.O.R.A (Cara Kerja DHCP)</h4>
      <ol>
        <li><strong>D - Discover (Broadcast):</strong> Klien baru masuk jaringan dan berteriak "Halo, adakah DHCP Server yang bisa memberi saya IP?". (Port 67)</li>
        <li><strong>O - Offer (Unicast):</strong> DHCP Server merespons "Saya ada IP 192.168.1.10 yang kosong, mau pinjam?". (Port 68)</li>
        <li><strong>R - Request (Broadcast):</strong> Klien menyetujui, "Oke, saya mau pakai IP 192.168.1.10 tersebut!".</li>
        <li><strong>A - Acknowledge (Unicast):</strong> DHCP Server mengunci IP tersebut di databasenya dan merespons "Sepakat, ini detail IP, Gateway, dan DNS kamu. Durasi sewa 24 jam."</li>
      </ol>

      <h3>2. Domain Name System (DNS)</h3>
      <p>Sistem hirarkis terdesentralisasi untuk menerjemahkan nama host (seperti <code>www.google.com</code>) menjadi IP Address (seperti <code>142.250.190.46</code>). Ini berfungsi layaknya kontak buku telepon digital berskala global.</p>
      <h4>Hirarki DNS Resolution</h4>
      <ul>
        <li><strong>DNS Resolver (Local/ISP):</strong> Caching server lokal tempat komputer pertama kali bertanya.</li>
        <li><strong>Root Servers (.):</strong> 13 cluster server utama dunia yang tahu siapa yang mengurus .com, .org, dll.</li>
        <li><strong>TLD Servers (.com):</strong> Server yang menyimpan direktori domain seperti google.com.</li>
        <li><strong>Authoritative Name Servers:</strong> Server milik Google yang benar-benar memegang IP spesifik dari <code>www.google.com</code>.</li>
      </ul>

      <h3>3. Network Address Translation (NAT)</h3>
      <p>Karena IP Publik terbatas, jutaan IP Privat dalam kantor/rumah harus "menyamar" menjadi satu atau beberapa IP Publik ketika akan berselancar ke Internet. Proses penyamaran ini dilakukan oleh router melalui tabel NAT.</p>
      <div class="grid-cards">
        <div class="info-card">
          <h4>Static NAT (1-to-1)</h4>
          <p>Satu IP Privat lokal dipetakan mati ke Satu IP Publik spesifik. Biasanya digunakan untuk Server Web di dalam kantor agar bisa diakses orang dari internet.</p>
        </div>
        <div class="info-card">
          <h4>PAT / NAT Overload (Many-to-1)</h4>
          <p>Puluhan IP Privat lokal (misal laptop serumah) meminjam SATU IP Publik yang sama bergantian. Router menggunakan <strong>Port Number</strong> untuk membedakan jalur balik (reply) dari internet ke laptop yang tepat.</p>
        </div>
      </div>

      <h3>4. Proxy Server</h3>
      <p>Server perantara yang berdiri di antara pengguna dan internet. Pengguna tidak meminta data langsung ke website tujuan, melainkan meminta tolong ke Proxy. Proxy kemudian mengambil data web tersebut dan mengirimkannya ke pengguna. <br><strong>Keuntungan:</strong> Bisa memblokir akses ke web negatif (Web Filtering), bisa mempercepat akses jika web sudah tersimpan di memori proxy (Web Caching), dan menyembunyikan identitas IP asli klien.</p>

      <h3>5. VPN, Gateway, dan Firewall</h3>
      <p><strong>Gateway</strong> adalah jembatan penghubung yang bisa mengonversi protokol (misal: Gateway dari jaringan IP ke jaringan telekomunikasi kabel SS7).
      <br><strong>VPN (Virtual Private Network)</strong> adalah protokol _tunnelling_ yang mengenkripsi komunikasi di jaringan publik. Jenis VPN bisa berupa Site-to-Site (Router cabang ke Router Pusat, menggunakan IPsec) atau Client-to-Site (Karyawan WFH menggunakan OpenVPN ke kantor).
      <br><strong>Firewall</strong> adalah inspektur keamanan yang memonitor semua pintu masuk-keluar jaringan (Ports). Firewall modern (NGFW - Next-Gen Firewall) bahkan bisa mendeteksi virus dalam trafik dan memblokir aplikasi spesifik seperti "Tolak semua akses ke TikTok, tapi izinkan YouTube".</p>
    </section>

<?php include 'footer.php'; ?>
