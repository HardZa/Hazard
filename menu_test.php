<?php
if( !isset($user) || $user == null ) {
?>
<a href="./">Home</a> | <a href="login">Login</a> | <a href="register.php">Register</a> 
<?php } else { ?>
<a href="./">Home</a> | <a href="user">User</a> | <a href="logout">Logout</a> 
<?php } ?>


<br>