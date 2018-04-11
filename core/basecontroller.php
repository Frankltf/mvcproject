<?php
class Basecontroller{
    protected function render($file,$data=[]){
        $res=ROOTPATH.'/view/'.$file.'/'.$file.'.php';
        if(!empty($data)){
            extract($data);
        }
     
        if(is_file($res)){
            include_once $res;
        }
    }
}