<?
/**
 * WebFX Testimonials and Blog Template
 *
 */
$title = get_field('title');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>
<div class="testi-blog">
    <div class="container">
        <div class="row align-items-center">
            <!-- Testimonials Column -->
            <div class="col-lg-6">
                <div class="testimonials">
                    <div class="comman-icon">
                        <span class="icon-quotes"></span>
                    </div>
                    <h1><? echo $title; ?></h1>
                    <a class="btn btn-primary" href="<? echo $button_link; ?>"><? echo $button_text; ?></a>
                    <? if( have_rows('testimonial') ): ?>  
                    <div class="testi-owl owl-carousel">
                    <? while( have_rows('testimonial') ): the_row(); 
                        $review = get_sub_field('review');
                        $name = get_sub_field('name');
                    ?>
                        <div class="item">
                            <? echo $review; ?>
                            <br/>
                            <b>- <? echo $name; ?></b>
                        </div>
                    <? endwhile; ?>
                    </div>
                    <? endif; ?>
                </div>
            </div>
            <!-- Blog List Column -->
            <div class="col-lg-6">
                <div class="home-blog">
                    <div class="blog-title">
                        <h4 class="optinal-h4">OUR BLOG</h4>
                        <a class="btn btn-secondary" href="<? echo get_post_type_archive_link( 'post' ); ?>">View All Posts</a>
                    </div>
                    <div class="blog-main">
                        <? $args = array(
                            'post_type'      => 'post',
                            'orderby'        => 'date',
                            'order'          => 'ASC',
                            "numberposts" => 1,
                            'posts_per_page' => 1
                            );
                            // The Query
                            $the_query = new WP_Query( $args );
                            // The Loop
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        ?>
                        <div class="blog-image">
                            <img src="<? echo $featured_image; ?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-inner">
                                <h4><? the_title(); ?></h4>
                                <p><? the_excerpt(); ?></p>
                                <div class="readmore">
                                    <a class="btn btn-primary" href="<? echo get_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <? endwhile;
                        // Reset Post Data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>