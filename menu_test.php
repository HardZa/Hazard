<?php
if( !isset($user) || $user == null ) {
?>
<a href="./">Home</a> | <a href="login.php">Login</a> | <a href="register.php">Register</a> 
<?php } else { ?>
<a href="./">Home</a> | <a href="user.php">User</a> | <a href="logout.php">Logout</a> 
<?php } ?>


<br>