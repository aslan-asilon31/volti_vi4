<?php namespace App\Models;
use CodeIgniter\Model;
 
class Res_images_m extends Model
{
    protected $table = 'Res_images_m';
     
    public function getAll()
    {
        return $this->findAll();  
    }
    
 }


