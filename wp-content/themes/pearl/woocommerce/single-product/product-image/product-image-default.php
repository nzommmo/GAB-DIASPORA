<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$thumbnail_size    = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
$placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
    'woocommerce-product-gallery',
    'woocommerce-product-gallery--' . $placeholder,
    'woocommerce-product-gallery--columns-' . absint( $columns ),
    'images',
) );
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <figure class="woocommerce-product-gallery__wrapper">
        <?php
        $attributes = array(
			'title'                   => get_post_field( 'post_title', $post_thumbnail_id ),
			'data-caption'            => get_post_field( 'post_excerpt', $post_thumbnail_id ),
			'data-src'                => ! empty( $full_size_image ) ? $full_size_image[0] : '',
			'data-large_image'        => ! empty( $full_size_image ) ? $full_size_image[0] : '',
			'data-large_image_width'  => ! empty( $full_size_image ) ? $full_size_image[1] : '',
			'data-large_image_height' => ! empty( $full_size_image ) ? $full_size_image[2] : '',
        );

        if ( $full_size_image ) {
            $html  = '<div data-thumb="' . get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '">';
            $html .= get_the_post_thumbnail( $post->ID, 'shop_single', $attributes );
            $html .= '</a></div>';
        } else {
            $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_attr__( 'Awaiting product image', 'pearl' ) );
            $html .= '</div>';
        }

        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, get_post_thumbnail_id( $post->ID ) );

        do_action( 'woocommerce_product_thumbnails' );
        ?>
    </figure>
</div>