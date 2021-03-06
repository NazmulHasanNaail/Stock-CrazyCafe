<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="site-logo">
						<h2><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
					</div>
				</div>
				<div class="col-md-9">
					<div class="header-right-content">
						<a  href="mailto:contact@stock.com" class="stock-contact-box">
							<i class="fa fa-envelope"></i>
							Send us an email
							<h3>contact@stock.com</h3>
						</a>
						<div class="stock-contact-box">
							<i class="fa fa-phone"></i>
							Give us a call
							<h3>+014-547-0354</h3>
						</div>
						<a  href="mailto:contact@stock.com" class="stock-contact-box">
							<i class="fa fa-map-marker"></i>
							We are open
							<h3>Mon - Fri, 9am - 6pm</h3>
						</a>	

						
						<a href="" class="stock-cart"><i class="fa fa-shopping-cart"></i><span class="stock-cart-count">3</span></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="mainmenu">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-1',
							 'menu-id' => 'primary-menu',
							 )); ?>
					</div>
				</div>
			</div>
		</div><!---container--->
	</div><!--header-area-->

