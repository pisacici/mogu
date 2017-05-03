<?php
	namespace Home\Controller;
	use Think\Controller;
	class RedmanController extends Controller
	{
		public function redman()
		{
			$redman=M('Redman');

			$redman_parent=$redman->where('parent_id=0')->select();


			// $page_num=10;
			// $count=M('Redman')->where('parent_id=1')->count();
			// $Page=new \Think\Page($count,$page_num);

			// $redman_list1=$redman->where('parent_id=1')->limit($Page->firstRow.','.$Page->listRows)->select();

			// $redman_list2=$redman->where('parent_id=2')->select();
			$this->assign('redman_parent',$redman_parent);
			// $this->assign('redman_list1',$redman_list1);
			// $this->assign('redman_list2',$redman_list2);
			$this->display();
		}


		public function ajax_get()
		{
			$redman=M('Redman');
			// 接收ajax传过来的cat_id
			$cat_id=
			$page_num=10;
			$count=$redman->where('parent_id=1')->count();
			$Page=new \Think\Page($count,$page_num);

			$redman_list=$redman->where('parent_id=1')->limit($Page->firstRow.','.$Page->listRows)->select();
          	$this->ajaxReturn(array('stauts'=>1,'data'=>$redman_list));

		}
	}
?>