<?php
/**
 * Template Name: test
 * Created by PhpStorm.
 * User: Somnath
 * Date: 21-Dec-16
 * Time: 2:57 PM
 */

get_header();

//        var_dump($cooki);
global $wpdb;
$result = $wpdb->insert(
    'wp_custom',
    array(
        'session_id' => 'dfdsf1',
        'product_id' => 23,
        'date' => '12/14/2016 5:58 PM',
        'quantity' => 1,
        'food_status' => 'hot'
    ),
    array(
        '%s',
        '%d',
        '%s',
        '%s',
        '%s'
    )
);
if($result){
 echo "data inserted";
}
else{
 echo "data not inserted";
}

get_footer();?>
