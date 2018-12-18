<?php
class Krs extends CI_Controller {

	function __construct(){
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

		if($this->session->userdata('login') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data = array(
            'judul' => 'Input KRS',
            'content' => 'krs/index',
        );
        $this->load->view('layout/layout',$data);
	}
	function search(){
        $nim=$this->input->get("nim");
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
        
		$data = array(
            'judul' => 'Input KRS',
            'content' => 'krs/search',
            'mk_daftar' => $mk_daftar,
            'mhs' => $mhs,
        );
        $this->load->view('layout/layout',$data);
	}
	function list_krs(){
        $nim=$this->input->get("nim");
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
            'content' => 'krs/list',
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
                    'status_krs' => 'Y',
            );

            $this->db->insert('tbl_krs', $data);
        }
        redirect(base_url("krs/search?nim=".$nim));
    }
    
	function krs_delete(){
        $id=$this->input->get("id");
        $nim=$this->input->get("nim");
        $this->db->where('id_krs', $id);
        $this->db->delete('tbl_krs');
        redirect(base_url("krs/search?nim=".$nim));
	}
	function krs_acc(){
        $id=$this->input->get("id");
        $nim=$this->input->get("nim");
        $data = array(
                'status_krs' => 'Y',
        );

        $this->db->where('id_krs', $id);
        $this->db->update('tbl_krs', $data);
        redirect(base_url("krs/search?nim=".$nim));
	}
	function krs_deny(){
        $id=$this->input->get("id");
        $nim=$this->input->get("nim");
        $data = array(
                'status_krs' => 'N',
        );

        $this->db->where('id_krs', $id);
        $this->db->update('tbl_krs', $data);
        redirect(base_url("krs/search?nim=".$nim));
	}
	function jadwal(){
        $prodi=$this->db->query("select * from tb_jurusan a join tb_jenjang b on a.id_jenjang=b.id_jenjang join tbl_jadwal_krs c on c.id_jurusan=a.id_jurusan")->result();
		$data = array(
            'judul' => 'Jadwal KRS',
            'content' => 'krs/jadwal',
            'prodi' => $prodi,
        );
        $this->load->view('layout/layout',$data);
	}
	function jadwal_save(){
        $id_jadwal=$this->input->post("id_jadwal_krs");
        $tgl_awal=$this->input->post("date");
        $tgl_akhir=$this->input->post("date_end");
        $data = array(
                'tgl_awl_krs' => $tgl_awal,
                'tgl_akr_krs' => $tgl_akhir
        );

        $this->db->where('id_jadwal_krs', $id_jadwal);
        $this->db->update('tbl_jadwal_krs', $data);
        redirect('krs/jadwal');
	}

}