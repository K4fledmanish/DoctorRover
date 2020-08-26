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

<style>
.row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
}

/* Create two equal columns that sits next to each other */
.column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
}

.column img {

    vertical-align: middle;
}
</style>

<body>

<div class="fullwallp">
  <div id="half">
      <img class="zoomeffect" src="images/2011-Land-Rover-Range-Rover-Evoque-5-Door-Headlights.jpg" style="padding:1%;" />
  </div>
</div>

<!-- Photo Grid -->
<div class="container-fluid">
  <div class="row">
    <div class="column" style="padding:0% 1% 0% 1%">
        <img src="images/1.jpg" style="width:49%;padding:0% 0% 0% 0.1%; float:left;">
        <img src="images/2.jpg" style="width:49%;padding:0% 0% 0% 0.1%; float:right;">
      </div>
  </div>
  <div class="row">
    <div class="column" style="padding:0% 1% 0% 1%">
        <img src="images/3.jpg" style="width:49%;padding:1% 0% 0% 0.1%; float:left;">
        <img src="images/1.jpg" style="width:49%;padding:1% 0% 0% 0.1%; float:right;">
      </div>
  </div>
  <div class="row">
    <div class="column" style="padding:0% 1% 0% 1%">
        <img src="images/1.jpg" style="width:49%;padding:1% 0% 0% 0.1%; float:left;">
        <img src="images/2.jpg" style="width:49%;padding:1% 0% 0% 0.1%; float:right;">
      </div>
  </div>
</div>

<div class="newsletter_w3layouts_agile">
  <div class="col-sm-6 newsleft">
    <h3>Sign up for Newsletter !</h3>
  </div>
  <div class="col-sm-6 newsright">
    <form action="#" method="post">
      <input type="email" placeholder="Enter your email..." name="email" required="">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

</body>
</html>
