<?php
/*
	$Id: space_deal.php  2013-12-26
	数据处理中心文件
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
$huodong=$_POST['huodong'];
//插入
if($huodong){
	date_default_timezone_set('Asia/Shanghai');//设置时区
	$subject = $_POST['subject'];
	$place = $_POST['place'];
	$callplace = $_POST['callplace'];
	$time = strtotime($_POST['time']);
	$dateline = $_SGLOBAL['timestamp'];
	$uid = $_SGLOBAL['supe_uid'];
	$message = $_POST['message'];
	$picid=$_POST['picid'];
	if(empty($subject)||empty($time)||empty($place)||empty($callplace))
	{
		echo "-1";
	}else{
		$id=inserttable("activity",array('subject'=>$subject,'hide'=>1,'picid'=>$picid,'place'=>$place,'callplace'=>$callplace,'uid'=>$uid,'dateline'=>$dateline,'time'=>$time,'message'=>$message),1);
		include_once(S_ROOT.'./source/function_feed.php');
		feed_publish($id, 'activityid', $olds?0:1);
		echo "1";
	}
}
//修改
$modifyhuodong=$_POST['modifyhuodong'];
if ($modifyhuodong) {
	date_default_timezone_set('Asia/Shanghai');//设置时区
	$subject = $_POST['subject'];
	$place = $_POST['place'];
	$callplace = $_POST['callplace'];
	$time = strtotime($_POST['time']);
	$dateline = $_SGLOBAL['timestamp'];
	//$uid = $_SGLOBAL['supe_uid'];
	$message = $_POST['message'];
	$picid=$_POST['picid'];
	$id=$_POST['id'];
	if(empty($subject)||empty($time)||empty($place)||empty($callplace))
	{
		echo "-1";
	}else{
		$data=array('subject'=>$subject,'picid'=>$picid,'place'=>$place,'callplace'=>$callplace,'dateline'=>$dateline,'time'=>$time,'message'=>$message);
		updatetable('activity',$data,array('id'=>$id));
		//$id=inserttable("activity",array('subject'=>$subject,'picid'=>$picid,'place'=>$place,'callplace'=>$callplace,'uid'=>$uid,'dateline'=>$dateline,'time'=>$time,'message'=>$message),1);
		include_once(S_ROOT.'./source/function_feed.php');
		//feed_publish($id, 'activityid', $olds?0:1);
		echo "1";
	}
}
//删除
$delete=$_POST['delete'];
if ($delete) {
	$id=$_POST['id'];
	$data=array('hide'=>0);
    updatetable('activity',$data,array('id'=>$id));
    echo "1";
}
//报名
$enlist=$_POST['enlist'];
if ($enlist) {
	$uid = $_SGLOBAL['supe_uid'];
	$activityid=$_POST['id'];
	$id=inserttable("activityenlist",array('activityid'=>$activityid,'uid'=>$uid),1);
    //include_once(S_ROOT.'./source/function_feed.php');
    //feed_publish($id, 'activityid', $olds?0:1);
	echo "1";
}

//提交订阅信息
$menuset=$_POST['menuset'];
	if($menuset=='1'){
		$uid = $_SGLOBAL['supe_uid'];
		$id=$_POST['id'];
		$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('appset')." where uid='$uid'");
		$value = $_SGLOBAL['db']->fetch_array($query);
		if(!$value){
			inserttable("appset",array('uid'=>$uid,'status'=>$id));
			echo '1';
		}else{
			
			$array=explode(",",$value["status"]);
				if(!in_array("$id",$array)){
					if(!empty($value["status"])){
					$newstatus=$value["status"].",".$id;
					}else{
					$newstatus=$id;
					}
					updatetable("appset",array('status'=>$newstatus),array('uid'=>$uid));
					echo '1';
				}
			}
		}
	
	if($menuset=='0'){
		$uid = $_SGLOBAL['supe_uid'];
		$id=$_POST['id'];
		$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('appset')." where uid='$uid'");
		$value = $_SGLOBAL['db']->fetch_array($query);
		if($value){
			$changeid1=$id.",";
			$changeid2=",".$id;
			$change1=str_replace("$changeid1","","$value[status]");
			$change2=str_replace("$changeid2","","$change1");
			$change=str_replace("$id","","$change2");\
			updatetable("appset",array('status'=>$change),array('uid'=>$uid));
			echo '1';
		}
	}

//国内新闻更多加载代码
$more=$_POST['more'];
if($more){
	//国内新闻
	$guoneinews=array();
	$guoneinewsxml = new DOMDocument(); 
	$guoneinewsxml->load("http://news.qq.com/newsgn/rss_newsgn.xml"); 
	$i='0';
	foreach($guoneinewsxml->getElementsByTagName('item') as $guonei) 
		{ 
			$title = $guonei->getElementsByTagName( "title" );
	    	$guoneititle = $title->item(0)->nodeValue;
	    	$link = $guonei->getElementsByTagName( "link" );
	    	$guoneilink = $link->item(0)->nodeValue;
	    	$description = $guonei->getElementsByTagName( "description" );
	    	$guoneidescription = $description->item(0)->nodeValue;
	    	$pubDate = $guonei->getElementsByTagName( "pubDate" );
	    	$guoneipubDate = $pubDate->item(0)->nodeValue;
	    	
	    	
	    	
	    	if($i>'5'&&$i<'21'){
			//$html.=$i;
	    	$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>".$guoneititle."</strong></a><span>&nbsp;".$guoneidescription."<a href='".$guoneilink."' style='color:red;'>(点击查看更多)</a></span></div><div class='update-date' style='font-size:10px;width:110px;'>".$guoneipubDate."</div></div>";
	    		//$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>$guoneititle</strong></a> <span>&nbsp;$guoneidescription<a href='$guoneilink' style='color:red;'>(点击查看更多)</a></span> </div><div class='update-date' style='font-size:10px;width:110px;'>$guoneipubDate</div></div>"
			}
			$i++;
		} 

	echo $html;
}
//国外新闻代码执行
$guowaimore=$_POST['guowaimore'];
if($guowaimore){
	//国外新闻
	$guowainews=array();
	$guowainewsxml = new DOMDocument(); 
	$guowainewsxml->load("http://news.qq.com/newsgj/rss_newswj.xml"); 
	$i='0';
	foreach($guowainewsxml->getElementsByTagName('item') as $guowai) 
		{ 
			$title = $guowai->getElementsByTagName( "title" );
	    	$guowaititle = $title->item(0)->nodeValue;
	    	$link = $guowai->getElementsByTagName( "link" );
	    	$guowailink = $link->item(0)->nodeValue;
	    	$description = $guowai->getElementsByTagName( "description" );
	    	$guowaidescription = $description->item(0)->nodeValue;
	    	$pubDate = $guowai->getElementsByTagName( "pubDate" );
	    	$guowaipubDate = $pubDate->item(0)->nodeValue;
	    	if($i>'5'&&$i<'21'){
			//$html.=$i;
	    	$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>".$guowaititle."</strong></a><span>&nbsp;".$guowaidescription."<a href='".$guowailink."' style='color:red;'>(点击查看更多)</a></span></div><div class='update-date' style='font-size:10px;width:110px;'>".$guowaipubDate."</div></div>";
	    		//$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>$guoneititle</strong></a> <span>&nbsp;$guoneidescription<a href='$guoneilink' style='color:red;'>(点击查看更多)</a></span> </div><div class='update-date' style='font-size:10px;width:110px;'>$guoneipubDate</div></div>"
			}
			$i++;
			
		} 

	echo $html;
}

//电影资讯代码执行
$yulemore=$_POST['yulemore'];
if($yulemore){
	//国外新闻
	$yulenews=array();
	$yulenewsxml = new DOMDocument(); 
	$yulenewsxml->load("http://ent.qq.com/movie/rss_movie.xml"); 
	$i='0';
	foreach($yulenewsxml->getElementsByTagName('item') as $yule) 
		{ 
			$title = $yule->getElementsByTagName( "title" );
	    	$yuletitle = $title->item(0)->nodeValue;
	    	$link = $yule->getElementsByTagName( "link" );
	    	$yulelink = $link->item(0)->nodeValue;
	    	$description = $yule->getElementsByTagName( "description" );
	    	$yuledescription = $description->item(0)->nodeValue;
	    	$pubDate = $yule->getElementsByTagName( "pubDate" );
	    	$yulepubDate = $pubDate->item(0)->nodeValue;
	    	if($i>'5'&&$i<'21'){
			//$html.=$i;
	    	$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>".$yuletitle."</strong></a><span>&nbsp;".$yuledescription."<a href='".$yulelink."' style='color:red;'>(点击查看更多)</a></span></div><div class='update-date' style='font-size:10px;width:110px;'>".$yulepubDate."</div></div>";
	    		//$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>$guoneititle</strong></a> <span>&nbsp;$guoneidescription<a href='$guoneilink' style='color:red;'>(点击查看更多)</a></span> </div><div class='update-date' style='font-size:10px;width:110px;'>$guoneipubDate</div></div>"
			}
			$i++;
			
		} 

	echo $html;
}

//体育资讯代码执行
$tiyumore=$_POST['tiyumore'];
if($tiyumore){
	$tiyunews=array();
	$tiyunewsxml = new DOMDocument(); 
	$tiyunewsxml->load("http://sports.qq.com/rss_newssports.xml"); 
	$i='0';
	foreach($tiyunewsxml->getElementsByTagName('item') as $tiyu) 
		{ 
			$title = $tiyu->getElementsByTagName( "title" );
	    	$tiyutitle = $title->item(0)->nodeValue;
	    	$link = $tiyu->getElementsByTagName( "link" );
	    	$tiyulink = $link->item(0)->nodeValue;
	    	$description = $tiyu->getElementsByTagName( "description" );
	    	$tiyudescription = $description->item(0)->nodeValue;
	    	$pubDate = $tiyu->getElementsByTagName( "pubDate" );
	    	$tiyupubDate = $pubDate->item(0)->nodeValue;
	    	if($i>'5'&&$i<'21'){
			//$html.=$i;
	    	$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>".$tiyutitle."</strong></a><span>&nbsp;".$tiyudescription."<a href='".$tiyulink."' style='color:red;'>(点击查看更多)</a></span></div><div class='update-date' style='font-size:10px;width:110px;'>".$tiyupubDate."</div></div>";
	    		//$html.="<div class='new-update clearfix'><i class=' icon-caret-right'></i><div class='update-done'><a title=' href='#'><strong>$guoneititle</strong></a> <span>&nbsp;$guoneidescription<a href='$guoneilink' style='color:red;'>(点击查看更多)</a></span> </div><div class='update-date' style='font-size:10px;width:110px;'>$guoneipubDate</div></div>"
			}
			$i++;
			
		} 

	echo $html;
}
?>