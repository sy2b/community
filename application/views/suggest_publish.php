<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>投诉建议</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/suggest-publish.css">
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
				<h3>发布建议</h3>
				
				<div class="publish-form">
					<form action="">
						<p>
							<textarea name=""></textarea>
						</p>
						<p>
							<input type="submit" class="submit" value="发表建议">
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