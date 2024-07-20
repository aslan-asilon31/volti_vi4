<?php namespace App\Models;
use CodeIgniter\Model;
 
class Social_account_m extends Model
{
    protected $table = 'Social_account_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


