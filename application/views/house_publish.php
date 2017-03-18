<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>房屋租凭</title>
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
				<form action="">
					<p class="house-name">
						<span>住房名称</span>
						<input type="text" placeholder="请输入小区名称">
					</p>
					<p class="house-rent-sell">
						<span>选择发布类型</span>
						<select name="" id="">
							<option value="">出租</option>
							<option value="">出售</option>
						</select>
					</p>
					<p class="house-type">
						<span>户型</span>
						<select name="" id="">
							<option value="">两居室</option>
							<option value="">三居室</option>
						</select>
					</p>
					<p class="house-price">
						<span>价格</span><input type="text" placeholder="2200元/月">
					</p>
					<p>
						<span>联系人</span><input type="text">
					</p>
					<p>
						<span>联系电话</span><input type="text">
					</p>
					<p class="house-intro">
						<span>房屋综述</span>
						<textarea name="" ></textarea>
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