//modal.js,验证登录是否成功
$(function(){
    $('#btn-ok').on('click', function(){
        $.post('welcome/check_login', {
            username : $('#username').val(),
            pass : $('#password').val()
        }, function(data){
            if(data == 'success'){
                $('#myModal').modal('hide');
                location.href = 'welcome/index';
            }else{
                alert('请确认登录名或密码是否有误！！！');
            }
        }, 'text');
    });
});