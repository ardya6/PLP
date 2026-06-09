<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>9. Memahami Prinsip Jaringan WLAN (Wireless LAN) Secara Teknis</h2>
      <p>WLAN, atau yang secara komersial lebih dikenal luas dengan merek dagang **Wi-Fi**, telah mengubah lanskap komputasi dunia dengan menghapus belenggu kabel fisik. Standar resmi dari Wi-Fi dikeluarkan oleh badan IEEE dengan keluarga protokol bernomor **802.11**.</p>

      <h3>Mekanisme Akses Udara: CSMA/CA</h3>
      <p>Sinyal Wi-Fi menggunakan medium udara, yang sifatnya "Setengah Komunikasi" (Half-Duplex). Ibaratnya, udara adalah satu ruangan kecil di mana semua orang di dalamnya ditutup matanya. Jika dua orang bicara bersamaan, suaranya akan bertabrakan tak terdengar (Collision).</p>
      <p>Oleh sebab itu, Wi-Fi menggunakan metode khusus bernama <strong>CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance)</strong>:</p>
      <ol>
        <li><strong>Sense (Mendengarkan):</strong> Laptop akan 'mendengarkan' gelombang radio sekitarnya. "Apakah ada laptop lain yang sedang ngirim data ke router?"</li>
        <li><strong>Avoidance (Penghindaran):</strong> Jika ada, ia diam sebentar (Random Backoff Timer). Jika udara dirasa sedang sepi/kosong, baru ia mengirimkan paket datanya ke Access Point (Router). Hal inilah yang menyebabkan Wi-Fi bisa lambat drastis jika terlalu banyak orang di warkop yang terhubung bersamaan (Antrian Berbicara Udara).</li>
      </ol>

      <h3>Evolusi Perjalanan Standar IEEE 802.11</h3>
      <table>
        <tr>
          <th>Sertifikasi</th>
          <th>Nama IEEE</th>
          <th>Band Frekuensi</th>
          <th>Fitur Terobosan Utama</th>
        </tr>
        <tr>
          <td>Wi-Fi 4</td>
          <td>802.11n (2009)</td>
          <td>2.4 GHz & 5 GHz</td>
          <td>Memperkenalkan teknologi <strong>MIMO (Multiple Input, Multiple Output)</strong>. Router menggunakan banyak antena serentak untuk memantulkan sinyal tembok agar bandwidth naik gila-gilaan hingga 600 Mbps.</td>
        </tr>
        <tr>
          <td>Wi-Fi 5</td>
          <td>802.11ac (2014)</td>
          <td>Hanya 5 GHz</td>
          <td>Fokus kecepatan Gigabit murni. Memperkenalkan <strong>Beamforming</strong> (Sinyal Wi-Fi tidak lagi disebar ke segala arah bulat membabi buta, melainkan difokuskan ditembakkan langsung layaknya senter ke arah HP yang sedang konek).</td>
        </tr>
        <tr>
          <td>Wi-Fi 6</td>
          <td>802.11ax (2019)</td>
          <td>2.4 GHz & 5 GHz</td>
          <td>Resolusi dari kelambatan "Warkop Ramai" tadi. Wi-Fi 6 memperkenalkan teknologi seluler <strong>OFDMA</strong>, memungkinkan 1 aliran Wi-Fi dipotong-potong kecil dan dibagikan ke 4 laptop secara serentak tanpa perlu mengantri bergantian! Sangat cocok untuk stadion, bandara, atau rumah IoT padat.</td>
        </tr>
      </table>

      <h3>Topologi Logis & Istilah WLAN</h3>
      <div class="grid-cards">
        <div class="info-card">
          <h4>BSS (Basic Service Set)</h4>
          <p>Kondisi dasar: Terdiri dari 1 buah _Access Point (AP)_ dan beberapa klien (laptop/HP) di sekitarnya yang saling terkoneksi. BSSID adalah wujud nyata alamat MAC dari radio AP tersebut.</p>
        </div>
        <div class="info-card">
          <h4>ESS (Extended Service Set) / Roaming</h4>
          <p>Jika kampus punya 50 buah AP Wi-Fi berderet, Anda bisa berjalan dari gedung A ke gedung B tanpa putus Wi-Fi dan tidak ganti nama Wi-Fi (SSID sama). 50 AP itu tergabung menjadi 1 ESS raksasa, HP Anda akan otomatis berpindah radio AP (Proses yang disebut **Roaming**).</p>
        </div>
      </div>

      <div class="highlight-box">
        <strong>Keamanan Wi-Fi: WPA2-Personal vs WPA2-Enterprise</strong>
        <p>Di warung kopi/rumah, kita memakai WPA2-Personal (Pre-Shared Key). Anda tinggal minta password "kopihitam123" dan langsung konek. Namun, di Perusahaan Besar/Universitas, itu tidak aman. Mereka menggunakan <strong>WPA-Enterprise (802.1x)</strong> di mana saat Anda konek Wi-Fi, Anda tidak ditanya password Wi-Fi, melainkan ditanya "Username & Password Pegawai Anda". AP kemudian akan mencek ke server RADIUS pusat apakah Anda masih pegawai aktif atau sudah dipecat.</p>
      </div>

    </section>

<?php include 'footer.php'; ?>
