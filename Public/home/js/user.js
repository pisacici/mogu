function is_value(form_type) {
    var where_form="#"+form_type+" ";
    if ($(where_form+".user_name").val()==""){
        $(where_form+".error_username").css("display","block");
        $(where_form+".error_pwd").css("display","none");
        $(".error_code").css("display","none");
        $(".error_repwd").css("display","none");
        return false;
    }
    else {
        // $(".auth-box").css("display","block");
        if($(where_form+".user_password").val()==""){
            $(where_form+".error_username").css("display","none");
            $(".error_code").css("display","none");
            $(".error_repwd").css("display","none");
            $(where_form+".error_pwd").css("display","block");
            return false;
        }else {
            if(form_type=="login"){
                if ($("#auth_code").val()==""){
                    $(".error_username").css("display","none");
                    $(".error_pwd").css("display","none");
                    $(".error_code").css("display","block");
                    return false;
                }else {
                    return true;
                }
            }
            else if(form_type=="register")
            {
                if ($("#repwd").val()==""){
                    $(".error_username").css("display","none");
                    $(".error_pwd").css("display","none");
                    $(".error_repwd").css("display","block");
                    return false;
                }else {
                    return true;
                }
            }
            else {
                return true
            }
        }
    }
}
$(document).ready(function () {
    $(".login_a span").each(function () {
        $(".login_a span").eq(0).addClass("tab_active");
        $(this).on("click",function () {
            $(this).addClass("tab_active").siblings().removeClass("tab_active")
            $(this).mouseout(function () {
                $(this).addClass("tab_active")
            })
        });

    });


});