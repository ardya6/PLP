<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>7. Teknologi Jaringan Satelit Berbasis IP</h2>
      <p>Bagi negara kepulauan besar (archipelago) atau benua dengan pegunungan terjal dan gurun pasir, menarik kabel tembaga atau fiber optik secara finansial sangat merugikan. Komunikasi Satelit hadir sebagai "Kabel Optik di Langit" karena ia bisa menyinari dan menjangkau seperlima bumi dengan satu parabola.</p>
      <p>Satelit buatan yang diluncurkan oleh roket bertindak sebagai <strong>Repeater Raksasa (Transponder)</strong>. Antena stasiun bumi A (misal Jakarta) mengirimkan sinyal radio ke angkasa (Uplink), satelit menangkapnya, memperkuatnya, merubah frekuensinya, lalu memancarkannya kembali ke darat (Downlink) ke stasiun B (misal Papua).</p>

      <h3>Mengenal Ketinggian Orbit (GEO, MEO, LEO)</h3>
      <table>
        <tr>
          <th>Karakteristik</th>
          <th>GEO (Geostationary Earth Orbit)</th>
          <th>LEO (Low Earth Orbit)</th>
        </tr>
        <tr>
          <td><strong>Ketinggian</strong></td>
          <td>Super tinggi (~35.786 kilometer) di ekuator.</td>
          <td>Sangat rendah (500 - 2000 kilometer).</td>
        </tr>
        <tr>
          <td><strong>Kecepatan Putar</strong></td>
          <td>Putaran satelit persis sama dengan putaran rotasi bumi. Jadi satelit tampak diam/statis di langit dari sudut pandang kita di darat.</td>
          <td>Sangat cepat. Satu satelit mengelilingi seluruh bumi hanya dalam 90 menit hingga 2 jam.</td>
        </tr>
        <tr>
          <td><strong>Ukuran Antena Bumi</strong></td>
          <td>Antena tidak perlu alat pelacak motorik, cukup dihadapkan/kunci mati (pointing) secara permanen ke satu arah.</td>
          <td>Antena harus menggunakan sistem _Phased Array_ atau bermotor (Tracking) untuk melacak pergerakan satelit yang lari melintasi langit.</td>
        </tr>
        <tr>
          <td><strong>Latensi (Delay)</strong></td>
          <td>Tinggi. Perjalanan sinyal 70.000 KM PP memakan waktu sekitar **500 - 700 milidetik (ms)**. Buruk untuk main Game / Video Call.</td>
          <td>Sangat rendah. Latensi di sekitar **25 - 50 milidetik (ms)**, hampir mirip dengan ping internet via Fiber Optic rumahan.</td>
        </tr>
        <tr>
          <td><strong>Contoh Implementasi</strong></td>
          <td>Satelit Nusantara Satu, Palapa Ring, VSAT Perbankan ATM.</td>
          <td>Starlink (SpaceX), OneWeb, Kuiper System.</td>
        </tr>
      </table>

      <h3>Teknologi VSAT IP (Very Small Aperture Terminal)</h3>
      <p>VSAT adalah stasiun bumi penerima dua arah berukuran kecil dengan piringan parabola berdiameter 0.9m hingga 1.8m. Arsitekturnya telah sepenuhnya beralih dari komunikasi TDM lama ke sistem Full IP Base. Komponen Utamanya:</p>
      <ul>
        <li><strong>Modem Satelit:</strong> Mengubah paket data IP (dari router Cisco/Mikrotik) ke sinyal frekuensi IF (Intermediate Frequency).</li>
        <li><strong>BUC (Block Up Converter):</strong> Pemancar (Transmitter) luar ruangan. Ia menaikkan sinyal IF tadi menjadi frekuensi radio super tinggi (misal Ku-Band 14 GHz) lalu menembakkannya ke angkasa. Semakin besar "Watt" BUC, semakin kuat daya tembus hujan dan kecepatannya.</li>
        <li><strong>LNB (Low Noise Block):</strong> Komponen kecil di tengah parabola yang tugasnya menerima sinyal pantulan balik dari luar angkasa dengan sensitivitas luar biasa tinggi, kemudian meredam "suara bising" latar belakang semesta.</li>
      </ul>

      <div class="highlight-box">
        <strong>Revolusi Konstelasi LEO Broadband (Starlink)</strong>
        <p>Di dekade 2020-an, Starlink merevolusi dunia satelit. Jika jaringan GEO hanya menggunakan 1 satelit raksasa seharga $300 Juta, LEO menggunakan "Konstelasi Sesuatu". Ribuan satelit kecil murah ditebar untuk menyelimuti orbit rendah (Mega-constellation). Terminal pengguna Starlink di atap rumah bukan lagi sekadar piringan diam, melainkan ribuan antena mikro aktif berselimut papan datar (Phased-array Antennas) yang sanggup menembakkan "sinar virtual" melacak pergerakan satelit yang sedang lewat secepat kilat tanpa bagian fisik yang berputar.</p>
      </div>

    </section>

<?php include 'footer.php'; ?>
