<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Think;
use Think\Verify;
class ManagerController extends Controller {
    public function index()
    {
        $manager = M("manager")->select();
        $this->assign('manager', $manager);
        $this->display();
    }

    public function login()
    {
        $this->assign("title","欢迎登录");
        $this->display();
    }
    public function ajax_login(){
        $verify=new \Think\Verify();
        $manager_m=D('Manager');
        $manager_info=$manager_m->where('manager_name="'.I('manager_name').'"and manager_password="'.I('manager_password').'"')->find()    ;
//        print_r($manager_info);
        if($manager_info['manager_id']<=0){
            $this->ajaxReturn(array("stauts"=>-1,"message"=>"用户名或者密码错误！"));
        }else{
            if (!$verify->check(I('verify'))){
                $this->ajaxReturn(array("stauts"=>-2,"message"=>"验证码错误！"));
            }else{
                session('uname',$manager_info['manager_name']);
                $login['uid']=$manager_info['manager_id'];
                $login['manager']='admim';
                session('auth',$login);
                $this->ajaxReturn(array("stauts"=>1,"message"=>"登录成功！"));
            }
        }
    }
    public function register()
    {
//        print_r($_SESSION[d2d977c58444271d9c780187e93f80e5]['verify_code']);      加密看不到验证码
        if(IS_POST){
            $manager_moder=D('manager');
            $verigy=new \Think\Verify();
            if($verigy->check(I('verify'))){
                if($manager_moder->create()){
                    if ($manager_moder->add()){
                        $this->success("恭喜你，注册成功！",U('manager/login'));
                    }

                }else{
                    $this->error($manager_moder->getError());
                }
            }else{
                $this->error("验证码不正确");
            }

        }else{


        }
        $this->display();
    }

    public function verify()
    {

        $verigy=new \Think\Verify();
        $verigy->useCurve=false;
        $verigy->useNoise=false;
        $verigy->entry();
    }


    public function add()
    {
        if ($_POST) {
            $add_data["manager_name"] = I('manager_name');
            $add_data["manager_password"] = I('manager_password');
            $catemode = D("manager");
            if ($catemode->create()) {
                $catemode->add($add_data);
                $this->success("信息添加成功", U("manager/index"));
            } else {
                $this->error($catemode->getError());
            }

        } else {
            $this->display();
        }

    }
    public function delete()
    {
        $cate_moder=D("manager");
        if (  $cate_moder->delete(I('id'))){
            $this->success('删除成功！');
        }
        else{
            $this->error('删除失败！');
        }
    }
    public function editor(){
        if ($_POST) {
            $add_data["manager_id"] = I('manager_id');
            $add_data["manager_name"] = I('manager_name');
            $add_data["manager_password"] = I('manager_password');
            $catemode = D("manager");
            if ($catemode->create()) {
                $catemode->save($add_data);
                $this->success("信息修改成功", U("manager/index"));
            } else {
                $this->error($catemode->getError());
            }

        } else {
            $good_info = M("manager")->where("manager_id=".I('id'))->find();
            $this->assign('good_info', $good_info);
            $this->display();
        }
    }
}