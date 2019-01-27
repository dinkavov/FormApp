<?php
	if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['birthdate']) && isset($_POST['subject']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['email']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$birthdate = $_POST['birthdate'];
		$subject = $_POST['subject'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		

		$query = "INSERT INTO users(firstname, lastname, birthdate, subject, country, phone, email) VALUES('$firstname', '$lastname', '$birthdate', '$subject', '$country', '$phone', '$email')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>