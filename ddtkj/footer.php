<?php
$files  = ['ddtkj.php','ipv4&6.php','tcpip.php','dhcp.php','keamanan.php','seluler.php','microwave.php','satelitip.php','optik.php','wlan.php','subneting.php'];
$labels = [
  'ddtkj.php'     => ['label'=>'Pendahuluan',          'icon'=>'fa-house-chimney'],
  'ipv4&6.php'    => ['label'=>'Pengalamatan IP',       'icon'=>'fa-map-location-dot'],
  'tcpip.php'     => ['label'=>'Model TCP/IP',          'icon'=>'fa-layer-group'],
  'dhcp.php'      => ['label'=>'Layanan Pendukung',     'icon'=>'fa-server'],
  'keamanan.php'  => ['label'=>'Keamanan Jaringan',     'icon'=>'fa-shield-halved'],
  'seluler.php'   => ['label'=>'Jaringan Seluler',      'icon'=>'fa-tower-cell'],
  'microwave.php' => ['label'=>'Microwave & MW Link',   'icon'=>'fa-satellite-dish'],
  'satelitip.php' => ['label'=>'Satelit IP',            'icon'=>'fa-satellite'],
  'optik.php'     => ['label'=>'Transmisi Optik',       'icon'=>'fa-wave-square'],
  'wlan.php'      => ['label'=>'Jaringan WLAN',         'icon'=>'fa-wifi'],
  'subneting.php' => ['label'=>'Subnetting & VLSM',     'icon'=>'fa-diagram-project'],
];
$cf = basename($_SERVER['PHP_SELF']);
$ci = array_search($cf, $files);
$prev = ($ci!==false && $ci>0) ? $files[$ci-1] : false;
$next = ($ci!==false && $ci<count($files)-1) ? $files[$ci+1] : false;
$pct  = ($ci!==false && count($files)>1) ? round(($ci/(count($files)-1))*100) : 0;
?>

    <!-- TOPIC PROGRESS -->
    <div class="topic-progress-badge" style="margin-top:2.5rem;">
      <span class="tpb-text"><i class="fa-solid fa-map-signs"></i> Progress Materi</span>
      <div class="tpb-bar"><div class="tpb-fill"></div></div>
      <span class="tpb-num"><?= ($ci!==false?$ci+1:1) ?>/<?= count($files) ?> · <?= $pct ?>%</span>
    </div>

    <!-- PAGINATION -->
    <div class="pagination">
      <?php if($prev): ?>
        <a href="<?= $prev ?>" class="btn-nav prev">
          <i class="fa-solid fa-arrow-left"></i>
          <div>
            <small>Sebelumnya</small>
            <i class="fa-solid <?= $labels[$prev]['icon'] ?>"></i>
            <?= $labels[$prev]['label'] ?>
          </div>
        </a>
      <?php endif; ?>
      <?php if($next): ?>
        <a href="<?= $next ?>" class="btn-nav next">
          <div style="text-align:right">
            <small>Selanjutnya</small>
            <i class="fa-solid <?= $labels[$next]['icon'] ?>"></i>
            <?= $labels[$next]['label'] ?>
          </div>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      <?php endif; ?>
    </div>

    <!-- FOOTER BOTTOM -->
    <div style="text-align:center;margin-top:2.5rem;padding-top:1.5rem;border-top:1px solid rgba(139,92,246,0.1);">
      <p style="font-size:0.8rem;color:#5a4d6e;">
        <i class="fa-solid fa-network-wired" style="color:#8b5cf6;margin-right:0.4rem;"></i>
        DDTKJ · Dasar-Dasar Teknik Komputer dan Jaringan
      </p>
    </div>
</div></div>
</body></html>
