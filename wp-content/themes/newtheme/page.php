
<h1><?php bloginfo('name');?></h1>
<?php bloginfo('description');?>

<a href="../">home</a>
page, not post
<?php

    while(have_posts()){
        the_post(); ?>
        <h1><?php the_title()?></h1>
        <?php the_content()?>

     <?php
    }


?>