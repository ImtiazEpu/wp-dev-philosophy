<!-- comments
		================================================== -->
<div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

            <h3 class="h2">
				<?php
				$philosophy_cn = get_comments_number();
				if ( $philosophy_cn <= 1 ) {
					echo $philosophy_cn . " " . __( "Comment", "philosophy" );
				} else {
					echo $philosophy_cn . " " . __( "Comments", "philosophy" );
				}
				?>
            </h3>

            <!-- commentlist -->
            <ol class="medias py-md-5 my-md-5 px-sm-0 mx-sm-0">

				<?php
				require_once( 'lib/class-wp-bootstrap-comment-walker.php' );

				wp_list_comments( array(
					'walker'      => new Bootstrap_Comment_Walker(),
					'style'       => 'ol',
					'max_depth'   => 4,
					'short_ping'  => true,
					'avatar_size' => '50',
					'format'      => 'html5'
				) );
				?>

            </ol> <!-- end commentlist -->
            <div class="comments-pagination">
				<?php
				the_comments_pagination( array(
					'screen_reader_text' => __( "Pagination", "philosophy" ),
					'prev_text'          => '<' . __( "Previous Comments", "philosophy" ),
					'next_text'          => '>' . __( "Next Comments", "philosophy" ),
				) );
				?>
            </div>


            <!-- respond
			================================================== -->
            <div class="respond">

                <h3 class="h2"><?php _e( "Add Comment", "philosophy" ) ?></h3>
				<?php
				$philosophy_comment_fields            = array();
				$philosophy_name_field_placeholder    = __( "Your Name", "philosophy" );
				$philosophy_emil_field_placeholder    = __( "Your Emil", "philosophy" );
				$philosophy_website_field_placeholder = __( "Website", "philosophy" );
				$philosophy_message_field_placeholder = __( "Your Message", "philosophy" );
				$philosophy_submit_button             = __( "Submit", "philosophy" );
				$philosophy_comment_fields['author']  = <<<EOD
<fieldset>
        <div class="form-field">
                <input name="author" type="text" id="author" class="full-width" placeholder="{$philosophy_name_field_placeholder}*" required value="">
        </div>
EOD;
				$philosophy_comment_fields['email']   = <<<EOD
        <div class="form-field">
                <input name="email" type="text" id="email" class="full-width" placeholder="{$philosophy_emil_field_placeholder}*"  requiredvalue="">
        </div>
EOD;
				$philosophy_comment_fields['url']     = <<<EOD
        <div class="form-field">
                <input name="url" type="text" id="url" class="full-width" placeholder="{$philosophy_website_field_placeholder}" value="">
        </div>

EOD;
				$philosophy_comment_field             = <<<EOD
        <div class="message form-field">
            <textarea name="comment" id="comment" class="full-width" placeholder="{$philosophy_message_field_placeholder}*" required></textarea>
        </div>

EOD;
				$philosophy_comment_submit_button     = <<<EOD
        <button type="submit" class="submit btn--primary btn--large full-width">{$philosophy_submit_button}</button>
</fieldset>

EOD;


				$philosophy_comment_from_argument = array(
					'fields'        => $philosophy_comment_fields,
					'comment_field' => $philosophy_comment_field,
					'submit_button' => $philosophy_comment_submit_button,
					'title_reply'   => ''

				);
				comment_form( $philosophy_comment_from_argument ); ?>

            </div> <!-- end respond -->

        </div> <!-- end col-full -->

    </div> <!-- end row comments -->
</div> <!-- end comments-wrap -->