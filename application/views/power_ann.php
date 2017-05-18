<?php $loginedUser = $this -> session -> userdata('loginedUser');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物业管理委员会</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/power_ann.css">
</head>
<body>
<?php include "header.php"?>
<div id="property-title">
    <div class="wrapper">
        <div id="property-title-nav">
            <a href="welcome/index">首页</a>
            &nbsp;|&nbsp;
            <a href="power/index">物业管理委员会权限</a>
        </div>
    </div>
</div>

<div id="property-content">
    <div class="wrapper">
        <div class="property-online">物业在线</div>

        <div class="property-tabcontrols">
            <div class="property-tab">
                <span class="active">投诉建议</span>
                <span>小区规定</span>
                <span>小区活动</span>
                <span>小区公告</span>
            </div>
            <div class="property-details">
                <ul class="suggest active">
                    <?php foreach($suggests as $suggest){?>
                        <li>
                            <p class="content"> &nbsp;&nbsp;<?php echo $suggest->sug_content?></p>
                            <p class="time">
                                <span><?php echo $suggest->date?></span>&nbsp;&nbsp;居民&nbsp;&nbsp;
                                <span><?php echo $suggest->name?></span>
                                <?php
                                if($suggest -> state == 1){
                                    ?>
                                    <a class="noreq res-yes" href="javascript:void(0);">已回复</a>
                                    <?php
                                }else{
                                    ?>
                                    <a class="noreq res-no" href="power/res_suggest?id=<?php echo $suggest->suggest_id?>">未回复</a>
                                    <?php
                                }
                                ?>
                            </p>
                        </li>
                    <?php }?>

                    <!--分页-->
                    <div class="am-cf">
                        共<?php echo $total_rows;?>条记录
                        <div class="am-fr">
                            <div class="am-pagination">
                                <?php echo $this->pagination->create_links();?>
                            </div>
                        </div>
                    </div>
                    <!--分页-->
                </ul>
                <ul class="rule">
                    <?php foreach($rules as $rule){?>
                        <li>
                            <h3><a href="property/details/<?php echo $rule->pro_id;?>"><?php echo $rule->pro_title?></a></h3><a href="javascript:;" class="del del_rule" value="<?php echo $rule->pro_id?>">删除此规定</a><!--<a class="del" href="power/delete_rule?id=<?php /*echo $rule->pro_id*/?>">删除此规定</a>-->
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
                            <h3><a href="property/details/<?php echo $activity->pro_id;?>"><?php echo $activity->pro_title?></a></h3><a href="javascript:;" class="del del_activity" value="<?php echo $activity->pro_id?>">删除此活动</a>
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
                            <h3><a href="property/details/<?php echo $announce->pro_id;?>"><?php echo $announce->pro_title?></a></h3><a href="javascript:;" class="del del_announce" value="<?php echo $announce->pro_id?>">删除此公告</a>
                            <p class="content"><?php echo $announce->pro_content?></p>
                            <p class="time">
                                <span><?php echo $announce->date?></span>&nbsp;&nbsp;物业委员会&nbsp;&nbsp;
                                <span><?php echo $announce->name?></span>
                            </p>
                        </li>
                    <?php };?>
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
<?php include 'footer.php';?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/district-service.js"></script>
<script src="assets/js/power.js"></script>
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
                    alert('删除失败');
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
                    alert('删除失败');
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
                    alert('删除失败');
                }
            },'text')
        }
    })
</script>
</body>
</html>