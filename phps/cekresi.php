<?php
    require "connect.php";

    if (isset($_POST['resi'])) {
        $cekresisql = "SELECT COUNT(*) as x, resi FROM delivery WHERE resi = ?";
        $cekresistmt = $pdo->prepare($cekresisql);
        $cekresistmt->execute([$_POST['resi']]);
        $cekresi = $cekresistmt->fetch();

        if ($cekresi['x'] == 1) {
            if (isset($_SESSION['cekresi'])) {
                unset($_SESSION['cekresi']);
            }
            $_SESSION['cekresi'] = $_POST['resi'];
            echo "true";
        } else {
            echo "false";
        }
    }
    else
    {
        exit();
    }
?>