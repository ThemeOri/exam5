<?php 

include 'Person.php'; 

$person = new Person();
$person->setName('John Doe');
$person->setEmail('johndoe@example.com');
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
