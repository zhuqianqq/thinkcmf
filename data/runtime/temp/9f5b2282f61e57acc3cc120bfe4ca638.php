<?php /*a:4:{s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/portal\\index.html";i:1592448757;s:61:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\head.html";i:1530020458;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\header.html";i:1530020586;s:63:"D:\phpstudy_pro\WWW\wywl\public/themes/ty001/public\footer.html";i:1530003725;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
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
    <div class="swiper-wrapper">
        <?php $top_slide_id=empty($theme_vars['top_slide'])?1:$theme_vars['top_slide'];      $__SLIDE_ITEMS__ = \app\admin\service\ApiService::slides($top_slide_id);
if(is_array($__SLIDE_ITEMS__) || $__SLIDE_ITEMS__ instanceof \think\Collection || $__SLIDE_ITEMS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SLIDE_ITEMS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

        <div class="swiper-slide"><a><img src="<?php echo cmf_get_image_url($vo['image']); ?>" alt="<?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?>"></a></div>
        
<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next">></div>
  <div class="swiper-button-prev"><</div>
</div>
<?php
     if(isset($theme_widgets['features']) && $theme_widgets['features']['display']){
        $widget=$theme_widgets['features'];
     
 ?>

<div class="about container-full">
  <div class="section-header"> <h3><span class="black">关于我们</span></h3>
    <p>ABOUT US</p>
    <div class="line"><span></span></div>
  </div>
  <div class="about-body clearfix container">
    <div class="about-us-l">
      <h1><?php echo $widget['vars']['sub_name']; ?></h1>
      <span class="line"></span>
      <p><?php echo $widget['vars']['sub_into']; ?></p>
      <a href="<?php echo $widget['vars']['sub_url']; ?>">查看详情</a> </div>
    <div class="about-us-r clearfix">
      <ul>
        <?php 
          $first_row = 3;
          $features = array_slice($widget['vars']['features'],0,3);
         if(is_array($features) || $features instanceof \think\Collection || $features instanceof \think\Paginator): if( count($features)==0 ) : echo "" ;else: foreach($features as $key=>$vo): ?>
        <li>
          <div class="content"> <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>">
            <?php if(!(empty($article['more']['themes']) || (($article['more']['themes'] instanceof \think\Collection || $article['more']['themes'] instanceof \think\Paginator ) && $article['more']['themes']->isEmpty()))): ?>
              <img src="/themes/ty001/public/skin/images/default-thumbnail.png" alt="<?php echo $vo['title']; ?>">
            <?php else: ?>
              
            <?php endif; ?>
            </a>
            <h4><a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>"><?php echo $vo['title']; ?></a></h4>
            <p><?php echo $vo['content']; ?></p>
          </div>
        </li> 
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</div>

<?php
    }
      if(isset($theme_widgets['last_case']) && $theme_widgets['last_case']['display']){
        $widget=$theme_widgets['last_case'];
     
 ?>

<div class="agency-brand container-full">
  <div class="section-header"> <h3><span class="black">产品展示</span></h3>
    <p>product</p>
    <div class="line"><span></span></div>
  </div>
  <div class="brand-type">
    <ul>
        <?php 
          $widget["vars"]["last_case_category_id"] = empty($widget["vars"]["last_case_category_id"])?1:$widget["vars"]["last_case_category_id"];
          $cid=$widget["vars"]["last_case_category_id"];
         $portal_sub_categories_data = \app\portal\service\ApiService::subCategories($widget['vars']['last_case_category_id']);
 
 if(is_array($portal_sub_categories_data) || $portal_sub_categories_data instanceof \think\Collection || $portal_sub_categories_data instanceof \think\Paginator): $i = 0; $__LIST__ = $portal_sub_categories_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <li><a href="<?php echo cmf_url('portal/List/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['name']; ?></a></li>
            <?php $cid=$cid.",".$vo->id; ?>
        
<?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
  <div class="brand-body on brand-body1">
    <div class="box">
      <div class="group">
        <div class="item">
          <ul>
            <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '8',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$cid
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <li> <a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>"> <?php if(isset($vo['more']['thumbnail'])): if(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty())): ?>
                    <img src="/themes/ty001/public/skin/images/default-thumbnail.png"
                         class="img-responsive"
                         alt="<?php echo $vo['post_title']; ?>">
                    <?php else: ?>
                    <img src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>"
                         class="img-responsive"
                         alt="<?php echo $vo['post_title']; ?>">
                <?php endif; else: ?>
                <img src="/themes/ty001/public/skin/images/default-thumbnail.png"
                     class="img-responsive"
                     alt="<?php echo $vo['post_title']; ?>">
            <?php endif; ?>
              <div class="mask">
                <h4><span><?php echo $vo['post_title']; ?></span></h4>
                <p></p>
                <span>查看更多+</span> </div>
              </a> </li>
            
<?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    }
      if(isset($theme_widgets['last_project']) && $theme_widgets['last_project']['display']){
        $widget=$theme_widgets['last_project'];
     
 ?>

<div class="project">
  <div class="section-header"> <h3><span class="green">成功案例</span></h3>
    <p>Case</p>
    <div class="line"><span></span></div>
  </div>
  <div class="project-body container clearfix"> <a class="btn prev" href="javascript:void(0);"><</a>
    <div class="box">
      <ul>
        <?php 
          $widget["vars"]["last_project_category_id"] = empty($widget["vars"]["last_project_category_id"])?1:$widget["vars"]["last_project_category_id"];
         $articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '8',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_project_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

        <li> <a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>" class="pic">
          <div class="content">
              <?php if(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty())): ?>
                  <img src="/themes/ty001/public/skin/images/default-thumbnail.png"
                       class="img-responsive"
                       alt="<?php echo $vo['post_title']; ?>">
                  <?php else: ?>
                  <img src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>"
                       class="img-responsive"
                       alt="<?php echo $vo['post_title']; ?>">
              <?php endif; ?>
            <div class="mask"> <span class="fdj"></span>
              <h4><?php echo $vo['post_title']; ?></h4>
              <span class="project-arrow"></span> </div>
          </div>
          </a>
          <p><a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['post_title']; ?></a></p>
        </li>
      
<?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <a class="btn next" href="javascript:void(0);">></a> </div>
</div>

<?php
    }
      if(isset($theme_widgets['last_project']) && $theme_widgets['last_project']['display']){
        $widget=$theme_widgets['last_project'];
     
 ?>

<div class="news container-full">
  <div class="section-header"> <h3><span class="green">新闻资讯</span></h3>
    <p>News</p>
    <div class="line"><span></span></div>
  </div>
  <?php 
      $widget["vars"]["last_news_category_id"] = empty($widget["vars"]["last_news_category_id"])?1:$widget["vars"]["last_news_category_id"];
      $w=[];
   ?>
  <div class="news-body container clearfix">
    <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '1',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_news_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

    <div class="important-news">
      <a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>" class="pic"> 
        <?php if(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty())): ?>
            <img src="/themes/ty001/public/skin/images/default-thumbnail.png"
                 class="img-responsive"
                 alt="<?php echo $vo['post_title']; ?>">
            <?php else: ?>
            <img src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>"
                 class="img-responsive"
                 alt="<?php echo $vo['post_title']; ?>">
        <?php endif; ?>
      <div class="date"> <span class="day"><?php echo date('d',$vo['published_time']); ?></span> <span class="month"><?php echo date('Y-m',$vo['published_time']); ?></span> </div>
      </a>
      <h4><a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['post_title']; ?></a></h4>
      <p>　　<?php echo $vo['post_excerpt']; ?>...</p>
    </div>
    
<?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="orther-news">
      <ul>
        <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '3',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_news_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

        <li>
          <div class="date"> <span class="day"><?php echo date('d',$vo['published_time']); ?></span> <span class="month"><?php echo date('Y-m',$vo['published_time']); ?></span> </div>
          <div class="content">
            <h4><a href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['post_title']; ?></a></h4>
            <p><?php echo $vo['post_excerpt']; ?>...</p>
          </div>
        </li>
        
<?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <div class="more container"> <a href="<?php echo url('portal/List/index',array('id'=>$widget["vars"]["last_news_category_id"])); ?>">查看更多</a> </div>
</div>

<?php
    }
 ?>


<div class="partner container-full">
  <div class="section-header"> <h3><span class="green">荣誉资质</span></h3>
    <p>Honor</p>
    <div class="line"><span></span></div>
  </div>
  <div class="partner-body clearfix container">
    <ul>
      <?php 
        $widget["vars"]["last_partner_category_id"] = empty($widget["vars"]["last_partner_category_id"])?1:$widget["vars"]["last_partner_category_id"];
       $articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '6',
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_partner_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

      <li> <a> <?php if(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty())): ?>
          <img src="/themes/ty001/public/skin/images/default-thumbnail.png"
               class="img-responsive"
               alt="<?php echo $vo['post_title']; ?>">
          <?php else: ?>
          <img src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>"
               class="img-responsive"
               alt="<?php echo $vo['post_title']; ?>">
      <?php endif; ?> <span class="mask"></span> </a> </li>
      
<?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
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
<script src="/themes/ty001/public/skin/js/swiper.min.js"></script> 
<script>
    var swiper = new Swiper('.banner', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 0,
        loop: true,
        autoplay: 5000
    });
    </script>
</body>
</html>