<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" />

</head>
<body>
<div class="container">
    <section id="content">
        <form action="">
            <!--111-->
            <h1>XX小区登录入口</h1>
<!--            hahahhvfgahahahahhh-->
            <div>
                <input type="text" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" value="登录" />
                <!--<a href="#">忘了密码?</a>-->
                <a href="welcome/reg">注册</a>
            </div>
        </form><!-- form -->
       <!-- <div class="button">
            <a href="welcome/reg">注册</a>
        </div>--><!-- button -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>