<?
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s');
?>
<?php
$loginedUser = $this->session->userdata('loginedUser');
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
    <title>内容页列表页</title>
</head>
<body style="background:#ececec">
<div class="pet_mian">
    <div class="pet_head">
        <header data-am-widget="header"
                class="am-header am-header-default pet_head_block">
            <div class="am-header-left am-header-nav ">
                <a href="welcome/article" class="iconfont pet_head_jt_ico">&#xe601;</a>
            </div>

            <div class="am-header-right am-header-nav">
                <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
            </div>
        </header>
    </div>

    <div class="pet_more_list">
        <div class="pet_more_list_block">
            <div class="iconfont pet_more_close">×</div>
        </div>
    </div>
    <div class="pet_content pet_content_list">
        <div class="pet_zlnr">
            <div class="pet_zlnr_user">

                <div class="pet_zlnr_user_l"><img src="<?php echo $user[0]->pict_Url ?>" alt=""></div>
                <div class="pet_zlnr_user_r">
                    <div class="pet_zlnr_user_r_name"><?php echo $user[0]->user_Name ?></div>
                </div>
            </div>
            <div class="pet_zlnr_nr">

                <article data-am-widget="paragraph"
                         class="am-paragraph am-paragraph-default"

                         data-am-paragraph="{ tableScrollable: true, pureview: true }">
                    <img src="<?php echo $forum_content[0]->pict_Url ?>" alt="">

                    <p><?php echo $forum_content[0]->arti_Content ?></p>
                </article>
            </div>
            <div id="comment">
                <div class="am-g doc-am-g">
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">
                        <input type="text" class="am-form-field am-radius comment" placeholder="评论"
                               v-model="input" />
<!--                        <label >{{input}}</label>-->
                    </div>
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                        <button type="button" class="am-btn am-btn-secondary" @click="addComment()">评论</button>
                    </div>
                </div>
                <div class="pet_comment_list">
                    <div class="pet_comment_list_wap"><div class="pet_comment_list_title">精彩评论</div>
                        <div class="pet_zlnr_pl" v-for="comment in commentList">
                            <div class="pet_zlnr_pl_block">
                                <div class="pet_zlnr_pl_block_l"><img :src="comment.pict_Url" alt=""></div>
                                <div class="pet_zlnr_pl_block_r" >{{comment.user_Name}}
                                    <span v-text="comment.comm_Content"></span>
                                    <span v-text="comment.comm_Date"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pet_article_footer_info">Copyright(c)2017 PetShow All Rights Reserved</div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/axios.min.js"></script>
<script src="assets/js/vue.min.js"></script>
<script>
    var vm = new Vue({
        el: "#comment",
        data: {
            commentList: [],
            input: ''
        },
        mounted: function () {
            this.find_comments();
        },
        methods: {
            find_comments: function () {
                var _this = this;
                axios.get('welcome/find_comments_by_artiId', {
                        params: {
                            arti_Id: <?php echo $arti_Id?>
                        }
                    }
                ).then(function (res) {
                    if(!((typeof res.data) === 'string')){
                        _this.commentList=(res.data);
                    }
                });

            },

            addComment: function () {
                var _this = this;
                axios.get('welcome/forum_content_comments', {
                    params: {
                        arti_Id: <?php echo $arti_Id?>,
                        user_Id: <?php echo $loginedUser->user_Id?>,
                        comm_Content: this.input
                    }

                }).then(function (res) {
                    var result = res.data;
                    if (result) {
                        _this.commentList.push(result);
                        _this.input='';
                    } else {
                        document.write(failed);
                    }
                })
            }
        }
    })
</script>

</body>
</html>