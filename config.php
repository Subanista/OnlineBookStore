 <?php
$severname="localhost";
$username="root";
$password="";
$dbname="online_book";

$conn=mysqli_connect($severname,$username,$password,$dbname);
if($conn){
	include'Contactus.html';
}
else 
	{
	echo"connection failed".mysqli_connect_error();
}

?>