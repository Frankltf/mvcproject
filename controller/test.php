<?php
require_once ROOTPATH.'/core/basecontroller.php';
require_once ROOTPATH.'/models/user.php';
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
    public function connectmodel($var){
        $model_uer=new User();
        $res=$model_uer->getall();
        print_var($res);
    }
    public function setsess(){
        Mvcproject::get('mvcsession')->setsession(['two'=>array(1,2,3)],3600);
    }
    public function getsess(){
        $res=Mvcproject::get('mvcsession')->getsession('two');
        print_var($res);
    }
    public function remocesess(){
        Mvcproject::get('mvcsession')->removesession('two');
    }

}