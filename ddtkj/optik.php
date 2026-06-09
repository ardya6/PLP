<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>8. Mengenal Media Transmisi Optik Secara Mendalam</h2>
      <p>Bila kabel tembaga (Coaxial, UTP) mengirimkan data menggunakan getaran sinyal listrik, **Fiber Optic** mengirimkan data murni dalam bentuk kecepatan cahaya (foton). Kabel ini terbuat dari kaca silika super murni yang sangat bening; jika Anda punya kaca sebesar samudera yang terbuat dari bahan kabel fiber optik, Anda masih bisa melihat dasar samudera dengan sangat jelas dari permukaan air.</p>

      <h3>Prinsip Fisika: Pemantulan Internal Sempurna</h3>
      <p>Bagaimana cahaya bisa merambat di kabel yang berbelok-belok tanpa menabrak dan bocor keluar? Jawabannya ada pada prinsip _Total Internal Reflection_. Kabel fiber terdiri dari dua lapisan kaca dengan tingkat kerapatan refraksi yang berbeda. Bagian dalam (Core) lebih rapat, bagian selimutnya (Cladding) lebih renggang. Saat cahaya ditembakkan ke Core dengan sudut tajam, ia tidak akan bisa menembus Cladding, melainkan akan memantul bolak-balik sepenuhnya layaknya cermin tanpa henti hingga tiba di ujung penerima.</p>

      <h3>Jenis-jenis Kabel Fiber Optic</h3>
      <div class="grid-cards">
        <div class="info-card">
          <h4>Single-Mode Fiber (SMF)</h4>
          <p>Memiliki _Core_ yang sangat sempit (sekitar **8 hingga 10 mikrometer**). Sumber cahayanya adalah sinar **Laser** berpresisi tinggi. Karena jalurnya sempit, cahaya merambat hampir lurus sempurna (hanya satu mode perambatan). Kecepatannya gila-gilaan dan sangat jauh (mencapai 100 KM+). Ini adalah tulang punggung internet laut global (Submarine Cables).</p>
        </div>
        <div class="info-card">
          <h4>Multi-Mode Fiber (MMF)</h4>
          <p>Memiliki _Core_ yang jauh lebih lebar (sekitar **50 hingga 62.5 mikrometer**). Sumber cahayanya biasanya adalah **LED** (Light Emitting Diode). Karena jalurnya lebar, banyak cahaya yang bisa merambat sekaligus namun dengan sudut zig-zag (memantul berkali-kali). Pantulan zig-zag ini menyebabkan sinyal saling bertabrakan seiring jarak, jadi MMF hanya bisa digunakan untuk jarak pendek (kurang dari 2 KM, misal antar gedung kampus).</p>
        </div>
      </div>

      <h3>Teknologi Multiplexing (DWDM & PON)</h3>
      <p>Jika kita punya satu helai kabel optik, apakah hanya bisa dipakai 1 komputer? Tentu tidak! Optik punya fitur sulap warna bernama _Wavelength Division Multiplexing (WDM)_.</p>
      <ul>
        <li><strong>DWDM (Dense WDM):</strong> Ibaratkan kabel kaca adalah sebuah pipa transparan raksasa. Kita bisa menembakkan cahaya Laser warna Merah, Kuning, Biru, dan puluhan varian warna lain secara bersamaan. Tiap "Warna" (Wavelength) membawa aliran data 100 Gbps yang sama sekali tidak saling bercampur. Satu helai rambut kaca bisa memuat kapasitas puluhan Terabit data!</li>
        <li><strong>GPON (Gigabit Passive Optical Network):</strong> Ini adalah teknologi FTTH (Fiber to the Home) seperti Indihome. GPON memakai "Pemecah Kaca" (Splitter) pasif tanpa listrik di pinggir jalan untuk memecah 1 sinar optik dari ISP menjadi 32 hingga 128 cabang cahaya kecil yang masuk ke router modem ONT di rumah-rumah Anda.</li>
      </ul>

      <div class="highlight-box">
        <strong>Penyakit Utama Fiber Optik: Attenuation & Dispersion</strong>
        <p>Meskipun sakti, fiber optik punya kelemahan. Pertama adalah redaman (Attenuation), cahaya makin redup semakin jauh karena terabsorpsi kaca. Kedua, masalah fisik utama bernama <strong>Dispersion (Penyebaran)</strong>. Saat pulsa cahaya ditembakkan berbentuk kotak [__], menempuh jarak sangat jauh, pulsa tersebut akan 'meleber' dan tumpul. Jika dua buah pulsa berdekatan sama-sama meleber, mesin penerima tidak bisa lagi membedakan mana pulsa "1" dan mana pulsa "0". Oleh karena itu diperlukan perangkat penguat sinyal (EDFA / Optical Amplifier) setiap 80-100 KM jarak tempuh.</p>
      </div>

    </section>

<?php include 'footer.php'; ?>
