  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 

$validate = new Validate();
$validate->check($_GET,array(
	'docType' => array(
		'required'=>true,
		'numeric'=>true
	),
	'docId' => array(
		'required'=>true,
		'numeric'=>true
	)
));

if($validate->passed())
{
	
	echo "HIHI";
}

 //include(resolveHeader('includes/forms/example.html'));

 ?>



  <?php
 include(resolveHeader('includes/footer.php'));
 ?>