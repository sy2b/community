<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>物业在线</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/property.css">
</head>
<body>
<?php include "header.php"?>
	<div id="property-title">
		<div class="wrapper">
			<div id="property-title-nav">
				<a href="#">首页</a>
				&nbsp;|&nbsp;
				<a href="#">物业在线</a>
			</div>
		</div>
	</div>

<div id="property-content">
	<div class="wrapper">
		<div class="property-online">物业在线</div>

		<div class="property-tabcontrols">
			<div class="property-tab">
				<span class="active">小区规定</span>
				<span>小区活动</span>
				<span>小区公告</span>
				<span>小区建议</span>
			</div>
			<div class="property-details">
				<ul class="active rule">
					<li>
						<h3><a href="property/rule_details">[豪第坊]紧急停水通知</a></h3>
						<p class="content">   尊敬的各位业主：        您好！        接水厂紧急通知：由于扬州江阳西路自来水管道施工，下午1点至下午5点新集镇将停水，请各位业主做好储水准备，安排好自己的生活，如有疑问请致电豪第坊物业服务处。        豪第坊物业服务处</p>
						<p class="time">
							<span>2017-3-13 10:22:22</span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span>李四</span>
						</p>
					</li>
				</ul>

				<ul class="activities">
					<li>
						<h3><a href="property/activities_details">[星座国际]消防培训通知</a></h3>
						<p class="content">  各位业主        你们好！        3月14日（下星期二）下午三点，消防大队将在本大厦举办消防知识讲座，欢迎广大业主参加。（孙凌云） 星座物业服务处2017年3月10日</p>
						<p class="time">
							<span>2017-3-13 10:22:22</span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span>李四</span>
						</p>
					</li>
				</ul>

				<ul class="announce">
					<li>
						<h3><a href="property/announce_details">[公元国际]车辆停放友情提醒</a></h3>
						<p class="content"> 尊敬的门市房业主、租户：        您们好！        由于目前大厦车辆较多，门市房店面门口出现了车辆乱停乱放现象，已经影响到大厦的消防通道畅通。为了大厦所有办公人员的生命、财产安全，严禁车辆停留在消防通道上，请将车辆停在规定区域内</p>
						<p class="time">
							<span>2017-3-13 10:22:22</span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span>李四</span>
						</p>
					</li>
				</ul>

				<ul class="suggestion">
					<li>
						<h3>有关小区正确停车</h3>
						<p class="content"> 尊敬的门市房业主、租户：        您们好！        由于目前大厦车辆较多，门市房店面门和覅哦骚饭后i啊释迦佛i时代反击哦i是和参数看出你卡数据才能把你从拉萨的农村口出现了车辆乱停乱放现象，已经影响到大厦的消防通道畅通。为了大厦所有办公人员的生命、财产安全，严禁车辆停留在消防通道上，请将车辆停在规定区域内</p>
						<p class="time">
							<span>2017-3-13 10:22:22</span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span>李四</span>
						</p>
						<p class="response">居民委员会张三&nbsp;&nbsp;<span>回复了</span>&nbsp;&nbsp;李四&nbsp;&nbsp;<span>还能发哦苏附近哪家哦i啊师傅捏区分</span></p>
					</li>
				</ul>
			</div>

		</div>


		<div class="house-rent-service">
			<div class="house-announce">
				<p>我有建议要发布</p>
				<a href="property/suggest_publish">+发布建议</a>
			</div>
			<div class="culture-center">
				<img src="assets/img/culture.jpg" alt="">
			</div>
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
	<script src="assets/js/property.js"></script>
</body>
</html>