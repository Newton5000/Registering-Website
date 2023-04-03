<?php
if(isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['phonenumber']) && isset($_POST['email']) && isset($_POST['address'])) {
	$firstname = $_POST['firstname'];
	$secondname = $_POST['secondname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	// Insert the data into the database using your preferred database system
	echo "Data submitted successfully!";
}
?>
