<?php get_header(); ?>

    <div class="bg-tien">
    <?php
        //Loop
        while( have_posts() ) : the_post();
    ?>

    <?php
            //get quienes_somos 
            $args = array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => $post->ID,
                'order' => 'ASC',
                'orderby' => 'menu_order'
            );

            $the_query = new WP_Catego($args);

            if( $the_query->have_posts() ) :
                while( $the_query->have_posts() ) : $the_query->the_post();
        ?>  

    <div class="row justify-content-center">
        <div class="row-10">
			<h2<?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
        </div>
    </div>

    <?php endwhile; ?>
    </div>
    

<?php get_footer(); ?>