<?php 
	$con = mysqli_connect("localhost","root","","db_name","3306"); //Connection
	$rs = mysqli_query($con,"query"); //query
	while ($row = mysqli_fetch_array($rs)) {
		# code...
	}
 ?>