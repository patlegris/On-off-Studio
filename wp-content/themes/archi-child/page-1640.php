<?php get_header(); ?>

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <?php printf( single_cat_title( '', false ) ); ?>
                </h1>
                <?php archi_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="blog-list">
                    <?php
                    while (have_posts()) : the_post();
                        $mem_date = mem_date_processing(
                            get_post_meta($post->ID, '_mem_start_date', true) ,
                            get_post_meta($post->ID, '_mem_end_date', true)
                        );
                        if ( $mem_date["is-ongoing"] === true ) {
                            get_template_part( 'content', get_post_format() ) ;
                        }   // End the loop.
                    endwhile;
                    ?>

                </ul>

                <div class="text-center">
                    <ul class="pagination">
                        <?php echo archi_pagination(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>

