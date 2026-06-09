<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>5. Memahami Arsitektur Jaringan Seluler (Mobile Network)</h2>
      <p>Jaringan seluler dinamakan demikian karena metode jangkauan radio membagi wilayah daratan atau geografis yang luas menjadi area-area kecil berbentuk heksagonal yang disebut "sel" (cell). Setiap sel memiliki antenanya sendiri. Saat Anda bergerak dari Jakarta ke Bandung, ponsel Anda berpindah-pindah koneksi dari ribuan sel secara halus (Handover) tanpa Anda sadari.</p>

      <h3>Revolusi Generasi Jaringan (1G hingga 5G)</h3>
      <table>
        <tr>
          <th>Generasi</th>
          <th>Tahun & Teknologi</th>
          <th>Kecepatan Maksimal</th>
          <th>Ciri Khas Perubahan</th>
        </tr>
        <tr>
          <td>1G</td>
          <td>1980an (AMPS/NMT)</td>
          <td>2.4 Kbps</td>
          <td>Sinyal Radio Analog murni, hanya bisa suara, banyak noise, ukuran baterai HP raksasa.</td>
        </tr>
        <tr>
          <td>2G</td>
          <td>1990an (GSM/CDMA)</td>
          <td>64 Kbps (GPRS/EDGE)</td>
          <td>Peralihan ke sinyal Digital. Memperkenalkan layanan SMS (Short Message Service) dan roaming antar negara. Enkripsi panggilan pertama.</td>
        </tr>
        <tr>
          <td>3G</td>
          <td>2000an (UMTS/HSPA)</td>
          <td>2 - 21 Mbps</td>
          <td>Era awal internet mobile (Broadband). Memungkinkan _video call_ buram dan _mobile browsing_ multimedia.</td>
        </tr>
        <tr>
          <td>4G</td>
          <td>2010an (LTE - Long Term Evolution)</td>
          <td>100 Mbps - 1 Gbps</td>
          <td>Jaringan **All-IP** pertama. Panggilan suara dikonversi menjadi data internet (VoLTE). Era maraknya Video Streaming HD, Ojek Online, dan Social Media live.</td>
        </tr>
        <tr>
          <td>5G</td>
          <td>2020an (NR - New Radio)</td>
          <td>10 Gbps (Teoritis)</td>
          <td>Menggunakan frekuensi sangat tinggi (mmWave). Memiliki tiga fokus: Kecepatan sangat tinggi (eMBB), Kepadatan perangkat IoT super masif (mMTC), dan Latensi nol-koma milidetik untuk operasi medis jarak jauh / Mobil otonom (URLLC).</td>
        </tr>
      </table>

      <h3>Komponen Inti Jaringan Seluler 4G LTE (Arsitektur EPC)</h3>
      <p>Dalam 4G, jaringannya dipisahkan menjadi bagian Radio (E-UTRAN) dan bagian Core (EPC - Evolved Packet Core).</p>
      <ul>
        <li><strong>UE (User Equipment):</strong> Perangkat akhir pelanggan seperti HP, Modem Mi-Fi, atau Sensor pintar dengan kartu SIM (UICC).</li>
        <li><strong>eNodeB (Evolved Node B):</strong> Ini adalah sebutan menara pemancar (BTS) di era 4G. Ia berkomunikasi langsung dengan HP via gelombang radio (Air Interface).</li>
        <li><strong>SGW (Serving Gateway) & PGW (Packet Data Network Gateway):</strong> Bertindak sebagai "Router" raksasa milik operator telekomunikasi. SGW mengurus rute data saat pengguna berpindah tower, sedangkan PGW adalah pintu gerbang lalu lintas menuju internet luar (menyuntikkan IP Address ke HP Anda).</li>
        <li><strong>MME (Mobility Management Entity):</strong> Otak dari jaringan. MME bertugas melacak posisi presisi HP pelanggan (sedang di kota apa, tower mana) dan melakukan autentikasi dari database kartu SIM (HSS) apakah pelanggan sudah bayar kuota atau belum.</li>
      </ul>

      <div class="highlight-box">
        <strong>Mengapa di Kereta Cepat / Jalan Tol, Baterai Cepat Habis?</strong>
        <p>Baterai perangkat Anda paling banyak terkuras bukan oleh layar, melainkan oleh modul transmisi radionya. Di area kereta api cepat, ponsel bergerak memotong ratusan sel (tower) dalam waktu singkat. Akibatnya, ponsel harus bekerja lembur melakukan <em>Handover Request</em> dan registrasi jaringan baru secara konstan (setiap sekian detik). Selain itu, redaman bodi baja kereta membuat ponsel harus menaikkan <em>power transmit</em> (daya pancar) radionya hingga maksimal.</p>
      </div>
    </section>

<?php include 'footer.php'; ?>
