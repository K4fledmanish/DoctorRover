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


  <style>

  #progressbarnav {
    position: fixed;
    z-index: 0;
    width: 100%;
    //overflow: hidden;
    //height: 300px;

  }

  .progress-container {
    width: 100%;
    height: 6px;
    //background: #2d2d30;
    overflow: hidden;
  }


  .progress-bar {
    height: 6px;
    width: 100%;
    overflow: hidden;
    color: back;
  }

  </style>

</head>

<body>


  <nav class="navbar navbar-default navbar-fixed-top">
   <div id="progressbarnav">
     <div class="progress-container">
       <div  class="progress-bar" id="myBar" style="background-color:#D4AF37 !important;"></div>
     </div>
   </div>
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#myPage"><img src="images/logo.png" height="52px"/></a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="index.php">HOME</a></li>
         <li><a href="explore.php">EXPLORE DOCTOR ROVER</a></li>
         <li><a href="locate.php">LOCATE A RETAILER</a></li>
         <li><a href="shop.php">SHOP</a></li>
         <li><a href="contact.php">CONTACT</a></li>

         <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="signin.php">SIGN IN</a></li>
             <li><a href="signup.php">SIGN UP</a></li>
           </ul>
         </li>
         <li>
           <a id="cart-popover" class="btn btn-info btn" data-placement="bottom" title="Shopping Cart">
             <span class="glyphicon glyphicon-shopping-cart" style="color:#D4AF37;"></span>&nbsp;CART
               <span class="badge"></span>
               <span class="total_price">$ 0.00</span>
             </a>
    </li>
    <div id="popover_content_wrapper" style="display:none;">
      <span id="cart_details"></span>
      <div align="center">
        <a href="checkout.php" class="btn btn-primary" id="check_out_cart">
        <span class="glyphicon glyphicon-shopping-cart"></span> Check out
        </a>
        <a href="#" class="btn btn-default" id="clear_cart">
        <span class="glyphicon glyphicon-trash"></span> Clear
        </a>
      </div>
    </div>

       </ul>

     </div>

   </div>

 </nav>

  <script>
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {myFunction()};

  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  }
  </script>


</body>
</html>


<!-- Cart Details Fething products in Desc. page and DropDown menu -->

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
