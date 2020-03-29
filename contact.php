<?php

	$con = mysqli_connect('localhost','root');
	if($con)
	{
		echo "Connection Successfull";
	}
	else
	{
		echo "No Connection";
	}

	mysqli_select_db($con,'cdrdatabase');

	$user = $_POST['name'];
	$mobile = $_POST['num'];
	$email = $_POST['email'];
	$comments = $_POST['message'];

	$query = "insert into messagedetails (name, number, email, message) values ('$user','$mobile','$email','$comments')";

	echo "query";
	mysqli_query($con, $query);
	header('location:index.html#contact');

?>