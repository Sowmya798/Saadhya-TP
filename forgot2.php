<html>
<head>
<title>Forgot Password</title>
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
.d4{
background: linear-gradient(to bottom, #00cc00 0%, #ffffff 100%)
}

</style>

</head>
<body>
<center>

<form action="login_page.php" >
<button class="button" style="float:right" >BACK</button>
</form>
<div class="d4">
<br><br><br><br><br>
<br><font size=8><b>SAADHYA TOUR PLANNERS</b></font></br>
<br><font size=6><b>An Advanced Intelligent Tour Guide</b></font></br>
<br><font size=5><b>FORGOT PASSWORD</b></font></br>
<br><br><br><br>
<font size=3>
<?php
session_start();
$username=$_POST['name'];

$conn=mysqli_connect("localhost","root","","case_tools_lab");
    if($conn)
	{
	$sql="SELECT * FROM user_details WHERE username='$username'";	
	$result=mysqli_query($conn,$sql);
	$arr = mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	
		if($count==1)
			{
				echo "The password of your account will be sent to your registered emailID";	
			}
		else
			{
				echo "sorry couldn't find the username. Try again."; 
				
			}
	}
	else
	{
		echo "Sorry, can't connect";
	}
?>
<p>EMAIL_ID   : <?php echo $arr['email_id']; ?>

</font>
</center>
</d4>
</body>
</html>