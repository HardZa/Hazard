 <?php
 
 require_once('../core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php

 $user = User::get_user();
 $requests = array();
 foreach (Request::get_requests() as $request) {
 	if( !$request->can_access($user) )
 		continue;
 	?>
 	<input class="btn btn-lg btn-primary btn-block" type="submit" value="คำร้องหมายเลข <?php echo $request->getId(); ?>" onclick="parent.location='<?php echo resolveURIHeader("process_request.php?id=".$request->getId()); ?>'">

 	<?php
 }

 ?>

  <?php
 include(resolveHeader('includes/footer.php'));
 ?>