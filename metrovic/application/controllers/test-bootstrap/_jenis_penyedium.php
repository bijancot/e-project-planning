<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _jenis_penyedium extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_jenis_penyedium_model');
    } 

    /*
     * Listing of _jenis_penyedia
     */
    function index()
    {
        $data['_jenis_penyedia'] = $this->_jenis_penyedium_model->get_all__jenis_penyedia();
        
        $data['_view'] = '_jenis_penyedium/index';
        

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('_jenis_penyedium/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new _jenis_penyedium
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_penyedia' => $this->input->post('id_penyedia'),
				'id_p_penyedia' => $this->input->post('id_p_penyedia'),
				'id_p_swakelola' => $this->input->post('id_p_swakelola'),
            );
            
            $_jenis_penyedium_id = $this->_jenis_penyedium_model->add__jenis_penyedium($params);
            redirect('_jenis_penyedium/index');
        }
        else
        {
			$this->load->model('_penyedium_model');
			$data['all__penyedia'] = $this->_penyedium_model->get_all__penyedia();

			$this->load->model('Penyedium_model');
			$data['all_penyedia'] = $this->Penyedium_model->get_all_penyedia();

			$this->load->model('Swakelola_model');
			$data['all_swakelola'] = $this->Swakelola_model->get_all_swakelola();
            
            $data['_view'] = '_jenis_penyedium/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a _jenis_penyedium
     */
    function edit($id_jenis_penyedia)
    {   
        // check if the _jenis_penyedium exists before trying to edit it
        $data['_jenis_penyedium'] = $this->_jenis_penyedium_model->get__jenis_penyedium($id_jenis_penyedia);
        
        if(isset($data['_jenis_penyedium']['id_jenis_penyedia']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_penyedia' => $this->input->post('id_penyedia'),
					'id_p_penyedia' => $this->input->post('id_p_penyedia'),
					'id_p_swakelola' => $this->input->post('id_p_swakelola'),
                );

                $this->_jenis_penyedium_model->update__jenis_penyedium($id_jenis_penyedia,$params);            
                redirect('_jenis_penyedium/index');
            }
            else
            {
				$this->load->model('_penyedium_model');
				$data['all__penyedia'] = $this->_penyedium_model->get_all__penyedia();

				$this->load->model('Penyedium_model');
				$data['all_penyedia'] = $this->Penyedium_model->get_all_penyedia();

				$this->load->model('Swakelola_model');
				$data['all_swakelola'] = $this->Swakelola_model->get_all_swakelola();

                $data['_view'] = '_jenis_penyedium/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The _jenis_penyedium you are trying to edit does not exist.');
    } 

    /*
     * Deleting _jenis_penyedium
     */
    function remove($id_jenis_penyedia)
    {
        $_jenis_penyedium = $this->_jenis_penyedium_model->get__jenis_penyedium($id_jenis_penyedia);

        // check if the _jenis_penyedium exists before trying to delete it
        if(isset($_jenis_penyedium['id_jenis_penyedia']))
        {
            $this->_jenis_penyedium_model->delete__jenis_penyedium($id_jenis_penyedia);
            redirect('_jenis_penyedium/index');
        }
        else
            show_error('The _jenis_penyedium you are trying to delete does not exist.');
    }
    
}
