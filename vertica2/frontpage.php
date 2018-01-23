<?php get_header(); 
/*Template name: Front Page Main*/
?>
<?php  $al_options = get_option('al_general_settings'); ?>
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
      
      <!-- Header Buttons -->
      <div class="row">
        <div class="header-buttons col-md-10 col-md-offset-1">
          <!-- Download Resume Button -->
		<?php if($al_options['al_show_down_resume'] == 'yes'): ?>
          <a href="<?php if(!empty($al_options['al_upload_resume'])): echo esc_url($al_options['al_upload_resume']); else: echo '#'; endif; ?>" class="btn btn-default btn-top-resume"><i class="fa fa-download"></i><span class="btn-hide-text"><span class="btn-hide-text-r"><?php if(!empty($al_options['al_show_down_r_text'])): echo esc_attr($al_options['al_show_down_r_text']); endif; ?></span></a>
		<?php endif; ?>  
          <!-- /Download Resume Button -->
          <!-- Mail Button -->
		<?php if($al_options['al_show_contact_us'] == 'yes'): ?>
          <a href="<?php if(!empty($al_options['al_show_contact_us_link'])): echo esc_url($al_options['al_show_contact_us_link']); else: echo '#'; endif; ?>" class="btn btn-default btn-top-message"><i class="fa fa-envelope-o"></i><span class="btn-hide-text"><span class="btn-hide-text-c"><?php if(!empty($al_options['al_show_contact_us_text'])): echo esc_attr($al_options['al_show_contact_us_text']); endif; ?></span></span></a>
		<?php endif; ?>  
          <!-- /Mail Button -->
          <!-- Mail Button -->
		<?php if($al_options['al_show_blog'] == 'yes'): ?>
          <a href="<?php echo esc_url($al_options['al_show_blog_link']); ?>" class="btn btn-default btn-blog btn-top-blog"><?php _e('Blog ','vt');?> <i class="fa fa-long-arrow-right"></i><span class="btn-hide-text"><span class="btn-hide-text-b"><?php echo esc_attr($al_options['al_show_blog_text']); ?></span></span></a>
		<?php endif; ?>  
          <!-- /Mail Button -->
        </div>
      </div>
      <!-- /Header Buttons -->

      <!-- =============== PROFILE INTRO ====================-->
      <div class="profile-intro row">
        <!-- Left Collum with Avatar pic -->
        <div class="col-md-4 profile-col">
          <!-- Avatar pic -->
          <div class="profile-pic">
            <div class="profile-border">
              <!-- Put your picture here ( 308px by 308px for retina display)-->
              <img src="<?php if(!empty($al_options['al_profile_picture'])):
				echo esc_url($al_options['al_profile_picture']); endif; ?>" alt="">
              <!-- /Put your picture here -->
            </div>          
          </div>
           <!-- /Avatar pic -->
        </div>
        <!-- /Left columm with avatar pic -->
  
        <!-- Right Columm -->
        <div class="col-md-7">
          <!-- Welcome Title-->
          <h1 class="intro-title1"><?php if(!empty($al_options['al_intro_title'])):
		echo esc_attr($al_options['al_intro_title']); endif; ?> <span class="color1 bold"><?php if(!empty($al_options['al_name'])): echo esc_attr($al_options['al_name']); endif; ?>!</span></h1>
          <!-- /Welcome Title -->
          <!-- Job - -->
          <h2 class="intro-title2"><?php if(!empty($al_options['al_title_designation'])): echo esc_attr($al_options['al_title_designation']); endif; ?></h2>
          <!-- /job -->
          <!-- Description -->
          <div class="vt_description">
			<?php if(!empty($al_options['al_description'])): 
			// $out = '<p>';
			// $out .= str_replace("\n" , '</p><p>', $al_options['al_description']);
			// $out .= '</p>';
			// echo $out;
		  
			//you can also do this by
			// $br = '\n\r'; echo wpautop( $al_options['al_description'], $br ); 
		
			echo $al_options['al_description'];
			endif; ?>
		  </div>
         
		 <!-- /Description -->
        </div>
        <!-- /Right Collum -->
      </div>
      <!-- ============  /PROFILE INTRO ================= -->
      
      <!-- ============  TIMELINE ================= -->
      <div class="timeline-wrap">
        <div class="timeline-bg">
			<?php 
				if ( ( $locations = get_nav_menu_locations() ) && $locations['vt-menu'] ) {
					$menu = wp_get_nav_menu_object( $locations['vt-menu'] );
					$menu_items = wp_get_nav_menu_items($menu->term_id);
					$include = array();
					foreach($menu_items as $item) {
						if($item->object == 'page')
							$include[] = $item->object_id;
					}
					query_posts( array( 'post_type' => 'page', 'post__in' => $include, 'posts_per_page' => count($include), 'orderby' => 'post__in' ) );
				}
				
				$i = 1;
				while(have_posts() ) : the_post();
				 global $post;

				$post_name = $post->post_name;
				
				$post_id = get_the_ID();
			?>
			<?php $separate_page = get_post_meta( "m_separate_page", true); 

			// if (($separate_page != true ))
			// { ?>
			<section class="timeline <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
			<?php global $more; $more = 0; the_content('');?>
				
			 </section>
			<?php $i++;  endwhile; wp_reset_query(); ?>
			          <!-- ====>> SECTION: THANK YOU <<====-->
		<?php if(!empty($al_options['al_thanks'])): ?>
          <section class="timeline profile-infos">
            <div class="line row timeline-margin timeline-margin-big">
              <div class="content-wrap">
                <div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
                <div class="col-md-2 timeline-progress hidden-sm hidden-xs full-height"></div>
                <div class="col-md-9 bg1 full-height"></div>
              </div>
            </div>
            <div class="line row line-thank-you">
              <div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
              <div class="col-md-2 timeline-progress hidden-sm hidden-xs full-height timeline-point "></div>
              <div class="col-md-8 content-wrap bg1">
                <div class="line-content">
                  <h3 class="thank-you"><?php echo esc_attr($al_options['al_thanks']); ?></h3>
                </div>
              </div>
              <div class="col-md-1 bg1 timeline-space full-height hidden-sm hidden-xs"></div>
            </div>
          </section>
		<?php endif; ?>  
		</div>
	</div>
<?php  get_footer();  ?>