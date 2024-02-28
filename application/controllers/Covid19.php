<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Covid19 extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('COVID/Covid19_model','m_covid');
	}

	public function index()
	{
		$this->load->view('COVID/Covid19_view');
	}

	/* -------------------------------------------------------------------------- */
	/*                               Insert Records                               */
	/* -------------------------------------------------------------------------- */

	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('perner', 'Perner', 'required');
			$this->form_validation->set_rules('fungsi', 'Fungsi', 'required');
			$this->form_validation->set_rules('loker', 'Loker', 'required');
            $this->form_validation->set_rules('jenis_swab', 'Jenis SWAB', 'required');
            $this->form_validation->set_rules('loker', 'Loker', 'required');
            $this->form_validation->set_rules('update_kondisi', 'Update Kondisi', 'required');
            $this->form_validation->set_rules('tgl_positif', 'Tanggal Positif', 'required');
            // $this->form_validation->set_rules('tgl_negatif', 'Tanggal Negatif', 'required');
            $this->form_validation->set_rules('tgl_update_kondisi', 'Tanggal Update Kondisi', 'required');
            $this->form_validation->set_rules('hasil_swab', 'Hasil SWAB', 'required');
			// $this->form_validation->set_rules('img ', 'Evidence SWAB', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				if (isset($_FILES["img"]["name"])) {
					$config['upload_path'] = APPPATH . '../assets/uploads/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']     = '1000';
					// $config['max_width'] = '1024';
					// $config['max_height'] = '768';
					$this->load->library('upload', $config);
					// Upload.php line - 1097 public function display_errors($open = '<p>', $close = '</p>')

					if (!$this->upload->do_upload("img")) {
						$data = array('res' => "error", 'message' => $this->upload->display_errors());
					} else {
						$ajax_data = $this->input->post();
						$ajax_data['img'] = $this->upload->data('file_name');

						// if ($this->m_covid->insert_entry($ajax_data)) {
						// 	$data = array('res' => "success", 'message' => "Data added successfully");
						// } else {
						// 	$data = array('res' => "error", 'message' => "Failed to add data");
						// }
					}
				}
				$ajax_data['nama'] = $this->input->post('nama');
				$ajax_data['perner'] = $this->input->post('perner');
				$ajax_data['fungsi'] = $this->input->post('fungsi');
				$ajax_data['loker'] = $this->input->post('loker');
                $ajax_data['jenis_swab'] = $this->input->post('jenis_swab');
				$ajax_data['update_kondisi'] = $this->input->post('update_kondisi');
                $ajax_data['tgl_positif'] = $this->input->post('tgl_positif');
                $ajax_data['tgl_negatif'] = $this->input->post('tgl_negatif');
				$ajax_data['tgl_update_kondisi'] = $this->input->post('tgl_update_kondisi');
				$ajax_data['hasil_swab'] = $this->input->post('hasil_swab');
				if ($this->m_covid->insert_entry($ajax_data)) {
					$data = array('res' => "success", 'message' => "Data added successfully");
				} else {
					$data = array('res' => "error", 'message' => "Failed to add data");
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                                Fetch Records                               */
	/* -------------------------------------------------------------------------- */

	public function fetch()
	{
		$posts = $this->m_covid->get_entries();
		echo json_encode($posts);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Delete Records                               */
	/* -------------------------------------------------------------------------- */

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			$post = $this->m_covid->single_entry($del_id);

			unlink(APPPATH . '../assets/uploads/' . $post->img);

			if ($this->m_covid->delete_entry($del_id)) {
				$data = array('res' => "success", 'message' => "Data delete successfully");
			} else {
				$data = array('res' => "error", 'message' => "Delete query errors");
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                                Edit Records                                */
	/* -------------------------------------------------------------------------- */

	public function edit()
	{
		if ($this->input->is_ajax_request()) {

			$edit_id = $this->input->get('edit_id');

			if ($post = $this->m_covid->single_entry($edit_id)) {
				$data = array('res' => "success", 'post' => $post);
			} else {
				$data = array('res' => "error", 'message' => "Failed to fetch data");
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                               Update Records                               */
	/* -------------------------------------------------------------------------- */

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('perner', 'Perner', 'required');
			$this->form_validation->set_rules('fungsi', 'Fungsi', 'required');
			$this->form_validation->set_rules('loker', 'Loker', 'required');
            $this->form_validation->set_rules('jenis_swab', 'Jenis SWAB', 'required');
            $this->form_validation->set_rules('update_kondisi', 'Update Kondisi', 'required');
            $this->form_validation->set_rules('tgl_positif', 'Tanggal Positif', 'required');
            // $this->form_validation->set_rules('tgl_negatif', 'Tanggal Negatif', 'required');
            $this->form_validation->set_rules('tgl_update_kondisi', 'Tanggal Update Kondisi', 'required');
            $this->form_validation->set_rules('hasil_swab', 'Hasil SWAB', 'required');
			// $this->form_validation->set_rules('img ', 'Evidence SWAB', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				if (isset($_FILES["edit_img"]["name"])) {
					$config['upload_path'] = APPPATH . '../assets/uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '1000';
					// $config['max_width'] = '1024';
					// $config['max_height'] = '768';
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload("edit_img")) {
						$data = array('res' => "error", 'message' => $this->upload->display_errors());
					} else {
						$edit_id = $this->input->post('edit_id');
						if ($post = $this->m_covid->single_entry($edit_id)) {
							unlink(APPPATH . '../assets/uploads/' . $post->img);
							$ajax_data['img'] = $this->upload->data('file_name');
						}
					}
				}
				$id = $this->input->post('edit_id');
				$ajax_data['nama'] = $this->input->post('nama');
				$ajax_data['perner'] = $this->input->post('perner');
				$ajax_data['fungsi'] = $this->input->post('fungsi');
				$ajax_data['loker'] = $this->input->post('loker');
                $ajax_data['jenis_swab'] = $this->input->post('jenis_swab');
				$ajax_data['update_kondisi'] = $this->input->post('update_kondisi');
                $ajax_data['tgl_positif'] = $this->input->post('tgl_positif');
                $ajax_data['tgl_negatif'] = $this->input->post('tgl_negatif');
				$ajax_data['tgl_update_kondisi'] = $this->input->post('tgl_update_kondisi');
				$ajax_data['hasil_swab'] = $this->input->post('hasil_swab');
				if ($this->m_covid->update_entry($id, $ajax_data)) {
					$data = array('res' => "success", 'message' => "Data update successfully");
				} else {
					$data = array('res' => "error", 'message' => "Failed to update data");
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
}
