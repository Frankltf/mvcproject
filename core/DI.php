<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 11:46
 */
class DI{
    protected static $register=array();
    public static function bind($name,callable $resolver){
        static::$register[$name]=$resolver;
    }
    public static function getobj($name){
        $resolver=static::$register[$name];
        return $resolver();
    }
}