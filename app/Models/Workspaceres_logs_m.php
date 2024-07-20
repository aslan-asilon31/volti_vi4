<?php namespace App\Models;
use CodeIgniter\Model;
 
class Workspaceres_logs_m extends Model
{
    protected $table = 'Workspaceres_logs_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


