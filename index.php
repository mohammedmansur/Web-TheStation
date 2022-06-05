<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>The Station</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <link href="bootstrap.css" rel="stylesheet">
    <style>
        body {
            background-color: #343f56;
            color: rgb(255, 255, 255);
        }
        #foot {
            font-size: 12px;
        }
    </style>
</head>
<body class="container">

<?php
require('navbar.php');
$con =  mysqli_connect("localhost","root","","thestation_tk");
if($con===false){
    echo "conn failed";
    exit();
}
if(isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["number"];
    $emailaddres = $_POST["email"];
    $person = $_POST["option"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $mysql ="INSERT INTO 'reservaition'(`name`, `number`, `email`, `option`, `date`, `time`) VALUES 
                                       ('$fullname','$phonenumber','$emailaddres','$person','$date','$time')";
    if ($con->query($mysql)===true){
        header('location: index.php');
    }else{
        echo 'noo';
    }
echo "halaw";
    $con->close();
}
?>
<div id="rang">
    <img src="welcome1.png" class="col-lg-12" alt="">
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img alt="" src="x1.jpg">

                        <div class="card-body">
                            <p class="card-text"><b>cheese & bacon</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">9,000 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x2.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b>Double Cheese Burger</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>

                                </div>
                                <small class="text-muted">10,000 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x3.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text"><b>Eyes on the fries</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">2,500 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x4.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b>Ceasar salad</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">5,000 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x5.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text"><b>mozzarella sticks</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">5,750 IDQ</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x6.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b> BBQ Chicken Wings</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>

                                </div>
                                <small class="text-muted">6,750 IDQ</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x7.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b>Pizza</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">10,000 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x8.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b>Chickin Strips</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">7,000 IQD</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="x8.jpg" alt="">

                        <div class="card-body">
                            <p class="card-text"><b> Onion Rings</b></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="delivery.php">Order</a></button>
                                </div>
                                <small class="text-muted">8,750 IDQ</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>
<div id="click">
    <h2  class="section__heading text-center" style="align-content: center;">
       Click to Make a online reservation
    </h2>
</div>
<section class="section section_reservation section_gray" id="section_reservation">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Heading -->

            </div>
        </div> <!-- / .row -->
        <div class="row justify-content-lg-center  section_reservation__row">
            <div id="cl" class="col-lg-8">

                <!-- Form -->

                <form class="section_reservation__form" id="reservation__form" method="post">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__name">Full name </label>
                                    <input type="text" class="form-control" id="tt"
                                           name="fullname" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__phone">Phone number</label>
                                <input type="tel" class="form-control" id="dd"
                                       name="number" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__email">Email address</label>
                                <input type="email" class="form-control" id="cc"
                                       name="email" placeholder="E-mail address">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__people">People</label>
                                <select class="form-control" id="reservation__form__people"
                                        name="option">
                                    <option value="1">1 person</option>
                                    <option value="2" selected="">2 persons</option>
                                    <option value="3">3 persons</option>
                                    <option value="4">4 persons</option>
                                    <option value="5">5 persons</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__date">Date</label>
                                <input type="date" class="form-control" id="bb"
                                       name="date" value="2016-12-31">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="reservation__form__time">Time</label>
                                <input type="time" class="form-control" id="aa"
                                       name="time" value="18:00">
                            </div>
                            <br>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Reserve a table
                                </button>
                            </div>

                        </div>
                    </div> <!-- / .row -->
                </form>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<br><br>

<iframe height="300" width="1100" class="col-lg-12"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d520.3601660098756!2d45.41848103851658!3d35.56462042436065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002d7aa68e4fa3%3A0x9e70934d7f275cfa!2sThe%20Station!5e0!3m2!1sen!2siq!4v1622833384820!5m2!1sen!2siq"
        style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<br><br><br><br><br>
<footer class="section section_footer " id="foot">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <!-- About Us -->
                <h5>
                    About Us
                </h5>
                <p>
                 If you want to test a best burger and barbeque <br>fast food come or order in the Station.
                </p>

            </div>
            <div class="col-sm-4" align="center">


                <h5 class=>
                    Contact info
                </h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                The Station, Rodi Mall, Qadam Xer Street, Opposite to Rangin School, Next to, Sulaymaniyah
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                +964 770 654 3210
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg>
                Thestation@gmail.com
            </div>
            <div class="col-sm-4" align="right">

                <!-- Opening hours -->
                <h5 class="section_footer__heading">
                    Opening hours
                </h5><br>
                <div class="section_footer__open">
                    <div >Monday - Thursday Open at 10:00 AM - 11:00 PM</div>
                </div>
                <br>
                <div class="section_footer__open">
                    <div class="section_footer__open__days">Friday - Sunday Open at 12:00 AM - 03:00 AM</div>
                </div>
                <br><br><br>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>

<script src="jquery-3.6.0.min.js">

</script>
<script>
    $(document).ready(function(){
        $("#section_reservation").hide();
        $("#click").click(function(){
            $("#section_reservation").toggle("slow");
        });
    });
</script>
</body>
</html>

