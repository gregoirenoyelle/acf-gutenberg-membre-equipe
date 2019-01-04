<?php
// Affichage bloc equipes
// Chargé depuis le fichier fonctions-acf.php
?>
<section class="membre-equipe" style="background-color:<?php echo esc_html($back_color); ?>; padding:<?php echo esc_html($padding); ?>rem;">
	<h2><?php echo esc_html($prenom); ?> <?php echo esc_html($nom); ?></h2>
	<div class="photo"><?php echo $img ?></div>
	<div class="membre-bio">
		<?php echo wp_kses_post($bio) ?>
	</div>
</section>