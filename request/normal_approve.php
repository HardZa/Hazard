<?php

if(Input::post('action') == 'Approve')
{
	$request->approve($node);
}
else if(Input::post('action') == 'Reject' )
{
	$request->reject($node);
}
else
{
	?>

	 <form method="post" action="" class="form-signin">
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="Approve">
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="Reject">
	 </form>

	<?php
}

?>