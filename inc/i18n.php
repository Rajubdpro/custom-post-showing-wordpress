<?php

// Load Tranlation class
class Load_Translation_class{
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('plugins_loaded',array($this,'load_textdomain'));
    }
    public function load_textdomain(){
        load_plugin_textdomain('custom_post_showing',false,dirname(dirname(plugin_basename(__FILE__))).'/languages');
    }
}

// Create a object
new Load_Translation_class();