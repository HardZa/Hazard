<?php

echo 'หมายเลขคำร้อง : ' . $request->getId().'<br>';
echo 'ชื่อ : '.$user->get('userrealname').'<br>';
echo 'สถานะคำร้อง : '.$request->get_status().'<br>';

?>
