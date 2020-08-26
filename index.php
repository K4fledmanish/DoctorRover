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

  <div>
    <?php include('slider.php'); ?>
  </div>

  <div>
    <?php include('homepagebody.php'); ?>
  </div>

  <div>
    <?php include('footer.php'); ?>
  </div>



</body>
</html>
