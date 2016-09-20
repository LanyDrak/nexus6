<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexus6Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nexus6theme' ) ); ?>" target="_blank"><?php printf( esc_html__( 'powered by %s', 'nexus6theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( '%1$s by %2$s.', 'nexus6theme' ), 'Nexus-6 Theme', '<a href="http://www.lanydrak.com" target="_blank" rel="designer">LanyDrak</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/customizer.js"></script>

</body>
</html>
