 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php

$user = User::get_user();
if( $user == null )
{
	Redirect::to( 403 );
}

if( $user->is_group('client') )
{
	$requests = Request::get_requests_by_userid( $user->get('userid') );
	for($i=0;$i<count($requests);$i++)
	{
		$req_id = $requests[$i]->getId();
		?>

		<input class="btn btn-lg btn-primary btn-block" type="button" value="Request <?php echo $req_id ?>" onClick="location.href='<?php echo $req_id ?>'">   </br>

		<?php

	}
}
else
{

}


 ?>

  <?php
 include(resolveHeader('includes/footer.php'));
 ?>