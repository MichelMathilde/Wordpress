<?php get_header(); ?>

  <div class="container">

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      /**
       * La méthode the_post() permet de charger le post courant
       * Un post est un type de contenu, par exemple une actualité ou une page
       **/
      the_post(); 

      /**
       * La méthode the_content() affiche le contenu du post en cours
       * Il s'agit du contenu que vous avez renseigné dans le back-office
       * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
       */
    ?> 

      <div class="article-type">

        <?php $link = get_permalink(); ?>

        <h2><a href="<?php echo $link ?>"><?php the_title(); ?></a></h2>
        <h2 class="caption"><?php the_post_thumbnail_caption(); ?></h2>
        <?php the_post_thumbnail(); ?>
        
      </div>
        
  <?php
    }
  }
  ?>
      
      

  </div>

<?php get_footer(); ?>