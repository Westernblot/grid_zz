<?php

namespace Admin\Controller;

use Think\Controller;

use Think\Model;
//引入Model

class AccountController extends AdminController {

	/**
	 * 账户列表
	 */
	public function accountMain() {
		// utf-8编码
		header('Content-Type: text/html; charset=utf-8');

		$account = M('Account');
		// 实例化User对象

		//构造查询条件
		$phone = $_GET['phone'];
		$this -> assign('phone', $phone);
		//查询条件回显

		$condition['phone'] = array('like', "%" . $phone . "%");

		$count = $account -> where($condition) -> count();
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);
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

		$list = $account -> limit($Page -> firstRow . ',' . $Page -> listRows) -> order('id desc') -> where($condition) -> select();
		$this -> assign('accountList', $list);
		// 赋值数据集
		$this -> assign('page', $show);
		// 赋值分页输出
		$this -> display();
		// 输出模板
	}

	//=========================================分隔线===============================================

	/**
	 * 删除会员
	 */
	public function delete($ids = '') {
		$account = M('Account');
		$res = $account -> delete($ids);

		if ($res) {
			$this -> success('操作成功!');
		} else {
			$this -> error('操作失败,没有删除数据！');
		}
	}

	/**
	 * 设置用户权限 UI
	 */
	public function powerUI($id = 0) {

		$account = M('Account');
		$res = $account -> find($id);
		$this -> assign('account', $res);

		$this -> display();
	}

	/**
	 * 设置用户权限
	 */
	public function setPower($id = 0) {

		$power = implode(',', $_POST['power']);

		$account = M("Account");
		$data['id'] = $id;
		$data['power'] = $power;

		$flag = $account -> save($data);
		// 根据条件保存修改的数据
		if ($flag > 0) {
			$this -> success('操作成功！', U('accountMain'));
		} else {
			$this -> error('操作失败,没有更新用户权限！');
		}
	}

}
