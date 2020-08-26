<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="DoctorRover";

//creating connection
$conn=new mysqli($servername,$username,$password,$dbname);

//checking connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
else
{
    $Password1=$_POST["Password1"];
    $Username=$_POST["Username"];


    $query="SELECT Password1, Username FROM Users WHERE Username = '".$Username."' LIMIT 1";
    $result=mysqli_query($conn,$query);

$result=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($result);

    if($rows==1)
    {
        $_SESSION['Username']=$Username;
        header("Location: index.php");
    }else
    {
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='signin.php'>LOGIN</a></div>";
    }


  	if (mysqli_num_rows($result)>0) {
  	  $_SESSION['Username'] = $Username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "Wrong username/password combination";
        header("index.php");
  	}
  }
?>
