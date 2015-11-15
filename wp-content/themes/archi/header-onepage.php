<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $archi_option; ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Favicons
	================================================== -->
	<?php if($archi_option['favicon']['url'] !=''){ ?>
		<link rel="icon" href="<?php echo esc_url($archi_option['favicon']['url']); ?>" type="image/x-icon">    
    <?php } ?>
    
<?php wp_head(); ?>

</head>
<body <?php if($archi_option['version_type']=='light'){body_class('de_light');}else{body_class();} ?> >
<div id="wrapper">
    <!-- header begin -->
    <header id="homepage" class="header-bg <?php if($archi_option['topbar-onepage']!=false){ echo 'de_header_2';} ?>">
        <?php if($archi_option['topbar-onepage']!=false){ ?>
        <!-- top header begin -->
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php echo htmlspecialchars_decode($archi_option['info_list_text']); ?>                        
                    </div>    
                    <div class="col-md-3">    
                        <!-- social icons -->
                        <ul class="social-list">
                            <?php if($archi_option['facebook']!=''){ ?>                                    
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>"><i class="fa fa-facebook"></i></a></li>                                    
                            <?php } ?>                                
                            <?php if($archi_option['twitter']!=''){ ?>                                    
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>"><i class="fa fa-twitter"></i></a></li>                                    
                            <?php } ?>                                
                            <?php if($archi_option['google']!=''){ ?>                                    
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>"><i class="fa fa-google-plus"></i></a></li>                                    
                            <?php } ?>
                            <?php if($archi_option['dribbble']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>"><i class="fa fa-dribbble"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['pinterest']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>"><i class="fa fa-pinterest"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['linkedin']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>"><i class="fa fa-linkedin"></i></a></li>
                            <?php } ?>                                
                            <?php if($archi_option['youtube']!=''){ ?>                                    
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>"><i class="fa fa-youtube"></i></a></li>                                   
                            <?php } ?>  
                            <?php if($archi_option['vimeo']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>"><i class="fa fa-vimeo-square"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['rss']!=''){ ?>                                    
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>"><i class="fa fa-rss"></i></a></li>                                   
                            <?php } ?>                                                            
                            <?php if($archi_option['skype']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['skype']); ?>"><i class="fa fa-skype"></i></a></li>
                            <?php } ?>                               
                            <?php if($archi_option['instagram']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>"><i class="fa fa-instagram"></i></a></li>
                            <?php } ?>  
                            <?php if($archi_option['github']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>"><i class="fa fa-github"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['tumblr']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>"><i class="fa fa-tumblr-square"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['soundcloud']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>"><i class="fa fa-soundcloud"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['behance']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>"><i class="fa  fa-behance"></i></a></li>
                            <?php } ?>
                            <?php if($archi_option['lastfm']!=''){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>"><i class="fa fa-lastfm"></i></a></li>
                            <?php } ?>  
                        </ul>
                        <!-- social icons close -->
                    </div>
                </div>
            </div>
        </div>   
        <!-- top header close -->
        <?php } ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img src="<?php echo esc_url($archi_option['logo']['url']); ?>" alt="">
                        </a>
                    </h1>
                    <span id="menu-btn"></span>
                    <!-- mainmenu begin -->
                    <nav>
                        <?php 
                            $menu_type_class = ''; 
                            if($archi_option['menu_type']=='dotted'){ 
                                $menu_type_class = '';
                            }elseif ($archi_option['menu_type']=='line') {
                                $menu_type_class = 'class="line-separator"';
                            }elseif ($archi_option['menu_type']=='circle') {
                                $menu_type_class = 'class="circle-separator"';
                            }elseif ($archi_option['menu_type']=='square') {
                                $menu_type_class = 'class="square-separator"';
                            }elseif ($archi_option['menu_type']=='plus') {
                                $menu_type_class = 'class="plus-separator"';
                            }elseif ($archi_option['menu_type']=='strip') {
                                $menu_type_class = 'class="strip-separator"'; 
                            }else{
                                $menu_type_class = 'class="no-separator"';
                            }    
                        ?>
                        <?php
                            $onepage = array(
                                'theme_location'  => 'onepage',
                                'menu'            => '',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="mainmenu" '.$menu_type_class.'>%3$s</ul>',
                                'depth'           => 0,
                            );
                            if ( has_nav_menu( 'onepage' ) ) {
                                wp_nav_menu( $onepage );
                            }
                        ?>                       
                    </nav>
                </div>
                <!-- mainmenu close -->
            </div>
        </div>
    </header>
    <!-- header close -->