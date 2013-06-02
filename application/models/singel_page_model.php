<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.5.19
// +---------------------------------------------------------------------------------------------------
// | Description: photo模型
// +---------------------------------------------------------------------------------------------------

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class single_page_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

}

/* End of file blog_model.php */
/* Location: ./application/model/blog_model.php */