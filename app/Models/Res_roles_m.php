<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_roles_m extends Model
{
    protected $table = 'Res_roles_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


