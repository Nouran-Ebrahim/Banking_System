<?php
include "connect.php";
$sender_id = $_GET['id'];
$sender_data = $conn->query("SELECT * FROM customers where id=$sender_id")->fetchAll(PDO::FETCH_ASSOC);
$customers = $conn->query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);
if (isset($_POST['submit'])) {
    $to = $_POST['to'];
    $selected = $conn->query("SELECT `balance` FROM `customers` WHERE id=$to")->fetch();
    $sender = $conn->query("SELECT `balance` FROM `customers` WHERE id=$sender_id")->fetch();
    $sender_name = $conn->query("SELECT `name` FROM `customers` WHERE id=$sender_id")->fetch();
    $selected_name = $conn->query("SELECT `name` FROM `customers` WHERE id=$to")->fetch();
    $amount = $_POST['amount'];
    $receiverBalance = $selected[0] + $amount;
    $senderBalance = $sender[0] - $amount;
    if ($amount <= 0) {
        echo '<script> alert("The Amount is NEGATIVE or ZERO")</script>';
    } elseif ($amount > $sender[0]) {
        echo '<script> alert("Your Balance is not ENOUGH")</script>';
    } else {
        $senderUpdate = " UPDATE customers
        SET `balance` = $senderBalance
        WHERE `id` =$sender_id";
        $conn->exec($senderUpdate);
        $receiverUpdate = " UPDATE customers
        SET `balance` = $receiverBalance
        WHERE `id` =$to";
        $conn->exec($receiverUpdate);
        $sql = "INSERT INTO transfer_money (sender,receiver,balance) VALUES('$sender_name[0]','$selected_name[0]','$amount')";
        $conn->exec($sql);
        header("location:transfer_history.php");
    }
    $amount = 0;
}
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
                    <li class="nav-item">
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
        <div class="con1" style="margin-bottom:0">
            <div class="table_des">
                <table class="table table-bordered tb" style="margin-bottom: 0;">
                    <thead>
                        <tr>

                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">ID.</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">Name</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">E-Mail</th>
                            <th style="text-align: center;background-color: #dcc1c3;" scope="col">Balance(in Rs.)</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sender_data as $data) {
                        ?>
                            <tr>
                                <th style="text-align: center;" scope="row"><?php echo $data['id'] ?></th>
                                <td style="text-align: center;"><?php echo $data['name'] ?></td>
                                <td style="text-align: center;"><?php echo $data['email'] ?></td>
                                <td style="text-align: center;"><?php echo $data['balance'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <form class="row g-3 fr" method="POST" style="background-color: white; margin-top:6%">
            <div class="col-md-6">
                <label for="formGroupExampleInput" class="form-label" style="font-size: 15pt;">Transfer to:</label>
                <select style="outline:1px solid rgb(201, 136, 136)" class="form-control" id="formGroupExampleInput" style="margin-bottom: 3%;" name="to" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    foreach ($customers as $data) {
                    ?>
                        <option value="<?php echo $data['id']; ?>">
                            <?php
                            $receiver_name = $data['name'];
                            $receiver_balance = $data['balance'];
                            echo "{$receiver_name} (balance={$receiver_balance})";
                            ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label" style="font-size: 15pt;">Amount:</label>
                <input style="outline:1px solid rgb(201, 136, 136)" name="amount" type="text" required class="form-control" style="margin-bottom: 3%;" id="inputEmail4">
            </div>


            <div class="col-12">
                <button name="submit" type="submit" class="btn btn-primary bt">Transfer</button>
            </div>
        </form>

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