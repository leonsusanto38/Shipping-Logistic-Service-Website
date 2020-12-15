<?php
include 'header.php';

// if (!isset($_SESSION['username']) || $_SESSION['username'] == 'admin') {
//     header("Location: index.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pick Up History</title>
</head>

<div class="banner">
    <div class="container">
        <h1>PICK UP HISTORY</h1>
        <p>Express your online business!</p>
        <a href="#content" class="button button-primary">View Pick Up History</a>
    </div>
</div>
</header>

<script type="text/javascript">
    $(document).ready(function() {
        show();
    });

    var ajaxcall;

    function show() {
        $("#historyTableBody").html("<span>Harap tunggu...</span>");

        if (ajaxcall != null) {
            ajaxcall.abort();
        }

        $.ajax({
            url: "phps/refreshdelivery.php",
            type: "get",
            dataType: "json",
            success: function(result) {
                $("#historyTable").dataTable().fnDestroy();
                var data = result;
                var str = "";
                var dataDiv = $("#historyTableBody");
                var num = 1;
                //loop dari data
                for (var i = 0; i < data.length; i++) {
                    var d = data[i];
                    str += "<tr style='font-weight: 100;'>";
                    str += "<td>" + num + "</td>";
                    str += "<td>" + d.resi + "</td>";
                    str += "<td>" + d.delivery_status + "</td>";
                    str += "<td>" + d.delivery_type + "</td>";
                    str += "<td>" + d.delivery_date + "</td>";
                    str += "<td>" + d.sender_name + ", " + d.sender_origin_city + "</td>";
                    str += "<td>" + d.receiver_name + ", " + d.receiver_origin_city + "</td>";
                    str += "<td><a type='button' style='font-weight: bold; font-size: 12pt;' class='btn btn-warning' href='viewdata.php?resi=" + d.resi + "'>View</a></td>";
                    str += "</tr>";
                    num = num + 1;
                }
                dataDiv.html(str);
                $('#historyTable').dataTable({
                    "oLanguage": {
                        "sEmptyTable": "Belum ada history Pick Up Request!"
                    }
                });
            },
            error: function(result) {
                //Error handling
                alert("ERROR!");
                console.log();

            }
        });
    }
</script>

<main>
    <section id="content" class="content">

        <div class="container" id="aboutus">
            <div class="row justify-content-center">
                <h3 class="title">
                    PICK UP HISTORY
                </h3>
            </div>

            <div class="row" style="margin-top: 20px;overflow-x: auto;">
                <div class="col-12">
                    <table class="table table-hovered table-striped" id="historyTable" style="color: #412c27; text-align: center;">
                        <thead>
                            <tr style="font-weight: bold;">
                                <td>#</td>
                                <td>Nomor Resi</td>
                                <td>Status</td>
                                <td>Service</td>
                                <td>Dikirim tanggal</td>
                                <td>Dikirim oleh</td>
                                <td>Dikirim ke</td>
                                <td>Lihat data</td>
                            </tr>
                        </thead>
                        <tbody id="historyTableBody">

                        </tbody>
                    </table>
                    <h3 id="empty" style="text-align:center;"></h3>
                </div>
            </div>

        </div>

    </section>

    <?php include 'footer.php' ?>