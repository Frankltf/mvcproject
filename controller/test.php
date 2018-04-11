<?php
require_once ROOTPATH.'/core/basecontroller.php';
class Test extends Basecontroller
{
    public function testfn(){
        echo 'eeee24';
        $arr=[1,2,3,4,5];
        $this->render('testfn',['data'=>$arr]);
    }
    public function base(){
        $this->render('info');
    }
}