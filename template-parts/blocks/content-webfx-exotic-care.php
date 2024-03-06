<?
/**
 * WebFX Exotic Care Template
 *
 */
$title = get_field('title');
$subtitle = get_field('subtitle');
$description= get_field('description');
$bg_image = get_field('background_image');
$bg_color = get_field('background_color');
$button_text = get_field('button_text');
$button_url = get_field('button_url');
$team_image_one = get_field('team_image_one');
$team_image_two = get_field('team_image_two');
$team_image_title = get_field('team_image_title');
?>
	<!-- Exotic Care Start -->
	<div class="exotic-care">
		<img class="exotic-care__img" src="<? echo $bg_image; ?>" alt="">
		<div class="container">
			<div class="exotic-wrap">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h4 class="optinal-h4"><? echo $title; ?></h4>
						<h1><? echo $subtitle; ?></h1>
                        <? echo $description; ?>
						<a href="<? echo $button_url; ?>" class="btn btn-primary"><? echo $button_text; ?></a>
					</div>
					<div class="col-lg-5">
						<div class="exotic-images">
							<div class="exotic-image1 team-box">
								<div class="team-image">
									<img src="<? echo $team_image_one; ?>?" alt="Exotic" />
								</div>
								<div class="team-title">turtle</div>
							</div>
							<div class="exotic-image2 team-box">
								<div class="team-image">
									<img src="<? echo $team_image_two; ?>" alt="Exotic" />
								</div>
								<div class="team-title"><? echo $team_image_title; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Exotic Care End -->