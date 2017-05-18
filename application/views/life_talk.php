<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>生活论坛</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/life-talk.css">
</head>
<body>
<?php include "header.php"?>
	<div id="house-rent">
		<div class="wrapper">
			<div id="house-rent-nav">
				<a href="welcome/index">首页</a>
				&nbsp;|&nbsp;
				<a href="welcome/life_talk">生活论坛</a>
			</div>
		</div>
	</div>
	<div id="house-img"></div>
	<div id="house-rent-info">
		<div class="wrapper">
			<div class="life-talk">
				<h3>社区互动</h3>
				<?php
					foreach($talks as $index => $talk){
				?>
						<div class="publish-talk">
							<p class="time">【<?php echo $index + 1?>楼】<?php echo $talk -> name;?>&nbsp;&nbsp;发表于&nbsp;&nbsp;<?php echo $talk -> date;?></p>
							<p class="content"><?php echo $talk -> talk_content;?></p>
						</div>
				<?php
					}
				?>

				<!--分页-->
				<div class="am-cf">
					共<?php echo $total_rows;?>条记录
					<div class="am-fr">
						<ul class="am-pagination">
							<?php echo $this->pagination->create_links();?>
						</ul>
					</div>
				</div>
				<!--分页-->


				<div class="publish-form">
					<form action="welcome/add_talk" method="post" id="form-submit">
						<input type="hidden" name="hid" value="<?php echo $loginedUser ? $loginedUser->user_id : ''?>">
						<p>
							<textarea name="talk_content"></textarea>
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
	<?php include 'footer.php';?>
	<?php include 'dialog.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
    <script>
		$(function(){
			$('#form-submit').on('submit', function(){
				$user = $('[name="hid"]').val();
				$content = $('[name="talk_content"]').val();
				var bFlag = true;
				if($user == ''){
					alert('用户请登录！！！');
					bFlag = false;
					$('#modal').show();
				}else{
					$('#modal').hide();
					if($content == ''){
						alert('发布信息不允许为空！！！');
						bFlag = false;
					}else{
						bFlag = true;
					}
				}
				return bFlag;
			});
		});
	</script>
</body>
</html>