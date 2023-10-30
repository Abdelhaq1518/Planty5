<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="./oceanwp-child/style.css">
	<?php wp_head(); ?>
</head>
<header class="header">
	<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress">
		<img class="logo"
			src="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/wp-content/uploads/2023/09/Logo-300x28.png"
			alt="logo Planty">
	</a>
	<nav>
		<ul class="liste-liens">
			<li>
				<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/nous-rencontrer/"
					class="lien-rencontrer">Nous rencontrer</a>
			</li>
			<?php
			if (is_user_logged_in()) {
				// Condition pour vérifier si l'utilisateur est connecté à WordPress
				echo '<li><a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/wp-admin/" class="lien-admin">Admin</a></li>';
			}
			?>
			<li>
				<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/commander" class="button">Commander</a>
			</li>
		</ul>
	</nav>

</header>


<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('ocean_before_outer_wrap'); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main">
			<?php echo esc_html(oceanwp_theme_strings('owp-string-header-skip-link', false)); ?>
		</a>

		<?php do_action('ocean_before_wrap'); ?>

		<div id="wrap" class="clr">

			<?php do_action('ocean_top_bar'); ?>

			<?php do_action('ocean_header'); ?>

			<?php do_action('ocean_before_main'); ?>

			<main id="main" class="site-main clr" <?php oceanwp_schema_markup('main'); ?> role="main">

				<?php do_action('ocean_page_header'); ?>