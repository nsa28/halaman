<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = 'Nicepage 2.30.1, nicepage.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$headerHideBlog = false;
$headerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'halaman' ); ?></a>
    <?php if (!$pageBlog && !$pagePost || $pageBlog && !$headerHideBlog || $pagePost && !$headerHidePost) { ?>
    <header class="u-clearfix u-custom-color-5 u-header u-header" id="sec-1e42">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php
            ob_start();
            ?><nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1">
      <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700;">
        <a class="u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="#">
          <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        {menu}
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-sidenav-overflow">
            <div class="u-menu-close"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><?php
            $menu_template = ob_get_clean();
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-custom-font u-font-montserrat u-nav u-spacing-30 u-unstyled u-nav-1',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-10 u-nav u-unstyled u-v-spacing-16',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-10 u-nav u-unstyled u-v-spacing-16',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
            )); ?>
    <h1 class="u-custom-font u-text u-text-default u-title u-text-1">halaman</h1>
    <?php get_search_form(); ?>
  </div>
</header>
    
    <?php } ?>
    <div id="content">
