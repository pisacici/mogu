<?php
	function pic($pic_path)
	{
		if($_FILES[$pic_path]['error']!=4){
            // 上传商品图片开始
            $upload = new \Think\Upload();
            $upload -> maxSize = 10240000; //1000m
            $upload -> exts = array('jpg','jpeg','png');//图片的类型
            $upload -> autoSub = FALSE;
            $upload -> rootPath = './Public/upload/';//图片的保存路径
            $info = $upload -> upload();
            if(!$info) {
               echo $upload->getError();exit();
            } 
            else {
               return $info;
            }
            // 上传商品图片结束
        }
        else{
           return '';
        }
	}
?>