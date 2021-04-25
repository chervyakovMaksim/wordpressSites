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
        <div class="col-12">
            <h2 class="section_title"><?php the_field('second_screen_title'); ?></h2>
        </div>
    </div>
    <div class="row">
        <?php
            $recommendet_products = get_field('popular_products_main_page');
            $count_products = count($recommendet_products); 
            for ( $i = 0; $i < $count_products; $i++ ) {
                if ($i == 0) {
                    ?>
                        <div class="col-lg-4">
                            <?php echo do_shortcode('[product columns="1" id="' . $recommendet_products[$i] . '"]'); ?>
                        </div>
                    <?php
                }
                if ( $i == 1 ) {
                    ?>
                        <div class="col-lg-8">
                            <?php echo do_shortcode('[product columns="1" id="' . $recommendet_products[$i] . '"]'); ?>
                        </div>
                    <?php
                }
                if ( $i > 1 )
                {
                    ?>
                        <div class="col-lg-6">
                            <?php echo do_shortcode('[product columns="1" id="' . $recommendet_products[$i] . '"]'); ?>
                        </div>
                    <?php
                }
            }
        ?>
        <!-- <div class="col-lg-4">
            <?php # echo do_shortcode('[product columns="1" id="' . get_field('secodn_screen_product1') . '"]'); ?>
        </div>
        <div class="col-lg-8">
            <?php # echo do_shortcode('[product columns="1" id="' . get_field('secodn_screen_product2') . '"]'); ?>
        </div> -->
    </div>
</div>

<?php get_footer(); ?>
