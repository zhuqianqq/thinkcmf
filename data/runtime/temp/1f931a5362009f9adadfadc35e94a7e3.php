<?php /*a:5:{s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/user\\login.html";i:1523418038;s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\head.html";i:1555462698;s:64:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\function.html";i:1523429823;s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\header.html";i:1592464280;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\scripts.html";i:1523698744;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    <meta name="author" content="Crazy">
    <link rel="shortcut icon" href="/themes/Acme/public/assets/images/favicon.png">
    <title>用户登录</title>
    
<?php 
    function cmf_get_date($time, $format) {
        return date($format, $time);
    }
 ?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- Bootstrap core CSS -->
<link href="/themes/Acme/public/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/themes/Acme/public/assets/css/theme.css" rel="stylesheet">
<link href="/themes/Acme/public/assets/css/bootstrap-reset.css" rel="stylesheet">

<!--external css-->
<link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/themes/Acme/public/assets/css/flexslider.css"/>
<link href="/themes/Acme/public/assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
<link rel="stylesheet" href="/themes/Acme/public/assets/css/animate.css">

<!-- Custom styles for this template -->
<link href="/themes/Acme/public/assets/css/style.css" rel="stylesheet">
<link href="/themes/Acme/public/assets/css/style-responsive.css" rel="stylesheet"/>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/themes/Acme/public/assets/js/html5shiv.js"></script>
<script src="/themes/Acme/public/assets/js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/",
        WEB_ROOT: "/",
        JS_ROOT: "static/js/"
    };
</script>
<script src="/static/js/wind.js"></script>
</head>
<body>
<!--header start-->
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin-top: 15px;margin-bottom: 10px" href="/">
                <?php if(!(empty($theme_vars['logo']) || (($theme_vars['logo'] instanceof \think\Collection || $theme_vars['logo'] instanceof \think\Paginator ) && $theme_vars['logo']->isEmpty()))): ?>
                    <img src="<?php echo cmf_get_image_url($theme_vars['logo']); ?>" style="max-height: 65px"/>
                    <?php $sitename = empty($theme_vars['site_name']) ? [] : explode('|', $theme_vars['site_name']); ?>
                    <?php echo (isset($sitename[0]) && ($sitename[0] !== '')?$sitename[0]:''); ?><span><?php echo (isset($sitename[1]) && ($sitename[1] !== '')?$sitename[1]:''); ?></span>
                    <?php else: $sitename = empty($theme_vars['site_name']) ? [] : explode('|', $theme_vars['site_name']); ?>
                    <?php echo (isset($sitename[0]) && ($sitename[0] !== '')?$sitename[0]:''); ?><span><?php echo (isset($sitename[1]) && ($sitename[1] !== '')?$sitename[1]:''); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <div class="navbar-collapse collapse">
            <!--登录部分-->
            <!-- <ul id="main-menu-user" class="nav navbar-nav navbar-right">
                <li class="dropdown user login">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <?php $user=cmf_get_current_user(); if(empty($user['avatar'])): ?>
                            <img src="/themes/Acme/public/assets/img/headicon.png" class="headicon">
                            <?php else: ?>
                            <img src="<?php echo cmf_get_user_avatar_url($user['avatar']); ?>" class="headicon" width="30"/>
                        <?php endif; ?>
                        <span class="user-nickname"></span><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Profile/center'); ?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
                        <li><a href="<?php echo cmf_url('user/Index/logout'); ?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
                    </ul>
                </li>
                <li class="dropdown user offline">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <img src="/themes/Acme/public/assets/img/headicon.png" class="headicon">
                        登录<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Login/index'); ?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                        <li><a href="<?php echo cmf_url('user/Register/index'); ?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                    </ul>
                </li>
            </ul> -->

            <!--导航部分-->
            <ul id="main-menu" class="nav navbar-nav">
                <?php
/*start*/
if (!function_exists('__parse_navigation_827f974a532ed903696d10999e454ae8')) {
    function __parse_navigation_827f974a532ed903696d10999e454ae8($menus,$level=1){
        $_parse_navigation_func_name = '__parse_navigation_827f974a532ed903696d10999e454ae8';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): ?>
    <li class="">
    
                        <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                    
    </li>
<?php endif; $dropdown_class = $level>1 ? 'dropdown-submenu' : 'dropdown'; if(!empty($menu['children'])): ?>
    <li class="<?php echo $dropdown_class; ?>">
        
                        <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" class="dropdown-toggle" data-toggle="dropdown" data-close-others="false" data-delay="0" data-hover=
                                "dropdown">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?> <i class="fa fa-angle-down"></i>
                        </a>
                    
        <ul class="dropdown-menu">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </ul>
    </li>
<?php endif; ?>
                
        <?php endforeach; endif; else: echo "" ;endif; 
    }
}
/*end*/
    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('1',0);
if(''==''): ?>
    <?php echo __parse_navigation_827f974a532ed903696d10999e454ae8($menus); else: ?>
    < id="" class="nav navbar-nav">
        <?php echo __parse_navigation_827f974a532ed903696d10999e454ae8($menus); ?>
    </>
<?php endif; ?>

               
            </ul>
        </div>
    </div>
</header>
<!--header end-->

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>用户登录</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="/">首页</a></li>
                    <li class="active">用户登录</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class="login-bg">
    <div class="container">
        <div class="form-wrapper">
            <form class="form-signin wow fadeInUp js-ajax-form" action="<?php echo url('user/login/doLogin'); ?>" method="post">
                <h2 class="form-signin-heading">现在登录</h2>
                <div class="login-wrap">
                    <input type="text" name="username" class="form-control" placeholder="手机号/邮箱/用户名" autofocus>
                    <input type="password" name="password" class="form-control" placeholder="密码">
                    <input type="text" name="captcha" placeholder="验证码" class="form-control captcha" style="width: 100px;float: left;margin-right: 30px">
                    <?php $__CAPTCHA_SRC=url('/new_captcha').'?height=38&width=160&font_size=20'; ?>
<img src="<?php echo $__CAPTCHA_SRC; ?>" onclick="this.src='<?php echo $__CAPTCHA_SRC; ?>&time='+Math.random();" title="换一张" class="captcha captcha-img verify_img" style="cursor: pointer;"/>
<input type="hidden" name="_captcha_id" value="">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> 记住我
                        <span class="pull-right"><a data-toggle="modal" href="<?php echo cmf_url('user/Login/findPassword'); ?>"> 忘记密码</a></span>
                    </label>
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-lg btn-login btn-block js-ajax-submit" type="submit">确定</button>
                    <p>第三方登录</p>
                    <div class="login-social-link">
                        <a href="index.html" class="facebook">
                            <i class="fa fa-weixin"></i> 微信
                        </a>
                        <a href="index.html" class="twitter">
                            <i class="fa fa-weibo"></i> 微博
                        </a>
                    </div>
                    <div class="registration">
                        还没有账号？
                        <a href="<?php echo cmf_url('user/Register/index'); ?>"> 现在注册 </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!--container end-->
<!-- js placed at the end of the document so the pages load faster -->
<script src="/themes/Acme/public/assets/js/jquery.js"></script>
<script src="/themes/Acme/public/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/themes/Acme/public/assets/js/hover-dropdown.js"></script>
<script defer src="/themes/Acme/public/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/themes/Acme/public/assets/bxslider/jquery.bxslider.js"></script>

<script src="/themes/Acme/public/assets/js/wow.min.js"></script>
<script src="/themes/Acme/public/assets/js/jquery.easing.min.js"></script>
<script src="/themes/Acme/public/assets/js/link-hover.js"></script>
<script src="/themes/Acme/public/assets/js/common-scripts.js"></script>
<script src="/static/js/frontend.js"></script>

<script>
    $(function () {
        $.post("<?php echo url('user/index/isLogin'); ?>", {}, function (data) {
            if (data.code == 1) {
                if (data.data.user.avatar) {
                }

                $("#main-menu-user span.user-nickname").text(data.data.user.user_nickname ? data.data.user.user_nickname : data.data.user.user_login);
                $("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

            }

            if (data.code == 0) {
                $("#main-menu-user li.login").hide();
                $("#main-menu-user li.offline").show();
            }

        });

        $("#search").keydown(function (e) {
            if (e.keyCode == 13) {
                $(this).parents("form").submit();
            }
        });
    });
</script>


<script src="/static/js/frontend.js"></script>
</body>
</html>