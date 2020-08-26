<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign in | Explore Rovers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
* {
    box-sizing: border-box;
}

.row {
    display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
    flex: 50%;
    padding: 5%;
}


.vl {
    border-left: 1px solid black;
    height: 350px;
}

</style>

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


<div style="padding:8%">
  <div class="row">
    <div class="column">
      <div class="userccount">
        <h3 style="text-align:center; padding:2%;">Sign in</h3>
        <!-- login form -->
    <form action="signinaction.php" method="post">

          <div class="form-group">
            <input style="width:100%;border-radius: 20px;" type="text" class="form-control" placeholder="Username" name="Username" required>
          </div>

          <div class="form-group">
            <input style="width:100%;border-radius: 20px;" type="password" class="form-control" placeholder="Password" name="Password1" required>
          </div>


               <div class="text-center">
                 <input type="submit" class="btn blue-bg" style="width:50%; border-radius: 20px;" value="Sign in">
               </div>


   </form>

    </div>
    </div>
    <div class="vl">
    </div>
    <div class="column">
      <div style="padding:5%;" class="text-center pad-top"><h3>Don't Have an Account ?</h3></div>
      <div class="text-center pad-top">
       <a href="signup.php" class="btn btn-secondary btn-lg" style="border-radius:20px;width:50%;">Sign up</a>
      </div>

    </div>
  </div>
</div>



<div>
  <?php include 'footer.php' ?>
</div>




</body>
</html>
