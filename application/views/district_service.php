<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>小区服务</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/district-service.css">
	<link rel="stylesheet" href="assets/css/pagination.css">
</head>
<body>
	<?php include "header.php"?>
	
	<div id="house-rent">
		<div class="wrapper">
			<div id="house-rent-nav">
				<a href="welcome/index">首页</a>
				&nbsp;|&nbsp;
				<a href="service/index">小区服务</a>
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
					<ul class="active houses">
						<li v-for="house in houseList">
							<div class="house-img">
								<img :src="house.house_img" alt="">
								<span v-text="house.rent_sell"></span>
							</div>
							<div class="house-introduce">
								<div class="house-title">
									<a :href="'service/house_details?house_id='+house.house_id" v-text="house.house_title"></a>
								</div>
								<div class="house-type">
									<span v-text="house.rent_sell"></span>
									<span v-text="house.house_size"></span>
									<span class="contact" v-text="'联系人：'+house.contact_name+house.contact_tel"></span>
								</div>
								<div class="house-intro">
									<p class="p1" v-text="house.house_introduce"></p>
									<p class="p2">
										<span>价位</span>
										<span v-text="house.price"></span>
									</p>
									<p class="p3" v-text="house.post_date"></p>
								</div>
							</div>
						</li>
						<house-pagination :total="totalRecords" :page-size="pageSize" v-on:paginate="loadData"></house-pagination>
					</ul>
					<ul class="hire-info">
						<li v-for="job in jobList">
							<h3>
								<span v-text="job.job_name"></span>
								&nbsp;|&nbsp;
								<span v-text="job.contact_name+job.content_tel"></span>
							</h3>
							<p>
								<span class="span1">工作经验不限</span>&nbsp;/&nbsp;
								<span v-text="job.date"></span>
								&nbsp;/&nbsp;
								<span class="span2" v-text="'￥'+job.price"></span>
							</p>
							<p v-text="job.job_introduce"></p>
						</li>
						<hire-pagination :total="totalRecords" :page-size="pageSize" v-on:paginate="loadData"></hire-pagination>
					</ul>
					<ul class="repairs">
						<li v-for="repair in repairList">
							<h3>
								<span v-text="'联系人：'+repair.contact_name+repair.content_tel"></span>
							</h3>
							<p><span class="price">价格面议</span><span v-text="repair.price"></span></p>&nbsp;&nbsp;
							<p class="repairs-details">({{repair.date}}){{repair.job_introduce}}</p>
						</li>
						<repair-pagination :total="totalRecords" :page-size="pageSize" v-on:paginate="loadData"></repair-pagination>
					</ul>

				</div>
				
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
	<script src="assets/js/vue.min.js"></script>
	<script src="assets/js/axios.min.js"></script>
	<script src="assets/js/pagination.js"></script>
</body>
</html>