<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-clearfix u-footer u-grey-80 u-footer" id="sec-3a93">
  <?php $logo = theme_get_logo(array(
            'default_src' => "/images/ThatsActiveLogo.png",
            'default_url' => home_url('/'),
            'default_width' => '266'
        )); ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo esc_url($logo['url']); ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="1920" data-image-height="1080">
    <img <?php if ($logo['svg']) {echo 'style="width:'.$logo['width'].'px"';} else {echo 'style="width:auto"';}?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1" data-image-width="266">
  </a>
  <?php
            ob_start();
            ?><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
    <div class="menu-collapse">
      <a class="u-button-style u-nav-link" href="#">
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
                'container_class' => 'u-menu u-menu-dropdown u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-nav u-unstyled',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-d08f-21',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-d08f-22',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-2',
                'template' => $menu_template,
            )); ?>
  <div class="u-clearfix u-custom-html u-custom-html-1">
    <script src="//code.tidio.co/strkkxkjy2uhdwcnutlfundhbmgtsedp.js" async="async"></script>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/WordPress Theme" target="_blank">
        <span>wordpress-themes</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        <section class="u-align-center u-clearfix u-cookies-consent u-grey-80 u-cookies-consent" id="sec-50dd">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-left-cell u-size-43-md u-size-43-sm u-size-43-xs u-size-49-lg u-size-49-xl u-layout-cell-1" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Left">
            <div class="u-container-layout u-container-layout-1">
              <h3 class="u-text u-text-1">Cookies & Privacy</h3>
              <p class="u-text u-text-2">Per migliorare l'esperienza in tutto il sito, e permettere a molti servizi di fuzionare usiamo cookies🍪🍪 e tecnologie simili<br>To improve the experience throughout the site, and allow many services to fuse we use cookies🍪🍪 and similar technologies<br>
              </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-11-lg u-size-11-xl u-size-17-md u-size-17-sm u-size-17-xs u-layout-cell-2">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
              <a href="###" class="u-active-custom-color-4 u-btn u-button-confirm u-button-style u-grey-60 u-hover-grey-70 u-btn-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0">Confirm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/favicon1.png?rand=516e" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="64" data-image-height="64">
  </div>
  <style>.u-cookies-consent {
  background-image: none;
}

.u-cookies-consent .u-sheet-1 {
  min-height: 250px;
}

.u-cookies-consent .u-layout-wrap-1 {
  width: 1209px;
  margin: 39px -69px 0 auto;
}

.u-cookies-consent .u-layout-cell-1 {
  min-height: 212px;
  animation-duration: 1000ms;
}

.u-cookies-consent .u-container-layout-1 {
  padding: 29px 60px 30px;
}

.u-cookies-consent .u-text-1 {
  margin: 4px 655px 0 0;
}

.u-cookies-consent .u-text-2 {
  margin: 8px -60px 0;
}

.u-cookies-consent .u-layout-cell-2 {
  min-height: 212px;
}

.u-cookies-consent .u-container-layout-2 {
  padding: 30px;
}

.u-cookies-consent .u-btn-1 {
  background-image: none;
  border-style: none;
  animation-duration: 1000ms;
  margin: 17px auto 0 0;
}

.u-cookies-consent .u-image-1 {
  width: 42px;
  height: 42px;
  margin: -243px auto 60px -64px;
}

@media (max-width: 1199px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 203px;
  }

  .u-cookies-consent .u-layout-wrap-1 {
    width: 940px;
    margin-right: 0;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 125px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 449px;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 0;
    margin-left: 0;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 125px;
  }
}

@media (max-width: 991px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 138px;
  }

  .u-cookies-consent .u-layout-wrap-1 {
    width: 720px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 304px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 100px;
  }
}

@media (max-width: 767px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 238px;
  }

  .u-cookies-consent .u-layout-wrap-1 {
    width: 540px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 154px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 65px;
  }

  .u-cookies-consent .u-container-layout-2 {
    padding: 10px;
  }
}

@media (max-width: 575px) {
  .u-cookies-consent .u-layout-wrap-1 {
    width: 340px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 104px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 15px;
  }
}</style>
</section>
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
