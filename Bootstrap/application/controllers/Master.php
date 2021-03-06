<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
    } 

    /*
     * Listing of master
     */
    function index()
    {
        $data['master'] = $this->Master_model->get_all_master();
        
        $data['_view'] = 'master/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new master
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tahun' => $this->input->post('tahun'),
				'kode_daerah' => $this->input->post('kode_daerah'),
				'kd_rek_1' => $this->input->post('kd_rek_1'),
				'nm_rek_1' => $this->input->post('nm_rek_1'),
				'kd_rek_2' => $this->input->post('kd_rek_2'),
				'nm_rek_2' => $this->input->post('nm_rek_2'),
				'kd_rek_3' => $this->input->post('kd_rek_3'),
				'nm_rek_3' => $this->input->post('nm_rek_3'),
				'kd_rek_4' => $this->input->post('kd_rek_4'),
				'nm_rek_4' => $this->input->post('nm_rek_4'),
				'kd_rek_5' => $this->input->post('kd_rek_5'),
				'nm_rek_5' => $this->input->post('nm_rek_5'),
				'kd_urusan' => $this->input->post('kd_urusan'),
				'nm_urusan' => $this->input->post('nm_urusan'),
				'kd_bidang' => $this->input->post('kd_bidang'),
				'nm_bidang' => $this->input->post('nm_bidang'),
				'kd_unit' => $this->input->post('kd_unit'),
				'nm_unit' => $this->input->post('nm_unit'),
				'kd_sub' => $this->input->post('kd_sub'),
				'nm_sub' => $this->input->post('nm_sub'),
				'kd_prog' => $this->input->post('kd_prog'),
				'ket_program' => $this->input->post('ket_program'),
				'kd_keg' => $this->input->post('kd_keg'),
				'nm_kegiatan' => $this->input->post('nm_kegiatan'),
				'kd_ket' => $this->input->post('kd_ket'),
				'keterangan' => $this->input->post('keterangan'),
				'no_id' => $this->input->post('no_id'),
				'rincian' => $this->input->post('rincian'),
				'jumlah' => $this->input->post('jumlah'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'kd_fungsi' => $this->input->post('kd_fungsi'),
				'nm_fungsi' => $this->input->post('nm_fungsi'),
				'kd_urusan1' => $this->input->post('kd_urusan1'),
				'nm_urusan1' => $this->input->post('nm_urusan1'),
				'kd_bidang1' => $this->input->post('kd_bidang1'),
				'nm_bidang1' => $this->input->post('nm_bidang1'),
				'total' => $this->input->post('total'),
				'id_skpd' => $this->input->post('id_skpd'),
            );
            
            $master_id = $this->Master_model->add_master($params);
            redirect('master/index');
        }
        else
        {            
            $data['_view'] = 'master/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a master
     */
    function edit($id_master)
    {   
        // check if the master exists before trying to edit it
        $data['master'] = $this->Master_model->get_master($id_master);
        
        if(isset($data['master']['id_master']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tahun' => $this->input->post('tahun'),
					'kode_daerah' => $this->input->post('kode_daerah'),
					'kd_rek_1' => $this->input->post('kd_rek_1'),
					'nm_rek_1' => $this->input->post('nm_rek_1'),
					'kd_rek_2' => $this->input->post('kd_rek_2'),
					'nm_rek_2' => $this->input->post('nm_rek_2'),
					'kd_rek_3' => $this->input->post('kd_rek_3'),
					'nm_rek_3' => $this->input->post('nm_rek_3'),
					'kd_rek_4' => $this->input->post('kd_rek_4'),
					'nm_rek_4' => $this->input->post('nm_rek_4'),
					'kd_rek_5' => $this->input->post('kd_rek_5'),
					'nm_rek_5' => $this->input->post('nm_rek_5'),
					'kd_urusan' => $this->input->post('kd_urusan'),
					'nm_urusan' => $this->input->post('nm_urusan'),
					'kd_bidang' => $this->input->post('kd_bidang'),
					'nm_bidang' => $this->input->post('nm_bidang'),
					'kd_unit' => $this->input->post('kd_unit'),
					'nm_unit' => $this->input->post('nm_unit'),
					'kd_sub' => $this->input->post('kd_sub'),
					'nm_sub' => $this->input->post('nm_sub'),
					'kd_prog' => $this->input->post('kd_prog'),
					'ket_program' => $this->input->post('ket_program'),
					'kd_keg' => $this->input->post('kd_keg'),
					'nm_kegiatan' => $this->input->post('nm_kegiatan'),
					'kd_ket' => $this->input->post('kd_ket'),
					'keterangan' => $this->input->post('keterangan'),
					'no_id' => $this->input->post('no_id'),
					'rincian' => $this->input->post('rincian'),
					'jumlah' => $this->input->post('jumlah'),
					'satuan' => $this->input->post('satuan'),
					'harga' => $this->input->post('harga'),
					'kd_fungsi' => $this->input->post('kd_fungsi'),
					'nm_fungsi' => $this->input->post('nm_fungsi'),
					'kd_urusan1' => $this->input->post('kd_urusan1'),
					'nm_urusan1' => $this->input->post('nm_urusan1'),
					'kd_bidang1' => $this->input->post('kd_bidang1'),
					'nm_bidang1' => $this->input->post('nm_bidang1'),
					'total' => $this->input->post('total'),
					'id_skpd' => $this->input->post('id_skpd'),
                );

                $this->Master_model->update_master($id_master,$params);            
                redirect('master/index');
            }
            else
            {
                $data['_view'] = 'master/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The master you are trying to edit does not exist.');
    } 

    /*
     * Deleting master
     */
    function remove($id_master)
    {
        $master = $this->Master_model->get_master($id_master);

        // check if the master exists before trying to delete it
        if(isset($master['id_master']))
        {
            $this->Master_model->delete_master($id_master);
            redirect('master/index');
        }
        else
            show_error('The master you are trying to delete does not exist.');
    }
    
}
