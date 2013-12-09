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
	echo "NEW PASS<br>";
	//TODO : Check request correct
	
	//TODO : Create New Document and bind with request
	$doc = Document::create(Input::get('doctype'));
	//TODO : redirect to edit pass
	Redirect::to('doc/'.Input::get('requestid').'/'.Input::get('doctype').'/'.$doc->getDocID());
}else if($editValidate->passed()){
	echo "EDIT PASS<br>";
	$doc = new Document(Input::get('docid'),Input::get('doctype'));

	//TODO : Check Input form GET or POST
	if(Input::exists('post'))
	{
		$doc->setData($_POST);
		$doc->save();
	}
	//TODO : Check request correct

	//TODO : include & fill form
	function getValue($field)
	{
		global $doc;
		if(isset($doc->getData()[$field]))
		{
			return $doc->getData()[$field];	
		} 
		return '';
	}

	include(resolveHeader('includes/header_form.php'));
	include(resolveHeader('includes/forms/'.$doc->getFormURL()));
	include(resolveHeader('includes/footer_form.php'));
}else{
	echo "FAIL ALL<br>";
}


 ?>



  <?php
 include(resolveHeader('includes/footer.php'));
 ?>