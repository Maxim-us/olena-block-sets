<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

final class MXOBSOlenaBlockSetsWPPGenerator
{

    /*
    * Include required core files
    */
    public function includeCore()
    {        

        // helpers
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/helpers.php';

        // cathing errors
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/Catching-Errors.php';

        // Route
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/Route.php';

        // Models
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/Model.php';

        // Views
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/View.php';

        // Controllers
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/core/Controller.php';

    }

    /*
    * Include Admin Path
    */
    public function includeAdminPath()
    {

        // Part of the Administrator
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/admin/admin-main.php';
    
    }

    /*
    * Include Frontend Path
    */
    public function includeFrontendPath()
    {

        // Part of the Frontend
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/frontend/frontend-main.php';
    
    }

    /*
    * Include Gutenberg Path
    */
    public function includeGutenbergPath()
    {

        // Part of the Frontend
        require_once MXOBS_PLUGIN_ABS_PATH . 'includes/gutenberg/gutenberg-main.php';
    
    }


}

// create an instance of final class
$wppGenerator = new MXOBSOlenaBlockSetsWPPGenerator();

// run core files
$wppGenerator->includeCore();

// include admin parth
$wppGenerator->includeAdminPath();

// include frontend parth
$wppGenerator->includeFrontendPath();

// include gutenberg parth
$wppGenerator->includeGutenbergPath();