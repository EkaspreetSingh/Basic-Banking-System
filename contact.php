<?php
include('config.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mess = $_POST['mess'];
        
    $sql = "INSERT INTO `GRIP_bank`.`contactus` (`name`, `mess`) VALUES ('$name','$mess')";
    $query=mysqli_query($conn,$sql); 
    
    if($query){
        echo "<script> alert('Your message is sent successful');
                        window.location='history.php';
              </script>";
       
   }
}
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
    <h2 class="subheading">TRANSACTION</h2>

    <form action="contact.php" method="post">  

        <div class="input">
            <p>Amount</p>
            <input type="text" name="name" placeholder="Enter your Name">
            <div class="mess"><textarea name="mess" rows="10" cols="50" >
    enter your message....
            </textarea></div>
        </div>
        <div class = "submit">
            <input type="submit" value="SUBMIT" name="submit">
        </div>

    </form>


    <footer class="copyright">
        <p>©2022. Made by Ekaspreet Singh</p>
        <p>For the project of Sparks Foundation</p>
    </footer>
</body>
</html>
