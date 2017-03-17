<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物业在线</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/push_rule.css">
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
        <div class="property-online"></div>
        <div class="property-rule">
            <form id="rule" action="" method="post" >
            <fieldset>
                <legend>新规定</legend>
                <label for="title">标题:</label>
                <input id="title" type="text" class="title" placeholder="请在此填写标题"><br>
                <label for="content">内容:</label>
                <textarea id="content" rows="2" cols="100" class="content" placeholder="请在此填写规定内容"></textarea><br>
                <input type="submit" value="发布" class="push">
                <input type="reset" value="重置" class="reset">

            </fieldset>
        </form>
        </div>

        <div class="house-rent-service">
            <div class="house-announce">
                <p>我有信息要发布</p>
                <a href="power/rule">+发布规定</a>
                <a href="power/activity">+发布活动</a>
                <a href="power/announcement">发布公告</a>
            </div>
            <div class="culture-center">
                <img src="assets/img/culture.jpg" alt="">
            </div>
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
<script src="assets/js/property.js"></script>
</body>
</html>