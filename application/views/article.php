<?php
$loginedUser=$this->session->userdata('loginedUser');
?>
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
                        <button class="am-btn am-dropdown-toggle" style="background: #303435"><a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a><span class="am-icon-caret-down"></span></button>
                        <div class="am-dropdown-content">
                            <li style="margin-left:5px"><a href="welcome/helper" class="iconfont">&#xe61e;<span style="margin-left:10px">健康助手</span></a></li>
                            <li style="margin-left:5px"><a href="welcome/person" class="iconfont">&#xe607;<span style="margin-left:10px">个人中心</span></a></li>
<!--                            <li style="margin-left:10px"><a href="welcome/article" class="iconfont">&#xe62c;<span style="margin-left:10px">健康论坛</span></a></li>-->
<!--                            <li style="margin-left:5px"><a href="javascript:;" class="iconfont">&#xe600;<span style="margin-left:10px">更多资讯</span></a></li>-->
                            <li style="margin-left:5px">
                                 <a href="welcome/person_imperfect?id='$loginedUser->user_Id'" class="iconfont">&#xe608;<span style="margin-left:10px">修改个人信息</span></a>
                            </li>
                            <li style="margin-left:5px">
                                 <a href="welcome/video" class="iconfont">&#xe600;<span style="margin-left:10px">运动指导</span></a>
                            </li>
                        </div>
                    </div>

                </div>
<!--        </div>-->
        </header>
    </div>

    <div class="pet_content pet_content_list">
        <div class="pet_article_like">
            <div class="pet_content_main pet_article_like_delete">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                    <div class="am-list-news-bd">
                        <ul class="am-list">
                            <?php
                            foreach($articles as $key => $article){
                            ?>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">

                                        <div class="pet_list_one_info_ico"><img src="<?php echo $users[$key]->pict_Url?>" alt=""></div>
                                        <div class="pet_list_one_info_name"><?php echo $users[$key]->user_Name?></div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_xxs">新鲜事</div>
                                    </div>
                                </div>
                                <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                    <h5 class="am-list-item-hd pet_list_one_bt">
                                        <a href="welcome/forum_content?arti_Id=<?php echo $article->arti_Id?>" class="">
                                            <?php echo $article->arti_Title?></a></h5>
                                    <p class="am-list-item-text pet_list_one_text">
                                        <?php echo $article->arti_Content?>
                                    </p>


                                </div>
                                <div class="am-list-item-text pet_list_one_text">
                                    <?php echo $article->arti_Date?>
                                </div>
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="###" class="">
                                        <img src="<?php echo $article->pict_Url?>" class="pet_list_one_img" alt=""/>
                                    </a>
                                </div>
                            </li>
                           <?php
                                 }
                            ?>
                        </ul>
                    </div>

                </div>

            </div>
            <form class="am-form" action="welcome/insert_article" method="post">
                <fieldset>
                    <!--                <legend>表单标题</legend>-->
                    <div class="am-form-group">
                        <label for="doc-ipt-pwd-1" style="text-align:center">标题</label>
                        <input type="text" name="title" class="" id="doc-ipt-pwd-1" placeholder="请输入文章标题">
                    </div>

                    <div class="am-form-group">
                        <label for="doc-ta-1"  style="text-align:center">内容</label>
                        <textarea class="" rows="5" id="doc-ta-1" name='content'></textarea>
                    </div>

                    <p><button type="submit" class="am-btn am-btn-primary" style="text-align:center">提交</button></p>
                </fieldset>
            </form>
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
    });

</script>
</body>
</html>