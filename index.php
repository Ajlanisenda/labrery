<?php get_header();?> <div class="row">  
 <div class="col-sm-8 blog-main"> 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   <!-- contents of the loop --> 
      <?php get_template_part( 'content', get_post_format() ); ?> 
	  <?php endwhile;?>  <nav>

 <?php endif;?>

	 
	   </div> <!-- /.blog-main -->   
     </div>
   <?php get_footer();?>