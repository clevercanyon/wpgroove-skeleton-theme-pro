<?php
/**
 * WP Groove™ {@see https://wpgroove.com}
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
// <editor-fold desc="Strict types, namespace, use statements, and other headers.">

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Skeleton_Theme_Pro;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};
use WP_Groove\{Framework_Pro as WPG_Pro};

/**
 * Theme.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Skeleton_Theme_Pro as WP};

// </editor-fold>

/**
 * No direct access.
 *
 * @since 2021-12-15
 */
if ( ! defined( 'WPINC' ) ) {
	return; // No direct access.
}

/**
 * Loads theme file.
 *
 * @since 2021-12-15
 */
require_once __DIR__ . '/theme.php';
