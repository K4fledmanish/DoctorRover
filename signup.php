<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up | Explore Rovers</title>
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
body
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn btn blue-bg {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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

  <div style="text-align:center;">
    <form action="signupaction.php" style="border:1px solid #ccc" method="post">
      <div class="container">
        <h1>Sign Up</h1>
        <hr>

        <label  for="Email"></label>
        <input style="border-radius:20px;" type="text" placeholder="Enter Email" name="Email" required>

        <label for="Username"></label>
        <input style="border-radius:20px;" type="text" placeholder="Enter Username" name="Username" required>

        <label for="Password1"></label>
        <input style="border-radius:20px;" type="password" placeholder="Enter Password" name="Password1" required>

        <label for="Password2"></label>
        <input style="border-radius:20px;" type="password" placeholder="Repeat Password" name="Password2" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>


        <div class="clearfix">
          <button style="border-radius:20px;" type="submit" class="signupbtn btn blue-bg">Sign Up</button>
          <button style="border-radius:20px;" type="button" class=" cancelbtn btn blue-bg">Cancel</button>

        </div>
      </div>
    </form>
  </div>



<div>
  <?php include 'footer.php' ?>
</div>

</body>
</html>
