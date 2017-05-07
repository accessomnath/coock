<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;
global $woocommerce;
global $post;
$pro = $product->get_display_price();
$product_id = $post->ID;

//var_dump($product_id);

//if (isset($_POST['submit'])) {
//    $date = $_POST['orderDate'];
//    $quantity = $_POST['qty'];
//    $base_price = intval($_POST['basePrice']);
//    $x = array_sum($quantity);
//    $total = $x * $base_price;
//
////    $xyz=array_combine($date,$quantity);
//
//    foreach (array_combine($date, $quantity) as $d => $q) {
////        echo $d . " Quantity-" . $q . ",";
//        add_post_meta($product_id, 'order_Date', $d);
//        add_post_meta($product_id, 'order_quantity', $q);
//    }

//    $string = WC_Cart::add_to_cart( $product_id, $x , $date );
//    $arr = array($date);
//        var_dump($xyz);
//    $arr[0] = 'Green';
//    $woocommerce->cart->add_to_cart( $product_id, $total, $arr);

//}



?>

    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" xmlns="http://www.w3.org/1999/html">

        <p class="price"><?php echo $product->get_price_html(); ?></p>

        <meta itemprop="price" content="<?php echo esc_attr($product->get_display_price()); ?>"/>
        <meta itemprop="priceCurrency" content="<?php echo esc_attr(get_woocommerce_currency()); ?>"/>
        <link itemprop="availability"
              href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>"/>

        <form id="add_to_cart_form" action="" method="post"  class="s-form wow zoomInUp">
            <label>Select Date </label>
            <div class='input-group date' id='startDate-1'>
                <input type='text' class="form-control" id="date-1" name="orderDate[]"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>

            </div>
            <p>Enter quantity </p><span><input type="number" class="form-control" name="qty[]" value="" id="quantity-1"
                                               min="1" max="50"
                                               style="width: 70px;"></span>
            <br>
            <div id="wrapper"></div>
            <input type="hidden" name="basePrice" value="<?php echo $pro ?>">
            <input type="hidden" name="productId" value="<?php echo $product_id ?>">

            <input type="button" value="Add New" class="btn" id="myBtn"><br><br>
                <select name="food_state">
                    <option value="Ready to eat">Ready to eat</option>
                    <option value="Heat and Enjoy">Heat and Enjoy</option>
                </select><br /><br />

           <input type="submit" name="add_to_cart_form" id="addToCart" value="Add to cart" class="btn btn-submit add_to_cart_button">
        </form>
    </div>
<?php


?>