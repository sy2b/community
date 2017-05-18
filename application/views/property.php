<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
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
				<a href="welcome/index">首页</a>
				&nbsp;|&nbsp;
				<a href="property/index">物业在线</a>
			</div>
		</div>
	</div>

<div id="property-content">
	<div class="wrapper">
		<div class="property-online">物业在线</div>

		<div class="property-tabcontrols">
			<div class="property-tab">
				<span class="active">小区建议</span>
				<span>小区规定</span>
				<span>小区活动</span>
				<span>小区公告</span>
			</div>
			<div class="property-details">
				<p class="suggest-res-no"><a href="property/suggest_res_no">查看未回复建议</a></p>
				<ul class="suggestion active">
					<?php foreach($suggests as $suggest){?>
						<li>
							<p class="content"> &nbsp;&nbsp;<?php echo $suggest->sug_content?></p>
							<p class="time">
								<span><?php echo $suggest->date?></span>&nbsp;&nbsp;居民&nbsp;&nbsp;
								<span><?php echo $suggest->name?></span>
							</p>
							<p class="response">居民委员会<span><?php echo $suggest -> res_name;?></span>&nbsp;&nbsp;回复了&nbsp;&nbsp;<span><?php echo $suggest -> name;?></span>&nbsp;&nbsp;<?php echo $suggest -> res_content;?> <span><?php echo $suggest->res_date;?></span></p>

						</li>
					<?php }?>

					<!--分页-->
					<div class="am-cf">
						共<?php echo $total_rows;?>条记录
						<div class="am-fr">
							<div class="am-pagination">
								<?php echo $this->pagination->create_links();?>
							</div>
						</div>
					</div>
					<!--分页-->
				</ul>

				<ul class="rule">
					<?php foreach($rules as $rule){?>
					<li>
						<h3><a href="property/details/<?php echo $rule->pro_id;?>"><?php echo $rule->pro_title?></a></h3>
						<p class="content"><?php echo $rule->pro_content?></p>
						<p class="time">
							<span><?php echo $rule->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span><?php echo $rule->name?></span>
						</p>
					</li>
					<?php };?>
				</ul>

				<ul class="activities">
					<?php foreach($activities as $activity){?>
					<li>
						<h3><a href="property/details/<?php echo $activity->pro_id;?>"><?php echo $activity->pro_title?></a></h3>
						<p class="content"><?php echo $activity->pro_content?></p>
						<p class="time">
							<span><?php echo $activity->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span><?php echo $activity->name?></span>
						</p>
					</li>
					<?php };?>
				</ul>

				<ul class="announce">
					<?php foreach($announces as $announce){?>
					<li>
						<h3><a href="property/details/<?php echo $announce->pro_id;?>"><?php echo $announce->pro_title?></a></h3>
						<p class="content"><?php echo $announce->pro_content?></p>
						<p class="time">
							<span><?php echo $announce->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
							<span><?php echo $announce->name?></span>
						</p>
					</li>
					<?php };?>
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
	<?php include 'footer.php';?>
	<input id="property-val" type="hidden" value="<?php echo $this->input->get('property')?>">
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
	<script src="assets/js/property.js"></script>
</body>
</html>