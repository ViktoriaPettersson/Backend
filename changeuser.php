<?php 
$userobj = $_POST['changeuser'];

if(isset($userobj)) {
    var_dump($userobj);
}

header('location: index.php');
?>

