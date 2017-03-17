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
				<a href="#">首页</a>
				&nbsp;|&nbsp;
				<a href="#">个人中心</a>
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
				<form action="">
					<p>
						<span>用户名</span>
						<input type="text" placeholder="请修改用户名">
					</p>

					<p>
						<span>密码</span>
						<input type="text" placeholder="请修改密码">
					</p>
					<p>
						<span>住址</span>
						<input type="text" placeholder="请修改住址">
					</p>
					<p>
						<span>联系方式</span>
						<input type="text" placeholder="请修改联系方式">
					</p>
					<p class="submit">
						<input type="submit" value="提交修改">
					</p>
					
				</form>
				
				
			</div>
			

			<div class="house-rent-service">
				<?php include "publish.php"?>
				<?php include "district_life.php"?>
			</div>
		</div>
	</div>

	<div id="footer">
		<p id="footer-link">
			友情链接:
			<a href="#">方正集团</a>
			<a href="#">北大资源</a>
		</p>
		<p id="footer-copyright">版权所有：北大资源集团商业有限公司版权所有 Copyright@2013 | 京ICP备13022849号 | 京ICP证130321号 | 京公网安备11010802014221号 | 京卫网审【2014】第0105号</p>
	</div>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
</body>
</html>