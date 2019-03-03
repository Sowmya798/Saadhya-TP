<html>
<head>
<title>Feedback</title>
<style>
.bg {
        background-image: url("forest.jpg");
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
</style>

</head>
<body>
<div class="bg">
<h1>
<center>
<?php
$name=$_POST['name'];
$rating=$_POST['rating'];
$comments=$_POST['comments'];

	$conn=mysqli_connect("localhost","root","","case_tools_lab");
	if($conn)
	{
$sql = "INSERT INTO feedback_details (name,rating,comment) VALUES ('$name','$rating','$comments');";
	}
mysqli_query($conn, $sql);
$feedback_ID=mysqli_insert_id($conn);
?>
<font color="white">
<h1>Feedback given Successfully</h1><br>
<h3>THANK YOU!</h3> 

<form action="read_feedback.php" >
<button class="button" >VIEW</button>
<form>
</form>
</center>
</div>
</body>
</html>
