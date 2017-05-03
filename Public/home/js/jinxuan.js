/**
 * Created by Administrator on 2017/4/20.
 */
$(function(){
   var page=1;
    var $b1=$("#body_wrap .b1  ");
   var list_html= '<div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">'+
        '<div class="goods-image J_dynamic_imagebox ">'+
        '<img class="J_dynamic_img fill_img" src="../pubile/images/dajiaduzaikan01.jpg" alt="">'+
        '<a class="likeLink yahei">找相似</a>'+
        '</div>'+
        '<div class="goods-info">'+
        '<p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>'+
    '<div class="price">'+
        '<span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>'+
        '<p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">'+
        '¥&nbsp;<span>84</span></p>'+
    '<span class="fr like">1755<img src="../pubile/images/start.png" alt=""></span>'+
       '</div>'+
        '</div>'+
        '</div>';
    var lock = true;
    $(document).scroll( function() {
        if(!lock) return;
        var rate = $(window).scrollTop() / ($(document).height() - $(window).height());
        if(rate>= 0.7){
            $b1.find(".lazyData").append(list_html);
            page ++;
            lock = false;
        };

    } );
})


