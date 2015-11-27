<?php get_header(); ?>

<div id="archives">
    <div>Filtrer par catégorie :
        <?php
        $args = array('show_option_all'=>'Toutes les catégories',
            'name'=>'category_list');
        wp_dropdown_categories($args);
        ?>
    </div>
    <?php
    // Declare some helper vars
    $previous_year = $year = 0;
    $previous_month = $month = 0;
    $ul_open = false;

    // Get the posts
    $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
    ?>

    <?php foreach($myposts as $post) :
    // Setup the post variables
    setup_postdata($post);
    $year = mysql2date('Y', $post->post_date);
    $month = mysql2date('n', $post->post_date);
    $day = mysql2date('j', $post->post_date);
    ?>

    <?php
    if($year != $previous_year || $month != $previous_month) :
    ?>
    <?php
    if($ul_open == true) :
         ?>
  </ul>
  <?php
       endif;
    ?>
    <?php
    if($month == 4 || $month == 8 || $month == 10){
        ?>
        <h3>&raquo; Articles d'<?php the_time('F Y'); ?></h3>
        <?php
    } else{
        ?>
        <h3>&raquo; Articles de <?php the_time('F Y'); ?></h3>
        <?php
    }
    ?>
    <ul>
        <?php
        $ul_open = true;
        endif;
        ?>

        <?php
        $previous_year = $year;
        $previous_month = $month;
        $category = get_the_category();
        ?>

        <li class="<?php echo $category[0]->cat_name;?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>

        <?php endforeach; ?>
    </ul>
</div>

<?php get_footer(); ?>
