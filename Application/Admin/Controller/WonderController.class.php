<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 精彩回顾 controller
 */
class WonderController extends AdminController {

    /**
	 * 链接列表
	 */
	public function wonderMain(){
	
		$wonder = M('Wonder'); // 实例化User对象
		
		$count = $wonder->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $wonder->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->select ();
		$this->assign ( 'wonderList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 名家-团队 编辑页面
	 */
	 public function  wonderUI($id=0){
	 
		$this->assign('nowdate',date("Y-m-d"));
		
	 	$wonder = M('Wonder');
		$res=$wonder->find($id);
		
		$this->assign('wonder',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert(){
	 	$wonder = M('Wonder');
		$wonder->create();
		$res=$wonder->add();
		
		if($res){
			$this->success('操作成功!',"wonderMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$wonder = M('Wonder');
	
		$res=$wonder->delete($ids);
		
		if($res){
			$this->success('操作成功!');
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 修改
	 */
	 public function update(){
	 	$wonder = M('Wonder');
		$wonder->create();
		$res=$wonder->save();
		
		if($res){
			$this->success('操作成功!',"wonderMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
