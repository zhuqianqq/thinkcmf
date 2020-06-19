<?php /*a:8:{s:61:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/portal\listm.html";i:1592538218;s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\base.html";i:1523429066;s:60:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\head.html";i:1555462698;s:64:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\function.html";i:1523429823;s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\header.html";i:1592472542;s:66:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\breadcrumb.html";i:1523429318;s:62:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\footer.html";i:1592530948;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/Acme/public\scripts.html";i:1523698744;}*/ ?>
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

    
        <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    

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


    <!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1><?php echo $category['name']; ?></h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="/">首页</a></li>
                    <?php
if(!empty($category['id'])){
    $__BREADCRUMB_ITEMS__ = \app\portal\service\ApiService::breadcrumb($category['id'],false);
if(is_array($__BREADCRUMB_ITEMS__) || $__BREADCRUMB_ITEMS__ instanceof \think\Collection || $__BREADCRUMB_ITEMS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__BREADCRUMB_ITEMS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    
                        <li><a href="<?php echo url('portal/List/index',['id'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a></li>
                    
<?php endforeach; endif; else: echo "" ;endif; }
?>
                    <li class="active"><?php echo $category['name']; ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->
    <!--container start-->
    <div class="container">
        <div class="row">
            <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '',
    'order'   => 'post.create_time DESC',
    'page'    => '0',
    'relation'=> 'categories',
    'category_ids'=>$category['id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <div class="col-md-6">
                    <?php $fade_class = $i%2==0 ? 'fadeInRight' : 'fadeInLeft'; ?>
                    <div class="blog-left wow <?php echo $fade_class; ?>">
                        <div class="blog-img">
                            <img src="<?php echo cmf_get_image_url((isset($vo['more']['thumbnail']) && ($vo['more']['thumbnail'] !== '')?$vo['more']['thumbnail']:'/themes/Acme/public/assets/img/php.jpg')); ?>" alt="<?php echo $vo['post_title']; ?>" class="img-responsive"/>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-two-info">
                                    <p>
                                        <i class="fa fa-user"></i> 来源：<?php echo (isset($vo['post_source']) && ($vo['post_source'] !== '')?$vo['post_source']:'本站'); ?> |
                                        <i class="fa fa-calendar"></i> <?php echo cmf_get_date($vo['published_time'],'Y-m-d H:i'); ?> 
                                        <!-- <i class="fa fa-comment"></i> <a href="#"><?php echo $vo['comment_count']; ?> 回复</a> |
                                        <i class="fa fa-heart"></i> <a href="#"><?php echo $vo['post_like']; ?> 收藏</a> |
                                        <i class="fa fa-eye"></i> <?php echo $vo['post_hits']; ?> 查阅 -->

                                        <?php $keywords = explode(',',$vo['post_keywords']); if(!(empty($keywords) || (($keywords instanceof \think\Collection || $keywords instanceof \think\Paginator ) && $keywords->isEmpty()))): ?>
                                            <br>
                                            <i class="fa fa-tags"></i> 标签：
                                            <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): if( count($keywords)==0 ) : echo "" ;else: foreach($keywords as $key=>$v): ?>
                                                <span class="label label-info"><?php echo $v; ?></span>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3><?php echo $vo['post_title']; ?></h3>
                            <p><?php echo $vo['post_excerpt']; ?></p>
                        </div>
                        <a href="<?php echo cmf_url('portal/Article/index',['id'=>$vo['id'],'cid'=>$category['id']]); ?>" class="btn btn-primary">
                            查看详情
                        </a>
                    </div>
                </div>
            
<?php endforeach; endif; else: echo "" ;endif; ?>
            <!--blog end-->
        </div>
    </div>
    <!--container end-->


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
                        <?php if(!(empty($widget['vars']['image']) || (($widget['vars']['image'] instanceof \think\Collection || $widget['vars']['image'] instanceof \think\Paginator ) && $widget['vars']['image']->isEmpty()))): ?>
                            <img src="<?php echo cmf_get_image_url($widget['vars']['image']); ?>" class="img-responsive">
                        <?php endif; ?>
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



    <script>
        wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0          // default
            }
        )
        wow.init();
    </script>

<?php 
    \think\facade\Hook::listen('before_body_end',null,false);
 ?>
</body>
</html>