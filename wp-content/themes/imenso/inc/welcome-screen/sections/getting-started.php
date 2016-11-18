<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
$imenso_lite = wp_get_theme( 'imenso' );
?>

<div id="getting_started" class="imenso-lite-tab-pane active">

	<div class="imenso-tab-pane-center">
		
		<h1 class="imenso-lite-welcome-title"><?php _e('Welcome to imenso!','imenso'); if( !empty($imenso_lite['Version']) ): ?> <sup id="imenso-lite-theme-version"><?php echo esc_attr( $imenso_lite['Version'] ); ?> </sup><?php endif; ?></h1>
	</div>

	<hr />

	<div class="imenso-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'imenso' ); ?></h1>

		<h4><?php esc_html_e( 'Customize Whole theme in a single place.' ,'imenso' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'imenso' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'imenso' ); ?></a></p>
	</div>

	<hr />
	<div class="imenso-tab-pane-center">
		<h1><?php esc_html_e( 'FAQ', 'imenso' ); ?></h1>
	</div>
	<div class="imenso-tab-pane-half imenso-tab-pane-first-half">
		<h4><?php esc_html_e( 'Create a child theme', 'imenso' ); ?></h4>
		<p><?php esc_html_e( 'If you want to make changes to the theme\'s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.', 'imenso' ); ?></p>
		<p><a href="http://demo.webhuntinfotech.com/blog/2016/01/11/how-to-create-a-child-theme/" class="button" target="_blank"><?php esc_html_e( 'View how to do this', 'imenso' ); ?></a></p>

		<hr />

		<h4><?php esc_html_e( 'Gallery in Blog Posts', 'imenso' ); ?></h4>
		<p><?php esc_html_e( 'If you want to use more than one images in your post or want to make gallery images in your post. This can be accomplished by following the documention below.', 'imenso' ); ?></p>
		<p><a href="http://demo.webhuntinfotech.com/blog/2016/01/11/add-gallery-posts-in-matrix-or-imenso-theme/" class="button" target="_blank"><?php esc_html_e( 'View how to do this', 'imenso' ); ?></a></p>
	</div>

	<div class="imenso-tab-pane-half">
	
		<h4><?php esc_html_e( 'Translate imenso Lite', 'imenso' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to translate imenso Lite into your native language or any other language you need for you site.', 'imenso' ); ?></p>
		<p><a href="http://demo.webhuntinfotech.com/blog/2016/01/11/how-to-translate-any-translation-ready-theme/" class="button" target="_blank"><?php esc_html_e( 'View how to do this', 'imenso' ); ?></a></p>
		
	<hr />

	<h4><?php esc_html_e( 'How To Setup Home Page', 'imenso' ); ?></h4>
		<p><?php esc_html_e( 'See below document. It will help you to setup Home Page' , 'imenso' ); ?></p>
		<p><a href="http://demo.webhuntinfotech.com/blog/2016/02/02/how-to-setup-home-page-in-matrix-or-imenso-lite/" class="button" target="_blank"><?php esc_html_e( 'View how to do this', 'imenso' ); ?></a></p>

	</div>

	<div class="imenso-lite-clear"></div>

</div>
