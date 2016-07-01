<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 财讯通实盘追踪
 */
class SpzzController extends AdminController {

    /**
	 * 链接列表
	 */
	public function spzzMain(){
		
		$spzz = M('Spzz'); // 实例化User对象
		
		$count = $spzz->where("pid=0")->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $spzz->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where("pid=0")->select ();
		$this->assign ( 'spzzList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 编辑页
	 */
	 public function  spzzUI($id=0){

		//$this->assign('nowtime',date("Y--m-d H:i:s"));
		
	 	$spzz = M('Spzz');
		$res=$spzz->find($id);
		
		$this->assign('keyword',$res);
		$this->display();
	 }
	
	/**
	 * 开始直播
	 */
	 public function spzzshow($id=0){
	 	$this->assign('id',$id);
        
		$spzz =M('Spzz');	 	
		$spzzList=$spzz->where("pid='{$id}'")->order("id desc")->select();
		$this->assign('spzzList',$spzzList);
		
		$this->display();
	 }
	
	/**
	 * 直播记录
	 */
	 public function spzzrecord($id=0){
	 	$this->assign('id',$id);
        
		$spzz =M('Spzz');	 	
		$spzzList=$spzz->where("pid='{$id}'")->order("id desc")->select();
		$this->assign('spzzList',$spzzList);
		
		$this->display();
	 }
	
	//========================================分隔线===============================================
	
	 /**
	  * 直播保存数据sned
	  */
	  public function sendData(){
	  	$spzz = M('Spzz');
		$spzz->create();
		$spzz->intime=date('Y-m-d H:i:s');
		$res=$spzz->add();
		$this->ajaxReturn($res);
	  }
	
	/**
	 * 增
	 */
	 public function insert(){
	 	$spzz = M('Spzz');
		$spzz->create();
		$res=$spzz->add();
		
		if($res){
			$this->success('操作成功!',"spzzMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$spzz = M('Spzz');
	    
		$spzz->startTrans();//开启事物
		
		$res=$spzz->delete($ids);
		$model = new Model();
		$res2=$model->execute("delete from tp_spzz where pid in ({$ids})");
		
		if($res&&$res2){
			 $spzz->commit(); 
			$this->success('操作成功!');
		}else{
			$spzz->rollback();
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 修改
	 */
	 public function update(){
	 	$spzz = M('Spzz');
		$spzz->create();
		$res=$spzz->save();
		
		if($res){
			$this->success('操作成功!',"spzzMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
