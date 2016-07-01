<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 私募排行 controller
 */
class PrivateController extends AdminController {

    /**
	 * 链接列表
	 */
	public function privateMain($type=''){
		$this->assign('type',$type);//查询条件回显
		
		$private = M('Private'); // 实例化User对象
		
		$condition['type'] = array('EQ',$type);
		$count = $private->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $private->limit ( $Page->firstRow . ',' . $Page->listRows )->order('rank asc')->where($condition)->select ();
		$this->assign ( 'privateList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 名家-团队 编辑页面
	 */
	 public function  privateUI($id=0,$type=''){
	 	$this->assign('type',$type);
		//$this->assign('nowtime',date("Y--m-d H:i:s"));
		
	 	$private = M('Private');
		$res=$private->find($id);
		
		$this->assign('private',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert($type=''){
	 	$private = M('Private');
		$private->create();
		$res=$private->add();
		
		if($res){
			$this->success('操作成功!',"privateMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$private = M('Private');
	
		$res=$private->delete($ids);
		
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
	 	$private = M('Private');
		$private->create();
		$res=$private->save();
		
		if($res){
			$this->success('操作成功!',"privateMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
