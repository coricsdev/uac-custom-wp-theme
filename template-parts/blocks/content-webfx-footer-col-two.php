<? 
/**
 * WebFX Footer Column Two Template
 *
 */

$title = get_field('title');
$address = get_field('address');
$button_direction_text = get_field('button_direction_text');
$button_direction_link = get_field('button_direction_link');
$phone_number = get_field('phone_number');

?>
<div class="footer-contact">
    <h4><? echo $title; ?></h4>
    <p>
        <? echo $address; ?> <br />
        <a class="learn-more" href="<? echo $button_direction_link; ?>"><? echo $button_direction_text; ?> <span class="icon-arrow-right"></span></a>
    </p>
    <p>
        Phone: <a class="color-body" href="tel:<? echo $phone_number; ?>"><? echo $phone_number; ?></a>
    </p>
</div>
