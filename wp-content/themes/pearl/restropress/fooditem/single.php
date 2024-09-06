<?php
/**
 * A single fooditem inside of the [fooditems] shortcode.
 *
 * @since 1.0.0
 *
 * @package RPRESS
 * @category Template
 * @author RestroPress
 * @version 1.0.4
 */

global $rpress_fooditem_shortcode_item_atts, $rpress_fooditem_shortcode_item_i, $rpress_food_item_cats;

$schema = rpress_add_schema_microdata() ? 'itemscope itemtype="https://schema.org/Product" ' : '';

$post_terms = wp_get_post_terms(get_the_ID(), 'food-category');

$get_food_id = $post_terms[0]->term_taxonomy_id;
?>

<div <?php echo esc_attr($schema); ?>class="<?php echo esc_attr( apply_filters( 'rpress_fooditem_class', 'rpress_fooditem', get_the_ID(), $rpress_fooditem_shortcode_item_atts, $rpress_fooditem_shortcode_item_i ) ); ?>" data-term-id="<?php echo esc_attr($get_food_id); ?>" id="rpress_fooditem_<?php the_ID(); ?>">
	<div class="row <?php echo esc_attr( apply_filters( 'rpress_fooditem_inner_class', 'rpress_fooditem_inner', get_the_ID(), $rpress_fooditem_shortcode_item_atts, $rpress_fooditem_shortcode_item_i ) ); ?>">

		<?php
		rpress_get_template_part( 'fooditem/content-image' );
		do_action( 'rpress_fooditem_after_thumbnail' );
		?>

		<div class="rpress-title-holder">
		  <?php $item_prop = rpress_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
		  <h3<?php echo esc_attr($item_prop); ?> class="rpress_fooditem_title">
		    <a class="food-title" itemprop="url"><?php the_title();?></a>
		    <span class="price">
		      <?php
		      global $post;
		      $price = get_post_meta($post->ID,'rpress_price',true);
		      echo rpress_currency_filter( rpress_format_amount( $price ) );
		      ?>
		    </span>
		  </h3>
		  <?php $excerpt_length =  apply_filters( 'rpress_excerpt_length', 28 ); ?>
		  <?php $item_prop = rpress_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
		  <div<?php echo esc_attr($item_prop); ?> class="rpress_fooditem_excerpt">
		    <?php if ( has_excerpt() ) : ?>
		      <?php echo apply_filters( 'rpress_fooditems_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
		    <?php elseif ( get_the_content() ) : ?>
		      <?php echo apply_filters( 'rpress_fooditems_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
		    <?php endif; ?>
		  </div>
		</div>
		<div class="rpress_fooditem_buy_button">
		  <?php echo rpress_get_purchase_link( array( 'fooditem_id' => get_the_ID() ) ); ?>
		</div>

	</div>
</div>
