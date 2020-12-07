<?php get_header();

$mp3 = get_field('post_mp3');

while (have_posts()) {
  the_post(); ?>

<!-- PODCAST -->
<section id="podcast" class="podcast">
  <div class="container-s">
    <h1 class="podcast__title text-center">
      <?php the_title(); ?>
    </h1>
    <div id="podcast-text">
      <?php the_content(); ?>
    </div>
</section>

<!-- Music Player -->
<div class="music-container" id="music-container">
  <div class="music-info">
    <h4 id="title">Podcast</h4>
    <div class="progress-container" id="progress-container">
      <div class="progress" id="progress"></div>
    </div>
  </div>

  <audio src="<?= $mp3['url']; ?>" id="audio"></audio>

  <div class="img-container">
    <img src="<?= get_template_directory_uri(); ?>/images/ukulele.jpg" alt="music-cover" id="cover" />
  </div>
  <div class="navigation">
    <button id="prev" class="action-btn">
      <i class="fas fa-undo-alt"></i>
    </button>
    <button id="play" class="action-btn action-btn-big">
      <i class="fas fa-play"></i>
    </button>
    <button id="next" class="action-btn">
      <i class="fas fa-redo-alt"></i>
    </button>
  </div>
</div>
</div>

<?php }
get_footer(); ?>