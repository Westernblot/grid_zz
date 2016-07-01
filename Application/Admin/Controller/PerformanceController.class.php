<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

//战绩回顾
class PerformanceController extends AdminController {

    /**
	 * 列表页面
	 */
	public function performanceMain(){
		$object = M('Performance');
		$count = $object -> where($condition) -> count();
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);
		// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show = $Page -> show();
		// 分页显示输出
		$list = $object -> limit($Page -> firstRow . ',' . $Page -> listRows) -> where($condition) -> order('id desc') -> select();
		$this -> assign('list', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出
		$this -> display();
	}
	
	
	/**
	 * 回复页面
	 */
	 public function performanceUI($id=0){
	 	$object = M('Performance');
		$res = $object ->find($id);
		$this->assign('mo',$res);
		$this->assign('nowDate',date('Y-m-d H:i:s'));
		$this->display();
	 }
	
	
	/**
	 * 新增
	 */
	 public function insert(){
	 	$object = M('Performance');
		$object->create();
		$flag = $object->add();
		if($flag){
			$this->success('操作成功',U('performanceMain'));
		}else{
			$this->error('操作失败！');
		}
	 }
	 
	/**
	 * 修改
	 */
	 public function update(){
	 	$object = M('Performance');
		$object->create();
		$flag = $object->save();
		if($flag){
			$this->success('操作成功',U('performanceMain'));
		}else{
			$this->error('操作失败！');
		}
	 }
	
	 
	 /**
	  * 删除数据
	  */
	  public function delete($ids=0){
	  	$object = M('Performance');
		$flag=$object->delete($ids); // 删除主键为1,2和5的用户数据
		if($flag>0){
			$this->success('操作成功！',U('performanceMain'));
		}else{
			$this->error('操作失败,没有删除数据!');
		}
	  }

}
