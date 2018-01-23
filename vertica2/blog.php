<?php get_header(); 
/*
Template name: Blog
*/
?>
<section id="content-body" class="container animated">
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
				<?php if($al_options['al_show_blog'] == 'yes'): ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="float:right; margin-top:10px;" class="btn btn-default"><i class="fa fa-home"></i><span class="btn-hide-text"><?php _e('! ','vt'); ?><?php echo esc_attr($al_options['al_show_home_return_text']); ?></span></a>
				<?php endif; ?>
              <!-- Margin Collums (necessary for the timeline effect) -->
            <div class="line row mar_bot">
              <div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
              <!-- /Margin Collums -->
              <!-- Item Content -->
              <div class="col-md-7 content-wrap bg1">
					<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php 
						$vt_dat=array();$vt_dy="";
						$vt_dt=get_the_date();
						$vt_dat =  preg_split('[ /.-]', $vt_dt);
						$vt_dm=$vt_dat[0];
						list($month,$vt_dy,$year)=explode(' ', $vt_dm);
						list($day) = explode(',', $vt_dy);
						$m_attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
					?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="line-content line-content-education">
					<?php if(!empty($m_attachment_image)) { ?>
					  <div class="line-thumb">
							<a href="#"><img src="<?php echo esc_url($m_attachment_image[0]); ?>" alt="thumb" /></a>
					</div>
				  <?php }?>
                  <!-- Graduation title -->
                  <a href="<?php the_permalink();?>">
					<h3 class="section-item-title-1"><?php the_title(); ?></h3>
				  </a>
                  <!-- /Graduation title -->
                  <!-- Graduation time -->
                  <h4 class="graduation-time"><i class="fa fa-university"></i> <?php the_author(); ?> <?php _e('-','vt');?> <span class="graduation-date"><?php the_time('d/m/Y') ?></span></h4>
                  <!-- /Graduation time -->
                  <!-- content -->
                  <div class="graduation-description">
                    <p><?php the_content();?></p>
                  </div>
                  <!-- /Content -->
                </div>
			</article>
				<?php endwhile; ?>
				<?php endif; ?>	
				<div class="pagination">
					<?php if (function_exists("vt_pagination")) {
						vt_pagination($wp_query->max_num_pages);
					} ?>
				</div>
				
				
            </div>
			  <div class="col-md-4 content-wrap bg1">
			       <div class="graduation-description">
						<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
                  </div>
              </div>
            </div>

	
<?php get_footer(); ?>	  