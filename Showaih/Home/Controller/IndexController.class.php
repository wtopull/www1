<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$fanwe_user =M('Fanwe_user');
        $DB_CONFIG1 = M("fanwe","","mysql://asd:asdasd@localhost:3306/my_item");
        $id1 = $fanwe_user->max(id);
        $id2 = $fanwe_user->max(id)-4;
        $data = $DB_CONFIG1-> max(ac_id);
        dump($data);
        //$id=100392
        if($id2 < $id1){
            $sum =$id1 - $id2;
            $z = $fanwe_user->where("id > $id2")->limit($sum)->select();//$z=新注册的信息
            echo "有新注册".$sum."条";
            $b = $DB_CONFIG1 -> addAll($z);
            // dump($z);
        }else{
            echo "没有新注册";
        }
        
        // dump($id1);

    	$this -> display();
    }
    public function login(){




    	$this -> display();
    }
}