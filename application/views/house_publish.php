<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布租售房</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/house-publish.css">
</head>
<body>
<?php include "header.php"?>
	<div id="house-rent">
		<div class="wrapper">
			<div id="house-rent-nav">
				<a href="#">首页</a>
				&nbsp;|&nbsp;
				<a href="#">小区服务</a>
			</div>
			
		</div>
	</div>
	<div id="house-img"></div>
	<div id="house-rent-info">
		<div class="wrapper">
			<div class="house-rent-tabcontrols">
				<form action="service/add_house" method="post" enctype="multipart/form-data" id="form-submit">
					<input type="hidden" name="hid" value="<?php echo $loginedUser ? ($loginedUser -> user_id) : ''?>">
					<p class="house-name">
						<span>住房名称</span>
						<input type="text" placeholder="请输入出租/售房简称" name="house_title">
					</p>
					<p class="house-rent-sell">
						<span>选择发布类型</span>
						<select name="rent_sell" id="">
							<option value="出租">出租</option>
							<option value="出售">出售</option>
						</select>
					</p>
					<p class="house-type">
						<span>户型</span>
						<select name="house_size">
							<option value="两居室">两居室</option>
							<option value="三居室">三居室</option>
						</select>
					</p>
					<p class="house-price">
						<span>价格</span><input type="text" placeholder="出租售价位" name="price">
					</p>
					<p>
						<span>联系人</span><input type="text" name="contact_name" placeholder="联系人">
					</p>
					<p>
						<span>联系电话</span><input type="text" name="contact_tel" placeholder="联系电话">
					</p>
					<p class="house-figure">
						<span>房屋图片</span>
						<input type="file" name="house_img">
						<span>选择图片不得超过3M</span>
					</p>
					<p class="house-intro">
						<span>房屋综述</span>
						<textarea name="house_introduce" placeholder="房屋简述"></textarea>
					</p>

					<p class="house-announce">
						<input type="submit" value="+发布住房信息+">
					</p>
				</form>
			</div>
			
			<div class="house-rent-service">
				<?php include "publish.php"?>
				<?php include "district_life.php"?>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<?php include 'dialog.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
	<script>
		$(function(){
			$('#form-submit').on('submit', function(){
				$user = $('[name="hid"]').val();
				$hTitle = $('[name="house_title"]').val();
				$rentSell = $('[name="rent_sell"]').val();
				$size = $('[name="house_size"]').val();
				$price = $('[name="price"]').val();
				$contact = $('[name="contact_name"]').val();
				$tel = $('[name="contact_tel"]').val();
				$img = $('[name="house_img"]').val();
				$introduce = $('[name="house_introduce"]').val();
				var bFlag = true;
				var reg = /^(13|15)\d{9}$/;
				if($user == ''){
					alert('请用户登录！！！');
					bFlag = false;
					$('#modal').show();
				}else{
					$('#modal').hide();
					if($hTitle=='' || $price=='' || $contact=='' || $tel=='' || $introduce==''){
						alert('请完善出售租房屋信息！！！');
						bFlag = false;
					}else if($img == ''){
						alert('请添加房屋图片！！！');
						bFlag = false;
					}else if(!reg.test($tel)){
						alert('请输入13或15开头的11位手机号码！！！');
						bFlag = false;
					}else{
						bFlag = true;
					}
				}
				return bFlag;
			});
		});
	</script>
</body>
</html>