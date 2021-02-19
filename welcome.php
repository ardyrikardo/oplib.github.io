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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d54cbc2746.js" crossorigin="anonymous"></script>

    <title>Open Library | Welcome</title>
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
                    <a class="nav-link" href="#catalog"><b>Catalog</b></a>
                    <a class="nav-link" href="#news"><b>News</b></a>
                    <a class="nav-link" href="room_reservation.php"><b>Room reservation</b></a>
                    <a class="nav-link" href="borrow_books.php"><b>Borrow Books</b></a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end">

                <table style="width: 40%;">
                    
                        <tr>
                            <td class="text-light">
                            <form class="form-inline my-2 my-lg-0">
                                <a href="cart.php"><i class="fas fa-shopping-cart fa-x" style="color: white;"></i></a>
                                <a href="#"><h6 class="text-light">&nbsp;&nbsp;&nbsp;Hi!, <?= $_SESSION['nama']; ?></h5></a>
                            </td>
                            <td>
                            <a href="logout.php"><button class="btn btn-outline-light " type="button" style="border-radius: 10px;">Logout</button></a>
                                </form>
                            </td>

                        </tr>

                    
                </table>

            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->
    <br>
    <br>
    <!-- Awal carousel -->
    <div class="container col-8">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1000">
                    <img src="img/ruang13.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/ruang14.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/raung15.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/ruang16.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/ruang17.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/ruang18.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/telkom2.png" class="d-block w-100" alt="..." style="border-radius: 40px;">
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
    <!-- Akhir caraousel -->
    <br>
    <br>
    <br>
    <h4 align="center">Video Profile</h4>
    <br>
    <center>
        <div class="container">
            <iframe width="1000" height="500" src="https://www.youtube.com/embed/xyaezs9zHV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </center>
    <br>
    <!-- Awal Card -->
    <div class="container">
        <h4 align="center" id="catalog">Catalog</h4>
        <br>
        <div class="card-deck">
            <div class="card">
                <img src="img/tel-u1.jpg" class="card-img-top" alt="..." style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://openlibrary.telkomuniversity.ac.id/home/catalog/id/161568/slug/membuat-ppdb-sekolah-dan-computer-based-test-dengan-php-mysqli.html">Membuat PPDB Sekolah dan Computer Based Test dengan PHP + MySQLi</a></h5>
                    <p class="card-text">Multimedia systems- Programming, internet programming, web programming</p>
                </div>
                <div class="card-footer bg-danger">
                    <small class="text-muted">
                        <font color="white">Last updated 1 mins ago</font>
                    </small>
                </div>
            </div>
            <div class="card">
                <img src="img/tel-u1.jpg" class="card-img-top" alt="..." style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://openlibrary.telkomuniversity.ac.id/home/catalog/id/161571/slug/program-linier-dan-aplikasinya-pada-berbagai-software.html">Program Linier dan Aplikasinya Pada Berbagai Software</a> </h5>
                    <p class="card-text">Programming in specific programming languages</p>
                </div>
                <div class="card-footer bg-danger ">
                    <small class="text-muted">
                        <font color="white">Last updated 10 mins ago</font>
                    </small>
                </div>
            </div>
            <div class="card">
                <img src="img/tel-u1.jpg" class="card-img-top" alt="..." style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://openlibrary.telkomuniversity.ac.id/home/catalog/id/161487/slug/bagaimana-menulis-tesis.html">Bagaimana Menulis Tesis</a> </h5>
                    <p class="card-text">Professional, Technical, Expository literature (Rhetoric)</p>
                </div>
                <div class="card-footer bg-danger">
                    <small class="text-muted">
                        <font color="white">Last updated 30 mins ago</font>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Card -->
    <br>
    <br>
    <!-- Awal table -->
    <div class="container">
        <h4 align="center" id="news">News</h4>
        <br>
        <table class="table">
            <thead class="thead-danger bg-danger">
                <tr>
                    <th scope="col" style="text-align: center;">
                        <font color="white">No</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Date</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Topic of News</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Source</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="text-align: center;">1</th>
                    <td style="text-align: center;">26 July 2020</td>
                    <td>Library Newsletter | Tel-U Open Library, July 2020</td>
                    <td style="text-align: center;"><a href="https://openlibrary.telkomuniversity.ac.id/home/information/id/165.html"><img src="img/owl.png" alt="" width="30" height="30"> Click here</a></td>
                </tr>
                <tr>
                    <th scope="row" style="text-align: center;">2</th>
                    <td style="text-align: center;">29 June 2020</td>
                    <td>Library Newsletter | Tel-U Open Library, June 2020</td>
                    <td style="text-align: center;"><a href="https://openlibrary.telkomuniversity.ac.id/home/information/id/162.html"><img src="img/owl.png" alt="" width="30" height="30"> Click here</a></td>
                </tr>
                <tr>
                    <th scope="row" style="text-align: center;">3</th>
                    <td style="text-align: center;">31 May 2020</td>
                    <td>Library Newsletter | Tel-U Open Library, May 2020</td>
                    <td style="text-align: center;"><a href="https://openlibrary.telkomuniversity.ac.id/home/information/id/161.html"><img src="img/owl.png" alt="" width="30" height="30"> Click here</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Akhir table -->
    <br>
    <br>


    <br>

    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col py-3 px-lg-5 border bg-light">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3180046630755!2d107.6302340158907!3d-6.9717588949633855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ad9a7c0053%3A0x6a65913482632aee!2sPerpustakaan%20Universitas%20Telkom%20(Telkom%20University%20Open%20Library)!5e0!3m2!1sen!2sid!4v1601976083348!5m2!1sen!2sid" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col py-3 px-lg-5 border bg-danger" style="text-align: center;">
                <br>
                <br>
                <br>
                <img src="img/maps.png" alt="" width="170" height="230">
                <br>
                <br>
                <h3>
                    <font color="white">Library Location</font>
                </h3>
            </div>
        </div>
    </div>
    <br>
    <br>
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