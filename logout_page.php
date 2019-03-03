<html>
<head>
<center>
<title> LOGOUT PAGE </title>

<style>
.bg {
        background-image: url("tamilnadu-tour.jpg");
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

<body>
<?php
session_start();
?>
<div class="bg">
<form action="welcome_page.php" >
<p align="right"><button class="button">Go to main page</button></p>
</form>
<center>
<br><font size="6">SAADHYA TOUR PLANNERS</font></br>
<br><font size="5">AN ADVANCED INTELLIGENT TOUR GUIDE</font></br>

<?php

   session_destroy();
?>

<h4>You have successfully logged out!</h4>
<h1>Thank you for visiting!</h1>
<h2>Hope to see you soon again!!</h2>
</center>


<center>
<h2>You have successfully logged out</h2>
</center>
</bg>
</body>
</html>