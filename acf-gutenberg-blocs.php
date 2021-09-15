<?php
/*
Plugin Name: ACF Gutenberg Blocs
Plugin URI: https://www.gregoirenoyelle.com
Description: Exemple d'extension avec ACF pour l'éditeur moderne (Gutenberg).
Version: 1.1.0
Author: Grégoire Noyelle
Author URI: https://www.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: acf-gutenberg-blocs
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}



/**
 * Lien vers les fichiers include
 *
 * @package acf-gutenberg-blocs
 * @author Grégoire Noyelle
 * @since 1.0.0
 */
include_once plugin_dir_path( __FILE__ ) . 'inc/fonctions-wordpress.php';
include_once plugin_dir_path( __FILE__ ) . 'inc/acf-bloc-membres.php';

