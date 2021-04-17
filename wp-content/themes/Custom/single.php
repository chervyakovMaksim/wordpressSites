<?php
/**
 * The template for displaying single
 */
?>


<?php get_header(); ?>

<!-- Test -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            while( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>