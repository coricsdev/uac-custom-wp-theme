<?
/**
 * WebFX Home Banner Template.
 *
 */
if( have_rows('home_banner') ): 
    echo '<div class="home-slider owl-carousel owl-theme">';
    while( have_rows('home_banner') ): the_row(); 
        //var
        $banner_title = get_sub_field('banner_title');
        $banner_description = get_sub_field('banner_description');
        $button_text= get_sub_field('button_text');
        $button_link= get_sub_field('button_link');
        $bg_image= get_sub_field('background_image');
        echo '<div class="item">';
            echo '<div class="slide-image">';
                echo '<img src="'.$bg_image.'" alt="Slide" />';
            echo '</div>';
            echo '<div class="container">';
                echo '<div class="slide-content">';
                    echo '<h4 class="optinal-h4">'. $banner_title .'</h4>';
                    echo '<h3>'. $banner_description .'</h3>';
                    echo '<a href="'.$button_link.'" class="btn btn-primary">'. $button_text .'</a>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    endwhile;
    echo '</div>'; 
endif;
  
?>
