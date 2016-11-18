<?php
/**
 * Changelog
 */

$imenso_lite = wp_get_theme( 'imenso' );

?>
<div class="imenso-lite-tab-pane" id="changelog">

	<div class="imenso-tab-pane-center">
	
		<h1>imenso Lite <?php if( !empty($imenso_lite['Version']) ): ?> <sup id="imenso-lite-theme-version"><?php echo esc_attr( $imenso_lite['Version'] ); ?> </sup><?php endif; ?></h1>

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
	$imenso_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/CHANGELOG.md' );
	$imenso_lite_changelog_lines = explode(PHP_EOL, $imenso_lite_changelog);
	foreach($imenso_lite_changelog_lines as $imenso_lite_changelog_line){
		if(substr( $imenso_lite_changelog_line, 0, 3 ) === "###"){
			echo '<h1>'.substr($imenso_lite_changelog_line,3).'</h1>';
		} else {
			echo $imenso_lite_changelog_line,'<br/>';
		}
	}

	?>
	
</div>