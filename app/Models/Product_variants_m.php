<?php namespace App\Models;
use CodeIgniter\Model;
 
class Product_variants_m extends Model
{
    protected $table = 'Product_variants_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


