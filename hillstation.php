<html>
<head>
<title>HILLSTATIONS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margxin: 0;
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

div {
    background: linear-gradient(to bottom, #ffffff 0%, #3399ff 100%)
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
<div>
<form action="tags.php" >
<div><button class="button" >Back to Tags page</button></div>
</form>
<form action="logout_page.php" >
<div><button class="button" >Logout</button></div>
</form>

<div>
<body>

<h2><center><font face="verdana" color="black">HILLSTATIONS</font></center></h2>

<div class="container">
  <img src="kashmir.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
  <a href="Kashmir.php">
    <h1><font face="verdana" color="white"><center>Kashmir</center></font></h1>
    
  </div>
</div>

<br></br>

<div class="container">
  <img src="shimla.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
  <a href="Shimla.php">
    <h1><font face="verdana" color="white"><center>Shimla</center></font></h1>
    
  </div>
</div>

<br></br>

<div class="container">
  <img src="ladakh.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
  <a href="Ladakh.php">
    <h1><font face="verdana" color="white"><center>Ladakh</center></font></h1>

</div>
</body>
</html>
