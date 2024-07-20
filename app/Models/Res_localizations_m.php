<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_localizations_m extends Model
{
    protected $table = 'Res_localizations_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


