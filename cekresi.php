<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cek Resi</title>
</head>

<script>
    function cekresi() {
        $.confirm({
            title: 'Cek Resi <i class="fas fa-map-marker-alt"></i>',
            type: 'orange',
            typeAnimated: true,
            theme: 'modern',
            columnClass: "col-md-5",
            buttons: {
                confirm: {
                    text: 'Lacak',
                    btnClass: 'btn-green',
                    action: function() {
                        var resi = this.$content.find('#resi').val();
                        if (resi) {
                            $.ajax({
                                url: "phps/cekresi.php",
                                method: "POST",
                                data: {
                                    resi: resi
                                },
                                success: function(data) {
                                    if (data == 'true') {
                                        <?php
                                        $resi = $_SESSION['cekresi'];

                                        $cekdeliverysql = "SELECT * FROM delivery WHERE resi = ?";
                                        $cekdeliverystmt = $pdo->prepare($cekdeliverysql);
                                        $cekdeliverystmt->execute([$resi]);
                                        $cekdelivery = $cekdeliverystmt->fetch();
                                        ?>
                                        $.alert("<center><table class='table table-bordered'><tr><td>Nomor Resi</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['resi']; ?>" + "</td></tr><tr><td>Status</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['delivery_status']; ?>" + "</td></tr><tr><td>Service</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['delivery_type']; ?>" + "</td></tr><tr><td>Dikirim tanggal</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['delivery_date']; ?>" + "</td></tr><tr><td>Dikirim oleh</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['sender_name']; ?>" + ", " + "<?php echo $cekdelivery['sender_origin_city']; ?>" + "</td></tr><tr><td>Dikirim ke</td><td style='font-weight: bold;'>" + "<?php echo $cekdelivery['receiver_name']; ?>" + ", " + "<?php echo $cekdelivery['receiver_origin_city']; ?>" + "</td></tr><tr></table></center>");
                                    } else {
                                        $.alert('<b style="color: red;">Nomor resi tidak ada!</b>');
                                    }
                                },
                                error: function(data) {
                                    alert('An error occurred.');
                                },
                            });
                        } else {
                            $.alert('<b style="color: red;">Silahkan input resi terlebih dahulu!</b>');
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
                '<form id="myForm" action="phps/cekresi.php" method="POST" enctype="multipart/form-data">' +
                '<div class="form-group">' +
                '<label for="resi" style="font-size: 12pt;"><b>Input Resi</b></label>' +
                '<input type="text" class="form-control" id="resi" name="resi" style="font-size: 24pt; height: 50px; text-align: center;" required>' +
                '</div>' +
                '</form>'
        });
    }
</script>

<div class="banner">
    <div class="container">
        <h1>CEK RESI</h1>
        <p>Express your online business!</p>
        <button class="button button-primary" style="border: 0" onclick="cekresi()">Click Here</button>
    </div>
</div>
</header>

<?php include 'footer.php' ?>