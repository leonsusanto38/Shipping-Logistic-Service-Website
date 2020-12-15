<?php
include 'header.php';

// if (!isset($_SESSION['username']) || $_SESSION['username'] == 'admin') {
//     header("Location: index.php");
//     exit();
// }

if (isset($_SESSION['resi'])) {
    $resi = $_SESSION['resi'];

    $cekdeliverysql = "SELECT * FROM delivery WHERE resi = ?";
    $cekdeliverystmt = $pdo->prepare($cekdeliverysql);
    $cekdeliverystmt->execute([$resi]);
    $cekdelivery = $cekdeliverystmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halo, <?php echo $_SESSION['username'] ?>!</title>
</head>

<script>
    function successPickUp() {
        $.confirm({
            title: 'SUCCESS!',
            type: 'green',
            typeAnimated: true,
            theme: 'modern',
            buttons: {
                cancel: {
                    text: 'CLOSE',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: "Anda berhasil melakukan <i>Request Pick Up</i> untuk kota asal <b>" + "<?php echo $cekdelivery["sender_origin_city"]; ?>" + "</b> dan kota tujuan <b>" + "<?php echo $cekdelivery["receiver_origin_city"]; ?>" + "</b> dengan kategori berat barang <b>" + "<?php echo $cekdelivery["item_weight"]; ?>" + " kg</b> untuk jenis layanan <b>" + "<?php echo $cekdelivery["delivery_type"]; ?>" + ".</b><br><br> Biaya ongkos kirim adalah sebesar<br><span style='font-weight: bold; font-size: 24pt;'>Rp" + "<?php echo $cekdelivery["total_cost"]; ?>" + "</span><br><br> Nomor resi pengiriman<br><span style='font-weight: bold; font-size: 24pt;'>" + "<?php echo $cekdelivery["resi"]; ?>" + "</span></center>"
        });
    }
</script>

<script>
    function successRegister() {
        $.confirm({
            title: 'Successfully Registered!',
            type: 'green',
            typeAnimated: true,
            theme: 'modern',
            buttons: {
                cancel: {
                    text: 'CLOSE',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: "Selamat datang <b>" + "<?php echo $_SESSION['username']; ?>" + "</b> di Andre Cepat Express! Sekarang Anda bisa melakukan <i>Request Pick Up</i> di halaman <i>Pick Up Request</i>."
        });
    }
</script>

<?php
if (isset($_GET['status'])) {
    //sukses melakukan pick up request
    if ($_GET['status'] == 1) {
        echo '<script type="text/javascript">',
            'successPickUp();',
            '</script>';
    }
    //sukses melakukan register
    if ($_GET['status'] == 2) {
        echo '<script type="text/javascript">',
            'successRegister();',
            '</script>';
    }
}
?>

<div class="banner">
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username'] ?>!</h1>
        <p>Express your online business!</p>
        <a href="#content" class="button button-primary">Request Pick Up</a><br>
        <a href="history.php" class="button button-primary-history">Pick Up History</a>
    </div>
</div>
</header>

<main>
    <section id="content" class="content">

        <div class="container" id="pickupreq">
            <div class="row justify-content-center">
                <h3 class="title">
                    PICK UP REQUEST
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
                                <input type="text" class="form-control" id="namasender" name="namasender" placeholder="Masukkan nama pengirim" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hpsender">Nomor HP</label>
                                <input type="number" class="form-control" id="hpsender" name="hpsender" placeholder="Ex: 08123456789" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kotasender">Kota</label>
                                <select class="form-control" id="kotasender" name="kotasender" style="height:40px; font-size: 12pt;" required>
                                    <option value="">Pilih kota pengirim</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jogjakarta">Jogjakarta</option>
                                    <option value="Semarang">Semarang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kodepossender">Kode Pos</label>
                                <input type="number" class="form-control" id="kodepossender" name="kodepossender" placeholder="Ex: 60123" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="alamatsender">Alamat</label>
                                <textarea class="form-control" id="alamatsender" name="alamatsender" placeholder="Alamat pengirim saat ini" rows="2" style="font-size: 12pt;" required></textarea>
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
                                <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Masukkan nama barang" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="jumlahbarang">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlahbarang" name="jumlahbarang" placeholder="Ex: 2" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hargabarang">Harga Barang</label>
                                <input type="number" class="form-control" id="hargabarang" name="hargabarang" placeholder="Ex: 100000" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="beratbarang">Berat Barang Keseluruhan</label>
                                <select class="form-control" id="beratbarang" name="beratbarang" style="height:40px; font-size: 12pt;" required>
                                    <option value="">Pilih kategori berat barang keseluruhan</option>
                                    <option value="1-5">1-5 kg</option>
                                    <option value="6-10">6-10 kg</option>
                                    <option value="11-15">11-15 kg</option>
                                    <option value="16-20">16-20 kg</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="layanan">Jenis Layanan</label>
                                <select class="form-control" name="layanan" id="layanan" style="height:40px; font-size: 12pt;" required>
                                    <option value="">Pilih jenis layanan</option>
                                    <option value="ANDRE EKONOMIS">ANDRE EKONOMIS</option>
                                    <option value="ANDRE REGULAR">ANDRE REGULAR</option>
                                    <option value="ANDRE HALILINTAR">ANDRE HALILINTAR</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="catatan">Catatan (opsional)</label>
                                <textarea class="form-control" id="alamat" name="catatan" placeholder="Catatan untuk barang yang akan dikirim" rows="2" style="font-size: 12pt;"></textarea>
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
                                <input type="text" class="form-control" id="namarecipient" name="namarecipient" placeholder="Masukkan nama penerima" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="hprecipient">Nomor HP</label>
                                <input type="number" class="form-control" id="hprecipient" name="hprecipient" placeholder="Ex: 08123456789" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kotarecipient">Kota</label>
                                <select class="form-control" name="kotarecipient" id="kotarecipient" style="height:40px; font-size: 12pt;" required>
                                    <option value="">Pilih kota penerima</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jogjakarta">Jogjakarta</option>
                                    <option value="Semarang">Semarang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="kodeposrecipient">Kode Pos</label>
                                <input type="number" class="form-control" id="kodeposrecipient" name="kodeposrecipient" placeholder="Ex: 60123" style="height:40px; font-size: 12pt;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="alamatrecipient">Alamat</label>
                                <textarea class="form-control" id="alamatrecipient" name="alamatrecipient" placeholder="Alamat penerima saat ini" rows="2" style="font-size: 12pt;" required></textarea>
                            </div>
                        </div>
                    </div>

                    <br>

                    <center>
                        <button style="font-weight: bold; height:40px; font-size: 12pt;" type="submit" class="btn btn-warning">Request Pick Up</button>
                    </center>

                </div>
        </div>
        </form>

        </div>

    </section>

    <?php include 'footer.php' ?>