<?php
/*
	$Id: second_deal.php  2013-12-26
	数据处理中心文件
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

//插入信息
$sed_jiaoyi=$_POST['sed_jiaoyi'];
if($sed_jiaoyi){
    date_default_timezone_set('Asia/Shanghai');//设置时区
	$sed_subject = $_POST['sed_subject'];
	$sed_price = $_POST['sed_price'];
	$sed_message = $_POST['sed_message'];
	$sed_time = strtotime($_POST['sed_dateline']);    
	$dateline = $_SGLOBAL['timestamp'];
	$sed_dateline =strtotime(date('Y-m-d H:i:s'), $now);
	$uid = $_SGLOBAL['supe_uid'];
	//$message = $_POST['message'];
	$sed_picid=$_POST['picid'];
	if(empty($sed_subject)||empty($sed_price)||empty($sed_message)||empty($sed_dateline))
	{
		echo "-1";
	}else{
		$id=inserttable("second",array('sed_subject'=>$sed_subject,'sed_hide'=>1,'sed_picid'=>$sed_picid,'sed_price'=>$sed_price,'sed_message'=>$sed_message,'uid'=>$uid,'sed_dateline'=>$sed_dateline,'sed_time'=>$sed_time),1);
		include_once(S_ROOT.'./source/function_feed.php');
		feed_publish($id, 'activityid', $olds?0:1);
		echo "1";
	}
}

//修改
$modifysecond=$_POST['modifysecond'];
if ($modifysecond) {
	date_default_timezone_set('Asia/Shanghai');//设置时区
	$subject = $_POST['subject'];
	$price= $_POST['price'];
	//$callplace = $_POST['callplace'];
	$time = strtotime($_POST['time']);
	$dateline = $_SGLOBAL['timestamp'];
	//$uid = $_SGLOBAL['supe_uid'];
	$message = $_POST['message'];
	$picid=$_POST['picid'];
	$id=$_POST['id'];
	if(empty($subject)||empty($time)||empty($price)||empty($message))
	{
		echo "-1";
	}else{
		$data=array('sed_subject'=>$subject,'sed_picid'=>$picid,'sed_price'=>$price,'sed_dateline'=>$dateline,'sed_time'=>$time,'sed_message'=>$message);
		updatetable('second',$data,array('id'=>$id));
		//$id=inserttable("activity",array('subject'=>$subject,'picid'=>$picid,'place'=>$place,'callplace'=>$callplace,'uid'=>$uid,'dateline'=>$dateline,'time'=>$time,'message'=>$message),1);
		include_once(S_ROOT.'./source/function_feed.php');
		//feed_publish($id, 'activityid', $olds?0:1);
		echo "1";
	}
}

//删除
$sed_delete=$_POST['delete'];
if ($sed_delete) {
	$id=$_POST['id'];
	$data=array('sed_hide'=>0);
    updatetable('second',$data,array('id'=>$id));
    echo "1";
}



//include_once template("second_second");


?>