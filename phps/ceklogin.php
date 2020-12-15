<?php
require "connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $cekregisteredsql = "SELECT COUNT(*) AS x, username, password FROM user WHERE username = ?";
    $cekregisteredstmt = $pdo->prepare($cekregisteredsql);
    $cekregisteredstmt->execute([$_POST['username']]);
    $cekregistered = $cekregisteredstmt->fetch();

    if ($cekregistered['x'] == 1) {
        if ($cekregistered['password'] == $_POST['password']) {
            echo "true";
            $_SESSION['username'] = $_POST['username'];
        }
        else {
            echo "false";
        }
    } else {
        echo "false";
    }
} else {
    exit();
}
