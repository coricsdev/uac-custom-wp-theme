<? 
/**
 * WebFX Footer Column Four  Template
 *
 */
$title = get_field('title');
?>
<div class="footer-contact">
    <h4><? echo $title; ?></h4>
    <? if( have_rows('company_image_logo') ): ?>
    <ul class="award-logos">
        <? while( have_rows('company_image_logo') ): the_row(); 
            $image= get_sub_field('image');
        ?>
        <li>
            <img src="<? echo $image; ?>" alt="Award" />
        </li>
        <? endwhile; ?>
    </ul>
    <? endif; ?>
</div>