<html>
	<head>
		<title> </title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
		<h1 align="center">B-LANKA ONLINE BOOK STORE</h1>
	<div class="P"><img src="img/logo.jpg" alt="logo" width="200" height="100"></div>
    <br>
    <br>
<div class="topnav">
			<a  href="#home">Home</a>
  			<a class="active" href="#">Login</a>
			<a href="#">Registration</a>
			<a href="#">Product & Service</a>
			<a href="#">Category</a>
  			<a href="#c">Contact</a>
  		<div class="search-container">
			<form action="#">
      			<input type="text"  name="search">
      			<button type="submit">Search</button>
    		</form>
  		</div>
	</div>
    

	<div id="page">
	<div id="header">
   <?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('connection.php');



$myusername=$_POST['email'];
$mypassword=$_POST['pass'];
 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$sql="SELECT * FROM register WHERE email='$myusername' and upswd1='$mypassword'";
$result=mysqli_query($conn, $sql) or die(mysql_error());


$count=mysqli_num_rows($result);


if($count==1){

$user = mysqli_fetch_assoc($result);
$_SESSION['customer_id'] = $user['uname1'];
header("location:profile.php");
}

else {
echo "Wrong Username or Password<br><br>Return to <a href=\"Login.php\">login</a>";
}

ob_end_flush();

?>
</div>
<div id="footer">
<div class="bottom_addr"><font color="#FFFFFF">&copy; B-LANKA ONLINE BOOK STORE. All Rights Reserved</font></div>
</div>
</div>
<p>; </p>
<p>&nbsp;</p>
</body>
</html>