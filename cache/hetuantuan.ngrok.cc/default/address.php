<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>收货地址</title>
 <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/script/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/script/common.js"></script>
	<link type="text/css" rel="stylesheet" href="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/mobile/style/bootstrap.css">
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/script/bootstrap.js"></script>
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/script/angular.min.js"></script>
	<link type="text/css" rel="stylesheet" href="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/mobile/style/common.mobile.css">
	<link type="text/css" rel="stylesheet" href="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/mobile/style/style.css">
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/script/cascade.js"></script>
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/mobile/script/jquery.touchwipe.js"></script>
	<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/mobile/script/swipe.js"></script>
	<style type='text/css'>
    #poptip { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px;height: 27px;background:#000; opacity: 0.7;filter:alpha(opacity=0.7); color:#fff;z-index: 999;  border-radius:5px;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;}
	#poptip_content { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px; height: 27px; color:#fff;text-align:center;font-size:14px;z-index: 9909}
	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{width:100%; margin-bottom:0; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box;}
	input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{height:30px;}
	.input-append, .input-prepend{width:100%; margin-bottom:0;}
	select{padding:0 5px; line-height:28px; -webkit-appearance:button;}
	.checkbox.inline{margin-top:0;}
	.checkbox.inline + .checkbox.inline {margin-left:0;}
	.checkbox input[type="checkbox"]{filter:alpha(opacity:0); opacity:0;}
	.file{position:relative;}
	.file input[type="file"]{position:absolute; top:0; left:0; width:100%; filter:alpha(opacity:0); opacity:0;}
	.file button{width:100%; text-align:left;}
	.form-item{border-left:3px #ED2F2F solid; padding-left:10px; height:30px; line-height:30px; background:#F7F7F7; margin-bottom:10px;}
	</style>
	<script language='javascript'>
    function tip(msg,autoClose){
     var div = $("#poptip");
     var content =$("#poptip_content");
     if(div.length<=0){
         div = $("<div id='poptip'></div>").appendTo(document.body);
         content =$("<div id='poptip_content'>" + msg + "</div>").appendTo(document.body);
     }
     else{
         content.html(msg);
         content.show(); div.show();
     }
     if(autoClose) {
        setTimeout(function(){
            content.fadeOut(500);
            div.fadeOut(500);

        },1000);
		}
	}
	function tip_close(){
    $("#poptip").fadeOut(500);
     $("#poptip_content").fadeOut(500);
	}
    </script>
</head>
<body>

<div class="main">

<div class="head" style="height:40px; background-color:#5babe6">
		<?php if(!empty($from)) { ?>
		<?php if(!empty($returnurl)) { ?>
			<a href="<?php echo $returnurl;?>" class="bn pull-left">
			<?php } else { ?>
					<?php if(!empty($from)) { ?>
						<a href="<?php echo mobile_url($from)?>" class="bn pull-left">
						<?php } else { ?>
	<a href="<?php echo mobile_url('fansindex')?>" class="bn pull-left">
						<?php } ?>
		<?php } ?>
		<?php } else { ?>
			<a href="javascript:history.back();" class="bn pull-left">
		<?php } ?>
		<i class="icon-angle-left"></i></a>
	<span class="title" style="font-size: 1.6em;height:99px
line-height: 2.55263em;
color: #fff;
text-align: center;font-family: Helvetica,STHeiti STXihei,Microsoft JhengHei,Microsoft YaHei,Tohoma,Arial;">我的地址</span>

</div>
<form class="form-horizontal" method="post" role="form">
<input type="hidden" name="goodstype" value="<?php echo $goodstype;?>" />
<div class="order-main">
	
	 	
	<div id="myaddress">
	<?php if(is_array($address)) { foreach($address as $row) { ?>
                <div id='address_<?php echo $row['id'];?>' class="<?php if($row['isdefault']==1) { ?>shopcart-main1<?php } else { ?>shopcart-main<?php } ?> img-rounded address_item" style='margin:0;padding:10px;margin-bottom:10px;cursor:pointer' onclick='editAddress(<?php echo $row['id'];?>,<?php echo $row['isdefault']==1?'1':'0'?>)'>
	 <span><?php echo $row['province'];?> <?php echo $row['city'];?> <?php echo $row['area'];?> <?php echo $row['address'];?> <br/> <?php echo $row['realname'];?>, <?php echo $row['mobile'];?></span>
                    <br/><span>
                           <a href="javascript:;" onclick="saveDefaultAddress(event,<?php echo $row['id'];?>)">设为默认</a>
                            <a href="javascript:;" onclick="removeAddress(event,<?php echo $row['id'];?>)"><i class="icon-remove"></i> 删除</a>
         </span>
                </div>
	<?php } } ?>
	</div>
	<div><button type="button" class="btn btn-danger" onclick="addAddress()"><i class="icon-plus"></i> 添加修改地址</button></div>
	<div class="add-address img-rounded" id="addAddressPanel" <?php if(!empty($address)) { ?> style="display:none;"<?php } ?>>
		<div class="add-address-hd">请仔细填写收货地址：</div>
		<div class="add-address-main">
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">收货人：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="realname">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">联系电话：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="mobile">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">地区：</label>
				<div class="col-sm-9">
					<select id="sel-provance" onChange="selectCity();" class="pull-left form-control" style="width:30%; margin-right:5%;">
						<option value="" selected="true">省/直辖市</option>
					</select>
					<select id="sel-city" onChange="selectcounty()" class="pull-left form-control" style="width:30%; margin-right:5%;">
						<option value="" selected="true">请选择</option>
					</select>
					<select id="sel-area" class="pull-left form-control" style="width:30%;">
						<option value="" selected="true">请选择</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">详细地址：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="address">
				</div>
			</div>
			<input type="hidden" id="addressid" value="" />
			<div class="form-group">
				<div class="col-sm-12">
					<button type="button" class="btn btn-danger" onclick="saveAddress()">保存</button>
					<button type="button" class="btn" onclick="addAddress();$('#addAddressPanel').hide();$('#addressid').val('');">取消</button>
				</div>
			</div>
		</div>
	</div>
	 
</div>


<script src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js/zepto.min.js" type="text/javascript"></script>
<script type="text/javascript">
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>


<script type="text/javascript" src="http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js/cascade.js?x=15"></script>
<script type="text/javascript">
    var from='<?php echo $from;?>';
    var returnurl = '<?php echo $returnurl;?>';
cascdeInit('http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js','','','');
function saveAddress() {
	var realname = $('#realname').val();
	var mobile = $('#mobile').val();
	var province = $('#sel-provance').val();
	var city = $('#sel-city').val();
	var area = $('#sel-area').val();
	if(area==null)
	{
		area='';
	}
		if(city==null)
	{
		city='';
	}
		if(province==null)
	{
		province='';
	}
	var address = $('#address').val();
	if (!realname) {
		alert('请输入您的真实姓名！');
		return false;
	}
	if (!mobile) {
		alert('请输入您的手机号码！');
		return false;
	}
	if (mobile.search(/^([0-9]{11})?$/) == -1) {
		alert('请输入正确的手机号码！');
		return false;
	}
	if (!address) {
		alert('请输入您的详细地址！');
		return false;
	} tip("正在处理数据...");
	$.post('<?php echo mobile_url('address')?>', {
                                    'op' : 'post',
		'realname' : realname,
		'mobile' : mobile,
		'province' : province,
		'city' : city,
		'area' : area, 
		'address' : address,
		'id' : $('#addressid').val()
	}, function(s) {
            tip_close();
		if (s.message != 0) {
                                        if (from=='confirm'){
                                              if(returnurl!=''){
                                                    location.href = returnurl;
                                                    return;
                                                }
                                            location.href = '<?php echo mobile_url('confirm')?>';
                                        }
			$("input [name='address']").attr('checked', false);
                               var html='<div class="shopcart-main1 img-rounded" style="margin:0;padding:10px;margin-bottom:10px;cursor:pointer" onclick="editAddress(' + s.message +')">';
                             var html1='<span>'+province+' '+city+' '+area+' '+''+address+' '+' <br/> ' +realname+', '+mobile+'</span>' +
 	            '<span style="float:right">' +
                             '&nbsp;&nbsp;<a href="javascript:;" onclick="saveDefaultAddress('+ s.message +')">设置为默认收货地址</a></span>';
                     var html2= '</div>';
 
			if ($('#address_'+s.message).get(0)) {
				$('#address_'+s.message).html(html1);
			} else {
                                                             $(".address_item").removeClass("shopcart-main1").addClass("shopcart-main");
			      $('#myaddress').append($(html + html1 + html2));
			}
			
			$('#realname').val('');
			$('#mobile').val('');
			$('#address').val('');
			cascdeInit('http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js','','','');
		}else
			{
				alert("新增地址失败请再试一次");
				}
		$('#addAddressPanel').hide();
	}, 'json');

}

function addAddress() {
	$('#addAddressPanel').show();
	$('#realname').val('');
	$('#mobile').val('');
	$('#address').val('');
	cascdeInit('http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js','','','');
	$('#addressid').val('');

}

function saveDefaultAddress(e,id) {
                 tip("正在处理数据...");
	$.post('<?php echo mobile_url('address', array('op' => 'default'))?>', {
		'id' : id,
	}, function(s) {
		//$("input [name='address']").attr('checked', false);
                             $(".address_item").removeClass("shopcart-main1").addClass("shopcart-main");
		$("#address_"+id).addClass("shopcart-main1");
                tip_close();
	}, 'json');
          e.stopPropagation() ;
}
function removeAddress(e,id){
    if(confirm('确认要删除此收货地址吗?')){
         tip("正在处理数据...");
	$.post('<?php echo mobile_url('address', array('op' => 'remove'))?>', {
		'id' : id,
	}, function(s) {
                            
	         $("#address_"+id).remove();
                           if(s.maxid!='0'){
                                 $(".address_item").removeClass("shopcart-main1").addClass("shopcart-main");
		$("#address_"+s.maxid).addClass("shopcart-main1");
                            }
                tip_close();
	}, 'json');
          e.stopPropagation() ;
    }
}
var isdef = 0;
function editAddress(id) {   
       if (from=='confirm'){
               //     location.href = '<?php echo mobile_url('confirm')?>';
                tip("正在处理数据...");
	$.post('<?php echo mobile_url('address', array('op' => 'default'))?>', {
		'id' : id,
	}, function(s) {
            tip_close();
			   console.log('dddddd');
            if(returnurl!=''){
                location.href = returnurl;
                return;
            }
            location.href = '<?php echo mobile_url('confirm')?>';
        });
        return;
       }
                                        
        tip("正在处理数据...");
	$.get('<?php echo mobile_url('address', array('op' => 'detail'))?>', {
		'id' : id,
	}, function(s){
                   tip_close();
		if (s.message) {
			$('#addAddressPanel').show();
			$('#realname').val(s.message.realname);
			$('#mobile').val(s.message.mobile);
			$('#address').val(s.message.address);
			cascdeInit('http://hetuantuan.ngrok.cc/hetuantuan/themes/default/__RESOURCE__/recouse/js',s.message.province,s.message.city,s.message.area);
			$('#addressid').val(s.message.id);
		}
	}, 'json');
       
}

</script>
	
	
<?php if($useWeixinAddr){ ?>
<script type="text/javascript">

	function getaddrinfo()
	{
			
WeixinJSBridge.invoke('editAddress',<?php echo $addressSignInfo;?>, function (res) {

if(res.err_msg=='edit_address:ok')
{
var dropElement1 = document.getElementById("sel-provance");
 var dropElement2 = document.getElementById("sel-city");
 
  var dropElement3 = document.getElementById('sel-area');
dropElement1.value= res.proviceFirstStageName==null?'':res.proviceFirstStageName;

 if(dropElement1.selectedIndex<0)
 {
 dropElement1.selectedIndex=0;	
 }


selectCity();

dropElement2.value= res.addressCitySecondStageName==null?'':res.addressCitySecondStageName;
  if(dropElement2.selectedIndex<0)
 {
 dropElement2.selectedIndex=0;	
 }
selectcounty();

dropElement3.value = res.addressCountiesThirdStageName==null?'':res.addressCountiesThirdStageName;
  if(dropElement3.selectedIndex<0)
 {
 dropElement3.selectedIndex=0;	
 }
document.getElementById('address').value= res.addressDetailInfo==null?'':res.addressDetailInfo;
document.getElementById('mobile').value= res.telNumber==null?'':res.telNumber;
document.getElementById('realname').value= res.userName==null?'':res.userName;
}
 });
}
			if (typeof WeixinJSBridge == "undefined"){
			    if( document.addEventListener ){
			        document.addEventListener('WeixinJSBridgeReady', getaddrinfo, false);
			    }else if (document.attachEvent){
			        document.attachEvent('WeixinJSBridgeReady', getaddrinfo); 
			        document.attachEvent('onWeixinJSBridgeReady', getaddrinfo);
			    }
			}else{
			    getaddrinfo();
			}

</script>
<?php } ?>
	

<?php include page('footer');?>	