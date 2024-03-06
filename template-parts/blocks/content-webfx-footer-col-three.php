<? 
/**
 * WebFX Footer Column Three Template
 *
 */
$title = get_field('title');
$time_schedule = get_field('time_schedule');
?> 
<div class="footer-contact">
    <h4><? echo $title; ?></h4>
    <? echo $time_schedule; ?>
</div>