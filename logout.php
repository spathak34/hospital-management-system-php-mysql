<?php
	session_start();
	session_unset(); // remove all session variables
	session_destroy(); // destroy the session
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Tshaba Phomolo Benedict" >
	<meta http-equiv="refresh" content="2;url=index.php"/>
	<title>HMS | Logout</title>
</head>
<body>
	<header>
		<h1 class="dark">You have successfully logged out!</h1>
	</header>

<?php include('footer.php'); ?>