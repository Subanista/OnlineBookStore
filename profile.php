<?php
session_start();
require('connection.php');


if(empty($_SESSION['customer_id'])){
 header("location:login.php");
}

$result=mysqli_query($conn, "SELECT * FROM register WHERE uname1 = '$_SESSION[customer_id]'")
or die("There are no records to display ... \n" .mysql_error());
if (mysqli_num_rows($result)<1){
    $result = nuill;
}
$row = mysqli_fetch_array($result);
if($row)
 {
 
 $cusId = $row['uname1'];
 $email = $row['email'];
 }
?>
<?php

if (isset($_POST['update'])){
$myId = addslashes( $_GET['id']);
$myEmail = $_POST['email'];
$myPassword = $_POST['pass'];

$newpass =$myPassword; 

$sql = mysqli_query($conn, "UPDATE register SET  email='$myEmail', upswd1='$newpass' , upswd2='$newpass' WHERE uname1 = '$myId'" )
        or die( mysqli_error() );


 header("Location:profile.php");
}
?>
<html>
	<head>
		<title> </title>
		<link rel="stylesheet" type="text/css"  href="css/login.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script language="JavaScript" src="javascript/login.js">
</script>
        <style>
		.btn{
  position: absolute;
  top: 59%;
  left: 76%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width:150px;
  height:40px;
  font-style:oblique;
}
.btn:hover {
  background-color: black;
  color: white;
}
	
</style>
        
	</head>
<body>
		<h1 align="center">B-LANKA ONLINE BOOK STORE</h1>
	<div class="P"><img src="img/logo-b.jpg" alt="logo" width="200" height="100"></div>
    <br>
    <br>
<div class="topnav">
			<a  href="index.html">Home</a>
  			<a href="Login.php">Login</a>
			<a href="register.html">Registration</a>
			<a href="shop.html">Product & Service</a>
			<a href="category.html">Category</a>
  			<a href="Contactus.html">Contact Us</a>
  		<div class="search-container">
			<form action="#">
      			<input type="text"  name="search">
      			<button type="submit">Search</button>
    		</form>
  		</div>
	</div>

	
<div id="page" style="width:900px">
<div id="container">
<table>
<tr>
<td>
<table width="380" align="center">
<CAPTION><h3><font color="#FFFFFF">MY PROFILE</font></h3></CAPTION>
<tr>
    <td>UserName:</td>
    <td><?php echo $cusId ?></td>
</tr>
<tr>
    <td>Email:</td>
    <td><?php echo $email; ?></td>
</tr>
<tr>
    <td>Password:</td>
    <td>Encrypted</td>
</tr>
</table>
</td>
<td>
<table border="0" width="620" align="center">
<CAPTION><h3><font color="#FFFFFF">UPDATE PROFILE</font></h3></CAPTION>
    <form action="profile.php? id=<?php echo $_SESSION['customer_id']; ?>" method="post">
<table align="center">
<tr><td>Email Address:</td><td><input type="text"  name="email" maxlength="100" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password"  name="pass" maxlength="5" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password"  name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="update" value="Update Profile" class="btn"></td></tr>
<tr><td>&nbsp;</td></td><td><a href="Login.php"><input type="button" name="update" value="LogOut" class="btn" style="left:30%"></a></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>
<div id="footer">
<div class="bottom_addr"><font color="#FFFFFF">&copy; B-LANKA ONLINE BOOK STORE. All Rights Reserved</font></div>
</div>
</div>
<p>; </p>
<p>&nbsp;</p>
</body>
</html>