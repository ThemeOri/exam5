<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>
	<?php
	// Check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Retrieve form data using $_POST superglobal
		$name = $_POST['name'];
		$email = $_POST['email'];

		// Create a new instance of Person class and set properties
		include 'Person.php'; // assuming Person.php is in the same directory
		$person = new Person();
		$person->setName($name);
		$person->setEmail($email);

		// Display the properties
		echo "<p>Name: " . $person->getName() . "</p>";
		echo "<p>Email: " . $person->getEmail() . "</p>";
	}
	?>
</body>
</html>
