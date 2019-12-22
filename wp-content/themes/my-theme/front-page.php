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
    the_content();
?>
      
<?php
    $img = get_field('banner_background_image');
?>
    
<div class="section-banner" style="background-image: url(<?php echo $img['url']; ?>);">
  <div class="bloc-texte">
    <p class="contenu">
      <span><?php the_field('banner_baseline')?></span>
      <span><?php the_field('banner_title_brown')?></span>
      <span><?php the_field('banner_title_green')?></span>

    </p>

    <a class="bouton bouton-vert" href="<?php echo get_field('banner_register_link')?>">S'inscrire aux rencontres</a>

  </div>

  </div>    

<section class="section-conferences">
  <div class="contenu">
    <h3 class="titre"><?php the_field('conference_title')?></h3>

    <hr/>

    <p class="paragraphe"><?php the_field('conference_content')?>

    <?php 

    $img = get_field('banner_conference');

    ?>
    
  </div>

  <div class="image-separator" style="background-image: url(<?php echo $img['url']; ?>);"></div>

</section>    

<section class="section-programme">

  <h3 class="titre"><?php the_field('program_title')?></h3>

  <hr/>

  <div class="program_subtitles">
    <h4 class="program_subtitle"><?php the_field('program_subtitle')?></h4>
    <h4 class="program_subtitle"><?php the_field('program_subtitle_two')?></h4>

  </div>

  <div class="rows-display">
    <div class="row-1">
      
      <?php

      $programme = get_field('program_elements');

      foreach($programme as $program_elements){
        echo "<span class='date'>".$program_elements['hour']."</span/>";
        echo "<span class='desc'>".$program_elements['description']."</span><br/>";
      }

      ?>

    </div>

    <div class="row-2">
      
      <?php

      $programme = get_field('program_elements_two');

      foreach($programme as $program_elements_two){
        echo "<span class='date'>".$program_elements_two['hour']."</span>";
        echo "<span class='desc'>".$program_elements_two['description']."</span><br/>";
      }

      ?>

    </div>

  </div>

  <a class="bouton bouton-vert" href="<?php echo get_field('banner_register_link')?>">S'inscrire aux rencontres</a>

</section>

<section class="section-orators">

  <h3 class="titre"><?php the_field('orators_title')?></h3>

  <hr />

  <div class="orators-contenu">

    <?php

    $orators = get_field('orators_elements');

    // var_dump($orators);

    //$img = $orators[0]['profile_pic']['url'];

    foreach($orators as $orator){
      //var_dump($orator);
      echo "<div>";
      echo "<div class='profile_pic' style='background-image: url(".$orator['profile_pic']['url'].");'></div><br/>";
      echo "<div><span class='name'>".$orator['name']."</span><br/>";
      echo "<span class='desc'>".$orator['description_image']."</span><br/></div>";
      echo "<a href='#' class='orator-bouton'>".$orator['button_description']."</a>";
      echo "</div>";
    }

    ?>

  </div>

</section>

<section class="section-infos">
    
  <h3 class="titre"><?php the_field('infos_title')?></h3>

  <hr/>

  <div class="infos-wrapper">

    <?php $img = get_field('banner_infos'); ?>

    <div class='banner' style="background-image: url(<?php echo $img['url']; ?>);">
      <div class="address">
        <div class="item">
          <div class="logo-1"></div>
          <span><?php the_field('address_infos')?></span>
        
        </div>

        <hr/>

        <div class="item">
          <div class="logo-2"></div>
          <span><?php the_field('hour_infos')?></span>
        
        </div>

        <hr/>

        <div class="item">
          <div class="logo-3"></div>
          <span><?php the_field('food_infos')?></span>
        
        </div>

      </div>

      <div class="map">
        <a href="#" class="bouton bouton-blanc">Voir sur la carte</a>

      </div>

    </div>

  </div>

</section>

<section class="section-actus">
  <h3 class="titre"><?php the_field('actus_title')?></h3>

  <hr/>
  
  <div class="actus-wrapper">

     <?php

    $posts_myname = new WP_Query( array( 'post_type' => 'post' ) );

    while ( $posts_myname->have_posts() ) {
      $posts_myname->the_post();    

      echo "<div class='type-article'>"; ?>
        <div class="article-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>;')"></div>
          <div class="container">
            <span class="article-title"><?php echo get_the_title(); ?></span>
            <span class="article-caption"><?php echo get_the_post_thumbnail_caption(); ?></span>
            
            <a href="#" class="read-bouton">Lire la suite</a>

            <span class="article-date"><?php echo get_the_date(); ?></span>

        </div>

      <?php echo "</div>";
      }

      ?> 

    </div>

  </div>
   
</section>
           
<?php
  }
}

?>
    
</div>


<?php get_footer(); ?>