<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 视频链接 controller
 */
class VideoController extends AdminController {

    /**
	 * 链接列表
	 */
	public function videoMain($type=''){
	    $this->assign('type',$type);
		
		$video = M('Video'); // 实例化User对象
		
		$condition['type'] = array('EQ',$type);
		$count = $video->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $video->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'videoList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 名家-团队 编辑页面
	 */
	 public function  videoUI($id=0,$type=''){
	    $this->assign('type',$type);
		$this->assign('nowdate',date("Y-m-d"));
		
		//===============专家列表====================
		$experts = M('Experts');
		$expertsList=$experts->where("type='专家'")->select();
		$this->assign('expertsList',$expertsList);
		//===============专家列表 end=================
		
	 	$video = M('Video');
		$res=$video->find($id);
		
		$this->assign('video',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert($type=''){
	 	$video = M('Video');
		$video->create();
		$res=$video->add();
		
		if($res){
			$this->success('操作成功!',"videoMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$video = M('Video');
	
		$res=$video->delete($ids);
		
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
	 	$video = M('Video');
		$video->create();
		$res=$video->save();
		
		if($res){
			$this->success('操作成功!',"videoMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
