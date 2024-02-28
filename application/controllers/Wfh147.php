<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wfh147 extends CI_Controller {

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
        $this->load->model("Vpn/Vpn_model","m_vpn");
        $this->load->library('form_validation');
    }


	public function index()
	{
		$this->load->view('Home/Agent_wfh147_view');
	}

	// function index(){
    //     $x['kategori']=$this->crud_model->get_kategori();
    //     $this->load->view('crud_view',$x);
    //   }
     
    public function ajax_list()
    {
        $list = $this->m_vpn->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $vpn) {
            $no++;
            $row = array();
            $row[] = $vpn->login_avaya;
            $row[] = $vpn->nama;
            $row[] = $vpn->jabatan;
            $row[] = $vpn->login_vpn;
            $row[] = $vpn->extention;
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_vpn('."'".$vpn->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_vpn('."'".$vpn->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_vpn->count_all(),
                        "recordsFiltered" => $this->m_vpn->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_vpn->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'login_avaya' => $this->input->post('login_avaya'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'login_vpn' => $this->input->post('login_vpn'),
                'extention' => $this->input->post('extention'),
            );
        $insert = $this->m_vpn->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
                'login_avaya' => $this->input->post('login_avaya'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'login_vpn' => $this->input->post('login_vpn'),
                'extention' => $this->input->post('extention'),
            );
        $this->m_vpn->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->m_vpn->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
     
}
