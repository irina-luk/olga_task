<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package task
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

<body <?php body_class(); ?> data-spy="scroll" data-target="#header">

<section id="header">
	<div class="header-area">
		<div class="top_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
						<?php
						if(get_field('address')) { ?>
							<div class="address">
								<i class="fa fa-home floatleft"></i>
								<p><?php echo esc_html(get_field('address')) ?></p>
							</div>
						<?php } ?>
					</div>
					<!--End of col-md-4-->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
						<?php
						if(get_field('phone')) { ?>
							<div class="phone">
								<i class="fa fa-phone floatleft"></i>
								<p><?php echo esc_html(get_field('address')) ?></p>
							</div>
						<?php } ?>
					</div>
					<!--End of col-md-4-->
					<div class="col-md-4">
						<div class="social_icon text-right">
							<?php
							if(get_field('fb')) { ?>
								<a href="<?php echo esc_url(get_field('fb')) ?>"><i class="fa fa-facebook"></i></a>
							<?php } ?>
							<?php
							if(get_field('twitter')) { ?>
								<a href="<?php echo esc_url(get_field('twitter')) ?>"><i class="fa fa-twitter"></i></a>
							<?php } ?>
							<?php
							if(get_field('google')) { ?>
								<a href="<?php echo esc_url(get_field('google')) ?>"><i class="fa fa-google-plus"></i></a>
							<?php } ?>
							<?php
							if(get_field('youtube')) { ?>
								<a href="<?php echo esc_url(get_field('youtube')) ?>"><i class="fa fa-youtube"></i></a>
							<?php } ?>
						</div>
					</div>
					<!--End of col-md-4-->
				</div>
				<!--End of row-->
			</div>
			<!--End of container-->
		</div>
		<!--End of top header-->
		<div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
			<div class="container">
				<nav class="navbar navbar-default zero_mp ">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
							<?php the_custom_logo() ?>
					</div>
					<!--End of navbar-header-->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-top',
				'menu_id'        => 'primary-menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right main_menu',
			) );
			?>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
				<!--End of nav-->
			</div>
			<!--End of container-->
		</div>
		<!--End of header menu-->
	</div>
	<!--end of header area-->
</section>
<!--End of Hedaer Section-->
