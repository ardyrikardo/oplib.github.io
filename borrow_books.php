<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
} else {
    header("Location: login.php");
}


if (isset($_POST["borrow_submit"])) {

    if (tambah($_POST) > 0) {
        echo "
      <script>
      alert('data berhasil direcord')
      </script>";

        header("Location: receipt.php");
        exit;
    } else {
        echo "
      <script>
      alert('data gagal direcord')
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

    <!-- Awal Gutter -->
    <h4 align="center" id="reservasi">Borrow Books</h4>
    <br>
    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <!-- Awal Form -->
            <div class="col py-3 px-lg-5 border bg-danger">
                <!-- <h4 align="center">
                    <font color="white">Input Your Data</font>
                </h4> -->
                <br>
                <br>

                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">
                            <font color="white">Name</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="nama" style="border-radius: 10px;" name="name" value="<?= $_SESSION['nama']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">
                            <font color="white">SID</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="nim" style="border-radius: 10px;" name="sid" value="<?= $_SESSION['sid']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="code" class="col-sm-3 col-form-label">
                            <font color="white">Code Book</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="code" style="border-radius: 10px;" name="codebook" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">
                            <font color="white">Title</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="title" style="border-radius: 10px;" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="duration" class="col-sm-3 col-form-label">
                            <font color="white">Duration</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="number" class="form-control" id="duration" style="border-radius: 10px;" name="duration" placeholder="days" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="duration" class="col-sm-3 col-form-label">
                            <font color="white">Status</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="duration" style="border-radius: 10px;" name="status" placeholder="" value="Pending" readonly required>
                            </div>
                        </div>
                    </div>



                    <div>

                        <div>
                            <center>
                                <div class="col-sm-10 mt-5">
                                    <button type="submit" class="btn btn-primary btn-block mt-5 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 20px;" name="borrow_submit">
                                        Submit
                                    </button>
                                </div>
                            </center>
                        </div>
                        <!-- <button type="submit" class="btn btn-dark btn-block mt-5" data-toggle="modal" data-target="#exampleModal" style="border-radius: 20px;" name="borrow_submit">
                            Submit
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Reservasi Ruangan</h5>
                                        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Permintaan anda kami akan proses. Silahkan menghubungi helpdesk Open Library. Terima Kasih Atas Perhatiannya!
                                    </div>
                                    <div class="modal-footer">
                                        <a href="welcome.php"><button type="submit" class="btn btn-success" data-dismiss="modal">OK</button></a>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>



                </form>
            </div>
            <!-- Akhir Form -->
            <div class="col py-3 px-lg-3 border bg-light">
                <!-- Awal Table -->
                <div class="container">
                    <h4 align="center">Catalog</h4>
                    <br>
                    <table class="table">
                        <thead class="thead-danger bg-danger">
                            <tr>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Code Book</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Title</font>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="text-align: center;">A12DY</th>
                                <td style="text-align: left;">Programming Algorithm</td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center;">B12DY</th>
                                <td style="text-align: left;">Data Structure</td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center;">C12DY</th>
                                <td style="text-align: left;">Web Apps</td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <div style="text-align: center;">
                        <img src="img/owl2.png" alt="" width="100" height="100">
                    </div>
                    <br>
                </div>
                <!-- Akhir Table -->
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- Akhir Form -->
    <!-- Awal Footer -->
    <div class="container bg-danger " style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
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
</body>

</html>