<?php /*a:4:{s:78:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/portal\\index.html";i:1591346301;s:76:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\head.html";i:1591164412;s:78:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\footer.html";i:1591154483;s:79:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\scripts.html";i:1585280144;}*/ ?>
<!DOCTYPE html>
<html lang="zxx">

<head>

	<title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>" />
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
	

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap 4 -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/bootstrap.min.css">
<!-- owlcarousel min css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/owl.carousel.min.css">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/slick.css">
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/animate.css">
<!-- slick-theme css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/slick-theme.css">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/fonts/flaticon.css">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/font-awesome.min.css">
<!-- rsmenu CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/rsmenu-main.css">
<!-- rsmenu transitions CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/rsmenu-transitions.css">
<!-- offcanvas CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/off-canvas.css">
<!-- rsanimations CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/rsanimations.css">
<!-- magnific-popup CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/magnific-popup.css">
<!-- spaceing css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/rs-spaceing.css">
<!-- Style CSS -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/responsive.css">

<!-- footer css -->
<link rel="stylesheet" type="text/css" href="/themes/hjDesign004/public/assets/css/footer.css">
	<style type="text/css">
		p{
			margin: 0;
		}
		
	</style>
</head>

<body>

	<!-- Preloader start here -->
	<div id="medvill-load">
		<div class="medvill-loader la-2x">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!--Preloader end here -->

	<!--rs-expertise-part end-->

	<?php
     if(isset($theme_widgets['feedback']) && $theme_widgets['feedback']['display']){
        $widget=$theme_widgets['feedback'];
     
 ?>

		<!--rs-happy-patients-part2 start-->
		<?php 

			$bg = empty($widget['vars']['bg']) ? '' : $widget['vars']['bg'];
			$bg = cmf_get_image_url($bg);
				
		 ?>
		<div class="feedImg" style="position: relative;">
			<img src="<?php echo $bg; ?>" width="100%" >
			<img src="<?php echo cmf_get_image_url($theme_vars['logo']); ?>" style="position: absolute;left: 20px;top: 20px;width: 50px;height: 50px;">
			<div style="position: absolute;left: 78px;top: 28px;color:white;font-size: 26px;font-style:oblique;font-weight: 300;">
				<?php echo (isset($theme_vars['logo_name']) && ($theme_vars['logo_name'] !== '')?$theme_vars['logo_name']:''); ?>
			</div>
		</div>
		<!--rs-happy-patients-part2 end-->
	
<?php
    }
 
		$widget["vars"]["last_news_category_id"] =
		empty($widget["vars"]["last_news_category_id"])?1:$widget["vars"]["last_news_category_id"];
		$last_news_limit=6;
	 ?>

	<div class="content" style="background-color: #F9F9F9;width: 100%;display: flex;justify-content:center;">
		<div style="width: 1080px;margin: 0 auto;margin-top: 30px;margin-bottom: 30px;display: flex;justify-content: space-between;flex-wrap: wrap;">

			<?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => $last_news_limit,
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_news_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
				//var_dump($vo->toArray());
			
				
			 ?>

			<div style="width:320px;background:rgba(255,255,255);display: flex;flex-direction: column;justify-content:center;padding: 15px;text-align: center;margin-bottom: 35px;">
				<div>
					
						<img src="<?php echo cmf_get_image_url($vo->thumbnail); ?>" style="background-color: #ccc;width: 80px;height: 80px;">
					
				</div>
				<div style="font-size: 12px;font-weight: bold;color: #333333"><?php echo (isset($vo['post_title']) && ($vo['post_title'] !== '')?$vo['post_title']:''); ?></div>
				<div style="font-size: 12px;color: #666666; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;width: 200px;margin: 0 auto; ">
					<?php echo (isset($vo['post_excerpt']) && ($vo['post_excerpt'] !== '')?$vo['post_excerpt']:''); ?>
				</div>
				<div style="width:55px;height:22px;background:rgba(187,187,187,0);border:1px solid rgba(43,136,241,1);border-radius:5px;line-height: 22px;text-align: center;color: #2B88F1;font-size: 12px;margin-left: 115px;margin-top: 15px">
					<a href="<?php echo url('portal/Article/index',array('id'=>$vo['id'],'cid'=>$vo['category_id'])); ?>">查看详情</a>
				</div>
			</div>

			
<?php endforeach; endif; else: echo "" ;endif; ?>

			
		</div>
	</div>
	<!--rs-latest-part-part part2 end-->
	</widget>

	
	
<div class="footer">
	    <div class="content">
	      <p class="tip"><?php echo (isset($theme_vars['footer_desc']) && ($theme_vars['footer_desc'] !== '')?$theme_vars['footer_desc']:''); ?></p>
	      <p class="tip1">
	        地址：<?php echo (isset($theme_vars['footer_address']) && ($theme_vars['footer_address'] !== '')?$theme_vars['footer_address']:''); ?> <br />
	        电话：<?php echo (isset($theme_vars['footer_time']) && ($theme_vars['footer_time'] !== '')?$theme_vars['footer_time']:''); ?> <br />
	        邮箱：<?php echo (isset($theme_vars['footer_email']) && ($theme_vars['footer_email'] !== '')?$theme_vars['footer_email']:''); ?> <br />
	      </p>
	      <p class="tip2">
	        <?php echo (isset($theme_vars['footer_copyright']) && ($theme_vars['footer_copyright'] !== '')?$theme_vars['footer_copyright']:''); ?>
	      </p>
	    </div>
</div>
	<!-- modernizr js -->
<script src="/themes/hjDesign004/public/assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="/themes/hjDesign004/public/assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://cdn.bootstrapmb.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- op menu js -->
<script src="/themes/hjDesign004/public/assets/js/jquery.nav.js"></script>
<!-- wow js -->
<script src="/themes/hjDesign004/public/assets/js/wow.min.js"></script>
<!-- counter top js -->
<script src="/themes/hjDesign004/public/assets/js/jquery.counterup.min.js"></script>
<script src="/themes/hjDesign004/public/assets/js/waypoints.min.js"></script>
<!-- rsmenu js -->
<script src="/themes/hjDesign004/public/assets/js/rsmenu-main.js"></script>
<!---owlcarousel.min.js-->
<script src="/themes/hjDesign004/public/assets/js/owl.carousel.min.js"></script>
<!---jquery.magnific-popup.min.js-->
<script src="/themes/hjDesign004/public/assets/js/jquery.magnific-popup.min.js"></script>
<!-- slick.min.js -->
<script src="/themes/hjDesign004/public/assets/js/slick.min.js"></script>
<!-- main js -->
<script src="/themes/hjDesign004/public/assets/js/main.js"></script>
</body>

</html>
