<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/do_login|template/default/header|template/default/footer', '1392297313', 'template/default/do_login');?><?php $_TPL['nosidebar']=1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>微校友</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="./template/default/feed/css/bootstrap.min.css" />
<link rel="stylesheet" href="./template/default/feed/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="./template/default/feed/css/fullcalendar.css" />
<link rel="stylesheet" href="./template/default/feed/css/matrix-style.css" />
<link rel="stylesheet" href="./template/default/feed/css/matrix-media.css" />
<link href="./template/default/feed/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="./template/default/feed/css/jquery.gritter.css" />
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->
<link href="./template/default/feed/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">微校友</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">欢迎您，<?=$_SN[$space['uid']]?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">信息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="space.php?do=menuset"><i class="icon icon-cog"></i> <span class="text">分类选择</span></a></li>
    <li class=""><a title="" href="cp.php?ac=common&op=logout&uhash=<?=$_SGLOBAL['uhash']?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <?php if($_GET['do']=='home'||$_GET['do']=='feed') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="space.php?do=home"><i class="icon icon-home"></i> <span>首页</span></a> </li>
    <?php if($_GET['do']=='activity') { ?><li class="submenu open"><?php } else { ?><li class="submenu"><?php } ?><a href="space.php?do=activity"><i class="icon icon-signal"></i> <span>活动大厅</span></a> 
      <ul>
         <?php if($_GET['do']=='activity'&&$_GET['op']!='me') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="space.php?do=activity">正在进行中的活动</a></li>
        <?php if($_GET['do']=='activity'&&$_GET['op']=='me') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="space.php?do=activity&op=me">我的活动</a></li>
      </ul>
  </li>
    <?php if($_GET['do']=='second') { ?><li class="submenu open"><?php } else { ?><li class="submenu"><?php } ?> <a href="second.php?do=second"><i class="icon icon-inbox"></i> <span>二手市场</span></a> 
      <ul>
         <?php if($_GET['do']=='second'&&$_GET['op']!='me') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="second.php?do=second">正在进行中的交易</a></li>
        <?php if($_GET['do']=='second'&&$_GET['op']=='me') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="second.php?do=second&op=me">我的交易</a></li>
      </ul>
  </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->


<form id="loginform" name="loginform" action="do.php?ac=<?=$_SCONFIG['login_action']?>&<?=$url_plus?>&ref" method="post" class="c_form">
<table cellpadding="0" cellspacing="0" class="formtable">
<caption>
<h2>请登录</h2>
<p>如果您在本站已拥有帐号，请使用已有的帐号信息直接进行登录即可，不需重复注册。</p>
</caption>
<?php if($invitearr) { ?>
<tr>
<th width="100">好友邀请</th>
<td>
<a href="space.php?<?=$url_plus?>" target="_blank"><?php echo avatar($invitearr[uid],small); ?></a>
<a href="space.php?<?=$url_plus?>" target="_blank"><?=$_SN[$invitearr['uid']]?></a>
</td>
</tr>
<?php } ?>

<?php if($_SCONFIG['seccode_login']) { ?>
<?php if($_SGLOBAL['input_seccode']) { ?>
<tr>
<th width="100">&nbsp;</th>
<td>
请通过下面的验证后，再提交登录
</td>
</tr>
<?php } ?>
<?php if($_SCONFIG['questionmode']) { ?>
<tr>
<th width="100" style="vertical-align: top;">请先回答问题</th>
<td>
<p><?php question(); ?></p>
<input type="text" id="seccode" name="seccode" value="" tabindex="1" class="t_input"<?php if(empty($_SGLOBAL['input_seccode'])) { ?> onBlur="checkSeccode()"<?php } ?> />&nbsp;<span id="checkseccode">&nbsp;</span>
</td>
</tr>
<?php } else { ?>
<tr>
<th width="100" style="vertical-align: top;">验证码</th>
<td>
<script>seccode();</script>
<p>请输入上面的4位字母或数字，看不清可<a href="javascript:updateseccode()">更换一张</a></p>
<input type="text" id="seccode" name="seccode" value="" tabindex="1" class="t_input"<?php if(empty($_SGLOBAL['input_seccode'])) { ?> onBlur="checkSeccode()"<?php } ?> />&nbsp;<span id="checkseccode">&nbsp;</span>
</td>
</tr>
<?php } ?>
<?php } ?>

<tbody style="display:<?php if($_SGLOBAL['input_seccode']) { ?>none<?php } ?>;">
<tr><th width="100"><label for="username">用户名</label></th><td><input type="text" name="username" id="username" class="t_input" value="<?=$membername?>" tabindex="2" /></td></tr>
<tr><th width="100"><label for="password">密　码</label></th><td><input type="password" name="password" id="password" class="t_input" tabindex="3" value="<?=$password?>" /></td></tr>
<tr>
<th width="100">&nbsp;</th>
<td>
<input type="checkbox" id="cookietime" name="cookietime" value="315360000" <?=$cookiecheck?> style="margin-bottom: -2px;"><label for="cookietime">下次自动登录</label>
</td>
</tr>
</tbody>
<tr><th width="100">&nbsp;</th><td>
<input type="hidden" name="refer" value="<?=$refer?>" />
<input type="submit" id="loginsubmit" name="loginsubmit" value="登录" class="submit" tabindex="5" />
<a href="do.php?ac=lostpasswd">忘记密码?</a>
</td></tr>
</table>
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" /></form>

<script type="text/javascript">
var lastSecCode = '';
function checkSeccode() {
var seccodeVerify = $('seccode').value;
if(seccodeVerify == lastSecCode) {
return;
} else {
lastSecCode = seccodeVerify;
}
ajaxresponse('checkseccode', 'op=checkseccode&seccode=' + (is_ie && document.charset == 'utf-8' ? encodeURIComponent(seccodeVerify) : seccodeVerify));
}
function ajaxresponse(objname, data) {
var x = new Ajax('XML', objname);
x.get('do.php?ac=<?=$_SCONFIG['register_action']?>&' + data, function(s){
var obj = $(objname);
s = trim(s);
if(s.indexOf('succeed') > -1) {
obj.style.display = '';
obj.innerHTML = '<img src="image/check_right.gif" width="13" height="13">';
obj.className = "warning";
} else {
warning(obj, s);
}
});
}
function warning(obj, msg) {
if((ton = obj.id.substr(5, obj.id.length)) != 'password2') {
$(ton).select();
}
obj.style.display = '';
obj.innerHTML = '<img src="image/check_error.gif" width="13" height="13"> &nbsp; ' + msg;
obj.className = "warning";
}

</script>

<?php if($_SGLOBAL['input_seccode']) { ?>
<script>
$('seccode').style.background = '#FFFFCC';
$('seccode').focus();
</script>
<?php } ?>


<div class="c_form">
<table cellpadding="0" cellspacing="0" class="formtable">
<caption>
<h2>还没有注册吗？</h2>
<p>如果还没有本站的通行帐号，请先注册一个属于自己的帐号吧。</p>
</caption>
<tr>
<td>
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>" style="display: block; margin: 0 110px 2em; width: 100px; border: 1px solid #486B26; background: #76A14F; line-height: 30px; font-size: 14px; text-align: center; text-decoration: none;"><strong style="display: block; border-top: 1px solid #9EBC84; color: #FFF; padding: 0 0.5em;">立即注册</strong></a>
</td>
</tr>
</table>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div><?php ob_out();?>