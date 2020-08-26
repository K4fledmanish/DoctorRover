<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Rover | Explore Rovers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#1B1B1B;">
<div>
  <?php
    session_start();
      if(isset($_SESSION['Username'])){
          include('header2.php');
            } else {
              include('header1.php'); }
  ?>
</div>

<div id="explore" >

<div style="text-align:center;">
  <img src="images/logo.png" height="100px" >
</div>


</br></br></br></br>
  <p>We are the new in the business for selling the latest parts of the latest model of rover.
  Dr.Rover, established in 2018 which is selling the parts of the rover with the suitable parts.</p> </br>

  <p >We stock a full range of parts for all early and late model Range Rovers and Land Rovers including all models of Land Rover Discovery, Range Rover Sport, Vogue, Freelander, and Evoque. </p> </br>


  <p >We have diagnostic equipment which is capable of giving all the necessary information to service your Land Rover to the highest standard. We can generally organize for you to be picked up or delivered to the railway or even
    your home if you live nearby. So why not try us out for your next service. You’ll find us very competitive, helpful & friendly.</p></br></br>

    <div style="text-align:center;float:right;">
      <img src="images/explore1.png" height="250px" >
    </div>

<h2>What We Strive For</h2> </br>
<p>Our organisation of strong-willed and dedicated professionals look forward together in achieving the following goals:
<li>Be Australia’s number 1 auto parts company that provides quality and affordable car parts</li>
<li>See Australia’s automotive industry flourish as it continues to practice sustainable development</li>
<li>Be able to serve clients all over the country, not only Melbourne and its suburbs</li>
<li>Build more long-term client relationships</li>
<li>Be the consumers’ top-of-mind choice when it comes to getting hard-to-find spare car parts</li>
</p></br></br>

<h2>What We Promise</h2>
<p>Our team of expert car removalists, dismantlers, drivers, recyclers, and even our customer support team works hard to provide for our customers’ car parts needs with all these core values in mind:</p>

<li><b>DEDICATION</b> – We are committed to provide all our client’s auto parts needs.With that in mind, we continue to make sure that all those hard-to-find parts and components are available in our wide inventory.</li></br>

<li><b>PASSION</b> – We love everything that we do – from the procurement of the old and used cars to the actual selling of the auto parts and even up to the proper disposal of toxic car wastes. Because of this, you are assured that we’ll only be providing top-quality customer service.</li></br>

<li><b>TRUST & LOYALTY</b> – We believe that this goes hand in hand. If we won’t be able to earn our customer’s trust, we won’t be having their loyalty as well. That is why we always stay true to our word. If we say that this particular auto part is in “like new” condition, expect to get exactly that.</li></br>

<li><b>INNOVATION </b>– We truly believe that keeping ourselves updated with the latest techniques and technologies in the car wrecking & recycling industry is one of the keys to success. We pride ourselves the latest eco-friendly tools and equipment to properly inspect, fix, and test the car parts you need.</li></br>

<li><b>CUSTOMER FOCUS</b> – The satisfaction and happiness of our customers are what drives us. Because our ultimate goal to not only provide you with the car part that you need. We also be able to meet your expectations by providing enquiry, negotiating, product quality, delivery, and more.</li></br>



</div>

<div>
  <?php include('footer.php'); ?>
</div>




</body>
</html>
