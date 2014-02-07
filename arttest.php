<?php
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
?>

<?php
DB::get_db()->insert('receipt_running_no',array('id'),array(null));
?>

<?php
 include(resolveHeader('includes/footer.php'));

?>