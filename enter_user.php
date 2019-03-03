<html>
<head>
<title>Saadhya Tour Planners-User login</title>
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

.d1{
    background: linear-gradient(to bottom, #660066 0%, #ffffff 100%)
}


.bg {
        background-image: url("kitty.jpg");
		height: 100%;	
		background-position: center;
		background-repeat: no-repeat;
		
}
</style>
</head>
<body>
<div class="d1">
<form action="logout_page.php" >
<button class="button" style="float:right">LOGOUT</button>
</form>
</div>
<div class="d1">
<form action="welcome_page.php" >
<button class="button">Go to Main page</button>
</form>
</div>


<center>
<div class="d1">
<br><font size=9> SAADHYA TOUR PLANNERS </font>
<br><font size=8> An Advanced Intelligent Tour Guide </font>
<p><img src="kitty.jpg" alt="kitten">
<form action="tags.php" >
<button class="button">Go to Tags page</button>
</form>

<form action="places.php" >
<button class="button">View the places!!</button>
</form>

<form action="modify1.php" >
<button class="button">Modify user details</button>
</form>

<form action="password_reser.php" >
<button class="button" style="float:right">Reset password</button>
</form>

<form action="give_feedback.php" >
<button class="button" style="float:left">Give feedback</button>
</form>

</div>





</center>
</body>
</html>