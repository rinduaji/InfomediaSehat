<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_covid_model extends CI_Model {
    var $table = 'vaksin';
    var $column_order = array('perner','nama','segment','layanan','site','vaksin1','vaksin2',null); //set column field database for datatable orderable
    var $column_search = array('perner','nama','segment','layanan','site','vaksin1','vaksin2'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('perner' => 'asc'); // default order 

    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
 
    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
 
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
 
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    public function jml_sdm_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1'));
        return $query->num_rows();
    }

    public function jml_sdm_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2'));
        return $query->num_rows();
    }

    public function jml_sdm_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3'));
        return $query->num_rows();
    }

    public function jml_sdm_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4'));
        return $query->num_rows();
    }

    public function jml_sdm_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5'));
        return $query->num_rows();
    }

    public function jml_sdm_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }


    public function count_sudah_lapor_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_lapor_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_lapor_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_lapor_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_lapor_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_lapor_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6', 'vaksin1 <>' => 'NO ENTRY', 'vaksin2 <>' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment1() {
        $query = $this->db->get_where($this->table,array('segment' => '1', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment2() {
        $query = $this->db->get_where($this->table,array('segment' => '2', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment3() {
        $query = $this->db->get_where($this->table,array('segment' => '3', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment4() {
        $query = $this->db->get_where($this->table,array('segment' => '4', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment5() {
        $query = $this->db->get_where($this->table,array('segment' => '5', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_segment6() {
        $query = $this->db->get_where($this->table,array('segment' => '6', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function jml_sdm_treg1() {
        $query = $this->db->get_where($this->table,array('treg' => '1'));
        return $query->num_rows();
    }

    public function jml_sdm_treg2() {
        $query = $this->db->get_where($this->table,array('treg' => '2'));
        return $query->num_rows();
    }

    public function jml_sdm_treg3() {
        $query = $this->db->get_where($this->table,array('treg' => '3'));
        return $query->num_rows();
    }

    public function jml_sdm_treg4() {
        $query = $this->db->get_where($this->table,array('treg' => '4'));
        return $query->num_rows();
    }

    public function jml_sdm_treg5() {
        $query = $this->db->get_where($this->table,array('treg' => '5'));
        return $query->num_rows();
    }

    public function jml_sdm_treg6() {
        $query = $this->db->get_where($this->table,array('treg' => '6'));
        return $query->num_rows();
    }

    public function jml_sdm_treg7() {
        $query = $this->db->get_where($this->table,array('treg' => '7'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg1() {
        $query = $this->db->get_where($this->table,array('treg' => '1', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg2() {
        $query = $this->db->get_where($this->table,array('treg' => '2', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg3() {
        $query = $this->db->get_where($this->table,array('treg' => '3', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg4() {
        $query = $this->db->get_where($this->table,array('treg' => '4', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg5() {
        $query = $this->db->get_where($this->table,array('treg' => '5', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg6() {
        $query = $this->db->get_where($this->table,array('treg' => '6', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_treg7() {
        $query = $this->db->get_where($this->table,array('treg' => '7', 'vaksin1' => 'SUDAH', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg1() {
        $query = $this->db->get_where($this->table,array('treg' => '1', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg2() {
        $query = $this->db->get_where($this->table,array('treg' => '2', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg3() {
        $query = $this->db->get_where($this->table,array('treg' => '3', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg4() {
        $query = $this->db->get_where($this->table,array('treg' => '4', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg5() {
        $query = $this->db->get_where($this->table,array('treg' => '5', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg6() {
        $query = $this->db->get_where($this->table,array('treg' => '6', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_sudah_vaksin1_2_treg7() {
        $query = $this->db->get_where($this->table,array('treg' => '7', 'vaksin1' => 'SUDAH', 'vaksin2' => 'SUDAH'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg1() {
        $query = $this->db->get_where($this->table,array('treg' => '1', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg2() {
        $query = $this->db->get_where($this->table,array('treg' => '2', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg3() {
        $query = $this->db->get_where($this->table,array('treg' => '3', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg4() {
        $query = $this->db->get_where($this->table,array('treg' => '4', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg5() {
        $query = $this->db->get_where($this->table,array('treg' => '5', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg6() {
        $query = $this->db->get_where($this->table,array('treg' => '6', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_vaksin_treg7() {
        $query = $this->db->get_where($this->table,array('treg' => '7', 'vaksin1' => 'BELUM', 'vaksin2' => 'BELUM'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg1() {
        $query = $this->db->get_where($this->table,array('treg' => '1', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg2() {
        $query = $this->db->get_where($this->table,array('treg' => '2', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg3() {
        $query = $this->db->get_where($this->table,array('treg' => '3', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg4() {
        $query = $this->db->get_where($this->table,array('treg' => '4', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg5() {
        $query = $this->db->get_where($this->table,array('treg' => '5', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg6() {
        $query = $this->db->get_where($this->table,array('treg' => '6', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

    public function count_belum_lapor_treg7() {
        $query = $this->db->get_where($this->table,array('treg' => '7', 'vaksin1' => 'NO ENTRY', 'vaksin2' => 'NO ENTRY'));
        return $query->num_rows();
    }

}
?>