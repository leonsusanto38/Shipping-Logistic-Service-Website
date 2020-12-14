<?php
    require "connect.php";

    if (isset($_POST['asal']) && isset($_POST['tujuan']) && isset($_POST['kategori']) && isset($_POST['layanan'])) {
        $cekiddestinationsql = "SELECT * FROM destination WHERE city_origin = ? AND city_destination = ?";
        $cekiddestinationstmt = $pdo->prepare($cekiddestinationsql);
        $cekiddestinationstmt->execute([$_POST['asal'], $_POST['tujuan']]);
        $cekiddestination = $cekiddestinationstmt->fetch();

        // echo $cekiddestination['id'];

        $cekiddeliverysql = "SELECT * FROM delivery_type WHERE delivery_type_name = ?";
        $cekiddeliverystmt = $pdo->prepare($cekiddeliverysql);
        $cekiddeliverystmt->execute([$_POST['layanan']]);
        $cekiddelivery = $cekiddeliverystmt->fetch();

        // echo $cekiddelivery['id'];

        $cekiditemsql = "SELECT * FROM item_type WHERE item_type_weight = ?";
        $cekiditemstmt = $pdo->prepare($cekiditemsql);
        $cekiditemstmt->execute([$_POST['kategori']]);
        $cekiditem = $cekiditemstmt->fetch();

        // echo $cekiditem['id'];

        $cekfeesql = "SELECT * FROM cost_fee WHERE id_delivery_type = ? AND id_item_type = ? AND id_destination = ?";
        $cekfeestmt = $pdo->prepare($cekfeesql);
        $cekfeestmt->execute([$cekiddelivery['id'], $cekiditem['id'], $cekiddestination['id']]);
        $cekfee = $cekfeestmt->fetch();

        echo $cekfee['cost_fee'];
    } else {
        exit();
    }
?>