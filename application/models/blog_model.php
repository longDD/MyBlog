<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.30
// +---------------------------------------------------------------------------------------------------
// | Description: blog模型
// +---------------------------------------------------------------------------------------------------

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Blog_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	
	// 添加
	public function add($data = FALSE) {
		if ($data === FALSE) {
			$data ['title'] = $this->input->post ( 'title' );
			$data ['content'] = $this->input->post ( 'content' );
			$data ['published'] = time ();
			$data ['type'] = $this->input->post ( 'type' );
			$data ['visits'] = '0';
			$data ['status'] = '1';
		}
		$rst = $this->db->insert ( 'blog', $data );
		$this->tags ( $this->db->insert_id () );
		return $rst;
	}
	
	// 处理标签
	public function tags($id = FALSE) {
		if ($id === FALSE) {
			return false;
			exit ();
		}
		$str = $this->input->post ( 'tags' );
		$arr = explode ( ',', $str );
		if (! empty ( $arr )) {
			foreach ( $arr as $v ) {
				// 判断标签是否存在
				$this->db->where ( 'title', $v );
				$tag_r = $this->db->get ( 'tag' );
				$count = $tag_r->num_rows ();
				if ($count >= 1) {
					$tab_a = $tag_r->first_row ( 'array' );
					$data2 ['tid'] = $tab_a['id'];
				} else {
					$data ['title'] = $v;
					$this->db->insert ( 'tag', $data );
					$data2 ['tid'] = $this->db->insert_id ();
				}
				
				$data2 ['bid'] = $id;
				$this->db->insert ( 'tag_blog', $data2 );
			}
		}
	}
	
	//取得标签
	public function tags_all(){
		return $this->db->get('tag')->result_array();
	}
	
	// 更新
	public function update($data = FALSE, $id = FALSE) {
		if ($id !== FALSE)
			$_POST ['id'] = $id;
		if ($data === FALSE) {
			$data ['title'] = $this->input->post ( 'title' );
			$data ['content'] = $this->input->post ( 'content' );
			$data ['published'] = time ();
			$data ['type'] = $this->input->post ( 'type' );
			$data ['tourviews'] = '0';
			$data ['status'] = '1';
			$this->db->where ( 'id', $this->input->post ( 'id' ) );
			return $this->db->update ( 'blog', $data );
		} else {
			$this->db->where ( 'id', $this->input->post ( 'id' ) );
			return $this->db->update ( 'blog', $data );
		}
	}
	
	// 删除
	public function del($id = FALSE) {
		if ($id === FALSE) {
			return FALSE;
		} else {
			$this->db->where ( 'id', $id );
			return $this->db->delete ( 'blog' );
		}
	}
	
	// 总条数
	public function total_rows($types = FALSE) {
		if ($types === FALSE) {
			return $this->db->count_all ( 'blog' );
		} else {
			$this->db->where ( 'type', $types );
			return $this->db->count_all_results ( 'blog' );
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
		
		$this->db->order_by ( 'published', 'desc' );
		return $this->db->get ( 'blog' )->result_array ();
	}
	
	// list
	public function get_list($rows = 10) {
		$this->db->limit ( $rows );
		$this->db->order_by ( 'published', 'desc' );
		$this->db->select ( 'id,title,published' );
		return $this->db->get ( 'blog' )->result_array ();
	}
	
	// 取一条内容
	public function get_one($id = FALSE) {
		if ($id === FALSE) {
			$this->db->limit ( 1 );
			$this->db->order_by ( 'published', 'desc' );
			return $this->get ( 'blog' )->result_array ();
		} else {
			$this->db->where ( 'id', $id );
			return $this->db->get ( 'blog' )->result_array ();
		}
	}
	// 上一条
	public function get_pre($id = FALSE) {
		if ($id === FALSE) {
			return false;
		} else {
			$this->db->where ( 'id <', $id );
			$this->db->limit ( 1 );
			$this->db->select ( 'id,title' );
			$rst = $this->db->get ( 'blog' )->result_array ();
			if (empty ( $rst )) {
				$rst [0] ['id'] = FALSE;
				$rst [0] ['title'] = '没有了';
			}
			return $rst;
		}
	}
	// 下一条
	public function get_next($id = FALSE) {
		if ($id === FALSE) {
			return false;
		} else {
			$this->db->where ( 'id >', $id );
			$this->db->limit ( 1 );
			$this->db->select ( 'id,title' );
			$rst = $this->db->get ( 'blog' )->result_array ();
			if (empty ( $rst )) {
				$rst [0] ['id'] = FALSE;
				$rst [0] ['title'] = '没有了';
			}
			return $rst;
		}
	}
}

/* End of file blog_model.php */
/* Location: ./application/model/blog_model.php */