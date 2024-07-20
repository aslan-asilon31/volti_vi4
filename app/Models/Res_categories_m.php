<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_categories_m extends Model
{
    protected $table = 'Res_categories_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


