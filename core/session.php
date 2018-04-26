<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 8:53
 */
class Mvcsession{
    public function setsession ($data,$date=''){
        session_start();
        if(is_array($data)){
            foreach ($data as $k=>$v){
                $_SESSION[$k]=$v;
            }
        }else{
            return FALSE;
        }
    }
    public function getsession($key){
        session_start();
        if(isset($_SESSION[$key])){
            $res=$_SESSION[$key];
        }else{
            $res=FALSE;
        }
        return $res;
    }
    public function removesession($key){
        session_start();
        unset($_SESSION[$key]);
    }
    
}