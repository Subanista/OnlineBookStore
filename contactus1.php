 <?php
	require('config.php');
    
	if(isset($_POST['submit'])){
		global $conn;
		$email=$_POST['email'];
		$name=$_POST['username'];
		$phone=$_POST['mobile'];
		$subject=$_POST['sub'];
		$discription=$_POST['dis'];
		
		$query="INSERT INTO `c details`(name,email,phone,subject,discrib)VALUES('$name', '$email', '$phone', '$subject', '$discription')";
		$result = mysqli_query($conn, $query);
		
		if($result) {
			include'Contactus';
		}else {
			echo 'Unsuccess';
		}
		
		
	}   
	
?>

 
 
 
 
 
 
 
 
 
 
 




