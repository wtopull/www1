<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$fanwe_user =M('Fanwe_user');
		// $where = array(
  		//'nick_name' => 'aaa',
		// );
		// $rs = $fanwe_user->where($where)->select();
		// $this->assign('datalist',$rs);


        $map = array();
        $map['nick_name']=$_POST['nick_name'];
        $map['user_pwd']=md5($_POST['user_pwd']);
        $res=$fanwe_user->where($map)->select();
        if($res==null){
            // $this->error("用户名密码错误");
            echo "<script type='text/javascript'>alert('用户名密码错误');</script>";
        }else{
            session("nick_name",$_POST['nick_name']);
            // $this->success("登录成功");


             // redirect('Index/login', 5, '正在登陆中...');
            echo "<script type='text/javascript'>alert('登录成功');</script>";
        }

		// show_bug($rs);

    	$this -> display();
    }
    public function login(){




    	$this -> display();
    }
}