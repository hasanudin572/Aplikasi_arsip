<?php namespace App\Models;

use CodeIgniter\Model;

class Mail extends Model {
    
    public function getInbox($iduser)
    {
        $sql = "select a.ID,a.Nomor_surat,a.Judul_surat,a.Isi_surat,b.Nama,a.Tanggal_surat from surat a  left join user b on a.Kepada=b.ID  where a.Kepada='$iduser'";
        $query = $this->db->query($sql);

        return $query->getResult();
    }

    public function getOutbox($iduser)
    {
        $sql = "select a.ID,a.Nomor_surat,a.Judul_surat,a.Isi_surat,b.Nama,a.Tanggal_surat from surat a  left join user b on a.Kepada=b.ID  where a.Dari='$iduser'";
        $query = $this->db->query($sql);

        return $query->getResult();
    }


public function createmail($Nomor_surat,$Dari,$Kepada,$Judul_surat,$Isi_surat,$Tanggal_surat,$Tanggal_kirim)
    {
        $sql="INSERT into surat (Nomor_surat,Dari,Kepada,Judul_surat,Isi_surat,Tanggal_surat,Tanggal_kirim)  VALUES('$Nomor_surat','$Dari','$Kepada','$Judul_surat','$Isi_surat','$Tanggal_surat','$Tanggal_kirim')";
        $query=$this->db->query($sql);
        return $this->db->affectedRows();
    }


    
}