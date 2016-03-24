<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
    include 'dbsettings.php';


 	$result = mysqli_query($connection, 
     "CALL durum_combobox()") or die("Query fail: " . mysqli_error());

	echo '<select name="durumlar">';    
	while($row = mysqli_fetch_array($result)) 
	{ 
	    echo '<option value = '.$row["durum"].'>'.$row["durum"].'</option>'; 
	}                        
	echo '</select>'; 
?> 	
</body>
</html>

