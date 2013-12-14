  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

$picName = array('sohee.jpg','sohee2.jpg');

?>
<div class="container">
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

</div>

<?php

 include(resolveHeader('includes/footer.php'));
 ?>