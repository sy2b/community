<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>rule-details</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/announce-details.css">
</head>
<body>
<?php include "header.php"?>
<div id="announce-details">
		<div class="wrapper">
			<h3><?php echo $detail -> pro_title?></h3>
			<p class="time"><?php echo $detail -> date;?>&nbsp;|&nbsp;物业管理委员会</p>
			<p class="content"><?php echo $detail -> pro_content;?></p>
		</div>
	</div>


	<?php include 'footer.php';?>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/header.js"></script>
</body>
</html>