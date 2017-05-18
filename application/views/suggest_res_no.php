<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物业在线</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/suggest-res-no.css">
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
            <p class="suggest-res-yes"><a href="property/index">查看已回复建议</a></p>
            <ul class="res-details">
                <?php
                    foreach($suggests_no as $suggest_no){
                ?>
                    <li>
                        <p class="content"><?php echo $suggest_no->sug_content;?></p>
                        <p class="time">
                            <span><?php echo $suggest_no->name;?></span>&nbsp;&nbsp;居民&nbsp;&nbsp;
                            <span><?php echo $suggest_no->date;?></span>
                        </p>
                    </li>
                <?php
                    }
                ?>
                <!--分页-->
                <div class="am-cf">
                    共<?php echo $total_rows;?>条建议
                    <div class="am-fr">
                        <div class="am-pagination">
                            <?php echo $this->pagination->create_links();?>
                        </div>
                    </div>
                </div>
                <!--分页-->
            </ul>
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
</div>
<div id="footer">
    <p id="footer-link">
        友情链接:
        <a href="#">方正集团</a>
        <a href="#">北大资源</a>
    </p>
    <p id="footer-copyright">版权所有：北大资源集团商业有限公司版权所有 Copyright@2013 | 京ICP备13022849号 | 京ICP证130321号 | 京公网安备11010802014221号 | 京卫网审【2014】第0105号</p>
</div>


<input id="property-val" type="hidden" value="<?php echo $this->input->get('property')?>">

<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/district-service.js"></script>
<script src="assets/js/property.js"></script>
</body>
</html>