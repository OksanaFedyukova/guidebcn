<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <div class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <nav id="nav">
      <a href="<?php echo home_url(); ?>">Home</a>
      <a href="<?php echo site_url('/category/places/'); ?>">Places</a>
      <a href="<?php echo site_url('/category/museums'); ?>">Museums</a>
      <a href="<?php echo site_url('/contact'); ?>">Contact</a>

      <a href="<?php echo site_url('/about'); ?>">About Me</a>
    </nav>
  </header>

  <script>
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');

    hamburger.addEventListener('click', () => {
      nav.classList.toggle('active');
    });
  </script>

  <?php wp_footer(); ?>
</body>

</html>