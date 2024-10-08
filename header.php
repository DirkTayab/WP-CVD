<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title('') ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="header__logo">
            <?php if(function_exists('the_custom_logo')){
                the_custom_logo();
            } ?>
            <h1>CREATIVE <span>VISUAL</span> DESIGN</h1>
          </div>
          <nav>
            <?php wp_nav_menu(array(
                'theme-location' => "header_menu",
                'menu_class' => "header__nav"
            )) ?>
          </nav>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>