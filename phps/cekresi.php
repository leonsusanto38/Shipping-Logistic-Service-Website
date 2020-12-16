<?php
    require "connect.php";

    header("Content-Type: application/json");

    if (isset($_POST['resi'])) {
        $cekresisql = "SELECT * FROM delivery WHERE resi = ?";
        $cekresistmt = $pdo->prepare($cekresisql);
        $cekresistmt->execute([$_POST['resi']]);
        
        if ($cekresistmt->rowCount() == 1) {
            //credits handrian
            $row = $cekresistmt->fetch();
            echo json_encode($row);
        } else {
            echo "false";
        }
    }
    else
    {
        exit();
    }
?>