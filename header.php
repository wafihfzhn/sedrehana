<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
    <style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
        html {margin-top: 0 !important;}
        * html body { margin-top: 0 !important; }
        @media screen and ( max-width: 782px ) {
            html { margin-top: 0 !important; }
            * html body { margin-top: 0 !important; }
        }
    </style>    
</head>
 
<body>
    <nav class="navbar navbar-expand-lg navbar-color">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logosedre.png" alt="foto" width="140px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="foto" width="30px" height="18px"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/category/blogs/">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/category/videos/">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/category/podcasts/">Podcasts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Abouts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>