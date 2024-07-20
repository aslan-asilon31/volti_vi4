<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_status_m extends Model
{
    protected $table = 'Res_status_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


