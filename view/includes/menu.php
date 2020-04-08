<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly ?>
<?php
$proText = $purchase->getProText();
$isPro = $purchase->isPro();
?>
<i><h2><?php esc_html_e('Woo Discount Rules', 'woo-discount-rules'); ?> <?php echo $proText; ?> <span class="woo-discount-version">v<?php echo WOO_DISCOUNT_VERSION; ?></span></h2></i><hr>
<h3 class="nav-tab-wrapper">
    <a class="nav-tab <?php if ($active == 'pricing-rules') { echo 'nav-tab-active'; } ?>" href="?page=woo_discount_rules&amp;tab=pricing-rules">
        <?php esc_html_e('Price Discount Rules', 'woo-discount-rules'); ?> </a>
    <!-- <a class="nav-tab <?php if ($active == 'cart-rules') { echo 'nav-tab-active'; } ?>" href="?page=woo_discount_rules&amp;tab=cart-rules">
        <?php esc_html_e('Cart Discount Rules', 'woo-discount-rules'); ?> </a> -->
    <a class="nav-tab <?php if ($active == 'settings') { echo 'nav-tab-active'; } ?>" href="?page=woo_discount_rules&amp;tab=settings">
        <?php esc_html_e('Settings', 'woo-discount-rules'); ?> </a>
    <?php if($isPro){
        ?>
        <a class="nav-tab <?php if ($active == 'taxonomy') { echo 'nav-tab-active'; } ?>" href="?page=woo_discount_rules&amp;tab=taxonomy">
            <?php esc_html_e('Taxonomy Settings', 'woo-discount-rules'); ?> </a>
        <a class="nav-tab <?php if ($active == 'documentation') { echo 'nav-tab-active'; } ?> btn-success" href="?page=woo_discount_rules&amp;tab=documentation">
            &nbsp;<?php esc_html_e('Read documentation', 'woo-discount-rules'); ?> </a>
        <?php
    } ?>
</h3>
