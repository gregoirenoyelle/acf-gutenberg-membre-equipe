<?php
/**
 * Fonction pour la création de blocs Gutenberg avec ACF
 *
 * @package acf-bloc-gncom
 * @author Grégoire Noyelle
 * @since 1.0.0
 * @link https://www.advancedcustomfields.com/resources/acf_register_block/
 */
function acf_bloc_gutenberg_temoignages() {

	/* Vérifie si c'est la bonne version ACF ou si ACF est actif.
		 Dans le cas contraire tout s'arrête.
	*/
	if ( ! function_exists('acf_register_block') )
		return;

	//* Enregistrement du bloc
	acf_register_block(array(
		'name' => 'grille-temoignage',
		'title' => 'Grille de témoignage',
		'render_callback' => 'acf_bloc_gutenberg_temoignages_callback',
		'category' => 'formatting',
		'icon' => 'dashicons-thumbs-up',
		'mode' => 'edit',
		'post_types' => array('page'),
		'keywords' => array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'acf_bloc_gutenberg_temoignages');



/**
 * Fonction de Callback pour l'affichage des blocs Gutenberg avec ACF
 *
 *
 * @package acf-bloc-gncom
 * @author Grégoire Noyelle
 * @since 1.0.0
 */
function acf_bloc_gutenberg_temoignages_callback() {

	//* Variables ACF
	$type = get_field('bloc_temoi_type_temoignages');
	$nombre = get_field('bloc_temoi_nombre_temoignages');
	$lien_page = get_field('bloc_temoi_lien_bouton');
	$texte_lien = get_field('bloc_temoi_texte_bouton');

	//* Appel du fichier pour l'affichage HTML
	ob_start();
	include plugin_dir_path(__DIR__) . 'view/view-bloc-temoignages.php';
	// Affichage et nettoyage de la mémoire tampon
	echo ob_get_clean();
}