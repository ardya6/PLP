<?php
// Calculate prev and next based on current file
$files = [
    'ddtkj.php', 'ipv4&6.php', 'tcpip.php', 'dhcp.php', 'keamanan.php', 
    'seluler.php', 'microwave.php', 'satelitip.php', 'optik.php', 'wlan.php', 'subneting.php'
];
$current_index = array_search(basename($_SERVER['PHP_SELF']), $files);
$prev = ($current_index !== false && $current_index > 0) ? $files[$current_index - 1] : false;
$next = ($current_index !== false && $current_index < count($files) - 1) ? $files[$current_index + 1] : false;
?>
    <div class="pagination">
      <?php if ($prev): ?>
        <a href="<?= $prev ?>" class="btn-nav prev"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</a>
      <?php endif; ?>
      <?php if ($next): ?>
        <a href="<?= $next ?>" class="btn-nav next">Selanjutnya <i class="fa-solid fa-arrow-right"></i></a>
      <?php endif; ?>
    </div>
</div> <!-- End container -->
</body>
</html>
