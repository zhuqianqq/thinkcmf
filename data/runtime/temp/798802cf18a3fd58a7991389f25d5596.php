<?php /*a:4:{s:64:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/portal\article.html";i:1530020615;s:61:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\head.html";i:1530020458;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\header.html";i:1530020586;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\footer.html";i:1530003725;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $article['post_title']; ?></title>
<meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
<meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
<link href="/themes/ty001/public/skin/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="/themes/ty001/public/skin/css/swiper.min.css">
<link href="/themes/ty001/public/skin/css/common.css" rel="stylesheet">

</head>
<body>
<div class="header container-full">
        <?php $logo=empty($theme_vars['logo'])?'':$theme_vars['logo']; ?>
        <div class="container clearfix"> <a href="/" class="logo"><img src="<?php echo cmf_get_image_url($logo); ?>" alt="<?php echo (isset($theme_vars['company_name']) && ($theme_vars['company_name'] !== '')?$theme_vars['company_name']:'豫唐'); ?>"></a>
          <div class="nav">
            <ul>
              <li class="nav-logo"><a href="/"><img src="<?php echo cmf_get_image_url($logo); ?>" alt="<?php echo (isset($theme_vars['company_name']) && ($theme_vars['company_name'] !== '')?$theme_vars['company_name']:'豫唐'); ?>"/></a></li>
              <?php
/*start*/
if (!function_exists('__parse_navigation_827f974a532ed903696d10999e454ae8')) {
    function __parse_navigation_827f974a532ed903696d10999e454ae8($menus,$level=1){
        $_parse_navigation_func_name = '__parse_navigation_827f974a532ed903696d10999e454ae8';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if($level == '1'): if(empty($menu['children'])): ?>
    <li class="">
    
                      <a  href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                  
    </li>
<?php endif; else: if(empty($menu['children'])): ?>
    <dd class="">
    
                          <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                      
    </dd>
<?php endif; ?>
                  <?php endif; if(!empty($menu['children'])): ?>
    <li class="dropdown">
        
                      <a href="javascript:void(0);"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                  
        <dl class="">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </dl>
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
          <div class="search">
            <form name="formsearch" method="post" action="<?php echo cmf_url('portal/Search/index'); ?>">
              <input type="text" name="keyword" placeholder="Search" value="<?php echo input('param.keyword',''); ?>" class="input" />
              <input name="" type="submit" value="" class="submit" />
            </form>
          </div>
          <button class="nav-toggle"> <span></span> <span></span> <span></span> </button>
        </div>
      </div>
<div class="banner swiper-container">
<?php if(!(empty($theme_vars['banner']) || (($theme_vars['banner'] instanceof \think\Collection || $theme_vars['banner'] instanceof \think\Paginator ) && $theme_vars['banner']->isEmpty()))): ?>
<div class="swiper-wrapper">
  <div class="swiper-slide"><a><img src="<?php echo cmf_get_image_url($theme_vars['banner']); ?>"/></a></div>
</div>
<?php endif; ?>
<div class="main">
  <div class="main-header">
    <div class="container clearfix"> 
      <div class="position"><a href='/'>主页</a> > <?php echo $article['post_title']; ?> > </div>
    </div>
  </div>
  <div class="artical container clearfix">
    <div class="artical-header">
      <h1><?php echo $article['post_title']; ?></h1>
      <p><span>发表时间：<?php echo date('Y-m-d H:i',$article['published_time']); ?></span><span>浏览量：<font id="hits"><?php echo $article['post_hits']; ?></font></span></p>
    </div>
        <?php 
            $before_content_hook_param=[
            'object_id'=>$article['id'],
            'table_name'=>'portal_post',
            'object_title'=>$article['post_title'],
            'user_id'=>$article['user_id'],
            'url'=>cmf_url_encode('portal/Article/index',array('id'=>$article['id'],'cid'=>$category['id'])),
            'object'=>$article
            ];
         
    \think\facade\Hook::listen('before_content',$before_content_hook_param,false);
 ?>
    <div class="artical-body"> 
            <?php echo $article['post_content']; ?>
    </div>
    <?php 
            $after_content_hook_param=[
            'object_id'=>$article['id'],
            'table_name'=>'portal_post',
            'object_title'=>$article['post_title'],
            'user_id'=>$article['user_id'],
            'url'=>cmf_url_encode('portal/Article/index',array('id'=>$article['id'],'cid'=>$category['id'])),
            'object'=>$article
            ];
         
    \think\facade\Hook::listen('after_content',$after_content_hook_param,false);
 ?>
        <div class="artical-footer clearfix">
        <div class="choose-artical">
          <?php if(!empty($prev_article)): ?>
            <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$prev_article['id'],'cid'=>$category['id'])); ?>" class="btn btn-primary" title="<?php echo $prev_article['post_title']; ?>">上一篇:<?php echo $prev_article['post_title']; ?></a>
          <?php endif; if(!empty($next_article)): ?>
            <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$next_article['id'],'cid'=>$category['id'])); ?>" class="btn btn-success pull-right" title="<?php echo $next_article['post_title']; ?>">下一篇:<?php echo $next_article['post_title']; ?></a>
          <?php endif; ?>
        </div>
        </div>
  </div>
</div>
<div class="footer container-full">
  <?php 
    \think\facade\Hook::listen('footer_start',null,false);
 ?>
        <div class="web-info">
          <div class="container clearfix">
            <div class="l">Copyright &copy; 2018 ThinkCMF5. 版权所有 备案号：<?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?><a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a><?php else: ?>请在后台设置"网站信息"设置"ICP备"<?php endif; ?></div>
            <div class="r"><a>友情链接</a>：
            <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>" target="<?php echo (isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:''); ?>"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a>&nbsp;
            
<?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
        </div>
</div>
<div class="go-top"> </div>
<script src="/themes/ty001/public/skin/js/jquery.min.js"></script> 
<script src="/themes/ty001/public/skin/js/web.js"></script> 
</body>
</html>