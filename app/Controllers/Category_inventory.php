<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\product_welcome;
 
class Category_inventory extends BaseController
{
    public function index()
    {
        return view('inventory/product_list');
    }

}