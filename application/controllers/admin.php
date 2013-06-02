<?php

// +---------------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself
// good enough.
// +---------------------------------------------------------------------------------------------------
// | Author: LongDD <741886920@qq.com> 2013.4.23
// +---------------------------------------------------------------------------------------------------
// | Description: 后台控制
// +---------------------------------------------------------------------------------------------------

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->checkLogin();
    }

    // 登陆检测
    private function checkLogin() {
        if (uri_string() == 'admin/index') {
            return FALSE;
        } else {
            if (isset($_SESSION ['admin_name']) && isset($_SESSION ['admin_id'])) {
                return false;
            } else {
                header('Location:' . base_url('index.php/admin/index'));
            }
        }
    }

    // 提示并跳转
    public function jump($msg = '<p>error</p>', $url = null) {
        $data ['url'] = empty($url) ? 'window.history.back()' : 'window.location.href="' . $url . '"';
        $data ['msg'] = $msg;
        $this->load->view('common/jump', $data);
    }

    // 成功页面
    public function success($msg, $url = null) {
        $this->jump('<p class="text-success">Success:' . $msg . '</p>', $url);
    }

    // 错误页面
    public function error($msg, $url = null) {
        $this->jump('<p class="text-error">Error:' . $msg . '</p>', $url);
    }

    // 登陆页
    public function index() {
        if (isset($_POST ['username'])) {
            $this->load->database();
            $sql = 'select * from mylog_admin where name="' . $this->input->post('username') . '"';
            $rst = $this->db->query($sql);
            if ($rst->num_rows() >= 1) {
                $info = $rst->result();
                if ($info [0]->password == md5($this->input->post('password'))) {
                    $_SESSION ['admin_name'] = $info [0]->name;
                    $_SESSION ['admin_id'] = $info [0]->id;
                    $this->success('登录成功', site_url('admin/home'));
                } else {
                    $this->error('用户名或密码错误');
                }
            } else {
                $this->error('用户不存在');
            }
        } else {
            $this->load->view('admin/login');
        }
    }

    // 退出
    public function loginOut() {
        unset($_SESSION ['admin_name']);
        unset($_SESSION ['admin_id']);
        session_destroy();
        $this->load->view('admin/login');
    }

    // 后台首页
    public function home() {
        $this->load->view('admin/home');
    }

    // 顶部
    public function top() {
        $this->load->view('admin/top');
    }

    // 左侧
    public function left($page = 'left') {
        $this->load->view('admin/' . $page);
    }

    // 主体
    public function main($page = 'main') {
        $this->load->database();
        // apache版本 # php版本
        $match = array();
        preg_match('/Apache\/(.*)PHP\/(.*)/is', $_SERVER ['SERVER_SOFTWARE'], $match);
        $ser ['apache'] = $match [1];
        $ser ['php'] = $match [2];
        // mysql版本
        $ser ['mysql'] = mysql_get_server_info();
        // 可用空间
        $ser ['freeSpace'] = getRealSize(disk_free_space('/'));
        // 上传文件大小
        $ser ['upload'] = getRealSize(getDirSize('./Upload'));
        // 文章数量
        $query1 = "select id from mylog_blog";
        $rst1 = $this->db->query($query1);
        $ser ['blogs'] = $rst1->num_rows();
        // 图片数量
        $query2 = "select id from mylog_photo";
        $rst2 = $this->db->query($query2);
        $ser ['photos'] = $rst2->num_rows();
        // 评论
        $query3 = "select id from mylog_comment";
        $rst3 = $this->db->query($query3);
        $ser ['comments'] = $rst3->num_rows();

        $this->load->view('admin/' . $page, $ser);
    }

    // ##################################################################
    // article
    // ##################################################################
    public function art_add() {
        if (isset($_POST ['title'])) {
            $this->load->model('blog_model');
            $rst = $this->blog_model->add();

            print_r($rst);
        } else {
            // 分类
            $this->load->model('blog_type_model');
            $arr = $this->blog_type_model->get_all();
            $this->load->library('Tree', $arr);
            $data ['tree'] = $this->tree->get_tree();

            $this->load->view('admin/art_add', $data);
        }
    }

    public function art_list($page = 0) {
        $this->load->library('pagination');
        $this->load->model('blog_model');

        $config ['base_url'] = site_url('admin/art_list');
        $config ['total_rows'] = $this->blog_model->total_rows();
        $config ['per_page'] = 10;
        $this->pagination->initialize($config);

        $data ['page'] = $this->pagination->create_links();
        $data ['list'] = $this->blog_model->get_rows($config ['per_page'], $page);

        $this->load->view('admin/art_list', $data);
    }

    public function art_del($id) {
        $this->load->model('blog_model');
        $rst = $this->blog_model->del($id);
        print_r($rst);
    }

    public function art_type_list() {
        $this->load->model('blog_type_model');
        $arr = $this->blog_type_model->get_all();
        $this->load->library('Tree', $arr);
        $data ['list'] = $this->tree->get_tree('0', "<li><a href='#'>\$spacer\$title</a>-----------<span><a href='" . site_url('admin/art_type_del') . "/\$id'>删除</a><span></li>");
        $data ['tree'] = $this->tree->get_tree();
        $this->load->view('admin/type_list', $data);
    }

    public function art_type_del($id) {
        $this->load->model('blog_type_model');
        $rst = $this->blog_type_model->del($id);
        print_r($rst);
    }

    public function art_type_add() {
        $this->load->model('blog_type_model');
        $rst = $this->blog_type_model->add();
        print_r($rst);
    }

    // ##################################################################
    // photo
    // ##################################################################
    public function albums_list() {
        $this->load->model('photo_model');
        $data ['albums'] = $this->photo_model->albums_list();
        $this->load->view('admin/albums_list', $data);
    }

    public function albums_add() {
        if (isset($_POST ['title'])) {
            $this->load->model('photo_model');
            if ($this->photo_model->albums_add()) {
                $this->success('添加成功');
            } else {
                $this->error('添加成功');
            }
        } else {
            $this->load->view('admin/albums_add');
        }
    }

    public function albums_del($id) {
        $this->load->model('photo_model');
        if ($this->photo_model->albums_del($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    public function photo_add() {
        if (isset($_POST ['title'])) {
            $this->load->model('photo_model');
            if ($this->photo_model->photo_add()) {
                $this->success('添加成功');
            } else {
                $this->error('添加成功');
            }
        } else {
            $this->load->view('admin/photo_add');
        }
    }

    public function photo_del($id) {
        $this->load->model('photo_model');
        if ($this->photo_model->photo_del($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    public function photo_list($id) {
        $this->load->model('photo_model');
        $data['list'] = $this->photo_model->photo_list($id);
        $this->load->view('admin/photo_list', $data);
    }

    public function img_upload() {
        $config['upload_path'] = './Upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            print_r($this->upload->display_errors());
        } else {
            $rst = $this->upload->data();
            $this->load->model('photo_model');
            $this->photo_model->photo_add(base_url('Upload/' . $rst['file_name']));
            echo "<img src='" . base_url('Upload/' . $rst['file_name']) . "'/>";
        }
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */