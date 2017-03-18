<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>district-service</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/district-service.css">
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
				<div class="house-rent-tab">
					<span class="active">租房</span>
					<span>小区兼职</span>
					<span>报修</span>
				</div>
				<div class="house-rent-details">
					<ul class="active">
						<?php
							foreach($houses as $house){
						?>
								<li>
									<div class="house-img">
										<img src="assets/img/house-rent/1.jpg" alt="">
										<span><?php echo $house -> rent_sell;?>中</span>
									</div>
									<div class="house-introduce">
										<div class="house-title">
											<a href="service/house_details?house_id=<?php echo $house->house_id;?>"><?php echo $house -> house_title;?></a>
										</div>
										<div class="house-type">
											<span><?php echo $house -> rent_sell;?></span>
											<span><?php echo $house -> house_size;?></span>
											<span class="contact">联系人：<?php echo $house->contact_name;?><?php echo $house->contact_tel;?></span>
										</div>
										<div class="house-intro">
											<p class="p1"><?php echo $house -> house_introduce;?></p>
											<p class="p2">
												<span>价位</span>
												<span><?php echo $house -> price;?></span>
											</p>
											<p class="p3"><?php echo $house -> post_date;?></p>
										</div>
									</div>
								</li>
						<?php
							}
						?>
					</ul>
					<ul class="hire-info">
						<?php
							foreach($jobs as $job){
						?>
							<li>
								<h3>
									<span><?php echo $job -> job_type;?></span>
									&nbsp;|&nbsp;
									<span><?php echo $job -> contact_name;?><?php echo $job -> content_tel;?></span>
								</h3>
								<p>
									<span class="span1">工作经验不限</span>&nbsp;/&nbsp;
									<span><?php echo $job -> date;?></span>
									&nbsp;/&nbsp;
									<span class="span2">￥<?php echo $job -> price;?></span>
								</p>
								<p><?php echo $job -> job_introduce;?></p>
							</li>
						<?php
							}
						?>


					</ul>
					<ul class="repairs">
						<?php
							foreach($repairs as $repair){
						?>
							<li>
								<h3>
									<span>联系人：<?php echo $repair->contact_name;?><?php echo $repair->content_tel;?></span>
								</h3>
								<p><span class="price">价格面议</span><span><?php echo $repair->price;?></span></p>&nbsp;&nbsp;
								<p class="repairs-details">(<?php echo $repair->date;?>)<?php echo $repair->job_introduce;?></p>
							</li>
						<?php
							}
						?>

					</ul>
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