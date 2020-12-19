<?php
include 'header.php';
$_SESSION['page'] = 'cekongkir';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cek Ongkir</title>
</head>

<style>
    .header-area {
        background-image: url("assets/cekongkir.jpg");
    }
</style>

<script>
    function cekongkir() {
        $.confirm({
            title: 'Cek Ongkir <i class="fas fa-shipping-fast"></i>',
            type: 'orange',
            typeAnimated: true,
            theme: 'modern',
            columnClass: "col-md-5",
            buttons: {
                confirm: {
                    text: 'Cek Ongkir',
                    btnClass: 'btn-green',
                    action: function() {
                        var asal = this.$content.find('#asal').val();
                        var tujuan = this.$content.find('#tujuan').val();
                        var kategori = this.$content.find('#kategori').val();
                        var layanan = this.$content.find('#layanan').val();
                        if (asal && tujuan && kategori && layanan) {
                            $.ajax({
                                url: "phps/cekongkir.php",
                                method: "POST",
                                data: {
                                    asal: asal,
                                    tujuan: tujuan,
                                    kategori: kategori,
                                    layanan: layanan
                                },
                                success: function(data) {
                                    $.alert("<center>Biaya ongkos kirim untuk kota asal <b>" + asal + "</b> dan kota tujuan <b>" + tujuan + "</b> dengan kategori berat barang <b>" + kategori + " kg</b> untuk jenis layanan <b>" + layanan + "</b> adalah sebesar<br><span style='font-weight: bold; font-size: 24pt;'>Rp" + data + "</span></center>");
                                },
                                error: function(data) {
                                    alert('An error occurred.');
                                },
                            });
                        } else {
                            $.alert('<b style="color: red;">Silahkan mengisi semua kolom yang tersedia!</b>');
                            return false;
                        }
                    }
                },
                cancel: {
                    text: 'Cancel',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: '' +
                '<form id="myForm" enctype="multipart/form-data">' +
                '<div class="form-group">' +
                '<label for="asal" style="font-size: 12pt;"><b>Kota Asal <i class="fas fa-city"></i></b></label>' +
                '</center><select class="form-control" id="asal" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih kota asal</option>' +
                '<option value="Surabaya">Surabaya</option>' +
                '<option value="Jakarta">Jakarta</option>' +
                '<option value="Bandung">Bandung</option>' +
                '<option value="Jogjakarta">Jogjakarta</option>' +
                '<option value="Semarang">Semarang</option>' +
                '</select>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<label for="tujuan" style="font-size: 12pt;"><b>Kota Tujuan <i class="fas fa-plane-departure"></i></b></label>' +
                '</center><select class="form-control" id="tujuan" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih kota tujuan</option>' +
                '<option value="Surabaya">Surabaya</option>' +
                '<option value="Jakarta">Jakarta</option>' +
                '<option value="Bandung">Bandung</option>' +
                '<option value="Jogjakarta">Jogjakarta</option>' +
                '<option value="Semarang">Semarang</option>' +
                '</select>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<label for="kategori" style="font-size: 12pt;"><b>Kategori Berat Barang (kg) <i class="fas fa-weight"></i></b></label>' +
                '</center><select class="form-control" id="kategori" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih kategori berat barang</option>' +
                '<option value="1-5">1-5 kg</option>' +
                '<option value="6-10">6-10 kg</option>' +
                '<option value="11-15">11-15 kg</option>' +
                '<option value="16-20">16-20 kg</option>' +
                '</select>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<label for="layanan" style="font-size: 12pt;"><b>Jenis Layanan <i class="fas fa-truck-loading"></i></b></label>' +
                '</center><select class="form-control" id="layanan" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih jenis layanan</option>' +
                '<option value="ANDRE EKONOMIS">ANDRE EKONOMIS &#128178;</option>' +
                '<option value="ANDRE REGULAR">ANDRE REGULAR &#128666;</option>' +
                '<option value="ANDRE HALILINTAR">ANDRE HALILINTAR &#x26a1;</option>' +
                '</select>' +
                '</div><br>' +
                '</form>'
        });
    }
</script>

<div class="banner" style="background-image: url('assets/cekongkir.png');">
    <div class="container">
        <h1>CEK ONGKIR</h1>
        <p>Your package, our passion!</p>
        <button class="button button-primary" style="border: 0" onclick="cekongkir()">Click Here</button>
    </div>
</div>
</header>

<?php include 'footer.php' ?>