<?php $loginedUser = $this -> session -> userdata('loginedUser');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物业在线</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/power_ann.css">
</head>
<body>
<?php include "header.php"?>
<div id="property-title">
    <div class="wrapper">
        <div id="property-title-nav">
            <a href="#">首页</a>
            &nbsp;|&nbsp;
            <a href="#">物业管理委员会权限</a>
        </div>
    </div>
</div>

<div id="property-content">
    <div class="wrapper">
        <div class="property-online">物业在线</div>

        <div class="property-tabcontrols">
            <div class="property-tab">
                <span class="active">小区规定</span>
                <span>小区活动</span>
                <span>小区公告</span>
                <span>投诉建议</span>
            </div>
            <div class="property-details">
                <ul class="active rule">
                    <?php foreach($rules as $rule){?>
                        <li>
                            <h3><a href="property/rule_details">[豪第坊]<?php echo $rule->pro_title?></a></h3><a href="javascript:;" class="del del_rule" value="<?php echo $rule->pro_id?>">删除此规定</a><!--<a class="del" href="power/delete_rule?id=<?php /*echo $rule->pro_id*/?>">删除此规定</a>-->
                            <p class="content"><?php echo $rule->pro_content?></p>
                            <p class="time">
                                <span><?php echo $rule->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
                                <span><?php echo $rule->name?></span>
                            </p>
                        </li>
                    <?php };?>
                </ul>
                <ul class="activities">
                    <?php foreach($activities as $activity){?>
                        <li>
                            <h3><a href="property/activities_details">[星座国际]<?php echo $activity->pro_title?></a></h3><a href="javascript:;" class="del del_activity" value="<?php echo $activity->pro_id?>">删除此活动</a>
                            <p class="content"><?php echo $activity->pro_content?></p>
                            <p class="time">
                                <span><?php echo $activity->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
                                <span><?php echo $activity->name?></span>
                            </p>
                        </li>
                    <?php };?>
                </ul>
                <ul class="announce">
                    <?php foreach($announces as $announce){?>
                        <li>
                            <h3><a href="property/announce_details">[公元国际]<?php echo $announce->pro_title?></a></h3><a href="javascript:;" class="del del_announce" value="<?php echo $announce->pro_id?>">删除此公告</a>
                            <p class="content"><?php echo $announce->pro_content?></p>
                            <p class="time">
                                <span><?php echo $announce->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
                                <span><?php echo $announce->name?></span>
                            </p>
                        </li>
                    <?php };?>
                </ul>


                <ul class="suggest">
                    <?php foreach($suggests as $suggest){?>
                        <li>
                            <p class="content"> &nbsp;&nbsp;<?php echo $suggest->sug_content?></p>
                            <p class="time">
                                <span><?php echo $suggest->date?></span>&nbsp;&nbsp;居民&nbsp;&nbsp;
                                <span><?php echo $suggest->name?></span><a class="noreq" href="power/res_suggest?id=<?php echo $suggest->suggest_id?>">未回复</a>
                            </p>
                        </li>
                    <?php }?>


                </ul>
            </div>

        </div>


        <div class="house-rent-service">
            <div class="house-announce">
                <p>我有信息要发布</p>
                <a href="power/rule">+发布规定</a>
                <a href="power/activity">+发布活动</a>
                <a href="power/announcement">+发布公告</a>
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
<script>


    $('.del_rule').on('click',function(){
        var str =$(this).attr('value');
        var _that = $(this);
        if(confirm("确认删除？")){
            $.get('power/delete_rule',{
                'id': str
            },function(data){
                if(data=='1'){
                    _that.parent().fadeOut(1000,function(){
                        $(this).remove();
                    });
                }else {
                    alert('删除数百');
                }
            },'text')
        }
    })

    $('.del_activity').on('click',function(){
        var str =$(this).attr('value');
        var _that = $(this);
        if(confirm("确认删除？")){
            $.get('power/delete_activity',{
                'id': str
            },function(data){
                if(data=='1'){
                    _that.parent().fadeOut(1000,function(){
                        $(this).remove();
                    });
                }else {
                    alert('删除数百');
                }
            },'text')
        }
    });

    $('.del_announce').on('click',function(){
        var str =$(this).attr('value');
        var _that = $(this);
        if(confirm("确认删除？")){
            $.get('power/delete_announce',{
                'id': str
            },function(data){
                if(data=='1'){
                    _that.parent().fadeOut(1000,function(){
                        $(this).remove();
                    });
                }else {
                    alert('删除数百');
                }
            },'text')
        }
    })
</script>
</body>
</html>