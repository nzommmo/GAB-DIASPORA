<?php $color = rpress_get_option( 'checkout_color', 'red' ); ?>

<?php if ( defined( 'RP_VERSION' ) && version_compare( RP_VERSION, '2.6.2', '>=' ) ) : ?>

<div class="modal micromodal-slide rpress-food-options" id="rpressModal" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>

<?php else : ?>

	<div class="modal fade " id="rpressModal" tabindex="-1" role="dialog" aria-labelledby="rpressModal" aria-hidden="true">
		<div class="modal-dialog" role="document">

<?php endif; ?>

		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<span class="rpress-prices cart-item-price" data-current=""></span>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-micromodal-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="fooditem-description"></div>
			</div>
			<footer class="modal-footer">
				<div class="rpress-popup-actions edit-rpress-popup-actions rp-col-md-12">
				<div class="btn-count">
					<button type="button" class="qtyminus"><span>-</span></button>
					<input type="text" name="quantity" value="1" class="qty rpress-cart-item-qty" readonly="readonly">
					<button type="button" class="qtyplus"><span>+</span></button>
				</div>
				<a data-item-qty="1" data-cart-key="" data-item-id="" data-item-price="" data-cart-action="" class="center submit-fooditem-button text-center inline <?php echo esc_attr( $color ); ?>"><?php _e( 'Add to Cart', 'pearl' ); ?></a>
				</div>
			</footer>
		</div>

	</div>
</div>
