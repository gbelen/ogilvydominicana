<style>
    #logo-header1{
        opacity: 1;
    }
    .navbar{
        background: #fff;
    }

    .navbar-toggler{
        opacity:0;
        display: none;
    }
</style>
<?php 
    /*
        Template name: Caso detalle
    */
    get_header(); 

    the_post();
?>

<section class="wrapDetalleTrabajo">
    <div class="wrapHeaderCasoDetalle">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container-fluid">
        <?php the_content(); ?>

        


        <div class="wrapShareBlock">
            <div class="shareBloque">
                <p><strong>COMPARTE</strong></p>
                <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
            </div>
        </div>

    </div><!--/container -->
</section><!--/wrapDetalleTrabajo -->


<?php get_footer(); ?>