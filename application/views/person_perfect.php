<?php
$loginedUser=$this->session->userdata('loginedUser');
$temp_fat = 0;
if($person_info->pers_Sex == 1){
    $temp_fat = 1;
}
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
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $loginedUser->user_Name?></title>
</head>
<body style="background:#ececec">
<div class="pet_mian">
    <div class="pet_head">
        <header data-am-widget="header"
                class="am-header am-header-default pet_head_block">
            <div class="am-header-left am-header-nav ">
                <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
            </div>
            <div class="pet_news_list_tag_name"><?php echo $person_info->pers_Name?></div>
            <div class="am-header-right am-header-nav ">
                <div class="am-dropdown" data-am-dropdown>
                    <button class="am-btn am-dropdown-toggle" style="background: #303435"><a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a><span class="am-icon-caret-down"></span></button>
                    <div class="am-dropdown-content">
                        <li style="margin-left:5px"><a href="welcome/helper" class="iconfont">&#xe61e;<span style="margin-left:10px">健康助手</span></a></li>
                        <!--                        <li style="margin-left:10px"><a href="welcome/person" class="iconfont">&#xe607;<span style="margin-left:10px">个人信息</span></a></li>-->
                        <li style="margin-left:5px"><a href="welcome/article" class="iconfont">&#xe62c;<span style="margin-left:10px">健康论坛</span></a></li>
<!--                        <li style="margin-left:5px"><a href="javascript:;" class="iconfont">&#xe600;<span style="margin-left:10px">更多资讯</span></a></li>-->
                        <li style="margin-left:5px"><a href="welcome/person_imperfect?id='$loginedUser->user_Id'" class="iconfont">&#xe608;<span style="margin-left:10px">修改个人信息</span></a></li>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <div class="pet_content pet_content_list">
        <div class="pet_grzx">
            <div class="pet_grzx_nr">
                <div class="pet_grzx_ico">
                    <img src="<?php echo $person_info->pict_Url?>" alt="">
                </div>
                <div class="pet_grzx_name"><?php echo $person_info->pers_Name?></div>
                <div class="pet_grzx_map">China</div>
                <div class="pet_grzx_num_font">
                    <?php echo $person_info->pers_Sign?>
                </div>
            </div>

            <div class="pet_grzx_list">
                <div class="pet_content_main pet_article_like_delete">

                    <div data-am-widget="tabs" class="am-tabs am-tabs-default">
                        <ul class="am-tabs-nav am-cf">
                            <li class="am-active"><a href="[data-tab-panel-0]">我的体脂</a></li>
                            <li class=""><a href="[data-tab-panel-1]">BMI指数</a></li>
                            <li class=""><a href="[data-tab-panel-2]">骨密度</a></li>
                        </ul>
                        <div class="am-tabs-bd">
                            <div data-tab-panel-0 class="am-tab-panel am-active">
                                <!--                                1.2×BMI+0.23×年龄-5.4-10.8×性别-->
                                <?php $fat = 1.2 * ($person_info->pers_Weight/($person_info->pers_Height * $person_info->pers_Height / 10000))+0.23*$person_info->pers_Birthday-5.4-10.8*$temp_fat?>
                                我的体脂率：<?php echo $fat?>
                                <?php if($fat > 25){?>
                                <br/>（超重啦！该减肥了！！！）
                                <?php }else{?>
                                <br/>（体重正常，继续保持哦！）
                                <?php }?>
                            </div>
                            <div data-tab-panel-1 class="am-tab-panel ">
                                <?php $bmi = $person_info->pers_Weight/($person_info->pers_Height * $person_info->pers_Height / 10000)?>
                                BMI指数：<?php echo $bmi?>
                                <?php if($bmi > 25){?>
                                    <br/>（超重啦！该减肥了！！！）
                                <?php }else{?>
                                    <br/>（体重正常，继续保持哦！）
                                <?php }?>
                            </div>
                            <div data-tab-panel-2 class="am-tab-panel ">
                                <?php $bone = ($person_info->pers_Weight - $person_info->pers_Birthday)*0.2?>
                                骨密度：<?php echo $bone?>
                                <?php if($bone < 2.5){?>
                                    <br/>（骨质疏松！建议去医院检查！！！）
                                <?php }else if($bone > 1){?>
                                    <br/>（矿物质含量增加，骨的脆性下降,建议去医院检查！）
                                <?php }else{?>
                                    <br/>（骨密度正常，继续保持哦！）
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div id="echarts" style="width: 80%; height: 300px; margin:50px auto;"></div>

                </div>
            </div>
            <div class="pet_article_dowload">
                <div class="pet_article_dowload_title">爱运动APP</div>
                <div class="pet_article_dowload_content">
                    <div class="pet_article_dowload_triangle"></div>
                    <div class="pet_article_dowload_ico"><img src="assets/img/footdon.png" alt=""></div>
                    <div class="pet_article_dowload_content_font">
                        爱生活，爱运动
                    </div>
                    <div class="pet_article_dowload_all">
                        <a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>
                        <a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/echarts.min.js"></script>
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

    $(function(){
        var myChart = echarts.init(document.getElementById('echarts'));
        var option = {
            title: {
                text: '健康指数'
            },
            tooltip: {},
            legend: {
                data: ['', '']
            },
            radar: {
                // shape: 'circle',
                indicator: [
                    { name: '体脂率', max: 6500},
                    { name: 'BMI', max: 16000},
                    { name: '骨密度', max: 30000}
                ]
            },
            series: [{
                name: '<?php echo $person_info->pers_Name?>',
                type: 'radar',
                // areaStyle: {normal: {}},
                data : [
                    {
                        value : [4300, 10000, 28000],
                        name : '健康指数'
                    }
                ]
            }]
        };
        myChart.setOption(option);
    })

</script>
</body>
</html>