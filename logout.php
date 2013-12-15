<?php

require_once('core/init.php');
User::clear_user();
include(resolveHeader('includes/header.php'));

Redirect::to('');

include(resolveHeader('includes/footer.php'));
?>