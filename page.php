<?php get_header(); ?>

<main class="page-custom">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<div>
<?php the_content(); ?>
</div>
<hr>

<p><em>Published by The Metro Report</em></p>

<?php endwhile; endif; ?>

<?php if(is_active_sidebar('child-sidebar')) : ?>
<div class="child-sidebar">
<?php dynamic_sidebar('child-sidebar'); ?>
</div>

<?php endif; ?>

</main>

<?php get_footer(); ?>