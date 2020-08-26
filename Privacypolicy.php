<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Rover | Privacy Policy</title>
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


    <h2>User privacy policy</h2></br></br>

    <p>We take the protection of your information seriously.<p> </br>

  <p>  We understand the issues regarding privacy, and to inform our customers and comply with Data Protection regulations, we will explain how we handle personal data. This privacy policy is not a contract, and does not affect your statutory rights.<p> </br>

    <h2>Personal data</h2></br>
    <p>“Personal data” means any information relating to an identified or identifiable natural person. An identifiable natural person is one who can be identified, directly or indirectly, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier.
    We do not consider information that has been anonymised or aggregated so that it can no longer be used to identify a specific natural person, whether in combination with other information or otherwise as personal data.<p> </br>
    Collection of personal data
    Generally, we collect personal data directly from you.
     This may occur when you:
    Purchase any of our products or services
    Place a telephone call to us, or receive one from us
    Apply for a credit account with us
    Provide your details to us in person at trade shows or exhibitions
    Provide your details to us via web chat or social media
    Visit our website
    We do not obtain personal data from third parties for marketing purposes. We may obtain personal data from a third party when it is necessary for compliance with a legal obligation, or the performance of a contract. For example, a Credit Reference agency if you apply for a credit account with us.
    What we collect
    Where dr.rover  is the data controller of your personal information we may collect the following about you:
    Contact details such as name, email address, postal address and telephone number
    Your vehicle details where you have provided them
    Financial information such as bank details, credit card details. Card details are processed by a payment processor (i.e. bank) immediately, not stored.
    Your purchase history for marketing and accounting purposes
    Your IP address and browser or mail client details during visits to our website or email communications.
    Your marketing preferences
     How long we keep personal data for
    We only keep your information for as long as the regulations say we have to. This is usually between three and ten years after our relationship with you ends, but it will vary depending on what data we hold, why we hold it and what we’re obliged to do by the regulator or the law. Typically, legal requirements are 10 years following a purchase from us, or after the customer/supplier relationship ends.
    Securing your data
    Personal Data held by Bearmach Ltd is stored on secure servers in the UK. We do not transfer EU customer personal data outside the European Economic Area. We hold data in various forms, including electronic databases and paper files. We strive to take all reasonable steps necessary to ensure your data is adequately protected and processed in line with this privacy notice. Such steps include encryption of electronic data, and physical access controls and security systems to protect paper records. Personal data is deleted / disposed of in a secure manner, in adherence to our data deletion policy.



</div>

<div>
  <?php include('footer.php'); ?>
</div>




</body>
</html>
