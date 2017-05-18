<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布报修</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/job-publish.css">
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
				<form action="service/add_repair" method="post" id="form-submit">
					<input type="hidden" name="user_id" value="<?php echo $loginedUser ? $loginedUser->user_id : '';?>">
					<p>
						<span>联系人</span>
						<input type="text" placeholder="联系人" name="contact_name">
					</p>
					<input type="hidden" name="hid" value="报修">
					<p>
						<span>联系电话</span>
						<input type="text" placeholder="联系电话" name="contact_tel">
					</p>
					<p>
						<span>费用</span>
						<input type="text" placeholder="报修费用" name="repair_fee">
					</p>
					<p class="house-intro">
						<span>报修简述</span>
						<textarea name="repair_introduce" placeholder="报修简述"></textarea>
					</p>
					<p class="house-announce">
						<input type="submit" value="+发布招修信息+">
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
				$user = $('[name="user_id"]').val();
				$contact = $('[name="contact_name"]').val();
				$tel = $('[name="contact_tel"]').val();
				$fee = $('[name="repair_fee"]').val();
				$introduce = $('[name="repair_introduce"]').val();
				var bFlag = true;
				var reg = /^(13|15)\d{9}$/;
				if($user == ''){
					alert('请用户登录！！！');
					bFlag = false;
					$('#modal').show();
				}else{
					$('#modal').hide();
					if($contact=='' || $tel=='' || $fee=='' || $introduce==''){
						alert('请完善发布报修信息！！！');
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