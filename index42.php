<?php
$dbh=mysqli_connect("localhost","root","",'supermarket');
 if(isset($_POST['username'])){
	 $uname=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="select *from admin where user='".$uname."'and password='".$password."' limit 1";
	 $result=mysqli_query($dbh,$sql);
	 if(mysqli_num_rows($result)==1)
	 {
		 echo"<body bgcolor='lime'>";
		 echo "<br><br><br><font color='blue'><h2 align='center'>SUCCESSFULL LOGIN !!!!";
		 echo "<br><br>";
		  echo "<a href='index2.html'>CLICK HERE TO VIEW DETAILS</a></h2></font>";
 
		 exit();
	 }
	 else
	 {
		 echo "<h2 align='center'>INVALID LOGIN"; 
		 echo "<br><br>";
		 echo "<a href = 'index2.html'> CLICK HERE TO GO BACK</a><h2></body>";
		 exit();
	 }
 }
 ?>
 


<html>
<style>
  
input[type=text], input[type=password] {
    width:25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:25%;
}

button:hover {
    opacity: 0.8;
}

.btn-login {
    width: auto;
    padding: 10px 18px;
    background-color: #4CAF50;
}
.btn-login {
       width:25%;

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius:25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .btn-login {
       width: 25%;
    }
}
</style>
<body>
<center>
<img src="images/login.jpg">
</center>
<h2 align="center">SUPERMARKET DATABASE</h2>

<form  method="POST" action="#">
  <div class="imgcontainer" align="center">
 
  </div>

  <div class="container" align="center">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
<br><br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
        
   
	<br>
   
  </div>
<br><br><br>
  <div class="container" style="background-color:"crimson" align="center">
    <a href="index.php" align="center">
     <input type="submit" name="submit" value="LOGIN"  align="center" class="btn-login"/>
    
  </div>
</form>

</body>
</html>
