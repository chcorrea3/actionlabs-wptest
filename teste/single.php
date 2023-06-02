<?php get_header(); ?>

<?php
$hero_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$hero_style = '';
if ($hero_image) {
  $hero_style = 'style="background-size: cover; background-position: center; filter: brightness(0.5) blur(2px); min-height: 70vh; width: 100vw; background-image: url(' . esc_url($hero_image[0]) . ');"';
}
?>

<div class="hero-main post-hero" <?php echo $hero_style; ?>></div>
<div id="content">
  <div id="inner-content" class="container">
    <main id="main" class="site-main post-container" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <img style="width: 100%; height: auto; margin-bottom: 32px;" src="<?php the_post_thumbnail(); ?>
            <span class="entry-category"><?php the_category(', '); ?></span>
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <div class="entry-meta">
              <span class="entry-date"><i class="fa-solid fa-calendar"></i><?php the_date(); ?></span>
              <span class="entry-tags"><i class="fa-solid fa-tag"></i><?php the_tags('', ', '); ?></span>
              <span class="entry-author">Autor: <?php the_author(); ?></span>
            </div>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; endif; ?>

    </main>
  </div>
</div>

<?php get_footer(); ?>