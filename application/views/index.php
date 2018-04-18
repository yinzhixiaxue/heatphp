<!doctype html>
<html>
<head>
    <base href="<?php echo site_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <title>首页</title>
</head>
<body>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
    <a href="#top" title="">
        <img class="am-gotop-icon-custom" src="assets/img/goTop.png"/>
    </a>
</div>
<div class="pet_mian" id="top">
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}'>
        <ul class="am-slides">
            <?php
            foreach($carousels as $carousel){
            ?>
            <li>
                <img src="<?php echo $carousel->pict_Url?>" style="height: 375px">
                <div class="pet_slider_font">
                    <span class="pet_slider_emoji"> (╭￣3￣)╭♡   </span>
                    <span><?php echo $carousel->pict_Introduce?></span>
                </div>
                <div class="pet_slider_shadow"></div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="pet_circle_nav">
        <ul class="pet_circle_nav_list">
            <li><a href="welcome/helper" class="iconfont pet_nav_xinxianshi ">&#xe61e;</a><span>健康助手</span></li>
            <li><a href="welcome/person" class="iconfont pet_nav_zhangzhishi ">&#xe607;</a><span>个人信息</span></li>
            <li><a href="welcome/article" class="iconfont pet_nav_kantuya ">&#xe62c;</a><span>健康论坛</span></li>
            <li><a href="welcome/video" class="iconfont pet_nav_gengduo ">&#xe600;</a><span>运动指导</span></li>
        </ul>
        <div class="pet_more_list">
            <div class="pet_more_list_block">
                <div class="iconfont pet_more_close">×</div>
                <div class="pet_more_list_block">
                </div>
            </div>
        </div>
    </div>
    <div class="pet_content_main">
        <div data-am-widget="list_news" class="am-list-news am-list-news-default">
            <div class="am-list-news-bd">
                <ul class="am-list">
                    <!--缩略图在标题右边-->
                    <?php
                    foreach($messages as $message){
                        ?>
                        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                            <div class="pet_list_one_info">
                                <div class="pet_list_one_info_l">
                                    
                                </div>
                                <div class="pet_list_one_info_r">
                                    <div class="pet_list_tag pet_list_tag_xxs"><?php echo $message->menu_Title?></div>
                                </div>
                            </div>
                            <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                <h3 class="am-list-item-hd pet_list_one_bt"><a href="welcome/push_content?push_Id='<?php echo $message->push_Id?>'" ><?php echo $message->push_Title?></a>
                                </h3>
                                <div class="am-list-item-text pet_list_one_text">
                                    <?php echo $message->push_Content?>
                                </div>

                            </div>
                            <div class="am-u-sm-4 am-list-thumb">
                                <a href="###" class="">
                                <img src="<?php echo $message->pict_Url?>" class="pet_list_one_img" style="width: 100%; height: 70px; alt=""/>
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
<!--        <div class="text-center">-->
            <button type="button" class="btn btn-danger" style="width:100%"><a href="welcome/layout" style="color:white">退出登录</a></button>
<!--        </div>-->

    </div>
    <div class="pet_article_dowload pet_dowload_more_top_off">
        <div class="pet_article_footer_info">Copyright(c)2017 By 毕业设计</div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script>
    $(function () {

        // 动态计算新闻列表文字样式
        auto_resize();
        $(window).resize(function () {
            auto_resize();
        });
        $('.am-list-thumb img').load(function () {
            auto_resize();
        });

        $('.am-list > li:last-child').css('border', 'none');
        function auto_resize() {
            $('.pet_list_one_nr').height($('.pet_list_one_img').height());

        }
        $('.pet_more_close').on('click', function () {
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
    });

</script>
</body>
</html>