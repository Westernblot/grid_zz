<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {
   
   
   /**
    * 首页
    */
    public function index(){
    	
		$news=M('News');
		
		$link = M('Link');
		$linkList = $link -> where("type='轮播图'")->select();
		$this -> assign('linkList', $linkList);
		
		$newsList=$news->where("type='今日市场头条'")->limit(8)->order("id desc")->select();
		$newsList0=$news->where("type='中证行业研究'")->limit(7)->order("id desc")->select();
		$newsList1=$news->where("type='中证个股资讯'")->limit(7)->order("id desc")->select();
		$newsList2=$news->where("type='市场数据'")->limit(7)->order("id desc")->select();		
		$this -> assign('newsList', $newsList);
		$this -> assign('newsList0', $newsList0);
		$this -> assign('newsList1', $newsList1);
		$this -> assign('newsList2', $newsList2);
		
        $this -> display('Mobile@Index:index');
	}
	
	
	/**
	 * 新闻列表
	 */
	 public function news($type=''){
	 	
		$this->assign('type',$type);
	    //横幅广告，随机取一条
		$link=M('Link');
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
			
			
	 	$news=M('News');
		$newsList=$news->where("type='{$type}'")->limit(7)->order("id desc")->select();
		$this->assign('newsList',$newsList);
		
		$this->display();
	 }
	
	/**
	 * 加载更多,7条数据
	 */
	 public function loadMoreNews($type='',$start=7){
		$news=M('News');
		$newsList=$news->where("type='{$type}'")->limit($start,7)->order("id desc")->select();
		
		$this->ajaxReturn($newsList);
	 }
	
	
	//=====================================华丽的分割线===========================================
	
	/**
	 * 搜索
	 */
	 public function search($key=''){
	 	$this->assign('key',$key);
	 	//横幅广告，随机取一条
		$link=M('Link');
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		
		$news=M('News');
		$newsList=$news->where("subject like '%{$key}%' or content like '%{$key}%'")->limit(7)->order("id desc")->select();
		$this->assign('newsList',$newsList);
		
		$this->display();
	 }
	
	/**
	 * 加载更多,7条数据
	 */
	 public function searchMoreNews($key='',$start=7){
	 	
		$news=M('News');
		$newsList=$news->where("subject like '%{$key}%' or content like '%{$key}%'")->limit($start,7)->order("id desc")->select();
		
		$this->ajaxReturn($newsList);
	 }
	
	//============================================================================================================
	
	/**
	 * 显示文章内容
	 */
    public function show($id=0){
    	$news=M('News');
		$res=$news->find($id);
		$type = $res['type'];
		$this->assign('news',$res);
		
		//推荐阅读
		$newsList = $news -> where("type='{$type}' and id !='{$id}'") -> order("Rand()") -> limit(4) -> select();
		$this -> assign('newsList', $newsList);
		
		$this->display();
    }
	
	
	/**
	 * 关于我们
	 */
	 public function about($type='关于我们'){
	 	$this -> assign('type', $type);

		$document = M('Document');
		$res = $document -> where("type='{$type}'") -> find();
		$this -> assign('document', $res);
		$this->display();
		
	 }
	
	
	
	/**
	 * 产品
	 */
	public function product($type = '产品') {

		$this -> assign('type', $type);

		$document = M('Document');
		$res = $document -> where("type='{$type}'") -> find();
		$this -> assign('product', $res);

		$this -> display();
	}
	
	
	
	
	
	
	public function getGp(){

		$result = curl_get("http://hq.sinajs.cn/list=s_sz399001");
		
		echo $result;

	}
	
	
	
}