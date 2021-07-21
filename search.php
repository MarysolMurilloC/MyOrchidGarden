<?php get_header(); ?>
   
    <?php
        $s=get_search_query();
        $args = array(
                's' =>$s
        );
        // The Query
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
            _e("<h2>Results for: ".get_query_var('s')."</h2>");
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
    ?>
                    
        <h3 class="pb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                
    <?php
        }
    }else{
    ?>
        <h2>Nothing Found</h2>
    <?php } ?>   

<?php get_footer(); ?>