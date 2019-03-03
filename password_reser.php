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

</center>
<form action="password_reset2.php" method="post">	
<br>
<label class="cl-wh f-lb">Current Password</label>
 <div class="td prt"><input type="password" name="old_pass" required></div>
<br>
<br>
<label class="cl-wh f-lb">New Password</label>
 <div class="td prt"><input type="password" name="new_pass" required></div>
<br>

<form action="password_reset2.php" >
<button class="button" >SUBMIT</button>


</form>

</body>
</html>