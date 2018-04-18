<!DOCTYPE html>
<html>
<head lang="en">
    <base href="<?php echo site_url(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/login.css"/>
    <title>用户登录</title>
</head>
    <body style="font-family: Microsoft YaHei">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                    <div class="text-center navbar-control">
                        <h2>爱运动</h2>
                    </div>
            </div>
        </nav>
        <div class="container" >
            <form action="welcome/do_login" class="form-group " method="post">
                <div class="box">
                    <label for="username" class="info form-control">账号</label>
                    <input type="search" placeholder="请输入账号" class="form-control" id="username" name="username"/>
                </div>
                <div class="box">
                    <label for="password" class="info form-control">密码</label><input type="password" placeholder="请输入密码" class="form-control" id="password" name="password"/>
                </div>
                <button class="btn btn-info btn-lg">登录</button>
<!--                <button class="btn btn-info btn-lg" ><a href="welcome/reg" style="color: #fff">注册</a></button>-->
            </form>
            <button class="btn btn-info btn-lg" ><a href="welcome/reg" style="color: #fff">注册</a></button>
            <span style="display:inline-block;margin:10px 0 10px 80%"><a href="welcome/index">跳过登录</a></span>

        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>