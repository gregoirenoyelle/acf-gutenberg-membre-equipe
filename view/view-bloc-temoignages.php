<?php
/**
 * Affichage du HTML dans le block
 *
 * @package acf-bloc-membres
 * @author Grégoire Noyelle
 * @since 1.0.0
 */
?>

<?php
// Boucle temoignage

$boucle_temoignage = new WP_Query(
	array (
		'post_type' => 'gnp_temoignages',
		'posts_per_page' => esc_html($nombre),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'type_temoignage',
				'field' => 'id',
				'terms' => array(esc_html($type))
			)
		)
	)

); // fin Query


?>
<section class="grille-temoignage">

	<?php
	if ( $boucle_temoignage->have_posts() ) :
	while ( $boucle_temoignage->have_posts() ) : $boucle_temoignage->the_post();
		// Données ACF
		$texte = get_field('temoi_texte');
		$profession = get_field('temoi_profession');
		$lien = get_field('temoi_lien_avis');
	?>

	<div class="temoignage">

		<h2><?php echo get_the_title(); ?></h2>
		<?php echo $texte; ?>
		<a href="<?php echo esc_html($lien); ?>">Lien vers le témoignage</a>

	</div>
	<?php endwhile; ?>
	<?php else : ?>

		<p>Aucun témoignage par ici !</p>

	<?php endif; ?>
</section>