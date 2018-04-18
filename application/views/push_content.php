<?php
$loginedUser=$this->session->userdata('loginedUser');
?>
<!doctype html>
<html>
<head>
    <base href="<?php echo site_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <title>内容页</title>
</head>
<body style="background:#ececec">
<div class="pet_mian" >
    <div class="pet_head">
  <header data-am-widget="header"
          class="am-header am-header-default pet_head_block">
      <div class="am-header-left am-header-nav ">
          <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
      </div>

      <h1 class="am-header-title pet_article_user">
      <div class="pet_article_user_info_tab">
        <div class="pet_article_user_info_tab_font">
        <div class="pet_article_user_info_tab_font_triangle"></div>
        <div class="pet_article_user_info_tab_font_center"><i>文章</i><span>16篇</span></div>
<!--         <div class="pet_article_user_info_tab_font_center"><i>涂鸦</i><span>89张</span></div>
        <div class="pet_article_user_info_tab_font_center_line"></div>
        <div class="pet_article_user_info_tab_font_center"><a href="###">查看全部资料</a></div> -->
        </div>
      </div>
      <span class="pet_article_user_name">admin</span>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
      </div>
  </header>
</div>
    <div class="pet_more_list"><div class="pet_more_list_block">
    <div class="iconfont pet_more_close">×</div>
    <div class="pet_more_list_block">
        <div class="pet_more_list_block_name">
            <div class="pet_more_list_block_name_title">阅读 Read</div>
            <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xinxianshi pet_more_list_block_line_ico">&#xe601;</i>
                <div class="pet_more_list_block_line_font">新鲜事</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_zhangzhishi pet_more_list_block_line_ico">&#xe606;</i>
                <div class="pet_more_list_block_line_font">涨知识</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_kantuya pet_more_list_block_line_ico">&#xe607;</i>
                <div class="pet_more_list_block_line_font">看涂鸦</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_mengzhuanti pet_more_list_block_line_ico">&#xe603;</i>
                <div class="pet_more_list_block_line_font">萌专题</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_bk pet_more_list_block_line_ico">&#xe611;</i>
                <div class="pet_more_list_block_line_font">百科</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_wd pet_more_list_block_line_ico">&#xe60c;</i>
                <div class="pet_more_list_block_line_font">问答</div>
            </a>
 <div class="pet_more_list_block_name_title pet_more_list_block_line_height">服务 Service</div>
            <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xinxianshi pet_more_list_block_line_ico">&#xe600;</i>
                <div class="pet_more_list_block_line_font">美容</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_zhangzhishi pet_more_list_block_line_ico">&#xe602;</i>
                <div class="pet_more_list_block_line_font">医院</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_kantuya pet_more_list_block_line_ico">&#xe604;</i>
                <div class="pet_more_list_block_line_font">店铺</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_sy pet_more_list_block_line_ico">&#xe610;</i>
                <div class="pet_more_list_block_line_font">摄影</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xx pet_more_list_block_line_ico">&#xe612;</i>
                <div class="pet_more_list_block_line_font">学校</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_sz pet_more_list_block_line_ico">&#xe60f;</i>
                <div class="pet_more_list_block_line_font">水族</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_ms pet_more_list_block_line_ico">&#xe60e;</i>
                <div class="pet_more_list_block_line_font">猫舍</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_qs pet_more_list_block_line_ico">&#xe60b;</i>
                <div class="pet_more_list_block_line_font">犬舍</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_qt pet_more_list_block_line_ico">&#xe60d;</i>
                <div class="pet_more_list_block_line_font">其它</div>
            </a>
        </div>
    </div>

    </div></div>



<div class="pet_content">
<div class="pet_content_block">
  <article data-am-widget="paragraph" class="am-paragraph am-paragraph-default pet_content_article" data-am-paragraph="{ tableScrollable: true, pureview: true }">
  <h1 class="pet_article_title"><?php echo $push_content[0]->push_Title?></h1>
  <div class="pet_article_user_time"><?php echo $push_content[0]->push_Time?></div>
      <img src="<?php echo $push_content[0]->pict_Url?>">
      <p class=paragraph-default-p>
          <?php echo $push_content[0]->push_Content?>
      </p>

  </article>
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


</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/axios.min.js"></script>
    <script src="assets/js/vue.min.js"></script>
<script>
$(function(){

    // 动态计算新闻列表文字样式
    auto_resize();
    $(window).resize(function() {
        auto_resize();
    });
    $('.am-list-thumb img').load(function(){
        auto_resize();
    });
    $('.pet_article_like li:last-child').css('border','none');
        function auto_resize(){
        $('.pet_list_one_nr').height($('.pet_list_one_img').height());
                // alert($('.pet_list_one_nr').height());
    }
        $('.pet_article_user').on('click',function(){
            if($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')){
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');
            }else{
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');
            }
        });

        $('.pet_head_gd_ico').on('click',function(){
            $('.pet_more_list').addClass('pet_more_list_show');
       });
        $('.pet_more_close').on('click',function(){
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
});

</script>
</body>
</html>