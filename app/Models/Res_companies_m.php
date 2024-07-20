<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_companies_m extends Model
{
    protected $table = 'Res_companies_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


