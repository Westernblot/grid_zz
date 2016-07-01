<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 预约 OrderController
 */
class OrderController extends AdminController {

    /**
	 * 开户预约
	 */
	public function orderMain(){
		
		$phone=I('get.phone','');
		$sdate=I('get.sdate','1970-01-01');
		$edate=I('get.edate',date('Y-m-d'));
		
		$this->assign('phone',$phone);
		$this -> assign('sdate', $sdate);
		$this -> assign('edate', $edate);
		
		$condition['phone'] = array('like',"%".$phone."%");
		if($sdate!=null && $sdate !='' && $edate!=null && $edate !=''){
		     $condition['intime'] = array(array('egt',$sdate),array('elt',$edate));
		}
		
		$order = M('Order'); // 实例化User对象
		$count = $order->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		foreach($condition as $key => $val) {
			if(!is_array($val)) {
			    $Page->parameter   .=   "$key=".urlencode($val).'&';
			}
		}
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $order->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'orderList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
		 /**
	 *
	 * 导出Excel
	 */
	function orderExport() {//导出Excel
		$xlsName = "student";
		$xlsCell = array( array('name', '姓名'), array('idcard', '身份证号'), array('phone', '手机号码'));

		$xlsModel = M('Order');
		
		//================================传递查询条件=========================================
		
		$phone=I('get.phone','');
		$sdate=I('get.sdate','1970-01-01');
		$edate=I('get.edate',date('Y-m-d'));
		
		$this -> assign('student_name', $student_name);
		$this -> assign('sdate', $sdate);
		$this -> assign('edate', $edate);
		
		
        $condition['phone'] = array('like',"%".$phone."%");
		if($sdate!=null && $sdate !='' && $edate!=null && $edate !=''){
		     $condition['intime'] = array(array('egt',$sdate),array('elt',$edate));
		}
		//================================传递查询条件end=========================================



		$xlsData = $xlsModel -> Field('name,
		                                idcard,		                          
		                                phone') ->where($condition)-> select();
		//echo $xlsData;

		exportExcel($xlsName, $xlsCell, $xlsData);

	}
	
	
	
	/**
	 * 名家-团队 编辑页面
	 */
	 public function  orderUI($id=0){
	 
		//$this->assign('nowtime',date("Y-m-d H:i:s"));
		
	 	$order = M('Order');
		$res=$order->find($id);
		
		$this->assign('order',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert(){
	 	$order = M('Order');
		$order->create();
		$order->intime=date('Y-m-d H:i:s');
		$res=$order->add();
		
		if($res){
			$this->success('操作成功!',"orderMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$order = M('Order');
	
		$res=$order->delete($ids);
		
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
	 	$order = M('Order');
		$order->create();
		$res=$order->save();
		
		if($res){
			$this->success('操作成功!',"orderMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
