<div id="user">
    <div class="wrapper">
        <div>
            <?php
                if($loginedUser){
            ?>
                <a href="javascript:;" class="user-login">Hi!&nbsp;<?php echo $loginedUser-> name;?> 已登录</a>
                <span></span>
                <a href="welcome/outlogin" class="user-logout">退出</a>
            <?php
                }else{
            ?>
                <a href="welcome/reg" class="user-logout">注册</a>
                <span></span>
                <a href="welcome/login" class="user-logout">用户请登录</a>
            <?php
                }
            ?>


        </div>
    </div>
</div>
<div id="header">
    <div class="wrapper">
        <div class="district-name">
            <h1>智慧</h1>
            <span>0769-22787182</span>
        </div>
        <div class="district-date">
            <span class="date">2017-3-12</span>
            <span class="weekdays">星期日</span>
        </div>
    </div>
</div>
<div id="nav">
    <div class="wrapper">
        <ul id="nav-tab">
            <li class="nav-tab-first"><a href="welcome/index" class="selected">社区首页</a></li>
            <li><a href="property/index">物业在线</a></li>
            <li><a href="service/index">小区服务</a></li>
            <li><a href="welcome/life_talk">生活论坛</a></li>
            <li><a href="welcome/person">个人中心</a></li>
            <?php
                if( $loginedUser &&($loginedUser->user_type==1)){
            ?>
                <li><a href="power/index">物业委员会权限</a></li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
<script src="assets/js/jquery-1.12.4.js"></script>
<script>
</script>