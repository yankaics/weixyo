<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/space_feed|template/default/header|template/default/space_feed_li|template/default/footer', '1392297843', 'template/default/space_feed');?><!DOCTYPE html>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
                  <script> 
                   //删除功能
                     function deletepic()
                      {
                          $('#fileinput_').show();
                          $("#pics_").val("");
                          $("#optionimga_").hide();
                          $("#delete").hide();
                        }
                 
                  </script>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="首页" class="tip-bottom"><i class="icon-home"></i>首页</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="#myModal" data-toggle="modal"> <i class="icon-th-list"></i>发布活动</a> </li>
        <li class="bg_ls"> <a href="#secondmyModal" data-toggle="modal"> <i class="icon-tint"></i>发布二手信息</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div>
<!--End-Action boxes--> 
<div id="myModal" class="modal hide" style="width:1000px;left:40%;">
          <div class="widget-content tab-content" style="padding: 0px;height:500px;">
              <div id="tab1" class="tab-pane active">
                 <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>发布活动</h3>
              </div>
              <div style="width:100%;height:400px;">
              <div class="modal-body" style="text-align:center;overflow-y:hidden;float:left;width:500px;padding:0px;margin-top:10px;border-right:1px solid #CDCDCD;">
                <p>活动标题：<input style="margin-left:6px;" type="text"  name="subject" id="subject" placeholder="一个好标题可以很有吸引力的哦。"></p>
                
                  <p><div class="input-group date form_datetime col-md-5"  data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    
                    截止时间：<input class="form-control" size="12" style="width:209px;margin-left:10px;" id="time" type="text" value="" placeholder="点击选择时间，我好调闹钟。" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span> 
                  </div></p>
                  <p>活动地点：<input style="margin-left:6px;" type="text" name="place" id="place" placeholder="你得告诉我去哪啊，不然我怕怕！"></p>
                  <p>集结地点：<input style="margin-left:6px;" type="text" name="callplace" id="callplace" placeholder="去哪集结，我好清点人数！"></p>
                <p>备&nbsp;&nbsp;&nbsp;&nbsp;注：<textarea style="margin-left:6px;width:208px;" rows="5" cols="10" name="message" id="message" placeholder="还有什么想说的，不怕说。"></textarea></p>
                
                  <!-- <a data-toggle="tab" href="#tab2">复杂版</a> -->
              </div>
              <div class="modal-body" style="text-align:center;overflow-y:hidden;">
              <div style=" float:left;width:100px;padding-top:20%;"><input type="file" name="attach_" value="上传图片" class="button" id="fileinput_" >
              <input name="pics" id="pics_" type="hidden" value="" ></div>
              <div style="padding-top:20%;">
                <img src="" id="optionimga_" style="display:none;float:left"/>
              </div>
            </div>
                  <!-- <a data-toggle="tab" href="#tab2">复杂版</a> -->
          </div>
        </div>
              <div style="width:100%;text-align:center;">
               <button type="submit" id="huodong" class="btn btn-success">发布</button>
               <button type="reset" class="btn btn-success">重置</button>
             </div>
          </div>

              <!-- <div id="tab2" class="tab-pane">
                <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>发布活动</h3>
              </div>
              <div class="modal-body" style="text-align:center;">
                <p><input style="margin-left:6px;" type="text" name="subject" id="subject" placeholder="活动标题"></p>
                  <p><div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    
                    <input class="form-control" size="12" style="width:209px;margin-left:10px;" id="time" type="text" value="" placeholder="报名截止时间：点击选择时间" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span> 
                  </div></p>
                <p><textarea style="margin-left:6px;width:208px;" rows="2" cols="20" name="message" id="message" placeholder="活动内容"></textarea></p>
                <p></p>
                  <button type="submit" id="huodong" class="btn btn-success">发布</button>
                  <button type="reset" class="btn btn-success">重置</button>
                  <a data-toggle="tab" href="#tab1">简单版</a>
              </div>
              </div> -->            
          </div>  
</div>

<!-- 楼下是二手信息发布 -->
<div id="secondmyModal" class="modal hide" style="width:1000px;left:40%;">
   <div class="widget-content tab-content" style="padding:0px;height:500px;">
     <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">x</button>
          <h3>交易信息</h3>
     </div>
     <div style="width:100%;height:400px;">
        <div class="modal-body" style="text-align:center;overflow-y:hidden;float:left;width:500px;padding:0px;margin-top:10px;border-right:1px solid #CDCDCD;">
             <p>交易标题：<input style="margin-left:6px;" type="text" name="sed_subject" id="sed_subject" placeholder="一个好标题可以很有吸引力的哦。">
             </p>
             <p>交易价格：<input style="margin-left:6px;" type="text" name="sed_price" id="sed_price" placeholder="马年搵大钱！">             
             </p>
             <p>
              <div class="input-group date form_datetime col-md-5"  data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    
                    截止时间：<input class="form-control" size="12" style="width:209px;margin-left:10px;" id="sed_dateline" type="text" value="" placeholder="点击选择时间，我好调闹钟。" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span> 
                </div>
             </p>
             <p>交易详情：<textarea style="margin-left:6px;width:208px;" rows="5" cols="10" name="sed_message" id="sed_message" placeholder="还有什么想说的，不怕说。"></textarea></p>
        </div>
          <!-- 上传图片 -->
        <div class="modal-body" style="text-align:center;overflow-y:hidden;">
           <div style=" float:left;width:100px;padding-top:20%;">
                <input type="file" name="attach_" value="上传图片" class="button" id="secondfileinput_" >
                <input name="pics" id="sedpics_" type="hidden" value="" >
           </div>
           <div style="padding-top:20%;">
                <img src="" id="sedoptionimga_" style="display:none;float:left"/>
           </div>
        </div>
     </div>
     <div style="width:100%;text-align:center;">
               <button type="submit" id="sed_jiaoyi" class="btn btn-success">发布</button>
               <button type="reset" class="btn btn-success">重置</button>
     </div>
   </div>
</div>
<!-- 二手市场发布终止 -->

            <script language="javascript" src="swfupload/jquery.uploadify-3.1.min.js"></script>
            <link href="swfupload/uploadify.css" rel="stylesheet" type="text/css">
            <script language="javascript">var jquery = jQuery.noConflict(); </script>
            <script>
                  jquery(document).ready(function() {
                        
                    　　jquery('#fileinput_').uploadify({
                     　　//以下参数均是可选
                     　　'swf' : 'uploadify.swf', //指定上传控件的主体文件，默认'uploader.swf'
                     　　'uploader' : './cp.php?ac=upload', //指定服务器端上传处理文件，默认'upload.php教程'
                      'checkScript' : true,
                     　　'cancelimg' : 'swfupload/uploadify-cancel.png', //指定取消上传的图片，默认'cancel.png'
                     　　//'buttonimg':'swfupload/upload2.jpg',
                     　　'auto' : true, //选定文件后是否自动上传，默认false
                     　　//'folder' : '/userphoto' , //要上传到的服务器路径，默认'/'
                     　　'multi' : false, //是否允许同时上传多文件，默认false
                     　　'filedesc' : '图片文件' , //出现在上传对话框中的文件类型描述
                     　　'fileext' : '*.jpg;*.bmp;*.png;*.gif', //控制可上传文件的扩展名，启用本项时需同时声明filedesc
                     　　'sizelimit': 86400, //控制上传文件的大小，单位byte
                      'formData': { 'uploadsubmit2': 'true', 'albumid':'0', 'formhash':'<?php echo formhash(); ?>', 'index':'1', 'ac':'upload', 'uid' : '<?=$_SGLOBAL['supe_uid']?>',"session":"<?php echo session_id()?>"},
                     　　'onUploadSuccess': function(file, data, response) {
                      　　  //jquery('#image').attr("src","<%=basepath%>userphoto/"+res ponse);
                      　　  //jquery('#image').show();
                      　　  //jquery('#photo').attr("value",response);
                          data = eval("(" + data + ')');
                        
                        jquery("#optionimga_").attr("src",data.pic);
                        jquery("#optionimga_").show();
                        jquery("#pics_").val(data.picid);
                        var astr = '<a href="#" id="delete" onclick="deletepic();">删除</a>';
                        jquery("#optionimga_").parent().append(astr);
                        
                     　　},
                      'onUploadComplete': function(file){
                        jquery('#fileinput_').hide();
                        
                      },
                      'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                        alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                      },
                      'fileObjName':'attach',
                     　　'onUploadError' : function(file, errorCode, errorMsg, errorString){
                     　　 alert("文件:" + file.name + " 上传失败");
                     　　}
                    　　});

      jquery('#secondfileinput_').uploadify({//重复的上图图片代码，由于仅能唯一ID
                     　　//以下参数均是可选
                     　　'swf' : 'uploadify.swf', //指定上传控件的主体文件，默认'uploader.swf'
                     　　'uploader' : './cp.php?ac=upload', //指定服务器端上传处理文件，默认'upload.php教程'
                      'checkScript' : true,
                     　　'cancelimg' : 'swfupload/uploadify-cancel.png', //指定取消上传的图片，默认'cancel.png'
                     　　//'buttonimg':'swfupload/upload2.jpg',
                     　　'auto' : true, //选定文件后是否自动上传，默认false
                     　　//'folder' : '/userphoto' , //要上传到的服务器路径，默认'/'
                     　　'multi' : false, //是否允许同时上传多文件，默认false
                     　　'filedesc' : '图片文件' , //出现在上传对话框中的文件类型描述
                     　　'fileext' : '*.jpg;*.bmp;*.png;*.gif', //控制可上传文件的扩展名，启用本项时需同时声明filedesc
                     　　'sizelimit': 86400, //控制上传文件的大小，单位byte
                      'formData': { 'uploadsubmit2': 'true', 'albumid':'0', 'formhash':'<?php echo formhash(); ?>', 'index':'1', 'ac':'upload', 'uid' : '<?=$_SGLOBAL['supe_uid']?>',"session":"<?php echo session_id()?>"},
                     　　'onUploadSuccess': function(file, data, response) {
                      　　  //jquery('#image').attr("src","<%=basepath%>userphoto/"+res ponse);
                      　　  //jquery('#image').show();
                      　　  //jquery('#photo').attr("value",response);
                        
                          data = eval("(" + data + ')');
                        
                        jquery("#sedoptionimga_").attr("src",data.pic);
                        jquery("#sedoptionimga_").show();
                        jquery("#sedpics_").val(data.picid);
                        var astr = '<a href="#" id="delete" onclick="deletepic();">删除</a>';
                        jquery("#sedoptionimga_").parent().append(astr);
                        
                     　　},
                      'onUploadComplete': function(file){
                        jquery('#secondfileinput_').hide();
                        
                      },
                      'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                        alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                      },
                      'fileObjName':'attach',
                     　　'onUploadError' : function(file, errorCode, errorMsg, errorString){
                     　　 alert("文件:" + file.name + " 上传失败");
                     　　}
                    　　});
                     
            　　});
               
            </script>
    <hr/>


    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>动态</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
             <?php if($list) { ?>
<?php if(is_array($list)) { foreach($list as $day => $values) { ?>
<ul class="recent-posts">
<?php if(is_array($values)) { foreach($values as $value) { ?>
<li class="s_clear <?=$value['magic_class']?>" id="feed_<?=$value['feedid']?>_li" onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);">
<div style="width:100%;overflow:hidden;" <?=$value['style']?>>
<?php if($value['uid'] && empty($_TPL['hidden_more'])) { ?>
<a href="cp.php?ac=feed&op=menu&feedid=<?=$value['feedid']?>" class="float_more" id="a_feed_menu_<?=$value['feedid']?>"  onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);" onclick="ajaxmenu(event, this.id)" title="显示更多选项" style="display:none;">菜单</a>
<?php } ?>
<a class="type" href="space.php?uid=<?=$_GET['uid']?>&do=feed&view=<?=$_GET['view']?>&appid=<?=$value['appid']?>&icon=<?=$value['icon']?>" title="只看此类动态"><img src="<?=$value['icon_image']?>" /></a>
<?=$value['title_template']?> 

<?php if(empty($_TPL['hidden_time'])) { ?>
<span class="gray"><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></span>
<?php } ?>

<?php if(empty($_TPL['hidden_menu'])) { ?>
<?php if($value['idtype']=='doid') { ?>
(<a href="javascript:;" onclick="docomment_get('docomment_<?=$value['id']?>', 1);" id="do_a_op_<?=$value['id']?>">回复</a>)
<?php } elseif(in_array($value['idtype'], array('blogid','picid','sid','pid','eventid'))) { ?>
(<a href="javascript:;" onclick="feedcomment_get(<?=$value['feedid']?>);" id="feedcomment_a_op_<?=$value['feedid']?>">评论</a>)
<?php } ?>
<?php } ?>

<div class="feed_content">

<?php if(empty($_TPL['hidden_hot']) && $value['hot']) { ?>
<div class="hotspot"><a href="cp.php?ac=feed&feedid=<?=$value['feedid']?>"><?=$value['hot']?></a></div>
<?php } ?>	

<?php if($value['image_1']) { ?>
<a href="<?=$value['image_1_link']?>"<?=$value['target']?>><img src="<?=$value['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_2']) { ?>
<a href="<?=$value['image_2_link']?>"<?=$value['target']?>><img src="<?=$value['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_3']) { ?>
<a href="<?=$value['image_3_link']?>"<?=$value['target']?>><img src="<?=$value['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_4']) { ?>
<a href="<?=$value['image_4_link']?>"<?=$value['target']?>><img src="<?=$value['image_4']?>" class="summaryimg" /></a>
<?php } ?>

<?php if($value['body_template']) { ?>
<div class="detail"<?php if($value['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$value['body_template']?>
</div>
<?php } ?>

<?php if($value['thisapp'] && !empty($value['body_data']['flashvar'])) { ?>
<div class="media">
<img src="image/vd.gif" alt="点击播放" onclick="javascript:showFlash('<?=$value['body_data']['host']?>', '<?=$value['body_data']['flashvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['musicvar'])) { ?>
<div class="media">
<img src="image/music.gif" alt="点击播放" onclick="javascript:showFlash('music', '<?=$value['body_data']['musicvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['flashaddr'])) { ?>
<div class="media">
<img src="image/flash.gif" alt="点击查看" onclick="javascript:showFlash('flash', '<?=$value['body_data']['flashaddr']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } ?>

<?php if($value['body_general']) { ?>
<div class="quote"><span class="q"><?=$value['body_general']?></span></div>
<?php } ?>
</div>
</div>

<?php if($value['idtype']=='doid') { ?>
<div id="docomment_<?=$value['id']?>" style="display:none;"></div>
<?php } elseif($value['idtype']) { ?>
<div id="feedcomment_<?=$value['feedid']?>" style="display:none;"></div>
<?php } ?>

<?php if(!empty($hiddenfeed_num[$value['icon']])) { ?>
<div id="appfeed_open_<?=$value['feedid']?>"><a href="javascript:;" id="feed_a_more_<?=$value['feedid']?>" onclick="feed_more_show('<?=$value['feedid']?>');">&raquo; 更多动态(<?=$hiddenfeed_num[$value['icon']]?>)</a></div>
<div id="feed_more_<?=$value['feedid']?>" style="display:none;">
<ol>
<?php if(is_array($hiddenfeed_list[$value['icon']])) { foreach($hiddenfeed_list[$value['icon']] as $appvalue) { ?>
<?php $appvalue = mkfeed($appvalue); ?>
<li>
<?=$appvalue['title_template']?>
<div class="feed_content" style="width:100%;overflow:hidden;">
<?php if($appvalue['image_1']) { ?>
<a href="<?=$appvalue['image_1_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_2']) { ?>
<a href="<?=$appvalue['image_2_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_3']) { ?>
<a href="<?=$appvalue['image_3_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_4']) { ?>
<a href="<?=$appvalue['image_4_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_4']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['body_template']) { ?>
<div class="detail"<?php if($appvalue['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$appvalue['body_template']?>
</div>
<?php } ?>
<?php if($appvalue['body_general']) { ?>
<div class="quote"><span class="q"><?=$appvalue['body_general']?></span></div>
<?php } ?>
</div>
</li>
<?php } } ?>
</ol>
</div>
<?php } ?>
</li>
<?php } } ?>
</ul>
<?php } } ?>

<?php } else { ?>
<ul class="recent-posts">
<li>没有相关动态</li>
</ul>
<?php } ?>

          </div>
        </div>
        
        
   <!--  <div class="widget-box widget-chat">
          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
            <h5>Chat Option</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG4">
            <div class="chat-users panel-right2">
              <div class="panel-title">
                <h5>Online Users</h5>
              </div>
              <div class="panel-content nopadding">
                <ul class="contact-list">
                  <li id="user-Alex" class="online"><a href="#"><img alt="" src="./template/default/feed/img/demo/av1.jpg" /> <span>Alex</span></a></li>
                  <li id="user-Linda"><a href="#"><img alt="" src="./template/default/feed/img/demo/av2.jpg" /> <span>Linda</span></a></li>
                  <li id="user-John" class="online new"><a href="#"><img alt="" src="./template/default/feed/img/demo/av3.jpg" /> <span>John</span></a><span class="msg-count badge badge-info">3</span></li>
                  <li id="user-Mark" class="online"><a href="#"><img alt="" src="./template/default/feed/img/demo/av4.jpg" /> <span>Mark</span></a></li>
                  <li id="user-Maxi" class="online"><a href="#"><img alt="" src="./template/default/feed/img/demo/av5.jpg" /> <span>Maxi</span></a></li>
                </ul>
              </div>
            </div>
            <div class="chat-content panel-left2">
              <div class="chat-messages" id="chat-messages">
                <div id="chat-messages-inner"></div>
              </div>
              <div class="chat-message well">
                <button class="btn btn-success">Send</button>
                <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
            </div>
          </div>
        </div> -->
        
      </div>
      <div class="span6">
        <?php if($guoneishow=='1') { ?>
      	  <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>国内新闻</h5>
          </div>
          <div class="widget-content nopadding updates collapsed in collapse" id="collapseG3">
            <?php if($guoneinews) { ?>
            <?php if(is_array($guoneinews)) { foreach($guoneinews as $value2) { ?>
            <div class="new-update clearfix"><i class=" icon-caret-right"></i>
              <div class="update-done"><a title="" href="#"><strong><?=$value2['title']?></strong></a> <span>&nbsp;<?=$value2['description']?><a href="<?=$value2['link']?>" style="color:red;">(点击查看更多)</a></span> </div>
              <div class="update-date" style="font-size:10px;width:110px;"><?=$value2['pubDate']?></div>
            </div>
         
              <?php } } ?>
              <?php } else { ?>
           <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>暂时木有国内新闻</strong></a></div>
              <div class="update-date"></div>
            </div>
        <?php } ?>
        <div class="new-update clearfix " id="guoneimore">
              <div style="text-align:center;"><a  title="" href="javascript:void;"><strong>更多</strong></a></div>

            </div>
          </div>
          <img src="./template/default/feed/images/guoneixinwen.jpg" style="width:682px;height:180px;margin-top:-1px;"/>
        </div>
         <?php } ?>
         <?php if($guowaishow=='2') { ?>
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG5" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>国外新闻</h5>
          </div>
          <div class="widget-content nopadding updates collapsed in collapse" id="collapseG5">
            <?php if($guowainews) { ?>
            <?php if(is_array($guowainews)) { foreach($guowainews as $value3) { ?>
            <div class="new-update clearfix"><i class=" icon-caret-right"></i>
              <div class="update-done"><a title="" href="#"><strong><?=$value3['title']?></strong></a> <span>&nbsp;<?=$value3['description']?><a href="<?=$value3['link']?>" style="color:red;">(点击查看更多)</a></span> </div>
              <div class="update-date" style="font-size:10px;width:110px;"><?=$value3['pubDate']?></div>
            </div>
         
              <?php } } ?>
              <?php } else { ?>
           <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>暂时木有国外新闻</strong></a></div>
              <div class="update-date"></div>
            </div>
        <?php } ?>
           <div class="new-update clearfix " id="guowaimore">
              <div style="text-align:center;"><a  title="" href="javascript:void;"><strong>更多</strong></a></div>

            </div>
          </div>
          <img src="./template/default/feed/images/guowaixinwen.jpg" style="width:682px;height:180px;margin-top:-1px;"/>
        </div>
        <?php } ?>
        <?php if($yuleshow=='3') { ?>
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG6" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>电影资讯</h5>
          </div>
          <div class="widget-content nopadding updates collapsed in collapse" id="collapseG6">
            <?php if($yulenews) { ?>
            <?php if(is_array($yulenews)) { foreach($yulenews as $value4) { ?>
            <div class="new-update clearfix"><i class=" icon-caret-right"></i>
              <div class="update-done"><a title="" href="#"><strong><?=$value4['title']?></strong></a> <span>&nbsp;<?=$value4['description']?><a href="<?=$value4['link']?>" style="color:red;">(点击查看更多)</a></span> </div>
              <div class="update-date" style="font-size:10px;width:110px;"><?=$value4['pubDate']?></div>
            </div>
         
              <?php } } ?>
              <?php } else { ?>
           <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>暂时木有电影资讯</strong></a></div>
              <div class="update-date"></div>
            </div>
        <?php } ?>
        <div class="new-update clearfix " id="yulemore">
              <div style="text-align:center;"><a  title="" href="javascript:void;"><strong>更多</strong></a></div>

            </div>
          </div>
          <img src="./template/default/feed/images/dianyingzixun.jpg" style="width:682px;height:180px;margin-top:-1px;"/>
        </div>
        <?php } ?>
        <?php if($tiyushow=='4') { ?>
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG7" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>体育频道</h5>
          </div>
          <div class="widget-content nopadding updates collapsed in collapse" id="collapseG7">
            <?php if($tiyunews) { ?>
            <?php if(is_array($tiyunews)) { foreach($tiyunews as $value5) { ?>
            <div class="new-update clearfix"><i class=" icon-caret-right"></i>
              <div class="update-done"><a title="" href="#"><strong><?=$value5['title']?></strong></a> <span>&nbsp;<?=$value5['description']?><a href="<?=$value5['link']?>" style="color:red;">(点击查看更多)</a></span> </div>
              <div class="update-date" style="font-size:10px;width:110px;"><?=$value5['pubDate']?></div>
            </div>
         
              <?php } } ?>
              <?php } else { ?>
           <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>暂时木有体育新闻</strong></a></div>
              <div class="update-date"></div>
            </div>
        <?php } ?>
        <div class="new-update clearfix " id="tiyumore">
              <div style="text-align:center;"><a  title="" href="javascript:void;"><strong>更多</strong></a></div>

            </div>
          </div>
          <img src="./template/default/feed/images/tiyuzixun.gif" style="width:682px;height:180px;margin-top:-1px;"/>
        </div>
        <!-- <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>To Do list</h5>
          </div>
          <div class="widget-content">
            <div class="todo">
              <ul>
                <li class="clearfix">
                  <div class="txt"> Luanch This theme on Themeforest <span class="by label">Alex</span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Manage Pending Orders <span class="date badge badge-warning">Today</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> MAke your desk clean <span class="by label">Admin</span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Today we celebrate the theme <span class="date badge badge-info">08.03.2013</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Manage all the orders <span class="date badge badge-important">12.03.2013</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>今日投票</h5>
          </div>
          <div class="widget-content">
            <ul class="unstyled">
            	 <li> 122222222222222222222222222222222222222222
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 81% Clicks <span class="pull-right strong">567</span>
                <div class="progress progress-striped ">
                  <div style="width: 81%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% Uniquie Clicks <span class="pull-right strong">507</span>
                <div class="progress progress-success progress-striped ">
                  <div style="width: 72%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% Impressions <span class="pull-right strong">457</span>
                <div class="progress progress-warning progress-striped ">
                  <div style="width: 53%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 3% Online Users <span class="pull-right strong">8</span>
                <div class="progress progress-danger progress-striped ">
                  <div style="width: 3%;" class="bar"></div>
                </div>
              </li>
            </ul>
          </div>
        </div> -->
        <?php } ?>
        <?php if($dangnianshow=='5') { ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-repeat"></i></span>
            <h5>当年今日(<?php echo sgmdate('m月d日',$_SGLOBAL[timestamp]); ?>)</h5>
          </div>
          <div class="widget-content nopadding">
            <ul class="activity-list">
              <?php if($thisday) { ?>
            	<?php if(is_array($thisday)) { foreach($thisday as $value1) { ?>
              <li><a href="#"><i class="icon-file"></i><?=$value1?></a></li>
              <?php } } ?>
              <?php } else { ?>
              <li style="text-align:center;"><a href="#"></i>没有噢，亲</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <?php } ?>
       
      </div>
      <!--Chart-box-->    
     <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->


<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>


<!--end-Footer-part-->

<script src="./template/default/feed/js/excanvas.min.js"></script> 
<script src="./template/default/feed/js/jquery.min.js"></script> 
<script src="./template/default/feed/js/jquery.ui.custom.js"></script> 
<script src="./template/default/feed/js/bootstrap.min.js"></script> 
<script src="./template/default/feed/js/jquery.flot.min.js"></script> 
<script src="./template/default/feed/js/jquery.flot.resize.min.js"></script> 
<script src="./template/default/feed/js/jquery.peity.min.js"></script> 
<script src="./template/default/feed/js/fullcalendar.min.js"></script> 
<script src="./template/default/feed/js/matrix.js"></script> 
<script src="./template/default/feed/js/matrix.dashboard.js"></script> 
<script src="./template/default/feed/js/jquery.gritter.min.js"></script> 
<script src="./template/default/feed/js/matrix.interface.js"></script> 
<script src="./template/default/feed/js/matrix.chat.js"></script> 
<script src="./template/default/feed/js/jquery.validate.js"></script> 
<script src="./template/default/feed/js/matrix.form_validation.js"></script> 
<script src="./template/default/feed/js/jquery.wizard.js"></script> 
<script src="./template/default/feed/js/jquery.uniform.js"></script> 
<script src="./template/default/feed/js/select2.min.js"></script> 
<script src="./template/default/feed/js/matrix.popover.js"></script> 
<script src="./template/default/feed/js/jquery.dataTables.min.js"></script> 
<script src="./template/default/feed/js/matrix.tables.js"></script> 
<script type="text/javascript" src="./template/default/feed/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./template/default/feed/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>

<script type="text/javascript">
    var today = new Date();
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        autoclose: true,
        todayBtn: false,
        showMeridian: true,
        startDate: today,
        format: 'yyyy-mm-dd hh:ii'

    });
  $(document).ready(function () {
    $("#sed_jiaoyi").click(function(){//二手洗洗脑发布
     // alert("123");
      $.ajax({
                type:"POST",
                url:"second.php?do=deal",
                data:"sed_subject="+$('#sed_subject').val()+"&sed_price="+$('#sed_price').val()+"&sed_dateline="+$('#sed_dateline').val()+"&sed_message="+$('#sed_message').val()+"&picid="+$('#sedpics_').val()+"&sed_jiaoyi=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                async:true,
                                                   
                    success: function (data) {
                      if(data=='-1')
                      {
                        alert("选项有空值");
                      }else{
                        $("#secondmyModal").hide();
                        $(".modal-backdrop").hide();
                        $.gritter.add({
                          title:  '',
                          text: '交易信息发布成功',
                          sticky: false
                        }); 
                      }
                    }
        })
     });




    $("#huodong").click(function () {
      $.ajax({
                 type: "POST",
                 url: "space.php?do=deal",
                 data: "subject="+$('#subject').val()+"&time="+$('#time').val()+"&place="+$('#place').val()+"&callplace="+$('#callplace').val()+" &message="+$('#message').val()+"&picid="+$('#pics_').val()+"&huodong=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                  async: true,                    
                    success: function (data) {
                      if(data=='-1')
                      {
                        alert("选项有空值");
                      }else{
                        $("#myModal").hide();
                        $(".modal-backdrop").hide();
                        $.gritter.add({
                          title:  '',
                          text: '活动发布成功',
                          sticky: false
                        }); 
                      }
                    }
                  })
              });
         
    $("#guoneimore").click(function () {
      
        $.ajax({
                   type: "POST",
                   url: "space.php?do=deal",
                   data: "more=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                    async: true,                    
                      success: function (data) {
                      $("#guoneimore").before(data);//国内新闻更多按钮实现方法
                      $("#guoneimore").hide();//更多隐藏
                      }
                });
            });

    $("#guowaimore").click(function () {
      
        $.ajax({
                   type: "POST",
                   url: "space.php?do=deal",
                   data: "guowaimore=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                    async: true,                    
                      success: function (data) {
                      $("#guowaimore").before(data);//国内新闻更多按钮实现方法
                      $("#guowaimore").hide();//更多隐藏
                      }
                });
            });

    $("#yulemore").click(function () {
      
        $.ajax({
                   type: "POST",
                   url: "space.php?do=deal",
                   data: "yulemore=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                    async: true,                    
                      success: function (data) {
                      $("#yulemore").before(data);//国内新闻更多按钮实现方法
                      $("#yulemore").hide();//更多隐藏
                      }
                });
            });
    $("#tiyumore").click(function () {
      
        $.ajax({
                   type: "POST",
                   url: "space.php?do=deal",
                   data: "tiyumore=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                    async: true,                    
                      success: function (data) {
                      $("#tiyumore").before(data);//国内新闻更多按钮实现方法
                      $("#tiyumore").hide();//更多隐藏
                      }
                });
            });
      });
</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
<?php ob_out();?>