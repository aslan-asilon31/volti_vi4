<?php namespace App\Models;
use CodeIgniter\Model;
 
class Product_m extends Model
{
    protected $table = 'product_sales';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


