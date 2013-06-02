<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.30
// +---------------------------------------------------------------------------------------------------
// | Description: comment模型
// +---------------------------------------------------------------------------------------------------

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Comment_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	
	// 添加
	public function add($data = FALSE) {
		if ($data === FALSE) {
			$data ['content'] = $this->input->post ( 'content' );
			$data ['time'] = time ();
			$data ['author'] = $this->input->post ( 'author' );
			$data ['pid'] = $this->input->post ( 'pid' );
			return $this->db->insert ( 'comment', $data );
		} else {
			return $this->db->insert ( 'comment', $data );
		}
	}
	
	// 删除
	public function del($id = FALSE) {
		if ($id === FALSE) {
			return FALSE;
		} else {
			$this->db->where ( 'id', $id );
			return $this->db->delete ( 'comment' );
		}
	}
	
	// 总条数
	public function total_rows($pid = FALSE) {
		if ($pid === FALSE) {
			return $this->db->count_all ( 'comment' );
		} else {
			$this->db->where ( 'pid', $pid );
			return $this->db->count_all_results ( 'comment' );
		}
	}
	
	// 所有
	public function get_all($pid = FALSE) {
		if ($pid === FALSE) {
			return FALSE;
		} else {
			$this->db->where ( 'pid', $pid );
			return $this->db->get ( 'comment' )->result_array ();
		}
	}
	
	// 取n条
	public function get_rows($rows = 5, $start = FALSE, $where = FALSE) {
		if ($where !== FALSE) {
			$this->db->where ( $where );
		}
		if ($start === FALSE) {
			$this->db->limit ( $rows );
		} else {
			$this->db->limit ( $rows, $start );
		}
		
		$this->db->order_by ( 'time', 'desc' );
		return $this->db->get ( 'comment' )->result_array ();
	}
}

/* End of file comment_model.php */
/* Location: ./application/model/comment_model.php */