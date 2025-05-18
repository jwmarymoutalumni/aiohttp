<?php get_header(); ?>
<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="product">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      } ?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </div>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no products found.' ); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
