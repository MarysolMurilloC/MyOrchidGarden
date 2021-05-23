<?php get_header(); ?>

<div class="bg-tien">
    <?php
        //Loop
        while( have_posts() ) : the_post();
    ?>

    <div class="row justify-content-center">
        <div class="row-10">
			<h2<?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        </div>
    </div>

    <?php endwhile; ?>
    </div>
    
<?php get_footer(); ?>