<?php
class M_masa_khidmat extends CI_Model{
    public function SemuaData()
    {
    return $this->db->get('tbl_masa_khidmat')->result_array();
    }
    public function proses_tambah_data()
    {
       $data = [
          "masa_khidmat" => $this->input->post('masa_khidmat'),
       ];
       $this->db->insert('tbl_masa_khidmat',$data);
    }
    public function hapus_data($id_masa_khidmat)
    {
       $this->db->where('id_masa_khidmat', $id_masa_khidmat);
       $this->db->delete('tbl_masa_khidmat');
    }
    public function ambil_id_masa_khidmat($id_masa_khidmat)
    {
       return $this->db->get_where('tbl_masa_khidmat', ['id_masa_khidmat' => $id_masa_khidmat])->row_array();
    }
    public function proses_edit_data()
    {
       $data = [
          "masa_khidmat" => $this->input->post('masa_khidmat'),
       ];
       $this->db->where('id_masa_khidmat', $this->input->post('id_masa_khidmat'));
       $this->db->update('tbl_masa_khidmat', $data);
    }
    public function lihat_data($id_masa_khidmat)
    {
        return $this->db->get_where('tbl_masa_khidmat',['id_masa_khidmat'=> $id_masa_khidmat])->row_array();
    }
}
?>