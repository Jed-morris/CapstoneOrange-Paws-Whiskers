<?php

session_start();

if (isset($_SESSION['ID']) && isset($SESSION['Email']))


?>

<?php include('header.php')?>
    
<h3> Hello, <?=$_SESSION['ID']?> </h3>
<a href="logout.php" class="btn btn-warning"> Logout</a>



<?php include('footer.php')?>