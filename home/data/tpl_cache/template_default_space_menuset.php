<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/space_menuset|template/default/header|template/default/footer', '1392100202', 'template/default/space_menuset');?><!DOCTYPE html>
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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
  </div>
  <div class="container-fluid">

        <?php if($list) { ?>
      <?php if(is_array($list)) { foreach($list as $value) { ?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5><?=$value['name']?></h5><span <?php if($value['cheak']) { ?>class="label label-important"<?php } else { ?>class="label"<?php } ?> style="float:right;"><?php if($value['cheak']) { ?>已订阅<?php } else { ?>未订阅<?php } ?></span>
            <input type="hidden" id="class" value='<?=$value['id']?>'>
          </div>
          <div class="widget-content"><?=$value['message']?></div>
        </div>
      </div>
    </div>
      <?php } } ?>
      <?php } else { ?>
      <p style="text-align:center;">没有组件可选</p>
      <?php } ?>
  </div>
</div>
<input type="hidden" id="uid" value='<?=$value['id']?>'>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="./template/default/feed/js/jquery.min.js"></script> 
<script src="./template/default/feed/js/jquery.ui.custom.js"></script> 
<script src="./template/default/feed/js/bootstrap.min.js"></script> 
<script src="./template/default/feed/js/matrix.js"></script>
   <script type="text/javascript">
        $(document).ready(function(){

            $(".label").click(function(){
             
                   $(this).toggleClass("label-important");
                if($(this).hasClass("label-important")){
                        var id=$(this).parent().parent().find("#class").val();
                        $(this).parent().find(".label").html("已订阅");
                         $.ajax({
                         type: "POST",
                         url: "space.php?do=deal",
                         data: "id="+id+"&menuset=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                          async: true,                    
                            success: function (data) {}
                        })
                  }else{
                         var id=$(this).parent().parent().find("#class").val();
                         $(this).parent().find(".label").html("未订阅");
                          $.ajax({
                               type: "POST",
                               url: "space.php?do=deal",
                               data: "id="+id+"&menuset=0",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                                async: true,                    
                                  success: function (data) {}
                              })
                     
                  }
             
                });
            

           /* $("#submit").click(function () {
                 $.ajax({
                 type: "POST",
                 url: "wx.php?do=dial",
                 data: "uid="+$('#uid').val()+"&viewuid="+$('#viewuid').val()+"&dialprice="+$('#dialprice').val()+"&diallevel="+$('#diallevel').val()+"&username="+$('#username').val()+"&dialid="+$('#dialid').val()+"&tel="+$('#tel').val()+"&dial=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                  async: true,                    
                    success: function (data) {
                      $(".t-button").hide();
                      $(".expressInfo").fadeOut();
                        alert("请等待工作人员确认，到时会以电话确认");
                    }
                })
             })*/
       

           
           
            });
            
    </script>
</body>
</html>
<?php ob_out();?>