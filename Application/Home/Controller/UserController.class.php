<?php
namespace Home\Controller;
use Think\Controller;
use Think\Think;
use Think\Verify;
class UserController extends Controller {
    public function login(){
      $this->display();
    }
    public function ajax_login(){
     $usermode=M('user');
     $user_info=$usermode->where('user_name="'.I('user_name').'" and user_password="'.I('user_password').'"')->find();
     $verify=new \Think\Verify();
     if ($user_info['user_id']<=0){
         $this->error('用户名或密码错误');


     }else{
         if (!$verify->check(I('auth_code'))){
             $this->error('验证码错误',U('user/login'));
         }
         else{
             $this->success('登录成功',U('category/index'));
             $login['uname']=$user_info['user_name'];
             $login['upwd']=$user_info['user_password'];
             session("auth",$login);
         }
     }

    }
    public function register(){
        if ($_POST){

            $user_list['user_name']=I('user_name');
            $user_list['user_password']=I('user_password');
            $usermodel=D('User');
            if ($usermodel->create()){
                $usermodel->add($user_list);
                $this->success("恭喜你，注册成功！",U('user/login'));

            }
            else {

                $this->error($usermodel->getError());
            }
        }
        else{
            $this->display();
        }
    }

    public function verify()
    {
        $verify=new \Think\Verify();
        $verify->useCurve=false;
        $verify->entry();
    }
}