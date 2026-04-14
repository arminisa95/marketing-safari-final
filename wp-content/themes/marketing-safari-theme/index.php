<?php get_header(); ?>
<main style="padding: 120px 0; min-height: 60vh;">
  <div class="container">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article style="margin-bottom: 40px; padding: 32px; border: 1px solid #eee; border-radius: 12px;">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
      <p>Keine Beiträge gefunden.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
