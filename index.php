<?php
/**
 * Plugin Name: All Products Api
 * Plugin URI: https://github.com/alirezadesh/all-products-api
 * Description: just a plugin to send all woocommerce products by api
 * Version: 1.1
 * Author: alirezadesh
 * Author URI: https://www.alirezadesh.ir
 */

function maximum_api_filter($query_params)
{
    $query_params['per_page']["maximum"] = true;
    return $query_params;
}

add_filter('rest_product_collection_params', 'maximum_api_filter');
?>