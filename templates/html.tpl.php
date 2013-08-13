<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if !IE]> --> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!-- <![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" href="<?php print base_path() . drupal_get_path('theme', 'tbr_bootstrap') . '/images/icons/touch/apple-touch-icon.png'; ?>" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php print base_path() . drupal_get_path('theme', 'tbr_bootstrap') . '/images/icons/touch/apple-touch-icon-57x57.png'; ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print base_path() . drupal_get_path('theme', 'tbr_bootstrap') . '/images/icons/touch/apple-touch-icon-72x72.png'; ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print base_path() . drupal_get_path('theme', 'tbr_bootstrap') . '/images/icons/touch/apple-touch-icon-114x114.png'; ?>" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php print base_path() . drupal_get_path('theme', 'tbr_bootstrap') . '/images/icons/touch/apple-touch-icon-144x144.png'; ?>" />
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if IE 7]>
  <link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'open_framework') . '/fontawesome/css/font-awesome-ie7.min.css'; ?>">
  <![endif]-->
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="<?php print base_path() . drupal_get_path('theme', 'open_framework') . '/js/html5shiv.js'; ?>"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?> <?php print $body_bg_type; ?> <?php print $body_bg_classes; ?> <?php print $front_heading_classes; ?> <?php print $breadcrumb_classes; ?> <?php print $border_classes; ?> <?php print $corner_classes; ?>" <?php print $attributes;?> <?php if ($body_bg_classes): ?>style="background: url('<?php print file_create_url(theme_get_setting('body_bg_path')); ?>') repeat top left;" <?php endif; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
<?php include("snippet-analytics.php"); ?>
</html>
