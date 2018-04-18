<?php
    $loginedUser=$this->session->userdata('loginedUser');
?>
<!doctype html>
<html>
<head>
    <base href="<?php echo site_url() ?>
    ">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <title>内容页列表页</title>
</head>
<body style="background:#ececec">
    <div class="pet_mian">
        <div class="pet_head">
            <header data-am-widget="header"
                    class="am-header am-header-default pet_head_block">
                <div class="am-header-left am-header-nav ">
                    <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
                </div>
                <div class="pet_news_list_tag_name">admin</div>
                <div class="am-header-right am-header-nav ">
                    <div class="am-dropdown" data-am-dropdown>
                        <button class="am-btn am-dropdown-toggle" style="background: #303435">
                            <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
                            <span class="am-icon-caret-down"></span>
                        </button>
                        <div class="am-dropdown-content">
                            <li style="margin-left:5px">
                                <a href="welcome/helper" class="iconfont">
                                    &#xe61e;
                                    <span >健康助手</span>
                                </a>
                            </li>
                            <li style="margin-left:5px">
                                <a href="welcome/person" class="iconfont">
                                    &#xe607;
                                    <span >个人中心</span>
                                </a>
                            </li>
                            <li style="margin-left:5px">
                                <a href="welcome/person_imperfect?id='$loginedUser->
                                    user_Id'" class="iconfont">&#xe608;
                                    <span >修改个人信息</span>
                                </a>
                            </li>
                            <!-- <li style="margin-left:5px">
                            <a href="welcome/video" class="iconfont">
                                &#xe600;
                                <span >运动指导</span>
                            </a>
                        </li>
                        -->
                    </div>
                </div>

            </div>
            <!--        </div>--></header>
    </div>

    <div class="pet_content pet_content_list">
        <div class="pet_article_like" style='height:100%'>

            <div class="pet_content_main pet_article_like_delete">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                    <div class="am-list-news-bd">
                        <ul class="am-list">
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                <p style='text-align: center'>
                                    <span style="font-size: 18px">腹肌撕裂者1</span>
                                </p>
                                <div class="pet_list_one_info_l">
                                    <video width="100%"  controls="controls" class="video" id="media">
                                        <source src="assets/video/video1.mp4" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="pet_content_main pet_article_like_delete">
                    <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                        <div class="am-list-news-bd">
                            <ul class="am-list">
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                    <p style='text-align: center'>
                                        <span style="font-size: 18px">腹肌撕裂者2</span>
                                    </p>
                                    <div class="pet_list_one_info_l">
                                        <video width="100%" controls="controls" class="video">

                                            <source src="assets/video/video2.mp4" type="video/mp4" />
                                            Your browser does not support the video tag.
                                        </video>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="pet_content_main pet_article_like_delete">
                        <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                            <div class="am-list-news-bd">
                                <ul class="am-list">
                                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                        <p style='text-align: center'>
                                            <span style="font-size: 18px">腹肌撕裂者3</span>
                                        </p>
                                        <div class="pet_list_one_info_l">
                                            <video width="100%"  controls="controls" class="video">
                                                <source src="assets/video/video3.mp4" type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <!--  <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                        <h5 class="am-list-item-hd pet_list_one_bt"></h5>
                        <p class="am-list-item-text pet_list_one_text"></div>
                        <div class="am-list-item-text pet_list_one_text"></div>
                        <div class="am-u-sm-4 am-list-thumb">
                            <a href="###" class="">
                                <video src=""></video>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
            -->
        </div>

    </div>

</div>

<div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>
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
        $('.pet_article_like li:last-child').css('border', 'none');
        function auto_resize() {
            $('.pet_list_one_nr').height($('.pet_list_one_img').height());
            // alert($('.pet_list_one_nr').height());
        }

        $('.pet_article_user').on('click', function () {
            if ($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')) {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');
            } else {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');
            }
        });

        $('.pet_head_gd_ico').on('click', function () {
            $('.pet_more_list').addClass('pet_more_list_show');
        });
        $('.pet_more_close').on('click', function () {
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
        var flag=true;
        var time1=0;
        var time2=0;
        var video = $('.video');
        for(var i=0;i<video.length;i++) {
            var videoI = video.eq(i);
            videoI.on("click", function () {
                if (flag) {
                    this.play();
                } else {
                    this.pause();
                }
                flag = !flag;
            });
            videoI.on("play", function () {
                time1 = this.currentTime;
//                console.log(time1);

            });
            videoI.on("pause", function () {
                time2 = this.currentTime;
//                console.log(time2);
                 $.get('welcome/freshvideo', {
                    calorie:(time2-time1)*0.3
                 }, function(data){
//                    if(data.trim()=='yes'){
//                        console.log((time2-time1)*0.3);
//                        console.log(123);
//                        console.log(<?php //echo $loginedUser->calorie?>//);
//                    }
                     console.log(data);
                }, 'text');
            });
        }

    });
</script></body>
</html>