<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCovid extends CI_Controller {

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
        $this->load->model("COVID/Dashboard_covid_model","m_dashboard");
        $this->load->library('form_validation');
    }


	public function index()
	{
        $total_tiap_segment = array (
            $this->m_dashboard->jml_sdm_segment1(),
            $this->m_dashboard->jml_sdm_segment2(),
            $this->m_dashboard->jml_sdm_segment3(),
            $this->m_dashboard->jml_sdm_segment4(),
            $this->m_dashboard->jml_sdm_segment5(),
            $this->m_dashboard->jml_sdm_segment6()
        );

        $jumlah_sudah_lapor = array (
            $this->m_dashboard->count_sudah_lapor_segment1(),
            $this->m_dashboard->count_sudah_lapor_segment2(),
            $this->m_dashboard->count_sudah_lapor_segment3(),
            $this->m_dashboard->count_sudah_lapor_segment4(),
            $this->m_dashboard->count_sudah_lapor_segment5(),
            $this->m_dashboard->count_sudah_lapor_segment6()
        );

        $jumlah_belum_lapor = array (
            $this->m_dashboard->count_belum_lapor_segment1(),
            $this->m_dashboard->count_belum_lapor_segment2(),
            $this->m_dashboard->count_belum_lapor_segment3(),
            $this->m_dashboard->count_belum_lapor_segment4(),
            $this->m_dashboard->count_belum_lapor_segment5(),
            $this->m_dashboard->count_belum_lapor_segment6()
        );

        $belum_lapor = array (
            '1' => round(($this->m_dashboard->count_belum_lapor_segment1() / $this->m_dashboard->jml_sdm_segment1()) * 100 ,2),
            '2' => round(($this->m_dashboard->count_belum_lapor_segment2() / $this->m_dashboard->jml_sdm_segment2()) * 100 ,2),
            '3' => round(($this->m_dashboard->count_belum_lapor_segment3() / $this->m_dashboard->jml_sdm_segment3()) * 100 ,2),
            '4' => round(($this->m_dashboard->count_belum_lapor_segment4() / $this->m_dashboard->jml_sdm_segment4()) * 100 ,2),
            '5' => round(($this->m_dashboard->count_belum_lapor_segment5() / $this->m_dashboard->jml_sdm_segment5()) * 100 ,2),
            '6' => round(($this->m_dashboard->count_belum_lapor_segment6() / $this->m_dashboard->jml_sdm_segment6()) * 100 ,2),
        );

        $sudah_lapor = array (
            '1' => round(($this->m_dashboard->count_sudah_lapor_segment1() / $this->m_dashboard->jml_sdm_segment1()) * 100 ,2),
            '2' => round(($this->m_dashboard->count_sudah_lapor_segment2() / $this->m_dashboard->jml_sdm_segment2()) * 100 ,2),
            '3' => round(($this->m_dashboard->count_sudah_lapor_segment3() / $this->m_dashboard->jml_sdm_segment3()) * 100 ,2),
            '4' => round(($this->m_dashboard->count_sudah_lapor_segment4() / $this->m_dashboard->jml_sdm_segment4()) * 100 ,2),
            '5' => round(($this->m_dashboard->count_sudah_lapor_segment5() / $this->m_dashboard->jml_sdm_segment5()) * 100 ,2),
            '6' => round(($this->m_dashboard->count_sudah_lapor_segment6() / $this->m_dashboard->jml_sdm_segment6()) * 100 ,2),
        );

        $sudah_vaksin1 = array (
            '1' => round(($this->m_dashboard->count_sudah_vaksin1_segment1() / $this->m_dashboard->jml_sdm_segment1()) * 100 ,2),
            '2' => round(($this->m_dashboard->count_sudah_vaksin1_segment2() / $this->m_dashboard->jml_sdm_segment2()) * 100 ,2),
            '3' => round(($this->m_dashboard->count_sudah_vaksin1_segment3() / $this->m_dashboard->jml_sdm_segment3()) * 100 ,2),
            '4' => round(($this->m_dashboard->count_sudah_vaksin1_segment4() / $this->m_dashboard->jml_sdm_segment4()) * 100 ,2),
            '5' => round(($this->m_dashboard->count_sudah_vaksin1_segment5() / $this->m_dashboard->jml_sdm_segment5()) * 100 ,2),
            '6' => round(($this->m_dashboard->count_sudah_vaksin1_segment6() / $this->m_dashboard->jml_sdm_segment6()) * 100 ,2),
        );

        $sudah_vaksin1_2 = array (
            '1' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment1() / $this->m_dashboard->jml_sdm_segment1()) * 100 ,2),
            '2' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment2() / $this->m_dashboard->jml_sdm_segment2()) * 100 ,2),
            '3' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment3() / $this->m_dashboard->jml_sdm_segment3()) * 100 ,2),
            '4' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment4() / $this->m_dashboard->jml_sdm_segment4()) * 100 ,2),
            '5' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment5() / $this->m_dashboard->jml_sdm_segment5()) * 100 ,2),
            '6' => round(($this->m_dashboard->count_sudah_vaksin1_2_segment6() / $this->m_dashboard->jml_sdm_segment6()) * 100 ,2),
        );

        $belum_vaksin = array (
            '1' => round(($this->m_dashboard->count_belum_vaksin_segment1() / $this->m_dashboard->jml_sdm_segment1()) * 100 ,2),
            '2' => round(($this->m_dashboard->count_belum_vaksin_segment2() / $this->m_dashboard->jml_sdm_segment2()) * 100 ,2),
            '3' => round(($this->m_dashboard->count_belum_vaksin_segment3() / $this->m_dashboard->jml_sdm_segment3()) * 100 ,2),
            '4' => round(($this->m_dashboard->count_belum_vaksin_segment4() / $this->m_dashboard->jml_sdm_segment4()) * 100 ,2),
            '5' => round(($this->m_dashboard->count_belum_vaksin_segment5() / $this->m_dashboard->jml_sdm_segment5()) * 100 ,2),
            '6' => round(($this->m_dashboard->count_belum_vaksin_segment6() / $this->m_dashboard->jml_sdm_segment6()) * 100 ,2),
        );

        // data graph treg
        $sudah_vaksin1_treg = array (
            '1' => $this->m_dashboard->count_sudah_vaksin1_treg1(),
            '2' => $this->m_dashboard->count_sudah_vaksin1_treg2(),
            '3' => $this->m_dashboard->count_sudah_vaksin1_treg3(),
            '4' => $this->m_dashboard->count_sudah_vaksin1_treg4(),
            '5' => $this->m_dashboard->count_sudah_vaksin1_treg5(),
            '6' => $this->m_dashboard->count_sudah_vaksin1_treg6(),
            '7' => $this->m_dashboard->count_sudah_vaksin1_treg7(),
        );

        $sudah_vaksin1_2_treg = array (
            '1' => $this->m_dashboard->count_sudah_vaksin1_2_treg1(),
            '2' => $this->m_dashboard->count_sudah_vaksin1_2_treg2(),
            '3' => $this->m_dashboard->count_sudah_vaksin1_2_treg3(),
            '4' => $this->m_dashboard->count_sudah_vaksin1_2_treg4(),
            '5' => $this->m_dashboard->count_sudah_vaksin1_2_treg5(),
            '6' => $this->m_dashboard->count_sudah_vaksin1_2_treg6(),
            '7' => $this->m_dashboard->count_sudah_vaksin1_2_treg7(),
        );

        $belum_vaksin_treg = array (
            '1' => $this->m_dashboard->count_belum_vaksin_treg1(),
            '2' => $this->m_dashboard->count_belum_vaksin_treg2(),
            '3' => $this->m_dashboard->count_belum_vaksin_treg3(),
            '4' => $this->m_dashboard->count_belum_vaksin_treg4(),
            '5' => $this->m_dashboard->count_belum_vaksin_treg5(),
            '6' => $this->m_dashboard->count_belum_vaksin_treg6(),
            '7' => $this->m_dashboard->count_belum_vaksin_treg7(),
        );

        $total_setiap_treg = array(
            '1' => $this->m_dashboard->count_belum_vaksin_treg1() + $this->m_dashboard->count_sudah_vaksin1_2_treg1() + $this->m_dashboard->count_sudah_vaksin1_treg1(),
            '2' => $this->m_dashboard->count_belum_vaksin_treg2() + $this->m_dashboard->count_sudah_vaksin1_2_treg2() + $this->m_dashboard->count_sudah_vaksin1_treg2(),
            '3' => $this->m_dashboard->count_belum_vaksin_treg3() + $this->m_dashboard->count_sudah_vaksin1_2_treg3() + $this->m_dashboard->count_sudah_vaksin1_treg3(),
            '4' => $this->m_dashboard->count_belum_vaksin_treg4() + $this->m_dashboard->count_sudah_vaksin1_2_treg4() + $this->m_dashboard->count_sudah_vaksin1_treg4(),
            '5' => $this->m_dashboard->count_belum_vaksin_treg5() + $this->m_dashboard->count_sudah_vaksin1_2_treg5() + $this->m_dashboard->count_sudah_vaksin1_treg5(),
            '6' => $this->m_dashboard->count_belum_vaksin_treg6() + $this->m_dashboard->count_sudah_vaksin1_2_treg6() + $this->m_dashboard->count_sudah_vaksin1_treg6(),
            '7' => $this->m_dashboard->count_belum_vaksin_treg7() + $this->m_dashboard->count_sudah_vaksin1_2_treg7() + $this->m_dashboard->count_sudah_vaksin1_treg7(),
        );

        $total_belum_lapor_setiap_treg = array(
            '1' => $this->m_dashboard->count_belum_lapor_treg1(),
            '2' => $this->m_dashboard->count_belum_lapor_treg2(),
            '3' => $this->m_dashboard->count_belum_lapor_treg3(),
            '4' => $this->m_dashboard->count_belum_lapor_treg4(),
            '5' => $this->m_dashboard->count_belum_lapor_treg5(),
            '6' => $this->m_dashboard->count_belum_lapor_treg6(),
            '7' => $this->m_dashboard->count_belum_lapor_treg7(),
        );

        $data['total_responden_percent'] = (array_sum($jumlah_sudah_lapor) / array_sum($total_tiap_segment)) * 100;
        $data['total_belum_responden_percent'] = (array_sum($jumlah_belum_lapor) / array_sum($total_tiap_segment)) * 100;
        $data['total_responden'] = array_sum($jumlah_sudah_lapor);
        $data['total_belum_responden'] = array_sum($jumlah_belum_lapor);
        $data['belum_lapor'] = $belum_lapor;
        $data['sudah_lapor'] = $sudah_lapor;
        $data['sudah_vaksin1'] = $sudah_vaksin1;
        $data['sudah_vaksin1_2'] = $sudah_vaksin1_2;
        $data['belum_vaksin'] = $belum_vaksin;

        $data['sudah_vaksin1_treg'] = $sudah_vaksin1_treg;
        $data['sudah_vaksin1_2_treg'] = $sudah_vaksin1_2_treg;
        $data['belum_vaksin_treg'] = $belum_vaksin_treg;
        $data['total_setiap_treg'] = $total_setiap_treg;
        $data['total_belum_lapor_setiap_treg'] = $total_belum_lapor_setiap_treg;

		$this->load->view('COVID/Dashboard_covid_view', $data);
	}

	// // function index(){
    // //     $x['kategori']=$this->crud_model->get_kategori();
    // //     $this->load->view('crud_view',$x);
    // //   }
     
    // public function ajax_list()
    // {
    //     $list = $this->m_vaksin->get_datatables();
    //     $data = array();
    //     $no = $_POST['start'];
    //     foreach ($list as $vaksin) {
    //         $no++;
    //         $row = array();
    //         $row[] = $vaksin->perner;
    //         $row[] = $vaksin->nama;
    //         $row[] = $vaksin->segment;
    //         $row[] = $vaksin->layanan;
    //         $row[] = $vaksin->site;
    //         $row[] = $vaksin->vaksin1;
    //         $row[] = $vaksin->vaksin2;
 
    //         //add html for action
    //         $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_vaksin('."'".$vaksin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
 
    //         $data[] = $row;
    //     }
 
    //     $output = array(
    //                     "draw" => $_POST['draw'],
    //                     "recordsTotal" => $this->m_vaksin->count_all(),
    //                     "recordsFiltered" => $this->m_vaksin->count_filtered(),
    //                     "data" => $data,
    //             );
    //     //output to json format
    //     echo json_encode($output);
    // }
 
    // public function ajax_edit($id)
    // {
    //     $data = $this->m_vaksin->get_by_id($id);
    //     echo json_encode($data);
    // }
 
    // public function ajax_add()
    // {
    //     $data = array(
    //             'perner' => $this->input->post('perner'),
    //             'nama' => $this->input->post('nama'),
    //             'segment' => $this->input->post('segment'),
    //             'layanan' => $this->input->post('layanan'),
    //             'site' => $this->input->post('site'),
    //             'vaksin1' => $this->input->post('vaksin1'),
    //             'vaksin2' => $this->input->post('vaksin2'),
    //         );
    //     $insert = $this->m_vaksin->save($data);
    //     echo json_encode(array("status" => TRUE));
    // }
 
    // public function ajax_update()
    // {
    //     $data = array(
    //             'perner' => $this->input->post('perner'),
    //             'nama' => $this->input->post('nama'),
    //             'segment' => $this->input->post('segment'),
    //             'layanan' => $this->input->post('layanan'),
    //             'site' => $this->input->post('site'),
    //             'vaksin1' => $this->input->post('vaksin1'),
    //             'vaksin2' => $this->input->post('vaksin2'),
    //         );
    //     $this->m_vaksin->update(array('id' => $this->input->post('id')), $data);
    //     echo json_encode(array("status" => TRUE));
    // }
 
    // public function ajax_delete($id)
    // {
    //     $this->m_vaksin->delete_by_id($id);
    //     echo json_encode(array("status" => TRUE));
    // }
     
}