<?php
namespace App\Controllers;

use App\Models\Mail as MailModel;
use App\Models\User as UserModel;

class Mail extends BaseController
{
	protected $user;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->user = session()->get('userData');
	}


	public function proses_create_mail()
	
	{
		$Nomor_surat	=$this->request->getPost('Nomor_surat');
		$Dari			=$this->user->ID; //$this->request->getPost('Dari');
		$Kepada    		=$this->request->getPost('Kepada');
		$Judul_surat    =$this->request->getPost('Judul_surat');
		$Isi_surat 	   	=$this->request->getPost('Isi_surat');
		$Tanggal_surat  =$this->request->getPost	('Tanggal_surat');
		$Tanggal_kirim  =$this->request->getPost('Tanggal_kirim');
    
        $surat = new MailModel(); // Memanggil Model
        $insert = $surat->createmail($Nomor_surat,$Dari,$Kepada,$Judul_surat,$Isi_surat,$Tanggal_surat,$Tanggal_kirim); // Menginput data ke database
        $status = ($insert > 0 ? 'success' : 'danger'); // Cek apakah data sudah masuk database
		$pesan = ($insert > 0 ? 'Berhasil menambahkan postingan' : 'Gagal menambahkan postingan!'); // Cek apakah data sudah masuk database

        // Redirect balik ke halaman Index
        return redirect()->to(site_url('Mail/outbox'))->with('status', $status)->with('pesan', $pesan);
    }


	public function inbox()
	{
		$mail = new MailModel($iduser);
		$data['listInbox'] = $mail->getInbox($this->user->ID);
		$user = new UserModel();
		$data['listReply'] = $user->GetUserReply($this->user->ID);
		return view('pages/email_masuk',$data);
	}

	public function outbox()
	{
		$mail = new MailModel($iduser);
		$data['listoutbox'] = $mail->getOutbox($this->user->ID);
		$user = new UserModel();
		$data['listReply'] = $user->GetUserReply($this->user->ID);
		return view('pages/email_keluar',$data);

	}
	public function draft() // pemanggilan
	{
		return view('pages/draft');
	}
	public function detail_s($idSurat) // pemanggilan
	{
		return view('pages/detail_surat');
	}
}
