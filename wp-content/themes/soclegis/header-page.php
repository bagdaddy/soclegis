<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <title><?php the_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <script src="<?php echo get_template_directory_uri()?>/js/jquery-3.1.1.min.js"></script>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<a id="start"></a>
<div class="nav-container ">
    <!--end bar-->
    <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bar--absolute bar--transparent page">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-2 hidden-xs">
                    <div class="bar__module">
                        <a href="/">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img class="logo logo-dark" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                echo '<img class="logo logo-light" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
//                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                            }
                            ?>


                            <!--                            <img class="logo logo-dark" alt="logo" src="/wp-content/themes/soclegis/img/logo-dark.png" />-->
                            <!--                            <img class="logo logo-light" alt="logo" src="/wp-content/themes/soclegis/img/logo-light.png" />-->
                        </a>
                    </div>
                </div>
                <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'secondary_menu',
                        'menu_class' => 'menu-horizontal text-left dark',
                        'container_class' => 'bar__module'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </nav>
</div>