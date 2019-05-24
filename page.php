<?php get_header(); ?>
<div class="row">
<div class="col-sm-12">
<?php
$args=array(
'post_type'=>'contact',
);
$ClassicBooks_loop=new WP_Query($args);
if($ClassicBooks_loop->have_posts()) : while($ClassicBooks_loop->have_posts()) : $ClassicBooks_loop->the_post();
$meta=get_post_meta($post->ID , 'your_fields' , true);?>
<!-- contents of Your Post -->
<h1></h1>
<?php the_title();?>
<h1></h1>
<?php the_content();?>

<?php endwhile; endif; wp_reset_postdata();?>

<?php get_footer();?>