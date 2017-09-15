<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minibuxiugangjyw/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minibuxiugangjyw/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minibuxiugangjyw/Public/ht/js/action.js"></script>
<script type="text/javascript" src="/minibuxiugangjyw/Public/plugins/xheditor/xheditor-1.2.1.min.js"></script>
<script type="text/javascript" src="/minibuxiugangjyw/Public/plugins/xheditor/xheditor_lang/zh-cn.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 发布供求 】</div>

<div class="aaa_pts_show_2">
    

    <div class="aaa_pts_3">
      <form action="<?php echo U('supply/add');?>" method="post" onsubmit="return ac_from();" enctype="multipart/form-data">
      <ul class="aaa_pts_5">
         <li>
          <div class="d1">供求类型:</div>
          <div>
            <select class="inp_1" name="type" id="type" style="width:150px;margin-right:5px;">
                <!-- 遍历 -->
                <option value="">选择类型</option>
                <option value="1">发布供应</option>
                <option value="2">发布求购</option>
                <!-- 遍历 -->
              </select>
          </div>
        </li>
        <li>
            <div class="d1">联系人:</div>
            <div>
              <input class="inp_1" name="name" id="name"/>
            </div>
         </li>
         <li>
            <div class="d1">联系电话:</div>
            <div>
              <input class="inp_1" name="tel" id="tel"/>
              &nbsp;&nbsp;&nbsp;11位的手机号
            </div>
         </li>
         
        
         <li>
            <div class="d1">发布内容:</div>
            <div>
              <textarea class="inp_1 inp_2" name="content" id="content"/></textarea>
            </div>
         </li>

         <li><input type="submit" name="submit" value="提交" class="aaa_pts_web_3" border="0">
         </li>
      </ul>
      </form>
         
    </div>
    
</div>
<script>
function ac_from(){
  var type=document.getElementById('type').value;
  if(type==''){
    alert('请选择供求类型！');
    return false;
  }

  var name=document.getElementById('name').value;
  if(name==''){
    alert('请填写联系人！');
    return false;
  }

  var content=document.getElementById('content').value;
  if(content==''){
    alert('请填写发布内容！');
    return false;
  }
  
  var tel=document.getElementById('tel').value;
  if(tel!=''){
	  if(!tel.match(/^[0-9]{11}$/)){
		  alert('联系电话格式不正确！');
		  return false;
		}
  }else{
     alert('请输入联系电话！');
      return false;
  }
  
}




</script>
</body>
</html>