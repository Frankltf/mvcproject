<?php
    define('ROOTPATH',str_replace('\\','/',dirname(__FILE__))) ;
    require_once ROOTPATH.'/core/toos.php';
    require_once ROOTPATH.'/core/core.php';
    require_once ROOTPATH.'/core/mvcproject.php';
    $APP=new App();
    $APP->init();

?>