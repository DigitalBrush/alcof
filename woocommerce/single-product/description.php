<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Caractéristiques techniques', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

<div class="collapsed-content">
    <?php
        global $more;
        $temp = $more;
        $more = false;
        $short_description = get_the_content( '' );
        echo $short_description;
        $more = $temp;
    ?>
	<div>
		<a class="btn btn-secondary" id="readMore">En lire plus</a>
	</div>
</div>
<div class="full-content">
    <?php
        $full_description = the_content();
    ?>
	<a class="btn btn-secondary" id="readLess">Lire moins</a>
</div>


