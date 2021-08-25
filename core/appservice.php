<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 11:54
 */
class Appservice{
    public function run(){
        require_once ROOTPATH.'/core/autoload.php';
        require_once ROOTPATH.'/core/route.php';
        require_once ROOTPATH.'/core/session.php';
        DI::bind('register',function(){
            return new AutoLoad();
        });
        DI::bind('route',function(){
            return new Route();
        });
        DI::bind('mvcsession',function(){
           return new Mvcsession();
        });
        DI::bind('app',function(){
            return new App(DI::getobj('register'),DI::getobj('route'),DI::getobj('mvcsession'));
        });
        DI::getobj('app')->init();
    }
}