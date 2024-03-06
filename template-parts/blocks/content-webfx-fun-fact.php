<?
/**
 * WebFX Fun Fact Template
 *
 */
$fun_fact_title = get_field('fun_fact_title');
$fun_fact_day = get_field('fun_fact_day');

?>
<!-- Fun Fact Start -->
<div class="fun-fact line-bg">
    <div class="container">
        <div class="fun-friday">
            <? echo $fun_fact_title ?>
            <span class="friday-label"><? echo $fun_fact_day;?></span>
        </div>
        <? if( have_rows('fun_fact_video') ): ?>  
        <div class="fun-fact-owl owl-carousel">
             <? while( have_rows('fun_fact_video') ): the_row(); 
                $fun_fact_video_description = get_sub_field('fun_fact_video_description');
                $fun_fact_video_url = get_sub_field('fun_fact_video_url',FALSE, FALSE);
                $fun_fact_video_button_text = get_sub_field('fun_fact_video_button_text'); 
	            $video_thumb_url = get_video_thumbnail_uri($fun_fact_video_url);
            ?>
            <div class="item">
                <div class="fun-image">
					<div id="preview-image-1">
						<a class="fun-image__mobile-slide youtube-video external" href="<? echo $fun_fact_video_url;  ?>">
							<img src="<? echo $video_thumb_url; ?>" alt="Video">
						</a>
					</div>
                </div>
                <div class="fun-content">
                    <p><? echo $fun_fact_video_description; ?></p>
                    <a class="btn btn-primary" href="<? echo $fun_fact_video_button_url; ?>"><? echo $fun_fact_video_button_text; ?></a>
                </div>
            </div>
            <? endwhile; ?>
        </div>
        <? endif; ?>
    </div>
</div>
<!-- Fun Fact End -->