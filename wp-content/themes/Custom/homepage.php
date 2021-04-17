<?php /* Template Name: Главная */ ?>

<?php get_header(); ?>
<?php $tpl_dir = get_template_directory_uri(); ?>

<div class="container first_screen">
    <div class="row">
        <div class="col-lg-5">
            <div class="pl87">
                <h1 class="f_s_title"><?php the_field('first_screen_title'); ?></h1>
                <h2 class="f_s_subtitle"><?php the_field('first_screen_subtitle') ?></h2>
                <p class="title_description"><?php the_field('first_screen_subtitle_descr'); ?></p>
                <a href="#" class="look_catalog">Смотреть каталог</a>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="main_screen_product">
                <img src="<?php the_field('first_screen_img') ?>" alt="" class="watch_img">
                
                <div class="price">
                    <p><?php the_field('first_screen_price'); ?></p>
                    <!-- <img src="<?php echo $tpl_dir ?>/img/ukraine-hryvna.svg" alt="" class=""> -->
                </div>
                <div class="size">
                    <p><?php the_field('first_screen_size'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container second_screen">
    <div class="row">
        <div class="col-lg-12">
            <!-- <?php echo do_shortcode('[product columns="1" id="38"]'); ?> -->
            <?php echo do_shortcode('[product_category category="Uncategorized"]') ?>
            <?php echo do_shortcode('[product_category category="man-watch"]') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>