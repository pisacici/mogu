/**
 * Created by Administrator on 2017/4/18.
 */
$(function(){
    /*商品导航的左右滑动*/
    var $next=$(".bx-next");
    var $prev=$(".bx-prev");
    var $navlist=$(".nav-list");
    var x=0;
    /*下一栏导航*/
  $next.click(function(){
      for(var i=1;i<=1;i++){
          x=x-1210;
          if(x<=0){
              $prev.removeClass("disabled")
          }
          if(x<=-2420){
              $next.addClass("disabled")
          }
      }
          $navlist.css('transform','translate3d('+x+'px,0px,0px)');
  });
    /*上一栏导航*/
    $prev.click(function () {
        for(var i=1;i<=1;i++){
        x=x+1210;
            if(x<=-1210){
                $prev.removeClass("disabled")
            }
            if(x>=-1210){
                $next.removeClass("disabled")
            }
            if(x>=0){
                $prev.addClass("disabled")
            }
        }
        $navlist.css('transform','translate3d('+x+'px,0px,0px)');
    });


    /*点击更换图片*/
 var $navitem=$("#body_wrap .nav-item");
    var $active=$("#body_wrap .J_tab");
    var $poollist=$("#body_wrap .pool-list");


    // var list_html=' <div class="pool-item">'+
    //     '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" '+
    //     'class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">'+
    //     '<img class="J_dynamic_img fill_img" src="__PUBLIC__/home/images/1.1.jpg" alt="">'+
    //     '</a>'+
    //     '<div class="detail">'+
    //     '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >'+
    //     '<p class="content-title">蕾丝雪纺套装${num}</p>'+
    //     '</a>'+
    //     '<div class="user-wrap vertical-middle">'+
    //     '<img class="avatar" src="__PUBLIC__/home/images/1.2.jpg">'+
    //     '<span class="user-name">z_子晴</span>'+
    //     '</div>'+
    //     '</div>'+
    //     '</div>';

    $navitem.click(function () {
       // console.log($(this).index());//0,1,2,3,4,5
        var num=$(this).index();
       //  $navitem.eq(num);
        var this_tab= $(this).find(".J_tab");
           //remove
        $(".tab-active").removeClass("tab-active").addClass("item-mask")//移除上一个的tab-active的类，同时添加item-mask
           this_tab.addClass("tab-active").removeClass("item-mask");//当前的添加active类
           /* $navitem.find(".J_tab").siblings().removeClass("tab-active").addClass("item-mask");*/
           var tab_text = this_tab.attr('data-tag-name');   //获取属性里面的值
           this_tab.html(tab_text);

        /*点击更换内容*/
        var $poolitem=$("#body_wrap .pool-item");
        var $poollist=$("#body_wrap .pool-list");
        // console.log($poollist.find(".w-wall-segment"));
        $poollist.find(".pool-item").remove();

          p=1; lock=true;

//cat_id= 具体菜单的属性id
      getData(p,cat_id);
        // $poollist.find(".w-wall-segment").append(list_html);


      console.log(cat_id);

    });


    /*自动加载 瀑布流*/
   /* var H=$(document).scrollTop();*/
    /*console.log($(document).scrollTop());*/

      var p=1,lock=true,cat_id=$('.J_tab').attr("data-tag-id");
      console.log(cat_id);
      for (var i = 1; i <= $('.J_tab').length; i++) {
        console.log($(this).attr("data-tag-id"));
      }
      getData(p,cat_id);
      function getData(p,cat_id) {
          var html='';
           $.get(Redman_ajax_url,{p,cat_id},function  (rtn_data) {
                for (var i = 0 ; i <  rtn_data.data.length; i++) {
                    html+='<div class="pool-item">'+
                          '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" '+
                          'class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">'+
                          '<img class="J_dynamic_img fill_img" src="'+pub_path+'/'+rtn_data.data[i]['redman_path']+'" alt="">'+
                          '</a>'+
                          '<div class="detail">'+
                          '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >'+
                          '<p class="content-title">'+rtn_data.data[i]['redman_name']+'</p>'+
                          '</a>'+
                          '<div class="user-wrap vertical-middle">'+
                          '<img class="avatar" src="'+pub_path+'/'+rtn_data.data[i]['redman_thumb']+'">'+
                          '<span class="user-name">'+rtn_data.data[i]['redman_author']+'</span>'+
                          '</div>'+
                          '</div>'+
                          '</div>';
                }            
                if(rtn_data.data.length<=0){
                  lock=false;
                }
                else{
                  lock=true;             
                  $poollist.find(".w-wall-segment").append(html);
                }
                
            })
        };
    $(document).scroll( function() {
        $(window).scrollTop()       //这个方法是当前滚动条滚动的距离
        $(window).height()     //获取当前窗体的高度
        $(document).height()    //获取当前文档的高度
        var bot = 100;       //bot是底部距离的高度
        
        //当底部基本距离+滚动的高度〉=文档的高度-窗体的高度时；
        /* console.log((bot + $(window).scrollTop()) - ($(document).height() - $(window).height()));*/
        if((bot + $(window).scrollTop()) >= ($(document).height() - $(window).height())){
          if(lock){
             ++p;
              getData(p,cat_id);
          }
          lock=false;
        }
    } );
})
