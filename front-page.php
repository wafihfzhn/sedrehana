<?php
    get_header();
?>

<div class="slide-top">
    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/scrool1.png" alt="foto" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/scrool2.png" alt="foto" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/scrool3.png" alt="foto" class="d-block w-100">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="row">
        <section class="col-md-6">
            <h3 class="text-center title-category">Blogs</h3>
            <?php             
            if (query_posts('cat=1'.'&showposts=3'.'&paged='.$paged) ):
                while( have_posts() ): the_post(); ?>
                    <h5 class="title-post"> <?php the_title(); ?> </h5>
                    <p class="time">
                        <?php echo 'Ditulis Oleh '; ?> <b><?php the_author(); ?></b>
                        <?php echo ' Tanggal '; ?> <b><?php the_time('F j, Y'); ?></b>
                    </p>
                    <p class="post-front-page"> <?php the_post_thumbnail('small_thumb'); echo get_the_excerpt(); ?> <a class="link-baca" href="<?php the_permalink(); ?>">Read More</a></p>
                <?php endwhile; ?>
            <?php
                else:
                    echo '<p class="text-center">Belum Ada Post</p>';
                endif;
            ?>
            <p  class="text-center"><a href="<?php echo home_url(); ?>/category/blogs/"><b class="btn-lihatsemua"> Lihat Semua Blogs >>> </b></a></p>
        </section>

        <section class="col-md-6">
            <h3 class="text-center title-category">Videos</h3>
            <?php             
            if (query_posts('cat=2'.'&showposts=3'.'&paged='.$paged) ):
                while( have_posts() ): the_post(); ?>
                    <h5 class="title-post"> <?php the_title(); ?> </h5>
                    <p class="time">
                        <?php echo 'Ditulis Oleh '; ?> <b><?php the_author(); ?></b>
                        <?php echo ' Tanggal '; ?> <b><?php the_time('F j, Y'); ?></b>
                    </p>
                    <p class="post-front-page"> <?php the_post_thumbnail('small_thumb'); echo get_the_excerpt(); ?> <a class="link-baca" href="<?php the_permalink(); ?>">Read More</a></p>
                <?php endwhile; ?>
            <?php
                else:
                    echo '<p class="text-center">Belum Ada Post</p>';
                endif;
            ?>
            <p  class="text-center btn-lihatsemua"><a href="<?php echo home_url(); ?>/category/videos/"><b class="btn-lihatsemua"> Lihat Semua Videos >>> </b></a></p>
        </section>
    </div>
</div>

<?php
    get_footer();
?>