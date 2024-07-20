<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_banks_m extends Model
{
    protected $table = 'Res_banks_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


