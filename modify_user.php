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
	
	.d3{
background: linear-gradient(to bottom, #0033cc 0%, #ffffff 100%)
}
}
</style>
</head>
<body>
<font size="7">DISPLAYING USER DETAILS</font>
<?php
    $con=mysqli_connect("localhost","root","","case_tools_lab");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $result = mysqli_query($con,"SELECT * FROM  user_details where username=$username");
    echo "<table>";
 while($row = mysqli_fetch_array($result))
          {
echo "<tr><td>" . $row['user_ID'] . "</td><td> " . $row['f_name'] . "</td><td>" . $row['l_name'] . "</td><td> " . $row['contact_no'] . "</td><td>" . $row['email_id'] . "</td><td> " . $row['username'] . "</td><td> " . "</td><td> " . $row['password'] ; 
          }
    echo "</table>";
    mysqli_close($con);
    ?>
<font size="5">Enter to modify</font>

</body>
</html>