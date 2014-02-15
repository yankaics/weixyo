<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_activity.php 13194 2013-12-27 活动大厅
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
$op=$_GET['op'];

//分页
$page = empty($_GET['page'])?1:intval($_GET['page']);
if($page<1) $page=1;
$perpage = 10;
$perpage = mob_perpage($perpage);
$start = ($page-1)*$perpage;
ckstart($start, $perpage);
if($op=='me'){
//我的活动
	$theurl="space.php?do=activity";
	$count = $_SGLOBAL['db']->result($_SGLOBAL['db']->query("SELECT COUNT(*) FROM ".tname('activity')." where time>$_SGLOBAL[timestamp]"),0);
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('activity')." where hide='1' and uid=$_SGLOBAL[supe_uid] order by dateline DESC LIMIT $start,$perpage ");

}else{
	$theurl="space.php?do=activity";
	$count = $_SGLOBAL['db']->result($_SGLOBAL['db']->query("SELECT COUNT(*) FROM ".tname('activity')." where time>$_SGLOBAL[timestamp]"),0);
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('activity')." where hide='1' and time>$_SGLOBAL[timestamp] order by dateline DESC LIMIT $start,$perpage ");
	}
		while ($value = $_SGLOBAL['db']->fetch_array($query)) {
			//查询是否已报名
			$query2 = $_SGLOBAL['db']->query("SELECT * FROM ".tname('activityenlist')." where uid=$_SGLOBAL[supe_uid] and activityid=$value[id]");
			$value2 = $_SGLOBAL['db']->fetch_array($query2);
			if($value2){
				$value['baoming']='1';//如果存在值，就说明已报名，为1
			}else{
				$value['baoming']='0';//反之亦然
			}
			//下面这个其实就是相同的原理，下面这个视察当前图片是否存在的
			$query1 = $_SGLOBAL['db']->query("SELECT * FROM ".tname('pic')." where picid=$value[picid]");
			$value1 = $_SGLOBAL['db']->fetch_array($query1);
			if($value1['filepath']){
				$value['thumbpic']="./attachment/".$value1['filepath'].".thumb.jpg";
				$value['pic']="./attachment/".$value1['filepath'];
			}
			
			$list[]=$value;
		}

$multi = multi($count, $perpage, $page, $theurl);
include_once template("space_activity");




?>