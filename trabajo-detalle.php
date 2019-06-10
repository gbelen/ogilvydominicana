<style>
    #logo-header1{
        opacity: 1;
    }
    .navbar{
        background: #fff;
    }
</style>
<?php 
    /*
        Template name: Trabajo detalle
    */
    get_header(); 

    the_post();
?>

<section class="wrapDetalleTrabajo">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        
        <div class="wrapRelated">
            <h3>Otros trabajos</h3>
            <hr>
            
            <div class="row list_relateds">
                <?php
                    $query  = array('post_type'=>'page', 'post_parent'=>10, 'post_status'=>'publish', 'posts_per_page'=>3, 'post__not_in'=>array($post->ID) );
                    $loop   = new WP_Query($query);

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?> 
                    <div class="col-4">
                        <a class="item_related" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumb-related', array('class'=>'img-fluid', 'alt'=>get_the_title(), 'title'=>get_the_title() )); ?>
                            <div class="detalles">
                                <div class="info">
                                    <p class="t-titulo">
                                        <?php the_title(); ?>
                                    </p>
                                    <span class="t-linea"></span>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </a>
                    </div>  
                <?php endwhile; wp_reset_postada(); ?>
            </div>
        </div>



    </div><!--/container -->
</section><!--/wrapDetalleTrabajo -->


<?php get_footer(); ?>