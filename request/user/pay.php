<?php


$validate = new Validate();
$validate->check($_POST,array(
	'code' => array(
			'required' => true
		)
));

if($validate->passed())
{
	$request->approve($node,array('code'=>Input::post('code')));
}
else
{

	if(Input::post('code') != '')
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}

	?>

	 <form method="post" action="" class="form-signin">
	 	<input class="form-control" placeholder="CODE RECEIVE" type="text" name="code" autocomplete="off" autofocus required >
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="ส่งใบเสร็จ">
	 </form>

	<?php
}

?>