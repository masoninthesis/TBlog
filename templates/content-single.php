<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_post_thumbnail( 'featured-img' ); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <!-- When you wish to add comments, copy code in comment-activate.txt -->
    </footer>
    <!-- When you wish to add comments, copy code in comment-activate.txt -->
  </article>
<?php endwhile; ?>
