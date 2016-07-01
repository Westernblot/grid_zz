<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {

	/**
	 * 首页
	 */
	public function index($type = '近三月') {

		if (isMobile()) {
			
			//打开移动设备网站
			//R('Mobile/Index/index');
			
			$this->redirect("Mobile/Index/index");

		} else {

			$this -> assign('type', $type);

			//轮播图-右下脚广告,各种链接图片
			$link = M('Link');
			$linkList = $link -> select();
			$this -> assign('linkList', $linkList);

			//首页广告-中下方广告
			$res = $link -> where("type='通栏上方广告'") -> order("Rand()") -> find();
			$this -> assign('link1', $res);
			$res = $link -> where("type='通栏中方广告'") -> order("Rand()") -> find();
			$this -> assign('link2', $res);
			$res = $link -> where("type='通栏下方广告'") -> order("Rand()") -> find();
			$this -> assign('link3', $res);

			//私募排行
			$private = M('Private');
			$privateList = $private -> order('rank asc') -> where("type='{$type}'") -> limit(5) -> select();
			$this -> assign('privateList', $privateList);

			//精彩回顾
			$wonder = M('Wonder');
			$wonderList = $wonder -> limit(5) -> select();
			$this -> assign('wonderList', $wonderList);

			//金融服务关键字
			$keyword = M('Keyword');
			$keywordList = $keyword -> select();
			$this -> assign('keywordList', $keywordList);

			//中证专家解盘-专家1，2，3
			$experts = M('Experts');
			$expertsList = $experts -> order("Rand()") -> limit(3) -> select();

			$video = M('Video');
			$this -> assign('experts0', $expertsList[0]);
			$expertsnews0 = $video -> where("experts_id='{$expertsList[0]['id']}'") -> limit(2) -> select();
			$this -> assign('expertsnews0', $expertsnews0);

			$this -> assign('experts1', $expertsList[1]);
			$expertsnews1 = $video -> where("experts_id='{$expertsList[1]['id']}'") -> limit(2) -> select();
			$this -> assign('expertsnews1', $expertsnews1);

			$this -> assign('experts2', $expertsList[2]);
			$expertsnews2 = $video -> where("experts_id='{$expertsList[2]['id']}'") -> limit(2) -> select();
			$this -> assign('expertsnews2', $expertsnews2);

			//最近点播
			$videoList = $video -> where("type='专家解盘'") -> limit(7) -> order("id desc") -> select();
			$this -> assign('videoList', $videoList);

			//select 所有新闻 按type分组，取 前8条
			$model = new Model();
			$newsList = $model -> query(" select a.* from tp_news a 
                            where  8 > (select count(*) from tp_news where type = a.type and id > a.id  )
                            order by a.type desc, a.id DESC");
			$this -> assign('newsList', $newsList);

			$this -> display('Home@Index:index');

		}

	}

	/**
	 * 搜索
	 */
	public function search($keyword = '') {

		$this -> assign('keyword', $keyword);

		$news = M('News');
		// 实例化User对象

		//$condition['type'] = array('not in',array('中证寻牛专案','中证独家调研','中证投资内参','中证投资锦囊'));
		$condition['content'] = array('like', '%' . $keyword . '%');
		//$condition['subject'] =array('like','%'.$keyword.'%');
		//$condition['subjcet'] =array('like',"'%{$keyword}%'");
		//$condition['title'] =array('like',"'%{$keyword}%'");
		//$condition['_string'] = "(content like '%{$keyword}%' or subject like '%{$keyword}%' or title like '%{$keyword}%')";

		$count = $news -> where($condition) -> where("type not in ('中证寻牛专案','中证独家调研','中证投资内参','中证投资锦囊')") -> count();
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

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> where($condition) -> where("type not in ('中证寻牛专案','中证独家调研','中证投资内参','中证投资锦囊')") -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		$this -> display();
	}

	/**
	 * 新闻列表
	 */
	public function news($type = '') {
		
		if (isMobile()) {
			
			//打开移动设备网站
			//R('Mobile/Index/index');
			
			$this->redirect("Mobile/Index/news?type=".$type);

		} else {
		
		
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

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> where($condition) -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
		// 输出模板
		
		}
	}

	/**
	 * 实盘跟踪列表
	 */
	public function nlist($type = '实盘跟踪') {
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

		$list = $news -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> where($condition) -> select();
		$this -> assign('newsList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
		// 输出模板
	}

	/**
	 * 私募排行
	 */
	public function smph($type = '近三月') {

		$this -> assign('type', $type);
		//查询条件回显

		$private = M('Private');
		// 实例化User对象

		$condition['type'] = array('EQ', $type);
		$count = $private -> where($condition) -> count();
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $private -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('rank asc') -> where($condition) -> select();
		$this -> assign('privateList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
		// 输出模板
	}

	/**
	 * 精彩回顾
	 */
	public function wonder() {

		$wonder = M('Wonder');
		// 实例化User对象

		$count = $wonder -> count();
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $wonder -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> select();
		$this -> assign('wonderList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
		// 输出模板
	}

	/**
	 * 新闻展示
	 */
	public function show($id = 0) {
		
		if (isMobile()) {
			
			//打开移动设备网站
			//R('Mobile/Index/index');
			
			$this->redirect("Mobile/Index/show?id=".$id);

		} else {
		
		$news = M('News');
		$res = $news -> find($id);
		$type = $res['type'];
		
		$attachmentArr=explode(",",$res['attachment']);
		$attachmenturlArr=explode(",",$res['attachmenturl']);		
		$this->assign('attachmentArr',$attachmentArr);
		$this->assign('attachmenturlArr',$attachmenturlArr);
		
		$this -> assign('news', $res);

		//=====================广告展示=========================================
		$link = M('Link');
		//右边栏广告
		$linkList = $link -> where("type ='右边栏广告'") -> select();
		$this -> assign('linkList', $linkList);
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);

		//======================相关新闻========================================

		$newsList = $news -> where("type='{$type}' and id !='{$id}'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('newsList', $newsList);

		$this -> display();
		
		}
	}

	/**
	 * 视频show
	 */
	public function video_show($id = 0) {

		$model = new Model();
		$res = $model -> query("select v.*,(select name from tp_experts where id=v.experts_id) as experts_name from tp_video v
		                      where id='{$id}'  ORDER BY id desc  limit 1");
		$this -> assign('video', $res[0]);

		$type = $res[0]['type'];
		//======================相关视频========================================
		$video = M('Video');
		$videoList = $video -> where("type='{$type}' and id !='{$id}'") -> order("Rand()") -> limit(10) -> select();
		$this -> assign('videoList', $videoList);

		$this -> display();
	}

	/**
	 * 专家
	 */
	public function experts($type = '专家解盘') {

		$model = new Model();
		// 实例化一个model对象 没有对应任何数据表

		$countArr = $model -> query("select COUNT(1) as count FROM tp_video where type = '{$type}'");
		$count = $countArr[0]['count'];

		$Page = new \Think\Page($count, 8);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $model -> query("select v.*,(select name from tp_experts where id=v.experts_id) as experts_name from tp_video v
		                      where v.type='{$type}'  ORDER BY id desc  limit {$Page->firstRow},{$Page->listRows}");
		$this -> assign('videoList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		//===========================专家===================================
		$expets = M('Experts');
		$expertsList = $expets -> where("type='专家'") -> select();
		$this -> assign('expertsList', $expertsList);

		//=====================广告展示=========================================
		$link = M('Link');
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
	}

	/**
	 * 专家下的视频
	 */
	public function experts_introduce($id = 0) {

		$experts = M('Experts');
		$res = $experts -> find($id);
		$this -> assign('experts', $res);

		//===========================专家===================================
		$expets = M('Experts');
		$expertsList = $expets -> where("type='专家'") -> select();
		$this -> assign('expertsList', $expertsList);

		//=====================广告展示=========================================
		$link = M('Link');
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);

		//=====================名家-团队下的相关文章================================

		$video = M('Video');
		// 实例化User对象
		$count = $video -> where("experts_id = '{$id}'") -> count();
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 8);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)

		$show = $Page -> show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表

		$list = $video -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> where("experts_id = '{$id}'") -> select();
		$this -> assign('videoList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出

		$this -> display();
	}

	/**
	 * 联系我们
	 */
	public function about($type = '关于我们') {
		
		if (isMobile()) {
			
			//打开移动设备网站
			//R('Mobile/Index/index');
			
			$this->redirect("Mobile/Index/about?type=".$type);

		} else {
		
		$this -> assign('type', $type);

		$document = M('Document');
		$res = $document -> where("type='{$type}'") -> find();
		$this -> assign('document', $res);

		//=====================广告展示=========================================
		$link = M('Link');
		//横幅广告，随机取一条
		$res = $link -> where("type='横幅广告'") -> order("Rand()") -> find();
		$this -> assign('link', $res);
		//=====================广告展示end======================================

		$this -> display();
		
		}
	}

	/**
	 *用户注册
	 */
	public function doRegister($validateCode = '', $phone = '') {

		//===============检验验证码是否输入正确====================
		// $code=$_POST['validateCode'];
		// $verify = new \Think\Verify();
		// $bool=$verify->check($code, '');
		//
		// if(!$bool){
		// $this->ajaxReturn(-1);
		// return;
		// }

		$phoneCode = cookie('phoneCode');
		$cookiephone = cookie('phone');

		//记录验证码信息到日志中
		\Think\Log::record("系统生成的验证码为：" . $phoneCode . ";用户输入的验证码为：" . $validateCode);

		//=======================判断用户是否修改了手机号===========================
		if ($phone != $cookiephone) {
			$this -> ajaxReturn(-5);
			return;
		}

		//=======================判断验证码是否过期===========================
		if ($phoneCode == '' || $phoneCode == NULL) {
			//echo '验证码已过期!';
			$this -> ajaxReturn(-4);
			return;
		}

		//=======================判断验证码是否输入正确===========================
		if ($validateCode != $phoneCode) {
			$this -> ajaxReturn(-1);
			return;
		}

		//======================END=========================

		$account = M('Account');
		$account -> create();

		//====================判断用户是否存在====================
		$username = $account -> account;
		$arr = $account -> where("account='{$username}'") -> find();
		if ($arr) {
			$this -> ajaxReturn(-2);
			return;
		}
		//====================判断手机号是否已注册====================
		$phone = $account -> phone;
		$arr1 = $account -> where("phone='{$phone}'") -> find();
		if ($arr1) {
			$this -> ajaxReturn(-3);
			return;
		}

		//======================END=========================

		//保存数据
		$account -> password = md5($account -> password);
		//对密码进行MD5加密
		$account -> power = "0";
		$account -> status = "1";
		$account -> intime = date('Y-m-d');
		$flag = $account -> add();

		$this -> ajaxReturn($flag);
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

	//开户预约页面
	public function order() {
		
		if (isMobile()) {
			
			//打开移动设备网站
			//R('Mobile/Index/index');
			
			$this->redirect("Mobile/Index/order");

		} else {
		
		    $this -> display();
		}
	}

	//开户预约
	public function doOrder() {
		//===============检验验证码是否输入正确====================
		$code = $_POST['validateCode'];
		$verify = new \Think\Verify();
		$bool = $verify -> check($code, '');

		if (!$bool) {
			$this -> ajaxReturn(-1);
			return;
		}

		//==================================================
		$order = M('Order');
		$order -> create();
		$order -> status = '已预约';
		$order -> intime = date('Y-m-d');

		$res = $order -> add();
		$this -> ajaxReturn($res);
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

	//=================================华丽的分割线============================================

	/**
	 * 重设密码页面
	 */
	public function resetpwd() {
		$this -> display();
	}

	/**
	 *  用户重设密码
	 */
	public function doresetpwd($validateCode = '', $phone = '', $password = '') {

		$phoneCode = cookie('phoneCode');
		$cookiephone = cookie('phone');

		//记录验证码信息到日志中
		\Think\Log::record("系统生成的验证码为：" . $phoneCode . ";用户输入的验证码为：" . $validateCode);

		//=======================判断用户是否修改了手机号===========================
		if ($phone != $cookiephone) {
			$this -> ajaxReturn(-5);
			return;
		}

		//=======================判断验证码是否过期===========================
		if ($phoneCode == '' || $phoneCode == NULL) {
			//echo '验证码已过期!';
			$this -> ajaxReturn(-4);
			return;
		}

		//=======================判断验证码是否输入正确===========================
		if ($validateCode != $phoneCode) {
			$this -> ajaxReturn(-1);
			return;
		}

		//===================判断手机号码在数据库中是否唯一==============================
		$account = M('Account');
		$count = $account -> where("phone='$phone'") -> count();
		// 查询满足要求的总记录数
		if ($count != 1) {
			$this -> ajaxReturn(-2);
			return;
		}
		//======================END=========================

		$Model = new Model();
		// 实例化一个model对象 没有对应任何数据表
		$flag = $Model -> execute("update tp_account set password = md5($password) where phone='$phone'");
		//获取所有的权限菜单

		$this -> ajaxReturn($flag);
	}

}
