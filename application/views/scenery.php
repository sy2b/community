<?php $loginedUser = $this -> session -> userdata('loginedUser')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小区服务</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/district-service.css">
    <link rel="stylesheet" href="assets/css/scenery.css">
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

<div id="house-rent-content">
</div>
<div id="house-rent-info">
    <div class="wrapper">
        <div id="view">
            <h1 id="new">小区新风采</h1>
            <div class="frame">
                <img src="assets/img/scenery_1.jpg">
                <h4 class="title">多功能活动室</h4>
                <p>多功能活动室位于新文化中心二楼，活动室配有把杆、瑜伽球、形体垫等器具，供业主们在闲暇时放松身心使用。为了丰富业主们的业余时间，新文化中心联合专业的培训机构，目前已开展了瑜伽、肚皮舞等多项培训供业主选择。</p>
            </div>

            <div class="frame">
                <img src="assets/img/scenery_2.jpg">
                <h4 class="title">资源家体验区</h4>
                <p>资源家体验区设有电脑和资源PAD，联接WIFI网络，在这里，可以方便业主访问“资源家”网站，采购自己心仪的商品、了解集团为业主提供丰富多彩的特色服务。对于不擅长上网操作的业主，我们的客服员会主动地作出介绍和提供帮助</p>
            </div>

            <div class="frame">
                <img src="assets/img/scenery_3.jpg">
                <h4 class="title">棋艺室</h4>
                <p>为了丰富业户在日常的生活，提供良好的休闲娱乐环境，新文化内设置休闲娱乐区，棋艺休闲区秉承文明，健康的理念，为业主打造一个文明舒适的社区休闲场所，为社区业主们的业余生活带来了欢乐，融洽了邻里关系，拉近了业主之间的距离。</p>
            </div>

            <div class="frame">
                <img src="assets/img/scenery_5.jpg">
                <h4 class="title">书画室</h4>
                <p>书画室是新文化中心专为喜爱书画艺术的业主们精心准备的创作空间，这里笔墨纸砚一应俱全。闲暇时，业主们可以在这里挥毫泼墨，陶冶情操，书写畅意人生。</p>
            </div>

            <div class="frame">
                <img src="assets/img/scenery_7.jpg">
                <h4 class="title">4:30课堂</h4>
                <p> 新文化中心特地为下午放学的孩子们开办了4:30课堂。为他们提供一个安静、舒适的学习环境,孩子们认真作业，相互探讨;我们还与专业的教育培训机构合作，开设了英语和硬笔书法培训，每周末，英语和书法课兴趣班等在这里进行。</p>
            </div>

            <div class="frame">
                <img src="assets/img/scenery_8.jpg">
                <h4 class="title">社区金融服务中心</h4>
                <p>为适应居民生活的个性化、多元化的发展趋势，以满足社区内业主在金融产品及服务的全方位需求为目标，北大资源物业联合方正证券设立“社区金融服务中心”，提供具有社区亲和力的金融产品及服务。</p>
            </div>
        </div>


        <div class="house-rent-service">
            <div class="house-announce">
                <p>我有信息要发布</p>
                <a href="">+发布租房</a>
                <a href="">+发布兼职</a>
                <a href="">+发布报修</a>

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
</body>
</html>