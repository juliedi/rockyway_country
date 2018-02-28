<?php
/*
Template Name: Infos
*/

//En ajoutant ce commentaire, on peut rattacher ce template à une page précise dans le backoffice de WordPress.
get_header();

?>


<?php get_header(); ?>
<?php
	while ( have_posts() ) :
		the_post();
?>
<div id="flag">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?></div>

    
<?php 

endwhile; // End of the loop.
?>
<?php
get_footer();
