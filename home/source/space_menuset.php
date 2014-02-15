<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_activity.php 13194 2013-12-27 活动大厅
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('menuset')."");
		while ($value = $_SGLOBAL['db']->fetch_array($query)) {
			$query1 = $_SGLOBAL['db']->query("SELECT * FROM ".tname('appset')." where uid='$_SGLOBAL[supe_uid]'");
			$value1 = $_SGLOBAL['db']->fetch_array($query1);
			$status=$value1['status'];
			$array=explode(",",$status);
			if(!in_array("$value[id]",$array)){
				$value['cheak']='0';
			}else{
				$value['cheak']='1';
			}
			$list[]=$value;
		}

include_once template("space_menuset");



?>