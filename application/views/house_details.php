<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>district-service</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/house_details.css">
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
            <h3>房屋详情</h3>
            <div class="house-content">
                <div class="house-img">
                    <img src="<?php echo $house -> house_img;?>" alt="">
                </div>
                <div class="house-details">
                    <p class="house-title"><?php echo $house -> house_title;?></p>
                    <p class="house-type">
                        出售/出租：
                        <span><?php echo $house -> rent_sell;?></span>&nbsp;&nbsp;&nbsp;
                        户型：
                        <span><?php echo $house -> house_size;?></span>&nbsp;&nbsp;&nbsp;
                        价格：
                        <span><?php echo $house -> price;?></span>
                    </p>
                    <p class="content"><?php echo $house -> house_introduce;?></p>
                    <p class="contact"><?php echo $house -> name;?>&nbsp;&nbsp;发布于&nbsp;&nbsp;<?php echo $house -> post_date;?></p>
                    <p class="contact-way"><?php echo $house -> contact_name;?>&nbsp;&nbsp;<?php echo $house -> contact_tel;?></p>
                </div>
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
</html>f