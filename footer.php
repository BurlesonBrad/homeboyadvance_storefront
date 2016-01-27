<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<div class="social-icons">
				<a href="http://instagram.com/homeboyadvance" class="icon-instagram" target="_blank"></a>
			  <a href="http://facebook.com/homeboyadvance" class="icon-facebook" target="_blank"></a>
				<a href="http://twitter.com/homeboyadvance" class="icon-twitter" target="_blank"></a>
			</div>
			Homeboy Advance &copy;2016 | <a href="mailto:info@homeboyadvance.com">info@homeboyadvance.com</a><br />
			If you have any questions or concerns, use our <a href="contact-us">contact form.</a>
		</div>
	</footer>
	<!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
