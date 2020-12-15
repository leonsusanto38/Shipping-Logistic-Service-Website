<?php
    require "connect.php";

    function RandomInt()
    {
        $characters =
        '0123456789';
        $randstring = '';
        for ($i = 0; $i < 13; $i++) {
            $randchar = substr($characters, rand(0, strlen($characters)), 1);
            $randstring = $randstring . $randchar;
        }
        return $randstring;
    }

    if (isset($_POST)) {
        $username = $_SESSION['username'];

        $namasender = $_POST['namasender'];
        $hpsender = $_POST['hpsender'];
        $kotasender = $_POST['kotasender'];
        $kodepossender = $_POST['kodepossender'];
        $alamatsender = $_POST['alamatsender'];

        $namabarang = $_POST['namabarang'];
        $jumlahbarang = $_POST['jumlahbarang'];
        $hargabarang = $_POST['hargabarang'];
        $beratbarang = $_POST['beratbarang'];
        $layanan = $_POST['layanan'];
        $catatan = $_POST['catatan'];

        $namarecipient = $_POST['namarecipient'];
        $hprecipient = $_POST['hprecipient'];
        $kotarecipient = $_POST['kotarecipient'];
        $kodeposrecipient = $_POST['kodeposrecipient'];
        $alamatrecipient = $_POST['alamatrecipient'];

        $timestamp = date("Y-m-d H:i:s");
        $resi = RandomInt();

        $cekiddestinationsql = "SELECT * FROM destination WHERE city_origin = ? AND city_destination = ?";
        $cekiddestinationstmt = $pdo->prepare($cekiddestinationsql);
        $cekiddestinationstmt->execute([$kotasender, $kotarecipient]);
        $cekiddestination = $cekiddestinationstmt->fetch();

        // echo $cekiddestination['id'];

        $cekiddeliverysql = "SELECT * FROM delivery_type WHERE delivery_type_name = ?";
        $cekiddeliverystmt = $pdo->prepare($cekiddeliverysql);
        $cekiddeliverystmt->execute([$layanan]);
        $cekiddelivery = $cekiddeliverystmt->fetch();

        // echo $cekiddelivery['id'];

        $cekiditemsql = "SELECT * FROM item_type WHERE item_type_weight = ?";
        $cekiditemstmt = $pdo->prepare($cekiditemsql);
        $cekiditemstmt->execute([$beratbarang]);
        $cekiditem = $cekiditemstmt->fetch();

        // echo $cekiditem['id'];

        $cekfeesql = "SELECT * FROM cost_fee WHERE id_delivery_type = ? AND id_item_type = ? AND id_destination = ?";
        $cekfeestmt = $pdo->prepare($cekfeesql);
        $cekfeestmt->execute([$cekiddelivery['id'], $cekiditem['id'], $cekiddestination['id']]);
        $cekfee = $cekfeestmt->fetch();

        $deliverysql = "INSERT INTO `delivery` (`id`, `delivery_date`, `sender_name`, `sender_phone_number`, `sender_origin_city`, `sender_address`, `sender_post_code`, `receiver_name`, `receiver_phone_number`, `receiver_origin_city`, `receiver_address`, `receiver_post_code`, `item_name`, `item_quantity`, `item_value`, `item_weight`, `item_notes`, `delivery_type`, `total_cost`, `delivery_status`, `resi`, `username`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $deliverystmt = $pdo->prepare($deliverysql);
        $deliverystmt->execute(['', $timestamp, $namasender, $hpsender, $kotasender, $alamatsender, $kodepossender, $namarecipient, $hprecipient, $kotarecipient, $alamatrecipient, $kodeposrecipient, $namabarang, $jumlahbarang, $hargabarang, $beratbarang, $catatan, $layanan, $cekfee['cost_fee'], 'PICKREQ', $resi, $username]);

        $_SESSION['resi'] = $resi;

        // echo $_SESSION['kotasender'] = $kotasender;

        header("Location: ../user.php?status=1");
        exit();

        // echo $deliverysql;
    } else {
        header("Location: ../user.php?status=0");
        exit();
    }
?>