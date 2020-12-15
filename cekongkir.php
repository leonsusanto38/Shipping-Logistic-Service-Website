<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cek Ongkir</title>
</head>

<script>
    function cekongkir() {
        $.confirm({
            title: 'Cek Ongkir <i class="fas fa-truck"></i>',
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
                '<label for="asal" style="font-size: 12pt;"><b>Kota Asal</b></label>' +
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
                '<label for="tujuan" style="font-size: 12pt;"><b>Kota Tujuan</b></label>' +
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
                '<label for="kategori" style="font-size: 12pt;"><b>Kategori Berat Barang (kg)</b></label>' +
                '</center><select class="form-control" id="kategori" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih kategori berat barang</option>' +
                '<option value="1-5">1-5 kg</option>' +
                '<option value="6-10">6-10 kg</option>' +
                '<option value="11-15">11-15 kg</option>' +
                '<option value="16-20">16-20 kg</option>' +
                '</select>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<label for="layanan" style="font-size: 12pt;"><b>Jenis Layanan</b></label>' +
                '</center><select class="form-control" id="layanan" style="height:40px; font-size: 12pt;">' +
                '<option value="">Pilih jenis layanan</option>' +
                '<option value="ANDRE EKONOMIS">ANDRE EKONOMIS</option>' +
                '<option value="ANDRE REGULAR">ANDRE REGULAR</option>' +
                '<option value="ANDRE HALILINTAR">ANDRE HALILINTAR</option>' +
                '</select>' +
                '</div><br>' +
                '</form>'
        });
    }
</script>

<div class="banner">
    <div class="container">
        <h1>CEK ONGKIR</h1>
        <p>Express your online business!</p>
        <button class="button button-primary" style="border: 0" onclick="cekongkir()">Click Here</button>
    </div>
</div>
</header>

<?php include 'footer.php' ?>