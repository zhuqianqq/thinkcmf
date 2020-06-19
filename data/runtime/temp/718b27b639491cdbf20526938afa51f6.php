<?php /*a:2:{s:76:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/portal\list.html";i:1591240832;s:76:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/hjDesign004/public\head.html";i:1591164412;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $category['name']; ?> <?php echo $category['seo_title']; ?> <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
		<meta name="keywords" content="<?php echo $category['seo_keywords']; ?>,<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>" />
		<meta name="description" content="<?php echo $category['seo_description']; ?>,<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
		

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
		<?php 
    \think\facade\Hook::listen('before_head_end',null,false);
 ?>
	</head>

	<body class="body-white">
		<?php echo $category['name']; ?>
	</body>

</html>