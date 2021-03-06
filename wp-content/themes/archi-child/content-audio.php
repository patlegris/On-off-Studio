<?php $link_audio = get_post_meta(get_the_ID(), '_cmb_link_audio', true); ?>

<li class="wow fadeInUp">
    <div class="post-content">
        <div class="post-image">
            <iframe style="width:100%" src="<?php echo esc_url($link_audio); ?>"></iframe>
        </div>
        <?php if ((in_category('expositions')) OR (in_category('ateliers/stages')) OR (in_category('evenements'))) :

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
            <a href="<?php the_permalink(); ?>" class="btn-more"><?php _e('Voir +', 'archi'); ?></a>
        </div>
    </div>
</li>