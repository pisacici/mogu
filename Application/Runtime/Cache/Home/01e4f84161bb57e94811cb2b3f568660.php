<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <title>Title</title>
    <!-- <link rel="stylesheet" href="../../lib/Bootstrap3.3.7/css/bootstrap.css">-->
    <link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/Redman.css">

    <script type="text/javascript">

        var pub_path="/mogu/Public";//这一个是ajax提交的修改地址
        var Redman_ajax_url="<?php echo U('Redman/ajax_get');?>";//这一个是ajax提交的修改地址
    </script>

</head>
<body>
<div id="body_wrap">
    <!--最上面的图片-->
    <div class="banner-wrap" style="background-color:#ffcbae;">
        <a class="banner" href="javascript:;" target="_self" style="cursor: default;">
            <img src="/mogu/Public/home/images/meinv.jpg"> </a></div>
    <!--中间的导航以及标题-->
    <div class="nav_warp">
        <p class="nav-title"><a href="http://www.mogujie.com">首页</a> &gt; 红人穿搭</p>

        <!--红人搭配布局-->
        <div class="bx-wrapper">
            <div class="bx-viewport">
                <ul class="nav-list clearfix">
                    <?php if(is_array($redman_parent)): $i = 0; $__LIST__ = $redman_parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li class="nav-item">
                            <div class="J_tab item-mask" data-tag-name="<?php echo ($value['redman_name']); ?>" data-tag-id="<?php echo ($value['redman_id']); ?>"><?php echo ($value['redman_name']); ?></div>
                            <div class="item-tab mr10 c1"><?php echo ($value['redman_name']); ?></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- <li class="nav-item">
                        <div class="J_tab   item-mask" data-content-id="11l1lyc" data-tag-name="小个子专属" data-tag-id="1x4">
                            </div>
                        <div class="item-tab mr10 c2">小个子专属</div>
                    </li>
                    <li class="nav-item">
                        <div class="J_tab item-mask" data-content-id="11kxmui" data-tag-name="T恤x半身裙"
                             data-tag-id="11bo"></div>
                        <div class="item-tab mr10 c3">T恤x半身裙</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kuzhq" data-tag-name="高颜值衬衫"
                             data-tag-id="1wq"></div>
                        <div class="item-tab mr10 c4">高颜值衬衫</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kws2e" data-tag-name="学生党专属"
                             data-tag-id="1xm"></div>
                        <div class="item-tab mr10 c5">学生党专属</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kxk3y" data-tag-name="微胖巧搭"
                             data-tag-id="1x6"></div>
                        <div class="item-tab mr10 c6">微胖巧搭</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k8kxu" data-tag-name="一分钟出门装"
                             data-tag-id="115w"></div>
                        <div class="item-tab mr10 c7">一分钟出门装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kwyhg" data-tag-name="半身裙套装"
                             data-tag-id="1ww"></div>
                        <div class="item-tab mr10 c8">半身裙套装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kyko4" data-tag-name="气质抢镜装"
                             data-tag-id="11bk"></div>
                        <div class="item-tab mr10 c9">气质抢镜装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11ks6oc" data-tag-name="春夏薄外套"
                             data-tag-id="11a0"></div>
                        <div class="item-tab  c10">春夏薄外套</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kagw8" data-tag-name="春日甜美装"
                             data-tag-id="1xq"></div>
                        <div class="item-tab mr10 c1">春日甜美装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11koq0o" data-tag-name="周末约会装"
                             data-tag-id="1xw"></div>
                        <div class="item-tab mr10 c2">周末约会装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11l0qza" data-tag-name="长腿穿搭法"
                             data-tag-id="1x8"></div>
                        <div class="item-tab mr10 c3">长腿穿搭法</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k7fey" data-tag-name="裙子套装"
                             data-tag-id="1z0"></div>
                        <div class="item-tab mr10 c4">裙子套装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kqgzu" data-tag-name="T恤怎么穿"
                             data-tag-id="110e"></div>
                        <div class="item-tab mr10 c5">T恤怎么穿</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11klbzo" data-tag-name="省心套装"
                             data-tag-id="1za"></div>
                        <div class="item-tab mr10 c6">省心套装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11jqu28" data-tag-name="气质加分装"
                             data-tag-id="1166"></div>
                        <div class="item-tab mr10 c7">气质加分装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k4ydc" data-tag-name="棒球外套"
                             data-tag-id="1zi"></div>
                        <div class="item-tab mr10 c8">棒球外套</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11kfaic" data-tag-name="超火吊带裙"
                             data-tag-id="110o"></div>
                        <div class="item-tab mr10 c9">超火吊带裙</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k7148" data-tag-name="遮肉外套"
                             data-tag-id="1120"></div>
                        <div class="item-tab  c10">遮肉外套</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11j0xgq" data-tag-name="显瘦春裤"
                             data-tag-id="1y2"></div>
                        <div class="item-tab mr10 c1">显瘦春裤</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k84cw" data-tag-name="出街短外套"
                             data-tag-id="1wk"></div>
                        <div class="item-tab mr10 c2">出街短外套</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11k5sp2" data-tag-name="牛仔裤一生推"
                             data-tag-id="1110"></div>
                        <div class="item-tab mr10 c3">牛仔裤一生推</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11jqkbs" data-tag-name="回暖春日装"
                             data-tag-id="11am"></div>
                        <div class="item-tab mr10 c4">回暖春日装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11jovve" data-tag-name="矮妹外套"
                             data-tag-id="1wk"></div>
                        <div class="item-tab mr10 c5">矮妹外套</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11htzoo" data-tag-name="新品超值装"
                             data-tag-id="118u"></div>
                        <div class="item-tab mr10 c6">新品超值装</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11i0zjg" data-tag-name="学生党卫衣"
                             data-tag-id="1wm"></div>
                        <div class="item-tab mr10 c7">学生党卫衣</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11htxeu" data-tag-name="春穿风衣"
                             data-tag-id="1wu"></div>
                        <div class="item-tab mr10 c8">春穿风衣</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11hqre0" data-tag-name="春日打底衫"
                             data-tag-id="114u"></div>
                        <div class="item-tab mr10 c9">春日打底衫</div>
                    </li>
                    <li class="nav-item"
                        style="float: left; list-style: none; position: relative; width: 111px; margin-right: 10px;">
                        <div class="item-mask J_tab" data-content-id="11hqkny" data-tag-name="女王节女神装"
                             data-tag-id="11ba"></div>
                        <div class="item-tab  c10">女王节女神装</div>
                    </li> -->
                </ul>
            </div>

            <div class="bx-controls bx-has-controls-direction">
                <div class="bx-controls-direction">
                    <a class="bx-prev disabled" href="javascript:;">
                        <img src="/mogu/Public/home/images/left.png" class="arrow">
                    </a>
                    <a class="bx-next" href="javascript:;">
                        <img src="/mogu/Public/home/images/right.png" class="arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
     <!--下面的商品-->
    <div class="pool-wrap">
        <div class="pool-list clearfix">
            <div class="w-wall-segment clearfix" data-index="0">

                <!--第一排-->
                <!-- <?php if(is_array($redman_list1)): $i = 0; $__LIST__ = $redman_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="pool-item">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                           class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                            <img class="J_dynamic_img fill_img" src="/mogu/Public/<?php echo ($val['redman_path']); ?>" alt="">
                        </a>
                        <div class="detail">
                            <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                                <p class="content-title"><?php echo ($val['redman_name']); ?></p>
                            </a>
                            <div class="user-wrap vertical-middle">
                                <img class="avatar" src="/mogu/Public/<?php echo ($val['redman_thumb']); ?>">
                                <span class="user-name"><?php echo ($val['redman_author']); ?></span>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?> -->
                <!-- <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div> -->

                <!--第二排-->
                <!-- <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div>
                <div class="pool-item">
                    <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp"
                       class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">
                        <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/1.1.jpg" alt="">
                    </a>
                    <div class="detail">
                        <a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >
                            <p class="content-title">蕾丝雪纺套装</p>
                        </a>
                        <div class="user-wrap vertical-middle">
                            <img class="avatar" src="/mogu/Public/home/images/1.2.jpg">
                            <span class="user-name">z_子晴</span>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</div>


<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="/mogu/Public/home/js/Redman.js"></script>
</body>

</html>