<?php
	namespace Admin\Model;
	use Think\Model;
	class RedmanModel extends Model
	{	
		protected $_validate=array(
				array('redman_name','require','商品名称不能为空！'),
				array('redman_name','','商品已存在','3','unique',4)
			);
	}
?>