<?php

// Main Class
class Main_Loader{
public function __construct() {
   $this->init();
}

// Initial main function
public function init(){
    

    // Load i18n Class
    require_once cps_PATH . 'inc/i18n.php';

    // Load Admin Class
    require_once cps_PATH . 'admin/admin.php';

    // Load frontend class
    require_once cps_PATH . 'frontend/frontend.php';
}
}


new Main_Loader();
