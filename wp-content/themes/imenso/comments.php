<div id="comments" class="comments-area">
    <?php if (have_comments()):
        if (post_password_required(get_the_ID())) {
            ?>
            <p class="nocomments"><?php _e('Please enter password to view or post a comments', 'imenso'); ?></p><?php
            return;
        }
        if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h3 class="screen-reader-text"><?php _e('Comment navigation', 'imenso'); ?></h3>

                <div class="nav-previous">
                    <?php previous_comments_link(__('&larr; Older Comments', 'imenso')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Newer Comments &rarr;', 'imenso')); ?>
                </div>
            </nav><!-- #comment-nav-above --><?php
        endif; // Check for comment navigation.
        ?>
        <div class="small_title">
	<span class="small_title_con">
		<span class="s_icon"><i class="fa fa-comment-o"></i></span>
		<span class="s_text"><?php _e('Leave Comment', 'imenso'); ?></span>
		
	</span>
        </div>
        <ol class="comments-list clearfix">
        <?php wp_list_comments('callback=imenso_comments&style=ol'); ?>

        </ol><?php
    endif;
    if (comments_open()) {
        ?>

        <!-- Start Respond Form -->
        <div class="comments-form-area" id="comments-form">
            <div class="comment-respond" id="respond">
                <?php
                $fields = array(
                    'author' => '<input type="text" aria-required="true" size="30" value="" placeholder="' . __('Name (required)', 'imenso') . '" name="author" id="author">',
                    'email' => '	 <input type="text" aria-required="true" size="30" value="" placeholder="' . __('Email (required)', 'imenso') . '" name="email" id="email">',
                    'website' => '<input type="text" size="30" value="" placeholder="' . __('Website', 'imenso') . '" name="url" id="url">',
                );
                function imenso_defaullt_fields($fields)
                {
                    return $fields;
                }

                add_filter('comment_form_default_fields', 'imenso_defaullt_fields');
                $comments_args = array(
                    'fields' => apply_filters('comment_form_default_fields', $fields),
                    'label_submit' => __('Submit Message', 'imenso'),
                    'title_reply_to' => '<div class="small_title">
										<span class="small_title_con">
											<span class="s_icon"><i class="fa fa-mail-reply"></i></span>
											<span class="s_text">' . __('Leave a Reply to %s', 'imenso') . '</span></span></div>',
                    'title_reply' => '<div class="small_title">
										<span class="small_title_con">
											<span class="s_icon"><i class="fa fa-mail-reply"></i></span>
											<span class="s_text">' . __("Leave a reply", 'imenso') . '</span></span></div>',
                    'comment_notes_after' => '',
                    'comment_field' => '<p class="comment-form-comment">
											<textarea aria-required="true" rows="8" cols="45" name="comment" placeholder="' . __('Comment...', 'imenso') . '" id="comment"></textarea>
										</p>
								  ',
                    'class_submit' => 'send_button',
                );
                comment_form($comments_args);
                add_filter("comment_id_fields", "my_submit_comment_message");?>
            </div>
        </div>
    <?php } ?>
</div>
<!-- End Respond Form -->