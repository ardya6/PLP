<?php
session_start();

$accounts = [
    [
        "username" => "murid",
        "password" => "123",
        "nama" => "Murid",
        "role" => "murid"
    ],
    [
        "username" => "guru",
        "password" => "123",
        "nama" => "Guru",
        "role" => "guru"
    ]
];

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

foreach ($accounts as $account) {
    if ($username === $account["username"] && $password === $account["password"]) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $account["username"];
        $_SESSION["nama"] = $account["nama"];
        $_SESSION["role"] = $account["role"];

        header("Location: index.php#login-section");
        exit;
    }
}

echo "<script>
    alert('Username atau password salah!');
    window.location.href = 'index.php#login-section';
</script>";
exit;
?>