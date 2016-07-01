<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

class AboutController extends AdminController {

	/**
	 * 单文档编辑页面
	 */
	public function aboutDocumentUI($type = '') {

		$this -> assign('type', $type);//类别

		$document = M('Document');
		$res = $document -> where("type='$type'") -> find();
		$this -> assign('document', $res);
		$this -> display();
	}

	/**
	 * 新增数据
	 */
	public function insert($type = '') {

		$this -> assign('type', $type);//类别

		$document = M('Document');
		$document -> create();
		$res = $document -> add();
		if ($res) {
			$this -> success('操作成功!', "aboutDocumentUI?type={$type}");
		} else {
			$this -> error('操作失败!');
		}
	}

	/**
	 * 修改
	 */
	public function update($type = '') {

		$this -> assign('type', $type);//类别

		$document = M('Document');
		$document -> create();
		$res = $document -> save();
		if ($res) {
			$this -> success('操作成功!', "aboutDocumentUI?type={$type}");
		} else {
			$this -> error('操作失败!');
		}
	}

}
