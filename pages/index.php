<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/style.css'>
    <link rel='stylesheet' type='text/css' href='../bootstrap-icons-1.7.2/bootstrap-icons.css'>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <div class="container-fluid nav-con">
            <div class="head">
                <img src="../images/logo.png" alt="No" class="logo">
                <a class="navbar-brand size" href="index.php">Sparks Bank</a>
            </div>
            <button class="navbar-toggler hum" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link view" aria-current="page" href="view_customers&transfer_money.php">View Customers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link view" href="transfer_history.php">Transfer Transaction History</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="con">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/1_ccexpress.jpeg" class="d-block w-100" alt="no">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/2_ccexpress.jpeg" class="d-block w-100" alt="no">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/8_ccexpress.jpeg" class="d-block w-100" alt="no">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="data_con">
            <div class="txt">
                <p class="about"><span class="let">A</span>bout</p>
                <p class="def"><span class="arrow"><i class="fa fa-angle-double-right" ></i></span>This is a Basic Banking System to make banking transactions much easier,faster and time saving.</p>
            </div>
            <div class="feat">
                <p class="about"><span class="let">F</span>eatures</p>
                <ul class="lis">
                    <li ><span class="arrow"><i class="fa fa-angle-double-right" ></i></span><a href="view_customers&transfer_money.php">View Castomers</a></li>
                    <li><span class="arrow"><i class="fa fa-angle-double-right" ></i></span><a href="transfer_history.php">Transfer History</a></li>
                </ul>
            </div>
        </div>
        <div class="footer">

            <div class="created">
                Created By
            </div>
            <div class="name">
                Nouran Ebrahim El Mohamady
            </div>

            <div class="icon">
                <a href="https://www.linkedin.com/in/eng-nouran-el-mohamady/"><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>