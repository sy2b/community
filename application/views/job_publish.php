<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>小区兼职</title>
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
				<form action="service/add_jobs" method="post">
					<p class="house-name">
						<span>兼职名称</span>
						<input type="text" placeholder="请输入兼职名称" name="job_type">
					</p>
					
					<p class="house-price">
						<span>工资</span><input type="text" name="job_salary" placeholder="2200元/月">
					</p>
					<p>
						<span>联系人</span>
						<input type="text" name="job_contactor" placeholder="刘女士">
					</p>
					<p>
						<span>联系电话</span>
						<input type="text" name="contact_tel" placeholder="18790905423">
					</p>
					<p class="house-intro">
						<span>工作简述</span>
						<textarea name="job_introduce" ></textarea>
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