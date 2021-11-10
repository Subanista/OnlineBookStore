<html>
	<head>
		<title> </title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script language="JavaScript" src="javascript/login.js">
</script>
        <style>
		.btn{
  position: absolute;
  top: 53%;
  left: 51%;
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
  width:90px;
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
  			<a class="active" href="Login.php">Login</a>
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

	<div id="page">
	<div id="header">
			<h1 class="neon1">Login  your  account</h1>
	</div>
    <style> .class{font-size: 20px; color: white;}</style>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="CheckLogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td width="78"><font color="#FFFFFF">Email</font></td>
<td width="6">:</td>
<td width="294"><input name="email" type="text" id="myusername"></td>
</tr>
<tr>
<td><font color="#FFFFFF">Password</font></td>
<td>:</td>
<td><input name="pass" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login" class="btn"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>
<br><font color="#FFFFFF">
Not yet registered? <a href="register.html"><b>Register Here</b></a>
</font>
</center>
</div>
<div id="footer">
<div class="bottom_addr"><font color="#FFFFFF">&copy; B-LANKA ONLINE BOOK STORE. All Rights Reserved</font></div>
</div>
</div>
<p>; </p>
<p>&nbsp;</p>
</body>
</html>