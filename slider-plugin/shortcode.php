<?php 

function custom_slider_callback(){

    $posts = get_posts([
        'post_type' => 'slider',
    ]);

    // echo '<pre>';
    // print_r($posts);
    // echo '<pre>';
    // die();

    foreach($posts as $post){

        $html .=    '<div class="slider--container" style="background-image: url('.get_the_post_thumbnail_url( $post -> ID ).');">';
        $html .=        '<div class="left-button-background">';
        $html .=            '<i class="prev-button fa-sharp fa-solid fa-chevron-left"></i>';
        $html .=        '</div>';
        $html .=        '<div class="slider--content">';
        $html .=            '<div class="slider--right--content">';
        $html .=                '<h5>Category |</h1>';
        $html .=                '<h1>'.$post -> post_title.'</h1>';
        $html .=                '<p>'.$post -> post_date.'</p>';
        $html .=                '<p>'.substr($post -> post_content,0 ,200).'</p>';
        $html .=                '<a href="'.$post -> guid.'"><button class="slider--button">READ ARTICLE</button></a>';
        $html .=                '</div>';
        $html .=            '</div>';
        $html .=        '<div class="right-button-background">';
        $html .=            '<i class="next-button fa-sharp fa-solid fa-chevron-right"></i>';
        $html .=        '</div>';
        $html .=    '</div>';
    }

    return $html;
}

add_shortcode('custom_slider', 'custom_slider_callback');