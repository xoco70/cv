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
				<?php printf( __( 'Search Results for: %s', 'vt' ), '<span>' . get_search_query() . '</span>' ); ?>
			</span>
		</h1>
	</div>

    <div class="line row mar_bot">
		<div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
		<div class="col-md-7 content-wrap bg1">
			<div class="timeline line-content line-content-education">
				<h3 class="section-item-title-1"><?php _e( 'Error: 404', 'vt' ); ?></h3>
				<div class="entry-content">
					<p><?php _e( "404 error, couldn't find the content you were looking for.", 'vt' ); ?></p>
				</div>
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