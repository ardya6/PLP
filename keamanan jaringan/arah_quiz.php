<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php#login-section");
    exit;
}

if ($_SESSION["role"] === "murid") {
    header("Location: quiz_murid.php");
    exit;
}

if ($_SESSION["role"] === "guru") {
    header("Location: nilai_guru.php");
    exit;
}

header("Location: index.php#login-section");
exit;
?>