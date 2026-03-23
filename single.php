<?php get_header(); ?>

<main class="article">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<p class="article-meta">
<?php echo get_the_date(); ?> | <?php the_author(); ?>
</p>

<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail('large'); ?>
<?php endif; ?>

<div>
<?php the_content(); ?>
</div>

<div class="author-box">
<h3>About the Author</h3>
<p><?php the_author(); ?> is a writer for The Metro Report.</p>
</div>


<div class="related-posts">
<h3>Related Stories</h3>
<?php
$categories = get_the_category();
if($categories){
$cat_id = $categories[0]->term_id;

$related = new WP_Query(array(
'cat' => $cat_id,
'posts_per_page' => 3,
'post__not_in' => array(get_the_ID())
));
while($related->have_posts()) : $related->the_post();
?>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
<?php endwhile;
wp_reset_postdata();
}
?>
</div>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>