<?php
/**
 * Template Name: Sobre Nós
 */
get_header();
?>

<div id="content">
  <div id="inner-content" class="container">
    <main id="main" class="site-main" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h2 class="entry-title title-light"><?php the_title(); ?></h2>
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
