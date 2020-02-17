<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bidang extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bidang_model');
    } 

    /*
     * Listing of bidang
     */
    function index()
    {
        $data['bidang'] = $this->Bidang_model->get_all_bidang();
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('bidang/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new bidang
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_urusan' => $this->input->post('id_urusan'),
				'kode_bidang' => $this->input->post('kode_bidang'),
				'nama_bidang' => $this->input->post('nama_bidang'),
            );
            
            $bidang_id = $this->Bidang_model->add_bidang($params);
            redirect('bidang/index');
        }
        else
        {
			$this->load->model('Urusan_model');
			$data['all_urusan'] = $this->Urusan_model->get_all_urusan();
            
            $data['_view'] = 'bidang/add';
            //$this->load->view('layouts/main',$data);

             $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('bidang/add',$data);
            $this->load->view('template/footer');

        }
    }  

    /*
     * Editing a bidang
     */
    function edit($id_bidang)
    {   
        // check if the bidang exists before trying to edit it
        $data['bidang'] = $this->Bidang_model->get_bidang($id_bidang);
        
        if(isset($data['bidang']['id_bidang']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_urusan' => $this->input->post('id_urusan'),
					'kode_bidang' => $this->input->post('kode_bidang'),
					'nama_bidang' => $this->input->post('nama_bidang'),
                );

                $this->Bidang_model->update_bidang($id_bidang,$params);            
                redirect('test-bootstrap/bidang/index');
            }
            else
            {
				$this->load->model('Urusan_model');
				$data['all_urusan'] = $this->Urusan_model->get_all_urusan();

                $data['_view'] = 'bidang/edit';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('bidang/edit',$data);
                $this->load->view('template/footer');
            }
        }
        else
            show_error('The bidang you are trying to edit does not exist.');
    } 

    /*
     * Deleting bidang
     */
    function remove($id_bidang)
    {
        $bidang = $this->Bidang_model->get_bidang($id_bidang);

        // check if the bidang exists before trying to delete it
        if(isset($bidang['id_bidang']))
        {
            $this->Bidang_model->delete_bidang($id_bidang);
            redirect('bidang/index');
        }
        else
            show_error('The bidang you are trying to delete does not exist.');
    }
    
}
