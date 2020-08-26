
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "DoctorRover";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  } ?>



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

<body>

  <div>
    <?php
      session_start();
        if(isset($_SESSION['Username'])){
            include('header2.php');
              } else {
                include('header1.php'); }
    ?>
  </div>



  <div style="padding:7%">
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
      <div class="container-fluid">
        <div class="inner-sec-shop px-lg-4 px-3">

          <div class="row">
            <!-- product left -->
            <div class="side-bar col-lg-3">
              <div class="search-hotel">
                <h3 class="agileits-sear-head">Search Here..</h3>

                <form class="input-group" action="shop.php"method="post">
                <input type="text" class="form-control" name="searchproduct" placeholder="Search here"/>
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="searchbutton" href="shop.php">
                    Search
                  </button>
                </div>
                </form>
              </div>





              <!-- price range -->
              <div class="range">
                <h3 class="agileits-sear-head">Category</h3>
                  <div class="Category">

            <?php

                  $category = "SELECT * from category order by CategoryName";
                  $categoryresult = mysqli_query($conn,$category);

                 if (mysqli_num_rows($categoryresult) > 0)
                 {

                   ?>
                   <?php
                   while($row=mysqli_fetch_array($categoryresult))
                   {
              ?>
                     <a class="list-group-item" style="text-align:center" href="shop.php?CategoryID=<?php echo stripslashes($row['CategoryID']);?>"> <?php echo stripslashes($row['CategoryName']); ?></a>
                  <?php }} ?>

                  </div>
              </div>
              <!-- //price range -->





              <!-- deals -->
              <div class="deal-leftmk left-side">
                <h3 class="agileits-sear-head">Special Deals</h3>
                <div class="special-sec1">
                  <div class="img-deals">
                    <img src="images/1.jpg" alt="">
                  </div>
                  <div class="img-deal1">
                    <h3>Farenheit (Grey)</h3>
                    <a href="single.html">$575.00</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="special-sec1">
                  <div class="col-xs-4 img-deals">
                    <img src="images/2.jpg" alt="">
                  </div>
                  <div class="col-xs-8 img-deal1">
                    <h3>Opium (Grey)</h3>
                    <a href="single.html">$325.00</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="special-sec1">
                    <div class="col-xs-4 img-deals">
                      <img src="images/2.jpg" alt="">
                    </div>
                    <div class="col-xs-8 img-deal1">
                      <h3>Azmani Round</h3>
                      <a href="single.html">$725.00</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="special-sec1">
                      <div class="col-xs-4 img-deals">
                        <img src="images/m4.jpg" alt="">
                      </div>
                      <div class="col-xs-8 img-deal1">
                        <h3>Farenheit Oval</h3>
                        <a href="single.html">$325.00</a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
              </div>
              <!-- //deals -->
            </div>


            <!-- //product left -->


            <!--/product right-->
            <div class="left-ads-display col-lg-9">
              <div class="wrapper_top_shop">
                <div class="row">
                    <div class="col-md-6 shop_left">
                        <img src="images/3.jpg" alt="">
                        <h6>40% off</h6>
                      </div>
                      <div class="col-md-6 shop_right">
                        <img src="images/1.jpg" alt="">
                        <h6>50% off</h6>
                      </div>

                </div>
                  <div class="row">
                    <div class="container-fluid">
                      <div class="row" style="padding:2%;">
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-100">
                          <div class="row">

                            <?php
                          $where ='';
                          if(isset($_GET['CategoryID']))
                          {
                           $where = "where CategoryID= '".$_GET['CategoryID']."'";
                          }

                          if (isset($_POST['searchproduct'])) {

                          $where = "where name like '".$_POST['searchproduct']."'";
                          }
                          /*else {
                            echo "SELECT * from Product $where order by rand()";
                          }
                          /*echo "SELECT * from Product $where order by rand()";*/
                            $products = "SELECT * from Products $where order by rand()";
                            $productresult = mysqli_query($conn,$products);

                            ?>


                            <?php

                            if(mysqli_num_rows($productresult) > 0)
                              {
                                ?>
                              </br>

                              <?php

                              while($row = mysqli_fetch_array($productresult)){

                              ?>


                                    <div id="display_item">
                                    </div>

                        <?php }} ?>
                        <?php
                        if (mysqli_num_rows($productresult) == 0)
                          {
                        ?>
                        <p> No Products Found for this Category</p>
                        <?php } ?>


                          </div>




                              <!-- <div id="display_item">
                        </div> -->
                            </div>



                        </div>
                      </div>
                    </div>
              </div>
            </div>

          </div>
          <!--/slide-->

      </div>
    </section>
  </div>







    <div>
      <?php include('footer.php'); ?>
    </div>





  </div>

</body>
</html>
