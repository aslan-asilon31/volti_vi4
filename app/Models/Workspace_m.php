<?php namespace App\Models;
use CodeIgniter\Model;
 
class Workspace_m extends Model
{
    protected $table = 'Workspace_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


