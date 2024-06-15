<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BabyLand
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="footer__one">
			<?php
			dynamic_sidebar('sidebar-2') ?>
		</div>
		<div class="footer__two">
			<p><?php echo get_bloginfo() ?></p>
		</div>
		<div class="footer__three">
			<p>Make your child’s wardrobe brighter with us</p>
			<input type="email" placeholder="Enter email address">
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>