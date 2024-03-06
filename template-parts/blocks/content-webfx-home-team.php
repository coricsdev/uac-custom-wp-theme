<?
/**
 * WebFX Home Team Template
 *
 */
$title = get_field('title');
$subtitle = get_field('subtitle');
$banner_image = get_field('banner_image');
$button_text = get_field('button_text');
$button_url = get_field('button_url');
$icon = get_field('icon');
$background_color = get_field('background_color');
?>
	<div class="home-team">
		<div class="team-banner" style="background-color: <? echo $background_color; ?> !important;">
			<div class="banner-image">
				<img src="<? echo $banner_image; ?>" alt="Team" />
			</div>
		</div>
		<div class="team-content">
			<div class="container">
				<div class="team-wrap">
					<h4 class="optinal-h4"><? echo $title ?></h4>
					<h1><? echo $subtitle ?></h1>
                    <? if( have_rows('team_member') ): ?> 
					<div class="row">
                        <? while( have_rows('team_member') ): the_row(); 
                         $member_image = get_sub_field('member_image');
                         $member_name = get_sub_field('member_name');
                         $member_icon = get_sub_field('member_icon');    
                         $button_text = get_sub_field('button_text');  
                         $button_url = get_sub_field('button_url');    
                        ?>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src="<? echo $member_image; ?>" alt="Team" />
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="<? echo $member_icon; ?>"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="<? echo $button_url; ?>"><? echo $button_text; ?>
                                                <span class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title"><? echo $member_name; ?></div>
							</div>
						</div>
                        <? endwhile; ?>
					</div>
                    <? endif; ?>
					<div class="meet-button">
						<a href="<? echo $button_url; ?>" class="btn btn-secondary"><? echo $button_text; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
