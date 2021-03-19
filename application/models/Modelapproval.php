<?php
class Modelapproval extends CI_Model {

	public function getdatamahasiswa()
	{
        $query = $this->db->where('nama_dsn',$this->session->userdata('nama_dsn'))
        ->get('mahasiswa')->result_array();
        return $query;
    }
    
    public function getdataapprove($nrp)
	{
        $query = $this->db->join('matakuliah','matakuliah.kode_mk=krsbaru.kode_mk')
        ->join('jadwal','jadwal.id_jadwal=krsbaru.kelas')
        ->where('nrp',$nrp)
        ->get('krsbaru')->result_array();
        return $query;
    }
    
     public function updatedatadosen($data)
    {
        $update = $this->db->update('dosen',$data);
        if ($update){
            return TRUE;
        }
        else 
        {
        return FALSE;
        }
    } 
}