<?
/**
 * Add custom ACF blocks
*/

//Add WEBFX Home Banner Block
add_action( 'acf/init', 'webfx_acf_init' );

function webfx_acf_init() {

    if ( function_exists( 'acf_register_block' ) ) {
        // Add Home Hero / Banner Block
		acf_register_block( array(
			'name'				=> 'webfx-home-banner',
			'title'				=> __('WebFX Home Banner Block'),
			'description'		=> __('A custom banner block'),
            'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'banner','carousel','slider' ),
				'align'           	=> array( 'full' ),
			),
		));
		//Add Welcome Start Block
		acf_register_block( array(
			'name'				=> 'webfx-welcome-start',
			'title'				=> __('WebFX Welcome Block'),
			'description'		=> __('A custom two columns image with text block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'two-columns','image','text' ),
				'align'           	=> array( 'full' ),
			),
		));
		//Add Home Services Block
		acf_register_block( array(
			'name'				=> 'webfx-home-services',
			'title'				=> __('WebFX Home Services Block'),
			'description'		=> __('A custom two columns services block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'home-services','service','text','image' ),
				'align'           	=> array( 'full' ),
			),
		));

		//Add Home Team Block
		acf_register_block( array(
			'name'				=> 'webfx-home-team',
			'title'				=> __('WebFX Home Team Block'),
			'description'		=> __('A custom team display block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'home-team','team','text','image' ),
				'align'           	=> array( 'full' ),
			),
		));

		//Add Exotic Care Block
		acf_register_block( array(
			'name'				=> 'webfx-exotic-care',
			'title'				=> __('WebFX Exotic Care Block'),
			'description'		=> __('A custom exotic care block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'exotic-care','two-columns','text','image' ),
				'align'           	=> array( 'full' ),
			),
		));

		//Add Fun Fact Block
		acf_register_block( array(
			'name'				=> 'webfx-fun-fact',
			'title'				=> __('WebFX Fun Fact Block'),
			'description'		=> __('A custom fun fact block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'fun-fact','two-columns','video','text' ),
				'align'           	=> array( 'full' ),
			),
		));

		//Add Testimonials and Blogs Block
		acf_register_block( array(
			'name'				=> 'webfx-testimonials-blog',
			'title'				=> __('WebFX Testimonials and Blog Block'),
			'description'		=> __('A custom testimonials and blog block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'fun-fact','two-columns','video','text' ),
				'align'           	=> array( 'full' ),
			),
		));

		//Add Footer Column One Block
		acf_register_block( array(
			'name'				=> 'webfx-footer-col-one',
			'title'				=> __('WebFX Footer Column One Block'),
			'description'		=> __('A custom footer first column block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'footer','text' ),
				'align'           	=> array( 'full' ),
			),
		));
		//Add Footer Column Two Block
		acf_register_block( array(
			'name'				=> 'webfx-footer-col-two',
			'title'				=> __('WebFX Footer Column Two Block'),
			'description'		=> __('A custom footer second column block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'footer','text' ),
				'align'           	=> array( 'full' ),
			),
		));
		//Add Footer Column Three Block
		acf_register_block( array(
			'name'				=> 'webfx-footer-col-three',
			'title'				=> __('WebFX Footer Column Three Block'),
			'description'		=> __('A custom footer third column block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'footer','text' ),
				'align'           	=> array( 'full' ),
			),
		));
		//Add Footer Column Four Block
		acf_register_block( array(
			'name'				=> 'webfx-footer-col-four',
			'title'				=> __('WebFX Footer Column Four Block'),
			'description'		=> __('A custom footer fourth column block'),
			'render_callback'   => 'webfx_acf_block_render_callback',
			'category'			=> 'webfx-blocks',
			'icon'            	=> 'media-document',
			'mode'				=> 'edit',
			'align' 			=> 'full',
			'supports' 			=> array(
				'keywords'			=> array( 'footer','text' ),
				'align'           	=> array( 'full' ),
			),
		));
    }
}

function webfx_acf_block_render_callback( $block ) {

	// convert name into path friendly slug
	$slug = str_replace( 'acf/', '', $block['name'] );

	// include a template part from within the "template-parts/blocks" folder
	if ( file_exists( get_theme_file_path( "template-parts/blocks/content-{$slug}.php" ) ) ) {
		include get_theme_file_path( "template-parts/blocks/content-{$slug}.php" );
	}
}

// Custom Block Category
function webfx_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'webfx-blocks',
				'title' => __( 'University Animal Clinic Blocks', 'university-animal-clinic' ),
			),
		)
	);
}
add_filter( 'block_categories', 'webfx_block_category', 10, 2);
