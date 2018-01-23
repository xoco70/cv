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
    
    <!-- Beginning of Content -->
<div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-1 resume-container">
    <div class="line row mar_bot">
	
		<div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
		
		<div class="col-md-10 content-wrap bg1">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div id="" class="timeline line-content line-content-education <?php echo $post->post_name;?>">
                <a href="<?php the_permalink();?>">
					<h3 class="section-item-title-1"><?php the_title(); ?></h3>
				</a>
				<?php the_content();?>
				<?php wp_link_pages(); ?>
			</div>
			 
			<?php endwhile;?>
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
<?php  get_footer();  ?>