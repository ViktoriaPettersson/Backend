<?php 

// Spara in värdet av firstName, lastName, email i varaibel
// Ta emot firstName, lastName, email
// If empty string
$userForm = $_POST['userForm'] ?? '';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail = $_POST['mail'];
$id = rand(1,1000);


// $user = [$firstName, $lastName, $email, $id];

// echo $firstName, $lastName, $email, $id;

if($firstName and $lastName and $mail) {
    if(file_exists('users.json')) {
        // Hämtar det som finns i filen och spra i json variablen
        // Då får vi det som textstring
        $json = file_get_contents('users.json');

        // var_dump($json);

        // Gör om json till array
        $usersArray = json_decode($json, true);

        var_dump($usersArray);
    }else {
        $usersArray = [];
    }
    // Lägg till user i arrayen. 
    $usersArray[] = ['firstName' => $firstName, 'lastName' => $lastName, 'mail' => $mail, 'id' => $id];
  
    // Skriver ut i json. SKriver till filen igen. Gör en encode till json object
    file_put_contents('users.json', json_encode($usersArray, JSON_PRETTY_PRINT));
}

header('location: index.php');

