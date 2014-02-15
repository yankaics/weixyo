<?php
$register=$_POST['register'];
if($register){
	require_once "./common/siteUserRegister.class.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email='623610577@qq.com';
	require_once S_ROOT.'./common.php';
    require_once S_ROOT."./wx/common/jtee.inc.php";
    require_once S_ROOT."./wx/common/siteUserRegister.class.php";

    $regClass = new siteUserRegister();
    $wei=uc_user_checkname($username);
    if($wei=='-1'){
        echo '-1';//账号名称太短
    }elseif($wei=='-3'){
        echo '-3';//账号已存在
    }else{
        $uid = $regClass->reg($username, $email, $password);
        echo '1';//成功创建
    }
}
?>