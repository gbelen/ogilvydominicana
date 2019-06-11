<style>
    #logo-header1{
        opacity: 1;
    }
    .navbar{
        background: transparent;
    }

    .navbar-toggler{
        opacity:0;
        display: none;
    }
</style>
<?php 
    /*
        Template name: Casos Ganadores
    */
    get_header(); 

    the_post();
?>

<section class="wrapCasosWinners">
    <div class="container-fluid">

        <?php the_post_thumbnail('full', array('class'=>'img-fluid w-100')); ?>

        <div class="row no-gutters listCasos">
            <?php
                $query  = array('post_type'=>'page', 'post_parent'=>121, 'post_status'=>'publish' );
                $loop   = new WP_Query($query);

                while ( $loop->have_posts() ) : $loop->the_post();
            ?> 
                <div class="col-sm-3 col-6">
                    <a class="itemCaso" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumb-casos', array('class'=>'img-fluid', 'alt'=>get_the_title(), 'title'=>get_the_title() )); ?>
                        <div class="detalles">
                            <div class="info">
                                <h3><?php the_title(); ?></h3>
                                <span class="t-linea"></span>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                </div>  
            <?php endwhile; wp_reset_postada(); ?>
        </div>

    </div><!--/container -->
</section><!--/wrapCasosWinners -->


<?php get_footer(); ?>