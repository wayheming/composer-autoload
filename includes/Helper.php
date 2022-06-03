<?php

namespace WHPluginComposer\Includes;

defined( 'ABSPATH' ) || exit;

class Helper {
	use Singleton;

	/**
	 * Constructor.
	 */
	public static function say_hello() {
		echo esc_html__( 'Hello composer', 'wh-plugin' );
	}
}
