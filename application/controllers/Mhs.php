<?php
class Mhs extends CI_Controller {

	function __construct(){
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

		if($this->session->userdata('login') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
        $nim=$this->session->userdata('login_data')->nomor_induk;
        $smt_aktif=$this->db->query("SELECT * FROM setup_aktif")->row();
        $mhs=$this->db->query("SELECT * FROM tbl_mahasiswa a join tb_jurusan b on a.id_jenjang=b.id_jurusan JOIN tb_jenjang c ON b.`id_jenjang`=c.`id_jenjang` where nim='$nim'")->row();
        $mk_daftar=$this->db->query("SELECT * FROM tb_matakuliah a 
        JOIN tb_jurusan b ON a.`id_jurusan`=b.`id_jurusan`
        JOIN tb_jenjang c ON b.`id_jenjang`=c.`id_jenjang`
        JOIN setup_smt d ON d.`id_smt`=a.`semester`
        join tbl_kelas_mk x on x.id_mk=a.id_mk
        JOIN tbl_ploting e ON e.`ploting_id_matakuliah`=x.`id`
        JOIN tbl_dosen f ON e.`ploting_id_dosen`=f.`id_dosen`
        JOIN tbl_jadwal_mk g ON x.`id`=g.`id_mk`
        JOIN tbl_jam h ON h.`id_jam`=g.`id_jam`
        JOIN tbl_hari i ON i.`id_hari`=g.`id_hari`
        JOIN tb_ruangan j ON j.`id`=g.`id_ruang`
        JOIN tbl_krs k ON k.`id_matakuliah`=x.`id`
        JOIN tbl_mahasiswa l ON l.`nim`=k.`nim`
        WHERE l.nim='$nim' and a.status='1' and a.semester='$smt_aktif->smt' and a.tahun_ajaran='$smt_aktif->ta' and ploting_status='Y' order by id_jadwal_mk desc,nama_jenjang,nama_jurusan,nama_mk")->result();
        $jadwal=$this->db->query("select * from tbl_jadwal_krs where id_jurusan='$mhs->id_jenjang'")->row();
		$data = array(
            'judul' => 'Input KRS',
            'content' => 'mhs/krs',
            'mk_daftar' => $mk_daftar,
            'jadwal' => $jadwal,
            'mhs' => $mhs,
        );
        $this->load->view('layout/layout',$data);
	}
    
	function list_krs(){
        $nim=$this->session->userdata('login_data')->nomor_induk;
        $smt_aktif=$this->db->query("SELECT * FROM setup_aktif")->row();
        $mhs=$this->db->query("SELECT *,c.id_jenjang as jenjang,b.id_jurusan as jurusan FROM tbl_mahasiswa a join tb_jurusan b on a.id_jenjang=b.id_jurusan JOIN tb_jenjang c ON b.`id_jenjang`=c.`id_jenjang` where nim='$nim'")->row();
        $mk_daftar=$this->db->query("SELECT *,x.id as id_kelas FROM tb_matakuliah a 
        JOIN tb_jurusan b ON a.`id_jurusan`=b.`id_jurusan`
        JOIN tb_jenjang c ON b.`id_jenjang`=c.`id_jenjang`
        JOIN setup_smt d ON d.`id_smt`=a.`semester`
        join tbl_kelas_mk x on x.id_mk=a.id_mk
        JOIN tbl_ploting e ON e.`ploting_id_matakuliah`=x.`id`
        JOIN tbl_dosen f ON e.`ploting_id_dosen`=f.`id_dosen`
        JOIN tbl_jadwal_mk g ON x.`id`=g.`id_mk`
        JOIN tbl_jam h ON h.`id_jam`=g.`id_jam`
        JOIN tbl_hari i ON i.`id_hari`=g.`id_hari`
        JOIN tb_ruangan j ON j.`id`=g.`id_ruang`
        WHERE b.id_jurusan='$mhs->jurusan' and a.status='1' and a.semester='$smt_aktif->smt' and a.tahun_ajaran='$smt_aktif->ta' and ploting_status='Y' order by id_jadwal_mk desc,nama_jenjang,nama_jurusan,nama_mk")->result();

		$data = array(
            'judul' => 'List KRS',
            'content' => 'mhs/list',
            'mk_daftar' => $mk_daftar,
            'nim' => $nim,
        );
        $this->load->view('layout/layout',$data);
	}
    
	function krs_save(){
        $nim=$this->input->post('nim');
        $id_mk=$this->input->post('id_mk');
        foreach($id_mk as $data){
            $data = array(
                    'nim' => $nim,
                    'id_matakuliah' => $data,
                    'status_krs' => 'N',
            );

            $this->db->insert('tbl_krs', $data);
        }
        redirect(base_url("mhs/index"));
    }
    
	function krs_delete(){
        $id=$this->input->get("id");
        $nim=$this->input->get("nim");
        $this->db->where('id_krs', $id);
        $this->db->delete('tbl_krs');
        redirect(base_url("mhs/index"));
	}

}