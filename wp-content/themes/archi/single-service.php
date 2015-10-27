<?php get_header(); ?>

<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
	<?php if( function_exists( 'rwmb_meta' ) ) { ?>       
        <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
        <?php if($images){ foreach ( $images as $image ) { ?>
        <?php $img =  $image['full_url']; ?>
          style="background-image: url('<?php echo esc_url($img); ?>');"
        <?php } } ?>
    <?php } ?>
>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h1><?php the_title(); ?></h1>
                <?php archi_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
	<!-- subheader close -->
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul id="services-list">
			        <?php
						$args = array(
							'post_type' => 'service',
							'posts_per_page' => -1,
						);
						$service = new WP_Query($args);
						if($service->have_posts()) : while($service->have_posts()) : $service->the_post();						
					?>	
			            <li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			        <?php endwhile; endif; ?>    
		        </ul>
			</div>
			<div class="col-md-9">
				<?php while (have_posts()) : the_post()?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	(function($) { "use strict";
		$('#post-<?php the_ID(); ?>').addClass('active');
	})(jQuery); 
</script>	
<?php get_footer(); ?>