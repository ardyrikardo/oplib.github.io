<?php
    session_start();
    require 'functions.php';

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

    <title>Open Library | Room Reservation</title>
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
    <h4 align="center" id="reservasi">Room Discussion Reservation</h4>
    <br>
    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <!-- Awal Form -->
            <div class="col py-3 px-lg-5 border bg-danger">
                <h4 align="center">
                    <font color="white">Registration</font>
                </h4>
                <br>

                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                            <font color="white">Name</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="email" class="form-control" id="inputEmail3" style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">
                            <font color="white">SID</font>
                        </label>
                        <div class="col-sm-9">
                            <div class="col-12 mr-5">
                                <input type="text" class="form-control" id="inputPassword3" style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">
                                <font color="white">Room</font>
                            </legend>
                            <div class="col-sm-10">
                                <div class="col-12 mr-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            <font color="white">Room 1</font>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            <font color="white">Room 2</font>
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <font color="white">Room 3</font>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <font color="white">Time</font>
                        </div>
                        <div class="col-sm-10">
                            <div class="col-6 mr-5">
                                <select id="inputState" class="form-control">
                                    <option selected>08.30-9.30</option>
                                    <option>10.30-11.30</option>
                                    <option>13.30-14.30</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn btn-dark btn-block mt-5" data-toggle="modal" data-target="#exampleModal" style="border-radius: 20px;">
                            Submit
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Reservasi Ruangan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Permintaan anda kami akan proses. Silahkan menghubungi helpdesk Open Library. Terima Kasih Atas Perhatiannya!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
            <!-- Akhir Form -->
            <div class="col py-3 px-lg-3 border bg-light">
                <!-- Awal Table -->
                <div class="container">
                    <h4 align="center">Monitoring Room Discussion</h4>
                    <br>
                    <table class="table">
                        <thead class="thead-danger bg-danger">
                            <tr>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Time</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Room</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Status</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Information</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="text-align: center;">08.30-9.30</th>
                                <td style="text-align: center;">Room 1</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td style="text-align: center;"><img src="img/check.png" alt="" width="20" height="20"></td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center;">10.30-11.30</th>
                                <td style="text-align: center;">Room 2</td>
                                <td>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </td>
                <td style="text-align: center;"><img src="img/check.png" alt="" width="20" height="20"></td>
                </tr>
                <tr>
                    <th scope="row" style="text-align: center;">13.30-14.30</th>
                    <td style="text-align: center;">Room 3</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td style="text-align: center;"><img src="img/check.png" alt="" width="20" height="20"></td>
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