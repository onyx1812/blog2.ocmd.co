<?php
/*
 * Template Name: Blog
 */
get_header(); ?>

<section class="content">
  <div class="container">
    <h1><?php the_field('headline'); ?></h1>
    <div class="date"><?php the_field('date'); ?></div>
  </div>
</section>

<section class="broadcast">
  <div class="container">
    <p class="text"><?php the_field('text'); ?></p>
    <a href="<?php the_field('link'); ?>" ><img src="<?php the_field('image'); ?>" alt=""></a>
    <a href="<?php the_field('link'); ?>" class="btn-video">WATCH VIDEO</a>
    <div class="info">
      <div class="info-img">
        <img src="<?php echo IMG; ?>/dr.png" alt="">
      </div>
      <div class="info-right">
        <h4 class="info-title">Dr. Tess Mauricio</h4>
        <div class="info-desc">— Board Certified Dermatologist, fellow of the American Academy of Dermatology</div>
        <div class="info-slogan">“Bring the procedures that thousands of my patients us in my clinic to erase years away to your home”</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();