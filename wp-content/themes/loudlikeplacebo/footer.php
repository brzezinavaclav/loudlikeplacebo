<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info" style="text-align:center">
				<?php do_action( 'twentythirteen_credits' ); ?>
<?php printf( __( '&copy 2014 - 2016', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

<script src="<? echo get_template_directory_uri() ?>/lightbox/js/jquery-1.11.0.min.js"></script>
<script src="<? echo get_template_directory_uri() ?>/lightbox/js/lightbox.min.js"></script>

</body>
</html>