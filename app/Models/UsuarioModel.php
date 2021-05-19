<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nome', 'login', 'senha'];
	
	protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
		
	public function get($id = null)
	{
		if($id <> null)
		{
			return $this->find($id);
				
		}
		
		return $this->find();
	
	}	

	
}

