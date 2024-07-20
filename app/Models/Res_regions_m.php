<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_regions_m extends Model
{
    protected $table = 'Res_regions_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


