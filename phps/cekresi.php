<?php
    require "connect.php";

    if (isset($_POST['resi'])) {
        $cekresisql = "SELECT * FROM delivery WHERE resi = ?";
        $cekresistmt = $pdo->prepare($cekresisql);
        $cekresistmt->execute([$_POST['resi']]);
        $cekresi = $cekresistmt->fetch();
    }
    else
    {
        exit();
    }
?>