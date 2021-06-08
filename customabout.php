<?php
/* Template Name: Quienes Somos*/
 get_header(); ?>


    <img class="phguar" src="<?php echo get_template_directory_uri()."/img/guaria.jpg"; ?>" alt="orquidea">

    <div class="bg-about">

        <?php while( have_posts() ) : the_post(); ?>

        <div class="margin-qs">

            <div class="qs-bor">
                <h2 class="h2-b"><?php the_title(); ?></h2>
                <div class="txt-about"><?php the_content(); ?></div>
            </div>
        
        </div>

        <?php endwhile; ?>

    </div>
    
    
  
<?php get_footer(); ?>