<?php

/**

* The template for displaying the footer.

*

* Contains the closing of the #content div and all content after.

*

* @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials

*

* @package Shapely

*/?></div><!-- #main -->

<?php if(is_page("lassociation")) : ?>
    <div id="membres">
    </div>
<?php endif; ?>

</section><!-- section --><footer id="colophon" role="contentinfo">    <div class="container footer-inner">

        <div class="row">

            <?php get_sidebar( 'footer' ); ?>

        </div>        <div class="row">

            <div class="site-info col-sm-6">

                <div class="copyright-text">

                    <?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>

                </div>

                

            </div><!-- .site-info -->

            <div class="col-sm-6 text-right">

                <?php shapely_social_icons(); ?>

            </div>

        </div>

    </div>

    <div id="texte">

        <div id="left">

        <a class="url" href="url-de-la-page" target="_blank">CONTACT</a>

        </div>

        <div id="right">

        <a class="url" href="url-de-la-page" target="_blank">PARTENAIRES</a>

        </div>

        <div id="centre">

        <a class="url" href="url-de-la-page" target="_blank">MENTIONS LEGALES</a>

        </div>

        <div class="url" id="copyright">

        COPYRIGHT &copy;  <?php echo date('Y');?>

        </div>

   </div>

    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up fa-10x"></i></a>

</footer><!-- #colophon -->

</section>

</div>

</div><!-- #page --><?php wp_footer(); ?></body>

</html>

