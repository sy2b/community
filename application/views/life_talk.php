<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>personal</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/life-talk.css">
</head>
<body>
<?php include "header.php"?>
	<div id="house-rent">
		<div class="wrapper">
			<div id="house-rent-nav">
				<a href="#">首页</a>
				&nbsp;|&nbsp;
				<a href="#">生活论坛</a>
			</div>
		</div>
	</div>
	<div id="house-img"></div>
	<div id="house-rent-info">
		<div class="wrapper">
			<div class="life-talk">
				<h3>社区互动</h3>
				<div class="publish-talk">
					<p class="time">【1楼】李四&nbsp;&nbsp;发表于&nbsp;&nbsp;2017-2-18</p>
					<p class="content">简称做小区，是指以住宅为主并配套有相应公用设施及非住宅房屋的居住回复我对算法和恶i回复区、花园住宅、住宅组团。据全国最大的小区网络“小区联线”统计，现忽视的回复i撒谎的覅黄飞鸿的犯规而全国总计有超过3万个小区，其中仅北京市就有三千多个小区。</p>
				</div>
				<div class="publish-talk">
					<p class="time">【2楼】张三&nbsp;&nbsp;发表于&nbsp;&nbsp;2017-2-18</p>
					<p class="content">简称做小区，是指以住宅为主并配套有相应公用设施及非住宅房屋的居住回复我对算法和恶i回复区、花园住宅、住宅组团。据全国最大的小区网络“小区联线”统计，现忽视的回复i撒谎的覅黄飞鸿的犯规而全国总计有超过3万个小区，其中仅北京市就有三千多个小区。</p>
				</div>

				<div class="publish-form">
					<form action="">
						<p>
							<textarea name=""></textarea>
						</p>
						<p>
							<input type="submit" class="submit" value="发表">
							<span>文明上网，理性发言</span>
						</p>
					</form>
				</div>
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