<h1><?php bloginfo('name');?></h1>
<?php bloginfo('description');?>

<a href="../">home</a>

<?php

    while(have_posts()){
        the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h1>
        <?php the_content()?>
        <hr>

     <?php
    }


?>