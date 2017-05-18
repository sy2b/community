<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布建议</title>
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
					<form action="property/save_suggest" method="post" id="form-submit">
						<input type="hidden" name="hid" value="<?php echo $loginedUser ? $loginedUser->user_id : '';?>">
						<p>
							<textarea name="suggest"></textarea>
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
	<?php include 'footer.php';?>
	<?php include 'dialog.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/district-service.js"></script>
	<script>
		$(function(){
			$('#form-submit').on('submit', function(){
				$user = $('[name="hid"]').val();
				$content = $('[name="suggest"]').val();
				var bFlag = true;
				if($user == ''){
					alert('请用户登录！！！');
					bFlag = false;
					$('#modal').show();
				}else{
					$('#modal').hide();
					if($content == ''){
						alert('发布建议不能为空！！！');
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