<?php $link_video = get_post_meta(get_the_ID(), '_cmb_link_video', true); ?>

<li class="wow fadeInUp">
    <div class="post-content">
        <div class="post-image">
            <iframe height="420" src="<?php echo esc_url($link_video); ?>"></iframe>
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


            <a href="<?php the_permalink(); ?>" class="btn-more"><?php _e('Voir +', 'archi'); ?></a>
        </div>
    </div>
</li>