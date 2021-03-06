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
    $img_prog = get_field('img_prog');
    
  }
}
?>
<!--Plan 1 -->
<div class ="plan-1" style="background-image: url(<?php echo $img_fond['url']; ?>)">
<div class ="texte1"><?php the_field('banner_baseline'); ?></div>
<br />
<div class ="texte2"><?php the_field('titre_marron'); ?></div>
<br />
<div class ="texte3"><?php the_field('titre_vert'); ?></div>
<br />
<a href="#" id="bouttona"><?php echo $lien_inscription['title']; ?></a>
</div>
<!--Plan 2 -->
<div class ="plan-2">
<div class ="titreP2"><?php the_field('titre_conference'); ?></div>
<div class ="traitP2"></div>
<br />

<div class ="texte2P2">
<?php the_field('conference_texte'); ?>
</div>

</div>
<!--Plan 3 -->
<div class ="plan-3">
</div>

<!--Plan 4 -->
<div class ="plan-4" style="background-image: url(<?php echo $img_prog['url']; ?>)">
  <div class ="titreP4"> <?php the_field('titre_programme'); ?> </div>
  <div class="colonne">
  <div class="gauche">
<div class="cat1"><?php the_field('premiere_categorie'); ?> </div> <br />
    <?php $programs = get_field('program');
    foreach ($programs as $program){
      echo $program['hour'];
      echo $program['description'];
      echo "<br />";
    } ?>
</div>
    <div class="droite">
      <div class="cat1"><?php the_field('deuxieme_categorie'); ?> </div> <br />
    <?php $programs2 = get_field('program2');
    foreach ($programs2 as $program2){
      echo $program2['hour2'];
      echo $program2['programme22'];
      echo "<br />";
    } ?>

  </div>
  </div>
  <a href="#" id="bouttonb"><?php echo $lien_inscription['title']; ?></a>

  </div>

  <!--Plan 5 -->
  <div class="plan-5">
    <h1><?php the_field('titre_orateur');?></h1>
    <div class="traitP5"> </div>
    <p><?php the_field('stitre_orateur');?></p>
      <div id="orateur">
          <?php if(have_rows('orateur')):  ?>
            <?php while(have_rows('orateur')): the_row(); ?>

              <div>
                <img src="<?php the_sub_field('orateur_photo');?>"/>
                  <div class="orateurs">
                      <span> <?php the_sub_field('orateur_desc'); ?> </span>
                      <span> <?php the_sub_field('orateur_sdesc'); ?> </span>
                      <div>
                        <a href="#" class="buttonorateur"><?php echo $orateur_button['title']; ?></a>
                      </div>
                 </div>
             </div>
             <?php endwhile;  ?>
           <?php endif; ?>
    </div>
</div>
</div>
<?php get_footer(); ?>
