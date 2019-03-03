<html>
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
background: linear-gradient(to bottom, #00cc00 0%, #fffff0 100%)
}
</style>
</head>
<body>
<div class="d3">
<center>

<font size="7">
<p>Changes made successfully
<p>DISPLAYING USER DETAILS
</font>
<br>


<?php
session_start();
$f_name=$_POST['first_name1'];
$l_name=$_POST['last_name1'];
$contact_no=$_POST['contact_no1'];
$email_id=$_POST['email_id1'];
/*$username=$_POST['username1'];
$password=$_POST['password1']; 
*/
	$conn=mysqli_connect("localhost","root","","case_tools_lab");
	if($conn)
	{
    $sql = "UPDATE user_details SET f_name='$f_name',l_name='$l_name',contact_no='$contact_no',email_id='$email_id' WHERE username='".$_SESSION['username']."' ";
	}
mysqli_query($conn, $sql);
$user_ID=mysqli_insert_id($conn);
?>





<form action="logout_page.php" >
<button class="button" style="float:right">Logout</button>
</form>

<form action="enter_user.php" >
<button class="button" style="float:left">Back to menu</button>
</form>

</div>
<br><br><br><br>
<h3>The details after modifying.. 

<?php
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
</center>
</h4>

</div>

</body>
</html>