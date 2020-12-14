<?php
    require "connect.php";

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $cekregisteredusernamesql = "SELECT COUNT(*) AS x FROM user WHERE username = ?";
        $cekregisteredusernamestmt = $pdo->prepare($cekregisteredusernamesql);
        $cekregisteredusernamestmt->execute([$_POST['username']]);
        $cekregisteredusername = $cekregisteredusernamestmt->fetch();

        $cekregisteredemailsql = "SELECT COUNT(*) AS x FROM user WHERE email = ?";
        $cekregisteredemailstmt = $pdo->prepare($cekregisteredemailsql);
        $cekregisteredemailstmt->execute([$_POST['email']]);
        $cekregisteredemail = $cekregisteredemailstmt->fetch();

        if ($cekregisteredusername['x'] == 0 && $cekregisteredemail['x'] == 0) {
            $registersql = "INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES (?, ?, ?, ?)";
            $registerstmt = $pdo->prepare($registersql);
            $registerstmt->execute(['', $_POST['username'], $_POST['password'], $_POST['email']]);

            echo "true";
            $_SESSION['username'] = $_POST['username'];
        }
        else if ($cekregisteredusername['x'] != 0) {
            echo "falseusername"; 
        }
        else {
        echo "falseemail"; 
        }
    } else {
        exit();
    }
