<?php get_header(); ?>

    <?php
        //Loop
        while( have_posts() ) : the_post();
    ?>

    <div class="row">
        <div class="col-11 offset-1">
            <h3><?php the_title(); ?></h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="row-10">
        <p><?php the_content(); ?></p>
        </div>
    </div>

    <?php endwhile; ?>

<?php get_footer(); ?>