<?php
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    public function AllUser()
    {
        $sql = "SELECT * FROM user";
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function GetUserLogin($Email, $Password)
    {
        $sql = "SELECT * FROM user WHERE Email='$Email' AND Password = '$Password'";
        $query = $this->db->query($sql);
        return $query->getResult(); 
    }

    public function GetUserReply($userID)
    {
        $sql = "SELECT * FROM user WHERE ID <> '$userID' AND Role <> 'admin'";
        $query = $this->db->query($sql);
        return $query->getResult(); 
    }

    public function detail_user ($id)
    {
        $sql="SELECT * FROM user WHERE id='$id'";
        $query = $this->db->query($sql);
        $result = $query->getResult();
        return (count($result) > 0 ? $result[0] : null );
    }

    public function Edit_user($id,$Nama,$Email,$Password,$Alamat,$Telepon)
    {
        $sql ="Update user set Nama='$Nama',Email='$Email',Password='$Password',Alamat='$Alamat',Telepon='$Telepon' where id='$id' ";
        $query = $this->db->query($sql);
        return $this->db->affectedRows();
    }

    public function createuser($Nama,$Email,$Password,$Alamat,$Telepon,$CRE_DATE,$CRE_BY,$MOD_DATE,$MOD_BY,$Foto)
    {
        $sql="INSERT into user (Nama,Email,Password,Alamat,Telepon,CRE_DATE,CRE_BY,MOD_DATE,MOD_BY,Foto)  VALUES('$Nama','$Email','$Password','$Alamat','$Telepon','$CRE_DATE','$CRE_BY','$MOD_DATE','$MOD_BY','$Foto')";
        $query=$this->db->query($sql);
        return $this->db->affectedRows();
    }

    public function DeleteUser($id)
    {
        $sql = "DELETE FROM user WHERE ID='$id'";
        $query = $this->db->query($sql);
        return $this->db->affectedRows();
    }



}
