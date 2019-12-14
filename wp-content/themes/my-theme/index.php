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


    $img_fond = get_field('img_fond');
    $lien_inscription = get_field('lien_inscription');

  }
}
?>
<div class ="plan-1" style="background-image: url(<?php echo $img_fond['url']; ?>)">
<div class ="texte1"><?php the_field('banner_baseline'); ?></div>
<br />
<div class ="texte2"><?php the_field('titre_marron'); ?></div>
<br />
<div class ="texte3"><?php the_field('titre_vert'); ?></div>
<br />
<a href="#" id="bouttona"><?php echo $lien_inscription['title']; ?></a>
</div>

<div class ="plan-2">
<div class ="titreP2"><?php the_field('titre_conference'); ?></div>
<div class ="traitP2"></div>
<br />

<div class ="texte2P2">
<?php the_field('conference_texte'); ?>
</div>

</div>

<div class ="plan-3">
</div>
<div class ="plan-4">
  <div class ="titreP4"> <?php the_field('titre_programme'); ?> </div>
  <div class="colonne">
  <div class="columgauche">

    <?php $programs = get_field('program');
    foreach ($programs as $program){
      echo $program['hour'];
      echo $program['description'];
      echo "<br />";
    } ?>
</div>
    <div class="columdroit">
    <?php $programs2 = get_field('program2');
    foreach ($programs2 as $program2){
      echo $program2['hour2'];
      echo $program2['programme22'];
      echo "<br />";
    } ?>

  </div>
  </div>

  </div>
</div>
<?php get_footer(); ?>
