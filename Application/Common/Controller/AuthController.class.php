<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
class AuthController extends Controller {
 protected function _initialize(){
     $auth_session=session('auth');

if(!$auth_session){
    $this->error("非法访问，正在跳转登录页面",U("user/login"));
}

 }
}