<?php

namespace myPlugin\Admin;

/**
 * Menu Handeler Calss
 */
class Menu {

    public function __construct(){

        add_action("admin_menu", [ $this, 'adminMenu'] );
       
    }

    public function adminMenu(){
        add_menu_page(__('myPlugin', 'myplugin'), __('myPlugin', 'myplugin'), 'manage_options', 'my-plugin', [ $this, 'plugin_page'], 'dashicons-admin-multisite');
    }

    public function plugin_page(){
        echo "Hello World";
    }
}