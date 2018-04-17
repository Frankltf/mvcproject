<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/17
 * Time: 15:06
 */
class AutoLoad{
    public function register(){
        spl_autoload_register(array($this,'autoload'));
    }
    public function autoload(){
        echo 'eee';
    }
}