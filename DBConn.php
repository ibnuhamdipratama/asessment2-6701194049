<?php
	$servername = "ibnuhamdipratama.mysql.database.azure.com";
	$username = "ibnuhamdipratama";
	$password = "Mekdibuka24jam";
	$database = "Nilai";

//	Koneksi  Database
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
		echo "<br>";
	}else{
		mysqli_select_db($conn, $database);
	}
?>