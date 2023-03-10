<?php

/**
 * Plugin abstracting Respa integration.
 *
 * @link              https://www.evermade.fi
 * @since             1.0.0
 * @package           Logic
 *
 * @wordpress-plugin
 * Plugin Name:       Respa integration
 * Plugin URI:        https://www.evermade.fi
 * Description:       Plugin providing Respa integration to theme.
 * Version:           1.0.0
 * Author:            Juha Lehtonen, Jaakko Alajoki
 * Author URI:        https://www.evermade.fi
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       linkedevents
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Rewrites to create "virtual" store pages.
require plugin_dir_path( __FILE__ ) . 'includes/functions/rewrites.php';

// Gravity Forms integration.
// require plugin_dir_path( __FILE__ ) . 'includes/functions/gforms.php';

// Helpers
// require plugin_dir_path( __FILE__ ) . 'includes/functions/index.php';

// Rest API endpoints.
require plugin_dir_path( __FILE__ ) . 'includes/functions/api.php';

// Core class for performing API queries.
require plugin_dir_path( __FILE__ ) . 'includes/class-hyperin.php';

// Cron tasks.
require plugin_dir_path( __FILE__ ) . 'includes/functions/cron.php';

// Define an activation constant
define('RESPA_ACTIVE', true);

// For testing:
// $hin = new \Evermade\HyperIn\HyperIn();
// $offers = $hin->getOffers();
// echo '<pre>';
// print_r($offers);
// exit;
