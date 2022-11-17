<?php
/**
 * Git Updater
 *
 * @author   Andy Fragen
 * @license  MIT
 * @link     https://github.com/shadyjeff/core
 * @package  git-updater
 */

/**
 * Plugin Name:       Core
 * Plugin URI:        https://core.com
 * Description:       A plugin to automatically update GitHub hosted plugins, themes, and language packs. Additional API plugins available for Bitbucket, GitLab, Gitea, and Gist.
 * Version:           6.1.10
 * Author:            Andy Fragen
 * License:           MIT
 * GitHub Plugin URI: https://github.com/shadyjeff/core
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Primary Branch: main
 * Release Asset: true
 */

// Plugin version.
if ( ! defined( 'FUSION_CORE_VERSION' ) ) {
	define( 'FUSION_CORE_VERSION', '5.6.1' );
}

// Minimum PHP version required.
if ( ! defined( 'FUSION_CORE_MIN_PHP_VER_REQUIRED' ) ) {
	define( 'FUSION_CORE_MIN_PHP_VER_REQUIRED', '5.6' );
}

// Minimum WP version required.
if ( ! defined( 'FUSION_CORE_MIN_WP_VER_REQUIRED' ) ) {
	define( 'FUSION_CORE_MIN_WP_VER_REQUIRED', '4.5' );
}

// Plugin Folder Path.
if ( ! defined( 'FUSION_CORE_PATH' ) ) {
	define( 'FUSION_CORE_PATH', wp_normalize_path( dirname( __FILE__ ) ) );
}

// Plugin Folder URL.
if ( ! defined( 'FUSION_CORE_URL' ) ) {
	define( 'FUSION_CORE_URL', plugin_dir_url( __FILE__ ) );
}

// The main plugin file path.
if ( ! defined( 'FUSION_CORE_MAIN_PLUGIN_FILE' ) ) {
	define( 'FUSION_CORE_MAIN_PLUGIN_FILE', __FILE__ );
}

/**
 * Compatibility check.
 *
 * Check that the site meets the minimum requirements for the plugin before proceeding.
 *
 * @since 4.0
 */
if ( version_compare( $GLOBALS['wp_version'], FUSION_CORE_MIN_WP_VER_REQUIRED, '<' ) || version_compare( PHP_VERSION, FUSION_CORE_MIN_PHP_VER_REQUIRED, '<' ) ) {
	require_once FUSION_CORE_PATH . '/includes/bootstrap-compat.php';
	return;
}

/**
 * Bootstrap the plugin.
 *
 * @since 4.0
 */
require_once FUSION_CORE_PATH . '/includes/bootstrap.php';

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
