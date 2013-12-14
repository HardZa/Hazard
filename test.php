  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

$picName = array('pic1.jpg','pic2.jpg');
	Redirect::to(403);
?>
<div class="page-header">
    <h1>ทดสอบระบบ</h1>
</div>
<div class="row">
 <?php

 foreach($picName as $pic)
{
	echo '<div class="col-md-2">';
	echo '<img src="'.resolveURIHeader(Config::get('path/upload').$pic).'"  class="img-thumbnail"><br>';
	echo '</div>';
}

?>


</div>

<?php

 include(resolveHeader('includes/footer.php'));
 ?>