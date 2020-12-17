<?php
require "connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        echo "admin";
        $_SESSION['username'] = $_POST['username'];
    }
    else {
        $cekregisteredsql = "SELECT COUNT(*) AS x, username, password FROM user WHERE username = ?";
        $cekregisteredstmt = $pdo->prepare($cekregisteredsql);
        $cekregisteredstmt->execute([$_POST['username']]);
        $cekregistered = $cekregisteredstmt->fetch();

        if ($cekregistered['x'] == 1) {
            if ($cekregistered['password'] == $_POST['password']) {
                $_SESSION['username'] = $_POST['username'];
                echo "true";
            } else {
                echo "false";
            }
        } else {
            echo "false";
        }
    }
} else {
    exit();
}
?>