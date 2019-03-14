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

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
                        remove_action(storefront_footer, storefront_credit, 20);
			?>

		</div><!-- .col-full -->

    <div class="nbs-footer-wide">
      <table class="nbs-footer-table">
        <tr class="nbs-footer-tr">
          <td class="nbs-footer-left">
            <img class="nbs-footer-img" src="/wp-content/themes/storefront-child/images/nbs-silhouettes.jpg" />
          </td>
          <td class="nbs-footer-right">
            <h1>National Behavioral Systems</h1>
            2 Whitebridge Ct.<br />
            Baltimore, MD 21208.<br />
            <br />
            Email: cgcgsap@aol.com<br />
            Phone: 410-504-5488<br />
            Fax: 410-504-5528<br />
          </td>
        </tr>
      </table>
    </div>
    <div class="nbs-footer-narrow">
      <img class="nbs-footer-img" src="/wp-content/themes/storefront-child/images/nbs-silhouettes.jpg" />
      <h1>National Behavioral Systems</h1>
      2 Whitebridge Ct.<br />
      Baltimore, MD 21208.<br />
      <br />
      Email: cgcgsap@aol.com<br />
      Phone: 410-504-5488<br />
      Fax: 410-504-5528<br />
    </div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
