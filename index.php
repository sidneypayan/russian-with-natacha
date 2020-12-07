<?php
get_header();
?>

<section class="my-4">
  <div class="container">
    <h2 class="section-title py-2">Tous les Podcasts</h2>
    <div class="items my-3">

      <?php while (have_posts()) {
        the_post(); ?>
      <div class="items__item">
        <div class="items__image">
          <a href="<?php the_permalink(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/russia_card.jpg"
              alt="" /></a>
        </div>
        <div class="items__text-content">
          <div class="items__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="items__text">
            <?= the_excerpt(); ?>
          </div>
          <div class="items__action">
            <a href="<?php the_permalink(); ?>">Listen</a>
            <button><i class="material-icons">share</i></button>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>
    <?php echo paginate_links(); ?>
  </div>
</section>

<?php get_footer(); ?>