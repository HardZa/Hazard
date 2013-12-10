<?php

$validate = new Validate();
$validate->check($_POST,array(
	'amount' => array(
			'required' => true ,
			'numeric' => true
		)
));

if($validate->passed())
{
	$request->approve($node,array('amount'=>Input::post('amount')));
}
else
{

	if(Input::Exists())
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}

	?>

	 <form method="post" action="" class="form-signin">
	 	<input class="form-control" placeholder="จำนวนเงิน" type="text" name="amount" autocomplete="off" autofocus required >
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="ส่งใบแจ้งหนี้">
	 </form>

	<?php
}

?>