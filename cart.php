<?php
session_start();
require 'functions.php';

$brg = query("SELECT * FROM borrow");

if (isset($_SESSION['username'])) {
} else {
    header("Location: login.php");
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

                <table style="width: 30%;">
                    <form class="form-inline my-2 my-lg-0">
                        <tr>
                            <td class="text-light">
                                <h6>Hi!, <?= $_SESSION['nama']; ?></h5>
                            </td>
                            <td>
                                <a href="logout.php"><button class="btn btn-outline-light" type="button" style="border-radius: 10px;">Logout</button></a>
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
    <!-- Awal Table -->
    <div class="container col-9">
        <h4 align="center">Cart</h4>
        <br>
        <table class="table">
            <thead class="thead-danger bg-danger">
                <tr>
                    <th scope="col" style="text-align: center;">
                        <font color="white">No</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Name</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">SID</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Code Book</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Title</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Duration</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Deposit</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Status</font>
                    </th>
                    

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($brg as $row) : ?>

                    <tr>
                        <th scope="row" style="text-align: center;"><?= $i ?></th>
                        <td style="text-align: center;"><?= $row["name"] ?></td>
                        <td style="text-align: center;"><?= $row["sid"] ?></td>
                        <td style="text-align: center;"><?= $row["codebook"] ?></td>
                        <td style="text-align: center;"><?= $row["title"] ?></td>
                        <td style="text-align: center;"><?= $row["duration"] ?> day</td>
                        <td style="text-align: center;">Rp. <?= $row["deposit"] ?></td>
                        <td style="text-align: center;"><?= $row["status"] ?></td>
                        


                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div>
        <center>
            <div class="col-sm-1 mt-5">
                <a href="welcome.php"><button type="button" class="btn btn-primary btn-block mt-5 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 20px;" name="borrow_submit">
                        Finish
                    </button></a>

            </div>
        </center>
    </div>
    <br><br><br><br><br><br><br><br>

    <div style="text-align: center;">

        <img src="img/owl2.png" alt="" width="100" height="100">
    </div>
    <!-- Akhir Table -->

    <br>







    <!-- Akhir Form -->
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
</body>

</html>