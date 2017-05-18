<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>生活缴费</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/free.css">
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
        <div class="property-online">生活缴费</div>

        <div class="property-tabcontrols">
            <div class="property-tab">
                <span class="active">水费</span>
                <span>电费</span>
                <span>小区保洁费</span>
                <span>车位费</span>
            </div>
            <div class="property-details">
                <ul class="active rule">
                    <li>
                        <h3>请扫描二维码</h3>
                        <img src="assets/img/water.png" alt="">
                    </li>
                </ul>
                <ul class="activities">
                    <li>
                        <h3>请扫描二维码</h3>
                        <img src="assets/img/electricity.png" alt="">
                    </li>
                </ul>
                <ul class="announce">
                    <li>
                        <h3>请扫描二维码</h3>
                        <img src="assets/img/clean.png" alt="">
                    </li>
                </ul>

                <ul class="announce">
                    <li>
                        <h3>请扫描二维码</h3>
                        <img src="assets/img/car.png" alt="">
                    </li>
                </ul>
            </div>

        </div>


        <div class="house-rent-service">
            <div class="house-announce">
                <p>我有信息要发布</p>
                <a href="">+发布规定</a>
                <a href="">+发布活动</a>
                <a href="">+发布公告</a>
            </div>
            <div class="culture-center">
                <img src="assets/img/culture.jpg" alt="">
            </div>
            <?php include "district_life.php"?>
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/district-service.js"></script>
<script src="assets/js/property.js"></script>
</body>
</html>