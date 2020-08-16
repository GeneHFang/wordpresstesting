<?php 
    //only works for posts, not pages
?>
<h1><?php bloginfo('name');?></h1>
<?php bloginfo('description');?>

<a href="../">home</a>

<?php

    while(have_posts()){
        the_post(); ?>
        <h1><?php the_title()?></h1>
        <?php the_content()?>

     <?php
    }


?>