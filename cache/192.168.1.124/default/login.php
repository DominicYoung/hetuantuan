<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8"><title><?php echo $cfg['shop_title'] ?></title> <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">    <meta name="apple-mobile-web-app-capable" content="yes">    <meta name="apple-mobile-web-app-status-bar-style" content="black">    <meta name="format-detection" content="telephone=no"><link rel="stylesheet" href="http://192.168.1.124/hetuantuan/themes/default/__RESOURCE__/login/css/bootstrap.min.css"><link rel="stylesheet" href="http://192.168.1.124/hetuantuan/themes/default/__RESOURCE__/login/css/font-awesome.min.css"><style>body{background:#efefef ;}.head{height:40px; line-height:40px;  padding:5px; 5px; color:#fff;border-bottom: 1px solid #a5d7de;  background: #5babe6 !important;}.head .bn{display:inline-block; height:30px; line-height:30px; padding:0 10px; margin-top:0px; font-size:20px; color:#FFF; text-decoration:none;}.head .bn.pull-right{position:absolute; right:5px; top:0;}.head .title{font-size:14pt;display:block;padding-left:10px;font-weight:bolder;margin-right:49px;text-align:center;height:40px;line-height:30px;text-overflow:ellipsis;white-space:nowrap;overflow: hidden;}.head .order{background:#F9F9F9; position:absolute; z-index:9999; right:0;}.head .order li > a{display:block; padding:0 10px; min-width:100px; height:35px; line-height:35px; font-size:16px; color:#666; text-decoration:none; border-top:1px #EEE solid;}.head .order li > a i{display:inline-block; width:20px;}.head .order li.icon-caret-up{font-size:20px;color:#F9F9F9;position:absolute;top:-11px;right:16px;}.form-horizontal{margin:5px; background:#fafafa; padding:20px 10px 10px 10px; overflow:hidden;}.form-horizontal label{color:#555;}.form-horizontal .sendverify{margin-right:15px; width:100%;}.form-horizontal .resolve{background:#FFF; border-top:2px #769cdc solid; padding:10px;}.form-horizontal .resolve .resolver, .resolve .date{text-align:right; color:#888;}.form-horizontal .resolve .resolver{color:#779cdc;}.width-auto {width:auto;}.pull-right {float:right;}.pull-left {float:left;}</style></head><body style="min-width: 320px;max-width: 640px;margin:0 auto;"><style>.form-horizontal .control-label{margin-bottom:5px; font-size:14px;}.form-group{margin-bottom:10px;}</style><form class="form-horizontal img-rounded" role="form" method="post" onsubmit="return checkInfo(this);">	<input type="hidden"  name="third_login" value="<?php echo $_GP['third_login'];?>" /><div class="form-group">	<label for="realname" class="col-sm-3 control-label">手机号</label>	<div class="col-sm-6">		<input type="text" id="mobile" name="mobile" value="" class="form-control" placeholder="输入您的手机号" />	</div></div><div class="form-group">	<label for="mobile" class="col-sm-3 control-label">密码</label>	<div class="col-sm-6">		<input type="password" id="pwd" name="pwd" value="" class="form-control span2" placeholder="输入您的登录密码" />	</div></div><div class="form-group">	<div class="col-xs-12">		<button type="submit" name="submit" value="yes" class="btn btn-primary btn-lg" style="width:100%;">立即登录</button>	</div></div><div class="form-group">	<div class="col-xs-12">	<p class="text-center" style="clear:both">		 <?php if($_GP['from']=="confirm") { ?>		<a style="font-size:30px" href="<?php echo getloginfrom("&follower=nologinby");?>"><strong>直接购买</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	 	<?php }?> <a href="<?php echo create_url('mobile',array('name' => 'shopwap','do' => 'regedit','third_login'=>$_GP['third_login']));?>">免费注册</a> <?php if(!empty($cfg['regsiter_usesms'])) { ?>&nbsp; <a href="<?php echo create_url('mobile',array('name' => 'shopwap','do' => 'repwd','third_login'=>$_GP['third_login']));?>">忘记密码</a>   	<?php }?>   </p>	</div>	</div>	 <?php if($showqqlogin) { ?>		 <?php if($_GP['third_login']!="") { ?>			 			   <?php }else{ ?>		<div style="padding-left: 0.6em;  padding-right: 0.6em;">  	<strong>使用合作账号登录</strong>  	<p>    	<a href="<?php echo create_url('mobile',array('name' => 'shopwap','do' => 'third_loginqq'));?>"><img src="http://192.168.1.124/hetuantuan/themes/default/__RESOURCE__/login/images/qq.png"></a>    </p>  </div>				  <?php } ?>  <?php } ?></form><script type="text/javascript">	function checkInfo(form) {				var mobile = form['mobile'].value;		if (!mobile) {			alert('请输入您的手机号码！');			return false;		}		if (mobile.search(/^([0-9]{11})?$/) == -1) {			alert('请输入正确的手机号码！');			return false;		}				if (!form['pwd'].value) {			alert('请输入登录密码');			return false;		}	}</script><?php include page('footer');?>	<?php include themePage('footer');?></body></html>