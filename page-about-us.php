<?php get_header(); ?>


    <img class="phguar" src="<?php echo get_template_directory_uri()."/img/guaria.jpg"; ?>" alt="orchid">
    <div class="bg-about">
        <div class="margin-qs">

        <?php
            //get quienes_somos 
            $args = array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => $post->ID,
                'order' => 'ASC',
                'orderby' => 'menu_order'
            );

            $the_query = new WP_Query($args);

            if( $the_query->have_posts() ) :
                while( $the_query->have_posts() ) : $the_query->the_post();
        ?>

            <div class="qs-bor">
                <h2 class="h2-b"> <?php the_title(); ?> </h2>
                <div class="txt-about"> <?php the_content(); ?> </div>
            </div>

            <?php endwhile;
            else :
                echo "<p> no hay contenido a mostrar</p>";
            endif; ?>
        
        </div>
    </div>
    
    
  
<?php get_footer(); ?>