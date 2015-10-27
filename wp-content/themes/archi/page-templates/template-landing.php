<?php

/*
 * Template Name: Landing Page
 * Description: A Page Template with a Page Builder design.
 */

get_header('landing'); ?>

<?php if (have_posts()){ ?>

		<div id="content" class="no-bottom no-top">

			<?php while (have_posts()) : the_post()?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		</div>

	<?php }else {

		 _e('Page Canvas For Page Builder', 'archi'); 

	}?>

<?php get_footer('landing'); ?>