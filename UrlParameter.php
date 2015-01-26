<?php

/* Plugin Name: UrlParameter
Description: A plugin to allow parameters to be passed in the URL and recognized by WordPress
Author: Maayan Tayas
Version: 1.0
*/

function add_my_var($public_query_vars) {
    $public_query_vars[] = 'myvar';
    return $public_query_vars;
}

add_filter('query_vars', 'add_my_var');

?>