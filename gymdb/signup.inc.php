<?php

if (isset($_POST['submit'])) {

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gymdb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

	
	$first =$_POST['first'];
	$last =$_POST['last'];
	$email =$_POST['email'];
	$uid = $_POST['uid'];
	$pwd =$_POST['pwd'];
	
		
	if (empty($first) || empty($last) || empty($email)|| empty($uid)|| empty($pwd) ) 
	{
	    echo "<script>alert('form is not filled')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	    exit();
	
	} else {
		//check if input character are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
        
		    echo "<script>alert('invalid')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	         exit();
           } else {
			   //check if email is valid
			   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				   
				   echo "<script>alert('enter valid email')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	               exit();
			   }
			   else {
               $sql = "SELECT * FROM logintb WHERE username='$uid'";
				   $result = mysqli_query($conn, $sql);
			   $resultCheck = mysqli_num_rows($result);
				   
				   if($resultCheck > 0) {
					 echo "<script>alert('user already exists')</script>";
        echo "<script>window.open('index.php','_self')</script>";	                  exit();   
				   }
				   else {
					   //hashing the password
					  // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					   //insert the user into database
					   $sql = "INSERT INTO `logintb` (`user_uid`, `username`, `password`, `fname`, `lname`, `email`) VALUES (NULL, '$uid', '$pwd', '$first', '$last', '$email');";
					   mysqli_query($conn, $sql);
					   echo $uid;
					   echo "<script>alert('signed up successful please login')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	                  exit();  
					   
				   }
			   }   
			   
		   }
	}
} else {
	header("Location: ../signup.php");
	exit();
	
}

 