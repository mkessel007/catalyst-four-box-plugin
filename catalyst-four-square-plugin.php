<?php
/**
 * Plugin Name: Catalyst Four Square Plugin
 * Plugin URI: http://www.ozzyrodriguez.com
 * Description: Installs necessary scripts and widgets for skin to work
 * Version: 1.0.0
 * Author: Ozzy Rodriguez
 * Author URI: http://www.ozzyrodriguez.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

define ( 'CFSP_DIR', dirname( __FILE__ ) );

// Register widget
include_once( CFSP_DIR . '/lib/cnfw-widget.php' );

// Load scripts
include_once( CFSP_DIR . '/lib/cfsp-scripts.php' );