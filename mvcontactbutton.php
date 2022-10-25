<?php

/**

 * Contact-Button Wordpress Plugin Main file by Mindfav.

 *

 * @package mvcontactbutton

 * @author Steve Krämer, Mindfav Software

 * @version 1.00

 *

 *

 * Plugin Name: MvContactButton

 * Plugin URI: https://mindfav.com/

 * Description: Erweitert einen Kontakt-Button im Frontend so, dass ein Formular aufslided.

 * Version: 1.00

 * Requires at least: 5.3

 * Requires PHP: 5.6.20

 * Author: Steve Krämer

 * Author URI: https://mindfav.com/

 * Author email: info@mindfav.com

 * License: MIT

 * Copyright 2012-2020 Steve Krämer

 */
//Classes:
//mvcontactbutton	-> Der Button, der das Formular anzeigen soll
//mvcontactbuttonform	-> Der Container rund um das Formular

// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );

function my_custom_script_load(){
    wp_enqueue_script( 'my-custom-script', plugin_dir_url(__FILE__) . '/js/mvcontactbutton.js', array( 'jquery' ) );
}







