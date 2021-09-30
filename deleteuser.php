<?php
// läser filen till en string
$json = file_get_contents('users.json');
// decodar filen till en array
$usersArray = json_decode($json, true);

// spara in värde 
$userForm = $_POST['userForm'] ?? '';

// Ta bort användare från arrayen som innehåller alla anbändare på position userForm.
unset($usersArray[$userForm]);

// Skriver ut i json. SKriver till filen igen. Gör en encode till json object
file_put_contents('users.json', json_encode($usersArray, JSON_PRETTY_PRINT));

header('location: index.php');

?>