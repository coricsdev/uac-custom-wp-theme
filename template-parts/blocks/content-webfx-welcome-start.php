<?
/**
 * WebFX Welcome Start Template.
 *
 */
$image = get_field('image');
$image_text = get_field('image_text');
$title = get_field('title');
$subtitle = get_field('subtitle');
$content = get_field('content');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>
<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src="<? echo $image; ?>" alt="Welcome" />
						</div>
						<div class="team-title">
							<? echo $image_text; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4"><? echo $title ; ?></h4>
						<h1><? echo $subtitle; ?></h1>
						<? echo $content; ?>
						<a href="<? echo $button_link; ?>" class="btn btn-primary"><? echo $button_text; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>