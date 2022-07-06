<?php
/*
 * Plugin Name:       Rest API support for Jobsearch plugin
 * Plugin URI:        https://github.com/functioneelwit/rest-api-for-wp-jobsearch-plugin
 * Description:       Add WP REST API support for jobs in Jobsearch plugin.
 * Version:           1.0.0
 * Author:            Mattijs Wit
 * Author URI:        https://functioneelwit.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rest-api-for-wp-jobsearch-plugin
 */
 
 /**
 * This filter adds REST API support to an already registered
 * job custom post type.
 */

 add_filter( 'register_post_type_args', 'job_post_type_args', 10, 2 );

function job_post_type_args( $args, $post_type ) {
    if (in_array($post_type, ['job','employer']) ) {
        $args['show_in_rest'] = true;
    }
    return $args;
}

/**
 * This adds all job meta data for use in WP REST API
 */

register_rest_field( 'job', 'meta', ['get_callback' => function ( $data ) {
    return get_post_meta( $data['id'], '', '' );
}]);

