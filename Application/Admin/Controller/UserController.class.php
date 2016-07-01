<?php

namespace Admin\Controller;

use Think\Controller;

use Think\Model;//引入Model

class UserController extends AdminController {
	
	/**
	 * 账户列表
	 */
	public function userList() {
		// utf-8编码
        header('Content-Type: text/html; charset=utf-8');
		
		$User = M ( 'User' ); // 实例化User对象
		
		//构造查询条件
		$username=$_GET['username'];
		$this->assign('username',$username);//查询条件回显
		
        //$condition['dept'] = array('like',"%"."市局"."%");
        $condition['username'] = array('like',"%".$username."%");
		
		$count = $User->where($condition)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page ( $count,10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		
		foreach($condition as $key => $val) {
			if(!is_array($val)) {
			    $Page->parameter   .=   "$key=".urlencode($val).'&';
			}
		}
		
		$show = $Page->show (); // 分页显示输出
		                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		                        // 此处有一BUG，到数据量没达到分页条数时。不会显示分页导航表
		
		$list = $User->limit ( $Page->firstRow . ',' . $Page->listRows )->order('id desc')->where($condition)->select ();
		$this->assign ( 'userList', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	
	
	/**
	 * 新增用户、编辑用户页面
	 */
	 public function userUI(){
	    $id=$_REQUEST['id'];
		
		if($id){
			$m=M('User');
			$arr=$m->find($id);
			$this->assign('user',$arr);
		}
	 	$this->display();
	 }
	 
	 /**
	  * 自助服务，用户修改个人密码
	  */
	  public function updatePasswordUI(){
	  	$id=$_REQUEST['id'];
		$user=M('User');
		$res=$user->find($id);
		$this->assign('user',$res);
		$this->display();
	  }
	 
	  /**
	  * 修改用户
	  */
	public function updatePassword(){
		$user = M("User"); // 实例化User对象
		// 根据表单提交的POST数据创建数据对象
		$user->create();
		$user->password=md5($user->password);//修改密码时，对密码进行MD5加密
		$flag=$user->save(); // 根据条件保存修改的数据
		
		if($flag>0){
			$this->success('操作成功！',U('updatePasswordUI'));
		}else{
			$this->error('操作失败');
		}
	}
	 
	 //===============================================分割线===========================================
	 
	 /**
	  * 新增用户
	  */
	 public function insert(){
	 	
		$user=M('User');
		$user->create(); //创建User数据对象
		
		$username=$user->username;
		
		$where = array (
				'username' => $username,
		);
		
		$arr = $user->where ( $where )->find ();
		
		if($arr){
			$this->error('用户名已存在!');
		}
		
		$user->password=md5($user->password);//对密码进行MD5加密
		$retId=$user->add();
		
		if($retId){
			$this->success('操作成功!',U('userList'));
		}else{
			$this->error('操作失败！');
		}
		
	 }
	 
	 /**
	  * 修改用户
	  */
	public function update(){
		$user = M("User"); // 实例化User对象
		// 根据表单提交的POST数据创建数据对象
		$user->create();
		$flag=$user->save(); // 根据条件保存修改的数据
		
		if($flag>0){
			$this->success('操作成功！',U('userList'));
		}else{
			$this->error('操作失败,没有修改数据!');
		}
	}
	
	
	/**
	 * 删除
	 */
	 public function delete(){
	 	$ids=$_REQUEST['ids'];
		$User = M("User"); // 实例化User对象
		$flag=$User->delete($ids); // 删除主键为1,2和5的用户数据
		if($flag>0){
			$this->success('操作成功！',U('userList'));
		}else{
			$this->error('操作失败,没有删除数据!');
		}
	 }
	 
	 
	 /**
	  * 重置密码
	  */
	  public function resetPWD(){
	  	$ids=$_REQUEST['ids'];
	  	$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$flag=$Model->execute("update tp_user set password = md5(1) where id IN ({$ids})");  //获取所有的权限菜单
		if($flag>0){
			$this->success('操作成功！',U('userList'));
		}else{
			$this->error('操作失败,没有重置密码!');
		}
	  }
	  
	  
	  //=========================================分隔线===============================================
	  
	  /**
	   * 设置用户权限 UI
	   */
	   public function powerUI(){
	   	$id=$_REQUEST['id'];
		
		$u=M('User');
		$user=$u->find($id);
		$this->assign('user',$user);
		
		$menu=M('Menu');
		$menuList=$menu->select();
		$this->assign('menuList',$menuList);
		
		$this->display();
	   }
	   
	   /**
	    * 设置用户权限
	    */
	   public function setPower(){

		$id=$_POST['id'];
		//$power=$_POST['power'];
		$power=implode(',',$_POST['power']);
 
	   	$user = M("User"); // 实例化User对象
	   	$data['id'] = $id ;
	   	$data['power'] = $power;
	
		$flag=$user->save($data); // 根据条件保存修改的数据
		 if($flag>0){
			$this->success('操作成功！',U('userList'));
		}else{
			$this->error('操作失败,没有更新用户权限!');
		}
	   }
}