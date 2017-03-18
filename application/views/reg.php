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
            <form action="welcome/check_reg" method="post">
                <h1>XX小区欢迎您的到来</h1>
                <div>
                    <input type="text" placeholder="帐号" id="username" name="username"/>
                    <p id="user_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="用户昵称" id="name" name="name"/>
                    <p id="name_msg"></p>
                </div>
                <div>
                    <input type="password" placeholder="密码" id="password" name="password"/>
                    <p id="pass_msg"></p>
                </div>
                <div>
                    <input type="password" placeholder="确认密码" id="password2" name="password2"/>
                    <p id="pass2_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="居住地址" id="address" name="address"/>
                    <p id="address_msg"></p>
                </div>
                <div>
                    <input type="text" placeholder="电话号码" id="telephone" name="telephone"/>
                    <p id="tel_msg"></p>
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
            //用户名验证
            $('#username').on('blur', function(){
                var $val = $(this).val();
                if($val== ''){
                    $('#user_msg').html('用户名不能为空');
                }else{
                    $('#user_msg').html('');
                    $.get('welcome/check_username',{
                        val : $val
                    },function(data){
                        if(data == 'success'){
                            $('#user_msg').html('用户名已存在');
                        }else{
                            $('#user_msg').html('');
                        }
                    },'text');
                }
            });
            //昵称验证
            $('#name').on('blur', function(){
                if($(this).val() == ''){
                    $('#name_msg').html('昵称不能为空');
                }else {
                    $('#name_msg').html('');
                }
            });
            //密码验证
            $('#password').on('keydown', function(){
                if($(this).val().length < 4){
                    $('#pass_msg').html('输入密码不得少于四位');
                }else{
                    $('#pass_msg').html('');
                }
            });

            $('#password2').on('blur', function(){
                if($(this).val() != $('#password').val()){
                    $('#pass2_msg').html('两次密码不一致');
                }else{
                    $('#pass2_msg').html('');
                }
            });

            //地址验证
            $('#address').on('blur', function(){
                if($(this).val() == ''){
                    $('#address_msg').html('地址不能为空');
                }else{
                    $('#address_msg').html('');
                }
            });

            //电话验证
            $('#telephone').on('blur', function(){
                if($(this).val() == ''){
                    $('#tel_msg').html('电话不能为空');
                }else{
                    $('#tel_msg').html('');
                }
            });
        });


    </script>
</body>
</html>