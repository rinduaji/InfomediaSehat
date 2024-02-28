<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaksin extends CI_Controller {

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
        $this->load->model("COVID/Vaksin_model","m_vaksin");
        $this->load->library('form_validation');
    }


	public function index()
	{
        $data['data_layanan'] = $this->m_vaksin->get_layanan();
        $data['data_site'] = $this->m_vaksin->get_site();
		$this->load->view('COVID/Vaksin_view',$data);
	}

	// function index(){
    //     $x['kategori']=$this->crud_model->get_kategori();
    //     $this->load->view('crud_view',$x);
    //   }
     
    public function ajax_list()
    {
        $list = $this->m_vaksin->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $vaksin) {
            $no++;
            $row = array();
            $row[] = $vaksin->perner;
            $row[] = $vaksin->nama;
            $row[] = $vaksin->segment;
            $row[] = $vaksin->layanan;
            $row[] = $vaksin->site;
            $row[] = $vaksin->treg;
            $row[] = $vaksin->status_sdm;
            $row[] = $vaksin->vaksin1;
            $row[] = $vaksin->vaksin2;
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_vaksin('."'".$vaksin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_vaksin->count_all(),
                        "recordsFiltered" => $this->m_vaksin->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_vaksin->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'perner' => $this->input->post('perner'),
                'nama' => $this->input->post('nama'),
                'segment' => $this->input->post('segment'),
                'layanan' => $this->input->post('layanan'),
                'site' => $this->input->post('site'),
                'treg' => $this->input->post('treg'),
                'status_sdm' => $this->input->post('status_sdm'),
                'vaksin1' => $this->input->post('vaksin1'),
                'vaksin2' => $this->input->post('vaksin2'),
                'lup' => date("Y-m-d"),
            );
        $insert = $this->m_vaksin->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
                'perner' => $this->input->post('perner'),
                'nama' => $this->input->post('nama'),
                'segment' => $this->input->post('segment'),
                'layanan' => $this->input->post('layanan'),
                'site' => $this->input->post('site'),
                'treg' => $this->input->post('treg'),
                'status_sdm' => $this->input->post('status_sdm'),
                'vaksin1' => $this->input->post('vaksin1'),
                'vaksin2' => $this->input->post('vaksin2'),
                'lup' => date("Y-m-d"),
            );
        $this->m_vaksin->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->m_vaksin->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function search_segment($layanan)
    {   
        $data = $this->m_vaksin->get_by_id_layanan(urldecode($layanan));
        echo json_encode($data);
    }

    public function search_treg($site)
    {   
        $data = $this->m_vaksin->get_by_id_treg(urldecode($site));
        echo json_encode($data);
    }
}