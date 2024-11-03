<?php
function barcelona_guide_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'barcelona_guide_enqueue_styles');

// Enable support for Post Thumbnails
add_theme_support('post-thumbnails');
// Add custom image sizes
add_image_size('custom-size', 300, 200, true); // Width: 300px, Height: 200px, Crop: true

function redirect_after_contact_form_submission() {
    ?>
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            window.location.href = 'http://www.guidebcn.com/thank-you/';
        }, false);
    </script>
    <?php
}
add_action('wp_footer', 'redirect_after_contact_form_submission');
