<?php
    include 'connect.php';

    header("Content-Type: application/json");

    $username = $_SESSION['username'];

    if ($username == 'admin') {
        $deliverysql = "SELECT * FROM delivery";
        $deliverystmt = $pdo->prepare($deliverysql);
        $deliverystmt->execute();
    }
    else {
        $deliverysql = "SELECT * FROM delivery WHERE username = ?";
        $deliverystmt = $pdo->prepare($deliverysql);
        $deliverystmt->execute([$username]);
    }

    $result = array();
    while($row = $deliverystmt->fetch()){
        array_push($result, $row);
    }
    echo json_encode($result);
?>