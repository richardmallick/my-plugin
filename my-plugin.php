<?php

/**
 * Plugin Name:       My Plugin
 * Plugin URI:        https://myplugin.com
 * Description:       This is a Demo Plugin
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            WpToffee
 * Author URI:        https://myplugin.com
 * Text Domain:       myplugin
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( ! defined('ABSPATH') ){
    exit;
}

/**
 * The main Plugin Class
 */
final class myPlugin {

    /**
     * Plugin Version
     */
    const version = '1.0';

    /**
     * Class Constractor
     */
    private function __construct(){

        $this->defineConstance();

        register_activation_hook( __FILE__, [ $this, 'Activate' ] );

        add_action( "plugins_loaded", [ $this, 'init_plugin' ] );

    }

   /**
    * Initilize a singleton instance
    *
    * @return /myPlugin
    */
    public static function init(  ){

        static $instance = false;

        if( ! $instance ){
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Plugin Constance
     *
     * @return /myPlugin
     */
    public function defineConstance(){
        define('MYPLUGIN_VERSION', self::version);
        define('MYPLUGIN_FILE', __FILE__);
        define('MYPLUGIN_PATH', __DIR__);
        define('MYPLUGIN_URL', plugins_url('', MYPLUGIN_FILE));
        define('MYPLUGIN_ASSETS', MYPLUGIN_URL."/assets");
        define('MYPLUGIN_ADMIN_ASSETS', MYPLUGIN_URL."/includes/Admin/assets");
        define('MYPLUGIN_PUBLIC_ASSETS', MYPLUGIN_URL."/includes/Public/assets");
    }

    /**
     * After Activate Plugin
     *
     * @return /myPlugin
     */
    public function Activate(){

        $installed = get_option('my_plugin_installed');
        if(! $installed ){
            update_option('my_plugin_installed', time() );
        }

        update_option('my_plugin_version', MYPLUGIN_VERSION );
    }

    public function init_plugin(){

    }
    
}

/**
 * Initilize the main plugin
 *
 * @return /myPlugin
 */
function my_plugin(){
    return myPlugin::init();
}



/**
 * kick-off the plugin
 */
my_plugin();


