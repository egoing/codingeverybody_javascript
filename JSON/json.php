<?php
$userinfo = json_decode($_GET['data']);
$userinfo->address = 'seoul';
$userinfo->phonenumber = '01023456789';
echo json_encode($userinfo);
?>