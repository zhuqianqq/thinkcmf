<?php /*a:4:{s:79:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/portal\article.html";i:1591344984;s:76:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\head.html";i:1591164412;s:78:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\footer.html";i:1591154483;s:79:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\scripts.html";i:1585280144;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <title><?php echo $article['post_title']; ?></title>
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
    	.content_center{
    		width: 500px;margin: 0 auto;
    	}
    	.list_item{
    		width: 100%;position: relative;height: 250px;margin-top: 50px;
    	}
    	.list_item .img{
    		width: 250px;height: 250px;position: absolute;left: 0;top: 0;
    	}
    	.list_item .right{
    		width: 270px;height: 210px;background-color: #ccc;position: absolute;left: 230px;top: 20px;background-color: #fff;z-index: 10;
    	}
    	.list_item .right2{
    		left: 0;
    	}
    	.list_item .img2{
    		left: 250px;
    	}
    	.list_item .right .title{
    		font-size: 20px;font-weight: bold;line-height: 20px;margin-top: 20px;text-align: center;font-family:Source Han Sans CN;
    	}
    	.flex_item{
    		display: flex;margin-left: 55px;margin-top: 30px;
    	}
    	.flex_item .icons{
    		width:6px;
			height:6px;
			background:rgba(252,87,38,1);
			border-radius:50%;position: relative;top: 4px;
    	}
    	.flex_item .rights{
    		width:95px;
			height:31px;
			font-size:12px;
			font-family:Source Han Sans CN;
			font-weight:400;
			color:rgba(102,102,102,1);
			line-height:19px;margin-left: 5px;
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


	<?php if(empty($article['more']['photos'][0]['url']) || (($article['more']['photos'][0]['url'] instanceof \think\Collection || $article['more']['photos'][0]['url'] instanceof \think\Paginator ) && $article['more']['photos'][0]['url']->isEmpty())): ?>
		<!-- <img style="width: 100%;height:310px" src="http://iph.href.lu/1200x800"
			alt=""> -->
		<?php else: ?>
		<img width="100%" src="<?php echo cmf_get_image_url($article['more']['photos'][0]['url']); ?>" alt="">
		<img src="<?php echo cmf_get_image_url($theme_vars['logo']); ?>" style="position: absolute;left: 20px;top: 20px;background-color: red;width: 50px;height: 50px;">
		<div style="position: absolute;left: 78px;top: 28px;color:white;font-size: 26px;font-style:oblique;font-weight: 300;">
				<?php echo (isset($theme_vars['logo_name']) && ($theme_vars['logo_name'] !== '')?$theme_vars['logo_name']:''); ?>
		</div>
	<?php endif; ?>

	<!--inner-blog-part start-->

	<div style="background-color: #F9F9F9;padding: 30px 0 70px 0;">

		<?php 

        	$json_content = $article['json_content'] ? json_decode($article['json_content'],true) : '';

         if(empty($json_content) || (($json_content instanceof \think\Collection || $json_content instanceof \think\Paginator ) && $json_content->isEmpty())): ?>

        	<div style="text-align: center;font-size: 20px;font-weight: 600">
        		
        		暂无内容！
        		
        	</div>

        <?php else: ?>
			
			<div class="content_center">

				<?php foreach($json_content as $key=>$vo): if($key%2==0): ?>
			        	<div class="list_item">
			        		<img src="<?php echo cmf_get_image_url($vo['img']); ?>" class="img">

			            	<div class="right">
			            		<div class="title"><?php echo $vo['json_title']; ?></div>
			            		<div class="flex_item">
			            			<div class="icons"></div>
			            			<div class="rights"><?php echo $vo['json_subtitle1']; ?></div>
			            		</div>
			            		<div class="flex_item">
			            			<div class="icons"></div>
			            			<div class="rights"><?php echo $vo['json_subtitle2']; ?></div>
			            		</div>
			            	</div>
			        	</div>

		        	<?php else: ?>

			        	<div class="list_item">
			        		<div class="right right2">
			            		<div class="title"><?php echo $vo['json_title']; ?></div>
			            		<div class="flex_item">
			            			<div class="icons"></div>
			            			<div class="rights"><?php echo $vo['json_subtitle1']; ?></div>
			            		</div>
			            		<div class="flex_item">
			            			<div class="icons"></div>
			            			<div class="rights"><?php echo $vo['json_subtitle2']; ?></div>
			            		</div>
			            	</div>
			        		<img src="<?php echo cmf_get_image_url($vo['img']); ?>" class="img img2">

			            	
			        	</div>


		        	<?php endif; ?>

	        	<?php endforeach; ?>

	        	
	    	</div>
        	

		<?php endif; ?>

	</div>
	<!--inner-blog-part end-->


    
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