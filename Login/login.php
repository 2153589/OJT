<?php 
 
$host="localhost";
$user="root";
$password="";
$db="quizzer";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSLU Quizzer</title>
	<link rel="icon" type="image/png" href="icon.jpg" />
	<link rel="stylesheet" type="text/css" href="style.css">
		</head>
<body>
	<div class="loginbox">
		<img src="user-avatar.png" class="avatar">
		<p>------------------------------------------------</p>
		<h1>User Login</h1>
		<form method="POST" action="#">
			<p>ID Number</p>
			</img><input type="text" name="username" placeholder="ID number">
			<p>Password</p>
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="" value="Login">
		</form>
		<p>------------------------------------------------</p>
		<a href="#openModal">User Guidelines</a>
	</div>
<div id="openModal" class="modalWindow">
    <div>
    	<p>------------------------------------------------------------</p>
        <ul>
        <li>STUDENTS: If you don't have a user ID and password yet, please ask your instructor. </li>
        <li>To protect your privacy, logout and quit your web browser when you finish accessing the services that require authentication.</li>
    </ul>
    	<p>------------------------------------------------------------</p>

        <center><a href="#ok" class="ok"><input type="submit" name="" value="OK"> </a><center>
        
      
    </div>
</div>

	</body>

	</html>
