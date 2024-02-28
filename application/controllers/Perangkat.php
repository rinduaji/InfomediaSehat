<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Perangkat/Perangkat_model","m_perangkat");
        $this->load->library('form_validation');
    }


	public function index()
	{
		$this->load->view('Home/Perangkat_wfh_view');
	}

	// function index(){
    //     $x['kategori']=$this->crud_model->get_kategori();
    //     $this->load->view('crud_view',$x);
    //   }
     
    public function ajax_list()
    {
        $list = $this->m_perangkat->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $perangkat) {
            $no++;
            $row = array();
            $row[] = $perangkat->login_avaya;
            $row[] = $perangkat->nama;
            $row[] = $perangkat->jabatan;
            $row[] = $perangkat->login_vpn;
            $row[] = $perangkat->Headset;
            $row[] = $perangkat->PC;
            $row[] = $perangkat->no_inventaris_pc;
            $row[] = $perangkat->Monitor;
            $row[] = $perangkat->no_inventaris_monitor;
            $row[] = $perangkat->Mouse;
            $row[] = $perangkat->Keyboard;
            $row[] = $perangkat->no_inventaris_keyboard;
 
            //add html for action
            // $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_perangkat('."'".$perangkat->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            //       <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_perangkat('."'".$perangkat->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_perangkat('."'".$perangkat->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_perangkat->count_all(),
                        "recordsFiltered" => $this->m_perangkat->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_perangkat->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'login_avaya' => $this->input->post('login_avaya'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'login_vpn' => $this->input->post('login_vpn'),
                'Headset' => $this->input->post('Headset'),
                'PC' => $this->input->post('PC'),
                'no_inventaris_pc' => $this->input->post('no_inventaris_pc'),
                'Monitor' => $this->input->post('Monitor'),
                'no_inventaris_monitor' => $this->input->post('no_inventaris_monitor'),
                'Mouse' => $this->input->post('Mouse'),
                'Keyboard' => $this->input->post('Keyboard'),
                'no_inventaris_keyboard' => $this->input->post('no_inventaris_keyboard'),
            );
        $insert = $this->m_perangkat->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
                'login_avaya' => $this->input->post('login_avaya'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'login_vpn' => $this->input->post('login_vpn'),
                'Headset' => $this->input->post('Headset'),
                'PC' => $this->input->post('PC'),
                'no_inventaris_pc' => $this->input->post('no_inventaris_pc'),
                'Monitor' => $this->input->post('Monitor'),
                'no_inventaris_monitor' => $this->input->post('no_inventaris_monitor'),
                'Mouse' => $this->input->post('Mouse'),
                'Keyboard' => $this->input->post('Keyboard'),
                'no_inventaris_keyboard' => $this->input->post('no_inventaris_keyboard'),
            );
        $this->m_perangkat->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->m_perangkat->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
     
}
