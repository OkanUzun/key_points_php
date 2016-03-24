<?php
	session_start();
	$connection = mysqli_connect("localhost", "root", "", "sistem", "3306");


  	

	if ($_POST){
		$email = $_POST["email"];
		$sifre = $_POST["sifre"];

		$result = mysqli_query($connection, "CALL giris_yap('$email','$sifre',@bilgi)");

		$row = mysqli_fetch_array($result);
     	if($row[@bilgi] == 'yok'){
     		echo $row[@bilgi];
     	}
     	else if ($row[@bilgi] == 'var-basarisiz'){
     		echo $row[@bilgi];
     	}
     	else{
     		$_SESSION["oturum"] = true;
     		$_SESSION["email"] = $email;
     		header("Location:oturum.php");
     	}

	}
	else{
		if (isset($_SESSION[oturum])){
			echo 'Hosgeldiniz '.$_SESSION["email"];
			echo '<a href="cikis.php">Cikis Yap</a>';
		}
		else{
			echo '<form action="" method="post">
	<table>
		<tr>
			<td>
				Email : 
			</td>
			<td>
				<input type="text" name="email"/>
			</td>
		</tr>
		<tr>
			<td>
				Sifre : 
			</td>
			<td>
				<input type="password" name="sifre"/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Giris Yap"/></td>
		</tr>
	</table>
</form>';
		}
		
	}
?>
