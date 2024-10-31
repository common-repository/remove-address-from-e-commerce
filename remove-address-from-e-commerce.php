<?php
/**
 * Plugin Name: Remove Address from E-commerce
 * Plugin URI: http://www.alcmidia.com.br/
 * Description: Removes address fields from the woocommerce order screen.
 * Version: 1.0
 * Author: pileggi
 * Author URI: http://www.alcmidia.com.br
 * Tested up to: 6.0.3
 * Stable tag: 1.0 
 */

function wpb_custom_billing_fields( $fields = array() ) {
 unset($fields['billing_company']);
 unset($fields['billing_address_1']);
 unset($fields['billing_address_2']);
 unset($fields['billing_state']);
 unset($fields['billing_city']);
 unset($fields['billing_phone']);
 unset($fields['billing_postcode']);
 unset($fields['billing_country']);
 return $fields;
}
add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');

?>