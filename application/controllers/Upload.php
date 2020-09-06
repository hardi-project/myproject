<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	function __construct(){
		parent::__construct();

			$this->load->model('m_scafol');
	}

	public function index(){
		$data['scafol_tabel'] = $this->db->query
		("select * from scafol_tabel order by id_dokumen desc
		limit 10")->result();

		$this->load->view('crud',$data);

	}

	function scafol_tabel(){
       $data['scafol_tabel'] = $this->m_scafol->get_data('scafol_tabel')->result();
       $this->load->view('crud',$data);
    }

	function hapus($id){
      $where = array('id_dokumen' => $id);
		    $this->m_scafol->delete_data($where,'scafol_tabel');
		      redirect(base_url().'upload/scafol_tabel');
	}

	function tambah(){
		$this->load->view('tambahdokumen');
	}

	function download($id){
	$data = $this->db->get_where('scafol_tabel',['id_dokumen'=>$id])->row();
	$this->load->helper('download');
	$this->load->helper('file');
	force_download('assets/upload/'.$data->nama_dokumen,NULL);
	}


		function upload_image()
		{
			$tanggal = date("Y-m-d, H:i:s");
			$nama_dokumen = $this->input->post('nama_dokumen');

		  	$config['upload_path'] = './assets/upload/';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		    $config['encrypt_name'] = false;

		    $this->load->library('upload',$config);
		    for ($i=1; $i <=5 ; $i++) {
		    	if(!empty($_FILES['nama_dokumen'.$i]['name'])){
		    		if(!$this->upload->do_upload('nama_dokumen'.$i))

		    			$this->upload->display_errors();
							else
		    				$dokumen=$this->upload->data();
									$data = array(
												'tanggal' => $tanggal,
												'nama_dokumen' => $dokumen['file_name']
															);
								$this->m_scafol->insert_data($data,'scafol_tabel');


		    	}
		    }
				redirect(base_url().'upload/scafol_tabel');
		}
}
