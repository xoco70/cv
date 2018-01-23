<?php get_header(); ?>
<section id="content-body" class="vt_animate container">
  <div class="row introclass">

<!-- Header Colors -->
<div class="col-md-10 col-sm-10  col-md-offset-2 col-sm-offset-1 clearfix top-colors">
	<div class="top-color top-color1"></div>
	<div class="top-color top-color2"></div>
	<div class="top-color top-color3"></div>
	<div class="top-color top-color1"></div>
	<div class="top-color top-color2"></div>
</div>
<!-- /Header Colors -->     

<div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-1 resume-container">
	<div class="line row">
		<h1 class="intro-title1 def_ttitle">
			<span class="color1 bold">
				<?php single_cat_title(); ?>
			</span>
		</h1>
	</div>

<!-- Beginning of Content -->

    <div class="line row mar_bot">
		<!-- Margin Collums (necessary for the timeline effect) -->
		<div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
		<!-- /Margin Collums -->
		<!-- Item Content -->
		<div class="col-md-7 content-wrap bg1">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php 
				$vt_dat=array();$vt_dy="";
				$vt_dt=get_the_date();
				$vt_dat =  preg_split('[ /.-]', $vt_dt);
				$vt_dm=$vt_dat[0];
				list($month,$vt_dy,$year)=explode(' ', $vt_dm);
				list($day) = explode(',', $vt_dy);
			?>
			<div class="timeline line-content line-content-education">
				<a href="<?php the_permalink();?>">
					<h3 class="section-item-title-1"><?php the_title(); ?></h3>
				</a>
				<h4 class="graduation-time"><i class="fa fa-university"></i> <?php the_author(); ?> <?php _e('-','vt'); ?> <span class="graduation-date"><?php the_time('d/m/Y') ?></span></h4>
				<div class="graduation-description">
					<p><?php the_content();?></p>
				</div>
                <!-- /Content -->
				  <?php comments_template( '', true ); ?>
				  <?php wp_link_pages(); ?> 
				<div class="disp"><?php the_tags(); ?></div>
            </div>
			
			<div class="disp"><?php comment_form(); the_post_thumbnail(); the_tags(); ?></div>
			<?php endwhile; ?>
			<?php endif; ?>	
			<div class="pagination">
				<?php if (function_exists("pagination")) {
					pagination($wp_query->max_num_pages);
				} ?>
			</div>
			<?php if ( ( $locations = get_nav_menu_locations() ) && $locations['vt-menu'] ) {
			$menu = wp_get_nav_menu_object( $locations['vt-menu'] );
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			$include = array();
			foreach($menu_items as $item) {
			if($item->object == 'page')
			$include[] = $item->object_id;
			}
			query_posts( array( 'post_type' => 'page', 'post__in' => $include, 'posts_per_page' => count($include), 'orderby' => 'post__in' ) );
			}?>	
        </div>
		
		<div class="col-md-4 content-wrap bg1">
			<div class="graduation-description">
				<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
			</div>
		</div>		
	</div>

<?php get_footer(); ?>	  