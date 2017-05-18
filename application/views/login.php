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
            <form action="" method="post" id="submit-form">
                <!--111-->
                <h1>智慧小区登录入口</h1>
    <!--            hahahhvfgahahahahhh-->
                <div>
                    <input type="text" name="username" placeholder="Username" required="" id="username" autocomplete="off"/>
                </div>
                <div>
                    <input type="password" name="pass" placeholder="Password" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="登录" />
                    <!--<a href="#">忘了密码?</a>-->
                    <a href="welcome/reg">注册</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script>
        $('#submit-form').on('submit', function(){
            var $username  = $('#username').val();
            var $pass = $('#password').val();
            $.post('welcome/check_login', {
                username : $username,
                pass : $pass
            }, function(data){
                if(data == 'success'){
                    location.href = 'welcome/index';
                }else{
                    alert('请确认登录名或密码是否有误！！！');
                }
            }, 'text');
            return false;
        });
    </script>
</body>
</html>