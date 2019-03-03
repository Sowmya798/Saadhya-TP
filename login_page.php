<html>
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
<center>
<head>
<br><title> LOGIN PAGE </title>
</head>
<body>
<div class="bg">

<form action="welcome_page.php" >
<p align="right"><button class="button">BACK</button></p>
</form>

<b><b><br><font size=5 color="black">SAADHYA TOUR PLANNERS</br>
<br><font size=4 color="black"> An Advanced Intelligent Tour Guide </font>
<br><font size=7 face="verdana" color="white"> LOGIN PAGE </font>
</b></b>
<h3>
<form action="login_page2.php" method="post">
<div class="container">
<font color="white"><label class="cl-wh f-lb">Username</label></font>
<div class="td prt"><input type="text" placeholder="Enter Username" name="username1" required></div>
<br>
<font color="white"><label class="cl-wh f-lb">Password</label></font>
<div class="td prt"><input type="password" placeholder="Enter Password" name="password1" required></div>
<br>
<input type="submit" name="submit" value="Login!">


</div>
</form>
</h3>

<form action="forgot.php" >
<button class="button">Forgot Password</button>
</form>
</center>
</div>
</body>
</html>

