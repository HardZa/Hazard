  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

$editValidate = new Validate();
$editValidate->check($_GET,array(
	'requestid'=>array(
		'required'=>true,
		'numeric'=>true
	),
	'doctype' => array(
		'required'=>true,
		'numeric'=>true
	),
	'docid' => array(
		'required'=>true,
		'numeric'=>true
	)
));

$newValidate = new Validate();
$newValidate->check($_GET,array(
	'requestid'=>array(
		'required'=>true,
		'numeric'=>true
	),
	'doctype' => array(
		'required'=>true,
		'numeric'=>true
	),
	'new'=>array(
		'required'=>true
	)
));


if($newValidate->passed())
{
	echo "NEW PASS";
	//TODO : Check request correct
	
	//TODO : Create New Document and bind with request
	$doc = Document::create(Input::get('doctype'));
	//TODO : redirect to edit pass
	Redirect::to('doc/'.Input::get('requestid').'/'.Input::get('doctype').'/'.$doc->getDocID());
}else if($editValidate->passed()){
	echo "EDIT PASS";
	//TODO : Check request correct

	//TODO : include form
	$doc = new Document(Input::get('docid'),Input::get('doctype'));
	var_dump($doc->getFormURL());
	include(resolveHeader('includes/forms/'.$doc->getFormURL()));
	//TODO : fill form

}else{
	echo "FAIL ALL";
}


 ?>



  <?php
 include(resolveHeader('includes/footer.php'));
 ?>