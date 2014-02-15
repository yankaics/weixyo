<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('admin/tpl/cache|admin/tpl/header|admin/tpl/side|admin/tpl/footer|template/default/header|template/default/footer', '1392100132', 'admin/tpl/cache');?><?php $_TPL['menunames'] = array(
		'index' => '管理首页',
		'config' => '站点设置',
		'privacy' => '隐私设置',
		'usergroup' => '用户组',
		'credit' => '积分规则',
		'profilefield' => '用户栏目',
		'profield' => '群组栏目',
		'eventclass' => '活动分类',
		'magic' => '道具设置',
		'task' => '有奖任务',
		'spam' => '防灌水设置',
		'censor' => '词语屏蔽',
		'ad' => '广告设置',
		'userapp' => 'MYOP应用',
		'app' => 'UCenter应用',
		'network' => '随便看看',
		'cache' => '缓存更新',
		'log' => '系统log记录',
		'space' => '用户管理',
		'feed' => '动态(feed)',
		'share' => '分享',
		'blog' => '日志',
		'album' => '相册',
		'pic' => '图片',
		'comment' => '评论/留言',
		'thread' => '话题',
		'post' => '回帖',
		'doing' => '记录',
		'tag' => '标签',
		'mtag' => '群组',
		'poll' => '投票',
		'event' => '活动',
		'magiclog' => '道具记录',
		'report' => '举报',
		'block' => '数据调用',
		'template' => '模板编辑',
		'backup' => '数据备份',
		'stat' => '统计更新',
		'cron' => '系统计划任务',
		'click' => '表态动作',
		'ip' => '访问IP设置',
		'hotuser' => '推荐成员设置',
		'defaultuser' => '默认好友设置',
	); ?>
<?php $_TPL['nosidebar'] = 1; ?>
<?php if(empty($_SGLOBAL['inajax'])) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$_SC['charset']?>" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title><?php if($_TPL['titles']) { ?><?php if(is_array($_TPL['titles'])) { foreach($_TPL['titles'] as $value) { ?><?php if($value) { ?><?=$value?> - <?php } ?><?php } } ?><?php } ?><?php if($_SN[$space['uid']]) { ?><?=$_SN[$space['uid']]?> - <?php } ?><?=$_SCONFIG['sitename']?> - Powered by dream team</title>
<script language="javascript" type="text/javascript" src="source/script_cookie.js"></script>
<script language="javascript" type="text/javascript" src="source/script_common.js"></script>
<script language="javascript" type="text/javascript" src="source/script_menu.js"></script>
<script language="javascript" type="text/javascript" src="source/script_ajax.js"></script>
<script language="javascript" type="text/javascript" src="source/script_face.js"></script>
<script language="javascript" type="text/javascript" src="source/script_manage.js"></script>
<style type="text/css">
@import url(template/default/style.css);
@import url(template/green/style.css);
<?php if($_TPL['css']) { ?>
@import url(template/default/<?=$_TPL['css']?>.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_theme'])) { ?>
@import url(theme/<?=$_SGLOBAL['space_theme']?>/style.css);
<?php } elseif($_SCONFIG['template'] != 'default') { ?>
@import url(template/<?=$_SCONFIG['template']?>/style.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_css'])) { ?>
<?=$_SGLOBAL['space_css']?>
<?php } ?>
</style>
<link rel="shortcut icon" href="image/favicon.ico" />
<link rel="edituri" type="application/rsd+xml" title="rsd" href="xmlrpc.php?rsd=<?=$space['uid']?>" />
</head>
<body>

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="header">
<?php if($_SGLOBAL['ad']['header']) { ?><div id="ad_header"><?php adshow('header'); ?></div><?php } ?>
<div class="headerwarp">
<h1 class="logo"><a href="index.php"><img src="template/<?=$_SCONFIG['template']?>/image/logo.gif" alt="<?=$_SCONFIG['sitename']?>" /></a></h1>
<ul class="menu">
<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=medicine">用药助手</a></li>
<li><a href="space.php?do=activity">活动</a></li>
<li><a href="space.php?do=group">群组</a></li>
<li><a href="space.php?do=discussion">案例讨论</a></li>
<li><a href="space.php?do=joke">笑话</a></li>
<li><a href="space.php?do=news&orderby=dateline">今日资讯</a></li>
<li><a href="space.php?do=subject">本周专题</a></li>

<?php } else { ?>
<li><a href="index.php">首页</a></li>
<?php } ?>



<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=pm<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?>&filter=newpm<?php } ?>">消息<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?><span style="background-color: #e74c3c;border-radius: 30px;color: white;font-size: 12px;font-weight: 500;line-height: 18px;min-width: 8px;padding: 0 5px;margin-left:30px;margin-top:-20px;text-align: center;text-shadow: none;z-index: 10;display: block;"><?=$_SGLOBAL['member']['newpm']?></span><?php } ?></a></li>
<?php if($_SGLOBAL['member']['allnotenum']) { ?><li class="notify" id="membernotemenu" onmouseover="showMenu(this.id)"><a href="space.php?do=notice"><?=$_SGLOBAL['member']['allnotenum']?>个提醒</a></li><?php } ?>
<?php } ?>
</ul>

<div class="nav_account">
<?php if($_SGLOBAL['supe_uid']) { ?>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="loginName"><?=$_SN[$_SGLOBAL['supe_uid']]?></a>
<?php if($_SGLOBAL['member']['credit']) { ?>
<a href="cp.php?ac=credit" style="font-size:11px;padding:0 0 0 5px;"><img src="image/credit.gif"><?=$_SGLOBAL['member']['credit']?></a>
<?php } ?>
<br />
<?php if(empty($_SCONFIG['closeinvite'])) { ?>
<a href="cp.php?ac=invite">邀请</a> 
<?php } ?>
<a href="cp.php?ac=task">任务</a> 
<a href="cp.php?ac=magic">道具</a>
<a href="cp.php">设置</a> 
<a href="cp.php?ac=common&op=logout&uhash=<?=$_SGLOBAL['uhash']?>">退出</a>
<?php } else { ?>
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
欢迎您<br>
<a href="do.php?ac=<?=$_SCONFIG['login_action']?>">登录</a> | 
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>">注册</a>
<?php } ?>
</div>
</div>
</div>

<div id="wrap">

<?php if(empty($_TPL['nosidebar'])) { ?>
<div id="main">


<div id="mainarea">

<?php if($_SGLOBAL['ad']['contenttop']) { ?><div id="ad_contenttop"><?php adshow('contenttop'); ?></div><?php } ?>
<?php } ?>

<?php } ?>


<style type="text/css">
@import url(admin/tpl/style.css);
</style>

<div id="cp_content">


<div class="mainarea">
<div class="maininner">

<form method="post" action="<?=$turl?>">
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />

<div class="bdrcontent">
<table cellspacing="0" cellpadding="0" class="formtable">
<tr>
<th style="width:8em;">选择类型</th>
<td>
<p><input type="checkbox" id="cachetype1" name="cachetype[]" value="tpl" checked /> <label for="cachetype1" style="font-weight:bold;">模板文件缓存</label></p>
<p>当你通过FTP上传或者在线编辑等操作修改了站点模板后，如果显示页面没有及时显示出修改后的效果，你可以通过手工模板缓存操作进行立即更新</p>
<br />
<p><input type="checkbox" id="cachetype2" name="cachetype[]" value="block" checked /> <label for="cachetype2" style="font-weight:bold;">模块数据缓存</label></p>
<p>站点开启模块数据缓存功能后，站点区块显示数据（如最新日志、最新相册等区块数据）都将进行缓存，以大大提高站点访问速度，降低服务器负载<br />
通常，这些数据缓存会根据各自模块代码设置的更新间隔自动进行更新，不需要人工更新<br />
如果你想立即更新所有的模块数据缓存，可以选择本选项<br />
注意：清空数据缓存后，由于站点需要重新生成各个区块缓存，因此会短时间内对服务器带来很大负载，所以<strong>请选择访问人数较少的时段</strong>进行本操作</p>
<br />
<p><input type="checkbox" id="cachetype3" name="cachetype[]" value="database" checked /> <label for="cachetype3" style="font-weight:bold;">系统配置缓存</label></p>
<p>系统配置缓存一般情况下都会在后台修改设定后自动更新，一般不需要手工更新。如果站点运行过程中出现错误，你可以尝试更新本缓存</p>
<br />
<p><input type="checkbox" id="cachetype4" name="cachetype[]" value="network" checked /> <label for="cachetype4" style="font-weight:bold;">其他缓存</label></p>
<p>包括随便看看的数据缓存、用户排行榜的缓存、首页的数据缓存等。</p>
</td>
</tr>
</table>
</div>
<div class="footactions">
<input type="submit" name="cachesubmit" value="缓存更新" class="submit" />
</div>

</form>

</div>
</div>

<div class="side">
<?php if($menus['0']) { ?>
<div class="block style1">
<h2>基本设置</h2>
<ul class="folder">
<?php if(is_array($acs['0'])) { foreach($acs['0'] as $value) { ?>
<?php if($menus['0'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } ?>

<div class="block style1">
<h2>批量管理</h2>
<ul class="folder">
<?php if(is_array($acs['3'])) { foreach($acs['3'] as $value) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } } ?>
<?php if(is_array($acs['1'])) { foreach($acs['1'] as $value) { ?>
<?php if($menus['1'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>

<?php if($menus['2']) { ?>
<div class="block style1">
<h2>高级设置</h2>
<ul class="folder">
<?php if(is_array($acs['2'])) { foreach($acs['2'] as $value) { ?>
<?php if($menus['2'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
<?php if($menus['0']['config']) { ?><li><a href="<?=UC_API?>" target="_blank">UCenter</a></li><?php } ?>
</ul>
</div>
<?php } ?>
</div>

</div>

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div><?php ob_out();?>