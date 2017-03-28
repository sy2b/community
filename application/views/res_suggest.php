<?php $loginedUser = $this -> session -> userdata('loginedUser');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>回复建议</title>
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
            <a href="#">物业委员会权限</a>
        </div>
    </div>
</div>
<div id="house-img"></div>
<div id="house-rent-info">
    <div class="wrapper">
        <div class="life-talk">
            <h3>回复建议</h3>

            <div class="publish-form">
                <form action="power/save_res" method="post">
                    <input type="hidden" value="<?php echo $this->input->get('id')?>" name="sid">
                    <p>
                        <textarea name="content"></textarea>
                    </p>
                    <p>
                        <input type="submit" class="submit" value="回复建议">
                        <span>文明上网，理性发言</span>
                    </p>
                </form>
            </div>
        </div>


        <div class="house-rent-service">
            <div class="house-announce">
                <p>我有信息要发布</p>
                <a href="power/rule">+发布规定</a>
                <a href="power/activity">+发布活动</a>
                <a href="power/announcement">发布公告</a>
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
</body>
</html>