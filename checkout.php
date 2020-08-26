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

  <?php
    session_start();
      if(isset($_SESSION['Username'])){
          include('header2.php');
            } else {
              include('header1.php'); }
  ?>


<style>


.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<div id="cart_details">
</div>

<div class="row" style="padding:10%;">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</div>

  <div>
    <?php include('footer.php'); ?>
  </div>
  </html>


  <script>

  $(document).ready(function(){

    load_product();

    load_cart_data();

    function load_product()
    {
      $.ajax({
        url:"fetch_item.php",
        method:"POST",
        success:function(data)
        {
          $('#display_item').html(data);
        }
      });
    }

    function load_cart_data()
    {
      $.ajax({
        url:"fetch_cart.php",
        method:"POST",
        dataType:"json",
        success:function(data)
        {
          $('#cart_details').html(data.cart_details);
          $('.total_price').text(data.total_price);
          $('.badge').text(data.total_item);
        }
      });
    }

    $('#cart-popover').popover({
      html : true,
          container: 'body',
          content:function(){
            return $('#popover_content_wrapper').html();
          }
    });

    $(document).on('click', '.add_to_cart', function(){
      var product_id = $(this).attr("id");
      var product_name = $('#name'+product_id+'').val();
      var product_price = $('#price'+product_id+'').val();
      var product_quantity = $('#quantity'+product_id).val();
      var action = "add";
      if(product_quantity > 0)
      {
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
          success:function(data)
          {
            load_cart_data();
            alert("Item has been Added into Cart");
          }
        });
      }
      else
      {
        alert("lease Enter Number of Quantity");
      }
    });

    $(document).on('click', '.delete', function(){
      var product_id = $(this).attr("id");
      var action = 'remove';
      if(confirm("Are you sure you want to remove this product?"))
      {
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{product_id:product_id, action:action},
          success:function()
          {
            load_cart_data();
            $('#cart-popover').popover('hide');
            alert("Item has been removed from Cart");
          }
        })
      }
      else
      {
        return false;
      }
    });

    $(document).on('click', '#clear_cart', function(){
      var action = 'empty';
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function()
        {
          load_cart_data();
          $('#cart-popover').popover('hide');
          alert("Your Cart has been clear");
        }
      });
    });

  });

  </script>
