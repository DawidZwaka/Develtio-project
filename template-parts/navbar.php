<?php 
$logoSrc = get_template_directory_uri() . '/assets/logo.png';

$custom_logo_id = get_theme_mod( 'custom_logo' );

if ( has_custom_logo() ) 
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
else 
    $logo = get_template_directory_uri() . '/assets/logo.png';
?>

<header class='container-fluid'>
    <nav class='navbar navbar-expand-xl navbar-light justify-content-center align-items-xl-end'>
    <a href='#' class='navbar-brand'>
        <img src=<?php echo $logo ?> alt='logo'/>
    </a>
    <button class="navbar-toggler ml-auto border-0 collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-custom-icon"></span>
    </button>
    <?php if (has_nav_menu( 'main_menu' )) : ?>
        <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'navbar-nav',
                'container_id' => 'mainNav',
                'container_class' => 'navbar-collapse collapse flex-xl-grow-0',
                'walker' => new BootstrapWalker(),
            ]);
        ?>
    <?php else:?>
        <?php print_static_nav('main_menu', 'topbar-nav') ?>
    <?php endif?>
    </nav>
</header>