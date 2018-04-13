<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/12
 * Time: 16:44
 */
require_once ROOTPATH.'/core/mysql.php';

class Model implements Mysql {
    private $dbms='mysql';
    private $dbhost='localhost';
    private $dbname='mvcproject';
    private $dbuser='root';
    private $dbpass='root';
    private $dbo;
    private static $_instance;
    private function __construct() {
        $dbdsn=$this->dbms.":host=".$this->dbhost.';dbname='.$this->dbname;
        $dbh=new PDO($dbdsn,$this->dbuser,$this->dbpass);
        $this->dbo=$dbh;
    }
    private function __clone(){}
    public static function getInstance(){
        if(!self::$_instance){
            self::$_instance=new self;
        }
        return self::$_instance;
    }
    public function query($sql){
        return $this->dbo->query($sql);
    }
    
}