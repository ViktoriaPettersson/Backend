<?php
    // lagra user i arrayen
    $users = [];
    if(file_exists('users.json')) {
        $json = file_get_contents('users.json');
        $users = json_decode($json, true);
    }

?>                       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users PHP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="mt-5">USERS</h1>
    <form action="newuser.php" method="POST" class="row g-3" name="userForm">
        <div class="col-md-4">
            <label class="form-abel">First name</label>
            <input type="text" class="form-control" name="firstName" value="<?php  ?>">
            
        </div>
        <div class="col-md-4">
            <label class="form-abel">Last name</label>
            <input type="text" class="form-control" name="lastName">
        </div>
        <div class="col-md-4">
            <label class="form-abel">Email address</label>
            <input type="text" class="form-control" name="mail">
        </div>
        <div class="col-md-6">
            <button class="btn btn-info">Save</button>
        </div>
    </form>
</div>
 
<?php foreach($users as $userForm => $user): ?>
<div class="container mt-5">
    <div><?php echo $user['firstName'] ?> <?php echo $user['lastName'] ?></div>
    <div><?php echo $user['mail'] ?></div>

<form action="deleteuser.php" method='POST'>
    <input type="hidden" name="userForm" value="<?php echo $userForm ?>">
    <button class="btn btn-info">Delete</button>
     
</form>
    <form action="changeuser.php" method="POST">
    <input type="hidden" name="changeuser" method="POST" value="<?php print_r($user); ?>"></input>
    <button class="btn btn-info">Change</button>
</form>
</div>

<?php endforeach; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>