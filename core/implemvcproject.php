<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/25
 * Time: 16:42
 */
interface Regis{
    public static function set($key,$object);
    public static function get($key);
    public static function remove($key);
}