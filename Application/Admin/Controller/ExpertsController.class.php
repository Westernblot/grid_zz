<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

class ExpertsController extends AdminController {

    /**
	 * 名家-团队列表
	 */
	public function expertsMain($type=''){
		$this->assign('type',$type);
		
		$experts = M('Experts'); // 实例化User对象
		
		$condition['type'] = array('EQ',$type);
		$count = $experts->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $experts->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'expertsList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 名家-团队 编辑页面
	 */
	 public function  expertsUI($id=0,$type=''){
	 	 $this->assign('type',$type);
		//$this->assign('nowtime',date("Y--m-d H:i:s"));
		
	 	$experts = M('Experts');
		$res=$experts->find($id);
		
		$this->assign('experts',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert($type=''){
	 	$experts = M('Experts');
		$experts->create();
		$res=$experts->add();
		
		if($res){
			$this->success('操作成功!',"expertsMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$experts = M('Experts');
	
		$res=$experts->delete($ids);
		
		if($res){
			$this->success('操作成功!');
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 修改
	 */
	 public function update($type=''){
	 	$experts = M('Experts');
		$experts->create();
		$res=$experts->save();
		
		if($res){
			$this->success('操作成功!',"expertsMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
