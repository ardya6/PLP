<?php include 'header.php'; ?>

    <div class="content-header">
      <div class="badge"><i class="fa-solid fa-graduation-cap"></i> Modul Pembelajaran DDTKJ</div>
      <h1>Dasar-Dasar Teknik Komputer & Jaringan</h1>
      <p>Modul pembelajaran terstruktur dan komprehensif. Setiap capaian pembelajaran dirancang untuk membangun pemahaman mendalam dari fondasi hingga tingkat lanjut.</p>
    </div>

    <section class="module-section">
      <h2><span class="icon-badge"><i class="fa-solid fa-book-open"></i></span> Pendahuluan & Gambaran Umum</h2>
      <p>Modul ini mencakup <strong>11 Capaian Pembelajaran (CP)</strong> yang saling berhubungan, membentuk pemahaman menyeluruh tentang dunia jaringan komputer dan telekomunikasi. Dimulai dari konsep pengalamatan IP hingga implementasi routing tingkat lanjut menggunakan VLSM.</p>

      <h3>Mengapa Belajar Jaringan Komputer?</h3>
      <p>Di era digital, hampir semua infrastruktur kehidupan modern bergantung pada jaringan: perbankan digital, layanan kesehatan, pendidikan daring, perdagangan elektronik, hingga sistem transportasi pintar. Seorang teknisi jaringan yang handal adalah ujung tombak operasional digital suatu bangsa.</p>

      <div class="grid-cards">
        <div class="info-card">
          <span class="card-icon"><i class="fa-solid fa-graduation-cap"></i></span>
          <h4>Tujuan Pembelajaran</h4>
          <p>Siswa mampu memahami teori komunikasi data, merancang jaringan dengan subnetting efisien, mengonfigurasi layanan jaringan inti (DHCP, DNS, NAT), dan mengamankan jaringan menggunakan prinsip keamanan siber berlapis.</p>
        </div>
        <div class="info-card">
          <span class="card-icon"><i class="fa-solid fa-list-check"></i></span>
          <h4>Struktur Modul</h4>
          <p>Materi dibagi menjadi <strong>11 bab</strong> yang disusun secara <em>sequential</em> (berurutan). Setiap bab merupakan satu Capaian Pembelajaran tersendiri. Direkomendasikan membaca dari bab pertama ke terakhir untuk membangun pemahaman yang solid.</p>
        </div>
        <div class="info-card">
          <span class="card-icon"><i class="fa-solid fa-route"></i></span>
          <h4>Jalur Pembelajaran</h4>
          <p>Dari fondasi (IP Address, TCP/IP) → Implementasi (DHCP, DNS, NAT) → Keamanan → Teknologi Wireless (Seluler, WLAN, Microwave, Satelit, Optik) → Routing Lanjutan (VLSM & CIDR).</p>
        </div>
      </div>

      <h3>Daftar Capaian Pembelajaran</h3>
      <ul class="step-list">
        <li>
          <div class="step-num">1</div>
          <div class="step-content"><strong>Pengalamatan IP (IPv4 & IPv6)</strong> – Memahami struktur biner IP Address, kelas, jenis komunikasi, IP publik vs privat, dan fitur revolusioner IPv6.</div>
        </li>
        <li>
          <div class="step-num">2</div>
          <div class="step-content"><strong>Model TCP/IP</strong> – Membedah 4 lapisan arsitektur TCP/IP, protokol di setiap layer, perbandingan dengan OSI, dan konsep enkapsulasi data.</div>
        </li>
        <li>
          <div class="step-num">3</div>
          <div class="step-content"><strong>Layanan Pendukung Jaringan</strong> – DHCP (proses DORA), DNS, NAT/PAT, Proxy Server, Gateway, VPN, dan Firewall generasi terbaru.</div>
        </li>
        <li>
          <div class="step-num">4</div>
          <div class="step-content"><strong>Keamanan Jaringan Berlapis</strong> – CIA Triad, jenis malware, Social Engineering, Zero Trust Architecture, dan evolusi Firewall dari generasi ke generasi.</div>
        </li>
        <li>
          <div class="step-num">5</div>
          <div class="step-content"><strong>Jaringan Seluler</strong> – Revolusi 1G–5G, arsitektur 4G LTE (EPC), komponen eNodeB, SGW/PGW, MME, dan teknologi OFDM.</div>
        </li>
        <li>
          <div class="step-num">6</div>
          <div class="step-content"><strong>Komunikasi Microwave</strong> – Prinsip Line-of-Sight, Zona Fresnel, spektrum frekuensi, modulasi 4096-QAM, dan penanganan Rain Fade (ACM).</div>
        </li>
        <li>
          <div class="step-num">7</div>
          <div class="step-content"><strong>Jaringan Satelit IP</strong> – Perbandingan orbit GEO vs LEO, teknologi VSAT IP, komponen BUC & LNB, serta revolusi konstelasi Starlink.</div>
        </li>
        <li>
          <div class="step-num">8</div>
          <div class="step-content"><strong>Transmisi Fiber Optik</strong> – Prinsip Total Internal Reflection, perbedaan SMF vs MMF, teknologi DWDM & GPON, serta permasalahan Attenuation & Dispersion.</div>
        </li>
        <li>
          <div class="step-num">9</div>
          <div class="step-content"><strong>Jaringan WLAN</strong> – Mekanisme CSMA/CA, evolusi standar IEEE 802.11 (Wi-Fi 4/5/6/7), topologi BSS & ESS, keamanan WPA2 vs WPA3.</div>
        </li>
        <li>
          <div class="step-num">10</div>
          <div class="step-content"><strong>Subneting, CIDR & VLSM</strong> – Perhitungan FLSM, Route Summarization dengan CIDR, studi kasus alokasi IP dengan VLSM dari besar ke kecil.</div>
        </li>
      </ul>

      <div class="highlight-box">
        <strong><i class="fa-solid fa-lightbulb"></i> Tips Belajar Efektif</strong>
        <p>Jangan sekedar membaca — <strong>praktikkan setiap konsep</strong> menggunakan simulasi (Cisco Packet Tracer) atau lab virtual. Konsep subnetting harus dikerjakan dengan kalkulator biner; konsep TCP/IP bisa diobservasi menggunakan Wireshark. Pengetahuan tanpa latihan hanya menjadi hiasan kepala.</p>
      </div>
    </section>

<?php include 'footer.php'; ?>
