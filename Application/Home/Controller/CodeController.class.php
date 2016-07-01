<?php
namespace Home\Controller;
use Think\Controller;

use Think\Model;

/**
 * 中国天翼 手机验证码 下发
 */
class CodeController extends Controller {

	// 应用ID
	private $app_id = '326249600000245615';
	// 应用的密钥
	private $app_secret = '5c4926b0515e3532a9ff5f3967adb82c';
	//时间戳，格式为：yyyy-MM-dd hh:mm:ss
	private $timestamp = ''; 
	private $phone = '13297234911';
	
	//验证码
	private $code;
	//验证码长度
	private $codelen = 6;
	//验证码的随机因子
	private $charset = "0123456789";
	//验证码有效期长度，单位是分钟，可以为空，默认有效2分钟
	private $exp_time = '';
	//Client Credentials授权模式
	private $grant_type = 'client_credentials';
	// 获取access_token的URL
	private $access_token_url = 'http://oauth.api.189.cn/emp/oauth2/v2/access_token';
	// 自定义短信发送信息的URL
	private $send_url = 'http://api.189.cn/v2/dm/randcode/sendSms';
	// 获取token的URL
	private $token_url = 'http://api.189.cn/v2/dm/randcode/token';

	//构造方法
	public function __construct() {
		//date_default_timezone_set('Asia/Shanghai');
		//设置时区，避免8小时的时间差
		$this -> timestamp = date('Y-m-d H:i:s');
		$this -> createCode();
	}

	//生成随机码
	private function createCode() {
		$_len = strlen($this -> charset) - 1;
		for ($i = 0; $i < $this -> codelen; $i++) {
			$this -> code .= $this -> charset[mt_rand(0, $_len)];
		}
	}

	//获取access_token
	public function getAccessKey() {
		$param['grant_type'] = "grant_type=" . $this -> grant_type;
		$param['app_id'] = "app_id=" . $this -> app_id;
		$param['app_secret'] = "app_secret=" . $this -> app_secret;
		$plaintext = implode("&", $param);
		$result = $this -> curl_post($this -> access_token_url, $plaintext);

		$obj = json_decode($result);
		return $obj -> access_token;
	}

	//获取Token
	public function getToken($access_token) {
		$param['app_id'] = "app_id=" . $this -> app_id;
		$param['access_token'] = "access_token=" . $access_token;
		$param['timestamp'] = "timestamp=" . $this -> timestamp;
		ksort($param);
		$plaintext = implode("&", $param);
		$param['sign'] = "sign=" . rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $this -> app_secret, $raw_output = True)));
		ksort($param);
		$this -> token_url .= '?' . implode("&", $param);
		$result = $this -> curl_get($this -> token_url);
		$obj = json_decode($result);
		//echo "token:" . $obj -> token;
		return $obj -> token;
	}

	//获取验证码
	public function getCode() {
		return $this -> code;
	}
    
    
    /**
	 * 发送短信验证码
	 */
	public function send($phone='') {
	
		$access_token = $this -> getAccessKey();
		$token = $this -> getToken($access_token);
		//$dataurl = $_POST['url'];
		$param['app_id'] = "app_id=" . $this -> app_id;
		$param['access_token'] = "access_token=" . $access_token;
		$param['timestamp'] = "timestamp=" . $this -> timestamp;
		$param['token'] = "token=" . $token;
		$param['phone'] = "phone=" . $phone;
		$param['randcode'] = "randcode=" . $this -> code;
		if (!empty($this -> exp_time))
			$param['exp_time'] = "exp_time=" . $this -> exp_time;
		ksort($param);
		$plaintext = implode("&", $param);
		$param['sign'] = "sign=" . rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $this -> app_secret, $raw_output = True)));
		ksort($param);
		$str = implode("&", $param);
		$result = $this -> curl_post($this -> send_url, $str);
		$obj = json_decode($result);
		
		//返回值
		$data['status']=$obj->res_code;  //返回状态
		$data['code']=$this->code;           //手机验证码
		
		cookie('phoneCode',$this->code,120); // 指定cookie保存时间,验证码有效期120秒
		cookie('phone',$phone,120); // 指定cookie保存时间,验证码有效期120秒
		
		$this->ajaxReturn($data);
	}





//======================================华丽的分割线===============================================


	//cURL库抓网页,从一个链接上取数据(get方式)
	public function curl_get($url = '') {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	//cURL库抓网页,从一个链接上取数据(post方式)
	public function curl_post($url = '', $postdata = '') {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

}
