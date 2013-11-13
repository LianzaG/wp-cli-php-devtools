<?php
/**
 * wp-cli phpdcd command
 *
 * @author Paolo Tresso <plugins@swergroup.com>
 * @version 0.1.0
 */

if ( true === class_exists( 'WP_CLI_Command' ) ){
	/**
	 * PHP Dead Code Detector: find dead/unused PHP code.
	 *
	 * @since 0.1.0
	 */
	class WP_CLI_Phpdcd_Command extends WP_CLI_Command{
		
		public function run( $args = null, $assoc_args = null ){
		}
	}

	WP_CLI::add_command( 'phpdcd', 'WP_CLI_Phpdcd_Command' );
}
