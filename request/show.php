<?php

$user = User::get_user();
$request = Request::load( Input::get('id') );
include(resolveHeader('request/normal_info.php'));

?>