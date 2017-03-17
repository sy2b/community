<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Paper Stack</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css" />

</head>
<body>
    <div class="container">
        <section id="content">
            <form action="">
                <h1>XX小区欢迎您的到来</h1>
                <div>
                    <input type="text" placeholder="帐号" required="" id="username" />
                    <p id="user_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="用户昵称" required="" id="name" />
                    <p id="name_msg"></p>
                </div>
                <div>
                    <input type="password" placeholder="密码" required="" id="password" />
                    <p id="pass_msg"></p>
                </div>
                <div>
                    <input type="password2" placeholder="确认密码" required="" id="password2" />
                    <p id="pass2_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="居住地址" required="" id="address" />
                    <p id="address_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="电话号码" required="" id="tele" />
                    <p id="tel_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="类型：物业管理员或居民" required="" id="type" />
                    <p id="type_msg"></p>
                </div>
                <div>
                    <input type="submit" value="注册" />
                    <a href="welcome/login">返回登录</a>
                </div>
            </form>
        </section>
    </div>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script>
        $(function(){
            $('#username').on('blur', function(){
                var $val = $(this).val();
                if($val== ''){
                    $('#user_msg').html('用户名不能为空');
                }else{
                    $('#user_msg').html('');
                }
                $.get('welcome/check_username',{
                    val : $val
                });
            });





        });


    </script>
</body>
</html>