<?php
defined('ZOTOP') OR die('No direct access allowed.');
/*
* 会员账户管理
*
* @package		member
* @version		1.0
* @author		zotop.chenlei
* @copyright	zotop.chenlei
* @license		http://www.zotop.com
*/
class member_controller_mine extends member_controller
{
	private $member;
	private $model;
	private $user;
	private $group;

	/**
	 * 重载__init函数
	 */
	public function __init()
	{
		parent::__init();

		$this->member = m('member.member');
		$this->model  = m('member.model');
		$this->group  = m('member.group');
		$this->user   = m('system.user');
	}


	/**
	 * 个人资料
	 * 
	 * @return mixed
	 */
	public function action_index()
    {
		if ( $post = $this->post() )
		{
			if ( $this->member->edit($post, $this->userid) )
			{
				return $this->success(t('保存成功'));
			}

			return $this->error($this->member->error());
		}

		$data = $this->member->get($this->userid);

		$fields = m('member.field')->formatted($data['modelid'], $data);
		
		$groups = arr::hashmap(m('member.group')->getModel($data['modelid']),'id','name');

		$models = $this->model->get($data['modelid']);

		$this->assign('title',t('个人资料'));
		$this->assign('data',$data);
		$this->assign('groups',$groups);
		$this->assign('fields',$fields);
		$this->assign('models',$models);
		$this->display();
	}

	/**
	 * 安全中心
	 * 
	 * @return mixed
	 */
	public function action_security()
	{

	}

	/**
	 * 修改或者设置邮箱
	 * 
	 * @return mixed
	 */
	public function action_email()
    {
		if ( $post = $this->post() )
		{
			if ( !m('system.verifycode')->check($post['email'],$post['verifycode']) )
			{
				return $this->error(t('验证码错误，请重新尝试'));
			}

			if ( $this->user->update($post, $this->userid) )
			{
				return $this->success(t('保存成功'),u('member/mine/validemail'));
			}

			return $this->error($this->user->error());
		}

		$data = $this->user->get($this->userid);

		$this->assign('title',t('修改邮箱'));
		$this->assign('data',$data);
		$this->display();
	}

	/**
	 * 修改或者设置密码
	 * 
	 * @return mixed
	 */
	public function action_password()
    {
		if ( $post = $this->post() )
		{
			if ( empty($post['newpassword']) or $post['newpassword'] != $post['newpassword2'] )
			{
				return $this->error(t('新密码不能为空，且两次输入的必须一致'));
			}

			if ( strlen($post['newpassword']) < 6 or strlen($post['newpassword']) > 20 )
			{
				return $this->error(t('密码长度必须在6-20位之间'));
			}

			$user = $this->user->get($this->userid);

			// 如果用户有设置密码，测试原密码是否正确
			if ( $user['password'] and $this->user->password($post['password'],$user['salt']) != $user['password'] )
			{
				return $this->error(t('原密码错误，请重新输入'));
			}

			// 加密
			$post['newpassword'] = $this->user->password($post['newpassword'], $user['salt']);

			// 更新密码
			if ( $this->user->data('password',$post['newpassword'])->where('id', $this->userid)->update() )
			{
				return $this->success(t('修改成功'),u('member/index'));
			}

			return $this->error($this->user->error());
		}

		$data = $this->user->get($this->userid);

		$title = $data['password'] ? t('修改密码') : t('设置密码');

		$this->assign('title',$title);
		$this->assign('data',$data);
		$this->display();
	}

    /**
     * 检查用户名、邮箱是否被占用
     *
     * @return bool
     */
	public function action_check($key,$ignore='')
	{
		$ignore = empty($ignore) ? $_GET['ignore'] : $ignore;

		if ( empty($ignore) )
		{
			$count = $this->member->user->where($key,$_GET[$key])->count();
		}
		else
		{
			$count = $this->member->user->where($key,$_GET[$key])->where($key,'!=',$ignore)->count();
		}

		exit($count ? '"'.t('已经存在，请重新输入').'"' : 'true');
	}

    /**
     * 检查原密码是否正确
     *
     * @return bool
     */
	public function action_check_password()
	{
		$user = $this->user->get($this->userid);

		if ( $this->user->password($_GET['password'],$user['salt']) == $user['password'] )
		{
			echo 'true';
		}
		else
		{
			echo '"'.t('原密码错误，请重新输入').'"';
		}
		exit();
	}
}
?>