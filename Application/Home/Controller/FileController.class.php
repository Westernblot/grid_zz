<?php
namespace Home\Controller;
use Think\Controller;

use Think\Model;

/**
 * 文件操作，包括上传 和 下载
 */
class FileController extends Controller {

	public function index() {
		$this -> display();
	}

	//==================================kindEditor编辑器上传图片======================================================

	public function mangeUpload() {
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
		// 设置附件上传类型
		$upload -> savePath = './editors/';
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息

			//?????此处有待优化??????????
			foreach ($info as $file) {
				$path = $file['savepath'] . $file['savename'];
				$name = $file['savename'];

			}
			//$path= $info['savepath'].$info['savename'];
			$url = str_replace('./', '/', $path);

			$data['error'] = 0;
			$data['url'] = __ROOT__ . '/Uploads' . $url;
			$this -> ajaxReturn($data);

		}
	}

	public function appMangeUpload() {
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
		// 设置附件上传类型
		$upload -> savePath = './editors/';
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息

			//?????此处有待优化??????????
			foreach ($info as $file) {
				$path = $file['savepath'] . $file['savename'];
				$name = $file['savename'];

			}
			//$path= $info['savepath'].$info['savename'];
			$url = str_replace('./', '/', $path);

			$data['error'] = 0;
			$data['url'] = 'http://cxcxt.com/Uploads' . $url;
			$this -> ajaxReturn($data);

		}
	}

	//===================================普通文件上传===========================================

	public function upload() {
		// header('Content-Type:text/html; charset=utf-8');
		$fileId = $_REQUEST['fileId'];
		// $fileId='file1';
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 0;
		// 设置附件上传大小
		//$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		// $upload->savePath  =     './img/';
		$upload -> savePath = '';
		$info = $upload -> uploadOne($_FILES[$fileId]);
		if (!$info) {// 上传错误提示错误信息
			$msg = $this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息

			$path = $info['savepath'] . $info['savename'];
			$url = str_replace('./', '/', $path);

			$data['name'] = $info['name'];
			$data['url'] = __ROOT__ . '/Uploads/' . $url;

			$this -> ajaxReturn($data);

		}

	}
	
	
	//文件下载,file_path 为绝对路径
	function download($file_name='测试文档.zip',$file_path='') {
		//$file = M('file');
		//$data = $file -> find($id);
		//$filepath = $data['filepath'];
		//$file_name = $data['filename'];
		//$file_path = "./Public/Uploads/" . $filepath . $file_name;
		// echo $file_path;
		//转码，文件名转为gb2312解决中文乱码
		$file_name = iconv("utf-8", "gb2312", $file_name);
		$file_path = iconv("utf-8", "gb2312", $file_path);
		$fp = fopen($file_path, "r") or exit("文件不存在");
		//定义变量空着每次下载的大小
		$buffer = 1024;
		//得到文件的大小
		$file_size = filesize($file_path);
		//header("Content-type:text/html;charset=gb2312"); 
		//会写用到的四条http协议信息
		header("Content-type:application/octet-stream");
		header("Accept-Ranges:bytes");
		//可以忽略
		header("Content-Length: " . $file_size);
		//原文这里是Accept-Length经查阅http协议无此项
		header("Content-Disposition:attachment;filename=" . $file_name);
		//字节技术器，纪录当前现在字节数
		$count = 0;
		while (!feof($fp) && $file_size - $count > 0) {
			//从$fp打开的文件流中每次读取$buffer大小的数据
			$file_data = fread($fp, $buffer);
			$count += $buffer;
			//将读取到的数据读取出来
			echo $file_data;
		}
		//关闭文件流
		fclose($fp);
	}
	

	//SAE==================================kindEditor编辑器上传图片======================================================

	/*
	 public function mangeUpload(){
	 $upload = new \Think\Upload();// 实例化上传类
	 $upload->maxSize   =     3145728 ;// 设置附件上传大小
	 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	 $upload->savePath  =     './editors/';
	 $info   =   $upload->upload();
	 if(!$info) {// 上传错误提示错误信息
	 $this->error($upload->getError());
	 }else{// 上传成功 获取上传文件信息

	 //?????此处有待优化??????????
	 foreach($info as $file){
	 $path=$file['savepath'].$file['savename'];
	 $name=$file['savename'];

	 }
	 //$path= $info['savepath'].$info['savename'];
	 $url=str_replace('./','/',$path);

	 $data['error']=0;

	 $preRoot='http://wgzz-uploads.stor.sinaapp.com/';
	 $data['url']=$preRoot.$url;
	 $this->ajaxReturn($data);

	 }
	 }
	 */

	//SAE===================================普通文件上传===========================================

	/*
	 public function upload(){
	 // header('Content-Type:text/html; charset=utf-8');
	 $fileId=$_REQUEST['fileId'];
	 // $fileId='file1';
	 $upload = new \Think\Upload();// 实例化上传类
	 $upload->maxSize   =     3145728 ;// 设置附件上传大小
	 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	 $upload->savePath  =     './img/';
	 $info   =   $upload->uploadOne($_FILES[$fileId]);
	 if(!$info) {// 上传错误提示错误信息
	 $msg=$this->error($upload->getError());
	 }else{// 上传成功 获取上传文件信息

	 $path= $info['savepath'].$info['savename'];
	 $url=str_replace('./','/',$path);

	 $data['name']=$info['name'];

	 $preRoot='http://wgzz-uploads.stor.sinaapp.com/';
	 $data['url']=$preRoot.$url;
	 //$data['url']=__ROOT__.'/Uploads'.$url;

	 $this->ajaxReturn($data);

	 }

	 }
	 */

}
