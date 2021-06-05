<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = '';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$hideHeader = false; // default header is visible
global $hideFooter;
$hideFooter = false; // default footer is visible
$pageBlog = is_home();
$pagePost = is_single();
$pageProducts = theme_woocommerce_enabled() ? is_shop() || is_product_category() : false;
$pageProduct = theme_woocommerce_enabled() ? is_product() : false;
$pageCart = theme_woocommerce_enabled() ? is_cart() : false;
$defaultPath = $pageProducts || $pageProduct || $pageCart ? '/woocommerce' : '';
if ($pageBlog) {
    $template = 'blog';
}
if ($pagePost) {
    $template = 'post';
}
if ($pageProducts) {
    $template = 'products';
}
if ($pageProduct) {
    $template = 'product';
}
if ($pageCart) {
    $template = 'cart';
}
if ($pageBlog || $pagePost || $pageProducts || $pageProduct || $pageCart) {
    $defaultName = $pageCart ? '‌shoppingCart' : $template;
    global ${$template . "_custom_template"};
    ${$template . "_custom_template"} = ${$template . "_custom_template"} ? ${$template . "_custom_template"} : $defaultName . 'Template';
    $fileWithOptions = get_template_directory() . $defaultPath . '/template-parts/' . ${$template . "_custom_template"} . '/custom-template-options.php';
    if ( file_exists( $fileWithOptions ) ) {
        include_once $fileWithOptions;
    }
} ?>
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
    
    <script data-ad-client="ca-pub-5823857467833998" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?> <?php body_data_attributes(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'shop' ); ?></a>
    <?php if (!$hideHeader) { ?>
    <header class="u-clearfix u-header u-sticky u-header" id="sec-0a57">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/thatsactivelogo1.png",
            'default_url' => home_url('/'),
            'default_width' => '136'
        )); ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo esc_url($logo['url']); ?>" class="u-image u-logo u-image-1 custom-logo-link" title="Home" data-image-width="190" data-image-height="106">
      <img <?php if ($logo['svg']) {echo 'style="width:'.$logo['width'].'px"';} else {echo 'style="width:auto"';}?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1" data-image-width="136.7727">
    </a>
    <?php
            ob_start();
            ?><nav class="u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL" data-position="">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
        <a class="u-block-e6b7-21 u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="font-size: calc(1em + 12px); color: rgb(17, 17, 17) !important;">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-957e"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-957e"><path d="m47.117 158.533h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117zm0-64.266h417.766c9.438 0 17.117 7.679 17.117 17.117 0 9.471-7.679 17.149-17.117 17.149h-417.766c-9.438 0-17.117-7.679-17.117-17.149 0-9.439 7.679-17.117 17.117-17.117z"></path><path d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149zm0 64.266h-417.766c-9.438 0-17.117-7.679-17.117-17.149 0-9.438 7.679-17.117 17.117-17.117h417.766c9.438 0 17.117 7.679 17.117 17.117 0 9.471-7.679 17.149-17.117 17.149z"></path><path d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149zm0 64.266h-417.766c-9.438 0-17.117-7.679-17.117-17.149 0-9.438 7.679-17.117 17.117-17.117h417.766c9.438 0 17.117 7.679 17.117 17.117 0 9.471-7.679 17.149-17.117 17.149z"></path></svg>
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
                'container_class' => 'u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-nav u-spacing-20 u-unstyled u-nav-1',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base',
                    'link_style' => 'padding: 10px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-e6b7-25',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => 'padding: 10px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-e6b7-26',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
            )); ?>
  </div>
</header>
    
    <?php } ?>
    <div id="content">
