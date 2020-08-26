<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Rover | Warranty & Legal Info</title>
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


    <div style="text-align:center;float:right;">
      <img src="images/explore1.png" height="250px" >
    </div>

    <h2>Parts Warranty</h2></br></br>

    <p>All new parts are covered by a 12 month manufacturer's warranty unless specifically stated. You should notify us immediately if a potential warranty situation arises. We will then advise a course of action. Any suspected faulty part must be returned to us together with the original invoice or proof of purchase and with as much information relating to the problem as possible. Please note that a defective part must be returned and received by us before it can be exchanged. All warranty parts are subject to a physical inspection. This may involve returning the part to our supplier to verify the fault before it can be exchanged. Defective items are backed 100% and after 30 days can be returned for exchange only. For warranty claims please state vehicle chassis number, date fitted & mileage, date failed & mileage and exact nature of fault.</br>

    Please ensure that faulty items are returned to us within 30 days of removal from vehicle.</br>

    The warranty period commences from our invoice date not from the date of installation or first use. This warranty covers defects to the part when fitted and used correctly for normal, everyday vehicle use but does not apply to parts used for any extraordinary or unusual uses such as competition, racing, rallying or parts subsequently stripped down, altered, modified or adapted etc. in any way from their original design or intended use.</br>

    Although we are, by law, liable for death or personal injury caused by our proven negligence and by the Consumer Rights Act 2015, our warranty only covers the parts in question and not to any consequential loss or cost, eg garage labour, recovery, car hire, re-delivery, parking fines etc. No claim will be validated if the failure is caused by mis-use, neglect, overheating, incorrect installation or failure of a related component.</br>

    Any part replaced or repaired under warranty, will only benefit from the balance or the cover remaining from the original purchase date. Warranties are not transferable. Acceptance of goods is deemed as acceptance of these terms. The warranties are in addition to, and do not affect your statutory consumer rights.</p></br>



</div>

<div>
  <?php include('footer.php'); ?>
</div>




</body>
</html>




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


<body >

  <div>
    <?php
      session_start();
        if(isset($_SESSION['Username'])){
            include('header2.php');
              } else {
                include('header1.php'); }
    ?>
  </div>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "DoctorRover";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
    }
  ?>


<div style="padding:10%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

<div class="row" >


              <?php

                $sql1 = "SELECT * from Products LIMIT 1";
                $result1 = mysqli_query($conn,$sql1);

                if (mysqli_num_rows($result1) > 0)
                {

              ?>

<div class="col-md-9" style="background-color:white;">
    <div class="row">
                  <?php
                    while($row = mysqli_fetch_assoc($result1)){
                  ?>

                  <div class="col-md-3" style="margin-top:12px;">
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
                            <img src="shop/'.$row["Image"].'" class="img-responsive" /><br />
                            <h4 class="text-info">'.$row["ProductName"].'</h4>
                            <h4 class="text-danger">$ '.$row["ProductPrice"] .'</h4>
                            <input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
                            <input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
                            <input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
                          </div>
                      </div>


      <div class="col-md-4">
        <div class="card" style="width:310px; margin-bottom:20px;">
            <img class="card-img-top img-thumbnail img-responsive" style="height:350px; width:310px; " src="<?php echo $row["Image"];?>" alt="<?php echo $row["ImageAltName"];?>" />
           <div class="card-body">
                <h3 class="card-title text-center">
                    <?php echo "<b>".$row["ProductName"]."</b>";?></h3>
                    <p class="card-text text-center text-bold">
                        <a class="btn btn-success text-center" href="description.php">Add to Cart</a>
            </div>

        </div>
      </div>


       <div class="col-sm-7">
  							<div class="product-information"><!--/product-information-->
  								<img src="images/new.jpg" class="new" alt="" />
  								        <h2><?php echo $row["ProductName"];?></span></h2>
  								                <p>Fortnite is an online video game created in 2017, developed by Epic Games, and released as different software packages having different game modes that otherwise share the same general gameplay and game engine.<br/>
                                    </p>
  								<span>
  									<span><?php echo "AU$". $row["ProductPrice"];?></span><br/>
  									<label>Quantity:</label>
  									<input type="text" value="3" />
  									<button type="button" class="btn btn-fefault cart">
  										<i class="fa fa-shopping-cart"></i>
  										Add to cart
  									</button>
  								</span>
  								<p><b>Availability:</b> In Stock</p>
  								<p><b>Condition:</b> New</p>
  								<p><b>Brand:</b> Epic Games</p>
  							</div><!--/product-information-->
  						</div>

            <?php }} ?>

  </div>




</div>

</div>

  <hr/>






      </div>
            <?php session_unset() ?>
      </div>
</div>

      </div>
      <div>
        <?php include('footer.php'); ?>
      </div>

</body>
</html>
