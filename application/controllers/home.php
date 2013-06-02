<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.30
// +---------------------------------------------------------------------------------------------------
// | Description:前台控制
// +---------------------------------------------------------------------------------------------------

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	
	// 数据数组
	public $data = array ();
	function __construct() {
		parent::__construct ();
		$this->data = array ();
		$this->common ();
	}
	
	// 公用
	public function common() {
		// 分类
		$this->load->model ( 'blog_model' );
		$this->load->model ( 'blog_type_model' );
		$this->data ['types'] = $this->blog_type_model->get_all ();
		foreach ( $this->data ['types'] as $k => $v ) {
			$this->data ['types'] [$k] ['total'] = $this->blog_model->total_rows ( $v ['id'] );
		}
	}
	
	// 首页
	public function index() {
		// 内容
		$this->load->helper ( 'long_char' );
		$this->load->model ( 'blog_model' );
		$this->data ['list'] = $this->blog_model->get_rows ( 5 );
		
		// 评论数量
		$this->load->model ( 'comment_model' );
		foreach ( $this->data ['list'] as $k => $v ) {
			$this->data ['list'] [$k] ['comments'] = $this->comment_model->total_rows ( $v ['id'] );
		}
		
		// 标签
		$this->data ['tags'] = $this->blog_model->tags_all ();
		// 标签颜色样式
		$this->data ['tags_color'] = array (
				'badge',
				'badge badge-success',
				'badge badge-warning',
				'badge badge-important',
				'badge badge-info',
				'badge badge-inverse' 
		);
		
		$this->load->view ( 'home/header' );
		$this->load->view ( 'home/home', $this->data );
		$this->load->view ( 'home/footer' );
	}
	
	// 列表
	public function art_list($types = 0, $page = 0) {
		// 分页
		$this->load->library ( 'pagination' );
		$this->load->helper ( 'long_char' );
		$this->load->model ( 'blog_model' );
		
		$config ['base_url'] = site_url ( 'home/art_list/' . $types );
		$config ['per_page'] = 10;
		
		if ($types != 0) {
			$con ['type'] = $types;
			$config ['total_rows'] = $this->blog_model->total_rows ( $types );
			$this->data ['list'] = $this->blog_model->get_rows ( $config ['per_page'], $page, $con );
		} else {
			$config ['total_rows'] = $this->blog_model->total_rows ();
			$this->data ['list'] = $this->blog_model->get_rows ( $config ['per_page'], $page );
		}
		
		// 评论数量
		$this->load->model ( 'comment_model' );
		foreach ( $this->data ['list'] as $k => $v ) {
			$this->data ['list'] [$k] ['comments'] = $this->comment_model->total_rows ( $v ['id'] );
		}
		
		$this->pagination->initialize ( $config );
		$this->data ['page'] = $this->pagination->create_links ();
		
		$this->load->view ( 'home/header' );
		$this->load->view ( 'home/art_list', $this->data );
		$this->load->view ( 'home/footer' );
	}
	
	// 显示
	public function art_show($page) {
		$this->load->model ( 'blog_model' );
		$this->data ['info'] = $this->blog_model->get_one ( $page );
		
		// 阅读+1
		$con ['visits'] = $this->data ['info'] [0] ['visits'] + 1;
		$this->blog_model->update ( $con, $page );
		
		// 评论数量
		$this->load->model ( 'comment_model' );
		$this->data ['info'] [0] ['comments'] = $this->comment_model->total_rows ( $con ['visits'] = $this->data ['info'] [0] ['id'] );
		
		// 分类
		// 标签
		
		// 上一篇 下一篇
		$this->data ['pre'] = $this->blog_model->get_pre ( $page );
		$this->data ['next'] = $this->blog_model->get_next ( $page );
		
		// 评论
		$this->data ['coms'] = $this->comment_model->get_rows ();
		
		$this->load->view ( 'home/header' );
		$this->load->view ( 'home/art_show', $this->data );
		$this->load->view ( 'home/footer' );
	}
	
	// 添加评论
	public function add_comment() {
		$this->load->helper ( 'long_ajax' );
		$this->load->model ( 'comment_model' );
		$rst = $this->comment_model->add ();
		if ($rst) {
			$data = $this->input->post ();
			$info = '评论成功';
			$status = 1;
		} else {
			$data = 'error';
			$info = '失败';
			$status = 0;
		}
		ajaxReturn ( $data, $info, $status );
	}
	
	// 所有评论
	public function all_comment() {
		$this->load->helper ( 'long_ajax' );
		$this->load->model ( 'comment_model' );
		$data = $this->comment_model->get_all ( $this->input->post ( 'pid' ) );
		$data = array_slice ( $data, 5 );
		foreach ( $data as $k => $v ) {
			$data [$k] ['time'] = date ( 'Y-m-d H:i:s', $v ['time'] );
		}
		ajaxReturn ( $data );
	}
	
	// 关于我
	public function about() {
		$this->data ['title'] = '';
		$this->data ['content'] = '';
		
		$this->load->view ( 'home/header' );
		$this->load->view ( 'home/about', $this->data );
		$this->load->view ( 'home/footer' );
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */