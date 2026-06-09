<?php include 'header.php'; ?>

    <section class="module-section">
      <h2>10. Menguasai Subneting, CIDR, dan Perhitungan VLSM Tingkat Lanjut</h2>
      <p>Mengelola pengalamatan IP pada jaringan yang besar membutuhkan seni memecah dan mengalokasikan (Routing Protocol). Bayangkan Anda adalah developer perumahan yang memiliki lahan luas 256 hektar. Anda harus membagi blok perumahan tersebut secara spesifik: 100 hektar untuk Klaster Mewah, 60 hektar untuk Klaster Minimalis, 30 hektar untuk fasilitas taman, dan sisa jalan raya. Itulah esensi dari bab ini.</p>

      <h3>Materi 1: Subnetting Dasar (FLSM - Fixed Length Subnet Mask)</h3>
      <p>Pada FLSM, porsi potongan kue jaringan dibagi menjadi ukuran yang sama besar persis. Mari pelajari rumus matematika dasar untuk jaringan Kelas C (Network Default /24: <code>192.168.1.0</code>). Anda ingin memotong jaringan ini agar bisa dipakai oleh 4 ruang kantor (4 subnet) terpisah.</p>
      <ol>
        <li><strong>Berapa Bit yang Dipinjam?</strong> Kita butuh 4 subnet. Rumus: <code>2^X &ge; Jumlah Subnet</code>. Maka <code>2^2 = 4</code>. Jadi X = 2 bit.<br>Subnet Mask awal <code>11111111.11111111.11111111.00000000</code> (/24). Pinjam 2 bit dari nol: <code>11111111.11111111.11111111.11000000</code> yang jika didesimalkan menjadi <code>255.255.255.192</code>. Nilai "192" adalah angka ajaibnya.</li>
        <li><strong>Blok Subnet:</strong> Berapa rentang isi per rumah? Rumusnya selalu konstan: <code>256 - Angka Ajaib Tadi</code> = <code>256 - 192 = 64</code>. Kelipatan bloknya adalah: 0, 64, 128, 192.</li>
        <li><strong>Hasil Blok FLSM:</strong>
          <ul>
            <li><strong>Subnet 1 (Ruang A):</strong> Network 192.168.1.0 | Host IP 192.168.1.1 s.d 192.168.1.62 | Broadcast 192.168.1.63</li>
            <li><strong>Subnet 2 (Ruang B):</strong> Network 192.168.1.64 | Host IP 192.168.1.65 s.d 192.168.1.126 | Broadcast 192.168.1.127</li>
            <li><strong>Subnet 3 (Ruang C):</strong> Network 192.168.1.128 | ... | Broadcast 192.168.1.191</li>
            <li><strong>Subnet 4 (Ruang D):</strong> Network 192.168.1.192 | ... | Broadcast 192.168.1.255</li>
          </ul>
        </li>
      </ol>
      <p><em>Kelemahan FLSM: Jika Ruang A butuh 50 PC, tapi Ruang D ternyata hanya butuh 2 PC, Ruang D tetap dipaksa dikasih 62 IP kosong, 60 IP address terbuang musafir percuma (Wasted IP).</em></p>

      <h3>Materi 2: CIDR (Classless Inter-Domain Routing)</h3>
      <p>CIDR hadir untuk menghapus kekakuan "Kelas A, B, C" warisan lama. Kini Prefix (garis miring /) menentukan segalanya secara kustom tanpa blokir absolut. Selain untuk memecah jaring (Subnetting), fungsi utama CIDR justru sebaliknya: <strong>Route Summarization / Supernetting (Menggabung Jaringan)</strong>.</p>
      
      <div class="grid-cards">
        <div class="info-card">
          <h4>Kasus Supernetting (Penyederhanaan Routing Tabel)</h4>
          <p>Anda adalah Admin Jaringan Provinsi. Ada 4 cabang router mengirim laporan tabel: `10.1.0.0/24`, `10.1.1.0/24`, `10.1.2.0/24`, `10.1.3.0/24`. Keempat rute itu di-routing menuju arah kabel yang sama (Port Serial 1). Daripada menyimpan 4 baris, Router pintar dengan CIDR meringkasnya menjadi satu rute tunggal raksasa: <strong>10.1.0.0/22</strong>. Hal ini membuang beban CPU router secara eksponensial.</p>
        </div>
      </div>

      <h3>Materi 3: Analisis Studi Kasus VLSM Terpandu (Variable Length)</h3>
      <p>VLSM adalah mahkota dari manajemen IP Address. Ini menyelesaikan masalah pemborosan IP tadi dengan membiarkan satu jaringan utama memiliki "subnet mask yang berbeda-beda / campur aduk" sesuai dengan kebutuhan riil setiap klaster/ruangan. Syarat utamanya: <strong>Harus diurutkan pengerjaannya dari Ruangan Terbesar ke Terkecil.</strong></p>

      <div class="highlight-box">
        <strong>Studi Kasus Eksekusi VLSM Berantai</strong>
        <p>Anda punya 1 jaringan IP murni: <code>192.168.10.0/24</code> (Total IP: 256). Perusahaan minta dialokasikan untuk 3 hal: <br>1. Lab Komputer Utama (Butuh 100 PC)<br>2. Ruang Manajer (Butuh 25 PC)<br>3. Koneksi Backbone Router Gedung 1 ke Router Gedung 2 (Hanya butuh 2 IP persis).</p>
        <hr style="border:1px solid rgba(255,255,255,0.1); margin:10px 0;">
        <p><strong>Langkah 1 (Lab Utama - 100 PC):</strong><br>Berapa 2 pangkat sekian yang bisa menampung 100 host? Yaitu 2^7 = 128 host. <br>Sisa bit untuk host adalah 7, maka Prefix-nya 32 bit total dikurang 7 bit host = <strong>/25</strong>.<br>Alokasi blok 1: <code>192.168.10.0</code> s.d <code>192.168.10.127</code> (Subnet /25 ini dipakai oleh Lab).<br><br><strong>Langkah 2 (Manajer - 25 PC):</strong><br>Berapa pangkat menampung 25? Yaitu 2^5 = 32 host. <br>Prefix-nya 32 - 5 = <strong>/27</strong>.<br>Alokasi blok 2 (dilanjutkan dari sisa atas): Mulai dari <code>192.168.10.128</code> ditambah 32 blok = Berakhir di <code>192.168.10.159</code> (Subnet /27 ini dipakai Manajer).<br><br><strong>Langkah 3 (Router Backbone - 2 PC):</strong><br>Berapa pangkat menampung 2? Hati-hati, rumusnya 2^X - 2. Berarti 2^2 = 4 (dikurang dua untuk network&broadcast = sisa pas 2 Host Murni).<br>Prefix-nya 32 - 2 = <strong>/30</strong>. (Ingat, link PtP router selalu identik dengan subnet /30).<br>Alokasi blok 3 (dilanjutkan): Mulai <code>192.168.10.160</code> ditambah 4 blok = Berakhir <code>192.168.10.163</code>. <br>IP .161 dicolok ke Router 1, IP .162 dicolok ke Router 2. Pas 100% efisien tanpa IP tersisa.</p>
        <p><em>Sisa ruang IP dari 164 sampai 255 masih murni bersih, bisa ditabung untuk dipakai divisi lain tahun depan! Inilah keindahan teknik VLSM.</em></p>
      </div>
    </section>

<?php include 'footer.php'; ?>
