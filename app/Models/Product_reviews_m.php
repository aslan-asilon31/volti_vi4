<?php namespace App\Models;
use CodeIgniter\Model;
 
class Product_reviews_m extends Model
{
    protected $table = 'product_reviews';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


