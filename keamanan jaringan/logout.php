<?php
session_start();
session_destroy();

header("Location: index.php#login-section");
exit;
?>