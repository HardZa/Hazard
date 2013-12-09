 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php

 

 $user = User::get_user();
 $request = Request::load( Input::get('id') );
 if( $user == null || $request == null || !$request->can_access($user) )
 {
 	Redirect::to( 403 );
 }

 $node_idx = $request->get_idx_current( $user );
 $graph = RequestInfo::get( $request->getType() . "/graph" );
 $idx = 0;
 for($i=0;$i<count($graph);$i++)
 {
 	if($i != 0)
 		echo '-->';
 	for($j=0;$j<$graph[$i];$j++)
 	{
 		if( $node_idx == $idx )
 			echo '|';
 		if( getBit($request->getState(),$idx) == false )
 		{
 			echo 'O';
 		}
 		else
 		{
 			echo '#';
 		}
 		if( $node_idx == $idx )
 			echo '|';
 		echo ' ';
 		$idx++;
 	}
 }

 echo "<BR>";

 if($node_idx != -1)
 {
 	include( resolveHeader( $request->get_file($node_idx) ) );
 }

 ?>

 <?php
 include(resolveHeader('includes/footer.php'));
 ?>