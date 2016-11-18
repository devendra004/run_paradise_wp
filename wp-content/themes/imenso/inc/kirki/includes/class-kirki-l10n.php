<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'imenso';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'imenso' ),
				'background-image'      => esc_attr__( 'Background Image', 'imenso' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'imenso' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'imenso' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'imenso' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'imenso' ),
				'inherit'               => esc_attr__( 'Inherit', 'imenso' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'imenso' ),
				'cover'                 => esc_attr__( 'Cover', 'imenso' ),
				'contain'               => esc_attr__( 'Contain', 'imenso' ),
				'background-size'       => esc_attr__( 'Background Size', 'imenso' ),
				'fixed'                 => esc_attr__( 'Fixed', 'imenso' ),
				'scroll'                => esc_attr__( 'Scroll', 'imenso' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'imenso' ),
				'left-top'              => esc_attr__( 'Left Top', 'imenso' ),
				'left-center'           => esc_attr__( 'Left Center', 'imenso' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'imenso' ),
				'right-top'             => esc_attr__( 'Right Top', 'imenso' ),
				'right-center'          => esc_attr__( 'Right Center', 'imenso' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'imenso' ),
				'center-top'            => esc_attr__( 'Center Top', 'imenso' ),
				'center-center'         => esc_attr__( 'Center Center', 'imenso' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'imenso' ),
				'background-position'   => esc_attr__( 'Background Position', 'imenso' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'imenso' ),
				'on'                    => esc_attr__( 'ON', 'imenso' ),
				'off'                   => esc_attr__( 'OFF', 'imenso' ),
				'all'                   => esc_attr__( 'All', 'imenso' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'imenso' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'imenso' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'imenso' ),
				'greek'                 => esc_attr__( 'Greek', 'imenso' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'imenso' ),
				'khmer'                 => esc_attr__( 'Khmer', 'imenso' ),
				'latin'                 => esc_attr__( 'Latin', 'imenso' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'imenso' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'imenso' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'imenso' ),
				'arabic'                => esc_attr__( 'Arabic', 'imenso' ),
				'bengali'               => esc_attr__( 'Bengali', 'imenso' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'imenso' ),
				'tamil'                 => esc_attr__( 'Tamil', 'imenso' ),
				'telugu'                => esc_attr__( 'Telugu', 'imenso' ),
				'thai'                  => esc_attr__( 'Thai', 'imenso' ),
				'serif'                 => _x( 'Serif', 'font style', 'imenso' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'imenso' ),
				'monospace'             => _x( 'Monospace', 'font style', 'imenso' ),
				'font-family'           => esc_attr__( 'Font Family', 'imenso' ),
				'font-size'             => esc_attr__( 'Font Size', 'imenso' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'imenso' ),
				'line-height'           => esc_attr__( 'Line Height', 'imenso' ),
				'font-style'            => esc_attr__( 'Font Style', 'imenso' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'imenso' ),
				'top'                   => esc_attr__( 'Top', 'imenso' ),
				'bottom'                => esc_attr__( 'Bottom', 'imenso' ),
				'left'                  => esc_attr__( 'Left', 'imenso' ),
				'right'                 => esc_attr__( 'Right', 'imenso' ),
				'center'                => esc_attr__( 'Center', 'imenso' ),
				'justify'               => esc_attr__( 'Justify', 'imenso' ),
				'color'                 => esc_attr__( 'Color', 'imenso' ),
				'add-image'             => esc_attr__( 'Add Image', 'imenso' ),
				'change-image'          => esc_attr__( 'Change Image', 'imenso' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'imenso' ),
				'add-file'              => esc_attr__( 'Add File', 'imenso' ),
				'change-file'           => esc_attr__( 'Change File', 'imenso' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'imenso' ),
				'remove'                => esc_attr__( 'Remove', 'imenso' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'imenso' ),
				'variant'               => esc_attr__( 'Variant', 'imenso' ),
				'subsets'               => esc_attr__( 'Subset', 'imenso' ),
				'size'                  => esc_attr__( 'Size', 'imenso' ),
				'height'                => esc_attr__( 'Height', 'imenso' ),
				'spacing'               => esc_attr__( 'Spacing', 'imenso' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'imenso' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'imenso' ),
				'light'                 => esc_attr__( 'Light 200', 'imenso' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'imenso' ),
				'book'                  => esc_attr__( 'Book 300', 'imenso' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'imenso' ),
				'regular'               => esc_attr__( 'Normal 400', 'imenso' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'imenso' ),
				'medium'                => esc_attr__( 'Medium 500', 'imenso' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'imenso' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'imenso' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'imenso' ),
				'bold'                  => esc_attr__( 'Bold 700', 'imenso' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'imenso' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'imenso' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'imenso' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'imenso' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'imenso' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'imenso' ),
				'add-new'           	=> esc_attr__( 'Add new', 'imenso' ),
				'row'           		=> esc_attr__( 'row', 'imenso' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'imenso' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'imenso' ),
				'back'                  => esc_attr__( 'Back', 'imenso' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'imenso' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'imenso' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'imenso' ),
				'none'                  => esc_attr__( 'None', 'imenso' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'imenso' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'imenso' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'imenso' ),
				'initial'               => esc_attr__( 'Initial', 'imenso' ),
				'select-page'           => esc_attr__( 'Select a Page', 'imenso' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'imenso' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'imenso' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'imenso' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'imenso' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
