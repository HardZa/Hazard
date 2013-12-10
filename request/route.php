<?php

$user = User::get_user();
$request = Request::load( Input::get('id') );
if( $user == null || $request == null )
	Redirect::to(403);
$node = $request->get_node($user);

if( $node == -1 || !$request->can_access($user) )
{
	Redirect::to(403);
}

include(resolveHeader('request/normal_info.php'));
include(resolveHeader( $request->get_file($node) ));

?>