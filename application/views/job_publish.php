<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布兼职</title>
	<base href="<?php echo site_url();?>">
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
				<form action="service/add_jobs" method="post" id="form-submit">
					<input type="hidden" name="hid" value="<?php echo $loginedUser ? $loginedUser->user_id : '';?>">
					<p class="house-name">
						<span>兼职名称</span>
						<input type="text" placeholder="请输入兼职名称" name="job_name">
					</p>
					
					<p class="house-price">
						<span>工资</span><input type="text" name="job_salary" placeholder="2200元/月">
					</p>
					<p>
						<span>联系人</span>
						<input type="text" name="job_contactor" placeholder="联系人">
					</p>
					<p>
						<span>联系电话</span>
						<input type="text" name="contact_tel" placeholder="联系电话">
					</p>
					<p class="house-intro">
						<span>工作简述</span>
						<textarea name="job_introduce" placeholder="工作简述"></textarea>
					</p>
					<p class="house-announce">
						<input type="submit" value="+发布兼职信息+">
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
<!--  弹出层start-->
	<?php include 'dialog.php';?>
<!--  弹出层end 	-->
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
	<script>
		$(function(){
			//验证是否填入发布信息
			$('#form-submit').on('submit', function(){
				$user = $('[name="hid"]').val();
				$jobName = $('[name="job_name"]').val();
				$salary = $('[name="job_salary"]').val();
				$contactor = $('[name="job_contactor"]').val();
				$tel = $('[name="contact_tel"]').val();
				$introduce = $('[name="job_introduce"]').val();
				var bFlag = true;
				var reg = /^(13|15)\d{9}$/;
				if($user == ''){
					alert('请用户登录！！！');
					bFlag = false;
					$('#modal').show();
				}else{
					$('#modal').hide();
					if($jobName=='' || $salary== '' || $contactor=='' || $tel=='' || $introduce==''){
						alert('请完善发布兼职信息！！！');
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