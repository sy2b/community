<?php
$loginedUser = $this->session->userdata('loginedUser');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>小区服务</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
	
	<?php include "header.php"?>

	<div id="carousel">
		<div class="wrapper">
			<div id="carousel-container">
				<div id="carousel-imgs">
					<img src="assets/img/carousel/1.jpg" alt="">
					<img src="assets/img/carousel/2.jpg" alt="">
					<img src="assets/img/carousel/3.jpg" alt="">
					<img src="assets/img/carousel/4.jpg" alt="">
				</div>
				<ul id="carousel-tab">
					<li class="selected"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div id="banner">
				<p>社区服务</p>
				<div id="district-life-service">
						<ul class="selected">
							<li><a href="property/scenery">
								<img src="assets/img/service/icon-district.png" alt="">
								<p>社区实景</p>
							</a></li>
							<li><a href="property/index">
								<img src="assets/img/service/dongtai.png" alt="">
								<p>动态通知</p>
							</a></li>
							<li><a href="property/free">
								<img src="assets/img/service/fee.png" alt="">
								<p>生活缴费</p>
							</a></li>
							<li><a href="service/index">
								<img src="assets/img/service/repairs.png" alt="">
								<p>在线报修</p>
							</a></li>
						</ul>
						<ul>
							<li><a href="#">
								<img src="assets/img/service/service.png" alt="">
								<p>贴心服务</p>
							</a></li>
							<li><a href="welcome/life_talk">
								<img src="assets/img/service/talk.png" alt="">
								<p>津津乐道</p>
							</a></li>
							<li><a href="#">
								<img src="assets/img/service/help.png" alt="">
								<p>互助</p>
							</a></li>
							<li><a href="property/suggest_res_no">
								<img src="assets/img/service/suggestion.png" alt="">
								<p>投诉建议</p>
							</a></li>
						</ul>
						<div class="district-life-tab">
							<span class="selected"></span>
							<span></span>
						</div>
					</div>

			</div>
		</div>
	</div>
	<div id="interest">
		<div class="wrapper">
			<div id="interest-circle">
				<div class="interest-circle-title">
					<h3>小区分布图</h3>
				</div>
				<ul class="interest-circle-content">
					<img src="assets/img/qqq.jpg" alt="">
				</ul>
			</div>
			<div id="interest-topic">
				<div class="interest-topic-title">最新公示</div>
				<ul class="interest-topic-content">
					<?php foreach($all as $single){?>
					<li>
						<span>[<?php echo $single->type_name ?>]</span>
						<a href="property/details/<?php echo $single -> pro_id;?>"><?php echo $single->pro_content?></a>
						<span><?php echo $single->date?></span>
						<!--<span>来自：文化中心胡林</span>-->
					</li>
					<?php }?>

				</ul>
			</div>
		</div>
	</div>
	<div id="activities">
		<div class="wrapper">
			<div id="activities-title">
				<ul id="activities-tab">
					<li class="selected"><a class="selected" href="javascript:void(0)">小区规定</a></li>
					<li><a href="javascript:void(0)">小区活动</a></li>
					<li><a href="javascript:void(0)">小区公告</a></li>
				</ul>
				<div id="culture-center">
					<h3>新文化中心</h3>
				</div>
			</div>
			<div id="activities-content">
				<div id="activities-con-details">
					<div class="selected">
						<ul>
							<?php foreach($rules as $rule){?>
							<li>
								<p><a href="property/details/<?php echo $rule->pro_id;?>"><?php echo $rule->pro_content ?></a></p>
								<p><?php echo $rule->date ?>&nbsp;&nbsp;居民委员会</p>
							</li>
							<?php };?>
						</ul>
						<a href="property/index?property=规定" class="read-more">+more+</a>
					</div>
					<div>
						<ul>
							<?php foreach($activities as $activitie){?>
								<li>
									<p><a href="property/details/<?php echo $activitie->pro_id;?>"><?php echo $activitie->pro_content ?></a></p>
									<p><?php echo $activitie->date ?>&nbsp;&nbsp;居民委员会</p>
								</li>
							<?php };?>
						</ul>
						<a href="property/index?property=活动" class="read-more">+more+</a>
					</div>
					<div>
						<ul>
							<?php foreach($announces as $announce){?>
								<li>
									<p><a href="property/details/<?php echo $announce->pro_id;?>"><?php echo $announce->pro_content ?></a></p>
									<p><?php echo $announce->date ?>&nbsp;&nbsp;居民委员会</p>
								</li>
							<?php };?>
						</ul>
						<a href="property/index?property=公告" class="read-more">+more+</a>
					</div>

				</div>
				<div id="culture-details">
					<img src="assets/img/culture.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/district-service.js"></script>
</body>
</html>