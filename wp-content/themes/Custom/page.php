<?php
/**
 * The template for displaying all pages
 */
?>


<?php get_header(); ?>


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