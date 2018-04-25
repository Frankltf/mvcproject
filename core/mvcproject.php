<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/25
 * Time: 12:17
 */
require_once ROOTPATH.'/core/implemvcproject.php';
class Mvcproject implements Regis{
    protected static $tree=array();
    public static function set($key,$object){
        self::$tree[$key]=$object;
    }
    public static function get($key){
        return self::$tree[$key];
    }
    public static function remove($key){
        unset(self::$tree[$key]);
    }
}