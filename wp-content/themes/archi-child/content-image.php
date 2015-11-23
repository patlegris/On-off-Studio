<li class="wow fadeInUp">
    <div class="post-content">
        <div class="post-image">
            <?php if (function_exists('rwmb_meta')) { ?>
                <?php $images = rwmb_meta('_cmb_image', "type=image"); ?>

                <?php if ($images) { ?>

                    <?php foreach ($images as $image) { ?>

                        <?php $img = $image['full_url']; ?>

                        <img src="<?php echo esc_url($img); ?>" alt="">

                    <?php } ?>

                <?php } ?>
            <?php } ?>
        </div>
        <?php
        if (has_category()) {
            $the_cat = get_the_category([0]);

            if ($the_cat <> 'artistes') {
                $start_date = get_post_meta(get_the_ID(), '_mem_start_date', true);
                $mem_start_date = date_i18n(get_option('date_format'), strtotime($start_date));
                $end_date = get_post_meta(get_the_ID(), '_mem_end_date', true);
                $mem_end_date = date_i18n(get_option('date_format'), strtotime($end_date));

                if ($mem_start_date !== "") {
                    echo '<div class="periode">' . $mem_start_date . ' / ';
                }
                if ($mem_end_date !== "") {
                    echo $mem_end_date . '</div>';
                }
            }
        }
        ?>

        <div class="post-text">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h4>Auteur : <?php the_author();?></h4>


            <p><?php echo archi_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn-more"><?php _e('Voir +', 'archi'); ?></a>
    </div>
</li>