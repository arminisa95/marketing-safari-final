<?php
/*
 * Wenn Elementor die Seite baut, wird front-page.php umgangen.
 * Diese Datei ist nur als Fallback aktiv.
 */
if (class_exists('Elementor\Plugin') && \Elementor\Plugin::$instance->preview->is_preview_mode()) {
    get_header();
    the_content();
    get_footer();
    return;
}

// Front page mit Elementor-Inhalt
get_header();
?>
<main id="main">
  <?php
  $front = get_option('page_on_front');
  if ($front) {
      $post = get_post($front);
      setup_postdata($post);
      the_content();
      wp_reset_postdata();
  }
  ?>
</main>
<?php get_footer(); ?>
