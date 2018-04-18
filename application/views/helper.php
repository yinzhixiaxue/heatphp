<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <title>健康助手</title>
    <style>
        #food{
            margin: 20px;
        }
        #box {
            width: 200px;
            height: 100px;
            border: 1px solid #000;
            margin: 20px;
            overflow: scroll;
        }
        #box span {
            margin-right: 20px;
        }
    </style>
</head>
<body style="background:#ececec">
<div class="pet_mian">
    <div class="pet_head">
        <header data-am-widget="header"
                class="am-header am-header-default pet_head_block">
            <div class="am-header-left am-header-nav ">
                <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
            </div>

            <div class="am-header-right am-header-nav">
                <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
            </div>
        </header>
    </div>


    <!--    <div class="pet_content pet_content_list">-->
    <!--      <div class="pet_article_like">-->
    <!--        <div class="pet_content_main pet_article_like_delete">-->
    <!--          <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">-->
    <!--            <div class="am-list-news-bd">-->
    <!--                <div class="am-panel-group" id="accordion">-->
    <!--                    <div class="am-panel am-panel-primary">-->
    <!--                        <div class="am-panel-hd">-->
    <!--                            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">-->
    <!--<!--                              <h4></h4>-->-->
    <!--                                今日食谱推荐-->
    <!--                            </h4>-->
    <!--                        </div>-->
    <!--                        <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">-->
    <!--                            <div class="am-panel-bd">-->
    <!--                                <h3>今日食谱如下</h3>-->
    <!--                                         <p>早餐：--><?php //echo $foods->food_breakfast?><!--</p>-->
    <!--                                         <p>午餐：--><?php //echo $foods->food_lunch?><!--</p>-->
    <!--                                         <p>晚餐：--><?php //echo $foods->food_dinner?><!--</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="am-panel am-panel-primary">-->
    <!--                        <div class="am-panel-hd">-->
    <!--                            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">-->
    <!--                                ...-->
    <!--                            </h4>-->
    <!--                        </div>-->
    <!--                        <div id="do-not-say-2" class="am-panel-collapse am-collapse">-->
    <!--                            <div class="am-panel-bd">-->
    <!--                                ...-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="am-panel am-panel-primary">-->
    <!--                        <div class="am-panel-hd">-->
    <!--                            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">...</h4>-->
    <!--                        </div>-->
    <!--                        <div id="do-not-say-3" class="am-panel-collapse am-collapse">-->
    <!--                            <div class="am-panel-bd">-->
    <!--                                ...-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!---->
    <!--            </div>-->
    <!---->
    <!--          </div>-->
    <!---->
    <!--        </div>-->
    <!---->
    <!--        <div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>-->
    <!--      </div>-->
    <div class="am-panel am-panel-primary">
        <div class="am-panel-hd">
            <h3 class="am-panel-title">健康助手</h3>
        </div>
        <div class="am-panel-bd" style="background: #00ffff">
            <h4>今日食谱如下</h4>
        </div>
        <div id="food-fa">
            <ul class="am-list am-list-static">
                <li>
                    <h3 class="am-text-primary">早餐：</h3>
                    <p><?php echo $foods->food_breakfast ?></p>
                    <!--              </li>-->
                    <!--              <li>-->
                    <h3 class="am-text-primary">午餐：</h3>
                    <p><?php echo $foods->food_lunch ?></p>
                    <!--              </li>-->
                    <!--              <li>-->
                    <h3 class="am-text-primary">晚餐：</h3>
                    <p><?php echo $foods->food_dinner ?></p>
                </li>
            </ul>
        </div>
        <div class="am-panel-bd" style="background: #00ffff">
            <h4>今天你摄入了多少卡路里呢</h4>
        </div>
        <ul class="am-list am-list-static" id="food"></ul>
        <div class="am-panel-bd" style="background: #00ffff">
            <h4>今天你消耗了多少卡路里呢</h4>
        </div>
        <ul class="am-list am-list-static">
            <li>
                <form class="am-form" method="post" action="">
                    <fieldset>
                        <!--                          <legend>表单标题</legend>-->
                        <div class="am-form-group">
                            <!--                              <label for="doc-ipt-text-1">请输入你今天走的步数</label>-->
                            <input type="text" class="" id="steps" placeholder="请输入你今天走的步数">

                        </div>
                        <p>今天共消耗约<input type="text" id='calorie' placeholder="" style="width:100px;display:inline">卡路里
                        </p>
                        <!--                          <p><button type="submit" id='steps-submit' class="am-btn am-btn-primary am-center" style="width:100%">提交</button></p>-->
                    </fieldset>
                </form>
            </li>
        </ul>
        <div class="am-panel-footer">...</div>
    </div>

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/linkage.js"></script>
<script>
    $(function () {
        $('#steps').on('blur', function () {
            var value = Math.ceil($('#steps').val() / 10000 * 300);
            var res = 0;
            <?php if(isset($user->calorie)){?>
                res = value + parseInt(<?php echo $user->calorie?>);
            <?php }else {?> res = value;
            <?php }?>
            $('#calorie').val(res);
        });
    });
    function check() {
        var sum = 0;
        $(':checkbox').each(function () {
            if (this.checked)
                sum += parseInt(this.value);
        });
        $('#cal1').val(sum);
        if (sum > 2000) {
            $('#p1').css('display', 'none');
            $('#cal3').val(sum - 2000);
            $('#p2').css('display', 'block');
        } else {
            $('#cal2').val(2000 - sum);
            $('#p1').css('display', 'block');
            $('#p2').css('display', 'none');
        }
    }
    var oUl = document.getElementById('food');
    new HeatMeter({
        'father': oUl
    })
</script>
<!--    <script>-->
<!--$(function(){-->
<!---->
<!--    // 动态计算新闻列表文字样式-->
<!--    auto_resize();-->
<!--    $(window).resize(function() {-->
<!--        auto_resize();-->
<!--    });-->
<!--    $('.am-list-thumb img').load(function(){-->
<!--        auto_resize();-->
<!--    });-->
<!--    $('.pet_article_like li:last-child').css('border','none');-->
<!--        function auto_resize(){-->
<!--        $('.pet_list_one_nr').height($('.pet_list_one_img').height());-->
<!--                // alert($('.pet_list_one_nr').height());-->
<!--    }-->
<!--        $('.pet_article_user').on('click',function(){-->
<!--            if($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')){-->
<!--                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');-->
<!--            }else{-->
<!--                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');-->
<!--            }-->
<!--        });-->
<!---->
<!--        $('.pet_head_gd_ico').on('click',function(){-->
<!--            $('.pet_more_list').addClass('pet_more_list_show');-->
<!--       });-->
<!--        $('.pet_more_close').on('click',function(){-->
<!--            $('.pet_more_list').removeClass('pet_more_list_show');-->
<!--        });-->
<!--});-->
<!---->
<!--</script>-->
</body>
</html>