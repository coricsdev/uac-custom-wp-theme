<? 
/**
 * WebFX Footer Column One Template
 *
 */
$footer_site_logo = get_field('footer_site_logo');
$facebook = get_field('facebook');
$instagram = get_field('instagram');
$youtube = get_field('youtube');
$tiktok = get_field('tiktok');
?>

<div class="footer-logo">
    <a href="<? echo get_home_url();?>">
    <img src="<? echo $footer_site_logo; ?>" alt="University Animal Clinic">
    </a>
</div>
<div class="footer-social">
    <ul>
        <? if( $facebook  != "" ){ ?>
            <li>
                <a href="<? echo $facebook; ?>" class="icon-facebook"></a>
            </li>
        <? } 
        else {
            echo '';
        }
        if( $instagram != "" ){ ?>
            <li>
                <a href="<? echo $instagram; ?>" class="icon-instagram"></a>
            </li>
            <? } 
        else{
            echo '';
        }
        if( $youtube != "" ){ ?>
            <li>
                <a href="<? echo $youtube; ?>" class="icon-youtube"></a>
            </li>
            <? } 
        else{
            echo '';
        } 
        if( $tiktok != "" ){ ?>
            <li>
                <a href="<? echo $tiktok; ?>" class="icon-tiktoc"></a>
            </li>
            <? } 
        else{
            echo '';
        } ?>
    </ul>
</div>
