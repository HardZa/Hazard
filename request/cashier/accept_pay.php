<?php

$info = $request->getInfo();
echo 'Code receive : ' . $info['code'] .'<br>';
include( resolveHeader('request/normal_approve.php') );

?>