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

 * License: GPL 2

 * Donate URI: https://mindfav.com/donate/

 *

 *

 * Copyright 2012-2020 Steve Krämer

 *

 * mvcontactbutton is free software: you can redistribute it and/or modify

 * it under the terms of the GNU General Public License, version 2, as published by

 * the Free Software Foundation.

 *

 * mvcontactbutton is distributed in the hope that it will be useful,

 * but WITHOUT ANY WARRANTY; without even the implied warranty of

 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the

 * GNU General Public License for more details.

 *

 * You should have received a copy of the GNU General Public License

 * along with WordPress. If not, see https://www.gnu.org/licenses/gpl-2.0.html.

 */
 
 
//Klassen:
//mvcontactbutton				-> Der Button, der das Formular anzeigen soll
//mvcontactbuttonform		-> Der Container rund um das Formular



// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );

function my_custom_script_load(){
  	wp_enqueue_script( 'my-custom-script', plugin_dir_url(__FILE__) . '/js/mvcontactbutton.js', array( 'jquery' ) );
}







