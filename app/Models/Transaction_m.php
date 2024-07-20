<?php namespace App\Models;
use CodeIgniter\Model;
 
class Transaction_m extends Model
{
    protected $table = 'Transaction_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


