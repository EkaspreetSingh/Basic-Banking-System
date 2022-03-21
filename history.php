<?php
$insert = false;
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "grip_bank";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con)
    {
        die("connection to the database failed due to: ". mysqli_connect_error());
    }
    else
    {
        $insert = true;
    }

    $sql = "SELECT * FROM `transaction`";
    $result = mysqli_query($con, $sql);
    $n = mysqli_num_rows($result);

    $con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ramaraja&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <!-- <img src="bg.jpg" alt="background" class="bg"> -->

    <div class="navbar">
    <img src="bank.png" alt="icon"> 
        <h2>GRIP Bank</h2>
        <ul>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
    <h2 class="subheading">TRANSACTION HISTORY</h2>
    <table>
        <tbody>
            <th>sno</th>
            <th>sender</th>
            <th>receiver</th>
            <th>amount</th>
            <th>date & time</th>
            <?php

                for($i=0; $i<$n; $i++) {
                    $index = $i+1;
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr>";
                    echo "<td>".$index."</td>";
                    echo "<td>".$row['sender']."</td>";
                    echo "<td>".$row['receiver']."</td>";
                    echo "<td>".$row['amount']."</td>";
                    echo "<td>".$row['datetime']."</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>

    <footer class="copyright">
        <p>©2022. Made by Ekaspreet Singh</p>
        <p>For the project of Sparks Foundation</p>
    </footer>
</body>
</html>