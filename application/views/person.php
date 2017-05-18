<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/person.css">
</head>
<body>
<?php include "header.php"?>
	<div id="house-rent">
		<div class="wrapper">
			<div id="house-rent-nav">
				<a href="welcome/index">首页</a>
				&nbsp;|&nbsp;
				<a href="welcome/person">个人中心</a>
			</div>
		</div>
	</div>
	<div id="house-img"></div>
	<div id="house-rent-info">
		<div class="wrapper">
			<div class="personal-form">
				<h3>修改个人信息</h3>
				<div class="person-img">
					<img src="assets/img/person.png" alt="">
				</div>
				<?php
					if($loginedUser){
				?>
					<form action="" id="submit-form">
							<p>
								<span>昵称</span>
								<input type="text" placeholder="请修改昵称" name="name" value="<?php echo $loginedUser -> name;?>">
							</p>

							<p>
								<span>密码</span>
								<input type="password" placeholder="请修改密码" name="pass" value="<?php echo $loginedUser -> password;?>">
							</p>
							<p>
								<span>住址</span>
								<input type="text" placeholder="请修改住址" name="address" value="<?php echo $loginedUser -> address;?>">
							</p>
							<p>
								<span>联系方式</span>
								<input type="text" placeholder="请修改联系方式" name="telephone" value="<?php echo $loginedUser -> telephone;?>">
							</p>
							<p class="submit">
								<input type="submit" value="提交修改">
							</p>

						</form>
				<?php
					}else{
				?>
					<form action="" id="submit-form">
							<p>
								<span>昵称</span>
								<input type="text" placeholder="请修改昵称" name="name" value="">
							</p>

							<p>
								<span>密码</span>
								<input type="password" placeholder="请修改密码" name="pass" value="">
							</p>
							<p>
								<span>住址</span>
								<input type="text" placeholder="请修改住址" name="address" value="">
							</p>
							<p>
								<span>联系方式</span>
								<input type="text" placeholder="请修改联系方式" name="telephone" value="">
							</p>
							<p class="submit">
								<input type="submit" value="提交修改">
							</p>

						</form>
				<?php
					}
				?>
				
				
			</div>
			<div class="house-rent-service">
				<?php include "publish.php"?>
				<?php include "district_life.php"?>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
	<script>
		$(function(){
			$('#submit-form').on('submit', function(){
				var $name = $('[name="name"]').val();
				var $pass = $('[name="pass"]').val();
				var $address = $('[name="address"]').val();
				var $telephone = $('[name="telephone"]').val();
				console.log($name);
				$.get('welcome/update_user', {
					name : $name,
					pass : $pass,
					address : $address,
					telephone : $telephone
				},function(data){
					if(data == 'success'){
						alert('修改信息成功！！！');
						location.href = 'welcome/person';
					}else if(data == 'fail'){
						alert('还未修改信息！！！');
					}
				}, 'text');



				return false;
			});
		});











	</script>
</body>
</html>