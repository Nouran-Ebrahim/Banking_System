<?php

include "connect.php";
$customers = $conn->query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/style.css'>
    <link rel='stylesheet' type='text/css' href='../bootstrap-icons-1.7.2/bootstrap-icons.css'>
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
                    <li class="nav-item ">
                        <a class="nav-link view active" aria-current="page" href="view_customers&transfer_money.php">View Customers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link view" href="transfer_history.php">Transfer Transaction History</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="con">
        <div class="con1">
            <div class="table_des">
                <table class="table table-bordered tb">
                    <thead>
                        <tr>

                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">ID.</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">Name</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">E-Mail</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">Balance(in Rs.)</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($customers as $data) {
                        ?>
                            <tr>
                                <th style="text-align: center;" scope="row"><?php echo $data['id'] ?></th>
                                <td style="text-align: center;"><?php echo $data['name'] ?></td>
                                <td style="text-align: center;"><?php echo $data['email'] ?></td>
                                <td style="text-align: center;"><?php echo $data['balance'] ?></td>
                                <td style="text-align: center;"><a href="transfer_money_detailes.php?id= <?php echo $data['id']; ?>"> <button class="bt" type="button">Transfer money</button></a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
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