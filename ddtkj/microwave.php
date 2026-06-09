<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>6. Menjelaskan Prinsip Komunikasi Microwave (Gelombang Mikro)</h2>
      <p>Jika Fiber Optic adalah jalan tol raya di darat, maka Microwave Transmission adalah jembatan gantung tidak kasat mata yang terbang melintasi udara. Komunikasi Microwave menggunakan frekuensi radio ultra-tinggi (biasanya dari spektrum 1 GHz hingga 100 GHz) yang menembak seperti sinar laser lurus (Point-to-Point) antar dua menara/antena parabola.</p>

      <h3>Karakteristik Fisika Gelombang Mikro</h3>
      <p>Panjang gelombang (wavelength) microwave sangat pendek, rata-rata hanya beberapa milimeter atau sentimeter. Sifat fisika utamanya meliputi:</p>
      <ul>
        <li><strong>Syarat Mutlak Line-of-Sight (LoS):</strong> Antena pengirim dan penerima harus benar-benar "saling melihat" secara mata telanjang. Gelombang mikro tidak memiliki kemampuan merambat melengkung mengikuti kontur bumi seperti radio gelombang pendek (SW). Bangunan, bukit, bahkan pohon yang tumbuh akan menghalangi sinyal total.</li>
        <li><strong>Zona Fresnel (Fresnel Zone):</strong> Ruang kosong di antara dua antena tidak boleh hanya kosong sejajar garis lurus, tetapi harus membentuk ruang berbentuk "cerutu" (elips) tiga dimensi. Jika ada benda yang masuk ke dalam elips 60% Zona Fresnel, sinyal utama akan terpantul sehingga membatalkan sinyal aslinya dan kualitas akan turun drastis.</li>
      </ul>

      <h3>Spektrum Band Frekuensi Microwave</h3>
      <div class="grid-cards">
        <div class="info-card">
          <h4>Band Rendah (L, S, C-Band)</h4>
          <p>Frekuensi 1 GHz - 8 GHz.<br>Sinyal band rendah lebih kebal terhadap cuaca (hujan). Memiliki jangkauan yang sangat jauh (hingga puluhan kilometer antar menara). Namun, lebar pitanya (Bandwidth) lebih kecil.</p>
        </div>
        <div class="info-card">
          <h4>Band Tinggi (Ku, Ka, V, E-Band)</h4>
          <p>Frekuensi 12 GHz - 80 GHz.<br>Memiliki bandwith raksasa (mampu membawa data multi-Gigabit). Namun, jangkauannya sangat pendek (hanya 1 hingga 5 kilometer) karena sangat sensitif dengan tetesan hujan.</p>
        </div>
      </div>

      <h3>Modulasi Tingkat Tinggi (High-Order Modulation)</h3>
      <p>Di masa lalu, microwave hanya mampu mentransfer data beberapa Megabit (QPSK). Sekarang, perangkat modern menggunakan modulasi QAM (Quadrature Amplitude Modulation) tingkat raksasa seperti <strong>4096-QAM</strong>. Bayangkan sebuah truk kurir yang biasanya hanya muat 1 kargo, dengan 4096-QAM truk tersebut bisa memuat 4096 jenis variasi data dalam sekali angkut gelombang, meningkatkan kecepatan backbone Microwave hingga lebih dari 10 Gbps secara nirkabel!</p>

      <div class="highlight-box">
        <strong>Faktor Musuh Utama: Hujan (Rain Fade)</strong>
        <p>Hujan adalah musuh terbesar microwave, khususnya di negara tropis seperti Indonesia. Pada frekuensi di atas 10 GHz (seperti 15 GHz atau 23 GHz), ukuran diameter rintik hujan ternyata seukuran dengan panjang gelombang radionya. Akibatnya, rintik hujan tersebut menyerap dan menghamburkan energi gelombang mikro. Solusinya? Engineer jaringan biasanya menerapkan fitur ACM (Adaptive Coding & Modulation). Saat badai datang, radio otomatis menurunkan kecepatan transfer datanya dari 1000 Mbps ke 50 Mbps agar koneksi tidak putus (sinyal dibuat lebih "tahan banting" meski jadi lebih lambat).</p>
      </div>

    </section>

<?php include 'footer.php'; ?>
