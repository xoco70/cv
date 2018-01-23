<?php  $al_options = get_option('al_general_settings'); ?> 
 <!-- ============  FOOTER ================= -->
      <footer id="footer" class="row">
        <!-- Put your Quote Here-->
        <p class="quote"><?php if(!empty($al_options['al_footermsg'])):
		echo esc_attr($al_options['al_footermsg']); endif; ?></p>
        <!-- /Quote -->
        <!-- Quote Autor -->
        <p class="author"><?php if(!empty($al_options['al_footermsgauthor'])):
		echo esc_attr($al_options['al_footermsgauthor']); endif; ?></p>
        <!-- /Quote Autor -->
      </footer>
      <!-- ============  /FOOTER ================= -->
    </div> 
  </div> 
</section>
<!-- /CONTENT
========================================================= -->

<?php 
if ($al_options['al_animation'] == "yes") {
esc_js(vt_custom_js()); 
}
else{
esc_js(vt_custom_animate_js()); 
}
wp_footer();?>
</body>
</html>
