<?php get_header(); ?>

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <?php _e('Expositions','archi'); ?>
                </h1>
                <?php archi_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<!--<div id="content">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <ul class="blog-list">-->
<!--                    --><?php
//                    while (have_posts()) : the_post();
//                        $mem_date = mem_date_processing(
//                            get_post_meta($post->ID, '_mem_start_date', true) ,
//                            get_post_meta($post->ID, '_mem_end_date', true)
//                        );
//                        if ( $mem_date["is-ongoing"] === true ) {
//                            get_template_part( 'content', get_post_format() ) ;
//                        }   // End the loop.
//                    endwhile;
//                    ?>
<!---->
<!--                </ul>-->
<!---->
<!--                <div class="text-center">-->
<!--                    <ul class="pagination">-->
<!--                        --><?php //echo archi_pagination(); ?>
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- content close -->





<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array(
                'post_type' => 'expositions',
                'posts_per_page' => 8,
                'paged' => $paged,
            );
            $wp_query = new WP_Query($args);
            while($wp_query->have_posts()) : $wp_query->the_post();
                $mem_date = mem_date_processing(
                    get_post_meta(get_the_ID(), '_mem_start_date', true) ,
                    get_post_meta(get_the_ID(), '_mem_end_date', true)
                );
                if ( $mem_date["is-ongoing"] === false ) : {
                ?>
                <div class="col-md-12">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <div class="spacer-single-10"></div>
                    <?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>
                    <img src="<?php echo esc_url($image);?>" class="img-responsive" alt="">
                    <div class="spacer-single"></div>
                    <a href="<?php the_permalink(); ?>" class="btn-line btn-fullwidth"><?php _e('Read More', 'archi') ?></a>
                </div>
            <?php }endif ?>
            <?php endwhile; ?>

            <div class="col-md-12">
                <div class="pagination text-center" style="width:100%;padding-top: 40px;">
                    <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                        'next_text' => '<i class="fa fa-angle-double-right"></i>',
                        'type'          => 'list',
                        'end_size'      => 3,
                        'mid_size'      => 3
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>
