<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom extends CI_Controller {

    public function __construct(){
       parent::__construct(); 
       $this->load->model('common_model');
    }
    public function index(){
        // parent::__construct();
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index',$data);
    }

    public function test(){
        // parent::__construct();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/main-test');
        $this->load->view('template/footer');
    }

}