<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- Disable phone detection in IE-->
	<meta name="format-detection" content="telephone=no">

	<!-- Set custom color theme for mobile UI-->
	<meta name="msapplication-TileColor" content="#A2A2A2">
	<meta name="theme-color" content="#A2A2A2">

	<!-- Add Google Fonts -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Bellefair|Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
<header class="header">
	<div class="header__content flex">
		<div class="header__banner">
			<div role="banner" class="logo text-center medium-text-left">
				<?php show_custom_logo(); ?>
			</div>
		</div>
		<div class="header__navigation">
			<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle></button>
				<div class="title-bar-title">Menu</div>
			</div>
			<nav role="navigation" class="top-bar" id="main-menu">
				<?php
				if ( has_nav_menu( 'header-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_class'     => 'menu header-menu dropdown',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-close-on-click-inside="false">%3$s</ul>',
						'walker'         => new Foundation_Navigation()
					) );
				}
				?>
			</nav>
		</div>
	</div>
</header>
<!-- END of header -->

<?php get_template_part( 'parts/floating', 'contact' ); ?>
