<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acton
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
                   <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'acton' ); ?></a>

<header id="masthead" class="site-header">
        <div class="site-branding">
                 <section class="hero is-info <?php echo is_front_page() ? 'is-fullheight front-page' : 'is-medium not-front-page' ?>">
                              <div class="hero-head">
                                       <nav class="navbar">
                                                <div class="container is-fluid">
                                                         <div class="navbar-brand">
                                                                  <a class="navbar-item">
<?php the_custom_logo();?>
                                                                         </a>
</div>
                      <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acton' ); ?></button>
                        <?php
                        wp_nav_menu(
                          array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                          )
                        );
                        ?>
                      </nav><!-- #site-navigation -->
                </div><!-- .container -->
              </nav><!-- .navbar -->
            </div><!-- .hero-head -->
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
              <div class="container has-text-centered">
                <?php
                if ( is_front_page() ) :
                    ?>
                    <h1 class="title has-text-weight-bold is-size-1 site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php $acton_description = get_bloginfo( 'description', 'display' );
if ( $acton_description || is_customize_preview() ) :
    ?>
<p class="subtitle is-size-2 site-description">
<?php echo $acton_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
       ?></p>
<?php endif; ?>
               <a href="#" id="learn-more-button" class="button no-border-radius is-large">Learn more</a>
<?php endif; ?>

                                                                                                     </div>
                                                                                                           </div>
                                                                                                                 </section>
                                                                                                                       </div><!-- .site-branding -->
                                                                                                                       </header><!-- #masthead -->
                                                                                                                       <div id="border"></div>
