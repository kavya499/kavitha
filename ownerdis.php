<html>
<head>
	<title> owner information</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body style="background-image:url('docphp.jpg')" >



<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error());
mysqli_select_db($dbh,'power_plant') or die (mysqli_error());


$var=mysqli_query($dbh,"SELECT * from owner");
echo"<table border size=2>";
echo"<tr><th>o_id</th> <th>o_name</th> <th>a_id</th> <th>address</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";

?>
<br>
<br>
<ul>
<li><a href="first.html" >Home</a></li>
</ul>

</body>
</html>