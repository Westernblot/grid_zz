<?php
namespace Client\Controller;
use Think\Controller;

class IndexController extends Controller {

	/**
	 * 首页
	 */
	public function index() {
		$this -> display();
	}

	/**
	 * 新闻列表
	 */
	public function news($type = '', $keyword = '') {

		if ($type == 1) {
			$type = '中证投资锦囊';
		} else if ($type == 2) {
			$type = '中证投资内参';
		}

		$this -> assign('type', $type);
		$this -> assign('keyword', $keyword);
		//查询条件回显

		$news = M('News');
		// 实例化User对象

		// $condition['type'] = array('EQ', $type);
		// $condition['key'] = array('like',"%".$key."%");

		$condition = "type='{$type}' and (subject like '%{$keyword}%' or title like '%{$keyword}%' or description like '%{$keyword}%' or content like '%{$keyword}%')";

		$count = $news -> where($condition) -> count();
		// 查询满足要求的总记录数

		$Page = new \Think\Page($count, 8);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		foreach ($condition as $key => $val) {
			if (!is_array($val)) {
				$Page -> parameter .= "$key=" . urlencode($val) . '&';
			}
		}

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('intime desc,id desc') -> where($condition) -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='财讯通右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);

		//=====================广告展示end======================================

		$this -> display();
		// 输出模板
	}

	/**
	 * 专家解盘视频
	 */
	public function video($type = '视频解盘', $id = 0) {

		$this -> assign('type', $type);
		//查询条件回显

		$video = M('Video');
		// 实例化User对象

		$condition['type'] = array('EQ', $type);

		$count = $video -> where($condition) -> count();
		// 查询满足要求的总记录数

		$Page = new \Think\Page($count, 13);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		foreach ($condition as $key => $val) {
			if (!is_array($val)) {
				$Page -> parameter .= "$key=" . urlencode($val) . '&';
			}
		}

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $video -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('intime desc,id desc') -> where($condition) -> select();
		$this -> assign('videoList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//======================当前视频=======================================
		if ($id == 0) {
			$id = $list[0]['id'];
			$this -> assign('video', $list[0]);
		} else {
			$res = $video -> find($id);
			$this -> assign('video', $res);
		}

		$this -> assign('id', $id);
		//======================相关视频========================================
		$relateList = $video -> where("type ='{$type}' and id !='{$id}'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('relateList', $relateList);

		$this -> display();
	}

	/**
	 * 中证实盘追踪
	 */
	public function spzz() {

		//在线直播
		$spzz = M('Spzz');
		$res = $spzz -> where("pid=0") -> order("id desc") -> find();
		$this -> assign('spzz', $res);

		$id = $res['id'];
		$spzzList = $spzz -> where("pid='{$id}'") -> order("id desc") -> limit(200) -> select();
		$this -> assign('spzzList', $spzzList);

		//===========================中证介绍===============================
		$document = M('Document');
		$res = $document -> where("type='中证介绍'") -> find();
		$this -> assign('document', $res);
		//===========================中证分析师==============================
		$experts = M('Experts');
		$expertsList = $experts -> where("type='中证分析师'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('expertsList', $expertsList);

		$this -> display();

	}

	/**
	 * 中证分析师
	 */
	public function fxs() {
		$experts = M('Experts');
		$expertsList = $experts -> where("type='中证分析师'") -> select();
		$this -> assign('expertsList', $expertsList);
		$this -> display();
	}

	/**
	 * 中证独家调研
	 */
	public function djdy($type = '中证独家调研', $keyword = '') {

		$this -> assign('type', $type);
		$this -> assign('keyword', $keyword);
		//查询条件回显

		$news = M('News');
		// 实例化User对象

		//$condition['type'] = array('EQ', $type);

		$condition = "type='{$type}' and (subject like '%{$keyword}%' or title like '%{$keyword}%' or description like '%{$keyword}%' or content like '%{$keyword}%')";

		$count = $news -> where($condition) -> count();
		// 查询满足要求的总记录数

		$Page = new \Think\Page($count, 8);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		foreach ($condition as $key => $val) {
			if (!is_array($val)) {
				$Page -> parameter .= "$key=" . urlencode($val) . '&';
			}
		}

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('intime desc,id desc') -> where($condition) -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//===========================中证介绍===============================
		$document = M('Document');
		$res = $document -> where("type='中证介绍'") -> find();
		$this -> assign('document', $res);
		//===========================中证分析师==============================
		$experts = M('Experts');
		$expertsList = $experts -> where("type='中证分析师'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('expertsList', $expertsList);

		$this -> display();
	}

	/**
	 * 中证寻牛专案
	 */
	public function xnza($type = '中证寻牛专案') {

		$this -> assign('type', $type);
		//查询条件回显

		$news = M('News');
		// 实例化User对象

		$condition['type'] = array('EQ', $type);

		$count = $news -> where($condition) -> count();
		// 查询满足要求的总记录数

		$Page = new \Think\Page($count, 8);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		foreach ($condition as $key => $val) {
			if (!is_array($val)) {
				$Page -> parameter .= "$key=" . urlencode($val) . '&';
			}
		}

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('intime desc,id desc') -> where($condition) -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//===========================中证介绍===============================
		$document = M('Document');
		$res = $document -> where("type='中证介绍'") -> find();
		$this -> assign('document', $res);
		//===========================中证分析师==============================
		$experts = M('Experts');
		$expertsList = $experts -> where("type='中证分析师'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('expertsList', $expertsList);

		$this -> display();
	}

	/**
	 * 新闻展示
	 */
	public function show($id = 0) {
		$news = M('News');
		$res = $news -> find($id);
		$type = $res['type'];

		$attachmentArr = explode(",", $res['attachment']);
		$attachmenturlArr = explode(",", $res['attachmenturl']);
		$this -> assign('attachmentArr', $attachmentArr);
		$this -> assign('attachmenturlArr', $attachmenturlArr);

		$this -> assign('news', $res);

		$newsList = $news -> where("type='{$type}' and id !='{$id}'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('newsList', $newsList);

		$this -> display();
	}

	/**
	 * 中证分析师展示
	 */
	public function experts_introduce($id = 0) {
		$experts = M('Experts');
		$res = $experts -> find($id);
		$this -> assign('experts', $res);
		$this -> display();
	}

	/**
	 * 中证金牛V计划
	 */
	public function vjh() {
		$link = M('Link');
		$res = $link -> where("type='中证金牛V计划'") -> order("id desc") -> find();
		$this -> assign('link', $res);
		$this -> display();
	}

	/**
	 * 中证关于我们
	 */
	public function about($type = '财讯通关于我们') {

		$document = M('Document');
		$res = $document -> where("type='{$type}'") -> find();
		$this -> assign('document', $res);
		$this -> display();
	}
	
	
	//生成验证码
	public function verify() {

		$config = array('fontSize' => 16, // 验证码字体大小
		'length' => 4, // 验证码位数
		'useNoise' => false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify -> entry();
	}

	/**
	 * 互动交流
	 */
	public function interaction($flag = '是') {
		
		$condition = "flag='{$flag}'";
		
		$object = M('Interaction');
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
	 * 互动交流提交数据
	 */
	public function saveInteraction() {
		
		//===============检验验证码是否输入正确====================
		$code = $_POST['validateCode'];
		$verify = new \Think\Verify();
		$bool = $verify -> check($code, '');

		if (!$bool) {
			$this -> error('验证码错误！');
			return;
		}
		//======================END=========================
		
		$object = M('Interaction');
		$object -> create();
		$object->add_time = date('Y-m-d H:i:s');
		$flag = $object -> add();
		if ($flag) {
			$this -> success('操作成功！', U('interaction'));
		} else {
			$this -> error('操作失败!');
		}
	}
	
	
	/**
	 * 战绩回顾
	 */
	 public function performance(){
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

}
