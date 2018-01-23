<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php  $al_options = get_option('al_general_settings'); ?>
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php if(!empty($al_options['al_favicon'])) { ?>
	<link rel="shortcut icon" href="<?php echo esc_url($al_options['al_favicon']);?>" type="image/x-icon">
	<?php } ?>
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/img/apple-touch-icon-144.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/img/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/img/apple-touch-icon-57.png" rel="apple-touch-icon-precomposed">
	<style>body{background-image: url('<?php if(!empty($al_options['al_bg_img'])):
	echo esc_url($al_options['al_bg_img']); endif; ?>')!important; background-color: #031634;}
	.section-item-title-1 {
	<?php $vt_header_color = get_header_textcolor(); if(!empty($vt_header_color)):?>
	color: #<?php echo get_header_textcolor();?>!important;
	}
	<?php endif; ?>
	</style>
	<?php 
	if ( is_singular() && comments_open() && get_option('thread_comments') )
	wp_enqueue_script( 'comment-reply' );
	wp_head(); 
	?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#side-menu">
<!-- Page Loader
========================================================= -->
<?php if(!empty($al_options['al_loader_option'])):
	if($al_options['al_loader_option'] == 'yes'):
?>
<div class="loader" id="page-loader"> 
  <div class="loading-wrapper">
    <div class="tp-loader spinner"></div>
    <!-- Edit With Your Name -->
    <div class="side-menu-name">
	    <?php if(!empty($al_options['al_name'])):
	$vt_string = esc_attr($al_options['al_name']);	
	$pieces = explode(" ", $vt_string);
	$i=0;
	foreach($pieces as $pieces1):
	if($i==0):
	echo esc_attr($pieces1).' <strong>';
	else:
	echo esc_attr($pieces1).' ';
	endif; 
	$i++;
	endforeach;
	?>
	</strong>
	<?php endif; ?>
      <!--John <strong>Rex</strong>-->
    </div>
    <!-- /Edit With Your Name -->
    <!-- Edit With Your Job -->
    <p class="side-menu-job"><?php if(!empty($al_options['al_title_designation'])):
		echo esc_attr($al_options['al_title_designation']); endif; ?></p>
    <!-- /Edit With Your Job -->
  </div>   
</div>
<?php endif; ?>
<?php endif; ?>
<!-- /End of Page loader
========================================================= -->

<!-- SIDE MENU
========================================================= -->
<div class="side-menu-open hidden-sm mob-open">
  <!-- Menu-button -->
    <a href="#" class="btn btn-default side-menu-button"><i class="fa fa-bars"></i> <?php if(!empty($al_options['al_menutitle'])):
		echo esc_attr($al_options['al_menutitle']); else: echo 'MENU'; endif; ?></a>
  <!-- /menu-button -->
</div>
<!-- Side Menu container -->
<div class="side-menu">
  <!-- close button -->
  <span id="side-menu-close"><i class="fa fa-times"></i></span>
  <!-- /close button -->


  <!-- Menu header -->
  <?php if($al_options['al_choose_logoname'] == 'No'): ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php if(!empty($al_options['al_logoimg'])): echo esc_attr($al_options['al_logoimg']); endif; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	</a>
	<p class="side-menu-job"></p>
  <?php  endif; ?>
  <?php if($al_options['al_choose_logoname'] == 'Yes'): ?>
  <div class="side-menu-name">
    <!-- edit with your name
	John <strong>Rex</strong>
	-->
    <?php if(!empty($al_options['al_name'])):
	$vt_string = esc_attr($al_options['al_name']);	
	$pieces = explode(" ", $vt_string);
	$i=0;
	foreach($pieces as $pieces1):
	if($i==0):
	echo esc_attr($pieces1).' <strong>';
	else:
	echo esc_attr($pieces1).' ';
	endif; 
	$i++;
	endforeach;
	?>
	</strong>
	<?php endif; ?>
    <!-- /edit with your name -->
  </div>
  <!-- edit with your Job -->
  <p class="side-menu-job"><?php if(!empty($al_options['al_title_designation'])):
		echo esc_attr($al_options['al_title_designation']); endif; ?></p>
  <?php  endif; ?>
  <!-- /edit with your job -->
  <!-- /Menu Header -->

  <!-- Main Navigation -->
  <nav id="side-menu" class="side-menu-este">
	<?php		
		$header_menu_args = array(
			'theme_location'  => 'vt-menu',
			'container'       => '',
			'menu_class'      => 'sf-menu nav side-menu-nav',
			'menu_id'         => 'nav',
			'echo' => true,
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => 0,
			'walker'          => new vt_description_walker()
			);
		wp_nav_menu( $header_menu_args );
	?>
  </nav>
  <!-- /Main Navigation-->

  <!-- Other Buttons -->
  <div class="side-menu-buttons">
  <?php if($al_options['al_show_down_resume'] == 'yes'): 
  if(!empty($al_options['al_upload_resume'])): ?>
    <a href="<?php if(!empty($al_options['al_upload_resume'])): echo esc_url($al_options['al_upload_resume']); endif; ?>" class="btn btn-side-menu"><i class="fa fa-download"></i> <?php if(!empty($al_options['al_show_down_r_text'])): echo esc_attr($al_options['al_show_down_r_text']); endif; ?></a>
  <?php endif; ?>
  <?php endif; ?>
  <?php if(!empty($al_options['al_show_contact_us_link'])): ?>  
  <?php if($al_options['al_show_contact_us'] == 'yes'): ?>  
    <a href="<?php if(!empty($al_options['al_show_contact_us_link'])): echo esc_url($al_options['al_show_contact_us_link']); else: echo '#'; endif; ?>" class="btn btn-side-menu"><i class="fa fa-envelope-o"></i> <?php if(!empty($al_options['al_show_contact_us_text'])): echo esc_attr($al_options['al_show_contact_us_text']); endif; ?></a>
  <?php endif; ?>
  <?php endif; ?>
  </div>
  <!-- /Other Buttons-->
</div>
<!-- /side menu container -->

<!-- /SIDE MENU
========================================================= -->