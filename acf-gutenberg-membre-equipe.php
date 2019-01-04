<?php
/*
Plugin Name: ACF Blocs Membre pour l'éditeur moderne
Plugin URI: https://wwww.gregoirenoyelle.com
Description: Exemple d'extension avec ACF pour l'éditeur moderne (Gutenberg).
Version: 2.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: acf-bloc-membres
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}



/***
* LIENS FICHIER PHP
*/


// Fichier de functions pour ACF
include_once plugin_dir_path( __FILE__ ) . 'lib/fonctions-acf.php';
