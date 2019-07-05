<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
        <br>
        <?php             
            if (have_posts() ):
                while( have_posts() ): the_post(); ?>
                    <h5 class="title-post"> <?php the_title(); ?> </h5>
                    <p class="time">
                        <?php echo 'Ditulis Oleh '; ?> <b><?php the_author(); ?></b>
                        <?php echo ' Tanggal '; ?> <b><?php the_time('F j, Y'); ?></b>
                    </p>
                    <p class="post"> <?php the_post_thumbnail('big_thumb'); echo get_the_excerpt(); ?> <a class="link-baca" href="<?php the_permalink(); ?>">Read More</a></p>
                <?php endwhile; ?>
            <?php
                else:
                    echo '<p class="text-center">Belum Ada Post</p>';
                endif;
            ?>
        </div>
        <hr>
        <div class="col-md-4 dynamic-sidebar">
            <?php dynamic_sidebar('sidebar1') ?>
        </div>
    </div>
</div>

<?php
    get_footer();
?>