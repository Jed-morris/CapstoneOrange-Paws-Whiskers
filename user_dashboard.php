<?php

session_start();

if (isset($_SESSION['ID']) && isset($SESSION['Email']))


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>User Dashboard- Paws and Whiskers</title>
</head>
<body>
    
<h3> Hello, <?=$_SESSION['ID']?> </h3>
<a href="logout.php" class="btn btn-warning"> Logout</a>

</body>
</html>
