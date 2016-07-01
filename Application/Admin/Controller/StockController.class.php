<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

/**
 * 明星股票 StockController
 */
class StockController extends AdminController {

    /**
	 * 开户预约
	 */
	public function stockMain(){
		
		$code=I('get.code','');	
		$this->assign('code',$code);
		
		$condition['code'] = array('like',"%".$code."%");
		$condition['flag'] = array('eq',"1");
		
		
		$Stock = M('Stock'); // 实例化Stock对象
		$count = $Stock->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		foreach($condition as $key => $val) {
			if(!is_array($val)) {
			    $Page->parameter   .=   "$key=".urlencode($val).'&';
			}
		}
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $Stock->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'stockList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	
	/**
	 * 查询股票的信息
	 */
	 public function search($code=''){
	 	// utf-8编码
        //header('Content-Type: text/html; charset=utf-8');
		
		$status='';
		$name='';
		$kind='';
		$kindcode='';
		
		$pre='sh';		
		$res1 = curl_get("http://hq.sinajs.cn/list=".$pre.$code);	
		       $res1= mb_convert_encoding($res1, "utf-8", "gbk");	  //解决编码乱码的问题
		$emArr=explode('"',$res1);
		$vsArr=explode(',',$emArr[1]);
		
		$name=$vsArr[0];		
		if($name!=null && $name!=''){			
			$kind=$pre;
			$kindcode=$pre.$code;
			$status='success';
		}else{			
			$pre='sz';
			$res1 = curl_get("http://hq.sinajs.cn/list=".$pre.$code);
				$res1= mb_convert_encoding($res1, "utf-8", "gbk");	  //解决编码乱码的问题
			$emArr=explode('"',$res1);
		    $vsArr=explode(',',$emArr[1]);
			$name=$vsArr[0];	 
			if($name!=null && $name!=''){
				$kind=$pre;
			    $kindcode=$pre.$code;
				$status='success';
			}else{
				$status='error';
			}
		}
		
		//$name='中国船舶';
		$data['status']=$status;	
		$data['name']=$name;
		$data['kind']=$kind;
		$data['kindcode']=$kindcode;
		
		//echo $name."-".$kind."-".$code;
		//echo "<br/>";
		$this->ajaxReturn($data);
		
	 }
	
	
	
	/**
	 * 数据修改UI
	 */
	 public function stockUI($id=0){
	 	$stock=M('Stock');		
		$res=$stock->find($id);
		$this->assign ( 'stock', $res ); // 赋值分页输出
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert(){
	 	$Stock = M('Stock');
		$Stock->create();
		$Stock->flag="1";
		$res=$Stock->add();
		
		if($res){
			$this->success('操作成功!',"StockMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$Stock = M('Stock');
	
		$res=$Stock->delete($ids);
		
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
	 	$Stock = M('Stock');
		$Stock->create();
		$res=$Stock->save();
		
		if($res){
			$this->success('操作成功!',"StockMain");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
	
	
	
	
	
}
