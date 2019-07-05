<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php 
                if (have_posts() ):
                while( have_posts() ): the_post(); ?>
                    <h5 class="title-post title-content"> <?php the_title(); ?> </h5>
                    <p class="time">
                        <?php 
                            echo 'Posted by '; the_author();
                            echo ' On '; the_time('F j, Y');
                            echo ' At '; the_time(); 
                        ?>
                    </p>

                    <div class="post">
                        <p> <?php echo get_the_content(); ?> </p>
                    </div>
                <?php endwhile; ?>

            <?php
                else:
                    echo '<p class="text-center">Belum Ada Post</p>';
                endif;
            ?>
        </div>
    </div>
</div>

<?php
    get_footer();
?>