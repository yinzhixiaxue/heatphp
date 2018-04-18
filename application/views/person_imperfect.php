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
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>小萌萌</title>
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
<!--                <div class="am-dropdown" data-am-dropdown>-->
<!--                    <button class="am-btn am-dropdown-toggle" style="background: #303435"><a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a><span class="am-icon-caret-down"></span></button>-->
<!--                    <div class="am-dropdown-content">-->
<!--                        <li style="margin-left:10px"><a href="welcome/helper" class="iconfont">&#xe61e;<span style="margin-left:10px">健康助手</span></a></li>-->
<!--                        <li style="margin-left:10px"><a href="javascript:;" class="iconfont">&#xe600;<span style="margin-left:10px">更多资讯</span></a></li>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </header>
    </div>
</div>
<div class="pet_content pet_content_list">
    <div class="pet_grzx">
        <div class="pet_grzx_nr">
            <div class="pet_grzx_ico">
                <img src="<?php echo $img->pict_Url?>" alt="">
            </div>
            <div class="pet_grzx_name">你还没有注册哦</div>
            <div class="pet_grzx_map">中国</div>
            <div class="pet_grzx_num_font">
                运动是一切生命的源泉
            </div>
        </div>
        <div class="pet_grzx_list">
            <div class="pet_content_main pet_article_like_delete">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                    <div class="am-list-news-bd">
                        <div class="container">
                            <div class="panel panel-info">
                                <div class="container">
                                    <form action="welcome/do_person_imperfect" class="form-group" method="post">
                                        <div class="box">
                                            <label for="username" class="info form-control">昵称</label>
                                            <input type="text" placeholder="请输入昵称" class="form-control" id="username" name="username" value="<?php echo isset($persons[0])?$persons[0]->pers_Name:''?>"/>
                                        </div>
                                        <div class="box">
                                            <label for="username" class="info form-control">年龄</label>
                                            <input type="text" class="form-control" id="username" name="date" value="<?php echo isset($persons[0])?$persons[0]->pers_Birthday:''?>"/>
                                        </div>
                                        <div class="box" style="padding:10px">
                                            <span>性别</span>
                                            <?php
                                            if(!isset($persons[0])){
                                                ?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio1" value="1"> 男
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio2" value="2"> 女
                                                </label>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if(isset($persons[0])&&$persons[0]->pers_Sex==1){
                                                ?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio1" value="1" checked> 男
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio2" value="0"> 女
                                                </label>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if(isset($persons[0])&&$persons[0]->pers_Sex==2){
                                                ?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio1" value="1" > 男
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineRadio2" value="0" checked> 女
                                                </label>
                                                <?php
                                            }
                                            //                                                ?>
                                        </div>

                                        <div class="box">
                                            <label for="height" class="info form-control">身高</label>
                                            <input type="text" placeholder="请输入身高" class="form-control" id="height" name="height" value="<?php echo isset($persons[0])?$persons[0]->pers_Height:''?>"/>
                                        </div>
                                        <div class="box">
                                            <label for="weight" class="info form-control">体重</label>
                                            <input type="text" placeholder="请输入体重" class="form-control" id="weight" name="weight" value="<?php echo isset($persons[0])?$persons[0]->pers_Weight:''?>" placeholder="单位：公斤"/>
                                        </div>
                                        <div class="box">
                                            <label for="waist" class="info form-control">腰围</label>
                                            <input type="text" placeholder="请输入腰围" class="form-control" id="waist" name="waist" value="<?php echo isset($persons[0])?$persons[0]->pers_Waist:''?>"/>
                                        </div>
                                        <div class="box">
                                            <label for="hipline" class="info form-control">臀围</label>
                                            <input type="text" placeholder="请输入臀围" class="form-control" id="hipline" name="hipline" value="<?php echo isset($persons[0])?$persons[0]->pers_Hipline:''?>"/>
                                        </div>
                                        <div class="box">
                                            <label for="telephone" class="info form-control">电话</label>
                                            <input type="text" placeholder="请输入联系方式" class="form-control" id="telephone" name="telephone" value="<?php echo isset($persons[0])?$persons[0]->pers_Telephone:''?>"/>
                                        </div>
                                        <div class="box">
                                            <textarea class="form-control col-xs" rows="3" name="sign" id="sign" placeholder="个性签名"><?php echo isset($persons[0])?$persons[0]->pers_Sign:''?></textarea>
                                        </div>
                                        <button class="btn btn-info btn-lg">确认</button>
                                        <input class="btn btn-info btn-lg" type="reset" value="重置" style="width:100%;margin-top:20px">
                                        <!--                        <button class="reset"></button>-->
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

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
    });

</script>
</body>
</html>