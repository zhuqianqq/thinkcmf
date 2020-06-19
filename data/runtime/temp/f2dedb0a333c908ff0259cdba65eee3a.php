<?php /*a:7:{s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/portal\\index.html";i:1592547754;s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\base.html";i:1523429066;s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\head.html";i:1555462698;s:64:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\function.html";i:1523429823;s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\header.html";i:1592472542;s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\footer.html";i:1592547804;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\scripts.html";i:1523698744;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    <meta name="author" content="Crazy">
    <link rel="shortcut icon" href="/themes/Acme/public/assets/images/favicon.png">

    
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

    
    <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <link rel="stylesheet" href="/themes/Acme/public/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="/themes/Acme/public/assets/owlcarousel/owl.theme.css">
    <link href="/themes/Acme/public/assets/css/superfish.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="/themes/Acme/public/assets/css/component.css">
    <link rel="stylesheet" type="text/css" href="/themes/Acme/public/assets/css/parallax-slider/parallax-slider.css"/>
    <script type="text/javascript" src="/themes/Acme/public/assets/js/parallax-slider/modernizr.custom.28468.js"></script>


    <?php 
    \think\facade\Hook::listen('before_head_end',null,false);
 ?>
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


    <!-- 首页幻灯片 -->
    <div id="da-slider" class="da-slider">
        <?php
     $__SLIDE_ITEMS__ = \app\admin\service\ApiService::slides($theme_vars['top_slide']);
if(is_array($__SLIDE_ITEMS__) || $__SLIDE_ITEMS__ instanceof \think\Collection || $__SLIDE_ITEMS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SLIDE_ITEMS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <div class="da-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                $slide_title = explode('|', $vo['description']);
                                $title_count = count($slide_title);
                                $slide_des = explode('|', $vo['content']);
                                $des_count = count($slide_des);
                             ?>
                            <h2>
                                <?php if(is_array($slide_title) || $slide_title instanceof \think\Collection || $slide_title instanceof \think\Paginator): $i = 0; $__LIST__ = $slide_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                    <i><?php echo $v1; ?></i>
                                    <?php if($i < $title_count): ?><br/><?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </h2>
                            <p>
                                <?php if(is_array($slide_des) || $slide_des instanceof \think\Collection || $slide_des instanceof \think\Paginator): $i = 0; $__LIST__ = $slide_des;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                                    <i><?php echo $v2; ?></i>
                                    <?php if($i < $des_count): ?><br/><?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </p>
                            <a href="<?php echo $vo['url']; ?>" class="btn btn-info btn-lg da-link">了解详情</a>
                            <div class="da-img">
                                <img src="<?php echo cmf_get_image_url($vo['image']); ?>" alt="<?php echo $vo['title']; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
<?php endforeach; endif; else: echo "" ;endif; ?>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>

    <!--第一版块-->
    <?php
     if(isset($theme_widgets['first_section']) && $theme_widgets['first_section']['display']){
        $widget=$theme_widgets['first_section'];
     
 ?>

        <div class="container">
            <div class="row mar-b-50">
                <div class="col-md-12">
                    <!--版块内容-->
                    <?php if(empty($widget['vars']['category_id']) || (($widget['vars']['category_id'] instanceof \think\Collection || $widget['vars']['category_id'] instanceof \think\Paginator ) && $widget['vars']['category_id']->isEmpty())): ?>
                        <h4>没有设定版块内容，请在后台设置</h4>
                        <?php else: ?>
                        <!--版块标题-->
                        <div class="text-center feature-head wow fadeInDown">
                            <?php
$category_data = \app\portal\service\ApiService::category($widget['vars']['category_id']);
?>

                                <h1 class=""><?php echo $category_data['name']; ?></h1>
                            
                        </div>
                        <div class="feature-box">
                            <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '3',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                                <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                                    <div class="feature-box-heading">
                                        <em>
                                            <a href="<?php echo cmf_url('portal/Article/index',['id'=>$vo['id']]); ?>">
                                               <img src="<?php echo cmf_get_image_url((isset($vo['thumbnail']) && ($vo['thumbnail'] !== '')?$vo['thumbnail']:$vo['more']['thumbnail'])); ?>" width="100" height="100">
                                            </a>
                                        </em>
                                        <h4><b><?php echo $vo['post_title']; ?></b></h4>
                                    </div>
                                    <p><?php echo $vo['post_excerpt']; ?></p>
                                </div>
                            
<?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    
<?php
    }
 ?>



    <!--第二版块-->
    <?php
     if(isset($theme_widgets['second_section']) && $theme_widgets['second_section']['display']){
        $widget=$theme_widgets['second_section'];
     
 
            $myPage=\app\portal\service\ApiService::page($widget['vars']['page_id']);
         ?>
        <div class="property gray-bg">
            <div class="container">
                <?php if(empty($myPage) || (($myPage instanceof \think\Collection || $myPage instanceof \think\Paginator ) && $myPage->isEmpty())): ?>
                    没有设置信息来源，请在后台设置。
                    <?php else: ?>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
                            <img src="<?php echo cmf_get_image_url($myPage['more']['thumbnail']); ?>">
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInRight">
                            <h1><?php echo $myPage['post_title']; ?></h1>
                            <hr>
                            <?php echo $myPage['post_content']; ?>
                            <hr>
                            <?php if($widget['vars']['btn_display'] == 1): ?>
                                <a href="<?php echo $widget['vars']['btn_link']; ?>" class="btn btn-purchase">
                                    <?php echo $widget['vars']['btn_title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    
<?php
    }
 ?>



    <!--第六版块-->
    <?php
     if(isset($theme_widgets['sixth_section']) && $theme_widgets['sixth_section']['display']){
        $widget=$theme_widgets['sixth_section'];
     
 ?>

        <div class="container">
            <div class="row mar-b-50 our-clients">
                <div class="col-md-3">
                    <h2><?php echo $widget['vars']['section_name']; ?></h2>
                    <p><?php echo $widget['vars']['excerpt']; ?></p>
                </div>
                <div class="col-md-9">
                    <div class="outside">
                        <p><span id="slider-prev"></span> &emsp;|&emsp; <span id="slider-next"></span></p>
                    </div>
                    <ul class="bxslider1">
                        <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                            <li>
                                <a href="<?php echo $vo['url']; ?>">
                                    <img style="width: 100px" src="<?php echo cmf_get_image_url((isset($vo['image']) && ($vo['image'] !== '')?$vo['image']:'')); ?>"/>
                                </a>
                                <span><?php echo (isset($vo['description']) && ($vo['description'] !== '')?$vo['description']:''); ?></span>
                            </li>
                        
<?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    
<?php
    }
 ?>




<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <?php
     if(isset($theme_widgets['contact']) && $theme_widgets['contact']['display']){
        $widget=$theme_widgets['contact'];
     
 ?>

                <div class="col-lg-4 col-sm-4 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1><?php echo $widget['title']; ?></h1>
                    <?php if(!(empty($theme_vars['gl_address']) || (($theme_vars['gl_address'] instanceof \think\Collection || $theme_vars['gl_address'] instanceof \think\Paginator ) && $theme_vars['gl_address']->isEmpty()))): ?>
                        <p><i class="fa fa-home pr-10"></i>地址：<?php echo $theme_vars['gl_address']; ?></p>
                    <?php endif; if(!(empty($theme_vars['gl_mobile']) || (($theme_vars['gl_mobile'] instanceof \think\Collection || $theme_vars['gl_mobile'] instanceof \think\Paginator ) && $theme_vars['gl_mobile']->isEmpty()))): ?>
                        <p>
                            <i class="fa fa-mobile pr-10"></i>手机：
                            <?php if(is_array($theme_vars['gl_mobile']) || $theme_vars['gl_mobile'] instanceof \think\Collection || $theme_vars['gl_mobile'] instanceof \think\Paginator): if( count($theme_vars['gl_mobile'])==0 ) : echo "" ;else: foreach($theme_vars['gl_mobile'] as $key=>$vo): ?><?php echo $vo['mobile']; ?>&emsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </p>
                    <?php endif; if(!(empty($theme_vars['gl_tel']) || (($theme_vars['gl_tel'] instanceof \think\Collection || $theme_vars['gl_tel'] instanceof \think\Paginator ) && $theme_vars['gl_tel']->isEmpty()))): ?>
                        <p>
                            <i class="fa fa-phone pr-10"></i>电话：
                            <?php if(is_array($theme_vars['gl_tel']) || $theme_vars['gl_tel'] instanceof \think\Collection || $theme_vars['gl_tel'] instanceof \think\Paginator): if( count($theme_vars['gl_tel'])==0 ) : echo "" ;else: foreach($theme_vars['gl_tel'] as $key=>$vo): ?><?php echo $vo['tel']; ?>&emsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </p>
                    <?php endif; if(!(empty($theme_vars['gl_email']) || (($theme_vars['gl_email'] instanceof \think\Collection || $theme_vars['gl_email'] instanceof \think\Paginator ) && $theme_vars['gl_email']->isEmpty()))): ?>
                        <p><i class="fa fa-envelope pr-10"></i>邮箱：<?php echo $theme_vars['gl_email']; ?></p>
                    <?php endif; ?>
                </div>
            
<?php
    }
      if(isset($theme_widgets['tutor']) && $theme_widgets['tutor']['display']){
        $widget=$theme_widgets['tutor'];
     
 ?>

                <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                    <h1><?php echo $widget['title']; ?></h1>
                    <div id="owl-slide">
                        <?php $where=['recommended'=>'1']; $articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => $where,
    'limit'   => $widget['vars']['count'],
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['category']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                            <div class="tweet-box">
                                <i class="fa fa-newspaper-o"></i>
                                <em><?php echo $vo['post_title']; ?>
                                    <a href="<?php echo url('portal/Article/index',['id'=>$vo['id'],'cid'=>$vo['category_id']]); ?>"> 查阅 </a>
                                </em>
                            </div>
                        
<?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            
<?php
    }
 ?>


            <!-- <?php
     if(isset($theme_widgets['bottom_nav']) && $theme_widgets['bottom_nav']['display']){
        $widget=$theme_widgets['bottom_nav'];
     
 ?>

                <div class="col-lg-4 col-sm-4">
                    <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                        <h1><?php echo $widget['vars']['nav_name']; ?></h1>
                        <?php
/*start*/
if (!function_exists('__parse_navigation_946c51cdfa4f8061404bd6876c29e562')) {
    function __parse_navigation_946c51cdfa4f8061404bd6876c29e562($menus,$level=1){
        $_parse_navigation_func_name = '__parse_navigation_946c51cdfa4f8061404bd6876c29e562';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): ?>
    <li class="">
    
                                <i class="fa fa-angle-right"></i>
                                <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                            
    </li>
<?php endif; ?>
                        
        <?php endforeach; endif; else: echo "" ;endif; 
    }
}
/*end*/
    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray($widget['vars']['nav_cat'],0);
if('ul'==''): ?>
    <?php echo __parse_navigation_946c51cdfa4f8061404bd6876c29e562($menus); else: ?>
    <ul id="" class="page-footer-list">
        <?php echo __parse_navigation_946c51cdfa4f8061404bd6876c29e562($menus); ?>
    </ul>
<?php endif; ?>

                    </div>
                </div>
            
<?php
    }
 ?>

 -->
            <?php
     if(isset($theme_widgets['text_widget']) && $theme_widgets['text_widget']['display']){
        $widget=$theme_widgets['text_widget'];
     
 ?>

                <div class="col-lg-4 col-sm-4">
                    <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <h1><?php echo $widget['vars']['title']; ?></h1>
                        <p><?php echo $widget['vars']['content']; ?></p>
                        <!-- <?php if(!(empty($widget['vars']['image']) || (($widget['vars']['image'] instanceof \think\Collection || $widget['vars']['image'] instanceof \think\Paginator ) && $widget['vars']['image']->isEmpty()))): ?>
                            <img src="<?php echo cmf_get_image_url($widget['vars']['image']); ?>" class="img-responsive">
                        <?php endif; ?> -->
                    </div>
                </div>
            
<?php
    }
 ?>


        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>
                        <?php echo (isset($theme_vars['copyright']) && ($theme_vars['copyright'] !== '')?$theme_vars['copyright']:''); ?> &emsp;
                        <?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?>
                            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a>
                            <?php else: ?>
                            请在后台设置"网站信息"设置"备案信息"
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--small footer end-->
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



    <script type="text/javascript" src="/themes/Acme/public/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="/themes/Acme/public/assets/owlcarousel/owl.carousel.js"></script>
    <script src="/themes/Acme/public/assets/js/superfish.js"></script>
    <script type="text/javascript" src="/themes/Acme/public/assets/js/parallax-slider/jquery.cslider.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#da-slider').cslider({
                autoplay: true,
                bgincrement: 100
            });
        });

        jQuery(document).ready(function () {
            $('.bxslider1').bxSlider({
                minSlides: 5,
                maxSlides: 6,
                slideWidth: 360,
                slideMargin: 2,
                moveSlides: 1,
                responsive: true,
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '下一个 →',
                prevText: '← 上一个'
            });
        });

        $('a.info').tooltip();

        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });

        $(document).ready(function () {
            $("#owl-demo").owlCarousel({items: 4});
        });

        jQuery(document).ready(function () {
            jQuery('ul.superfish').superfish();
        });

        new WOW().init();
    </script>

<?php 
    \think\facade\Hook::listen('before_body_end',null,false);
 ?>
</body>
</html>