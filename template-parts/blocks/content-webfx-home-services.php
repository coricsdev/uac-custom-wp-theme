<?
/**
 * WebFX Home Services Template.
 *
 */

$bg_image = get_field('section_background_image');
$location = get_field('location');
$service_name = get_field('service_name');
$service_details = get_field('service_details');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>
<div class="home-services" style="background-image: url('<? echo $bg_image; ?>'); background-repeat: repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <h4 class="optinal-h4"><? echo $location; ?></h4>
                    <h1><? echo $service_name; ?></h1>
                    <? echo $service_details; ?>
                    <a href="<? echo $button_link; ?>" class="btn btn-primary"><? echo $button_text; ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <div class="service-owl owl-carousel owl-theme">
                        <!--Start of the Carousel Loop -->
                        <!--Parent Repeater Field-->
                        <? if( have_rows('service_carousel') ):?>
                            <? while( have_rows('service_carousel') ): the_row(); ?>
                                <div class="item">
                                    <div class="row">  
                                        <!--Child Repeater Field-->
                                        <?  if( have_rows('service_carousel_item') ):
                                            while( have_rows('service_carousel_item') ): the_row();
                                            //get sub_field var
                                            $service_image = get_sub_field('service_image');
                                            $service_icon_class = get_sub_field('service_icon_class');
                                            $name_of_service= get_sub_field('name_of_service'); 
                                            $button_text = get_sub_field('button_text');
                                            $button_link = get_sub_field('button_link'); ?>
                                            <div class="col-md-6">
                                                <div class="service-box">
                                                    <div class="service-image">
                                                        <img src="<? echo $service_image;?>" alt="Service" />
                                                    </div>
                                                    <div class="service-info">
                                                        <div class="service-inner">
                                                            <div class="service-icon comman-icon">
                                                                <span class="<? echo $service_icon_class; ?>"></span>
                                                            </div>
                                                            <div class="service-title"><? echo $name_of_service; ?></div>
                                                            <a class="learn-more" href="<? echo $button_link; ?>"><? echo $button_text; ?> <span class="icon-arrow-right"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <? endwhile; ?> 
                                        <? endif; ?>
                                    </div>
                                </div>  
                            <? endwhile; ?>  
                        <? endif; ?>
                        <!--End of the Carousel Loop -->
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>
