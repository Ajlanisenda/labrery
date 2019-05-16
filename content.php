<div class="blog-post">
	<?php the_excerpt(); ?>
	<div class="bnt bnt_succss">
<center>
<?php next_posts_link('Next'); ?>
<?php previous_posts_link('Previous'); ?>
</center>
</div>
<h2 class="blog-post-title"><a href="<?php comments_link(); ?>"> <?php printf( _nx( 'One Comment',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a></h2>
 <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author(); ?></a></p>

</div><!-- /.blog-post -->