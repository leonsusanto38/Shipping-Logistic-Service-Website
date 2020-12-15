<?php
    require "connect.php";

    if (isset($_POST['resi']) && isset($_POST['status'])) {
        $updatestatussql = "UPDATE delivery SET delivery_status = ? WHERE resi = ?";
        $updatestatusstmt = $pdo->prepare($updatestatussql);
        $updatestatusstmt->execute([$_POST['status'], $_POST['resi']]);

        echo "true";
    } else {
        exit();
    }
