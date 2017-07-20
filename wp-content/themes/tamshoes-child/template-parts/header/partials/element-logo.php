<!-- Header logo -->

<div class="hero-container">
    <div class="logo-effect">
        <ul class="diamonds">

            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
            <li class="diamond"></li>
        </ul>
        <a href="<?php echo esc_url(home_url('/')); ?>"
           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> - <?php bloginfo('description'); ?>"
           rel="home">
            <?php if (flatsome_option('site_logo')) {
                $logo_height = get_theme_mod('header_height', 90);
                $logo_width = get_theme_mod('logo_width', 200);
                $site_title = esc_attr(get_bloginfo('name', 'display'));
                if (get_theme_mod('site_logo_sticky')) echo '<img width="' . $logo_width . '" height="' . $logo_height . '" src="' . get_theme_mod('site_logo_sticky') . '" class="header-logo-sticky onteractive_logo" alt="' . $site_title . '"/>';
                echo '<img width="' . $logo_width . '" height="' . $logo_height . '" src="' . flatsome_option('site_logo') . '" class="header_logo header-logo onteractive_logo" alt="' . $site_title . '"/>';
                if (!get_theme_mod('site_logo_dark')) echo '<img  width="' . $logo_width . '" height="' . $logo_height . '" src="' . flatsome_option('site_logo') . '" class="header-logo-dark onteractive_logo" alt="' . $site_title . '"/>';
                if (get_theme_mod('site_logo_dark')) echo '<img  width="' . $logo_width . '" height="' . $logo_height . '" src="' . get_theme_mod('site_logo_dark') . '" class="header-logo-dark onteractive_logo" alt="' . $site_title . '"/>';
            } else {
                bloginfo('name');
            }
            ?>
        </a>
    </div>
</div>
<?php
if (get_theme_mod('site_logo_slogan')) {
    echo '<p class="logo-tagline">' . get_bloginfo('description') . '</p>';
}
?>
