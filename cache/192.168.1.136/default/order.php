<!DOCTYPE html>
<html>
<head>
	<title>我的订单</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/script/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/script/common.js"></script>
	<link type="text/css" rel="stylesheet" href="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/style/bootstrap.css">
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/script/bootstrap.min.js"></script>

<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/script/angular.min.js"></script>
	<link type="text/css" rel="stylesheet" href="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/style/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/style/common.mobile.css">
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/script/cascade.js"></script>
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/default/script/jquery.touchwipe.js"></script>
	<script type="text/javascript" src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/default/script/swipe.js"></script>
<style type='text/css'>
	.my_nav ul{display:box;display:-ms-box;display:-webkit-box;display:flex;display:-ms-flexbox;display:-webkit-flex}
	.my_nav li{display:block;flex:1;-ms-flex:1;-webkit-flex:1;box-flex:1;-ms-box-flex:1;-webkit-box-flex:1}
	.my_nav a:before{content:'\20';display:block}.layer .action a,.order_head .oh_btn.bg_1{background:#F3F3F3;color:#fff;border:1px solid transparent}
	.my_nav{width:100%;background:#efefef}
	.my_nav ul{overflow:hidden}
	.my_nav a{position:relative;display:block;height:43px;line-height:45px;text-align:center;color:#666;border-bottom:1px solid #ddd;padding-bottom:2px;font-size:16px}
	.my_nav a:before{width:1px;height:20px;position:absolute;left:-1px;top:50%;margin-top:-10px;background:#ddd}
	.my_nav li.cur a{padding-bottom:0;border-bottom:3px solid #e4393c;color:#e4393c}
</style>

<link type="text/css" rel="stylesheet" href="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/mobile/style/style.css">

</head>

<body style="padding-top:0px;margin:0 auto;">
<div class="main">
<div class="my_nav">
        <ul id="nav">
            <li <?php if($status==99) { ?>class='cur'<?php } else { ?>class=""<?php } ?>><a href="<?php echo mobile_url('myorder',array('status'=>99))?>">全部</a></li>
            <li <?php if($status==0) { ?>class='cur'<?php } else { ?>class=""<?php } ?>><a href="<?php echo mobile_url('myorder',array('status'=>0))?>">待付款</a></li>
            <li <?php if($status==1) { ?>class='cur'<?php } else { ?>class=""<?php } ?>><a href="<?php echo mobile_url('myorder',array('status'=>1))?>">待发货</span></a></li>
            <li  <?php if($status==2) { ?>class='cur'<?php } else { ?>class=""<?php } ?>><a href="<?php echo mobile_url('myorder',array('status'=>2))?>">待收货</a></li>
			<!--<li &lt;!&ndash;@php  if($status==-5) { @&ndash;&gt;class='cur'&lt;!&ndash;@php  } else { @&ndash;&gt;class=""&lt;!&ndash;@php  } @&ndash;&gt;><a href="&lt;!&ndash;@php  echo mobile_url('myorder',array('status'=>-5))@&ndash;&gt;">退换货</a></li>-->
        </ul>
    </div>



<?php if(count($list)<=0) { ?>
<div class="myoder" style='text-align:center;color:#aaa;padding:30px;'>
    您暂时没有任何订单!
</div>
<?php } ?>
<div style='margin-bottom:40px;'>
<?php if(is_array($list)) { foreach($list as $item) { ?>
<div class="myoder">
	<div class="myoder-hd">
		<span class="pull-left">订单编号：<?php echo $item['ordersn'];?></span>
		<span class="pull-right"><?php echo date('Y-m-d H:i', $item['createtime'])?>
      					<?php if($item['status'] == 0) { ?><span class="text-warning" >待付款</span><?php } ?>
						<?php if($item['status'] == 1) { ?><span class="text-danger" >待发货</span><?php } ?>
						<?php if($item['status'] == 2) { ?><span class="text-warning">待收货</span><?php } ?>
						<?php if($item['status'] == 3) { ?><span class="text-success" >已完成</span><?php } ?>
						<?php if($item['status'] == -1) { ?><span class="text-success">已关闭</span><?php } ?>
						<?php if($item['status'] == -2) { ?><span class="text-danger">退款中</span><?php } ?>
						<?php if($item['status'] == -3) { ?><span class="text-danger">换货中</span><?php } ?>
						<?php if($item['status'] == -4) { ?><span class="text-danger">退货中</span><?php } ?>
						<?php if($item['status'] == -5) { ?><span class="text-success">已退货</span><?php } ?>
						<?php if($item['status'] == -6) { ?><span class="text-success">已退款</span><?php } ?>
                </span>
	</div>
                  <?php if(count($item['goods'])==1) { ?>
	<?php if(is_array($item['goods'])) { foreach($item['goods'] as $goods) { ?>
	<div class="myoder-detail">
		<a href="<?php echo mobile_url('detail', array('id' => $goods['id']))?>"><img src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $goods['thumb'];?>" width="160"></a>
		<div class="pull-left">
			<div class="name"><a href="<?php echo mobile_url('detail', array('id' => $goods['id']))?>"><?php echo $goods['title'];?></a></div>
			<div class="price">
				<span><?php echo $goods['marketprice'];?> 元<?php if($goods['unit']) { ?> / <?php echo $goods['unit'];?><?php } ?></span>
				<span class="num"><?php echo $item['total'][$goods['id']]['total'];?><?php if($goods['unit']) { ?> <?php echo $goods['unit'];?><?php } ?></span>
			</div>
		</div>
	</div>
	<?php } } ?>
        <?php } else { ?>
       
	<div class="myoder-detail">
             <?php if(is_array($item['goods'])) { foreach($item['goods'] as $goods) { ?>
		<a href="<?php echo mobile_url('detail', array('id' => $goods['id']))?>"><img src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $goods['thumb'];?>" width="160"></a>
                <?php } } ?>
	</div>
	
        <?php } ?>
	 
	<div class="myoder-total">
		<span>共计：<span class="false"> <?php if($item['dispatchprice']<=0) { ?>
                        <?php echo $item['price'];?> 元
                        <?php } else { ?>
                        <?php echo $item['price'];?> 元 <!--(运费 &lt;!&ndash;@php  echo $item['dispatchprice'];@&ndash;&gt; 元) -->
                        <?php } ?></span>    <?php if($item['hasbonus']>0) { ?>
                     <!-- <span style="color:green"> ( 已优惠：&lt;!&ndash;@php  echo $item['bonusprice'];@&ndash;&gt; 元)</span>-->
                        <?php }  ?></span>
	 	<a href="<?php echo mobile_url('myorder', array('orderid' => $item['id'], 'op' => 'detail','fromstatus'=>$status))?>" class="btn btn-success pull-right btn-sm" >订单详情</a>
		<?php if($item['status'] == 0||($item['paytype'] ==3&&$item['status'] ==1)) { ?>
		&nbsp;&nbsp;<a href="<?php echo mobile_url('myorder', array('orderid' => $item['id'], 'op' => 'cancelsend', 'fromstatus' => intval($_GP['fromstatus'])))?>" class="btn btn-success pull-right btn-sm"  onclick="return confirm('确认取消该订单吗？'); " >取消订单</a>
		<?php } ?>
	 	<?php if($_CMS['addons_bj_hx']){ if($item['status']!=3&&$item['status']>0&&!empty($item['isverify'])) { ?>
		 	&nbsp;&nbsp;<a href="<?php echo create_url('mobile',array('name' => 'bj_hx','do' => 'verifyshow','orderid' => $item['id']))?>" class="btn btn-success pull-right btn-sm" >订单消费码</a>
		 		&nbsp;&nbsp;<a href="<?php echo create_url('mobile',array('name' => 'bj_hx','do' => 'sendweixin','orderid' => $item['id']))?>" class="btn btn-success pull-right btn-sm" >发送到微信</a>
		
		<?php } } ?>
	</div>
</div>
<?php } } ?><?php echo  $pager; ?></div>


<?php include page('footer');?>	
<?php include themePage('footer');?>
<script src="http://192.168.1.136/hetuantuan/themes/default/__RESOURCE__/recouse/js/zepto.min.js" type="text/javascript"></script>



