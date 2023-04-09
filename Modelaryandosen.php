<?php namespace App\Models;

use CodeIgniter\Model;

class Modelaryandosen extends Model
{
    //table name
    protected $table = "aryan_dosen";

    //allowed fields
    protected $allowedFields = 
    [
        'nama_dosen',
        'mk_dosen',
        'email_dosen'
    ];

    public function getaryandosen()
    {
        return $this->findAll();
    }


    public function getaryandosenById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['id' => $id]);
        }   
    }
	
	public function updatearyandosen($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
	
	public function deletearyandosen($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function insertaryandosen($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}

?>