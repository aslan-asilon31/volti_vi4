<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_prices_m extends Model
{
    protected $table = 'Res_prices_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


