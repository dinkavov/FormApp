<?php
// include Database connection file
include("db_connection.php");

// check request
if( isset( $_POST ) )
{
    // get values
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $subject = $_POST['subject'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

    // Updaste User details
    $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', birthdate = '$birthdate', subject = '$subject', country = '$country', phone = '$phone', email = '$email' WHERE id = '$id'";
    if ( !$result = mysql_query($query) ) {
        exit(mysql_error());
    }
}