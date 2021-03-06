<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Metode extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Metode_model');
    } 

    /*
     * Listing of metode
     */
    function index()
    {
        $data['metode'] = $this->Metode_model->get_all_metode();
        
        $data['_view'] = 'metode/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new metode
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nm_metode' => $this->input->post('nm_metode'),
            );
            
            $metode_id = $this->Metode_model->add_metode($params);
            redirect('metode/index');
        }
        else
        {            
            $data['_view'] = 'metode/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a metode
     */
    function edit($id_metode)
    {   
        // check if the metode exists before trying to edit it
        $data['metode'] = $this->Metode_model->get_metode($id_metode);
        
        if(isset($data['metode']['id_metode']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nm_metode' => $this->input->post('nm_metode'),
                );

                $this->Metode_model->update_metode($id_metode,$params);            
                redirect('metode/index');
            }
            else
            {
                $data['_view'] = 'metode/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The metode you are trying to edit does not exist.');
    } 

    /*
     * Deleting metode
     */
    function remove($id_metode)
    {
        $metode = $this->Metode_model->get_metode($id_metode);

        // check if the metode exists before trying to delete it
        if(isset($metode['id_metode']))
        {
            $this->Metode_model->delete_metode($id_metode);
            redirect('metode/index');
        }
        else
            show_error('The metode you are trying to delete does not exist.');
    }
    
}
