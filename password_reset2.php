<html>
<head>
<title>RESET PASSWORD</title>
<style>

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
	
	.d3{
background: linear-gradient(to bottom, #f0cc00 0%, #fffff0 100%)
}
</style>
</head>

<body>
<center>
<br><font size=8><b>SAADHYA TOUR PLANNERS</b></font></br>
<br><font size=6><b>An Advanced Intelligent Tour Guide</b></font></br>
<br><font size=5><b>PASSWORD RESET PAGE</b></font></br>


<?php
session_start();
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];

	$conn=mysqli_connect("localhost","root","","case_tools_lab");
	if($conn)
	{
	$sql = "SELECT password from user_details where username='".$_SESSION['username']."' ";
	$result=mysqli_query($conn,$sql);
    $arr = mysqli_fetch_array($result);
	
		if(strcmp($arr['password'],$old_pass)==0)
		{
			$sql2 = "UPDATE user_details SET password='$new_pass' where username='".$_SESSION['username']."' ";
			$result2=mysqli_query($conn,$sql2);
		}
		else
		{
			echo "wrong password";	
		}
	}
	else
	{
	echo "connection failed";	
	die("failed");
	}
?>

<font size= 12>SUCCESSFULLY DONE</font>
<br><br><br>
<form action="logout_page.php" >
<button class="button" style="float:right">Logout</button>
</form>

<form action="enter_user.php" >
<button class="button" style="float:left">Back to menu</button>
</form>

<center>
</body>
</html>