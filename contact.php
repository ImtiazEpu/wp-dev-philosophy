<?php
/*
 * Template Name: Contact Page Template
 */
the_post();
get_header();
?>


    <!-- s-content
	================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
					<?php the_title(); ?>
                </h1>

            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div id="map-wrap">
					<?php
					if ( is_active_sidebar( "contact-map" ) ) {
						dynamic_sidebar( "contact-map" );
					}
					?>
                </div>
            </div> <!-- end s-content__map-->

            <div class="col-full s-content__main">
				<?php the_content(); ?>
                <div class="row pt-4">
					<?php
					if ( is_active_sidebar( "contact-info" ) ) {
						dynamic_sidebar( "contact-info" );
					}
					?>
                </div>
                <h3>Say Hello.</h3>
				<?php
				if ( get_field( "contact_from_shortcode" ) ) {
					echo do_shortcode( get_field( "contact_from_shortcode" ) );
				}
				?>
            </div> <!-- end s-content__main -->

        </article>

    </section> <!-- s-content -->


<?php get_footer(); ?>