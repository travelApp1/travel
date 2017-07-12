$(function () {
    //判断登陆状态
    $(".person").click(function(){
        $.ajax({
            url:"index.php?m=index&f=info&a=add",
            success:function(e){
                if(e=="nologin"){

                    $(".loginBox").css("display","block");
                    $(".regBox").css("display","none");
                }else if(e=="ok"){
                    location.href="index.php?m=index&f=info"
                }else{
                    alert(e);
                }
            }
        })
    })


    //注册

    $(".willReg").click(function(){
        var str=$(".regBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=reg",
            type:"post",
            data:str,
            success:function(e){

                $(".errorMessage").html(e).css("display","block").css("animation","opacity 2s linear");

                $(".errorMessage")[0].addEventListener("webkitAnimationEnd",function(){
                    $(".errorMessage").css("display","none")
                })

                if(e=="ok"){
                    $(".regBox input").val("");
                }

            }
        })
    })

    //登陆
    $(".willLogin").click(function(){
        var str=$(".loginBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=willLogin",
            type:"post",
            data:str,
            success:function(e){
                $(".errorMessage").html(e).css("display","block").css("animation","opacity 2s linear");

                $(".errorMessage")[0].addEventListener("webkitAnimationEnd",function(){
                    $(".errorMessage").css("display","none")
                })

                alert(e);
                if(e.indexOf("ok")>-1){
                    $(".errorMessage").html("ok,请等候").css("display","block").css("animation","opacity 2s linear");
                    setTimeout(function(){

                        location.href=e.substr(2);
                    },1000)
                }
            }


        })
    })
    
    
    
});