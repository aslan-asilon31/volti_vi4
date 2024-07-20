<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_brands_m extends Model
{
    protected $table = 'Res_brands_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


