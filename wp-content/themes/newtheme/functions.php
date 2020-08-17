<?php 

function resource_files(){
        //javascript file
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.1', true);


    wp_enqueue_style('custom-google-font', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style('font-awesome-sheet',"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('mainStylesheet', get_stylesheet_uri());

}

    add_action('wp_enqueue_scripts', 'resource_files');

function website_features(){
    add_theme_support('title-tag');
}


    add_action('after_setup_theme', 'website_features');
?>