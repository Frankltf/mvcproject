<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/12
 * Time: 17:38
 */
require_once ROOTPATH.'/core/model.php';

class User{
    public function __construct() {

    }
    public function getall(){
        $query='select * from user';
        $db=Model::getInstance();
        $res=$db->query($query);
        return $res;
    }
}