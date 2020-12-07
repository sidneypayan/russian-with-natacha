<?php get_header(); ?>

<!-- Banner -->
<section class="banner">
  <div class="banner__image"></div>
  <div class="banner__content">
    <h1>Learn Russian With Natasha</h1>
    <p class="lead">
      Partez à la découverte de la langue et de la culture russe
    </p>
    <a href="<?= site_url('#lesson'); ?>" class="btn-main">Start Your Journey</a>
  </div>
</section>

<!-- ARTICLES -->
<section class="my-4">
  <div class="container">
    <h2 class="section-title">Un nouveau Podcast chaque semaine</h2>
    <div class="items my-3">
      <?php
      $homepagePosts = new WP_Query([
        'posts_per_page' => 6

      ]);

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>
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
    <div class="btn-container">
      <a href="<?= site_url('/blog'); ?>" class="lead lead-blue underline">Voir tous les podcasts</a>
    </div>
</section>

<!-- LESSON -->
<section id="lesson" class="lesson py-4">
  <div class="container">
    <h2 class="section-title">Cours de russe par Skype</h2>
    <p class="lead lead-blue">
      Professeure diplômée de l'université de Moscou
    </p>
    <div class="lesson__content">
      <div class="lesson__info">
        <img src="<?= get_template_directory_uri(); ?>/images/natacha.jpg" alt="" />
        <p>Contacter Natacha</p>
        <a href="mailto:redfox000@yandex.ru?Subject=Cours%20de%20russe"><i class="fas fa-envelope fa-lg"></i></a>
        <a href="skype:red.fox000?chat"><i class="fab fa-skype fa-lg"></i></a>
      </div>
      <div class="lesson__bio">
        <p>
          L'apprentissage de la langue russe peut-être grandement facilité
          grâce à un professeur attentionné qui connaît vos difficultés et
          suit la bonne méthodologie. Grâce à sa formation et à son
          expérience avec des élèves français, elle est familière des
          difficultés que rencontrent les apprenants francophones de la
          langue russe. Passionnée par l'enseignement des langues, Natacha
          vous guidera dans votre apprentissage du russe avec un
          accompagnement personnalisé.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section id="newsletter" class="newsletter my-4">
  <div class="container">
    <div class="newsletter__content">
      <h2 class="section-title">Subscribe to get Exclusive Contents</h2>
      <form class="mt-2" action="name" method="POST" data-netlify="true">
        <div>
          <input type="text" class="name-input" name="name" placeholder="Name" autocomplete="off" />
        </div>
        <div>
          <input type="email" class="email-input" name="email" placeholder="Email" autocomplete="off" />
        </div>
        <button type="submit" value="Subscribe" class="btn">Submit</button>
      </form>
      <img class="newsletter__logo" src="<?= get_template_directory_uri(); ?>/images/russian_bear.png"
        alt="Russian Bear" />
    </div>
  </div>
</section>

<?php get_footer(); ?>