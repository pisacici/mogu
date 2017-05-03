<?php 
	namespace Admin\Controller;
	use Think\Controller;
	use Think\Upload;
	// use Common\Controller\AuthController;
	class Redmancontroller extends Controller
	{		
		public function index()
		{
			$page_num=15;
			$count=M('Redman')->count();
			$Page=new \Think\Page($count,$page_num);
			$show=$Page->show();
			$redman_list=M('Redman')->limit($Page->firstRow.','.$Page->listRows)->order('redman_id desc')->select();
			$this->assign('page',$show);
			$this->assign('redman_list',$redman_list);
			$this->display();
		}
		public function add()
		{
			if(IS_POST){ 
				$pic_array=pic('redman_path');
				if(!empty($pic_array['redman_path']['savename'])){
					$_POST['redman_path']='upload/'.$pic_array['redman_path']['savename'];
				}
				if(!empty($pic_array['redman_thumb']['savename'])){
					$_POST['redman_thumb']='upload/'.$pic_array['redman_thumb']['savename'];
				}
				$_POST['create_time']=time();
				$redman_model=D('Redman');
				if ($redman_model->create($_POST,4)) {
					$redman_model->add();
					$this->success("添加成功！",U('Redman/add'));
				}
				else{
					$this->error($redman_model->getError());
				}
			}
			else{
				$first_menu=M('Redman')->where('parent_id=0')->select();
				$this->assign('first_menu_list',$first_menu);
				$this->display();
			}		
		}
		public function edit()
		{
			if(IS_POST){ 
				$pic_array=pic('redman_path');
				if(!empty($pic_array['redman_path']['savename'])){
					$_POST['redman_path']='upload/'.$pic_array['redman_path']['savename'];
				}
				if(!empty($pic_array['redman_thumb']['savename'])){
					$_POST['redman_thumb']='upload/'.$pic_array['redman_thumb']['savename']; 
				}
				$redman_model=D('Redman');
				if ($redman_model->create()) {
					$redman_model->save();
					$this->success("编辑成功！",U('Redman/index'));
				}
				else{
					$this->error($redman_model->getError());
				}
			}
			else{
				$redman_info=M('Redman')->where('redman_id='.I('id'))->find();
				$first_menu=M('Redman')->where('parent_id=0')->select();
				$this->assign('redman_info',$redman_info);
				$this->assign('first_menu_list',$first_menu);
				$this->display();
			}	
		}
		public function delete()
		{
			$redman_model=D('Redman');
			if($redman_model->delete(I('id'))){
				$this->success('删除成功！');
			}
			else{
				$this->error('删除失败！');
			}
		}
	}
?>