<?php get_header(); ?>
<div class="row">
<div class="col-sm-12">
<?php
$args=array(
'post_type'=>'contact',
);
$contact_loop=new WP_Query($args);
if($contact_loop->have_posts()) : while($contact_loop->have_posts()) : $contact_loop->the_post();
$meta=get_post_meta($post->ID , 'your_fields' , true);?>
<!-- contents of Your Post -->
<h1>senda</h1>
<?php the_title();?>
<h1>Content</h1>
<?php the_content();?>

<?php endwhile; endif; wp_reset_postdata();?>

<?php get_footer();?>