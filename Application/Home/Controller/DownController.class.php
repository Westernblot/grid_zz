<?php
namespace Home\Controller;
use Think\Controller;

use Think\Model;

/**
 * 全平台 app 下载链接
 */
class DownController extends Controller {
	
	/**
	 * 全平台下载地址
	 */
	public function index(){
		 $this->display();
	}
	
    /**
	 * 安卓客户端下载
	 */
	public function android(){
		if (isWeixin()) {
              $this->display("weixinwap");
		} else {
			   $this->display("outwap");
		}
	}
    
}