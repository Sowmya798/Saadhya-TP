<html>
<center>
<head>
<title>Modify User Details</title>
<style>
.bg {
        background-image: url("pahalgam.jpg");
		height: 100%;	
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover; 
		opacity=0.5;
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
	
	.d3{
background: linear-gradient(to bottom, #ffcc00 0%, #fffff0 100%)
}
</style>
</head>
<body>
<div class="d3">
<center>
<font size="7">DISPLAYING USER DETAILS</font>
<br>
<form action="logout_page.php" >
<button class="button" style="float:right">Logout</button>
</form>


<form action="enter_user.php" >
<button class="button" style="float:left">Back to menu</button>
</form>
<br><br><br>


</div>
<br><br>
<?php
session_start();
    $conn=mysqli_connect("localhost","root","","case_tools_lab");
    if($conn)
	{
	$sql="SELECT * FROM user_details WHERE username='".$_SESSION['username']."' ";	
	$result=mysqli_query($conn,$sql);
    $arr = mysqli_fetch_array($result);
	
	}
	else
	{
		echo "Sorry, can't connect";
	}
?>
<div class="d3">
<h4>
<center>
<p>USER_ID    : <?php echo $arr['user_ID']; ?>
<p>FIRST NAME : <?php echo $arr['f_name']; ?>
<p>LAST NAME  : <?php echo $arr['l_name']; ?>
<p>EMAIL_ID   : <?php echo $arr['email_id']; ?>
<p>USERNAME   : <?php echo $arr['username']; ?>
<p>CONTACT NO : <?php echo $arr['contact_no']; ?>
</h4>


<br><h4>Please fill up the details to modify</h4>
<h3>
<u><h2><b>Enter your new details</b></h2></u><br><br>
<form action="modify2.php" method="post">	
<br>
<label class="cl-wh f-lb">First Name</label>
 <div class="td prt"><input type="text" name="first_name1" required></div>
<br>
<label class="cl-wh f-lb">Last Name</label>
<div class="td prt"><input type="text" name="last_name1" required></div> 
<br>
<label class="cl-wh f-lb">Contact no.</label>
<div class="td prt"><input type="number" name="contact_no1" required></div>  
<br>
<label class="cl-wh f-lb">Email ID</label>
<div class="td prt"><input type="text" name="email_id1"></div>
<br>
<form action="modify2.php" >
<button class="button" >SUBMIT</button>
</div>
<center>
</body>
</html>