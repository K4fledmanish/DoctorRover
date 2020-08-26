<?PHP
			$con=mysqli_connect("localhost","root","","DoctorRover");
			$Email=$_POST['Email'];
			$Username=$_POST['Username'];
			$Password1= password_hash($_POST["Password1"],PASSWORD_DEFAULT);
			$Password2= password_hash($_POST["Password2"],PASSWORD_DEFAULT);

						$sql=mysqli_query($con,"select * from Users where Username='$Username'");
						$numrows=mysqli_num_rows($sql);

			if($numrows==1){
				echo'<script type="text/javascript"> alert("Sorry the Username has already been taken. Please enter a new Username.");
				</script>';
			}
				else{
				mysqli_query($con,"insert into Users (Email,Username,Password1,Password2) values ('$Email','$Username','$Password1','$Password2')");

				header("Location:signin.php");
		}
?>
