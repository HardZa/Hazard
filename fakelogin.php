<?php
 require_once('core/init.php');


if(Input::exists('get'))
{
	User::auth(Input::get('user'),'123456');
}

Redirect::to(' ');

?>