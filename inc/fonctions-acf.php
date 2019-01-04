<?php
/***
 * Fichier pour la création de blocs Gutenberg avec ACF
 *
 */
// Ajouter un bloc pour les pages
// https://www.advancedcustomfields.com/resources/acf_register_block/
function acf_bloc_gutenberg_equipe() {
	// vérifie si c'est la bonne version ACF ou si ACF est actif. Dans le cas contraire tout s'arrête. 
	if ( ! function_exists('acf_register_block') )
		return;
	// Enregistrement du bloc
	acf_register_block(array(
		'name' => 'membre-equipe',
		'title' => 'Membres de l\'équipe',
		'render_callback' => 'acf_bloc_gutenberg_equipe_callback',
		'category' => 'formatting',
		'icon' => 'admin-users',
		'mode' => 'edit',
		'post_types' => array('page'),
		'keywords' => array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'acf_bloc_gutenberg_equipe');
// Affichage du bloc
function acf_bloc_gutenberg_equipe_callback() {
	// Affichage du html
	// Variables
	$prenom = get_field('blocequipe_prenom');
	$nom = get_field('blocequipe_nom');
	$bio = get_field('blocequipe_bio');
	$img_id = (int) get_field('blocequipe_photo');
	$img = wp_get_attachment_image( $img_id, 'medium' );
	$email = get_field('blocequipe_email');
	$site = get_field('blocequipe_site');
	$back_color = get_field('blocequipe_arriere_plan');
	$padding = get_field('blocequipe_marge_interne');
	// Appel du fichier d'affichage
	ob_start();
	include plugin_dir_path(__DIR__) . 'view/view-bloc-equipe.php';
	// Affichage et nettoyage de la mémoire tampon
	echo ob_get_clean();
}