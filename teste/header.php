<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/2c2e89787c.js" crossorigin="anonymous"></script>
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body <?php body_class(); ?>>
  <header id="header">
    <div class="container" style="max-width: 1200px; padding-left: 30px; padding-right: 30px;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navbar-nav', 'container' => false, 'fallback_cb' => false)); ?>
        </div>
      </nav>
    </div>
  </header>
