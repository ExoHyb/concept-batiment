<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<div id="playground">

	<div id="mobile-top" class="d-block d-sm-none">
		<div class="container">
			<div class="row">
				<?php
				if( defined( '_MOBILE_NAV_' ) && _MOBILE_NAV_ )
					echo '<div class="col-xs"><div id="btn-mobile-menu"><span><span></span></span></div></div>';
				?>
				<div id="mob-title" class="col-xs text-right">
					<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
						<?php
						echo get_bloginfo('name');
						?>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php if (is_front_page() == true): ?>
		<header class="header-home-desktop">
			<div class="container">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div id="primary-menu">
					<?php
					if( has_nav_menu('primary_nav') )
						wp_nav_menu(array('theme_location' => 'primary_nav', 'container' => false, 'menu_class' => ''));
					?>
				</div>
			</div>
		</header>
	<?php else: ?>
		<header class="header-other">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<p class="title"><?php _e('Concept Bâtiment', 'twoobl'); ?></p>
					</div>
					<div class="col-sm-9">
						<?php
						if( has_nav_menu('primary_nav') )
							wp_nav_menu(array('theme_location' => 'primary_nav', 'container' => false, 'menu_class' => ''));
						?>
					</div>
				</div>
			</div>
		</header>
	<?php endif; ?>

	<div id="wrap">

		<?php
		if( function_exists('yoast_breadcrumb') && !is_front_page() )
		{
			yoast_breadcrumb('<div id="breadcrumb-wrap" class="container hidden-xs">', '</div>');
		}
		?>

		<div role="document">
