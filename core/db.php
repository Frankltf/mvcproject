<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/13
 * Time: 8:36
 */
require_once ROOTPATH.'/core/model.php';
class Db{
    public $table;
    public $pdo;
    public function __construct() {
        $this->table=strtolower(get_class($this));
        $this->pdo=Model::getInstance();
    }
    public function findOne($con){
        $newarr=array_keys($con);
        $query='select * from '.$this->table.' where '.$newarr[0].' = '.$con['id'];
        return $this->pdo->query($query)->fetch();
    }
    public function findAll(){
        $query='select * from '.$this->table;
        return $this->pdo->query($query)->fetchAll();
    }
    public function query($sql){
        return $this->pdo->query($sql)->fetchAll();
    }
}   