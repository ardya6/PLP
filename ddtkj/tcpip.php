<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>2. Membedah Model TCP/IP secara Komprehensif</h2>
      <p>Sebelum kita bisa memecahkan masalah (troubleshoot) jaringan, kita wajib memahami bahasa universal yang digunakan komputer di seluruh dunia. TCP/IP (_Transmission Control Protocol/Internet Protocol_) adalah arsitektur tulang punggung dari seluruh komunikasi jaringan modern, menggantikan OSI Layer karena sifatnya yang praktis dan teruji di lapangan.</p>

      <h3>Sejarah Singkat & Perbedaan dengan OSI</h3>
      <p>OSI Model adalah standar teoritis dengan 7 Layer, sementara TCP/IP merupakan penerapan praktis hasil dari proyek ARPANET (Departemen Pertahanan AS) dengan 4 Layer. Dalam dunia nyata, hampir tidak ada perangkat murni OSI; semuanya menjalankan *Protocol Suite* TCP/IP.</p>

      <h3>Analisis 4 Lapisan (Layer) TCP/IP</h3>
      
      <h4>4. Application Layer (Lapisan Aplikasi)</h4>
      <p>Ini adalah lapisan di mana interaksi antara _software/user_ dengan jaringan terjadi. Layer ini menyiapkan data _payload_ yang akan dikirim. Proses format data, enkripsi tingkat aplikasi, dan dialog manajemen terjadi di sini.</p>
      <ul>
        <li><strong>Protokol Web:</strong> HTTP (Port 80) dan HTTPS (Port 443 - SSL/TLS).</li>
        <li><strong>Protokol Email:</strong> SMTP (Port 25 untuk kirim), POP3 (110 untuk unduh), IMAP (143 untuk sinkronisasi).</li>
        <li><strong>Protokol File & Remote:</strong> FTP (Port 21), SSH (Port 22 untuk *secure terminal*), Telnet (Port 23 - tidak aman).</li>
      </ul>

      <h4>3. Transport Layer (Lapisan Transport)</h4>
      <p>Bertanggung jawab mengubah _payload_ dari Layer Aplikasi menjadi potongan-potongan kecil yang disebut **Segment**. Layer ini menggunakan _Port Number_ untuk membedakan antara trafik browser web dengan trafik game online di satu komputer yang sama.</p>
      <div class="grid-cards">
        <div class="info-card">
          <h4>TCP (Transmission Control Protocol)</h4>
          <p>Sifatnya <strong>Connection-oriented</strong> dan <strong>Reliable</strong>. TCP melakukan 3-way handshake (SYN, SYN-ACK, ACK) sebelum mengirim data. Jika ada paket data yang hilang atau rusak di jalan, TCP akan meminta paket tersebut dikirim ulang. <em>Sangat cocok untuk Website, File Transfer, Email.</em></p>
        </div>
        <div class="info-card">
          <h4>UDP (User Datagram Protocol)</h4>
          <p>Sifatnya <strong>Connectionless</strong> dan <strong>Best-effort</strong>. UDP menyemburkan data secepat mungkin tanpa peduli data tersebut sampai atau tidak. Tidak ada *error recovery* atau pengurutan ulang. <em>Sangat cocok untuk Streaming Video, Game Online, VoIP (Panggilan Suara).</em></p>
        </div>
      </div>

      <h4>2. Internet Layer (Lapisan Internet)</h4>
      <p>Layer ini mengambil **Segment** dari Transport Layer dan mengubahnya menjadi **Packet** dengan menambahkan IP Address Pengirim (Source IP) dan IP Tujuan (Destination IP). Di sinilah keajaiban **Routing** terjadi.</p>
      <ul>
        <li><strong>IP (Internet Protocol):</strong> Bertugas untuk memberikan alamat logis.</li>
        <li><strong>ICMP (Internet Control Message Protocol):</strong> Protokol diagnosa (Digunakan oleh perintah <code>ping</code> dan <code>traceroute</code>) untuk mengecek konektivitas.</li>
        <li><strong>ARP (Address Resolution Protocol):</strong> Bertugas mencari MAC Address dari sebuah IP tujuan di jaringan lokal.</li>
      </ul>

      <h4>1. Network Access Layer (Lapisan Fisik & Datalink)</h4>
      <p>Paket dari Internet Layer turun ke layer ini dan diubah menjadi **Frame**. Frame menambahkan MAC Address perangkat keras (Hardware Address). Terakhir, layer ini menerjemahkan bit-bit digital ke dalam sinyal elektronik (untuk kabel tembaga), sinyal cahaya (untuk fiber optik), atau gelombang radio (untuk Wi-Fi).</p>
      <p>Perangkat yang bekerja di layer ini adalah Hub, Switch, Kabel (UTP, Fiber), dan Kartu Jaringan (NIC).</p>

      <div class="highlight-box">
        <strong>Konsep PDU (Protocol Data Unit) Enkapsulasi</strong>
        <p>Proses turun dari Application ke Network Access disebut Enkapsulasi, layaknya memasukkan surat ke dalam amplop berulang-ulang.</p>
        <p>Data (App) &rarr; ditambah Header TCP = <strong>Segment</strong> (Transport) &rarr; ditambah Header IP = <strong>Packet</strong> (Internet) &rarr; ditambah Header MAC = <strong>Frame</strong> (Network Access) &rarr; diubah menjadi biner sinyal listrik = <strong>Bits</strong>.</p>
      </div>
    </section>

<?php include 'footer.php'; ?>
