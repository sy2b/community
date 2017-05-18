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
            <form action="welcome/check_reg" method="post" id="submit-form">
                <h1>XX小区欢迎您的到来</h1>
                <div>
                    <input type="text" placeholder="帐号" id="username" name="username" autocomplete="off"/>
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
                    <input type="text" placeholder="电话号码" id="telephone" name="telephone"/>
                    <p id="tel_msg"></p>
                </div>
                <div class="address">
                    <span>居住地址</span>
                    <select name="building" id="building">
                        <option value="楼区">楼区</option>
                        <option value="A">A&nbsp;栋</option>
                        <option value="B">B&nbsp;栋</option>
                        <option value="C">C&nbsp;栋</option>
                        <option value="D">D&nbsp;栋</option>
                        <option value="E">E&nbsp;栋</option>
                        <option value="F">F&nbsp;栋</option>
                        <option value="G">G&nbsp;栋</option>
                    </select>
                    <select name="layer" id="layer">
                        <option value="楼层">楼层</option>
                    </select>
                    <select name="family" id="family">
                        <option value="单元">单元</option>
                    </select>
                    <p id="address_msg"></p>
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
            //居住地址select
            var oLayer = document.getElementById('layer');
            for(var i=0; i<15; i++){
                var oOption = document.createElement('option');
                oOption.value = (i + 1);
                oOption.innerHTML = '第&nbsp;'+ (i + 1) +'&nbsp;层';
                oLayer.appendChild(oOption);
            }

            var oFamily = document.getElementById('family');
            for(var i=0; i<3; i++){
                var oOption = document.createElement('option');
                oOption.value = (i + 1);
                oOption.innerHTML = (i + 1) + '&nbsp;单元';
                oFamily.appendChild(oOption);
            }


            var obj = {
                bSubmit : true
            };//标识位，是否允许表单提交

            //用户名验证
            $('#username').on('blur', function(e, param){
                var $val = $(this).val();
                if($val == ''){
                    $('#user_msg').html('用户名不能为空');
                    obj.bSubmit = false;
                }else{
                    $.get('welcome/check_username',{
                        val : $val
                    },function(data){
                        if(data == 'success'){
                            //param && (param.bSubmit = false);
                            $('#user_msg').html('用户名已存在');
                            obj.bSubmit = false;
                        }else{
                            $('#user_msg').html('');
                            obj.bSubmit = true;
                        }

                    },'text');
                }
            });

            //昵称验证
            $('#name').on('blur', function(e, param){
                if($(this).val() == ''){
                    $('#name_msg').html('昵称不能为空');
                    param && (param.bSubmit = false);
                }else {
                    $('#name_msg').html('');

                }
            });
            //密码验证
            $('#password').on('keyup', function(e, param){
                console.log($(this).val().length);
                if($(this).val().length < 4){
                    param && (param.bSubmit = false);
                    $('#pass_msg').html('输入密码不得少于四位');
                }else{
                    $('#pass_msg').html('');
                }
            });

            $('#password2').on('blur', function(e, param){
                if($(this).val() != $('#password').val()){
                    $('#pass2_msg').html('两次密码不一致');
                    param && (param.bSubmit = false);
                }else{
                    $('#pass2_msg').html('');
                }
            });

            //地址验证
            var $val1,$val2,$val3;//全局变量
            $('#building').on('change', function(e, param){
                $val1 = $(this).children('option:selected').val();
                var reg = /\w/;
                if(reg.test($val1)){
                    console.log(true);
                    $('#address_msg').html('');
                }else{
                    console.log(false);
                    $('#address_msg').html('请选择居住地址！！！');
                    param && (param.bSubmit = false);

                }
            });
            $('#layer').on('change', function(e, param){
                $val2 = $(this).children('option:selected').val();
                var reg = /\d/;
                if(reg.test($val2)){
                    console.log(true);
                    $('#address_msg').html('');
                }else{
                    console.log(false);
                    $('#address_msg').html('请选择居住地址！！！');
                    param && (param.bSubmit = false);
                }
            });
            $('#family').on('change', function(e, param){
                $val3 = $(this).children('option:selected').val();
                var reg = /\d/;
                if(reg.test($val3)){
                    console.log(true);
                    $('#address_msg').html('');
                }else{
                    console.log(false);
                    $('#address_msg').html('请选择居住地址！！！');
                    param && (param.bSubmit = false);

                }
            });

            //电话验证
            $('#telephone').on('blur', function(e, param){
                if($(this).val() == ''){
                    $('#tel_msg').html('电话不能为空');
                    param && (param.bSubmit = false);
                }else{
                    var str = $(this).val();
                    var reg =  /^(13|15)\d{9}$/;
                    if(reg.test(str)){
                        $('#tel_msg').html('');
                    }else{
                        $('#tel_msg').html('请输入13或15开头11位手机号码');
                        param && (param.bSubmit = false);
                    }
                }
            });


            //提交表单验证
            $('#submit-form').on('submit', function(){
                $('#username').trigger('blur');
                $('#name').trigger('blur', obj);
                $('#password').trigger('keyup', obj);
                $('#password2').trigger('blur', obj);
                $('#address').trigger('blur', obj);
                $('#telephone').trigger('blur', obj);
                $('#building').trigger('change', obj);
                $('#layer').trigger('change', obj);
                $('#family').trigger('change', obj);
                console.log(obj.bSubmit);
                return obj.bSubmit;
            });
        });
    </script>
</body>
</html>