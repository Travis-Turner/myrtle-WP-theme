<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head();?>
  </head>
  <body>
    <header>
      <div id="header__navbar-container">
        <div id="navbar-left">
          <ul>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                <i class="fa fa-home" aria-hidden="true"></i> Home
              </a>
              <?php wp_list_pages( '&title_li=' ); ?>
            </li>
          </ul>
        </div>
        <div id="navbar-right">

        </div>
      </div>
      <h1><span id="title-prefix">The Adventures of </span><br /><span id="title-small">Nearly</span></br>Infertile Myrtle</h1>
    </header><!-- end header -->
    <div id="outer__container">
    <div id="main__container">
