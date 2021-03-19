<?php
class Modelperwalian extends CI_Model {

    public function getdatajadwal()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester',$this->session->userdata('semester'))
        ->get('matakuliah')->result_array();
        return $query;
    }

    public function getdatajadwal1()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','1')
        ->get('matakuliah')->result_array();
        return $query;
    }

     public function getdatajadwal2()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','2')
        ->get('matakuliah')->result_array();
        return $query;
    }
    
     public function getdatajadwal3()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','3')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwal4()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','4')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwal5()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','5')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwal6()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','6')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwal7()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','7')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwal8()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','8')
        ->get('matakuliah')->result_array();
        return $query;
    }
     public function getdatajadwalsemua()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->get('matakuliah')->result_array();
        return $query;
    }

    public function getdataperwalian()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester',$this->session->userdata('semester'))
        ->get('matakuliah')->result_array();
        return $query;
    }
    
    public function getdataperwalian1()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','1')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian2()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','2')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian3()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','3')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian4()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','4')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian5()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','5')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian6()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','6')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian7()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','7')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwalian8()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->where('semester','8')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function getdataperwaliansemua()
	{
        $query = $this->db->select('jadwal.id_jadwal, matakuliah.kode_mk, matakuliah.nama_mk, matakuliah.sks, matakuliah.semester, jadwal.kelas, jadwal.hari, jadwal.jam')
        ->join('jadwal','jadwal.kode_mk=matakuliah.kode_mk')
        ->get('matakuliah')->result_array();
        return $query;
    }
    public function insertdataperwalian($data)
    {
        $insert = $this->db->insert('krsbaru',$data);
        if ($insert){
            return TRUE;
        }
        else 
        {
        return FALSE;
        }
    }  
    public function getdatakrs()
	{
        $query = $this->db->join('matakuliah','matakuliah.kode_mk=krsbaru.kode_mk')
        ->join('jadwal','jadwal.id_jadwal=krsbaru.kelas')
        ->where('nrp',$this->session->userdata('nrp'))
        ->get('krsbaru')->result_array();
        return $query;
    }
}