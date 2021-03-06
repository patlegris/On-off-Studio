<?php
global $archi_option;
$link_audio = get_post_meta(get_the_ID(), '_cmb_link_audio', true);
$link_video = get_post_meta(get_the_ID(), '_cmb_link_video', true);
get_header(); ?>

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <?php if ($archi_option['the_blog_single'] != '') {
                        echo the_title();
                    } ?>
                </h1>
                <?php archi_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
<!-- CONTENT BLOG -->
<?php while (have_posts()) :
    the_post(); ?>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="blog-list">
                        <li class="single">
                            <div class="post-content">
                                <div class="post-image">
                                    <?php $format = get_post_format(); ?>
                                    <?php if ($format == 'audio') { ?>

                                        <iframe style="width:100%" src="<?php echo esc_url($link_audio); ?>"></iframe>

                                    <?php } elseif ($format == 'video'){ ?>

                                        <iframe height="420" src="<?php echo esc_url($link_video); ?>"></iframe>

                                    <?php } elseif ($format == 'gallery'){ ?>

                                        <div id="owl-demo-<?php the_ID(); ?>" class="owl-carousel">
                                            <?php if (function_exists('rwmb_meta')) { ?>
                                                <?php $images = rwmb_meta('_cmb_images', "type=image"); ?>
                                                <?php if ($images) { ?>

                                                    <?php
                                                    foreach ($images as $image) {
                                                        ?>
                                                        <?php $img = $image['full_url']; ?>
                                                        <div class="item"><img src="<?php echo esc_url($img); ?>"
                                                                               alt=""></div>
                                                    <?php } ?>

                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <script type="text/javascript">
                                            (function ($) {
                                                "use strict";
                                                $(document).ready(function () {
                                                    $("#owl-demo-<?php the_ID(); ?>").owlCarousel({
                                                        autoPlay: 3000,
                                                        items: 1,
                                                        singleItem: true,
                                                    });
                                                });
                                            })(this.jQuery);
                                        </script>

                                    <?php } elseif ($format == 'image'){ ?>
                                    <?php if (function_exists('rwmb_meta')) { ?>
                                    <?php $images = rwmb_meta('_cmb_image', "type=image"); ?>
                                    <?php if ($images){ ?>
                                    <?php
                                    foreach ($images as $image) {
                                    ?>
                                    <?php $img = $image['full_url']; ?>
                                    <img src="<?php echo esc_url($img); ?>" alt="">
                                    <?php } ?>
                                    <?php } ?>
                                    <?php } ?>

                                    <?php }else{
                                    $format == 'standard' ?>
                                    <?php if (get_the_post_thumbnail()){ ?>
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                    <?php } ?>
                                    <?php } ?>

                                </div>
                                <?php if ((in_category('expositions')) OR (in_category('ateliers/stages')) OR (in_category('evenements'))) : ?>

<!--                                --><?php //else :
                                    $start_date = get_post_meta(get_the_ID(), '_mem_start_date', true);
                                    $mem_start_date = date_i18n(get_option('date_format'), strtotime($start_date));
                                    $end_date = get_post_meta(get_the_ID(), '_mem_end_date', true);
                                    $mem_end_date = date_i18n(get_option('date_format'), strtotime($end_date));

                                    if ($mem_start_date !== "") {
                                        echo '
                                    <div class="periode">' . $mem_start_date . ' / ';
                                    }
                                    if ($mem_end_date !== "") {
                                        echo $mem_end_date . '
                                    </div>
                                    ';
                                    }

                                    ?>
                                <?php endif; ?>

                                <div class="post-text page-content">
                                    <h2 class="single-title"><?php the_title(); ?></h2>

                                    <?php if (in_category('artistes')) : ?>
                                    <?php else :?>
                                    <h4><?php the_author(); ?></h4>
                                    <?php endif; ?>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php endwhile ?>
<!-- END CONTENT BLOG -->
<?php get_footer(); ?>
