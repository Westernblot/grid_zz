<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class AppController extends Controller {

	public function index() {
		$this -> show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
	}
	
	/**
	 * 注册操作
	 */
	public function Register($account,$phone,$password) {
		$Act = M('Account');
		$arr = $Act -> where("account = '$account'") -> find();
		if ($arr) {
			$data['flag'] = -2;
			$this -> ajaxReturn($data);
			return;
		}

		$arr1 = $Act -> where("phone='$phone'") -> find();
		if ($arr1) {
			$data['flag'] = -3;
			$this -> ajaxReturn($data);
			return;
		}
		//保存数据
		$Act->password = md5($password);//对密码进行MD5加密
		$Act->account = $account;
		$Act->phone = $phone;
		$Act->power = "0";
		$Act->status = "1";
		$Act->intime = date('Y-m-d');
		
		$data['flag'] = $Act->add();

		$this -> ajaxReturn($data);
	}
	
	/**
	 * 修改密码
	*/
	public function Alterpassword($account, $old, $password) {
		$Act = M('Account');
		$oldpassword = md5($old);
		$newpassword = md5($password);
		//记录验证码信息到日志中
		\Think\Log::record("账号account=".$account.";旧密码old=".$old.";新密码password=".$password);
		
		$res = $Act -> where(" account='{$account}' and password='{$oldpassword}' ") -> find();
		if ($res) {
			$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
			$flag = $Model->execute("update tp_account set password = '{$newpassword}' where account = '{$account}' ");
			$data['flag'] = $flag;
		} else {
			$data['flag'] = -1;
		}
		$this -> ajaxReturn($data);
	} 
	
	/**
	 * 重置密码
	*/
	public function Retrievepassword($phone, $password) {
		$Act = M('Account');
		$newpassword = md5($password);
		
		$res = $Act -> where(" phone='{$phone}' ") -> find();
		if ($res) {
			$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
			$flag = $Model->execute("update tp_account set password = '{$newpassword}' where phone = '{$phone}' ");
			$data['flag'] = $flag;
		} else {
			$data['flag'] = -1;
		}
		$this -> ajaxReturn($data);
	} 

	/**
	 * 远程登录接口
	 */
	public function Login($name = '', $password = '') {
		$account = M('Account');
		$newpassword = md5($password);//加密md5

		$res = $account -> where(" (account='{$name}' or phone='{$name}') and password='{$newpassword}'") -> find();
         
		//记录用户输入信息到日志中
		//\Think\Log::record("account".$name."; 密码password：".$password);

		if ($res) {
			$data['msg'] = 'success';
			$data['id'] =$res['id'];
			$data['account'] =$res['account'];
			$data['phone'] =$res['phone'];
		} else {
			$data['msg'] = '用户名或密码错误';
		}
		$this -> ajaxReturn($data);
	}
	
	/**
	 * 获得用户权限
	 */
	public function GetAccountPower($account = '') {
		$Act = M('Account');
		$res = $Act -> where(" account = '$account' ") -> find();
		if ($res) {
			$data['msg'] = 'success';
			$data['power'] = $res['power'];
		} else {
			$data['msg'] = 'error';
			$data['power'] = '0';
		}
		$this -> ajaxReturn($data);
	}
	
	/**
	 * 获得新闻列表
	 * @param string $type ： 新闻类别
	 */
	public function GetNewsList($page = 0, $type = '') {
		$news = M('News');
		$res = $news->where("type = '$type'")->limit($page,10)->order("id desc")->select();
		
 		if ($res) {
 			$data['msg'] = 'success';
 			$data['res'] = $res;
 		} else {
 			$data['msg'] = 'error';
		}
 		$this->ajaxReturn($data);
	}
	
	/**
	 * 获得新闻详情
	 * @param string $id ： 数据库id
	 */
	public function GetNewsByID($id = '') {
		$news = M('News');
		$res = $news->where("id = '$id'")->find();
		if ($res) {
			$data['msg'] = 'success';
			$data['res'] = $res;
		} else {
			$data['msg'] = 'error';
		}
		$this->ajaxReturn($data);
	}
	
	/**
	* 获得明星股票
	*/
	public function GetFamousStock() {
		$stock = M('stock');
		$res = $stock->where("flag = '1'")->order("rank asc")->select();
		if ($res) {
			$data['msg'] = 'success';

			for($i = 0; $i < count($res); $i++) {
				$code = $res[$i]['kindcode'];
				$result = curl_get("http://hq.sinajs.cn/list=s_".$code);
				$em = explode(",", $result);
				$res[$i]['price'] = $em[1];//价格
				if($em[3] > 0) {
					$res[$i]['change'] = "+".$em[3]."%";//涨跌
					$res[$i]['css'] = 'colorRed';
				} else {
					$res[$i]['change'] = $em[3]."%";//涨跌
					$res[$i]['css'] = 'colorGreen';
				}
			}
			$data['res'] = $res;
		} else {
			$data['msg'] = 'error';
		}
		$this->ajaxReturn($data);
	}
	
	/**
	* 获得个人股票
	* @param string $account ： 帐号用户名
	*/
	public function GetPersonStock($account = '') {
		$stock = M('stock');
		$res = $stock->where("account = '$account' and flag = '0'")->select();
		if ($res) {
			$data['msg'] = 'success';

			for($i = 0; $i < count($res); $i++) {
				$code = $res[$i]['kindcode'];
				$result = curl_get("http://hq.sinajs.cn/list=s_".$code);
				$em = explode(",", $result);
				$res[$i]['price'] = $em[1];//价格
				if($em[3] > 0) {
					$res[$i]['change'] = "+".$em[3]."%";//涨跌
					$res[$i]['css'] = 'colorRed';
				} else {
					$res[$i]['change'] = $em[3]."%";//涨跌
					$res[$i]['css'] = 'colorGreen';
				}
			}
			$data['res'] = $res;
		} else {
			$data['res'] = $res;
			$data['msg'] = 'error';
		}
		//echo $account;
		//echo $data;
		$this->ajaxReturn($data);
	}
	
	/**
	 * 设置个人股票
	 */
	public function SetPersonStock($name = '', $kindcode = '', $kind = '', $code = '', $account = '') {
		$stock = M('stock');
		$stock->create();
		$stock->flag = '0';
		
		$arr = $stock->where(" account = '$account' and kindcode = '$kindcode' and flag = '0' ") -> find();
		if ($arr) {
			$data['msg'] = '该股票已经添加过了';
			$this->ajaxReturn($data);
			return;
		}
		
		$res = $stock->add();
		if($res){
			$data['msg'] = 'success';
		} else {
			$data['msg'] = '添加失败';
		}
		$this->ajaxReturn($data);
	}
	
	/**
	* 移除已添加的个股
	*/
	public function RemovePersonStock($kindcode = '', $account = '') {
		$stock = M('stock');
		$flag = $stock->where(" kindcode = '$kindcode' and account = '$account' and flag = '0' ")->delete();
		$data['flag'] = $flag;
		$this->ajaxReturn($data);
	}
	
	/**
	* 查询股票是否添加了个股
	*/
	public function QueryStock($kindcode = '', $account = '') {
		$stock = M('stock');
		$arr = $stock->where(" account = '$account' and kindcode = '$kindcode' and flag = '0' ") -> find();
		if ($arr) {
			$data['msg'] = 'true';
			$this->ajaxReturn($data);
		} else {
			$data['msg'] = 'false';
			$this->ajaxReturn($data);
		}
	}
	
	/**
	* 获得直播内容
	*/
	public function GetLive() {
		$spzz=M('Spzz');
		$res=$spzz->where("pid=0")->order("id desc")->find();
		$data['spzz'] = $res;
		
		$id=$res['id'];
		$spzzList=$spzz->where("pid='{$id}'")->order("id desc")->limit(200) ->select();
		$data['res'] = $spzzList;

		$this->ajaxReturn($data);
	}
	
	/**
	* 获得广告图片地址
	*/
	public function GetAdImgurl($num = '0') {
		$link = M('Link');
		$type = 'APP广告'.$num;
		$res = $link -> where(" type = '$type' ")-> find();
		$data['res'] = $res;
		$this->ajaxReturn($data);
	}
	
	/**
     * 查询文章
     */
	public function SearchNews($title = '') {
	    $news = M('News');
        $res = $news->where(" title like '%$title%' and type in ('中证投资锦囊','今日市场头条','中证独家视点','中证政策前瞻','中证行业研究','中证个股资讯') ")->limit(0,20)->order("id desc")->field('id,title,description,intime,imgurl')->select();
        
        if ($res) {
            $data['msg'] = 'success';
            $data['res'] = $res;
        } else {
            $data['msg'] = 'error';
        }
        $this->ajaxReturn($data);
    }
    
    /**
     * 查询付费文章
     */
    public function SearchPaidNews($title = '', $type = '') {
        $type = fmIds($type);
        
        $news = M('News');
        $res = $news->where(" title like '%$title%' and type in ($type) ")->limit(0,20)->order("id desc")->field('id,title,description,intime,imgurl')->select();
        
        if ($res) {
            $data['msg'] = 'success';
            $data['res'] = $res;
        } else {
            $data['msg'] = 'error';
        }
        $this->ajaxReturn($data);
    }
	
	
	public function GetTest() {
		$result = curl_get("http://hq.sinajs.cn/list=sh000001");
		echo $result;
	}
		
	

}
