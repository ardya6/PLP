<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>1. Memahami Pengalamatan IP secara Mendalam (IPv4 dan IPv6)</h2>
      <p>IP Address (Internet Protocol Address) adalah inti dari seluruh komunikasi internet. Ia merupakan identifikasi logis yang memungkinkan data untuk dikirim dari satu jaringan ke jaringan lain melintasi lautan luas _router_ di seluruh dunia.</p>
      
      <h3>Internet Protocol versi 4 (IPv4)</h3>
      <p>IPv4 terdiri dari 32-bit angka biner yang dibagi menjadi 4 oktet (kelompok 8-bit). Karena manusia kesulitan menghafal bilangan biner seperti <code>11000000.10101000.00000001.00000001</code>, kita merepresentasikannya ke dalam format **desimal bertitik** (Dotted Decimal) yaitu <code>192.168.1.1</code>.</p>
      
      <h4>Pemahaman Network ID dan Host ID</h4>
      <p>Dalam setiap alamat IP, terdapat pembagian antara pengenal jaringan (Network ID) dan pengenal perangkat (Host ID), sama halnya dengan **Nama Jalan (Network)** dan **Nomor Rumah (Host)**. Batas pemisahan ini ditentukan oleh _Subnet Mask_.</p>

      <h4>Jenis-jenis Komunikasi Pengalamatan IP</h4>
      <ul>
        <li><strong>Unicast:</strong> Pengiriman dari satu pengirim ke satu tujuan spesifik (One-to-One). Sangat umum, seperti membuka website atau mengirim email.</li>
        <li><strong>Broadcast:</strong> Pengiriman dari satu pengirim ke SELURUH perangkat dalam jaringan lokal yang sama (One-to-All). Contoh: Permintaan DHCP (ARP).</li>
        <li><strong>Multicast:</strong> Pengiriman dari satu pengirim ke sekelompok perangkat yang tergabung di dalam grup khusus (One-to-Many). Contoh: IPTV, Zoom Meeting.</li>
      </ul>

      <h4>Public IP vs Private IP</h4>
      <div class="grid-cards">
        <div class="info-card">
          <i class="fa-solid fa-globe"></i>
          <h4>IP Publik (Public IP)</h4>
          <p>Alamat yang diakui dan dapat dijangkau (routable) di seluruh internet secara global. IP ini disewakan oleh ISP (Indihome, Biznet) dan diatur oleh lembaga IANA. Setiap IP Publik bersifat unik di seluruh dunia.</p>
        </div>
        <div class="info-card">
          <i class="fa-solid fa-house-laptop"></i>
          <h4>IP Privat (Private IP)</h4>
          <p>Alamat bebas pakai untuk jaringan lokal (LAN/Kantor/Rumah). IP ini TIDAK bisa digunakan berselancar di internet secara langsung. Rentang IP Privat (RFC 1918) adalah: <code>10.0.0.0/8</code>, <code>172.16.0.0/12</code>, dan <code>192.168.0.0/16</code>.</p>
        </div>
      </div>

      <h3>Internet Protocol versi 6 (IPv6)</h3>
      <p>Keterbatasan 4,3 miliar alamat pada IPv4 menjadi masalah serius akibat era IoT (_Internet of Things_) di mana kulkas, jam tangan, dan lampu pintar membutuhkan IP. IPv6 dirancang dengan pengalamatan 128-bit yang mampu menyediakan sekitar 340 undesiliun alamat (angka dengan 36 nol!).</p>

      <h4>Karakteristik Unik IPv6</h4>
      <ul>
        <li><strong>Format Heksadesimal:</strong> Ditulis dalam 8 kelompok (masing-masing 16-bit) dipisahkan oleh tanda titik dua (:). Contoh: <code>2001:0db8:85a3:0000:0000:8a2e:0370:7334</code>.</li>
        <li><strong>Penyingkatan (Zero Compression):</strong> Jika ada sekumpulan nol berurutan, bisa disingkat menggunakan "::" sekali saja. Sehingga alamat di atas dapat ditulis <code>2001:db8:85a3::8a2e:370:7334</code>.</li>
        <li><strong>Keamanan Bawaan (IPsec):</strong> Tidak seperti IPv4 yang keamanan/enkripsinya bersifat opsional tambahan, IPv6 merancang IPsec sebagai elemen dasar yang terintegrasi (End-to-End Encryption).</li>
        <li><strong>Tidak Mengenal Broadcast:</strong> IPv6 mengganti sistem _broadcast_ dengan _Multicast_ dan fitur baru bernama _Anycast_ (pengiriman ke perangkat terdekat dari grup) untuk menghemat efisiensi _bandwidth_.</li>
      </ul>

      <div class="highlight-box">
        <strong>Mengapa IPv4 dan IPv6 Tidak Bisa Berkomunikasi Langsung?</strong>
        <p>Keduanya adalah protokol yang bahasanya sama sekali berbeda. Paket IPv6 tidak dikenali oleh router IPv4 murni. Oleh karena itu, ISP sering menerapkan teknik transisi seperti <strong>Dual-Stack</strong> (menjalankan IPv4 dan IPv6 secara bersamaan di router) atau <strong>Tunnelling</strong> (membungkus paket IPv6 ke dalam IPv4 agar bisa lewat).</p>
      </div>
    </section>

<?php include 'footer.php'; ?>
