<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="index.js"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style>
        form{
            margin: 50px;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delivery";
$conn =  mysqli_connect("localhost","root","","thestation_tk");

if($conn===false){
    echo "conn failed";
    exit();
}
if(isset($_POST['insert'])){
    $name = $_POST["Full_Name"];
    $number = $_POST["Phone_number"];
    $contact = $_POST["Address"];
    $messege = $_POST["Message"];

    $mysql = "INSERT INTO `customer`(`name`, `phone`, `email`, `messege`) VALUES ('$name','$number','$contact','$messege')";
    if ($conn->query($mysql)===true){
        header('location: index.php');
    }else{
        echo 'noo';
    }
    echo "Records added successfully.";
    $conn->close();
}
?>
<?php
require ('navbar.php');
?>
<div class="col-md-9 order-md-1">

    <!-- Contact form -->
    <form class="section_contact__form"  method="post">
        <div class="form-group">
            <label for="contact__form__name" class="sr-only">Full name
                <input type="text" class="form-control" name="Full_Name"
                       placeholder="Full name">
            </label>
            <div class="invalid-feedback"></div>
        </div>

        <div class="form-group">
            <label>Phone Number
                <input type="text" class="form-control" name="Phone_number"
                       placeholder="Phone Number">
            </label>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="contact__form__name" class="sr-only">Address
                <input type="text" class="form-control" name="Address"
                       placeholder="Address">
            </label>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="Phone_number" class="sr-only">Message
                <textarea class="form-control" name="Message" rows="5"
                   cols="30"       placeholder="Message"></textarea>
            </label>
            <div class="invalid-feedback"></div>
        </div>
        <button id="insert" name="insert" value="submit">Submit</button>
    </form>

</div>
<script src="jquery.min.js"></script>
<script>
</script>

</body>
</html>
