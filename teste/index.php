<?php get_header(); ?>
<?php
$hero_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$hero_style = '';
if ($hero_image) {
  $hero_style = 'style="background-size: cover; background-position: center; filter: brightness(0.5) blur(2px); min-height: 70vh; width: 100vw; background-image: url(' . esc_url($hero_image[0]) . ');"';
}
?>
<div class="hero-main" <?php echo $hero_style; ?>></div>
<div id="content">
  <div id="inner-content" class="container">
    <main id="main" class="site-main portal-cliente" role="main">

      <h1 class="main-title">Portal do Cliente</h1>

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => $paged
      );
      $query = new WP_Query($args);
      ?>

      <?php if ($query->have_posts()) : ?>
        <div class="post-grid row">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post-item col-md-4 col-sm-12">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="post-thumbnail" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    <div class="category-overlay"><?php the_category(', '); ?></div>
                  </div>
                <?php endif; ?>
                <h4 class="post-title title-light"><?php the_title(); ?></h3>
                <div class="post-content"><?php echo wp_trim_words(get_the_content(), 16); ?></div>
                <a class="post-link" href="<?php the_permalink(); ?>" class="read-more-link">LEIA MAIS »</a>
              </a>
            </div>
          <?php endwhile; ?>
        </div>

        <div class="pagination">
          <?php
          echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
          ));
          ?>
        </div>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php __('No posts found'); ?></p>
      <?php endif; ?>


    </main>
  </div>
</div>

<?php get_footer(); ?>
