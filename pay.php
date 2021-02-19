<?php
session_start();
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data peminjam berdasarkan id
$borrow_book = query("SELECT * FROM borrow WHERE id = $id")[0];


$brg = query("SELECT * FROM borrow");

if (isset($_SESSION['username'])) {
} else {
    header("Location: login.php");
}

if (isset($_POST["borrow_update"])) {

    if (ubah($_POST) > 0) {
        echo "
      <script>
        alert('data has been changed successfully!');
        document.location.href = 'admin.php';
      </script>";
    } else {
        echo "
      <script>
      alert('data has failed to change!');
      document.location.href = 'admin.php';
      </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d54cbc2746.js" crossorigin="anonymous"></script>



    <title>Open Libarary | Borrow Books</title>
</head>

<body>


    <!-- Awal Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="img/owl.png" alt="" width="60" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="welcome.php"><b>Home</b><span class="sr-only">(current)</span></a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end">

                <table style="width: 35%;">
                    <form class="form-inline my-2 my-lg-0">
                        <tr>
                            <td class="text-light">
                                <h6>Hi!, <?= $_SESSION['nama']; ?></h5>
                            </td>
                            <td>
                                <a href="logout.php"><button class="btn btn-outline-light" type="button">Logout</button></a>
                            </td>

                        </tr>

                    </form>
                </table>

            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->
    <br>
    <br>

    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-6">

                <div class="col py-5 px-lg-12 border bg-danger shadow p-3 mb-5 bg-danger " style="border-radius: 15px;">
                    <div>
                        <center>
                            <div class="col-sm-10 mt">
                                <img src="img/owl.png" alt="" width="70" height="70">
                            </div>
                        </center>
                    </div>
                    <br>
                    <h4 align="center">
                        <font color="white">Payment Confirmation</font>
                    </h4>
                    <br><br>

                    <form action="" method="POST">
                        <input type="hidden" name="id" id="" value="<?= $borrow_book["id"]; ?>">
                        <center>
                            <div class="col-10 px-4 ">

                                <table style="width: 100%;">
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">Nama</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;<?= $borrow_book["name"]; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">SID</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;<?= $borrow_book["sid"]; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">Code Book</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;<?= $borrow_book["codebook"]; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">Books Title</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;<?= $borrow_book["title"]; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">Duration</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;<?= $borrow_book["duration"]; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="user" class=" text-light" style="text-align: center;">Deposit</label></td>
                                        <td><label for="user" class=" px-5 col-form-label text-light" style="text-align: center;">: &nbsp;Rp.<?= $borrow_book["deposit"]; ?></label></td>
                                    </tr>
                                </table>

                            </div>
                            <center>
                    </form>
                    <div>

                        <!-- Button trigger modal -->
                        <button type="button" class=" col-sm-4 btn btn-primary btn-block mt-5 justify-content-center shadow p-2 mb-0" style="border-radius: 20px;" data-toggle="modal" data-target="#staticBackdrop">
                            Pay
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Payment Confirmation!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Payment is successful!
                                        Go to helpdesk Open Library Tel-U for confirmation your status payment. Thank You!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="welcome.php"><button type="button" class="btn btn-primary">Finish</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>






                </div>


            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
    <!-- Container -->
    <br>
    <br>








    <!-- Awal Footer -->
    <div class="container bg-danger" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
        <br>
        <h5 style="text-align: center;">
            <font color="white">Contact Me as Developer</font>
        </h5>
        <br>


        <center>
            <table style="width: 20% ; text-align: center;">
                <tr>
                    <td>
                        <a href="https://www.instagram.com/ardyrikardo/"><img src="img/instagram.png" alt="" width="50" height="50"></a>
                    </td>
                    <td>
                        <a href="https://github.com/ardyrikardo"><img src="img/git.png" alt="" width="50" height="50"></a>
                    </td>
                    <td>
                        <a href="https://www.linkedin.com/in/ardy-rikardo-1991a8144/"><img src="img/linkedin.png" alt="" width="50" height="50"> </a>
                    </td>
                </tr>
            </table>
            <br>

            <div style="font-size: 12px;">
                <p>
                    <font color="white">Copyright © 2020 - Ardy Rikardo</font>
                </p>
            </div>
        </center>
        <br>


    </div>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>