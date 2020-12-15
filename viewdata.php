<?php
include 'header.php';

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit();
// }

if (isset($_GET['resi'])) {
    $resi = $_GET['resi'];

    $cekdeliverysql = "SELECT * FROM delivery WHERE resi = ?";
    $cekdeliverystmt = $pdo->prepare($cekdeliverysql);
    $cekdeliverystmt->execute([$resi]);
    $cekdelivery = $cekdeliverystmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resi <?php echo $cekdelivery['resi']; ?></title>
</head>

<div class="banner">
    <div class="container">
        <h1>RESI <?php echo $cekdelivery['resi']; ?></h1>
        <p>Express your online business!</p>
        <a href="#content" class="button button-primary">View Data</a><br>
    </div>
</div>
</header>

<main>
    <section id="content" class="content">

        <div class="container" id="pickupreq">
            <div class="row justify-content-center">
                <h3 class="title">
                    RESI <?php echo $cekdelivery['resi']; ?>
                </h3>
            </div>
            <br>
            <br>

            <form action="phps/pickupreq.php" method="POST" id="formPickUp">
                <div class="col-sm-12 col-md-8 offset-md-2">

                    <div class="row justify-content-center">
                        <h3 style="font-weight: bold; font-size: 18pt; color: red;">Sender Information</h3>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="namasender">Nama</label>
                                <input type="text" class="form-control" id="namasender" name="namasender" placeholder="Masukkan nama pengirim" style="height:40px; font-size: 12pt;" value ="<?php echo $cekdelivery['sender_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hpsender">Nomor HP</label>
                                <input type="number" class="form-control" id="hpsender" name="hpsender" placeholder="Ex: 08123456789" style="height:40px; font-size: 12pt;" value ="<?php echo $cekdelivery['sender_phone_number']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kotasender">Kota</label>
                                <input type="text" class="form-control" id="kotasender" name="kotasender" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['sender_origin_city']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kodepossender">Kode Pos</label>
                                <input type="number" class="form-control" id="kodepossender" name="kodepossender" placeholder="Ex: 60123" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['sender_post_code']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="alamatsender">Alamat</label>
                                <input type="text" class="form-control" id="alamatsender" name="alamatsender" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['sender_address']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <h3 style="font-weight: bold; font-size: 18pt; color: red;">Package Information</h3>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="namabarang">Nama Barang</label>
                                <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Masukkan nama barang" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['item_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="jumlahbarang">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlahbarang" name="jumlahbarang" placeholder="Ex: 2" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['item_quantity']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hargabarang">Harga Barang</label>
                                <input type="number" class="form-control" id="hargabarang" name="hargabarang" placeholder="Ex: 100000" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['item_value']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="beratbarang">Berat Barang Keseluruhan</label>
                                <input type="text" class="form-control" id="beratbarang" name="beratbarang" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['item_weight']; ?> kg" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="layanan">Jenis Layanan</label>
                                <input type="text" class="form-control" id="layanan" name="layanan" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['delivery_type']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="catatan">Catatan (opsional)</label>
                                <input type="text" class="form-control" id="catatan" name="catatan" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['item_notes']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <h3 style="font-weight: bold; font-size: 18pt; color: red;">Recipient Information</h3>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="namarecipient">Nama</label>
                                <input type="text" class="form-control" id="namarecipient" name="namarecipient" placeholder="Masukkan nama penerima" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['receiver_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hprecipient">Nomor HP</label>
                                <input type="number" class="form-control" id="hprecipient" name="hprecipient" placeholder="Ex: 08123456789" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['receiver_phone_number']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kotarecipient">Kota</label>
                                <input type="text" class="form-control" id="kotarecipient" name="kotarecipient" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['receiver_origin_city']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kodeposrecipient">Kode Pos</label>
                                <input type="number" class="form-control" id="kodeposrecipient" name="kodeposrecipient" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['receiver_post_code']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="alamatrecipient">Alamat</label>
                                <input type="text" class="form-control" id="alamatrecipient" name="alamatrecipient" style="height:40px; font-size: 12pt;" value="<?php echo $cekdelivery['receiver_address']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <br>

                    <center>
                        <?php
                            if (isset($_SESSION['username'])) {
                                if ($_SESSION['username'] == 'admin') {
                                    echo "<a href='admin.php#content' class='button button-primary'>Back</a><br>";
                                }
                                else {
                                    echo "<a href='history.php#content' class='button button-primary'>Back</a><br>";
                                }
                            }
                        ?>
                    </center>

                </div>
        </div>
        </form>

        </div>

    </section>

    <?php include 'footer.php' ?>