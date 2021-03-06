<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/space_activity|template/default/header|template/default/footer', '1392282131', 'template/default/space_activity');?><!DOCTYPE html>
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

<script src="./template/default/feed/js/jquery.min.js"></script>
<!--main-container-part-->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
<link rel="stylesheet" href="./template/default/time/css/styles.css" />
<link rel="stylesheet" href="./template/default/time/countdown/jquery.countdown.css" />

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
      <a href="index.html" title="活动中心" class="tip-bottom"><i class="icon-tint"></i>活动中心</a>
      <div class="bg_lb" style="float:right;margin-top:-38px;"> <a href="#huodongmyModal" data-toggle="modal" style="color:#fff;"> <i class="icon-pencil"></i>发起活动</a> </div>
    </div>
  </div>
   <!-- 楼下这div是发起活动的窗口 -->
  <div id="huodongmyModal" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button">×</button>
      <h3>发起活动</h3>
    </div>

    <div class="modal-body">
      
             
              <div class="widget-content nopadding" style="border:0;">
                <form action="#" method="get" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">Last Name :</label>
                    <div class="controls">
                      <input type="text" class="" placeholder="Last name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Date Picker (mm-dd)</label>
                    <div class="controls">
                      <div data-date="12-02-2012" class="input-append date datepicker">
                       <input type="text" value="12-02-2012" data-date-format="mm-dd-yyyy" class="span2">
                      <span class="add-on"><i class="icon-th"></i></span> </div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Company info :</label>
                    <div class="controls">
                      <input type="text" class="" placeholder="Company name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Description field:</label>
                    <div class="controls">
                      <input type="text" class="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Message</label>
                    <div class="controls">
                      <textarea class=""></textarea>
                    </div>
                  </div>
                
                </form>
              </div>
      
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-success">确定</button>
      <a data-dismiss="modal" class="btn btn-inverse" href="#">取消</a>
    </div>
  </div>
<!--End-breadcrumbs-->
      


<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
   <div class="span8">
      <?php if(is_array($list)) { foreach($list as $value) { ?>
      <div id="activity<?=$value['id']?>" class="widget-box">
        <div class="widget-title bg_ly" data-toggle="collapse" href="#<?=$value['id']?>"><span class="icon"><i class="icon-chevron-down"></i></span>
          <!-- 楼上href的id要与楼下div的id对应 -->
          <h5 id="subject<?=$value['id']?>"><?=$value['subject']?>   id=<?=$value['id']?></h5>
          <!-- <div class="countdown" style="margin-top:4px;"></div> -->
          <p id="notetime" style="float:right;margin-top:5px;margin-right:5px;"></p> 
         <!--  <p id="notetime2" style="float:right;margin-top:5px;margin-right:5px;"></p>   -->
         
          <input type="hidden" id="time<?=$value['id']?>" value="<?=$value['time']?>">
        </div>
        <div class="widget-content nopadding collapse in" id="<?=$value['id']?>"><!-- 加in默认打开 -->
          <ul class="recent-posts">
            <li>
              <?php if($value['thumbpic']) { ?>
              <div class="user-thumb" style="width:100px;height:100%;text-align:center;"> <img width="100" height="100%" alt="User" src="<?=$value['thumbpic']?>"><a href="#bigModal<?=$value['id']?>"  data-toggle="modal">(放大图片)</a></div>
              <div  class="article-post" style="padding-left: 80px;"><span  class="user-info"><?=$value['message']?></span>
              <?php } else { ?>
              <!-- <div class="user-thumb"> <img width="40" height="40" alt="User" src="./template/default/feed/img/demo/av4.jpg"> </div> -->
              <div class="article-post"> <span id="message<?=$value['id']?>" class="user-info"><?=$value['message']?> </span>
              <?php } ?>
                <p><a href="#">有兴趣电联10086报名申请，周六早上9:00在13、14栋集合，装备食物自备。</a> </p>
                <p><a href="#"><?php echo sgmdate('m-d H:i',$value[time]); ?></a> </p>
                <?php if($value['thumbpic']) { ?>
                <br/>
                <?php } ?>
              </div>
              
            <li id="baoming">
              <?php if($value['uid']==$_SGLOBAL['supe_uid']) { ?>
              <button id="delete<?=$value['id']?>" class="btn btn-warning btn-mini">删除</button>
              <a href="#modifymyModal<?=$value['id']?>" id="amodifyModal<?=$value['id']?>"  data-toggle="modal" style="color:#fff;"> <button  class="btn btn-warning btn-mini">修改</button></a>
              <?php } ?>
              <!-- <a href="#myModal<?=$value['id']?>" id="amyModal<?=$value['id']?>"  data-toggle="modal" style="color:#fff;"> <button  class="btn btn-warning btn-mini">报名</button></a> -->
              <?php if($value['baoming']) { ?>     
              <a  style="color:#fff;"> <button id="enlistmyModal<?=$value['id']?>"  class="btn btn-warning btn-mini">已报名</button></a>
               <?php } else { ?>
               <a  style="color:#fff;"> <button id="enlistmyModal<?=$value['id']?>"  class="btn btn-warning btn-mini">报名</button></a>
                <?php } ?>
            </li>
               

          </ul>
        </div>
      </div>


<!--  楼下div是修改窗口 -->
<div id="modifymyModal<?=$value['id']?>"  class="modal hide" style="width:1000px;left:40%;">
  <div class="widget-content tab-content" style="padding: 0px;height:500px;">
      <div id="tab1" class="tab-pane active">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
              <h3>修改活动</h3>
            </div>
            <div style="width:100%;height:400px;">
              <div class="modal-body" style="text-align:center;overflow-y:hidden;float:left;width:500px;padding:0px;margin-top:10px;border-right:1px solid #CDCDCD;">
                <p>活动标题：
                  <input style="margin-left:6px;" type="text"  name="subject" id="resubject<?=$value['id']?>" value="<?=$value['subject']?>">
                </p>
                <p>
                  <div class="input-group date form_datetime col-md-5"  data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    
                    截止时间：
                    <input class="form-control" size="12" style="width:209px;margin-left:10px;" id="retime<?=$value['id']?>" type="text" value="<?php echo sgmdate('y-m-d H:i',$value[time]); ?>"  readonly>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span> 
                  </div>
                </p>
                <p>活动地点：<input style="margin-left:6px;" type="text" name="place" id="replace<?=$value['id']?>" value="<?=$value['place']?>"></p>
                <p>集结地点：<input style="margin-left:6px;" type="text" name="callplace" id="recallplace<?=$value['id']?>" value="<?=$value['callplace']?>"></p>
                <p>备&nbsp;&nbsp;&nbsp;&nbsp;注：<textarea style="margin-left:6px;width:208px;" rows="5" cols="10" name="message" id="remessage<?=$value['id']?>" ><?=$value['message']?></textarea></p>
              </div>
              <div class="modal-body" style="text-align:center;overflow-y:hidden;">
              <div style=" float:left;width:100px;padding-top:20%;"><input type="file" name="attach_" value="上传图片" class="button" id="fileinput_" >
                   <input name="pics" id="pics_" type="hidden" value="" >
              </div>
              <div style="padding-top:20%;">
                  <img src="" id="optionimga_" style="display:none;float:left"/>
              </div>
            </div>
        </div>            
        <div style="width:100%;text-align:center;">
            <button type="submit" id="modifyhuodong<?=$value['id']?>" class="btn btn-success">发布</button>
            <button type="reset" class="btn btn-success">重置</button>
        </div>
      </div>            
  </div>
</div>
<!-- 修改窗口到此结束 -->

        <script language="javascript" src="swfupload/jquery.uploadify-3.1.min.js"></script> 
            <link href="swfupload/uploadify.css" rel="stylesheet" type="text/css">
           <!--  <script language="javascript">var jquery = jQuery.noConflict(); </script>-->
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
                     
            　　});
               
            </script>

             <!-- 楼下这div是发起活动的窗口 -->
            <div id="myModal<?=$value['id']?>" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>扫描二维码报名（请注意个人隐私）</h3>
              </div>

              <div class="modal-body" style='text-align:center;' id="qrcode">
               <img src="./template/default/img/loading1.gif">
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">取消</a> </div>
            </div>
            <!-- 图片放大模式 -->
             <div id="bigModal<?=$value['id']?>" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3><?=$value['subject']?>的图片(大图模式)</h3>
              </div>

              <div class="modal-body" style='text-align:center;max-height: 600px;'>
               <img src="<?=$value['pic']?>">
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">取消</a> </div>
            </div>
<!--End-breadcrumbs-->
<script type="text/javascript">
 $(document).ready(function () {
//报名功能
    $("#enlistmyModal<?=$value['id']?>").click(function(){
    // alert("oooo");
    if ($("#enlistmyModal<?=$value['id']?>").html()=="报名") {
       $.ajax({
           type:"POST",
           url:"space.php?do=deal",
           data:"id=<?=$value['id']?>&enlist=1",
           async: true,                    
             success: function (data) {
                      if(data=='1')
                      {
                        $.gritter.add({
                          title:  '',
                          text: '活动报名成功',
                          sticky: false
                        }); 
                        $("#enlistmyModal<?=$value['id']?>").html("已报名");
                       //  alert('活动报名成功');//
                      }else{
                        alert('活动报名没有成功');//
                      }
              }
      }); 
    }else{
      $.gritter.add({
          title:  '',
          text: '您已经成功报名过了！',
          sticky: false
          }); 
    };
    });


//删除功能
    $("#delete<?=$value['id']?>").click(function(){
       $.ajax({
            type:"POST",
            url:"space.php?do=deal",
            data:"id=<?=$value['id']?>&delete=1",
            async: true,                    
             success: function (data) {
                      if(data=='1')
                      {
                        $.gritter.add({
                          title:  '',
                          text: '活动删除成功',
                          sticky: false
                        }); 
                         $("#activity<?=$value['id']?>").hide();
                      }else{
                        alert('删除没成功');//
                      }
              }
       });
      
    });
//修改功能
    $("#modifyhuodong<?=$value['id']?>").click(function(){
      //alert("11");
       $.ajax({
                 type: "POST",
                 url: "space.php?do=deal",
                 data: "subject="+$('#resubject<?=$value['id']?>').val()+"&time="+$('#retime<?=$value['id']?>').val()+"&place="+$('#replace<?=$value['id']?>').val()+"&callplace="+$('#recallplace<?=$value['id']?>').val()+"&message="+$('#remessage<?=$value['id']?>').val()+"&picid="+$('#pics_').val()+"&id=<?=$value['id']?>&modifyhuodong=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                  async: true,                    
                    success: function (data) {
                      if(data=='-1')
                      {
                        alert('选项有空值');//
                      }else{
                        $("#modifymyModal<?=$value['id']?>").hide();
                        $(".modal-backdrop").hide();
                        $.gritter.add({
                          title:  '',
                          text: '活动修改成功',
                          sticky: false
                        }); 
                        $('#subject<?=$value['id']?>').html($('#resubject<?=$value['id']?>').val());
                        $('#message<?=$value['id']?>').html($('#remessage<?=$value['id']?>').val()); 
                        //$("#notetime").hide();
                        //$("#notetime").html($('#retime<?=$value['id']?>').val());
                       //  $("#time<?=$value['id']?>").parent().find('#notetime').html($('#retime<?=$value['id']?>').val());

                      }
                    }
                  })
              });


  $("#amyModal<?=$value['id']?>").click(function () {
          $.ajax({
                 type: "POST",
                 url: "./source/qr.php",
                 data: "uid=<?=$value['uid']?>&loginuid=<?=$_SGLOBAL['supe_uid']?>&id=<?=$value['id']?>&qr=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                  async: true,                    
                    success: function (data) {
                    $("#qrcode").html("<img src='"+data+"'>");
                    }
                  })
        });

  })
</script>
<script src="./template/default/time/countdown/jquery.countdown.js"></script>
<script type="text/javascript">
$(function(){
   var notetime = $('#notetime');
  var note = $('#time<?=$value['id']?>').val()*1000,

  ts = $('#time<?=$value['id']?>').val()*1000,
    newYear = true;
  if((new Date()).getTime() < ts){
    // The new year is here! Count towards something else.
    // Notice the *1000 at the end - time must be in milliseconds
    ts = (new Date()).getTime() + (note-(new Date()).getTime());
      $("#time<?=$value['id']?>").parent().find('.countdown').countdown({
    timestamp : ts,
    callback  : function(days, hours, minutes, seconds){

      var message = "距离截止时间还有:";
      if(days!='0'){
        message += days + " 天"  + " ";
      }
      message += hours + " 时" + " ";
      message += minutes + " 分"   + " ";
      message += seconds + " 秒" + " ";
 /*     
      if(newYear){
        message += "left until the new year!";
      }
      else {
        message += "left to 10 days from now!";
      }*/
      $("#time<?=$value['id']?>").parent().find('#notetime').html(message);
      }
    });
    newYear = false;
  }else{
    $("#time<?=$value['id']?>").parent().find('.countdown').hide();
    $("#time<?=$value['id']?>").parent().parent().find('#baoming').hide();
    $("#time<?=$value['id']?>").parent().find('#notetime').html("已过期");
  }

   
  
});

</script>
      <?php } } ?>
      
      <div class="pagination alternate" style="text-align:center;"><ul><?=$multi?></ul></div>
    </div>
    <div class="span4">
            <div class="widget-box">
              <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
                <h5>热门活动</h5>
              </div>
              <div class="widget-content nopadding collapse in" id="collapseG2">
                <ul class="recent-posts">
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="./template/default/feed/img/demo/av1.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="./template/default/feed/img/demo/av2.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="./template/default/feed/img/demo/av4.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
         
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Progress Box</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled">
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
            </div>
            <div class="widget-box">
              <div class="widget-title bg_lo" data-toggle="collapse" href="#collapseG3"> <span class="icon"> <i class="icon-chevron-down"></i> </span>
                <h5>News updates</h5>
              </div>
              <div class="widget-content nopadding updates collapse in" id="collapseG3">
                <div class="new-update clearfix"><i class="icon-ok-sign"></i>
                  <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
                  <div class="update-date"><span class="update-day">20</span>jan</div>
                </div>
                <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
              </div>
            </div>
            
    </div>
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
        todayBtn: true,
        showMeridian: true,
        startDate: today,
        format: 'yyyy-mm-dd hh:ii'

    });
  $(document).ready(function () {

    

    $("#huodong").click(function () {
      $.ajax({
                 type: "POST",
                 url: "space.php?do=deal",
                 data: "subject="+$('#subject').val()+"&time="+$('#time').val()+" &message="+$('#message').val()+"&huodong=1",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                  async: true,                    
                    success: function (data) {
                      if(data=='-1')
                      {
                        alert("选项有空值");
                      }else{
                        alert("发布成功");
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