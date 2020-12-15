<?php
include 'header.php';

// if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
//     header("Location: index.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
</head>

<div class="banner">
    <div class="container">
        <h1>ADMIN</h1>
        <p>Express your online business!</p>
        <a href="#content" class="button button-primary">View Pick Up Request</a>
    </div>
</div>
</header>

<script type="text/javascript">
    var statusafter;

    function updateStatus(data) {
        var resi = data.getAttribute("data-resi");
        var statusbefore = data.getAttribute("data-status-before");
        $.confirm({
            title: 'Konfirmasi Pergantian Status',
            type: 'green',
            typeAnimated: true,
            theme: 'modern',
            columnClass: "col-md-5",
            buttons: {
                confirm: {
                    text: 'OK',
                    btnClass: 'btn-green',
                    action: function() {
                        $.ajax({
                            url: "phps/updatestatus.php",
                            method: "POST",
                            data: {
                                resi: resi,
                                status: statusafter,
                            },
                            success: function(res) {
                                window.location.reload();
                                window.location.href = "admin.php#content";
                            }
                        });
                    }
                },
                cancel: {
                    text: 'Cancel',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: "Apakah Anda yakin akan mengganti status dengan nomor resi <b>" + resi + "</b> dari <b>" + statusbefore + "</b> menjadi <b>" + statusafter + "</b>?"
        });
    }

    function passStatus(data) {
        statusafter = $(data).val();
    }

    $(document).ready(function() {
        show();
    });

    function Search(table) {
        $("#filterstatus").on("change", function() {
            table.columns(2).search(this.value).draw();
        });

        $("#filterservice").on("change", function() {
            table.columns(3).search(this.value).draw();
        });
    }

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
                    if (d.delivery_status == 'DELIVERED') {
                        str += "<td style='font-weight: bold;'>" + d.delivery_status + "</td>";
                    } else {
                        str += "<td>" + d.delivery_status + "</td>";
                    }
                    str += "<td>" + d.delivery_type + "</td>";
                    str += "<td>" + d.delivery_date + "</td>";
                    str += "<td>" + d.sender_name + ", " + d.sender_origin_city + "</td>";
                    str += "<td>" + d.receiver_name + ", " + d.receiver_origin_city + "</td>";
                    str += "<td><a type='button' style='font-weight: bold; font-size: 12pt;' class='btn btn-warning' href='viewdata.php?resi=" + d.resi + "'>View</a></td>";
                    str += "<td><select class='form-control' id='status' onchange='passStatus(this)' style='height: 40px; font-size: 12pt;'><option value=''>Pilih status</option>";
                    if (d.delivery_status != 'PICKREQ') {
                        str += "<option value='PICKREQ'>PICKREQ</option>";
                    }
                    if (d.delivery_status != 'PICK') {
                        str += "<option value='PICK'>PICK</option>";
                    }
                    if (d.delivery_status != 'ON TRANSIT') {
                        str += "<option value='ON TRANSIT'>ON TRANSIT</option>";
                    }
                    if (d.delivery_status != 'ON DELIVERY') {
                        str += "<option value='ON DELIVERY'>ON DELIVERY</option>";
                    }
                    if (d.delivery_status != 'DELIVERED') {
                        str += "<option value='DELIVERED'>DELIVERED</option>";
                    }
                    str += "</select></td >";
                    str += "<td><button id='confirm' style='font-size: 12pt;' class='btn btn-primary' onclick='updateStatus(this)' data-status-before='" + d.delivery_status + "' data-resi='" + d.resi + "'>CONFIRM</button></td>";
                    str += "</tr>";
                    num = num + 1;
                }
                dataDiv.html(str);
                var table = $('#historyTable').DataTable({
                    "oLanguage": {
                        "sEmptyTable": "Belum ada Pick Up Request!"
                    }
                });
                Search(table);
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
                    PICK UP REQUEST
                </h3>
            </div>

            <br>

            <center>
                    <div>
                        <select class="form-control" id="filterstatus" style="width: 60%; height:40px; font-size: 12pt;">
                            <option value="">Lihat berdasarkan status</option>
                            <option value="PICKREQ">PICKREQ</option>
                            <option value="PICK">PICK</option>
                            <option value="ON TRANSIT">ON TRANSIT</option>
                            <option value="ON DELIVERY">ON DELIVERY</option>
                            <option value="DELIVERED">DELIVERED</option>
        
                        </select>
                    </div>
                </center><br>
                <center>
                    <div>
                        <select class="form-control" id="filterservice" style="width: 60%; height:40px; font-size: 12pt;">
                            <option value="">Lihat berdasarkan service</option>
                            <option value="ANDRE EKONOMIS">ANDRE EKONOMIS</option>
                            <option value="ANDRE REGULAR">ANDRE REGULAR</option>
                            <option value="ANDRE HALILINTAR">ANDRE HALILINTAR</option>
                        </select>
                    </div>
                </center>

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
                                <td>Change Status</td>
                                <td>Confirmation</td>
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