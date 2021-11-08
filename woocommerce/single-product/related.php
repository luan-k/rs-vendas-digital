<?php 
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) :
	?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>

		<?php
		// Replace by Content Views Pro layout
		if ( defined( 'PT_CV_VERSION_PRO' ) ) {
			$pids = array();
			foreach ( $related_products as $related_product ) {
				$pids[] = $related_product->get_id();
			}
			// Replace VIEW_ID with the ID of the view
			echo do_shortcode( '[pt_view id="VIEW_ID" post_id="' . implode( ',', $pids ) . '"]' );
		} else {
			?>
			<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
				<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS[ 'post' ] = & $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
					?>

					
						<?php wc_get_template_part('template-parts/content', 'card-products');?>
					


				<?php endforeach; ?>
			</div>
		<?php } ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();