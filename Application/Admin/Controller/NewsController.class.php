<?php
namespace Admin\Controller;
use Think\Controller;

use Think\Model;

class NewsController extends AdminController {

    /**
	 * 新闻列表页面
	 */
	public function newsMain($type=''){
		$this->assign('type',$type);//查询条件回显
		
		$news = M ( 'News' ); // 实例化User对象
		
        $condition['type'] = array('EQ',$type);
		
		$count = $news->where($condition)->count();// 查询满足要求的总记录数
		
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		foreach($condition as $key => $val) {
			if(!is_array($val)) {
			    $Page->parameter   .=   "$key=".urlencode($val).'&';
			}
		}
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $news->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'newsList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 新闻编辑页面
	 */
	 public function  newsUI($id=0,$type=''){
	 	
		//===============专家列表====================
		$experts = M('Experts');
		$expertsList=$experts->select();
		$this->assign('expertsList',$expertsList);
		//===============专家列表 end=================
		
	 	$this->assign('type',$type);
		$this->assign('nowtime',date("Y-m-d H:i:s"));
		//$this->assign('nowtime',date("Y-m-d"));
		
	 	$news = M('News');
		$res=$news->find($id);
		
		$attachmentArr=explode(",",$res['attachment']);
		$attachmenturlArr=explode(",",$res['attachmenturl']);		
		$this->assign('attachmentArr',$attachmentArr);
		$this->assign('attachmenturlArr',$attachmenturlArr);
		
		$this->assign('news',$res);
		$this->display();
	 }
	
	
	//========================================分隔线===============================================
	
	
	/**
	 * 增
	 */
	 public function insert($type=''){
	 	$news = M('News');
		$news->create();
		
		if(I('attachmenturl')){		
		$attachment=implode(',',$_POST['attachment']);
		$attachmenturl=implode(',',$_POST['attachmenturl']);
		$news->attachment=$attachment;
		$news->attachmenturl=$attachmenturl;
		}
		
		$res=$news->add();
		
		if($res){
			$this->success('操作成功!',"newsMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	/**
	 * 删除
	 */
	 public function delete($ids=''){
	 	$news = M('News');
	
		$res=$news->delete($ids);
		
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
	 	$news = M('News');
		$news->create();
		
		if(I('attachmenturl')){		
		$attachment=implode(',',$_POST['attachment']);
		$attachmenturl=implode(',',$_POST['attachmenturl']);
		$news->attachment=$attachment;
		$news->attachmenturl=$attachmenturl;
		}
		
		$res=$news->save();
		
		if($res){
			$this->success('操作成功!',"newsMain?type={$type}");
		}else{
			$this->error('操作失败！');
		}
		
	 }
	
	
	
}
