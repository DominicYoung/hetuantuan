<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>个人中心</title>
    <link type="text/css" rel="stylesheet" href="<?php echo RESOURCE_ROOT;?>addons/common/fontawesome3/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/hetuantuan/themes/default/__RESOURCE__/recouse/css/fcommom.css?version=20150713">
    <link rel="stylesheet" type="text/css" href="http://localhost/hetuantuan/themes/default/__RESOURCE__/recouse/css/fd.css">

    <style>


        .foot {
            width: 100%;
            min-width: 300px;
            margin-top: 10px;
            margin-bottom: 30px;
            padding: 10px 0;
            color: #555;
            text-align: center;
        }

        .foot a {
            color: #555;
            margin: 0 3px;
        }

        .icon_i {
            font-size: 21px;
            color: #45a5cf;
        }


    </style>

</head>

<body class="body-gray" style="min-width: 320px;max-width: 640px;margin:0 auto;">


<div class="panel memberhead">
    <div class="header-l"><?php if(empty($avatar)){?><img class="icon-level-p1"
                                                                src="http://localhost/hetuantuan/themes/default/__RESOURCE__/recouse/images/tx.png"/><?php }else{ ?><img
            class="icon-level-p1" style="width:84px;height:84px;" src="<?php echo $avatar;?>"/><?php } ?>
    </div>


    <div class="header-r">
        <ul class="distributor-infor">

            <li> <?php if($is_login){?>
                <?php if(!empty($member['realname'])){?>

                <span class="distributor-infor-label">会员：</span>
                <span class="distributor-infor-c"><?php echo $member['realname'];?>	</span>
                <?php }else{ ?>
                <?php if(!empty($member['mobile'])){?>

                <span class="distributor-infor-label">手机号：</span>
                <span class="distributor-infor-c"><?php echo $member['mobile'];?>	</span>
                <?php }else{  ?>

                <span class="distributor-infor-label">会员ID：</span>
                <span class="distributor-infor-c"><?php echo $member['openid'];?>	</span>

                <?php }  ?>
                <?php }  ?>
                <?php }else{?> <span class="distributor-infor-label">临时账户</span><span class="distributor-infor-c"
                                                                                           style="width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <?php }?></li>

            <li><span class="distributor-infor-label">等级：</span><span class="distributor-infor-c"><?php if($is_login){?>  <?php $member_rank_model=member_rank_model($member['experience']);if(empty($member_rank_model)){ echo '无';}else{echo $member_rank_model['rank_name'];}?> <?php }else{?> 非会员 <?php }?></span>
            </li>

            <?php if($is_login==false){?>
            <li><a href="<?php echo mobile_url('login')?>" style="color:yellow">请先登陆以获得更好的服务</a></span>


            </li>
            <?php }?>
            <?php if($is_login){?>
            <li><span class="distributor-infor-label">注册时间:</span><span class="distributor-infor-c">
                   <?php echo date('Y-m-d', $member['createtime'])?></span>


            </li>
            <?php }?>
        </ul>

    </div>
</div>


<!--head end-->
<div class="my_nav">
    <ul>
        <li class="tiao" id="jdhbarea"><a href="javascript:;"><span id="couponNum"><?php echo empty($member['gold'])?0:$member['gold'];?></span>余额</a>
        </li>
        <li id="jingDou"><a href="javascript:;"><span id="jingDouNum"><?php echo empty($member['credit'])?0:$member['credit'];?></span>积分</a>
        </li>
    </ul>
</div>


<div class="my_menu">
    <ul>
        <li class="tiao">
            <a href="<?php echo mobile_url('myorder',array('status'=>99))?>" class="menu_1">全部订单</a>
        </li>
        <li class="tiao">
            <a href="<?php echo mobile_url('myorder',array('status'=>0))?>" class="menu_2"><span id="payDeaLNum"
                                                                                                       style="display: none;"></span>待付款</a>
        </li>
        <li class="tiao">
            <a href="<?php echo mobile_url('myorder',array('status'=>1))?>" class="menu_5"><span
                    id="receiveDeaLNum" style="display: none;"></span>待发货</a>
        </li>
        <li class="tiao">
            <a href="<?php echo mobile_url('myorder',array('status'=>2))?>" class="menu_3"><span
                    id="receiveDeaLNum" style="display: none;"></span>待收货</a>
        </li>

        <li class="tiao">
            <a href="<?php echo mobile_url('myorder',array('status'=>-5))?>" class="menu_4">退换货</a>
        </li>
    </ul>
</div>

<?php if(!empty($parent_member['openid'])){  ?>
<div class="panel member-nav" style="text-align:center">你是由【
    <?php echo empty($parent_member['realname'])?$parent_member['mobile']:$parent_member['realname']  ?>】推荐
</div>
<?php } ?>

<div class="panel member-nav">

    <ul class="side-nav">

        <?php if($is_login){?>

        <li><a href="<?php echo mobile_url('bonus')?>">&nbsp;&nbsp;<i class="icon-money icon_i"></i>&nbsp;<span
                class="text">我的优惠券</span><i class="arrow"></i></a></li>

        <li><a href="<?php echo mobile_url('rechargegold')?>">&nbsp;&nbsp;<i class="icon-credit-card icon_i"></i>&nbsp;<span
                class="text">余额充值</span><i class="arrow"></i></a></li>


        <li><a href="<?php echo mobile_url('outchargegold')?>">&nbsp;&nbsp;<i class="icon-credit-card icon_i"></i>&nbsp;<span
                class="text">余额提现</span><i class="arrow"></i></a></li>


        <li><a href="<?php echo mobile_url('address',array('from'=>'fansindex'))?>">&nbsp;&nbsp;<i
                class="icon-book icon_i"></i>&nbsp;<span class="text">管理收货地址</span><i class="arrow"></i></a></li>

        <?php } ?>

    </ul>
</div>
<?php if($is_login){?>
<?php if(count($fansindex_menu_list)>0) { if(is_array($fansindex_menu_list)) { ?>
<div class="panel member-nav">

    <ul class="side-nav">
        <?php foreach($fansindex_menu_list as $item) { ?>
        <li><a href="<?php echo $item['url'] ?>">&nbsp;&nbsp;<i class="<?php echo empty($item['icon'])? icon-ok :$item['icon'] ?> icon_i"></i>
            &nbsp;<span class="text"><?php echo $item['tname'] ?></span><i class="arrow"></i></a></li>
        <?php }?>
    </ul>
</div>
<?php }  }?>
<?php }?>


<div class="panel member-nav">


    <ul class="side-nav">

    <?php if($is_login){?>
        <li><a href="<?php echo mobile_url('member')?>">&nbsp;&nbsp;<i class="icon-edit icon_i"></i>&nbsp;<span
                class="text">资料修改</span><i class="arrow"></i></a></li>

        <li><a href="<?php echo mobile_url('member_pwd')?>">&nbsp;&nbsp;<i class="icon-key icon_i"></i>&nbsp;<span
                class="text">修改密码</span><i class="arrow"></i></a></li>


        <li><a href="<?php echo mobile_url('help')?>">&nbsp;&nbsp;<i
                class="icon-question-sign icon_i"></i>&nbsp;<span class="text">帮助说明</span><i class="arrow"></i></a></li>

        <?php if(!empty($member['mobile'])&&!empty($member['pwd'])&&$nologout==false){?>
        <li><a href="<?php echo mobile_url('logout')?>">&nbsp;&nbsp;<i class="icon-off icon_i"></i>&nbsp;<span
                class="text">安全退出</span><i class="arrow"></i></a></li>
        <?php } ?>
        
       
        
        <?php }else{?>

        <li><a href="<?php echo mobile_url('login')?>">&nbsp;&nbsp;<i class="icon-signout icon_i"></i>&nbsp;<span
                class="text">用户登录</span><i class="arrow"></i></a></li>
        <li><a href="<?php echo mobile_url('regedit')?>">&nbsp;&nbsp;<i
                class="icon-signout icon_i"></i>&nbsp;<span class="text">用户注册</span><i class="arrow"></i></a></li>

        <?php }?>

    </ul>
</div>


<?php include page('footer');?>

<?php include themePage('footer');?>
</body>
</html>
