<li class= "wow fadeInUp">
    <div class="post-content">
        <div class="post-image">
          <div id="owl-demo-<?php the_ID(); ?>" class="owl-carousel">
              <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                <?php if($images){ ?>
                  
                    <?php                                                        
                      foreach ( $images as $image ) {                              
                    ?>
                    <?php $img = $image['full_url']; ?>
                      <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div> 
                    <?php } ?>                   
                  
                <?php } ?>
              <?php } ?>
          </div>
        </div>
        <?php
        if (is_category('40') OR is_category('41') OR is_category('1')) {
            $start_date = get_post_meta($post->ID, '_mem_start_date', true);
            $mem_start_date = date("d/m/Y", strtotime($start_date));
            $day_date = date("d", strtotime($start_date));
            $month_date = date("M", strtotime($start_date));

            $end_date = get_post_meta($post->ID, '_mem_end_date', true);
            $mem_end_date = date("d/m/Y", strtotime($end_date));
        }
        if ($mem_start_date !== "") {
            echo '<div class="periode">Du ' . $mem_start_date . '';
        }
        if ($mem_end_date !== "") {
            echo ' au ' . $mem_end_date . '</div>';
        }
        ?>

        <div class="date-box">
            <div class="day"><?php echo $day_date; ?></div>
            <div class="month"><?php echo $month_date; ?></div>
        </div>


        <div class="post-text">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


            <p><?php echo archi_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn-more"><?php _e('Voir +', 'archi'); ?></a>
    </div>
</li>
<script type="text/javascript">
  (function($){
  "use strict";
  $(document).ready(function() {
      $("#owl-demo-<?php the_ID(); ?>").owlCarousel({
        autoPlay: 3000,
        items : 1,
        singleItem:true,
      });
    });
})(this.jQuery);
</script>