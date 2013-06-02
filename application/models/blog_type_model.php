<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself good enough. 
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.30
// +---------------------------------------------------------------------------------------------------
// | Description: blog_type模型
// +---------------------------------------------------------------------------------------------------

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_type_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //添加
    public function add($data = FALSE) {
        if ($data === FALSE) {
            $data['title'] = $this->input->post('title');
            $data['pid'] = $this->input->post('pid');
            $data['descript'] = $this->input->post('descript');
            return $this->db->insert('blog_type', $data);
        } else {
            return $this->db->insert('blog_type', $data);
        }
    }

    //更新
    public function update($data = FALSE) {
        if ($data === FALSE) {
            $data['title'] = $this->input->post('title');
            $data['pid'] = $this->input->post('pid');
            $data['descript'] = $this->input->post('descript');
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('blog_type', $data);
        } else {
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('blog_type', $data);
        }
    }

    //删除
    public function del($id = FALSE) {
        if ($id === FALSE) {
            return FALSE;
        } else {
            $this->db->where('id', $id);
            return $this->db->delete('blog_type');
        }
    }

    //总条数
    public function total_rows() {
        return $this->db->count_all('blog_type');
    }

    //取所有
    public function get_all() {
        $rst = $this->db->get('blog_type')->result_array();
        return $rst;
    }

    //取一条内容
    public function get_one($id = FALSE) {
        if ($id === FALSE) {
            $this->db->limit(1);
            return $this->get('blog_type')->result_array();
        } else {
            $this->db->where('id', $id);
            return $this->db->get('blog_type')->result_array();
        }
    }

}

/* End of file blog_type_model.php */
/* Location: ./application/model/blog_type_model.php */