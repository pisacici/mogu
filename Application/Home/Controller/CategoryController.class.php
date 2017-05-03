<?php
namespace Home\Controller;
use Common\Controller\AuthController;
use Think\Controller;
class CategoryController extends AuthController {
    public function index(){
        $this->display();
    }
}