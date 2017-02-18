<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bhari
 */

?>
	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>

	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bhari' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bhari' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s', 'bhari' ), '<a href="http://maheshwaghmare.wordpress.com/" rel="designer">Bhari</a>' ); ?>
		</div><!-- .site-info -->

		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>

</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
