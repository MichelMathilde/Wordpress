<?php get_header(); ?>

<div class="home">
  <div class="container">
    <div class='article-type'>

    <?php the_post() ?>

    <h2><?php the_title();?></h2>

    <?php the_content();?>

    </div>;

  </div>

</div>

<?php get_footer(); ?>