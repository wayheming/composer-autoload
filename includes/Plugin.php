<?php

namespace WHPluginComposer\Includes;

defined( 'ABSPATH' ) || exit;

final class Plugin {
	use Singleton;

	/**
	 * Constructor.
	 */
	public function __construct() {
		Helper::say_hello();
	}
}
