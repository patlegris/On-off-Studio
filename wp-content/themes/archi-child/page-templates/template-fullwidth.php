<?php
/**
 * Template Name: Full Width
 */
get_header(); ?>

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
  <?php if( function_exists( 'rwmb_meta' ) ) { ?>        
        <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
        <?php if($images){ foreach ( $images as $image ) { ?>
        <?php 
        $img =  $image['full_url']; ?>
          style="background-image: url('<?php echo esc_url($img); ?>');"
        <?php } } ?>
    <?php } ?>
>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (is_page(256) === false) : { ?>
                <h1><?php the_title(); ?></h1>
                <?php }endif ?>
                <?php archi_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<?php if (have_posts()){ ?>
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php }else {
		_e('Page Canvas For Page Builder', 'archi'); 
}?>

<?php get_footer(); ?>