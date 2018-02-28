<?php

/*
Template Name: Contact
*/


//En ajoutant ce commentaire, on peut rattacher ce template à une page précise dans le backoffice de WordPress.

?><?php get_header(); 
?><?php   
    while ( have_posts() ) : 
    the_post();
    ?>  
<div id="contact"> 
    <?php do_shortcode(the_content()); ?>
</div> 
<?php endwhile; // End of the loop.
?>
<?php
get_footer();