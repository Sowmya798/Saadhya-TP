<html>
<head>
<title>Logging in</title>
<style>

.bg {
        background-image: url("Best-of-Jammu-Kashmir-Tour.jpg");
		height: 100%;	
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
</head>

<body bgcolor="white">
<center>

<?php
session_start();


    $username=$_POST['username1'];
	
	$password=$_POST['password1'];  

	$conn=mysqli_connect("localhost","root","","case_tools_lab");
	if($conn)
	{
	$sql="SELECT * FROM user_details WHERE username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
	if($count==1)
		{
			echo "Login Successful";
			$_SESSION['username'] = $username;
			
			if((strcmp($username,'sowmya'))==0||(strcmp($username,'saadhana')==0))
			{
				header("Location:enter_admin.php");
			}
		}
    else 
		{
			echo "Wrong Username or Password";
			return false;
		}
	}
else{
    echo "Sorry ,Wrong Username or Password";
    return false;
}

if((strcmp($username,'sowmya'))!=0&&(strcmp($username,'saadhana')!=0))
			{
				header("Location:enter_user.php");
			}
//header("Location:enter_user.php");

?>

</body>
</html>

