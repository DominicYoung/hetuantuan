<!DOCTYPE html>
<html class="" lang="zh-CN" >
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on">
    <title>我的优惠券</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



<style>

.content {
  width: 100%;
  margin: 0 auto;
}
body {
  color: #333;
  background-color: #eee;
  -webkit-backface-visibility: hidden;
  min-width: 320px;
  max-width: 640px;
  margin:0 auto;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
div {
  display: block;
}
html, div, span,  h1, h2, h3, h4, h5, h6, p,  a, i {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
.content-body {
  background-color: #fff;
  padding: 10px 0 10px 10px;
  border: 1px solid #ddd;
}
.content-body {
  position: relative;
  z-index: 10;
}
.bjprcali {
  margin: 0 20px 0 10px;
  padding-left:0px;
}
ol, ul {
  list-style: none;
}
ul, menu, dir {
  display: block;
  list-style-type: disc;
  -webkit-margin-before: 1em;
  -webkit-margin-after: 1em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  -webkit-padding-start: 40px;
}
.bjprcali .bjprit {
  background: #fff;
  border: 1px solid #e5e5e5;
  border-left: 0;
  border-radius: 5px;
  margin-bottom: 10px;
  height: 92px;
  position: relative;
  overflow: hidden;
}
li {
  display: list-item;
  text-align: -webkit-match-parent;
}
ol, ul {
  list-style: none;
}
.clearfix {
  zoom: 1;
}
.bjprcali .bjprit a {
  display: block;
}
a {
  color: #333;
  background: transparent;
  text-decoration: none;
}


.bjprcali .bjprlpar {
  float: left;
  width: 60%;
  height: 92px;
  color: #fff;
}
.bjprcali .bjprlpar .inner {
  padding: 10px;
}
.bjf14 {
  font-size: 14px !important;
}
.bjprcali .bjprlpar .bjprcava {
  font-size: 35px;
  line-height: 60px;
}
.bjprcali .bjprlpar .bjprcava span {
  font-size: 18px;
}
.bjf12 {
  font-size: 12px !important;
}
.bjprcali .bjprripa {
  float: right;
  width: 40%;
  height: 92px;
  color: #666;
  line-height: 1.5;
}
.center, .text-center {
  text-align: center;
}
.bjprcali .bjprripa .inner {
  padding: 6px 10px;
}
.bjf16 {
  font-size: 16px !important;
}
.bjprcali .left-dot-line {
  position: absolute;
  left: 0;
  top: 2px;
  width: 5px;
  height: 88px;
  background: url("http://localhost/hetuantuan/themes/default/__RESOURCE__/vertical_dot.png") repeat-y left top;
  background-size: 4px;
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>



	</head>
<body>

    

    
	<div class="content ">
        <div class="content-body">
    <!-- 无优惠券情况下展示 -->
	
	
    
        <div class="bjprclbx">
            <ul class="bjprcali">
			 <?php if(count($bonuslist)<=0) { ?>	  
                <img style="max-width: 100%;height: auto;width: auto\9;" src="http://localhost/hetuantuan/themes/default/__RESOURCE__/recouse/images/zwuyhq.png"/>
                   <?php } ?>	 
			        
              <?php foreach($bonuslist as $bonus) { ?>	
                    <li class="bjprit coupon-style-0">
                        <a class="clearfix" href="#">
                            <div class="bjprlpar" style="background: -webkit-gradient(linear, 0 0, 0 100%, from(<?php if($bonus['isuse']==0){  ?>  <?php if($bonus['use_end_date']<=time()){  ?> #BABABA<?php }else{ ?> #fe324e <?php }?> <?php }else{ ?>     #03FCB0   <?php }?>  ), to(<?php if($bonus['isuse']==0){  ?>  <?php if($bonus['use_end_date']<=time()){  ?> #8F908F<?php }else{ ?> #fe6264 <?php }?> <?php }else{ ?>     #1DFDB9   <?php }?>  ));
  background: -moz-linear-gradient(top, <?php if($bonus['isuse']==0){  ?>  <?php if($bonus['use_end_date']<=time()){  ?> #BABABA<?php }else{ ?> #fe324e <?php }?> <?php }else{ ?>     #03FCB0   <?php }?>  , <?php if($bonus['isuse']==0){  ?>  <?php if($bonus['use_end_date']<=time()){  ?> #8F908F<?php }else{ ?> #fe6264 <?php }?> <?php }else{ ?>     #1DFDB9   <?php }?>  );">
                                <div class="inner">
                                    <h4 class="bjprshna bjf14"> <?php echo $bonus['type_name']; ?></h4>
                                    <div class="bjprcava">
                                        <span>￥</span><i><?php echo $bonus['type_money']; ?></i>
                                    </div>
                                    <div class="bjprcon bjf12">
                                                                           </div>
                                </div>
                            </div>
                            <div class="bjprripa center bjf12">
                                <div class="inner">
                                    <div>
                                        <p>使用期限</p>
                                        <p><?php echo date('Y-m-d', $bonus['use_start_date']); ?></p>
                                        <p><?php echo date('Y-m-d', $bonus['use_end_date']); ?></p>
                                    </div>
                                    <div class="bjprusst bjf16">
                                          <?php if($bonus['isuse']==0){  ?>  <?php if($bonus['use_end_date']<=time()){  ?> 已过期<?php }else{ ?> 未使用 <?php }?> <?php }else{ ?>     已使用   <?php }?>                             </div>
                                </div>
                            </div>
                            <i class="expired-icon"></i>
                            <i class="left-dot-line"></i>
                        </a>
                    </li>
  <?php } ?>	
                  </ul>
        </div>

    </div>              

	</div>  

<?php include themePage('footer');?>
 
</body>
</html>