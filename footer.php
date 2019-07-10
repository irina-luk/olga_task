<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package task
 */
echo get_field( "copyright_title" );
?>

<section id="footer">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6">
				<div class="copyright">
					<p>
						<?php echo esc_html($_SESSION['copyright_title']) ?>
						<span>
							<a href="<?php echo esc_url($_SESSION['copyright_link']) ?>">
								<?php echo esc_html($_SESSION['copyright_author']) ?>
							</a>
						</span>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="designer">
					<p>
						<?php echo esc_html($_SESSION['designer_title']) ?>
						<a href="<?php echo esc_url($_SESSION['designer_link']) ?>">
							<?php echo esc_html($_SESSION['designer_author']) ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Scroll to top-->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<!--End of Scroll to top-->

<?php wp_footer(); ?>

</body>
</html>
