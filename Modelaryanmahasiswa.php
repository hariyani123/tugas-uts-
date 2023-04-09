<?php namespace App\Models;

use CodeIgniter\Model;

class Modelaryanmahasiswa extends Model
{
    //table name
    protected $table = "aryan_mahasiswa";

    //allowed fields
    protected $allowedFields = 
    [
        'nama_mahasiswa',
        'fakultas_aryam',
        'nim_mahsiswa'
    ];

    public function getaryan_mahasiswa()
    {
        return $this->findAll();
    }


    public function getaryan_mahasiswaById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['aryan_id' => $aryan_id]);
        }   
    }
	
	public function updatearyanmahasiswa($data, $aryan_id)
    {
        $query = $this->db->table($this->table)->update($data, array('aryan_id' => $aryan_id));
        return $query;
    }
	
	public function deletearyanmahasiswa($aryan_id)
    {
        $query = $this->db->table($this->table)->delete(array('aryan_id' => $aryan_id));
        return $query;
    }

    public function insertaryanmahasiswa($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}

?>