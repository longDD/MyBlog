<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.30
// +---------------------------------------------------------------------------------------------------
// | Description: photo模型
// +---------------------------------------------------------------------------------------------------

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function albums_add() {
        $data ['title'] = $this->input->post('title');
        $data ['descript'] = $this->input->post('descript');
        return $this->db->insert('albums', $data);
    }

    public function albums_list() {
        return $this->db->get('albums')->result_array();
    }

    public function photo_add($path) {
        $data['url'] = $path;
        $data['type'] = $this->input->post('albums');
        $data['title'] = $this->input->post('title');
        $data['uploadtime'] = time();
        return $this->db->insert('photo', $data);
    }

    public function photo_list($id) {
        $this->db->where('type', $id);
        return $this->db->get('photo')->result_array();
    }

}

/* End of file blog_model.php */
/* Location: ./application/model/blog_model.php */