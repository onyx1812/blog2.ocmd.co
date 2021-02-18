<?php
/*
 * Template Name: Index
 */
get_header();

$wpb_all_query = new WP_Query(array(
  'post_type'=>'post',
  'post_status'=>'publish',
  'posts_per_page'=>-1
));

if ( $wpb_all_query->have_posts() ): ?>
<section class="posts">
  <div class="container">
    <h1>OCMD Blog</h1>
    <div class="posts-row">
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <div class="thumb-wrap">
              <div class="thumb" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
            </div>
          </div>
          <div class="col-md-7 col-lg-8">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="excerpt"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer();