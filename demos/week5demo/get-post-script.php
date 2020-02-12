<?php

//Make short Variable names
$firstName = $_REQUEST['first_name_field'];
$lastName = $_REQUEST['last_name_field'];


?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>Get / Post Form Demo</title>
		<style>
			.box {
				border: 1px solid #444;
				background-color: #ccc;
				margin: 20px 20px;
				padding: 5px 20px;
			}
		</style>
	</head>

	<body>
		<div class="box">
			<h2>This section contains the contact information:</h2>
			<p><strong>First Name:</strong> <?php echo htmlentities($firstName) ?></p>
			<p><strong>Last Name:</strong> <?php echo htmlentities($lastName) ?></p>
		</div>
	</body>

</html>
