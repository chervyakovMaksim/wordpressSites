<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php the_title(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>