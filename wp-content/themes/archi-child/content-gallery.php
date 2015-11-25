<li class="wow fadeInUp">
    <div class="post-content">
        <div class="post-image">
            <div id="owl-demo-<?php the_ID(); ?>" class="owl-carousel">
                <?php if (function_exists('rwmb_meta')) { ?>
                    <?php $images = rwmb_meta('_cmb_images', "type=image"); ?>
                    <?php if ($images) { ?>

                        <?php
                        foreach ($images as $image) {
                            ?>
                            <?php $img = $image['full_url']; ?>
                            <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php if (in_category('artistes')) : ?>

        <?php else :
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

        <div class="post-text">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if (in_category('artistes')) : ?>
            <?php else :?>
                <h4><?php the_author(); ?></h4>
            <?php endif; ?>



            <p><?php echo archi_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn-more"><?php _e('Voir +', 'archi'); ?></a>
    </div>
</li>
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