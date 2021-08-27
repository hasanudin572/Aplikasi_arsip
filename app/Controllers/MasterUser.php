<?php namespace App\Controllers;

use App\Models\User;

class MasterUser extends BaseController
{

	public function __construct()
	{
		if(empty(session()->get('userID')))
		{
			redirect()->to(site_url('Auth/Login'));
		}
	}

    public function index()
	{
		$user = new User();
        $data['listUser'] = $user->AllUser();
		return view('User/index', $data);
	}
	
	public function create()
	{
		return view('user/create');
	}
	public function prosesCreate()
    {
		$Nama    		=$this->request->getPost('Nama');
		$Email    		=$this->request->getPost('Email');
		$Password 	   	=$this->request->getPost('Password');
		$Alamat   		=$this->request->getPost('Alamat');
		$Telepon     	=$this->request->getPost('Telepon');
		$CRE_DATE      	=$this->request->getPost('CRE_DATE');
		$CRE_BY    		=$this->request->getPost('CRE_BY');
		$MOD_DATE      	=$this->request->getPost('MOD_DATE');
		$MOD_BY    		=$this->request->getPost('MOD_BY');
		$Foto       	=$this->request->getPost('Foto');
     
        $user = new User(); // Memanggil Model
        $insert = $user->createuser($Nama, $Email, $Password,$Alamat,$Telepon,$CRE_DATE,$CRE_BY,$MOD_DATE,$MOD_BY,$Foto); // Menginput data ke database
        $status = ($insert > 0 ? 'success' : 'danger'); // Cek apakah data sudah masuk database
		$pesan = ($insert > 0 ? 'Berhasil menambahkan postingan' : 'Gagal menambahkan postingan!'); // Cek apakah data sudah masuk database

        // Redirect balik ke halaman Index
        return redirect()->to(site_url('MasterUser/index'))->with('status', $status)->with('pesan', $pesan);
    }

	public function edit($id)
	{
		$user = new User ();
		$data['detail_user'] = $user->detail_user($id);
		return view('User/editUser', $data);
	}

	public function prosesedit()
    {
		$id    			=$this->request->getPost('id');
		$Nama    		=$this->request->getPost('Nama');
		$Email    		=$this->request->getPost('Email');
		$Password 	   	=$this->request->getPost('Password');
		$Alamat   		=$this->request->getPost('Alamat');
		$Telepon     	=$this->request->getPost('Telepon');
	
		$user = new User();
		$update = $user->Edit_user($id,$Nama, $Email, $Password, $Alamat,$Telepon);
		
		$status = ($update > 0 ? 'success' : 'danger'); // Cek apakah data sudah masuk database
        $pesan = ($update > 0 ? 'Berhasil mengubah postingan' : 'Gagal mengubah postingan!'); // Cek apakah data sudah masuk database

        // Redirect balik ke halaman Index
        return redirect()->to(site_url('MasterUser/index'))->with('status', $status)->with('pesan', $pesan);
    }
	
	public function delete($id)
    {
		$user = new User();
		$delete = $user->DeleteUser($id);
		
		$status = ($delete > 0 ? 'success' : 'danger'); // Cek apakah data sudah masuk database
        $pesan = ($delete > 0 ? 'Berhasil mengubah postingan' : 'Gagal mengubah postingan!'); // Cek apakah data sudah masuk database

        // Redirect balik ke halaman Index
        return redirect()->to(site_url('MasterUser/index'))->with('status', $status)->with('pesan', $pesan);
	}
	
	
		
	
}
