<?php
$philosophy_video_file = '';
if ( function_exists( "the_field" ) ) {
	$philosophy_video_file = get_field( "video_link" );
}
?>

<article <?php post_class( "masonry__brick entry format-video" ) ?>" data-aos="fade-up">

<div class="entry__thumb video-image">
	<?php if ( $philosophy_video_file ): ?>
    <a href="<?php echo esc_url( $philosophy_video_file ); ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
		<?php endif; ?>
		<?php the_post_thumbnail( "philosophy-home-square" ) ?>
    </a>
</div>

<?php get_template_part( "template-parts/common/post/summery" ); ?>

</article> <!-- end article -->