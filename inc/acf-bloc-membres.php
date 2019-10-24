<?php
/**
 * Fonction pour la création de blocs Gutenberg avec ACF
 *
 * @package acf-bloc-membres
 * @author Grégoire Noyelle
 * @since 1.0.0
 * @link https://www.advancedcustomfields.com/resources/acf_register_block/
 * @link  https://www.advancedcustomfields.com/resources/acf_register_block_type/
 */
function acf_bloc_gutenberg_equipe() {

	//* Enregistrement du bloc
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
// Vérifie si la fonction ACF existe
if ( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'acf_bloc_gutenberg_equipe');
}


/**
 * Fonction de Callback pour l'affichage des blocs Gutenberg avec ACF
 *
 * Appelée depuis la fonction acf_bloc_gutenberg_equipe()
 *
 * @package acf-bloc-membres
 * @author Grégoire Noyelle
 * @since 1.0.0
 */
function acf_bloc_gutenberg_equipe_callback() {

	//* Variables ACF
	$prenom = get_field('blocequipe_prenom');
	$nom = get_field('blocequipe_nom');
	$bio = get_field('blocequipe_bio');
	$img_id = (int) get_field('blocequipe_photo');
	$img = wp_get_attachment_image( $img_id, 'cuisinier' );
	$email = get_field('blocequipe_email');
	$site = get_field('blocequipe_site');
	$back_color = get_field('blocequipe_arriere_plan');
	$padding = get_field('blocequipe_marge_interne');

	//* Appel du fichier pour l'affichage HTML
	ob_start();
	include plugin_dir_path(__DIR__) . 'view/view-bloc-equipe.php';
	// Affichage et nettoyage de la mémoire tampon
	echo ob_get_clean();
}