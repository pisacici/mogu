<?php
	namespace Admin\Controller;
	use Think\Controller;
	// use Common\Controller\AuthController;
	class AjaxController extends Controller
	{		
		public function ajax_edit()
		{
			$id=I('key');
			$value=I('value');
			$date_colnum=I('date_colnum');
			$model_name=('controller');
			$model=D($model_name);
			$pk=$model->getPk();
			$model->where('$pk=$id')->setField($date_colnum,$value);
			if($model->getError()){
				$this->ajaxReturn(array('stauts'=>0,'msg'=>$model->getError()));
			}
			else{
				$this->ajaxReturn(array('stauts'=>1,'msg'=>'修改成功'));
			}
		}
	}
?>