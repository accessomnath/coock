<?php
add_action('init', 'customcart');
function customcart() {
    global $woocommerce;
    if (isset($_POST['add_to_cart_form'])) {
        $productId = $_REQUEST['productId'];
        $orderDate = $_REQUEST['orderDate'];
        $qty = $_REQUEST['qty'];
        $food_state = $_REQUEST['food_state'];
        $totalQTY = array_sum($qty);
        WC()->cart->add_to_cart($productId,$totalQTY);
        global $wpdb;
         $wpdb->insert(
            'wp_custom',
            array(
                'session_id' => $_COOKIE['UNIQUE'],
                'product_id' => $productId,
                'date' => implode(',',$orderDate),
                'quantity' => implode(',',$qty),
                'food_status' => $food_state
            ),
            array(
                '%s',
                '%d',
                '%s',
                '%s',
                '%s'
            )
        );
        header('Location: '.$woocommerce->cart->get_cart_url());
//        exit();
    }
}

 //When Order Place
function when_woocommerce_order_status_pending($order_id)
{
    global $wpdb;
    $order = new WC_Order($order_id);
    foreach ($order->get_items() as $key => $lineItem) {
        $product_id = $lineItem['product_id'];
        $product_name = $lineItem['name'];
        $caartID = $_COOKIE['UNIQUE'];
        $query = $wpdb->get_results("select * from wp_custom where session_id='$caartID' AND product_id = '$product_id'");
        $values = "Order Date : ".$query[0]->date." | QTY : ".$query[0]->quantity." | Temperature : ".$query[0]->food_status;
//        $value="Temperature : " . $query[0]->food_status;
//        update_post_meta($order_id,"Temperature",$value);
        update_post_meta($order_id, $product_name, $values);
    }
}
add_action('woocommerce_checkout_order_processed', 'when_woocommerce_order_status_pending');

/**
 * Display field value on the order edit page
 */
//add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );
//
//function my_custom_checkout_field_display_admin_order_meta($order_id){
//    echo '<p><strong>'.__('Date | Quantity').':</strong> <br/>' . get_post_meta( $order_id, 'billing_phone_new', true ) . '</p>';
//}