<?php namespace App\Models;
use CodeIgniter\Model;
 
class Product_sales_m extends Model
{
    protected $table = 'Product_sales_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


