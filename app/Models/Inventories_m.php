<?php namespace App\Models;
use CodeIgniter\Model;
 
class Inventories_m extends Model
{
    protected $table = 'inventories';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


