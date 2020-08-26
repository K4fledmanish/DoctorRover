<?php
session_start();
?>

<?php
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
} ?>

<div class="container-fluid">

<?php
if(isset($_POST["shopnow"]))
{
  $shop_now = $_POST["shopnow"];

 $where = "where id = '".$shop_now. "'" ;
}




$sql1 = "SELECT * from Products $where";

$result1 = mysqli_query($conn,$sql1);

if (mysqli_num_rows($result1) > 0)
{

  ?>
<hr>
  <div class="col-md-12 align-self-center" style="background-color:white;">
      <h2 class="title text-center" style="background-color:Blue;">Product Description</h2><hr/>
      <div class="row">
<?php

while($row = mysqli_fetch_assoc($result1)){

?>


    <div class="col-md-4">
      <div class="card" style="width:310px; margin-bottom:20px;">
          <img class="card-img-top img-thumbnail img-responsive" style="height:350px; width:310px; " src="image/<?php echo $row["imagename"];?>" alt="<?php echo $row["imagealtname"];?>" />
         <div class="card-body">
              <h3 class="card-title text-center" style="margin-top:-10px;">
                  <?php echo "<b>".$row["name"]."</b>";?></h3>

          </div>
      </div>
</div>
     <div class="col-sm-7 align-self-center">
							<div class="product-information"><!--/product-information-->

								<h2><?php echo $row["name"];?></h2>
								<?php echo $row["productdescription"];?><br/>

								<span>
									<span><?php echo "US $". $row["price"];?></span><br/>
									<label>Quantity:</label>
									<input type="text" value="1" />
                <form action="shopcart.php?action=add&id=<?php echo '1'; ?>" method="post">

                  			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>

</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> Epic Games</p>

							</div><!--/product-information-->
						</div>

<?php }}
else{
  echo "not found";
}?>

</div>

</div>

<hr/>



</div>

</body>
</html>
