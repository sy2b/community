<!-- Modal -->
<style>
    #modal{
        display: none;
    }
    #modal .mask{
        position: absolute;
        top: 0;
        left: 0;
        background: #000;
        opacity: 0.6;
        filter: alpha(opacity=60);
    }
    #modal .content{
        width: 40%;
        height: 300px;
        background: #fff;
        position: absolute;
        margin-left: -20%;
        margin-top: -150px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
    }
    #modal .content h3{
        width: 100%;
        height: 50px;
        text-align: center;
        line-height: 50px;
        color: #563D64;
    }
    #modal .content p{
        width: 100%;
        height: 40px;
        line-height: 40px;
        text-align: center;
        margin: 10px 0;
        color: #563D64;
    }
    #modal input{
        width: 200px;
        height: 30px;
        border: 1px solid #563D64;
        outline: none;
        text-indent: 10px;
    }
    #modal .content button{
        width: 60px;
        height: 30px;
        border: 0;
        outline: none;
        background: #ccc;
        color: #fff;
        margin: 0 5px;
        cursor: pointer;
    }
    #modal .content a{
        color: #00b4dc;
        font-size: 14px;
    }
</style>
<div id="modal">
    <div class="mask"></div>
    <div class="content">
        <h3>请用户登录</h3>
        <p>
            用户名&nbsp;&nbsp;<input type="text" name="username">
        </p>
        <p>
            密&nbsp;&nbsp;&nbsp;码&nbsp;&nbsp;<input type="password" name="password">
        </p>
        <p><button id="btn-sure">确定</button><button id="btn-cancle">取消</button></p>
        <p><a href="welcome/reg">注册</a></p>
    </div>
</div>
<script>
    $(function(){
        $winWidth = $(document.body).width();
        $winHeight = $(document.body).height();
        $modal = $('#modal');
        $content = $('#modal .content');
        $mask = $('#modal .mask');
        $wContent = $content.width();
        $hContent = $content.height();
        $mask.css({
            width : $winWidth,
            height : $winHeight
        });
        $content.css({
            left : ($winWidth - $wContent) / 2,
            top : ($winHeight - $hContent) / 2
        });
        $('#btn-cancle').on('click', function(){
            $modal.hide();
        });
        //验证登录
        $('#btn-sure').on('click', function(){
            $.post('welcome/check_login', {
                username : $('[name="username"]').val(),
                pass : $('[name="password"]').val()
            }, function(data){
                if(data == 'success'){
                    $modal.hide();
                    location.href = 'welcome/index';
                }else{
                    alert('请确认登录名或密码是否有误！！！');
                }
            }, 'text');
        });
    })
</script>




